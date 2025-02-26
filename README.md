# projatividades_crud_bootstrap_php2

# Sistema de Gestão de Atividades

Um sistema web desenvolvido em PHP para a gestão de atividades escolares/acadêmicas, permitindo o registro, visualização, edição e exclusão de atividades de forma simples e eficiente.

## 🚀 Funcionalidades

- Registro de novas atividades
- Listagem de todas as atividades cadastradas
- Visualização detalhada de cada atividade
- Edição de atividades existentes
- Exclusão de atividades
- Pesquisa dinâmica de atividades
- Registro e visualização de erros do sistema

## 💻 Tecnologias Utilizadas

- **PHP** 7.4+
- **MySQL**
- **Bootstrap** 5.3.2
- **jQuery** 3.6.0
- **Font Awesome** 4.6.2
- **SweetAlert**

## 📋 Pré-requisitos

- Servidor web (ex.: Apache ou Nginx)
- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Extensão `mysqli` do PHP ativada

## 🔧 Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/smpsandro1239/projatividades_crud_bootstrap_php2.git
   ```

2. Crie a base de dados e a tabela no MySQL:
   ```sql
   CREATE DATABASE gestao_atividades;
   USE gestao_atividades;

   CREATE TABLE atividades (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nome VARCHAR(255) NOT NULL,
       descricao TEXT,
       modalidade VARCHAR(100),
       dinamizadores VARCHAR(255),
       data DATE,
       local VARCHAR(255),
       destinatarios VARCHAR(255),
       numero_participantes INT,
       custo DECIMAL(10,2)
   );
   ```

3. Configure a conexão com o banco de dados em `config.php`:
   ```php
   define('DB_NAME', 'gestao_atividades');
   define('DB_USER', 'seu_usuario');
   define('DB_PASSWORD', 'sua_senha');
   define('DB_HOST', 'localhost');
   ```

4. Coloque os arquivos no diretório do servidor web (ex.: `htdocs` do XAMPP) e acesse via navegador.

## 📦 Estrutura do Projeto

```
projatividades_crud_bootstrap_php2/
│
├── atividades/
│   ├── add.php         # Adicionar nova atividade
│   ├── delete.php      # Excluir atividade
│   ├── edit.php        # Editar atividade
│   ├── functions.php   # Funções auxiliares
│   ├── index.php       # Listagem de atividades
│   ├── modal.php       # Modais para interação
│   └── view.php        # Visualização detalhada
│
├── css/
│   ├── bootstrap-*.css # Estilos do Bootstrap
│   └── outros arquivos de estilo
│
├── inc/
│   ├── database.php    # Conexão com o banco
│   ├── footer.php      # Rodapé do layout
│   └── header.php      # Cabeçalho do layout
│
├── config.php          # Configurações do sistema
└── index.php           # Página inicial
```

## 🛠️ Funcionalidades Detalhadas

### Dashboard
- Visão geral das atividades
- Acesso rápido às funcionalidades principais

### Gestão de Atividades
- Formulário para registro com validação de campos
- Listagem com opções de edição e exclusão
- Suporte a datas e custos

### Sistema de Erros
- Registro de erros em log
- Interface simples para monitoramento

## 🔒 Segurança

- Proteção contra SQL Injection com `mysqli`
- Sanitização de entradas
- Validação de dados no servidor

## 📸 Capturas do funcionamento

Aqui estão alguns prints do sistema em funcionamento:

| Descrição                | Imagem                                                                                   |
|--------------------------|------------------------------------------------------------------------------------------|
| Página Inicial           | ![Página Inicial](screenshots/screencapture-localhost-projatividades-crud-bootstrap-php-2025-02-26-12_25_35.png) |
| Listagem de Atividades   | ![Listagem](screenshots/screencapture-localhost-projatividades-crud-bootstrap-php-atividades-index-php-2025-02-26-12_24_19.png) |
| Pesquisa de Atividades   | ![Pesquisa](screenshots/screencapture-localhost-projatividades-crud-bootstrap-php-atividades-index-php-2025-02-26-12_25_21.png) |
| Detalhes de Atividade    | ![Detalhes](screenshots/screencapture-localhost-projatividades-crud-bootstrap-php-atividades-index-php-2025-02-26-12_25_49.png) |
| Confirmação de Ação      | ![Confirmação](screenshots/screencapture-localhost-projatividades-crud-bootstrap-php-atividades-index-php-2025-02-26-12_26_03.png) |
| Edição de Atividade      | ![Edição](screenshots/screencapture-localhost-projatividades-crud-bootstrap-php-atividades-edit-php-2025-02-26-12_26_23.png) |


## ✨ Melhorias Futuras

- [ ] Sistema de autenticação e login
- [ ] Exportação de atividades para PDF/Excel
- [ ] Relatórios gráficos
- [ ] Design responsivo otimizado para mobile

## 👤 Autor

- **Sandro** - *Desenvolvimento e Implementação*
  GitHub: [smpsandro1239](https://github.com/smpsandro1239)

## 📄 Licença

Este projeto está sob a licença MIT - veja o arquivo [LICENSE.md](LICENSE.md) para mais detalhes (adicione um se desejar).

## 🎁 Agradecimentos

- À comunidade open-source por ferramentas incríveis como Bootstrap e PHP
- À inspiração de projetos CRUD simples e funcionais

---

⌨️ Desenvolvido com ❤️ por [Sandro](https://github.com/smpsandro1239) 😊

---
