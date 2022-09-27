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
namespace Duonght\SocialShare\Model;

use Magento\Framework\Model\AbstractModel;
use Duonght\SocialShare\Api\Data\SharingInterface;

class Sharing extends AbstractModel implements SharingInterface
{

    protected function _construct()
    {
        $this->_init(ResourceModel\Sharing::class);
    }

    /**
     * Get share id
     *
     * @return int
     */
    public function getShareId()
    {
        return $this->getData(self::SHARE_ID);
    }

    /**
     * Get social name
     *
     * @return string
     */
    public function getSocialName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Get share url
     *
     * @return string
     */
    public function getSharedUrl()
    {
        return $this->getData(self::SHARED_URL);
    }

    /**
     * Get share time
     *
     * @return datetime
     */
    public function getUpdateAt()
    {
        return $this->getData(self::UPDATE_AT);
    }

    /**
     * Set share id
     *
     * @param int $id
     * @return $this
     */
    public function setShareId($id)
    {
        return $this->setData(self::SHARE_ID, $id);
    }

    /**
     * Set social name
     *
     * @param string $name
     * @return $this
     */
    public function setSocialName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Set share url
     *
     * @param string $url
     * @return $this
     */
    public function setSharedUrl($url)
    {
        return $this->setData(self::SHARED_URL, $url);
    }

    /**
     * Set share time
     *
     * @param string $time
     * @return $this
     */
    public function setUpdateAt($time)
    {
        return $this->setData(self::UPDATE_AT, $time);
    }
}
