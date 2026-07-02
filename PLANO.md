# Plano de Implementação — Vault Collection

> Documento elaborado **antes** da geração de código com IA, conforme requisito da Parte 5.

---

## 1. Contexto

### 1.1 Objetivo da Aplicação
Desenvolver um sistema web para gerenciamento de coleções pessoais, permitindo ao colecionador cadastrar, organizar, acompanhar o valor investido, controlar o estado de conservação dos itens e gerenciar uma wishlist.

### 1.2 Problema que Resolve
Colecionadores de mangás, HQs, figures, Funko Pops, jogos, cards e outros itens acumulam acervos extensos sem uma ferramenta centralizada. Planilhas e anotações avulsas dificultam o controle de quantidade, localização, valores pagos, estado de conservação e itens desejados. O Vault Collection centraliza todas essas informações em um único lugar, acessível de qualquer dispositivo.

### 1.3 Público-Alvo
Colecionadores de:
- Mangás, HQs, artbooks, livros
- Action figures, Funko Pops, bonecas colecionáveis, miniaturas
- Blu-rays, DVDs, steelbooks
- Jogos (físicos e colecionáveis)
- Cards (TCG, esportivos etc.)
- Qualquer outro item colecionável

---

## 2. Escopo

### 2.1 Funcionalidades Incluídas (In Scope)

| # | Funcionalidade | Prioridade |
|---|---------------|------------|
| 1 | Cadastro e autenticação de usuários (login, logout, registro) | Alta |
| 2 | Dashboard com estatísticas da coleção | Alta |
| 3 | CRUD de Itens da coleção | Alta |
| 4 | CRUD de Categorias | Alta |
| 5 | CRUD de Franquias | Média |
| 6 | Wishlist (marcar item como desejado) | Alta |
| 7 | Favoritos (destacar itens preferidos) | Média |
| 8 | Upload de foto do item | Média |
| 9 | Pesquisa e filtros (categoria, franquia, estado, status) | Média |
| 10 | Soft delete (lixeira de itens) | Média |
| 11 | Seeders com usuários de teste | Alta |

### 2.2 Fora do Escopo (Out of Scope)
- Compartilhamento público de coleções
- Avaliações ou comentários entre usuários
- Integração com APIs externas de preços
- Aplicativo mobile nativo

---

## 3. Entidades do Banco de Dados

### 3.1 Diagrama de Entidades

```
users
 └── collection_items  (pertence ao user)
       ├── categories    (pertence a uma category)
       └── franchises    (pertence a uma franchise, nullable)
```

### 3.2 Tabelas e Campos

#### `users` *(gerada pelo Breeze — já existe)*
| Campo | Tipo | Observação |
|-------|------|------------|
| id | bigint PK | |
| name | varchar(255) | |
| email | varchar(255) | unique |
| password | varchar(255) | |
| timestamps | | |

#### `categories`
| Campo | Tipo | Observação |
|-------|------|------------|
| id | bigint PK | |
| name | varchar(100) | unique |
| slug | varchar(100) | unique |
| description | text | nullable |
| timestamps | | |

**Valores padrão:** Mangá, HQ, Figure, Funko Pop, Boneca colecionável, Blu-ray, DVD, Steelbook, Livro, Artbook, Card, Jogo, Miniatura, Outros

#### `franchises`
| Campo | Tipo | Observação |
|-------|------|------------|
| id | bigint PK | |
| name | varchar(150) | |
| user_id | bigint FK | pertence ao usuário |
| timestamps | | |

#### `collection_items`
| Campo | Tipo | Observação |
|-------|------|------------|
| id | bigint PK | |
| user_id | bigint FK | dono do item |
| category_id | bigint FK | obrigatório |
| franchise_id | bigint FK | nullable |
| name | varchar(255) | obrigatório |
| manufacturer | varchar(150) | fabricante/editora, nullable |
| series | varchar(150) | série, nullable |
| character | varchar(150) | personagem, nullable |
| edition | varchar(100) | edição, nullable |
| quantity | int | default 1 |
| purchase_date | date | nullable |
| purchase_price | decimal(10,2) | valor pago, nullable |
| estimated_price | decimal(10,2) | valor estimado, nullable |
| condition | enum | Mint, Near Mint, Good, Fair, Poor |
| storage_location | varchar(200) | local de armazenamento, nullable |
| photo | varchar(255) | caminho da imagem, nullable |
| notes | text | observações, nullable |
| is_favorite | boolean | default false |
| status | enum | owned, wishlist |
| deleted_at | timestamp | soft delete |
| timestamps | | |

---

## 4. Telas da Aplicação

