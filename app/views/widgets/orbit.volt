<div class="row hide-for-small">
    <div class="large-12 columns">
    <!-- Desktop Slider -->
        <div class="orbit-container orbit-stack-on-small">
            <ul data-orbit>

                {% for img, text in orbit %}
                    <li>
                        {{ tag.image(img,false) }}
                        {% if text != "" %}
                            <div class="orbit-caption">{{ text }}</div>
                        {% endif %}
                {% endfor %}
            </ul>
        </div>
    <!-- End Desktop Slider -->
    <!-- Mobile Header -->
        <div class="row">
              <div class="small-12 show-for-small"><br>
                <img src="http://placehold.it/1000x600&amp;text=For Small Screens">
              </div>
            </div>
        <!-- End Mobile Header -->
        </div>
  </div>
</div> 


