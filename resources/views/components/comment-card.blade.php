@props(['comment'])

<div class="flex items-start gap-8">
    <img class="rounded-full w-16 aspect-square" src={{ $comment->user->profilePicture }} alt="">
    <div class="flex flex-col w-full">
        <div class="flex justify-between w-full">
            <div>
                <h4 class="font-bold text-lg">{{ $comment->user->name }}</h4>
                <p class="font-light opacity-60 font-poppins">
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
                                {{ $seconds }}
                                @if ($seconds == 1)
                                    Second Ago
                                @else
                                    Seconds Ago
                                @endif
                            @else
                                {{ $minutes }}
                                @if ($minutes == 1)
                                    Minute Ago
                                @else
                                    Minutes Ago
                                @endif
                            @endif
                        @else
                            {{ $hours }}
                            @if ($hours == 1)
                                Hour Ago
                            @else
                                Hours Ago
                            @endif
                        @endif
                    @else
                        @if ($days <= 30)
                            {{ $days }}
                            @if ($days == 1)
                                Day Ago
                            @else
                                Days Ago
                            @endif
                        @else
                            @php
                                $months = (int) ($days / 30);
                            @endphp
                            @if ($months <= 12)
                                {{ $months }}
                                @if ($months == 1)
                                    Month Ago
                                @else
                                    Months Ago
                                @endif
                            @else
                                {{ (int) ($months / 12) }}
                                @if ($months / 12 == 1)
                                    Year Ago
                                @else
                                    Years Ago
                                @endif
                            @endif
                        @endif
                    @endif
                </p>
            </div>
            <form action="/comment/{{ $comment->id }}" method="POST" class="p-4">
                @csrf
                @method('delete')
                <button class="group hover:bg-dark py-2 px-3 aspect-square rounded-md cursor-pointer">
                    <i class="fa fa-trash text-xl group-hover:text-highlight "></i>
                </button>
            </form>
        </div>
        <p class="mt-4">
            {{ $comment->content }}
        </p>
    </div>
</div>
