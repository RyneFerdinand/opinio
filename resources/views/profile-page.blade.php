@extends('components.layout')

@section('content')
    <section class="pt-8 pb-24">
        <div class="font-montserrat w-5/6 max-w-screen-2xl mx-auto">
            <div class="flex flex-col justify-center items-center">
                <img src={{ $user->coverPicture }} class="w-full h-[40vh] rounded-md object-cover">
                <img src={{ $user->profilePicture }} class="w-32 aspect-square mt-[-75px] mb-5 rounded-full object-cover">
                <h1 class="font-bold text-4xl mb-3 text-center">{{ $user->name }}</h1>
                <h3 class="text-lg text-dark/[50%] mb-3">{{ count($user->articles) }}
                    @if (count($user->articles) <= 1)
                        Article
                    @else
                        Articles
                    @endif
                </h3>
                @if ($user->about != '')
                    <h3 class="text-xl text-dark/[50%] w-1/2 text-center mb-5">{{ $user->about }}</h3>
                @endif
                @auth
                    @if (Auth::user()->id == $user->id)
                        <a href="/user/edit">
                            <button
                                class="font-bold text-white bg-highlight px-6 py-3 rounded-md hover:bg-dark hover:text-highlight transition-all ease-in duration-75">Edit
                                Pofile
                            </button>
                        </a>
                    @endif
                @endauth
            </div>

            <div class="flex flex-col mt-16">
                <h1 class="font-bold text-3xl mb-8">Articles</h1>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                    @foreach ($articles as $article)
                        <x-article-card-large :article="$article"></x-article-card-large>
                    @endforeach
                </div>
                {{ $articles->links() }}
            </div>
        </div>
    </section>
@endsection
