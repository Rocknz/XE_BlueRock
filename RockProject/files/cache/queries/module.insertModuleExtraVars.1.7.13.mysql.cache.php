<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl176_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl176_argument'}->checkFilter('number');
${'module_srl176_argument'}->checkNotNull();
if(!${'module_srl176_argument'}->isValid()) return ${'module_srl176_argument'}->getErrorMessage();
if(${'module_srl176_argument'} !== null) ${'module_srl176_argument'}->setColumnType('number');

${'name177_argument'} = new Argument('name', $args->{'name'});
${'name177_argument'}->checkNotNull();
if(!${'name177_argument'}->isValid()) return ${'name177_argument'}->getErrorMessage();
if(${'name177_argument'} !== null) ${'name177_argument'}->setColumnType('varchar');

${'value178_argument'} = new Argument('value', $args->{'value'});
${'value178_argument'}->checkNotNull();
if(!${'value178_argument'}->isValid()) return ${'value178_argument'}->getErrorMessage();
if(${'value178_argument'} !== null) ${'value178_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl176_argument'})
,new InsertExpression('`name`', ${'name177_argument'})
,new InsertExpression('`value`', ${'value178_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>