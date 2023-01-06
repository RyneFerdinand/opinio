@extends('components.layout')

@section('content')
    <section class="py-24">
        <div class="flex flex-col font-montserrat gap-12 w-5/6 mx-auto">
            <div class="flex flex-row font-bold text-4xl">
                <div class="text-dark/[50%]">Results for</div>
                <div class="text-black">&nbsp;{{ $query }}</div>
            </div>
            <h1 class="font-bold text-3xl">People</h1>
            <div class="flex flex-col">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mb-5">
                    @foreach ($users as $user)
                        <x-author-card-large :user="$user"></x-author-card-large>
                    @endforeach
                </div>
                {{$users->links()}}
            </div>
    </section>
@endsection
