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

('Memórias Póstumas de Brás Cubas', 'vender', 'Machado de Assis', 20.00, 'Após ter morrido, em pleno ano de 1869, Brás Cubas decide narrar sua história e revisitar os fatos mais importantes de sua vida, a fim de se distrair na eternidade.', 'ficção', 'Thiago Miranda - Vale do Ibirapuera / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/memoriaspostumasdebrascubas.jpg'),

('A vida invisível de Addie LaRue', 'alugar', 'V.E Schwab', 6.90, 'Uma jornada inspirada no mito faustiano sobre busca e perda, eternidade e finitude e, acima de tudo, uma questão: até onde se vai para alcançar a liberdade? A vida invisível de Addie LaRue é um livro inesquecível e que colocou V.E. Schwab entre as principais autoras de fantasia da atualidade.', 'romance', 'Lucas Vieira - João Pessoa / Paraíba', 'http://localhost/Rent-Books/public/imagens/livros/avidainvisiveldeaddielarie.jpg'),

('Caixa de Pássaros', 'vender', 'Josh Malerman', 16.99, '"Caixa de Pássaros" é um thriller emocionante e perturbador que mantém os leitores à beira de seus assentos enquanto acompanham a luta desesperada de Malorie e seus filhos para sobreviver em um mundo onde abrir os olhos pode ser fatal.', 'suspense', 'Sthefany Thomas - Sergipe/ Carira', 'http://localhost/Rent-Books/public/imagens/livros/birdbox.jpg'),

('Como Programar C++ 5° Edição', 'alugar', 'DEITEL', 7.80, 'O livro "Como Programar C++" é amplamente conhecido por ser um guia abrangente e didático para aprender a linguagem de programação C++. Ele é direcionado tanto para iniciantes quanto para programadores mais experientes que desejam aprimorar suas habilidades em C++.', 'informativo', 'José Barbosa - Palmas / Tocantis', 'http://localhost/Rent-Books/public/imagens/livros/comoprogramarc.jpg'),

('Orgulho e Preconceito', 'vender', 'Jane Austen', 20.99, 'Muitos desses aspectos da trama conduzem os personagens ao autoconhecimento e ao amor. O livro pode ser considerado a obra prima da escritora, que equilibra comédia com seriedade, observação meticulosa das atitudes humanas e sua ironia refinada.', 'romance', 'Mariana Mendes - São Paulo/ São Paulo', 'http://localhost/Rent-Books/public/imagens/livros/orgulhoepreconceito.jpg'),

('TDAH', 'aluguar', 'Sharon Saline', 7.00, 'TDAH: tudo o que seu filho com Transtorno de Déficit de Atenção e Hiperatividade quer que você saiba não é apenas mais um livro escrito para pais e mães cujo filho foi diagnosticado com TDAH.', 'informativo', 'José Barbosa - Palmas / Tocantis', 'http://localhost/Rent-Books/public/imagens/livros/tdah.jpg'),

('Cuidado com Quem te Ama!', 'vender', 'Tiago Correia', 36.99, '“Cuidado com quem te ama”, segundo o autor, que é professor e doutorando em literatura e cultura pela UFBA, se caracteriza por ser uma antologia que reúne poemas escritos ao longo dos últimos cincos anos.', 'Poesia', 'Thiago Correia - Salvador - Bahia', 'http://localhost/Rent-Books/public/imagens/livros/cuidadocomquemteama.jpg'),

('Dom Casmurro', 'vender', 'Machado de assis', 7.80, 'Em Dom Casmurro, o narrador Bento Santiago retoma a infância que passou na Rua de Matacavalos e conta a história do amor e das desventuras que viveu com Capitu, uma das personagens mais enigmáticas e intrigantes da literatura brasileira.', 'classico', 'Pablo Teixeira - Xique-Xique / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/domcasmurro.jpg'),

('É assim que aprendemos', 'alugar', 'Stanislas Dehaene', 7.80, 'É assim que aprendemos vai até os limites da ciência da computação, da neurobiologia e da psicologia cognitiva para explicar como o aprendizado realmente acontece.', 'informativo', 'Marina Pimentel - Araraquara / São Paulo', 'http://localhost/Rent-Books/public/imagens/livros/eassimqueaprendemos.jpg'),

