@props(['user'])
<a href="{{ url('/user/' . $user->id) }}"
    class="flex flex-col justify-center items-center bg-white rounded drop-shadow  transform hover:scale-[101%] transition-transform duration-75">
    <img src={{ asset($user->coverPicture ? $user->coverPicture : '') }} class="w-full h-48 rounded object-cover">
    <img src={{ asset($user->profilePicture ? $user->profilePicture : '') }}
        class="w-20 aspect-square -mt-10 rounded-full object-cover mb-4">
    <h1 class="font-bold text-xl mb-1 text-center">{{ Str::limit($user->name, 20) }}</h1>
    <h3 class="text-l text-dark/[50%] mb-6">{{ count($user->articles) }}
        @if (count($user->articles) <= 1)
            Article
        @else
            Articles
        @endif
    </h3>
</a>
