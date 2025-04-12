<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing QualifyingPartyType
 *
 * ABIE
 *  Qualifying Party. Details
 *  A class to describe the distinctive features or characteristics qualifying an economic operator to be a party in a tendering process (e.g., number of employees, number of operating units, type of business, technical and financial capabilities, completed projects).
 *  Qualifying Party
 * XSD Type: QualifyingPartyType
 */
class QualifyingPartyType
{
    /**
     * BBIE
     *  Qualifying Party. Participation. Percent
     *  The extent to which this party is expected to participate in the tendering process, expressed as a percentage.
     *  0..1
     *  Qualifying Party
     *  Participation
     *  Percent
     *  Percent. Type
     *
     * @var \UBL\Common\CBC\ParticipationPercent $participationPercent
     */
    private $participationPercent = null;

    /**
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\PersonalSituation[] $personalSituation
     */
    private $personalSituation = [
        
    ];

    /**
     * BBIE
     *  Qualifying Party. Operating Years. Quantity
     *  The number of years that this qualifying party has been in operation.
     *  0..1
     *  Qualifying Party
     *  Operating Years
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL\Common\CBC\OperatingYearsQuantity $operatingYearsQuantity
     */
    private $operatingYearsQuantity = null;

    /**
     * BBIE
     *  Qualifying Party. Employee. Quantity
     *  The number of people employed by this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Employee
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL\Common\CBC\EmployeeQuantity $employeeQuantity
     */
    private $employeeQuantity = null;

    /**
     * BBIE
     *  Qualifying Party. Business Classification Evidence. Identifier
     *  An identifier for an item of evidence to support the classification of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Classification Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\BusinessClassificationEvidenceID $businessClassificationEvidenceID
     */
    private $businessClassificationEvidenceID = null;

    /**
     * BBIE
     *  Qualifying Party. Business Identity Evidence. Identifier
     *  An identifier for an item of evidence to support the business identity of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Identity Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\BusinessIdentityEvidenceID $businessIdentityEvidenceID
     */
    private $businessIdentityEvidenceID = null;

    /**
     * BBIE
     *  Qualifying Party. Tenderer Role Code. Code
     *  A code stating the Tenderer Role.
     *  0..1
     *  Qualifying Party
     *  Tenderer Role Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\TendererRoleCode $tendererRoleCode
     */
    private $tendererRoleCode = null;

    /**
     * ASBIE
     *  Qualifying Party. Business_ Classification Scheme. Classification Scheme
     *  The classification scheme used for the business profile.
     *  0..1
     *  Qualifying Party
     *  Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @var \UBL\Common\CAC\BusinessClassificationScheme $businessClassificationScheme
     */
    private $businessClassificationScheme = null;

    /**
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @var \UBL\Common\CAC\TechnicalCapability[] $technicalCapability
     */
    private $technicalCapability = [
        
    ];

    /**
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @var \UBL\Common\CAC\FinancialCapability[] $financialCapability
     */
    private $financialCapability = [
        
    ];

    /**
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @var \UBL\Common\CAC\CompletedTask[] $completedTask
     */
    private $completedTask = [
        
    ];

    /**
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @var \UBL\Common\CAC\Declaration[] $declaration
     */
    private $declaration = [
        
    ];

    /**
     * ASBIE
     *  Qualifying Party. Party
     *  The qualifying party itself.
     *  0..1
     *  Qualifying Party
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL\Common\CAC\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Qualifying Party. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..1
     *  Qualifying Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @var \UBL\Common\CAC\EconomicOperatorRole $economicOperatorRole
     */
    private $economicOperatorRole = null;

    /**
     * Gets as participationPercent
     *
     * BBIE
     *  Qualifying Party. Participation. Percent
     *  The extent to which this party is expected to participate in the tendering process, expressed as a percentage.
     *  0..1
     *  Qualifying Party
     *  Participation
     *  Percent
     *  Percent. Type
     *
     * @return \UBL\Common\CBC\ParticipationPercent
     */
    public function getParticipationPercent()
    {
        return $this->participationPercent;
    }

