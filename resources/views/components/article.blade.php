@extends('components.layout');

@section('content')
    <section class="font-montserrat mt-20">
        <div class="flex flex-col justify-center items-center mb-10">
            <div class="flex flex-row justify-center items-center">
                <a href="/" class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                    Film
                </a>
                <a href="/" class="text-white font-bold px-4 py-2 mr-2 mb-3 bg-dark/[.5] rounded hover:bg-highlight transition-all ease-in duration-120">
                    Review
                </a>
            </div>
            <h1 class="font-bold text-3xl mb-1">Airing of Chainsawman</h1>
            <p class="text-dark/[60%] mb-10">Mappa's most anticipated anime of the year</p>
            <p class="text-highlight font-bold mb-16">By Kevin Bennett</p>
            <img src={{asset('images/chainsawman-thumbnail.png')}} class="w-[90vw] p-3 rounded">
        </div>
        <div class="flex flex-row justify-around">
            <div class="flex flex-row">
                4 Minutes Read
            </div>
            <div class="flex flex-col w-[40vw] mr-5">
                <p class="mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec quis neque purus elit, suscipit eget. Vulputate aliquet convallis quis feugiat habitant tincidunt rhoncus. Bibendum pellentesque massa quam mauris in. Ultrices at neque suspendisse egestas sed dignissim. Urna, massa dapibus nisi morbi viverra pulvinar justo porttitor nec. Malesuada urna faucibus proin proin nisl ut interdum et semper.
                </p>
                <p class="mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec quis neque purus elit, suscipit eget. Vulputate aliquet convallis quis feugiat habitant tincidunt rhoncus. Bibendum pellentesque massa quam mauris in. Ultrices at neque suspendisse egestas sed dignissim. Urna, massa dapibus nisi morbi viverra pulvinar justo porttitor nec. Malesuada urna faucibus proin proin nisl ut interdum et semper.
                </p>
                <p class="mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec quis neque purus elit, suscipit eget. Vulputate aliquet convallis quis feugiat habitant tincidunt rhoncus. Bibendum pellentesque massa quam mauris in. Ultrices at neque suspendisse egestas sed dignissim. Urna, massa dapibus nisi morbi viverra pulvinar justo porttitor nec. Malesuada urna faucibus proin proin nisl ut interdum et semper.
                </p>
                <div class="mt-16 flex flex-row">
                    <p class="text-highlight font-bold">
                        121
                    </p>
                    <p>&nbsp;Likes &nbsp;&nbsp;&nbsp;-</p>
                    <p class="ml-5 text-highlight font-bold">
                        25
                    </p>
                    &nbsp;Comments
                </div>
            </div>
            <div class="flex flex-col items-center">
                <img src={{asset('images/author-image.png')}} class="mb-5 w-[50px] h-[50px]">
                <img src={{asset('images/akar-icons_link-chain.png')}} class="mb-5 w-[40px] h-[40px]">
                <img src={{asset('images/ant-design_edit-outlined.png')}} class="mb-5 w-[40px] h-[40px]">
                <img src={{asset('images/akar-icons_heart.png')}} class="mb-5 w-[40px] h-[40px]">
                <img src={{asset('images/bx_comment.png')}} class="mb-5 w-[40px] h-[40px]">
            </div>
        </div>
        <div class="flex flex-col px-20 mb-16">
            <h1 class="font-bold text-3xl mb-5">Related Articles</h1>
            <div class="flex flex-row items-center justify-between">
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
    </section>
@endsection
