# Sistema de Gerenciamento de Tarefas (API)

## Funcionalidades:
- Criar uma tarefa
- Apagar uma tarefa
- Atualizar uma tarefa
- Obter detalhes de uma tarefa
- Mostrar todas as tarefas

## Todas as tarefas possuem:
Título;
Descrição;
Status (Boolean de 'Concluída' e 'Não concluída').

(Todas as respostas da API são geradas em formato JSON.)


# Como testar a API

- Listar todas as tarefas:
    
    Método: GET
    
    URL: http://localhost:8000/api/tasks
    
- Obter detalhes de uma tarefa específica:
    
    Método: GET
    
    URL: [http://localhost:8000/api/tasks/{id}]
    
    Substitua {id} pelo ID da tarefa desejada.
    
- Criar uma nova tarefa:
    
    Método: POST
    
    URL: http://localhost:8000/api/tasks

Corpo (em JSON):
    

```json
{
  "title": "Tarefa 1",
  "description": "Descrição da tarefa 1",
  "completed": false
}
```

- Atualizar os dados de uma tarefa existente:
- Método: PUT
- URL: [http://localhost:8000/api/tasks/{id}]
- Substitua {id} pelo ID da tarefa que deseja atualizar.

Corpo (em JSON):

```json
{
  "title": "Tarefa atualizada",
  "description": "Nova descrição",
  "completed": true
}

```

- Excluir uma tarefa:
- Método: DELETE
- URL: [http://localhost:8000/api/tasks/{id}]
- Substitua {id} pelo ID da tarefa que deseja excluir.










<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
