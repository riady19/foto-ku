<div class="navbar bg-gray-200 shadow-sm px-6 lg:px-36 mt-4 z-index">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
      </div>
      <ul
        tabindex="-1"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
        <li><a class="text-lg font-medium hover:text-red-500 transition-all" href="/">Beranda</a></li>
        <li><a href="{{ route( 'show.catagory') }}" wire:navigate class="text-lg tracking-wider font-medium hover:text-red-500 transition-all">Catagory</a></li>
        <li><a href="{{ route('show.contact') }}" wire:navigate class="text-lg tracking-wider font-medium hover:text-red-500 transition-all">Contact</a></li>
      </ul>
    </div>

    <a href="/" class=" text-2xl"><span class="text-2xl"><span class="text-red-500 border border-red text-4xl px-2">L</span><span>umina</span></a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1 ">
      <li><a href="/" class="text-lg tracking-wider font-medium hover:text-red-400 transition-all">Beranda</a></li>

      <li><a href="{{ route( 'show.catagory') }}" wire:click class="text-lg tracking-wider font-medium  hover:text-red-400 transition-all">Catagory</a></li>

      <li><a href="{{ route('show.contact') }}" wire:click class="text-lg tracking-wider font-medium hover:text-red-400 transition-all">Contact</a></li>
      {{-- <li><a href="{{ route('show.artikel') }}" wire:click class="text-lg tracking-wider font-medium hover:text-red-400 transition-all">Artikel</a></li> --}}
    </ul>
  </div>
  <div class="navbar-end space-x-2 ml-15">
   <div class="border w-8 rounded-full aspect-square flex items-center justify-center hover:bg-gray-950 transition-all group">
    <i class="fa-brands fa-facebook group-hover:text-white"></i>
   </div>
   <div class="border w-8 rounded-full aspect-square flex items-center justify-center hover:bg-gray-950 transition-all group">
    <i class="fa-brands fa-instagram group-hover:text-white"></i>
   </div>
   <div class="border w-8 rounded-full aspect-square flex items-center justify-center hover:bg-gray-950 transition-all group">
    <i class="fa-brands fa-x-twitter group-hover:text-white"></i>
   </div>
  </div>
  <label class="swap swap-rotate">
  <!-- this hidden checkbox controls the state -->

</div>
