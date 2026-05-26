# 📌 Autenticação com Laravel Breeze

## 📖 Sobre o Projeto

Este projeto demonstra a implementação de autenticação utilizando o **Laravel Breeze**, um starter kit oficial do Laravel que fornece um sistema completo de autenticação de forma simples, rápida e segura.

Com o Breeze, já recebemos prontas funcionalidades como:

- Cadastro de usuários
- Login e logout
- Recuperação de senha
- Verificação de e-mail
- Confirmação de senha
- Perfil do usuário
- Layout responsivo com Tailwind CSS

---

# 🚀 Comandos Utilizados

```bash
composer create-project laravel/laravel auth-app

cd auth-app

code .

composer require laravel/breeze

php artisan breeze:install

php artisan migrate

php artisan serve
```

---

# ⚙️ O que é o Laravel Breeze?

O **Laravel Breeze** é um kit inicial de autenticação criado pela equipe oficial do Laravel.

Ele fornece uma implementação mínima e organizada de autenticação, ideal para projetos simples ou para aprendizado.

O Breeze já entrega:

- Rotas prontas
- Controllers de autenticação
- Models
- Views Blade
- Migrations
- Configuração de autenticação
- Estilização com Tailwind CSS

Tudo isso de forma simples e totalmente personalizável.

---

# 🛠️ Instalação Passo a Passo

## 1️⃣ Criar um novo projeto Laravel

```bash
composer create-project laravel/laravel auth-app
```

Este comando cria um novo projeto Laravel chamado `auth-app`.

---

## 2️⃣ Entrar na pasta do projeto

```bash
cd auth-app
```

---

## 3️⃣ Abrir o projeto no VS Code

```bash
code .
```

---

## 4️⃣ Configurar o arquivo `.env`

Configure corretamente:

- Banco de dados
- Nome da aplicação
- Porta
- Usuário e senha do banco

Exemplo:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=auth_app
DB_USERNAME=root
DB_PASSWORD=
```

---

## 5️⃣ Instalar o Laravel Breeze

```bash
composer require laravel/breeze
```

---

## 6️⃣ Instalar a estrutura de autenticação

```bash
php artisan breeze:install
```

Esse comando irá:

- Criar as telas de autenticação
- Criar controllers
- Criar rotas
- Criar migrations
- Configurar autenticação
- Instalar dependências frontend automaticamente

---

# 📁 Estrutura Criada pelo Breeze

```plaintext
auth-app/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── Auth/
│   │   │       ├── AuthenticatedSessionController.php
│   │   │       ├── ConfirmablePasswordController.php
│   │   │       ├── EmailVerificationNotificationController.php
│   │   │       ├── EmailVerificationPromptController.php
│   │   │       ├── NewPasswordController.php
│   │   │       ├── PasswordController.php
│   │   │       ├── PasswordResetLinkController.php
│   │   │       ├── RegisteredUserController.php
│   │   │       └── VerifyEmailController.php
│   └── Models/
│       └── User.php
│
├── resources/
│   ├── views/
│   │   ├── auth/
│   │   │   ├── login.blade.php
│   │   │   ├── register.blade.php
│   │   │   ├── forgot-password.blade.php
│   │   │   ├── reset-password.blade.php
│   │   │   ├── confirm-password.blade.php
│   │   │   └── verify-email.blade.php
│   │   │
│   │   ├── layouts/
│   │   │   ├── app.blade.php
│   │   │   └── guest.blade.php
│   │   │
│   │   └── dashboard.blade.php
│
├── routes/
│   ├── auth.php
│   └── web.php
│
├── database/
│   ├── migrations/
│   │   └── [data]_create_users_table.php
│   └── database.sqlite
│
└── .env
```

---

# 🗄️ Executar as Migrations

```bash
php artisan migrate
```

Esse comando cria as tabelas do banco de dados necessárias para o sistema funcionar.

---

# ▶️ Iniciar o Servidor

```bash
php artisan serve
```

Após iniciar, o projeto estará disponível em:

```plaintext
http://127.0.0.1:8000
```

---

# 📝 Testando o Registro

## Passo 1

Clique em **"Register"** na tela inicial.

## Passo 2

Preencha:

- Nome
- Email
- Senha
- Confirmação da senha

Depois clique em **"Register"**.

---

# 🔐 Testando o Login

Após realizar o login, o usuário terá acesso:

- À Dashboard
- Às rotas protegidas
- Ao perfil do usuário

O sistema utiliza middleware de autenticação para proteger páginas privadas.

---

# 💻 Tecnologias Utilizadas

- PHP
- Laravel
- Laravel Breeze
- Blade
- Tailwind CSS
- MySQL / SQLite

---

# ✅ Conclusão

O Laravel Breeze é uma excelente opção para iniciar projetos com autenticação pronta, mantendo o sistema leve, organizado e fácil de entender.

Ele acelera o desenvolvimento e já segue boas práticas de segurança e organização do Laravel.