    /**
     * Sets a new participationPercent
     *
     * BBIE
     *  Qualifying Party. Participation. Percent
     *  The extent to which this party is expected to participate in the tendering process, expressed as a percentage.
     *  0..1
     *  Qualifying Party
     *  Participation
     *  Percent
     *  Percent. Type
     *
     * @param \UBL\Common\CBC\ParticipationPercent $participationPercent
     * @return self
     */
    public function setParticipationPercent(?\UBL\Common\CBC\ParticipationPercent $participationPercent = null)
    {
        $this->participationPercent = $participationPercent;
        return $this;
    }

    /**
     * Adds as personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\PersonalSituation $personalSituation
     */
    public function addToPersonalSituation(\UBL\Common\CBC\PersonalSituation $personalSituation)
    {
        $this->personalSituation[] = $personalSituation;
        return $this;
    }

    /**
     * isset personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonalSituation($index)
    {
        return isset($this->personalSituation[$index]);
    }

    /**
     * unset personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonalSituation($index)
    {
        unset($this->personalSituation[$index]);
    }

    /**
     * Gets as personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\PersonalSituation[]
     */
    public function getPersonalSituation()
    {
        return $this->personalSituation;
    }

    /**
     * Sets a new personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\PersonalSituation[] $personalSituation
     * @return self
     */
    public function setPersonalSituation(?array $personalSituation = null)
    {
        $this->personalSituation = $personalSituation;
        return $this;
    }

    /**
     * Gets as operatingYearsQuantity
     *
     * BBIE
     *  Qualifying Party. Operating Years. Quantity
     *  The number of years that this qualifying party has been in operation.
     *  0..1
     *  Qualifying Party
     *  Operating Years
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL\Common\CBC\OperatingYearsQuantity
     */
    public function getOperatingYearsQuantity()
    {
        return $this->operatingYearsQuantity;
    }

    /**
     * Sets a new operatingYearsQuantity
     *
     * BBIE
     *  Qualifying Party. Operating Years. Quantity
     *  The number of years that this qualifying party has been in operation.
     *  0..1
     *  Qualifying Party
     *  Operating Years
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL\Common\CBC\OperatingYearsQuantity $operatingYearsQuantity
     * @return self
     */
    public function setOperatingYearsQuantity(?\UBL\Common\CBC\OperatingYearsQuantity $operatingYearsQuantity = null)
    {
        $this->operatingYearsQuantity = $operatingYearsQuantity;
        return $this;
    }

    /**
     * Gets as employeeQuantity
     *
     * BBIE
     *  Qualifying Party. Employee. Quantity
     *  The number of people employed by this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Employee
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL\Common\CBC\EmployeeQuantity
     */
    public function getEmployeeQuantity()
    {
        return $this->employeeQuantity;
    }

    /**
     * Sets a new employeeQuantity
     *
     * BBIE
     *  Qualifying Party. Employee. Quantity
     *  The number of people employed by this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Employee
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL\Common\CBC\EmployeeQuantity $employeeQuantity
     * @return self
     */
    public function setEmployeeQuantity(?\UBL\Common\CBC\EmployeeQuantity $employeeQuantity = null)
    {
        $this->employeeQuantity = $employeeQuantity;
        return $this;
    }

    /**
     * Gets as businessClassificationEvidenceID
     *
     * BBIE
     *  Qualifying Party. Business Classification Evidence. Identifier
     *  An identifier for an item of evidence to support the classification of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Classification Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\BusinessClassificationEvidenceID
     */
    public function getBusinessClassificationEvidenceID()
    {
        return $this->businessClassificationEvidenceID;
    }

    /**
     * Sets a new businessClassificationEvidenceID
     *
     * BBIE
     *  Qualifying Party. Business Classification Evidence. Identifier
     *  An identifier for an item of evidence to support the classification of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Classification Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\BusinessClassificationEvidenceID $businessClassificationEvidenceID
     * @return self
     */
    public function setBusinessClassificationEvidenceID(?\UBL\Common\CBC\BusinessClassificationEvidenceID $businessClassificationEvidenceID = null)
    {
        $this->businessClassificationEvidenceID = $businessClassificationEvidenceID;
        return $this;
    }

