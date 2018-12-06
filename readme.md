# Beer Ecommerce

Um ecommerce de cervejas desenvolvido como projeto da disciplina de programação Web na Universidade Federal do 
Rio Grande do Norte.

## Tecnologias utilizadas
Para o desenvolvimento deste projeto, estão sendo utilizadas as tecnologias:

* PHP7  
* JavaScript  
* MariaDB  
* jQuery  
* BootstrapCSS  
* MaterializeCSS  
* CodeIgniter3 
* GoogleCharts  
* PHPMailer

## Arquitetura

O projeto está sendo desenvolvido utilizando a arquitetura MVC (Model-View-Controller) com o auxílio do framework CodeIgniter3 que simplifica toda a implementação.

## Instalação e uso

# XAMPP

O primeiro passo é ter o XAMPP instalado em sua máquina. O XAMPP é uma distribuição Apache que contém o MariaDB e PHP.  
O site para download do XAMPP é https://www.apachefriends.org/index.html

# Populando o banco de dados
O script para criar as tabelas e popular o banco de dados está disponível em  
`/beer-ecommerce/application/bd/scripts.sql`

# Iniciando a aplicação

Primeiramente é necessário clonar o repositório dentro da pasta htdocs, localizada no local de instalação do XAMPP:  

```html
$ cd caminho/ate/lampp/htdocs && git clone https://github.com/mathmed/beer-ecommerce.git
``` 

Abra o arquivo `/beer-ecommerce/application/config/database.php` e altere os campos `seu_usuario_aqui` e `sua_senha_aqui` para as suas credencias do banco de dados.  

Após obtido o repositório e atualizado o `database.php`, é necessário iniciar o XAMPP, para isso:  

```html
$ sudo caminho/ate/lampp/ && ./lampp start
```  

Com o XAMPP iniciado, no navegador digite `http://localhost/beer-ecommerce/` para acessar a área pública ou `http://localhost/beer-ecommerce/dash` para acessar a área administrativa. 

Usuário de acesso ao dashboard:  
Login: 123456789  
Senha: 123456  

# Casos de uso 

Relatórios: Não finalizado  
Listagem de usuários: Finalizado  
Configurações: Finalizado  
Gerenciamento de Pedidos: Não finalizado  
Gerenciamento de Bebidas e estoque: Finalizado  
Gerencimaneto de Marcas: Finalizado  
Gerenciamento de Categorias: Finalizado  
Gerenciamento de Fornecedores: Finalizado  
Gerenciamento de Promoções: Finalizado  



## Contribuintes

Mateus Medeiros  
Laio de Alencar  
Marcio Miller  
Eduardo Victor  
