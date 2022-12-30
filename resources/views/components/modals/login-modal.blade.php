<div class="modal fade fixed left-0 hidden w-[100vw] h-[100vh] overflow-x-hidden overflow-y-auto" id="login"
    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog relative w-auto pointer-events-none">
        <div class="modal-content pointer-events-auto bg-white rounded">
            <div class="modal-header flex flex-row items-center justify-between px-8 pt-8">
                <h1 class="font-bold text-4xl pt-5">Login</h1>
                <button type="button" class="text-5xl text-black" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-regular fa-x"></i></button>
            </div>
            <div class="modal-body relative p-8 font-montserrat">
                <form class="flex flex-col" method="POST" enctype="multipart/form-data" action="{{ url('/login') }}">
                    @csrf
                    <label class="font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email"
                        class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]">
                    @if ($errors->has('email'))
                        <label class="mb-3 text-red-500 text-sm">{{ $errors->first('email') }}</label>
                    @endif
                    <label class="font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password"
                        class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]">
                    @if ($errors->has('password'))
                        <label class="mb-3 text-red-500 text-sm">{{ $errors->first('password') }}</label>
                    @endif
                    @if ($errors->has('error'))
                        <label class="mb-3 text-red-500 text-sm">{{ $errors->first('error') }}</label>
                    @endif
                    <button class="px-5 py-3 bg-highlight font-bold text-white rounded"
                        data-bs-dismiss="modal">LOGIN</button>
                </form>
                <p class="font-montserrat">Don't have an account? <a href="#register"
                        class="text-highlight font-bold">Register</a>
                </p>
            </div>

        </div>
    </div>
</div>
