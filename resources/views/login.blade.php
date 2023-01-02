@extends('components.layout')


@section('content')
    <section class="py-24">
        <div class="flex flex-col gap-8 items-center font-montserrat max-w-md px-4 mx-auto">
            <img src="{{ asset('images/logo.svg') }}" class="w-48" alt="">
            <form class="w-full flex flex-col gap-3" method="POST" enctype="multipart/form-data" action="{{ url('/login') }}">
                @csrf
                <div class="flex flex-col gap-2">
                    <label class="font-medium">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email"
                        class="border-[1px] rounded-md p-3 border-dark/[0.5]">
                    @if ($errors->has('email'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('email') }}</label>
                    @endif
                </div>
                <div class="flex flex-col gap-2">
                    <label class="font-medium">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password"
                        class="border-[1px] rounded-md p-3 border-dark/[0.5]">
                    @if ($errors->has('password'))
                        <label class="text-red-500 text-sm">{{ $errors->first('password') }}</label>
                    @endif
                </div>
                @if ($errors->has('error'))
                    <label class="text-red-500 text-sm">{{ $errors->first('error') }}</label>
                @endif
                <button
                    class="mt-4 px-5 py-3 bg-highlight font-bold text-white rounded-md hover:bg-dark hover:text-highlight transition-all ease-in duration-75">LOGIN</button>
            </form>
            <p class="self-start">Don't have an account? <a href="/register"
                    class="hover:underline text-highlight font-bold">Register</a>
            </p>
        </div>
    </section>
@endsection
