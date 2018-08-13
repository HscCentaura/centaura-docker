<?php




    $PraesideaDAO = new PreasideaDAO();



    $jarenlijst = $PraesideaDAO->getYears();





    if(isset($_GET["jaar"]) && in_array($_GET["jaar"],$jarenlijst)){
        $jaar = $_GET["jaar"];
    }else{
        $jaar = "2015";
    }

    $praesidium = $PraesideaDAO->getPerYear($jaar);






    $smarty->assign("pres",$praesidium);
    $smarty->assign("jaren",$jarenlijst);
    $smarty->assign("jaar",$jaar);

?>
