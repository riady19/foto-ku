<div class="grid grid-cols-3 lg:grid-cols-6 relative group">
    <div class="absolute top-0 left-0 w-full h-full bg-white opacity-0 group-hover:opacity-50 -transition-all"></div>
    <div class="flex justify-center items-center gap-2 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 -transition-all z-10">
        <i class="fa-brands fa-instagram text-2xl"></i>
        <h1 class="text-3xl">@fotoku_team</h1>
    </div>
    @foreach ( $team as $item )
    <div>
        <img src="{{ asset('gambar/'. $item) }}" alt="{{ $item }}}" class="h-55 object-cover">
    </div>
    @endforeach
</div>
