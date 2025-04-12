<?php

namespace UBL\Common\CAC;

/**
 * Class representing TradingTermsType
 *
 * ABIE
 *  Trading Terms. Details
 *  A class for describing the terms of a trade agreement.
 *  Trading Terms
 * XSD Type: TradingTermsType
 */
class TradingTermsType
{
    /**
     * BBIE
     *  Trading Terms. Information. Text
     *  Text describing the terms of a trade agreement.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges.
     *
     * @var \UBL\Common\CBC\Information[] $information
     */
    private $information = [
        
    ];

    /**
     * BBIE
     *  Trading Terms. Reference. Text
     *  A reference quoting the basis of the terms
     *  0..1
     *  Trading Terms
     *  Reference
     *  Text
     *  Text. Type
     *  http://www1.ap.dell.com/content/topics/topic.aspx/ap/policy/en/au/sales_terms_au?c=au&l=en&s=gen
     *
     * @var \UBL\Common\CBC\Reference $reference
     */
    private $reference = null;

    /**
     * ASBIE
     *  Trading Terms. Applicable_ Address. Address
     *  The address at which these trading terms apply.
     *  0..1
     *  Trading Terms
     *  Applicable
     *  Address
     *  Address
     *  Address
     *
     * @var \UBL\Common\CAC\ApplicableAddress $applicableAddress
     */
    private $applicableAddress = null;

    /**
     * Adds as information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  Text describing the terms of a trade agreement.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges.
     *
     * @return self
     * @param \UBL\Common\CBC\Information $information
     */
    public function addToInformation(\UBL\Common\CBC\Information $information)
    {
        $this->information[] = $information;
        return $this;
    }

    /**
     * isset information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  Text describing the terms of a trade agreement.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformation($index)
    {
        return isset($this->information[$index]);
    }

    /**
     * unset information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  Text describing the terms of a trade agreement.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformation($index)
    {
        unset($this->information[$index]);
    }

    /**
     * Gets as information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  Text describing the terms of a trade agreement.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges.
     *
     * @return \UBL\Common\CBC\Information[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  Text describing the terms of a trade agreement.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges.
     *
     * @param \UBL\Common\CBC\Information[] $information
     * @return self
     */
    public function setInformation(?array $information = null)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Gets as reference
     *
     * BBIE
     *  Trading Terms. Reference. Text
     *  A reference quoting the basis of the terms
     *  0..1
     *  Trading Terms
     *  Reference
     *  Text
     *  Text. Type
     *  http://www1.ap.dell.com/content/topics/topic.aspx/ap/policy/en/au/sales_terms_au?c=au&l=en&s=gen
     *
     * @return \UBL\Common\CBC\Reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * BBIE
     *  Trading Terms. Reference. Text
     *  A reference quoting the basis of the terms
     *  0..1
     *  Trading Terms
     *  Reference
     *  Text
     *  Text. Type
     *  http://www1.ap.dell.com/content/topics/topic.aspx/ap/policy/en/au/sales_terms_au?c=au&l=en&s=gen
     *
     * @param \UBL\Common\CBC\Reference $reference
     * @return self
     */
    public function setReference(?\UBL\Common\CBC\Reference $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as applicableAddress
     *
     * ASBIE
     *  Trading Terms. Applicable_ Address. Address
     *  The address at which these trading terms apply.
     *  0..1
     *  Trading Terms
     *  Applicable
     *  Address
     *  Address
     *  Address
     *
     * @return \UBL\Common\CAC\ApplicableAddress
     */
    public function getApplicableAddress()
    {
        return $this->applicableAddress;
    }

    /**
     * Sets a new applicableAddress
     *
     * ASBIE
     *  Trading Terms. Applicable_ Address. Address
     *  The address at which these trading terms apply.
     *  0..1
     *  Trading Terms
     *  Applicable
     *  Address
     *  Address
     *  Address
     *
     * @param \UBL\Common\CAC\ApplicableAddress $applicableAddress
     * @return self
     */
    public function setApplicableAddress(?\UBL\Common\CAC\ApplicableAddress $applicableAddress = null)
    {
        $this->applicableAddress = $applicableAddress;
        return $this;
    }
}

