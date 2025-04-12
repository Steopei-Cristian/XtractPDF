<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing PartyLegalEntityType
 *
 * ABIE
 *  Party Legal Entity. Details
 *  A class to describe a party as a legal entity.
 *  Party Legal Entity
 * XSD Type: PartyLegalEntityType
 */
class PartyLegalEntityType
{
    /**
     * BBIE
     *  Party Legal Entity. Registration_ Name. Name
     *  The name of the party as registered with the relevant legal authority.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Company Identifier. Identifier
     *  An identifier for the party as registered within a company registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  Business Registration Number, Company Number
     *  3556625
     *
     * @var \UBL\Common\CBC\CompanyID $companyID
     */
    private $companyID = null;

    /**
     * BBIE
     *  Party Legal Entity. Registration_ Date. Date
     *  The registration date of the CompanyID.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $registrationDate
     */
    private $registrationDate = null;

    /**
     * BBIE
     *  Party Legal Entity. Registration Expiration_ Date. Date
     *  The date upon which a registration expires (e.g., registration for an import/export license).
     *  0..1
     *  Party Legal Entity
     *  Registration Expiration
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $registrationExpirationDate
     */
    private $registrationExpirationDate = null;

    /**
     * BBIE
     *  Party Legal Entity. Company Legal Form Code. Code
     *  A code signifying the party's legal status.
     *  0..1
     *  Party Legal Entity
     *  Company Legal Form Code
     *  Code
     *  Code. Type
     *  Legal Status
     *
     * @var \UBL\Common\CBC\CompanyLegalFormCode $companyLegalFormCode
     */
    private $companyLegalFormCode = null;

    /**
     * BBIE
     *  Party Legal Entity. Company Legal Form. Text
     *  The company legal status, expressed as a text.
     *  0..1
     *  Party Legal Entity
     *  Company Legal Form
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\CompanyLegalForm $companyLegalForm
     */
    private $companyLegalForm = null;

    /**
     * BBIE
     *  Party Legal Entity. Sole Proprietorship Indicator. Indicator
     *  An indicator that the company is owned and controlled by one person (true) or not (false).
     *  0..1
     *  Party Legal Entity
     *  Sole Proprietorship Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $soleProprietorshipIndicator
     */
    private $soleProprietorshipIndicator = null;

    /**
     * BBIE
     *  Party Legal Entity. Company Liquidation Status Code. Code
     *  A code signifying the party's liquidation status.
     *  0..1
     *  Party Legal Entity
     *  Company Liquidation Status Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\CompanyLiquidationStatusCode $companyLiquidationStatusCode
     */
    private $companyLiquidationStatusCode = null;

    /**
     * BBIE
     *  Party Legal Entity. Corporate Stock_ Amount. Amount
     *  The number of shares in the capital stock of a corporation.
     *  0..1
     *  Party Legal Entity
     *  Corporate Stock
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL\Common\CBC\CorporateStockAmount $corporateStockAmount
     */
    private $corporateStockAmount = null;

    /**
     * BBIE
     *  Party Legal Entity. Fully Paid Shares Indicator. Indicator
     *  An indicator that all shares of corporate stock have been paid by shareholders (true) or not (false).
     *  0..1
     *  Party Legal Entity
     *  Fully Paid Shares Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $fullyPaidSharesIndicator
     */
    private $fullyPaidSharesIndicator = null;

    /**
     * ASBIE
     *  Party Legal Entity. Registration_ Address. Address
     *  The registered address of the party within a corporate registration scheme.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Corporate Registration Scheme
     *  The corporate registration scheme used to register the party.
     *  0..1
     *  Party Legal Entity
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *
     * @var \UBL\Common\CAC\CorporateRegistrationScheme $corporateRegistrationScheme
     */
    private $corporateRegistrationScheme = null;

    /**
     * ASBIE
     *  Party Legal Entity. Head Office_ Party. Party
     *  The head office of the legal entity
     *  0..1
     *  Party Legal Entity
     *  Head Office
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL\Common\CAC\HeadOfficeParty $headOfficeParty
     */
    private $headOfficeParty = null;

    /**
     * ASBIE
     *  Party Legal Entity. Shareholder Party
     *  A party owning shares in this legal entity.
     *  0..n
     *  Party Legal Entity
     *  Shareholder Party
     *  Shareholder Party
     *  Shareholder Party
     *
     * @var \UBL\Common\CAC\ShareholderParty[] $shareholderParty
     */
    private $shareholderParty = [
        
    ];

