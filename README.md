# 📚 API CRUD com Laravel 11

Este projeto é uma API desenvolvida com o framework Laravel 11, que implementa um CRUD completo (Create, Read, Update, Delete). O objetivo é fornecer uma base sólida para o desenvolvimento de APIs RESTful modernas e escaláveis.

---

## 🚀 Tecnologias Utilizadas

- **[PHP](https://www.php.net/)** ![PHP](https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white&style=flat-square)
- **[Laravel 11](https://laravel.com/)** ![Laravel](https://img.shields.io/badge/-Laravel-FF2D20?logo=laravel&logoColor=white&style=flat-square)
- **[PostgreSQL](https://www.postgresql.org/)** ![PostgreSQL](https://img.shields.io/badge/-PostgreSQL-336791?logo=postgresql&logoColor=white&style=flat-square)
- **[Composer](https://getcomposer.org/)** ![Composer](https://img.shields.io/badge/-Composer-885630?logo=composer&logoColor=white&style=flat-square)
- **[Postman](https://www.postman.com/)** ![Postman](https://img.shields.io/badge/-Postman-FF6C37?logo=postman&logoColor=white&style=flat-square)

---

## 📂 Estrutura do Projeto

```plaintext
API-CRUD-LARAVEL-11/
├── app/
│   ├── Http/
│   ├── Models/
│   ├── Providers/
├── config/
├── database/
├── public/
├── resources/
├── routes/
│   ├── api.php
│   ├── web.php
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
├── package.json
└── README.md
```

### Explicação da Estrutura

- **`app/`**: Contém a lógica principal da aplicação.
  - **`Http/`**: Inclui os controladores e middlewares. Os controladores processam as requisições HTTP e retornam respostas.
  - **`Models/`**: Contém os modelos que representam as tabelas do banco de dados e encapsulam a lógica de negócios.
  - **`Providers/`**: Contém os provedores de serviços, usados para registrar serviços e funcionalidades na aplicação.

- **`config/`**: Contém os arquivos de configuração da aplicação, como banco de dados, cache, filas, e-mail, etc.

- **`database/`**: Contém arquivos relacionados ao banco de dados.
  - **`migrations/`**: Scripts para criar, alterar ou excluir tabelas no banco de dados.
  - **`seeders/`**: Scripts para popular o banco de dados com dados iniciais.

- **`public/`**: Contém arquivos públicos acessíveis pelo navegador, como o arquivo `index.php` (ponto de entrada da aplicação), imagens, CSS e JavaScript.

- **`resources/`**: Contém os recursos da aplicação.
  - **`views/`**: Arquivos Blade (template engine do Laravel) para renderizar páginas HTML.
  - **`lang/`**: Arquivos de tradução para suporte a múltiplos idiomas.

- **`routes/`**: Contém os arquivos de rotas da aplicação.
  - **`api.php`**: Define as rotas para a API.
  - **`web.php`**: Define as rotas para a interface web.

- **`storage/`**: Contém arquivos gerados pela aplicação, como logs, cache, uploads e arquivos temporários.

- **`tests/`**: Contém os testes automatizados da aplicação, organizados em testes de unidade e testes de funcionalidade.

- **Arquivos na raiz do projeto**:
  - **`.env`**: Arquivo de configuração do ambiente, onde são definidas variáveis como credenciais de banco de dados, chaves de API, etc.
  - **`artisan`**: Ferramenta de linha de comando do Laravel para executar tarefas como migrações, criação de controladores, etc.
  - **`composer.json`**: Arquivo de configuração do Composer, que gerencia as dependências do projeto.
  - **`README.md`**: Documentação do projeto.

---

## 🛠️ Como Configurar o Projeto

### 1️⃣ Pré-requisitos

Certifique-se de ter as seguintes ferramentas instaladas:

- **[PHP 8.2+](https://www.php.net/)**
- **[Composer](https://getcomposer.org/)**
- **[PostgreSQL](https://www.postgresql.org/)**
- **[Git](https://git-scm.com/)**

### 2️⃣ Clonar o Repositório

```bash
git clone https://github.com/seu-usuario/API-CRUD-LARAVEL-11.git
cd API-CRUD-LARAVEL-11
```

### 3️⃣ Instalar Dependências

```bash
composer install
```

### 4️⃣ Configurar o Ambiente

Renomeie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente, como o banco de dados:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### 5️⃣ Gerar a Chave da Aplicação

```bash
php artisan key:generate
```

### 6️⃣ Executar as Migrações

```bash
php artisan migrate
```

### 7️⃣ Iniciar o Servidor

```bash
php artisan serve
```

A API estará disponível em `http://localhost:8000`.

---

## 📖 Endpoints da API

| Método | Endpoint       | Descrição                  |
|--------|----------------|----------------------------|
| GET    | `/api/recursos` | Lista todos os recursos   |
| POST   | `/api/recursos` | Cria um novo recurso      |
| GET    | `/api/recursos/{id}` | Exibe um recurso específico |
| PUT    | `/api/recursos/{id}` | Atualiza um recurso específico |
| DELETE | `/api/recursos/{id}` | Remove um recurso específico |

---

## 🤝 Como Contribuir

1. Faça um fork do projeto.
2. Crie uma branch para sua feature ou correção de bug:

   ```bash
   git checkout -b minha-feature
   ```

3. Faça as alterações necessárias e commit:

   ```bash
   git commit -m "Descrição da minha feature"
   ```

4. Envie para o repositório remoto:

   ```bash
   git push origin minha-feature
   ```

5. Abra um Pull Request.

---

## 📝 Licença

Este projeto está licenciado sob a [MIT License](https://opensource.org/licenses/MIT).

---

## 📧 Contato

Se tiver dúvidas ou sugestões, entre em contato:

- **E-mail:** <adriellisonki@gmail.com>
- **LinkedIn:** [Adriellison Ferreira](https://linkedin.com/in/adriellison)

---

## 🌟 Agradecimentos

Agradecemos a todos que contribuíram para o desenvolvimento deste projeto e à comunidade Laravel por fornecer uma base incrível para o desenvolvimento de aplicações web.