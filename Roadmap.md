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
- [ ] Melhorar responsividade em dispositivos móveis
  - Garantir que todos os componentes Livewire e seções estejam 100% adaptados a telas pequenas (testar em múltiplos dispositivos)
  - Ajustar espaçamentos, tamanhos de fonte e imagens para mobile
  - Corrigir possíveis quebras de layout em resoluções intermediárias
- [ ] Adicionar animações suaves para transições de seções
  - Padronizar transições de entrada/saída usando Tailwind CSS e/ou Alpine.js
  - Aplicar animações nos banners, cards de patologias e botões de ação
  - Garantir que as animações não prejudiquem a performance
- [ ] Revisar acessibilidade (contraste, navegação por teclado, etc.)
  - Verificar contraste de cores em textos e botões (usar ferramentas como Lighthouse)
  - Adicionar atributos ARIA e roles nos componentes interativos
  - Garantir navegação por teclado em menus, botões e formulários
  - Incluir textos alternativos descritivos em todas as imagens
- [ ] Implementar dark mode (opcional)
  - Adicionar suporte a tema escuro via Tailwind CSS
  - Permitir alternância manual e/ou automática conforme preferências do sistema
  - Testar legibilidade e contraste em ambos os temas

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
- [ ] Cadastro de pacientes (opcional, com consentimento LGPD)
  - Formulário de cadastro simples, com aceite de política de privacidade
  - Listagem e histórico de atendimentos (opcional)
  - Exportação de dados conforme LGPD
- [ ] Blog para dicas e novidades
  - CRUD de posts no painel administrativo
  - Listagem de artigos no frontend, com busca e categorias
  - SEO otimizado para cada post
- [ ] Integração com Google Analytics e Pixel do Facebook
  - Inserção dos scripts de rastreamento nas views principais
  - Configuração de eventos personalizados (ex: clique em botão de agendamento)

### 3. SEO e Performance
- [ ] Otimizar SEO on-page (meta tags, titles, descriptions)
  - Adicionar e revisar meta tags em todas as páginas (title, description, og:image, etc.)
  - Utilizar títulos e descrições dinâmicas conforme o conteúdo
  - Garantir URLs amigáveis e breadcrumbs
- [ ] Gerar sitemap.xml e robots.txt dinâmicos
  - Implementar geração automática de sitemap.xml com rotas públicas
  - Atualizar robots.txt conforme áreas públicas/privadas
- [ ] Otimizar imagens e assets para carregamento rápido
  - Utilizar formatos modernos (WebP) e compressão de imagens
  - Implementar lazy loading em imagens e iframes
  - Reduzir e minificar arquivos CSS/JS com Vite
- [ ] Implementar cache de páginas e assets estáticos
  - Configurar cache HTTP para assets estáticos (imagens, CSS, JS)
  - Utilizar cache de views/blade no Laravel
  - Avaliar uso de CDN para distribuição de conteúdo

### 4. Segurança e Conformidade
- [ ] Revisar políticas de privacidade e cookies
  - Atualizar e exibir política de privacidade clara e acessível
  - Implementar banner de consentimento de cookies (se necessário)
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
