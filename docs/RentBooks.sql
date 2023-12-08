-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2023 às 20:49
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rentbooks`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `idEmprestimo` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idLivro` int(11) NOT NULL,
  `dataDevolucao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `idLivro` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `modo` varchar(10) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `preco` float NOT NULL,
  `descricao` varchar(225) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`idLivro`, `titulo`, `modo`, `autor`, `preco`, `descricao`, `genero`, `imagem`, `idUsuario`) VALUES
(1, 'A biblioteca da Meia-noite', 'vender', 'Matt Haigh', 22.99, 'Aos 35 anos, Nora Seed é uma mulher cheia de talentos e poucas conquistas.', 'fantasia', 'http://localhost/Rent-Books/public/imagens/livros/abibliotecadameianoite.jpg', 1),
(2, 'A Garota do Lago', 'vender', 'Charlie Donlea', 8, 'A Garota do Lago é um romance policial escrito por Charlie Donlea.', 'suspense', 'http://localhost/Rent-Books/public/imagens/livros/agarotadolago.jpg', 1),
(3, 'Até o Verão terminar', 'alugar', 'Colleen Hoover', 5.3, 'Filha de uma mãe problemática e um pai ausente, Beyah precisou aprender a se virar sozinha desde pequena. Sua vida foi trilhada com muitas decepeções. ', 'romance', 'http://localhost/Rent-Books/public/imagens/livros/ateoveraoterminar.jpg', 1),
(4, 'Memórias Póstumas de Brás Cubas', 'vender', 'Machado de Assis', 20, 'Após ter morrido, em pleno ano de 1869, Brás Cubas decide narrar sua história e revisitar os fatos mais importantes de sua vida, a fim de se distrair na eternidade.', 'ficção', 'http://localhost/Rent-Books/public/imagens/livros/memoriaspostumasdebrascubas.jpg', 1),
(5, 'A vida invisível de Addie LaRue', 'alugar', 'V.E Schwab', 6.9, 'Uma jornada inspirada no mito faustiano sobre busca e perda, eternidade e finitude e, acima de tudo, uma questão: até onde se vai para alcançar a liberdade? A vida invisível de Addie LaRue é um livro inesquecível e que coloco', 'romance', 'http://localhost/Rent-Books/public/imagens/livros/avidainvisiveldeaddielarie.jpg', 1),
(6, 'Caixa de Pássaros', 'vender', 'Josh Malerman', 16.99, '\"Caixa de Pássaros\" é um thriller emocionante e perturbador que mantém os leitores à beira de seus assentos enquanto acompanham a luta desesperada de Malorie e seus filhos para sobreviver em um mundo onde abrir os olhos pode ', 'suspense', 'http://localhost/Rent-Books/public/imagens/livros/birdbox.jpg', 1),
(7, 'Como Programar C++ 5° Edição', 'alugar', 'DEITEL', 7.8, 'O livro \"Como Programar C++\" é amplamente conhecido por ser um guia abrangente e didático para aprender a linguagem de programação C++. Ele é direcionado tanto para iniciantes quanto para programadores mais experientes que de', 'informativo', 'http://localhost/Rent-Books/public/imagens/livros/comoprogramarc.jpg', 1),
(8, 'Orgulho e Preconceito', 'vender', 'Jane Austen', 20.99, 'Muitos desses aspectos da trama conduzem os personagens ao autoconhecimento e ao amor. O livro pode ser considerado a obra prima da escritora, que equilibra comédia com seriedade, observação meticulosa das atitudes humanas e ', 'romance', 'http://localhost/Rent-Books/public/imagens/livros/orgulhoepreconceito.jpg', 1),
(9, 'TDAH', 'aluguar', 'Sharon Saline', 7, 'TDAH: tudo o que seu filho com Transtorno de Déficit de Atenção e Hiperatividade quer que você saiba não é apenas mais um livro escrito para pais e mães cujo filho foi diagnosticado com TDAH.', 'informativo', 'http://localhost/Rent-Books/public/imagens/livros/tdah.jpg', 1),
(10, 'Cuidado com Quem te Ama!', 'vender', 'Tiago Correia', 36.99, '“Cuidado com quem te ama”, segundo o autor, que é professor e doutorando em literatura e cultura pela UFBA, se caracteriza por ser uma antologia que reúne poemas escritos ao longo dos últimos cincos anos.', 'Poesia', 'http://localhost/Rent-Books/public/imagens/livros/cuidadocomquemteama.jpg', 1),
(11, 'Dom Casmurro', 'vender', 'Machado de assis', 7.8, 'Em Dom Casmurro, o narrador Bento Santiago retoma a infância que passou na Rua de Matacavalos e conta a história do amor e das desventuras que viveu com Capitu, uma das personagens mais enigmáticas e intrigantes da literatura', 'classico', 'http://localhost/Rent-Books/public/imagens/livros/domcasmurro.jpg', 1),
(12, 'É assim que aprendemos', 'alugar', 'Stanislas Dehaene', 7.8, 'É assim que aprendemos vai até os limites da ciência da computação, da neurobiologia e da psicologia cognitiva para explicar como o aprendizado realmente acontece.', 'informativo', 'http://localhost/Rent-Books/public/imagens/livros/eassimqueaprendemos.jpg', 1),
(13, 'Haikyu 1', 'alugar', 'Haruichi Furudate', 4.8, 'Shoyo Hinata e Tobio Kageyama, dois garotos fascinados pelo vôlei. A diferença é que Kageyama é um levantador talentoso, e Hinata, um atacante de baixa estatura para um jogador.', 'Mangá', 'http://localhost/Rent-Books/public/imagens/livros/haikyu1.jpg', 1),
(14, 'Harry Potter e o enigma do principe', 'vender', 'J. K. Rowling', 10.59, 'A onda de terror provocada pelo Lorde das Trevas estaria afetando, até mesmo, o mundo dos trouxas (não-bruxos), e sendo agravada pela ação dos dementadores, criaturas mágicas aterrorizantes que \"sugam\" a esperança e a felicid', 'Fantasia', 'http://localhost/Rent-Books/public/imagens/livros/harrypottereoenigmadoprincipe.jpg', 1),
(15, 'Java como programar', 'alugar', 'Paul. J Deite', 13.29, 'Milhões de alunos e profissionais aprenderam programação e desenvolvimento de software com os livros Deitel. Java: como programar, 10ª edição, fornece uma introdução clara, simples, envolvente e divertida à programação Java c', 'Informativo', 'http://localhost/Rent-Books/public/imagens/livros/javacomoprogramar.jpg', 1),
(16, 'Mentirosos', 'vender', 'E. Lockhart', 24.49, 'Um suspense moderno e sofisticado, Mentirosos é impossível de largar até que todos seus mistérios sejam desvendados.', 'Suspense', 'http://localhost/Rent-Books/public/imagens/livros/mentirosos.jpg', 1),
(17, 'Nárnia', 'vender', 'C. S. Lewis', 24.49, 'Viagens ao fim do mundo, criaturas fantásticas e batalhas épicas entre o bem e o mal - o que mais um leitor poderia querer de um livro?', 'fantasia', 'http://localhost/Rent-Books/public/imagens/livros/narnia.jpg', 1),
(18, 'Naruto', 'vender', 'Masashi Kishimoto', 13, 'Naruto, Sasuke e Sakura são testados por Kakashi-sensei!! Se passarem nessa difícil prova, eles se tornarão Genins – ninjas aprendizes!', 'Mangá', 'http://localhost/Rent-Books/public/imagens/livros/naruto.jpg', 1),
(19, 'Os Primos', 'alugar', 'Karen M. McManus', 16.99, 'Milly, Aubrey e Jonah recebem um convite inusitado: passar o verão no resort da avó que nunca viram na vida. Seus pais acreditam que é a oportunidade perfeita para fazer as pazes com a rica e excêntrica Mildred Story, que cor', 'suspense', 'http://localhost/Rent-Books/public/imagens/livros/osprimos.jpg', 1),
(20, 'Os 7 maridos de Evelyn Hugo', 'alugar', 'Taylor Jenkins Reid', 16.99, 'Lendária estrela de Hollywood, Evelyn Hugo sempre esteve sob os holofotes ― seja estrelando uma produção vencedora do Oscar, protagonizando algum escândalo ou aparecendo com um novo marido… pela sétima vez.', 'Romance', 'http://localhost/Rent-Books/public/imagens/livros/ossetemaridosdeevelynhugo.jpg', 1),
(21, 'Sol da meia noite', 'vender', 'Stephenie Meyer', 20.99, 'Desde a primeira troca de olhares, ele fez tudo para ficar longe dela, mas e se as coisas não tiverem acontecido exatamente assim?', 'Romance', 'http://localhost/Rent-Books/public/imagens/livros/soldameianoite.jpg', 1),
(22, 'Todo esse tempo', 'vender', 'Mikki Daughtry e Rachael Lippincott', 22.9, 'Kyle e Kimberly são o casal perfeito. Pelo menos, é o que Kyle acha. Por isso, quando Kimberly termina com ele na noite da festa de formatura, o mundo inteiro do garoto vira de cabeça para baixo - literalmente.', 'Romance', 'http://localhost/Rent-Books/public/imagens/livros/todoessetempo.jpg', 1),
(23, 'O cérebro de Buda', 'alugar', 'Richard Mendius e Rick hanson', 19.32, 'O livro mostra como modificar e treinar o fluxo de pensamentos para ativar respostas positivas, com calma e compaixão, em vez de reações negativas, cheias de raiva e angústia.', 'Informativo', 'http://localhost/Rent-Books/public/imagens/livros/ocerebrodebuda.jpg', 1),
(24, 'Uma mulher no escuro', 'alugar', 'Raphael Montes', 12.74, 'Victoria Bravo tinha quatro anos quando um homem invadiu sua casa e matou sua família a facadas, pichando seus rostos com tinta preta. Única sobrevivente, ela agora é uma jovem solitária e tímida, com pesadelos frequentes e s', 'Suspense', 'http://localhost/Rent-Books/public/imagens/livros/umamulhernoescuro.jpg', 1),
(25, 'Um de nós está mentindo', 'alugar', 'Karen M. McManus', 8.25, 'Numa tarde de segunda-feira, cinco estudantes do colégio Bayview entram na sala de detenção - Bronwyn, a gênia, comprometida a estudar em Yale, nunca quebra as regras.', 'Suspense', 'http://localhost/Rent-Books/public/imagens/livros/umdenosestamentindo.jpg', 1),
(26, 'It - A coisa', 'vender', 'Stephen King', 40, 'Durante as férias de 1958, em uma pacata cidadezinha chamada Derry, um grupo de sete amigos começa a ver coisas estranhas.', 'Suspense', 'http://localhost/Rent-Books/public/imagens/livros/itacoisa.jpg', 1),
(27, 'A seleção', 'vender', 'Kiera Cass', 17, 'Para trinta e cinco garotas, a Seleção é a chance de uma vida. É a oportunidade de ser alçada a um mundo de vestidos deslumbrantes e joias valiosas.', 'Suspense', 'http://localhost/Rent-Books/public/imagens/livros/tetoparadois.jpg', 1),
(28, 'O conto da Aia', 'alugar', 'Margaret Atwood', 7, 'O romance distópico O conto da aia, de Margaret Atwood, se passa num futuro muito próximo e tem como cenário uma república onde não existem mais jornais, revistas, livros nem filmes.', 'fantasia', 'http://localhost/Rent-Books/public/imagens/livros/ocontodaaia.jpg', 1),
(29, 'Romeu e julieta', 'alugar', 'William Shakespeare', 7, 'Há muito tempo duas famílias banham em sangue as ruas de Verona. Enquanto isso, na penumbra das madrugadas, ardem as brasas de um amor secreto.', 'romance', 'http://localhost/Rent-Books/public/imagens/livros/romeuejulieta.jpg', 1),
(30, 'Água Para Elefantes', 'alugar', 'Sara Gruen', 7, 'Desde que perdeu sua esposa, Jacob Jankowski vive numa casa de repouso, cercado por senhoras simpáticas, enfermeiras solícitas e fantasmas do passado.', 'romance', 'http://localhost/Rent-Books/public/imagens/livros/aguaparaelefantes.jpg', 1),
(31, 'O Homem de Giz', 'vender', 'C. J. Tudor', 26.84, 'Em 1986, Eddie e os amigos passam a maior parte dos dias andando de bicicleta pela pacata vizinhança em busca de aventuras. Os desenhos a giz são seu código secreto.', 'Suspense', 'http://localhost/Rent-Books/public/imagens/livros/ohomemdegiz.jpg', 1),
(32, 'O Homem de Giz', 'vender', 'C. J. Tudor', 26.84, 'Em 1986, Eddie e os amigos passam a maior parte dos dias andando de bicicleta pela pacata vizinhança em busca de aventuras. Os desenhos a giz são seu código secreto.', 'Suspense', 'http://localhost/Rent-Books/public/imagens/livros/ohomemdegiz.jpg', 1),
(33, 'Um estudo em vermelho', 'vender', 'Arthur Conan Doyle', 16.93, 'Holmes é chamado para solucionar o caso de um homem que foi encontrado morto, com uma expressão de terror, mas que não apresenta ferimentos, apenas manchas de sangue pelo corpo.', 'Suspense', 'http://localhost/Rent-Books/public/imagens/livros/umestudoemvermelho.jpg', 1),
(34, 'As Musas', 'alugar', 'Alex Michaelides', 9.75, 'Edward Fosca é um assassino. Disso Mariana tem certeza. Mas Fosca é intocável. Esse belo e carismático professor de tragédia grega na Universidade de Cambridge é adorado tanto pelos funcionários quanto pelos alunos da institu', 'Suspense', 'http://localhost/Rent-Books/public/imagens/livros/asmusas.jpg', 1),
(35, 'Mo Dao Zu Shi: O Fundador da Cultivação Demoníaca - Livro 2', 'alugar', 'Mo Xiang Tong Xiu', 9.75, 'Adaptação em quadrinhos da famosa série de livros de mesmo nome! O Patriarca de Yiling, Wei Wuxian, morto há treze anos pela aliança dos principais clãs cultivadores, foi renascido pelo sacrifício de outra pessoa.', 'Mangá', 'http://localhost/Rent-Books/public/imagens/livros/modaozushi.jpg', 1),
(36, 'spy x family', 'alugar', 'Tatsuya Endo', 7.99, 'O habilidoso espião \"Twilight\" é instruído a construir uma \"família\" para se infiltrar em uma tradicional instituição de ensino.', 'Mangá', 'http://localhost/Rent-Books/public/imagens/livros/spyxfamily.jpg', 1),
(37, 'Vagabond', 'vender', 'Takehiko Inoue', 12.6, '\"Vagabond\" conta a história desse jovem de espírito forte, que se tornou Miyamoto Musashi, o maior herói do Japão.', 'Mangá', 'http://localhost/Rent-Books/public/imagens/livros/vagabond.jpg', 1),
(38, 'Komi-san wa, Community-shou desu', 'vender', 'Tomohito Oda', 12.6, 'Komi-san é uma bela e admirável garota que ninguém consegue tirar os olhos. Quase todos da escola a veem como alguém fora do alcance, mas Tadano Shigeo sabe a verdade', 'Mangá', 'http://localhost/Rent-Books/public/imagens/livros/komi.jpg', 1),
(39, 'Solo Leveling', 'vender', 'Kisoryong Chugong', 12.6, 'Um mundo de masmorras e incursões! Do mais fraco ao mais poderoso! Sung Jin-woo é um Caçador rank E sem dinheiro, sem talento, sem nada.', 'Mangá', 'http://localhost/Rent-Books/public/imagens/livros/sololeveling.jpg', 1),
(40, 'Teoria da Norma Jurídica', 'alugar', 'tercio sampaio', 10, 'A Teoria da Norma Jurídica foi o curso ministrado por Norberto Bobbio antes da elaboração de Teoria do Ordenamento Jurídico.', 'Informativo', 'http://localhost/Rent-Books/public/imagens/livros/teoriadanormajuridica.jpg', 1),
(41, 'Tratado de Fisiologia Médica', 'alugar', 'John E. Hall', 19, 'Conhecido e respeitado por seu estilo de apresentação único e pelo foco no conteúdo mais relevante para estudantes da área da Saúde e médicos e profissionais que desejem revisar os princípios básicos necessários para a compre', 'Informativo', 'http://localhost/Rent-Books/public/imagens/livros/tratadodefisiologiamedica.jpg', 1),
(42, 'Crime e Castigo', 'alugar', 'Paulo Bezerra', 7.84, 'Publicado em 1866, Crime e castigo é a obra mais célebre de Fiódor Dostoiévski. Neste livro, Raskólnikov, um jovem estudante, pobre e desesperado, perambula pelas ruas de São Petersburgo até cometer um crime que tentará justi', 'Romance', 'http://localhost/Rent-Books/public/imagens/livros/crimeecastigo.jpg', 1),
(43, 'Duna', 'alugar', 'Frank Herbert', 7.84, 'Uma estonteante mistura de aventura e misticismo, ecologia e política, este romance ganhador dos prêmios Hugo e Nebula deu início a uma das mais épicas histórias de toda a ficção científica.', 'Fantasia', 'http://localhost/Rent-Books/public/imagens/livros/duna.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `vendedor` int(11) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `estado` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `dataNascimento`, `telefone`, `cpf`, `email`, `senha`, `vendedor`, `cep`, `cidade`, `rua`, `bairro`, `estado`) VALUES
(1, 'Thiago Miranda dos Santos Souza', '1984-06-20', '7788171554', '01318607558', 'mirandathiago@gmail.com', '12345678', 1, '45051-050', 'VITORIA DA CONQUISTA', 'Rua X', 'X', 'BA'),
(2, 'Guilherme Nunes Cangussu', '2023-11-30', '77988720209', '22222222222', 'guilhermenunes3466@gmail.com', '12345678', 1, '46205000', 'Guajeru', 'Chama', 'Centro', 'BA');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`idEmprestimo`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`idLivro`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `idEmprestimo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
