<?php define('__XE__', true); require_once('/home/hosting_users/jrj325/www/xe/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="109" parent_srl="0" menu_name_key='게시판' text="<?php if(true) { $_names = array("en"=>'게시판',"ko"=>'게시판',"jp"=>'게시판',"zh-CN"=>'게시판',"zh-TW"=>'게시판',"fr"=>'게시판',"de"=>'게시판',"ru"=>'게시판',"es"=>'게시판',"tr"=>'게시판',"vi"=>'게시판',"mn"=>'게시판',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_EfWu42":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_EfWu42'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="115" parent_srl="0" menu_name_key='ㅁㄴㅇㄹㅎ' text="<?php if(true) { $_names = array("en"=>'게시판',"ko"=>'게시판',"jp"=>'게시판',"zh-CN"=>'게시판',"zh-TW"=>'게시판',"fr"=>'게시판',"de"=>'게시판',"ru"=>'게시판',"es"=>'게시판',"tr"=>'게시판',"vi"=>'게시판',"mn"=>'게시판',"en"=>'ㅁㄴㅇㄹㅎ',"ko"=>'ㅁㄴㅇㄹㅎ',"jp"=>'ㅁㄴㅇㄹㅎ',"zh-CN"=>'ㅁㄴㅇㄹㅎ',"zh-TW"=>'ㅁㄴㅇㄹㅎ',"fr"=>'ㅁㄴㅇㄹㅎ',"de"=>'ㅁㄴㅇㄹㅎ',"ru"=>'ㅁㄴㅇㄹㅎ',"es"=>'ㅁㄴㅇㄹㅎ',"tr"=>'ㅁㄴㅇㄹㅎ',"vi"=>'ㅁㄴㅇㄹㅎ',"mn"=>'ㅁㄴㅇㄹㅎ',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_tnOx15":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_tnOx15'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="117" parent_srl="115" menu_name_key='kjkj' text="<?php if(true) { $_names = array("en"=>'kjkj',"ko"=>'kjkj',"jp"=>'kjkj',"zh-CN"=>'kjkj',"zh-TW"=>'kjkj',"fr"=>'kjkj',"de"=>'kjkj',"ru"=>'kjkj',"es"=>'kjkj',"tr"=>'kjkj',"vi"=>'kjkj',"mn"=>'kjkj',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_EVDl61":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_EVDl61'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node></root>