# 📝 Micro Sistema de Notas - Laravel + SQLite

Este é um micro sistema de gerenciamento de notas desenvolvido com ```Laravel``` e utilizando banco de dados ```SQLite```, ideal para testes locais e projetos simples.

---

## 🚀 Tecnologias Utilizadas

- Laravel 10+
- PHP 8.1+
- SQLite
- Composer
- Node.js + NPM (para assets frontend)

---

## ⚙️ Requisitos

Certifique-se de ter instalado:

- ```PHP 8.1+```
- ```Composer```
- ```Node.js``` e ```NPM```

---

## 🛠️ Instalação e Execução

1. **Clone o repositório**

```bash
git clone https://github.com/seu-usuario/seu-repo.git
cd seu-repo
```

2. **Instale as dependências PHP**

```bash
composer install
```

3. **Instale as dependências do frontend**

```bash
npm install
```

4. **Compile os assets (opcional para frontend)**

```bash
npm run dev
```

5. **Crie o arquivo do banco de dados**

```bash
touch database/database.sqlite
```

6. **Configure o `.env`**

Copie o `.env.example` e edite se necessário:

```bash
cp .env.example .env
```

Garanta que as seguintes linhas estejam no `.env`:

```
DB_CONNECTION=sqlite
DB_DATABASE=${PATH_COMPLETO}/database/database.sqlite
```

> No Windows, você pode deixar apenas:
> ```DB_DATABASE=database/database.sqlite```

7. **Gere a chave da aplicação**

```bash
php artisan key:generate
```

8. **Execute as migrations**

```bash
php artisan migrate
```

9. **Popule o banco com dados iniciais**

```bash
php artisan db:seed
```

10. **Inicie o servidor local**

```bash
php artisan serve
```

Acesse: [http://localhost:8000](http://localhost:8000)

---

## ✅ Observações

- Este projeto usa **SQLite**, portanto não é necessário instalar MySQL ou PostgreSQL.
- Ideal para testes e estudos locais com Laravel.
- Sistema de notas simples com autenticação pronta para expandir.

---

## 🧑‍💻 Autor

Desenvolvido por [Seu Nome ou Denis] 🚀
