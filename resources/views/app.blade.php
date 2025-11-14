<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Asiades E-Commerce')</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @livewireStyles
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    <livewire:navbar />

    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-6">
      @yield('content')
    </main>


    <livewire:footer />

    @livewireScripts
    @stack('scripts')
   
    <script>
document.addEventListener("DOMContentLoaded", function() {
   const products = [
      {
        name: "Classic Chair",
        price: 299.99,
        image: "https://furniture123.co.uk/Images/BUNKOR00195433_3_Supersize.jpg?v=79",
        colors: ["#8B4513", "#D2B48C", "#000000", "#FFFFFF"],
        category: "Chair"
      },
      {
        name: "Modern Sofa",
        price: 499.99,
        image: "https://www.estre.in/cdn/shop/files/2-min_d2bc49bf-1893-4118-bab5-8d0848d4d3fb.jpg?v=1743762905",
        colors: ["#808080", "#F5F5DC", "#000000"],
        category: "Sofa"
      },
      {
        name: "Wooden Table",
        price: 199.99,
        image: "https://ushashriram.in/cdn/shop/products/61WS_A6yZBL.jpg?v=1689857091",
        colors: ["#A0522D", "#8B4513", "#000000"],
        category: "Table"
      },
      {
        name: "Elegant Lamp",
        price: 99.99,
        image: "https://www.ikea.com/us/en/images/products/flyghoejd-table-lamp-brass-beige__1244487_pe921207_s5.jpg?f=s",
        colors: ["#FFD700", "#E5E4E2", "#000000"],
        category: "Lamp"
      },
      {
        name: "Minimalist Table",
        price: 249.99,
        image: "https://media.adorno.design/wp-content/uploads/2024/01/20110704/handcraft.laluz-_MG_0728.webp",
        colors: ["#8B5A2B", "#C2B280"],
        category: "Table"
      },
      {
        name: "Luxury Sofa",
        price: 799.99,
        image: "https://i.pinimg.com/originals/c5/7d/36/c57d3673696d4b61de66d77ad421312a.jpg",
        colors: ["#444444", "#B8860B", "#FFFFFF"],
        category: "Sofa"
      }
    ];

  // Ambil container tempat produk akan dimasukkan
  const container = document.querySelector('.swiper-wrapper');
  const grid = document.getElementById("productGrid");
    const searchInput = document.getElementById("searchInput");
    const categoryFilter = document.getElementById("categoryFilter");


  // Masukkan setiap produk ke dalam HTML
  products.forEach(prod => {
    const colorDots = prod.colors.map(color => `
      <span class="w-5 h-5 rounded-full border border-gray-300 cursor-pointer hover:scale-110 transition-transform" style="background-color:${color};"></span>
    `).join('');

    const slide = `
      <div class="swiper-slide">
        <div class="border rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2 bg-white">
          <img src="${prod.image}" alt="${prod.name}" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">${prod.name}</h3>
            <p class="text-amber-600 font-bold mt-2">$${prod.price}</p>
            <div class="mt-3">
              <p class="text-sm text-gray-600 mb-2">Available Colors:</p>
              <div class="flex space-x-2">${colorDots}</div>
            </div>
          
          </div>
        </div>
      </div>
    `;

    container.insertAdjacentHTML('beforeend', slide);
  });

  // Aktifkan Swiper
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
  });
});
</script>

  

</body>
</html>
