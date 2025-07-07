````md
# Sistema de Gestão de Atividades

Um sistema web desenvolvido em PHP para a gestão de atividades escolares/académicas, permitindo o registo, visualização, edição e eliminação de atividades de forma simples e eficiente.

## 🚀 Funcionalidades

- Registo de novas atividades  
- Listagem de todas as atividades registadas  
- Visualização detalhada de cada atividade  
- Edição de atividades existentes  
- Eliminação de atividades  
- Pesquisa dinâmica de atividades  
- Registo e visualização de erros do sistema  

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
- Extensão `mysqli` do PHP ativa  

## 🔧 Instalação

1. Clona o repositório:
   ```bash
   git clone https://github.com/smpsandro1239/projatividades_crud_bootstrap_php2.git
````

2. Cria a base de dados e a tabela no MySQL:

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

3. Configura a ligação com a base de dados em `config.php`:

   ```php
   define('DB_NAME', 'gestao_atividades');
   define('DB_USER', 'o_teu_utilizador');
   define('DB_PASSWORD', 'a_tua_senha');
   define('DB_HOST', 'localhost');
   ```

4. Coloca os ficheiros no diretório do servidor web (ex.: `htdocs` do XAMPP) e acede através do navegador.

## 📦 Estrutura do Projeto

```
projatividades_crud_bootstrap_php2/
│
├── atividades/
│   ├── add.php         # Adicionar nova atividade
│   ├── delete.php      # Eliminar atividade
│   ├── edit.php        # Editar atividade
│   ├── functions.php   # Funções auxiliares
│   ├── index.php       # Listagem de atividades
│   ├── modal.php       # Modais para interação
│   └── view.php        # Visualização detalhada
│
├── css/
│   ├── bootstrap-*.css # Estilos do Bootstrap
│   └── Outros ficheiros de estilo
│
├── inc/
│   ├── database.php    # Ligação com a base de dados
│   ├── footer.php      # Rodapé do layout
│   └── header.php      # Cabeçalho do layout
│
├── config.php          # Configurações do sistema
└── index.php           # Página principal
```

## 🛠️ Funcionalidades Detalhadas

### Painel de Controlo (Dashboard)

* Visão geral das atividades
* Acesso rápido às funcionalidades principais

### Gestão de Atividades

* Formulário para registo com validação de campos
* Listagem com opções de edição e eliminação
* Suporte a datas e custos

### Sistema de Erros

* Registo de erros em ficheiro de log
* Interface simples para monitorização

## 🔒 Segurança

* Proteção contra SQL Injection com `mysqli`
* Sanitização de entradas
* Validação de dados no servidor

## 📸 Capturas do Funcionamento

Aqui estão alguns capturas de ecrã do sistema em funcionamento:

| Descrição              | Imagem                                                                                                                             |
| ---------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| Página Principal       | ![Página Principal](screenshots/screencapture-localhost-projatividades-crud-bootstrap-php-2025-02-26-12_25_35.png)                 |
| Listagem de Atividades | ![Listagem](screenshots/screencapture-localhost-projatividades-crud-bootstrap-php-atividades-index-php-2025-02-26-12_24_19.png)    |
| Pesquisa de Atividades | ![Pesquisa](screenshots/screencapture-localhost-projatividades-crud-bootstrap-php-atividades-index-php-2025-02-26-12_25_21.png)    |
| Detalhes de Atividade  | ![Detalhes](screenshots/screencapture-localhost-projatividades-crud-bootstrap-php-atividades-index-php-2025-02-26-12_25_49.png)    |
| Confirmação de Ação    | ![Confirmação](screenshots/screencapture-localhost-projatividades-crud-bootstrap-php-atividades-index-php-2025-02-26-12_26_03.png) |
| Edição de Atividade    | ![Edição](screenshots/screencapture-localhost-projatividades-crud-bootstrap-php-atividades-edit-php-2025-02-26-12_26_23.png)       |

## ✨ Melhorias Futuras

* [ ] Sistema de autenticação e início de sessão
* [ ] Exportação de atividades para PDF/Excel
* [ ] Relatórios gráficos
* [ ] Design responsivo optimizado para dispositivos móveis

## 👤 Autor

* **Sandro** – *Desenvolvimento e Implementação*
  GitHub: [smpsandro1239](https://github.com/smpsandro1239)

## 📄 Licença

Este projeto está sob a licença MIT – consulta o ficheiro [LICENSE.md](LICENSE.md) para mais detalhes (adiciona um se desejares).

## 🎁 Agradecimentos

* À comunidade open-source por ferramentas incríveis como Bootstrap e PHP
* À inspiração de projetos CRUD simples e funcionais

---

⌨️ Desenvolvido com ❤️ pelo [Sandro](https://github.com/smpsandro1239) 😊
