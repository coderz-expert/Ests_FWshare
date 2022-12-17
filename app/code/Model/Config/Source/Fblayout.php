<?php
 /**
  * @category    Rules
  * @package     Ests_FWshare
  * @author      ESTS Team
  * @Copyright:  Copyright (c) 2022 ESTS<expoundsofttechsolution.com>
  */
namespace Ests\FWshare\Model\Config\Source;

class Fblayout implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Get Top Option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ["value" => "box_count", "label" => __("Box Count")],
            ["value" => "button_count", "label" => __("Button Count")],
            ["value" => "button", "label" => __("Button")],
            ["value" => "icon_link", "label" => __("Icon Link")],
            ["value" => "icon", "label" => __("Icon")],
            ["value" => "link", "label" => __("Link")],
        ];
    }
}
