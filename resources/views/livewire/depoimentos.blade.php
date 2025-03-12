<div class="w-full flex flex-col justify-around items-center sm:px-4 sm:py-2 mt-4 opacity-0 transform translate-y-10 transition-all duration-1000 ease-out" id="depoimentos">
    <div class="w-full flex flex-col md:flex-row md:justify-around md:items-center md:space-x-8">
        <!-- Depoimento 1 -->
        <div class="w-full md:w-1/3 h-auto flex flex-col items-center justify-around mb-8 md:mb-0">
            <div class="w-[80%] flex justify-center">
                <img class="w-[200px] md:w-[250px]" src="/assets/img/depoimento-1.svg" alt="Podologia Geriátrica">
            </div>
            <div class="w-[90%] text-justify font-light text-[18px] sm:text-[22px] mt-4">
                "Conheci a clínica através de uma indicação e não poderia estar mais satisfeita com o atendimento recebido. A equipe é extremamente profissional, atenciosa e dedicada. Desde a recepção até o tratamento, fui tratada com muito respeito e cuidado. Recomendo a todas que buscam um serviço de qualidade e um atendimento acolhedor." 🌟👣😊
            </div>
        </div>

        <!-- Depoimento 2 -->
        <div class="w-full md:w-1/3 h-auto flex flex-col items-center justify-around mb-8 md:mb-0">
            <div class="w-[80%] flex justify-center">
                <img class="w-[200px] md:w-[250px]" src="/assets/img/depoimento-2.svg" alt="Podologia Geriátrica">
            </div>
            <div class="w-[90%] text-justify font-light text-[18px] sm:text-[22px] mt-4">
                "Eu já era cliente regular dos serviços de manicure e decidi experimentar os serviços de podologia. A experiência tem sido fantástica! A atenção aos detalhes e o cuidado com a saúde dos meus pés fizeram uma grande diferença no meu bem-estar. Agora, sou paciente fiel de podologia e não poderia estar mais satisfeita com o resultado!" 💖
            </div>
        </div>

        <!-- Depoimento 3 -->
        <div class="w-full md:w-1/3 h-auto flex flex-col items-center justify-around mb-8 md:mb-0">
            <div class="w-[80%] flex justify-center">
                <img class="w-[200px] md:w-[250px]" src="/assets/img/depoimento-3.svg" alt="Podologia Geriátrica">
            </div>
            <div class="w-[90%] text-justify font-light text-[18px] sm:text-[22px] mt-4">
                "Depois de ter visitado várias podólogas sem sucesso, finalmente encontrei um atendimento excepcional aqui. Desde a primeira consulta, senti a diferença no cuidado e na dedicação da profissional. Minha unha encravada, que antes era um problema constante, foi tratada de forma eficiente e com muita atenção aos detalhes. Estou extremamente satisfeita e agradecida por finalmente ter encontrado um lugar onde me sinto realmente cuidada." 👣😻
            </div>
        </div>
    </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const depoimentos = document.getElementById("depoimentos");

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

    const observerDepoimentos = criarObserver(depoimentos, 0.3); // Ativa quando 30% do título estiver visível

    observerDepoimentos.observe(depoimentos);
  });
</script>