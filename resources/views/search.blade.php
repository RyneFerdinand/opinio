@extends('components.layout')

@section('content')
    <section class="py-24">
        <div class="flex flex-col font-montserrat w-5/6 mx-auto">
            <div class="flex flex-row font-bold text-4xl mb-5">
                <div class="text-dark/[50%]">Results for</div>
                <div class="text-black">&nbsp;{{ $query }}</div>
            </div>
            <div class="flex flex-col gap-2 w-1/4">
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
            <div id="categoryBox" class="flex flex-row items-center gap-3 cursor-default flex-wrap mb-5">
            </div>
            <a id="filter-button"
                class="flex flex-row text-white bg-highlight justify-center items-center rounded mb-5 w-1/4 hover:bg-dark hover:text-highlight transition-all ease-in duration-75" href="{{url('/search?query='.$query)}}">
                <img class="px-4 py-2 font-bold object-cover" src={{ asset('images/charm_filter.svg') }}>
                <div class= "font-bold text-2xl mr-5">Filter</div>
            </a>
            <input type="text" name="categories" id="category-input" class="hidden" value="">
            @if(!$filters)
                <div class="flex flex-col">
                    @if (count($users) <= 0)
                        <div class="flex flex-col mb-5">
                            <h1 class="font-bold text-black text-2xl">People</h1>
                            <h1 class="font-bold text-black text-2xl">No People Found</h1>
                        </div>
                    @else
                        <div class="flex flex-row justify-between mb-5">
                            <h1 class="font-bold text-black text-2xl">People</h1>
                            @if ($users->hasPages())
                                <a href="{{ url('/people/' . $query) }}"
                                    class="font-poppins text-highlight text-xl hover:underline font-semibold">
                                    View More
                                </a>
                            @endif
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mb-5">
                            @foreach ($users->slice(0, 5) as $user)
                                <x-author-card-large :user="$user"></x-author-card-large>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
            <div class="flex flex-col">
                @if (count($articles) <= 0)
                    <div class="flex flex-col">
                        <h1 class="font-bold text-black text-2xl">Articles</h1>
                        <h1 class="font-bold text-black text-2xl">No Articles Found</h1>
                    </div>
                @else
                    <div class="flex flex-row justify-between mb-5">
                        <h1 class="font-bold text-black text-2xl">Articles</h1>
                        @if ($articles->hasPages())
                            <a href="{{ url('/articles/'.$query) }}"
                                class="font-poppins text-highlight text-xl hover:underline font-semibold">
                                View More
                            </a>
                        @endif
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($articles->slice(0, 12) as $article)
                            <x-article-card-large :article="$article"></x-article-card-large>
                        @endforeach
                    </div>
                @endif
            </div>
    </section>
@endsection
<script>
    let categoriesId = [];
    let categories = {!! json_encode($categories) !!};
    let query = {!! json_encode($query) !!};
    let categoryInput = null;
    let filterButton = null;
    let categoryBox = null;
    let div = null;
    let filters = {!! json_encode($filters) !!}.split(',');

    window.onload = () => {
        categoryBox = document.getElementById('categoryBox');
        categoryInput = document.getElementById('category-input');
        filters.forEach(filter => {
            categoriesId.push(parseInt(filter));
            div = document.createElement("div");
            div.id = 'category-' + filter;
            div.classList.add('text-white', 'font-bold', 'px-4', 'py-2', 'bg-highlight', 'rounded-full', 'hover:bg-dark', 'hover:text-highlight', 'transition-all', 'ease-in', 'duration-75');
            categories.forEach(category => {
                if (category.id === parseInt(filter)){
                    div.innerHTML += category.name;
                }
            });
            div.innerHTML += '<button type="button" class=" text-white ml-3" onclick="deleteCategory(' + filter + ')">X</button>'
            categoryBox.appendChild(div);
        });
        categoryInput.value = categoriesId;
    }

    function toggleCategory(categoryId){
        if (categoriesId.indexOf(parseInt(categoryId)) !== -1){
            return;
        }
        categoriesId.push(parseInt(categoryId));
        categoryBox = document.getElementById('categoryBox');
        div = document.createElement("div");
        div.id = 'category-' + categoryId;
        div.classList.add('text-white', 'font-bold', 'px-4', 'py-2', 'bg-highlight', 'rounded-full', 'hover:bg-dark', 'hover:text-highlight', 'transition-all', 'ease-in', 'duration-75');
        categories.forEach(category => {
            if (category.id === parseInt(categoryId)){
                div.innerHTML += category.name;
            }
        });
        div.innerHTML += '<button type="button" class=" text-white ml-3" onclick="deleteCategory(' + categoryId + ')">X</button>'
        categoryBox.appendChild(div);

        categoryInput = document.getElementById('category-input');
        categoryInput.value = categoriesId;

        filterButton = document.getElementById('filter-button');
        filterButton.href = "/search?query=" + query + "&categories=" + categoriesId;
    }

    function deleteCategory(categoryId){
        categoriesId = categoriesId.filter(function (value){
            return value !== parseInt(categoryId);
        });
        div = document.getElementById('category-' + categoryId);
        div.remove();
        categoryInput = document.getElementById('category-input');
        categoryInput.value = categoriesId;

        filterButton = document.getElementById('filter-button');
        filterButton.href = "/search?query=" + query + "&categories=" + categoriesId;
    }
</script>
