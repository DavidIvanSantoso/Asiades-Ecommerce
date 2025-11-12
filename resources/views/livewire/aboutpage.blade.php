@extends('app')

@section('title', 'Asiades E-Commerce')

@section('content')
<div class="container mx-auto my-8 p-10 rounded-2xl shadow-md bg-gray-100" >
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
         <div>
            <h2 class="text-3xl font-extrabold text-gray-900 mb-6">About Us!</h2>
            <h3 class="text-2xl font-bold text-amber-700 mb-4">Our Company</h3>
            <p class="text-gray-700 leading-relaxed mb-4">
                <strong style="color:#dd6027">AsiadesFurniture</strong> adalah perusahaan e-commerce yang berfokus pada penyediaan berbagai
                produk furnitur modern, elegan, dan berkualitas tinggi. Kami percaya bahwa setiap ruang memiliki karakter
                unik, dan furnitur yang tepat dapat menghadirkan suasana yang nyaman sekaligus estetik.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Nikmati pengalaman belanja furniture yang mudah, aman, dan menyenangkan — langsung dari rumah Anda.
            </p>
        </div>
        <div>
           <img src="https://grahaoffice.id/wp-content/uploads/2023/06/pemandangan.jpeg" 
                 alt="About Us Image"
                 class="w-full h-auto rounded-lg shadow-lg">
        </div>
    </div>
</div>

<div class="container mx-auto my-8 p-10 text-center">
    <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Our Location</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">
        <div class="flex flex-col items-center p-6 rounded-xl bg-gray-100 hover:bg-amber-100 shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
            <span class="text-5xl">🇺🇸</span>
            <p class="mt-3 text-lg font-semibold">United States</p>
        </div>
        <div class="flex flex-col items-center p-6 rounded-xl bg-gray-100 hover:bg-amber-100 shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
            <span class="text-5xl">🇯🇵</span>
            <p class="mt-3 text-lg font-semibold">Japan</p>
        </div>
        <div class="flex flex-col items-center p-6 rounded-xl bg-gray-100 hover:bg-amber-100 shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
            <span class="text-5xl">🇩🇪</span>
            <p class="mt-3 text-lg font-semibold">Germany</p>
        </div>
        <div class="flex flex-col items-center p-6 rounded-xl bg-gray-100 hover:bg-amber-100 shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
            <span class="text-5xl">🇫🇷</span>
            <p class="mt-3 text-lg font-semibold">France</p>
        </div>
        <div class="flex flex-col items-center p-6 rounded-xl bg-gray-100 hover:bg-amber-100 shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
            <span class="text-5xl">🇨🇦</span>
            <p class="mt-3 text-lg font-semibold">Canada</p>
        </div>
        <div class="flex flex-col items-center p-6 rounded-xl bg-gray-100 hover:bg-amber-100 shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
            <span class="text-5xl">🇦🇺</span>
            <p class="mt-3 text-lg font-semibold">Australia</p>
        </div>
    </div>
</div>

<section class="bg-gray-50 py-16 container mx-auto my-8 p-10 rounded-2xl shadow-md bg-gray-100">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-6">Our Mission</h2>
        

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            <!-- Quality -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-2 transition duration-300">
                <div class="text-5xl mb-4">🛋️</div>
                <h3 class="text-xl font-bold mb-2">High Quality</h3>
                <p class="text-gray-600 leading-relaxed">
                    Kami menyediakan furnitur dengan kualitas terbaik yang tahan lama dan nyaman digunakan.
                </p>
            </div>

            <!-- Style -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-2 transition duration-300">
                <div class="text-5xl mb-4">✨</div>
                <h3 class="text-xl font-bold mb-2">Modern & Elegant</h3>
                <p class="text-gray-600 leading-relaxed">
                    Setiap produk dirancang dengan estetika modern, cocok untuk berbagai gaya interior rumah Anda.
                </p>
            </div>

            <!-- Convenience -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-2 transition duration-300">
                <div class="text-5xl mb-4">🏠</div>
                <h3 class="text-xl font-bold mb-2">Easy Shopping</h3>
                <p class="text-gray-600 leading-relaxed">
                    Belanja furnitur dari rumah dengan pengalaman yang mudah, aman, dan cepat hingga ke pintu Anda.
                </p>
            </div>
        </div>
    </div>
</section>



@endsection