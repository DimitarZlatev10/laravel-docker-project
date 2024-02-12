<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Products')]
class Products extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }
    public function render()
    {
        return view('livewire.products');
    }
}
