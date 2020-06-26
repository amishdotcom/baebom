<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{$site_title}</title>
	<meta name="description" content="{$description}" />
	<meta name="keywords" content="{$site_keywords}" />
	<meta property="og:description" content="{$description}" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- twitter -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:url" content="SET_YOUR" />
	<meta name="twitter:site" content="@SET_YOUR" />
	<meta name="twitter:title" content="{$site_title}" />
	<meta name="twitter:description" content="{$description}" />
	<meta name="twitter:image" content="{$config.site_url}templates/Default/images/baebom.svg" />

	<!-- facebook -->
	<meta property="fb:app_id" content="SET_YOUR" />
	<meta property="og:site_name" content="{$site_title}" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="{$site_title}" />
	<meta property="og:description" content="{$description}" />
	<meta property="og:image" content="{$config.site_url}templates/Default/images/baebom.svg" />
	<meta property="og:image:width" content="200" />
	<meta property="og:image:height" content="200" />

	<link rel="shortcut icon" type="image/png" href="{$config.site_url}templates/Default/images/favicon.png"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="{$config.site_url}templates/Default/css/style.css" media="all" type="text/css" />
	<link rel="stylesheet" href="{$config.site_url}templates/Default/css/icons.css" media="all" type="text/css" />
	<link rel="stylesheet" href="{$config.site_url}templates/Default/css/swiper.min.css" media="all" type="text/css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script type="text/javascript" src="{$config.site_url}libs/js/swiper.min.js"></script>
    {$javascript_config}
