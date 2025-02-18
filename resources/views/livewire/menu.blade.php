<div class="relative w-full h-[60px] mt-[-6px] flex items-center justify-center px-4 rounded-b-[10px] bg-[#AFA0FF] z-20">
    <!-- Menu para desktop/tablets -->
    <div class="hidden md:flex space-x-6 font-bold">
        <a href="#especialidades" class="hover:text-blue-500">Especialidades</a>
        <a href="#sobre-mim" class="hover:text-blue-500">Sobre mim</a>
        <a href="#depoimentos" class="hover:text-blue-500">Depoimentos</a>
        <a href="#onde-atendo" class="hover:text-blue-500">Onde Atendo</a>
        <a href="#contato" class="hover:text-blue-500">Contato</a>
    </div>

    <!-- Menu para mobile -->
    <div class="md:hidden relative">
        <button wire:click="toggleMenu" class="flex items-center gap-2 font-bold">
            Menu
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="{{ $isMenuOpen ? 'M19 15l-7-7-7 7' : 'M19 9l-7 7-7-7' }}" />
            </svg>
        </button>

        <!-- Dropdown do menu -->
        @if ($isMenuOpen)
            <div class="absolute left-1/2 transform -translate-x-1/2 mt-2 bg-white shadow-lg rounded-lg w-48">
                <a href="#especialidades" class="block px-4 py-2 hover:bg-gray-100">Especialidades</a>
                <a href="#sobre-mim" class="block px-4 py-2 hover:bg-gray-100">Sobre mim</a>
                <a href="#depoimentos" class="block px-4 py-2 hover:bg-gray-100">Depoimentos</a>
                <a href="#onde-atendo" class="block px-4 py-2 hover:bg-gray-100">Onde Atendo</a>
                {{-- <a href="#contato" class="block px-4 py-2 hover:bg-gray-100">Contato</a> --}}
            </div>
        @endif
    </div>
</div>
