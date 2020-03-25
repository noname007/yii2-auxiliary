<?php


namespace noname007\auxiliary;


use yii\helpers\Html;

class HtmlAuxiliary
{

    /**
     * @param $array
     * @param $headers
     */
    public static function one_dimensional_array_to_html($array, $headers){

        $arrs = [];
        foreach ($array as $item) {
            $arrs = [$item];
        }

        return self::array_to_html($arrs, $headers);
    }

    /**
     * 二维数组
     * @param $array
     * @param $headers
     *
     * @return string
     */
    public static function array_to_html($array, $headers) {
        $cells = [];
        foreach ($headers as $header) {
            $cells[] =  Html::tag('td', $header);
        }

        $rows[] = Html::tag('tr', implode('', $cells));

        foreach ($array as $a) {
            $cells = [];
            foreach ($a as $b) {
                $cells[] =  Html::tag('td', $b);
            }
            $rows[] = Html::tag('tr', implode('', $cells));
        }

        return Html::tag('table', implode('', $rows), [
            'border' => '1px'
        ]);
    }
}