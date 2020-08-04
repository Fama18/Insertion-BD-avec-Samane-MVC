<?php
/* Smarty version 3.1.30, created on 2020-08-04 11:01:19
  from "C:\xampp\htdocs\projet_samane\samane\src\view\moral\clientMoral.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2923dfa98e47_92989160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a91e3261f1953e3e824152e9f083cb25146ea926' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_samane\\samane\\src\\view\\moral\\clientMoral.html',
      1 => 1596531613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2923dfa98e47_92989160 (Smarty_Internal_Template $_smarty_tpl) {
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
                <form id="form_Moral" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/Moral/clientMoral">
                    <fieldset id="field2">
                        <legend id="legend2">Informations Supplémentaires</legend>
                                      <div id="infoSupp">
                                          <div id="infoSupp1">
                                              <label for="nomEmployeur" id="labE">Nom Entreprise* : </label>
                                              <input type="text" id="nomEmployeur" name="nomEmployeur" value="" placeholder="Nom de votre Employeur" />
                                              <span id="ErrorEmployeur"></span>
                                              <label for="AdresseEmployeur" id="labAdr">Adresse Entreprise* : </label>
                                              <input type="text" id="AdresseEmployeur" name="AdresseEmployeur" value="" placeholder="Adresse Employeur" />
                                              <span id="ErrorAdrEmployeur"></span>
                                          </div>
                                          <div id="infoSupp2">
                                              <label for="raisonSocial" id="labRai">Raison sociale* : </label>
                                              <input type="text" id="raisonSocial" name="raisonSocial" value="" placeholder="Raison Sociale" />
                                              <span id="ErrorRaisonSocial"></span>
                                              <label for="numIdent" id="labNd">Numéro d'identification* : </label>
                                              <input type="text" id="numIdent" name="numIdent" value="" placeholder="Numéro d'identification" />
                                              <span id="ErrorNumIdent"></span>
                                          </div>
                                      </div>
                    </fieldset>
                    <br />
                        <input type="submit" name="btn22" value="Valider" id="btn2" /><br />
                        <span id="ErrorC"></span>
                </form>
            </main>

            <footer>
            </footer>

        </div>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/app2.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
