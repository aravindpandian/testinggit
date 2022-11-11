<?php
namespace Aravind\BannerSlider\Controller\Adminhtml\Slider;

class Save extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;
    protected $sliderFactory = false;
   
    
    public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Aravind\BannerSlider\Model\PostFactory $sliderFactory
	)
	{
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
        $this->sliderFactory = $sliderFactory;
	}
    /**
     * Hello test controller page.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {

        $data['contact'] = $this->getRequest()->getParams();

        if ($data['contact']) {
            $id = $this->getRequest()->getParam('entity_id');
            if ($id) {
                $rowData = $this->sliderFactory->getById($id);
            } else {
                unset($data['data_id']);
                $rowData = $this->sliderFactory->create();
            }
       

        echo '<pre>';print_r($data);
        exit;
        if (isset($data['contact']['icon'][0]['name']) && isset($data['contact']['icon'][0]['tmp_name'])) {
            $data['contact']['icon'] = $data['contact']['icon'][0]['name'];
            // $this->iconUploader->moveFileFromTmp($data['contact']['icon']);
        } elseif (isset($data['contact']['icon'][0]['name']) && !isset($data['contact']['icon'][0]['tmp_name'])) {
            $data['contact']['icon'] = $data['contact']['icon'][0]['name'];
        } else {
            $data['contact']['icon'] = '';
        }
         $image_path = 'codextblog/tmp/feature/';
          $data['contact']['icon'] = $image_path . $data['contact']['icon'];
          $data['contact']['title'];
       
         $rowData->setData($data);
        if (isset($data['contact']['title'])) {
            $rowData->setTitle($data['contact']['title']);
            $rowData->setImage($data['contact']['icon']);
            $rowData->setBannerId($data['contact']['banner_id']);
            $rowData->setValidFrom($data['contact']['valid_from']);
            $rowData->setValidTo($data['contact']['valid_to']);
        }
        // print_r($rowData->getData());
        // exit;
        $rowData->save();
        $this->messageManager->addSuccess(__('Banner Image data has been successfully saved.'));
        $this->_redirect('custom/slider/addnew');
    }
    }
}
