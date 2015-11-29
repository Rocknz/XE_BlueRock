<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocument");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl201_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl201_argument'}->checkFilter('number');
${'document_srl201_argument'}->checkNotNull();
if(!${'document_srl201_argument'}->isValid()) return ${'document_srl201_argument'}->getErrorMessage();
if(${'document_srl201_argument'} !== null) ${'document_srl201_argument'}->setColumnType('number');

${'module_srl202_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl202_argument'}->checkFilter('number');
${'module_srl202_argument'}->ensureDefaultValue('0');
if(!${'module_srl202_argument'}->isValid()) return ${'module_srl202_argument'}->getErrorMessage();
if(${'module_srl202_argument'} !== null) ${'module_srl202_argument'}->setColumnType('number');

${'category_srl203_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl203_argument'}->checkFilter('number');
${'category_srl203_argument'}->ensureDefaultValue('0');
if(!${'category_srl203_argument'}->isValid()) return ${'category_srl203_argument'}->getErrorMessage();
if(${'category_srl203_argument'} !== null) ${'category_srl203_argument'}->setColumnType('number');

${'lang_code204_argument'} = new Argument('lang_code', $args->{'lang_code'});
${'lang_code204_argument'}->ensureDefaultValue('');
if(!${'lang_code204_argument'}->isValid()) return ${'lang_code204_argument'}->getErrorMessage();
if(${'lang_code204_argument'} !== null) ${'lang_code204_argument'}->setColumnType('varchar');

${'is_notice205_argument'} = new Argument('is_notice', $args->{'is_notice'});
${'is_notice205_argument'}->ensureDefaultValue('N');
${'is_notice205_argument'}->checkNotNull();
if(!${'is_notice205_argument'}->isValid()) return ${'is_notice205_argument'}->getErrorMessage();
if(${'is_notice205_argument'} !== null) ${'is_notice205_argument'}->setColumnType('char');

${'title206_argument'} = new Argument('title', $args->{'title'});
${'title206_argument'}->checkNotNull();
if(!${'title206_argument'}->isValid()) return ${'title206_argument'}->getErrorMessage();
if(${'title206_argument'} !== null) ${'title206_argument'}->setColumnType('varchar');

${'title_bold207_argument'} = new Argument('title_bold', $args->{'title_bold'});
${'title_bold207_argument'}->ensureDefaultValue('N');
if(!${'title_bold207_argument'}->isValid()) return ${'title_bold207_argument'}->getErrorMessage();
if(${'title_bold207_argument'} !== null) ${'title_bold207_argument'}->setColumnType('char');

${'title_color208_argument'} = new Argument('title_color', $args->{'title_color'});
${'title_color208_argument'}->ensureDefaultValue('N');
if(!${'title_color208_argument'}->isValid()) return ${'title_color208_argument'}->getErrorMessage();
if(${'title_color208_argument'} !== null) ${'title_color208_argument'}->setColumnType('varchar');

${'content209_argument'} = new Argument('content', $args->{'content'});
${'content209_argument'}->checkNotNull();
if(!${'content209_argument'}->isValid()) return ${'content209_argument'}->getErrorMessage();
if(${'content209_argument'} !== null) ${'content209_argument'}->setColumnType('bigtext');

${'readed_count210_argument'} = new Argument('readed_count', $args->{'readed_count'});
${'readed_count210_argument'}->ensureDefaultValue('0');
if(!${'readed_count210_argument'}->isValid()) return ${'readed_count210_argument'}->getErrorMessage();
if(${'readed_count210_argument'} !== null) ${'readed_count210_argument'}->setColumnType('number');

${'blamed_count211_argument'} = new Argument('blamed_count', $args->{'blamed_count'});
${'blamed_count211_argument'}->ensureDefaultValue('0');
if(!${'blamed_count211_argument'}->isValid()) return ${'blamed_count211_argument'}->getErrorMessage();
if(${'blamed_count211_argument'} !== null) ${'blamed_count211_argument'}->setColumnType('number');

${'voted_count212_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count212_argument'}->ensureDefaultValue('0');
if(!${'voted_count212_argument'}->isValid()) return ${'voted_count212_argument'}->getErrorMessage();
if(${'voted_count212_argument'} !== null) ${'voted_count212_argument'}->setColumnType('number');

