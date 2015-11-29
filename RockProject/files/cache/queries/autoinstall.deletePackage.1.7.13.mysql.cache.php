<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deletePackage");
$query->setAction("delete");
$query->setPriority("");

${'path23_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path23_argument'}->checkNotNull();
${'path23_argument'}->createConditionValue();
if(!${'path23_argument'}->isValid()) return ${'path23_argument'}->getErrorMessage();
if(${'path23_argument'} !== null) ${'path23_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path23_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>