@props(['user'])
<a href="{{ url('/user/' . $user->id) }}"
    class="flex flex-row gap-5 bg-white rounded drop-shadow items-center p-5 transform hover:scale-[101%] transition-transform duration-75">
    <img src={{ asset($user->profilePicture) }} class="w-[55px] aspect-square rounded-full object-cover">
    <div class="flex flex-col justify-center">
        <h5 class="font-bold text-lg">{{ $user->name }}</h5>
        <h5 class="text-dark opacity-[59%]">
            {{ count($user->articles) }} {{ count($user->articles) > 1 ? 'Articles' : 'Article' }}
        </h5>
    </div>
</a>