('Haikyu 1', 'alugar', 'Haruichi Furudate', 4.80, 'Shoyo Hinata e Tobio Kageyama, dois garotos fascinados pelo vôlei. A diferença é que Kageyama é um levantador talentoso, e Hinata, um atacante de baixa estatura para um jogador.', 'Mangá', 'Carla Petra - Irecê / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/haikyu1.jpg'),

('Harry Potter e o enigma do principe', 'vender', 'J. K. Rowling', 10.59, 'A onda de terror provocada pelo Lorde das Trevas estaria afetando, até mesmo, o mundo dos trouxas (não-bruxos), e sendo agravada pela ação dos dementadores, criaturas mágicas aterrorizantes que "sugam" a esperança e a felicidade das pessoas.', 'Fantasia', 'Cleide Moura - Santa Maria / Rio Grande do Sul', 'http://localhost/Rent-Books/public/imagens/livros/harrypottereoenigmadoprincipe.jpg'),

('Java como programar', 'alugar', 'Paul. J Deite', 13.29, 'Milhões de alunos e profissionais aprenderam programação e desenvolvimento de software com os livros Deitel. Java: como programar, 10ª edição, fornece uma introdução clara, simples, envolvente e divertida à programação Java com ênfase inicial em objetos.', 'Informativo', 'Isabella Pires - Brumado / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/javacomoprogramar.jpg'),

('Mentirosos', 'vender', 'E. Lockhart', 24.49, 'Um suspense moderno e sofisticado, Mentirosos é impossível de largar até que todos seus mistérios sejam desvendados.', 'Suspense', 'Fabiola Coqueiro - Jequié / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/mentirosos.jpg'),

('Nárnia', 'vender', 'C. S. Lewis', 24.49, 'Viagens ao fim do mundo, criaturas fantásticas e batalhas épicas entre o bem e o mal - o que mais um leitor poderia querer de um livro?', 'fantasia', 'Luan Vieira - São Gonçalo / Rio de Janeiro', 'http://localhost/Rent-Books/public/imagens/livros/narnia.jpg'),

('Naruto', 'vender', 'Masashi Kishimoto', 13.00, 'Naruto, Sasuke e Sakura são testados por Kakashi-sensei!! Se passarem nessa difícil prova, eles se tornarão Genins – ninjas aprendizes!', 'Mangá', 'Carla Meira - Brumado  /  Bahia', 'http://localhost/Rent-Books/public/imagens/livros/naruto.jpg'),

('Os Primos', 'alugar', 'Karen M. McManus', 16.99, 'Milly, Aubrey e Jonah recebem um convite inusitado: passar o verão no resort da avó que nunca viram na vida. Seus pais acreditam que é a oportunidade perfeita para fazer as pazes com a rica e excêntrica Mildred Story, que cortou relações com todos há mais de duas décadas sem maiores explicações.', 'suspense', 'Paulo - Manaus / Amazonas', 'http://localhost/Rent-Books/public/imagens/livros/osprimos.jpg'),

('Os 7 maridos de Evelyn Hugo', 'alugar', 'Taylor Jenkins Reid', 16.99, 'Lendária estrela de Hollywood, Evelyn Hugo sempre esteve sob os holofotes ― seja estrelando uma produção vencedora do Oscar, protagonizando algum escândalo ou aparecendo com um novo marido… pela sétima vez.', 'Romance', 'Lavi - Recife / Pernanbuco', 'http://localhost/Rent-Books/public/imagens/livros/ossetemaridosdeevelynhugo.jpg'),

('Sol da meia noite', 'vender', 'Stephenie Meyer', 20.99, 'Desde a primeira troca de olhares, ele fez tudo para ficar longe dela, mas e se as coisas não tiverem acontecido exatamente assim?', 'Romance', 'João Rocha - Salvador / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/soldameianoite.jpg'),

('Todo esse tempo', 'vender', 'Mikki Daughtry e Rachael Lippincott', 22.90, 'Kyle e Kimberly são o casal perfeito. Pelo menos, é o que Kyle acha. Por isso, quando Kimberly termina com ele na noite da festa de formatura, o mundo inteiro do garoto vira de cabeça para baixo - literalmente.', 'Romance', 'Rodrigo Alves - Porto Alegre / Rio Grande Do Sul', 'http://localhost/Rent-Books/public/imagens/livros/todoessetempo.jpg'),

