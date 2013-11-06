<div class="row">
    <div class="small-3 columns">
        <h3>Menu</h3>
        <ul class="side-nav">
            <li>{{ link_to("image/new","New image") }}</li>
            <li>{{ link_to("image/index","Search image") }}</li>
        </ul>
    </div>
    <div class="small-9 columns">
        {{ content() }}
    </div>
</div>
