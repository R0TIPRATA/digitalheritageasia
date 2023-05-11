<div class="gallery-header gallery-header-gold">
      <a href="javascript:history.back()"> &#10094; Back</a>
      <h1>360-Degree Photos and Videos</h1>
</div> 
<!-- Tab links -->
<div class="tab">
  <button class="tablinks active" id="photos">Photos</button>
  <button class="tablinks" id="videos" >Videos</button>
</div>

<div class = "tab-content" id = "photos-tab">  
  <div class="gallery-container">
    <h2> Panoramic Photos</h2></br>
    <div id="gallery-panoramic">
      <!-- insert images in gallery -->
      <?php $pano360->getImages();?>
      <div id="popup">
        <div id="popup-bg" tabindex="0" style="outline:none;"><div id="photo-360-viewer"></div>
          <a href="javascript:void(0)" class="closebtnposition transparentbtn" onclick="closePopup()"> Close window</a>
          <a class="prev" id="prev-photo">&#10094;</a> 
          <a class="next" id="next-photo">&#10095;</a>
        </div> 
      </div>
    </div>
  </div>  
</div>


<div class = "tab-content" id ="videos-tab">  
  <div class="gallery-container">
    <h2> Panoramic Videos</h2></br>
    <div id="gallery-panoramic">
      <!-- insert images in gallery -->
      <?php $pano360vids->getImages();?>
      <div id="popup2">
        <div id="popup2-bg" tabindex="0" style="outline:none;"><div id="vid-360-viewer"></div>
          <a href="javascript:void(0)" class="closebtnposition transparentbtn" onclick="closePopup()"> Close window</a>
          <a class="prev" id="prev-vid">&#10094;</a> 
          <a class="next" id="next-vid">&#10095;</a>
        </div>
      </div>    
  </div>
</div>

<!-- <div id="popup">
  <div id="popup-bg" tabindex="0" style="outline:none;"><div id="photo-360-viewer"></div><div id="vid-360-viewer"></div>
    <a class="prev">&#10094;</a> 
    <a class="next">&#10095;</a>
  </div>
</div>   -->