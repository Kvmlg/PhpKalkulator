<?php
/* Smarty version 4.1.0, created on 2022-04-03 19:35:58
  from 'C:\xampp\htdocs\projekt\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6249dafe572274_98686279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57934f5202c906bdedf4e2f868e035e3ae49d075' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\main.html',
      1 => 1649007318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249dafe572274_98686279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

<meta charset="utf-8" />
<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<!--<a href="<?php echo $_smarty_tpl->tpl_vars['root_path']->value;?>
/app/security/logout.php" class="pure-button pure-button-active" style=":position: absolute; right: 0px; color:Orange;">Wyloguj</a> -->
</div>

<div class="Kalk" >
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5853720486249dafe571bf0_46277568', 'content');
?>


</body>
</html><?php }
/* {block 'content'} */
class Block_5853720486249dafe571bf0_46277568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5853720486249dafe571bf0_46277568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
