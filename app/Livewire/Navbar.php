<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $cartCount=0;
    public function mount()
    {
       
        $this->cartCount = 3; 
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
