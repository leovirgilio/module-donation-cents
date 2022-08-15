<?php

namespace Lv\DonationCents\Block\Adminhtml\Form\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

class InstitutionSegment extends AbstractFieldArray
{
    protected function _prepareToRender()
    {
        $this->addColumn('title', ['label' => __('Title'), 'class' => 'required-entry']);

        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add');
    }
}
