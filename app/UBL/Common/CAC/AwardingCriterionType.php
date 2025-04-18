<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing AwardingCriterionType
 *
 * ABIE
 *  Awarding Criterion. Details
 *  A class to define a criterion from the contracting party that will be taken into account when awarding a contract. An awarding criterion can be objective, when it can be evaluated following a formula, or subjective, when human analysis is required.
 *  Awarding Criterion
 * XSD Type: AwardingCriterionType
 */
class AwardingCriterionType
{
    /**
     * BBIE
     *  Awarding Criterion. Identifier
     *  Identifies a specific awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Awarding Criterion. Awarding Criterion Type Code. Code
     *  A code used to define this awarding criterion. 
     *  0..1
     *  Awarding Criterion
     *  Awarding Criterion Type Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\AwardingCriterionTypeCode $awardingCriterionTypeCode
     */
    private $awardingCriterionTypeCode = null;

    /**
     * BBIE
     *  Awarding Criterion. Description. Text
     *  A description of the awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Awarding Criterion. Weight Numeric. Numeric
     *  A number defining the comparative weighting assigned to this awarding criterion, to enable formulaic evaluation.
     *  0..1
     *  Awarding Criterion
     *  Weight Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @var \App\UBL\Common\CBC\WeightNumeric $weightNumeric
     */
    private $weightNumeric = null;

    /**
     * BBIE
     *  Awarding Criterion. Weight. Text
     *  A description of the comparative weighting for this awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Weight
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Weight[] $weight
     */
    private $weight = [
        
    ];

    /**
     * BBIE
     *  Awarding Criterion. Calculation Expression. Text
     *  The mathematical expression that will be used to evaluate this criterion.
     *  0..n
     *  Awarding Criterion
     *  Calculation Expression
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\CalculationExpression[] $calculationExpression
     */
    private $calculationExpression = [
        
    ];

    /**
     * BBIE
     *  Awarding Criterion. Calculation Expression Code. Code
     *  A code identifying the mathematical expression that will be used to evaluate this criterion.
     *  0..1
     *  Awarding Criterion
     *  Calculation Expression Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\CalculationExpressionCode $calculationExpressionCode
     */
    private $calculationExpressionCode = null;

    /**
     * BBIE
     *  Awarding Criterion. Minimum_ Quantity. Quantity
     *  The minimum quantity for an awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \App\UBL\Common\CBC\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * BBIE
     *  Awarding Criterion. Maximum_ Quantity. Quantity
     *  The maximum quantity for an awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \App\UBL\Common\CBC\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * BBIE
     *  Awarding Criterion. Minimum_ Amount. Amount
     *  The minimum monetary amount for an awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \App\UBL\Common\CBC\MinimumAmount $minimumAmount
     */
    private $minimumAmount = null;

    /**
     * BBIE
     *  Awarding Criterion. Maximum_ Amount. Amount
     *  The maximum monetary amount for an awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \App\UBL\Common\CBC\MaximumAmount $maximumAmount
     */
    private $maximumAmount = null;

    /**
     * BBIE
     *  Awarding Criterion. Minimum Improvement Bid. Text
     *  Describes the minimum improvement bid for this awarding criterion when used in an auction.
     *  0..n
     *  Awarding Criterion
     *  Minimum Improvement Bid
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\MinimumImprovementBid[] $minimumImprovementBid
     */
    private $minimumImprovementBid = [
        
    ];

    /**
     * ASBIE
     *  Awarding Criterion. Subordinate_ Awarding Criterion. Awarding Criterion
     *  Defines any subsidiary awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Subordinate
     *  Awarding Criterion
     *  Awarding Criterion
     *  Awarding Criterion
     *
     * @var \App\UBL\Common\CAC\SubordinateAwardingCriterion[] $subordinateAwardingCriterion
     */
    private $subordinateAwardingCriterion = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Awarding Criterion. Identifier
     *  Identifies a specific awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Awarding Criterion. Identifier
     *  Identifies a specific awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Gets as awardingCriterionTypeCode
     *
     * BBIE
     *  Awarding Criterion. Awarding Criterion Type Code. Code
     *  A code used to define this awarding criterion. 
     *  0..1
     *  Awarding Criterion
     *  Awarding Criterion Type Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\AwardingCriterionTypeCode
     */
    public function getAwardingCriterionTypeCode()
    {
        return $this->awardingCriterionTypeCode;
    }