    /**
     * Gets as registrationName
     *
     * BBIE
     *  Party Legal Entity. Registration_ Name. Name
     *  The name of the party as registered with the relevant legal authority.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Registration_ Name. Name
     *  The name of the party as registered with the relevant legal authority.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Company Identifier. Identifier
     *  An identifier for the party as registered within a company registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  Business Registration Number, Company Number
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
     *  Party Legal Entity. Company Identifier. Identifier
     *  An identifier for the party as registered within a company registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  Business Registration Number, Company Number
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
     * Gets as registrationDate
     *
     * BBIE
     *  Party Legal Entity. Registration_ Date. Date
     *  The registration date of the CompanyID.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Sets a new registrationDate
     *
     * BBIE
     *  Party Legal Entity. Registration_ Date. Date
     *  The registration date of the CompanyID.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $registrationDate
     * @return self
     */
    public function setRegistrationDate(?\DateTime $registrationDate = null)
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    /**
     * Gets as registrationExpirationDate
     *
     * BBIE
     *  Party Legal Entity. Registration Expiration_ Date. Date
     *  The date upon which a registration expires (e.g., registration for an import/export license).
     *  0..1
     *  Party Legal Entity
     *  Registration Expiration
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRegistrationExpirationDate()
    {
        return $this->registrationExpirationDate;
    }

    /**
     * Sets a new registrationExpirationDate
     *
     * BBIE
     *  Party Legal Entity. Registration Expiration_ Date. Date
     *  The date upon which a registration expires (e.g., registration for an import/export license).
     *  0..1
     *  Party Legal Entity
     *  Registration Expiration
     *  Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $registrationExpirationDate
     * @return self
     */
    public function setRegistrationExpirationDate(?\DateTime $registrationExpirationDate = null)
    {
        $this->registrationExpirationDate = $registrationExpirationDate;
        return $this;
    }

    /**
     * Gets as companyLegalFormCode
     *
     * BBIE
     *  Party Legal Entity. Company Legal Form Code. Code
     *  A code signifying the party's legal status.
     *  0..1
     *  Party Legal Entity
     *  Company Legal Form Code
     *  Code
     *  Code. Type
     *  Legal Status
     *
     * @return \UBL\Common\CBC\CompanyLegalFormCode
     */
    public function getCompanyLegalFormCode()
    {
        return $this->companyLegalFormCode;
    }

    /**
     * Sets a new companyLegalFormCode
     *
     * BBIE
     *  Party Legal Entity. Company Legal Form Code. Code
     *  A code signifying the party's legal status.
     *  0..1
     *  Party Legal Entity
     *  Company Legal Form Code
     *  Code
     *  Code. Type
     *  Legal Status
     *
     * @param \UBL\Common\CBC\CompanyLegalFormCode $companyLegalFormCode
     * @return self
     */
    public function setCompanyLegalFormCode(?\UBL\Common\CBC\CompanyLegalFormCode $companyLegalFormCode = null)
    {
        $this->companyLegalFormCode = $companyLegalFormCode;
        return $this;
    }

    /**
     * Gets as companyLegalForm
     *
     * BBIE
     *  Party Legal Entity. Company Legal Form. Text
     *  The company legal status, expressed as a text.
     *  0..1
     *  Party Legal Entity
     *  Company Legal Form
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\CompanyLegalForm
     */
    public function getCompanyLegalForm()
    {
        return $this->companyLegalForm;
    }

    /**
     * Sets a new companyLegalForm
     *
     * BBIE
     *  Party Legal Entity. Company Legal Form. Text
     *  The company legal status, expressed as a text.
     *  0..1
     *  Party Legal Entity
     *  Company Legal Form
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\CompanyLegalForm $companyLegalForm
     * @return self
     */
    public function setCompanyLegalForm(?\UBL\Common\CBC\CompanyLegalForm $companyLegalForm = null)
    {
        $this->companyLegalForm = $companyLegalForm;
        return $this;
    }

