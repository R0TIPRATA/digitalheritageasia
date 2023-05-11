<?php
session_start();

require_once 'app/home/backend/auth/config.php';
require_once 'app/home/backend/core/Helpers.php';
//require_once 'app/home/backend/imagekit/imagekit.php';


spl_autoload_register("autoload");