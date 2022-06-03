<?php
include "config.php";
include DIR_PATH."./template/header.php";
include DIR_PATH."./template/nav.php";
?>
<style>
    <?php
        include "./template/css/style.css";
    ?>    
</style>
<main>
    <div id="formulario">
    <form action="envio.php" method="post">
        <label for="nome">Nome: </label><br />
        <input type="text" name="nome" placeholder="nome"><br /><br />
        
        <label for="email">Desinatario: </label><br />
        <input type="text" name="email" placeholder="nome"><br /><br />

        <label for="mensagem">Mensagem</label><br />
        <textarea name="msg" placeholder="nome"></textarea><br /><br /><br />
        <button type="submit" name="enviar" >Enviar</button>
    </form>
    </div>
</main>
<?php
require DIR_PATH."/template/footer.php";
?>