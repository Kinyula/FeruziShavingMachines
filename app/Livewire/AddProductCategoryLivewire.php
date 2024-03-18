<?php

namespace App\Livewire;

use App\Models\ProductCategory;
use Livewire\Component;

class AddProductCategoryLivewire extends Component
{
    public $category;

    public function render()
    {
        return view('livewire.add-product-category-livewire');
    }

    public function addProductCategory(){

        $this->validate([
            'category' => 'required',

        ]);
        $product_category = new ProductCategory();
        $product_category->category_name = $this->category;


        $product_category->save();

        session()->flash('addCategory', 'Category added successfully.');
        $this->reset(['category']);
    }
}
