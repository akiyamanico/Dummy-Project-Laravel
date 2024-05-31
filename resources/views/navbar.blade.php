<nav class="p-4 flex top-0 z-50 fixed w-full">
  @if (Auth::guard('web')->check())
    <div class="flex flex-col md:flex-row mx-auto w-full items-center justify-between">
    <div class="text-xl md:text-2xl font-quicksand p-3 dark:text-white">
      <span>Travel Haji Gabut</span>
    </div>
    <div
      class="bg-blue-200 shadow-md dark:bg-gray-700 dark:border-gray-700 flex flex-col md:flex-row items-center p-2 border rounded-xl space-y-2 md:space-y-0 md:space-x-4">
      <form action="{{ route('logout') }}" method="POST"
      class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4">
      @csrf
      <ul class="flex flex-col justify-center items-center md:flex-row space-y-2 md:space-y-0 md:space-x-4">
        <li>
        <a class="text-gray-900 dark:text-white text-md font-quicksand" href="{{route('home')}}">Home</a>
        </li>
        <li>
        <a class="text-gray-900 dark:text-white text-md font-quicksand" href="{{route('produk')}}">Lihat Produk</a>
        </li>
        <li>
        <span class="text-gray-900 dark:text-white text-md font-quicksand">
          {{ Auth::user()->nama }}
        </span>
        </li>
      </ul>
      <button type="submit"
        class="py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold font-quicksand rounded-xl transition duration-200">
        Logout
      </button>
      </form>
    </div>
    </div>
  @else
    <div class="flex flex-col md:flex-row mx-auto w-full items-center justify-between">
    <div class="text-xl md:text-2xl font-quicksand p-3 dark:text-white">
      <span>Travel Haji Gabut</span>
    </div>
    <div
      class="bg-blue-200 shadow-md dark:bg-gray-700 dark:border-gray-700 flex flex-col md:flex-row items-center p-2 border rounded-xl space-y-2 md:space-y-0 md:space-x-4">
      <ul class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-6 p-2">
      <li>
        <a class="text-gray-900 dark:text-white text-md font-quicksand" href="{{route('/')}}">Home</a>
      </li>
      <li>
        <a class="text-gray-900 dark:text-white text-md font-quicksand" href="{{route('produk')}}">Lihat Produk</a>
      </li>
      </ul>
      <a class="ml-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-quicksand rounded-xl transition duration-200"
      href="{{route('login')}}">
      Sign In
      </a>
      <a class="ml-3 py-2 px-6 bg-blue-100 dark:bg-gray-200 hover:bg-blue-200 text-sm text-gray-900 font-quicksand rounded-xl transition duration-200"
      href="{{route('register')}}">
      Sign up
      </a>
    </div>
    </div>
  @endif
</nav>