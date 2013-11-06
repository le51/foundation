<?php echo Phalcon\Tag::form(array('image/create', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'imageForm')); ?>
  <fieldset>
    <legend>Fieldset</legend>

    <div class="row">
        <div class="large-6 columns">
            
            <!-- ><?php echo $this->tag->image('http://lorempixel.com/640/480/sports/1', false); ?> -->
                <img src="http://lorempixel.com/640/480/sports/1" id="thumb">
            <div id="image">
            </div>
      </div>
      <div class="large-6 columns">
        <label>Title</label>
        <?php echo Phalcon\Tag::textField(array('title', 'placeholder' => 'enter title')); ?>
        <label>Description</label>
        <?php echo Phalcon\Tag::textArea(array('description', 'placeholder' => 'Enter decription here')); ?>
        <label>Image</label>
            <?php echo Phalcon\Tag::fileField(array('file')); ?>
      </div>
    </div>


    <div class="row">
      <div class="large-6 columns">
        <?php echo Phalcon\Tag::submitButton(array('OK', 'class' => 'large expand button')); ?>
      </div>
      <div class="large-6 columns">
        <?php echo Phalcon\Tag::linkTo(array('image/index', 'Cancel', 'class' => 'large expand button alert')); ?>
      </div>
    </div>
    
  </fieldset>
</form>

