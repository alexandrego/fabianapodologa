
<footer class="w-full bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 text-white py-6 px-4 mt-8">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
    <!-- Logo/Nome -->
    <div class="flex items-center gap-2 mb-2 md:mb-0">
      <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10" fill="#fff" stroke="#2563eb" stroke-width="2"/><text x="12" y="16" text-anchor="middle" font-size="10" fill="#2563eb">FG</text></svg>
      <span class="font-bold text-lg tracking-wide">Podóloga Fabiana Gonçalves</span>
    </div>
    <!-- Ícones sociais -->
    <div class="flex items-center gap-4">
      <a href="https://wa.me/5547991626283" target="_blank" class="hover:text-green-400 transition">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12a11.96 11.96 0 001.604 6.016L0 24l6.372-1.578A11.96 11.96 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22.054a9.934 9.934 0 01-5.108-1.395l-.365-.22-3.778.936.83-3.636-.238-.379A9.944 9.944 0 012.055 12c0-5.499 4.446-9.945 9.945-9.945 5.499 0 9.945 4.446 9.945 9.945 0 5.499-4.446 9.945-9.945 9.945zm5.66-7.48c-.297-.15-1.755-.867-2.03-.967-.274-.1-.473-.15-.671.15-.198.297-.769.967-.943 1.165-.174.198-.347.224-.645.075-.297-.15-1.255-.462-2.39-1.474-.883-.788-1.48-1.766-1.655-2.064-.174-.297-.019-.457.131-.606.136-.135.297-.347.446-.521.15-.174.198-.298.297-.496.099-.198.05-.372-.025-.521-.074-.15-.671-1.615-.918-2.211-.242-.582-.487-.5-.671-.51-.173-.008-.372-.01-.571-.01-.198 0-.521.074-.794.372-.273.297-1.042 1.02-1.042 2.487s1.067 2.875 1.216 3.072c.148.198 2.097 3.199 5.078 4.488.709.307 1.263.49 1.694.627.713.226 1.36.194 1.87.118.57-.084 1.755-.718 2.003-1.412.248-.694.248-1.289.173-1.412-.074-.123-.272-.198-.57-.347z"/></svg>
      </a>
      <a href="https://www.instagram.com/fabianafreitasalex/" target="_blank" class="hover:text-pink-400 transition">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5a4.25 4.25 0 004.25-4.25v-8.5A4.25 4.25 0 0016.25 3.5h-8.5zm4.25 3.25a5.25 5.25 0 110 10.5 5.25 5.25 0 010-10.5zm0 1.5a3.75 3.75 0 100 7.5 3.75 3.75 0 000-7.5zm6.25 1.25a1 1 0 110 2 1 1 0 010-2z"/></svg>
      </a>
      <a href="https://www.google.com/maps/place/Brilho+Cabeleireiros+Unissex/@-26.9896104,-48.6361127,16.5z/data=!4m6!3m5!1s0x94d8b60425d92649:0x2a997a9fe010de53!8m2!3d-26.9893637!4d-48.633573!16s%2Fg%2F1tdw967n?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="hover:text-blue-300 transition">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/></svg>
      </a>
    </div>
    <!-- Direitos autorais -->
    <div class="text-center text-sm font-light flex-1">© {{ date('Y') }} Podóloga Fabiana Gonçalves. Todos os direitos reservados.</div>
    <!-- Desenvolvido por -->
    <div class="text-right text-sm font-light">
      Desenvolvido por <a href="https://connectedpurpose.com.br" target="_blank" class="text-blue-300 hover:text-white font-semibold">Connected Purpose</a>
    </div>
  </div>
    <div class="w-full mt-4">
      <a href="/privacidade" class="text-xs text-yellow-300 hover:text-yellow-400 underline font-medium" target="_blank" rel="noopener">Política de Privacidade</a>
    </div>
    <div x-data="{ showCookies: localStorage.getItem('cookiesAccepted') !== 'true' }" x-init="() => { if(localStorage.getItem('cookiesAccepted') !== 'true') showCookies = true }" class="relative">
        <!-- Banner de Consentimento de Cookies -->
        <div x-show="showCookies" x-transition class="fixed bottom-4 left-4 right-4 md:left-auto md:right-8 md:bottom-8 z-50 bg-white border border-blue-200 shadow-lg rounded-xl p-4 flex flex-col md:flex-row items-center gap-4 text-gray-800 max-w-xl mx-auto">
            <div class="flex-1 text-sm">
                Este site utiliza cookies para melhorar sua experiência, analisar estatísticas e personalizar conteúdo. Ao continuar navegando, você concorda com nossa <a href="{{ route('privacidade') }}" class="underline text-blue-700 hover:text-blue-900">Política de Privacidade</a>.
            </div>
            <button @click="localStorage.setItem('cookiesAccepted', 'true'); showCookies = false" class="px-4 py-2 rounded-lg bg-blue-900 text-white font-semibold shadow hover:bg-blue-700 transition text-sm">Aceitar</button>
        </div>
</footer>
