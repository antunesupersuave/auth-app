🔐 Laravel Breeze Authentication Guide
Este repositório contém o passo a passo completo para a implementação de um sistema de autenticação robusto e minimalista utilizando o Laravel Breeze. O Breeze é o starter kit ideal para quem busca segurança, simplicidade e uma base sólida com Tailwind CSS.

🚀 Resumo dos Comandos
Se você já conhece o fluxo, utilize este guia rápido de comandos para iniciar a aplicação:

# 1. Criar o projeto Laravel
composer create-project laravel/laravel auth-app

# 2. Entrar no diretório do projeto
cd auth-app

# 3. Abrir no VS Code (opcional)
code .

# 4. Configurar o arquivo .env (Banco de dados)

# 5. Instalar o pacote Laravel Breeze
composer require laravel/breeze --dev

# 6. Executar o instalador do Breeze (Escolha as opções de sua preferência)
php artisan breeze:install

# 7. Executar as migrations para criar as tabelas
php artisan migrate

# 8. Iniciar o servidor de desenvolvimento
php artisan serve

💡 O que é o Laravel Breeze?
O Laravel Breeze é um starter kit (kit inicial) que oferece uma implementação mínima e simples de todos os recursos de autenticação do Laravel. Ele foi criado para desenvolvedores que precisam de um ponto de partida sólido e seguro, sem a complexidade de ferramentas mais robustas (como o Laravel Jetstream ou Fortify).

📦 O que ele entrega pronto?
Ao instalar o Breeze, o seu ambiente de desenvolvimento ganha automaticamente toda a estrutura do ecossistema MVC (Model-View-Controller) voltado para autenticação:

Registro de Usuários: Tela de cadastro completa com validação integrada.

Login e Logout: Sistema seguro de entrada, persistência de sessão e saída de usuários.

Redefinição de Senha: Fluxo automatizado de envio de e-mail e troca de senha esquecida.

Verificação de E-mail: Proteção para garantir que o e-mail fornecido pelo usuário seja real.

Confirmação de Senha: Camada extra de segurança para acesso a áreas sensíveis do sistema.

Perfil do Usuário: Telas de edição de dados cadastrais, alteração de senha e exclusão de conta.

Tudo isso já vem totalmente estilizado com Tailwind CSS, responsivo (pronto para mobile e desktop) e integrado em:

Rotas | Migrations | Models | Controllers | Views

🛠️ Instalação Passo a Passo
Passo 1: Criar um novo projeto Laravel
Execute o comando no seu terminal para criar uma nova estrutura limpa do Laravel chamada auth-app:

Bash
composer create-project laravel/laravel auth-app
Passo 2: Entrar na pasta do projeto
Navegue até o diretório recém-criado para executar os próximos comandos:

Bash
cd auth-app
Passo 3: Configurar o Banco de Dados
Abra o arquivo .env localizado na raiz do projeto e configure as credenciais de acesso ao seu banco de dados (MySQL, PostgreSQL, SQLite, etc.).
(Por padrão, versões recentes do Laravel utilizam o SQLite automaticamente caso nenhuma configuração seja alterada).

Passo 4: Instalar o Laravel Breeze
Adicione o pacote do Breeze às dependências de desenvolvimento do seu projeto:

Bash
composer require laravel/breeze --dev
Passo 5: Executar o instalador do Artisan
Agora, peça para o Artisan estruturar a autenticação na sua aplicação:

Bash
php artisan breeze:install
Nota: Durante a instalação, o prompt perguntará qual stack visual você deseja usar (Blade, Livewire, React ou Vue). Para este exemplo padrão, selecione Blade (ou a de sua preferência).

Este comando será responsável por:

Criar as views e layouts de autenticação.

Criar os controllers e validações necessárias.

Disponibilizar novas migrations.

Atualizar o arquivo de rotas.

Instalar e compilar as dependências de CSS/JavaScript automaticamente.

📂 Estrutura de Pastas Criadas
Após a instalação do Breeze, os seguintes arquivos chaves serão gerados ou modificados na sua aplicação:

Plaintext
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
├── resources/
│   ├── views/
│   │   ├── auth/
│   │   │   ├── confirm-password.blade.php
│   │   │   ├── forgot-password.blade.php
│   │   │   ├── login.blade.php
│   │   │   ├── register.blade.php
│   │   │   ├── reset-password.blade.php
│   │   │   └── verify-email.blade.php
│   │   ├── layouts/
│   │   │   ├── app.blade.php
│   │   │   └── guest.blade.php
│   │   └── dashboard.blade.php
├── routes/
│   ├── auth.php (Contém as rotas do Breeze 🆕)
│   └── web.php
├── database/
│   ├── migrations/
│   │   └── [data]_create_users_table.php
│   └── database.sqlite
└── .env
⚙️ Inicialização do Sistema
Passo 6: Executar as Migrations
Com o banco de dados configurado no .env, execute o comando abaixo para criar as tabelas estruturais de usuários e redefinição de senhas:

Bash
php artisan migrate
Passo 7: Iniciar o Servidor de Desenvolvimento
Coloque a aplicação para rodar localmente:

Bash
php artisan serve
Acesse o link gerado no terminal (geralmente http://127.0.0.1:8000) no seu navegador. Você verá os botões Log in e Register disponíveis no canto superior direito da página de boas-vindas.

🧪 Testando as Funcionalidades
📝 Criando uma nova conta (Registro)
Na página inicial da aplicação, clique em Register no canto superior direito.

Preencha o formulário com os seguintes dados:

Name: Seu nome completo.

Email: Um endereço de e-mail válido (ex: usuario@email.com).

Password: Uma senha segura (mínimo de 8 caracteres).

Confirm Password: Repita exatamente a mesma senha informada acima.

Clique no botão Register. Você será automaticamente autenticado e redirecionado para a Dashboard.

🔑 Realizando o Login
Se você sair do sistema ou quiser testar o acesso novamente:

Na página inicial, clique em Log in.

Insira o e-mail e a senha cadastrados anteriormente.

Após clicar em Log in, o sistema validará os dados e concederá acesso às áreas restritas e protegidas por autenticação, como a página Dashboard e as configurações do Perfil do Usuário.

📝 Licença
Este projeto está sob a licença MIT.
