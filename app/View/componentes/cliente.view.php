<?php require "topo.view.php" ?>
    <main>
        <img src="<?=img('rentbooks1.png')?>" id="imgp">

        <h1>PERFIL DO CLIENTE</h1> // tudo da area do cliente, vai ser só desse cliente (usa o id eu acho)

        <div id="pc">

            <h1>Alugados no momento:</h1>
            
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

                <h1>Livros Comprados:</h1>

                <div class="pc_2">
                    <img src="imagens/livros/acorpurpura.jpg" id="lpv2">
                    <h3>A Cor Púrpura - R$18.30</h3>
                    <h2>Alice Walker</h2> //autor(a)
                </div>


            </div>

        <img src="<?=img('romances.png')?>" id="imgp">

    </main>
<?php require "rodape.view.php"?>