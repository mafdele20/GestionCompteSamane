<?php
/* Smarty version 3.1.30, created on 2020-08-11 15:25:43
  from "C:\xampp\htdocs\samane\src\view\login\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f329c57e1c7d0_23471614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7470fd7d2147d6847ff6a2ad0cf0eebc9cf3e43f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\samane\\src\\view\\login\\index.html',
      1 => 1596450596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f329c57e1c7d0_23471614 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css"/> 
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/scrip.js"><?php echo '</script'; ?>
> 
    
<body>

    <div class="loginbox" id ="loginbox">
    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/user-connect.png" class="avatar"/>
        <h1>login</h1>
        <p id ="error"></p>
        <form>
            <p>Email</p>
            <input type="email" name="email" id="email" placeholder="Entrer votre email"/>
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Entrer votre Password"/>
            <input type="button" name="" value="Login" id ="login" onclick="testLogin()">
            <a href="#">mot de passe oublié</a><br>
        </form>
    </div>

</body>
</head>
</html><?php }
}
