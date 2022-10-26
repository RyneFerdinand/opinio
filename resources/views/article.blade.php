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
                <button data-bs-toggle="modal" data-bs-target="#comment">
                    <img src={{asset('images/bx_comment.png')}} class="mb-5 w-[40px] h-[40px]">
                </button>
                <div class="modal fade fixed top-[0px] left-0 hidden w-[100vw] h-[100vh] overflow-x-hidden overflow-y-auto"
                id="comment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog relative w-auto pointer-events-none">
                    <div class="modal-content pointer-events-auto bg-white rounded">
                        <div class="modal-header flex flex-row items-center justify-between px-8 pt-8">
                            <h1 class="font-bold text-4xl pt-5">Comments</h1>
                            <button type="button"
                                class="text-5xl text-black"
                                data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body relative font-montserrat">
                                <form class="flex flex-col p-8">
                                    <label class="font-medium mb-2">Write Comment</label>
                                    <textarea id="bio" name="bio" placeholder="Comment" class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]"></textarea>
                                    <button class="px-5 py-3 bg-highlight font-bold text-white rounded hover:bg-dark hover:text-highlight transition-all ease-in duration-75" data-bs-dismiss="modal">COMMENT</button>
                                </form>
                                <div class="flex flex-col">
                                    <div class="flex flex-col">
                                        <hr>
                                        <div class="flex flex-row px-8 py-4 items-center">
                                            <img src={{asset('images/author-image.png')}} class="w-[50px] h-[50px] mr-5">
                                            <div class="flex flex-col">
                                                <div class="font-medium text-xl text-black">
                                                    Ryne Ferdinand
                                                </div>
                                                <div class="font-medium text-l text-dark/[50%]">
                                                    1 Day Ago
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-8 font-poppins text-m mb-4">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec quis neque purus elit, suscipit eget. Vulputate aliquet convallis quis feugiat habitant tincidunt rhoncus.
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <hr>
                                        <div class="flex flex-row px-8 py-4 items-center">
                                            <img src={{asset('images/author-image.png')}} class="w-[50px] h-[50px] mr-5">
                                            <div class="flex flex-col">
                                                <div class="font-medium text-xl text-black">
                                                    Ryne Ferdinand
                                                </div>
                                                <div class="font-medium text-l text-dark/[50%]">
                                                    1 Day Ago
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-8 font-poppins text-m mb-4">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec quis neque purus elit, suscipit eget. Vulputate aliquet convallis quis feugiat habitant tincidunt rhoncus.
                                        </div>
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
            <div class="grid grid-cols-3 gap-10">
                <x-article-card-large></x-article-card-large>
                <x-article-card-large></x-article-card-large>
                <x-article-card-large></x-article-card-large>
            </div>
        </div>
    </section>
@endsection