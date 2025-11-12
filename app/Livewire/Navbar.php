<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $cartCount=1;
    protected $listeners = ['increaseCart' => 'addCart'];
    
    public function mount()
    {
       
        $this->cartCount = 1; 
    }

    public function render()
    {
        return view('livewire.navbar');
    }
    public function addCart()
    {
        $this->cartCount++;
    }
    
}
