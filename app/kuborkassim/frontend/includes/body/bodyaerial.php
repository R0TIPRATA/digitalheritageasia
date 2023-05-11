<?php
      $aerial = new GalleryFiles('/aerial',1000, $imageKit);
      $aerial ->setUrls();
echo '<body onload= "initializeFilePaths( null,' .  htmlspecialchars(json_encode($aerial->urls)) . ')">'; ?>
