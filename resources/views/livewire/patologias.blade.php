
<div class="w-full max-w-7xl mx-auto px-2 sm:px-6 md:px-8 py-8">
  <div id="patologias" class="text-center font-iria-sans font-bold text-[28px] sm:text-[36px] md:text-[48px] text-black mb-8">
    Patologias Tratadas
    <div class="text-base sm:text-lg font-light text-gray-600 mt-2">Conheça as principais patologias que podem afetar a saúde dos seus pés</div>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Card 1 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out patologia-card">
      <svg class="w-10 h-10 mb-3" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#3B82F6"/><path d="M8 13l4 4 4-8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <div class="font-semibold text-lg mb-2 text-center">Calos e calosidades</div>
      <div class="text-gray-700 text-center text-sm">Problemas comuns que podem ser prevenidos e tratados para manter a saúde dos pés.</div>
    </div>
    <!-- Card 2 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out patologia-card">
      <svg class="w-10 h-10 mb-3" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#3B82F6"/><path d="M8 13l4 4 4-8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <div class="font-semibold text-lg mb-2 text-center">Unha encravada</div>
      <div class="text-gray-700 text-center text-sm">Tratamento e prevenção para aliviar sintomas e evitar recorrências.</div>
    </div>
    <!-- Card 3 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out patologia-card">
      <svg class="w-10 h-10 mb-3" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#3B82F6"/><path d="M8 13l4 4 4-8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <div class="font-semibold text-lg mb-2 text-center">Pé diabético</div>
      <div class="text-gray-700 text-center text-sm">Cuidados especiais para prevenir complicações e promover cicatrização segura.</div>
    </div>
    <!-- Card 4: Reflexologia Podal -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out patologia-card">
      <svg class="w-10 h-10 mb-3" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#10B981"/><path d="M12 8v8M8 12h8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <div class="font-semibold text-lg mb-2 text-center">Reflexologia Podal</div>
      <div class="text-gray-700 text-center text-sm">Técnica terapêutica que estimula pontos específicos nos pés, promovendo relaxamento, equilíbrio do corpo e bem-estar físico e emocional.</div>
    </div>
    <!-- Card 5: Micose de Unha -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out patologia-card">
      <svg class="w-10 h-10 mb-3" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#F59E42"/><path d="M16 8l-8 8M8 8l8 8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <div class="font-semibold text-lg mb-2 text-center">Micose de Unha</div>
      <div class="text-gray-700 text-center text-sm">Tratamento especializado para infecções fúngicas, prevenindo danos e restaurando a saúde das unhas.</div>
    </div>
    <!-- Card 6: Fissuras e Ressecamento -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center opacity-0 translate-y-10 transition-all duration-1000 ease-out patologia-card">
      <svg class="w-10 h-10 mb-3" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#EF4444"/><path d="M12 8v8M8 12h8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <div class="font-semibold text-lg mb-2 text-center">Fissuras e Ressecamento</div>
      <div class="text-gray-700 text-center text-sm">Cuidados para evitar rachaduras, hidratar e manter a pele dos pés saudável e protegida.</div>
    </div>
  </div>
  <div class="w-full flex items-center justify-center py-10 md:py-20">
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
    const cards = document.querySelectorAll('.patologia-card');
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
