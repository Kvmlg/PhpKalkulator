<?php
/* Smarty version 4.1.0, created on 2022-04-04 19:03:17
  from 'C:\xampp\htdocs\projekt\app\views\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b24d59d5744_33864703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '649c9f6f24a02837ff405b06ba2a5bbf87100327' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\CalcView.html',
      1 => 1649091795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624b24d59d5744_33864703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_549025445624b24d59c3d31_15458725', 'content');
?>

</div><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_549025445624b24d59c3d31_15458725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_549025445624b24d59c3d31_15458725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="pure-button pure-button-active" style=":position: absolute; right: 0px; color:Orange;">Wyloguj</a> 
<div class="Kalk2" style="position: absolute; top:20%; left:40%;">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/sec.css" />
<h1><center>Kalkulator ratalny</center></h1>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">

	<table style="border-spacing: 10px;">
	<tr>
		<td><label for="id_x">Podaj kwotę kredytu: </label></td>
		<td><input id="id_x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" /></td>
	</tr>
	<tr>
		<td><label for="id_operation" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->operation;?>
">Okres spłaty: </label></td>
		<td><select name="operation" id="operation">
			<option value="1">Rok</option>
			<option value="2">Dwa lata</option>
			<option value="3">Trzy lata</option>
			<option value="4">Cztery lata</option>
			<option value="5">Pięć lat</option>
			<option value="6">Sześć lat</option>
			<option value="7">Siedem lat</option>
			<option value="8">Osiem lat</option>
			<option value="9">Dziewięć lat</option>
			<option value="10">Dziesięć lat</option>
		</select></td>
	</tr>
	<tr>
		<td><label for="id_y">Wprowadź oprocentowanie: </label></td>
		<td><input id="id_y" type="text" name="y" placeholder="podaj wartość bez znaku '%'" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" /><br /></td>
	</tr>
</table>
	<br><center><input type="submit" value="Oblicz"></center>
</form>	



    <?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?> 
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
		<div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; text-align:center; color:Red;">
			<?php echo $_smarty_tpl->tpl_vars['err']->value;?>

		</div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>




<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<div style="margin: 20px; padding: 10px; border-radius: 5px; text-align:center; color:white;">
		<p>Miesięczna rata kredytu to: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 </p>
	</div>
<?php }
}
}
/* {/block 'content'} */
}
