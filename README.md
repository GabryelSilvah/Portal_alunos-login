# Portal_alunos/login

> Status: em desenvolvimento
> [Site](http://portal-alunos.free.nf/)

## Sobre
Esse projeto visa implementar um sistema de autenticação de usuário, que após validado permitira acesso ao portal do aluno onde é possível visualizar as disciplinas matriculadas, o status das notas, visualizar as informações cadastradas, editar essas informações, fazer logout na conta ou deletar essa conta. Voltando na parte de login é possível ter acesso a duas outras funcionalidades, redefinir a senha caso tenha esquecido e cadastrar um novo usuário. Sobre essa última funcionalidade eu falo um pouco mais no tópico (área de cadastro).

## Como está sendo feito
Esse projeto está sendo construído utilizando a arquitetura MVC na linguagem php. O .htaccess foi utilizado para iniciar a criação da url amigável. Também está sendo implementado router para sistema de rotas. O MySql é SGBD utilizado para gerenciar o banco sql da aplicação. A configuração de conexão utilizada foi o mysqli com possibilidade de alteração futuras para o estilo PDO. 

## Área de cadastro
Como esse é um projeto simples, apenas para simular um portal de alunos, inicialmente a área de cadastro está na página de login. Claramente em um projeto real de portal de alunos essa parte de cadastro não fica disponível para que qualquer pessoa faça o cadastro na plataforma. Nesses casos um cadastro provisório é feito para que o aluno possa fazer o primeiro acesso e modificar a senha posteriomente. O motivo que me levou a deixar o cadastro disponível a todos é com víeis de ser possível "passear" pela plataforma e entender o objetivo principal do projeto.



<div style="width:100vw;display:flex;justify-content:center; gap:10px;flex-wrap:wrap;">
  
<img style="width:300px;"  src="https://github.com/GabryelSilvah/7DaysOfCode/assets/139282381/3ca2108c-d059-444a-b218-a470cde35bb6">

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
