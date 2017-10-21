	<div id="nonFooter">
	<div id="jump">
		<?php 
			$krippe = array(4,14,15,16,18,19,17,20,33);
			$tagi = array(1,8,10,13,9,11,12,3,32);
			$nepomuk = array(23,24,25,26,27,28,29,30,34);

			//print_r($node);

			$current_path =  request_path();

			$path = explode("-", $current_path);

			if(count($path) == 2) {
				$current_site = $path[0] . "-";
			} else {
				$current_site = "";
			}

			
			// Tagi
			if (in_array($node->nid, $tagi)) {
				echo "<a href='/" . $current_site . "tagi'><img width='100' src='sites/all/themes/windrose/images/logo_tagi_100px.png' /></a>";
			} else {
				echo "<a href='/" . $current_site . "tagi'><img width='100' src='sites/all/themes/windrose/images/logo_tagi_100px_sw.png' /></a>";
			}

			//Krippe
			if (in_array($node->nid, $krippe)) {
				echo "<a href='/" . $current_site . "krippe'><img width='100' src='sites/all/themes/windrose/images/logo_kita_100px.png' /></a>";
			} else {
				echo "<a href='/" . $current_site . "krippe'><img width='100' src='sites/all/themes/windrose/images/logo_kita_100px_sw.png' /></a>";
			}
			echo "<br />";

			//Nepomuk
			if (in_array($node->nid, $nepomuk)) {
				echo "<a href='/" . $current_site . "nepomuk'><img width='100' src='sites/all/themes/windrose/images/logo_nepomuk_100px.png' /></a>";
			} else {
				echo "<a href='/" . $current_site . "nepomuk'><img width='100' src='sites/all/themes/windrose/images/logo_nepomuk_100px_sw.png' /></a>";
			}

			
		?>
		
	</div>
	<div id="header">
		<?php print render($page['header']); ?>
	</div>
	<div id="main">
		<div id="navigation">

			
			<?php print render($page['sidebar_first']); ?>
			<?php if ($main_menu): ?>
      			<?php print theme('links', $main_menu); ?>
    		<?php endif; ?>
		</div>
		<div id="contentWrapper">
			<?php print $messages; ?>
			
			<?php print render($title_prefix); ?>
        	<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        	<?php print render($title_suffix); ?>
			
			<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
       		<?php print render($page['help']); ?>
        	<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
			<?php print render($page['content']); ?>
			<?php print $feed_icons; ?>
		</div>
	</div>

</div>
<div id="footer">
		<div id="logo"><img width="200" src="sites/all/themes/windrose/images/logo-windrose-neu.png" /></div>
		Kinderkrippe & Sch&uuml;lertagesst&auml;tte Windrose | Krippenstrasse 23 | 4900 Langenthal
		<?php global $user; if (!$user->uid) : ?> | <a href="?q=user">login</a><?php else: ?> | <a href="?q=user/logout">logout</a> <?php endif; ?>
</div>