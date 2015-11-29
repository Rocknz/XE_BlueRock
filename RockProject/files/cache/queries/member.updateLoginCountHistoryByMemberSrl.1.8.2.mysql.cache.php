<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLoginCountHistoryByMemberSrl");
$query->setAction("update");
$query->setPriority("");

${'content6_argument'} = new Argument('content', $args->{'content'});
${'content6_argument'}->checkNotNull();
if(!${'content6_argument'}->isValid()) return ${'content6_argument'}->getErrorMessage();
if(${'content6_argument'} !== null) ${'content6_argument'}->setColumnType('bigtext');

${'last_update7_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update7_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_update7_argument'}->checkNotNull();
if(!${'last_update7_argument'}->isValid()) return ${'last_update7_argument'}->getErrorMessage();
if(${'last_update7_argument'} !== null) ${'last_update7_argument'}->setColumnType('date');

${'member_srl8_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl8_argument'}->checkNotNull();
${'member_srl8_argument'}->createConditionValue();
if(!${'member_srl8_argument'}->isValid()) return ${'member_srl8_argument'}->getErrorMessage();
if(${'member_srl8_argument'} !== null) ${'member_srl8_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`content`', ${'content6_argument'})
,new UpdateExpression('`last_update`', ${'last_update7_argument'})
));
$query->setTables(array(
new Table('`xe_member_count_history`', '`member_count_history`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl8_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>