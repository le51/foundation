<div class="row">
 
    <!-- Contact Details -->
    <div class="large-9 columns">
 
      <h3>Get in Touch!</h3>
      <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
 
      <div class="section-container auto" data-section="" style="">
        <section class="section active" style="padding-top: 52px;">
          <h5 class="title" style="left: 0px;"><a href="#panel1">Contact Our Company</a></h5>
          <div class="content" data-slug="panel1" style="">

            <form action="/phalcon/foundation/contact/send" method="post" data-abide id="contactForm">
              <div class="row collapse">
                <div class="large-2 columns">
                  <label class="inline">Your Name</label>
                </div>
                <div class="large-10 columns">
                  {{ text_field("id":"name","placeholder":"Enter your name","required pattern":"[a-zA-Z]+") }}
                  <small class="error">Name is required and must be a string.</small>
                </div>
              </div>
              <div class="row collapse">
                <div class="large-2 columns">
                  <label class="inline"> Your Email</label>
                </div>
                <div class="large-10 columns">
                        <input type="email" required name="email" placeholder="Enter your email">
                        <small class="error">An email address is required.</small>
                </div>
              </div>
              <label>What's up?</label>
              {{ text_area("id":"content","value":"content","placeholder":"Your message","rows":"4") }}
              <button type="submit" class="radius button">Submit</button>
            </form>
          </div>
        </section>
        <section class="section" style="">
          <h5 class="title" style="left: 201px;"><a href="#panel2">Specific Person</a></h5>
          <div class="content" data-slug="panel2" style="">
            <ul class="large-block-grid-5 small-block-grid-3">
              <li><a href="mailto:mal@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Mal Reynolds</a></li>
              <li><a href="mailto:zoe@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Zoe Washburne</a></li>
              <li><a href="mailto:jayne@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Jayne Cobb</a></li>
              <li><a href="mailto:doc@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Simon Tam</a></li>
              <li><a href="mailto:killyouwithmymind@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">River Tam</a></li>
              <li><a href="mailto:leafonthewind@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Hoban Washburne</a></li>
              <li><a href="mailto:book@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Shepherd Book</a></li>
              <li><a href="mailto:klee@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Kaywinnet Lee Fry</a></li>
              <li><a href="mailto:inara@guild.comp.all"><img src="http://placehold.it/200x200&amp;text=[person]">Inarra Serra</a></li>
            </ul>
          </div>
        </section>
      </div>
    </div>
    <!-- End Contact Details -->
 
 
    <!-- Sidebar -->
 

    <div class="large-3 columns">
      <h5>Map</h5>
      <!-- Clicking this placeholder fires the mapModal Reveal modal -->
      <p>
        <a href="" data-reveal-id="mapModal"><img src="http://placehold.it/400x280"></a><br>
        <a href="" data-reveal-id="mapModal">View Map</a>
      </p>
      <p>
        123 Awesome St.<br>
        Barsoom, MA 95155
      </p>
    </div>
    <!-- End Sidebar -->
  </div>

  <div class="reveal-modal" id="mapModal" style="display: none; -webkit-transform-origin: 0px 0px; opacity: 1; -webkit-transform: scale(1, 1); visibility: hidden; top: -1381px;">
    <h4>Where We Are</h4>
    <p><img src="http://placehold.it/800x600"></p>
 
    <!-- Any anchor with this class will close the modal. This also inherits certain styles, which can be overriden. -->
    <a href="#" class="close-reveal-modal">×</a>
  </div>
  
  <script>

 
  </script>
