@extends('app')

@section('title', 'Asiades E-Commerce')

@section('content')

{{-- Promo Section --}}
<div class="container mx-auto">
    <livewire:promo-banner />
</div>

{{-- Bubble Info Number --}}

<div class="container mx-auto my-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
        <div class="bg-gray-700 rounded-lg shadow-md p-6 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
            <h3 class="text-2xl font-extrabold  mb-2" style="color: white">⭐5</h3>
            <p class="text-white font-bold">Customer Satisfaction</p>
        </div>

        <div class="bg-gray-700 rounded-lg shadow-md p-6 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
            <h3 class="text-2xl font-extrabold  mb-2" style="color:white">500+</h3>
            <p class="text-white font-bold">Products</p>
        </div>

        <div class="bg-gray-700 rounded-lg shadow-md p-6 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
            <h3 class="text-2xl font-extrabold  mb-2" style="color:white">24/7</h3>
            <p class="text-white font-bold">Customer Service</p>
        </div>
    </div>
</div>

{{-- Product Unggulan --}}
<div class="container mx-auto">
    <h2 class="text-3xl font-extrabold text-gray-900 mb-6 px-3">Our New Products!</h2>
    
   <div class="swiper mySwiper container mx-auto my-8 pb-10">
    <div class="swiper-wrapper px-10">
        <!-- CARD PRODUCT UNGGULAN (SCRIPT) -->
       
    </div>
    
  <!-- Tombol navigasi -->
<div class="swiper-button-prev !text-[#31694E] hover:!text-amber-500"></div>
<div class="swiper-button-next !text-[#31694E] hover:!text-amber-500"></div>


  <!-- Pagination -->
  <div class="swiper-pagination"></div>
   
</div>

</div>

{{-- About Us Section --}}
<div class="container mx-auto my-8 p-10 rounded-2xl shadow-md" style="background-color:white;">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div>
            <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Why choose us!</h2>
            <h3 class="text-2xl font-bold text-amber-700 mb-4">Your Home, Our Inspiration</h3>
            <p class="text-gray-700 leading-relaxed mb-4">
                Semua furniture kami dibuat dari bahan pilihan, dengan perhatian pada detail, keawetan, dan estetika. 
                Kami percaya bahwa rumah yang indah dimulai dari perabotan yang tepat, dan kami hadir untuk membantu Anda mewujudkannya.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Nikmati pengalaman belanja furniture yang mudah, aman, dan menyenangkan — langsung dari rumah Anda.
            </p>
        </div>
        <div>
           <img src="https://shila.co.id/wp-content/uploads/2024/12/Desain-Interior-Minimalis-scaled.webp" 
                 alt="About Us Image"
                 class="w-full h-auto rounded-lg shadow-lg">
        </div>
    </div>
   
</div>

<div class="container mx-auto my-8 p-10 rounded-2xl shadow-md" style="background-color:white;">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
       
        <div>
           <img src="https://grahaoffice.id/wp-content/uploads/2023/06/pemandangan.jpeg" 
                 alt="About Us Image"
                 class="w-full h-auto rounded-lg shadow-lg">
        </div>
         <div>
            <h2 class="text-3xl font-extrabold text-gray-900 mb-6">About Us!</h2>
            <h3 class="text-2xl font-bold text-amber-700 mb-4">Our Company</h3>
            <p class="text-gray-700 leading-relaxed mb-4">
                <strong style="color:#31694E">Asiades Furniture</strong> adalah perusahaan e-commerce yang berfokus pada penyediaan berbagai
                produk furnitur modern, elegan, dan berkualitas tinggi. Kami percaya bahwa setiap ruang memiliki karakter
                unik, dan furnitur yang tepat dapat menghadirkan suasana yang nyaman sekaligus estetik.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Nikmati pengalaman belanja furniture yang mudah, aman, dan menyenangkan — langsung dari rumah Anda.
            </p>
        </div>
    </div>
   
</div>
    
@endsection

