<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid150_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid150_argument'}->createConditionValue();
if(!${'mid150_argument'}->isValid()) return ${'mid150_argument'}->getErrorMessage();
} else
${'mid150_argument'} = NULL;if(${'mid150_argument'} !== null) ${'mid150_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl151_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl151_argument'}->createConditionValue();
if(!${'module_srl151_argument'}->isValid()) return ${'module_srl151_argument'}->getErrorMessage();
} else
${'module_srl151_argument'} = NULL;if(${'module_srl151_argument'} !== null) ${'module_srl151_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl152_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl152_argument'}->createConditionValue();
if(!${'site_srl152_argument'}->isValid()) return ${'site_srl152_argument'}->getErrorMessage();
} else
${'site_srl152_argument'} = NULL;if(${'site_srl152_argument'} !== null) ${'site_srl152_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid150_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl151_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl152_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>