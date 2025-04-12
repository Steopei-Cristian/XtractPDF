<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing BranchType
 *
 * ABIE
 *  Branch. Details
 *  A class to describe a branch or a division of an organization.
 *  Branch
 * XSD Type: BranchType
 */
class BranchType
{
    /**
     * BBIE
     *  Branch. Identifier
     *  An identifier for this branch or division of an organization.
     *  0..1
     *  Branch
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Branch. Name
     *  The name of this branch or division of an organization.
     *  0..1
     *  Branch
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \UBL\Common\CBC\Name $name
     */
    private $name = null;

    /**
     * ASBIE
     *  Branch. Financial Institution
     *  The financial institution that this branch belongs to (if applicable).
     *  0..1
     *  Branch
     *  Financial Institution
     *  Financial Institution
     *  Financial Institution
     *
     * @var \UBL\Common\CAC\FinancialInstitution $financialInstitution
     */
    private $financialInstitution = null;

    /**
     * ASBIE
     *  Branch. Address
     *  The address of this branch or division.
     *  0..1
     *  Branch
     *  Address
     *  Address
     *  Address
     *
     * @var \UBL\Common\CAC\Address $address
     */
    private $address = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Branch. Identifier
     *  An identifier for this branch or division of an organization.
     *  0..1
     *  Branch
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
     *  Branch. Identifier
     *  An identifier for this branch or division of an organization.
     *  0..1
     *  Branch
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\ID $iD
     * @return self
     */
    public function setID(?\UBL\Common\CBC\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Branch. Name
     *  The name of this branch or division of an organization.
     *  0..1
     *  Branch
     *  Name
     *  Name
     *  Name. Type
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
     *  Branch. Name
     *  The name of this branch or division of an organization.
     *  0..1
     *  Branch
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \UBL\Common\CBC\Name $name
     * @return self
     */
    public function setName(?\UBL\Common\CBC\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as financialInstitution
     *
     * ASBIE
     *  Branch. Financial Institution
     *  The financial institution that this branch belongs to (if applicable).
     *  0..1
     *  Branch
     *  Financial Institution
     *  Financial Institution
     *  Financial Institution
     *
     * @return \UBL\Common\CAC\FinancialInstitution
     */
    public function getFinancialInstitution()
    {
        return $this->financialInstitution;
    }

    /**
     * Sets a new financialInstitution
     *
     * ASBIE
     *  Branch. Financial Institution
     *  The financial institution that this branch belongs to (if applicable).
     *  0..1
     *  Branch
     *  Financial Institution
     *  Financial Institution
     *  Financial Institution
     *
     * @param \UBL\Common\CAC\FinancialInstitution $financialInstitution
     * @return self
     */
    public function setFinancialInstitution(?\UBL\Common\CAC\FinancialInstitution $financialInstitution = null)
    {
        $this->financialInstitution = $financialInstitution;
        return $this;
    }

    /**
     * Gets as address
     *
     * ASBIE
     *  Branch. Address
     *  The address of this branch or division.
     *  0..1
     *  Branch
     *  Address
     *  Address
     *  Address
     *
     * @return \UBL\Common\CAC\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * ASBIE
     *  Branch. Address
     *  The address of this branch or division.
     *  0..1
     *  Branch
     *  Address
     *  Address
     *  Address
     *
     * @param \UBL\Common\CAC\Address $address
     * @return self
     */
    public function setAddress(?\UBL\Common\CAC\Address $address = null)
    {
        $this->address = $address;
        return $this;
    }
}


