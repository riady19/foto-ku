<div>
     <ul class="list bg-base-100 rounded-box shadow-md">
    <li class="p-4 pb-2 text-md text-blue-800 opacity-80 tracking-wide">Pilihan Lainnya</li>
    @foreach ( $artikel as $item )
  <li class="list-row">
    <div class="text-2xl font-thin opacity-80 tabular-nums">01</div>
    <div><img class="size-15 rounded-box" src="{{ asset('storage/' .$item->image) }}"/></div>
    <div class="list-col-grow">
        <a href="/show/{{ $item->slug }}" wire:navigate>
      <div class="font-bold uppercase text-red-400">{{ $item->title }}</div></a>
  </li>
@endforeach
</ul>
</div>

