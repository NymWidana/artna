<x-layout>
  <div class="min-h-screen bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center">
    <div class="grid md:grid-cols-3 gap-8 p-10">
      @foreach($people as $key => $person)
        <a href="{{ route('portfolio.show', $key) }}" 
           class="reveal group relative bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-500 opacity-0 translate-y-8">
          <img src="{{ $person['image'] }}" alt="{{ $person['name'] }}" class="w-full h-64 object-cover group-hover:opacity-80 transition">
          <div class="p-6">
            <h2 class="text-2xl font-bold text-gray-800 group-hover:text-indigo-600">{{ $person['name'] }}</h2>
            <p class="text-gray-500">{{ $person['role'] }}</p>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
        </a>
      @endforeach
    </div>
  </div>
</x-layout>
