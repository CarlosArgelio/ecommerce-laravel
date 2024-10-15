<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>
    <h1>Lista de Productos</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }}</li>
        @endforeach
    </ul>
</x-app-layout>
