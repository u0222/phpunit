<?php

namespace App;

class Calculator
{
    // 乗算結果を返します
    public function multiply($x, $y)
    {
        return $x * $y;
    }

    // 除算結果を返します
    public function divide($x, $y)
    {
        // 後の学習で利用するため、意図的なバグを仕込んでいます
        return $x / $y;
    }

    // 加算結果を返します
    public function sum($x, $y)
    {
        return $x + $y;
    }

    // 減算結果を返します
    public function subtract($x, $y)
    {
        return $x - $y;
    }

    function calcTriangleArea($bottom, $height) {
        $area = ($bottom * $height) / 2;
        return $area;
    }    
    
}
