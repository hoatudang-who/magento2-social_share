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
namespace Duonght\SocialShare\Block\Adminhtml\Renderer\Config;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Module\ModuleResource;
use Magento\Backend\Block\Template\Context;

class Version extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * @var ModuleResource
     */
    protected $moduleResource;

    /**
     * @param ModuleResource $moduleResource
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        ModuleResource $moduleResource,
        Context $context,
        array $data = []
    ) {
        $this->moduleResource = $moduleResource;
        parent::__construct($context, $data);
    }

    /**
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        return $this->moduleResource->getDataVersion('Duonght_SocialShare');
    }
}
