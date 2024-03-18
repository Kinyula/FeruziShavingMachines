<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Livewire\WithPagination;

class BestSellingProductsLivewire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $product_category, $product_name,  $product_image, $products, $id;
    public function render()
    {

        return view('livewire.best-selling-products-livewire', ['productImage' => Product::paginate(10)]);
    }

    public function deleteProduct($id)
    {

        $delete_product = Product::findOrFail($id);

        if (File::exists(public_path('storage/product_images/'.$delete_product->product_image))) {

            File::delete(public_path('storage/product_images/'.$delete_product->product_image));
        }

        $delete_product->delete();



        session()->flash('deleteProductMessage', 'Product is deleted successfully.');
    }
}
