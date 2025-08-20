<x-guest-layout>
    <section class="w-screen h-full flex">
        <div class="flex-1">
            <div class="flex h-full w-full items-end justify-end py-16 px-8">
                <h1 class="text-4xl font-bold leading-none pr-12">
                    <span class="text-white">slide into our dms</span><span class="text-stone-500">, don't be shy. we're not promising life-changing conversations but we might just hit you back with some questionable takes, or a random clairo reference you didn't ask for. either way, you know you want to.</span>
                </h1>
            </div>
        </div>


        <div class="flex-1 h-full flex items-center justify-start border-l border-white pl-8">
            <div class="w-full max-w-2xl py-16">
                <div class="space-y-8">
                    <div>
                        <label class="block text-white text-xs uppercase tracking-wider mb-2">Email</label>
                        <input type="email" class="w-full bg-transparent border-b border-white text-white py-3 focus:outline-none text-lg" placeholder="your@email.com">
                    </div>
                    
                    <div>
                        <label class="block text-white text-xs uppercase tracking-wider mb-2">Name</label>
                        <input type="text" class="w-full bg-transparent border-b border-white text-white py-3 focus:outline-none text-lg" placeholder="your name">
                    </div>
                    
                    <div>
                        <label class="block text-white text-xs uppercase tracking-wider mb-2">Message</label>
                        <textarea rows="6" class="w-full bg-transparent border-b border-white text-white py-3 focus:outline-none resize-none text-lg" placeholder="your message here..."></textarea>
                    </div>
                    
                    <div class="pt-4">
                        <button class="bg-white text-black py-4 px-12 font-medium hover:bg-zinc-950 hover:text-white transition-colors group relative inline-flex items-center">
                            Send Message
                            <i class="ph ph-arrow-up-right ml-4 text-xl group-hover:text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>