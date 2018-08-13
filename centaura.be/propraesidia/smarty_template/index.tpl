<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=1, user-scalable=0"/> <!--320-->
    <title>Centaura - Praesidium {$jaar}</title>
      <link href="style.css" rel="stylesheet" type="text/css" />

<link rel="icon" type="image/png" href="http://www.centaura.be/wp-content/uploads/2013/05/favicon.png" />
<link rel="shortcuticon" type="image/png" href="http://www.centaura.be/wp-content/uploads/2013/05/favicon.png" />
    <script type="text/javascript" src="javascript/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="javascript/app.js"></script>

</head>
<body>


<div id="headercontainer">
<h1>Centaura</h1>
<h2>praesidium {$jaar}</h2>



</div>

<div id="anderekeuze">
    <a id="anderekeuzelink" href="index.php?page=choose">ander praesidium jaar</a>
    <div id="anderjaar">
        <ul>
            {foreach $jaren as $jaar}

                <li><a href="index.php?jaar={$jaar}">{$jaar}</a></li>
            {/foreach}



        </ul>
<div id="clear"></div>
</div>
</div>


<div id="contentcontainer">
    <ul>

        {foreach $pres as $lid}

            <li class="firstli">
              <ul>
                  <li class="lidfunctie">{$lid.functie}</li>
                  <li class="lidnaam">{$lid.voornaam} {$lid.achternaam} {if {$lid.bijnaam} != ""}
                      ( {$lid.bijnaam} ){/if}</li>
              </ul>
          </li>
        {/foreach}



    </ul>
    
    <a id="terug" href="http://www.centaura.be">terug naar de site</a>
</div>
</body>
</html>