@extends('components.layout', ['articles' => ($articles = App\Models\Article::all())])

@section('content')
    <section>
        <div id="carouselExampleIndicators" class="carousel slide relative font-montserrat" data-bs-ride="carousel">
            <div class="carousel-indicators relative flex justify-center p-0 mb-4 top-[75vh]">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
                @php
                    $item = 0;
                @endphp
                @foreach ($articles as $article)
                    <div class="carousel-item {{ $item++ == 0 ? 'active' : '' }} float-left w-full">
                        <a href="{{ url('/article/' . $article->id) }}" class="w-full">
                            <div class="bg-[url({{ asset($article->picture) }})] bg-cover bg-center bg-no-repeat">
                                <div
                                    class="h-[75vh] flex flex-col justify-center items-center z-2 bg-dark bg-opacity-80 w-full text-center">
                                    <h1 class="text-highlight text-[4vw] mb-2 font-bold text-center w-[75%]">
                                        {{ $article->title }}</h1>
                                    <h3 class="text-light text-[1.5vw] text-center">{{ $article->user->name }}</h3>
                                    <div class="flex flex-row justify-center items-center mt-10">
                                        @foreach ($article->categories as $category)
                                            <div href="{{ url('/category/' . $category->id) }}"
                                                class="text-white font-bold px-4 py-2 mr-16 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                                                {{ $category->name }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @if ($item == 3)
                    @break
                @endif
            @endforeach
        </div>
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="flex flex-row font-montserrat">
        <div class="flex flex-col pl-[5vw] mr-16">
            <h1 class="text-black font-bold text-5xl mt-20 mb-10">Recent Article</h1>
            @foreach ($articles as $article)
                <x-article-card :article="$article"></x-article-card>
            @endforeach
        </div>
        <div class="flex flex-col">
            <h1 class="text-xl font-bold pt-16 mb-10">Discover by Categories</h1>
            <div class="flex flex-row flex-wrap w-[25vw]">
                @foreach ($categories as $category)
                    <a href="{{ url('/categories/' . $category->id) }}"
                        class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
            <h1 class="text-xl font-bold pt-16 mb-10">Check out these authors</h1>
            @foreach ($users as $user)
                <x-author-card-small :user="$user"></x-author-card-small>
            @endforeach
        </div>
    </div>
</section>
@endsection
