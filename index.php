<?php
    /* Ativa as diretivas para exibição de avisos e erros que o sistema está tendo */
    /*ini_set('display_errors', true);
    error_reporting(E_ALL | E_STRICT);*/

    /* Redirecionamento: rotas para o arquivo index.php */
    $url = parse_url("http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
    $path = explode('/',$url['path'],2);

    $rotas_sistema = ["home", "empresa", "produtos", "servicos", "contato"];

    function validar_rotas($rota) {

        $rotas_sistema = ["home", "empresa", "produtos", "servicos", "contato"];

        if (in_array($rota[1], $rotas_sistema)):
            return require_once('paginas/'.$rota[1].".php");
        elseif ($rota[1] == ""):
            return require_once('paginas/home.php');
        else:
            http_response_code(404);
            return require_once('paginas/404.php');
        endif;
    }
?>
<?php require_once("estrutura/header.php"); ?>

<?php require_once("estrutura/menu-superior.php"); ?>

<div id="conteudo">
    <div class="container">
        <div class="row">
            <div class="col-md-6">.</div>
            <div class="col-md-6">.</div>
        </div>
    </div>

    <?php validar_rotas($path); ?>

</div>

<?php require_once("estrutura/footer.php"); ?>



