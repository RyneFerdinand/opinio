@props(['comment'])
<div class="flex items-start gap-8 comments" id="comment-{{$comment->id}}">
    <img class="rounded-full w-16 aspect-square" src={{ $comment->user->profilePicture }} alt="">
    <div class="flex flex-col w-full">
        <div class="flex justify-between w-full">
            <div>
                <h4 class="font-bold text-lg">{{ $comment->user->name }}</h4>
                <p id="comment-{{$comment->id}}-time" class="font-light opacity-60 font-poppins">
                    @php
                        $now = \Carbon\Carbon::now();
                        $days = $now->diffInDays($comment->created_at);
                    @endphp
                    @if ($days == 0)
                        @php
                            $hours = $now->diffInHours($comment->created_at);
                        @endphp
                        @if ($hours == 0)
                            @php
                                $minutes = $now->diffInMinutes($comment->created_at);
                            @endphp
                            @if ($minutes == 0)
                                @php
                                    $seconds = $now->diffInSeconds($comment->created_at);
                                @endphp
                                @if ($seconds <= 1)
                                    A Second Ago
                                @else
                                    {{ $seconds }} Seconds Ago
                                @endif
                            @else
                                @if ($minutes <= 1)
                                    A Minute Ago
                                @else
                                {{ $minutes }} Minutes Ago
                                @endif
                            @endif
                        @else
                            @if ($hours <= 1)
                                A Hour Ago
                            @else
                                {{ $hours }} Hours Ago
                            @endif
                        @endif
                    @else
                        @if ($days <= 30)
                            @if ($days <= 1)
                                A Day Ago
                            @else
                            {{ $days }} Days Ago
                            @endif
                        @else
                            @php
                                $months = (int) ($days / 30);
                            @endphp
                            @if ($months <= 12)
                                @if ($months <= 1)
                                    A Month Ago
                                @else
                                {{ $months }} Months Ago
                                @endif
                            @else
                                @if ((int) ($months / 12) <= 1)
                                    A Year Ago
                                @else
                                    {{ (int) ($months / 12) }}Years Ago
                                @endif
                            @endif
                        @endif
                    @endif
                </p>
            </div>
            {{-- <form action="/comment/{{ $comment->id }}" method="POST" class="p-4"> --}}
                {{-- @csrf --}}
                {{-- @method('delete') --}}
                @if (Auth::user()->id == $comment->user->id)
                    <button class="group hover:bg-dark py-2 px-3 aspect-square rounded-md cursor-pointer" onclick="toggleDeleteComment({{$comment->id}})">
                        <i class="fa fa-trash text-xl group-hover:text-highlight "></i>
                    </button>
                @endif
            {{-- </form> --}}
        </div>
        <p class="mt-4">
            {{ $comment->content }}
        </p>
    </div>
</div>

