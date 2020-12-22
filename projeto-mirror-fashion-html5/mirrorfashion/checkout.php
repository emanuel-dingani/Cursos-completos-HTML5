<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Mirror Fashion</title>
    <link rel="stylesheet" href="css/bootstrap-flatly.css">
    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>

    <nav class="navbar navbar-inverse navbar navbar-fixed-top">
        <div class="navbar-header">
            <a href="homepage.php" class="navbar-brand"><img src="img/logo-rodape.png" alt=""></a>
            <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse" >
                <span class="glyphicon glyphicon-align-justify"></span>
            </button>
        </div>
        <ul class="nav navbar-nav collapse navbar-collapse">
            <li><a href="sobre.html"><span class="glyphicon glyphicon-home"></span> Sobre</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Ajuda</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Perguntas Frequentes</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Entre em contato</a></li>
        </ul>
    </nav>
    <div class="jumbotron">
        <div class="container">
            <h1>Ótima escolha!</h1>
            <p>Obrigado por comprar na Mirror Fashion!
            Preencha seus dados para efetivar a compra.</p>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-lg-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2 class="panel-title">Sua compra</h2>
                    </div>
                    <div class="panel-body">
                        <img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" alt="<?= $_POST["nome"] ?>" class="img-thumbnail img-responsive hidden-xs">
                        <dl>
                            <dt>Produto</dt>
                            <dd><?= $_POST["nome"] ?></dd>

                            <dt>Cor</dt>
                            <dd><?= $_POST["cor"] ?></dd>
                            
                            <dt>Tamanho</dt>
                            <dd><?= $_POST["tamanho"] ?></dd>
                            
                            <dt>Preço</dt>
                            <dd><?= $_POST["preco"] ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
                <form action="" method="post" class="col-sm-8 col-lg-9">
                    <div class="row">   
                        <fieldset class="col-md-6">
                            <legend>Dados pessoais</legend>

                            <div class="form-group">
                                <label for="nome">Nome completo</label>
                                <input type="text" class="form-control" name="nome" id="nome" autofocus required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email</label>

                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" class="form-control" placeholder="email@exemplo.com" name="email" id="email">
                            
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" data-mask="999.999.999-99" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" required>
                            </div>
                            <div class="checkbox">
                                <label for="spam">
                                    <input type="checkbox" value="sim" name="spam" checked>
                                    Quero receber spam da Mirror Fashion
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="col-md-6">
                            <legend>Cartão de credito</legend>

                            <div class="form-group">
                                <label for="numero-cartao">Número - CVV</label>
                                <input type="text" data-mask="9999 9999 9999 9999 - 999" class="form-control" name="numero-cartao" id="numero-cartao">
                            </div>

                            <div class="form-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <select class="form-control" name="bandeira-cartao" id="bandeira-cartao">
                                    <option value="master">MasterCard</option>
                                    <option value="visa">VISA</option>
                                    <option value="amex">American Express</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="validade-cartao">Validade</label>
                                <input type="month" class="form-control" name="validade-cartao" id="validade-cartao">
                            </div>
                        </fieldset>
                    </div>

                        <button type="submit" class="btn btn-primary btn-lg pull-right">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            Confirmar Pedido
                        </button>
                </form>
        </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/inputmask-plugin.js"></script>
</body>
</html>