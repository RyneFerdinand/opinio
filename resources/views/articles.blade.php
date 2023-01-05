@extends('components.layout')

@section('content')
    <section class="py-24">
        <div class="flex flex-col font-montserrat gap-12 w-5/6 mx-auto">
            <div class="flex flex-row font-bold text-4xl">
                <div class="text-dark/[50%]">Results for</div>
                <div class="text-black">&nbsp;{{ $query }}</div>
            </div>
            <h1 class="font-bold text-3xl mb-5">Articles</h1>
            <div class="flex flex-col">
                @if (count($articles) <= 0)
                    <div class="flex flex-col mb-5">
                        <h1 class="font-bold text-black text-2xl">Articles</h1>
                        <h1 class="font-bold text-black text-2xl">No Articles Found</h1>
                    </div>
                @else
                    <div class="flex flex-row justify-between mb-5">
                        <h1 class="font-bold text-black text-2xl">Articles</h1>
                        @if (count($articles) > 9)
                            <a href="{{ url('/articles/' . $query) }}"
                                class="font-poppins text-highlight text-xl hover:underline font-semibold">
                                View More
                            </a>
                        @endif
                    </div>
                @endif
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                    @foreach ($articles as $article)
                        <x-article-card-large :article="$article"></x-article-card-large>
                    @endforeach
                </div>
                {{ $articles->links() }}

            </div>
    </section>
@endsection
