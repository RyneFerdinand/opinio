@extends('components.layout');

@section('content')
    <section class="font-montserrat mt-20 px-20">
        <div class="flex flex-col">
            <div class="flex flex-row font-bold text-5xl mb-10">
                <div class="text-dark/[50%]">Results for</div>
                <div class="text-black">&nbsp;Inflation</div>
            </div>
            <div class="flex flex-row items-center mb-10">
                <button  data-bs-toggle="modal" data-bs-target="#filter" class="flex flex-row bg-highlight justify-center items-center rounded mr-5">
                    <img class="px-4 py-2 font-bold" src={{asset('images/charm_filter.svg')}}>
                    <div class="text-white font-bold text-2xl mr-5">Filter</div>
                </button>
                <div class="modal fade fixed top-[100px] left-0 hidden w-[100vw] h-[100vh] overflow-x-hidden overflow-y-auto"
                    id="filter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog relative w-auto pointer-events-none">
                        <div class="modal-content pointer-events-auto bg-white rounded">
                            <div class="modal-header flex flex-row items-center justify-between px-8 pt-8">
                                <h1 class="font-bold text-4xl pt-5">Filter</h1>
                                <button type="button"
                                    class="text-5xl text-black"
                                    data-bs-dismiss="modal" aria-label="Close">X</button>
                                </div>
                                <div class="modal-body relative p-8 font-montserrat">
                                    <form class="flex flex-col">
                                        <label class="text-xl mb-3">Categories</label>
                                        <select id="category" name="category" class="w-[100%] border-[1px] rounded px-4 py-3 border-dark/[0.5] mb-5">
                                            <option value="" disabled selected class="text-dark opacity-[59%]">Category</option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                        <div class="flex flex-row items-center mb-16">
                                            <div class="text-white font-bold px-4 py-2 mr-5 bg-highlight rounded-full">
                                                Film
                                            </div>
                                            <div class="text-white font-bold px-4 py-2 mr-5 bg-highlight rounded-full">
                                                Review
                                            </div>
                                            <div class="text-white font-bold px-4 py-2 mr-5 bg-highlight rounded-full">
                                                Marketing
                                            </div>
                                        </div>
                                        <button class="px-5 py-3 bg-highlight font-bold text-white rounded" data-bs-dismiss="modal">FILTER</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="text-white font-bold px-4 py-2 mr-5 bg-highlight rounded-full">
                    Film
                </div>
                <div class="text-white font-bold px-4 py-2 mr-5 bg-highlight rounded-full">
                    Review
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="flex flex-row justify-between mb-5">
                <h1 class="font-bold text-black text-2xl">People</h1>
                <a href="/" class="text-highlight text-2xl font-semibold">
                    View More
                </a>
            </div>
            <div class="grid grid-cols-5 gap-4 mb-5">
                <div class="flex flex-col justify-center items-center bg-white rounded drop-shadow">
                    <img src={{asset('images/chainsawman-thumbnail.png')}} class="w-[100%] rounded">
                    <img src={{asset('images/author-image.png')}} class="w-[5vw] mt-[-50px] mb-5">
                    <h1 class="font-bold text-xl mb-1">Kevin Bennett</h1>
                    <h3 class="text-l text-dark/[50%] mb-6">12 Articles</h3>
                </div>
                <div class="flex flex-col justify-center items-center bg-white rounded drop-shadow">
                    <img src={{asset('images/chainsawman-thumbnail.png')}} class="w-[100%] rounded">
                    <img src={{asset('images/author-image.png')}} class="w-[5vw] mt-[-50px] mb-5">
                    <h1 class="font-bold text-xl mb-1">Kevin Bennett</h1>
                    <h3 class="text-l text-dark/[50%] mb-6">12 Articles</h3>
                </div>
                <div class="flex flex-col justify-center items-center bg-white rounded drop-shadow">
                    <img src={{asset('images/chainsawman-thumbnail.png')}} class="w-[100%] rounded">
                    <img src={{asset('images/author-image.png')}} class="w-[5vw] mt-[-50px] mb-5">
                    <h1 class="font-bold text-xl mb-1">Kevin Bennett</h1>
                    <h3 class="text-l text-dark/[50%] mb-6">12 Articles</h3>
                </div>
                <div class="flex flex-col justify-center items-center bg-white rounded drop-shadow">
                    <img src={{asset('images/chainsawman-thumbnail.png')}} class="w-[100%] rounded">
                    <img src={{asset('images/author-image.png')}} class="w-[5vw] mt-[-50px] mb-5">
                    <h1 class="font-bold text-xl mb-1">Kevin Bennett</h1>
                    <h3 class="text-l text-dark/[50%] mb-6">12 Articles</h3>
                </div>
                <div class="flex flex-col justify-center items-center bg-white rounded drop-shadow">
                    <img src={{asset('images/chainsawman-thumbnail.png')}} class="w-[100%] rounded">
                    <img src={{asset('images/author-image.png')}} class="w-[5vw] mt-[-50px] mb-5">
                    <h1 class="font-bold text-xl mb-1">Kevin Bennett</h1>
                    <h3 class="text-l text-dark/[50%] mb-6">12 Articles</h3>
                </div>
            </div>
        </div>
        <div class="flex flex-col mb-16">
            <div class="flex flex-row justify-between mb-5">
                <h1 class="font-bold text-black text-2xl">Articles</h1>
                <a href="/" class="text-highlight text-2xl font-semibold">
                    View More
                </a>
            </div>
            <div class="grid grid-cols-3 gap-10">
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-semibold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-semibold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Review
                        </a>
                    </div>
                    <div class="relative z-2 flex flex-col pl-5">
                        <div class="text-white/[75%] text-xl mb-3">
                            08.08.2022
                        </div>
                        <div class="text-white text-3xl font-bold mb-3">
                            Peaky Blinders Final Season
                        </div>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="mr-3">
                            <div class="font-medium text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-semibold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-semibold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Review
                        </a>
                    </div>
                    <div class="relative z-2 flex flex-col pl-5">
                        <div class="text-white/[75%] text-xl mb-3">
                            08.08.2022
                        </div>
                        <div class="text-white text-3xl font-bold mb-3">
                            Peaky Blinders Final Season
                        </div>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="mr-3">
                            <div class="font-medium text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-semibold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-semibold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Review
                        </a>
                    </div>
                    <div class="relative z-2 flex flex-col pl-5">
                        <div class="text-white/[75%] text-xl mb-3">
                            08.08.2022
                        </div>
                        <div class="text-white text-3xl font-bold mb-3">
                            Peaky Blinders Final Season
                        </div>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="mr-3">
                            <div class="font-medium text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-semibold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-semibold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Review
                        </a>
                    </div>
                    <div class="relative z-2 flex flex-col pl-5">
                        <div class="text-white/[75%] text-xl mb-3">
                            08.08.2022
                        </div>
                        <div class="text-white text-3xl font-bold mb-3">
                            Peaky Blinders Final Season
                        </div>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="mr-3">
                            <div class="font-medium text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-semibold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-semibold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Review
                        </a>
                    </div>
                    <div class="relative z-2 flex flex-col pl-5">
                        <div class="text-white/[75%] text-xl mb-3">
                            08.08.2022
                        </div>
                        <div class="text-white text-3xl font-bold mb-3">
                            Peaky Blinders Final Season
                        </div>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="mr-3">
                            <div class="font-medium text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-semibold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-semibold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Review
                        </a>
                    </div>
                    <div class="relative z-2 flex flex-col pl-5">
                        <div class="text-white/[75%] text-xl mb-3">
                            08.08.2022
                        </div>
                        <div class="text-white text-3xl font-bold mb-3">
                            Peaky Blinders Final Season
                        </div>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="mr-3">
                            <div class="font-medium text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-semibold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-semibold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Review
                        </a>
                    </div>
                    <div class="relative z-2 flex flex-col pl-5">
                        <div class="text-white/[75%] text-xl mb-3">
                            08.08.2022
                        </div>
                        <div class="text-white text-3xl font-bold mb-3">
                            Peaky Blinders Final Season
                        </div>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="mr-3">
                            <div class="font-medium text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-semibold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-semibold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Review
                        </a>
                    </div>
                    <div class="relative z-2 flex flex-col pl-5">
                        <div class="text-white/[75%] text-xl mb-3">
                            08.08.2022
                        </div>
                        <div class="text-white text-3xl font-bold mb-3">
                            Peaky Blinders Final Season
                        </div>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="mr-3">
                            <div class="font-medium text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-semibold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-semibold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Review
                        </a>
                    </div>
                    <div class="relative z-2 flex flex-col pl-5">
                        <div class="text-white/[75%] text-xl mb-3">
                            08.08.2022
                        </div>
                        <div class="text-white text-3xl font-bold mb-3">
                            Peaky Blinders Final Season
                        </div>
                        <div class="flex flex-row items-center">
                            <img src={{asset('images/author-image.png')}} class="mr-3">
                            <div class="font-medium text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
