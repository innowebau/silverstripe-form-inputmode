<?php

namespace Innoweb\InputMode\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\Forms\FormField;

class InputModeFieldExtension extends Extension
{
    public function updateAttributes(&$attributes)
    {
        $mode = $this->getInputMode();
        if (!empty($mode)) {
            $attributes['inputmode'] = $mode;
        }
    }

    protected function getInputMode()
    {
        $mode = $this->getOwner()->getDynamicData('inputMode');
        if (is_null($mode)) {
            $mode = $this->getOwner()->config()->get('input_mode');
        }
        $this->getOwner()->invokeWithExtensions('updateInputMode', $mode);
        return $mode;
    }

    public function setInputMode(string|false $mode): FormField
    {
        $this->getOwner()->setDynamicData('inputMode', $mode);
        return $this->getOwner();
    }
}
