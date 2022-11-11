<?php
namespace Aravind\BannerSlider\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'entity_id';
	// protected $_eventPrefix = 'mageplaza_helloworld_post_collection';
	// protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Aravind\BannerSlider\Model\Post', 'Aravind\BannerSlider\Model\ResourceModel\Post');
	}

}