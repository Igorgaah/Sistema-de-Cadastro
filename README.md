````markdown
# 📋 Sistema de Cadastro de Usuários

Este projeto é um sistema web simples de cadastro de usuários, desenvolvido com PHP e MySQL, que permite login, edição, exclusão e listagem de usuários em uma interface funcional.

---

## 🔧 Funcionalidades

- ✅ Cadastro de usuários
- 🔐 Login com verificação
- ✏️ Edição de dados
- 🗑️ Exclusão de registros
- 👀 Listagem de usuários cadastrados
- 🔐 Sessão com controle de acesso
- 📄 Diagrama visual do sistema (`.drawio`)

---

## 🗂 Estrutura dos Arquivos

| Arquivo                 | Função                                                                 |
|-------------------------|------------------------------------------------------------------------|
| `login.php`             | Tela de login e verificação de credenciais                            |
| `home.php`              | Página principal com listagem de usuários                             |
| `formulario.php`        | Formulário para cadastro de novos usuários                            |
| `edit.php`              | Página de edição de dados de um usuário                               |
| `saveEdit.php`          | Script que processa a edição dos dados                                |
| `delete.php`            | Script que remove um usuário do banco de dados                        |
| `config.php`            | Configuração da conexão com o banco de dados                          |
| `sair.php`              | Logout e destruição da sessão                                          |
| `Diagrama sem nome.drawio` | Diagrama da estrutura ou fluxo do sistema (abrir com [draw.io](https://drawio.app)) |

---

## 🛠 Tecnologias Utilizadas

- Linguagem: PHP
- Banco de Dados: MySQL
- Estilo/Frontend: HTML5, CSS3 (padrão)
- Servidor local recomendado: XAMPP ou WAMP

---

## 🚀 Como Rodar Localmente

1. Clone ou baixe o projeto:

   ```
   git clone https://github.com/seu-usuario/Sistema-de-Cadastro.git
````

2. Copie a pasta para o diretório `htdocs` do XAMPP.

3. Importe o banco de dados MySQL (arquivo `.sql`, se fornecido).

4. Atualize o arquivo `config.php` com as credenciais corretas do seu banco de dados.

5. Inicie o Apache e o MySQL pelo XAMPP e acesse:

   ```
   http://localhost/Sistema-de-Cadastro/login.php
   ```

---

## 🧩 Diagrama do Sistema

O projeto inclui o arquivo `Diagrama sem nome.drawio`, que pode ser aberto com o [app draw.io](https://drawio.app) para visualizar a estrutura lógica e o fluxo de telas do sistema.

---

## 👨‍💻 Autor

Desenvolvido por Igor Rafael Marcelo Morais.
Este projeto tem fins didáticos, podendo ser usado como base para sistemas mais robustos de cadastro e controle de acesso.

---

## 📄 Licença

Este projeto é de uso livre para fins acadêmicos e de aprendizado.

```
```
