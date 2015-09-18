  <section class="row">
        <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10">
            <hr>
            <div class="row">
    <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10">
        <h2>アーティスト情報</h2>
        <?php echo $this->Form->create('Player', array('class' => 'form')); ?>
        <div class="form-group">
            <?php echo $this->Form->input('player-name', array('type'=>'text','class' => 'form-control','placeholder'=>'選手名を入力してください')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('player-age', array('type' => 'text', 'class' => 'form-control','placeholder'=>'年齢を入力してください')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('player-gear', array('type' => 'text', 'class' => 'form-control','placeholder'=>'選手の使用ラケット名を入力してください')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('player-img', array('type' => 'text','class' => 'form-control','placeholder'=>'添付したい写真のurlを入力してください')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('player-url', array('type' => 'text','class' => 'form-control','placeholder'=>'添付したいyoutubeのurlの＝以降を入力してください')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('player-comment', array('type' => 'textarea','class' => 'form-control','placeholder'=>'コメントを入力してください')); ?>
        </div>

        <div class="form-group">
            <?php echo $this->Form->submit('投稿', array('class' => 'btn btn-success')); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
        </div>

    </section>

