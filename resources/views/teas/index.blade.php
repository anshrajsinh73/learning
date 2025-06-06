<x-layout>
    <h1 class="text-xl font-bold">Teas List</h1>
    <p class="mt-2">Here are some of our finest teas:</p>
    <ul class="mt-4">
        @foreach ($teas as $tea)
        <li class="mb-2">
            <a href="/teas/{{ $tea['id'] }}">
                {{ $tea['name'] }} - ${{ $tea['price'] }}
            </a>
        </li>
        @endforeach
    </ul>
    <a href="{{ url('/') }}" class="text-white p-2 bg-gray-500 rounded hover:underline">Back to Home</a>
</x-layout>