<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-07 23:44:56
  from 'D:\OSPanel\domains\ExpertPHP\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a29a8487b9838_05824586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12b7efaab66ce70a0c0e037f1766bd5b78befe10' => 
    array (
      0 => 'D:\\OSPanel\\domains\\ExpertPHP\\views\\default\\header.tpl',
      1 => 1512679450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_5a29a8487b9838_05824586 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css"/>
    </head>
    <body>
        <div id="header">
            <h1>my shop - интернет магазин</h1>
        </div>
        
         <?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>      
       
        
        <div id="centerColumn">
            centerColumn
<?php }
}
