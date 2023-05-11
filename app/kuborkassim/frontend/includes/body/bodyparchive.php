<?php
      $parchive = new GalleryFiles('/photo_archive',1000, $imageKit);
      $parchive ->setUrls();
echo '<body onload= "initializeFilePaths(' .  htmlspecialchars(json_encode($parchive->urls)) . ')">'; ?>
