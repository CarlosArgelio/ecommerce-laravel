<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Producto') }}
        </h2>
    </x-slot>
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Editar Producto</h1>
        <form action="{{ route('admin.productos.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nombre</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Descripción</label>
                <textarea name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm">{{ $product->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Precio</label>
                <input type="text" name="price" id="price" value="{{ $product->price }}" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="stock" class="block text-gray-700">Stock</label>
                <input type="text" name="stock" id="stock" value="{{ $product->stock }}" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="status" class="block text-gray-700">Estado</label>
                <select name="status" id="status" class="w-full border-gray-300 rounded-md shadow-sm">
                    <option value="available" {{ $product->status == 'available' ? 'selected' : '' }}>Disponible</option>
                    <option value="disabled" {{ $product->status == 'disabled' ? 'selected' : '' }}>Deshabilitado</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
        </form>
    </div>
</x-app-layout>