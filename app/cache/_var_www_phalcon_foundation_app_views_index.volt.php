<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <?php echo Phalcon\Tag::getTitle(); ?>
    <?php echo $this->assets->outputCss('headerCss'); ?>
    <?php echo $this->assets->outputJs('header'); ?>

</head>
<body>
<div class="sticky-navbar sticky contain-to-grid">
    <nav class="top-bar" style="">
        <ul class="title-area">
          <!-- Title Area -->
          <li class="name">
            <h1>
                <?php echo Phalcon\Tag::linkTo(array('/', 'Accueil')); ?>
            </h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
        </ul>
     
        
      <section class="top-bar-section" style="left: 0%;">
          <!-- Right Nav Section -->
          <ul class="right">
            <li class="divider"></li>
            <li class="has-dropdown">
              <a href="#">Main Item 1</a>
              <ul class="dropdown" style="height: 391px;"><li class="title back js-generated"><h5><a href="#">« Back</a></h5></li>
                <li><label>Section Name</label></li>
                <li class="has-dropdown">
                  <a href="#" class="">Has Dropdown, Level 1</a>
                  <ul class="dropdown" style="height: 391px;"><li class="title back js-generated"><h5><a href="#">« Back</a></h5></li>
                    <li><a href="#">Dropdown Options</a></li>
                    <li><a href="#">Dropdown Options</a></li>
                    <li><a href="#">Level 2</a></li>
                    <li><a href="#">Subdropdown Option</a></li>
                    <li><a href="#">Subdropdown Option</a></li>
                    <li><a href="#">Subdropdown Option</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown Option</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li class="divider"></li>
                <li><label>Section Name</label></li>
                <li><a href="#">Dropdown Option</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li class="divider"></li>
                <li><a href="#">See all →</a></li>
              </ul>
            </li>
            <li class="divider"></li>
            <li><a href="#">Main Item 2</a></li>
            <li class="divider"></li>
            <li class="has-dropdown">
              <a href="#">Main Item 3</a>
              <ul class="dropdown" style="height: 391px;"><li class="title back js-generated"><h5><a href="#">« Back</a></h5></li>
                <li><a href="#">Dropdown Option</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li class="divider"></li>
                <li><a href="#">See all →</a></li>
              </ul>
            </li>
          </ul>
        </section>
    </nav>
</div>


  <!-- body content here -->
    <?php echo $this->getContent(); ?>
    
    
<footer class="row">
    <div class="large-12 columns">
      <hr>
      <div class="row">
        <div class="large-6 columns">
          <p>© Copyright no one at all. Go to town.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

<?php echo $this->assets->outputJs('footer'); ?>

  <script>
    $(document).foundation();
  </script>
<script>
$(document).ready(function(){

  var thumb = $('img#thumb');        

  new AjaxUpload('imageUpload', {
    action: $('form#imageForm').attr('action'),
    name: 'image',
    onSubmit: function(file, extension) {
      $('div.preview').addClass('loading');
    },
    onComplete: function(file, response) {
      thumb.load(function(){
        $('div.preview').removeClass('loading');
        thumb.unbind();
      });
      thumb.attr('src', response);
    }
  });
  
});
</script>
</body>
</html>
