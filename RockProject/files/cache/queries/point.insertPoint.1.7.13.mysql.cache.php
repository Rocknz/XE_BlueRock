<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl244_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl244_argument'}->checkFilter('number');
${'member_srl244_argument'}->checkNotNull();
if(!${'member_srl244_argument'}->isValid()) return ${'member_srl244_argument'}->getErrorMessage();
if(${'member_srl244_argument'} !== null) ${'member_srl244_argument'}->setColumnType('number');

${'point245_argument'} = new Argument('point', $args->{'point'});
${'point245_argument'}->checkFilter('number');
${'point245_argument'}->ensureDefaultValue('0');
${'point245_argument'}->checkNotNull();
if(!${'point245_argument'}->isValid()) return ${'point245_argument'}->getErrorMessage();
if(${'point245_argument'} !== null) ${'point245_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl244_argument'})
,new InsertExpression('`point`', ${'point245_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>