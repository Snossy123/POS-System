@section('title', "POS-Home")
@include('layout/header')
@include('layout/nav')

<section class="w-full bg-cover bg-center"
    style="background-image: url('https://thememarch.com/demo/html/posing/assets/img/hero_bg.svg');">
    <div class="justify-center py-24 lg:flex">
        <div class="py-40 text-center lg:text-left">
            <div class="text-lg text-[#52C8C4]">Free Forever For All Users.</div>
            <h1 class="my-2 text-7xl font-extrabold">Easy-to-use <br />Point of Sale</h1>
            <div class="mb-10 text-lg text-gray-500">You may start selling in a matter of minutes and it's easy
                to<br />use. Suitable for all devices.</div>
            <a href="signup"
                class="rounded bg-[#0d6efd] p-5 font-bold text-white hover:bg-[#0d6dfdbd] focus:bg-[#0044ff] focus:outline-none focus:ring focus:ring-sky-200">Start
                Free Trial</a>
        </div>
        <div class="flex justify-center">
            <img src="https://thememarch.com/demo/html/posing/assets/img/hero_img.png" alt="Hero Image" />
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#toggleNavButton").on("click", function() {
            $("#navSmall").toggleClass("hidden");
        });
    });
</script>
@include('layout/footer')
