<?php
      $parchive_exp = new GalleryFiles('/photo_archive', 9, $imageKit);
      $parchive_exp->setUrls();
      $aerial_exp = new GalleryFiles('/aerial', 9, $imageKit);
      $aerial_exp->setUrls();
echo '<body onload= "initializeFilePaths(' .  htmlspecialchars(json_encode($parchive_exp->urls)) .' ,
' . htmlspecialchars(json_encode($aerial_exp->urls))  .'), show360Viewer()">'; ?>