<?php
/* Smarty version 3.1.30, created on 2020-08-05 10:51:03
  from "C:\xampp\htdocs\projet_samane\samane\src\view\physique\client.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2a72f7a314f4_51432569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10f73f4a97dd2f1690ef6710cf19923524b85c62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_samane\\samane\\src\\view\\physique\\client.html',
      1 => 1596617462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2a72f7a314f4_51432569 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link type="text/css" rel="stylesheet" href="style.css" />
        <title>Connexion BD</title>
    </head>
    <body>
        <div id="container">
            <header>
                <div id="entete">
                    <img alt="logo" src="images/logo bancaire.jpg" id="img1" />
                    <div id="text1"><h2>Bienvenue à la banque du peuple</h2></div>
                </div>
                    <div id="lien">
                        <ul id="naviguer">
                            <li><a href="#">Home</a></li>
                            <li><a href="List_Client_Physique.php">Clients physiques</a></li>
                            <li><a href="List_Client_Moral.php">Clients morals</a></li>
                            <li><a href="List_compte.php">Comptes</a></li>
                        </ul>
                    </div>
                    <br />
            </header>


            <main>
                <div id="text2">
                    <h2>Ouverture de compte</h2>
                </div>
                <nav>
                    <ul id="navigation">
                        <li><a href="client.php">Client</a></li>
                        <li><a href="compte.php">Compte</a></li>
                    </ul>
                </nav>
                <br />
                <form id="form1" method="post" action="../Controller/control_physique.php">
                    <fieldset id="field1">
                        <legend id="legend1">Choix du type de client</legend>
                        <div id="infoClient">
                            <div id="infoClient1">
                                <label for="TypeClient">Type Client* : </label>
                                <select id="TypeClient" name="TypeClient" value="" onChange="location = this.options[this.selectedIndex].value;" onchange="testClient()">
                                    <option>--Sélectionner un type de client--</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/physique/clientPhysique.html">Client physique</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/moral/clientMoral.html">Client moral</option>
                                </select>
                                <span id="ErrorTypeClient"></span>
                    </fieldset>
                    <br />
                    <br />
                        <span id="ErrorC"></span>
                </form>
            </main>

            <footer>
            </footer>

        </div>
    </body>
</html><?php }
}
