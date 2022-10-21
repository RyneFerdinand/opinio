<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
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
    <title>Opinio</title>
</head>

<body class="bg-light">
    <header class="flex flex-row font-montserrat items-center justify-between py-6 px-12">
        <img src="{{ asset('images/logo.svg') }}" alt="">
        <div class="bg-white flex flex-row gap-2 px-6 py-3 rounded-md w-1/2">
            <input type="text" class="bg-transparent w-full outline-none" placeholder="Search for Articles">
            <img src="{{ asset('images/search-icon.svg') }}" alt="">
        </div>
        <nav>
            <ul class="flex flex-row items-center gap-10">
                <li>
                    <a href="/" class="font-light hover:underline">Home</a>
                </li>
                <li>
                    <a href="/" class="font-light hover:underline">Create Article</a>
                </li>
                <li>
                    {{-- <a href="/" class="font-light hover:underline">Login</a> --}}
                    <!-- Button trigger modal -->
                <button type="button"
                class="font-light hover:underline"
                data-bs-toggle="modal" data-bs-target="#login">
                Login
                </button>

                <!-- Modal -->
                <div class="modal fade fixed left-0 hidden w-[100vw] h-[100vh] overflow-x-hidden overflow-y-auto"
                id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog relative w-auto pointer-events-none">
                    <div class="modal-content pointer-events-auto bg-white rounded">
                        <div class="modal-header flex flex-row items-center justify-between px-8 pt-8">
                            <h1 class="font-bold text-4xl pt-5">Login</h1>
                            <button type="button"
                                class="text-5xl text-black"
                                data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body relative p-8 font-montserrat">
                                <form class="flex flex-col">
                                    <label class="font-bold mb-2">Email</label>
                                    <input type="text" id="email" name="email" placeholder="Email" class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]">
                                    <label class="font-bold mb-2">Password</label>
                                    <input type="password" id="password" name="password" placeholder="Password" class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]">
                                    <button class="px-5 py-3 bg-highlight font-bold text-white rounded" data-bs-dismiss="modal">LOGIN</button>
                                </form>
                                <p class="font-montserrat">Don't have an account? <a href="#register" class="text-highlight font-bold">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                </li>
                <li>
                    <button
                        data-bs-toggle="modal" data-bs-target="#register" class="font-bold text-white bg-highlight px-6 py-3 rounded-md hover:bg-dark hover:text-highlight transition-all ease-in duration-75">Register
                    </button>
                    <div class="modal fade fixed top-[50px] left-0 hidden w-[100vw] h-[100vh] overflow-x-hidden overflow-y-auto"
                    id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog relative w-auto pointer-events-none">
                        <div class="modal-content pointer-events-auto bg-white rounded">
                            <div class="modal-header flex flex-row items-center justify-between px-8 pt-8">
                                <h1 class="font-bold text-4xl pt-5">Register</h1>
                                <button type="button"
                                    class="text-5xl text-black"
                                    data-bs-dismiss="modal" aria-label="Close">X</button>
                                </div>
                                <div class="modal-body relative p-8 font-montserrat">
                                    <form class="flex flex-col">
                                        <label class="font-bold mb-2">Name</label>
                                        <input type="text" id="name" name="name" placeholder="Name" class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]">
                                        <label class="font-bold mb-2">Email</label>
                                        <input type="text" id="email" name="email" placeholder="Email" class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]">
                                        <label class="font-bold mb-2">Password</label>
                                        <input type="password" id="password" name="password" placeholder="Password" class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]">
                                        <button class="px-5 py-3 bg-highlight font-bold text-white rounded" data-bs-dismiss="modal">REGISTER</button>
                                    </form>
                                    <p class="font-montserrat">Already have an account? <a href="#login" class="text-highlight font-bold">Login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer class="bg-dark text-white px-12 py-20 font-montserrat">
        <div class="grid grid-cols-4 gap-24 ">
            <div class="flex flex-col gap-4">
                <img src="{{ asset('images/logo-light.svg') }}" class="w-2/5" alt="">
                <p class="font-light opacity-70">
                    Opinio is a blog website where people can share their thoughts and ideas
                </p>
                <ul class="flex gap-5 items-center">
                    <li><i class="fa fa-facebook text-xl opacity-70 hover:opacity-100 cursor-pointer"></i></li>
                    <li><i class="fa fa-twitter text-2xl opacity-70 hover:opacity-100 cursor-pointer"></i></li>
                    <li><i class="fa fa-instagram text-2xl opacity-70 hover:opacity-100 cursor-pointer"></i></li>
                    <li><i class="fa fa-linkedin text-2xl opacity-70 hover:opacity-100 cursor-pointer"></i></li>
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
                        <a href="">cs@opinio.com</a>
                    </li>
                    <li>
                        <a href="">+62 888 111 2222</a>
                    </li>
                </ul>
            </div>
        </div>
        <span class="block h-[1px] bg-white bg-opacity-40 my-8"></span>
        <div class="flex justify-between">
            <p class="opacity-70">Copyright © 2022 Opinio</p>
            <div class="flex items-center gap-2">
                <p><b>128</b> articles posted</p>
                <img src="{{ asset('images/small-logo.svg') }}" alt="">
            </div>
        </div>
    </footer>
</body>

</html>
