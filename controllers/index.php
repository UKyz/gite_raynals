<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 12/07/2018
 * Time: 15:07
 */

/*Reservation::deleteOldReservation();
Calendrier::dayPassed();*/

$smarty->assign('calendrier_script', Calendrier::updateCalender());

$smarty->assign('services_script', Services::showServices());

$smarty->assign('choice_services', Services::showChoiceService());