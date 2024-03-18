<div>
    <div class="card-box mb-30 p-3">
        <h2 class="h4 pd-20 text-gray-600">Product price are updated here.</h2>
        @if (session()->has('editPrice'))
            <div role="alert" class="alert alert-success alert-dismissible fade show">
                <strong>{{ session('editPrice') }}</strong>
                <button class="btn btn-close"></button>
            </div>
        @endif
        <form wire:submit.prevent = "editProductPrice({{ $id }})">

            <div class="mt-3">
                <label for="product" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>Product
                    </label>
                <select type="select" wire:model= "product"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'>
                    <option value="">-- Choose the product --</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                    @endforeach
                </select>
                @error('product')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror
            </div>

            <div class="mt-4">
                <label for="old_price" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>Old
                    Price</label>

                <input type="text" wire:model = "old_price"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'
                    placeholder="Edit old price">
                @error('old_price')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror
            </div>

            <div class="mt-4">
                <label for="new_price" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>New
                    Price</label>

                <input type="text" wire:model = "new_price"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'
                    placeholder="Edit new price">
                @error('new_price')
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


</div>
