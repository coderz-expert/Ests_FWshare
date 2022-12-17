<?php
 /**
  * @category    Rules
  * @package     Ests_FWshare
  * @author      ESTS Team
  * @Copyright:  Copyright (c) 2022 ESTS<expoundsofttechsolution.com>
  */
namespace Ests\FWshare\Model\Config\Source;

class Wasize implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Get top option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 's', 'label' => __('Small')],
            ['value' => 'm', 'label' => __('Medium')],
            ['value' => 'l', 'label' => __('Large')],
        ];
    }
}
