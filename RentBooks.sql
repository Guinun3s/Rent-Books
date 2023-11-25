create database RentBooks;
use RentBooks;
drop database RentBooks;

drop table livros;
create table livros(
isbnLivro int primary key auto_increment not null,
titulo varchar(100) not null,
modo varchar(10) not null,
autor varchar(45) not null,
preco float not null,
descricao varchar(225) not null,
genero varchar(45) not null,
vendedor varchar(45) not null,
imagem mediumblob not null
);

INSERT INTO livros (titulo, modo, autor, preco, descricao, genero, vendedor, imagem) VALUES 
('A biblioteca da Meia-noite', 'vender', 'Matt Haigh', 22.99, 'Aos 35 anos, Nora Seed é uma mulher cheia de talentos e poucas conquistas.', 'fantasia', 'Beatriz Lima - Rio Grande / Rio Grande Do Sul', 'public/imagens/livros/abibliotecadameianoite.jpg');

drop table usuario;
create table usuario(
idUsuario int primary key auto_increment not null,
nome varchar(100) not null,
dataNascimento date not null,
genero varchar(9) not null,
telefone varchar(45) not null,
cpf varchar(11) not null,
tipoUsuario boolean not null,
email varchar(45) not null,
senha varchar(16) not null,
cep varchar(45) not null,
cidade varchar(100)not null,
rua varchar(45) not null,
bairro varchar(45) not null,
numero varchar(11) not null
);

create table Produto(
idProduto int primary key not null,
codFornecedor int not null,
codLivros int not null,
codRevista int not null,
codHq int not null,

constraint FkFornecedor foreign key (codFornecedor) references Fornecedor(idFornecedor),
constraint FkLivros foreign key (codLivros) references Livros(isbnLivro),
constraint FkRevista foreign key (codRevista) references Revista(isbnRevista),
constraint FkHq foreign key (codHq) references Hq(isbnHq)
);

create table alugaProduto(
idAluga int primary key not null,
termoResponsabilidade varchar(45), # REVISA SE ESTÁ CORRETO A TIPAGEM
formaPagamento varchar(45),
codProduto int not null,
codCliente int not null,

constraint FkProduto foreign key (codProduto) references Produto(idProduto),
constraint FkCliente foreign key (codCliente) references Cliente(idCliente)
);

create table compraProduto(
idCompra int  primary key  not null,
formaPagamento varchar(45),
cod_Produto int not null,
cod_Cliente int not null,

constraint Fk_Produto foreign key (cod_Produto) references Produto(idProduto),
constraint Fk_Cliente foreign key (cod_Cliente) references Cliente(idCliente)
);

insert into Livros(isbnLivro, preco_aluguel, preco_compra, idioma, genero, classificacao, nome, autor, editora, servico) values
(2, 5.60, 41.70, "Português", "cristão", "Livre", "Vimos e Ouvimos - A Inculbência da Pregação", "Israel Subirá", "orvalho.com", "entrega ou aluguel"),
(3, 5.47, 11.23, "Português", "romance", "+12", "Memórias Póstumas de Brás Cubas", "Machado de Assis", "Principis; 3ª edição",  "entrega ou aluguel"),
(4, 6.70,  47.32, "Português", "cristão", "Livre", "Cristianismo Puro e Simples", "C.S Lewis", " Thomas Nelson Brasil; 1ª edição", "entrega ou aluguel"),
(5, 2.50, 42.99, "Português", "drama", "+ 17", "Sol da Meia-noite", "Stephenie Meyer", "Intrínseca; 1ª edição)", "entrega ou aluguel");

insert into Revista(isbnRevista, preco_aluguel, preco_compra, classificacao, editora, nome, servico) values
(1, 0.99, 7.80 , "Livre", "On Line Editora; 1ª edição", "Looney Tunes Revista em Quadrinhos", "entrega ou aluguel"),
(2, 1.15, 8.50, "Livre", "On Line Editora; 1ª edição", "Scooby-Doo Revista em Quadrinhos", "entrega ou aluguel"),
(3, 0.99, 7.99, "Livre", "On Line Editora; 1ª edição", "Os Jetsons Revista em Quadrinhos", "entrega ou aluguel"),
(4, 3.40, 9.99, "Livre", " CPAD", "LIÇÕES BÍBLICAS ADULTO ALUNO - ATÉ OS CONFINS DA TERRA", "entrega ou aluguel");

insert into Hq(isbnHq, preco_aluguel, preco_compra, classificacao, editora, nome, servico) values
(1, 2.10, 11.15 , "Livre", " Panini; 45ª edição", "O Espetacular Homem-Aranha Vol. 1", "entrega ou aluguel"),
(2, 4.50, 18.50, "+15", "Panini; 1ª edição ", "X-Men: Lendas Vol. 1 ", "entrega ou aluguel"),
(3, 0.49, 2.99, "4-8 anos", "Ciranda Cultural; 1ª edição", "Barbie - A emergência fashion: Volume 2", "entrega ou aluguel"),
(4, 4.20, 8.98, "Livre", "Geográfica Editora; 1ª edição", "Começa a batalha em ação", "entrega ou aluguel");

insert into Cliente(idCliente, bairro, cep, numero, rua, telefone, email, senha) values
(1, "Jardim Brasil", "12700030", "209", "Gerônimo Azevedo", "77988566352", "luanagiovana@gmail.com", 123654),
(2, "Ouro Nobre", "15662300", "123", "Rua Costa e Silva", "77988564592", "rodrigoazevedo@hotmail.com", 78906),
(3, "Filipenses", "1470023", "963", "Rua Evangeline", "77988563652", "mariabitencurt@gmail.com", 980076),
(4, "Cirandinha", "4569287", "128", "Rua 2 de Julho", "77988577142", "felipesantos@hotmail.com", 45872);

insert into Fornecedor(idFornecedor, nome, contaBancaria, email, senha, telefone) values
(1, "Ricardo", "ricardo123", "ricardomonteiro@gmail.com", 345678, "77988314663"),
(2, "Giovanna", "GigiConta", "giovanamartins@gmail.com", 856932, "77988652356"),
(3, "Helena", "HeliLima", "helenalima@hotmail.com.br", 569823, "77988564121"),
(4, "Rodrigo Gabriel", "Gabriel_heber", "rodgrigoheber@gmail.com", 78956, "77988451247");

insert into alugaProduto(idAluga, termoResponsabilidade, formaPagamento, codProduto, codCliente) values
(1, "termoResponsabilidade", "cartão", 1, 1),
(2, "termoRespomsabilidade", "boleto", 2, 2),
(3, "termoResponsabilidade", "pix", 3, 3),
(4, "termoResponsabilidade", "cartao", 4, 4);

insert into compraProduto(idCompra, formaPagamento, cod_Produto, cod_Cliente) values
(1, "cartão", 1, 1),
(2, "pix", 2, 2),
(3, "boleto", 3, 3),
(4, "pix", 4, 4);

insert into Produto(idProduto, codFornecedor, codLivros, codRevista, codHq) values
(1, 1, 1, 1, 1),
(2, 2, 2, 2, 2),
(3, 3, 3, 3, 3),
(4, 4, 4, 4, 4);

select * from Livros;
select * from Revista;
select * from Hq;
select * from Cliente;
select * from Fornecedor;
select * from Produto;
select * from alugaProduto;
select * from compraProduto;