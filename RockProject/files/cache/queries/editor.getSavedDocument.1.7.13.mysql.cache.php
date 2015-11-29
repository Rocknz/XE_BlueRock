<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSavedDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl238_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl238_argument'}->createConditionValue();
if(!${'module_srl238_argument'}->isValid()) return ${'module_srl238_argument'}->getErrorMessage();
} else
${'module_srl238_argument'} = NULL;if(${'module_srl238_argument'} !== null) ${'module_srl238_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl239_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl239_argument'}->createConditionValue();
if(!${'member_srl239_argument'}->isValid()) return ${'member_srl239_argument'}->getErrorMessage();
} else
${'member_srl239_argument'} = NULL;if(${'member_srl239_argument'} !== null) ${'member_srl239_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress240_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress240_argument'}->createConditionValue();
if(!${'ipaddress240_argument'}->isValid()) return ${'ipaddress240_argument'}->getErrorMessage();
} else
${'ipaddress240_argument'} = NULL;if(${'ipaddress240_argument'} !== null) ${'ipaddress240_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl238_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl239_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress240_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>