${'comment_count213_argument'} = new Argument('comment_count', $args->{'comment_count'});
${'comment_count213_argument'}->ensureDefaultValue('0');
if(!${'comment_count213_argument'}->isValid()) return ${'comment_count213_argument'}->getErrorMessage();
if(${'comment_count213_argument'} !== null) ${'comment_count213_argument'}->setColumnType('number');

${'trackback_count214_argument'} = new Argument('trackback_count', $args->{'trackback_count'});
${'trackback_count214_argument'}->ensureDefaultValue('0');
if(!${'trackback_count214_argument'}->isValid()) return ${'trackback_count214_argument'}->getErrorMessage();
if(${'trackback_count214_argument'} !== null) ${'trackback_count214_argument'}->setColumnType('number');

${'uploaded_count215_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count215_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count215_argument'}->isValid()) return ${'uploaded_count215_argument'}->getErrorMessage();
if(${'uploaded_count215_argument'} !== null) ${'uploaded_count215_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password216_argument'} = new Argument('password', $args->{'password'});
if(!${'password216_argument'}->isValid()) return ${'password216_argument'}->getErrorMessage();
} else
${'password216_argument'} = NULL;if(${'password216_argument'} !== null) ${'password216_argument'}->setColumnType('varchar');

${'nick_name217_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name217_argument'}->checkNotNull();
if(!${'nick_name217_argument'}->isValid()) return ${'nick_name217_argument'}->getErrorMessage();
if(${'nick_name217_argument'} !== null) ${'nick_name217_argument'}->setColumnType('varchar');

${'member_srl218_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl218_argument'}->checkFilter('number');
${'member_srl218_argument'}->ensureDefaultValue('0');
if(!${'member_srl218_argument'}->isValid()) return ${'member_srl218_argument'}->getErrorMessage();
if(${'member_srl218_argument'} !== null) ${'member_srl218_argument'}->setColumnType('number');

${'user_id219_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id219_argument'}->ensureDefaultValue('');
if(!${'user_id219_argument'}->isValid()) return ${'user_id219_argument'}->getErrorMessage();
if(${'user_id219_argument'} !== null) ${'user_id219_argument'}->setColumnType('varchar');

${'user_name220_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name220_argument'}->ensureDefaultValue('');
if(!${'user_name220_argument'}->isValid()) return ${'user_name220_argument'}->getErrorMessage();
if(${'user_name220_argument'} !== null) ${'user_name220_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address221_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address221_argument'}->checkFilter('email');
if(!${'email_address221_argument'}->isValid()) return ${'email_address221_argument'}->getErrorMessage();
} else
${'email_address221_argument'} = NULL;if(${'email_address221_argument'} !== null) ${'email_address221_argument'}->setColumnType('varchar');

${'homepage222_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage222_argument'}->checkFilter('homepage');
${'homepage222_argument'}->ensureDefaultValue('');
if(!${'homepage222_argument'}->isValid()) return ${'homepage222_argument'}->getErrorMessage();
if(${'homepage222_argument'} !== null) ${'homepage222_argument'}->setColumnType('varchar');
if(isset($args->tags)) {
${'tags223_argument'} = new Argument('tags', $args->{'tags'});
if(!${'tags223_argument'}->isValid()) return ${'tags223_argument'}->getErrorMessage();
} else
${'tags223_argument'} = NULL;if(${'tags223_argument'} !== null) ${'tags223_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars224_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars224_argument'}->isValid()) return ${'extra_vars224_argument'}->getErrorMessage();
} else
${'extra_vars224_argument'} = NULL;if(${'extra_vars224_argument'} !== null) ${'extra_vars224_argument'}->setColumnType('text');

${'regdate225_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate225_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate225_argument'}->isValid()) return ${'regdate225_argument'}->getErrorMessage();
if(${'regdate225_argument'} !== null) ${'regdate225_argument'}->setColumnType('date');

${'last_update226_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update226_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update226_argument'}->isValid()) return ${'last_update226_argument'}->getErrorMessage();
if(${'last_update226_argument'} !== null) ${'last_update226_argument'}->setColumnType('date');
if(isset($args->last_updater)) {
${'last_updater227_argument'} = new Argument('last_updater', $args->{'last_updater'});
if(!${'last_updater227_argument'}->isValid()) return ${'last_updater227_argument'}->getErrorMessage();
} else
${'last_updater227_argument'} = NULL;if(${'last_updater227_argument'} !== null) ${'last_updater227_argument'}->setColumnType('varchar');

