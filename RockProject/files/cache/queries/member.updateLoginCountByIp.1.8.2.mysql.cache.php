<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLoginCountByIp");
$query->setAction("update");
$query->setPriority("");

${'count9_argument'} = new Argument('count', $args->{'count'});
${'count9_argument'}->checkNotNull();
if(!${'count9_argument'}->isValid()) return ${'count9_argument'}->getErrorMessage();
if(${'count9_argument'} !== null) ${'count9_argument'}->setColumnType('number');

${'last_update10_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update10_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_update10_argument'}->checkNotNull();
if(!${'last_update10_argument'}->isValid()) return ${'last_update10_argument'}->getErrorMessage();
if(${'last_update10_argument'} !== null) ${'last_update10_argument'}->setColumnType('date');

${'ipaddress11_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress11_argument'}->checkNotNull();
${'ipaddress11_argument'}->createConditionValue();
if(!${'ipaddress11_argument'}->isValid()) return ${'ipaddress11_argument'}->getErrorMessage();
if(${'ipaddress11_argument'} !== null) ${'ipaddress11_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`count`', ${'count9_argument'})
,new UpdateExpression('`last_update`', ${'last_update10_argument'})
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress11_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>