    /**
     * Gets as soleProprietorshipIndicator
     *
     * BBIE
     *  Party Legal Entity. Sole Proprietorship Indicator. Indicator
     *  An indicator that the company is owned and controlled by one person (true) or not (false).
     *  0..1
     *  Party Legal Entity
     *  Sole Proprietorship Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getSoleProprietorshipIndicator()
    {
        return $this->soleProprietorshipIndicator;
    }

    /**
     * Sets a new soleProprietorshipIndicator
     *
     * BBIE
     *  Party Legal Entity. Sole Proprietorship Indicator. Indicator
     *  An indicator that the company is owned and controlled by one person (true) or not (false).
     *  0..1
     *  Party Legal Entity
     *  Sole Proprietorship Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $soleProprietorshipIndicator
     * @return self
     */
    public function setSoleProprietorshipIndicator($soleProprietorshipIndicator)
    {
        $this->soleProprietorshipIndicator = $soleProprietorshipIndicator;
        return $this;
    }

    /**
     * Gets as companyLiquidationStatusCode
     *
     * BBIE
     *  Party Legal Entity. Company Liquidation Status Code. Code
     *  A code signifying the party's liquidation status.
     *  0..1
     *  Party Legal Entity
     *  Company Liquidation Status Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\CompanyLiquidationStatusCode
     */
    public function getCompanyLiquidationStatusCode()
    {
        return $this->companyLiquidationStatusCode;
    }

    /**
     * Sets a new companyLiquidationStatusCode
     *
     * BBIE
     *  Party Legal Entity. Company Liquidation Status Code. Code
     *  A code signifying the party's liquidation status.
     *  0..1
     *  Party Legal Entity
     *  Company Liquidation Status Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\CompanyLiquidationStatusCode $companyLiquidationStatusCode
     * @return self
     */
    public function setCompanyLiquidationStatusCode(?\UBL\Common\CBC\CompanyLiquidationStatusCode $companyLiquidationStatusCode = null)
    {
        $this->companyLiquidationStatusCode = $companyLiquidationStatusCode;
        return $this;
    }

    /**
     * Gets as corporateStockAmount
     *
     * BBIE
     *  Party Legal Entity. Corporate Stock_ Amount. Amount
     *  The number of shares in the capital stock of a corporation.
     *  0..1
     *  Party Legal Entity
     *  Corporate Stock
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL\Common\CBC\CorporateStockAmount
     */
    public function getCorporateStockAmount()
    {
        return $this->corporateStockAmount;
    }

    /**
     * Sets a new corporateStockAmount
     *
     * BBIE
     *  Party Legal Entity. Corporate Stock_ Amount. Amount
     *  The number of shares in the capital stock of a corporation.
     *  0..1
     *  Party Legal Entity
     *  Corporate Stock
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL\Common\CBC\CorporateStockAmount $corporateStockAmount
     * @return self
     */
    public function setCorporateStockAmount(?\UBL\Common\CBC\CorporateStockAmount $corporateStockAmount = null)
    {
        $this->corporateStockAmount = $corporateStockAmount;
        return $this;
    }

    /**
     * Gets as fullyPaidSharesIndicator
     *
     * BBIE
     *  Party Legal Entity. Fully Paid Shares Indicator. Indicator
     *  An indicator that all shares of corporate stock have been paid by shareholders (true) or not (false).
     *  0..1
     *  Party Legal Entity
     *  Fully Paid Shares Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getFullyPaidSharesIndicator()
    {
        return $this->fullyPaidSharesIndicator;
    }

    /**
     * Sets a new fullyPaidSharesIndicator
     *
     * BBIE
     *  Party Legal Entity. Fully Paid Shares Indicator. Indicator
     *  An indicator that all shares of corporate stock have been paid by shareholders (true) or not (false).
     *  0..1
     *  Party Legal Entity
     *  Fully Paid Shares Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $fullyPaidSharesIndicator
     * @return self
     */
    public function setFullyPaidSharesIndicator($fullyPaidSharesIndicator)
    {
        $this->fullyPaidSharesIndicator = $fullyPaidSharesIndicator;
        return $this;
    }

