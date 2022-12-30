<div class="modal fade fixed top-[50px] left-0 hidden w-[100vw] h-[100vh] overflow-x-hidden overflow-y-auto"
    id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog relative w-auto pointer-events-none">
        <div class="modal-content pointer-events-auto bg-white rounded">
            <div class="modal-header flex flex-row items-center justify-between px-8 pt-8">
                <h1 class="font-bold text-4xl pt-5">Register</h1>
                <button type="button" class="text-5xl text-black" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-regular fa-x"></i></button>
            </div>
            <div class="modal-body relative p-8 font-montserrat">
                <form class="flex flex-col" method="POST" enctype="multipart/form-data"
                    action="{{ url('/register') }}">
                    @csrf
                    <label class="font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name"
                        class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]">
                    <label class="font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email"
                        class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]">
                    <label class="font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password"
                        class="mb-5 border-[1px] rounded p-3 border-dark/[0.5]">
                    <button class="px-5 py-3 bg-highlight font-bold text-white rounded"
                        data-bs-dismiss="modal">REGISTER</button>
                </form>
                <p class="font-montserrat">Already have an account? <a href="#login"
                        class="text-highlight font-bold">Login</a></p>
            </div>
        </div>
    </div>
</div>