    /**
     * Gets as businessIdentityEvidenceID
     *
     * BBIE
     *  Qualifying Party. Business Identity Evidence. Identifier
     *  An identifier for an item of evidence to support the business identity of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Identity Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\BusinessIdentityEvidenceID
     */
    public function getBusinessIdentityEvidenceID()
    {
        return $this->businessIdentityEvidenceID;
    }

    /**
     * Sets a new businessIdentityEvidenceID
     *
     * BBIE
     *  Qualifying Party. Business Identity Evidence. Identifier
     *  An identifier for an item of evidence to support the business identity of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Identity Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\BusinessIdentityEvidenceID $businessIdentityEvidenceID
     * @return self
     */
    public function setBusinessIdentityEvidenceID(?\UBL\Common\CBC\BusinessIdentityEvidenceID $businessIdentityEvidenceID = null)
    {
        $this->businessIdentityEvidenceID = $businessIdentityEvidenceID;
        return $this;
    }

    /**
     * Gets as tendererRoleCode
     *
     * BBIE
     *  Qualifying Party. Tenderer Role Code. Code
     *  A code stating the Tenderer Role.
     *  0..1
     *  Qualifying Party
     *  Tenderer Role Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\TendererRoleCode
     */
    public function getTendererRoleCode()
    {
        return $this->tendererRoleCode;
    }

    /**
     * Sets a new tendererRoleCode
     *
     * BBIE
     *  Qualifying Party. Tenderer Role Code. Code
     *  A code stating the Tenderer Role.
     *  0..1
     *  Qualifying Party
     *  Tenderer Role Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\TendererRoleCode $tendererRoleCode
     * @return self
     */
    public function setTendererRoleCode(?\UBL\Common\CBC\TendererRoleCode $tendererRoleCode = null)
    {
        $this->tendererRoleCode = $tendererRoleCode;
        return $this;
    }

    /**
     * Gets as businessClassificationScheme
     *
     * ASBIE
     *  Qualifying Party. Business_ Classification Scheme. Classification Scheme
     *  The classification scheme used for the business profile.
     *  0..1
     *  Qualifying Party
     *  Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return \UBL\Common\CAC\BusinessClassificationScheme
     */
    public function getBusinessClassificationScheme()
    {
        return $this->businessClassificationScheme;
    }

    /**
     * Sets a new businessClassificationScheme
     *
     * ASBIE
     *  Qualifying Party. Business_ Classification Scheme. Classification Scheme
     *  The classification scheme used for the business profile.
     *  0..1
     *  Qualifying Party
     *  Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param \UBL\Common\CAC\BusinessClassificationScheme $businessClassificationScheme
     * @return self
     */
    public function setBusinessClassificationScheme(?\UBL\Common\CAC\BusinessClassificationScheme $businessClassificationScheme = null)
    {
        $this->businessClassificationScheme = $businessClassificationScheme;
        return $this;
    }

    /**
     * Adds as technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @return self
     * @param \UBL\Common\CAC\TechnicalCapability $technicalCapability
     */
    public function addToTechnicalCapability(\UBL\Common\CAC\TechnicalCapability $technicalCapability)
    {
        $this->technicalCapability[] = $technicalCapability;
        return $this;
    }

    /**
     * isset technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalCapability($index)
    {
        return isset($this->technicalCapability[$index]);
    }

    /**
     * unset technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalCapability($index)
    {
        unset($this->technicalCapability[$index]);
    }

    /**
     * Gets as technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @return \UBL\Common\CAC\TechnicalCapability[]
     */
    public function getTechnicalCapability()
    {
        return $this->technicalCapability;
    }

    /**
     * Sets a new technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @param \UBL\Common\CAC\TechnicalCapability[] $technicalCapability
     * @return self
     */
    public function setTechnicalCapability(?array $technicalCapability = null)
    {
        $this->technicalCapability = $technicalCapability;
        return $this;
    }

