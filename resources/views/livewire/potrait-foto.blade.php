<div>
    <div>

        <h1 class="text-2xl font-bold text-center divider divider-warning p-4">Potrait Foto</h1>
    </div>
    {{-- coursel --}}
        @foreach ( $artikel as $item )

    <div class="hero size-70 w-full mx-auto rounded-2xl"
  style="background-image: url"
>
<img src="{{ asset('storage/' .$item->image)}}" alt="gambar" class="w-full h-60 lg:w-full h-80">
  <div class="hero-overlay"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <a href="/show/{{ $item->slug }}" wire:navigate><h1 class="mb-5 text-5xl font-bold">{{ $item->title }}</h1></a>
      <p class="mb-5">{{ $item->content }}</p>

    </div>
      @endforeach
  </div>

</div>


</div>
