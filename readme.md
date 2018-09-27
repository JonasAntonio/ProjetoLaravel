## Projeto desenvolvido como parte do processo seletivo de estagiáro PHP da App Masters.

### Ferramentas e tecnologias utilizadas:
<p><strong>Laravel:</strong> Framework PHP utilizado para desenvolver este projeto.</p>

<p><strong>Artisan:</strong> Ferramenta usada para criar migrations, controllers, e toda a parte de autenticação do projeto. Além disso, a ferramenta fornece um servidor para executar a aplicação durante o desenvolvimento.</p>

<p><strong>XAMPP:</strong> Foi utilizado o XAMPP apenas para o servidor do banco de dados MySql, tendo em vista que o php está instalado nativamente na máquina utilizada para desenvolver o projeto.</p>

<p><strong>MySql Workbench:</strong> Utilizado para gerenciar o banco de dados.</p>

<p><strong>Postman:</strong> A extensão para Google Chrome foi usada para testar as requisições da rota /api/users/add/</p>

<p>As dependências deste projeto estão descritas no arquivo <a href="composer.json">composer.json</a></p>

<p>Obs: É necessário modificar o arquivo Endpoint.php conforme o <a href="https://github.com/frankwkw/swapi-php/commit/d066108ed7d7b9dd0653d48b37b2390f1a30d8f5">link</a> para que a rota /api/people/add funcione corretamente.</p>

## Erros à corrigir:
   * Validação do formulário de atualização de pessoa.
   * HomeWorld vindo da api externa com a biblioteca swapi-php vindo nulo. 

### Teste a aplicação:
<p>Para testar a aplicação <a href="http://projetolaraveljv.herokuapp.com">clique aqui</a>. Faça o login com este email: 'admin@admin.com' e esta senha 'adminadmin'. Ela está hospedada na <a href="https://www.heroku.com/">Heroku</a> e o banco de dados está hospedado no <a href="db4free.net">db4free.net</a>.</p>

## Project developed as PHP Internship selection process at App Masters.

### Tools and technologies used:
<p><strong>Laravel:</strong> PHP Framework used to develop this project.</p>

<p><strong>Artisan:</strong> Tool used to create migrations, controllers, all the authentication of this project. Moreover, this tool offers a server to execute the application during the development process.</p>

<p><strong>XAMPP:</strong> XAMPP has been used just as a server to MySql database, considering that the PHP is installed natively into the computer used to develop this project.</p>

<p><strong>MySql Workbench:</strong> It’s been used to manage the database.</p>

<p><strong>Postman:</strong> A Google Chrome’s plugin used to test the requests at /api/users/add/ route.</p>

<p>All the dependencies are described at <a href="composer.json">composer.json</a></p>

<p>Ps: It's necessary to modify the file Endpoint.php like the <a href="https://github.com/frankwkw/swapi-php/commit/d066108ed7d7b9dd0653d48b37b2390f1a30d8f5">link</a> to make the route /api/people/add work correctly.</p>

## Issues to fix:
   * Form validation when update person.
   * HomeWorld fild coming from external api using the library swapi-php is coming null.

### Test the app:
<p>To test the application <a href="http://projetolaraveljv.herokuapp.com">click here</a>. Login with this email: 'admin@admin.com' and with this password 'adminadmin'. It is hosted at <a href="https://www.heroku.com/">Heroku</a> and the database is hosted at <a href="db4free.net">db4free.net</a>.</p>