    /**
     * Adds as financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @return self
     * @param \UBL\Common\CAC\FinancialCapability $financialCapability
     */
    public function addToFinancialCapability(\UBL\Common\CAC\FinancialCapability $financialCapability)
    {
        $this->financialCapability[] = $financialCapability;
        return $this;
    }

    /**
     * isset financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFinancialCapability($index)
    {
        return isset($this->financialCapability[$index]);
    }

    /**
     * unset financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFinancialCapability($index)
    {
        unset($this->financialCapability[$index]);
    }

    /**
     * Gets as financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @return \UBL\Common\CAC\FinancialCapability[]
     */
    public function getFinancialCapability()
    {
        return $this->financialCapability;
    }

    /**
     * Sets a new financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @param \UBL\Common\CAC\FinancialCapability[] $financialCapability
     * @return self
     */
    public function setFinancialCapability(?array $financialCapability = null)
    {
        $this->financialCapability = $financialCapability;
        return $this;
    }

    /**
     * Adds as completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @return self
     * @param \UBL\Common\CAC\CompletedTask $completedTask
     */
    public function addToCompletedTask(\UBL\Common\CAC\CompletedTask $completedTask)
    {
        $this->completedTask[] = $completedTask;
        return $this;
    }

    /**
     * isset completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompletedTask($index)
    {
        return isset($this->completedTask[$index]);
    }

    /**
     * unset completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompletedTask($index)
    {
        unset($this->completedTask[$index]);
    }

    /**
     * Gets as completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @return \UBL\Common\CAC\CompletedTask[]
     */
    public function getCompletedTask()
    {
        return $this->completedTask;
    }

    /**
     * Sets a new completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @param \UBL\Common\CAC\CompletedTask[] $completedTask
     * @return self
     */
    public function setCompletedTask(?array $completedTask = null)
    {
        $this->completedTask = $completedTask;
        return $this;
    }

    /**
     * Adds as declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @return self
     * @param \UBL\Common\CAC\Declaration $declaration
     */
    public function addToDeclaration(\UBL\Common\CAC\Declaration $declaration)
    {
        $this->declaration[] = $declaration;
        return $this;
    }

    /**
     * isset declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeclaration($index)
    {
        return isset($this->declaration[$index]);
    }

    /**
     * unset declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeclaration($index)
    {
        unset($this->declaration[$index]);
    }

    /**
     * Gets as declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @return \UBL\Common\CAC\Declaration[]
     */
    public function getDeclaration()
    {
        return $this->declaration;
    }

    /**
     * Sets a new declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @param \UBL\Common\CAC\Declaration[] $declaration
     * @return self
     */
    public function setDeclaration(?array $declaration = null)
    {
        $this->declaration = $declaration;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Qualifying Party. Party
     *  The qualifying party itself.
     *  0..1
     *  Qualifying Party
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
     *  Qualifying Party. Party
     *  The qualifying party itself.
     *  0..1
     *  Qualifying Party
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL\Common\CAC\Party $party
     * @return self
     */
    public function setParty(?\UBL\Common\CAC\Party $party = null)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as economicOperatorRole
     *
     * ASBIE
     *  Qualifying Party. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..1
     *  Qualifying Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @return \UBL\Common\CAC\EconomicOperatorRole
     */
    public function getEconomicOperatorRole()
    {
        return $this->economicOperatorRole;
    }

    /**
     * Sets a new economicOperatorRole
     *
     * ASBIE
     *  Qualifying Party. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..1
     *  Qualifying Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @param \UBL\Common\CAC\EconomicOperatorRole $economicOperatorRole
     * @return self
     */
    public function setEconomicOperatorRole(?\UBL\Common\CAC\EconomicOperatorRole $economicOperatorRole = null)
    {
        $this->economicOperatorRole = $economicOperatorRole;
        return $this;
    }
}


