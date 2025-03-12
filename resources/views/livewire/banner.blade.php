<div class="w-full flex flex-col md:flex-row items-center justify-between p-6 md:p-12 bg-cover bg-center bg-no-repeat opacity-0 transition-all duration-500 transform scale-90" id="header" 
    style="background-image: url('/assets/img/fundo-ellipse.svg');background-size: contain;">
    <!-- Informações e botão -->
    <div class="w-full md:w-1/2 flex flex-col items-center text-center md:text-left">
        <div class="font-bold text-[40px] md:text-[80px]">Podóloga</div>

        <div class="font-semibold text-[24px] md:text-[40px]">Fabiana Gonçalves</div>

        <div class="w-full flex flex-col md:flex-row items-center justify-between px-6 md:px-24 py-8 md:py-16">
            <div class="mb-4 md:mb-0">
                <div class="flex items-center mb-5">
                    <img src="/assets/img/check.svg" class="w-[22px]" />
                    <div class="ml-2 text-[18px]">Fungos</div>
                </div>
                <div class="flex items-center">
                    <img src="/assets/img/check.svg" class="w-[22px]" />
                    <div class="ml-2 text-[18px]">Unhas Encravadas</div>
                </div>
            </div>

            <div>
                <div class="flex items-center mb-5">
                    <img src="/assets/img/check.svg" class="w-[22px]" />
                    <div class="ml-2 text-[18px]">Rachaduras</div>
                </div>
                <div class="flex items-center">
                    <img src="/assets/img/check.svg" class="w-[22px]" />
                    <div class="ml-2 text-[18px]">Reflexologia Podal</div>
                </div>
            </div>
        </div>

        <!-- Botão do whatsapp -->
        <a href="https://wa.me/47991626283?text=Olá%20Fabiana,%20gostaria%20de%20mais%20informações%20sobre%20agendamento%20de%20uma%20consulta%20avaliativa!"
        class="bg-blue-500 text-white px-10 py-3 rounded-lg text-lg font-semibold shadow-md hover:bg-blue-600 transition mt-4"
        target="_blank"
        onclick="return gtag_report_conversion(this.href);">
            Mais Informações
        </a>
    </div>

    <!-- Imagens com animações -->
    <div class="w-full md:w-1/2 flex justify-center mt-8 md:mt-0 relative">
        <!-- Imagem principal reduzida -->
        <div class="relative w-[90%] md:w-[50%]">
            <img src="/assets/img/fabiana-podologa.svg" class="w-full" />

            <!-- Imagem pequena superior -->
            <div class="absolute top-[-2px] right-[-10px] md:right-[-20px] animate-wiggle">
                <img src="/assets/img/unha-com-fungo.svg" class="w-[60px] md:w-[80px]" />
            </div>

            <!-- Imagem pequena do meio -->
            <div class="absolute top-[40%] right-[-40px] md:right-[-70px] animate-wiggle">
                <img src="/assets/img/unha-encravada-1.svg" class="w-[60px] md:w-[80px]" />
            </div>

            <!-- Imagem pequena inferior -->
            <div class="absolute bottom-[-10px] right-[-10px] md:right-[-20px] animate-wiggle">
                <img src="/assets/img/unha-encravada-2.svg" class="w-[60px] md:w-[80px]" />
            </div>
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