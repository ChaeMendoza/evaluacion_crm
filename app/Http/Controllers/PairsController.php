<?php

namespace App\Http\Controllers;

class PairsController extends Controller
{
    public function countPairs($n, $k, $arr)
    {
        $arr = explode(',', $arr);
        $count = 0;

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if (abs($arr[$i] - $arr[$j]) == $k) {
                    $count++;
                }
            }
        }

        return response()->json(['count' => $count]);
    }
}
