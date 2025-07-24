<div class="w-full max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between p-4 md:p-10 mt-2 md:mt-6 bg-gradient-to-br from-blue-100 via-white to-blue-200 bg-cover bg-center bg-no-repeat rounded-2xl shadow-xl opacity-0 transition-all duration-500 transform scale-90" id="header">
    <!-- Informações e botão -->
    <div class="w-full md:w-1/2 flex flex-col items-center text-center md:text-left">
        <div class="font-bold text-[36px] md:text-[72px] leading-tight drop-shadow-lg">Podóloga</div>
        <div class="font-semibold text-[22px] md:text-[36px] mb-2 md:mb-4">Fabiana Gonçalves</div>
        <div class="w-full flex flex-col md:flex-row items-center justify-between px-4 md:px-12 py-6 md:py-10 gap-4">
            <div class="mb-2 md:mb-0">
                <div class="flex items-center mb-3">
                    <img src="/assets/img/check.svg" class="w-5 h-5" alt="Fungos" />
                    <div class="ml-2 text-[16px] md:text-[18px]">Fungos</div>
                </div>
                <div class="flex items-center">
                    <img src="/assets/img/check.svg" class="w-5 h-5" alt="Unhas Encravadas" />
                    <div class="ml-2 text-[16px] md:text-[18px]">Unhas Encravadas</div>
                </div>
            </div>
            <div>
                <div class="flex items-center mb-3">
                    <img src="/assets/img/check.svg" class="w-5 h-5" alt="Rachaduras" />
                    <div class="ml-2 text-[16px] md:text-[18px]">Rachaduras</div>
                </div>
                <div class="flex items-center">
                    <img src="/assets/img/check.svg" class="w-5 h-5" alt="Reflexologia Podal" />
                    <div class="ml-2 text-[16px] md:text-[18px]">Reflexologia Podal</div>
                </div>
            </div>
        </div>
        <!-- Botão do whatsapp -->
        <a href="https://wa.me/47991626283?text=Olá%20Fabiana,%20gostaria%20de%20mais%20informações%20sobre%20agendamento%20de%20uma%20consulta%20avaliativa!"
        class="bg-gradient-to-r from-green-400 to-blue-500 text-white px-8 py-3 rounded-xl text-lg font-semibold shadow-lg hover:scale-105 hover:from-green-500 hover:to-blue-600 transition-all flex items-center gap-2 mt-4"
        target="_blank"
        onclick="return gtag_report_conversion(this.href);">
            <img src="/assets/img/whatsapp.svg" class="w-6 h-6" alt="WhatsApp" />
            Mais Informações
        </a>
    </div>

    <!-- Imagens com animações -->
    <div class="w-full md:w-1/2 flex justify-center mt-8 md:mt-0 relative">
        <div class="relative w-[90%] md:w-[60%] rounded-2xl overflow-hidden shadow-lg bg-white/60">
            <img src="/assets/img/fabiana-podologa.svg" class="w-full object-cover aspect-square" alt="Fabiana Podóloga" />
        </div>
    </div>
</div>


<script>
    // Espera o site carregar completamente antes de exibir o header com animação
    window.addEventListener("load", () => {
        const header = document.getElementById("header");
        header.classList.remove("opacity-0", "scale-90");
    });
</script>