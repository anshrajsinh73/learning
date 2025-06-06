<x-layout>
    <h1 class="text-xl font-bold">{{ $tea['name'] }}</h1>
    <p class="mt-2">Price: ${{ $tea['price'] }}</p>
    <a href="{{ url('/teas') }}" class="text-white p-2 bg-gray-500 rounded hover:underline">Back to Teas List</a>
</x-layout>