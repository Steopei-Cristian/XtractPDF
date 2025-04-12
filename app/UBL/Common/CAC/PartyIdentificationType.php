<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing PartyIdentificationType
 *
 * ABIE
 *  Party Identification. Details
 *  A class to define an identifier for a party.
 *  Party Identification
 * XSD Type: PartyIdentificationType
 */
class PartyIdentificationType
{
    /**
     * BBIE
     *  Party Identification. Identifier
     *  An identifier for the party.
     *  1
     *  Party Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Party Identification. Identifier
     *  An identifier for the party.
     *  1
     *  Party Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Party Identification. Identifier
     *  An identifier for the party.
     *  1
     *  Party Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\ID $iD
     * @return self
     */
    public function setID(\UBL\Common\CBC\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }
}


