<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 13/07/2018
 * Time: 14:43
 */

if (Reservation::verifResa($_POST)) {
    Reservation::addResa($_POST);
    Reservation::mailToGite($_POST);
    Reservation::mailToClient($_POST);

    echo "<script>document.location.href = './index.php?type=confirmation';</script>";
} else {
    echo "<script>document.location.href = './index.php?type=refuse';</script>";
}