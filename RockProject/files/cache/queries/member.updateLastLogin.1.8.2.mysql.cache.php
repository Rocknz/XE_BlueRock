<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLastLogin");
$query->setAction("update");
$query->setPriority("");

${'member_srl6_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl6_argument'}->checkFilter('number');
${'member_srl6_argument'}->checkNotNull();
if(!${'member_srl6_argument'}->isValid()) return ${'member_srl6_argument'}->getErrorMessage();
if(${'member_srl6_argument'} !== null) ${'member_srl6_argument'}->setColumnType('number');

${'last_login7_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login7_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_login7_argument'}->checkNotNull();
if(!${'last_login7_argument'}->isValid()) return ${'last_login7_argument'}->getErrorMessage();
if(${'last_login7_argument'} !== null) ${'last_login7_argument'}->setColumnType('date');

${'member_srl8_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl8_argument'}->checkFilter('number');
${'member_srl8_argument'}->checkNotNull();
${'member_srl8_argument'}->createConditionValue();
if(!${'member_srl8_argument'}->isValid()) return ${'member_srl8_argument'}->getErrorMessage();
if(${'member_srl8_argument'} !== null) ${'member_srl8_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`member_srl`', ${'member_srl6_argument'})
,new UpdateExpression('`last_login`', ${'last_login7_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl8_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>