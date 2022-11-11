<?php
namespace Aravind\BannerSlider\Controller\Adminhtml\Slider;

class Addnew extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;
    
    public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	)
	{
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}
    /**
     * Hello test controller page.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
		$resultPage->getConfig()->getTitle()->prepend((__('Add New Banner Slider')));

		return $resultPage;
    }
}
