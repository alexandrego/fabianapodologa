<div align="center">
  <img src="https://raw.githubusercontent.com/alexandrego/fabianapodologa/main/public/assets/img/pe-diabetico.svg" alt="Podologia" width="120" />
  
  <h1>Podologia - Fabiana</h1>
  <p><strong>Aplicação web para divulgação, agendamento e gestão de serviços de podologia.</strong></p>
  <p>
    <img src="https://img.shields.io/badge/status-produção-brightgreen" alt="Status: Produção">
    <img src="https://img.shields.io/badge/laravel-10.x-red" alt="Laravel">
    <img src="https://img.shields.io/badge/livewire-3.x-blueviolet" alt="Livewire">
    <img src="https://img.shields.io/badge/tailwindcss-3.x-38bdf8" alt="Tailwind CSS">
  </p>
</div>

---

## ✨ Sobre o Projeto

A plataforma foi desenvolvida para facilitar o contato entre clientes e a profissional de podologia, permitindo agendamento rápido via WhatsApp, apresentação de especialidades, patologias tratadas, depoimentos e informações institucionais.

---

## 🚀 Principais Funcionalidades

- Página inicial responsiva e mobile first
- Política de Privacidade conforme LGPD
- Banner de consentimento de cookies
- Meta tags otimizadas para SEO
- Sitemap.xml e robots.txt dinâmicos
- Estrutura pronta para futuras áreas administrativas, blog e agendamento online

---

## 🛠️ Tecnologias Utilizadas

- **Laravel** (Backend)
- **Livewire** (Componentização e interatividade)
- **Tailwind CSS** (Estilização)
- **PHP**
- **JavaScript**
- **Vite** (Build frontend)

---

## 📈 Roadmap

Veja o [Roadmap de Sucesso](./Roadmap.md) para detalhes sobre as próximas etapas e melhorias planejadas.

---

## 🖥️ Como rodar o projeto localmente

```bash
# Clone o repositório
$ git clone https://github.com/alexandrego/fabianapodologa.git

# Instale as dependências PHP
$ composer install

# Instale as dependências JS
$ npm install

# Copie o .env de exemplo e configure as variáveis
$ cp .env.example .env

# Gere a chave da aplicação
$ php artisan key:generate

# Rode as migrations (opcional para ambiente local)
$ php artisan migrate

# Inicie o servidor de desenvolvimento
$ php artisan serve

# Inicie o build frontend
$ npm run dev
```

Acesse: [http://localhost:8000](http://localhost:8000)

---

## 🤝 Como contribuir

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/nome-feature`)
3. Commit suas alterações (`git commit -m 'feat: minha contribuição'`)
4. Push para a branch (`git push origin feature/nome-feature`)
5. Abra um Pull Request

---

## 📞 Contato

Dúvidas, sugestões ou parcerias? Entre em contato pelo WhatsApp disponível no site ou abra uma issue.

<div align="center">
  <img src="https://img.shields.io/badge/feito%20com-❤-red" alt="Feito com amor">
</div>

---

<sub>© 2025 Fabiana Podóloga · Desenvolvido por Alexandre Gonçalves</sub>

---

# Podóloga Fabiana Gonçalves - Balneário Camboriú

Aplicação web para divulgação de serviços de podologia, agendamento, informações institucionais e contato.

## Principais Funcionalidades
- Página inicial responsiva e mobile first
- Política de Privacidade conforme LGPD
- Banner de consentimento de cookies
- Meta tags otimizadas para SEO
- Sitemap.xml e robots.txt dinâmicos
- Estrutura pronta para futuras áreas administrativas, blog e agendamento online

## Melhorias Recentes
- [v1.0.0] Estrutura inicial, layout responsivo, integração WhatsApp
- [v1.1.0] Política de Privacidade LGPD, link no footer
- [v1.2.0] Banner de consentimento de cookies
- [v1.3.0] Meta tags SEO (title, description, og:image, canonical)
- [v1.4.0] sitemap.xml e robots.txt dinâmicos
- [v1.5.0] Correção de cidade para Balneário Camboriú

## Controle de Versão
Sempre que uma melhoria for implementada:
- Atualize a seção "Melhorias Recentes" com a nova versão e descrição da mudança.
- Use o padrão semântico: [vMAJOR.MINOR.PATCH].
- Exemplo: [v1.6.0] Implementação de dark mode.

## Instalação
1. Clone o repositório
2. Instale dependências com `composer install` e `npm install`
3. Configure `.env` e banco de dados
4. Rode `php artisan migrate` para criar as tabelas
5. Inicie o servidor com `php artisan serve`

## Deploy
- Recomenda-se ambiente Linux, PHP 8+, MySQL ou SQLite
- Para produção, configure HTTPS e headers de segurança

## Contribuição
- Crie uma branch a partir da `main`
- Faça suas alterações e envie um Pull Request
- Descreva claramente o que foi alterado e por quê

## Contato
Dúvidas ou sugestões? Entre em contato pelo WhatsApp disponível no site.
