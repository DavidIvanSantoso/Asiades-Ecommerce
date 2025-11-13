<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $cartCount = 0;

    protected $listeners = ['increaseCart' => 'addCart'];

    public function mount()
    {
       
        $this->cartCount = session()->get('cart_count', 0);
    }

    public function addCart(int $qty)
    {
        logger('ADD CARD dipanggil', array($qty));
        $this->cartCount += $qty;
        session()->put('cart_count', $this->cartCount);
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
