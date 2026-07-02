# RELATÓRIO — Vault Collection

# Contexto e Planejamento

## Tema

Vault Collection é um sistema web desenvolvido para gerenciamento de coleções pessoais.

O objetivo é oferecer ao colecionador uma plataforma centralizada para organizar seus itens, acompanhar o valor investido, cadastrar imagens, controlar favoritos, wishlist e manter todas as informações da coleção em um único ambiente.

## Problema

Muitos colecionadores utilizam planilhas, anotações ou diversos aplicativos diferentes para controlar suas coleções.

Essas soluções dificultam o gerenciamento dos itens, principalmente quando a coleção cresce.

O Vault Collection foi desenvolvido para resolver esse problema através de uma aplicação web organizada e acessível.

## Público-alvo

Colecionadores de:

* Mangás
* HQs
* Action Figures
* Funko Pops
* Bonecas colecionáveis
* Blu-rays
* DVDs
* Steelbooks
* Jogos
* Cards
* Miniaturas
* Livros
* Artbooks

## Plano de Implementação

Antes do desenvolvimento foi elaborado um Plano de Implementação contendo:

* contexto do projeto;
* escopo;
* entidades do banco de dados;
* funcionalidades;
* ordem de implementação;
* tecnologias utilizadas;
* riscos;
* critérios de aceite.

O plano serviu como base para todo o desenvolvimento da aplicação.

---

# Ferramentas de IA

Durante o desenvolvimento foi utilizada Inteligência Artificial para auxiliar na implementação do sistema.

## MCPs utilizados

### Filesystem MCP

O Filesystem MCP foi utilizado para auxiliar na navegação da estrutura do projeto Laravel.

Sua principal finalidade foi facilitar a organização dos arquivos durante o desenvolvimento, permitindo localizar controllers, models, migrations, rotas, views e demais componentes da aplicação de forma rápida.

Exemplos de utilização:

* organização da estrutura do projeto;
* localização de arquivos Blade;
* navegação entre Controllers, Models e Migrations;
* auxílio na criação dos CRUDs.

### Context7 MCP

O Context7 foi utilizado para fornecer contexto atualizado sobre o framework Laravel.

Seu uso permitiu gerar código seguindo os padrões do Laravel, consultando referências relacionadas às funcionalidades implementadas.

Exemplos de utilização:

* criação de migrations;
* relacionamentos Eloquent;
* upload de imagens;
* validações;
* rotas Resource;
* autenticação com Laravel Breeze;
* utilização de boas práticas do framework.

---

# Skills desenvolvidas

Foram utilizadas as seguintes Skills:

* Skill de CRUD
* Skill de Identidade Visual
* Skill de Segurança
* Skill de Testes

Essas Skills foram utilizadas como regras permanentes durante toda a geração de código assistida por IA.

---

# Desenvolvimento

Durante o desenvolvimento foram implementadas as seguintes funcionalidades:

* autenticação de usuários;
* dashboard principal;
* CRUD completo de categorias;
* CRUD completo de franquias;
* CRUD completo de itens;
* upload de imagens;
* sistema de favoritos;
* sistema de wishlist;
* pesquisa por nome;
* paginação;
* relacionamento entre entidades;
* dashboard com estatísticas.

Também foram aplicadas boas práticas do Laravel, como:

* Eloquent ORM;
* Route Model Binding;
* validações;
* utilização de middleware auth;
* organização por Controllers;
* uso de Models e Migrations.

## Decisões de Projeto

As principais decisões adotadas foram:

* utilização do Laravel Breeze para autenticação;
* utilização do Tailwind CSS para interface;
* uso do Blade como mecanismo de templates;
* armazenamento das imagens utilizando o Storage do Laravel;
* separação da aplicação em CRUDs independentes.

## Dificuldades Encontradas

Durante o desenvolvimento foram encontrados alguns desafios, como:

* configuração dos relacionamentos entre Models;
* implementação do upload de imagens;
* organização da dashboard;
* integração entre favoritos e wishlist;
* ajustes nas rotas do Laravel;
* resolução de conflitos durante versionamento com Git.

Todos os problemas foram solucionados durante o desenvolvimento.

---

# Conclusão

O Vault Collection atingiu seu principal objetivo de fornecer uma plataforma para gerenciamento de coleções pessoais.

A utilização da Inteligência Artificial auxiliou na geração inicial do código, porém todo o conteúdo produzido foi revisado, adaptado e validado antes de ser incorporado ao projeto.

A experiência permitiu aplicar conceitos de Laravel, banco de dados, autenticação, Blade, Tailwind CSS, Git e desenvolvimento assistido por IA.

Como melhorias futuras podem ser implementados filtros avançados, lixeira utilizando Soft Deletes, testes automatizados mais completos e novos recursos para gerenciamento da coleção.