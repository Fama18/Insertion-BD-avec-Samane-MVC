<?php
/* Smarty version 3.1.30, created on 2020-08-05 10:56:24
  from "C:\xampp\htdocs\projet_samane\samane\src\view\compte\compte.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2a7438dbfeb9_57256204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f9bb49d6c8a459ea6e10d68d1dc8dcebbc07b44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_samane\\samane\\src\\view\\compte\\compte.html',
      1 => 1596617447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2a7438dbfeb9_57256204 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css" />
        <title></title>
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
                <form id="form2" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/Compte/compte" method="post">
                    <fieldset id="field3">
                        <legend id="legend3">Informations Compte</legend>
                        <label for="typeCompte">Selectionner un type de compte* : </label>
                        <select id="typeCompte" name="id_Compte" value="" onchange="testCompte()">
                        <option value="">--Sélectionner un type de compte--</option>
                        <option value="CESX">compte epargne simple et xeweel</option>
                        <option value="CCS">compte courant pour les salaries</option>
                        <option value="CB">compte bloque</option>
                        <span id="ErrorTypeCompte"></span><br />
                        <div id="compte">
                        <div id="fraiss">
                            <label for="NumAgence">Numéro de l'agence* : </label>
                            <input type="text" id="NumAgence" name="numagence" placeholder="Numero de l'agence" />
                            <span id="ErrorNumAgence"></span>
                            <label for="cleRib">Clé Rib* : </label>
                            <input type="text" id="cleRib" name="cleRib" value="" placeholder="Cle Rib" />
                            <span id="ErrorCleRib"></span>
                            <label for="DateOuverture" id="labOuv">Date d'ouverture* : </label>
                            <input type="date" id="DateOuverture" name="DateOuverture" value="" placeholder="Date d'ouverture" />
                            <span id="ErrorAdrEmployeur"></span>
                        </div>
                        <div id="infoC">
                            <label for="NumCompte">Numéro du compte* : </label>
                            <input type="text" id="NumCompte" name="NumCompte" value="" placeholder="Numero de Compte" />
                            <span id="ErrorNumCompte"></span>
                            <label for="infoclient">Info client* : </label>
                            <?php echo '<?php
                                ';?>//use Model\;
                                require_once '../model/infoClient.php';
                            <?php echo '?>';?>
                            <span id="ErrorClient"></span>
                            <label for="DateEcheance" id="labEch">Date d'écheance* : </label>
                            <input type="date" id="DateEcheance" name="DateEcheance" value="" placeholder="Date d'écheance" />
                            <span id="ErrorAdrEmployeur"></span>
                        </div>
                        </div><br />
                    </fieldset><br />
                    <input type="submit" name="btn" value="Valider" id="btn" />
                </form>
                    <br />
                <form id="form_Employeur" method="post" action="">
                    <fieldset id="field4">
                        <legend id="legend2">Informations Employeur</legend>
                                      <div id="infoSupp">
                                          <div id="infoSupp1">
                                              <label for="nomEmployeur" id="labE">Nom Entreprise* : </label>
                                              <input type="text" id="nomEmployeur" name="nomEmployeur" value="" placeholder="Nom de votre Employeur" />
                                              <span id="ErrorEmployeur"></span>
                                              <label for="AdresseEmployeur" id="labAdr">Adresse Entreprise* : </label>
                                              <input type="text" id="AdresseEmployeur" name="AdresseEmployeur" value="" placeholder="Adresse Employeur" />
                                              <span id="ErrorAdrEmployeur"></span>
                                              <label for="salaire" id="labAdr">Salaire* : </label>
                                              <input type="number" id="salaire" name="salaire" value="" placeholder="Salaire" />
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
                    <label id="h" >Ce type de compte nécessite des frais qui s'élévent à 15000F</label><br />
                    <input type="checkbox" id="fraisCompte" value="frais" />
                    <label id="labfrais" >j'accepte les conditions de creation de compte</label>

                    <label id="h1" >Ce type de compte nécessite des agios qui s'élévent à 5000F/ 3 mois</label><br />
                    <input type="checkbox" id="AgiosCompte" value="agios" />
                    <label id="labAgios" >j'accepte les conditions de creation de compte</label><br />
                    <br />
                    <span id="Error"></span>
                </form>
            </main>

            <footer>
            </footer>

        </div>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/appCompte.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
