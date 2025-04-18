<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing FinancialAccountType
 *
 * ABIE
 *  Financial Account. Details
 *  A class to describe a financial account.
 *  Financial Account
 * XSD Type: FinancialAccountType
 */
class FinancialAccountType
{
    /**
     * BBIE
     *  Financial Account. Identifier
     *  The identifier for this financial account; the bank account number.
     *  0..1
     *  Financial Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  SWIFT(BIC) and IBAN are defined in ISO 9362 and ISO 13616.
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Financial Account. Name
     *  The name of this financial account.
     *  0..1
     *  Financial Account
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \App\UBL\Common\CBC\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Financial Account. Alias_ Name. Name
     *  An alias for the name of this financial account, to be used in place of the actual account name for security reasons.
     *  0..1
     *  Financial Account
     *  Alias
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \App\UBL\Common\CBC\AliasName $aliasName
     */
    private $aliasName = null;

    /**
     * BBIE
     *  Financial Account. Account Type Code. Code
     *  A code signifying the type of this financial account.
     *  0..1
     *  Financial Account
     *  Account Type Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\AccountTypeCode $accountTypeCode
     */
    private $accountTypeCode = null;

    /**
     * BBIE
     *  Financial Account. Account Format Code. Code
     *  A code signifying the format of this financial account.
     *  0..1
     *  Financial Account
     *  Account Format Code
     *  Code
     *  Code. Type
     *  ISO20022 Clearing System Identification Code
     *
     * @var \App\UBL\Common\CBC\AccountFormatCode $accountFormatCode
     */
    private $accountFormatCode = null;

    /**
     * BBIE
     *  Financial Account. Currency Code. Code
     *  A code signifying the currency in which this financial account is held.
     *  0..1
     *  Financial Account
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \App\UBL\Common\CBC\CurrencyCode $currencyCode
     */
    private $currencyCode = null;

    /**
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment for the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\PaymentNote[] $paymentNote
     */
    private $paymentNote = [
        
    ];

    /**
     * ASBIE
     *  Financial Account. Financial Institution_ Branch. Branch
     *  The branch of the financial institution associated with this financial account.
     *  0..1
     *  Financial Account
     *  Financial Institution
     *  Branch
     *  Branch
     *  Branch
     *
     * @var \App\UBL\Common\CAC\FinancialInstitutionBranch $financialInstitutionBranch
     */
    private $financialInstitutionBranch = null;

