# Mentoria - API 2025.2

**Proposta:** Criar um grupo de agentes de inteligência artificial para analisar ações e gerar conteúdos recomendando (ou não) a compra, com base em dados reais e percepção de mercado.

- **Júlia:** coleta os dados financeiros atualizados via Yahoo Finance.  
- **Pedro:** analisa o que o mercado e a mídia estão dizendo sobre a empresa.  
- **Key:** jornalista experiente que redige o conteúdo final, com base nos dados dos outros dois.  
- **Fator humano:** revisa e aprova o conteúdo antes da publicação.  

O objetivo é produzir matérias financeiras claras, confiáveis e baseadas em dados, com apoio de IA e curadoria humana.

Tecnologias que iremos utilizar:  
- Inteligência Artificial (assistentes virtuais, processamento de linguagem natural, modelos de IA, etc.)  
- HTML, CSS, JavaScript  
- Laravel + PHP  
- Python  

---

## Estrutura de Diretórios

- **src/** → Aplicação Laravel  
- **db/** → Arquivos do banco de dados (Local!!! Não subir para o Git)  

---

## Pré-requisitos

Antes de iniciar, certifique-se de ter os seguintes itens instalados:

- [PHP >= 8.0](https://www.php.net/downloads)  
- [Composer](https://getcomposer.org/download/)  
- [MySQL ou MariaDB](https://dev.mysql.com/downloads/)  
- [Node.js + NPM](https://nodejs.org/en/download)  
- [Laravel Installer (opcional)](https://laravel.com/docs/11.x/installation)  

---

## Como rodar o projeto

### 1. Clone o repositório

```bash
git clone <url-do-repo>
cd <nome-do-repo>
```

### 2. Instale as dependências do Laravel

```bash
composer install
```

### 3. Configure o ambiente

Copie o arquivo `.env.example` para `.env`:

```bash
cp .env.example .env
```

Edite o `.env` com as credenciais do seu banco de dados MySQL/MariaDB.

### 4. Gere a chave da aplicação

```bash
php artisan key:generate
```

### 5. Execute as migrações do banco de dados

```bash
php artisan migrate
```

Se necessário, também rode as seeders para popular dados iniciais:

```bash
php artisan db:seed
```

### 6. Instale dependências frontend

```bash
npm install
npm run dev
```

### 7. Levante o servidor local

```bash
php artisan serve
```

A aplicação estará disponível em:

```bash
http://localhost:8000
```

---

## Problemas comuns no Windows

Caso ocorra erro de quebra de linha ao clonar o repositório, configure:

```bash
git config core.autocrlf input
```

---

## Observações finais

* Todos os arquivos do banco **não devem ser versionados** (nunca subir a pasta `db/` para o Git).
* Mantenha o `.env` fora do versionamento (já está incluído no `.gitignore`).
* Para rodar testes automatizados:

```bash
php artisan test
```
