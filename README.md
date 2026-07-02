# Vault Collection

## Descrição da aplicação

O **Vault Collection** é uma aplicação web desenvolvida em Laravel para auxiliar colecionadores no gerenciamento de suas coleções pessoais.

O sistema permite cadastrar, organizar e acompanhar diversos tipos de itens colecionáveis, como mangás, HQs, action figures, Funko Pops, bonecas colecionáveis, jogos, Blu-rays, DVDs, steelbooks, miniaturas, cards e outros objetos.

Além do cadastro dos itens, o sistema oferece recursos como favoritos, wishlist, upload de imagens, dashboard com estatísticas e gerenciamento de categorias e franquias.

---

# Funcionalidades

* Autenticação de usuários (Laravel Breeze)
* Dashboard com estatísticas da coleção
* CRUD completo de Itens
* CRUD completo de Categorias
* CRUD completo de Franquias
* Upload de imagem para cada item
* Sistema de Favoritos
* Sistema de Wishlist
* Pesquisa por nome
* Paginação das listagens
* Interface responsiva utilizando Tailwind CSS

---

# Tecnologias utilizadas

* PHP 8.x
* Laravel 11
* Laravel Breeze
* Laravel Boost
* Blade
* Tailwind CSS
* Alpine.js
* MySQL
* XAMPP
* Composer
* Node.js
* Vite
* Git
* GitHub

---

# Instalação

Clone o repositório:

```bash
git clone https://github.com/SandySLima/Projeto_Vault_Collection.git
```

Entre na pasta:

```bash
cd Projeto_Vault_Collection
```

Instale as dependências do Composer:

```bash
composer install
```

Instale as dependências do Node:

```bash
npm install
```

Copie o arquivo de ambiente:

```bash
copy .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

Configure o banco de dados no arquivo `.env`.

Execute as migrations:

```bash
php artisan migrate
```

Execute os seeders:

```bash
php artisan db:seed
```

Crie o link simbólico para armazenamento das imagens:

```bash
php artisan storage:link
```

Inicie o Vite:

```bash
npm run dev
```

Em outro terminal, inicie o servidor:

```bash
php artisan serve
```

A aplicação estará disponível em:

```
http://127.0.0.1:8000
```

---

# Banco de Dados

O projeto utiliza MySQL.

Após configurar corretamente o arquivo `.env`, execute:

```bash
php artisan migrate
```

Para popular o banco com dados iniciais:

```bash
php artisan db:seed
```

---

# Usuários de teste

Após executar os seeders estarão disponíveis os seguintes usuários:

Sandy (neste usuário, se encontram itens colecionáveis e fotos adicionadas. Importante entrar nele para verificar.)

Email: 

```
sandy@teste.com
```
Senha:

```
teste1234
```

Administrador

Email:

```
admin@vault.com
```

Senha:

```
12345678
```

Usuário

Email:

```
user@vault.com
```

Senha:

```
12345678
```

---

# Estrutura do Projeto

* CRUD de Itens
* CRUD de Categorias
* CRUD de Franquias
* Dashboard
* Favoritos
* Wishlist
* Upload de imagens

---

# Desenvolvedores

Projeto desenvolvido para a disciplina de Desenvolvimento de Aplicações Web com Laravel.


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======

>>>>>>> 23cf53598778b4e39d17b8513cb5c5b71ac4b966
