<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ProcurementProjectType
 *
 * ABIE
 *  Procurement Project. Details
 *  A class to describe a project to procure goods, works, or services.
 *  Procurement Project
 * XSD Type: ProcurementProjectType
 */
class ProcurementProjectType
{
    /**
     * BBIE
     *  Procurement Project. Identifier
     *  An identifier for this procurement project.
     *  0..1
     *  Procurement Project
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  1..n
     *  Procurement Project
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \UBL\Common\CBC\Name[] $name
     */
    private $name = [
        
    ];

    /**
     * BBIE
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Procurement Project. Procurement_ Type Code. Code
     *  A code signifying the type of procurement project (e.g., goods, works, services).
     *  0..1
     *  Procurement Project
     *  Procurement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\ProcurementTypeCode $procurementTypeCode
     */
    private $procurementTypeCode = null;

    /**
     * BBIE
     *  Procurement Project. Procurement Sub_ Type Code. Code
     *  A code signifying the subcategory of the type of work for this project (e.g., land surveying, IT consulting).
     *  0..1
     *  Procurement Project
     *  Procurement Sub
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\ProcurementSubTypeCode $procurementSubTypeCode
     */
    private $procurementSubTypeCode = null;

    /**
     * BBIE
     *  Procurement Project. Quality Control Code. Code
     *  The indication of whether or not the control quality is included in the works project.
     *  0..1
     *  Procurement Project
     *  Quality Control Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\QualityControlCode $qualityControlCode
     */
    private $qualityControlCode = null;

    /**
     * BBIE
     *  Procurement Project. Required_ Fee. Amount
     *  The amount of the reimbursement fee for concession procurement projects.
     *  0..1
     *  Procurement Project
     *  Required
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @var \UBL\Common\CBC\RequiredFeeAmount $requiredFeeAmount
     */
    private $requiredFeeAmount = null;

    /**
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\FeeDescription[] $feeDescription
     */
    private $feeDescription = [
        
    ];

    /**
     * BBIE
     *  Procurement Project. Requested_ Delivery Date. Date
     *  The requested delivery date for this procurement project.
     *  0..1
     *  Procurement Project
     *  Requested
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $requestedDeliveryDate
     */
    private $requestedDeliveryDate = null;

    /**
     * BBIE
     *  Procurement Project. Estimated_ Overall Contract. Quantity
     *  The estimated overall quantity for this procurement project.
     *  0..1
     *  Procurement Project
     *  Estimated
     *  Overall Contract
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL\Common\CBC\EstimatedOverallContractQuantity $estimatedOverallContractQuantity
     */
    private $estimatedOverallContractQuantity = null;

    /**
     * BBIE
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project. Requested Tender Total
     *  Budget monetary amounts for the project as whole.
     *  0..1
     *  Procurement Project
     *  Requested Tender Total
     *  Requested Tender Total
     *  Requested Tender Total
     *
     * @var \UBL\Common\CAC\RequestedTenderTotal $requestedTenderTotal
     */
    private $requestedTenderTotal = null;

    /**
     * ASBIE
     *  Procurement Project. Main_ Commodity Classification. Commodity Classification
     *  An association to the main classification category for the deliverable requested.
     *  0..1
     *  Procurement Project
     *  Main
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \UBL\Common\CAC\MainCommodityClassification $mainCommodityClassification
     */
    private $mainCommodityClassification = null;

    /**
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \UBL\Common\CAC\AdditionalCommodityClassification[] $additionalCommodityClassification
     */
    private $additionalCommodityClassification = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @var \UBL\Common\CAC\RealizedLocation[] $realizedLocation
     */
    private $realizedLocation = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project. Planned_ Period. Period
     *  The period during which this procurement project is planned to take place.
     *  0..1
     *  Procurement Project
     *  Planned
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL\Common\CAC\PlannedPeriod $plannedPeriod
     */
    private $plannedPeriod = null;

    /**
     * ASBIE
     *  Procurement Project. Contract Extension
     *  The contract extension for this tendering process.
     *  0..1
     *  Procurement Project
     *  Contract Extension
     *  Contract Extension
     *  Contract Extension
     *
     * @var \UBL\Common\CAC\ContractExtension $contractExtension
     */
    private $contractExtension = null;

