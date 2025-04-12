<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing PartyNameType
 *
 * ABIE
 *  Party Name. Details
 *  A class for defining the name of a party.
 *  Party Name
 * XSD Type: PartyNameType
 */
class PartyNameType
{
    /**
     * BBIE
     *  Party Name. Name
     *  The name of the party.
     *  1
     *  Party Name
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft
     *
     * @var \UBL\Common\CBC\Name $name
     */
    private $name = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Party Name. Name
     *  The name of the party.
     *  1
     *  Party Name
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft
     *
     * @return \UBL\Common\CBC\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Party Name. Name
     *  The name of the party.
     *  1
     *  Party Name
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft
     *
     * @param \UBL\Common\CBC\Name $name
     * @return self
     */
    public function setName(\UBL\Common\CBC\Name $name)
    {
        $this->name = $name;
        return $this;
    }
}


