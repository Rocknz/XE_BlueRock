<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act65_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act65_argument'}->createConditionValue();
if(!${'act65_argument'}->isValid()) return ${'act65_argument'}->getErrorMessage();
} else
${'act65_argument'} = NULL;if(${'act65_argument'} !== null) ${'act65_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act65_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>