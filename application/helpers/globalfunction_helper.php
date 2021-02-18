<?php
function get_timeago( $ptime )
{
    $estimate_time = time() - $ptime;

    if( $estimate_time < 1 )
    {
        return 'beberapa saat yang lalu';
    }

    $condition = array(
        12 * 30 * 24 * 60 * 60  =>  'tahun',
        30 * 24 * 60 * 60       =>  'bulan',
        24 * 60 * 60            =>  'hari',
        60 * 60                 =>  'jam',
        60                      =>  'menit',
        1                       =>  'detik'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $estimate_time / $secs;

        if( $d >= 1 )
        {
            $r = round( $d );
            return $r . ' ' . $str . ' lalu';
        }
    }
}

function get_day($day){
    switch ($day){
        case "Sun" : return "Minggu";
        break;
        case "Mon" : return "Senin";
        break;
        case "Tue" : return "Selasa";
        break;
        case "Wed" : return "Rabu";
        break;
        case "Thu" : return "Kamis";
        break;
        case "Fri" : return "Jumat";
        break;
        case "Sat" : return "Sabtu";
        break;
    }
}
?>