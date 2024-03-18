<div>
    <div class="card-box mb-30 p-3">
        <h2 class="h4 pd-20 text-gray-600">About text is updated here.</h2>
        @if (session()->has('editAboutText'))
            <div role="alert" class="alert alert-success alert-dismissible fade show">
                <strong>{{ session('editAboutText') }}</strong>
                <button class="btn btn-close"></button>
            </div>
        @endif
        <form wire:submit.prevent = "editAboutText({{ $id }})">
            <div class="mt-4">
                <label for="about_text_header" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>About
                    text header</label>

                <input type="text" wire:model = "AboutTextHeader"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'
                    placeholder="Edit about text header">
                @error('AboutTextHeader')
                    <strong class= 'text-sm text-red-600 dark:text-red-400 space-y-1 mt-2'>{{ $message }}</strong>
                @enderror
            </div>
            <div class="mt-4">
                <label for="phone_number" class='block font-medium text-sm text-gray-700 dark:text-gray-300'>About
                    text</label>

                <input type="text" wire:model = "AboutText"
                    class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full'
                    placeholder="Edit about text">
                @error('AboutText')
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

{{-- update product's price --}}
