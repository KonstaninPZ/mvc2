<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-09 22:39:49
  from 'D:\OSPanel\domains\ExpertPHP\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a2c3c05b46b06_27323491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '185d33e0c989b5709823bd24437b4dc17a96e9e6' => 
    array (
      0 => 'D:\\OSPanel\\domains\\ExpertPHP\\views\\default\\leftcolumn.tpl',
      1 => 1512848388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2c3c05b46b06_27323491 (Smarty_Internal_Template $_smarty_tpl) {
?>                
        <div id="leftColumn">
            <div id="leftMenu">
                <div class="menuCaption">Меню:</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br/>
                    
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
                            -- <a href="#"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br/>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div><?php }
}
