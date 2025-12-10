<div>
    <h1 class="text-2xl font-bold text-center divider divider-warning p-4">Black & White</h1>

          <div class="hero bg-base-200 ">
             @foreach ( $artikel as $item )
  <div class="hero-content flex-row-reverse">
    <img
      src="{{ asset('storage/' .$item->image)}}" alt="gambar"
      class="size-40 h-full lg:w-50 h-60 rounded-lg shadow-2xl"
    />
    <div>
      <h1 class="text-2xl font-bold">{{ $item->title }}</h1>
      <p class="py-6">
        {{ $item->content }}
      </p>
    </div>
  </div>
</div>
 @endforeach
        </div>


</div>
