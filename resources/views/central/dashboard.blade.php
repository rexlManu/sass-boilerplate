<x-central.app-layout>
    <x-central.navigation/>

    <div class="container mx-auto py-10">
        <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6 shadow rounded-lg w-1/2">
            Hey, welcome back {{ auth()->user()->name }}!
        </div>
    </div>
</x-central.app-layout>
