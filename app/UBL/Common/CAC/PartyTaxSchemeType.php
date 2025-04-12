<?php

namespace UBL\Common\CAC;

/**
 * Class representing PartyTaxSchemeType
 *
 * ABIE
 *  Party Tax Scheme. Details
 *  A class to describe a taxation scheme applying to a party.
 *  Party Tax Scheme
 * XSD Type: PartyTaxSchemeType
 */
class PartyTaxSchemeType
{
    /**
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft Corporation
     *
     * @var \UBL\Common\CBC\RegistrationName $registrationName
     */
    private $registrationName = null;

    /**
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  An identifier for the party assigned for tax purposes by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  3556625
     *
     * @var \UBL\Common\CBC\CompanyID $companyID
     */
    private $companyID = null;

    /**
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  A code signifying the tax level applicable to the party within this taxation scheme.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\TaxLevelCode $taxLevelCode
     */
    private $taxLevelCode = null;

    /**
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for the party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\ExemptionReasonCode $exemptionReasonCode
     */
    private $exemptionReasonCode = null;

    /**
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\ExemptionReason[] $exemptionReason
     */
    private $exemptionReason = [
        
    ];

    /**
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  The address of the party as registered for tax purposes.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *  Address
     *
     * @var \UBL\Common\CAC\RegistrationAddress $registrationAddress
     */
    private $registrationAddress = null;

    /**
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  The taxation scheme applicable to the party.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \UBL\Common\CAC\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as registrationName
     *
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft Corporation
     *
     * @return \UBL\Common\CBC\RegistrationName
     */
    public function getRegistrationName()
    {
        return $this->registrationName;
    }

    /**
     * Sets a new registrationName
     *
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft Corporation
     *
     * @param \UBL\Common\CBC\RegistrationName $registrationName
     * @return self
     */
    public function setRegistrationName(?\UBL\Common\CBC\RegistrationName $registrationName = null)
    {
        $this->registrationName = $registrationName;
        return $this;
    }

    /**
     * Gets as companyID
     *
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  An identifier for the party assigned for tax purposes by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  3556625
     *
     * @return \UBL\Common\CBC\CompanyID
     */
    public function getCompanyID()
    {
        return $this->companyID;
    }

    /**
     * Sets a new companyID
     *
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  An identifier for the party assigned for tax purposes by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  3556625
     *
     * @param \UBL\Common\CBC\CompanyID $companyID
     * @return self
     */
    public function setCompanyID(?\UBL\Common\CBC\CompanyID $companyID = null)
    {
        $this->companyID = $companyID;
        return $this;
    }

    /**
     * Gets as taxLevelCode
     *
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  A code signifying the tax level applicable to the party within this taxation scheme.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\TaxLevelCode
     */
    public function getTaxLevelCode()
    {
        return $this->taxLevelCode;
    }

    /**
     * Sets a new taxLevelCode
     *
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  A code signifying the tax level applicable to the party within this taxation scheme.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\TaxLevelCode $taxLevelCode
     * @return self
     */
    public function setTaxLevelCode(?\UBL\Common\CBC\TaxLevelCode $taxLevelCode = null)
    {
        $this->taxLevelCode = $taxLevelCode;
        return $this;
    }

    /**
     * Gets as exemptionReasonCode
     *
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for the party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\ExemptionReasonCode
     */
    public function getExemptionReasonCode()
    {
        return $this->exemptionReasonCode;
    }

    /**
     * Sets a new exemptionReasonCode
     *
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for the party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\ExemptionReasonCode $exemptionReasonCode
     * @return self
     */
    public function setExemptionReasonCode(?\UBL\Common\CBC\ExemptionReasonCode $exemptionReasonCode = null)
    {
        $this->exemptionReasonCode = $exemptionReasonCode;
        return $this;
    }

    /**
     * Adds as exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\ExemptionReason $exemptionReason
     */
    public function addToExemptionReason(\UBL\Common\CBC\ExemptionReason $exemptionReason)
    {
        $this->exemptionReason[] = $exemptionReason;
        return $this;
    }

    /**
     * isset exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExemptionReason($index)
    {
        return isset($this->exemptionReason[$index]);
    }

    /**
     * unset exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExemptionReason($index)
    {
        unset($this->exemptionReason[$index]);
    }

    /**
     * Gets as exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\ExemptionReason[]
     */
    public function getExemptionReason()
    {
        return $this->exemptionReason;
    }

    /**
     * Sets a new exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\ExemptionReason[] $exemptionReason
     * @return self
     */
    public function setExemptionReason(?array $exemptionReason = null)
    {
        $this->exemptionReason = $exemptionReason;
        return $this;
    }

    /**
     * Gets as registrationAddress
     *
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  The address of the party as registered for tax purposes.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *  Address
     *
     * @return \UBL\Common\CAC\RegistrationAddress
     */
    public function getRegistrationAddress()
    {
        return $this->registrationAddress;
    }

    /**
     * Sets a new registrationAddress
     *
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  The address of the party as registered for tax purposes.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *  Address
     *
     * @param \UBL\Common\CAC\RegistrationAddress $registrationAddress
     * @return self
     */
    public function setRegistrationAddress(?\UBL\Common\CAC\RegistrationAddress $registrationAddress = null)
    {
        $this->registrationAddress = $registrationAddress;
        return $this;
    }

    /**
     * Gets as taxScheme
     *
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  The taxation scheme applicable to the party.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @return \UBL\Common\CAC\TaxScheme
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * Sets a new taxScheme
     *
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  The taxation scheme applicable to the party.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @param \UBL\Common\CAC\TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(\UBL\Common\CAC\TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }
}

