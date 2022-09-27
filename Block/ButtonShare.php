<?php
/**
 * Duonght
 *
 * This source file is subject to the Duonght Software License, which is available at https://www.duonght.com/license
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to https://www.duonght.com for more information.
 *
 * @category  Duonght
 * @package   Duonght_SocialShare
 * @copyright Copyright (C) 2021 Duonght (https://www.duonght.com)
 */
namespace Duonght\SocialShare\Block;
 
use Magento\Backend\Block\Template\Context;
use Duonght\SocialShare\Model\System\Config\Source\Position;
use Duonght\SocialShare\Model\System\Config\Source\Style;
use Duonght\SocialShare\Model\System\Config\Source\IconStyle;
use Duonght\SocialShare\Model\System\Config\Source\ButtonSize;
use Duonght\SocialShare\Model\System\Config\Source\BackgroundColor;
use Duonght\SocialShare\Model\System\Config\Source\Color;
use Duonght\SocialShare\Model\System\Config\Source\HoverStyle;
use Duonght\SocialShare\Helper\Data as HelperData;

class ButtonShare extends \Magento\Framework\View\Element\Template
{
    /**
     * Constants for keys of data array.
     */
    const SERVICES = ['facebook', 'twitter', 'pinterest', 'linkedin'];

    /**
     * @var HelperData
     */
    protected $helperData;

    /**
     * ButtonShare constructor.
     * 
     * @param Context $context
     * @param Data $dataHelper
     */
    public function __construct(
        Context $context,
        HelperData $helperData,
        array $data = []
    ) {
        $this->helperData = $helperData;
        parent::__construct($context, $data);
    }

    /**
     * Check module enable
     * 
     * @return bool
     */
    public function isEnable()
    {
        return $this->helperData->getEnableModule();
    }

    /**
     * Check Share counter
     * 
     * @return string
     */
    public function isShareCounter()
    {
        if ($this->helperData->getShareCounter()){
            return 'count_on';
        }
        return "count_off";
    }

    /**
     * Check add more share
     * 
     * @return string
     */
    public function isAddMoreShare()
    {
        if ($this->helperData->getAddMoreShare()) {
            return 'more-share';
        }
        return "more-off";
    }

    /**
     * Check social network enable
     * 
     * @return array
     */
    public function isEnableService()
    {
        $enableServices = [];
        foreach (self::SERVICES as $service) {
            if ($this->helperData->getServiceEnable($service)) {
                $enableServices[] = $service;
            }
        }

        return $enableServices;
    }

    /**
     * Check fecebook sort 
     * 
     * @return int
     */
    public function isFacebookSort()
    {
        return $this->helperData->getFacebookSort();
    }

    /**
     * Check Twitter sort
     * 
     * @return int
     */
    public function isTwitterSort()
    {
        return $this->helperData->getTwitterSort();
    }

    /**
     * Check pinterest sort
     * 
     * @return int
     */
    public function isPinterestSort()
    {
        return $this->helperData->getPinterestSort();
    }

    /**
     * Check linkedin sort
     * 
     * @return int
     */
    public function isLinkedinSort()
    {
        return $this->helperData->getLinkedinSort();
    }

    /**
     * Check CMS page position
     * 
     * @return mixed
     */
    public function getCmsPagePosition()
    {
        if ($this->helperData->getCmsPage() === Position::LEFT) {
            return 'social-group-left';
        }
        if ($this->helperData->getCmsPage() === Position::RIGHT) {
            return 'social-group-right';
        }
        if ($this->helperData->getCmsPage() === Position::INLINE) {
            return 'social-group-inline';
        }
        if ($this->helperData->getCmsPage() === Position::HIDE) {
            return false;
        }
    }

    /**
     * Check category page position 
     * 
     * @return mixed
     */
    public function getCategoryPagePosition()
    {
        if ($this->helperData->getCategoryPage() === Position::LEFT) {
            return 'social-group-left';
        }
        if ($this->helperData->getCategoryPage() === Position::RIGHT) {
            return 'social-group-right';
        }
        if ($this->helperData->getCategoryPage() === Position::INLINE) {
            return 'social-group-inline';
        }
        if ($this->helperData->getCategoryPage() === Position::HIDE) {
            return false;
        }
    }

    /**
     * Check product page position
     * 
     * @return mixed
     */
    public function getProductPagePosition()
    {
        if ($this->helperData->getProductPage() === Position::LEFT) {
            return 'social-group-left';
        }
        if ($this->helperData->getProductPage() === Position::RIGHT) {
            return 'social-group-right';
        }
        if ($this->helperData->getProductPage() === Position::INLINE) {
            return 'social-group-inline';
        }
        if ($this->helperData->getProductPage() === Position::HIDE) {
            return false;
        }
    }

