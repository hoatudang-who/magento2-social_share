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
namespace Duonght\SocialShare\Controller\Adminhtml\Share;

class Index extends \Magento\Backend\App\Action
{
	/**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Duonght_SocialShare::social_share';
	
	/**
	 * @var Magento\Framework\View\Result\PageFactory
	 */
	protected $resultPageFactory = false;

	/**
	 * Construct
	 * 
	 * @param Magento\Backend\App\Action\Context 	    $context
	 * @param Magento\Framework\View\Result\PageFactory $resultPageFactory
	 */
	public function __construct(
		\Magento\Backend\App\Action\Context 	   $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	) {
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}

	/**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
	public function execute()
	{
		$resultPage = $this->resultPageFactory->create();
		$resultPage->getConfig()->getTitle()->prepend((__('Social Share Report')));

		return $resultPage;
	}
}