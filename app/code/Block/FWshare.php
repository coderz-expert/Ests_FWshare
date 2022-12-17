<?php
/**
 * Copyright © 2022 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Ests\FWshare\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Registry;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * FWshare Block
 */
class FWshare extends \Magento\Framework\View\Element\Template
{
   /**
    * Get variable
    *
    * @var $_coreRegistry
    */
    public $_coreRegistry;
   /**
    * Get variable
    *
    * @var $_scopeConfigInterface
    */
    public $_scopeConfigInterface;
   /**
    * Get variable
    *
    * @var $_storeManagerInterface
    */
    public $_storeManagerInterface;
    /**
     * Get Construct
     *
     * @param Template\Context $context
     * @param Registry $coreRegistry
     * @param StoreManagerInterface $storeManagerInterface
     * @param ScopeConfigInterface $scopeConfigInterface
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Registry $coreRegistry,
        StoreManagerInterface $storeManagerInterface,
        ScopeConfigInterface $scopeConfigInterface,
        array $data = []
    ) {
        $this->_coreRegistry = $coreRegistry;
        $this->_storeManagerInterface = $storeManagerInterface;
        $this->_scopeConfigInterface = $scopeConfigInterface;
        parent::__construct($context, $data);
    }
   /**
    * Get variable
    *
    * @param ConfigurationFieldValue $data
    */
    public function getConfigurationFieldValue($data)
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        return $objectManager
            ->create("\Ests\FWshare\Helper\Data")
            ->getConfigurationData($data);
    }
}
