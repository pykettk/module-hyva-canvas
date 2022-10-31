<?php
/**
 * Copyright © element119. All rights reserved.
 * See LICENCE.txt for licence details.
 */
declare(strict_types=1);

namespace Element119\HyvaCanvas\ViewModel;

use Magento\Framework\View\Element\AbstractBlock;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Canvas implements ArgumentInterface
{
    /**
     * Get a consistent, JavaScript friendly version of the canvas block's layout XML name.
     *
     * @param AbstractBlock $block
     * @return string
     */
    public function getCanvasBlockName(AbstractBlock $block): string
    {
        return str_replace(['-', '.'], '_', $block->getNameInLayout());
    }
}
