@props(['user'])
<a href="{{ url('/user/' . $user->id) }}" class="flex flex-col justify-center items-center bg-white rounded drop-shadow">
    @if ($user->coverPicture != '')
        <img src={{ asset($user->coverPicture) }} class="w-[100%] h-[200px] rounded object-cover">
    @else
        <div class="w-full h-[200px] rounded bg-dark">
        </div>
    @endif
    <img src={{ asset($user->profilePicture) }} class="w-[5vw] mt-[-50px] mb-5 rounded-full object-cover">
    <h1 class="font-bold text-2xl mb-1 text-center">{{ $user->name }}</h1>
    <h3 class="text-l text-dark/[50%] mb-6">{{ count($user->articles) }}
        @if (count($user->articles) <= 1)
            Article
        @else
            Articles
        @endif
    </h3>
</a>
