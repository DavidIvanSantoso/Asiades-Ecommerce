<?php

namespace App\Livewire;

use Livewire\Component;

class Cartpage extends Component
{
    public $cartItems = [];

    protected $listeners = [
        'tambahItemCart' => 'tambahCart', // Event JS akan diterima di sini
        'removeItem' => 'removeItem',
    ];

    public function mount()
    {
        $this->cartItems = session()->get('cart', []);
    }

   
   public function tambahCart($product)
{
    logger('Tambah Cart dipanggil', (array) $product);

    $product = (array) $product; // cast ke array supaya bisa pakai $item['name']

    $cart = session()->get('cart', []);

    $found = false;
    foreach ($cart as &$item) {
        if ($item['name'] === $product['name']) {
            $item['quantity'] += $product['quantity'];
            $found = true;
            break;
        }
    }

    if (!$found) {
        $cart[] = $product;
    }

    $this->cartItems = $cart;
    session(['cart' => $cart]);

    logger('Current Cart', $this->cartItems);
}

    public function removeItem($index)
    {
        unset($this->cartItems[$index]);
        $this->cartItems = array_values($this->cartItems); // reset index
        session(['cart' => $this->cartItems]);
    }

    /**
     * Total harga
     */
    public function getTotalAmountProperty()
    {
        return collect($this->cartItems)->sum(fn($i) => $i['price'] * $i['quantity']);
    }

    public function render()
    {
        return view('livewire.cartpage');
    }
}
