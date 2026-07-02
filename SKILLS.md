SKILLS — Vault Collection

# 1. Skill de Identidade Visual

Objetivo

Garantir consistência visual em todas as telas da aplicação.

Regras
Utilizar Tailwind CSS como padrão obrigatório.
Interface minimalista e funcional.
Layout baseado em grid responsivo.
Uso de cards para exibição de itens da coleção.
Priorizar legibilidade e organização de informações.
Evitar poluição visual e elementos desnecessários.
Padrão de componentes
Botões com estilo consistente em todo o sistema.
Inputs padronizados com feedback de validação.
Cards para exibição de itens, categorias e franquias.
Layout com header simples e navegação clara.
Destaques visuais
Favoritos devem ter destaque visual discreto.
Status (owned / wishlist) deve ser identificável visualmente.
Imagens dos itens devem ser sempre proporcionais e contidas.

# 2. Skill de CRUD
Objetivo

Padronizar a criação de todas as operações CRUD do sistema.

Estrutura obrigatória

Todo CRUD deve conter:

index (listagem)
create (formulário)
store (armazenamento)
show (visualização, quando necessário)
edit (edição)
update (atualização)
destroy (remoção lógica ou física conforme regra)
Regras de implementação
Utilizar Eloquent ORM para todas as operações.
Sempre validar dados com $request->validate().
Utilizar fillable nos models para segurança.
Redirecionar após operações com mensagens de status.
Usar controllers organizados por entidade.
Boas práticas
Evitar lógica complexa em controllers (usar models quando possível).
Manter consistência nos nomes de rotas.
Usar recursos do Laravel como Route Model Binding.
Aplicar paginação em listagens.

# 3. Skill de Testes
Objetivo

Garantir confiabilidade mínima do sistema através de testes automatizados.

Ferramenta
PHPUnit (padrão do Laravel)
Tipos de testes utilizados
Feature Tests (principal foco)
Testes de autenticação
Testes de CRUD básico
Regras
Testar fluxos principais da aplicação.
Garantir que usuários autenticados e não autenticados tenham comportamentos corretos.
Validar criação, edição e exclusão de registros.
Evitar testes excessivamente complexos ou desnecessários.
Casos prioritários
Registro e login de usuário.
Criação de itens da coleção.
Validação de formulários.
Controle de acesso por usuário.

# 4. Skill de Segurança
Objetivo

Garantir que o sistema não permita acesso indevido ou manipulação insegura de dados.

Regras obrigatórias
Autenticação
Todas as rotas protegidas devem usar middleware auth.
Autorização
Usuários só podem acessar seus próprios dados.
Sempre filtrar consultas por user_id.

Exemplo:

CollectionItem::where('user_id', auth()->id())->get();
Validação
Todo input deve ser validado no backend.
Nenhum dado pode ser salvo sem validação.
Segurança de dados
Usar $fillable em todos os models.
Evitar mass assignment.
Utilizar Soft Deletes quando necessário.
Upload de arquivos
Validar tipo de arquivo.
Limitar tamanho.
Renomear arquivos para evitar conflitos.
Evitar execução de arquivos enviados.

# 5. Regras gerais de uso das Skills
Durante o desenvolvimento
Todas as funcionalidades devem seguir obrigatoriamente as Skills.
Nenhuma funcionalidade deve ser criada sem validação e segurança.
O design deve seguir a Skill de Identidade Visual.
Durante uso com IA (vibe coding)

Sempre que solicitar geração de código, incluir implicitamente:

seguir Skill de CRUD
seguir Skill de Segurança
seguir Skill de Identidade Visual quando houver interface
manter consistência com Laravel padrão

# 6. Ordem de aplicação no projeto

As Skills devem ser aplicadas na seguinte ordem prática:

Skill de CRUD (base do sistema)
Skill de Segurança (proteção dos dados)
Skill de Identidade Visual (interface)
Skill de Testes (validação e qualidade)

# 7. Observação final

As Skills são regras permanentes do projeto e devem ser seguidas durante todo o desenvolvimento do Vault Collection, especialmente ao utilizar IA para geração de código.
