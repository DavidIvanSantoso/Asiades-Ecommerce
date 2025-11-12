
@extends('app')

@section('title', 'Our Products')

@section('content')

<div class="container mx-auto ">
    <header class="py-10 text-center shadow-sm mb-6">
        <h2 class="text-4xl font-extrabold mb-2">Our Furniture Collection</h2>
        <p class="text-gray-600">Find furniture that fits your lifestyle and taste.</p>
    </header>

   {{-- Filter Search --}}
    <div class="flex justify-center mb-6">
        <input id="searchInput" type="text" placeholder="⌕ Search furniture..." 
               class="w-full max-w-2xl p-4 border border-amber-300 rounded-full focus:ring-2 focus:ring-amber-400 outline-none shadow-md text-lg">
    </div>

   
    <div class="flex flex-wrap gap-2 mb-6 justify-center" id="categoryPills">
        <button data-category="all" class="pill bg-amber-600 text-white px-4 py-2 rounded-full">All</button>
        <button data-category="Chair" class="pill bg-gray-200 px-4 py-2 rounded-full">Chair</button>
        <button data-category="Sofa" class="pill bg-gray-200 px-4 py-2 rounded-full">Sofa</button>
        <button data-category="Table" class="pill bg-gray-200 px-4 py-2 rounded-full">Table</button>
        <button data-category="Lamp" class="pill bg-gray-200 px-4 py-2 rounded-full">Lamp</button>
    </div>

    {{-- Container u/ Product --}}
    <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"></div>

    <!-- Product Detail Modal -->
    <div id="productModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white w-11/12 md:w-3/4 lg:w-2/3 rounded-lg overflow-hidden relative flex">
            
            <!-- Tombol Close X -->
            <button onclick="closeModal()" 
                    class="absolute top-2 right-2 text-gray-600 hover:text-gray-800 text-2xl font-bold">
                &times;
            </button>

            <!-- Gambar produk kiri -->
            <div class="md:w-1/2 p-6">
                <img id="modalImage" src="" alt="Product" class="w-full h-auto rounded">
            </div>

            <!-- Info produk kanan -->
            <div class="md:w-1/2 p-6 flex flex-col justify-between">
                <div>
                    <h2 id="modalTitle" class="text-2xl font-bold mb-2">Product Name</h2>
                    <p id="modalDescription" class="text-gray-700 mb-4">Lorem ipsum dolor sit amet.</p>
                    <p class="text-gray-600 font-semibold mb-2">Available Colors:</p>
                    <div id="modalColors" class="flex space-x-2 mb-4"></div>
                    <p class="text-amber-600 font-bold text-xl mb-4" id="modalPrice">$0.00</p>
                </div>
                <div class="flex items-center space-x-3">
                    <button onclick="decreaseQty()" class="px-3 py-1 bg-gray-200 rounded">-</button>
                    <span id="quantity" class="font-semibold">1</span>
                    <button onclick="increaseQty()" class="px-3 py-1 bg-gray-200 rounded">+</button>
                    <button class="bg-amber-600 text-white px-4 py-2 rounded hover:bg-amber-700 flex-1" onclick="addToCart()">
                        Add to Cart
                    </button>
                </div>
            </div>
         </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    window.addToCart = function() {
   
        Livewire.dispatch('increaseCart');
    
    alert(`${qty} item(s) added to cart!`);
}

