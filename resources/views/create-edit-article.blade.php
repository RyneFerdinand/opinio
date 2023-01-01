@extends('components.layout', ['articles' => ($articles = App\Models\Article::all())])

@section('content')
    <section>
        <div class="flex flex-row items-center justify-center">
            <img src={{ asset('images/chainsawman-thumbnail.png') }} class="w-[90vw] p-3 rounded object-cover">
        </div>
        <form class="flex flex-col pt-20 px-20 py-0 font-montserrat">
            <label class="text-xl font-medium mb-3">Title</label>
            <input type="text" id="title" name="title" placeholder="Title"
                class="mb-5 border-[1px] rounded px-4 py-3 border-dark/[0.5]">
            <label class="text-xl font-medium mb-3">Content</label>
            <input type="text" id="content" name="content" placeholder="Content"
                class="mb-5 border-[1px] rounded px-4 py-3 border-dark/[0.5]">
            <label class="text-xl font-medium mb-3">Categories</label>
            <select id="category" name="category" class="w-[10vw] border-[1px] rounded px-4 py-3 border-dark/[0.5] mb-5">
                <option value="" disabled selected class="text-dark opacity-[59%]">Category</option>
                <option value=""></option>
                <option value=""></option>
            </select>
            <div class="flex flex-row items-center mb-5">
                <div class="text-white font-bold px-4 py-2 mr-5 bg-highlight rounded-full">
                    Film
                </div>
                <div class="text-white font-bold px-4 py-2 mr-5 bg-highlight rounded-full">
                    Review
                </div>
                <div class="text-white font-bold px-4 py-2 mr-5 bg-highlight rounded-full">
                    Marketing
                </div>
            </div>
            <button class="px-5 py-3 bg-highlight w-[10vw] text-white font-bold">CREATE</button>
        </form>
    </section>
@endsection
