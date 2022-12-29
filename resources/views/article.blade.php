@extends('components.layout', ['articles' => ($articles = App\Models\Article::all())])

@section('content')
    <section class="font-montserrat mt-20">
        <div class="flex flex-col justify-center items-center mb-10">
            <div class="flex flex-row justify-center items-center">
                @foreach ($article->categories as $category)
                    <a href="{{ url('/categories/' . $category->id) }}"
                        class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
            <h1 class="font-bold text-3xl mb-1">{{ $article->title }}</h1>
            <p class="text-dark/[60%] mb-10">Mappa's most anticipated anime of the year</p>
            <p class="text-highlight font-bold mb-16">By {{ $article->user->name }}</p>
            <img src={{ asset($article->picture) }} class="w-[90vw] h-[75vh] p-3 rounded">
        </div>
        <div class="flex flex-row justify-around">
            <div class="flex flex-row">
                4 Minutes Read
            </div>
            <div class="flex flex-col w-[40vw] mr-5">
                <p class="mb-5">
                    {{ $article->content }}
                </p>
                <div class="mt-16 flex flex-row">
                    <p class="text-highlight font-bold">
                        {{ count($article->likes) }}
                    </p>
                    <p>&nbsp;Likes &nbsp;&nbsp;&nbsp;-</p>
                    <p class="ml-5 text-highlight font-bold">
                        {{ count($article->comments) }}
                    </p>
                    &nbsp;Comments
                </div>
            </div>
            <div class="flex flex-col items-center">
                <img src={{ asset($article->user->profilePicture) }} class="mb-5 w-[50px] h-[50px] rounded-full">
                <img src={{ asset('images/akar-icons_link-chain.png') }} class="mb-5 w-[40px] h-[40px]">
                <img src={{ asset('images/ant-design_edit-outlined.png') }} class="mb-5 w-[40px] h-[40px]">
                <img src={{ asset('images/akar-icons_heart.png') }} class="mb-5 w-[40px] h-[40px]">
                <button data-bs-toggle="modal" data-bs-target="#comment">
                    <img src={{ asset('images/bx_comment.png') }} class="mb-5 w-[40px] h-[40px]">
                </button>
                <div class="modal fade fixed top-[0px] left-0 hidden w-[100vw] h-[100vh] overflow-x-hidden overflow-y-auto"
                    id="comment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog relative w-auto pointer-events-none">
                        <div class="modal-content pointer-events-auto bg-white rounded">
                            <div class="modal-header flex flex-row items-center justify-between px-8 pt-8">
                                <h1 class="font-bold text-4xl pt-5">Comments</h1>
                                <button type="button" class="text-5xl text-black" data-bs-dismiss="modal"
                                    aria-label="Close"><i class="fa-regular fa-x"></i></button>
                            </div>
                            <div class="modal-body relative font-montserrat">
                                @auth
                                    <form class="flex flex-col p-8" method="POST" enctype="multipart/form-data"
                                        action="{{ url('/comments/' . $article->id) }}">
                                        @csrf
                                        <label class="font-medium mb-2">Write Comment</label>
                                        <textarea id="comment" name="comment" placeholder="Comment" class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]"></textarea>
                                        @if ($errors->has('comment'))
                                            <label class="mb-3 text-red-500 text-sm">{{ $errors->first('comment') }}</label>
                                        @endif
                                        <button
                                            class="px-5 py-3 bg-highlight font-bold text-white rounded hover:bg-dark hover:text-highlight transition-all ease-in duration-75"
                                            data-bs-dismiss="modal">COMMENT</button>
                                    </form>
                                @endauth

                                <div class="flex flex-col">
                                    <div class="flex flex-col">
                                        @foreach ($article->comments as $comment)
                                            <hr>
                                            <div class="flex flex-row px-8 py-4 items-center">
                                                <img src={{ asset('images/author-image.png') }}
                                                    class="w-[50px] h-[50px] mr-5">
                                                <div class="flex flex-col">
                                                    <div class="font-medium text-xl text-black">
                                                        {{ $comment->user->name }}
                                                    </div>
                                                    <div class="font-medium text-l text-dark/[50%]">
                                                        @php
                                                            $now = \Carbon\Carbon::now();
                                                            $days = $now->diffInDays($comment->created_at);
                                                        @endphp
                                                        @if ($days == 0)
                                                            @php
                                                                $hours = $now->diffInHours($comment->created_at);
                                                            @endphp
                                                            @if ($hours == 0)
                                                                @php
                                                                    $minutes = $now->diffInMinutes($comment->created_at);
                                                                @endphp
                                                                @if ($minutes == 0)
                                                                    @php
                                                                        $seconds = $now->diffInSeconds($comment->created_at);
                                                                    @endphp
                                                                    {{ $seconds }}
                                                                    @if ($seconds == 1)
                                                                        Second Ago
                                                                    @else
                                                                        Seconds Ago
                                                                    @endif
                                                                @else
                                                                    {{ $minutes }}
                                                                    @if ($minutes == 1)
                                                                        Minute Ago
                                                                    @else
                                                                        Minutes Ago
                                                                    @endif
                                                                @endif
                                                            @else
                                                                {{ $hours }}
                                                                @if ($hours == 1)
                                                                    Hour Ago
                                                                @else
                                                                    Hours Ago
                                                                @endif
                                                            @endif
                                                        @else
                                                            @if ($days <= 30)
                                                                {{ $days }}
                                                                @if ($days == 1)
                                                                    Day Ago
                                                                @else
                                                                    Days Ago
                                                                @endif
                                                            @else
                                                                @php
                                                                    $months = (int) ($days / 30);
                                                                @endphp
                                                                @if ($months <= 12)
                                                                    {{ $months }}
                                                                    @if ($months == 1)
                                                                        Month Ago
                                                                    @else
                                                                        Months Ago
                                                                    @endif
                                                                @else
                                                                    {{ (int) ($months / 12) }}
                                                                    @if ($months / 12 == 1)
                                                                        Year Ago
                                                                    @else
                                                                        Years Ago
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-8 font-poppins text-m mb-4">
                                                {{ $comment->content }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col px-20 mb-16">
            <h1 class="font-bold text-3xl mb-5">Related Articles</h1>
            @if (count($articles) <= 0)
                <h1 class="font-bold text-3xl mb-5">No Related Articles</h1>
            @else
                <div class="grid grid-cols-3 gap-10">
                    @foreach ($articles as $article)
                        <x-article-card-large :article="$article"></x-article-card-large>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
