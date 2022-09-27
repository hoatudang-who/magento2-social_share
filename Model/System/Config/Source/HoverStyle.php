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

class HoverStyle extends OptionArray
{
    /**
     * Constants for keys of data array.
     */
    const FLIP   = 'flip';
    const GROW   = 'grow';
    const BORDER = 'border';
    const SLIDE  = 'slide';
    const SIMPLE = 'simple';

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::FLIP   => __('Flip'),
            self::GROW   => __('Grow'),
            self::BORDER => __('Border'),
            self::SLIDE  => __('Slide'),
            self::SIMPLE => __('Simple'),
        ];
    }
}