    /**
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @var \UBL\Common\CAC\RequestForTenderLine[] $requestForTenderLine
     */
    private $requestForTenderLine = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Procurement Project. Identifier
     *  An identifier for this procurement project.
     *  0..1
     *  Procurement Project
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
     *  Procurement Project. Identifier
     *  An identifier for this procurement project.
     *  0..1
     *  Procurement Project
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
     * Adds as name
     *
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  1..n
     *  Procurement Project
     *  Name
     *  Name
     *  Name. Type
     *
     * @return self
     * @param \UBL\Common\CBC\Name $name
     */
    public function addToName(\UBL\Common\CBC\Name $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  1..n
     *  Procurement Project
     *  Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  1..n
     *  Procurement Project
     *  Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  1..n
     *  Procurement Project
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \UBL\Common\CBC\Name[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  1..n
     *  Procurement Project
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \UBL\Common\CBC\Name[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
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
     * Gets as procurementTypeCode
     *
     * BBIE
     *  Procurement Project. Procurement_ Type Code. Code
     *  A code signifying the type of procurement project (e.g., goods, works, services).
     *  0..1
     *  Procurement Project
     *  Procurement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\ProcurementTypeCode
     */
    public function getProcurementTypeCode()
    {
        return $this->procurementTypeCode;
    }

    /**
     * Sets a new procurementTypeCode
     *
     * BBIE
     *  Procurement Project. Procurement_ Type Code. Code
     *  A code signifying the type of procurement project (e.g., goods, works, services).
     *  0..1
     *  Procurement Project
     *  Procurement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\ProcurementTypeCode $procurementTypeCode
     * @return self
     */
    public function setProcurementTypeCode(?\UBL\Common\CBC\ProcurementTypeCode $procurementTypeCode = null)
    {
        $this->procurementTypeCode = $procurementTypeCode;
        return $this;
    }

    /**
     * Gets as procurementSubTypeCode
     *
     * BBIE
     *  Procurement Project. Procurement Sub_ Type Code. Code
     *  A code signifying the subcategory of the type of work for this project (e.g., land surveying, IT consulting).
     *  0..1
     *  Procurement Project
     *  Procurement Sub
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\ProcurementSubTypeCode
     */
    public function getProcurementSubTypeCode()
    {
        return $this->procurementSubTypeCode;
    }

    /**
     * Sets a new procurementSubTypeCode
     *
     * BBIE
     *  Procurement Project. Procurement Sub_ Type Code. Code
     *  A code signifying the subcategory of the type of work for this project (e.g., land surveying, IT consulting).
     *  0..1
     *  Procurement Project
     *  Procurement Sub
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\ProcurementSubTypeCode $procurementSubTypeCode
     * @return self
     */
    public function setProcurementSubTypeCode(?\UBL\Common\CBC\ProcurementSubTypeCode $procurementSubTypeCode = null)
    {
        $this->procurementSubTypeCode = $procurementSubTypeCode;
        return $this;
    }

    /**
     * Gets as qualityControlCode
     *
     * BBIE
     *  Procurement Project. Quality Control Code. Code
     *  The indication of whether or not the control quality is included in the works project.
     *  0..1
     *  Procurement Project
     *  Quality Control Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\QualityControlCode
     */
    public function getQualityControlCode()
    {
        return $this->qualityControlCode;
    }

    /**
     * Sets a new qualityControlCode
     *
     * BBIE
     *  Procurement Project. Quality Control Code. Code
     *  The indication of whether or not the control quality is included in the works project.
     *  0..1
     *  Procurement Project
     *  Quality Control Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\QualityControlCode $qualityControlCode
     * @return self
     */
    public function setQualityControlCode(?\UBL\Common\CBC\QualityControlCode $qualityControlCode = null)
    {
        $this->qualityControlCode = $qualityControlCode;
        return $this;
    }

    /**
     * Gets as requiredFeeAmount
     *
     * BBIE
     *  Procurement Project. Required_ Fee. Amount
     *  The amount of the reimbursement fee for concession procurement projects.
     *  0..1
     *  Procurement Project
     *  Required
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @return \UBL\Common\CBC\RequiredFeeAmount
     */
    public function getRequiredFeeAmount()
    {
        return $this->requiredFeeAmount;
    }

    /**
     * Sets a new requiredFeeAmount
     *
     * BBIE
     *  Procurement Project. Required_ Fee. Amount
     *  The amount of the reimbursement fee for concession procurement projects.
     *  0..1
     *  Procurement Project
     *  Required
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @param \UBL\Common\CBC\RequiredFeeAmount $requiredFeeAmount
     * @return self
     */
    public function setRequiredFeeAmount(?\UBL\Common\CBC\RequiredFeeAmount $requiredFeeAmount = null)
    {
        $this->requiredFeeAmount = $requiredFeeAmount;
        return $this;
    }

    /**
     * Adds as feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\FeeDescription $feeDescription
     */
    public function addToFeeDescription(\UBL\Common\CBC\FeeDescription $feeDescription)
    {
        $this->feeDescription[] = $feeDescription;
        return $this;
    }

    /**
     * isset feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeeDescription($index)
    {
        return isset($this->feeDescription[$index]);
    }

    /**
     * unset feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeeDescription($index)
    {
        unset($this->feeDescription[$index]);
    }

    /**
     * Gets as feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\FeeDescription[]
     */
    public function getFeeDescription()
    {
        return $this->feeDescription;
    }

    /**
     * Sets a new feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\FeeDescription[] $feeDescription
     * @return self
     */
    public function setFeeDescription(?array $feeDescription = null)
    {
        $this->feeDescription = $feeDescription;
        return $this;
    }

    /**
     * Gets as requestedDeliveryDate
     *
     * BBIE
     *  Procurement Project. Requested_ Delivery Date. Date
     *  The requested delivery date for this procurement project.
     *  0..1
     *  Procurement Project
     *  Requested
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRequestedDeliveryDate()
    {
        return $this->requestedDeliveryDate;
    }

    /**
     * Sets a new requestedDeliveryDate
     *
     * BBIE
     *  Procurement Project. Requested_ Delivery Date. Date
     *  The requested delivery date for this procurement project.
     *  0..1
     *  Procurement Project
     *  Requested
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $requestedDeliveryDate
     * @return self
     */
    public function setRequestedDeliveryDate(?\DateTime $requestedDeliveryDate = null)
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;
        return $this;
    }

    /**
     * Gets as estimatedOverallContractQuantity
     *
     * BBIE
     *  Procurement Project. Estimated_ Overall Contract. Quantity
     *  The estimated overall quantity for this procurement project.
     *  0..1
     *  Procurement Project
     *  Estimated
     *  Overall Contract
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL\Common\CBC\EstimatedOverallContractQuantity
     */
    public function getEstimatedOverallContractQuantity()
    {
        return $this->estimatedOverallContractQuantity;
    }

    /**
     * Sets a new estimatedOverallContractQuantity
     *
     * BBIE
     *  Procurement Project. Estimated_ Overall Contract. Quantity
     *  The estimated overall quantity for this procurement project.
     *  0..1
     *  Procurement Project
     *  Estimated
     *  Overall Contract
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL\Common\CBC\EstimatedOverallContractQuantity $estimatedOverallContractQuantity
     * @return self
     */
    public function setEstimatedOverallContractQuantity(?\UBL\Common\CBC\EstimatedOverallContractQuantity $estimatedOverallContractQuantity = null)
    {
        $this->estimatedOverallContractQuantity = $estimatedOverallContractQuantity;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\Note $note
     */
    public function addToNote(\UBL\Common\CBC\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as requestedTenderTotal
     *
     * ASBIE
     *  Procurement Project. Requested Tender Total
     *  Budget monetary amounts for the project as whole.
     *  0..1
     *  Procurement Project
     *  Requested Tender Total
     *  Requested Tender Total
     *  Requested Tender Total
     *
     * @return \UBL\Common\CAC\RequestedTenderTotal
     */
    public function getRequestedTenderTotal()
    {
        return $this->requestedTenderTotal;
    }

    /**
     * Sets a new requestedTenderTotal
     *
     * ASBIE
     *  Procurement Project. Requested Tender Total
     *  Budget monetary amounts for the project as whole.
     *  0..1
     *  Procurement Project
     *  Requested Tender Total
     *  Requested Tender Total
     *  Requested Tender Total
     *
     * @param \UBL\Common\CAC\RequestedTenderTotal $requestedTenderTotal
     * @return self
     */
    public function setRequestedTenderTotal(?\UBL\Common\CAC\RequestedTenderTotal $requestedTenderTotal = null)
    {
        $this->requestedTenderTotal = $requestedTenderTotal;
        return $this;
    }

    /**
     * Gets as mainCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Main_ Commodity Classification. Commodity Classification
     *  An association to the main classification category for the deliverable requested.
     *  0..1
     *  Procurement Project
     *  Main
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return \UBL\Common\CAC\MainCommodityClassification
     */
    public function getMainCommodityClassification()
    {
        return $this->mainCommodityClassification;
    }

    /**
     * Sets a new mainCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Main_ Commodity Classification. Commodity Classification
     *  An association to the main classification category for the deliverable requested.
     *  0..1
     *  Procurement Project
     *  Main
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param \UBL\Common\CAC\MainCommodityClassification $mainCommodityClassification
     * @return self
     */
    public function setMainCommodityClassification(?\UBL\Common\CAC\MainCommodityClassification $mainCommodityClassification = null)
    {
        $this->mainCommodityClassification = $mainCommodityClassification;
        return $this;
    }

    /**
     * Adds as additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return self
     * @param \UBL\Common\CAC\AdditionalCommodityClassification $additionalCommodityClassification
     */
    public function addToAdditionalCommodityClassification(\UBL\Common\CAC\AdditionalCommodityClassification $additionalCommodityClassification)
    {
        $this->additionalCommodityClassification[] = $additionalCommodityClassification;
        return $this;
    }

    /**
     * isset additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalCommodityClassification($index)
    {
        return isset($this->additionalCommodityClassification[$index]);
    }

    /**
     * unset additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalCommodityClassification($index)
    {
        unset($this->additionalCommodityClassification[$index]);
    }

    /**
     * Gets as additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return \UBL\Common\CAC\AdditionalCommodityClassification[]
     */
    public function getAdditionalCommodityClassification()
    {
        return $this->additionalCommodityClassification;
    }

    /**
     * Sets a new additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param \UBL\Common\CAC\AdditionalCommodityClassification[] $additionalCommodityClassification
     * @return self
     */
    public function setAdditionalCommodityClassification(?array $additionalCommodityClassification = null)
    {
        $this->additionalCommodityClassification = $additionalCommodityClassification;
        return $this;
    }

    /**
     * Adds as realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @return self
     * @param \UBL\Common\CAC\RealizedLocation $realizedLocation
     */
    public function addToRealizedLocation(\UBL\Common\CAC\RealizedLocation $realizedLocation)
    {
        $this->realizedLocation[] = $realizedLocation;
        return $this;
    }

    /**
     * isset realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRealizedLocation($index)
    {
        return isset($this->realizedLocation[$index]);
    }

    /**
     * unset realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRealizedLocation($index)
    {
        unset($this->realizedLocation[$index]);
    }

    /**
     * Gets as realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @return \UBL\Common\CAC\RealizedLocation[]
     */
    public function getRealizedLocation()
    {
        return $this->realizedLocation;
    }

    /**
     * Sets a new realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @param \UBL\Common\CAC\RealizedLocation[] $realizedLocation
     * @return self
     */
    public function setRealizedLocation(?array $realizedLocation = null)
    {
        $this->realizedLocation = $realizedLocation;
        return $this;
    }

    /**
     * Gets as plannedPeriod
     *
     * ASBIE
     *  Procurement Project. Planned_ Period. Period
     *  The period during which this procurement project is planned to take place.
     *  0..1
     *  Procurement Project
     *  Planned
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL\Common\CAC\PlannedPeriod
     */
    public function getPlannedPeriod()
    {
        return $this->plannedPeriod;
    }

    /**
     * Sets a new plannedPeriod
     *
     * ASBIE
     *  Procurement Project. Planned_ Period. Period
     *  The period during which this procurement project is planned to take place.
     *  0..1
     *  Procurement Project
     *  Planned
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL\Common\CAC\PlannedPeriod $plannedPeriod
     * @return self
     */
    public function setPlannedPeriod(?\UBL\Common\CAC\PlannedPeriod $plannedPeriod = null)
    {
        $this->plannedPeriod = $plannedPeriod;
        return $this;
    }

    /**
     * Gets as contractExtension
     *
     * ASBIE
     *  Procurement Project. Contract Extension
     *  The contract extension for this tendering process.
     *  0..1
     *  Procurement Project
     *  Contract Extension
     *  Contract Extension
     *  Contract Extension
     *
     * @return \UBL\Common\CAC\ContractExtension
     */
    public function getContractExtension()
    {
        return $this->contractExtension;
    }

    /**
     * Sets a new contractExtension
     *
     * ASBIE
     *  Procurement Project. Contract Extension
     *  The contract extension for this tendering process.
     *  0..1
     *  Procurement Project
     *  Contract Extension
     *  Contract Extension
     *  Contract Extension
     *
     * @param \UBL\Common\CAC\ContractExtension $contractExtension
     * @return self
     */
    public function setContractExtension(?\UBL\Common\CAC\ContractExtension $contractExtension = null)
    {
        $this->contractExtension = $contractExtension;
        return $this;
    }

    /**
     * Adds as requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @return self
     * @param \UBL\Common\CAC\RequestForTenderLine $requestForTenderLine
     */
    public function addToRequestForTenderLine(\UBL\Common\CAC\RequestForTenderLine $requestForTenderLine)
    {
        $this->requestForTenderLine[] = $requestForTenderLine;
        return $this;
    }

    /**
     * isset requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestForTenderLine($index)
    {
        return isset($this->requestForTenderLine[$index]);
    }

    /**
     * unset requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestForTenderLine($index)
    {
        unset($this->requestForTenderLine[$index]);
    }

    /**
     * Gets as requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @return \UBL\Common\CAC\RequestForTenderLine[]
     */
    public function getRequestForTenderLine()
    {
        return $this->requestForTenderLine;
    }

    /**
     * Sets a new requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param \UBL\Common\CAC\RequestForTenderLine[] $requestForTenderLine
     * @return self
     */
    public function setRequestForTenderLine(?array $requestForTenderLine = null)
    {
        $this->requestForTenderLine = $requestForTenderLine;
        return $this;
    }
}


