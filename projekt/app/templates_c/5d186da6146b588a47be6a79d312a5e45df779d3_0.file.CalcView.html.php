<?php
/* Smarty version 4.1.0, created on 2022-03-30 19:09:36
  from 'C:\xampp\htdocs\projekt\app\calc\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62448ed0e8fad4_37699071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d186da6146b588a47be6a79d312a5e45df779d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\calc\\CalcView.html',
      1 => 1648660141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62448ed0e8fad4_37699071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58025746562448ed0e84cf3_01250481', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'content'} */
class Block_58025746562448ed0e84cf3_01250481 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_58025746562448ed0e84cf3_01250481',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1><center>Kalkulator ratalny</center></h1>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="get">

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
	<br><center><button type="submit">Oblicz</button></center>
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
