<?php

namespace WilsonGlasser\Spout\Writer\Exception\Border;

use WilsonGlasser\Spout\Common\Entity\Style\BorderPart;
use WilsonGlasser\Spout\Writer\Exception\WriterException;

class InvalidNameException extends WriterException
{
    public function __construct($name)
    {
        $msg = '%s is not a valid name identifier for a border. Valid identifiers are: %s.';

        parent::__construct(sprintf($msg, $name, implode(',', BorderPart::getAllowedNames())));
    }
}
