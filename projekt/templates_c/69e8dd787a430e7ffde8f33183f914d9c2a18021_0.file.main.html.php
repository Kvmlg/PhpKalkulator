<?php
/* Smarty version 4.1.0, created on 2022-03-30 18:34:29
  from 'C:\xampp\htdocs\projekt\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62448695e66aa7_13046644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e8dd787a430e7ffde8f33183f914d9c2a18021' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\templates\\main.html',
      1 => 1648657992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62448695e66aa7_13046644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	
	<style>
		body{
			background-color:#c8c8c8;
			color:black;
		}

		label{
			color:black;
		}

		h1{
			color:black;
		}

		input[type=text] {
  			padding: 8px 3px;
			margin: 20px 20;		
			width:100%;
			color:white;
			display:block;
			border:none;
			padding:15px 20px;
			border-radius:25px;
			background:#6a6f8c;			
		}

		select{
			padding: 8px 3px;
			margin: 20px 20;
			width:120%;
			color:#fff;
			display:block;
			border:none;
			padding:15px 20px;
			border-radius:25px;
			background:#6a6f8c;	
			text-align:center;
		}

		input[type=submit]{
			background-color:#FF8C00;
  			padding: 8px 3px;
			margin: 20px 20;
			width: 120px;
		}

		::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  		color: white;
  		opacity: 1; /* Firefox */
        }
	</style>
<meta charset="utf-8" />
<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<!--<a href="<?php echo $_smarty_tpl->tpl_vars['root_path']->value;?>
/app/security/logout.php" class="pure-button pure-button-active" style=":position: absolute; right: 0px; color:Orange;">Wyloguj</a> -->
</div>

<div class="Kalk" style="position: absolute; top:20%; left:40%;">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58833544962448695e66148_36770673', 'content');
?>


</body>
</html><?php }
/* {block 'content'} */
class Block_58833544962448695e66148_36770673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_58833544962448695e66148_36770673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
