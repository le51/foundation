<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  {{ get_title() }}
    {{ assets.outputCss('headerCss') }}
    {{ assets.outputJs('header') }}

</head>
<body>
{% include "widgets/navbar.volt" %}

  <!-- body content here -->
    {{ content() }}
    
    
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

{{ assets.outputJs('footer') }}

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
