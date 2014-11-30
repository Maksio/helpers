<?php

namespace yii\helpers;

/**
 * ArrayHelper provides additional array functionality that you can use in your
 * application.
 *
 * @author Maksim Tikhonov aka Maksio <bnr17@yandex.ru>
 * @since 2.0
 */
class ArrayHelper extends BaseArrayHelper {

    // Return value or empty array
    public static function array_try($anyVar, $key, $return = []) {
        return (is_array($anyVar) && !empty($anyVar[$key])) ? $anyVar[$key] : $return;
    }

}
