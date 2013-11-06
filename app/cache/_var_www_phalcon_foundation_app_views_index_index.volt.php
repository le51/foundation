<?php $this->partial('widgets/orbit', array('orbit' => $orbit)); ?>






<div class="row">
    <div class="large-12 columns">
      <div class="row">

    <!-- Thumbnails -->

        <div class="large-3 small-6 columns">
          <img src="http://lorempixel.com/250/250/sports/5">
            <div  class="panel">
                <h6>Description</h6>
                <p>Bla bla. Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros. </p>
                <a href="#" class="small button success radius">En savoir plus</a>
            </div>
        </div>

        <div class="large-3 small-6 columns">
          <img src="http://lorempixel.com/250/250/sports/6">
            <div  class="panel">
                <h6>Description</h6>
                <p>Bla bla. Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros. </p>
            </div>
        </div>

        <div class="large-3 small-6 columns">
          <img src="http://lorempixel.com/250/250/sports/7">
            <div  class="panel">
                <h6>Description</h6>
                <p>Bla bla. Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros. </p>
            </div>
        </div>

        <div class="large-3 small-6 columns">
          <img src="http://lorempixel.com/250/250/sports/8">
            <div  class="panel">
                <h6>Description</h6>
                <p>Bla bla. Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros. </p>
            </div>
        </div>

    <!-- End Thumbnails -->

      </div>
    </div>
  </div>
<div class="row">
    <div class="large-12 columns">
      <div class="row">

    <!-- Content -->

        <div class="large-8 columns">
          <div class="panel radius">

          <div class="row">
          <div class="large-6 small-6 columns">

            <h4>Header</h4><hr>
            <h5 class="subheader">Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis.
            </h5>

          <div class="show-for-small" align="center">
            <a href="#" class="small radius button">Call To Action!</a><br>

            <a href="#" class="small radius button">Call To Action!</a>
          </div>

          </div>
          <div class="large-6 small-6 columns">

            <p>Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros. Vivamus at dignissim massa. Aenean dolor libero, blandit quis interdum et, malesuada nec ligula. Nullam erat erat, eleifend sed pulvinar ac. Suspendisse ultrices ornare tempor. Aenean eget ultricies libero.
          </p>
        </div>

        </div>
        </div>
        </div>

        <div class="large-4 columns hide-for-small">

          <h4>Get In Touch!</h4><hr>

          <a class="large button expand" href="#">
            Call To Action!
          </a>

          <?php echo Phalcon\Tag::linkTo(array('contact', 'Contact', 'class' => 'large button expand')); ?>

        </div>

    <!-- End Content -->

      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(window).load(function() {
      $('#featured').orbit({ fluid: '2x1' });
    });
  </script>

