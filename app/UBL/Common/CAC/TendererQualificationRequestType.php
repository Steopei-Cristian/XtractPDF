<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing TendererQualificationRequestType
 *
 * ABIE
 *  Tenderer Qualification Request. Details
 *  The evaluation that the Contracting Authority party requests to fulfill to the tenderers.
 *  Tenderer Qualification Request
 * XSD Type: TendererQualificationRequestType
 */
class TendererQualificationRequestType
{
    /**
     * BBIE
     *  Tenderer Qualification Request. Company Legal Form Code. Code
     *  The legal status requested for potential tenderers, expressed as a code.
     *  0..1
     *  Tenderer Qualification Request
     *  Company Legal Form Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\CompanyLegalFormCode $companyLegalFormCode
     */
    private $companyLegalFormCode = null;

    /**
     * BBIE
     *  Tenderer Qualification Request. Company Legal Form. Text
     *  The legal status requested for potential tenderers, expressed as text
     *  0..1
     *  Tenderer Qualification Request
     *  Company Legal Form
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\CompanyLegalForm $companyLegalForm
     */
    private $companyLegalForm = null;

    /**
     * BBIE
     *  Tenderer Qualification Request. Personal Situation. Text
     *  Text describing the personal situation of the economic operators in this tendering process.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Operating Years. Quantity
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tenderer Qualification Request
     *  Operating Years
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL\Common\CBC\OperatingYearsQuantity $operatingYearsQuantity
     */
    private $operatingYearsQuantity = null;

    /**
     * BBIE
     *  Tenderer Qualification Request. Employee. Quantity
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tenderer Qualification Request
     *  Employee
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL\Common\CBC\EmployeeQuantity $employeeQuantity
     */
    private $employeeQuantity = null;

    /**
     * BBIE
     *  Tenderer Qualification Request. Description. Text
     *  Text describing the evaluation requirements for this tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Tenderer Qualification Request. Required Business_ Classification Scheme. Classification Scheme
     *  A classification scheme for the business profile.
     *  0..n
     *  Tenderer Qualification Request
     *  Required Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @var \UBL\Common\CAC\RequiredBusinessClassificationScheme[] $requiredBusinessClassificationScheme
     */
    private $requiredBusinessClassificationScheme = [
        
    ];

    /**
     * ASBIE
     *  Tenderer Qualification Request. Technical_ Evaluation Criterion. Evaluation Criterion
     *  A technical evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Technical
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @var \UBL\Common\CAC\TechnicalEvaluationCriterion[] $technicalEvaluationCriterion
     */
    private $technicalEvaluationCriterion = [
        
    ];

    /**
     * ASBIE
     *  Tenderer Qualification Request. Financial_ Evaluation Criterion. Evaluation Criterion
     *  A financial evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Financial
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @var \UBL\Common\CAC\FinancialEvaluationCriterion[] $financialEvaluationCriterion
     */
    private $financialEvaluationCriterion = [
        
    ];

    /**
     * ASBIE
     *  Tenderer Qualification Request. Specific_ Tenderer Requirement. Tenderer Requirement
     *  A requirement to be met by a tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Specific
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Preregistration in a Business Registry
     *
     * @var \UBL\Common\CAC\SpecificTendererRequirement[] $specificTendererRequirement
     */
    private $specificTendererRequirement = [
        
    ];

    /**
     * ASBIE
     *  Tenderer Qualification Request. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..n
     *  Tenderer Qualification Request
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @var \UBL\Common\CAC\EconomicOperatorRole[] $economicOperatorRole
     */
    private $economicOperatorRole = [
        
    ];

