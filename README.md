# Loja - Autenticação & Temas
Módulo de acesso seguro com funcionalidade de personalização de interface, focado em lógica de back-end e fluxo de usuário.

# Sobre o Sistema
Este sistema é um simulador de autenticação funcional que integra a validação de credenciais com a persistência de preferências do usuário. Ele utiliza sessões nativas do PHP para garantir que apenas usuários autorizados acessem o catálogo de produtos, mantendo a escolha estética (tema) ativa durante toda a navegação.

# Como usar
Hospede os arquivos em um servidor com suporte a PHP (como XAMPP, WAMP ou Laragon).

Certifique-se de que os arquivos index.php, login.php, logout.php e produtos.php estejam no mesmo diretório.

Acesse localhost/caminho-do-projeto/index.php no seu navegador.

Acesso: Use o usuário admin e a senha 123.

Escolha um dos três temas disponíveis (Claro, Escuro ou Azul Empresarial) e explore o catálogo.

# Tecnologias utilizadas
PHP (Lógica de back-end e gerenciamento de sessões)

HTML5 (Estruturação de formulários e tabelas)

CSS3 (Estilização dinâmica via PHP)

# Sobre este projeto
Projeto desenvolvido para praticar o fluxo completo de uma aplicação web dinâmica. O foco principal foi a segurança de acesso, a manipulação de superglobais do PHP ($_POST, $_GET, $_SESSION e $_SERVER) e a renderização condicional de elementos de interface baseada em escolhas do usuário.

## Aprendizados
Lógica de Sessão: Controle de acesso e persistência de dados entre diferentes páginas.

PHP Dinâmico: Processamento de formulários, redirecionamento de headers e filtragem de arrays.

UX Funcional: Implementação de temas visuais condicionados à variável de sessão.

Segurança Básica: Validação de login e proteção de rotas privadas contra acessos diretos.
