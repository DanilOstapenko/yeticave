<?php
function timer_to()
{
    $time_now = strtotime("now");

    $time_tomorrow = strtotime("tomorrow");

    $time_sub = $time_tomorrow-$time_now;

    $time_minutes = floor($time_sub/60);

    $time_hours = floor($time_minutes/60);

    $time_minutes=$time_minutes-$time_hours*60;

    $result = sprintf('%02d:%02d',$time_hours,$time_minutes);

    return $result;
}

function compile_template($templates, $data)
{
    $templates = 'templates/'. $templates;
    ?>
