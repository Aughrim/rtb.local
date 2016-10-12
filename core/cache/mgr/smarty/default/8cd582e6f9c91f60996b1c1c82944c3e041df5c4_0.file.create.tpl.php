<?php /* Smarty version 3.1.27, created on 2016-10-12 14:07:11
         compiled from "C:\OpenServer\domains\rtb.local\manager\templates\default\resource\symlink\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2481557fe195f2230b4_88540847%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cd582e6f9c91f60996b1c1c82944c3e041df5c4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\rtb.local\\manager\\templates\\default\\resource\\symlink\\create.tpl',
      1 => 1476260136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2481557fe195f2230b4_88540847',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57fe195f245606_46625261',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57fe195f245606_46625261')) {
function content_57fe195f245606_46625261 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2481557fe195f2230b4_88540847';
?>
<div id="modx-panel-symlink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>