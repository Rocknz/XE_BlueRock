<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl16_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl16_argument'}->checkFilter('number');
${'package_srl16_argument'}->checkNotNull();
if(!${'package_srl16_argument'}->isValid()) return ${'package_srl16_argument'}->getErrorMessage();
if(${'package_srl16_argument'} !== null) ${'package_srl16_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl17_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl17_argument'}->checkFilter('number');
if(!${'category_srl17_argument'}->isValid()) return ${'category_srl17_argument'}->getErrorMessage();
} else
${'category_srl17_argument'} = NULL;if(${'category_srl17_argument'} !== null) ${'category_srl17_argument'}->setColumnType('number');

${'path18_argument'} = new Argument('path', $args->{'path'});
${'path18_argument'}->checkNotNull();
if(!${'path18_argument'}->isValid()) return ${'path18_argument'}->getErrorMessage();
if(${'path18_argument'} !== null) ${'path18_argument'}->setColumnType('varchar');

${'have_instance19_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance19_argument'}->checkNotNull();
if(!${'have_instance19_argument'}->isValid()) return ${'have_instance19_argument'}->getErrorMessage();
if(${'have_instance19_argument'} !== null) ${'have_instance19_argument'}->setColumnType('char');

${'updatedate20_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate20_argument'}->checkNotNull();
if(!${'updatedate20_argument'}->isValid()) return ${'updatedate20_argument'}->getErrorMessage();
if(${'updatedate20_argument'} !== null) ${'updatedate20_argument'}->setColumnType('date');

${'latest_item_srl21_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl21_argument'}->checkNotNull();
if(!${'latest_item_srl21_argument'}->isValid()) return ${'latest_item_srl21_argument'}->getErrorMessage();
if(${'latest_item_srl21_argument'} !== null) ${'latest_item_srl21_argument'}->setColumnType('number');

${'version22_argument'} = new Argument('version', $args->{'version'});
${'version22_argument'}->checkNotNull();
if(!${'version22_argument'}->isValid()) return ${'version22_argument'}->getErrorMessage();
if(${'version22_argument'} !== null) ${'version22_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl16_argument'})
,new InsertExpression('`category_srl`', ${'category_srl17_argument'})
,new InsertExpression('`path`', ${'path18_argument'})
,new InsertExpression('`have_instance`', ${'have_instance19_argument'})
,new InsertExpression('`updatedate`', ${'updatedate20_argument'})
,new InsertExpression('`latest_item_srl`', ${'latest_item_srl21_argument'})
,new InsertExpression('`version`', ${'version22_argument'})
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>