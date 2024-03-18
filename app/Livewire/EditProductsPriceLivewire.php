<?php

namespace App\Livewire;

use App\Models\Price;
use App\Models\Product;
use Livewire\Component;


class EditProductsPriceLivewire extends Component
{
    public $old_price, $new_price, $product, $id;
    public function render()
    {
        return view('livewire.edit-products-price-livewire', ['products' => Product::get()]);
    }

    public function editProductPrice($id){

        $this->validate(['product' => 'required', 'old_price' => 'required', 'new_price' => 'required']);
        $edit_price = Price::findOrFail($id);

        $edit_price->product_id = $this->product;

        $edit_price->old_price = $this->old_price;

        $edit_price->new_price = $this->new_price;


        $edit_price->update();


        $this->reset(['old_price', 'new_price', 'product']);

        session()->flash('editPrice', 'Product price is updated successfully.');
    }
}
