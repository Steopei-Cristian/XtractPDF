<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing DocumentDistributionType
 *
 * ABIE
 *  Document Distribution. Details
 *  A class to describe the distribution of a document to an interested party.
 *  Document Distribution
 * XSD Type: DocumentDistributionType
 */
class DocumentDistributionType
{
    /**
     * BBIE
     *  Document Distribution. Print_ Qualifier. Text
     *  Text describing the interested party's distribution rights.
     *  1
     *  Document Distribution
     *  Print
     *  Qualifier
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\PrintQualifier $printQualifier
     */
    private $printQualifier = null;

    /**
     * BBIE
     *  Document Distribution. Maximum_ Copies. Numeric
     *  The maximum number of printed copies of the document that the interested party is allowed to make.
     *  1
     *  Document Distribution
     *  Maximum
     *  Copies
     *  Numeric
     *  Numeric. Type
     *
     * @var \UBL\Common\CBC\MaximumCopiesNumeric $maximumCopiesNumeric
     */
    private $maximumCopiesNumeric = null;

    /**
     * ASBIE
     *  Document Distribution. Party
     *  The interested party to which the document should be distributed.
     *  1
     *  Document Distribution
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL\Common\CAC\Party $party
     */
    private $party = null;

    /**
     * Gets as printQualifier
     *
     * BBIE
     *  Document Distribution. Print_ Qualifier. Text
     *  Text describing the interested party's distribution rights.
     *  1
     *  Document Distribution
     *  Print
     *  Qualifier
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\PrintQualifier
     */
    public function getPrintQualifier()
    {
        return $this->printQualifier;
    }

    /**
     * Sets a new printQualifier
     *
     * BBIE
     *  Document Distribution. Print_ Qualifier. Text
     *  Text describing the interested party's distribution rights.
     *  1
     *  Document Distribution
     *  Print
     *  Qualifier
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\PrintQualifier $printQualifier
     * @return self
     */
    public function setPrintQualifier(\UBL\Common\CBC\PrintQualifier $printQualifier)
    {
        $this->printQualifier = $printQualifier;
        return $this;
    }

    /**
     * Gets as maximumCopiesNumeric
     *
     * BBIE
     *  Document Distribution. Maximum_ Copies. Numeric
     *  The maximum number of printed copies of the document that the interested party is allowed to make.
     *  1
     *  Document Distribution
     *  Maximum
     *  Copies
     *  Numeric
     *  Numeric. Type
     *
     * @return \UBL\Common\CBC\MaximumCopiesNumeric
     */
    public function getMaximumCopiesNumeric()
    {
        return $this->maximumCopiesNumeric;
    }

    /**
     * Sets a new maximumCopiesNumeric
     *
     * BBIE
     *  Document Distribution. Maximum_ Copies. Numeric
     *  The maximum number of printed copies of the document that the interested party is allowed to make.
     *  1
     *  Document Distribution
     *  Maximum
     *  Copies
     *  Numeric
     *  Numeric. Type
     *
     * @param \UBL\Common\CBC\MaximumCopiesNumeric $maximumCopiesNumeric
     * @return self
     */
    public function setMaximumCopiesNumeric(\UBL\Common\CBC\MaximumCopiesNumeric $maximumCopiesNumeric)
    {
        $this->maximumCopiesNumeric = $maximumCopiesNumeric;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Document Distribution. Party
     *  The interested party to which the document should be distributed.
     *  1
     *  Document Distribution
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL\Common\CAC\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Document Distribution. Party
     *  The interested party to which the document should be distributed.
     *  1
     *  Document Distribution
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL\Common\CAC\Party $party
     * @return self
     */
    public function setParty(\UBL\Common\CAC\Party $party)
    {
        $this->party = $party;
        return $this;
    }
}


