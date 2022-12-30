@props(['article'])

<a href="{{ url('/article/' . $article->id) }}"
    class="flex flex-row gap-5 bg-white rounded-md drop-shadow mb-5 transform hover:scale-[101%] transition-transform duration-75">
    <img src={{ asset($article->picture) }} class="w-1/4 aspect-square rounded-l-md object-cover ">
    <div class="flex flex-col justify-center py-8">
        <h1 class="font-bold text-3xl float-left mb-3">{{ $article->title }}</h1>
        <p class="font-poppins mb-3">{{ Str::limit($article->content, 75) }}</p>
        <div class="flex flex-row gap-5 items-center">
            <img src={{ asset($article->user->profilePicture) }}
                class="w-[30px] aspect-square rounded-full object-cover ">
            <h5>{{ $article->user->name }}</h5>
            <p class="text-dark opacity-[59%]">|</p>
            <h5 class="text-dark opacity-[59%]">{{ \Carbon\Carbon::parse($article->created_at)->format('d.m.Y') }}</h5>
        </div>
    </div>
</a>
