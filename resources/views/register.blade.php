@extends('components.layout')


@section('content')
    <section class="py-24">
        <div class="flex flex-col gap-8 items-center font-montserrat max-w-md px-4 mx-auto">
            <img src="{{ asset('images/logo.svg') }}" class="w-48" alt="">
            <form class="w-full flex flex-col gap-3" method="POST" enctype="multipart/form-data"
                action="{{ url('/register') }}">
                @csrf
                <div class="flex flex-col gap-2">
                    <label class="font-medium">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name"
                        class="border-[1px] rounded p-3 border-dark/[0.5]">
                    @if ($errors->has('name'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('name') }}</label>
                    @endif
                </div>
                <div class="flex flex-col gap-2">
                    <label class="font-medium">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email"
                        class=" border-[1px] rounded p-3 border-dark/[0.5]">
                    @if ($errors->has('email'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('email') }}</label>
                    @endif
                </div>
                <div class="flex flex-col gap-2">
                    <label class="font-medium">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password"
                        class=" border-[1px] rounded p-3 border-dark/[0.5]">
                    @if ($errors->has('password'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('password') }}</label>
                    @endif
                </div>
                <button
                    class="mt-4 px-5 py-3 bg-highlight font-bold text-white rounded hover:bg-dark hover:text-highlight transition-all ease-in duration-75"
                    data-bs-dismiss="modal">REGISTER</button>
            </form>
            <p class="self-start">Already have an account? <a href="/login"
                    class="hover:underline text-highlight font-bold">Login</a>
            </p>
        </div>
    </section>
@endsection
