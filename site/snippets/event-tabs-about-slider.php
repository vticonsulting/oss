<!-- ## SLIDER ## -->
<div class="col-8 col">
  <div class="video box no-border">
    <div class="qcSliderWrapper">
      <ul class="single-carousel owl-carousel">
        <li>
          <!-- ## IMAGE SLIDE ## -->
          <?= $page->image() ?>
        </li>
        <li>
          <!-- ## EMBEDED VIDEO [ YOUTUBE, VIMEO ] ## -->
          <div class="qcFitVids">
            <iframe src="http://player.vimeo.com/video/272015776?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933" width="400" height="225"></iframe>
          </div>
        </li>
      </ul>

      <!-- ## SLIDER NEXT PREV ## -->
      <div class="qcPrevNext">
        <div class="qcPrev"><i class="icon-left-open-big"></i></div>
        <div class="qcNext"><i class="icon-right-open-big"></i></div>
      </div>
    </div>
    <!-- ## SLIDER END ## -->
  </div>
</div>