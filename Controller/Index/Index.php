<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Theprogrammer\JsonInfo\Controller\Index;


use Magento\Framework\View\Result\Page;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    private $jsonFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
    ) {
        $this->jsonFactory = $jsonFactory;

        parent::__construct($context);
    }

    /**
     *
     * @return Page
     */
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Json $json */
        $json = $this->jsonFactory->create();
        $json->setJsonData(json_encode(['test'=>1]));

        return $json;
    }
}
