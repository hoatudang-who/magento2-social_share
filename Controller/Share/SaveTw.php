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
namespace Duonght\SocialShare\Controller\Share;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Result\PageFactory;
use Duonght\SocialShare\Model\SharingFactory;
 
class SaveTw extends Action
{
    /**
     * @var UrlInterface
     */
    private $url;

    /**
     * @var Context
     */
    protected $context;

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var SharingFactory
     */
    protected $sharingFactory;
    
    /**
     * SaveTw construct
     * 
     * @param UrlInterface $url
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param SharingFactory $sharingFactory
     */
    public function __construct(
        UrlInterface $url,
        Context $context,
        PageFactory $resultPageFactory,
        SharingFactory $sharingFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->sharingFactory = $sharingFactory;
        $this->url = $url;
        parent::__construct($context);
    }
    
    /**
     * SaveTw action
     *
     * @return \Magento\Framework\Controller\ResultFactory
     */
    public function execute()
    {
        $colection = $this->sharingFactory->create();
        $urlShared = $this->getRequest()->getPost('sharedUrl');
        $colection->setSocialName('Twitter');
        $colection->setSharedUrl($urlShared);
        $colection->save();

        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
    }
}