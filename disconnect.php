<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 28/10/18
 * Time: 18:28
 */


session_start();
session_destroy();
header('Location:/login');