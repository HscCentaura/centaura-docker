<?php /* Smarty version Smarty-3.1.8, created on 2016-07-14 15:08:18
         compiled from "smarty_template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9856474695280272e224c33-85669905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c88b9ed80ba2050172d9b565388a0bb34cced346' => 
    array (
      0 => 'smarty_template/index.tpl',
      1 => 1466858609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9856474695280272e224c33-85669905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5280272e2eaee0_58787971',
  'variables' => 
  array (
    'jaar' => 0,
    'jaren' => 0,
    'pres' => 0,
    'lid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5280272e2eaee0_58787971')) {function content_5280272e2eaee0_58787971($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=1, user-scalable=0"/> <!--320-->
    <title>Centaura - Praesidium <?php echo $_smarty_tpl->tpl_vars['jaar']->value;?>
</title>
      <link href="style.css" rel="stylesheet" type="text/css" />

<link rel="icon" type="image/png" href="http://www.centaura.be/wp-content/uploads/2013/05/favicon.png" />
<link rel="shortcuticon" type="image/png" href="http://www.centaura.be/wp-content/uploads/2013/05/favicon.png" />
    <script type="text/javascript" src="javascript/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="javascript/app.js"></script>

</head>
<body>


<div id="headercontainer">
<h1>Centaura</h1>
<h2>praesidium <?php echo $_smarty_tpl->tpl_vars['jaar']->value;?>
</h2>



</div>

<div id="anderekeuze">
    <a id="anderekeuzelink" href="index.php?page=choose">ander praesidium jaar</a>
    <div id="anderjaar">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['jaar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jaar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jaren']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jaar']->key => $_smarty_tpl->tpl_vars['jaar']->value){
$_smarty_tpl->tpl_vars['jaar']->_loop = true;
?>

                <li><a href="index.php?jaar=<?php echo $_smarty_tpl->tpl_vars['jaar']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['jaar']->value;?>
</a></li>
            <?php } ?>



        </ul>
<div id="clear"></div>
</div>
</div>


<div id="contentcontainer">
    <ul>

        <?php  $_smarty_tpl->tpl_vars['lid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lid']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lid']->key => $_smarty_tpl->tpl_vars['lid']->value){
$_smarty_tpl->tpl_vars['lid']->_loop = true;
?>

            <li class="firstli">
              <ul>
                  <li class="lidfunctie"><?php echo $_smarty_tpl->tpl_vars['lid']->value['functie'];?>
</li>
                  <li class="lidnaam"><?php echo $_smarty_tpl->tpl_vars['lid']->value['voornaam'];?>
 <?php echo $_smarty_tpl->tpl_vars['lid']->value['achternaam'];?>
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['lid']->value['bijnaam'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=''){?>
                      ( <?php echo $_smarty_tpl->tpl_vars['lid']->value['bijnaam'];?>
 )<?php }?></li>
              </ul>
          </li>
        <?php } ?>



    </ul>
    
    <a id="terug" href="http://www.centaura.be">terug naar de site</a>
</div>
</body>
</html><?php }} ?>