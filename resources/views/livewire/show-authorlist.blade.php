<ul class="list bg-base-100 rounded-box shadow-md mt-2">

  <li class="p-4 mb-2 text-xl text-white btn border-t-amber-500 bg-blue-800 opacity-60 tracking-wide">Pewarta Foto</li>
@foreach ( $authors as $item )

<li class="list-row">
  <div><img class="size-15 rounded-full border border-b-red-400" src="{{ asset('storage/' .$item->avatar) }}"/></div>
  <div>
    <div class="font-bold text-md">{{ $item->name }}</div>
    <div class="text-xs text-red-500 font-semibold opacity-60">{{ $item->occupation }}</div>
  </div>
@endforeach

  </li>
</ul>