| Rota | Tela | Descrição |
|------|------|-----------|
| `/` | Landing / Redirect | Redireciona para dashboard se autenticado |
| `/login` | Login | Autenticação Breeze |
| `/register` | Cadastro | Registro Breeze |
| `/dashboard` | Dashboard | Estatísticas e resumo da coleção |
| `/items` | Lista de Itens | Listagem com filtros, busca e paginação |
| `/items/create` | Novo Item | Formulário de cadastro |
| `/items/{id}` | Detalhe do Item | Visualização completa |
| `/items/{id}/edit` | Editar Item | Formulário de edição |
| `/wishlist` | Wishlist | Itens com status = wishlist |
| `/favorites` | Favoritos | Itens marcados como favorito |
| `/categories` | Categorias | CRUD de categorias |
| `/franchises` | Franquias | CRUD de franquias |

---

## 5. Ordem de Implementação

A implementação seguirá a ordem abaixo para garantir que as dependências entre entidades sejam respeitadas:

```
Fase 1 — Base e Autenticação
  [ ] 1. Laravel instalado com Breeze
  [ ] 2. Laravel Boost instalado
  [ ] 3. Configuração do .env (banco, app name, timezone)
  [ ] 4. Verificar migrations do Breeze (users, sessions etc.)

Fase 2 — Estrutura de Banco
  [ ] 5. Migration: categories
  [ ] 6. Migration: franchises
  [ ] 7. Migration: collection_items (com soft delete)
  [ ] 8. Models com relacionamentos e $fillable
  [ ] 9. Seeders: CategorySeeder

Fase 3 — Skills
  [ ] 10. Skill de Identidade Visual
  [ ] 11. Skill de CRUD
  [ ] 12. Skill de Testes
  [ ] 13. Skill de Segurança

Fase 4 — CRUDs (com IA via Vibe Coding)
  [ ] 14. CRUD de Categorias (simples, sem user_id)
  [ ] 15. CRUD de Franquias
  [ ] 16. CRUD de Itens (principal, com upload de foto)
  [ ] 17. Wishlist (filtro sobre itens)
  [ ] 18. Favoritos (toggle + listagem)

Fase 5 — Dashboard e Funcionalidades Extras
  [ ] 19. Dashboard com estatísticas
  [ ] 20. Pesquisa e filtros na listagem
  [ ] 21. Soft delete 

Fase 6 — Qualidade e Documentação
  [ ] 22. Testes automatizados (Feature + Unit)
  [ ] 23. README.md
  [ ] 24. RELATORIO.md
  [ ] 25. Revisão final e validação
```

---

## 6. Tecnologias Utilizadas

| Camada | Tecnologia |
|--------|------------|
| Backend | PHP 8.x + Laravel 11.x |
| Autenticação | Laravel Breeze |
| UI Scaffolding | Laravel Boost |
| Frontend | Blade + Tailwind CSS + Alpine.js |
| Banco de dados | MySQL 8.x (via XAMPP) |
| Servidor local | Apache (XAMPP) |
| Testes | PHPUnit|
| Versionamento | Git + GitHub |
| IA assistente | Claude (Anthropic) via Claude Code |
| MCP | MCP filesystem / Context7 |

---

## 7. Riscos e Mitigações

| Risco | Probabilidade | Impacto | Mitigação |
|-------|--------------|---------|-----------|
| IA gera código com erros de lógica de negócio | Média | Alto | Revisão manual de todo código gerado antes de commitar |
| Upload de imagem com path incorreto no XAMPP | Média | Médio | Usar `storage:link` e testar localmente antes |
| Soft delete não aplicado corretamente em queries | Baixa | Médio | Usar `SoftDeletes` trait e revisar queries com `withTrashed` |
| Permissões: usuário acessar item de outro usuário | Média | Alto | Policy ou Gate em todos os métodos de show/edit/delete |
| Migrations com conflito de nomes | Baixa | Baixo | Seguir convenção `snake_case` plural para tabelas |

---

## 8. Critérios de Aceite

### Autenticação
- [ ] Usuário consegue se registrar com e-mail e senha
- [ ] Usuário consegue fazer login e logout
- [ ] Usuário não autenticado é redirecionado para `/login`

### Itens da Coleção
- [ ] Usuário consegue criar, visualizar, editar e excluir seus itens
- [ ] Usuário NÃO consegue ver/editar/excluir itens de outros usuários
- [ ] Categoria é obrigatória no cadastro
- [ ] Upload de foto funciona e exibe a imagem no detalhe
- [ ] Paginação funciona na listagem

### Wishlist e Favoritos
- [ ] Item com `status = wishlist` aparece na página de Wishlist
- [ ] Item marcado como favorito aparece na página de Favoritos

### Dashboard
- [ ] Exibe total de itens na coleção
- [ ] Exibe valor total investido
- [ ] Exibe contagem por categoria
- [ ] Exibe últimos 5 itens adicionados

### Qualidade
- [ ] Todas as rotas protegidas retornam 302 para usuário não autenticado
- [ ] Formulários exibem mensagens de erro de validação
- [ ] Soft delete não exibe itens deletados na listagem padrão
- [ ] Testes automatizados passam sem erros (`php artisan test`)

---

*Vault Collection — Plano de Implementação v1.0*
*Elaborado em: 2026*