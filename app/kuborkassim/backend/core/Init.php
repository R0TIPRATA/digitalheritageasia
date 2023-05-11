<?php
session_start();

require_once 'backend/auth/config.php';
require_once 'backend/core/Helpers.php';
require_once 'backend/imagekit/imagekit.php';


spl_autoload_register("autoload");