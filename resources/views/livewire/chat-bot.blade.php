<div>
    <!-- Floating Button -->
    <div class="fixed bottom-5 right-5 z-50">
        <button 
            wire:click="toggleChat" 
            class="bg-indigo-600 hover:bg-indigo-700 text-white rounded-full p-4 shadow-lg transition-all transform hover:scale-110 focus:outline-none"
        >
            @if($isOpen)
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            @else
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
            @endif
        </button>
    </div>

    <!-- Chat Window -->
    @if($isOpen)
        <div 
            class="fixed bottom-20 right-5 z-50 w-80 sm:w-96 bg-white dark:bg-gray-800 rounded-lg shadow-2xl overflow-hidden flex flex-col border border-gray-200 dark:border-gray-700 transition-all transform origin-bottom-right"
            style="max-height: 500px; height: 70vh;"
        >
            <!-- Header -->
            <div class="bg-indigo-600 p-3 flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center mr-2">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-sm">Tanya Lumina</h3>
                        <p class="text-indigo-100 text-xs flex items-center">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-1"></span> Online
                        </p>
                    </div>
                </div>
                <button wire:click="toggleChat" class="text-white hover:text-gray-200 focus:outline-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>

            <!-- Messages -->
            <div class="flex-1 overflow-y-auto p-3 space-y-3 bg-gray-50 dark:bg-gray-900" id="chat-box">
                @foreach($messages as $message)
                    <div class="flex {{ $message['role'] === 'user' ? 'justify-end' : 'justify-start' }}">
                        <div class="max-w-[85%] px-3 py-2 rounded-lg text-sm {{ $message['role'] === 'user' ? 'bg-indigo-600 text-white rounded-tr-none' : 'bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-tl-none shadow-sm' }}">
                            {{ $message['content'] }}
                        </div>
                    </div>
                @endforeach

                @if($isTyping)
                    <div class="flex justify-start">
                        <div class="flex items-center space-x-1 bg-white dark:bg-gray-700 p-2 rounded-lg rounded-tl-none shadow-sm">
                            <div class="w-1.5 h-1.5 bg-gray-400 rounded-full animate-bounce"></div>
                            <div class="w-1.5 h-1.5 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                            <div class="w-1.5 h-1.5 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Input -->
            <div class="p-3 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
                <form wire:submit.prevent="sendMessage" class="flex space-x-2">
                    <input 
                        wire:model="userInput" 
                        type="text" 
                        placeholder="Tanya sesuatu..." 
                        class="flex-1 text-sm rounded-full border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-900 dark:border-gray-700 dark:text-white px-3 py-2"
                    >
                    <button 
                        type="submit" 
                        class="bg-indigo-600 text-white rounded-full p-2 hover:bg-indigo-700 focus:outline-none transition-colors disabled:opacity-50"
                        wire:loading.attr="disabled"
                    >
                        <svg class="w-5 h-5 transform rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    </button>
                </form>
            </div>
        </div>
        
        <script>
            document.addEventListener('livewire:initialized', () => {
                const chatBox = document.getElementById('chat-box');
                
                Livewire.hook('morph.updated', ({ component, el }) => {
                    if (chatBox) {
                        chatBox.scrollTop = chatBox.scrollHeight;
                    }
                });
            });
        </script>
    @endif
</div>
