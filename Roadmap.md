# Roadmap de Sucesso - Podologia

## Visão Geral
Este projeto é uma aplicação web desenvolvida em Laravel, voltada para o atendimento de uma profissional de podologia. O objetivo é facilitar o agendamento de consultas, apresentar informações sobre serviços, patologias tratadas, depoimentos de clientes e dados de contato, além de fortalecer a presença digital da profissional.

## Status Atual
- Aplicação em produção
- Estrutura baseada em Laravel + Livewire
- Frontend com Tailwind CSS
- Integração com WhatsApp para agendamento
- Páginas institucionais e informativas

## Roadmap de Evolução

### 1. Experiência do Usuário (UX/UI)
- [✅] Melhorar responsividade em dispositivos móveis
  - [✅] Revisar todos os componentes Livewire em telas de 320px a 1440px
    - [✅] Listar todos os componentes Livewire utilizados na aplicação
    - [✅] Para cada componente, testar visualmente nos principais breakpoints: 320px, 375px, 425px, 768px, 1024px, 1440px
    - [✅] Utilizar as classes utilitárias do Tailwind CSS para responsividade (`sm:`, `md:`, `lg:`, `xl:`)
    - [✅] Garantir que grids, flexbox e espaçamentos estejam adaptados para cada resolução
    - [✅] Verificar se textos, botões e inputs não estouram ou ficam sobrepostos
    - [✅] Usar ferramentas como o DevTools do Chrome para simular diferentes dispositivos
    - [✅] Documentar ajustes necessários para cada componente
    - [✅] Refatorar componentes que apresentarem problemas, priorizando mobile first
    - [✅] Validar se imagens e SVGs estão dimensionando corretamente
    - [✅] Revisar se não há barras de rolagem horizontais indesejadas
    - [✅] Pedir feedback de usuários reais/testadores em diferentes dispositivos
    - [✅] Ajustar paddings, margins e fontes usando breakpoints do Tailwind
    - [✅] Testar formulários e botões em dispositivos reais (mobile/tablet)
    - [✅] Corrigir imagens que não redimensionam corretamente
    - [✅] Validar layout em navegadores diferentes (Chrome, Firefox, Safari)
- [✅] Adicionar animações suaves para transições de seções
  - [✅] Definir padrão de animação para entrada/saída de seções (ex: fade, slide)
  - [✅] Implementar animações com Tailwind CSS e/ou Alpine.js
  - [✅] Adicionar transições em banners, cards e botões principais
  - [✅] Testar impacto das animações na performance mobile
    - LCP inicial: 5,70s (ruim) — Elemento principal identificado pelo Lighthouse
    - Checklist e resultados documentados:
      - LCP sem banner: 1,18s a 1,92s (ótimo)
      - LCP com banner exibido após carregamento: 1,18s a 1,84s (ótimo)
      - LCP com banner exibido logo no início: >4s (ruim)
      - Observação: Exibir o banner apenas após o carregamento total da página resolve o problema de LCP.
      - Removidas todas as animações de transição dos banners.
      - Adicionados width e height na imagem principal para evitar layout shift.
      - Tarefa concluída com sucesso!

---

- [ ] Melhorar responsividade dos botões "Área Administrativa" e "Área do Paciente"
  - Analisar comportamento dos botões em diferentes tamanhos de tela (mobile, tablet, desktop)
  - Garantir que não fiquem sobrepostos, cortados ou desalinhados
  - Ajustar classes do Tailwind para responsividade e espaçamento adequado
  - Testar visualmente e documentar antes/depois
- [ ] Revisar acessibilidade (contraste, navegação por teclado, etc.)
  - [ ] Rodar auditoria de acessibilidade com Lighthouse
  - [ ] Ajustar contraste de cores conforme recomendações WCAG
  - [ ] Adicionar atributos ARIA e roles em todos os botões e links
  - [ ] Garantir navegação por teclado em menus, botões e formulários
  - [ ] Revisar e adicionar alt text descritivo em todas as imagens
- [ ] Implementar dark mode (opcional)
  - [ ] Configurar dark mode no tailwind.config.js
  - [ ] Adicionar botão de alternância de tema no layout principal
  - [ ] Ajustar cores de fundo, textos e bordas para o tema escuro
  - [ ] Testar contraste e legibilidade em todas as páginas
  - [ ] Salvar preferência do usuário (localStorage ou sistema)

### 2. Funcionalidades
- [ ] Sistema de agendamento online (com calendário e confirmação automática)
  - Implementar formulário de agendamento integrado ao calendário (ex: FullCalendar ou Flatpickr)
  - Envio de confirmação automática por e-mail/WhatsApp
  - Opção de reagendamento/cancelamento pelo usuário
  - Validação de horários disponíveis e bloqueio de datas já ocupadas
- [ ] Área administrativa para gerenciar depoimentos, especialidades e agenda
  - CRUD de depoimentos, especialidades e horários de atendimento
  - Login seguro para administradora
  - Interface intuitiva para atualização de conteúdos do site
  - [ ] Implementar login e cadastro de administradora
  - [ ] Menu inicial: Monitoramento de acessos (data, hora, IP, origem Facebook/Google, user agent)
 [⏳] Dashboard interna para monitoramento de acessos

## Seeds Criados

- **AdminUserSeeder**: Cria um usuário administrador com as seguintes credenciais:
  - Email: atendimento@fabianapodologa.com.br
  - Senha: 252605

- **PatientSeeder**: Cria um usuário paciente com as seguintes credenciais:
  - Email: atendimento@fabianapodologa.com.br
  - Senha: 252605

