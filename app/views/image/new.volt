{{ form("image/create","method":"post","enctype":"multipart/form-data","id":"imageForm") }}
  <fieldset>
    <legend>Fieldset</legend>

    <div class="row">
        <div class="large-6 columns">
            
            <!-- >{{ tag.image("http://lorempixel.com/640/480/sports/1",false) }} -->
                <img src="http://lorempixel.com/640/480/sports/1" id="thumb">
            <div id="image">
            </div>
      </div>
      <div class="large-6 columns">
        <label>Title</label>
        {{ text_field("title","placeholder":"enter title") }}
        <label>Description</label>
        {{ text_area("description","placeholder":"Enter decription here") }}
        <label>Image</label>
            {{ file_field("file") }}
      </div>
    </div>


    <div class="row">
      <div class="large-6 columns">
        {{ submit_button("OK","class":"large expand button") }}
      </div>
      <div class="large-6 columns">
        {{ link_to("image/index","Cancel","class":"large expand button alert") }}
      </div>
    </div>
    
  </fieldset>
</form>

