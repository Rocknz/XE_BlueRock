<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl22_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl22_argument'}->isValid()) return ${'menu_srl22_argument'}->getErrorMessage();
} else
${'menu_srl22_argument'} = NULL;if(${'menu_srl22_argument'} !== null) ${'menu_srl22_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl23_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl23_argument'}->isValid()) return ${'parent_srl23_argument'}->getErrorMessage();
} else
${'parent_srl23_argument'} = NULL;if(${'parent_srl23_argument'} !== null) ${'parent_srl23_argument'}->setColumnType('number');

${'name24_argument'} = new Argument('name', $args->{'name'});
${'name24_argument'}->checkNotNull();
if(!${'name24_argument'}->isValid()) return ${'name24_argument'}->getErrorMessage();
if(${'name24_argument'} !== null) ${'name24_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url25_argument'} = new Argument('url', $args->{'url'});
if(!${'url25_argument'}->isValid()) return ${'url25_argument'}->getErrorMessage();
} else
${'url25_argument'} = NULL;if(${'url25_argument'} !== null) ${'url25_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut26_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut26_argument'}->isValid()) return ${'is_shortcut26_argument'}->getErrorMessage();
} else
${'is_shortcut26_argument'} = NULL;if(${'is_shortcut26_argument'} !== null) ${'is_shortcut26_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window27_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window27_argument'}->isValid()) return ${'open_window27_argument'}->getErrorMessage();
} else
${'open_window27_argument'} = NULL;if(${'open_window27_argument'} !== null) ${'open_window27_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand28_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand28_argument'}->isValid()) return ${'expand28_argument'}->getErrorMessage();
} else
${'expand28_argument'} = NULL;if(${'expand28_argument'} !== null) ${'expand28_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn29_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn29_argument'}->isValid()) return ${'normal_btn29_argument'}->getErrorMessage();
} else
${'normal_btn29_argument'} = NULL;if(${'normal_btn29_argument'} !== null) ${'normal_btn29_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn30_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn30_argument'}->isValid()) return ${'hover_btn30_argument'}->getErrorMessage();
} else
${'hover_btn30_argument'} = NULL;if(${'hover_btn30_argument'} !== null) ${'hover_btn30_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn31_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn31_argument'}->isValid()) return ${'active_btn31_argument'}->getErrorMessage();
} else
${'active_btn31_argument'} = NULL;if(${'active_btn31_argument'} !== null) ${'active_btn31_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls32_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls32_argument'}->isValid()) return ${'group_srls32_argument'}->getErrorMessage();
} else
${'group_srls32_argument'} = NULL;if(${'group_srls32_argument'} !== null) ${'group_srls32_argument'}->setColumnType('text');

${'menu_item_srl33_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl33_argument'}->checkFilter('number');
${'menu_item_srl33_argument'}->checkNotNull();
${'menu_item_srl33_argument'}->createConditionValue();
if(!${'menu_item_srl33_argument'}->isValid()) return ${'menu_item_srl33_argument'}->getErrorMessage();
if(${'menu_item_srl33_argument'} !== null) ${'menu_item_srl33_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl22_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl23_argument'})
,new UpdateExpression('`name`', ${'name24_argument'})
,new UpdateExpression('`url`', ${'url25_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut26_argument'})
,new UpdateExpression('`open_window`', ${'open_window27_argument'})
,new UpdateExpression('`expand`', ${'expand28_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn29_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn30_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn31_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls32_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl33_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>