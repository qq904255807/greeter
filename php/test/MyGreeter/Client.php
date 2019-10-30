<?php
namespace MyGreeter;

class Client
{
    public function getGreeting() {
        $time = time();
        $twelveAm = strtotime(date('Y-m-d 12:00:00'));
        $sixPm = $twelveAm + 3600 * 6;
        $twelvePm = $twelveAm + 3600 * 12;
        if($time < $twelveAm) {
            return 'Good Morning';
        }

        if($twelveAm<=$time&&$time<$sixPm) {
            return 'Good AfterNoon';
        }

        if($sixPm<=$time&&$time<$twelvePm) {
            return 'Good evening';
        }
    }
}

$str = (new Client())->getGreeting();
echo $str;
