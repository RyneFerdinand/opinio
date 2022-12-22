@extends('components.layout', ['articles' => ($articles = App\Models\Article::all())])

@section('content')
    <div class="px-20 font-montserrat">
        <div class="flex flex-row font-bold text-5xl mb-10 mt-5">
            <div class="text-dark/[50%]">Results for</div>
            <div class="text-black">&nbsp;{{$query}}</div>
        </div>
        <h1 class="font-bold text-3xl mb-5">People</h1>
        <div class="grid grid-cols-5 gap-4 mb-5">
            @foreach ($users as $user)
                <x-author-card-large :user="$user"></x-author-card-large>
            @endforeach
        </div>
    </div>
@endsection

