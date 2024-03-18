<div>
    <div class="card-box mb-30 p-3">
        <h2 class="h4 pd-20 text-gray-600"><i class="bi bi-plus"></i> Add products</h2>

        @if (session()->has('addProducts'))
            <div role="alert" class="alert alert-success alert-dismissible fade show">
                <strong>{{ session('addProducts') }}</strong>
                <button class="btn btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form wire:submit.prevent = "addProduct">
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
                <input type="text" wire:model= "product_name"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'
                    placeholder="Enter product name">
                @error('product_name')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror
            </div>

            <div class="mt-4">
                <label for="product_image" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>Product
                    Image</label>
                <input type="file" wire:model= "product_image"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'
                    placeholder="Enter product name">
                @error('product_image')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror
            </div>

            <div>
                <br>
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ms-4" onclick="confirm(`Don't forget to add the product's price or else uncertainity may occur`) || event.StopImmediatePropagation()">
                    Add products
                </button>
            </div>
        </form>
    </div>
</div>
