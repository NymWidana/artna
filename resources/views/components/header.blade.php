<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div x-data="{ open: false }" class="bg-white dark:bg-gray-900 shadow-md">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          
          <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
              <x-logo class="h-8" alt="Artna Logo"></x-logo>
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Artna</span>
          </a>

          <!-- Desktop Menu -->
          <div class="hidden md:flex md:space-x-8 md:items-center">
            <a href="/" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 transition">Home</a>
            <a href="/portfolio/ningrat" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 transition">Ningrat</a>
            <a href="/portfolio/widana" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 transition">Widana</a>
            <a href="/portfolio/ardi" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 transition">Ardi</a>
          </div>

          <!-- Mobile Hamburger -->
          <div class="flex items-center md:hidden">
            <button @click="open = !open" 
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-blue-600 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-blue-400 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
              <span class="sr-only">Open main menu</span>
              <!-- Icon -->
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
                <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div x-show="open" x-cloak x-transition 
          class="md:hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
        <div class="space-y-1 px-2 pt-2 pb-3">
          <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400">Home</a>
          <a href="/portfolio/ningrat" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400">Ningrat</a>
          <a href="/portfolio/widana" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400">Widana</a>
          <a href="/portfolio/ardi" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400">Ardi</a>
        </div>
      </div>
    </div>
</nav>
