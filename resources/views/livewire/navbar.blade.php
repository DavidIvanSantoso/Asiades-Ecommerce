<div>
   <nav class="shadow-md sticky top-0 z-50 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            {{-- Logo --}}
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-gray-800">
                    Asiades<span class="text-red-600">Furniture</span>
                </a>
            </div>

            {{-- Menu Desktop --}}
            <div class="hidden md:flex space-x-8 items-center">
                <a href="/" class="text-gray-700 hover:text-amber-600 font-medium">Home</a>
                <a href="/products" class="text-gray-700 hover:text-amber-600 font-medium">Products</a>
                <a href="/aboutpage" class="text-gray-700 hover:text-amber-600 font-medium">About</a>
                <a href="/contact" class="text-gray-700 hover:text-amber-600 font-medium">Contact</a>
            </div>

           
            <div class="flex items-center space-x-4">
                <a href="/cart" class="relative inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700 hover:text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 6h13L17 13M7 13h10M10 21h4" />
                    </svg>
                    @if ($cartCount > 0)
                        <span class="absolute -top-2 -right-2 bg-amber-600 text-white text-xs font-bold px-1.5 py-0.5 rounded-full">
                            {{ $cartCount }}
                        </span>
                    @endif
                </a>

                {{-- Mobile menu button --}}
                <button wire:click="$toggle('showMenu')" class="md:hidden text-gray-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile menu --}}
    @if($showMenu)
    <div class="md:hidden px-4 pb-4 space-y-2">
        <a href="/" class="block text-gray-700 hover:text-amber-600 font-medium">Home</a>
        <a href="/products" class="block text-gray-700 hover:text-amber-600 font-medium">Shop</a>
        <a href="/about" class="block text-gray-700 hover:text-amber-600 font-medium">About</a>
        <a href="/contact" class="block text-gray-700 hover:text-amber-600 font-medium">Contact</a>
        <a href="/cart" class="block text-gray-700 hover:text-amber-600 font-medium">Cart ({{ $cartCount }})</a>
    </div>
    @endif
</nav>

</div>



