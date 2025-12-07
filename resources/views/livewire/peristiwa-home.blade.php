 <div>
 <h1 class="text-2xl font-bold text-center divider divider-warning p-4">EsayFoto</h1>
         @foreach ( $artikel as $item )
        <div class="hero mx-auto mt-8"
  style="background-image: url"
>
<img src="{{ asset('storage/' .$item->image)}}" alt="gambar" class="w-full h-full">
  <div class="hero-overlay"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <a href="/show/{{ $item->slug }}" wire:navigate><h1 class="mb-5 text-3xl font-bold">{{ $item->title }}</h1></a>
      <p class="mb-5">{{ $item->content }}</div>
    @endforeach
  </div>
  </div>
  </div>

