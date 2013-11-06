<div class="row">
    <div class="small-3 columns">
        <h3>Menu</h3>
        <ul class="side-nav">
            <li><?php echo Phalcon\Tag::linkTo(array('image/new', 'New image')); ?></li>
            <li><?php echo Phalcon\Tag::linkTo(array('image/index', 'Search image')); ?></li>
        </ul>
    </div>
    <div class="small-9 columns">
        <?php echo $this->getContent(); ?>
    </div>
</div>
