<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl275_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl275_argument'}->isValid()) return ${'menu_srl275_argument'}->getErrorMessage();
} else
${'menu_srl275_argument'} = NULL;if(${'menu_srl275_argument'} !== null) ${'menu_srl275_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl276_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl276_argument'}->isValid()) return ${'parent_srl276_argument'}->getErrorMessage();
} else
${'parent_srl276_argument'} = NULL;if(${'parent_srl276_argument'} !== null) ${'parent_srl276_argument'}->setColumnType('number');

${'name277_argument'} = new Argument('name', $args->{'name'});
${'name277_argument'}->checkNotNull();
if(!${'name277_argument'}->isValid()) return ${'name277_argument'}->getErrorMessage();
if(${'name277_argument'} !== null) ${'name277_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url278_argument'} = new Argument('url', $args->{'url'});
if(!${'url278_argument'}->isValid()) return ${'url278_argument'}->getErrorMessage();
} else
${'url278_argument'} = NULL;if(${'url278_argument'} !== null) ${'url278_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut279_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut279_argument'}->isValid()) return ${'is_shortcut279_argument'}->getErrorMessage();
} else
${'is_shortcut279_argument'} = NULL;if(${'is_shortcut279_argument'} !== null) ${'is_shortcut279_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window280_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window280_argument'}->isValid()) return ${'open_window280_argument'}->getErrorMessage();
} else
${'open_window280_argument'} = NULL;if(${'open_window280_argument'} !== null) ${'open_window280_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand281_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand281_argument'}->isValid()) return ${'expand281_argument'}->getErrorMessage();
} else
${'expand281_argument'} = NULL;if(${'expand281_argument'} !== null) ${'expand281_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn282_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn282_argument'}->isValid()) return ${'normal_btn282_argument'}->getErrorMessage();
} else
${'normal_btn282_argument'} = NULL;if(${'normal_btn282_argument'} !== null) ${'normal_btn282_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn283_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn283_argument'}->isValid()) return ${'hover_btn283_argument'}->getErrorMessage();
} else
${'hover_btn283_argument'} = NULL;if(${'hover_btn283_argument'} !== null) ${'hover_btn283_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn284_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn284_argument'}->isValid()) return ${'active_btn284_argument'}->getErrorMessage();
} else
${'active_btn284_argument'} = NULL;if(${'active_btn284_argument'} !== null) ${'active_btn284_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls285_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls285_argument'}->isValid()) return ${'group_srls285_argument'}->getErrorMessage();
} else
${'group_srls285_argument'} = NULL;if(${'group_srls285_argument'} !== null) ${'group_srls285_argument'}->setColumnType('text');

${'menu_item_srl286_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl286_argument'}->checkFilter('number');
${'menu_item_srl286_argument'}->checkNotNull();
${'menu_item_srl286_argument'}->createConditionValue();
if(!${'menu_item_srl286_argument'}->isValid()) return ${'menu_item_srl286_argument'}->getErrorMessage();
if(${'menu_item_srl286_argument'} !== null) ${'menu_item_srl286_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl275_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl276_argument'})
,new UpdateExpression('`name`', ${'name277_argument'})
,new UpdateExpression('`url`', ${'url278_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut279_argument'})
,new UpdateExpression('`open_window`', ${'open_window280_argument'})
,new UpdateExpression('`expand`', ${'expand281_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn282_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn283_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn284_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls285_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl286_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>