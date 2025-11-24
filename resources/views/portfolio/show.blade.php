<x-layout>

<div class="min-h-screen bg-gray-100 py-12 px-6">
    <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="flex flex-col md:flex-row">
            <img src="{{ $person['image'] }}" alt="{{ $person['name'] }}" class="w-full md:w-1/3 object-cover">
            <div class="p-8">
                <h1 class="text-3xl font-bold text-gray-800">{{ $person['name'] }}</h1>
                <h2 class="text-xl text-indigo-600">{{ $person['role'] }}</h2>
                <p class="mt-4 text-gray-600">{{ $person['bio'] }}</p>
                <h3 class="mt-6 text-lg font-semibold text-gray-700">Projects</h3>
                <ul class="mt-2 space-y-2">
                    @foreach($person['projects'] as $project)
                        <li class="bg-indigo-50 p-4 rounded-lg hover:bg-indigo-100 transition">
                            <h4 class="font-bold text-indigo-700">{{ $project['title'] }}</h4>
                            <p class="text-gray-600">{{ $project['desc'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

</x-layout>