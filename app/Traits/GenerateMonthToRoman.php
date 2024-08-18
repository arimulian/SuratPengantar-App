<?php

namespace App\Traits;

trait GenerateMonthToRoman
{
    function monthToRoman(): string
    {
        $month = date('n');
        $map = ['I' => 1, 'II' => 2, 'III' => 3, 'IV' => 4, 'V' => 5, 'VI' => 6, 'VII' => 7, 'VIII' => 8,
            'IX' => 9, 'X' => 10, 'XI' => 11, 'XII' => 12];
        $returnValue = '';
        while ((int)$month > 0) {
            foreach ($map as $roman => $int) {
                if ((int)$month == $int) {
                    $month -= $int;
                    $returnValue .= $roman;
                    break;
                }
            }
        }
        return $returnValue;
    }
}
