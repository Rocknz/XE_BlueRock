<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title147_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title147_argument'}->checkNotNull();
${'title147_argument'}->createConditionValue();
if(!${'title147_argument'}->isValid()) return ${'title147_argument'}->getErrorMessage();
if(${'title147_argument'} !== null) ${'title147_argument'}->setColumnType('varchar');

${'site_srl148_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl148_argument'}->ensureDefaultValue('0');
${'site_srl148_argument'}->createConditionValue();
if(!${'site_srl148_argument'}->isValid()) return ${'site_srl148_argument'}->getErrorMessage();
if(${'site_srl148_argument'} !== null) ${'site_srl148_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title147_argument,"in")
,new ConditionWithArgument('`site_srl`',$site_srl148_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>