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
use Duonght\SocialShare\Api\Data\ShareInterface;

class Share extends AbstractModel implements ShareInterface
{
    /**
     * Share construct
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\Share::class);
    }

    /**
     * Get report id
     *
     * @return string
     */
    public function getReportId()
    {
        return $this->getData(self::REPORT_ID);
    }

    /**
     * Get share url
     *
     * @return string
     */
    public function getShareUrl()
    {
        return $this->getData(self::URL);
    }

    /**
     * Get share on facebook
     *
     * @return int
     */
    public function getFacebook()
    {
        return $this->getData(self::FACEBOOK);
    }

    /**
     * Get share on twitter
     *
     * @return int
     */
    public function getTwitter()
    {
        return $this->getData(self::TWITTER);
    }

    /**
     * Get share on pinterest
     *
     * @return int
     */
    public function getPinterest()
    {
        return $this->getData(self::PINTEREST);
    }

    /**
     * Get share on linkedin
     *
     * @return int
     */
    public function getLinkedin()
    {
        return $this->getData(self::LINKEDIN);
    }

    /**
     * Get share total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->getData(self::TOTAL);
    }

    /**
     * Get share created time
     *
     * @return datetime
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Get share updated time
     *
     * @return datetime
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Set report id
     *
     * @param int $id
     * @return $this
     */
    public function setReportId($id)
    {
        return $this->setData(self::REPORT_ID, $id);
    }

    /**
     * Set share url
     *
     * @param string $name
     * @return $this
     */
    public function setShareUrl($url)
    {
        return $this->setData(self::URL, $url);
    }

    /**
     * Set share number on facebook
     *
     * @param int $fb
     * @return $this
     */
    public function setFacebook($fb)
    {
        return $this->setData(self::FACEBOOK, $fb);
    }

    /**
     * Set share number on twitter
     *
     * @param int $tw
     * @return $this
     */
    public function setTwitter($tw)
    {
        return $this->setData(self::TWITTER, $tw);
    }

    /**
     * Set share number on pinterest
     *
     * @param int $pin
     * @return $this
     */
    public function setPinterest($pin)
    {
        return $this->setData(self::PINTEREST, $pin);
    }

    /**
     * Set share number on linkedin
     *
     * @param int $link
     * @return $this
     */
    public function setLinkedin($link)
    {
        return $this->setData(self::LINKEDIN, $link);
    }

    /**
     * Set share number total
     *
     * @param int $number
     * @return $this
     */
    public function setTotal($number)
    {
        return $this->setData(self::TOTAL, $number);
    }

    /**
     * Set share created time
     *
     * @param datetime $createdTime
     * @return $this
     */
    public function setCreatedAt($createdTime)
    {
        return $this->setData(self::CREATED_AT, $createdTime);
    }

    /**
     * Set share updated time
     *
     * @param datetime $updatedTime
     * @return $this
     */
    public function setUpdatedAt($updatedTime)
    {
        return $this->setData(self::UPDATED_AT, $updatedTime);
    }
}
