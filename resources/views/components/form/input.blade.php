@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <input class="w-full p-2 border border-gray-400 p-2 rounded"
           type="{{ $type }}"
           id="{{ $name }}"
           name="{{ $name }}"
           {{ $attributes(['value' => old($name)]) }}>

    <x-form.error name="{{ $name }}"/>
</x-form.field>

   
    
