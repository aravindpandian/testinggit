<?php
namespace Aravind\BannerSlider\Block\Adminhtml\Contact\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveButton
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Save'),
            'class' => 'save primary',
            'on_click' => sprintf("location.href = '%s';", $this->getBackUrl()),
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 90,
        ];
    }
    public function getBackUrl()
    {
        return $this->getUrl('slider/save/');
    }
}