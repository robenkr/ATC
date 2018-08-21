<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 15/06/18
 * Time: 11:59
 */

    session_start();
    session_destroy();
    header('Location: ../index.php');