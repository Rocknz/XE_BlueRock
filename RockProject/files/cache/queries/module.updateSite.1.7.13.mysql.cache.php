<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSite");
$query->setAction("update");
$query->setPriority("");
if(isset($args->index_module_srl)) {
${'index_module_srl288_argument'} = new Argument('index_module_srl', $args->{'index_module_srl'});
if(!${'index_module_srl288_argument'}->isValid()) return ${'index_module_srl288_argument'}->getErrorMessage();
} else
${'index_module_srl288_argument'} = NULL;if(${'index_module_srl288_argument'} !== null) ${'index_module_srl288_argument'}->setColumnType('number');
if(isset($args->domain)) {
${'domain289_argument'} = new Argument('domain', $args->{'domain'});
if(!${'domain289_argument'}->isValid()) return ${'domain289_argument'}->getErrorMessage();
} else
${'domain289_argument'} = NULL;if(${'domain289_argument'} !== null) ${'domain289_argument'}->setColumnType('varchar');
if(isset($args->default_language)) {
${'default_language290_argument'} = new Argument('default_language', $args->{'default_language'});
if(!${'default_language290_argument'}->isValid()) return ${'default_language290_argument'}->getErrorMessage();
} else
${'default_language290_argument'} = NULL;if(${'default_language290_argument'} !== null) ${'default_language290_argument'}->setColumnType('varchar');

${'site_srl291_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl291_argument'}->checkFilter('number');
${'site_srl291_argument'}->checkNotNull();
${'site_srl291_argument'}->createConditionValue();
if(!${'site_srl291_argument'}->isValid()) return ${'site_srl291_argument'}->getErrorMessage();
if(${'site_srl291_argument'} !== null) ${'site_srl291_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`index_module_srl`', ${'index_module_srl288_argument'})
,new UpdateExpression('`domain`', ${'domain289_argument'})
,new UpdateExpression('`default_language`', ${'default_language290_argument'})
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl291_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>