    /**
     * Check contact page position
     * 
     * @return mixed
     */
    public function getContactPagePosition()
    {
        if ($this->helperData->getContactPage() === Position::LEFT) {
            return 'social-group-left';
        }
        if ($this->helperData->getContactPage() === Position::RIGHT) {
            return 'social-group-right';
        }
        if ($this->helperData->getContactPage() === Position::INLINE) {
            return 'social-group-inline';
        }
        if ($this->helperData->getContactPage() === Position::HIDE) {
            return false;
        }
    }

    /**
     * Check button style
     * 
     * @return int
     */
    public function isButtonStyle()
    {
        if ($this->helperData->getButtonStyle() !== Style::STANDARD) {
            return $this->helperData->getButtonStyle() === IconStyle::SQUARES ? 6 : 50;
        }
        return 5;
    }

    /**
     * Check icon size
     * 
     * @return string
     */
    public function isIconSize() 
    {
        if ($this->helperData->getIconSize() === ButtonSize::SMALL) {
            return 'width:16px;height:16px;';
        }
        if ($this->helperData->getIconSize() === ButtonSize::NORMAL) {
            return 'width:32px;height:32px;';
        }
        if ($this->helperData->getIconSize() === ButtonSize::MEDIUM) {
            return 'width:48px;height:48px;';
        }
        if ($this->helperData->getIconSize() === ButtonSize::LARGE) {
            return 'width:64px;height:64px;';
        }
    }

    /**
     * Get CSS font-size
     * 
     * @return string
     */
    public function getFontSize()
    {
        if ($this->helperData->getIconSize() === ButtonSize::SMALL) {
            return 'font-size: 0.8rem;';
        }
        if ($this->helperData->getIconSize() === ButtonSize::NORMAL) {
            return 'font-size: 1.6rem;';
        }
        if ($this->helperData->getIconSize() === ButtonSize::MEDIUM) {
            return 'font-size: 1.6rem;';
        }
        if ($this->helperData->getIconSize() === ButtonSize::LARGE) {
            return 'font-size: 2.6rem;';
        }
    }

    /** 
     * Check background color
     * 
     * @return string
     */
    public function isBackgroundColor()
    {
        if ($this->helperData->getBackgroundColor() !== BackgroundColor::STANDARD) {
            $color = $this->helperData->getBackgroundColor();
            return 'background-color: ' . $color . '!important;';
        }

        return 'border: transparent;';
    }

    /**
     * Check color
     * 
     * @return string
     */
    public function isColor()
    {
        if ($this->helperData->getColor() !== Color::STANDARD) {
            $color = $this->helperData->getColor();
            return 'color: ' . $color . ';';
        }

        return 'color: white;';
    }

    /**
     * Get CSS hover style
     * 
     * @return string
     */
    public function getHoverStyle()
    {
        if ($this->helperData->getHoverStyle() === HoverStyle::FLIP) {
            return 'hover-flip';
        }
        if ($this->helperData->getHoverStyle() === HoverStyle::GROW) {
            return 'hover-grow';
        }
        if ($this->helperData->getHoverStyle() === HoverStyle::BORDER) {
            return 'hover-border';
        }
        if ($this->helperData->getHoverStyle() === HoverStyle::SLIDE) {
            return 'hover-slide';
        }
        if ($this->helperData->getHoverStyle() === HoverStyle::SIMPLE) {
            return 'hover-simple';
        }
    }

    /**
     * Get button facebook
     * 
     * @return string
     */
    public function getButtonFb()
    {
        if ($this->helperData->getButtonStyle() !== Style::STANDARD) {
            return '<i class="fab fa-facebook-f"></i>';
        }

        return 'Facebook';
    }

    /**
     * Get button twitter
     * 
     * @return string
     */
    public function getButtonTw()
    {
        if ($this->helperData->getButtonStyle() !== Style::STANDARD) {
            return '<i class="fab fa-twitter"></i>';
        }

        return 'Twitter';
    }

    /**
     * Get button pinterest
     * 
     * @return string
     */
    public function getButtonPin()
    {
        if ($this->helperData->getButtonStyle() !== Style::STANDARD) {
            return '<i class="fab fa-pinterest-p"></i>';
        }

        return 'Pinterest';
    }

    /**
     * Get button linkedIn
     * 
     * @return string
     */
    public function getButtonLink()
    {
        if ($this->helperData->getButtonStyle() !== Style::STANDARD) {
            return '<i class="fab fa-linkedin-in"></i>';
        }

        return 'LinkedIn';
    }
}