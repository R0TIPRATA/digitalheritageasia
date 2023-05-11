<?php
      $pano360 = new GalleryFiles('/360_pictures',1000, $imageKit);
      $pano360 ->setPanoUrls();
      $pano360vids = new GalleryFiles('/360_video',1000, $imageKit);
      $pano360vids ->setPanoUrls();
echo '<body onload= "initializeFilePaths(' .  htmlspecialchars(json_encode($pano360->urls)) . ' ,
' . htmlspecialchars(json_encode($pano360vids->urls)) . ', getImage(index, "/360_video")">'; ?>
      