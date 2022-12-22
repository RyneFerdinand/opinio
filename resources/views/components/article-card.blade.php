@props(['article'])

<a href="{{url('/article/'.$article->id)}}" class="flex flex-row w-[60vw] bg-white rounded drop-shadow mb-5">
    <img src={{asset($article->picture)}} class="mr-5 w-[215px] h-[213px]">
    <div class="flex flex-col justify-center">
        <h1 class="font-bold text-3xl float-left mb-3">{{$article->title}}</h1>
        <p class="font-poppins mb-3">{{Str::limit($article->content, 75)}}</p>
        <div class="flex flex-row items-center">
            <img src={{asset($article->user->coverPicture)}} class="w-[30px] h-[30px] mr-3 rounded-full">
            <h5 class="mr-5">{{$article->user->name}}</h5>
            <p class="mr-5 text-dark opacity-[59%]">|</p>
            <h5 class="text-dark opacity-[59%]">{{\Carbon\Carbon::parse($article->created_at)->format('d.m.Y')}}</h5>
        </div>
    </div>
</a>
