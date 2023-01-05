@extends('components.layout')

@section('content')
    <section>
        <div id="carouselCaptions" class="group carousel slide relative font-montserrat" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            @php
                $item = 0;
            @endphp

            <div class="carousel-inner relative w-full overflow-hidden">
                @foreach ($carouselArticles as $article)
                    <div class=" carousel-item {{ $item++ == 0 ? 'active' : '' }} float-left w-full">
                        <a href="{{ url('/article/' . $article->id) }}" class="w-full">
                            <div
                                class="absolute h-full w-full z-0 bg-[url({{ asset($article->picture) }})] bg-cover bg-center bg-no-repeat transform group-hover:scale-105 transform transition-transform duration-200 ease-in">
                            </div>
                            <div class="text-center relative z-1">
                                <div
                                    class="h-[85vh] flex flex-col justify-center items-center z-2 bg-dark bg-opacity-80 w-full text-center">
                                    <h1
                                        class="text-highlight text-[4vw] mb-2 font-bold transform hover:scale-[102%] duration-75">
                                        {{ $article->title }}</h1>
                                    <a href="/user/{{ $article->user_id }}"
                                        class="hover:underline text-light text-[1.5vw] mb-8">{{ $article->user->name }}</a>
                                    <div class="flex flex-row gap-6">
                                        @foreach ($article->categories as $category)
                                            <a href="{{ url('/category/' . $category->id) }}"
                                                class="text-white font-bold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                                                {{ $category->name }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="flex flex-row font-montserrat max-w-screen-2xl w-5/6 gap-24 mx-auto my-24">
            <div class="flex flex-col w-full xl:w-4/6">
                <h1 class="text-black font-bold text-4xl mb-12">Recent Article</h1>
                @foreach ($articles as $article)
                    <x-article-card :article="$article"></x-article-card>
                @endforeach
                {{ $articles->links() }}
            </div>
            <div class="sticky self-start top-6 hidden xl:flex xl:flex-col gap-12 w-2/6">
                <div>
                    <h1 class="text-xl font-bold mb-6">Discover by Categories</h1>
                    <div class="flex flex-row flex-wrap">
                        @foreach ($categories as $category)
                            <a href="{{ url('/categories/' . $category->id) }}"
                                class="text-white text-sm font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <div>
                    <h1 class="text-xl font-bold mb-6">Check out these authors</h1>
                    <div class="flex flex-col gap-4">
                        @foreach ($users->slice(0, 3) as $user)
                            <x-author-card-small :user="$user"></x-author-card-small>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