## Comando para executar os seeders

Para popular o banco de dados com os usuários seedados, execute o comando:

```bash
php artisan db:seed
```

Este comando executa o `DatabaseSeeder`, que chama os seeders `AdminUserSeeder` e `PatientSeeder`.

## Observações

- Os usuários criados podem ser usados para acessar as dashboards de administrador e paciente, respectivamente.
- O logout nas dashboards foi corrigido para funcionar via formulário POST, seguindo as boas práticas do Laravel.
- O método `logout` foi implementado no `PatientAuthController` para evitar erros.

  - [⏳] Implementar login e cadastro de administradora (backend e proteção de rotas em andamento)
  - [ ] Menu inicial: Monitoramento de acessos (data, hora, IP, origem Facebook/Google, user agent)
- [ ] Cadastro de pacientes (opcional, com consentimento LGPD)
  - Formulário de cadastro simples, com aceite de política de privacidade
  - Listagem e histórico de atendimentos (opcional)
  - Exportação de dados conforme LGPD
- [ ] Blog para dicas e novidades
  - CRUD de posts no painel administrativo
  - Listagem de artigos no frontend, com busca e categorias
  - SEO otimizado para cada post
- [✅] Integração com Google Analytics e Pixel do Facebook
  - [✅] Inserção dos scripts de rastreamento nas views principais
  - [✅] Configuração de eventos personalizados (ex: clique em botão de agendamento)

### 3. SEO e Performance
- [✅] Otimizar SEO on-page (meta tags, titles, descriptions)
  - [✅] Adicionar e revisar meta tags em todas as páginas (title, description, og:image, etc.)
  - [✅] Utilizar títulos e descrições dinâmicas conforme o conteúdo
  - [ ] Garantir URLs amigáveis e breadcrumbs
- [✅] Gerar sitemap.xml e robots.txt dinâmicos
  - [✅] Implementar geração automática de sitemap.xml com rotas públicas
  - [✅] Atualizar robots.txt conforme áreas públicas/privadas
- [ ] Otimizar imagens e assets para carregamento rápido
  - Utilizar formatos modernos (WebP) e compressão de imagens
  - Implementar lazy loading em imagens e iframes
  - Reduzir e minificar arquivos CSS/JS com Vite
- [ ] Implementar cache de páginas e assets estáticos
  - Configurar cache HTTP para assets estáticos (imagens, CSS, JS)
  - Utilizar cache de views/blade no Laravel
  - Avaliar uso de CDN para distribuição de conteúdo

### 4. Segurança e Conformidade
- [✅] Revisar políticas de privacidade e cookies
  - [✅] Atualizar e exibir política de privacidade clara e acessível
  - [✅] Implementar banner de consentimento de cookies
- [ ] Implementar reCAPTCHA em formulários
  - Adicionar Google reCAPTCHA v2/v3 nos formulários de contato e agendamento
  - Validar respostas no backend para evitar spam
- [ ] Garantir HTTPS e headers de segurança
  - Forçar HTTPS em todo o site (redirect e configuração no servidor)
  - Adicionar headers de segurança (Content-Security-Policy, X-Frame-Options, etc.)
  - Monitorar certificados SSL
- [ ] Adequação à LGPD (Lei Geral de Proteção de Dados)
  - Solicitar consentimento explícito para coleta de dados pessoais
  - Permitir ao usuário solicitar remoção/alteração de seus dados
  - Documentar fluxo de dados e garantir armazenamento seguro

### 5. Infraestrutura e DevOps
- [ ] Automatizar deploy (CI/CD)
  - Configurar pipeline de deploy contínuo (ex: GitHub Actions, GitLab CI, etc.)
  - Deploy automático em ambiente de produção após aprovação
  - Testes automatizados antes do deploy
- [ ] Backups automáticos do banco de dados
  - Agendar backups diários/semanais do banco SQLite/MySQL
  - Armazenar backups em local seguro (cloud ou storage externo)
  - Testar restauração periódica dos backups
- [ ] Monitoramento de uptime e logs
  - Integrar ferramenta de monitoramento (ex: UptimeRobot, StatusCake)
  - Configurar alertas para quedas e erros críticos
  - Centralizar logs de aplicação e erros (ex: Laravel Log, Sentry)
- [ ] Documentação de setup e manutenção
  - Documentar passo a passo de instalação, deploy e atualização
  - Manter README e Roadmap sempre atualizados
  - Criar checklist de manutenção preventiva

### 6. Testes e Qualidade
- [ ] Cobertura de testes automatizados (PHPUnit)
  - Escrever testes para controllers, models e componentes Livewire
  - Garantir cobertura mínima de 80% do código crítico
  - Rodar testes em pipeline CI/CD
- [ ] Testes de usabilidade
  - Realizar testes com usuários reais para identificar pontos de melhoria
  - Utilizar ferramentas como Hotjar ou Microsoft Clarity para mapear interações
  - Corrigir fluxos confusos ou etapas desnecessárias
- [ ] Testes de performance
  - Medir tempo de carregamento das páginas com Lighthouse ou PageSpeed Insights
  - Identificar e otimizar gargalos (queries, assets, scripts)
  - Simular múltiplos acessos para garantir estabilidade

## Como Contribuir
1. Crie uma branch a partir da `main`
2. Faça suas alterações e envie um Pull Request
3. Descreva claramente o que foi alterado e por quê

## Contato
Dúvidas ou sugestões? Entre em contato pelo WhatsApp disponível no site.

---

Este roadmap é um guia vivo e pode ser ajustado conforme as necessidades do projeto e feedback dos usuários.
