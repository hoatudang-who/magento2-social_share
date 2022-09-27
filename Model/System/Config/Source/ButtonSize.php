<?php
/**
* Duonght
*
* This source file is subject to the Duonght Software License, which is available at https://duonght.com/license/.
* Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
* If you wish to customize this module for your needs.
* Please refer to https://www.duonght.com for more information.
*
* @category  Duonght
* @package   Duonght_SocialShare
* @copyright Copyright (C) 2021 Duonght (https://www.duonght.com)
*/
namespace Duonght\SocialShare\Model\System\Config\Source;

class ButtonSize extends OptionArray
{
    /**
     * Constants for keys of data array.
     */
    const SMALL  = '16x16';
    const NORMAL = '32x32';
    const MEDIUM = '48x48';
    const LARGE  = '64x64';

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::SMALL  => __('16x16'),
            self::NORMAL => __('32x32'),
            self::MEDIUM => __('48x48'),
            self::LARGE  => __('64x64'),
        ];
    }
}
