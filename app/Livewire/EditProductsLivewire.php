<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\ProductCategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class EditProductsLivewire extends Component
{
    use WithFileUploads;

    public $product_category,$product_name,$product_image,$products, $id;

    public function render()
    {

        return view('livewire.edit-products-livewire', ['categories' => ProductCategory::get()]);
    }

    public function editProduct($id){

        $this->validate(['product_image' => 'required', 'product_name' => 'required', 'product_image' => 'required']);
        $edit_product = Product::findOrFail($id);

        $edit_product->product_name = $this->product_name;

        $edit_product->product_category_id = $this->product_category;

        $product_image = $edit_product->product_image;


        if (File::exists(public_path('storage/product_images/' . $product_image))) {

            File::delete(public_path('storage/product_images/' . $product_image));


        }

         $new_product_image = $this->product_image->store('public/product_images');

         $product_image = explode('/', $new_product_image);
         $product_image = $product_image[2];
         $edit_product->product_image = $product_image;

        $edit_product->update();


        $this->reset(['product_image', 'product_name', 'product_category']);

        session()->flash('editProducts', 'Product updated successfully.');
    }
}
