<?php

namespace Magento\Newsletter\Model;

use Magento\Customer\Api\AccountManagementInterface;
use Magento\Customer\Api\CustomerRepositoryInterface;

class Subscriber extends \Magento\Framework\Model\AbstractModel
{
  // ...

  public function __construct(
    \Magento\Framework\Model\Context $context,
    \Magento\Framework\Registry $registry,
    \Magento\Newsletter\Helper\Data $newsletterData,
    \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
    \Magento\Framework\Mail\Template\TransportBuilder
      $transportBuilder,
    \Magento\Store\Model\StoreManagerInterface $storeManager,
    \Magento\Customer\Model\Session $customerSession,
    CustomerRepositoryInterface $customerRepository,
      AccountManagementInterface $customerAccountManagement,
    \Magento\Framework\Translate\Inline\StateInterface
      $inlineTranslation,
    \Magento\Framework\Model\ResourceModel\AbstractResource
      $resource = null,
    \Magento\Framework\Data\Collection\AbstractDb
      $resourceCollection = null,
    array $data = []
  ) {
   // ...
  }

  // ...
}
