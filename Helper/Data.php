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
namespace Duonght\SocialShare\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\View\Asset\Repository;
use Duonght\SocialShare\Model\System\Config\Source\Style;
use Duonght\SocialShare\Model\System\Config\Source\BackgroundColor;
use Duonght\SocialShare\Model\System\Config\Source\Color;
use Duonght\Core\Helper\Data as CoreHelper;

class Data extends AbstractHelper
{
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var Repository
     */
    protected $assetRepo;

    /**
     * @var CoreHelper
     */
    protected $coreHelper;

    /**
     * Data constructor.
     *
     * @param Context $context
     * @param StoreManagerInterface $storeManager
     * @param Repository $assetRepo
     * @param CoreHelper $coreHelper
     */
    public function __construct(
        Context $context,
        StoreManagerInterface $storeManager,
        Repository $assetRepo,
        CoreHelper $coreHelper
    ) {
        $this->storeManager = $storeManager;
        $this->assetRepo = $assetRepo;
        $this->coreHelper = $coreHelper;
        parent::__construct($context);
    }

    /**
     * Get values in configuration
     *
     * @param  string $key
     * @param null $storeId
     * @result  mixed
     */
    public function getConfig($key, $storeId = null)
    {
        $storeId   = $this->storeManager->getStore($storeId);
        $result    = $this->scopeConfig->getValue(
            'socialshare/' . $key, ScopeInterface::SCOPE_STORE, $storeId 
        );
        return $result;
    }

    /**
     * Check module status
     * 
     * @param null $storeId
     * @return mixed
     */
    public function getEnableModule($storeId = null) 
    {
        return $this->getConfig('general/enable_module', $storeId);
    }

    /**
     * Check share counter
     * 
     * @param null $storeId
     * @return mixed
     */
    public function getShareCounter($storeId = null)
    {
        return $this->getConfig('general/sharecounter', $storeId);
    }

    /**
     * Check add more social share
     * 
     * @param null $storeId
     * @return mixed
     */
    public function getAddMoreShare($storeId = null)
    {
        return $this->getConfig('general/more_share', $storeId);
    }

    /**
     * Check social network enable
     * 
     * @param $serviceCode
     * @param null $storeId
     * @return mixed
     */
    public function getServiceEnable($serviceCode, $storeId = null)
    {
        return $this->getConfigShare($serviceCode . '/enabled', $storeId);
    }

    /**
     * Get facebook sort
     * 
     * @param null $storeId
     * @return int
     */
    public function getFacebookSort($storeId = null)
    {
        return $this->getConfigShare('facebook/sort', $storeId);
    }

    /**
     * Get twitter sort
     * 
     * @param null $storeId
     * @return int
     */
    public function getTwitterSort($storeId = null)
    {
        return $this->getConfigShare('twitter/sort', $storeId);
    }

    /**
     * Get pinterest sort
     * 
     * @param null $storeId
     * @return int
     */
    public function getPinterestSort($storeId = null)
    {
        return $this->getConfigShare('pinterest/sort', $storeId);
    }

    /**
     * Get linkedin sort
     * 
     * @param null $storeId
     * @return int
     */
    public function getLinkedinSort($storeId = null)
    {
        return $this->getConfigShare('linkedin/sort', $storeId);
    }

    /**
     * @param $key, null $storeId
     * @return array|mixed
     */
    public function getConfigShare($key, $storeId = null)
    {
        $storeId = $this->storeManager->getStore($storeId);
        $result  = $this->scopeConfig->getValue(
            'socialshare/button_config/' . $key, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $storeId 
        );
        
        return $result;
    }

    /**
     * Get CMS page position
     * 
     * @param null $storeId
     * @return mixed
     */
    public function getCmsPage($storeId = null) 
    {
        return $this->getConfig('button_position/cms_page', $storeId);
    }

    /**
     * Get Category page position
     * 
     * @param null $storeId
     * @return mixed
     */
    public function getCategoryPage($storeId = null) 
    {
        return $this->getConfig('button_position/categore_page', $storeId);
    }

    /**
     * Get Product page position
     * 
     * @param null $storeId
     * @return mixed
     */
    public function getProductPage($storeId = null) 
    {
        return $this->getConfig('button_position/product_page', $storeId);
    }

    /**
     * Get Contact page position
     * 
     * @param null $storeId
     * @return mixed
     */
    public function getContactPage($storeId = null) 
    {
        return $this->getConfig('button_position/contact_page', $storeId);
    }

    /**
     * Get button style
     * 
     * @param null $storeId
     * @return mixed
     */
    public function getButtonStyle($storeId = null)
    {
        $selectColor = $this->getConfig('button_style/style', $storeId);
        if ($selectColor === Style::ICON) {
            return $this->getConfig('button_style/icon_shape', $storeId);
        }

        return $selectColor;
    }

    /**
     * Get icon size
     * 
     * @param null $storeId
     * @return array|mixed
     */
    public function getIconSize($storeId = null)
    {
        return $this->getConfig('button_style/icon_size', $storeId);
    }

     /**
     * Get background color
     * 
     * @param null $storeId
     * @return array|mixed
     */
    public function getBackgroundColor($storeId = null)
    {
        $selectBackgroundColor = $this->getConfig('button_style/background_color', $storeId);
        if ($selectBackgroundColor === BackgroundColor::CUSTOM) {
            return $this->getConfig('button_style/custom_background_color');
        }
        return $selectBackgroundColor;
    }

    /**
     * Get color
     * 
     * @param null $storeId
     * @return array|mixed
     */
    public function getColor($storeId = null)
    {
        $selectColor = $this->getConfig('button_style/color', $storeId);
        if ($selectColor === Color::CUSTOM) {
            return $this->getConfig('button_style/custom_color');
        }
        return $selectColor;
    }

    /**
     * Get hover style
     * 
     * @param null $storeId
     * @return array|mixed
     */
    public function getHoverStyle($storeId = null)
    {
        return $this->getConfig('button_style/hover_style', $storeId);
    }

    /**
     * Retrieve url of a view file
     *
     * @param string $fileId
     * @param array $params
     * @return string
     */
    public function getViewFileUrl($fieldId, $params = [])
    {
        try {
            $params = array_merge(['_secure' => $this->_request->isSecure()], $params);
            return $this->assetRepo->getUrlWithParams($fieldId, $params);
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
        }
    }
}