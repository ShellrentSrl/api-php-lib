<?php

namespace PleskX\Api\Struct\Webspace;

class HostingSetting extends \PleskX\Api\Struct
{
    /** @var array */
    public $properties;

    public function __construct($apiResponse)
    {
        $this->properties = [];

        foreach ($apiResponse->vrt_hst->property as $propertyInfo) {
            $this->properties[reset( $propertyInfo->name)] = reset( $propertyInfo->value );
        }
    }
}