<?php

namespace App\Lib;

use DateTime;

class Common 
{

    /**
	* from-toをYYYYmm(1年2カ月前)-YYYYmm（2カ月前）で取得
	* @return $res 
	*/
    public static function dateToFrom($mode) {

        if($mode === "list") {
            // Datetimeインスタンス生成
            $date = new Datetime();
            $now = (String)$date->modify('-2 month')->format('Ym');
            $pre_year = (String)$date->modify('-5 year')->format('Ym');
        } else {
            // Datetimeインスタンス生成
            $date = new Datetime();
            $now = (String)$date->modify('-2 month')->format('Ym');
            $pre_year = (String)$date->modify('-1 year')->format('Ym');
        }


        return $pre_year . '-' . $now;
    }

}