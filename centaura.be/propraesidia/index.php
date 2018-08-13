<?php



    include_once "smarty/libs/Smarty.class.php";

    include "classes/Config.php";
    include "classes/DatabasePDO.php";
    include "classes/PraesideaDAO.php";



    $smarty = new Smarty();
    $smarty->setTemplateDir("smarty_template");
    $smarty->setCompileDir("smarty_compile");

    include "includes/Praesidium.php";






	



            $smarty->display("index.tpl");







?>
