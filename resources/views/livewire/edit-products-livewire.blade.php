<div>
    <div class="card-box mb-30 p-3">
        <h2 class="h4 pd-20 text-gray-600">Products are updated here.</h2>
        @if (session()->has('editProducts'))
            <div role="alert" class="alert alert-success alert-dismissible fade show">
                <strong>{{ session('editProducts') }}</strong>
                <button class="btn btn-close"></button>
            </div>
        @endif
        <form wire:submit.prevent = "editProduct({{ $id }})">
            <div class="mt-3">
                <label for="product_category" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>Product
                    category</label>
                <select type="select" wire:model= "product_category"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'>
                    <option value="">-- Choose the product category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                @error('product_category')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror
            </div>

            <div class="mt-4">
                <label for="product_name" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>Product
                    Name</label>

                <input type="text" wire:model = "product_name" value="{{$product_name}}"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'
                    placeholder="Edit product name">
                @error('product_name')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror
            </div>

            {{-- Product picture --}}
            <div class="mt-4">
                <label for="product_image" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>Product
                    Image</label>
                <input type="file" wire:model= "product_image" value="{{$product_image}}"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'>

                @error('product_image')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror
            </div>

            <div class="flex items-center justify-end mt-4">


                <x-primary-button class="ms-4">
                    {{ __('Update') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    @livewire('edit-products-price-livewire', ['id' => $id])
</div>

{{-- update product's price --}}


