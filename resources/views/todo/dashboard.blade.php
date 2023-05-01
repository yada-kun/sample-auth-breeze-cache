<x-app-layout>
    <x-slot name="header">
        <h2 class=" text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    @yield('todo-content')
</x-app-layout>
