<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFavoriteList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl29_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl29_argument'}->createConditionValue();
if(!${'site_srl29_argument'}->isValid()) return ${'site_srl29_argument'}->getErrorMessage();
} else
${'site_srl29_argument'} = NULL;if(${'site_srl29_argument'} !== null) ${'site_srl29_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module30_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module30_argument'}->createConditionValue();
if(!${'module30_argument'}->isValid()) return ${'module30_argument'}->getErrorMessage();
} else
${'module30_argument'} = NULL;if(${'module30_argument'} !== null) ${'module30_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl29_argument,"equal")
,new ConditionWithArgument('`module`',$module30_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>