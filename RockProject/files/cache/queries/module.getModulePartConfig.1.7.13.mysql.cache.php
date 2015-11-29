<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module198_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module198_argument'}->checkNotNull();
${'module198_argument'}->createConditionValue();
if(!${'module198_argument'}->isValid()) return ${'module198_argument'}->getErrorMessage();
if(${'module198_argument'} !== null) ${'module198_argument'}->setColumnType('varchar');

${'module_srl199_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl199_argument'}->checkNotNull();
${'module_srl199_argument'}->createConditionValue();
if(!${'module_srl199_argument'}->isValid()) return ${'module_srl199_argument'}->getErrorMessage();
if(${'module_srl199_argument'} !== null) ${'module_srl199_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module198_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl199_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>