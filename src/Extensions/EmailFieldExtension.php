<?php

namespace Innoweb\InputMode\Extensions;

use SilverStripe\Core\Extension;

class EmailFieldExtension extends Extension
{
    public function updateAttributes(&$attributes)
    {
        $attributes['inputmode'] = 'email';
    }
}
