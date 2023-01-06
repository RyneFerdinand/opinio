@extends('components.layout')

@section('content')
    <section class="pt-12 pb-24">
        <div class="flex flex-col gap-8 w-5/6 font-montserrat items-center font-montserrat max-w-screen-2xl mx-auto">
            <h1 class="font-bold text-4xl mb-4 text-center">Edit Profile</h1>
            <div class="flex flex-col items-center justify-center w-full">
                <form class="w-full relative" id="cover-picture-form" method="POST" enctype="multipart/form-data"
                    action="/user/{{ $user->id }}/update/cover">
                    @csrf
                    @method('patch')
                    <img src={{ $user->coverPicture }} class="w-full h-[40vh] rounded-md object-cover">
                    <button type="button" onclick="toggleCoverEdit()"
                        class="opacity-0 hover:opacity-100 text-white gap-4 text-opacity-80 w-full h-full rounded-md bg-dark bg-opacity-40 absolute inset-0 flex items-center justify-center transition-opacity ease-in duration-75">
                        <i class="fas fa-edit text-4xl"></i>
                        <p class="text-2xl">Edit Cover</p>
                    </button>
                    <input type="file" accept="image/*" name="coverPicture" id="cover-picture-input" class="hidden"
                        onchange="submitCoverPicture()">
                </form>
                @if ($errors->has('coverPicture'))
                    <label class=" text-red-500 text-sm">{{ $errors->first('coverPicture') }}</label>
                @endif
                <form class="relative flex justify-center w-fit mt-[-100px] mb-5" id="profile-picture-form" method="POST"
                    enctype="multipart/form-data" action="/user/{{ $user->id }}/update/profile">
                    @csrf
                    @method('patch')
                    <img src={{ $user->profilePicture }} class="w-32 aspect-square rounded-full object-cover">
                    <button onclick="toggleProfileEdit()" type="button"
                        class="text-white text-opacity-80 opacity-0 hover:opacity-100 bg-dark bg-opacity-40 w-full h-full absolute rounded-full inset-0 flex items-center justify-center transition-opacity ease-in duration-75">
                        <i class="fas fa-edit text-4xl"></i>
                    </button>
                    <input type="file" accept="image/*" name="profilePicture" id="profile-picture-input" class="hidden"
                        onchange="submitProfilePicture()">
                    </form>
                @if ($errors->has('profilePicture'))
                    <label class=" text-red-500 text-sm">{{ $errors->first('profilePicture') }}</label>
                @endif
                <div class="flex flex-row justify-center items-center text-xl gap-5 mt-5">
                    <button onclick="toggleEditSection('personal')" type="button" id="personal-button"
                        class="pb-1 border-b-4 hover:opacity-60 border-highlight text-highlight font-bold">
                        Personal
                    </button>
                    <button onclick="toggleEditSection('authentication')" type="button" id="authentication-button"
                        class=" pb-1 border-b-4 hover:opacity-60 border-highlight border-opacity-0 text-dark/[50%]">
                        Authentication
                    </button>
                </div>
            </div>
            {{-- Personal form --}}
            <form class="max-w-md mx-auto w-full flex flex-col gap-3" id="personal-form" method="POST"
                enctype="multipart/form-data" action="/user/{{ $user->id }}/update/personal">
                @csrf
                @method('patch')
                <div class="flex flex-col gap-2">
                    <label class="font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name"
                        class="border-[1px] rounded p-3 border-dark/[0.5]" value="{{ $user->name }}">
                    @if ($errors->has('name'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('name') }}</label>
                    @endif
                </div>
                <div class="flex flex-col gap-2">
                    <label class="font-medium">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email"
                        class="border-[1px] rounded-md p-3 border-dark/[0.5]" value="{{ $user->email }}">
                    @if ($errors->has('email'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('email') }}</label>
                    @endif
                </div>
                <div class="flex flex-col gap-2">
                    <label class="font-medium mb-2">Bio</label>
                    <textarea id="about" name="about" placeholder="about" rows="8"
                        class="border-[1px] rounded p-3 border-dark/[0.5] resize-none">{{ $user->about }}</textarea>
                    @if ($errors->has('about'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('about') }}</label>
                    @endif
                </div>
                <button
                    class="px-5 py-3 mt-5 bg-highlight font-bold text-white rounded hover:bg-dark hover:text-highlight transition-all ease-in duration-75">UPDATE</button>
            </form>

            <form class="max-w-md mx-auto w-full flex-col gap-3 hidden" id="authentication-form" method="POST"
                enctype="multipart/form-data" action="/user/{{ $user->id }}/update/authentication">
                @csrf
                @method('patch')
                <div class="flex flex-col gap-2">
                    <label class="font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password"
                        class="border-[1px] rounded p-3 border-dark/[0.5]">
                    @if ($errors->has('password'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('password') }}</label>
                    @endif
                </div>
                <div class="flex flex-col gap-2">
                    <label class="font-medium">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirmPassword" placeholder="Confirm Password"
                        class="border-[1px] rounded-md p-3 border-dark/[0.5]">
                    @if ($errors->has('confirmPassword'))
                        <label class=" text-red-500 text-sm">{{ $errors->first('confirmPassword') }}</label>
                    @endif
                </div>
                <button
                    class="px-5 py-3 mt-5 bg-highlight font-bold text-white rounded hover:bg-dark hover:text-highlight transition-all ease-in duration-75"
                    data-bs-dismiss="modal">UPDATE</button>
            </form>



        </div>
    </section>
