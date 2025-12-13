<div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg flex flex-col h-[600px]">
            
            <!-- Chat Header -->
            <div class="bg-indigo-600 p-4 flex items-center shadow-md">
                <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center mr-3">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <h2 class="text-white font-bold text-lg">Tanya Lumina</h2>
                    <p class="text-indigo-100 text-xs flex items-center">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-1"></span> Online
                    </p>
                </div>
            </div>

            <!-- Chat Messages Area -->
            <div class="flex-1 overflow-y-auto p-4 space-y-4 bg-gray-50 dark:bg-gray-900" id="chat-container">
                @foreach($messages as $message)
                    <div class="flex {{ $message['role'] === 'user' ? 'justify-end' : 'justify-start' }}">
                        <div class="flex max-w-[80%] {{ $message['role'] === 'user' ? 'flex-row-reverse' : 'flex-row' }}">
                            <!-- Avatar -->
                            <div class="flex-shrink-0 h-8 w-8 rounded-full flex items-center justify-center {{ $message['role'] === 'user' ? 'bg-indigo-500 ml-2' : 'bg-gray-300 mr-2' }}">
                                @if($message['role'] === 'user')
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                @else
                                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                @endif
                            </div>

                            <!-- Bubble -->
                            <div class="px-4 py-2 rounded-lg shadow-sm {{ $message['role'] === 'user' ? 'bg-indigo-600 text-white rounded-tr-none' : 'bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-tl-none' }}">
                                <p class="text-sm">{{ $message['content'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if($isTyping)
                    <div class="flex justify-start">
                        <div class="flex items-center space-x-1 bg-white dark:bg-gray-800 p-3 rounded-lg rounded-tl-none shadow-sm ml-10">
                            <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                            <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                            <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Input Area -->
            <div class="bg-white dark:bg-gray-800 p-4 border-t border-gray-200 dark:border-gray-700">
                <form wire:submit.prevent="sendMessage" class="flex space-x-2">
                    <input 
                        wire:model="userInput" 
                        type="text" 
                        placeholder="Ketik pesan Anda..." 
                        class="flex-1 rounded-full border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-900 dark:border-gray-700 dark:text-white px-4 py-2"
                    >
                    <button 
                        type="submit" 
                        class="bg-indigo-600 text-white rounded-full p-2 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors disabled:opacity-50"
                        wire:loading.attr="disabled"
                    >
                        <svg class="w-6 h-6 transform rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Auto-scroll to bottom when messages update
    document.addEventListener('livewire:initialized', () => {
        const chatContainer = document.getElementById('chat-container');
        
        Livewire.hook('morph.updated', ({ component, el }) => {
            if (chatContainer) {
                chatContainer.scrollTop = chatContainer.scrollHeight;
            }
        });
    });
</script>
