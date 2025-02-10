<header class="fixed w-full top-0 left-0 bg-white bg-opacity-90 shadow-lg backdrop-blur-lg backdrop-saturate-150 z-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <a href="/" class="flex items-center space-x-2">
                <img src="/pix/logoElsy.svg" alt="logo" class="h-14">
                <span class="text-xl font-bold text-slate-800">Biblioteca</span>
            </a>
            <nav>
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/') }}" class="text-violet-800 hover:text-gray-800 transition duration-300">
                        <x-lucide-home class="w-6 h-6" />
                    </a>
                    <a href="{{ url('/books') }}" class="text-violet-800 hover:text-gray-800 transition duration-300">
                        <x-lucide-book class="w-6 h-6" />
                    </a>
                    <a href="{{ url('/loans') }}" class="text-violet-800 hover:text-gray-800 transition duration-300">
                        <x-lucide-calendar class="w-6 h-6" />
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