('O cérebro de Buda', 'alugar', 'Richard Mendius e Rick hanson', 19.32, 'O livro mostra como modificar e treinar o fluxo de pensamentos para ativar respostas positivas, com calma e compaixão, em vez de reações negativas, cheias de raiva e angústia.', 'Informativo', 'Paulo monteiro - Cuiabá / Mato Grosso', 'http://localhost/Rent-Books/public/imagens/livros/ocerebrodebuda.jpg'),

('Uma mulher no escuro', 'alugar', 'Raphael Montes', 12.74, 'Victoria Bravo tinha quatro anos quando um homem invadiu sua casa e matou sua família a facadas, pichando seus rostos com tinta preta. Única sobrevivente, ela agora é uma jovem solitária e tímida, com pesadelos frequentes e sérias dificuldades para se relacionar.', 'Suspense', 'Laura Santos - Palmas / Tocantins', 'http://localhost/Rent-Books/public/imagens/livros/umamulhernoescuro.jpg'),

('Um de nós está mentindo', 'alugar', 'Karen M. McManus', 8.25, 'Numa tarde de segunda-feira, cinco estudantes do colégio Bayview entram na sala de detenção - Bronwyn, a gênia, comprometida a estudar em Yale, nunca quebra as regras.', 'Suspense', 'Danilo Ferreira - Vitoria da conquista / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/umdenosestamentindo.jpg'),

('It - A coisa', 'vender', 'Stephen King', 40.00, 'Durante as férias de 1958, em uma pacata cidadezinha chamada Derry, um grupo de sete amigos começa a ver coisas estranhas.', 'Suspense', 'Lucas Pedro - Barra/Bahia', 'http://localhost/Rent-Books/public/imagens/livros/itacoisa.jpg'),

('A seleção', 'vender', 'Kiera Cass', 17.00, 'Para trinta e cinco garotas, a Seleção é a chance de uma vida. É a oportunidade de ser alçada a um mundo de vestidos deslumbrantes e joias valiosas.', 'Suspense', 'Thiago Souza - Potiguara / Paraíba', 'http://localhost/Rent-Books/public/imagens/livros/tetoparadois.jpg'),

('O conto da Aia', 'alugar', 'Margaret Atwood', 7.00, 'O romance distópico O conto da aia, de Margaret Atwood, se passa num futuro muito próximo e tem como cenário uma república onde não existem mais jornais, revistas, livros nem filmes.', 'fantasia', 'Dandhara Medeiros - Salvador/bahia', 'http://localhost/Rent-Books/public/imagens/livros/ocontodaaia.jpg'),

('Romeu e julieta', 'alugar', 'William Shakespeare', 7.00, 'Há muito tempo duas famílias banham em sangue as ruas de Verona. Enquanto isso, na penumbra das madrugadas, ardem as brasas de um amor secreto.', 'romance', 'Jamyle Bartos - São Paulo', 'http://localhost/Rent-Books/public/imagens/livros/romeuejulieta.jpg'),

('Água Para Elefantes', 'alugar', 'Sara Gruen', 7.00, 'Desde que perdeu sua esposa, Jacob Jankowski vive numa casa de repouso, cercado por senhoras simpáticas, enfermeiras solícitas e fantasmas do passado.', 'romance', 'Maria Antonia - Ilhéus/Bahia', 'http://localhost/Rent-Books/public/imagens/livros/aguaparaelefantes.jpg'),

('O Homem de Giz', 'vender', 'C. J. Tudor', 26.84, 'Em 1986, Eddie e os amigos passam a maior parte dos dias andando de bicicleta pela pacata vizinhança em busca de aventuras. Os desenhos a giz são seu código secreto.', 'Suspense', 'luan Santana - Paulo Afonso / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/ohomemdegiz.jpg'),

('O Homem de Giz', 'vender', 'C. J. Tudor', 26.84, 'Em 1986, Eddie e os amigos passam a maior parte dos dias andando de bicicleta pela pacata vizinhança em busca de aventuras. Os desenhos a giz são seu código secreto.', 'Suspense', 'luan Santana - Paulo Afonso / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/ohomemdegiz.jpg'),

('Um estudo em vermelho', 'vender', 'Arthur Conan Doyle', 16.93, 'Holmes é chamado para solucionar o caso de um homem que foi encontrado morto, com uma expressão de terror, mas que não apresenta ferimentos, apenas manchas de sangue pelo corpo.', 'Suspense', 'Emili Fernandes - Feraz / São Paulo', 'http://localhost/Rent-Books/public/imagens/livros/umestudoemvermelho.jpg'),

