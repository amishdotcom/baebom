<div class="hot-lyrics">
	<h1 class="title-section has-link"> <a title="Hot Lyrics">What's hot</a> </h1>
	<p class="section-description">See what's is trending</p>
	<div class="row">
		{section name=row loop=$top}
			{include file = 'lyrics_item/gird.html'}
		{/section}
	</div>
</div>
<div class="clearfix"></div>
<div class="section">
	<div class="row">
		<div class="col-6">
			<h2 class="title-section"><a title="Dance lyrics">Dance song lyrics</a></h2>
			<div class="list-item lyrics-hover effect">
				<ul>
					{foreach from=$dance item=i name=foo}
						{if ($smarty.foreach.foo.index) < 15}
							{include file = 'lyrics_item/list.html'}
						{/if}
					{/foreach}
				</ul>
			</div>
		</div>
		<div class="col-6">
			<h2 class="title-section"><a title="Pop Lyrics">Pop song lyrics</a></h2>
			<div class="list-item lyrics-hover effect">
				<ul>
					{foreach from=$pop item=i name=foo}
						{if ($smarty.foreach.foo.index) < 15}
							{include file = 'lyrics_item/list.html'}
						{/if}
					{/foreach}
				</ul>
			</div>
		</div>
	</div>
</div>


