@props(['article'])
<a href="{{ url('/article/' . $article->id) }}" class="flex z-4 items-stretch">
    <div class="bg-[url({{ asset($article->picture) }})] bg-cover bg-center bg-no-repeat rounded w-[100%]">
        <div class="flex flex-col h-[100%] justify-between z-1 bg-dark bg-opacity-80">
            <div class="flex flex-row justify-end mt-3 pr-3 mb-20 z-50">
                @foreach ($article->categories as $category)
                    <div href="{{ url('/categories/' . $category->id) }}"
                        class="text-white font-bold px-4 py-2 mr-5 z-2 bg-white/[.2] rounded hover:bg-highlight">
                        {{ $category->name }}
                    </div>
                @endforeach
            </div>
            <div class="z-2 flex flex-col pl-5 pb-5">
                <div class="text-white/[75%] text-xl mb-3">
                    {{ \Carbon\Carbon::parse($article->created_at)->format('d.m.Y') }}
                </div>
                <div class="text-white text-3xl font-bold mb-3">
                    {{ $article->title }}
                </div>
                <div class="flex flex-row items-center">
                    <img src={{ $article->user->profilePicture }}
                        class="mr-3 rounded-full w-[54px] h-[55px] object-cover">
                    <div class="text-white">{{ $article->user->name }}</div>
                </div>
            </div>
        </div>
    </div>
</a>
