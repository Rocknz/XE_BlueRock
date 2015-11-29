<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/sweetMobile/css/style.css--><?php $__tmp=array('layouts/sweetMobile/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/sweetMobile/css/jquery.mmenu.css--><?php $__tmp=array('layouts/sweetMobile/css/jquery.mmenu.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/sweetMobile/js/mmenu/jquery.mmenu.min.js--><?php $__tmp=array('layouts/sweetMobile/js/mmenu/jquery.mmenu.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/sweetMobile/js/swipe/swipe.js--><?php $__tmp=array('layouts/sweetMobile/js/swipe/swipe.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>
jQuery(function($){
	$("#menu").mmenu({
		slidingSubmenus: false
	});
});
</script>
<div id="page">
	<div id="menu">
		<div class="mm-list mm-panel mm-opened mm-current">
			<div class="xdtMemberL">
				<div class="xdtMemberLinfo">
					<?php 
						$__Context->oModuleModel = getModel('module');
						$__Context->config = $__Context->oModuleModel->getModuleConfig('member');
					 ?>
					<?php if($__Context->config->profile_image == 'Y'){ ?>
						<?php if(!$__Context->logged_info->profile_image->src || !$__Context->is_logged){ ?><img src="/xe/layouts/sweetMobile/img/guest.png" alt="guest" /><?php } ?>
						<?php if($__Context->logged_info->profile_image->src){ ?><img src="<?php echo $__Context->logged_info->profile_image->src ?>" alt="member_profile" /><?php } ?>
					<?php } ?>
					<?php if(!$__Context->is_logged){ ?><span>Guest</span><?php } ?>
					<?php if($__Context->is_logged){ ?><span><?php echo $__Context->logged_info->nick_name ?></span><?php } ?>
				</div>
				<?php if(!$__Context->is_logged){ ?><ul class="xdtMemberLelse">
					<li><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li>
					<li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
				</ul><?php } ?>
				<?php if($__Context->is_logged){ ?><ul class="xdtMemberLelse">
					<li><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
					<?php if($__Context->logged_info->is_admin=='Y'){ ?><li><a href="<?php echo getUrl('','module','admin') ?>"><?php echo $__Context->lang->cmd_management ?></a></li><?php } ?>
					<?php if($__Context->logged_info->is_admin!='Y'){ ?><li><a href="<?php echo getUrl('act','dispMemberInfo') ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li><?php } ?>
				</ul><?php } ?>
			</div>
			<ul class="xdtGnb">
				<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
					<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
					<?php if($__Context->val1['list']){ ?><ul>
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
							<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
						</li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul>
		</div>
	</div>
	<div class="header<?php if($__Context->layout_info->layout_type == 'sub'){ ?> sub<?php } ?>">
		<div class="top">
			<a href="#menu">
				<div class="xdtSideMenu menu-btn">
					<div class="xdtButton xdtBar">
						<div class="btn1"></div>
						<div class="btn2"></div>
						<div class="btn3"></div>
					</div>
				</div>
			</a>
			<div class="logo">
				<a href="<?php echo getUrl() ?>">
					<?php if($__Context->layout_info->logo_image){ ?><img src="<?php echo $__Context->layout_info->logo_image ?>" alt="logo" /><?php } ?>
					<?php if(!$__Context->layout_info->logo_image && $__Context->layout_info->logo_image_alt){ ?><span class="nologo"><?php echo $__Context->layout_info->logo_image_alt ?></span><?php } ?>
					<?php if(!$__Context->layout_info->logo_image && !$__Context->layout_info->logo_image_alt){ ?><span class="nologo">NO LOGO</span><?php } ?>
				</a>
			</div>
			<div class="xdtBtnSearch"></div>
		</div>
		<form action="<?php echo getUrl() ?>" method="post" class="xdtSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
			<?php if($__Context->vid){ ?><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><?php } ?>
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="act" value="IS" />
			<input type="hidden" name="search_target" value="title_content" />
			<div class="inputSubmit">
				<input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" class="submit">
			</div>
			<div class="inputSearch">
				<input name="is_keyword" type="search" class="inputText" title="keyword" placeholder="검색어를 입력하세요" />
				<input type="reset" value="Reset">
			</div>
		</form>
	<?php if($__Context->layout_info->layout_type == 'main'){ ?>
		<!--#Meta:layouts/sweetMobile/js/mansonry/masonry.pkgd.min.js--><?php $__tmp=array('layouts/sweetMobile/js/mansonry/masonry.pkgd.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
		<ul class="mainNavi" id="tsNavMenu">
			<?php 
				$__Context->_items = explode('@',$__Context->layout_info->main_slides_menu);
				$__Context->_width = 100 / count($__Context->_items);
			 ?>
			<?php if($__Context->_items&&count($__Context->_items))foreach($__Context->_items as $__Context->mkey=>$__Context->mval){ ?><li onclick="tsM.pagination(<?php echo $__Context->mkey ?>)" class="pag_<?php echo $__Context->mkey ?> <?php echo $__Context->layout_info->layout_color ?>" style="width:<?php echo $__Context->_width ?>%;"><?php echo $__Context->mval ?></li><?php } ?>
		</ul>
	</div>
	<div class="bodyMain">
		<div id = "tsM"<?php if(!$__Context->act){ ?> class="swipe"<?php } ?>>
			<?php echo $__Context->content ?>
		</div>
	</div>
	<?php }elseif($__Context->layout_info->layout_type == 'map'){ ?>
		<ul class="mapNavi">
			<?php $__Context->_navIdx = 0; ?>
			<?php if($__Context->sitemap_menu->list&&count($__Context->sitemap_menu->list))foreach($__Context->sitemap_menu->list as $__Context->key1=>$__Context->val1){ ?>
				<li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
					<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>>
						<?php if(strpos($__Context->val1['link'], 'img src') !== false){ ?>
							<span class="img"><?php echo $__Context->val1['link'] ?></span>
							<span class="txt"><?php echo $__Context->val1['text'] ?></span>
						<?php }else{ ?>
							<span class="only"><?php echo $__Context->val1['text'] ?></span>
						<?php } ?>
					</a>
				</li>
				<?php $__Context->_navIdx++; ?>
			<?php } ?>
			<!--********* 메뉴를 나열한 후, 4배수가 아닐때 4배수가 되도록 메뉴 항목을 임의로 추가합니다. **********-->
			<?php if($__Context->_navIdx % 4 != 0){ ?>
				<?php $__Context->navDis = $__Context->_navIdx % 4 ?>
				<?php for($__Context->i = 0; $__Context->i < $__Context->navDis; $__Context->i++){ ?>
				<li><a href="#"></a></li>
				<?php } ?>
			<?php } ?>
		</ul>
	</div>
	<div class="body">
		<?php echo $__Context->content ?>
	</div>
	<?php }else{ ?>
	</div>
	<div class="subBody">
		<?php echo $__Context->content ?>
	</div>
	<?php } ?>
	<div class="footer">
		<ul class="tool_menu">
			<?php if(!$__Context->is_logged){ ?>
			<li><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li>
			<li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
			<?php }else{ ?>
			<li><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
			<li><a href="<?php echo getUrl('act','dispMemberInfo') ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li>
			<?php } ?>
			<li><a href="<?php echo getUrl('act','dispModuleChangeLang','oldact',$__Context->act) ?>">LANG</a></li>
			<li><a href="<?php echo getUrl('m',0) ?>">PC</a></li>
		</ul>
		<ul class="footer_menu">
			<?php if($__Context->footer_menu->list&&count($__Context->footer_menu->list))foreach($__Context->footer_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
				<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
			</li><?php } ?>
		</ul>
		<p class="copy"><?php echo $__Context->layout_info->copyrights;
if($__Context->layout_info->copyrights){ ?> | <?php } ?>Designed by HandyXE</p>
	</div>
</div>
<script type="text/javascript">
jQuery(function($){
	$(".xdtBtnSearch").click(function(){
		if(!$(this).hasClass("xdtClose")){
			$(this).addClass("xdtClose");
			$(".xdtSearch").css("display","block");
			$(".xdtSearch").find(".inputText").focus();
		}else{
			$(this).removeClass("xdtClose");
			$(".xdtSearch").css("display","none");
		}
	});
	<?php if($__Context->act == false && $__Context->layout_info->layout_type=='main'){ ?>
	var elem = document.getElementById('tsM');
	window.tsM = SwipeMain(elem, {
	  speed: 200,
	});
	var height = $('#tsM > div div:first-child').height();
	elem.style.height = ( height + 20 ) + 'px';
	$('#tsNavMenu').find('li:first-child').addClass('act');
	$('.bd').addClass('swipe-wrap');
	$(document).ready(function () {
		tsM.setFrame();
	});
	$(".sweetMobileWrap").on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function (e) {
		tsM.setFrame();
	});
	<?php } ?>
	var slidesIndex = $('#tsNavMenu').find('li').length;
	for(msIdx = 1; msIdx <= slidesIndex; msIdx++){
		var container = document.querySelector('.bd > div:nth-child(' + msIdx + ') > div');
		if(container){
			var msnry = new Masonry( container, {
			  // options
			  columnWidth: 0,
			  isAnimated: false,
			  itemSelector: '.sweetMobileWrap'
			});
		}
	}
});
</script>