<?php
/* Smarty version 3.1.30, created on 2020-08-05 10:19:24
  from "C:\xampp\htdocs\projet_samane\samane\src\view\physique\clientPhysique.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2a6b8cd5ede9_34928962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '592e6d9ac93a4858540dcaa58ad3f26510c80e51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_samane\\samane\\src\\view\\physique\\clientPhysique.html',
      1 => 1596615479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2a6b8cd5ede9_34928962 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css" />
        <title>Connexion BD</title>
    </head>
    <body>
        <div id="container">
            <header>
                <div id="entete">
                    <img alt="logo" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo bancaire.jpg" id="img1" />
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
                <form id="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/Physique/clientPhysique">
                    <fieldset id="field1">
                        <legend id="legend1">Informations Client</legend>
                        <div id="infoClient">
                                <span id="ErrorTypeClient"></span>
                            <div id="infoClient1">
                                <label for="numCni" id="lab1">Numéro CNI* : </label>
                                <input type="text" id="numCni" name="numCni" value="" placeholder="Numéro CNI" />
                                <span id="ErrorCni"></span>
                                <label for="nom" id="lab2">Nom* : </label>
                                <input type="text" id="nom" name="nom" value="" placeholder="Nom" />
                                <span id="ErrorNom"></span>
                                <label for="prenom" id="lab3">Prenom* : </label>
                                <input type="text" id="prenom" name="prenom" value="" placeholder="Prenom" />
                                <span id="ErrorPrenom"></span>
                                <label for="civilite" id="labc">civilité* : </label>
                                <select id="civilite" name="civilite" value="">
                                    <option>--Sélectionner votre civilité--</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Melle">Melle</option>
                                    <option value="Mdme">Mdme</option>
                                </select>
                            </div>
                            <div id="infoClient2">
                                <label for="DateDeNaissance" id="lab1">Date de naissance* : </label>
                                <input type="date" id="DateDeNaissance" name="DateDeNaissance" value="" placeholder="Date de naissance" />
                                <span id="ErrorDateNaissance"></span>
                                <label for="adresse" id="lab1">Adresse* : </label>
                                <input type="text" id="adresse" name="adresse" value="" placeholder="Adresse" />
                                <span id="ErrorAdresse"></span>
                                <label for="email" id="lab1">Email : </label>
                                <input type="email" id="email" name="email" value="" placeholder="Email" />
                                <span id="ErrorEmail"></span>
                                <label for="tel" id="lab1">Téléphone* :</label>
                                <input type="tel" id="telephone" name="telephone" value="" placeholder="Téléphone" />
                                <span id="ErrorTelephone"></span>
                            </div>
                      </div>
                    </fieldset>
                    <br />
                        <input type="submit" name="btn2" value="Valider" id="btn2" /><br />
                        <span id="ErrorC"></span>
                </form>
            </main>

            <footer>
            </footer>

        </div>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/app.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
