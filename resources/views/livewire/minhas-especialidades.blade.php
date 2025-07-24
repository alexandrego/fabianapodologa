<div class="w-full max-w-7xl mx-auto px-2 sm:px-6 md:px-8 py-8">
  <div id="especialidades" class="text-center font-iria-sans font-bold text-[28px] sm:text-[36px] md:text-[48px] text-black mb-8">
    Minhas Especialidades
    <div class="text-base sm:text-lg font-light text-gray-600 mt-2">Dedicação e soluções aplicadas ao seu bem-estar e saúde</div>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Card 1 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out especialidade-card">
      <svg class="w-10 h-10 mb-3" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#22C55E"/><path d="M9 12l2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <div class="font-semibold text-lg mb-2 text-center">Prevenção e tratamento</div>
      <div class="text-gray-700 text-center text-sm">Doenças comuns em idosos, como unhas encravadas, calosidades e micoses.</div>
    </div>
    <!-- Card 2 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out especialidade-card">
      <svg class="w-10 h-10 mb-3" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#22C55E"/><path d="M9 12l2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <div class="font-semibold text-lg mb-2 text-center">Cuidados com pés diabéticos</div>
      <div class="text-gray-700 text-center text-sm">Abordagem cuidadosa para evitar complicações e promover saúde.</div>
    </div>
    <!-- Card 3 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out especialidade-card">
      <svg class="w-10 h-10 mb-3" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#22C55E"/><path d="M9 12l2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <div class="font-semibold text-lg mb-2 text-center">Avaliação biomecânica</div>
      <div class="text-gray-700 text-center text-sm">Identificação de problemas de locomoção e sugestão de órteses para qualidade de vida.</div>
    </div>
    <!-- Card 4 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out especialidade-card">
      <svg class="w-10 h-10 mb-3" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#22C55E"/><path d="M9 12l2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <div class="font-semibold text-lg mb-2 text-center">Higiene e bem-estar</div>
      <div class="text-gray-700 text-center text-sm">Saúde e conforto dos pés para promover mobilidade e independência.</div>
    </div>
    <!-- Card 5 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out especialidade-card">
      <svg class="w-10 h-10 mb-3" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#22C55E"/><path d="M9 12l2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <div class="font-semibold text-lg mb-2 text-center">Educação e aconselhamento</div>
      <div class="text-gray-700 text-center text-sm">Orientação sobre cuidados diários e prevenção de lesões para pacientes e familiares.</div>
    </div>
    <!-- Card 6 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out especialidade-card">
      <svg class="w-10 h-10 mb-3" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#22C55E"/><path d="M9 12l2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <div class="font-semibold text-lg mb-2 text-center">Tratamento de lesões e feridas</div>
      <div class="text-gray-700 text-center text-sm">Cuidados especializados para recuperação de feridas, úlceras e lesões nos pés, promovendo cicatrização segura.</div>
    </div>
  </div>
  <div class="mt-8 text-center text-base sm:text-lg text-gray-700 font-light max-w-2xl mx-auto">
    Estou comprometida em proporcionar um atendimento humano e de alta qualidade, garantindo a dignidade e conforto dos meus pacientes.
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll('.especialidade-card');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.remove('translate-y-10', 'opacity-0');
        }
      });
    }, { threshold: 0.2 });
    cards.forEach(card => observer.observe(card));
  });
</script>