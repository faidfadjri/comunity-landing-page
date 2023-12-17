<header class="px-5 py-3 sm:px-10 md:px-10 md:py-5 lg:px-20 flex items-center justify-between sticky top-0 bg-white z-20 shadow-sm">
  <div class="flex items-center gap-3">
    <img src="./assets/images/logo.png" class="w-10" alt="Logo" />
    <h1 class="font-bold text-2xl">BY.DEV</h1>
  </div>
  <div x-data="{ navOpen: false }">
    <button @click="navOpen = !navOpen">
      <svg class="cursor-pointer text-gray-700 hover:text-gray-900 w-6 md:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="3" y1="12" x2="21" y2="12" />
        <line x1="3" y1="6" x2="21" y2="6" />
        <line x1="3" y1="18" x2="21" y2="18" />
      </svg>
    </button>
    <div :class="{'hidden': !navOpen}" class="md:block fixed top-0 inset-x-0 bg-white p-8 m-4 z-30 rounded-lg shadow md:rounded-none md:shadow-none md:p-0 md:m-0 md:relative md:bg-transparent transition-all duration-300 ease-in-out mt-20">
      <button @click="navOpen = false" class="absolute top-0 right-0 mr-5 mt-5 md:hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
          <path d="M18 6L6 18M6 6l12 12" />
        </svg>
      </button>
      <div class="flex flex-col items-center justify-center md:block">
        <a href="#" class="transition-all duration-100 ease-in-out pb-1 border-b-2 text-gray-600 border-transparent hover:border-gray-300 hover:text-gray-600 md:mr-8 font-bold tracking-wide my-4 md:my-0">
          Home
        </a>

        <a href="#" class="transition-all duration-100 ease-in-out pb-1 border-b-2 text-gray-600 border-transparent hover:border-gray-300 hover:text-gray-600 md:mr-8 font-bold tracking-wide my-4 md:my-0">
          Our Sponsors
        </a>

        <a href="#" class="transition-all duration-100 ease-in-out pb-1 border-b-2 text-gray-600 border-transparent hover:border-gray-300 hover:text-gray-600 md:mr-8 font-bold tracking-wide my-4 md:my-0">
          Quest
        </a>

        <a href="#" class="transition-all duration-100 ease-in-out pb-1 border-b-2 text-gray-600 border-transparent hover:border-gray-300 hover:text-gray-600 md:mr-8 font-bold tracking-wide my-4 md:my-0">
          Contact
        </a>
      </div>
    </div>
  </div>
</header>