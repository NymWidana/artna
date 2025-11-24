<x-layout>
<section class="max-w-5xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ([
            ['name' => 'Widana', 'role' => 'Creative Developer', 'desc' => 'Passionate about web design and cultural storytelling.', 'photo' => 'images/widana.png'],
            ['name' => 'Ningrat', 'role' => 'UI/UX Designer', 'desc' => 'Loves crafting intuitive interfaces with a touch of elegance.', 'photo' => 'images/ningrat.jpg'],
            ['name' => 'Ardi', 'role' => 'Backend Engineer', 'desc' => 'Ensures performance and security behind the scenes.', 'photo' => 'images/ardi.jpeg']
        ] as $person)
        <a href="/detail/{{ $person['name'] }}" class="bg-gray-800 rounded-lg p-6 shadow-lg hover:shadow-indigo-500/40 transition text-center">
            <img src="{{ asset($person['photo']) }}" alt="{{ $person['name'] }}'s photo" class="w-24 h-24 mx-auto rounded-full border-4 border-indigo-500 mb-4">
            <h2 class="text-2xl font-semibold text-indigo-300">{{ $person['name'] }}</h2>
            <p class="text-sm text-gray-400">{{ $person['role'] }}</p>
            <p class="mt-4 text-gray-200">{{ $person['desc'] }}</p>
        </a>
        @endforeach
    </section>
</x-layout>