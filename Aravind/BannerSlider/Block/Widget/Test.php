<?php
namespace Aravind\BannerSlider\Block\Widget;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
class Test extends Template implements BlockInterface
{
    protected $_template = "widget/test.phtml";

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Aravind\BannerSlider\Model\PostFactory $postFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager
        )
	{
        $this->_postFactory = $postFactory;
        $this->_storeManager = $storeManager;
		parent::__construct($context);
	}

    public function getPostCollection(){
		$post = $this->_postFactory->create();
		return $post->getCollection();
	}

	public function mediaurl()
	{
		return $mediaUrl = $this ->_storeManager-> getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA );
	}
}