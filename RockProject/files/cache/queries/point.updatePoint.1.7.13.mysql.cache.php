<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePoint");
$query->setAction("update");
$query->setPriority("");
if(isset($args->point)) {
${'point249_argument'} = new Argument('point', $args->{'point'});
if(!${'point249_argument'}->isValid()) return ${'point249_argument'}->getErrorMessage();
} else
${'point249_argument'} = NULL;if(${'point249_argument'} !== null) ${'point249_argument'}->setColumnType('number');

${'member_srl250_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl250_argument'}->checkFilter('number');
${'member_srl250_argument'}->checkNotNull();
${'member_srl250_argument'}->createConditionValue();
if(!${'member_srl250_argument'}->isValid()) return ${'member_srl250_argument'}->getErrorMessage();
if(${'member_srl250_argument'} !== null) ${'member_srl250_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`point`', ${'point249_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl250_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>