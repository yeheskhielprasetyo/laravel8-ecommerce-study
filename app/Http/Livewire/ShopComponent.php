<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ShopComponent extends Component
{
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.shop-component', ['products' => $products])->layout('layouts.base');
    }
}