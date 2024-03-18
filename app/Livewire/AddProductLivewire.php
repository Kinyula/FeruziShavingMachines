<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProductLivewire extends Component
{
    use WithFileUploads;

    public $product_category, $product_name, $product_image;

    public function render()
    {
        return view('livewire.add-product-livewire', ['categories' => ProductCategory::get()]);
    }

    public function addProduct()
    {

        $this->validate([
            'product_category' => 'required',
            'product_name' => 'required',
            'product_image' => 'required'
        ]);

        $product = new Product();

        $product->product_category_id = $this->product_category;

        $product->product_name = $this->product_name;

        $product_image = $this->product_image->store('public/product_images');

        $product_image = explode('/', $product_image);
        $product_image = $product_image[2];
        $product->product_image = $product_image;

        $product->save();

        $this->reset(['product_category', 'product_name', 'product_image']);

        session()->flash('addProducts', 'Product is added successfully.');
    }
}
