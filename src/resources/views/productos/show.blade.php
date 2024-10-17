<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle del Producto') }}
        </h2>
    </x-slot>
    <div class="container mx-auto px-4">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://via.placeholder.com/150" alt="{{ $product->name }}">
            <div class="p-4">
                <h5 class="text-lg font-semibold">{{ $product->name }}</h5>
                <p class="text-gray-600">{{ $product->description }}</p>
                <p class="text-gray-800 font-bold mt-2">Price: ${{ $product->price }}</p>
                <p class="text-gray-600">Stock: {{ $product->stock }}</p>
                <p class="text-gray-600">Status: {{ $product->status }}</p>
                <p class="text-gray-600">SKU: {{ $product->sku }}</p>
            </div>
        </div>
    </div>
</x-app-layout>