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

class Mgt_SerpEditor_Model_Observer 
{
    public function setFieldRenderer(Varien_Event_Observer $observer)
    {
        $form = $observer->getEvent()->getForm();
        if ($form && $form->getElement('meta_title')) {
            
            $metaTitle = $form->getElement('meta_title');
            $layout = Mage::app()->getLayout();
            $metaTitle->setRenderer($layout->createBlock('mgt_serp_editor_adminhtml/form_renderer_attribute_meta_title'));
            
            $muha = 1;
        }
    }
}