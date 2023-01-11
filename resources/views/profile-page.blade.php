@extends('components.layout')

@section('content')
<meta name="_token" content="{{ csrf_token() }}">
    <section class="pt-8 pb-24">
        <div class="font-montserrat w-5/6 max-w-screen-2xl mx-auto">
            <div class="flex flex-col justify-center items-center">
                <img src={{ $user->coverPicture }} class="w-full h-[40vh] rounded-md object-cover">
                <img src={{ $user->profilePicture }} class="w-32 aspect-square mt-[-75px] mb-5 rounded-full object-cover">
                <h1 class="font-bold text-4xl mb-3 text-center">{{ $user->name }}</h1>
                <h3 id="userArticlesCount" class="text-lg text-dark/[50%] mb-3">{{ count($user->articles) }}
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
                                Profile
                            </button>
                        </a>
                    @endif
                @endauth
            </div>

            <div class="flex flex-col mt-16">
                <h1 class="font-bold text-3xl">Articles</h1>
                @if (count($articles) <= 0)
                    <div class="text-3xl font-bold">
                        No Articles
                    </div>
                @else
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 my-8">
                        @foreach ($articles as $article)
                            <x-article-card-large :article="$article"></x-article-card-large>
                        @endforeach
                    </div>
                    {{ $articles->links() }}
                @endif
            </div>
        </div>
    </section>
@endsection
<script>
    let articles = {!! json_encode($articles) !!}
    let csrf = null;
    let div = null;
    let userArticlesCount = {!! json_encode(count($articles)) !!}

    function toggleDeleteArticle(articleId){
        csrf = document.querySelector('meta[name="_token"]').content;
        fetch(`/article/${articleId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-Token': csrf
            }
        });
        div = document.getElementById('article-' + articleId);
        div.remove();

        userArticlesCount--;
        if (userArticlesCount <= 1){
            document.getElementById('userArticlesCount').innerHTML = userArticlesCount + " Article";
        }
        else {
            document.getElementById('userArticlesCount').innerHTML = userArticlesCount + " Articles";
        }
    }
</script>
