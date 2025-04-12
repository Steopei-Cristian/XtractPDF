<?php

namespace UBL\Common\CAC;

/**
 * Class representing EvidenceSuppliedType
 *
 * ABIE
 *  Evidence Supplied. Details
 *  A reference to evidence.
 *  Evidence Supplied
 * XSD Type: EvidenceSuppliedType
 */
class EvidenceSuppliedType
{
    /**
     * BBIE
     *  Evidence Supplied. Identifier
     *  The identifier of the referenced evidence.
     *  1
     *  Evidence Supplied
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
     *  Evidence Supplied. Identifier
     *  The identifier of the referenced evidence.
     *  1
     *  Evidence Supplied
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
     *  Evidence Supplied. Identifier
     *  The identifier of the referenced evidence.
     *  1
     *  Evidence Supplied
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

