@extends('components.layout')

@section('content')
    <section class="py-24">
        <div class="mx-auto font-montserrat flex flex-col gap-8 items-center auto w-5/6 max-w-screen-2xl">
            <h1 class="font-bold text-4xl mb-4 text-center">{{ $article ? 'Edit' : 'Create' }} Article</h1>
            <div class="relative w-full h-[80vh] rounded-md overflow-hidden">
                <img src={{ asset($article ? $article->picture : 'images/articles/makima.jpg') }}
                    class="object-cover w-full h-full ">
                <button type="button" onclick="toggleCoverEdit()"
                    class="opacity-0 hover:opacity-100 text-white gap-4 text-opacity-80 w-full h-full rounded-md bg-dark bg-opacity-40 absolute inset-0 flex items-center justify-center transition-opacity ease-in duration-75">
                    <i class="fas fa-edit text-6xl"></i>
                    <p class="text-4xl">Edit Cover</p>
                </button>
                <input type="file" accept="image/*" name="coverPicture" id="cover-picture-input" class="hidden"
                    onchange="submitCoverPicture()">
            </div>

            <form class="flex flex-col items-stretch self-stretch">
                <label class="text-xl font-medium mb-3">Title</label>
                <input type="text" id="title" name="title" placeholder="Title"
                    value="{{ $article ? $article->title : '' }}"
                    class="mb-5 border-[1px] rounded px-4 py-3 border-dark/[0.5]">
                <label class="text-xl font-medium mb-3">Content</label>
                <textarea name="content" id="content" placeholder="Content" cols="30" rows="20"
                    class="mb-5 border-[1px] rounded px-4 py-3 border-dark/[0.5] resize-none">{{ $article ? $article->content : '' }}</textarea>
                <label class="text-xl font-medium mb-3">Categories</label>
                <select id="category" name="category"
                    class="w-[10vw] border-[1px] rounded px-4 py-3 border-dark/[0.5] mb-5">
                    <option value="" disabled selected class="text-dark opacity-[59%]">Category</option>
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
                <button
                    class="px-5 py-3 mt-5 bg-highlight font-bold text-white rounded hover:bg-dark hover:text-highlight transition-all ease-in duration-75">Create</button>
            </form>
        </div>
    </section>
@endsection
