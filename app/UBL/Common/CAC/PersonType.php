<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing PersonType
 *
 * ABIE
 *  Person. Details
 *  A class to describe a person.
 *  Person
 * XSD Type: PersonType
 */
class PersonType
{
    /**
     * BBIE
     *  Person. Identifier
     *  An identifier for this person.
     *  0..1
     *  Person
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Person. First_ Name. Name
     *  This person's given name.
     *  0..1
     *  Person
     *  First
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \UBL\Common\CBC\FirstName $firstName
     */
    private $firstName = null;

    /**
     * BBIE
     *  Person. Family_ Name. Name
     *  This person's family name.
     *  0..1
     *  Person
     *  Family
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \UBL\Common\CBC\FamilyName $familyName
     */
    private $familyName = null;

    /**
     * BBIE
     *  Person. Title. Text
     *  This person's title of address (e.g., Mr, Ms, Dr, Sir).
     *  0..1
     *  Person
     *  Title
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Title $title
     */
    private $title = null;

    /**
     * BBIE
     *  Person. Middle_ Name. Name
     *  This person's middle name(s) or initials.
     *  0..1
     *  Person
     *  Middle
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \UBL\Common\CBC\MiddleName $middleName
     */
    private $middleName = null;

    /**
     * BBIE
     *  Person. Other_ Name. Name
     *  This person's second family name.
     *  0..1
     *  Person
     *  Other
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
     *
     * @var \UBL\Common\CBC\OtherName $otherName
     */
    private $otherName = null;

    /**
     * BBIE
     *  Person. Name Suffix. Text
     *  A suffix to this person's name (e.g., PhD, OBE, Jr).
     *  0..1
     *  Person
     *  Name Suffix
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\NameSuffix $nameSuffix
     */
    private $nameSuffix = null;

    /**
     * BBIE
     *  Person. Job Title. Text
     *  This person's job title (for a particular role) within an organization.
     *  0..1
     *  Person
     *  Job Title
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\JobTitle $jobTitle
     */
    private $jobTitle = null;

    /**
     * BBIE
     *  Person. Nationality. Identifier
     *  An identifier for this person's nationality.
     *  0..1
     *  Person
     *  Nationality
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\NationalityID $nationalityID
     */
    private $nationalityID = null;

    /**
     * BBIE
     *  Person. Gender Code. Code
     *  A code (e.g., ISO 5218) signifying the gender of this person.
     *  0..1
     *  Person
     *  Gender Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\GenderCode $genderCode
     */
    private $genderCode = null;

    /**
     * BBIE
     *  Person. Birth Date. Date
     *  This person's date of birth.
     *  0..1
     *  Person
     *  Birth Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * BBIE
     *  Person. Birthplace Name. Text
     *  The name of the place where this person was born, expressed as text.
     *  0..1
     *  Person
     *  Birthplace Name
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\BirthplaceName $birthplaceName
     */
    private $birthplaceName = null;

    /**
     * BBIE
     *  Person. Organization_ Department. Text
     *  The department or subdivision of an organization that this person belongs to (in a particular role).
     *  0..1
     *  Person
     *  Organization
     *  Department
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\OrganizationDepartment $organizationDepartment
     */
    private $organizationDepartment = null;

    /**
     * ASBIE
     *  Person. Contact
     *  Contact information for this person.
     *  0..1
     *  Person
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \UBL\Common\CAC\Contact $contact
     */
    private $contact = null;

    /**
     * ASBIE
     *  Person. Financial Account
     *  The financial account associated with this person.
     *  0..1
     *  Person
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @var \UBL\Common\CAC\FinancialAccount $financialAccount
     */
    private $financialAccount = null;

