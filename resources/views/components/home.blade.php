@extends('components.layout');

@section('content')
    <section>
        <div id="carouselExampleIndicators" class="carousel slide relative font-montserrat" data-bs-ride="carousel">
            <div class="carousel-indicators relative flex justify-center p-0 mb-4 top-[550px]">
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
            ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active float-left w-full">
                <div class="relative bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat">
                    <div class="bg-dark absolute opacity-40 h-[100%] w-[100%] z-1"></div>
                    <div class="relative h-[75vh] flex flex-col justify-center items-center z-2">
                        <h1 class="text-highlight text-[4vw] mb-2 font-bold">Airing of Chainsawman</h1>
                        <h3 class="text-light text-[1.5vw]">Kevin Bennett</h3>
                        <div class="flex flex-row justify-center items-center mt-10">
                            <a href="/" class="text-white font-bold px-4 py-2 mr-16 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                                Film
                            </a>
                            <a href="/" class="text-white font-bold px-4 py-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                                Review
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item float-left w-full">
                <div class="relative bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat">
                    <div class="bg-dark absolute opacity-40 h-[100%] w-[100%] z-1"></div>
                    <div class="relative h-[75vh] flex flex-col justify-center items-center z-2">
                        <h1 class="text-highlight text-[4vw] mb-2 font-bold">Airing of Chainsawman</h1>
                        <h3 class="text-light text-[1.5vw]">Kevin Bennett</h3>
                        <div class="flex flex-row justify-center items-center mt-10">
                            <a href="/" class="text-white font-bold px-4 py-2 mr-16 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                                Film
                            </a>
                            <a href="/" class="text-white font-bold px-4 py-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                                Review
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item float-left w-full">
                <div class="relative bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat">
                    <div class="bg-dark absolute opacity-40 h-[100%] w-[100%] z-1"></div>
                    <div class="relative h-[75vh] flex flex-col justify-center items-center z-2">
                        <h1 class="text-highlight text-[4vw] mb-2 font-bold">Airing of Chainsawman</h1>
                        <h3 class="text-light text-[1.5vw]">Kevin Bennett</h3>
                        <div class="flex flex-row justify-center items-center mt-10">
                            <a href="/" class="text-white font-bold px-4 py-2 mr-16 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                                Film
                            </a>
                            <a href="/" class="text-white font-bold px-4 py-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                                Review
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev"
                >
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next"
                >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="flex flex-row font-montserrat">
            <div class="flex flex-col pl-[5vw] mr-16">
                <h1 class="text-black font-bold text-5xl mt-20 mb-10">Recent Article</h1>
                <a href="/" class="flex flex-row w-[60vw] bg-white rounded drop-shadow mb-5">
                    <img src={{asset('images/article-cover-image.png')}} class="mr-5 w-[215px] h-[213px]">
                    <div class="flex flex-col justify-center">
                        <h1 class="font-bold text-3xl float-left mb-3">The World's Inflation</h1>
                        <p class="font-poppins mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec quis neque purus elit, suscipit eget. Vulputate aliquet convallis quis feugiat habitant tincidunt rhoncus...</p>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="w-[30px] h-[30px] mr-3">
                            <h5 class="mr-5">Ryne Ferdinand</h5>
                            <p class="mr-5 text-dark opacity-[59%]">|</p>
                            <h5 class="text-dark opacity-[59%]">08.08.2022</h5>
                        </div>
                    </div>
                </a>
                <a href="/" class="flex flex-row w-[60vw] bg-white rounded drop-shadow mb-5">
                    <img src={{asset('images/article-cover-image.png')}} class="mr-5 w-[215px] h-[213px]">
                    <div class="flex flex-col justify-center">
                        <h1 class="font-bold text-3xl float-left mb-3">The World's Inflation</h1>
                        <p class="font-poppins mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec quis neque purus elit, suscipit eget. Vulputate aliquet convallis quis feugiat habitant tincidunt rhoncus...</p>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="w-[30px] h-[30px] mr-3">
                            <h5 class="mr-5">Ryne Ferdinand</h5>
                            <p class="mr-5 text-dark opacity-[59%]">|</p>
                            <h5 class="text-dark opacity-[59%]">08.08.2022</h5>
                        </div>
                    </div>
                </a>
                <a href="/" class="flex flex-row w-[60vw] bg-white rounded drop-shadow mb-5">
                    <img src={{asset('images/article-cover-image.png')}} class="mr-5 w-[215px] h-[213px]">
                    <div class="flex flex-col justify-center">
                        <h1 class="font-bold text-3xl float-left mb-3">The World's Inflation</h1>
                        <p class="font-poppins mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec quis neque purus elit, suscipit eget. Vulputate aliquet convallis quis feugiat habitant tincidunt rhoncus...</p>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="w-[30px] h-[30px] mr-3">
                            <h5 class="mr-5">Ryne Ferdinand</h5>
                            <p class="mr-5 text-dark opacity-[59%]">|</p>
                            <h5 class="text-dark opacity-[59%]">08.08.2022</h5>
                        </div>
                    </div>
                </a>
                <a href="/" class="flex flex-row w-[60vw] bg-white rounded drop-shadow mb-5">
                    <img src={{asset('images/article-cover-image.png')}} class="mr-5 w-[215px] h-[213px]">
                    <div class="flex flex-col justify-center">
                        <h1 class="font-bold text-3xl float-left mb-3">The World's Inflation</h1>
                        <p class="font-poppins mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec quis neque purus elit, suscipit eget. Vulputate aliquet convallis quis feugiat habitant tincidunt rhoncus...</p>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="w-[30px] h-[30px] mr-3">
                            <h5 class="mr-5">Ryne Ferdinand</h5>
                            <p class="mr-5 text-dark opacity-[59%]">|</p>
                            <h5 class="text-dark opacity-[59%]">08.08.2022</h5>
                        </div>
                    </div>
                </a>
                <a href="/" class="flex flex-row w-[60vw] bg-white rounded drop-shadow mb-5">
                    <img src={{asset('images/article-cover-image.png')}} class="mr-5 w-[215px] h-[213px]">
                    <div class="flex flex-col justify-center">
                        <h1 class="font-bold text-3xl float-left mb-3">The World's Inflation</h1>
                        <p class="font-poppins mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec quis neque purus elit, suscipit eget. Vulputate aliquet convallis quis feugiat habitant tincidunt rhoncus...</p>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="w-[30px] h-[30px] mr-3">
                            <h5 class="mr-5">Ryne Ferdinand</h5>
                            <p class="mr-5 text-dark opacity-[59%]">|</p>
                            <h5 class="text-dark opacity-[59%]">08.08.2022</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="flex flex-col">
                <h1 class="text-xl font-bold pt-16 mb-10">Discover by Categories</h1>
                <div class="flex flex-row flex-wrap w-[25vw]">
                    <a href="/" class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                        Film
                    </a>
                    <a href="/" class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                        Review
                    </a>
                    <a href="/" class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                        Travel
                    </a>
                    <a href="/" class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                        Product
                    </a>
                    <a href="/" class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                        Data Science
                    </a>
                    <a href="/" class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                        Machine Learning
                    </a>
                    <a href="/" class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                        Game
                    </a>
                    <a href="/" class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                        Novel
                    </a>
                    <a href="/" class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                        Education
                    </a>
                </div>
                <h1 class="text-xl font-bold pt-16 mb-10">Check out these authors</h1>
                <a href="/" class="flex flex-row w-[25vw] bg-white rounded drop-shadow mb-5 items-center p-5">
                    <img src={{asset('images/author-image.png')}} class="mr-5 w-[54px] h-[55px]">
                    <div class="flex flex-col justify-center">
                        <h5 class="font-bold text-xl">Ryne Ferdinand</h5>
                        <h5 class="text-dark opacity-[59%]">9 Articles</h5>
                    </div>
                </a>
                <a href="/" class="flex flex-row w-[25vw] bg-white rounded drop-shadow mb-5 items-center p-5">
                    <img src={{asset('images/author-image.png')}} class="mr-5 w-[54px] h-[55px]">
                    <div class="flex flex-col justify-center">
                        <h5 class="font-bold text-xl">Ryne Ferdinand</h5>
                        <h5 class="text-dark opacity-[59%]">9 Articles</h5>
                    </div>
                </a>
                <a href="/" class="flex flex-row w-[25vw] bg-white rounded drop-shadow mb-5 items-center p-5">
                    <img src={{asset('images/author-image.png')}} class="mr-5 w-[54px] h-[55px]">
                    <div class="flex flex-col justify-center">
                        <h5 class="font-bold text-xl">Ryne Ferdinand</h5>
                        <h5 class="text-dark opacity-[59%]">9 Articles</h5>
                    </div>
                </a>
                <a href="/" class="flex flex-row w-[25vw] bg-white rounded drop-shadow mb-5 items-center p-5">
                    <img src={{asset('images/author-image.png')}} class="mr-5 w-[54px] h-[55px]">
                    <div class="flex flex-col justify-center">
                        <h5 class="font-bold text-xl">Ryne Ferdinand</h5>
                        <h5 class="text-dark opacity-[59%]">9 Articles</h5>
                    </div>
                </a>
                <a href="/" class="flex flex-row w-[25vw] bg-white rounded drop-shadow mb-5 items-center p-5">
                    <img src={{asset('images/author-image.png')}} class="mr-5 w-[54px] h-[55px]">
                    <div class="flex flex-col justify-center">
                        <h5 class="font-bold text-xl">Ryne Ferdinand</h5>
                        <h5 class="text-dark opacity-[59%]">9 Articles</h5>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