    /**
     * Gets as registrationAddress
     *
     * ASBIE
     *  Party Legal Entity. Registration_ Address. Address
     *  The registered address of the party within a corporate registration scheme.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Registration_ Address. Address
     *  The registered address of the party within a corporate registration scheme.
     *  0..1
     *  Party Legal Entity
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
     * Gets as corporateRegistrationScheme
     *
     * ASBIE
     *  Party Legal Entity. Corporate Registration Scheme
     *  The corporate registration scheme used to register the party.
     *  0..1
     *  Party Legal Entity
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *
     * @return \UBL\Common\CAC\CorporateRegistrationScheme
     */
    public function getCorporateRegistrationScheme()
    {
        return $this->corporateRegistrationScheme;
    }

    /**
     * Sets a new corporateRegistrationScheme
     *
     * ASBIE
     *  Party Legal Entity. Corporate Registration Scheme
     *  The corporate registration scheme used to register the party.
     *  0..1
     *  Party Legal Entity
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *
     * @param \UBL\Common\CAC\CorporateRegistrationScheme $corporateRegistrationScheme
     * @return self
     */
    public function setCorporateRegistrationScheme(?\UBL\Common\CAC\CorporateRegistrationScheme $corporateRegistrationScheme = null)
    {
        $this->corporateRegistrationScheme = $corporateRegistrationScheme;
        return $this;
    }

    /**
     * Gets as headOfficeParty
     *
     * ASBIE
     *  Party Legal Entity. Head Office_ Party. Party
     *  The head office of the legal entity
     *  0..1
     *  Party Legal Entity
     *  Head Office
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL\Common\CAC\HeadOfficeParty
     */
    public function getHeadOfficeParty()
    {
        return $this->headOfficeParty;
    }

    /**
     * Sets a new headOfficeParty
     *
     * ASBIE
     *  Party Legal Entity. Head Office_ Party. Party
     *  The head office of the legal entity
     *  0..1
     *  Party Legal Entity
     *  Head Office
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL\Common\CAC\HeadOfficeParty $headOfficeParty
     * @return self
     */
    public function setHeadOfficeParty(?\UBL\Common\CAC\HeadOfficeParty $headOfficeParty = null)
    {
        $this->headOfficeParty = $headOfficeParty;
        return $this;
    }

    /**
     * Adds as shareholderParty
     *
     * ASBIE
     *  Party Legal Entity. Shareholder Party
     *  A party owning shares in this legal entity.
     *  0..n
     *  Party Legal Entity
     *  Shareholder Party
     *  Shareholder Party
     *  Shareholder Party
     *
     * @return self
     * @param \UBL\Common\CAC\ShareholderParty $shareholderParty
     */
    public function addToShareholderParty(\UBL\Common\CAC\ShareholderParty $shareholderParty)
    {
        $this->shareholderParty[] = $shareholderParty;
        return $this;
    }

    /**
     * isset shareholderParty
     *
     * ASBIE
     *  Party Legal Entity. Shareholder Party
     *  A party owning shares in this legal entity.
     *  0..n
     *  Party Legal Entity
     *  Shareholder Party
     *  Shareholder Party
     *  Shareholder Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShareholderParty($index)
    {
        return isset($this->shareholderParty[$index]);
    }

    /**
     * unset shareholderParty
     *
     * ASBIE
     *  Party Legal Entity. Shareholder Party
     *  A party owning shares in this legal entity.
     *  0..n
     *  Party Legal Entity
     *  Shareholder Party
     *  Shareholder Party
     *  Shareholder Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShareholderParty($index)
    {
        unset($this->shareholderParty[$index]);
    }

    /**
     * Gets as shareholderParty
     *
     * ASBIE
     *  Party Legal Entity. Shareholder Party
     *  A party owning shares in this legal entity.
     *  0..n
     *  Party Legal Entity
     *  Shareholder Party
     *  Shareholder Party
     *  Shareholder Party
     *
     * @return \UBL\Common\CAC\ShareholderParty[]
     */
    public function getShareholderParty()
    {
        return $this->shareholderParty;
    }

    /**
     * Sets a new shareholderParty
     *
     * ASBIE
     *  Party Legal Entity. Shareholder Party
     *  A party owning shares in this legal entity.
     *  0..n
     *  Party Legal Entity
     *  Shareholder Party
     *  Shareholder Party
     *  Shareholder Party
     *
     * @param \UBL\Common\CAC\ShareholderParty[] $shareholderParty
     * @return self
     */
    public function setShareholderParty(?array $shareholderParty = null)
    {
        $this->shareholderParty = $shareholderParty;
        return $this;
    }
}


