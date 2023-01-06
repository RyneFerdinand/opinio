@props(['article'])
<div class="group rounded-md relative overflow-hidden cursor-default">
    <img src="{{ asset($article->picture) }}" alt=""
        class="absolute inset-0 -z-1 h-full w-full object-cover rounded-md transform group-hover:scale-105 transition-transform duration-150 ease-in">
    <div class="relative flex flex-col justify-between z-1 p-6 h-80 bg-dark bg-opacity-50 rounded-md">
        <div class="flex justify-between items-center">
            @if (Auth::user() && Auth::user()->id === $article->user_id && Str::contains(url()->current(), '/user/'))
                <a href="/edit-article/{{ $article->id }}">
                    <i
                        class="fas fa-edit text-white bg-white/[.2] p-3 aspect-square rounded-md hover:bg-highlight transition-all ease-in duration-75"></i>
                </a>
            @endif
            <div class="flex flex-row justify-end gap-4">
                @foreach ($article->categories as $category)
                    <a href="{{ url('/category/' . $category->id) }}"
                        class="text-white font-semibold text-sm px-2 py-1 z-2 bg-white/[.2] rounded hover:bg-highlight">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="justify-self-end z-2 flex flex-col gap-2">
            <div class="text-white/[75%] text-base font-poppins">
                {{ \Carbon\Carbon::parse($article->created_at)->format('d.m.Y') }}
            </div>
            <a href="/article/{{ $article->id }}">
                <div class="text-white text-2xl font-bold hover:text-highlight">
                    {{ $article->title }}
                </div>
            </a>
            <div class="group flex flex-row items-center gap-2 cursor-pointer">
                <img src={{ $article->user->profilePicture }} class="rounded-full w-8 aspect-square object-cover">
                <a href="/user/{{ $article->user_id }}"
                    class="hover:underline text-white">{{ $article->user->name }}</a>
            </div>
        </div>
    </div>
</div>