    /**
     * Gets as companyLegalFormCode
     *
     * BBIE
     *  Tenderer Qualification Request. Company Legal Form Code. Code
     *  The legal status requested for potential tenderers, expressed as a code.
     *  0..1
     *  Tenderer Qualification Request
     *  Company Legal Form Code
     *  Code
     *  Code. Type
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
     *  Tenderer Qualification Request. Company Legal Form Code. Code
     *  The legal status requested for potential tenderers, expressed as a code.
     *  0..1
     *  Tenderer Qualification Request
     *  Company Legal Form Code
     *  Code
     *  Code. Type
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
     *  Tenderer Qualification Request. Company Legal Form. Text
     *  The legal status requested for potential tenderers, expressed as text
     *  0..1
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Company Legal Form. Text
     *  The legal status requested for potential tenderers, expressed as text
     *  0..1
     *  Tenderer Qualification Request
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
     * Adds as personalSituation
     *
     * BBIE
     *  Tenderer Qualification Request. Personal Situation. Text
     *  Text describing the personal situation of the economic operators in this tendering process.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Personal Situation. Text
     *  Text describing the personal situation of the economic operators in this tendering process.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Personal Situation. Text
     *  Text describing the personal situation of the economic operators in this tendering process.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Personal Situation. Text
     *  Text describing the personal situation of the economic operators in this tendering process.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Personal Situation. Text
     *  Text describing the personal situation of the economic operators in this tendering process.
     *  0..n
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Operating Years. Quantity
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Operating Years. Quantity
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Employee. Quantity
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tenderer Qualification Request
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
     *  Tenderer Qualification Request. Employee. Quantity
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tenderer Qualification Request
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
     * Adds as description
     *
     * BBIE
     *  Tenderer Qualification Request. Description. Text
     *  Text describing the evaluation requirements for this tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\Description $description
     */
    public function addToDescription(\UBL\Common\CBC\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Tenderer Qualification Request. Description. Text
     *  Text describing the evaluation requirements for this tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Tenderer Qualification Request. Description. Text
     *  Text describing the evaluation requirements for this tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Tenderer Qualification Request. Description. Text
     *  Text describing the evaluation requirements for this tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Tenderer Qualification Request. Description. Text
     *  Text describing the evaluation requirements for this tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as requiredBusinessClassificationScheme
     *
     * ASBIE
     *  Tenderer Qualification Request. Required Business_ Classification Scheme. Classification Scheme
     *  A classification scheme for the business profile.
     *  0..n
     *  Tenderer Qualification Request
     *  Required Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return self
     * @param \UBL\Common\CAC\RequiredBusinessClassificationScheme $requiredBusinessClassificationScheme
     */
    public function addToRequiredBusinessClassificationScheme(\UBL\Common\CAC\RequiredBusinessClassificationScheme $requiredBusinessClassificationScheme)
    {
        $this->requiredBusinessClassificationScheme[] = $requiredBusinessClassificationScheme;
        return $this;
    }

    /**
     * isset requiredBusinessClassificationScheme
     *
     * ASBIE
     *  Tenderer Qualification Request. Required Business_ Classification Scheme. Classification Scheme
     *  A classification scheme for the business profile.
     *  0..n
     *  Tenderer Qualification Request
     *  Required Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredBusinessClassificationScheme($index)
    {
        return isset($this->requiredBusinessClassificationScheme[$index]);
    }

    /**
     * unset requiredBusinessClassificationScheme
     *
     * ASBIE
     *  Tenderer Qualification Request. Required Business_ Classification Scheme. Classification Scheme
     *  A classification scheme for the business profile.
     *  0..n
     *  Tenderer Qualification Request
     *  Required Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredBusinessClassificationScheme($index)
    {
        unset($this->requiredBusinessClassificationScheme[$index]);
    }

    /**
     * Gets as requiredBusinessClassificationScheme
     *
     * ASBIE
     *  Tenderer Qualification Request. Required Business_ Classification Scheme. Classification Scheme
     *  A classification scheme for the business profile.
     *  0..n
     *  Tenderer Qualification Request
     *  Required Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return \UBL\Common\CAC\RequiredBusinessClassificationScheme[]
     */
    public function getRequiredBusinessClassificationScheme()
    {
        return $this->requiredBusinessClassificationScheme;
    }

    /**
     * Sets a new requiredBusinessClassificationScheme
     *
     * ASBIE
     *  Tenderer Qualification Request. Required Business_ Classification Scheme. Classification Scheme
     *  A classification scheme for the business profile.
     *  0..n
     *  Tenderer Qualification Request
     *  Required Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param \UBL\Common\CAC\RequiredBusinessClassificationScheme[] $requiredBusinessClassificationScheme
     * @return self
     */
    public function setRequiredBusinessClassificationScheme(?array $requiredBusinessClassificationScheme = null)
    {
        $this->requiredBusinessClassificationScheme = $requiredBusinessClassificationScheme;
        return $this;
    }

    /**
     * Adds as technicalEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Technical_ Evaluation Criterion. Evaluation Criterion
     *  A technical evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Technical
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @return self
     * @param \UBL\Common\CAC\TechnicalEvaluationCriterion $technicalEvaluationCriterion
     */
    public function addToTechnicalEvaluationCriterion(\UBL\Common\CAC\TechnicalEvaluationCriterion $technicalEvaluationCriterion)
    {
        $this->technicalEvaluationCriterion[] = $technicalEvaluationCriterion;
        return $this;
    }

    /**
     * isset technicalEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Technical_ Evaluation Criterion. Evaluation Criterion
     *  A technical evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Technical
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalEvaluationCriterion($index)
    {
        return isset($this->technicalEvaluationCriterion[$index]);
    }

    /**
     * unset technicalEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Technical_ Evaluation Criterion. Evaluation Criterion
     *  A technical evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Technical
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalEvaluationCriterion($index)
    {
        unset($this->technicalEvaluationCriterion[$index]);
    }

    /**
     * Gets as technicalEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Technical_ Evaluation Criterion. Evaluation Criterion
     *  A technical evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Technical
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @return \UBL\Common\CAC\TechnicalEvaluationCriterion[]
     */
    public function getTechnicalEvaluationCriterion()
    {
        return $this->technicalEvaluationCriterion;
    }

    /**
     * Sets a new technicalEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Technical_ Evaluation Criterion. Evaluation Criterion
     *  A technical evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Technical
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @param \UBL\Common\CAC\TechnicalEvaluationCriterion[] $technicalEvaluationCriterion
     * @return self
     */
    public function setTechnicalEvaluationCriterion(?array $technicalEvaluationCriterion = null)
    {
        $this->technicalEvaluationCriterion = $technicalEvaluationCriterion;
        return $this;
    }

    /**
     * Adds as financialEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Financial_ Evaluation Criterion. Evaluation Criterion
     *  A financial evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Financial
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @return self
     * @param \UBL\Common\CAC\FinancialEvaluationCriterion $financialEvaluationCriterion
     */
    public function addToFinancialEvaluationCriterion(\UBL\Common\CAC\FinancialEvaluationCriterion $financialEvaluationCriterion)
    {
        $this->financialEvaluationCriterion[] = $financialEvaluationCriterion;
        return $this;
    }

    /**
     * isset financialEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Financial_ Evaluation Criterion. Evaluation Criterion
     *  A financial evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Financial
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFinancialEvaluationCriterion($index)
    {
        return isset($this->financialEvaluationCriterion[$index]);
    }

    /**
     * unset financialEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Financial_ Evaluation Criterion. Evaluation Criterion
     *  A financial evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Financial
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFinancialEvaluationCriterion($index)
    {
        unset($this->financialEvaluationCriterion[$index]);
    }

    /**
     * Gets as financialEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Financial_ Evaluation Criterion. Evaluation Criterion
     *  A financial evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Financial
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @return \UBL\Common\CAC\FinancialEvaluationCriterion[]
     */
    public function getFinancialEvaluationCriterion()
    {
        return $this->financialEvaluationCriterion;
    }

    /**
     * Sets a new financialEvaluationCriterion
     *
     * ASBIE
     *  Tenderer Qualification Request. Financial_ Evaluation Criterion. Evaluation Criterion
     *  A financial evaluation criterion required for an economic operator in a tendering process.
     *  0..n
     *  Tenderer Qualification Request
     *  Financial
     *  Evaluation Criterion
     *  Evaluation Criterion
     *  Evaluation Criterion
     *
     * @param \UBL\Common\CAC\FinancialEvaluationCriterion[] $financialEvaluationCriterion
     * @return self
     */
    public function setFinancialEvaluationCriterion(?array $financialEvaluationCriterion = null)
    {
        $this->financialEvaluationCriterion = $financialEvaluationCriterion;
        return $this;
    }

    /**
     * Adds as specificTendererRequirement
     *
     * ASBIE
     *  Tenderer Qualification Request. Specific_ Tenderer Requirement. Tenderer Requirement
     *  A requirement to be met by a tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Specific
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Preregistration in a Business Registry
     *
     * @return self
     * @param \UBL\Common\CAC\SpecificTendererRequirement $specificTendererRequirement
     */
    public function addToSpecificTendererRequirement(\UBL\Common\CAC\SpecificTendererRequirement $specificTendererRequirement)
    {
        $this->specificTendererRequirement[] = $specificTendererRequirement;
        return $this;
    }

    /**
     * isset specificTendererRequirement
     *
     * ASBIE
     *  Tenderer Qualification Request. Specific_ Tenderer Requirement. Tenderer Requirement
     *  A requirement to be met by a tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Specific
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Preregistration in a Business Registry
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecificTendererRequirement($index)
    {
        return isset($this->specificTendererRequirement[$index]);
    }

    /**
     * unset specificTendererRequirement
     *
     * ASBIE
     *  Tenderer Qualification Request. Specific_ Tenderer Requirement. Tenderer Requirement
     *  A requirement to be met by a tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Specific
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Preregistration in a Business Registry
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecificTendererRequirement($index)
    {
        unset($this->specificTendererRequirement[$index]);
    }

    /**
     * Gets as specificTendererRequirement
     *
     * ASBIE
     *  Tenderer Qualification Request. Specific_ Tenderer Requirement. Tenderer Requirement
     *  A requirement to be met by a tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Specific
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Preregistration in a Business Registry
     *
     * @return \UBL\Common\CAC\SpecificTendererRequirement[]
     */
    public function getSpecificTendererRequirement()
    {
        return $this->specificTendererRequirement;
    }

    /**
     * Sets a new specificTendererRequirement
     *
     * ASBIE
     *  Tenderer Qualification Request. Specific_ Tenderer Requirement. Tenderer Requirement
     *  A requirement to be met by a tenderer.
     *  0..n
     *  Tenderer Qualification Request
     *  Specific
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Preregistration in a Business Registry
     *
     * @param \UBL\Common\CAC\SpecificTendererRequirement[] $specificTendererRequirement
     * @return self
     */
    public function setSpecificTendererRequirement(?array $specificTendererRequirement = null)
    {
        $this->specificTendererRequirement = $specificTendererRequirement;
        return $this;
    }

    /**
     * Adds as economicOperatorRole
     *
     * ASBIE
     *  Tenderer Qualification Request. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..n
     *  Tenderer Qualification Request
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @return self
     * @param \UBL\Common\CAC\EconomicOperatorRole $economicOperatorRole
     */
    public function addToEconomicOperatorRole(\UBL\Common\CAC\EconomicOperatorRole $economicOperatorRole)
    {
        $this->economicOperatorRole[] = $economicOperatorRole;
        return $this;
    }

    /**
     * isset economicOperatorRole
     *
     * ASBIE
     *  Tenderer Qualification Request. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..n
     *  Tenderer Qualification Request
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEconomicOperatorRole($index)
    {
        return isset($this->economicOperatorRole[$index]);
    }

    /**
     * unset economicOperatorRole
     *
     * ASBIE
     *  Tenderer Qualification Request. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..n
     *  Tenderer Qualification Request
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEconomicOperatorRole($index)
    {
        unset($this->economicOperatorRole[$index]);
    }

    /**
     * Gets as economicOperatorRole
     *
     * ASBIE
     *  Tenderer Qualification Request. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..n
     *  Tenderer Qualification Request
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @return \UBL\Common\CAC\EconomicOperatorRole[]
     */
    public function getEconomicOperatorRole()
    {
        return $this->economicOperatorRole;
    }

    /**
     * Sets a new economicOperatorRole
     *
     * ASBIE
     *  Tenderer Qualification Request. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..n
     *  Tenderer Qualification Request
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @param \UBL\Common\CAC\EconomicOperatorRole[] $economicOperatorRole
     * @return self
     */
    public function setEconomicOperatorRole(?array $economicOperatorRole = null)
    {
        $this->economicOperatorRole = $economicOperatorRole;
        return $this;
    }
}


