<div class="lyrics-header-info group">
	<div class="info-content otr">
		<div>
			<h1 class="txt-primary">{$lyrics.title} </h1> <span class="zadash">-</span>
			<div class="inline">
				<h2 class="txt-primary"><a href="{$lyrics.search_by_artist}" title="Find lyrics of {$lyrics.artist}">{$lyrics.artist}</a></h2>
			</div>
		</div>
	</div>
</div>
<div class="section section mt20">
	<div class="media-func group fn-tabgroup">
		<a id="tabService" href="javascript:;" class="button-style-1 pull-left fn-tab hide_on_mobile"><i class="fa fa-download"></i> Download</a>
		<a id="tabShare" href="javascript:;" class="button-style-1 pull-left fn-tab"><i class="fa fa-share"></i> Share</a>
		<a href="https://www.amazon.com/s/ref={$config.amazon_aff}&url=search-alias%3Daps&field-keywords={$lyrics.title|urldecode}+{$lyrics.artist|urldecode}&tag=azmo-20" class="button-style-1 pull-left" target="_blank"><i class="fa fa-amazon"></i> Buy MP3</a>
		<a href="{$config.site_url}itunes.php?term={$lyrics.title|urldecode}+{$lyrics.artist|urldecode}" class="button-style-1 pull-left" target="_blank"><i class="fa fa-apple"></i> iTunes</a>

	</div>
	<div class="tab-pane line-bottom none fn-tab-panel fn-tab-panel-service po-r">
		<div class="service-container fn-sub-panel">
			<div class="row mb0">
				<div class="col-4">
					<ul class="dl-service fn-list">
						<li><a class="button btn-dark-blue small-button fn-320 fn-viprequire" href="{$lyrics.txt}"><i class="fa fa-file-text"></i> Text</a><b>Text file is a kind of computer file that is structured as a sequence of lines of electronic text.</b></li>
						<li><a class="button btn-dark-blue small-button fn-320 fn-viprequire" href="{$lyrics.word}"><i class="fa fa-file-word-o"></i> Word</a><b>Use for Microsoft Office Word or Open Office</b></li>
						<li><a class="button btn-dark-blue small-button fn-lossless fn-viprequire" href="{$lyrics.pdf}"><i class="fa fa-file-pdf-o"></i> PDF</a><b>Use for Abobe Acrobat</b></li>
					</ul>
				</div>
			</div>
		</div>
		<span class="close fn-closetab"></span>
	</div>
	<div class="tab-pane line-bottom none fn-tab-panel fn-tab-panel-share po-r">
		<div class="fn-sub-panel fn-sub-embed embed-container" id="embedBox">
			<div class="share-icons">
				<a href="https://www.facebook.com/sharer.php?u={$current_url}" target="_blank"><i class="fa fa-facebook-square" style="color:#29487d"></i></a>
				<a href="http://twitter.com/share?url={$current_url}&hashtags=baebomlyrics" target="_blank"><i class="fa fa-twitter-square" style="color:#1da1f2"></i></a>
			</div>
			<div class="context outside-textarea">
				<label class="ltitle">Embed code</label>
				<textarea id="embed" name="" cols="30" rows="10">{$lyrics.content}</textarea>
			</div>
			<div class="clearfix"></div>
		</div>
		<span class="close fn-closetab"></span>
	</div>
    <div id="videoplayer" class="none"></div>
	<div class="tab-pane fn-tab-videos none" style="margin-bottom: 20px">
        <div class="swiper-arrow-left"><i class="fa fa-chevron-left"></i></div>
        <div class="swiper-arrow-right"><i class="fa fa-chevron-right"></i></div>
        <div class="swiper-container">
            <div class="swiper-wrapper"></div>
        </div>

	</div>
	<div class="tab-pane fn-tab-panel-lyrics">
		<div id="_lyricContainer" class="content-block lyric-content">
			<div class="_lyricItem ">
				<h3><strong>{$lyrics.title} - {$lyrics.artist} Lyrics</strong></h3>
				<p id="lyrics" expand="rows4" class="_lyricContent">
					<br />
					{if ! $lyrics.content}
						Missing lyrics {$lyrics.title}!!!<br /> Know lyrics {$lyrics.title} by {$lyrics.artist}? Don't keep it to yourself! <a href="{$config.site_url}add?hash={$lyrics.hash}">Submit Now</a>
					{else}
						{$lyrics.content}
					{/if}
				</p>
			</div>
			<div class="iLyric"> <span> {$lyrics.title} lyrics !!!</span> </div>
		</div>
	</div>
	<div class="fb-comments" data-href="{$current_url}" data-numposts="5" data-width="100%"></div>
	<div class="tab-pane line-bottom none" id="newLyrics">
		<div class="tab-menu group">
			<ul>
				<li><a class="fn-tab" data-group=".fn-sub-panel-share" data-panel=".fn-sub-lyrics" href="#">Lyrics</a></li>
			</ul>
		</div>
		<div class="frm-lyrics group fn-sub-panel fn-sub-lyrics">
			<form name="frmLyrics" id="frmLyrics" action="/xhr/mydata/new-lyrics" method="post">
				<textarea name="content" cols="30" rows="10"></textarea>
				<input type="hidden" name="song_id" id="song_id" value="ZW7ODZ69" />
				<button class="button btn-dark-blue pull-right">Submit</button></form>
			<span class="close fn-close" data-box="#newLyrics"></span>
		</div>
	</div>
</div>
<script>
    $(document).ready(function(){
        youtube('{$lyrics.title|urlencode}+{$lyrics.artist|urlencode}');
    });
</script>