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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></script>
    <script src="https://cdn.tailwindcss.com"></script>
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
            <ul class="flex flex-row gap-10">
                <li>
                    <a href="/" class="font-light hover:underline">Home</a>
                </li>
                <li>
                    <a href="/" class="font-light hover:underline">Create Article</a>
                </li>
                <li>
                    <a href="/" class="font-light hover:underline">Login</a>
                </li>
                <li>
                    <a href="/"
                        class="font-bold text-white bg-highlight px-6 py-3 rounded-md hover:bg-dark hover:text-highlight transition-all ease-in duration-75">Register</a>
                </li>
            </ul>
        </nav>
    </header>

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
