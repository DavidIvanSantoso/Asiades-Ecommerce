<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $cartCount = 0;
    public $showMenu=false;

    protected $listeners = ['increaseCart' => 'addCart','resetCart' => 'resetCart', 'decreaseCart' => 'decreaseCart'];

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
    public function decreaseCart(int $qty)
    {
        logger('DECREASE CARD dipanggil', array($qty));
        $this->cartCount -= $qty;
        session()->put('cart_count', $this->cartCount);
    }
    public function resetCart(){
        logger('REMOVE CARD dipanggil');
        $this->cartCount = 0;
        session()->put('cart_count', $this->cartCount);
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
