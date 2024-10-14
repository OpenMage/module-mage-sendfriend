<?php
/**
 * OpenMage
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available at https://opensource.org/license/osl-3-0-php
 *
 * @category   Mage
 * @package    Mage_Sendfriend_
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://www.magento.com)
 * @copyright  Copyright (c) 2022-2024 The OpenMage Contributors (https://www.openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Send to a Friend Limit sending by Source
 *
 * @category   Mage
 * @package    Mage_Sendfriend_
 */
class Mage_Sendfriend_Model_System_Config_Source_Checktype
{
    /**
     * Retrieve Check Type Option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => Mage_Sendfriend_Helper_Data::CHECK_IP,
                'label' => Mage::helper('adminhtml')->__('IP Address')
            ],
            [
                'value' => Mage_Sendfriend_Helper_Data::CHECK_COOKIE,
                'label' => Mage::helper('adminhtml')->__('Cookie (unsafe)')
            ],
        ];
    }
}
