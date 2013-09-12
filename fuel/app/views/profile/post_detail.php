		<div class="postDetail">
			<div class="postDImgMask">
				<?= Asset::img("post_images/".$article->images, array('class' => 'postDImg')) ?>
			</div>
			<div class="contentDetail">
				<div class="dLikeNum">
					<?= Html::anchor('car/view.php', $article->car->make->name . " " . $article->car->model->name, array('class'=>'postCar')) ?>
					<?= Asset::img('icons/tick.png') ?><p class="likes"><?= $article->likes ?></p>
				</div>
				<h2><?= $article->title ?></h2>
				<p class="timestamp"><?= date("F j, g:i a", $article->created_at) ?></p>
				<p><?= $article->content ?></p>
				<div class="postDUserInfo">
					<div class="postAvatarMask">
						<?= Html::anchor($article->user->profile_url(), Asset::img($article->user->avatar_url(), array('class' => 'postAvatar'))) ?>
					</div>
					<?= Html::anchor($article->user->profile_url(), $article->user->username, array('class'=>'postUser')) ?>
				</div>
			</div>
			<div class="postButtons">
				<button type="button" class="<? if($liked){ ?>liked<? }else{ ?>likeBtn<? } ?>"><? if($liked){ ?>Liked<? }else{ ?>Like<? } ?></button>
				<button type="button" class="flagBtn">Flag</button>
				<? if($user->id == $article->user->id){ ?>
				<?= Html::anchor($article->user->username.'/article/'.$article->id.'/edit', 'Edit', array('class'=>'editBtn button')) ?>
				<? } ?>
			</div>
			<span class="user_id"><?= $user->id ?></span>
			<span class="article_id"><?= $article->id ?></span>
		</div>