 public function __construct(
   \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
   \Magento\GiftMessage\Model\MessageFactory $messageFactory,
   \Magento\Backend\Model\Session\Quote $session,
   \Magento\GiftMessage\Helper\Message $giftMessageMessage
 ) {
   $this->productRepository = $productRepository;
   $this->_messageFactory = $messageFactory;
   $this->_session = $session;
   $this->_giftMessageMessage = $giftMessageMessage;
 }
