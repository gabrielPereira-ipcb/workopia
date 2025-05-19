# Workopia - Gerenciador de Tarefas

Este projeto é um sistema de gestão de tarefas desenvolvido em Laravel Herd v11, com interface baseada no Bootstrap 5. O objetivo é permitir o registo, acompanhamento e organização de tarefas de forma simples e eficiente.

## Funcionalidades da Aplicação

- **Registo de Tarefas:** Permite criar novas tarefas informando título, descrição e data de fim.
- **Listagem de Tarefas:** Exibe todas as tarefas cadastradas.
- **Edição de Tarefas:** Atualiza a tarefa como "completada".
- **Exclusão de Tarefas:** Permite remover tarefas do sistema.
- **Validação de Dados:** Garante que os dados inseridos nos formulários sejam válidos (ex: título obrigatório, data válida).
- **Interface Amigável:** Utiliza Bootstrap 5 para uma experiência visual moderna e responsiva.

## Funcionalidade CRUD

O sistema implementa todas as operações CRUD (Criar, Ler, Excluir) para o gerenciamento de tarefas.

## Pré-requisitos

- **XAMPP** instalado para ambiente local (Apache, MySQL, PHP).
-**GitHub**: https://github.com/gabrielPereira-ipcb/workopia.
- **Bootstrap 5** para o frontend.

## Etapas de Instalação e Configuração

### Etapa 1: Instalação do Laravel e Criação da Aplicação

- Instale o [Laravel Herd v11](https://herd.laravel.com/).
- Crie um novo projeto Laravel.

### Etapa 2: Criação da Base de Dados

- Crie uma base de dados (exemplo: `database\database.sqlite`) sqlite3 no terminal.

### Etapa 3: Criação das Tabelas

- A tabela de tarefas deve conter os seguintes campos:

- **ID:** Identificador único da tarefa.
- **Título:** Nome ou título da tarefa.
- **Descrição:** Detalhes ou informações adicionais sobre a tarefa.
- **Data de Fim:** Prazo para conclusão da tarefa.
- **Status:** Situação atual da tarefa.
- **Datas de Criação e Atualização:** Registros automáticos de quando a tarefa foi criada e modificada.


### Etapa 4: Criação dos Controladores

- Crie controladores para gerenciar as operações das tarefas:
/**
 * listTask()
 * Recupera as tarefas com status nulo (não concluídas) do banco de dados, paginando os resultados em lotes de 5,
 * e retorna a view 'welcome' com as tarefas para exibição.
 *
 * addTask()
 * Retorna a view 'tasks.add' para exibir o formulário de criação de uma nova tarefa.
 *
 * addTaskPost(Request $request)
 * Valida os dados recebidos do formulário de criação de tarefa (título, descrição e prazo são obrigatórios),
 * cria uma nova tarefa e salva no banco de dados. Redireciona para a página inicial com mensagem de sucesso
 * ou retorna ao formulário com mensagem de erro em caso de falha.
 *
 * updateTaskStatus($id)
 * Atualiza o status da tarefa identificada pelo ID para 'completed' (concluída).
 * Redireciona para a página inicial com mensagem de sucesso ou erro conforme o resultado da operação.
 *
 * deleteTask($id)
 * Remove a tarefa identificada pelo ID do banco de dados.
 * Redireciona para a página inicial com mensagem de sucesso ou erro conforme o resultado da operação.
 */

### Etapa 5: Configuração do Template

- Importe e configure o Bootstrap 5 no projeto para estilização.

### Etapa 6: Definição das Rotas

- Configure as rotas no arquivo `web.php` para as operações de tarefas.

### Etapa 7: Implementação e Testes

- Implemente as funcionalidades e teste o aplicativo CRUD.

---
