  <div class="pageheader">
    <div class="bgfullp">
      <div class="bgexp flex flex-ai-c flex-jc-c flex-col">
        <h1>Experience Digital Kubor Kassim</h1> 
        <p>Experience Kubor Kassim through our curated content - Embark on a virtual walking tour, view
          Kubor Kassim from above through aerial drone footage, and view glimpses of the past and present in
          the photographical archive.
        </p>
        <!-- <button class="circular-btn" id="home-intro-btn" onClick="document.getElementById('sect1').scrollIntoView();">
        <div class="text-center"><i class="material-icons material-icons-outlined">expand_more</i></div></button> -->
      </div>
    </div>
    </div>
  </div>

  <!-- Virtual Visit -->
  <div class="vv sect flex flex-ai-c flex-col" id="sect1">
    <h2>Virtual Visit</h2>
    <div id="main-360-viewer">
    </div>   
    <a class="rectbtn" href="/app/kuborkassim/pano">View all panaromic photos and videos</a>
  </div>

  <!-- Views from Above -->
  <div class="vfa">
    <div class="bghalfp">
      <div class="bgtop flex flex-jc-c flex-col">
        <h1>Views from above</h1>
      </div>
    </div>
    <div class="flex flex-jc-c flex-ai-c flex-col">
      <p class="text-center">Drone Footage of Kubor Kassim</p>
      <video controls>
        <source src="https://ik.imagekit.io/kuborkassim/aerial/DronewAudiocompressed_VXt9ex59LA.mp4?ik-sdk-version=javascript-1.4.3&updatedAt=1661087498139" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>

 <!--Photographic Archive -->
  <div class="p_archive">
    <div class="bghalfp">
      <div class="bgparchive flex flex-jc-c flex-col">
        <h1>Photographic archive</h1>
      </div>
    </div>

    <div class="gallery-container" id="vfa_gallery">
      <div id="gallery">
      <?php $parchive_exp-> getImages(); ?>
      </div>
      <a class="rectbtn" href="/app/kuborkassim/parchive">View all photos</a>
    </div>
  </div>

  <!-- Audio Podcast -->
  <div class="podcast">

  </div>