@endsection
<script>
    let editSection = {!! json_encode(session('editSection')) !!} ? {!! json_encode(session('editSection')) !!} : 'personal';

    let coverPictureForm = null;
    let profilePictureForm = null;

    let coverPictureInput = null;
    let profilePictureInput = null;

    let personalForm = null;
    let authenticationForm = null;

    let personalButton = null;
    let authenticationButton = null;

    function initializeElements() {
        coverPictureForm = document.getElementById('cover-picture-form');
        profilePictureForm = document.getElementById('profile-picture-form');

        coverPictureInput = document.getElementById('cover-picture-input');
        profilePictureInput = document.getElementById('profile-picture-input');

        personalForm = document.getElementById('personal-form');
        authenticationForm = document.getElementById('authentication-form');

        personalButton = document.getElementById('personal-button');
        authenticationButton = document.getElementById('authentication-button');

    }

    function toggleCoverEdit() {
        coverPictureInput.click();
    }

    function toggleProfileEdit() {
        profilePictureInput.click();
    }

    function submitProfilePicture() {
        if (profilePictureInput.value) {
            profilePictureForm.submit();
        }
    }

    function submitCoverPicture() {
        if (coverPictureInput.value) {
            coverPictureForm.submit();
        }
    }

    function showPersonalSection() {
        personalForm.classList.remove('hidden');
        personalForm.classList.add('flex');
        personalButton.classList.add('text-highlight', 'font-bold');
        personalButton.classList.remove('border-opacity-0', 'text-dark/[50%]');

        authenticationForm.classList.add('hidden');
        authenticationForm.classList.remove('flex');
        authenticationButton.classList.add('border-opacity-0', 'text-dark/[50%]');
        authenticationButton.classList.remove('text-highlight', 'font-bold');
    }

    function showAuthenticationSection() {
        personalForm.classList.add('hidden');
        personalForm.classList.remove('flex');
        personalButton.classList.remove('text-highlight', 'font-bold');
        personalButton.classList.add('border-opacity-0', 'text-dark/[50%]');

        authenticationForm.classList.remove('hidden');
        authenticationForm.classList.add('flex');
        authenticationButton.classList.remove('border-opacity-0', 'text-dark/[50%]');
        authenticationButton.classList.add('text-highlight', 'font-bold');
    }

    function toggleEditSection(type) {
        if (type === editSection) return;
        editSection = type;

        if (type === 'personal') showPersonalSection();
        else showAuthenticationSection();
    }

    window.onload = () => {

        initializeElements();
        if (editSection === 'personal') showPersonalSection();
        else showAuthenticationSection();
    }
</script>
