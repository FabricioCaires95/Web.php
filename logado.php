<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Controlrent</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="script/jquery-3.1.1.min.js"> </script>

        
        <script>
            $(document).ready(function(){
                $(".btnmenu").click(function(){
                    $("#menuLateral").fadeToggle(500);
                });
            });
        </script>
        
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="menu">
            <img src="img/menubt.png" class="btnmenu" name="btnmenu">
            <span class="sair">()Sair </span>
            <span class="bemvindo">Bem vindo ao Controlrent ! </span> 
            
        </div>
        
        <div id="menuLateral" name="menuLateral">
            <div >
                <ul style="list-style-type: none;">
                    <li> Menu principal </li>
                    <li> Verificar imóveis </li>
                    <li> Incluir imóveis</li>
                    <li> Remover imóveis</li>
                    <li> Grade de pagamento</li>

                </ul>
            </div>
        </div>
        
    </body>
</html>
