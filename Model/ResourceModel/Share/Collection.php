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
namespace Duonght\SocialShare\Model\ResourceModel\Share;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Duonght\SocialShare\Model\Share::class, \Duonght\SocialShare\Model\ResourceModel\Share::class);
    }

    /**
     * Returns pairs report_id - shared_url
     *
     * @return array
     */
    public function toOptionArray()
    {
        return $this->_toOptionArray('report_id', 'shared_url');
    }
}
