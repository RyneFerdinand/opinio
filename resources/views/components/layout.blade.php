<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="{{ asset('/images/icon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    highlight: '#F6961D',
                    light: '#F0F0F0',
                    dark: '#181818'
                }
            },
            fontFamily: {
                'montserrat': ['Montserrat', 'sans-serif'],
                'poppins': ['Poppins', 'sans-serif']
            }
        }
    }
</script>
<style>
    ::-moz-selection {
        background: #181818;
        color: #F6961D;
    }

    ::selection {
        background: #181818;
        color: #F6961D;
    }
</style>
<title>Opinio</title>
</head>

<body class="bg-light box-border">
    <header id="header" class="flex flex-row font-montserrat items-center justify-between py-8 px-12">
        <a href="/">
            <img src="{{ asset('images/logo.svg') }}" alt="">
        </a>
        <form class="bg-white flex flex-row gap-2 px-4 py-1 rounded-md w-1/2" method="GET"
            enctype="multipart/form-data" action="{{ url('/search') }}">
            <input type="text" name="query" id="query" class="bg-transparent w-full outline-none"
                placeholder="Search for Articles">
            <button typ e="submit">
                <i class="fa fa-search text-black p-3 rounded-r-md"></i>
            </button>
        </form>
        <nav class="font-semibold">
            <ul class="flex flex-row items-center gap-10">
                <li>
                    <a href="/create-article" class="font-light hover:underline">Create Article</a>
                </li>
                <li>
                    @auth
                        <div class="flex justify-center">
                            <div>
                                <div class="dropdown relative">
                                    <button class="dropdown-toggle flex flex-row items-center" type="button"
                                        id="dropdownfeature" data-bs-toggle="dropdown">
                                        <img src={{ asset(Auth::user()->profilePicture) }}
                                            class="w-[54px] h-[55px] object-cover rounded-full">
                                    </button>
                                    <div class="dropdown-menu hidden bg-white w-[200px] z-50 pt-2"
                                        aria-labelledby="dropdownfeature">
                                        <a href="{{ url('/user/' . Auth::user()->id) }}"
                                            class="px-5 py-2 dropdown-item block w-full">Profile</a>
                                        <a href="{{ url('/logout') }}"
                                            class="px-5 py-2 dropdown-item block w-full">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="/login" class="font-light hover:underline">Login</a>
                    </li>
                    <li>
                        <a href="/register">
                            <button
                                class="font-bold text-white bg-highlight px-6 py-3 rounded-md hover:bg-dark hover:text-highlight transition-all ease-in duration-75">Register
                            </button>
                        </a>
                    </li>
                @endauth
            </ul>
        </nav>
    </header>

    <div id="content">
        @yield('content')
    </div>

    <footer id="footer" class="bg-dark text-white px-12 py-20 font-montserrat">
        <div class="grid lg:grid-cols-4 gap-10 lg:gap-24">
            <div class="flex flex-col gap-4">
                <img src="{{ asset('images/logo-light.svg') }}" class="w-28 object-cover" alt="">
                <p class="font-light opacity-70">
                    Opinio is a blog website where people can share their thoughts and ideas
                </p>
                <ul class="flex gap-5 items-center">
                    <li>
                        <a href="https://www.facebook.com">
                            <i class="fab fa-facebook-f text-2xl opacity-70 hover:opacity-100 cursor-pointer"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com">
                            <i class="fab fa-twitter text-2xl opacity-70 hover:opacity-100 cursor-pointer"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com">
                            <i class="fab fa-instagram text-2xl opacity-70 hover:opacity-100 cursor-pointer"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com">
                            <i class="fab fa-linkedin text-2xl opacity-70 hover:opacity-100 cursor-pointer"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-lg mb-4">Directories</h4>
                <ul class="opacity-70 flex flex-col gap-4">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/articles">Articles</a>
                    </li>
                    <li>
                        <a href="/search">Search</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-lg mb-4">Address</h4>
                <p class="font-light opacity-70 w-3/4">
                    211 Spring Road, Tangerang, East Java, Indonesia
                </p>
            </div>
            <div>
                <h4 class="font-bold text-lg mb-4">Contact Us</h4>
                <ul class="opacity-70 flex flex-col gap-4">
                    <li>
                        <a href="mailto:cs@opinio.com">cs@opinio.com</a>
                    </li>
                    <li>
                        <p>+62 888 111 2222</p>
                    </li>
                </ul>
            </div>
        </div>
        <span class="block h-[1px] bg-white bg-opacity-40 my-8"></span>
        <div class="flex justify-between">
            <p class="opacity-70">Copyright © 2022 Opinio</p>
            <div class="flex items-center gap-2">
                <p><b>{{ $articlesCount }}</b> articles posted</p>
                <img src="{{ asset('images/small-logo.svg') }}" alt="">
            </div>
        </div>
    </footer>
</body>

</html>
<script>
    var heightHeader = document.getElementById('header').offsetHeight;
    var heightFooter = document.getElementById('footer').offsetHeight;
    var heightScreen = screen.height;
    var heightContent = heightScreen - heightHeader - heightFooter;

    document.getElementById('content').style.minHeight = heightContent + "px";
</script>