    /**
     * Sets a new awardingCriterionTypeCode
     *
     * BBIE
     *  Awarding Criterion. Awarding Criterion Type Code. Code
     *  A code used to define this awarding criterion. 
     *  0..1
     *  Awarding Criterion
     *  Awarding Criterion Type Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\AwardingCriterionTypeCode $awardingCriterionTypeCode
     * @return self
     */
    public function setAwardingCriterionTypeCode(?\App\UBL\Common\CBC\AwardingCriterionTypeCode $awardingCriterionTypeCode = null)
    {
        $this->awardingCriterionTypeCode = $awardingCriterionTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Awarding Criterion. Description. Text
     *  A description of the awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\Description $description
     */
    public function addToDescription(\App\UBL\Common\CBC\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Awarding Criterion. Description. Text
     *  A description of the awarding criterion.
     *  0..n
     *  Awarding Criterion
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
     *  Awarding Criterion. Description. Text
     *  A description of the awarding criterion.
     *  0..n
     *  Awarding Criterion
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
     *  Awarding Criterion. Description. Text
     *  A description of the awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Awarding Criterion. Description. Text
     *  A description of the awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as weightNumeric
     *
     * BBIE
     *  Awarding Criterion. Weight Numeric. Numeric
     *  A number defining the comparative weighting assigned to this awarding criterion, to enable formulaic evaluation.
     *  0..1
     *  Awarding Criterion
     *  Weight Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @return \App\UBL\Common\CBC\WeightNumeric
     */
    public function getWeightNumeric()
    {
        return $this->weightNumeric;
    }

    /**
     * Sets a new weightNumeric
     *
     * BBIE
     *  Awarding Criterion. Weight Numeric. Numeric
     *  A number defining the comparative weighting assigned to this awarding criterion, to enable formulaic evaluation.
     *  0..1
     *  Awarding Criterion
     *  Weight Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @param \App\UBL\Common\CBC\WeightNumeric $weightNumeric
     * @return self
     */
    public function setWeightNumeric(?\App\UBL\Common\CBC\WeightNumeric $weightNumeric = null)
    {
        $this->weightNumeric = $weightNumeric;
        return $this;
    }

    /**
     * Adds as weight
     *
     * BBIE
     *  Awarding Criterion. Weight. Text
     *  A description of the comparative weighting for this awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Weight
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\Weight $weight
     */
    public function addToWeight(\App\UBL\Common\CBC\Weight $weight)
    {
        $this->weight[] = $weight;
        return $this;
    }

    /**
     * isset weight
     *
     * BBIE
     *  Awarding Criterion. Weight. Text
     *  A description of the comparative weighting for this awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Weight
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWeight($index)
    {
        return isset($this->weight[$index]);
    }

    /**
     * unset weight
     *
     * BBIE
     *  Awarding Criterion. Weight. Text
     *  A description of the comparative weighting for this awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Weight
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWeight($index)
    {
        unset($this->weight[$index]);
    }

    /**
     * Gets as weight
     *
     * BBIE
     *  Awarding Criterion. Weight. Text
     *  A description of the comparative weighting for this awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Weight
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\Weight[]
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * BBIE
     *  Awarding Criterion. Weight. Text
     *  A description of the comparative weighting for this awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Weight
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\Weight[] $weight
     * @return self
     */
    public function setWeight(?array $weight = null)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Adds as calculationExpression
     *
     * BBIE
     *  Awarding Criterion. Calculation Expression. Text
     *  The mathematical expression that will be used to evaluate this criterion.
     *  0..n
     *  Awarding Criterion
     *  Calculation Expression
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\CalculationExpression $calculationExpression
     */
    public function addToCalculationExpression(\App\UBL\Common\CBC\CalculationExpression $calculationExpression)
    {
        $this->calculationExpression[] = $calculationExpression;
        return $this;
    }

    /**
     * isset calculationExpression
     *
     * BBIE
     *  Awarding Criterion. Calculation Expression. Text
     *  The mathematical expression that will be used to evaluate this criterion.
     *  0..n
     *  Awarding Criterion
     *  Calculation Expression
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCalculationExpression($index)
    {
        return isset($this->calculationExpression[$index]);
    }

    /**
     * unset calculationExpression
     *
     * BBIE
     *  Awarding Criterion. Calculation Expression. Text
     *  The mathematical expression that will be used to evaluate this criterion.
     *  0..n
     *  Awarding Criterion
     *  Calculation Expression
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCalculationExpression($index)
    {
        unset($this->calculationExpression[$index]);
    }

    /**
     * Gets as calculationExpression
     *
     * BBIE
     *  Awarding Criterion. Calculation Expression. Text
     *  The mathematical expression that will be used to evaluate this criterion.
     *  0..n
     *  Awarding Criterion
     *  Calculation Expression
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\CalculationExpression[]
     */
    public function getCalculationExpression()
    {
        return $this->calculationExpression;
    }

    /**
     * Sets a new calculationExpression
     *
     * BBIE
     *  Awarding Criterion. Calculation Expression. Text
     *  The mathematical expression that will be used to evaluate this criterion.
     *  0..n
     *  Awarding Criterion
     *  Calculation Expression
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\CalculationExpression[] $calculationExpression
     * @return self
     */
    public function setCalculationExpression(?array $calculationExpression = null)
    {
        $this->calculationExpression = $calculationExpression;
        return $this;
    }

    /**
     * Gets as calculationExpressionCode
     *
     * BBIE
     *  Awarding Criterion. Calculation Expression Code. Code
     *  A code identifying the mathematical expression that will be used to evaluate this criterion.
     *  0..1
     *  Awarding Criterion
     *  Calculation Expression Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\CalculationExpressionCode
     */
    public function getCalculationExpressionCode()
    {
        return $this->calculationExpressionCode;
    }

    /**
     * Sets a new calculationExpressionCode
     *
     * BBIE
     *  Awarding Criterion. Calculation Expression Code. Code
     *  A code identifying the mathematical expression that will be used to evaluate this criterion.
     *  0..1
     *  Awarding Criterion
     *  Calculation Expression Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\CalculationExpressionCode $calculationExpressionCode
     * @return self
     */
    public function setCalculationExpressionCode(?\App\UBL\Common\CBC\CalculationExpressionCode $calculationExpressionCode = null)
    {
        $this->calculationExpressionCode = $calculationExpressionCode;
        return $this;
    }

    /**
     * Gets as minimumQuantity
     *
     * BBIE
     *  Awarding Criterion. Minimum_ Quantity. Quantity
     *  The minimum quantity for an awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \App\UBL\Common\CBC\MinimumQuantity
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Sets a new minimumQuantity
     *
     * BBIE
     *  Awarding Criterion. Minimum_ Quantity. Quantity
     *  The minimum quantity for an awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \App\UBL\Common\CBC\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(?\App\UBL\Common\CBC\MinimumQuantity $minimumQuantity = null)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Gets as maximumQuantity
     *
     * BBIE
     *  Awarding Criterion. Maximum_ Quantity. Quantity
     *  The maximum quantity for an awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \App\UBL\Common\CBC\MaximumQuantity
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * BBIE
     *  Awarding Criterion. Maximum_ Quantity. Quantity
     *  The maximum quantity for an awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \App\UBL\Common\CBC\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(?\App\UBL\Common\CBC\MaximumQuantity $maximumQuantity = null)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Gets as minimumAmount
     *
     * BBIE
     *  Awarding Criterion. Minimum_ Amount. Amount
     *  The minimum monetary amount for an awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \App\UBL\Common\CBC\MinimumAmount
     */
    public function getMinimumAmount()
    {
        return $this->minimumAmount;
    }

    /**
     * Sets a new minimumAmount
     *
     * BBIE
     *  Awarding Criterion. Minimum_ Amount. Amount
     *  The minimum monetary amount for an awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \App\UBL\Common\CBC\MinimumAmount $minimumAmount
     * @return self
     */
    public function setMinimumAmount(?\App\UBL\Common\CBC\MinimumAmount $minimumAmount = null)
    {
        $this->minimumAmount = $minimumAmount;
        return $this;
    }

    /**
     * Gets as maximumAmount
     *
     * BBIE
     *  Awarding Criterion. Maximum_ Amount. Amount
     *  The maximum monetary amount for an awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \App\UBL\Common\CBC\MaximumAmount
     */
    public function getMaximumAmount()
    {
        return $this->maximumAmount;
    }

    /**
     * Sets a new maximumAmount
     *
     * BBIE
     *  Awarding Criterion. Maximum_ Amount. Amount
     *  The maximum monetary amount for an awarding criterion.
     *  0..1
     *  Awarding Criterion
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \App\UBL\Common\CBC\MaximumAmount $maximumAmount
     * @return self
     */
    public function setMaximumAmount(?\App\UBL\Common\CBC\MaximumAmount $maximumAmount = null)
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }

    /**
     * Adds as minimumImprovementBid
     *
     * BBIE
     *  Awarding Criterion. Minimum Improvement Bid. Text
     *  Describes the minimum improvement bid for this awarding criterion when used in an auction.
     *  0..n
     *  Awarding Criterion
     *  Minimum Improvement Bid
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\MinimumImprovementBid $minimumImprovementBid
     */
    public function addToMinimumImprovementBid(\App\UBL\Common\CBC\MinimumImprovementBid $minimumImprovementBid)
    {
        $this->minimumImprovementBid[] = $minimumImprovementBid;
        return $this;
    }

    /**
     * isset minimumImprovementBid
     *
     * BBIE
     *  Awarding Criterion. Minimum Improvement Bid. Text
     *  Describes the minimum improvement bid for this awarding criterion when used in an auction.
     *  0..n
     *  Awarding Criterion
     *  Minimum Improvement Bid
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMinimumImprovementBid($index)
    {
        return isset($this->minimumImprovementBid[$index]);
    }

    /**
     * unset minimumImprovementBid
     *
     * BBIE
     *  Awarding Criterion. Minimum Improvement Bid. Text
     *  Describes the minimum improvement bid for this awarding criterion when used in an auction.
     *  0..n
     *  Awarding Criterion
     *  Minimum Improvement Bid
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMinimumImprovementBid($index)
    {
        unset($this->minimumImprovementBid[$index]);
    }

    /**
     * Gets as minimumImprovementBid
     *
     * BBIE
     *  Awarding Criterion. Minimum Improvement Bid. Text
     *  Describes the minimum improvement bid for this awarding criterion when used in an auction.
     *  0..n
     *  Awarding Criterion
     *  Minimum Improvement Bid
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\MinimumImprovementBid[]
     */
    public function getMinimumImprovementBid()
    {
        return $this->minimumImprovementBid;
    }

    /**
     * Sets a new minimumImprovementBid
     *
     * BBIE
     *  Awarding Criterion. Minimum Improvement Bid. Text
     *  Describes the minimum improvement bid for this awarding criterion when used in an auction.
     *  0..n
     *  Awarding Criterion
     *  Minimum Improvement Bid
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\MinimumImprovementBid[] $minimumImprovementBid
     * @return self
     */
    public function setMinimumImprovementBid(?array $minimumImprovementBid = null)
    {
        $this->minimumImprovementBid = $minimumImprovementBid;
        return $this;
    }

    /**
     * Adds as subordinateAwardingCriterion
     *
     * ASBIE
     *  Awarding Criterion. Subordinate_ Awarding Criterion. Awarding Criterion
     *  Defines any subsidiary awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Subordinate
     *  Awarding Criterion
     *  Awarding Criterion
     *  Awarding Criterion
     *
     * @return self
     * @param \App\UBL\Common\CAC\SubordinateAwardingCriterion $subordinateAwardingCriterion
     */
    public function addToSubordinateAwardingCriterion(\App\UBL\Common\CAC\SubordinateAwardingCriterion $subordinateAwardingCriterion)
    {
        $this->subordinateAwardingCriterion[] = $subordinateAwardingCriterion;
        return $this;
    }

    /**
     * isset subordinateAwardingCriterion
     *
     * ASBIE
     *  Awarding Criterion. Subordinate_ Awarding Criterion. Awarding Criterion
     *  Defines any subsidiary awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Subordinate
     *  Awarding Criterion
     *  Awarding Criterion
     *  Awarding Criterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubordinateAwardingCriterion($index)
    {
        return isset($this->subordinateAwardingCriterion[$index]);
    }

    /**
     * unset subordinateAwardingCriterion
     *
     * ASBIE
     *  Awarding Criterion. Subordinate_ Awarding Criterion. Awarding Criterion
     *  Defines any subsidiary awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Subordinate
     *  Awarding Criterion
     *  Awarding Criterion
     *  Awarding Criterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubordinateAwardingCriterion($index)
    {
        unset($this->subordinateAwardingCriterion[$index]);
    }

    /**
     * Gets as subordinateAwardingCriterion
     *
     * ASBIE
     *  Awarding Criterion. Subordinate_ Awarding Criterion. Awarding Criterion
     *  Defines any subsidiary awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Subordinate
     *  Awarding Criterion
     *  Awarding Criterion
     *  Awarding Criterion
     *
     * @return \App\UBL\Common\CAC\SubordinateAwardingCriterion[]
     */
    public function getSubordinateAwardingCriterion()
    {
        return $this->subordinateAwardingCriterion;
    }

    /**
     * Sets a new subordinateAwardingCriterion
     *
     * ASBIE
     *  Awarding Criterion. Subordinate_ Awarding Criterion. Awarding Criterion
     *  Defines any subsidiary awarding criterion.
     *  0..n
     *  Awarding Criterion
     *  Subordinate
     *  Awarding Criterion
     *  Awarding Criterion
     *  Awarding Criterion
     *
     * @param \App\UBL\Common\CAC\SubordinateAwardingCriterion[] $subordinateAwardingCriterion
     * @return self
     */
    public function setSubordinateAwardingCriterion(?array $subordinateAwardingCriterion = null)
    {
        $this->subordinateAwardingCriterion = $subordinateAwardingCriterion;
        return $this;
    }
}