    /**
     * ASBIE
     *  Financial Account. Country
     *  The country in which the holder of the financial account is domiciled.
     *  0..1
     *  Financial Account
     *  Country
     *  Country
     *  Country
     *
     * @var \App\UBL\Common\CAC\Country $country
     */
    private $country = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Financial Account. Identifier
     *  The identifier for this financial account; the bank account number.
     *  0..1
     *  Financial Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  SWIFT(BIC) and IBAN are defined in ISO 9362 and ISO 13616.
     *
     * @return \App\UBL\Common\CBC\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Financial Account. Identifier
     *  The identifier for this financial account; the bank account number.
     *  0..1
     *  Financial Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  SWIFT(BIC) and IBAN are defined in ISO 9362 and ISO 13616.
     *
     * @param \App\UBL\Common\CBC\ID $iD
     * @return self
     */
    public function setID(?\App\UBL\Common\CBC\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Financial Account. Name
     *  The name of this financial account.
     *  0..1
     *  Financial Account
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \App\UBL\Common\CBC\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Financial Account. Name
     *  The name of this financial account.
     *  0..1
     *  Financial Account
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \App\UBL\Common\CBC\Name $name
     * @return self
     */
    public function setName(?\App\UBL\Common\CBC\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as aliasName
     *
     * BBIE
     *  Financial Account. Alias_ Name. Name
     *  An alias for the name of this financial account, to be used in place of the actual account name for security reasons.
     *  0..1
     *  Financial Account
     *  Alias
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \App\UBL\Common\CBC\AliasName
     */
    public function getAliasName()
    {
        return $this->aliasName;
    }

    /**
     * Sets a new aliasName
     *
     * BBIE
     *  Financial Account. Alias_ Name. Name
     *  An alias for the name of this financial account, to be used in place of the actual account name for security reasons.
     *  0..1
     *  Financial Account
     *  Alias
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \App\UBL\Common\CBC\AliasName $aliasName
     * @return self
     */
    public function setAliasName(?\App\UBL\Common\CBC\AliasName $aliasName = null)
    {
        $this->aliasName = $aliasName;
        return $this;
    }

    /**
     * Gets as accountTypeCode
     *
     * BBIE
     *  Financial Account. Account Type Code. Code
     *  A code signifying the type of this financial account.
     *  0..1
     *  Financial Account
     *  Account Type Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\AccountTypeCode
     */
    public function getAccountTypeCode()
    {
        return $this->accountTypeCode;
    }

    /**
     * Sets a new accountTypeCode
     *
     * BBIE
     *  Financial Account. Account Type Code. Code
     *  A code signifying the type of this financial account.
     *  0..1
     *  Financial Account
     *  Account Type Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\AccountTypeCode $accountTypeCode
     * @return self
     */
    public function setAccountTypeCode(?\App\UBL\Common\CBC\AccountTypeCode $accountTypeCode = null)
    {
        $this->accountTypeCode = $accountTypeCode;
        return $this;
    }

    /**
     * Gets as accountFormatCode
     *
     * BBIE
     *  Financial Account. Account Format Code. Code
     *  A code signifying the format of this financial account.
     *  0..1
     *  Financial Account
     *  Account Format Code
     *  Code
     *  Code. Type
     *  ISO20022 Clearing System Identification Code
     *
     * @return \App\UBL\Common\CBC\AccountFormatCode
     */
    public function getAccountFormatCode()
    {
        return $this->accountFormatCode;
    }

    /**
     * Sets a new accountFormatCode
     *
     * BBIE
     *  Financial Account. Account Format Code. Code
     *  A code signifying the format of this financial account.
     *  0..1
     *  Financial Account
     *  Account Format Code
     *  Code
     *  Code. Type
     *  ISO20022 Clearing System Identification Code
     *
     * @param \App\UBL\Common\CBC\AccountFormatCode $accountFormatCode
     * @return self
     */
    public function setAccountFormatCode(?\App\UBL\Common\CBC\AccountFormatCode $accountFormatCode = null)
    {
        $this->accountFormatCode = $accountFormatCode;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * BBIE
     *  Financial Account. Currency Code. Code
     *  A code signifying the currency in which this financial account is held.
     *  0..1
     *  Financial Account
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \App\UBL\Common\CBC\CurrencyCode
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * BBIE
     *  Financial Account. Currency Code. Code
     *  A code signifying the currency in which this financial account is held.
     *  0..1
     *  Financial Account
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \App\UBL\Common\CBC\CurrencyCode $currencyCode
     * @return self
     */
    public function setCurrencyCode(?\App\UBL\Common\CBC\CurrencyCode $currencyCode = null)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Adds as paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment for the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\PaymentNote $paymentNote
     */
    public function addToPaymentNote(\App\UBL\Common\CBC\PaymentNote $paymentNote)
    {
        $this->paymentNote[] = $paymentNote;
        return $this;
    }

    /**
     * isset paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment for the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentNote($index)
    {
        return isset($this->paymentNote[$index]);
    }

    /**
     * unset paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment for the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentNote($index)
    {
        unset($this->paymentNote[$index]);
    }

    /**
     * Gets as paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment for the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\PaymentNote[]
     */
    public function getPaymentNote()
    {
        return $this->paymentNote;
    }

    /**
     * Sets a new paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment for the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\PaymentNote[] $paymentNote
     * @return self
     */
    public function setPaymentNote(?array $paymentNote = null)
    {
        $this->paymentNote = $paymentNote;
        return $this;
    }

    /**
     * Gets as financialInstitutionBranch
     *
     * ASBIE
     *  Financial Account. Financial Institution_ Branch. Branch
     *  The branch of the financial institution associated with this financial account.
     *  0..1
     *  Financial Account
     *  Financial Institution
     *  Branch
     *  Branch
     *  Branch
     *
     * @return \App\UBL\Common\CAC\FinancialInstitutionBranch
     */
    public function getFinancialInstitutionBranch()
    {
        return $this->financialInstitutionBranch;
    }

    /**
     * Sets a new financialInstitutionBranch
     *
     * ASBIE
     *  Financial Account. Financial Institution_ Branch. Branch
     *  The branch of the financial institution associated with this financial account.
     *  0..1
     *  Financial Account
     *  Financial Institution
     *  Branch
     *  Branch
     *  Branch
     *
     * @param \App\UBL\Common\CAC\FinancialInstitutionBranch $financialInstitutionBranch
     * @return self
     */
    public function setFinancialInstitutionBranch(?\App\UBL\Common\CAC\FinancialInstitutionBranch $financialInstitutionBranch = null)
    {
        $this->financialInstitutionBranch = $financialInstitutionBranch;
        return $this;
    }

    /**
     * Gets as country
     *
     * ASBIE
     *  Financial Account. Country
     *  The country in which the holder of the financial account is domiciled.
     *  0..1
     *  Financial Account
     *  Country
     *  Country
     *  Country
     *
     * @return \App\UBL\Common\CAC\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * ASBIE
     *  Financial Account. Country
     *  The country in which the holder of the financial account is domiciled.
     *  0..1
     *  Financial Account
     *  Country
     *  Country
     *  Country
     *
     * @param \App\UBL\Common\CAC\Country $country
     * @return self
     */
    public function setCountry(?\App\UBL\Common\CAC\Country $country = null)
    {
        $this->country = $country;
        return $this;
    }
}

