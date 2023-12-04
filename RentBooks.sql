create database RentBooks;
use RentBooks;
drop database RentBooks;

drop table livros;
create table livros(
idLivro int primary key auto_increment not null,
titulo varchar(100) not null,
modo varchar(10) not null,
autor varchar(45) not null,
preco float not null,
descricao varchar(225) not null,
genero varchar(45) not null,
vendedor varchar(45) not null,
imagem varchar(100) not null
);

INSERT INTO livros (titulo, modo, autor, preco, descricao, genero, vendedor, imagem) VALUES 
('A biblioteca da Meia-noite', 'vender', 'Matt Haigh', 22.99, 'Aos 35 anos, Nora Seed é uma mulher cheia de talentos e poucas conquistas.', 'fantasia', 'Beatriz Lima - Rio Grande / Rio Grande Do Sul', 'http://localhost/Rent-Books/public/imagens/livros/abibliotecadameianoite.jpg'),
('A Garota do Lago', 'vender', 'Charlie Donlea', 8, 'A Garota do Lago é um romance policial escrito por Charlie Donlea.', 'suspense', 'Joana silva - Jequié / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/agarotadolago.jpg'),
('Até o Verão terminar', 'alugar', 'Colleen Hoover', 5.30, 'Filha de uma mãe problemática e um pai ausente, Beyah precisou aprender a se virar sozinha desde pequena. Sua vida foi trilhada com muitas decepeções. ', 'romance', 'Joaquim Almeida - Curitiba / Paraná', 'http://localhost/Rent-Books/public/imagens/livros/ateoveraoterminar.jpg'),
('Memórias Póstumas de Brás Cubas', 'vender', 'Machado de Assis', 20.00, 'Após ter morrido, em pleno ano de 1869, Brás Cubas decide narrar sua história e revisitar os fatos mais importantes de sua vida, a fim de se distrair na eternidade.', 'ficção', 'Thiago Miranda - Vale do Ibirapuera / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/memoriaspostumasdebrascubas.jpg');

drop table cliente;
create table cliente(
idCliente int primary key auto_increment not null,
nome varchar(100) not null,
dataNascimento date not null,
telefone varchar(45) not null,
cpf varchar(11) not null,
email varchar(45) not null,
senha varchar(16) not null,
cep varchar(45) not null,
cidade varchar(100)not null,
rua varchar(45) not null,
bairro varchar(45) not null,
numero varchar(11) not null
);

drop table fornecedor;
create table fornecedor(
idFornecedor int primary key auto_increment not null,
nome varchar(100) not null,
dataNascimento date not null,
telefone varchar(45) not null,
cpf varchar(11) not null,
email varchar(45) not null,
senha varchar(16) not null
);

create table Produto(
idProduto int primary key not null,
codFornecedor int not null,
codLivros int not null,


constraint FkFornecedor foreign key (codFornecedor) references Fornecedor(idFornecedor),
constraint FkLivros foreign key (codLivros) references Livros(isbnLivro)
);

create table alugaProduto(
idAluga int primary key not null,
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