document.addEventListener('DOMContentLoaded', function() {
     const products = [
        {
            name: "Classic Chair",
            price: 299.99,
            category: "Chair",
            image: "https://furniture123.co.uk/Images/BUNKOR00195433_3_Supersize.jpg?v=79",
            colors: ["#8B4513","#D2B48C","#000","#FFF"],
            description: "A comfortable classic chair made from high-quality wood and fabric, perfect for your living room or study."
        },
        {
            name: "Modern Sofa",
            price: 499.99,
            category: "Sofa",
            image: "https://urbanmood.sg/cdn/shop/products/LogoLicious_20220726_203613.png?v=1658841684&width=1080",
            colors: ["#808080","#F5F5DC","#000","#FFFFFF"],
            description: "A sleek modern sofa with plush cushions and contemporary design for maximum comfort and style."
        },
        {
            name: "Wooden Table",
            price: 199.99,
            category: "Table",
            image: "https://ushashriram.in/cdn/shop/products/61WS_A6yZBL.jpg?v=1689857091",
            colors: ["#A0522D","#8B4513","#000","#D2B48C"],
            description: "Elegant wooden table crafted from premium oak, ideal for dining rooms or workspaces."
        },
        {
            name: "Office Chair",
            price: 249.99,
            category: "Chair",
            image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNkdeuar4L_kX8kfZXWNoQXp4v_rk9aQVMrw&s",
            colors: ["#000","#FFF","#8B4513"],
            description: "Ergonomic office chair with adjustable height and lumbar support for long hours of work."
        },
        {
            name: "Lampu Hias",
            price: 99.99,
            category: "Lamp",
            image: "https://www.ikea.com/us/en/images/products/flyghoejd-table-lamp-brass-beige__1244487_pe921207_s5.jpg?f=s",
            colors: ["#FFD700","#FFFACD","#FF6347"],
            description: "Decorative lamp with warm lighting to create a cozy atmosphere in any room."
        },
        {
            name: "Luxury Sofa",
            price: 799.99,
            category: "Sofa",
            image: "https://www.estre.in/cdn/shop/files/2-min_d2bc49bf-1893-4118-bab5-8d0848d4d3fb.jpg?v=1743762905",
            colors: ["#000000","#808080","#C0C0C0"],
            description: "Premium luxury sofa with soft leather upholstery and deep seating for ultimate relaxation."
        },
        {
            name: "Coffee Table",
            price: 149.99,
            category: "Table",
            image: "https://upload.wikimedia.org/wikipedia/commons/7/7f/4Coffee_Table.jpg",
            colors: ["#8B4513","#D2B48C","#A0522D"],
            description: "Minimalist coffee table with sturdy wooden legs and smooth surface, perfect for any living space."
        },
        {
            name: "Recliner Chair",
            price: 399.99,
            category: "Chair",
            image: "https://ak1.ostkcdn.com/images/products/is/images/direct/fe9009bae827723313072548f9e9bd48e22158de/Art-Leon-Mid-century-Modern-Genuine-Leather-Lounge-Chair-Recliner.jpg",
            colors: ["#000000","#654321","#FFF"],
            description: "Comfortable recliner chair with soft leather and adjustable reclining positions for ultimate relaxation."
        },
        {
            name: "Desk Lamp",
            price: 59.99,
            category: "Lamp",
            image: "https://www.elmworkspace.com/wp-content/uploads/2018/01/modern-lamp.jpg",
            colors: ["#FFD700","#C0C0C0","#808080"],
            description: "Modern desk lamp with adjustable arm and focused lighting for study or work."
        },
        {
            name: "Bookshelf",
            price: 299.99,
            category: "Shelf",
            image: "https://i.etsystatic.com/10146012/r/il/26d147/4552924265/il_fullxfull.4552924265_d2sd.jpg",
            colors: ["#A0522D","#8B4513","#000"],
            description: "Spacious wooden bookshelf to store books, decorative items, or office supplies."
        },
        {
            name: "Nightstand",
            price: 129.99,
            category: "Table",
            image: "https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/MTA-92225330/ifurnholic_ifurnholic_charlotte_night_stand_-_meja_nakas_-_meja_samping_tempat_tidur_-_meja_sudut_minimalis_-_bedside_full02_ccqt688r.jpeg",
            colors: ["#8B4513","#D2B48C","#FFF"],
            description: "Compact nightstand with drawer storage, perfect next to your bed."
        },
        {
            name: "Floor Lamp",
            price: 89.99,
            category: "Lamp",
            image: "https://images-na.ssl-images-amazon.com/images/I/61mYNsEBJDL.jpg",
            colors: ["#FFD700","#F5F5DC","#C0C0C0"],
            description: "Tall floor lamp providing soft ambient light for your living room or study."
        },
       
    ];



const grid = document.getElementById('productGrid');
const searchInput = document.getElementById('searchInput');
const pills = document.querySelectorAll('.pill');
let selectedCategory = 'all';


window.renderProducts = function() {
    const keyword = searchInput.value.toLowerCase();
    grid.innerHTML = '';
    const filtered = products.filter(p => 
        (selectedCategory === 'all' || p.category === selectedCategory) &&
        (p.name.toLowerCase().includes(keyword))
    );

    filtered.forEach(p => {
         const colorCircles = p.colors.map(c => 
        `<span class="w-5 h-5 rounded-full border border-gray-300 hover:-translate-y-2" style="background-color: ${c}"></span>`
    ).join('');
        grid.innerHTML += `
            <div class="border rounded-lg shadow-md overflow-hidden hover:shadow-xl hover:scale-110 transition-transform">
                <img src="${p.image}" alt="${p.name}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">${p.name}</h3>
                    <p class="text-amber-600 font-bold mt-2">$${p.price}</p>
                    <div class="mt-3">
                        <p class="text-sm text-gray-600 mb-2">Available Colors:</p>
                        <div class="flex space-x-2">${colorCircles}</div>
                    </div>
                    <button onclick='openModal(${JSON.stringify(p)})' 
                        class="bg-amber-600 text-white px-4 py-2 rounded hover:bg-amber-700 transition-colors w-full mt-3">
                        See Detail
                    </button>
                </div>
            </div>
        `;
    });

     const counts = {all: filtered.length};
    products.forEach(p => {
        if (!counts[p.category]) counts[p.category] = 0;
        if (p.name.toLowerCase().includes(keyword)) counts[p.category]++;
    });

    pills.forEach(pill => {
        const cat = pill.dataset.category;
        if (cat === 'all') {
            pill.innerText = `All (${counts.all})`;
        } else {
            pill.innerText = `${cat} (${counts[cat] || 0})`;
        }
    });
}

// Event listeners
searchInput.addEventListener('input', renderProducts);
pills.forEach(p => {
    p.addEventListener('click', () => {
        selectedCategory = p.dataset.category;
        pills.forEach(btn => btn.classList.replace('bg-amber-600','bg-gray-200'));
        pills.forEach(btn => btn.classList.replace('text-white','text-black'));
        p.classList.replace('bg-gray-200','bg-amber-600');
        p.classList.replace('text-black','text-white');
        renderProducts();
    });
});

// Initial render
renderProducts();

//open modal
window.qty = 1;
const quantityEl = document.getElementById('quantity');

window.increaseQty = function() {
    qty++;
    quantityEl.textContent = qty;
}

window.decreaseQty=function() {
    if (qty > 1) {
        qty--;
        quantityEl.textContent = qty;
    }
}

window.openModal=function(product) {
    document.getElementById('modalImage').src = product.image;
    document.getElementById('modalTitle').textContent = product.name;
    document.getElementById('modalDescription').textContent = product.description || 'No description available';
    document.getElementById('modalPrice').textContent = `$${product.price}`;
    
    // Insert colors dynamically
    const colorsDiv = document.getElementById('modalColors');
    colorsDiv.innerHTML = '';
    if(product.colors) {
        product.colors.forEach(c => {
            const span = document.createElement('span');
            span.className = 'w-6 h-6 rounded-full border border-gray-300';
            span.style.backgroundColor = c;
            colorsDiv.appendChild(span);
        });
    }

    qty = 1;
    quantityEl.textContent = qty;

    document.getElementById('productModal').classList.remove('hidden');
}

window.closeModal=function() {
    document.getElementById('productModal').classList.add('hidden');
}

});
   

</script>
@endpush
