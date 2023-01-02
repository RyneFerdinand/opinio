@extends('components.layout')

@section('content')
    <div class="px-20 font-montserrat">
        <div class="flex flex-row font-bold text-5xl mb-10 mt-5">
            <div class="text-dark/[50%]">Results for</div>
            <div class="text-black">&nbsp;{{ $query }}</div>
        </div>
        <h1 class="font-bold text-3xl mb-5">Articles</h1>
        <div class="grid grid-cols-3 gap-16 mb-5">
            @foreach ($articles as $article)
                <x-article-card-large :article="$article"></x-article-card-large>
            @endforeach
        </div>
    </div>
@endsection
