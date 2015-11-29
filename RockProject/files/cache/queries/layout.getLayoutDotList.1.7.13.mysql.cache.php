<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl143_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl143_argument'}->checkFilter('number');
${'site_srl143_argument'}->ensureDefaultValue('0');
${'site_srl143_argument'}->checkNotNull();
${'site_srl143_argument'}->createConditionValue();
if(!${'site_srl143_argument'}->isValid()) return ${'site_srl143_argument'}->getErrorMessage();
if(${'site_srl143_argument'} !== null) ${'site_srl143_argument'}->setColumnType('number');

${'layout_type144_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type144_argument'}->ensureDefaultValue('P');
${'layout_type144_argument'}->createConditionValue();
if(!${'layout_type144_argument'}->isValid()) return ${'layout_type144_argument'}->getErrorMessage();
if(${'layout_type144_argument'} !== null) ${'layout_type144_argument'}->setColumnType('char');

${'layout145_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout145_argument'}->ensureDefaultValue('.');
${'layout145_argument'}->createConditionValue();
if(!${'layout145_argument'}->isValid()) return ${'layout145_argument'}->getErrorMessage();
if(${'layout145_argument'} !== null) ${'layout145_argument'}->setColumnType('varchar');

${'sort_index146_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index146_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index146_argument'}->isValid()) return ${'sort_index146_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl143_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type144_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout145_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index146_argument'}, "desc")
));
$query->setLimit();
return $query; ?>