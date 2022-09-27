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

interface SharingInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const SHARE_ID   = 'share_id';
    const NAME       = 'social_name';
    const SHARED_URL = 'shared_url';
    const UPDATE_AT  = 'update_at';

    /**
     * Get share ID
     *
     * @return int
     */
    public function getShareId();

    /**
     * Get social name
     *
     * @return string
     */
    public function getSocialName();

    /**
     * Get share url
     *
     * @return string
     */
    public function getSharedUrl();

    /**
     * Get share time
     *
     * @return datetime
     */
    public function getUpdateAt();

    /**
     * Set share id
     *
     * @param int $id
     * @return Duonght\SocialShare\Api\Data\SharingInterface
     */
    public function setShareId($id);

    /**
     * Set social name
     *
     * @param string $name
     * @return Duonght\SocialShare\Api\Data\SharingInterface
     */
    public function setSocialName($name);

    /**
     * Set share url
     *
     * @param string $url
     * @return Duonght\SocialShare\Api\Data\SharingInterface
     */
    public function setSharedUrl($url);

    /**
     * Set share time
     *
     * @param string $time
     * @return Duonght\SocialShare\Api\Data\SharingInterface
     */
    public function setUpdateAt($time);
}
