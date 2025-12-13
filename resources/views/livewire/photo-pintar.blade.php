<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg flex min-h-[600px] relative" x-data="{ sidebarOpen: false }">
            
            <!-- Mobile Sidebar Overlay -->
            <div x-show="sidebarOpen" 
                 x-transition:enter="transition-opacity ease-linear duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity ease-linear duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 @click="sidebarOpen = false"
                 class="fixed inset-0 bg-gray-900/80 z-40 xl:hidden">
            </div>

            <!-- Sidebar -->
            <div class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-50 dark:bg-gray-900 border-r border-gray-200 dark:border-gray-700 transform transition-transform duration-300 ease-in-out xl:relative xl:translate-x-0"
                 :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
                <div class="p-6 h-full overflow-y-auto">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Lumina Photo Pintar</h2>
                        <button @click="sidebarOpen = false" class="xl:hidden text-gray-500 hover:text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                    
                    <nav class="space-y-2">
                        <button wire:click="setTab('photo-produk'); sidebarOpen = false" 
                                class="w-full text-left px-4 py-2 rounded-lg transition-colors duration-150 {{ $activeTab === 'photo-produk' ? 'bg-indigo-500 text-white' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span>Photo Produk</span>
                            </div>
                        </button>

                        <button wire:click="setTab('photobot'); sidebarOpen = false" 
                                class="w-full text-left px-4 py-2 rounded-lg transition-colors duration-150 {{ $activeTab === 'photobot' ? 'bg-indigo-500 text-white' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                <span>Photo Booth</span>
                            </div>
                        </button>

                        <button wire:click="setTab('foto-mockup'); sidebarOpen = false" 
                                class="w-full text-left px-4 py-2 rounded-lg transition-colors duration-150 {{ $activeTab === 'foto-mockup' ? 'bg-indigo-500 text-white' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
                                <span>Buat Mockup</span>
                            </div>
                        </button>

                        <button wire:click="setTab('foto-baner'); sidebarOpen = false" 
                                class="w-full text-left px-4 py-2 rounded-lg transition-colors duration-150 {{ $activeTab === 'foto-baner' ? 'bg-indigo-500 text-white' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span>Buat Banner</span>
                            </div>
                        </button>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1 p-8">
                <!-- Mobile Toggle Button -->
                <button @click="sidebarOpen = true" class="xl:hidden mb-4 text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                @if($activeTab === 'photo-produk')
                    <div class="max-w-4xl mx-auto">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-8">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Upload Product Photo</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <div 
                                        x-data="{ isDropping: false, isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                                        class="flex items-center justify-center w-full"
                                    >
                                        <label 
                                            for="photo-upload" 
                                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed rounded-lg cursor-pointer transition-all duration-200 relative overflow-hidden"
                                            :class="isDropping ? 'border-indigo-500 bg-indigo-50 dark:bg-indigo-900/20 scale-[1.02]' : 'border-gray-300 bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600'"
                                            x-on:dragover.prevent="isDropping = true"
                                            x-on:dragleave.prevent="isDropping = false"
                                            x-on:drop.prevent="isDropping = false"
                                        >
                                            @if ($photo)
                                                <div class="absolute inset-0 z-20 flex items-center justify-center bg-gray-100 dark:bg-gray-800">
                                                    <img src="{{ $photo->temporaryUrl() }}" class="w-full h-full object-contain p-2">
                                                    <button wire:click.prevent="$set('photo', null)" class="absolute top-2 right-2 bg-red-500 text-white p-1.5 rounded-full hover:bg-red-600 shadow-lg transition-transform hover:scale-110 z-30" title="Remove Image">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                    </button>
                                                </div>
                                            @else
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg class="w-10 h-10 mb-4 text-gray-500 dark:text-gray-400 transition-colors" :class="isDropping ? 'text-indigo-500' : ''" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                    </svg>
                                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Drag & Drop your file here</span></p>
                                                    <div class="mt-2">
                                                        <span class="bg-indigo-600 text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-indigo-700 transition-colors shadow-md">
                                                            Choose File
                                                        </span>
                                                    </div>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-3" x-text="isDropping ? 'Drop file to upload!' : 'SVG, PNG, JPG or GIF (MAX. 800x400px)'"></p>
                                                </div>
                                            @endif
                                            <input id="photo-upload" type="file" wire:model="photo" class="hidden" accept="image/*" />
                                        </label>
                                        
                                        <!-- Progress Bar Overlay -->
                                        <div x-show="isUploading" class="absolute inset-0 bg-white/80 dark:bg-gray-900/80 flex flex-col items-center justify-center rounded-lg z-10">
                                            <div class="w-64 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mb-2">
                                                <div class="bg-indigo-600 h-2.5 rounded-full transition-all duration-300" :style="'width: ' + progress + '%'"></div>
                                            </div>
                                            <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400">Uploading... <span x-text="progress + '%'"></span></p>
                                        </div>
                                    </div>
                                    @error('photo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>

                                <div class="space-y-6">
                                    <div>
                                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Aspect Ratio</label>
                                        <div class="flex space-x-3">
                                            <button wire:click="$set('aspectRatio', '1:1')" class="flex-1 py-2 rounded-lg border transition-all duration-200 {{ $aspectRatio === '1:1' ? 'bg-indigo-600 text-white border-indigo-600 shadow-md' : 'bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 border-gray-300 dark:border-gray-600 hover:border-indigo-400' }}">
                                                <span class="block text-xs font-bold">Square</span>
                                                <span class="block text-xs opacity-75">1:1</span>
                                            </button>
                                            <button wire:click="$set('aspectRatio', '9:16')" class="flex-1 py-2 rounded-lg border transition-all duration-200 {{ $aspectRatio === '9:16' ? 'bg-indigo-600 text-white border-indigo-600 shadow-md' : 'bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 border-gray-300 dark:border-gray-600 hover:border-indigo-400' }}">
                                                <span class="block text-xs font-bold">Portrait</span>
                                                <span class="block text-xs opacity-75">9:16</span>
                                            </button>
                                            <button wire:click="$set('aspectRatio', '16:9')" class="flex-1 py-2 rounded-lg border transition-all duration-200 {{ $aspectRatio === '16:9' ? 'bg-indigo-600 text-white border-indigo-600 shadow-md' : 'bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 border-gray-300 dark:border-gray-600 hover:border-indigo-400' }}">
                                                <span class="block text-xs font-bold">Landscape</span>
                                                <span class="block text-xs opacity-75">16:9</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex justify-between items-center mb-1">
                                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Prompt</label>
                                            <button wire:click="generatePromptFromImage" wire:loading.attr="disabled" class="text-xs text-indigo-600 hover:text-indigo-500 flex items-center">
                                                <svg wire:loading.remove wire:target="generatePromptFromImage" class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                                <svg wire:loading wire:target="generatePromptFromImage" class="animate-spin w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                                </svg>
                                                {{ __('Auto-generate Prompt') }}
                                            </button>
                                        </div>
                                        <textarea wire:model="prompt" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-900 dark:border-gray-700 dark:text-white" rows="3" placeholder="Describe the background (e.g., on a wooden table with sunlight)"></textarea>
                                        @error('prompt') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                    <button wire:click="generate" wire:loading.attr="disabled" class="w-full bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 flex justify-center items-center">
                                        <span wire:loading.remove>Generate</span>
                                        <span wire:loading class="flex items-center">
                                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                            Generating...
                                        </span>
                                    </button>
                                </div>
                            </div>

                            @if(!empty($generatedImages))
                                <div class="mt-8 border-t border-gray-200 dark:border-gray-700 pt-8">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Results (4 Variations)</h4>
                                    <div class="grid grid-cols-2 gap-4">
                                        @foreach($generatedImages as $index => $image)
                                            <div class="bg-gray-100 dark:bg-gray-900 rounded-lg p-2 group relative flex flex-col items-center justify-center">
                                                <div class="relative overflow-hidden rounded-lg w-full flex items-center justify-center {{ $image['wrapper_class'] ?? 'bg-gray-50 dark:bg-gray-800 aspect-square' }}">
                                                    @if(isset($image['type']) && $image['type'] === 'style')
                                                        @if($image['style'] === 'Modern Gradient')
                                                            <div class="{{ $image['class'] }}">
                                                                <img src="{{ $image['url'] }}" class="{{ $image['inner_class'] }}">
                                                            </div>
                                                        @else
                                                            <img src="{{ $image['url'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 {{ $image['class'] }}">
                                                        @endif
                                                    @else
                                                        <img src="{{ $image['url'] }}" alt="Generated Image" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                                    @endif
                                                    
                                                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-xs py-1 px-2 text-center">
                                                        {{ $image['style'] }}
                                                    </div>
                                                </div>
                                                
                                                {{-- Hover Actions --}}
                                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-200 flex items-center justify-center opacity-0 group-hover:opacity-100 gap-2">
                                                    <button wire:click="viewImage({{ $index }})" class="bg-white text-gray-800 p-2 rounded-full shadow-sm hover:bg-gray-100 transition-colors" title="View">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                                    </button>
                                                    <a href="{{ $image['url'] }}" download="generated-photo-{{ $index + 1 }}.jpg" class="bg-white text-gray-800 p-2 rounded-full shadow-sm hover:bg-gray-100 transition-colors" title="Download">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            {{-- Image View Modal --}}
                            @if($viewingImage)
                                <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-75" wire:click.self="closeView">
                                    <div class="relative bg-white dark:bg-gray-800 rounded-lg max-w-4xl w-full max-h-[90vh] overflow-auto p-4 flex flex-col items-center">
                                        <button wire:click="closeView" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                        </button>
                                        
                                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">{{ $viewingImage['style'] }}</h3>
                                        
                                        <div class="flex items-center justify-center w-full h-full {{ $viewingImage['wrapper_class'] ?? 'bg-gray-50 dark:bg-gray-900' }} rounded-lg p-4">
                                            @if(isset($viewingImage['type']) && $viewingImage['type'] === 'style')
                                                @if($viewingImage['style'] === 'Modern Gradient')
                                                    <div class="{{ $viewingImage['class'] }}">
                                                        <img src="{{ $viewingImage['url'] }}" class="{{ $viewingImage['inner_class'] }}">
                                                    </div>
                                                @else
                                                    <img src="{{ $viewingImage['url'] }}" class="max-h-[70vh] max-w-full object-contain {{ $viewingImage['class'] }}">
                                                @endif
                                            @else
                                                <img src="{{ $viewingImage['url'] }}" class="max-h-[70vh] max-w-full object-contain">
                                            @endif
                                        </div>

                                        <div class="mt-4 flex justify-end w-full">
                                            <a href="{{ $viewingImage['url'] }}" download class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 flex items-center">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                                Download Image
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @elseif($activeTab === 'photobot')
                    <div class="max-w-5xl mx-auto">
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Lumina Photo Booth</h3>
                            <p class="text-gray-500 dark:text-gray-400">Create fun, stylized photo strips instantly.</p>
                        </div>
                        
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                            <!-- Upload Section -->
                            <div class="lg:col-span-5 space-y-6">
                                <div 
                                    x-data="{ isDropping: false, isUploading: false, progress: 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                                    class="relative group"
                                >
                                    <label 
                                        for="booth-upload" 
                                        class="flex flex-col items-center justify-center w-full h-80 border-2 border-dashed rounded-2xl cursor-pointer transition-all duration-300 relative overflow-hidden"
                                        :class="isDropping ? 'border-purple-500 bg-purple-50/50 dark:bg-purple-900/20 scale-[1.02] shadow-xl' : 'border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700/50 hover:bg-gray-100 dark:hover:bg-gray-700 hover:border-purple-400'"
                                        x-on:dragover.prevent="isDropping = true"
                                        x-on:dragleave.prevent="isDropping = false"
                                        x-on:drop.prevent="isDropping = false"
                                    >
                                        @if ($photo)
                                            <div class="absolute inset-0 z-20 flex items-center justify-center bg-gray-100 dark:bg-gray-800">
                                                <img src="{{ $photo->temporaryUrl() }}" class="w-full h-full object-contain p-2">
                                                <button wire:click.prevent="$set('photo', null)" class="absolute top-2 right-2 bg-red-500 text-white p-1.5 rounded-full hover:bg-red-600 shadow-lg transition-transform hover:scale-110 z-30" title="Remove Image">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                </button>
                                            </div>
                                        @else
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6 text-center px-4 relative z-10">
                                                <div class="w-16 h-16 mb-4 rounded-full bg-purple-100 dark:bg-purple-900/50 flex items-center justify-center transition-transform duration-300 group-hover:scale-110 group-hover:rotate-3">
                                                    <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                                </div>
                                                <p class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Take a selfie or upload</p>
                                                <div class="mt-2">
                                                    <span class="bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-purple-700 transition-colors shadow-md">
                                                        Choose Photo
                                                    </span>
                                                </div>
                                            </div>
                                        @endif
                                        <input id="booth-upload" type="file" wire:model="photo" class="hidden" accept="image/*" />
                                    </label>
                                    
                                    <!-- Progress Bar Overlay -->
                                    <div x-show="isUploading" class="absolute inset-0 bg-white/90 dark:bg-gray-900/90 backdrop-blur-sm flex flex-col items-center justify-center rounded-2xl z-40 transition-opacity">
                                        <div class="w-48 bg-gray-200 rounded-full h-1.5 dark:bg-gray-700 mb-4 overflow-hidden">
                                            <div class="bg-gradient-to-r from-purple-500 to-indigo-500 h-1.5 rounded-full transition-all duration-300" :style="'width: ' + progress + '%'"></div>
                                        </div>
                                        <p class="text-sm font-bold text-purple-600 dark:text-purple-400 animate-pulse">Uploading...</p>
                                    </div>
                                </div>
                                @error('photo') <span class="text-red-500 text-sm block mt-2">{{ $message }}</span> @enderror
                            </div>

                            <!-- Controls Section -->
                            <div class="lg:col-span-7 space-y-6">
                                <div class="bg-gray-50 dark:bg-gray-900/50 rounded-2xl p-6 border border-gray-100 dark:border-gray-700">
                                    <div class="mb-6">
                                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-3">Number of Subjects</label>
                                        <div class="grid grid-cols-3 gap-3">
                                            <button wire:click="$set('subjectCount', '1')" class="py-3 px-4 rounded-xl border transition-all duration-200 flex flex-col items-center justify-center {{ $subjectCount === '1' ? 'bg-purple-600 text-white border-purple-600 shadow-lg shadow-purple-500/30 ring-2 ring-purple-600 ring-offset-2 dark:ring-offset-gray-900' : 'bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 border-gray-200 dark:border-gray-600 hover:border-purple-400 hover:bg-purple-50 dark:hover:bg-purple-900/20' }}">
                                                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                                <span class="text-xs font-bold">Sendiri</span>
                                            </button>
                                            <button wire:click="$set('subjectCount', '2')" class="py-3 px-4 rounded-xl border transition-all duration-200 flex flex-col items-center justify-center {{ $subjectCount === '2' ? 'bg-purple-600 text-white border-purple-600 shadow-lg shadow-purple-500/30 ring-2 ring-purple-600 ring-offset-2 dark:ring-offset-gray-900' : 'bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 border-gray-200 dark:border-gray-600 hover:border-purple-400 hover:bg-purple-50 dark:hover:bg-purple-900/20' }}">
                                                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <span class="text-xs font-bold">2 Orang</span>
                                            </button>
                                            <button wire:click="$set('subjectCount', 'group')" class="py-3 px-4 rounded-xl border transition-all duration-200 flex flex-col items-center justify-center {{ $subjectCount === 'group' ? 'bg-purple-600 text-white border-purple-600 shadow-lg shadow-purple-500/30 ring-2 ring-purple-600 ring-offset-2 dark:ring-offset-gray-900' : 'bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 border-gray-200 dark:border-gray-600 hover:border-purple-400 hover:bg-purple-50 dark:hover:bg-purple-900/20' }}">
                                                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                                <span class="text-xs font-bold">Kelompok</span>
                                            </button>
                                        </div>
                                    <div class="mb-6">
                                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-3">Theme Style</label>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach(['k-pop-cute' => 'K-Pop Cute', 'y2k-aesthetic' => 'Y2K Aesthetic', 'cyberpunk-neon' => 'Cyberpunk', 'classic-bw' => 'Classic B&W', 'warm-sepia' => 'Warm Sepia'] as $key => $label)
                                                <button wire:click="$set('boothTheme', '{{ $key }}')" class="px-4 py-2 rounded-full text-xs font-bold border transition-all duration-200 {{ $boothTheme === $key ? 'bg-purple-600 text-white border-purple-600 shadow-lg shadow-purple-500/30' : 'bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 border-gray-200 dark:border-gray-600 hover:border-purple-400 hover:bg-purple-50 dark:hover:bg-purple-900/20' }}">
                                                    {{ $label }}
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-3">Layout Style</label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <button wire:click="$set('layout', 'photo-strip')" class="py-3 px-4 rounded-xl border transition-all duration-200 flex items-center {{ $layout === 'photo-strip' ? 'bg-purple-600 text-white border-purple-600 shadow-lg shadow-purple-500/30' : 'bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 border-gray-200 dark:border-gray-600 hover:border-purple-400 hover:bg-purple-50 dark:hover:bg-purple-900/20' }}">
                                                <div class="w-6 h-8 border-2 border-current rounded-sm flex flex-col justify-between p-0.5 mr-3 opacity-80">
                                                    <div class="w-full h-1.5 bg-current rounded-[1px]"></div>
                                                    <div class="w-full h-1.5 bg-current rounded-[1px]"></div>
                                                    <div class="w-full h-1.5 bg-current rounded-[1px]"></div>
                                                </div>
                                                <span class="text-xs font-bold">Photo Strip (3)</span>
                                            </button>
                                            <button wire:click="$set('layout', 'stiker-set')" class="py-3 px-4 rounded-xl border transition-all duration-200 flex items-center {{ $layout === 'stiker-set' ? 'bg-purple-600 text-white border-purple-600 shadow-lg shadow-purple-500/30' : 'bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 border-gray-200 dark:border-gray-600 hover:border-purple-400 hover:bg-purple-50 dark:hover:bg-purple-900/20' }}">
                                                <div class="w-6 h-6 border-2 border-current rounded-sm grid grid-cols-2 gap-0.5 p-0.5 mr-3 opacity-80">
                                                    <div class="bg-current rounded-[1px]"></div>
                                                    <div class="bg-current rounded-[1px]"></div>
                                                    <div class="bg-current rounded-[1px]"></div>
                                                    <div class="bg-current rounded-[1px]"></div>
                                                </div>
                                                <span class="text-xs font-bold">Stiker Set</span>
                                            </button>
                                            <button wire:click="$set('layout', '4r-grid')" class="py-3 px-4 rounded-xl border transition-all duration-200 flex items-center {{ $layout === '4r-grid' ? 'bg-purple-600 text-white border-purple-600 shadow-lg shadow-purple-500/30' : 'bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 border-gray-200 dark:border-gray-600 hover:border-purple-400 hover:bg-purple-50 dark:hover:bg-purple-900/20' }}">
                                                <div class="w-8 h-6 border-2 border-current rounded-sm grid grid-cols-3 gap-0.5 p-0.5 mr-3 opacity-80">
                                                    <div class="bg-current rounded-[1px]"></div>
                                                    <div class="bg-current rounded-[1px]"></div>
                                                    <div class="bg-current rounded-[1px]"></div>
                                                    <div class="bg-current rounded-[1px]"></div>
                                                    <div class="bg-current rounded-[1px]"></div>
                                                    <div class="bg-current rounded-[1px]"></div>
                                                </div>
                                                <span class="text-xs font-bold">4R Grid (6)</span>
                                            </button>
                                            <button wire:click="$set('layout', 'polaroid-collage')" class="py-3 px-4 rounded-xl border transition-all duration-200 flex items-center {{ $layout === 'polaroid-collage' ? 'bg-purple-600 text-white border-purple-600 shadow-lg shadow-purple-500/30' : 'bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 border-gray-200 dark:border-gray-600 hover:border-purple-400 hover:bg-purple-50 dark:hover:bg-purple-900/20' }}">
                                                <div class="w-6 h-7 border-2 border-current rounded-sm flex flex-col p-0.5 mr-3 opacity-80">
                                                    <div class="w-full h-4 bg-current rounded-[1px] mb-0.5"></div>
                                                </div>
                                                <span class="text-xs font-bold">Polaroid</span>
                                            </button>
                                        </div>
                                    </div>

                                    <button wire:click="generate" wire:loading.attr="disabled" class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-3.5 rounded-xl hover:shadow-lg hover:shadow-purple-500/30 hover:-translate-y-0.5 transition-all duration-200 flex justify-center items-center font-bold text-sm tracking-wide">
                                        <span wire:loading.remove>GENERATE PHOTO BOOTH</span>
                                        <span wire:loading class="flex items-center">
                                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                            Processing...
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        @if(!empty($generatedImages))
                            <div class="mt-12 border-t border-gray-100 dark:border-gray-700 pt-10">
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                                    <span class="bg-purple-100 dark:bg-purple-900/50 text-purple-600 dark:text-purple-400 p-2 rounded-lg mr-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    </span>
                                    Photo Booth Results
                                </h4>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    @foreach($generatedImages as $index => $image)
                                        <div class="group relative bg-white dark:bg-gray-900 rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 border border-gray-100 dark:border-gray-800">
                                            <div class="relative overflow-hidden rounded-lg w-full flex items-center justify-center {{ $image['wrapper_class'] ?? 'bg-gray-50 dark:bg-gray-800 aspect-square' }}">
                                                
                                                @if($activeTab === 'photobot' && $layout === 'photo-strip')
                                                    <div class="flex flex-col w-full h-full p-4 gap-4 bg-white {{ $image['class'] }}">
                                                        <div class="flex-1 overflow-hidden shadow-sm border border-gray-100"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                        <div class="flex-1 overflow-hidden shadow-sm border border-gray-100"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                        <div class="flex-1 overflow-hidden shadow-sm border border-gray-100"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                        <div class="text-center mt-1">
                                                            <span class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">PHOTO BOOTH</span>
                                                        </div>
                                                    </div>
                                                @elseif($activeTab === 'photobot' && $layout === 'stiker-set')
                                                    <div class="grid grid-cols-2 w-full h-full p-4 gap-4 bg-gray-100 {{ $image['class'] }}">
                                                        <div class="overflow-hidden rounded-full border-4 border-white shadow-sm aspect-square"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                        <div class="overflow-hidden rounded-full border-4 border-white shadow-sm aspect-square"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                        <div class="overflow-hidden rounded-full border-4 border-white shadow-sm aspect-square"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                        <div class="overflow-hidden rounded-full border-4 border-white shadow-sm aspect-square"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                    </div>
                                                @elseif($activeTab === 'photobot' && $layout === '4r-grid')
                                                    <div class="grid grid-cols-2 grid-rows-3 w-full h-full p-2 gap-0.5 bg-white border-8 border-white {{ $image['class'] }}">
                                                        <div class="overflow-hidden"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                        <div class="overflow-hidden"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                        <div class="overflow-hidden"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                        <div class="overflow-hidden"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                        <div class="overflow-hidden"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                        <div class="overflow-hidden"><img src="{{ $image['url'] }}" class="w-full h-full object-cover"></div>
                                                    </div>
                                                @elseif($activeTab === 'photobot' && $layout === 'polaroid-collage')
                                                    <div class="flex flex-col w-full h-full bg-white p-4 pb-12 {{ $image['class'] }}">
                                                        <div class="flex-1 overflow-hidden bg-gray-900 mb-4 shadow-inner border border-gray-100">
                                                            <img src="{{ $image['url'] }}" class="w-full h-full object-cover">
                                                        </div>
                                                        <div class="text-center font-handwriting text-gray-600 text-sm">
                                                            {{ $image['style'] }} • {{ date('Y') }}
                                                        </div>
                                                    </div>
                                                @else
                                                    <img src="{{ $image['url'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 {{ $image['class'] }}">
                                                @endif

                                                @if(isset($image['overlay_text']) && !empty($image['overlay_text']))
                                                    <div class="absolute top-2 right-2 bg-black/50 text-white text-[10px] font-bold px-2 py-0.5 rounded backdrop-blur-sm border border-white/20 z-10">
                                                        {{ $image['overlay_text'] }}
                                                    </div>
                                                @endif
                                                
                                                <!-- Overlay Actions -->
                                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-3">
                                                    <button wire:click="viewImage({{ $index }})" class="bg-white text-gray-900 p-3 rounded-full hover:scale-110 transition-transform shadow-lg">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                                    </button>
                                                    <a href="{{ $image['url'] }}" download class="bg-purple-600 text-white p-3 rounded-full hover:scale-110 transition-transform shadow-lg">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white dark:bg-gray-900">
                                                <p class="font-bold text-gray-800 dark:text-white">{{ $image['style'] }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                @elseif($activeTab === 'foto-mockup')
                    <div class="max-w-4xl mx-auto">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-8">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Create Product Mockup</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <div 
                                        x-data="{ isDropping: false, isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                                        class="flex items-center justify-center w-full"
                                    >
                                        <label 
                                            for="mockup-upload" 
                                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed rounded-lg cursor-pointer transition-all duration-200"
                                            :class="isDropping ? 'border-indigo-500 bg-indigo-50 dark:bg-indigo-900/20 scale-[1.02]' : 'border-gray-300 bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600'"
                                            x-on:dragover.prevent="isDropping = true"
                                            x-on:dragleave.prevent="isDropping = false"
                                            x-on:drop.prevent="isDropping = false"
                                        >
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-10 h-10 mb-4 text-gray-500 dark:text-gray-400 transition-colors" :class="isDropping ? 'text-indigo-500' : ''" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400" x-text="isDropping ? 'Drop file to upload!' : 'SVG, PNG, JPG or GIF (MAX. 800x400px)'"></p>
                                            </div>
                                            <input id="mockup-upload" type="file" wire:model="photo" class="hidden" accept="image/*" />
                                        </label>
                                        
                                        <!-- Progress Bar Overlay -->
                                        <div x-show="isUploading" class="absolute inset-0 bg-white/80 dark:bg-gray-900/80 flex flex-col items-center justify-center rounded-lg z-10">
                                            <div class="w-64 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mb-2">
                                                <div class="bg-indigo-600 h-2.5 rounded-full transition-all duration-300" :style="'width: ' + progress + '%'"></div>
                                            </div>
                                            <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400">Uploading... <span x-text="progress + '%'"></span></p>
                                        </div>
                                    </div>
                                    @error('photo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                                    <div wire:loading wire:target="photo" class="w-full mt-2">
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                            <div class="bg-indigo-600 h-2.5 rounded-full animate-pulse" style="width: 100%"></div>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">Uploading & Generating...</p>
                                    </div>

                                    @if ($photo)
                                        <div class="mt-4 relative">
                                            <img src="{{ $photo->temporaryUrl() }}" class="max-h-64 mx-auto rounded-lg mb-2 shadow-sm">
                                            <button wire:click="$set('photo', null)" class="text-red-500 text-sm hover:underline block mx-auto">Remove Image</button>
                                        </div>
                                    @endif
                                </div>

                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Prompt (Optional)</label>
                                        <textarea wire:model="prompt" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-900 dark:border-gray-700 dark:text-white" rows="3" placeholder="Describe the mockup style..."></textarea>
                                    </div>
                                    <button wire:click="generate" wire:loading.attr="disabled" class="w-full bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 flex justify-center items-center">
                                        <span wire:loading.remove>Regenerate</span>
                                        <span wire:loading class="flex items-center">
                                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                            Processing...
                                        </span>
                                    </button>
                                </div>
                            </div>

                            @if(!empty($generatedImages))
                                <div class="mt-8 border-t border-gray-200 dark:border-gray-700 pt-8">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Mockup Results</h4>
                                    <div class="grid grid-cols-2 gap-4">
                                        @foreach($generatedImages as $index => $image)
                                            <div class="bg-gray-100 dark:bg-gray-900 rounded-lg p-2 group relative flex flex-col items-center justify-center">
                                                <div class="relative overflow-hidden rounded-lg h-48 w-full flex items-center justify-center bg-gray-200">
                                                    <img src="{{ $image['url'] }}" class="max-h-40 max-w-full object-contain {{ $image['class'] }}">
                                                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                                                        <span class="text-white font-bold text-xl drop-shadow-md opacity-50">{{ $image['overlay_text'] }}</span>
                                                    </div>
                                                </div>
                                                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-xs py-1 px-2 text-center">
                                                    {{ $image['style'] }}
                                                </div>
                                                {{-- Hover Actions --}}
                                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-200 flex items-center justify-center opacity-0 group-hover:opacity-100 gap-2">
                                                    <button wire:click="viewImage({{ $index }})" class="bg-white text-gray-800 p-2 rounded-full shadow-sm hover:bg-gray-100 transition-colors" title="View">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                                    </button>
                                                    <a href="{{ $image['url'] }}" download class="bg-white text-gray-800 p-2 rounded-full shadow-sm hover:bg-gray-100 transition-colors" title="Download">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @elseif($activeTab === 'foto-baner')
                    <div class="max-w-4xl mx-auto">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-8">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Create Marketing Banner</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <div 
                                        x-data="{ isDropping: false, isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                                        class="flex items-center justify-center w-full"
                                    >
                                        <label 
                                            for="banner-upload" 
                                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed rounded-lg cursor-pointer transition-all duration-200"
                                            :class="isDropping ? 'border-indigo-500 bg-indigo-50 dark:bg-indigo-900/20 scale-[1.02]' : 'border-gray-300 bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600'"
                                            x-on:dragover.prevent="isDropping = true"
                                            x-on:dragleave.prevent="isDropping = false"
                                            x-on:drop.prevent="isDropping = false"
                                        >
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-10 h-10 mb-4 text-gray-500 dark:text-gray-400 transition-colors" :class="isDropping ? 'text-indigo-500' : ''" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400" x-text="isDropping ? 'Drop file to upload!' : 'SVG, PNG, JPG or GIF (MAX. 800x400px)'"></p>
                                            </div>
                                            <input id="banner-upload" type="file" wire:model="photo" class="hidden" accept="image/*" />
                                        </label>
                                        
                                        <!-- Progress Bar Overlay -->
                                        <div x-show="isUploading" class="absolute inset-0 bg-white/80 dark:bg-gray-900/80 flex flex-col items-center justify-center rounded-lg z-10">
                                            <div class="w-64 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mb-2">
                                                <div class="bg-indigo-600 h-2.5 rounded-full transition-all duration-300" :style="'width: ' + progress + '%'"></div>
                                            </div>
                                            <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400">Uploading... <span x-text="progress + '%'"></span></p>
                                        </div>
                                    </div>
                                    @error('photo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                                    <div wire:loading wire:target="photo" class="w-full mt-2">
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                            <div class="bg-indigo-600 h-2.5 rounded-full animate-pulse" style="width: 100%"></div>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">Uploading & Generating...</p>
                                    </div>

                                    @if ($photo)
                                        <div class="mt-4 relative">
                                            <img src="{{ $photo->temporaryUrl() }}" class="max-h-64 mx-auto rounded-lg mb-2 shadow-sm">
                                            <button wire:click="$set('photo', null)" class="text-red-500 text-sm hover:underline block mx-auto">Remove Image</button>
                                        </div>
                                    @endif
                                </div>

                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Prompt (Optional)</label>
                                        <textarea wire:model="prompt" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-900 dark:border-gray-700 dark:text-white" rows="3" placeholder="Describe the banner theme..."></textarea>
                                    </div>
                                    <button wire:click="generate" wire:loading.attr="disabled" class="w-full bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 flex justify-center items-center">
                                        <span wire:loading.remove>Regenerate</span>
                                        <span wire:loading class="flex items-center">
                                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                            Processing...
                                        </span>
                                    </button>
                                </div>
                            </div>

                            @if(!empty($generatedImages))
                                <div class="mt-8 border-t border-gray-200 dark:border-gray-700 pt-8">
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Banner Results</h4>
                                    <div class="grid grid-cols-2 gap-4">
                                        @foreach($generatedImages as $index => $image)
                                            <div class="bg-gray-100 dark:bg-gray-900 rounded-lg p-2 group relative flex flex-col items-center justify-center">
                                                <div class="relative overflow-hidden rounded-lg w-full flex items-center justify-center bg-gray-200 {{ $image['wrapper_class'] ?? 'aspect-video' }}">
                                                    <img src="{{ $image['url'] }}" class="w-full h-full object-cover {{ $image['class'] }}">
                                                    <div class="absolute top-2 right-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                                                        {{ $image['overlay_text'] }}
                                                    </div>
                                                </div>
                                                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-xs py-1 px-2 text-center">
                                                    {{ $image['style'] }}
                                                </div>
                                                {{-- Hover Actions --}}
                                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-200 flex items-center justify-center opacity-0 group-hover:opacity-100 gap-2">
                                                    <button wire:click="viewImage({{ $index }})" class="bg-white text-gray-800 p-2 rounded-full shadow-sm hover:bg-gray-100 transition-colors" title="View">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                                    </button>
                                                    <a href="{{ $image['url'] }}" download class="bg-white text-gray-800 p-2 rounded-full shadow-sm hover:bg-gray-100 transition-colors" title="Download">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
