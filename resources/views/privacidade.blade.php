@extends('layouts.app')
@section('title', 'Política de Privacidade | Podóloga Fabiana Gonçalves')
@section('description', 'Saiba como seus dados são coletados, usados e protegidos pela Podóloga Fabiana Gonçalves em Balneário Camboriú. Política de privacidade conforme LGPD.')
@section('meta')
    <meta name="description" content="Saiba como seus dados são coletados, usados e protegidos pela Podóloga Fabiana Gonçalves em Balneário Camboriú. Política de privacidade conforme LGPD.">
    <meta property="og:title" content="Política de Privacidade | Podóloga Fabiana Gonçalves">
    <meta property="og:description" content="Saiba como seus dados são coletados, usados e protegidos pela Podóloga Fabiana Gonçalves em Balneário Camboriú. Política de privacidade conforme LGPD.">
    <meta property="og:image" content="{{ asset('assets/img/banner-podologia.jpg') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-100 flex justify-center pt-10 pb-10">
  <div class="max-w-3xl w-full bg-white rounded-xl shadow-xl p-6 md:p-10 border border-blue-100">
    <a href="/" class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-lg bg-blue-900 text-white text-sm font-semibold shadow hover:bg-blue-700 transition">
      <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
      Voltar
    </a>
    <h1 class="text-3xl font-bold mb-6 text-blue-900">Política de Privacidade</h1>
    <p class="mb-4 text-gray-800">Esta Política de Privacidade descreve como coletamos, usamos, armazenamos e protegemos os dados pessoais dos usuários deste site, em conformidade com a Lei Geral de Proteção de Dados (LGPD - Lei nº 13.709/2018).</p>

    <h2 class="text-xl font-semibold mt-8 mb-2 text-blue-800">1. Dados coletados</h2>
    <ul class="list-disc ml-6 mb-4 text-gray-800">
      <li>Informações fornecidas pelo usuário: nome, telefone, e-mail, especialidade de interesse, mensagens enviadas via formulários.</li>
      <li>Dados de navegação: endereço IP, localização aproximada, tipo de dispositivo, navegador, páginas acessadas.</li>
      <li>Cookies: utilizamos cookies para melhorar a experiência, analisar estatísticas e personalizar conteúdo.</li>
    </ul>

    <h2 class="text-xl font-semibold mt-8 mb-2 text-blue-800">2. Finalidade do uso dos dados</h2>
    <ul class="list-disc ml-6 mb-4 text-gray-800">
      <li>Agendamento de consultas e atendimento personalizado.</li>
      <li>Resposta a dúvidas, solicitações e mensagens enviadas.</li>
      <li>Melhoria contínua dos serviços e experiência do usuário.</li>
      <li>Envio de comunicações relevantes, mediante consentimento.</li>
      <li>Cumprimento de obrigações legais.</li>
    </ul>

    <h2 class="text-xl font-semibold mt-8 mb-2 text-blue-800">3. Compartilhamento de dados</h2>
    <p class="mb-4 text-gray-800">Seus dados não são compartilhados com terceiros, exceto quando necessário para prestação dos serviços (ex: envio de mensagens via WhatsApp) ou cumprimento de obrigações legais.</p>

    <h2 class="text-xl font-semibold mt-8 mb-2 text-blue-800">4. Segurança e armazenamento</h2>
    <p class="mb-4 text-gray-800">Adotamos medidas técnicas e administrativas para proteger seus dados contra acessos não autorizados, perda, alteração ou divulgação. Os dados são armazenados em ambiente seguro e pelo tempo necessário para as finalidades descritas.</p>

    <h2 class="text-xl font-semibold mt-8 mb-2 text-blue-800">5. Direitos do titular</h2>
    <ul class="list-disc ml-6 mb-4 text-gray-800">
      <li>Acesso aos dados pessoais.</li>
      <li>Correção de dados incompletos, inexatos ou desatualizados.</li>
      <li>Solicitação de anonimização, bloqueio ou eliminação de dados desnecessários.</li>
      <li>Revogação do consentimento e exclusão dos dados.</li>
      <li>Portabilidade dos dados a outro fornecedor de serviço.</li>
    </ul>
    <p class="mb-4 text-gray-800">Para exercer seus direitos, entre em contato pelo WhatsApp disponível no site.</p>

    <h2 class="text-xl font-semibold mt-8 mb-2 text-blue-800">6. Cookies</h2>
    <p class="mb-4 text-gray-800">Utilizamos cookies essenciais para funcionamento do site, além de cookies de análise e personalização. O usuário pode gerenciar as permissões de cookies pelo banner exibido ao acessar o site.</p>

    <h2 class="text-xl font-semibold mt-8 mb-2 text-blue-800">7. Alterações nesta política</h2>
    <p class="mb-4 text-gray-800">Esta política pode ser atualizada periodicamente. Recomendamos que o usuário revise esta página regularmente.</p>

    <h2 class="text-xl font-semibold mt-8 mb-2 text-blue-800">8. Contato</h2>
    <p class="mb-4 text-gray-800">Dúvidas ou solicitações relacionadas à privacidade e proteção de dados podem ser enviadas pelo WhatsApp disponível no site.</p>

    <p class="mt-8 text-sm text-gray-500">Última atualização: {{ date('d/m/Y') }}</p>
  </div>
</div>
