<div class="w-full flex flex-col justify-around items-center rounded-b-[10px] relative sm:p-4 opacity-0 transform translate-y-10 transition-all duration-1000 ease-out" id="patologias">
    
  <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 pl-[5vw]">
    <!-- Bloco 1 -->
    <div class="w-full md:w-1/3 h-auto flex flex-col items-center justify-around my-4">
      <div class="w-[80%] flex justify-center">
        <img class="w-full h-auto" src="/assets/img/calos-calosidades.svg" alt="Podologia Geriátrica">
      </div>
      <div class="w-[90%] text-justify text-[18px] md:text-[20px] font-light">
        Calos e calosidades são problemas comuns, mas com os cuidados adequados é possível manter a saúde dos pés em dia.
      </div>
    </div>

    <!-- Bloco 2 -->
    <div class="w-full md:w-1/3 h-auto flex flex-col items-center justify-around my-4">
      <div class="w-[80%] flex justify-center">
        <img class="w-full h-auto" src="/assets/img/unha-encravada.svg" alt="Podologia Geriátrica">
      </div>
      <div class="w-[90%] text-justify text-[18px] md:text-[22px] font-light">
        As unhas encravadas podem ser bastante incômodas, mas com cuidados preventivos e tratamento adequado é possível aliviar os sintomas e evitar que voltem a ocorrer.
      </div>
    </div>

    <!-- Bloco 3 -->
    <div class="w-full md:w-1/3 h-auto flex flex-col items-center justify-around my-4">
      <div class="w-[80%] flex justify-center">
        <img class="w-full h-auto" src="/assets/img/pe-diabetico.svg" alt="Podologia Geriátrica">
      </div>
      <div class="w-[90%] text-justify text-[18px] md:text-[22px] font-light">
        Manter um controle rigoroso do diabetes e adotar práticas adequadas de cuidado com os pés pode ajudar a prevenir complicações graves.
      </div>
    </div>
  </div>
  <div class="w-full flex items-center justify-center py-10 md:py-20">
    <!-- Botão do whatsapp com rastreamento de clique -->
    <a href="https://wa.me/47991626283?text=Olá%20Fabiana,%20gostaria%20de%20agendar%20uma%20consulta%20com%20você!"
        class="bg-blue-500 text-white px-10 md:px-14 py-3 rounded-lg text-lg font-normal shadow-md hover:bg-blue-600 transition"
        target="_blank"
        onclick="return gtag_report_conversion(this.href);">
            Agendar Consulta
        </a>
  </div>
</div>


<script>
  document.addEventListener("DOMContentLoaded", function () {
    const patologias = document.getElementById("patologias");

    function criarObserver(elemento, threshold) {
        return new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    elemento.classList.remove("translate-y-10", "opacity-0");
                }
            },
            { threshold: threshold }
        );
    }

    const observerPatologias = criarObserver(patologias, 0.3); // Ativa quando 30% do título estiver visível

    observerPatologias.observe(patologias);
  });
</script>