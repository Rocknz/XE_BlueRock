<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/board/m.skins/rockSkin/css/mboard.css--><?php $__tmp=array('modules/board/m.skins/rockSkin/css/mboard.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="bd">
<?php if($__Context->oDocument->isExists()){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/rockSkin','read.html') ?>
<?php }else{ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/rockSkin','_list.html') ?>
<?php } ?>
</div>
