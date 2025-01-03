<?php

namespace Innoweb\InputMode\Extensions;

use SilverStripe\Core\Extension;

class NumericFieldExtension extends Extension
{
    public function updateAttributes(&$attributes)
    {
        if ($this->getOwner()->getScale() === 0) {
            $attributes['inputmode'] = 'numeric';
        } else {
            $attributes['inputmode'] = 'decimal';
        }
    }
}
