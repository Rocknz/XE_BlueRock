<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl153_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl153_argument'}->ensureDefaultValue('0');
${'site_srl153_argument'}->checkNotNull();
if(!${'site_srl153_argument'}->isValid()) return ${'site_srl153_argument'}->getErrorMessage();
if(${'site_srl153_argument'} !== null) ${'site_srl153_argument'}->setColumnType('number');

${'module_srl154_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl154_argument'}->checkNotNull();
if(!${'module_srl154_argument'}->isValid()) return ${'module_srl154_argument'}->getErrorMessage();
if(${'module_srl154_argument'} !== null) ${'module_srl154_argument'}->setColumnType('number');

${'module_category_srl155_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl155_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl155_argument'}->isValid()) return ${'module_category_srl155_argument'}->getErrorMessage();
if(${'module_category_srl155_argument'} !== null) ${'module_category_srl155_argument'}->setColumnType('number');

${'mid156_argument'} = new Argument('mid', $args->{'mid'});
${'mid156_argument'}->checkNotNull();
if(!${'mid156_argument'}->isValid()) return ${'mid156_argument'}->getErrorMessage();
if(${'mid156_argument'} !== null) ${'mid156_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin157_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin157_argument'}->isValid()) return ${'skin157_argument'}->getErrorMessage();
} else
${'skin157_argument'} = NULL;if(${'skin157_argument'} !== null) ${'skin157_argument'}->setColumnType('varchar');

${'is_skin_fix158_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix158_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix158_argument'}->isValid()) return ${'is_skin_fix158_argument'}->getErrorMessage();
if(${'is_skin_fix158_argument'} !== null) ${'is_skin_fix158_argument'}->setColumnType('char');

${'is_mskin_fix159_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix159_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix159_argument'}->isValid()) return ${'is_mskin_fix159_argument'}->getErrorMessage();
if(${'is_mskin_fix159_argument'} !== null) ${'is_mskin_fix159_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin160_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin160_argument'}->isValid()) return ${'mskin160_argument'}->getErrorMessage();
} else
${'mskin160_argument'} = NULL;if(${'mskin160_argument'} !== null) ${'mskin160_argument'}->setColumnType('varchar');

${'browser_title161_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title161_argument'}->checkNotNull();
if(!${'browser_title161_argument'}->isValid()) return ${'browser_title161_argument'}->getErrorMessage();
if(${'browser_title161_argument'} !== null) ${'browser_title161_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl162_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl162_argument'}->isValid()) return ${'layout_srl162_argument'}->getErrorMessage();
} else
${'layout_srl162_argument'} = NULL;if(${'layout_srl162_argument'} !== null) ${'layout_srl162_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description163_argument'} = new Argument('description', $args->{'description'});
if(!${'description163_argument'}->isValid()) return ${'description163_argument'}->getErrorMessage();
} else
${'description163_argument'} = NULL;if(${'description163_argument'} !== null) ${'description163_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content164_argument'} = new Argument('content', $args->{'content'});
if(!${'content164_argument'}->isValid()) return ${'content164_argument'}->getErrorMessage();
} else
${'content164_argument'} = NULL;if(${'content164_argument'} !== null) ${'content164_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent165_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent165_argument'}->isValid()) return ${'mcontent165_argument'}->getErrorMessage();
} else
${'mcontent165_argument'} = NULL;if(${'mcontent165_argument'} !== null) ${'mcontent165_argument'}->setColumnType('bigtext');

${'module166_argument'} = new Argument('module', $args->{'module'});
${'module166_argument'}->checkNotNull();
if(!${'module166_argument'}->isValid()) return ${'module166_argument'}->getErrorMessage();
if(${'module166_argument'} !== null) ${'module166_argument'}->setColumnType('varchar');

${'is_default167_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default167_argument'}->ensureDefaultValue('N');
${'is_default167_argument'}->checkNotNull();
if(!${'is_default167_argument'}->isValid()) return ${'is_default167_argument'}->getErrorMessage();
if(${'is_default167_argument'} !== null) ${'is_default167_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl168_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl168_argument'}->checkFilter('number');
if(!${'menu_srl168_argument'}->isValid()) return ${'menu_srl168_argument'}->getErrorMessage();
} else
${'menu_srl168_argument'} = NULL;if(${'menu_srl168_argument'} !== null) ${'menu_srl168_argument'}->setColumnType('number');

${'open_rss169_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss169_argument'}->ensureDefaultValue('Y');
${'open_rss169_argument'}->checkNotNull();
if(!${'open_rss169_argument'}->isValid()) return ${'open_rss169_argument'}->getErrorMessage();
if(${'open_rss169_argument'} !== null) ${'open_rss169_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text170_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text170_argument'}->isValid()) return ${'header_text170_argument'}->getErrorMessage();
} else
${'header_text170_argument'} = NULL;if(${'header_text170_argument'} !== null) ${'header_text170_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text171_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text171_argument'}->isValid()) return ${'footer_text171_argument'}->getErrorMessage();
} else
${'footer_text171_argument'} = NULL;if(${'footer_text171_argument'} !== null) ${'footer_text171_argument'}->setColumnType('text');

${'regdate172_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate172_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate172_argument'}->isValid()) return ${'regdate172_argument'}->getErrorMessage();
if(${'regdate172_argument'} !== null) ${'regdate172_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl173_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl173_argument'}->isValid()) return ${'mlayout_srl173_argument'}->getErrorMessage();
} else
${'mlayout_srl173_argument'} = NULL;if(${'mlayout_srl173_argument'} !== null) ${'mlayout_srl173_argument'}->setColumnType('number');

${'use_mobile174_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile174_argument'}->ensureDefaultValue('N');
if(!${'use_mobile174_argument'}->isValid()) return ${'use_mobile174_argument'}->getErrorMessage();
if(${'use_mobile174_argument'} !== null) ${'use_mobile174_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl153_argument'})
,new InsertExpression('`module_srl`', ${'module_srl154_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl155_argument'})
,new InsertExpression('`mid`', ${'mid156_argument'})
,new InsertExpression('`skin`', ${'skin157_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix158_argument'})
,new InsertExpression('`is_mskin_fix`', ${'is_mskin_fix159_argument'})
,new InsertExpression('`mskin`', ${'mskin160_argument'})
,new InsertExpression('`browser_title`', ${'browser_title161_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl162_argument'})
,new InsertExpression('`description`', ${'description163_argument'})
,new InsertExpression('`content`', ${'content164_argument'})
,new InsertExpression('`mcontent`', ${'mcontent165_argument'})
,new InsertExpression('`module`', ${'module166_argument'})
,new InsertExpression('`is_default`', ${'is_default167_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl168_argument'})
,new InsertExpression('`open_rss`', ${'open_rss169_argument'})
,new InsertExpression('`header_text`', ${'header_text170_argument'})
,new InsertExpression('`footer_text`', ${'footer_text171_argument'})
,new InsertExpression('`regdate`', ${'regdate172_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl173_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile174_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>