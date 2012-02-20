<!-- theme header -->

<div class="pt_banner">
  <h3 class="pt_heading">Events <strong>Gallery</strong></h3>
  <div class="speedbar">
    <nav>
      <ul>
        <li><a href="<?=site_url()?>">Back to Homepage</a></li>
        {{navigation:links group="events"}}
        <li>l</li>
        <li class="{{class}}"><a href="{{url}}">{{title}}</a></li>
        {{/navigation:links}}
      </ul>
    </nav>
  </div>
</div>
<!-- theme header -->
<h1> Photos from <strong>Our Events</strong> </h1>
<p> Many of our photo albums features pictures taken at our third party events. Where are fortunate to work with many generous groups in our fund rasing
  initiatives. To learn more about hosting third-party events, <a href="#">click here</a>. </p>
<div id="gallery_main">
  <div id="gallery_left">
    <h3>Chose a Category</h3>
    <ul>
      <li><a href="<?php echo site_url($this->module) ?>">View All Galleries</a></li>
      <?php foreach($albums as $album){?>
      <li><a href="<?php echo site_url($this->module.'/photos/'.$album->id) ?>"><?php echo $album->name ?></a></li>
      <?php }?>
    </ul>
  </div>
  <div id="gallery_right">
    <ul>
      <?php foreach($albums as $album){?>
      <li> <a href="<?php echo site_url($this->module.'/photos/'.$album->id) ?>"> <img src="<?php echo $album->picture ?>" class="photo"  />
        <div class="img_div"> <img src="<?php echo ADDONPATH."modules/".$this->module ?>/img/zoom.png" class="search_img" /> </div>
        <?php echo $album->name ?></a> </li>
      <?php }?>
    </ul>
  </div>
</div>