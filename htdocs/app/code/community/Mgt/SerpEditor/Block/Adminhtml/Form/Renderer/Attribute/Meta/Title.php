<?php
/**
 * MGT-Commerce GmbH
 * http://www.mgt-commerce.com
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@mgt-commerce.com so we can send you a copy immediately.
 *
 * @category    Mgt
 * @package     Mgt_SerpEditor
 * @author      Stefan Wieczorek <stefan.wieczorek@mgt-commerce.com>
 * @copyright   Copyright (c) 2012 (http://www.mgt-commerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mgt_SerpEditor_Block_Adminhtml_Form_Renderer_Attribute_Meta_Title extends Mage_Adminhtml_Block_Catalog_Form_Renderer_Fieldset_Element
{
    public function getElementHtml()
    {
        $element = $this->getElement();
        
        
        $html = '<textarea style="height:50px;border:1px solid #8080E6" id="'.$element->getHtmlId().'" name="'.$element->getName().'">';
        $html .= $element->getEscapedValue();
        $html .= "</textarea>";
        
        
        /*
        $html = "<textarea tabindex="1" onblur="this.style.color='#CCCCF5'; this.style.border='1px solid #8080E6'; css('subtext_title').color='#CCC'; css('subtext_title_char').color='#CCC'; 
        css('tip_title').color='#CCC';" onfocus="this.style.color='#00C'; this.style.border='1px solid #00C'; css('subtext_title').color='#000'; css('subtext_title_char').color='#06C'; css('tip_title').color='#000';" 
        onkeyup="titleFunction();" cols="70" rows="2" name="in_title" id="in_title" style="color: rgb(204, 204, 245); border: 1px solid rgb(128, 128, 230);">This is an Example of a Title Tag that is Seventy Characters in Length</textarea>
        ";
        */
        return $html;
        
        /*
        if(!$element->getValue()) {
            return parent::getElementHtml();
        }
        $element->setOnkeyup("onUrlkeyChanged('" . $element->getHtmlId() . "')");
        $element->setOnchange("onUrlkeyChanged('" . $element->getHtmlId() . "')");

        $data = array(
            'name' => $element->getData('name') . '_create_redirect',
            'disabled' => true,
        );
        $hidden =  new Varien_Data_Form_Element_Hidden($data);
        $hidden->setForm($element->getForm());

        $storeId = $element->getForm()->getDataObject()->getStoreId();
        $data['html_id'] = $element->getHtmlId() . '_create_redirect';
        $data['label'] = Mage::helper('catalog')->__('Create Permanent Redirect for old URL');
        $data['value'] = $element->getValue();
        $data['checked'] = Mage::helper('catalog')->shouldSaveUrlRewritesHistory($storeId);
        $checkbox = new Varien_Data_Form_Element_Checkbox($data);
        $checkbox->setForm($element->getForm());

        return parent::getElementHtml() . '<br/>' . $hidden->getElementHtml() . $checkbox->getElementHtml() . $checkbox->getLabelHtml();
        */
    }
}