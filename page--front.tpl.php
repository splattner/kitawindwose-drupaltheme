<div id="nonFooter">
	<div id="marginFix" style="height: 100px;"></div>
	<div id="frontWrapper">
		<p>
			<a href="/tagi"><img width="250" src="sites/all/themes/windrose/images/logo_tagi_500px.png" /></a>
       		<a href="/nepomuk"><img width="250" src="sites/all/themes/windrose/images/logo_nepomuk_500px.png" /></a>
			<a href="/krippe"><img width="250" src="sites/all/themes/windrose/images/logo_kita_500px.png" /></a>
     
		</p>
		<p class="welcometitle">
      		Willkommen in der Kinderkrippe &amp; Sch&uuml;lertagesst&auml;tte Windrose in Langenthal
    	</p>
	</div>
</div>
<div id="footer">
		<div id="logo"><img width="200" src="sites/all/themes/windrose/images/logo-windrose-neu.png" /></div>
		Kinderkrippe & Sch&uuml;lertagess&auml;tte Windrose | Krippenstrasse 23 | 4900 Langenthal
		<?php global $user; if (!$user->uid) : ?> | <a href="?q=user">login</a><?php else: ?> | <a href="?q=user/logout">logout</a> <?php endif; ?>
</div>