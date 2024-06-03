<div id="view" class=" flex flex-row" x-data="{ sidenav: true }">
	<div
		class="bg-zinc-800 rounded-e-2xl h-screen md:block shadow-xl px-3 w-30 md:w-60 lg:w-60 overflow-x-hidden transition-transform duration-300 ease-in-out">
		<div class="space-y-6 md:space-y-10 mt-10 ">
			<h1 class="font-bold text-4xl text-center md:hidden">
				D<span class="text-neutral-500">.</span>
			</h1>
			<h1 class="hidden md:block font-comforta text-sm md:text-xl text-center">
				Travel Haji Gabut
			</h1>
			<div class="space-y-3">
				<img src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
					alt="Avatar user" class="w-10 md:w-16 rounded-full mx-auto" />
				<div>
					<h2 class="font-comforta text-xs md:text-sm text-center text-stone-500">
						Admin
					</h2>
					<p class="text-xs font-comforta text-neutral-500 text-center">Administrator</p>
				</div>
			</div>
			<div id="menu" class="flex flex-col space-y-2">
				<a href="{{route('admindashboard')}}"
					class="text-sm font-comforta text-neutral-500 py-2 px-2 hover:bg-zinc-500 hover:text-white rounded-md transition duration-150 ease-in-out">
					<svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
						</path>
					</svg>
					<span class="">Dashboard</span>
				</a>
				<a href="{{route('adminlistpaket')}}"
					class="text-sm font-comforta text-neutral-500 py-2 px-2 hover:bg-zinc-500 hover:text-white rounded-md transition duration-150 ease-in-out">
					<svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z">
						</path>
					</svg>
					<span class="">List Paket</span>
				</a>
				<a href="{{route('adminlistpenerbangan')}}"
					class="text-sm font-comforta text-neutral-500 py-2 px-2 hover:bg-zinc-500 hover:text-white rounded-md transition duration-150 ease-in-out">
					<svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
							clip-rule="evenodd"></path>
					</svg>
					<span class="">List Penerbangan</span>
				</a>
				<a href="{{route('adminkonfirmasipembayaran')}}"
					class="text-sm font-comforta text-neutral-500 py-2 px-2 hover:bg-zinc-500 hover:text-white rounded-md transition duration-150 ease-in-out">
					<svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z">
						</path>
					</svg>
					<span class="">Konfirmasi Pembayaran</span>
				</a>
				<a href="{{route('adminlistuser')}}"
					class="text-sm font-comforta text-neutral-500 py-2 px-2 hover:bg-zinc-500 hover:text-white rounded-md transition duration-150 ease-in-out">
					<svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
						</path>
					</svg>
					<span class="">List User Terdaftar</span>
				</a>
				<a href="{{route('adminlogout')}}"
					class="text-sm font-comforta text-neutral-500 py-2 px-2 hover:bg-zinc-500 hover:text-white rounded-md transition duration-150 ease-in-out">
					<svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
						</path>
					</svg>
					<span class="">Logout</span>
				</a>
			</div>
		</div>

	</div>
</div>
<div>