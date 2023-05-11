<div class="gallery-header gallery-header-gold">
      <a href="javascript:history.back()"> &#10094; Back</a>
      <h1>Photograph Archive</h1>
</div>  

<div class="gallery-container">
    <div id="gallery">
        <!-- insert images in gallery -->
        <?php $parchive->getImages();?>
    </div>
</div>

<div id="popup">
    <div id="popup-bg" tabindex="0" style="outline:none;"><img src="" alt="" id="selectedImage"></div>
    <a class="prev">&#10094;</a> 
    <a class="next">&#10095;</a>
</div>