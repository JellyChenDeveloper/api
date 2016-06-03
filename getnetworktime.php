<?php
header("Content-type: text/html; charset=utf-8");

$fp=fsockopen('time.nist.gov',13,$errno,$errstr,90);
$ufc = explode(' ',fread($fp,date('Y')));
$date = explode('-',$ufc[1]);
$processdate = $date[1].'-'.$date[2].'-'. date('Y').' '.$ufc[2];

switch($ufc[5])
{
    case 0: echo '精确'; break;
    case 1: echo '误差：0-5s'; break;
    case 2: echo '误差： > 5s'; break;
    default: echo '硬件出错！'; break;
}
echo "<br/>";
echo 'time.nist.gov :     '.gmttolocal($processdate,8); // 中国

function gmttolocal($mydate,$mydifference)
{
    $datetime = explode(" ",$mydate);
    $dateexplode = explode("-",$datetime[0]);
    $timeexplode = explode(":",$datetime[1]);
    $unixdatetime = mktime($timeexplode[0]+$mydifference,$timeexplode[1],0,$dateexplode[0],$dateexplode[1],$dateexplode[2]);
    return date("m/d/Y H:i:s",$unixdatetime);
}

// 方法二
echo "<br/>";
echo "方法二";
echo "<br/>";
echo 'gb.weather.gov.hk : '.file_get_contents('http://gb.weather.gov.hk/cgi-bin/hko/localtime.pl');
?>
