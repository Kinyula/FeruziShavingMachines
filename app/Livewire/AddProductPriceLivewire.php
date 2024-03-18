<?php

namespace App\Livewire;

use App\Models\Price;
use App\Models\Product;
use Livewire\Component;

class AddProductPriceLivewire extends Component
{
    public $old_price, $new_price, $product;

    public function render()
    {
        return view('livewire.add-product-price-livewire', ['products' => Product::get()]);
    }

    public function addPrice()
    {
        $this->validate(['old_price' => 'required|numeric', 'new_price' => 'required|numeric']);

        $price = new Price();

        $price->product_id = $this->product;
        $price->old_price = $this->old_price;
        $price->new_price = $this->new_price;

        $price->save();

        $this->reset(['old_price', 'new_price', 'product']);
        session()->flash('addPrice', 'Price added successfully.');
    }
}
