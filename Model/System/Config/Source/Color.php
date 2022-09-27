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

class Color extends OptionArray
{
    /**
     * Constants for keys of data array.
     */
    const STANDARD = 'standard';
    const RED      = '#ff0000';
    const GRAY     = '#808080';
    const BLACK    = '#000000';
    const CUSTOM   = 'Custom';

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::STANDARD => __('Standard'),
            self::RED      => __('Red'),
            self::GRAY     => __('Gray'),
            self::BLACK    => __('Black'),
            self::CUSTOM   => __('Custom'),
        ];
    }
}
