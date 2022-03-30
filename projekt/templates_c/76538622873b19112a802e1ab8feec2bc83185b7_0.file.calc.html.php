<?php
/* Smarty version 4.1.0, created on 2022-03-30 17:22:56
  from 'C:\xampp\htdocs\projekt\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624475d072f789_47248263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76538622873b19112a802e1ab8feec2bc83185b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\calc.html',
      1 => 1648653733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624475d072f789_47248263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_333809302624475d0721eb4_82224217', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_333809302624475d0721eb4_82224217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_333809302624475d0721eb4_82224217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1><center>Kalkulator ratalny</center></h1>
<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="get">

	<table style="border-spacing: 10px;">
	<tr>
		<td><label for="id_x">Podaj kwotę kredytu: </label></td>
		<td><input id="id_x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
" /></td>
	</tr>
	<tr>
		<td><label for="id_operation" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['operation'];?>
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
		<td><input id="id_y" type="text" name="y" placeholder="podaj wartość bez znaku '%'" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
" /><br /></td>
	</tr>
</table>
	<br><center><button type="submit">Oblicz</button></center>
</form>	



    <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg', false, 'key');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; text-align:center; color:Red;">';
			<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

		</div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>




<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<div style="margin: 20px; padding: 10px; border-radius: 5px; text-align:center; color:white;">
		<p>Miesięczna rata kredytu to: <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 </p>
	</div>
<?php }
}
}
/* {/block 'content'} */
}