    /**
     * ASBIE
     *  Person. Identity_ Document Reference. Document Reference
     *  A reference to a document that can precisely identify this person (e.g., a driver's license).
     *  0..n
     *  Person
     *  Identity
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL\Common\CAC\IdentityDocumentReference[] $identityDocumentReference
     */
    private $identityDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Person. Residence_ Address. Address
     *  This person's address of residence.
     *  0..1
     *  Person
     *  Residence
     *  Address
     *  Address
     *  Address
     *
     * @var \UBL\Common\CAC\ResidenceAddress $residenceAddress
     */
    private $residenceAddress = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Person. Identifier
     *  An identifier for this person.
     *  0..1
     *  Person
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
     *  Person. Identifier
     *  An identifier for this person.
     *  0..1
     *  Person
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
     * Gets as firstName
     *
     * BBIE
     *  Person. First_ Name. Name
     *  This person's given name.
     *  0..1
     *  Person
     *  First
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \UBL\Common\CBC\FirstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * BBIE
     *  Person. First_ Name. Name
     *  This person's given name.
     *  0..1
     *  Person
     *  First
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \UBL\Common\CBC\FirstName $firstName
     * @return self
     */
    public function setFirstName(?\UBL\Common\CBC\FirstName $firstName = null)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as familyName
     *
     * BBIE
     *  Person. Family_ Name. Name
     *  This person's family name.
     *  0..1
     *  Person
     *  Family
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \UBL\Common\CBC\FamilyName
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Sets a new familyName
     *
     * BBIE
     *  Person. Family_ Name. Name
     *  This person's family name.
     *  0..1
     *  Person
     *  Family
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \UBL\Common\CBC\FamilyName $familyName
     * @return self
     */
    public function setFamilyName(?\UBL\Common\CBC\FamilyName $familyName = null)
    {
        $this->familyName = $familyName;
        return $this;
    }

