# Sistema de Cadastro de Consultores e Compromissos

Este projeto é uma aplicação web desenvolvida com PHP e o framework Laravel 11, destinada ao gerenciamento de consultores e compromissos. A aplicação permite a criação, edição, listagem e exclusão de registros, além de fornecer funcionalidades de filtro e totalização.

## Funcionalidades

### Cadastro de Consultores
- **Campos**:
  - **Nome completo**: Campo obrigatório.
  - **Valor hora**: Valor monetário para cálculo dos compromissos.
- **Operações**:
  - **Listagem**: Visualização de todos os consultores com filtros por nome.
  - **Edição**: Modificação dos dados dos consultores.
  - **Exclusão**: Remoção de consultores que não estão vinculados a compromissos.

### Cadastro de Compromissos
- **Campos**:
  - **Código do consultor**: Seleção pelo nome completo do consultor (campo obrigatório).
  - **Data**: Data do compromisso (campo obrigatório).
  - **Hora de início**: Hora de início do compromisso (campo obrigatório).
  - **Hora fim**: Hora de término do compromisso (campo obrigatório).
  - **Intervalo**: Tempo de intervalo durante o compromisso (campo obrigatório).
- **Operações**:
  - **Listagem**: Visualização dos compromissos com filtros por data e consultor.
  - **Exibição de Totalizador Geral**: Soma de total de horas e valor total baseado no filtro aplicado.
  - **Edição**: Modificação dos dados dos compromissos.
  - **Exclusão**: Remoção de compromissos.

## Tecnologias Utilizadas

- **Backend**: PHP, Laravel 11
- **Banco de Dados**: MySQL
- **Frontend**: HTML, CSS, JavaScript

## Instalação e Configuração

1. **Clone o Repositório**: Substitua `https://github.com/seu-usuario/seu-repositorio.git` pelo URL do seu repositório no GitHub.
2. **Configure o Ambiente**: Certifique-se de que as variáveis no arquivo `.env` estão corretas.
3. **Execute as Migrações**: As migrações criarão as tabelas necessárias no banco de dados.
4. **Inicie o Servidor de Desenvolvimento**: Use `php artisan serve` para iniciar o servidor localmente.

Se precisar de ajustes ou mais informações específicas, me avise!