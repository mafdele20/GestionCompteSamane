<?php
/* Smarty version 3.1.30, created on 2020-08-11 15:26:52
  from "C:\xampp\htdocs\samane\src\view\compte\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f329c9c928e52_50800952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '742d67594e53b878c9f9eca8f75313a54ac8818d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\samane\\src\\view\\compte\\liste.html',
      1 => 1597054215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f329c9c928e52_50800952 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/compte.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/compte.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="compte">
        <nav class="navbar">
        <div class="row">
           <div class="col-25">
             <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpeg" alt="logo" id="logo">
             <h1>BANQUE DU PEUPLE</h1>
           </div>
           <div class="col-75">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/add">Ajout Compte</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/liste">Liste des Comptes</a></li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/user-connect.png" alt="Avatar" class="user"><a> gadiaga</a></li>
                <li id="connexion"><a onclick="deconnexion()" id="deconect">Déconnexion</a></li>   
            </ul>
           </div>
       </div>
        </nav>
        <div class="corps">
    
        <div class="sliderBar">
          <div class="espace">

          </div>
           <div class="action">
               <div class="slb-blanc"><a href="addCompte"> Creer un Compte</a></div>
               <div class="slb-degrade"><a href=""> Faire un Virement </a></div>
               <div class="slb-blanc"><a href="">Bloquer un Compte</a></div>
               <div class="slb-degrade"><a href="">Fermer unCompte</a></div>
               <div class="slb-blanc"><a href=""> Archiver un compte</a></div>
               <div class="slb-degrade"><a href="listeCompte">liste des Comptes</a></div>
       
           </div>
         
        </div>
        <div class="container">  
            <h1>liste de tous les Comptes</h1>
          <div classe="tab" class="tab">
            <?php if (isset($_smarty_tpl->tpl_vars['listeCompte']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['listeCompte']->value != null) {?>
            <table id="listecompte">
            <thead>
              <tr>
                
                    <th>id Compte</th>
                    <th>Numero</th>
                    <th>Agence</th>
                    <th>cléRib</th>
                    <th>Date Ouverture</th>
                    <th>Solde</th>
                    <th>Type de compte</th>           
                    <th>Frais</th>
                    <th>Propriétaire</th>
                    <th>Action</th>
                    <th>Action</th>
              </tr>
            </thead>
             <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeCompte']->value, 'compte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compte']->value) {
?>
  
                <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNumero();?>
</td>
                          <td>Malika</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getCleRib();?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getDate();?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getSolde();?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getTypeCompte()->getLibelle();?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getFrais();?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getProprietaire()->getEmail();?>
</td>
                          <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/delete/<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
">delete</a></td>
                          <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/edite/<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
">edit</a></td>
 
                      </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

             </tbody>

            </table>
            <?php } else { ?>
            Liste vide
        <?php }?>
    <?php }?>
          </div>
            <div id="status"></div>
          </div>
       
    </div>
  </div>
     
</body>
</html><?php }
}
