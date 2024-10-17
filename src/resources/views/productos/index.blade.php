<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>
    <h1 class="text-2xl font-bold mb-4">Lista de Productos</h1>
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @foreach($products as $product)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="{{ $product->name }}">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold">{{ $product->name }}</h5>
                        <p class="text-gray-600">{{ $product->description }}</p>
                        <p class="text-gray-800 font-bold mt-2">Price: ${{ $product->price }}</p>
                        <p class="text-gray-600">Stock: {{ $product->stock }}</p>
                        <p class="text-gray-600">Status: {{ $product->status }}</p>
                        <p class="text-gray-600">SKU: {{ $product->sku }}</p>
                        <a href="{{ route('productos.show', $product->id) }}" class="mt-4 inline-block bg-blue-500 text-black px-4 py-2 rounded">Ver Detalle</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>