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
namespace Duonght\SocialShare\Api\Data;

interface ShareInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const REPORT_ID  = 'report_id';
    const URL        = 'shared_url';
    const FACEBOOK   = 'facebook';
    const TWITTER    = 'twitter';
    const PINTEREST  = 'pinterest';
    const LINKEDIN   = 'linkedin';
    const TOTAL      = 'total';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Get report ID
     *
     * @return int
     */
    public function getReportId();

    /**
     * Get share url
     *
     * @return string
     */
    public function getShareUrl();

    /**
     * Get share number on facebook
     *
     * @return int
     */
    public function getFacebook();

    /**
     * Get share number on twitter
     *
     * @return int
     */
    public function getTwitter();

    /**
     * Get share number on pinterest
     *
     * @return int
     */
    public function getPinterest();

    /**
     * Get share number on linkedin
     *
     * @return int
     */
    public function getLinkedin();

    /**
     * Get share total
     *
     * @return int
     */
    public function getTotal();

    /**
     * Get created time
     *
     * @return datetime
     */
    public function getCreatedAt();

    /**
     * Get updated time
     *
     * @return datetime
     */
    public function getUpdatedAt();

    /**
     * Set report number
     *
     * @param int $id
     * @return Duonght\SocialShare\Api\Data\ShareInterface
     */
    public function setReportId($id);

    /**
     * Set share url
     *
     * @param string $url
     * @return Duonght\SocialShare\Api\Data\ShareInterface
     */
    public function setShareUrl($url);

    /**
     * Set share on facebook
     *
     * @param int $fb
     * @return Duonght\SocialShare\Api\Data\ShareInterface
     */
    public function setFacebook($fb);

    /**
     * Set share on twitter
     *
     * @param int $tw
     * @return Duonght\SocialShare\Api\Data\ShareInterface
     */
    public function setTwitter($tw);

   /**
     * Set share on pinterest
     *
     * @param int $pin
     * @return Duonght\SocialShare\Api\Data\ShareInterface
     */
    public function setPinterest($pin);

    /**
     * Set share on linkedin
     *
     * @param int $link
     * @return Duonght\SocialShare\Api\Data\ShareInterface
     */
    public function setLinkedin($link);

    /**
     * Set share number total
     *
     * @param int $number
     * @return Duonght\SocialShare\Api\Data\ShareInterface
     */
    public function setTotal($number);

    /**
     * Set created time
     *
     * @param datetime $createdTime
     * @return Duonght\SocialShare\Api\Data\ShareInterface
     */
    public function setCreatedAt($createdTime);

    /**
     * Set updated time
     *
     * @param datetime $updatedTime
     * @return Duonght\SocialShare\Api\Data\ShareInterface
     */
    public function setUpdatedAt($updatedTime);
}
