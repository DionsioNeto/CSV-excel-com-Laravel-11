# Sobra a Aplicação :
### OBS!!!

<h3>Para rodar esta aplicação web, você vai precisar de ter instalado em sua máquina:</h3>
<ul>
  <li>composer</li><li>PHP</li>
  <li>Qualquer CMD ou linha de comando</li>
</ul>
<h3>Depois de importar esta a plicação em sua máquina você precisará de seguir os seguintes passos dentro da linha de comando:</h3>
  Você precisa abrir o CMD dentro da pasta do arquivo.<br>Se vc não estiver dentro da pasta então você precisará navegar até lá com o comando "cd ./o caminho do arquivo"

- cd nome-do-projeto // Navegue para o diretório do projeto
- composer install // Instalar dependências PHP com o Composer
- cp .env.example .env // Criar o arquivo .env a partir do exemplo
- php artisan key:generate // Gerar a chave da aplicação
# Configure o banco de dados no arquivo .env
- php artisan migrate // Rodar as migrações
- (Não é de todo necessário neste projecto) npm install // Instalar dependências do Node.js (se houver frontend)
- (Não é de todo necessário neste projecto) npm run dev  // Compilar arquivos frontend para desenvolvimento
- php artisan migrate // para rodar o servidor
- php artisan serve // Rodar o servidor de desenvolvimento

## Esta aplicação web Conta com as seguintes tecnologias:
- Framwork Laravel PHP
- Linguagem Javascript
- Framwork Bootstrap
- Linguagem CSS
- FontAwesome
### Oquê que esta aplicação faz?
-  É uma aplicação capaz de com importar dados já protos de arquivos Excel ou seja, arquivo com estensão CSV. 
- Ideal para trabalhar quando não tiver internet, e quando for restabelicida a internet, é só importar de formas a não suspender as actividades ) 
-  Listar dados já cadastrado 
 ## Imagens sobre a aplicação- Página inicial do aplicação
 
 ### Página inicial do projecto
 
<img src="https://github.com/DionsioNeto/CSV-excel-com-Laravel-11/blob/master/arquivo_csv/Captura%20de%20Ecr%C3%A3%20(485).png" alt="" width="100%">

 ### Encontrando arquivo CSV (EXCEL)
 
<img src="https://github.com/DionsioNeto/CSV-excel-com-Laravel-11/blob/master/arquivo_csv/Captura%20de%20Ecr%C3%A3%20(486).png" alt="" width="100%">

### Importando arquivo CSV (EXCEL), com 5 usuário 

<img src="https://github.com/DionsioNeto/CSV-excel-com-Laravel-11/blob/master/arquivo_csv/Captura%20de%20Ecr%C3%A3%20(487).png" alt="" width="100%">

### Autor: <a src="dionisio-neto.netlify.com"> Dionísio Neto </a>
