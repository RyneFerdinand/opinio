@extends('components.layout')

@section('content')
    <section>
        <div class="flex flex-row font-montserrat max-w-screen-2xl w-[100vw] gap-24 mx-auto my-24">
            <div class="flex flex-col w-full">
                <h1 class="text-black font-bold text-4xl mb-12">Articles with Category of {{$category->name}}</h1>
                @foreach ($articles as $article)
                    <x-article-card :article="$article"></x-article-card>
                @endforeach
                {{ $articles->links() }}
            </div>
        </div>
    </section>
@endsection
