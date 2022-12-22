@extends('components.layout', ['articles' => ($articles = App\Models\Article::all())])

@section('content')
    <section class="font-montserrat">
        <div class="flex flex-col justify-center items-center">
            @if ($user->coverPicture != "")
                <img src={{$user->coverPicture}} class="w-[90vw] h-[40vh] p-3 rounded-2xl">
                <img src={{$user->profilePicture}} class="w-[10vw] mt-[-100px] mb-5 rounded-full">
            @else
                <img src={{$user->profilePicture}} class="w-[10vw] mt-[50px] mb-5 rounded-full">
            @endif
            <h1 class="font-bold text-5xl mb-3 text-center">{{$user->name}}</h1>
            <h3 class="text-xl text-dark/[50%] mb-5">{{count($user->articles)}}
                @if (count($user->articles) <= 1)
                    Article
                @else
                    Articles
                @endif
            </h3>
            @if ($user->about != "")
                <h3 class="text-xl text-dark/[50%] w-[50vw] text-center mb-5">{{$user->about}}</h3>
            @endif
            @auth
                @if (Auth::user()->id == $user->id)
                    <button
                        data-bs-toggle="modal" data-bs-target="#editprofile" class="font-bold text-white bg-highlight px-6 py-3 rounded-md hover:bg-dark hover:text-highlight transition-all ease-in duration-75 mb-5">Edit Profile
                    </button>
                @endif
            @endauth
            <div class="modal fade fixed top-[0px] left-0 hidden w-[100vw] h-[100vh] overflow-x-hidden overflow-y-auto"
            id="editprofile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog relative w-auto pointer-events-none">
                <div class="modal-content pointer-events-auto bg-white rounded">
                    <div class="modal-header flex flex-row items-center justify-between px-8 pt-8">
                        <h1 class="font-bold text-4xl pt-5">Edit Profile</h1>
                        <button type="button"
                            class="text-5xl text-black"
                            data-bs-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <div class="modal-body relative p-8 font-montserrat">
                            <div class="flex flex-col items-center justify-center mb-5">
                                @if (Auth::user()->coverPicture != "")
                                    <img src={{asset(Auth::user()->coverPicture)}} class="w-full h-40 rounded">
                                @else
                                    <div class="w-full h-40 rounded bg-dark">
                                    </div>
                                @endif
                                <img src={{asset(Auth::user()->profilePicture)}} class="w-[25%] mt-[-65px] mb-5">
                                <div class="flex flex-row justify-center items-center text-xl">
                                    <div class="text-highlight underline mr-5 font-bold">
                                        Personal
                                    </div>
                                    <div class="text-dark/[50%]">
                                        Authentication
                                    </div>
                                </div>
                            </div>
                            <form class="flex flex-col">
                                <label class="font-medium mb-2">Name</label>
                                <input type="text" id="name" name="name" placeholder="Name" class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]" value="{{Auth::user()->name}}">
                                <label class="font-medium mb-2">Email</label>
                                <input type="email" id="email" name="email" placeholder="Email" class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]" value="{{Auth::user()->email}}">
                                <label class="font-medium mb-2">Bio</label>
                                <textarea id="bio" name="bio" placeholder="Bio" class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]" value="{{Auth::user()->about}}"></textarea>
                                <button class="px-5 py-3 bg-highlight font-bold text-white rounded hover:bg-dark hover:text-highlight transition-all ease-in duration-75" data-bs-dismiss="modal">UPDATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (count($user->articles) >= 1)
            <div class="flex flex-col px-20 mb-16">
                <h1 class="font-bold text-3xl mb-5">Articles</h1>
                <div class="grid grid-cols-3 gap-10 relative">
                    @foreach ($articles as $article)
                        <x-article-card-large :article="$article"></x-article-card-large>
                    @endforeach
                </div>
            </div>
            {{$articles->links()}}
        @endif
    </section>
@endsection
