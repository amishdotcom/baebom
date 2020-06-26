{if $success}
	<div class="lyrics-header-info group">
		<div class="info-content otr">
			<div>
				<h1 class="txt-primary">Thank you, We will review the lyrics and make it public with your name as soon as possible.</h1>
			</div>
		</div>
	</div>
	<div class="section section mt20">
		<div class="tab-pane" id="newLyrics">
			<div class="group fn-sub-panel align-center" style="padding: 20px;background: #FFFAE6;">
				Please allow up to a week for submissions to be processed. <br />
				The most requested and currently popular lyrics will be processed first. <br />
				Our Team reserves the right to reject submissions. <br />
			</div>
		</div>
	</div>
{else}
	<div class="lyrics-header-info group">
		<div class="info-content otr">
			<div>
				<h1 class="txt-primary">Filling out this form will send lyrics directly to our Team.</h1>
			</div>
		</div>
	</div>
	<div class="section section mt20">
		<div class="tab-pane" id="newLyrics">
			<div class="frm-lyrics group fn-sub-panel fn-sub-lyrics">
				<form name="frmLyrics" action="" method="post">
					<input type="text" name="name" placeholder="Your name" required>
					<input type="text" name="email" placeholder="Your e-mail address" required>
					<input type="text" name="artist" placeholder="Artist/Band" required value="{if isset($lyrics.artist)}{$lyrics.artist}{/if}">
					<input type="text" name="title" placeholder="Song title" required value="{if isset($lyrics.title)}{$lyrics.title}{/if}">
					<textarea name="lyrics" cols="30" rows="10" placeholder="Lyrics" required></textarea>
					<input type="hidden" name="hash" value="{if isset($lyrics.hash)}{$lyrics.hash}{/if}">
					<button class="button btn-dark-blue pull-right">Submit</button>
				</form>
			</div>
		</div>
	</div>
{/if}