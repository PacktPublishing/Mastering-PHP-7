$params = new \Magento\Framework\DataObject();
$params->setCategoryId(false);
$params->setConfigureMode(true);
$params->setBuyRequest($quoteItem->getBuyRequest());
