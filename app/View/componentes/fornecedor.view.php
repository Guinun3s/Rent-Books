<?php require "topo.view.php"?>
    <main>
        <img src="imagens/rentbooks1.png" id="imgp">

        <h1>ÁREA DO VENDEDOR</h1> // tudo da area do vendedor, vai ser só desse vendedor (usa o id eu acho)

        <div id="p_v">
            <h2>Livros Publicados por José:</h2> //nome da pessoa aqui
            
            <div class="p_v">
                <img src="imagens/livros/acorpurpura.jpg" id="lpv"> //foto do livro publicado pelo vendedor
                <h3>A Cor Púrpura - Vender</h3> //titulo do livro publicado pelo vendedor - Mostra se tá pra alugar ou vender
                <h3>R$18.30</h3> //preco do livro publicado pelo vendedor
            </div>

            <div class="p_v">
                <img src="imagens/livros/alicenopaisdasmaravilhas.jpg" id="lpv">
                <h3>Alice no País das Maravilhas - Alugar por 15 dias</h3>
                <h3>R$3.20</h3>
            </div>

            <div class="p_v">
                <img src="imagens//livros/ohobbit.jpg" id="lpv">
                <h3>O Hobbit - Alugar por 15 dias</h3>
                <h3>R$4.30</h3>
            </div>
        </div>

        //(filtragem pra mostrar só ospra alugar ou só os pra vender)

        <div id="pv2">

            <h1>Livros que estão alugados no momento:</h1>

            <div id="p_v2">

                <img src="imagens/livros/alicenopaisdasmaravilhas.jpg" id="lpv">

                <div>
                    <h3>Alice no País das Maravilhas - R$3.20</h3> //aqui já não precisa mais do - alugado/vendido
                    <h2>Alugado por Antônia - Paraíba / Bahia</h2> //a pessoa que alugou, se possível
                    <h2>Devolução em: 12/12/1212</h2> //data da devolução
                </div>

            </div>

        </div>

        <div id="pc">

            <h1>Alugados por você no momento:</h1>
            
            <div id="pc1">
                <img src="imagens/livros/alicenopaisdasmaravilhas.jpg" id="lpv">

                <div>
                    <h3>Alice no País das Maravilhas - R$3.20</h3>
                    <h2>De Antônia - Paraíba / Bahia</h2> //a pessoa que ta disponibilizando, se possível
                    <h2>Devolução em: 12/12/1212</h2> //data da devolução
                </div>

            </div>

        </div>

            <div id="pc2">

                <h1>Livros comprados por você:</h1>

                <div class="pc_2">
                    <img src="imagens/livros/acorpurpura.jpg" id="lpv2">
                    <h3>A Cor Púrpura - R$18.30</h3>
                    <h2>Alice Walker</h2> //autor(a)
                </div>


            </div>

        <img src="imagens/romances.png" id="imgp">

    </main>
<?php require "rodape.view.php"?>