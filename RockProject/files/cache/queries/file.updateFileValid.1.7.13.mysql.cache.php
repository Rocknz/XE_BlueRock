<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid241_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid241_argument'}->ensureDefaultValue('Y');
${'isvalid241_argument'}->checkNotNull();
if(!${'isvalid241_argument'}->isValid()) return ${'isvalid241_argument'}->getErrorMessage();
if(${'isvalid241_argument'} !== null) ${'isvalid241_argument'}->setColumnType('char');

${'upload_target_srl242_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl242_argument'}->checkFilter('number');
${'upload_target_srl242_argument'}->checkNotNull();
${'upload_target_srl242_argument'}->createConditionValue();
if(!${'upload_target_srl242_argument'}->isValid()) return ${'upload_target_srl242_argument'}->getErrorMessage();
if(${'upload_target_srl242_argument'} !== null) ${'upload_target_srl242_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid241_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl242_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>