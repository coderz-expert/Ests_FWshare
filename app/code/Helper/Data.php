<?php
/**
 * Copyright © 2022  Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * FWshare Data Helper
 *
 * @author Magento Core Team <core@magentocommerce.com>
 */
namespace Ests\FWshare\Helper;

use Magento\Store\Model\StoreManagerInterface;

class Data
{
   /**
    * Get variable
    *
    * @var $scopeConfig
    */
    protected $scopeConfig;
   /**
    * Get variable
    *
    * @var $_storeManager
    */
    protected $_storeManager;
   /**
    * Get variable
    *
    * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    * @param StoreManagerInterface $storemanager
    */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        StoreManagerInterface $storemanager
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->_storeManager = $storemanager;
    }
   /**
    * Get variable
    *
    * @param ConfigurationData $data
    */
    public function getConfigurationData($data)
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue($data, $storeScope);
    }
}
