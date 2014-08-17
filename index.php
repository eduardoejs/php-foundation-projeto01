<?php
    /* Ativa as diretivas para exibição de avisos e erros que o sistema está tendo */
    /*ini_set('display_errors', true);
    error_reporting(E_ALL | E_STRICT);*/
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

    <?php
        if(!isset($_GET['page'])){
            require_once("paginas/home.php");
        }else{
            if (file_exists("paginas/".$_GET['page'].".php")){
                require_once("paginas/".$_GET['page'].".php");
            }else{
                require_once("paginas/404.php");
            }

        }
    ?>

</div>

<?php require_once("estrutura/footer.php"); ?>