('As Musas', 'alugar', 'Alex Michaelides', 9.75, 'Edward Fosca é um assassino. Disso Mariana tem certeza. Mas Fosca é intocável. Esse belo e carismático professor de tragédia grega na Universidade de Cambridge é adorado tanto pelos funcionários quanto pelos alunos da instituição.', 'Suspense', 'Ana Camargo - Porto Seguro / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/asmusas.jpg'),

('Mo Dao Zu Shi: O Fundador da Cultivação Demoníaca - Livro 2', 'alugar', 'Mo Xiang Tong Xiu', 9.75, 'Adaptação em quadrinhos da famosa série de livros de mesmo nome! O Patriarca de Yiling, Wei Wuxian, morto há treze anos pela aliança dos principais clãs cultivadores, foi renascido pelo sacrifício de outra pessoa.', 'Mangá', 'Carla Mirela - Brumado / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/modaozushi.jpg'),

('spy x family', 'alugar', 'Tatsuya Endo', 7.99, 'O habilidoso espião "Twilight" é instruído a construir uma "família" para se infiltrar em uma tradicional instituição de ensino.', 'Mangá', 'Maressa Aguiar -Porto-Velho/ Rondônia', 'http://localhost/Rent-Books/public/imagens/livros/spyxfamily.jpg'),

('Vagabond', 'vender', 'Takehiko Inoue', 12.60, '"Vagabond" conta a história desse jovem de espírito forte, que se tornou Miyamoto Musashi, o maior herói do Japão.', 'Mangá', 'Paulo Rocha - Caetité / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/vagabond.jpg'),

('Komi-san wa, Community-shou desu', 'vender', 'Tomohito Oda', 12.60, 'Komi-san é uma bela e admirável garota que ninguém consegue tirar os olhos. Quase todos da escola a veem como alguém fora do alcance, mas Tadano Shigeo sabe a verdade', 'Mangá', 'Joelma Silva - Ilhéus / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/komi.jpg'),

('Solo Leveling', 'vender', 'Kisoryong Chugong', 12.60, 'Um mundo de masmorras e incursões! Do mais fraco ao mais poderoso! Sung Jin-woo é um Caçador rank E sem dinheiro, sem talento, sem nada.', 'Mangá', 'Luan Caires - Livramento de Nossa Senhora / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/sololeveling.jpg'),

('Teoria da Norma Jurídica', 'alugar', 'tercio sampaio', 10.00, 'A Teoria da Norma Jurídica foi o curso ministrado por Norberto Bobbio antes da elaboração de Teoria do Ordenamento Jurídico.', 'Informativo', 'Nivaldo Cerqueira - Brumado / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/teoriadanormajuridica.jpg'),

('Tratado de Fisiologia Médica', 'alugar', 'John E. Hall', 19.00, 'Conhecido e respeitado por seu estilo de apresentação único e pelo foco no conteúdo mais relevante para estudantes da área da Saúde e médicos e profissionais que desejem revisar os princípios básicos necessários para a compreensão da fisiopatologia das doenças humanas, Guyton & Hall.', 'Informativo', 'Brenda Lisboa - Brumado - Bahia', 'http://localhost/Rent-Books/public/imagens/livros/tratadodefisiologiamedica.jpg'),

('Crime e Castigo', 'alugar', 'Paulo Bezerra', 7.84, 'Publicado em 1866, Crime e castigo é a obra mais célebre de Fiódor Dostoiévski. Neste livro, Raskólnikov, um jovem estudante, pobre e desesperado, perambula pelas ruas de São Petersburgo até cometer um crime que tentará justificar por uma teoria.', 'Romance', 'Jairo Correia - Malhada de Pedras / Bahia', 'http://localhost/Rent-Books/public/imagens/livros/crimeecastigo.jpg'),

('Duna', 'alugar', 'Frank Herbert', 7.84, 'Uma estonteante mistura de aventura e misticismo, ecologia e política, este romance ganhador dos prêmios Hugo e Nebula deu início a uma das mais épicas histórias de toda a ficção científica.', 'Fantasia', 'Leonardo Fibonacci - Rio de Janeiro / Rio de Janeiro', 'http://localhost/Rent-Books/public/imagens/livros/duna.jpg');

UPDATE livros SET imagem = 'http://localhost/Rent-Books/public/imagens/livros/ossetemaridosdeevelynhugo.jpg' WHERE idLivro = 24; 

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
