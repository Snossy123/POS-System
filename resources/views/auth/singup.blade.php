@include('../layout/header')
<section class="body-font my-20 overflow-hidden text-gray-600">
    <div class="container mx-auto px-5 py-24">
        <div class="mx-auto flex flex-wrap lg:w-4/5">
            <img alt="ecommerce" class="h-60 w-full rounded object-cover object-center md:w-1/2 lg:h-auto lg:w-1/2"
                src="{{ asset('images\computer-security-with-login-password-padlock.jpg') }}" />
            <form class="mt-10 flex w-full flex-col rounded-lg bg-gray-100 p-8 md:mr-auto md:mt-0 md:w-1/2 lg:w-3/6"
                action="{{ route('createAccount') }}" method="post">
                @csrf
                <h2 class="title-font mb-5 text-lg font-medium text-gray-900">Sign Up</h2>
                <div class="relative mb-4">
                    <label for="full-name" class="text-sm leading-7 text-gray-600">Full Name</label>
                    <input type="text" id="full-name" name="full-name" value="{{old('full-name')}}"
                        class="w-full rounded border border-gray-300 bg-white px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                    @if ($errors->has('full-name'))
                        @foreach ($errors->get('full-name') as $err)
                            <h1 class="text-red-500">{{ $err }}</h1>
                        @endforeach
                    @endif
                </div>
                <div class="relative mb-4">
                    <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
                    <input type="email" id="email" name="email" value="{{old('email')}}"
                        class="w-full rounded border border-gray-300 bg-white px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                    @if ($errors->has('email'))
                        @foreach ($errors->get('email') as $err)
                            <h1 class="text-red-500">{{ $err }}</h1>
                        @endforeach
                    @endif
                </div>
                <div class="relative mb-4">
                    <label for="password" class="text-sm leading-7 text-gray-600">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full rounded border border-gray-300 bg-white px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                    @if ($errors->has('password'))
                        @foreach ($errors->get('password') as $err)
                            <h1 class="text-red-500">{{ $err }}</h1>
                        @endforeach
                    @endif
                </div>
                <div class="relative mb-4">
                    <label for="password_confirmation" class="text-sm leading-7 text-gray-600">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="w-full rounded border border-gray-300 bg-white px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                </div>
                <button type="submit"
                    class="rounded border-0 bg-indigo-500 px-8 py-2 text-lg text-white hover:bg-indigo-600 focus:outline-none">Register</button>
                <p class="mt-3 text-xs text-gray-500">Already have an Account? <a href="login"
                        class="text-blue-600">Login</a></p>
            </form>
        </div>
    </div>
</section>
@include('../layout/footer')
