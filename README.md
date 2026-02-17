🔐 Loja - Sistema de Login & Temas
Este projeto é um módulo de autenticação simples que permite ao usuário acessar uma lista de produtos e escolher a preferência visual da interface através de temas.

1. O que é isso?
Uma aplicação PHP que simula o fluxo de acesso de uma loja virtual. As principais funcionalidades são:

Autenticação: Validação de usuário e senha (ex: admin/123).

Persistência de Preferências: Uso de Cookies ou Sessions para salvar o tema escolhido (Claro, Escuro ou Azul).

Área Restrita: Uma lista de produtos que só pode ser visualizada após o login bem-sucedido.

2. Como eu rodo isso na minha máquina?
Mova os arquivos para a pasta do seu servidor local (ex: htdocs no XAMPP).

Inicie o Apache no painel de controle do XAMPP.

Acesse no navegador: http://localhost/nome-da-sua-pasta/

Credenciais de teste: * Usuário: admin

Senha: 123

3. O que eu aprendi?
Neste projeto, foquei na experiência do usuário e segurança básica:

Manipulação de Formulários: Captura de dados via método POST.

Lógica de Temas: Aplicação de CSS dinâmico baseado na escolha do usuário dentro de um elemento <select>.

Controle de Acesso: Como redirecionar usuários e proteger páginas usando lógica de programação PHP.

UX de Login: Inclusão de valores padrão para testes e mensagens de instrução.

🛠 Tecnologias
HTML5 (Estrutura)

CSS3 (Estilização de temas)

PHP (Lógica de autenticação e redirecionamento)
