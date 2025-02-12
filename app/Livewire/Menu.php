<?php

namespace App\Livewire;

use Livewire\Component;

class Menu extends Component
{
    public bool $isMenuOpen = false;

    public function toggleMenu()
    {
        $this->isMenuOpen = !$this->isMenuOpen;
    }
    public function render()
    {
        return view('livewire.menu');
    }
}
