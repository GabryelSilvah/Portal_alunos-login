# Portal_alunos/login

> Status: em desenvolvimento
> [Site](http://portal-alunos.free.nf/)

## Como está sendo feito
Esse projeto está sendo construído utilizando a arquitetura MVC na linguagem php. O .htaccess foi utilizado para iniciar a criação da url amigável. Também está sendo implementado router para sistema de rotas. O MySql é SGBD utilizado para gerenciar o banco sql da aplicação. A configuração de conexão utilizada foi o mysqli com possibilidade de alteração para o estilo PDO futuramente. 

## Área de cadastro
Como esse é um projeto simples, apenas para simular um portal de alunos, inicialmente a área de cadastro está na página de login. Claramente em um projeto real de portal de alunos essa parte de cadastro não fica disponível para que qualquer pessoa faça o cadastro na plataforma. Nesses casos um cadastro provisório é feito para que o aluno possa fazer o primeiro acesso e modificar a senha posteriomente. O motivo que me levou a deixar o cadastro disponível a todos é com víeis de ser possível "passear" pela plataforma e entender o objetivo principal do projeto.

## Sobre o projeto
O objetivo desse projeto é ser um portal para acesso de estudantes de instituições de ensino. O sistema conta 
com página de login onde o usuário pode realizar o acesso no portal, fazer um novo cadastro ou redefinir a senha.
Após validado o acessar ao sistema, é feito o redirecionamento para o home inicial do portal. Nele ficam disponíveis as disciplinas matriculadas. Através da barra de menu é possível navegar em outras abas, como, por exemplo, o perfil do usuário onde mostra todas as informações cadastradas com a possibilidade de alterar essas informações através do botão (atualizar dados).

<div style="width:100vw;display:flex;justify-content:center; gap:10px;flex-wrap:wrap;">
  
<img style="width:300px;"  src="https://github.com/GabryelSilvah/Sistema_de_login-Portal_alunos/assets/139282381/01e7de87-eb21-458e-8c8c-0640c389eab0">

  <img style="width:300px" src="https://github.com/GabryelSilvah/Sistema_de_login-Portal_alunos/assets/139282381/71c740fb-00e1-43f7-8d2a-0fcd79b27cb5">
  
  <img style="width:300px" src="https://github.com/GabryelSilvah/Sistema_de_login-Portal_alunos/assets/139282381/310a45dc-67d2-4d70-8710-2604e4ea32f3">

   <img style="width:300px" src="https://github.com/GabryelSilvah/Sistema_de_login-Portal_alunos/assets/139282381/4893f2b3-7807-4016-916c-9543cb7e2a5b">

  
</div>

## O que se propõe a fazer até o fim do projeto
- Todas as funcionalidades do CRUD devem ser implementadas
- Proteção contra sql injection deve ser implementada
- Melhor estruturação das tabelas no MySql

## Tecnologias usadas
- PHP
- Javascript
- MySql
- Html
- Css