    /**
     * Gets as title
     *
     * BBIE
     *  Person. Title. Text
     *  This person's title of address (e.g., Mr, Ms, Dr, Sir).
     *  0..1
     *  Person
     *  Title
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * BBIE
     *  Person. Title. Text
     *  This person's title of address (e.g., Mr, Ms, Dr, Sir).
     *  0..1
     *  Person
     *  Title
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\Title $title
     * @return self
     */
    public function setTitle(?\UBL\Common\CBC\Title $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as middleName
     *
     * BBIE
     *  Person. Middle_ Name. Name
     *  This person's middle name(s) or initials.
     *  0..1
     *  Person
     *  Middle
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \UBL\Common\CBC\MiddleName
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Sets a new middleName
     *
     * BBIE
     *  Person. Middle_ Name. Name
     *  This person's middle name(s) or initials.
     *  0..1
     *  Person
     *  Middle
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \UBL\Common\CBC\MiddleName $middleName
     * @return self
     */
    public function setMiddleName(?\UBL\Common\CBC\MiddleName $middleName = null)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Gets as otherName
     *
     * BBIE
     *  Person. Other_ Name. Name
     *  This person's second family name.
     *  0..1
     *  Person
     *  Other
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
     *
     * @return \UBL\Common\CBC\OtherName
     */
    public function getOtherName()
    {
        return $this->otherName;
    }

    /**
     * Sets a new otherName
     *
     * BBIE
     *  Person. Other_ Name. Name
     *  This person's second family name.
     *  0..1
     *  Person
     *  Other
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
     *
     * @param \UBL\Common\CBC\OtherName $otherName
     * @return self
     */
    public function setOtherName(?\UBL\Common\CBC\OtherName $otherName = null)
    {
        $this->otherName = $otherName;
        return $this;
    }

    /**
     * Gets as nameSuffix
     *
     * BBIE
     *  Person. Name Suffix. Text
     *  A suffix to this person's name (e.g., PhD, OBE, Jr).
     *  0..1
     *  Person
     *  Name Suffix
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\NameSuffix
     */
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Sets a new nameSuffix
     *
     * BBIE
     *  Person. Name Suffix. Text
     *  A suffix to this person's name (e.g., PhD, OBE, Jr).
     *  0..1
     *  Person
     *  Name Suffix
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\NameSuffix $nameSuffix
     * @return self
     */
    public function setNameSuffix(?\UBL\Common\CBC\NameSuffix $nameSuffix = null)
    {
        $this->nameSuffix = $nameSuffix;
        return $this;
    }

    /**
     * Gets as jobTitle
     *
     * BBIE
     *  Person. Job Title. Text
     *  This person's job title (for a particular role) within an organization.
     *  0..1
     *  Person
     *  Job Title
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\JobTitle
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Sets a new jobTitle
     *
     * BBIE
     *  Person. Job Title. Text
     *  This person's job title (for a particular role) within an organization.
     *  0..1
     *  Person
     *  Job Title
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\JobTitle $jobTitle
     * @return self
     */
    public function setJobTitle(?\UBL\Common\CBC\JobTitle $jobTitle = null)
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    /**
     * Gets as nationalityID
     *
     * BBIE
     *  Person. Nationality. Identifier
     *  An identifier for this person's nationality.
     *  0..1
     *  Person
     *  Nationality
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\NationalityID
     */
    public function getNationalityID()
    {
        return $this->nationalityID;
    }

    /**
     * Sets a new nationalityID
     *
     * BBIE
     *  Person. Nationality. Identifier
     *  An identifier for this person's nationality.
     *  0..1
     *  Person
     *  Nationality
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\NationalityID $nationalityID
     * @return self
     */
    public function setNationalityID(?\UBL\Common\CBC\NationalityID $nationalityID = null)
    {
        $this->nationalityID = $nationalityID;
        return $this;
    }

    /**
     * Gets as genderCode
     *
     * BBIE
     *  Person. Gender Code. Code
     *  A code (e.g., ISO 5218) signifying the gender of this person.
     *  0..1
     *  Person
     *  Gender Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\GenderCode
     */
    public function getGenderCode()
    {
        return $this->genderCode;
    }

    /**
     * Sets a new genderCode
     *
     * BBIE
     *  Person. Gender Code. Code
     *  A code (e.g., ISO 5218) signifying the gender of this person.
     *  0..1
     *  Person
     *  Gender Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\GenderCode $genderCode
     * @return self
     */
    public function setGenderCode(?\UBL\Common\CBC\GenderCode $genderCode = null)
    {
        $this->genderCode = $genderCode;
        return $this;
    }

    /**
     * Gets as birthDate
     *
     * BBIE
     *  Person. Birth Date. Date
     *  This person's date of birth.
     *  0..1
     *  Person
     *  Birth Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * BBIE
     *  Person. Birth Date. Date
     *  This person's date of birth.
     *  0..1
     *  Person
     *  Birth Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(?\DateTime $birthDate = null)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as birthplaceName
     *
     * BBIE
     *  Person. Birthplace Name. Text
     *  The name of the place where this person was born, expressed as text.
     *  0..1
     *  Person
     *  Birthplace Name
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\BirthplaceName
     */
    public function getBirthplaceName()
    {
        return $this->birthplaceName;
    }

    /**
     * Sets a new birthplaceName
     *
     * BBIE
     *  Person. Birthplace Name. Text
     *  The name of the place where this person was born, expressed as text.
     *  0..1
     *  Person
     *  Birthplace Name
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\BirthplaceName $birthplaceName
     * @return self
     */
    public function setBirthplaceName(?\UBL\Common\CBC\BirthplaceName $birthplaceName = null)
    {
        $this->birthplaceName = $birthplaceName;
        return $this;
    }

    /**
     * Gets as organizationDepartment
     *
     * BBIE
     *  Person. Organization_ Department. Text
     *  The department or subdivision of an organization that this person belongs to (in a particular role).
     *  0..1
     *  Person
     *  Organization
     *  Department
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\OrganizationDepartment
     */
    public function getOrganizationDepartment()
    {
        return $this->organizationDepartment;
    }

    /**
     * Sets a new organizationDepartment
     *
     * BBIE
     *  Person. Organization_ Department. Text
     *  The department or subdivision of an organization that this person belongs to (in a particular role).
     *  0..1
     *  Person
     *  Organization
     *  Department
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\OrganizationDepartment $organizationDepartment
     * @return self
     */
    public function setOrganizationDepartment(?\UBL\Common\CBC\OrganizationDepartment $organizationDepartment = null)
    {
        $this->organizationDepartment = $organizationDepartment;
        return $this;
    }

    /**
     * Gets as contact
     *
     * ASBIE
     *  Person. Contact
     *  Contact information for this person.
     *  0..1
     *  Person
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \UBL\Common\CAC\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * ASBIE
     *  Person. Contact
     *  Contact information for this person.
     *  0..1
     *  Person
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \UBL\Common\CAC\Contact $contact
     * @return self
     */
    public function setContact(?\UBL\Common\CAC\Contact $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as financialAccount
     *
     * ASBIE
     *  Person. Financial Account
     *  The financial account associated with this person.
     *  0..1
     *  Person
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @return \UBL\Common\CAC\FinancialAccount
     */
    public function getFinancialAccount()
    {
        return $this->financialAccount;
    }

    /**
     * Sets a new financialAccount
     *
     * ASBIE
     *  Person. Financial Account
     *  The financial account associated with this person.
     *  0..1
     *  Person
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @param \UBL\Common\CAC\FinancialAccount $financialAccount
     * @return self
     */
    public function setFinancialAccount(?\UBL\Common\CAC\FinancialAccount $financialAccount = null)
    {
        $this->financialAccount = $financialAccount;
        return $this;
    }

    /**
     * Adds as identityDocumentReference
     *
     * ASBIE
     *  Person. Identity_ Document Reference. Document Reference
     *  A reference to a document that can precisely identify this person (e.g., a driver's license).
     *  0..n
     *  Person
     *  Identity
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \UBL\Common\CAC\IdentityDocumentReference $identityDocumentReference
     */
    public function addToIdentityDocumentReference(\UBL\Common\CAC\IdentityDocumentReference $identityDocumentReference)
    {
        $this->identityDocumentReference[] = $identityDocumentReference;
        return $this;
    }

    /**
     * isset identityDocumentReference
     *
     * ASBIE
     *  Person. Identity_ Document Reference. Document Reference
     *  A reference to a document that can precisely identify this person (e.g., a driver's license).
     *  0..n
     *  Person
     *  Identity
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentityDocumentReference($index)
    {
        return isset($this->identityDocumentReference[$index]);
    }

    /**
     * unset identityDocumentReference
     *
     * ASBIE
     *  Person. Identity_ Document Reference. Document Reference
     *  A reference to a document that can precisely identify this person (e.g., a driver's license).
     *  0..n
     *  Person
     *  Identity
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentityDocumentReference($index)
    {
        unset($this->identityDocumentReference[$index]);
    }

    /**
     * Gets as identityDocumentReference
     *
     * ASBIE
     *  Person. Identity_ Document Reference. Document Reference
     *  A reference to a document that can precisely identify this person (e.g., a driver's license).
     *  0..n
     *  Person
     *  Identity
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL\Common\CAC\IdentityDocumentReference[]
     */
    public function getIdentityDocumentReference()
    {
        return $this->identityDocumentReference;
    }

    /**
     * Sets a new identityDocumentReference
     *
     * ASBIE
     *  Person. Identity_ Document Reference. Document Reference
     *  A reference to a document that can precisely identify this person (e.g., a driver's license).
     *  0..n
     *  Person
     *  Identity
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL\Common\CAC\IdentityDocumentReference[] $identityDocumentReference
     * @return self
     */
    public function setIdentityDocumentReference(?array $identityDocumentReference = null)
    {
        $this->identityDocumentReference = $identityDocumentReference;
        return $this;
    }

    /**
     * Gets as residenceAddress
     *
     * ASBIE
     *  Person. Residence_ Address. Address
     *  This person's address of residence.
     *  0..1
     *  Person
     *  Residence
     *  Address
     *  Address
     *  Address
     *
     * @return \UBL\Common\CAC\ResidenceAddress
     */
    public function getResidenceAddress()
    {
        return $this->residenceAddress;
    }

    /**
     * Sets a new residenceAddress
     *
     * ASBIE
     *  Person. Residence_ Address. Address
     *  This person's address of residence.
     *  0..1
     *  Person
     *  Residence
     *  Address
     *  Address
     *  Address
     *
     * @param \UBL\Common\CAC\ResidenceAddress $residenceAddress
     * @return self
     */
    public function setResidenceAddress(?\UBL\Common\CAC\ResidenceAddress $residenceAddress = null)
    {
        $this->residenceAddress = $residenceAddress;
        return $this;
    }
}