${'ipaddress228_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress228_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress228_argument'}->isValid()) return ${'ipaddress228_argument'}->getErrorMessage();
if(${'ipaddress228_argument'} !== null) ${'ipaddress228_argument'}->setColumnType('varchar');

${'list_order229_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order229_argument'}->ensureDefaultValue('0');
if(!${'list_order229_argument'}->isValid()) return ${'list_order229_argument'}->getErrorMessage();
if(${'list_order229_argument'} !== null) ${'list_order229_argument'}->setColumnType('number');

${'update_order230_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order230_argument'}->ensureDefaultValue('0');
if(!${'update_order230_argument'}->isValid()) return ${'update_order230_argument'}->getErrorMessage();
if(${'update_order230_argument'} !== null) ${'update_order230_argument'}->setColumnType('number');

${'allow_trackback231_argument'} = new Argument('allow_trackback', $args->{'allow_trackback'});
${'allow_trackback231_argument'}->ensureDefaultValue('Y');
if(!${'allow_trackback231_argument'}->isValid()) return ${'allow_trackback231_argument'}->getErrorMessage();
if(${'allow_trackback231_argument'} !== null) ${'allow_trackback231_argument'}->setColumnType('char');

${'notify_message232_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message232_argument'}->ensureDefaultValue('N');
if(!${'notify_message232_argument'}->isValid()) return ${'notify_message232_argument'}->getErrorMessage();
if(${'notify_message232_argument'} !== null) ${'notify_message232_argument'}->setColumnType('char');

${'status233_argument'} = new Argument('status', $args->{'status'});
${'status233_argument'}->ensureDefaultValue('PUBLIC');
if(!${'status233_argument'}->isValid()) return ${'status233_argument'}->getErrorMessage();
if(${'status233_argument'} !== null) ${'status233_argument'}->setColumnType('varchar');

${'commentStatus234_argument'} = new Argument('commentStatus', $args->{'commentStatus'});
${'commentStatus234_argument'}->ensureDefaultValue('ALLOW');
if(!${'commentStatus234_argument'}->isValid()) return ${'commentStatus234_argument'}->getErrorMessage();
if(${'commentStatus234_argument'} !== null) ${'commentStatus234_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl201_argument'})
,new InsertExpression('`module_srl`', ${'module_srl202_argument'})
,new InsertExpression('`category_srl`', ${'category_srl203_argument'})
,new InsertExpression('`lang_code`', ${'lang_code204_argument'})
,new InsertExpression('`is_notice`', ${'is_notice205_argument'})
,new InsertExpression('`title`', ${'title206_argument'})
,new InsertExpression('`title_bold`', ${'title_bold207_argument'})
,new InsertExpression('`title_color`', ${'title_color208_argument'})
,new InsertExpression('`content`', ${'content209_argument'})
,new InsertExpression('`readed_count`', ${'readed_count210_argument'})
,new InsertExpression('`blamed_count`', ${'blamed_count211_argument'})
,new InsertExpression('`voted_count`', ${'voted_count212_argument'})
,new InsertExpression('`comment_count`', ${'comment_count213_argument'})
,new InsertExpression('`trackback_count`', ${'trackback_count214_argument'})
,new InsertExpression('`uploaded_count`', ${'uploaded_count215_argument'})
,new InsertExpression('`password`', ${'password216_argument'})
,new InsertExpression('`nick_name`', ${'nick_name217_argument'})
,new InsertExpression('`member_srl`', ${'member_srl218_argument'})
,new InsertExpression('`user_id`', ${'user_id219_argument'})
,new InsertExpression('`user_name`', ${'user_name220_argument'})
,new InsertExpression('`email_address`', ${'email_address221_argument'})
,new InsertExpression('`homepage`', ${'homepage222_argument'})
,new InsertExpression('`tags`', ${'tags223_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars224_argument'})
,new InsertExpression('`regdate`', ${'regdate225_argument'})
,new InsertExpression('`last_update`', ${'last_update226_argument'})
,new InsertExpression('`last_updater`', ${'last_updater227_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress228_argument'})
,new InsertExpression('`list_order`', ${'list_order229_argument'})
,new InsertExpression('`update_order`', ${'update_order230_argument'})
,new InsertExpression('`allow_trackback`', ${'allow_trackback231_argument'})
,new InsertExpression('`notify_message`', ${'notify_message232_argument'})
,new InsertExpression('`status`', ${'status233_argument'})
,new InsertExpression('`comment_status`', ${'commentStatus234_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>