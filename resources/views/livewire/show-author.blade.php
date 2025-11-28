{{-- Author --}}

       <div class="col-span-12 lg:col-span-3 bg-gray-500 pt-2">
        <h1 class="text-center font-bold text-2xl divider divider-warning text-white">Author</h1>
        <div class="p-2">
            <div class="flex justify-center gap-5">
                @foreach ( $authors as $item )
                      <div class="avatar">
                        <div class="text-white mx-auto">
                            <h1>{{ $item->name }}</h1>
                     <div class="size-20 border border-b-black rounded-full">
                    <img src="{{ asset('storage/' .$item->avatar) }}" alt="gambar" class="hover:opacity-2  hover:opacity-50 rounded-full">
                </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>


        {{-- End Author --}}
