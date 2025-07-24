
<div class="w-full min-h-[60vh] bg-gradient-to-b from-gray-50 to-white py-12 flex items-center justify-center">
  <div id="sobreMim" class="max-w-3xl w-full mx-auto bg-white rounded-2xl shadow-xl flex flex-col md:flex-row items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out p-6 md:p-10">
    <!-- Foto -->
    <div class="w-full md:w-1/3 flex justify-center mb-6 md:mb-0">
      <img class="w-32 h-32 md:w-48 md:h-48 rounded-full object-cover shadow-lg border-4 border-blue-200" src="/assets/img/formatura.svg" alt="Podóloga Fabiana">
    </div>
    <!-- Texto -->
    <div class="w-full md:w-2/3 flex flex-col justify-center items-center md:items-start">
      <h2 class="font-iria-sans font-bold text-[28px] sm:text-[38px] text-black mb-2 text-center md:text-left">Sobre Mim</h2>
      <p class="text-gray-700 text-base sm:text-lg font-light mb-4 text-center md:text-left">
        Sou Fabiana, podóloga dedicada a cuidar da saúde e bem-estar dos seus pés. Minha missão é proporcionar conforto, prevenção e qualidade de vida para cada paciente.
      </p>
      <ul class="space-y-2 text-gray-700 text-base sm:text-lg w-full">
        <li class="flex items-center gap-2">
          <svg class="w-6 h-6 flex-shrink-0" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#3B82F6"/><path d="M9 12l2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span>Formação em podologia e atualização constante.</span>
        </li>
        <li class="flex items-center gap-2">
          <svg class="w-6 h-6 flex-shrink-0" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#3B82F6"/><path d="M9 12l2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span>Atendimento humanizado e personalizado.</span>
        </li>
        <li class="flex items-center gap-2">
          <svg class="w-6 h-6 flex-shrink-0" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#3B82F6"/><path d="M9 12l2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span>Especialização em calosidades, unhas encravadas, pés diabéticos e reflexologia podal.</span>
        </li>
        <li class="flex items-center gap-2">
          <svg class="w-6 h-6 flex-shrink-0" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#3B82F6"/><path d="M9 12l2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span>Dedicação, ética e carinho em cada atendimento.</span>
        </li>
      </ul>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const sobreMim = document.getElementById("sobreMim");
    if (!sobreMim) return;
    sobreMim.classList.add('opacity-0', 'translate-y-10');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.remove('translate-y-10', 'opacity-0');
        }
      });
    }, { threshold: 0.2 });
    observer.observe(sobreMim);
  });
</script>