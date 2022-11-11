<?php
namespace Aravind\BannerSlider\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	 const CACHE_TAG = 'banner_slider';

	// protected $_cacheTag = 'mageplaza_helloworld_post';

	// protected $_eventPrefix = 'mageplaza_helloworld_post';

	protected function _construct()
	{
		$this->_init('Aravind\BannerSlider\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}