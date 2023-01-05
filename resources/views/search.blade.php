@extends('components.layout')

@section('content')
    <section class="py-24">
        <div class="flex flex-col font-montserrat gap-12 w-5/6 mx-auto">
            <div class="flex flex-row font-bold text-4xl">
                <div class="text-dark/[50%]">Results for</div>
                <div class="text-black">&nbsp;{{ $query }}</div>
            </div>
            <div class="flex flex-col">
                @if (count($users) <= 0)
                    <div class="flex flex-col mb-5">
                        <h1 class="font-bold text-black text-2xl">People</h1>
                        <h1 class="font-bold text-black text-2xl">No People Found</h1>
                    </div>
                @else
                    <div class="flex flex-row justify-between mb-5">
                        <h1 class="font-bold text-black text-2xl">People</h1>
                        @if (count($users) > 5)
                            <a href="{{ url('/people/' . $query) }}"
                                class="font-poppins text-highlight text-xl hover:underline font-semibold">
                                View More
                            </a>
                        @endif
                    </div>
                @endif
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mb-5">
                    @foreach ($users->slice(0, 5) as $user)
                        <x-author-card-large :user="$user"></x-author-card-large>
                    @endforeach
                </div>
            </div>
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
                @php
                    $ctr = 0;
                @endphp
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($articles->slice(0, 12) as $article)
                        <x-article-card-large :article="$article"></x-article-card-large>
                    @endforeach
                </div>

                {{-- <div class="flex flex-row items-center mb-10">
                <button data-bs-toggle="modal" data-bs-target="#filter"
                    class="flex flex-row bg-highlight justify-center items-center rounded mr-5">
                    <img class="px-4 py-2 font-bold object-cover" src={{ asset('images/charm_filter.svg') }}>
                    <div class="text-white font-bold text-2xl mr-5">Filter</div>
                </button>
                <div class="modal fade fixed top-[100px] left-0 hidden w-[100vw] h-[100vh] overflow-x-hidden overflow-y-auto"
                    id="filter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog relative w-auto pointer-events-none">
                        <div class="modal-content pointer-events-auto bg-white rounded">
                            <div class="modal-header flex flex-row items-center justify-between px-8 pt-8">
                                <h1 class="font-bold text-4xl pt-5">Filter</h1>
                                <button type="button" class="text-5xl text-black" data-bs-dismiss="modal"
                                    aria-label="Close">X</button>
                            </div>
                            <div class="modal-body relative p-8 font-montserrat">

                                <form method="GET" enctype="multipart/form-data" action="{{ url('/search') }}">
                                    <label for="select2Multiple">Categories</label>
                                    <select class="select2-multiple form-control" name="tags[]" multiple="multiple"
                                        id="select2Multiple">
                                    </select>
                                    <select name="tags[]" multiple="multiple" id="select2Multiple"
                                        class="select2-multiple form-control w-[100%] border-[1px] rounded px-4 py-3 border-dark/[0.5] mb-5">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <button class="px-5 py-3 bg-highlight font-bold text-white rounded"
                                        data-bs-dismiss="modal">FILTER</button>
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
            </div> --}}
            </div>
    </section>
@endsection
