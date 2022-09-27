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

class Color extends \Magento\Config\Block\System\Config\Form\Field 
{
    /**
     * Color construct
     * 
     * @param Magento\Backend\Block\Template\Context $context
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context, 
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Get element html
     * 
     * @param Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return mixed
     */
    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element) {
        $html = $element->getElementHtml();
        $value = $element->getData('value');

        $html .= '<script type="text/javascript">
            require(["jquery","jquery/colorpicker/js/colorpicker"], function ($) {
                $(document).ready(function () {
                    var $elementId = $("#' . $element->getHtmlId() . '");
                    $elementId.css("backgroundColor", "'. $value .'");

                    $elementId.ColorPicker({
                        color: "'. $value .'",
                        onChange: function (hsb, hex, rgb) {
                            $elementId.css("backgroundColor", "#" + hex).val("#" + hex);
                        }
                    });
                });
            });
            </script>';
        return $html;
    }
}