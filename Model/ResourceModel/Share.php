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
namespace Duonght\SocialShare\Model\ResourceModel;

use Magento\Framework\EntityManager\MetadataPool;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

class Share extends AbstractDb
{
    /**
     * @var MetadataPool
     */
    protected $metadataPool;

    /**
     * @var Context
     */
    protected $context;
    protected $resources;

    /**
     * Share construct
     * 
     * @param MetadataPool $metadataPool
     * @param Context      $context
     */
    public function __construct(
        MetadataPool $metadataPool,
        Context      $context,
        $connectionName = null
    ) {
        $this->metadataPool = $metadataPool;
        $this->resources    = $context->getResources();
        parent::__construct($context, $connectionName);
    }
    
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('m2_social_share_report', 'report_id');
    }
}
