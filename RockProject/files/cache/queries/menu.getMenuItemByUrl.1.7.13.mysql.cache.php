<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url272_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url272_argument'}->checkNotNull();
${'url272_argument'}->createConditionValue();
if(!${'url272_argument'}->isValid()) return ${'url272_argument'}->getErrorMessage();
if(${'url272_argument'} !== null) ${'url272_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut273_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut273_argument'}->createConditionValue();
if(!${'is_shortcut273_argument'}->isValid()) return ${'is_shortcut273_argument'}->getErrorMessage();
} else
${'is_shortcut273_argument'} = NULL;if(${'is_shortcut273_argument'} !== null) ${'is_shortcut273_argument'}->setColumnType('char');

${'site_srl274_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl274_argument'}->checkNotNull();
${'site_srl274_argument'}->createConditionValue();
if(!${'site_srl274_argument'}->isValid()) return ${'site_srl274_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`MI`.`url`',$url272_argument,"equal")
,new ConditionWithArgument('`MI`.`is_shortcut`',$is_shortcut273_argument,"equal", 'and')
,new ConditionSubquery('`MI`.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`xe_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('`M`.`site_srl`',$site_srl274_argument,"equal")))
),
array(),
array(),
null
),"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>