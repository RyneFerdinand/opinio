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

                        <button onclick="toggleLike()" type="button"
                            class="w-12 aspect-square group cursor-pointer hover:bg-dark transition-all ease-in duration-75 bg-white rounded-md flex items-center justify-center">
                            <i
                                class="like-filled fas fa-heart group-hover:text-highlight transition-all ease-in duration-75 hidden"></i>
                            <i
                                class="like-not-filled fa-regular fa-heart group-hover:text-highlight transition-all ease-in duration-75"></i>
                        </button>
                    </div>

                    <div class="flex flex-row gap-4 my-12">
                        <div class="flex gap-2">
                            <p id="like-count" class="text-highlight font-bold">
                                {{ count($article->likes) }}
                            </p>
                            <p>Likes</p>
                        </div>
                        <div class="flex gap-2">
                            <p class="ml-5 text-highlight font-bold">
                                {{ count($article->comments) }}
                            </p>
                            <p>
                                Comments
                            </p>
                        </div>
                    </div>

                    <x-comment-section :article="$article" />
                </div>
                <div class="hidden lg:flex flex-col sticky top-6 aspect-square items-center gap-4 ml-12 ">
                    <a href="/user/{{ $article->user_id }}" class="overflow-hidden rounded-full">
                        <img src={{ asset($article->user->profilePicture) }}
                            class="w-[80px] aspect-square rounded-full object-cover cursor-pointer transform hover:scale-110 transition-transform ease-in duration-75">
                    </a>
                    <button onclick="copyURLToClipboard()" type="button"
                        class="group cursor-pointer hover:bg-dark w-4/5 aspect-square transition-all ease-in duration-75 bg-white rounded-md flex items-center justify-center">
                        <i class="fas fa-link group-hover:text-highlight transition-all ease-in duration-75"></i>
                    </button>

                    <button onclick="toggleLike()" type="button"
                        class="w-4/5 aspect-square group cursor-pointer hover:bg-dark transition-all ease-in duration-75 bg-white rounded-md flex items-center justify-center">
                        <i
                            class="like-filled fas fa-heart group-hover:text-highlight transition-all ease-in duration-75 hidden"></i>
                        <i
                            class="like-not-filled fa-regular fa-heart group-hover:text-highlight transition-all ease-in duration-75"></i>
                    </button>
                </div>
            </div>
            <script>
                let isLiked = {!! json_encode($isLiked) !!};
                const articleId = {!! json_encode($article->id) !!}
                let currentCount = {!! json_encode(count($article->likes)) !!}
                let csrf = '';

                let filled = null;
                let notFilled = null;
                let likeCount = null;

                window.onload = () => {
                    filled = document.querySelectorAll('.like-filled');
                    notFilled = document.querySelectorAll(".like-not-filled");

                    likeCount = document.getElementById("like-count");
                    csrf = document.querySelector('meta[name="_token"]').content;

                    if (isLiked) {
                        toggleFill();
                    } else {
                        toggleUnfill();
                    }

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
                        currentCount++;
                    } else {
                        toggleUnfill();
                        currentCount--;
                    }

                    likeCount.innerHTML = currentCount;
                }
            </script>

            <div class="flex flex-col w-full mt-24">
                <h1 class="font-bold text-3xl mb-5">Related Articles</h1>
                @if (count($articles) <= 0)
                    <h1 class="font-bold text-3xl mb-5">No Related Articles</h1>
                @else
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($articles as $article)
                            <x-article-card-large :article="$article"></x-article-card-large>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
