<header class="fixed top-0 z-50 flex w-full justify-between bg-white p-3">
    <div>
        <a href="#">
            <img src="https://thememarch.com/demo/html/posing/assets/img/logo.svg" alt="Logo" />
        </a>
    </div>
    <nav class="hidden items-center lg:flex">
        <ul class="flex space-x-7 text-xl">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#feature">Feature</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <div class="hidden items-center space-x-5 lg:flex">
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('signup') }}" class="rounded bg-[#52C8C4] px-3 py-2 text-white hover:bg-[#198754] focus:bg-[#198754] focus:outline-none focus:ring focus:ring-green-200">Start For Free</a>
    </div>
    <button id="toggleNavButton" class="lg:hidden" onclick="navToggle()">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>
</header>
<nav id="navSmall" class="mt-20 hidden lg:hidden">
    <ul class="bg-white-200 flex w-full flex-col items-center">
        <li class="w-full rounded border-b-2 p-2 text-center font-bold hover:bg-gray-200"><a href="#home">Home</a>
        </li>
        <li class="w-full rounded border-b-2 p-2 text-center font-bold hover:bg-gray-200"><a href="#about">About</a>
        </li>
        <li class="w-full rounded border-b-2 p-2 text-center font-bold hover:bg-gray-200"><a href="#feature">Feature</a>
        </li>
        <li class="w-full rounded border-b-2 p-2 text-center font-bold hover:bg-gray-200"><a href="#pricing">Pricing</a>
        </li>
        <li class="w-full rounded border-b-2 p-2 text-center font-bold hover:bg-gray-200"><a href="#news">News</a>
        </li>
        <li class="w-full rounded border-b-2 p-2 text-center font-bold hover:bg-gray-200"><a href="#contact">Contact</a>
        </li>
        <li class="w-full rounded border-b-2 p-2 text-center hover:bg-gray-200 flex space-x-5 justify-center"><button href="/auth/signup">Login</button><button>Start
            For Free</button>
        </li>
    </ul>
    <!-- Mobile Menu -->
</nav>
