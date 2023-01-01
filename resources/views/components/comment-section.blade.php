@props(['article'])

<div class="flex flex-col gap-12">
    @auth
        <div class="flex items-start gap-8">
            <img class="rounded-full w-16 aspect-square" src="https://randomuser.me/api/portraits/lego/1.jpg" alt="">
            <form action="{{ url('/comment/' . $article->id) }}" method="POST"
                class="rounded-md border-2 flex flex-col p-4 bg-white w-full">
                @csrf
                <textarea id="comment" name="comment" placeholder="Comment" class="bg-transparent resize-none outline-none w-full"
                    placeholder="Comment" name="comment" id="" rows="4"></textarea>
                @if ($errors->has('comment'))
                    <label class="mb-3 text-red-500 text-sm">{{ $errors->first('comment') }}</label>
                @endif

                <button
                    class="font-bold text-white text-sm bg-highlight px-4 py-3 rounded-md hover:bg-dark hover:text-highlight transition-all ease-in duration-75 self-end">Comment</button>
            </form>
        </div>
    @endauth

    <div class="flex flex-col">
        <div class="flex flex-col gap-12">
            @foreach ($article->comments as $comment)
                <x-comment-card :comment="$comment" />
            @endforeach
        </div>
    </div>
</div>
