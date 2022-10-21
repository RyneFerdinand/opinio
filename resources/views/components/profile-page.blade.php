@extends('components.layout');

@section('content')
    <section class="font-montserrat">
        <div class="flex flex-col justify-center items-center">
            <img src={{asset('images/chainsawman-thumbnail.png')}} class="w-[90vw] h-[40vh] p-3 rounded">
            <img src={{asset('images/author-image.png')}} class="w-[10vw] mt-[-100px] mb-5">
            <h1 class="font-bold text-5xl mb-3">Kevin Bennett</h1>
            <h3 class="text-xl text-dark/[50%] mb-5">12 Articles</h3>
            <h3 class="text-xl text-dark/[50%] w-[50vw] text-center mb-5">I Write what I want and when I want. A Comic, Manga, Movie, Gaming, and Data Enthusiast at the same time. Contact me anytime ! 😁</h3>
            <button
                data-bs-toggle="modal" data-bs-target="#editprofile" class="font-bold text-white bg-highlight px-6 py-3 rounded-md hover:bg-dark hover:text-highlight transition-all ease-in duration-75">Edit Profile
            </button>
        </div>
        <div class="flex flex-col px-20 mb-16">
            <h1 class="font-bold text-3xl mb-5">Articles</h1>
            <div class="grid grid-cols-3 gap-10">
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-bold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-bold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
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
                            <div class="text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-bold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-bold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
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
                            <div class="text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-bold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-bold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
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
                            <div class="text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-bold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-bold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
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
                            <div class="text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-bold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-bold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
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
                            <div class="text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-bold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-bold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
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
                            <div class="text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-bold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-bold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
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
                            <div class="text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-bold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-bold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
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
                            <div class="text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-[28vw] h-[40vh] bg-[url('https://mdbcdn.b-cdn.net/img/new/slides/042.webp')] bg-cover bg-center bg-no-repeat rounded">
                    <div class="bg-dark absolute opacity-80 h-[100%] w-[100%] z-1"></div>
                    <div class="relative flex flex-row justify-end z-2 mt-3 pr-3 mb-20">
                        <a href="/" class="text-white font-bold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
                            Film
                        </a>
                        <a href="/" class="text-white font-bold px-4 py-2 z-2 bg-white/[.2] rounded hover:bg-highlight transition-all ease-in duration-120">
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
                            <div class="text-white">Ryne Ferdinand</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-end px-20 mb-16">
            <div class="rounded-l border-r border-l bg-white px-5 py-3 font-bold">
                <
            </div>
            <div class="bg-black border-r border-l text-white px-5 py-3 font-bold">
                1
            </div>
            <div class="bg-white border-r border-l px-5 py-3 font-bold">
                2
            </div>
            <div class="bg-white border-r border-l px-5 py-3 font-bold">
                3
            </div>
            <div class="rounded-r border-r border-l bg-white px-5 py-3 font-bold">
                >
            </div>
        </div>
    </section>
@endsection
