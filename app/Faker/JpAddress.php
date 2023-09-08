<?php

namespace App\Faker;

use Faker\Provider\Base;
use App\Models\JapanPostcode;

class JpAddress extends Base
{
    /**
     * addressを配列で返す
     *
     * @return array
     */
    public static function jpAddressArray(): array
    {
        $japanPostcode = self::getRandomJapanPostcode();
        return [
            'postcode' => $japanPostcode->postcode,
            'prefecture' => $japanPostcode->prefecture,
            'city' => $japanPostcode->city,
            'streetAddress' => "{$japanPostcode->street}1-2-3",
        ];
    }

    /**
     * ランダムにJapanPostcodeを1件返す
     *
     * @return JapanPostcode
     */
    private static function getRandomJapanPostcode(): JapanPostcode
    {
        return JapanPostcode::query()
            ->orderByRaw('RAND()')
            ->first();
    }
}
