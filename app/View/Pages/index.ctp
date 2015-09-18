<div class="row container-side">
	<div class=" col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-1">
	
<h2>みんなで好きなアーティストを紹介していくサイトです。</h2>
</div>
</div>




<div class="row container-side">
	<div class=" col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-1">
			<?php foreach($players as $player):?>
			<article class="row">
				<div class="col-sm-3">
					<h3><?php echo $player['Player']['created']?></h3>
				</div>
				<div class="col-sm-9">
					<h2><?php echo $player['Player']['player-name']?></h2>
					

<button type="button" class="btn btn-default">
						<?php echo $this->Html->link(
							'Edit',
							array('controller'=>'players','action'=>'edit',$player['Player']['id'])
							,array(),'編集しますか？',$player['Player']['id']);
							?>
						</button>

					<button type="button" class="btn btn-default">
						<?php echo $this->Form->postLink(
							'Delete',
							array('controller'=>'players','action'=>'delete',$player['Player']['id'])
							,array(),'削除しますか？',$player['Player']['id']);
							?>
						</button>


					<p><?php echo $player['Player']['player-comment']?></p>
					<p><a href="/detail/<?php echo $player['Player']['id'] ?>">Continue Reading ...</a></p>
					
				</div>
			</article>
			<?php endforeach;?>

	
	</div>
	<?php echo $this->element('aside'); ?>
	<?php echo $this->element('modal'); ?>
</div>



	


    <section class="row shita">
        <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10">
            <hr>
            <form role="form">

                <h2>バンド情報</h2>
                <p>好きなバンドをみんなに紹介してみよう！</p>
               
                <a href="/Players/add"><button type="button" class="btn btn-default" >投稿する</button></a>
            </form>
        </div>

    </section>


</div>
</div>

