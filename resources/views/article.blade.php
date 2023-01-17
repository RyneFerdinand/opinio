@extends('components.layout')

@section('content')
    <meta name="_token" content="{{ csrf_token() }}">
    <section class="py-24">
        <div class="font-montserrat mx-auto w-5/6 max-w-screen-2xl">
            <div class="flex flex-col text-center justify-center items-center">
                <div class="flex flex-row gap-6 mb-8">
                    @foreach ($article->categories as $category)
                        <a href="{{ url('/category/' . $category->id) }}"
                            class="text-white font-bold px-4 py-2 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
                <h1 class="font-bold text-5xl mb-4">{{ $article->title }}</h1>
                <p class="text-dark/[60%] text-2xl">{{ $article->subtitle }}</p>
                <p class="text-highlight font-bold mt-8 text-xl">By {{ $article->user->name }}</p>
            </div>
            <div class="w-full h-[80vh] rounded-md my-10 overflow-hidden">
                <img src={{ asset($article->picture) }}
                    class="object-cover transform w-full h-full hover:scale-105 transition-transform duration-200 ease-in">
            </div>

            <div class="flex flex-col lg:flex-row gap-8 items-start mt-16">
                <div class="flex items-center gap-8 font-poppins w-3/12">
                    <p>
                        {{round(str_word_count($article->content) / 200)}} Minutes Read
                    </p>
                    <span class="w-12 h-[1px] bg-black hidden lg:block"></span>
                </div>

                <div class="flex flex-col w-full">
                    <p class="font-poppins text-lg">
                        {!! nl2br($article->content) !!}
                    </p>
                    <div class="lg:hidden flex items-center gap-4 mt-12">
                        <a href="/user/{{ $article->user_id }}" class="group flex items-center mr-auto gap-4">
                            <div class="overflow-hidden rounded-full aspect-square">
                                <img src={{ asset($article->user->profilePicture) }}
                                    class="w-16 aspect-square rounded-full object-cover cursor-pointer transform hover:scale-110 transition-transform ease-in duration-75">
                            </div>
                            <p class="font-semibold group-hover:underline">{{ $article->user->name }}</p>

                        </a>
                        <button onclick="copyURLToClipboard()" type="button"
                            class="group cursor-pointer hover:bg-dark w-12 aspect-square transition-all ease-in duration-75 bg-white rounded-md flex items-center justify-center">
                            <i class="fas fa-link group-hover:text-highlight transition-all ease-in duration-75"></i>
                        </button>

                        @auth
                            <button onclick="toggleLike()" type="button"
                                class="w-4/5 aspect-square group cursor-pointer hover:bg-dark transition-all ease-in duration-75 bg-white rounded-md flex items-center justify-center">
                                <i
                                    class="like-filled fas fa-heart group-hover:text-highlight transition-all ease-in duration-75 hidden"></i>
                                <i
                                    class="like-not-filled fa-regular fa-heart group-hover:text-highlight transition-all ease-in duration-75"></i>
                            </button>
                        @endauth
                    </div>

                    <div class="flex flex-row gap-4 my-12">
                        <div class="flex gap-2">
                            <p id="like-count" class="text-highlight font-bold">
                                {{ count($article->likes) }}
                            </p>
                            <p>Likes</p>
                        </div>
                        <div class="flex gap-2">
                            <p id="comment-count" class="ml-5 text-highlight font-bold">
                                {{ count($article->comments) }}
                            </p>
                            <p>
                                Comments
                            </p>
                        </div>
                    </div>

                    <x-comment-section :article="$article"/>
                </div>
                <div class="hidden lg:flex flex-col sticky top-6 aspect-square items-center gap-4 ml-12">
                    <a href="/user/{{ $article->user_id }}" class="overflow-hidden rounded-full">
                        <img src={{ asset($article->user->profilePicture) }}
                            class="w-[80px] aspect-square rounded-full object-cover cursor-pointer transform hover:scale-110 transition-transform ease-in duration-75">
                    </a>
                    <button onclick="copyURLToClipboard()" type="button"
                        class="group cursor-pointer hover:bg-dark w-4/5 aspect-square transition-all ease-in duration-75 bg-white rounded-md flex items-center justify-center">
                        <i class="fas fa-link group-hover:text-highlight transition-all ease-in duration-75"></i>
                    </button>
                    @auth
                        <button onclick="toggleLike()" type="button"
                            class="w-4/5 aspect-square group cursor-pointer hover:bg-dark transition-all ease-in duration-75 bg-white rounded-md flex items-center justify-center">
                            <i
                                class="like-filled fas fa-heart group-hover:text-highlight transition-all ease-in duration-75 hidden"></i>
                            <i
                                class="like-not-filled fa-regular fa-heart group-hover:text-highlight transition-all ease-in duration-75"></i>
                        </button>
                    @endauth
                </div>
            </div>
            <script>
                let isLiked = {!! json_encode($isLiked) !!};
                const articleId = {!! json_encode($article->id) !!}
                let currentLikesCount = {!! json_encode(count($article->likes)) !!}
                let csrf = '';
                let currentCommentsCount = {!! json_encode(count($article->comments)) !!}
                let user = {!! json_encode(Auth::user()) !!}
                let comments = {!! json_encode($article->comments) !!}

                let filled = null;
                let notFilled = null;
                let likeCount = null;
                let commentCount = null;
                let commentBox = null

                window.onload = () => {
                    filled = document.querySelectorAll('.like-filled');
                    notFilled = document.querySelectorAll(".like-not-filled");

                    likeCount = document.getElementById("like-count");
                    commentCount = document.getElementById("comment-count");
                    csrf = document.querySelector('meta[name="_token"]').content;
                    commentBox = document.getElementById('comment-box');

                    setInterval(updateTime, 1000)
                    if (isLiked) {
                        toggleFill();
                    } else {
                        toggleUnfill();
                    }

                }

                function updateTime(){
                    comments.forEach(comment => {
                        let currentDate = new Date().getTime();
                        let commentDate = new Date(comment.created_at).getTime();

                        let diffInMilisec = currentDate - commentDate;

                        let time = document.getElementById('comment-' + comment.id + '-time');

                        let days = Math.floor(diffInMilisec / 1000 / 60 / (60 * 24));

                        if (days == 0){
                            let hours = Math.floor(diffInMilisec / 1000 / 60 / 60);
                            if (hours == 0){
                                let minutes = Math.floor(diffInMilisec / 1000 / 60);
                                if (minutes == 0){
                                    let seconds = Math.floor(diffInMilisec / 1000);
                                    if (seconds <= 1){
                                        time.innerHTML = "A Second Ago";
                                    }
                                    else {
                                        time.innerHTML = seconds + " Seconds Ago";
                                    }
                                }
                                else {
                                    if (minutes <= 1){
                                        time.innerHTML = "A Minute Ago";
                                    }
                                    else {
                                        time.innerHTML = minutes + " Minutes Ago";
                                    }
                                }
                            }
                            else {
                                if (hours <= 1){
                                    time.innerHTML = "A Hour Ago";
                                }
                                else {
                                    time.innerHTML = hours + " Hours Ago";
                                }
                            }
                        }
                        else {
                            if (days <= 30){
                                if (days <= 1){
                                    time.innerHTML = "A Day Ago";
                                }
                                else {
                                    time.innerHTML = days + " Days Ago";
                                }
                            }
                            else {
                                let months = Math.floor(days / 30);
                                if (months <= 12){
                                    if (months <= 1){
                                        time.innerHTML = "A Month Ago";
                                    }
                                    else {
                                        time.innerHTML = months + " Months Ago";
                                    }
                                }
                                else {
                                    let years = Math.floor(days / 30 / 12);
                                    if (years <= 1){
                                        time.innerHTML = "A Year Ago";
                                    }
                                    else {
                                        time.innerHTML = years + " Years Ago";
                                    }
                                }
                            }
                        }
                    });
                }

                function toggleFill() {
                    filled.forEach(element => {
                        element.classList.remove('hidden');
                    });
                    notFilled.forEach(element => {
                        element.classList.add('hidden');
                    });
                }

                function toggleUnfill() {
                    filled.forEach(element => {
                        element.classList.add('hidden');
                    });
                    notFilled.forEach(element => {
                        element.classList.remove('hidden');
                    });
                }

                function copyURLToClipboard() {
                    navigator.clipboard.writeText(window.location.href);
                    alert('Link Copied !');
                }

                function toggleLike() {
                    fetch(`/like/${articleId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-Token': csrf
                        }
                    });

                    isLiked = !isLiked;

                    if (isLiked) {
                        toggleFill();
                        currentLikesCount++;
                    } else {
                        toggleUnfill();
                        currentLikesCount--;
                    }

                    likeCount.innerHTML = currentLikesCount;
                }

                function toggleDeleteComment(commentId){
                    fetch(`/comment/${commentId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-Token': csrf
                        }
                    });
                    div = document.getElementById('comment-' + commentId);
                    div.remove();

                    commentCount.innerHTML = --currentCommentsCount;
                    let index = 0;
                    comments.forEach(comment => {
                        if (comment.id == commentId){
                            comments.splice(index, 1);
                        }
                        index++;
                    });
                    updateTime;
                    setInterval(updateTime, 1000);
                }

                function toggleAddComment(articleId){
                    let comment = document.getElementById("comment").value;

                    if (comment.length === 0){
                        document.getElementById('comment-error').innerHTML = "You need to fill the comment!";
                    }
                    else {
                        document.getElementById('comment-error').innerHTML = "";
                        document.getElementById("comment").value = ""
                        let data = new FormData();
                        data.append("comment", comment);
                        fetch(`/comment/${articleId}`, {
                            method: 'POST',
                            body: data,
                            headers: {
                                'X-CSRF-Token': csrf
                            }
                        })
                        .then(response => response.json())
                        .then(result => {
                            comments.push(result);
                            div = document.createElement("div");
                            div.id = "comment-" + result.id;
                            div.classList.add('flex', 'items-start', 'gap-8');
                            div.innerHTML =
                            '<img class="rounded-full w-16 aspect-square" src="' + user.profilePicture + '" alt="">' +
                            '<div class="flex flex-col w-full">' +
                                '<div class="flex justify-between w-full">' +
                                    '<div>' +
                                        '<h4 class="font-bold text-lg">' + user.name + '</h4>' +
                                        '<p id="comment-' + result.id +'-time" class="font-light opacity-60 font-poppins">' +
                                            'A Second Ago' +
                                        '</p>' +
                                    '</div>' +
                                    '<button class="group hover:bg-dark py-2 px-3 aspect-square rounded-md cursor-pointer" onclick="toggleDeleteComment(' + result.id + ')">' +
                                        '<i class="fa fa-trash text-xl group-hover:text-highlight "></i>' +
                                    '</button>' +
                                '</div>' +
                                '<p class="mt-4">' +
                                    result.content
                                '</p>' +
                            '</div>' +
                            commentBox.prepend(div);
                        });
                    }
                    commentCount.innerHTML = ++currentCommentsCount;

                    updateTime;
                    setInterval(updateTime, 1000);
                }
            </script>

            <div class="flex flex-col w-full mt-24">
                <h1 class="font-bold text-3xl mb-5">Related Articles</h1>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($articles as $article)
                        <x-article-card-large :article="$article"></x-article-card-large>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
