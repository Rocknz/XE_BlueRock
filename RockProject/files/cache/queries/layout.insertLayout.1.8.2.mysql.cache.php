<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLayout");
$query->setAction("insert");
$query->setPriority("");

${'layout_srl5_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
${'layout_srl5_argument'}->checkFilter('number');
${'layout_srl5_argument'}->checkNotNull();
if(!${'layout_srl5_argument'}->isValid()) return ${'layout_srl5_argument'}->getErrorMessage();
if(${'layout_srl5_argument'} !== null) ${'layout_srl5_argument'}->setColumnType('number');

${'site_srl6_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl6_argument'}->checkFilter('number');
${'site_srl6_argument'}->ensureDefaultValue('0');
${'site_srl6_argument'}->checkNotNull();
if(!${'site_srl6_argument'}->isValid()) return ${'site_srl6_argument'}->getErrorMessage();
if(${'site_srl6_argument'} !== null) ${'site_srl6_argument'}->setColumnType('number');

${'layout7_argument'} = new Argument('layout', $args->{'layout'});
${'layout7_argument'}->checkNotNull();
if(!${'layout7_argument'}->isValid()) return ${'layout7_argument'}->getErrorMessage();
if(${'layout7_argument'} !== null) ${'layout7_argument'}->setColumnType('varchar');

${'title8_argument'} = new Argument('title', $args->{'title'});
${'title8_argument'}->checkNotNull();
if(!${'title8_argument'}->isValid()) return ${'title8_argument'}->getErrorMessage();
if(${'title8_argument'} !== null) ${'title8_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl9_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl9_argument'}->isValid()) return ${'module_srl9_argument'}->getErrorMessage();
} else
${'module_srl9_argument'} = NULL;if(${'module_srl9_argument'} !== null) ${'module_srl9_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars10_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars10_argument'}->isValid()) return ${'extra_vars10_argument'}->getErrorMessage();
} else
${'extra_vars10_argument'} = NULL;if(${'extra_vars10_argument'} !== null) ${'extra_vars10_argument'}->setColumnType('text');
if(isset($args->layout_path)) {
${'layout_path11_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path11_argument'}->isValid()) return ${'layout_path11_argument'}->getErrorMessage();
} else
${'layout_path11_argument'} = NULL;if(${'layout_path11_argument'} !== null) ${'layout_path11_argument'}->setColumnType('varchar');

${'regdate12_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate12_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate12_argument'}->isValid()) return ${'regdate12_argument'}->getErrorMessage();
if(${'regdate12_argument'} !== null) ${'regdate12_argument'}->setColumnType('date');

${'layout_type13_argument'} = new Argument('layout_type', $args->{'layout_type'});
${'layout_type13_argument'}->ensureDefaultValue('P');
if(!${'layout_type13_argument'}->isValid()) return ${'layout_type13_argument'}->getErrorMessage();
if(${'layout_type13_argument'} !== null) ${'layout_type13_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`layout_srl`', ${'layout_srl5_argument'})
,new InsertExpression('`site_srl`', ${'site_srl6_argument'})
,new InsertExpression('`layout`', ${'layout7_argument'})
,new InsertExpression('`title`', ${'title8_argument'})
,new InsertExpression('`module_srl`', ${'module_srl9_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars10_argument'})
,new InsertExpression('`layout_path`', ${'layout_path11_argument'})
,new InsertExpression('`regdate`', ${'regdate12_argument'})
,new InsertExpression('`layout_type`', ${'layout_type13_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>