<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl5_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl5_argument'}->checkNotNull();
if(!${'site_srl5_argument'}->isValid()) return ${'site_srl5_argument'}->getErrorMessage();
if(${'site_srl5_argument'} !== null) ${'site_srl5_argument'}->setColumnType('number');

${'addon6_argument'} = new Argument('addon', $args->{'addon'});
${'addon6_argument'}->checkNotNull();
if(!${'addon6_argument'}->isValid()) return ${'addon6_argument'}->getErrorMessage();
if(${'addon6_argument'} !== null) ${'addon6_argument'}->setColumnType('varchar');

${'is_used7_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used7_argument'}->ensureDefaultValue('N');
${'is_used7_argument'}->checkNotNull();
if(!${'is_used7_argument'}->isValid()) return ${'is_used7_argument'}->getErrorMessage();
if(${'is_used7_argument'} !== null) ${'is_used7_argument'}->setColumnType('char');

${'is_used_m8_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m8_argument'}->ensureDefaultValue('N');
if(!${'is_used_m8_argument'}->isValid()) return ${'is_used_m8_argument'}->getErrorMessage();
if(${'is_used_m8_argument'} !== null) ${'is_used_m8_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars9_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars9_argument'}->isValid()) return ${'extra_vars9_argument'}->getErrorMessage();
} else
${'extra_vars9_argument'} = NULL;if(${'extra_vars9_argument'} !== null) ${'extra_vars9_argument'}->setColumnType('text');

${'regdate10_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate10_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate10_argument'}->isValid()) return ${'regdate10_argument'}->getErrorMessage();
if(${'regdate10_argument'} !== null) ${'regdate10_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl5_argument'})
,new InsertExpression('`addon`', ${'addon6_argument'})
,new InsertExpression('`is_used`', ${'is_used7_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m8_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars9_argument'})
,new InsertExpression('`regdate`', ${'regdate10_argument'})
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>