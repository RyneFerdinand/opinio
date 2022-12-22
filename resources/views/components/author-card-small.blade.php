@props(['user'])
<a href="{{url('/user/'.$user->id)}}" class="flex flex-row w-[25vw] bg-white rounded drop-shadow mb-5 items-center p-5">
    <img src={{asset($user->profilePicture)}} class="mr-5 w-[54px] h-[55px] rounded-full">
    <div class="flex flex-col justify-center">
        <h5 class="font-bold text-xl">{{$user->name}}</h5>
        <h5 class="text-dark opacity-[59%]">{{count($user->articles)}}
            @if (count($user->articles) <= 1)
                Article
            @else
                Articles
            @endif
        </h5>
    </div>
</a>
