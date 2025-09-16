<?php

namespace Innoweb\InputMode\Extensions;

use SilverStripe\Core\Extension;

class NumericFieldExtension extends Extension
{
    public function updateInputMode(&$mode)
    {
        $mode = $this->getOwner()->getScale() === 0
            ? 'numeric'
            : 'decimal';
    }
}
