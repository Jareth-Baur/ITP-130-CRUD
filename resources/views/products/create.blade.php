<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Create A Product') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-800">
                <form action="{{ route('products.store') }}" method="POST" class="mt-4">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-gray-700">Name</label>
                        <input type="text" class="form-control bg-white text-gray-900 border-gray-300" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label text-gray-700">Quantity</label>
                        <input type="number" class="form-control bg-white text-gray-900 border-gray-300" id="quantity" name="quantity" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label text-gray-700">Price</label>
                        <input type="number" class="form-control bg-white text-gray-900 border-gray-300" id="price" name="price" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label text-gray-700">Description</label>
                        <textarea class="form-control bg-white text-gray-900 border-gray-300" id="description" name="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
