<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLayout");
$query->setAction("insert");
$query->setPriority("");

${'layout_srl182_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
${'layout_srl182_argument'}->checkFilter('number');
${'layout_srl182_argument'}->checkNotNull();
if(!${'layout_srl182_argument'}->isValid()) return ${'layout_srl182_argument'}->getErrorMessage();
if(${'layout_srl182_argument'} !== null) ${'layout_srl182_argument'}->setColumnType('number');

${'site_srl183_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl183_argument'}->checkFilter('number');
${'site_srl183_argument'}->ensureDefaultValue('0');
${'site_srl183_argument'}->checkNotNull();
if(!${'site_srl183_argument'}->isValid()) return ${'site_srl183_argument'}->getErrorMessage();
if(${'site_srl183_argument'} !== null) ${'site_srl183_argument'}->setColumnType('number');

${'layout184_argument'} = new Argument('layout', $args->{'layout'});
${'layout184_argument'}->checkNotNull();
if(!${'layout184_argument'}->isValid()) return ${'layout184_argument'}->getErrorMessage();
if(${'layout184_argument'} !== null) ${'layout184_argument'}->setColumnType('varchar');

${'title185_argument'} = new Argument('title', $args->{'title'});
${'title185_argument'}->checkNotNull();
if(!${'title185_argument'}->isValid()) return ${'title185_argument'}->getErrorMessage();
if(${'title185_argument'} !== null) ${'title185_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl186_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl186_argument'}->isValid()) return ${'module_srl186_argument'}->getErrorMessage();
} else
${'module_srl186_argument'} = NULL;if(${'module_srl186_argument'} !== null) ${'module_srl186_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars187_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars187_argument'}->isValid()) return ${'extra_vars187_argument'}->getErrorMessage();
} else
${'extra_vars187_argument'} = NULL;if(${'extra_vars187_argument'} !== null) ${'extra_vars187_argument'}->setColumnType('text');
if(isset($args->layout_path)) {
${'layout_path188_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path188_argument'}->isValid()) return ${'layout_path188_argument'}->getErrorMessage();
} else
${'layout_path188_argument'} = NULL;if(${'layout_path188_argument'} !== null) ${'layout_path188_argument'}->setColumnType('varchar');

${'regdate189_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate189_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate189_argument'}->isValid()) return ${'regdate189_argument'}->getErrorMessage();
if(${'regdate189_argument'} !== null) ${'regdate189_argument'}->setColumnType('date');

${'layout_type190_argument'} = new Argument('layout_type', $args->{'layout_type'});
${'layout_type190_argument'}->ensureDefaultValue('P');
if(!${'layout_type190_argument'}->isValid()) return ${'layout_type190_argument'}->getErrorMessage();
if(${'layout_type190_argument'} !== null) ${'layout_type190_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`layout_srl`', ${'layout_srl182_argument'})
,new InsertExpression('`site_srl`', ${'site_srl183_argument'})
,new InsertExpression('`layout`', ${'layout184_argument'})
,new InsertExpression('`title`', ${'title185_argument'})
,new InsertExpression('`module_srl`', ${'module_srl186_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars187_argument'})
,new InsertExpression('`layout_path`', ${'layout_path188_argument'})
,new InsertExpression('`regdate`', ${'regdate189_argument'})
,new InsertExpression('`layout_type`', ${'layout_type190_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>