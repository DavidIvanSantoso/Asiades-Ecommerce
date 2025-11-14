<div class="container mx-auto p-6">
    <header class="text-center mb-8">
        <h2 class="text-4xl font-extrabold mb-2 text-gray-800">🛒 Your Shopping Cart</h2>
        <p class="text-gray-500">Review your order and fill in your details</p>
    </header>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
        <div>
            <div class="overflow-x-auto rounded-xl shadow-lg bg-white">
                <table class="min-w-full border border-gray-200 text-sm">
                    <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                        <tr>
                            <th class="px-4 py-3 text-left border-b">Product</th>
                            <th class="px-4 py-3 border-b">Price</th>
                            <th class="px-4 py-3 border-b">Quantity</th>
                            <th class="px-4 py-3 border-b">Total</th>
                            <th class="px-5 py-3 mx-3 border-b">Action</th>
                        </tr>
                    </thead>
                    <tbody id="cartBody" class="divide-y divide-gray-200">
                        {{-- ISI BODY TABLE --}}
                    </tbody>
                </table>
            </div>

            <div class="text-right mt-6">
                <h3 class="text-2xl font-bold text-gray-800">
                    Total: $<span id="cartTotal">0.00</span>
                </h3>
              
            </div>
        </div>

        {{-- FORM --}}
        <div class="bg-white p-6 shadow-lg rounded-xl">
            <h3 class="text-2xl font-bold mb-4 text-gray-800">Customer Information</h3>
            
            <form id="customerForm" class="space-y-4">
                <div>
                    <label class="block text-gray-600 mb-1 font-medium">Full Name</label>
                    <input type="text" name="name" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300" placeholder="John Doe">
                </div>

                <div>
                    <label class="block text-gray-600 mb-1 font-medium">Email</label>
                    <input type="email" name="email" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300" placeholder="example@mail.com">
                </div>

                <div>
                    <label class="block text-gray-600 mb-1 font-medium">Phone Number</label>
                    <input type="text" name="phone" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300" placeholder="+62...">
                </div>

                <div>
                    <label class="block text-gray-600 mb-1 font-medium">Address</label>
                    <textarea name="address" rows="4" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300" placeholder="Street, City, Postal Code"></textarea>
                </div>
                 <button 
                    class="mt-4 bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition" type="submit">
                    Confirm Order
                </button>
            
            </form>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
    renderCart();

    const form = document.getElementById('customerForm');
    form.addEventListener('submit', confirmOrder);
});

function renderCart() {
    const cart = JSON.parse(sessionStorage.getItem('cart')) || [];
    const tbody = document.getElementById('cartBody');
    tbody.innerHTML = '';

    let total = 0;
    cart.forEach((item, index) => {
        const row = document.createElement('tr');

        const itemTotal = item.price * item.quantity;
        total += itemTotal;

        row.innerHTML = `
            <td class="px-4 py-3 flex items-center gap-3">
                <img src="${item.image}" alt="${item.name}" 
                     class="w-16 h-16 object-cover rounded-lg border">
                <div>
                    <p class="font-semibold text-gray-800">${item.name}</p>
                    <p class="text-xs text-gray-500">${item.category || ''}</p>
                </div>
            </td>
            <td class="text-center">$${item.price.toFixed(2)}</td>
            <td class="text-center">
                <input type="number" 
                       value="${item.quantity}" 
                       min="1" 
                       onchange="updateQuantity(${index}, this.value)"
                       class="w-16 border rounded-lg text-center focus:ring-2 focus:ring-blue-300">
            </td>
            <td class="text-center font-medium">$${itemTotal.toFixed(2)}</td>
            <td class="text-center mx-3">
                <button onclick="removeFromCart(${index})"
                        class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition">
                    Remove
                </button>
            </td>
        `;
        tbody.appendChild(row);
    });

    document.getElementById('cartTotal').textContent = total.toFixed(2);
}

function removeFromCart(index) {
    const cart = JSON.parse(sessionStorage.getItem('cart')) || [];
    if (cart[index]) {
        const quantityToRemove = cart[index].quantity;
        cart.splice(index, 1);
        sessionStorage.setItem('cart', JSON.stringify(cart));
        renderCart();
        Livewire.dispatch('decreaseCart', [quantityToRemove]);
        
    }
}

function updateQuantity(index, qty) {
    const cart = JSON.parse(sessionStorage.getItem('cart')) || [];
    qty = parseInt(qty);
    if (qty < 1) return;
    cart[index].quantity = qty;
    sessionStorage.setItem('cart', JSON.stringify(cart));
    renderCart();
}

function confirmOrder(event) {
    event.preventDefault();

    const name = document.querySelector('[name="name"]').value.trim();
    const email = document.querySelector('[name="email"]').value.trim();
    const phone = document.querySelector('[name="phone"]').value.trim();
    const address = document.querySelector('[name="address"]').value.trim();

    if (!name || !email || !phone || !address) {
        alert('Field Customer Information harus diisi semua!');
        return;
    }

    alert('Order confirmed! Thank you for shopping with us.');

    sessionStorage.removeItem('cart');
    
    renderCart();
    // reset form
    event.target.reset();
    // reset cart count in navbar
    Livewire.dispatch('resetCart');
}

document.addEventListener('DOMContentLoaded', renderCart);
</script>