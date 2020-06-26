<div class="tab-menu group">
	<div class="sta-result group">
		<div class="pull-left">
			<h1>{$keyword|stripslashes}</h1> > Search results
		</div>
	</div>
	<div class="section medium-margin-top">
		{section name=lyric loop=$lyrics_search}
		<div class="item-song">
			{if $lyrics_search[lyric].cover}
				<a title="{$lyrics_search[lyric].title} - {$lyrics_search[lyric].artist} lyrics" href="{$lyrics_search[lyric].view_url}" class="thumb pull-left fn-link">
					<img width="60" alt="{$lyrics_search[lyric].title} - {$lyrics_search[lyric].artist} lyrics" src="{$lyrics_search[lyric].cover}" class="fn-thumb">
				</a>
			{/if}
			<div class="title-song">
				<h3><a href="{$lyrics_search[lyric].view_url}" class="txt-primary fn-highlight" title="{$lyrics_search[lyric].title} - {$lyrics_search[lyric].artist} lyrics">{$lyrics_search[lyric].title} - {$lyrics_search[lyric].artist} lyrics</a></h3>
			</div>
		</div>
		{/section}
	</div>
</div>