</head>
<body>
	<div id="fb-root"></div>
	<header>
		<div class="container group">
			<div class="logo">
				<a href="/" title="baebom" class="hide-text"><img src="{$config.site_url}templates/Default/images/logo.png" alt="baebom" height="40px"/></a>
			</div>
			<div class="section-search" id="sug">
				<form class="search" method="get" action="{$config.site_url}search.html" id="_lyricsSearch" action="" onsubmit="check_search();return false;">
					<input type="text" autocomplete="off" class="input-txt" placeholder="Enter lyrics title or artist name" name="q" id="search_keyword" >
					<span class="input-btn">
						<button class="zicon btn hide-text" type="submit">Search</button>
					</span>
				</form>
			</div>
			<div class = "baebom__main_logo"/></div>
			<div class="share-icons hide_on_mobile">
				<a href="{$config.facebook_fan_page}" target="_blank"><i class="fa fa-facebook-square"></i></a> <a href="{$config.twitter_page}" target="_blank"><i class="fa fa-twitter-square"></i></a>
			</div>
		</div>
	</header>
	<div class="wrapper-page">
		<div class="wrap-body container col-12 no-padding">
			<div class="wrap-content col-9">
				{$config.ad_responsive|urldecode}
				{$content}
				{$config.ad_responsive|urldecode}
			</div>
			<div class="wrap-sidebar col-3">
				{$config.ad_responsive|urldecode}
				{if $PATH == 'view'}
				<div class="widget widget-countdown">
					<h3 class="title-section sz-title-sm">{$lyrics.artist} Lyrics</h3>
					<div class="widget-content no-padding no-border" id="songRec">
						<ul class="fn-list">
							{section name=row loop=$related}
							<li class="fn-item">
								<a href="{$related[row].view_url}" title="{$related[row].title|stripslashes} - {$related[row].artist|stripslashes} lyrics" class="thumb fn-link"> <img class="fn-thumb" width="50" src="{$related[row].cover}" alt="{$related[row].title|stripslashes} - {$related[row].artist|stripslashes} lyrics" /> </a>
								<h3 class="song-name ellipsis"><a href="{$related[row].view_url}" title="{$related[row].title|stripslashes} - {$related[row].artist|stripslashes} lyrics" class="txt-primary fn-link fn-name">{$related[row].title|stripslashes}</a></h3>
								<div class="inblock ellipsis fn-artist_list">
									<h4 class="singer-name txt-info fn-artist"><a href="{$related[row].search_by_artist}" title="Find {$related[row].artist|stripslashes} lyrics">{$related[row].artist|stripslashes}</a></h4>
								</div>
							</li>
							{/section}
						</ul>
					</div>
				</div>
				{/if}
				<div class="widget widget-tab hide_on_mobile">
					<h3 class="title-section sz-title-sm"> <a title="R&B/Soul song lyric" class="fn-detail_link _chart_song">R&B/Soul song lyric</i></a></h3>
					<div class="tab-pane widget-song-countdown">
						<div class="widget-content no-padding no-border _chart_song">
							<ul class="fn-list">
								{foreach from=$soul item=i name=foo}
									{include file = 'lyrics_item/widget.html'}
								{/foreach}
							</ul>
						</div>
					</div>
				</div>
				<div class="widget widget-tab hide_on_mobile">
					<h3 class="title-section sz-title-sm"> <a title="Country song lyrics" class="fn-detail_link _chart_song">Country song lyrics</i></a></h3>
					<div class="tab-pane widget-song-countdown">
						<div class="widget-content no-padding no-border _chart_song">
							<ul class="fn-list">
							{foreach from=$ct item=i name=foo}
								{if ($smarty.foreach.foo.index) < 15}
								{if ($smarty.foreach.foo.index) == 0}
								<li class="fn-first first-item fn-song">
									<a class="zthumb fn-link" href="{$i.view_url}">
										<img alt="" class="fn-thumb"  src="{$config.site_url}templates/Default/images/space.gif" style="background-color: transparent; background-image: url(&quot;{$i.cover|replace:'60x60':'300x300'}&quot;); background-repeat: no-repeat; background-attachment: scroll; background-position: center center; -moz-background-size: auto auto; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial; background-size: cover;">
									</a>
									<div class="des"> <span class="rank rank-1 fn-order">1</span>
										<h3 class="song-name ellipsis"><a class="txt-primary fn-link fn-name" href="{$i.view_url}">{$i.title|stripslashes}</a></h3>
										<div class="inblock singer-name ellipsis fn-artist_list">
											<h4 class="txt-info fn-artist"><a href="{$i.search_by_artist}" title="{$i.artist|stripslashes} lyrics">{$i.artist|stripslashes}</a></h4></div>
									</div> <span class="item-mask"></span>
								</li>
								{else}
								<li class="fn-item fn-song"> <span class="rank rank-{$smarty.foreach.foo.index+1} fn-order">{$smarty.foreach.foo.index+1}</span>
									<h3 class="song-name ellipsis"><a title="{$i.title|stripslashes} by {$i.artist|stripslashes} lyrics" class="txt-primary fn-link fn-name" href="{$i.view_url}">{$i.title|stripslashes}</a></h3>
									<div class="inblock singer-name ellipsis fn-artist_list">
										<h4 class="txt-info fn-artist"><a href="{$i.search_by_artist}" title="{$i.artist|stripslashes} lyrics">{$i.artist|stripslashes}</a></h4>
									</div>
								</li>
								{/if}
								{/if}
							{/foreach}
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<footer class="col-12">
		<div class="container">
			<div class="row" style="margin-top: 0">
				<div class="copyright" itemscope itemtype="http://schema.org/Organization">
					<p><a href="{$config.site_url}add">Submit Lyrics</a> <a href="{$config.site_url}exclusive/about">About</a> <a href="{$config.site_url}exclusive/policy">Privacy Policy</a> <a href="{$config.site_url}exclusive/terms">Terms</a> <a href="mailto:founder@cybertronics.org.in">Contact</a> <a href="{$config.site_url}exclusive/dmca">DMCA</a> <a href="{$config.site_url}exclusive/developer">Developer</a> <a href="{$config.site_url}exclusive/donate">Donate</a> <a href="{$config.site_url}exclusive/disclaimer">Disclaimer</a></p>
					<p style="font-size: 12px;">All lyrics are property and copyright of their owners. All lyrics provided for non commercial and personal use only.</p>
					<p>&copy; 2019 - 2020 <a href="https://www.cybertronics.org.in/" target="_blank"><span itemprop="name">Cybertronics</span></a></p>
				</div>
			</div>
		</div>
	</footer>
    <script type="text/javascript" src="{$config.site_url}libs/js/common.js"></script>
    {$config.analytics_code}
	<script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=259712504407178";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>