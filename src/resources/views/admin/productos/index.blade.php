<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrar Productos') }}
        </h2>
    </x-slot>
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Lista de Productos</h1>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">Nombre</th>
                    <th class="py-2">Precio</th>
                    <th class="py-2">Stock</th>
                    <th class="py-2">Estado</th>
                    <th class="py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="py-2">{{ $product->name }}</td>
                        <td class="py-2">{{ $product->price }}</td>
                        <td class="py-2">{{ $product->stock }}</td>
                        <td class="py-2">{{ $product->status }}</td>
                        <td class="py-2">
                            <a href="{{ route('admin.productos.edit', $product->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Editar</a>
                            <form action="{{ route('admin.productos.destroy', $product->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                            </form>
<p>disable form</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>