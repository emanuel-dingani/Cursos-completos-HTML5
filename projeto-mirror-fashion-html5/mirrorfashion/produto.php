
    <div class="main">
       <?php 
       $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
       $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
       $produto = mysqli_fetch_array($dados);
       $nome = $produto["nome"];
       $cabecalho_title = "Produto da Mirror Fashion: $nome";
       $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
       include("cabecalho.php"); 
       ?>
    </div>  
    <div class="produto-back">
        <div class="container">
            <div class="produto">
                <h1><?= $produto["nome"] ?></h1>
                <p>por apenas R$ <?= $produto["preco"] ?></p>
                <div class="fb-like" data-href="http://mirrorfashion.net/loja"
data-send="false" data-layout="box_count"
data-width="58" data-show-faces="false">botao</div>
                <form action="checkout.php" method="POST">
                   
                    <fieldset class="cores">
                        <legend>Escolha a cor:</legend>

                        <input type="radio" name="cor" value="verde" id="verde" checked>
                        <label for="verde">
                            <img src="img/produtos/foto<?= $produto["id"] ?>-verde.png" alt="verde">
                        </label>

                        <input type="radio" name="cor" value="rosa" id="rosa">
                        <label for="rosa">
                            <img src="img/produtos/foto<?= $produto["id"] ?>-rosa.png" alt="rosa">
                        </label>

                        <input type="radio" name="cor" value="azul" id="azul">
                        <label for="azul">
                            <img src="img/produtos/foto<?= $produto["id"] ?>-azul.png" alt="azul">
                        </label>
                        
                    </fieldset>
                    <fieldset class="tamanhos">
                        <legend>Escolha o tamanho</legend>
                        <input type="range" name="tamanho" id="tamanho" min="36" max="46" value="42" step="2" >
                        <output for="tamanho" name="valortamanho">42</output>
                    </fieldset>
                    <input type="submit" class="comprar" value="Comprar">
                </form>
            </div>
            <div class="detalhes">
                <h2>Detalhes do produto</h2>
                <p><?= $produto["descricao"] ?></p>
                <table>
                    <thead>
                        <tr>
                            <th>Carateristica</th>
                            <th>Detalhe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Modelo</td>
                            <td>Cartigã e poliester</td>
                        </tr>
                        <tr>
                            <td>Cores</td>
                            <td>Azul, Rosa e Verde</td>
                        </tr>
                        <tr>
                            <td>Lavagem</td>
                            <td>Lavar a mão</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    <?php include("rodape.php") ?>
</body>
</html>