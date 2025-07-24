
<div class="w-full min-h-[40vh] bg-gradient-to-b from-gray-50 to-white py-12 flex items-center justify-center">
  <div id="depoimentos" class="max-w-6xl w-full mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 opacity-0 translate-y-10 transition-all duration-1000 ease-out">
    <!-- Depoimento 1 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center">
      <img class="w-24 h-24 rounded-full object-cover shadow-md mb-4" src="/assets/img/depoimento-1.svg" alt="Depoimento 1">
      <div class="flex items-center gap-2 mb-2">
        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z"/></svg>
        <span class="font-semibold text-lg text-gray-800">Avaliação 5 estrelas</span>
      </div>
      <blockquote class="text-gray-700 text-base sm:text-lg font-light text-center italic">“Conheci a clínica através de uma indicação e não poderia estar mais satisfeita com o atendimento recebido. A equipe é extremamente profissional, atenciosa e dedicada. Desde a recepção até o tratamento, fui tratada com muito respeito e cuidado. Recomendo a todas que buscam um serviço de qualidade e um atendimento acolhedor.”</blockquote>
    </div>
    <!-- Depoimento 2 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center">
      <img class="w-24 h-24 rounded-full object-cover shadow-md mb-4" src="/assets/img/depoimento-2.svg" alt="Depoimento 2">
      <div class="flex items-center gap-2 mb-2">
        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z"/></svg>
        <span class="font-semibold text-lg text-gray-800">Avaliação 5 estrelas</span>
      </div>
      <blockquote class="text-gray-700 text-base sm:text-lg font-light text-center italic">“Eu já era cliente regular dos serviços de manicure e decidi experimentar os serviços de podologia. A experiência tem sido fantástica! A atenção aos detalhes e o cuidado com a saúde dos meus pés fizeram uma grande diferença no meu bem-estar. Agora, sou paciente fiel de podologia e não poderia estar mais satisfeita com o resultado!”</blockquote>
    </div>
    <!-- Depoimento 3 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center">
      <img class="w-24 h-24 rounded-full object-cover shadow-md mb-4" src="/assets/img/depoimento-3.svg" alt="Depoimento 3">
      <div class="flex items-center gap-2 mb-2">
        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z"/></svg>
        <span class="font-semibold text-lg text-gray-800">Avaliação 5 estrelas</span>
      </div>
      <blockquote class="text-gray-700 text-base sm:text-lg font-light text-center italic">“Depois de ter visitado várias podólogas sem sucesso, finalmente encontrei um atendimento excepcional aqui. Desde a primeira consulta, senti a diferença no cuidado e na dedicação da profissional. Minha unha encravada, que antes era um problema constante, foi tratada de forma eficiente e com muita atenção aos detalhes. Estou extremamente satisfeita e agradecida por finalmente ter encontrado um lugar onde me sinto realmente cuidada.”</blockquote>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const depoimentos = document.getElementById("depoimentos");
    if (!depoimentos) return;
    depoimentos.classList.add('opacity-0', 'translate-y-10');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.remove('translate-y-10', 'opacity-0');
        }
      });
    }, { threshold: 0.2 });
    observer.observe(depoimentos);
  });
</script>