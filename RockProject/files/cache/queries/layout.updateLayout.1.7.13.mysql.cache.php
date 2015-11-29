<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title191_argument'} = new Argument('title', $args->{'title'});
if(!${'title191_argument'}->isValid()) return ${'title191_argument'}->getErrorMessage();
} else
${'title191_argument'} = NULL;if(${'title191_argument'} !== null) ${'title191_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars192_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars192_argument'}->isValid()) return ${'extra_vars192_argument'}->getErrorMessage();
} else
${'extra_vars192_argument'} = NULL;if(${'extra_vars192_argument'} !== null) ${'extra_vars192_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout193_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout193_argument'}->isValid()) return ${'layout193_argument'}->getErrorMessage();
} else
${'layout193_argument'} = NULL;if(${'layout193_argument'} !== null) ${'layout193_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path194_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path194_argument'}->isValid()) return ${'layout_path194_argument'}->getErrorMessage();
} else
${'layout_path194_argument'} = NULL;if(${'layout_path194_argument'} !== null) ${'layout_path194_argument'}->setColumnType('varchar');

${'layout_srl195_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl195_argument'}->checkFilter('number');
${'layout_srl195_argument'}->checkNotNull();
${'layout_srl195_argument'}->createConditionValue();
if(!${'layout_srl195_argument'}->isValid()) return ${'layout_srl195_argument'}->getErrorMessage();
if(${'layout_srl195_argument'} !== null) ${'layout_srl195_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title191_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars192_argument'})
,new UpdateExpression('`layout`', ${'layout193_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path194_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl195_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>