@extends('components.layout')

@section('content')
    <section class="py-24">
        <div class="mx-auto font-montserrat flex flex-col gap-8 items-center auto w-5/6 max-w-screen-2xl">
            <h1 class="font-bold text-4xl mb-4 text-center">Create Article</h1>
            <form class="flex flex-col items-stretch self-stretch gap-4" method="POST" action="{{url('/create-article')}}" enctype="multipart/form-data">
                @csrf
                <div class="relative w-full h-[80vh] rounded-md overflow-hidden">
                    <img src={{ asset('https://lyon.palmaresdudroit.fr/images/joomlart/demo/default.jpg') }}
                        class="object-cover w-full h-full" id="cover-image">
                    <button type="button" onclick="togglePicture()"
                        class="opacity-0 hover:opacity-100 text-white gap-4 text-opacity-80 w-full h-full rounded-md bg-dark bg-opacity-40 absolute inset-0 flex items-center justify-center transition-opacity ease-in duration-75">
                        <i class="fas fa-edit text-6xl"></i>
                        <p class="text-4xl">Add Picture</p>
                    </button>
                    <input type="file" accept="image/*" name="picture" id="picture-input" class="hidden"
                        onchange="displayPicture()">
                </div>
                @if ($errors->has('picture'))
                    <label class=" text-red-500 text-sm">{{ $errors->first('picture') }}</label>
                @endif
                <div class="flex flex-col gap-2 w-full">
                    <label class="text-xl font-medium mb-3">Title</label>
                    <input type="text" id="title" name="title" placeholder="Title"
                        value=""
                        class="mb-5 border-[1px] rounded px-4 py-3 border-dark/[0.5]">
                    @if ($errors->has('title'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('title') }}</label>
                    @endif
                </div>
                <div class="flex flex-col gap-2 w-full">
                    <label class="text-xl font-medium mb-3">Subtitle</label>
                    <input type="text" id="subtitle" name="subtitle" placeholder="Subtitle"
                        value=""
                        class="mb-5 border-[1px] rounded px-4 py-3 border-dark/[0.5]">
                    @if ($errors->has('subtitle'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('subtitle') }}</label>
                    @endif
                </div>
                <div class="flex flex-col gap-2 w-full">
                    <label class="text-xl font-medium mb-3">Content</label>
                    <textarea name="content" id="content" placeholder="Content" cols="30" rows="20"
                        class="mb-5 border-[1px] rounded px-4 py-3 border-dark/[0.5] resize-none"></textarea>
                    @if ($errors->has('content'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('content') }}</label>
                    @endif
                </div>
                <div class="flex flex-col gap-2 w-full">
                    <label class="text-xl font-medium mb-3">Categories</label>
                    <select id="category" name="category"
                        class="w-full border-[1px] rounded px-4 py-3 border-dark/[0.5] mb-5" onchange="toggleCategory(value)">
                        <option value="" disabled selected class="text-dark opacity-[59%]">Category</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('categories'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('categories') }}</label>
                    @endif
                </div>
                <div id="categoryBox" class="flex flex-row items-center gap-3 cursor-default flex-wrap">
                </div>
                <input type="text" name="categories" id="category-input" class="hidden" value="">
                <button
                    class="px-5 py-3 bg-highlight font-bold text-white rounded hover:bg-dark hover:text-highlight transition-all ease-in duration-75">CREATE</button>
            </form>
        </div>
    </section>
@endsection
<script>
    let categoriesId = [];
    let categories = {!! json_encode($categories) !!};

    function toggleCategory(categoryId){
        if (categoriesId.indexOf(parseInt(categoryId)) !== -1){
            return;
        }
        categoriesId.push(parseInt(categoryId));
        let categoryBox = document.getElementById('categoryBox');
        let div = document.createElement("div");
        div.id = 'category-' + categoryId;
        div.classList.add('text-white', 'font-bold', 'px-4', 'py-2', 'bg-highlight', 'rounded-full', 'hover:bg-dark', 'hover:text-highlight', 'transition-all', 'ease-in', 'duration-75');
        categories.forEach(category => {
            if (category.id === parseInt(categoryId)){
                div.innerHTML += category.name;
            }
        });
        div.innerHTML += '<button type="button" class=" text-white ml-3" onclick="deleteCategory(' + categoryId + ')">X</button>'
        categoryBox.appendChild(div);
        let categoryInput = document.getElementById('category-input');
        categoryInput.value = categoriesId;
    }

    function deleteCategory(categoryId){
        categoriesId = categoriesId.filter(function (value){
            return value !== parseInt(categoryId);
        });
        let div = document.getElementById('category-' + categoryId);
        div.remove();
        let categoryInput = document.getElementById('category-input');
        categoryInput.value = categoriesId;
        console.log(categoryInput.value);
    }

    function togglePicture(){
        let pictureInput = document.getElementById('picture-input');
        pictureInput.click();
    }

    function displayPicture() {
        let pictureInput = document.getElementById('picture-input');
        let coverImage = document.getElementById('cover-image');

        coverImage.src = URL.createObjectURL(pictureInput.files[0]);
    }

</script>
