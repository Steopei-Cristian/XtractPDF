<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing AddressLineType
 *
 * ABIE
 *  Address Line. Details
 *  A class to define an unstructured address line.
 *  Address Line
 * XSD Type: AddressLineType
 */
class AddressLineType
{
    /**
     * BBIE
     *  Address Line. Line. Text
     *  An address line expressed as unstructured text.
     *  1
     *  Address Line
     *  Line
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @var \App\UBL\Common\CBC\Line $line
     */
    private $line = null;

    /**
     * Gets as line
     *
     * BBIE
     *  Address Line. Line. Text
     *  An address line expressed as unstructured text.
     *  1
     *  Address Line
     *  Line
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @return \App\UBL\Common\CBC\Line
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Sets a new line
     *
     * BBIE
     *  Address Line. Line. Text
     *  An address line expressed as unstructured text.
     *  1
     *  Address Line
     *  Line
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @param \App\UBL\Common\CBC\Line $line
     * @return self
     */
    public function setLine(\App\UBL\Common\CBC\Line $line)
    {
        $this->line = $line;
        return $this;
    }
}

