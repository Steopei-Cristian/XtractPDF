<?php

namespace UBL\Common\CAC;

/**
 * Class representing CompletedTaskType
 *
 * ABIE
 *  Completed Task. Details
 *  A class to describe the completion of a specific task in the tendering process.
 *  Completed Task
 * XSD Type: CompletedTaskType
 */
class CompletedTaskType
{
    /**
     * BBIE
     *  Completed Task. Annual_ Average. Amount
     *  The average monetary amount of a task such as this completed task.
     *  0..1
     *  Completed Task
     *  Annual
     *  Average
     *  Amount
     *  Amount. Type
     *
     * @var \UBL\Common\CBC\AnnualAverageAmount $annualAverageAmount
     */
    private $annualAverageAmount = null;

    /**
     * BBIE
     *  Completed Task. Total Task. Amount
     *  The actual total monetary amount of this completed task.
     *  0..1
     *  Completed Task
     *  Total Task
     *  Amount
     *  Amount. Type
     *
     * @var \UBL\Common\CBC\TotalTaskAmount $totalTaskAmount
     */
    private $totalTaskAmount = null;

    /**
     * BBIE
     *  Completed Task. Party Capacity. Amount
     *  A monetary amount corresponding to the financial capacity of the party that carried out this completed task.
     *  0..1
     *  Completed Task
     *  Party Capacity
     *  Amount
     *  Amount. Type
     *
     * @var \UBL\Common\CBC\PartyCapacityAmount $partyCapacityAmount
     */
    private $partyCapacityAmount = null;

    /**
     * BBIE
     *  Completed Task. Description. Text
     *  Text describing this completed task.
     *  0..n
     *  Completed Task
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
     *  Completed Task. Evidence Supplied
     *  The evidence justifying a designation of "complete" for this task.
     *  0..n
     *  Completed Task
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @var \UBL\Common\CAC\EvidenceSupplied[] $evidenceSupplied
     */
    private $evidenceSupplied = [
        
    ];

    /**
     * ASBIE
     *  Completed Task. Period
     *  The period in which this completed task was performed.
     *  0..1
     *  Completed Task
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL\Common\CAC\Period $period
     */
    private $period = null;

    /**
     * ASBIE
     *  Completed Task. Recipient_ Customer Party. Customer Party
     *  The original customer for this completed task.
     *  0..1
     *  Completed Task
     *  Recipient
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \UBL\Common\CAC\RecipientCustomerParty $recipientCustomerParty
     */
    private $recipientCustomerParty = null;

    /**
     * Gets as annualAverageAmount
     *
     * BBIE
     *  Completed Task. Annual_ Average. Amount
     *  The average monetary amount of a task such as this completed task.
     *  0..1
     *  Completed Task
     *  Annual
     *  Average
     *  Amount
     *  Amount. Type
     *
     * @return \UBL\Common\CBC\AnnualAverageAmount
     */
    public function getAnnualAverageAmount()
    {
        return $this->annualAverageAmount;
    }

    /**
     * Sets a new annualAverageAmount
     *
     * BBIE
     *  Completed Task. Annual_ Average. Amount
     *  The average monetary amount of a task such as this completed task.
     *  0..1
     *  Completed Task
     *  Annual
     *  Average
     *  Amount
     *  Amount. Type
     *
     * @param \UBL\Common\CBC\AnnualAverageAmount $annualAverageAmount
     * @return self
     */
    public function setAnnualAverageAmount(?\UBL\Common\CBC\AnnualAverageAmount $annualAverageAmount = null)
    {
        $this->annualAverageAmount = $annualAverageAmount;
        return $this;
    }

    /**
     * Gets as totalTaskAmount
     *
     * BBIE
     *  Completed Task. Total Task. Amount
     *  The actual total monetary amount of this completed task.
     *  0..1
     *  Completed Task
     *  Total Task
     *  Amount
     *  Amount. Type
     *
     * @return \UBL\Common\CBC\TotalTaskAmount
     */
    public function getTotalTaskAmount()
    {
        return $this->totalTaskAmount;
    }

    /**
     * Sets a new totalTaskAmount
     *
     * BBIE
     *  Completed Task. Total Task. Amount
     *  The actual total monetary amount of this completed task.
     *  0..1
     *  Completed Task
     *  Total Task
     *  Amount
     *  Amount. Type
     *
     * @param \UBL\Common\CBC\TotalTaskAmount $totalTaskAmount
     * @return self
     */
    public function setTotalTaskAmount(?\UBL\Common\CBC\TotalTaskAmount $totalTaskAmount = null)
    {
        $this->totalTaskAmount = $totalTaskAmount;
        return $this;
    }

    /**
     * Gets as partyCapacityAmount
     *
     * BBIE
     *  Completed Task. Party Capacity. Amount
     *  A monetary amount corresponding to the financial capacity of the party that carried out this completed task.
     *  0..1
     *  Completed Task
     *  Party Capacity
     *  Amount
     *  Amount. Type
     *
     * @return \UBL\Common\CBC\PartyCapacityAmount
     */
    public function getPartyCapacityAmount()
    {
        return $this->partyCapacityAmount;
    }

    /**
     * Sets a new partyCapacityAmount
     *
     * BBIE
     *  Completed Task. Party Capacity. Amount
     *  A monetary amount corresponding to the financial capacity of the party that carried out this completed task.
     *  0..1
     *  Completed Task
     *  Party Capacity
     *  Amount
     *  Amount. Type
     *
     * @param \UBL\Common\CBC\PartyCapacityAmount $partyCapacityAmount
     * @return self
     */
    public function setPartyCapacityAmount(?\UBL\Common\CBC\PartyCapacityAmount $partyCapacityAmount = null)
    {
        $this->partyCapacityAmount = $partyCapacityAmount;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Completed Task. Description. Text
     *  Text describing this completed task.
     *  0..n
     *  Completed Task
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
     *  Completed Task. Description. Text
     *  Text describing this completed task.
     *  0..n
     *  Completed Task
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
     *  Completed Task. Description. Text
     *  Text describing this completed task.
     *  0..n
     *  Completed Task
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
     *  Completed Task. Description. Text
     *  Text describing this completed task.
     *  0..n
     *  Completed Task
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
     *  Completed Task. Description. Text
     *  Text describing this completed task.
     *  0..n
     *  Completed Task
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
     * Adds as evidenceSupplied
     *
     * ASBIE
     *  Completed Task. Evidence Supplied
     *  The evidence justifying a designation of "complete" for this task.
     *  0..n
     *  Completed Task
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @return self
     * @param \UBL\Common\CAC\EvidenceSupplied $evidenceSupplied
     */
    public function addToEvidenceSupplied(\UBL\Common\CAC\EvidenceSupplied $evidenceSupplied)
    {
        $this->evidenceSupplied[] = $evidenceSupplied;
        return $this;
    }

    /**
     * isset evidenceSupplied
     *
     * ASBIE
     *  Completed Task. Evidence Supplied
     *  The evidence justifying a designation of "complete" for this task.
     *  0..n
     *  Completed Task
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidenceSupplied($index)
    {
        return isset($this->evidenceSupplied[$index]);
    }

    /**
     * unset evidenceSupplied
     *
     * ASBIE
     *  Completed Task. Evidence Supplied
     *  The evidence justifying a designation of "complete" for this task.
     *  0..n
     *  Completed Task
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidenceSupplied($index)
    {
        unset($this->evidenceSupplied[$index]);
    }

    /**
     * Gets as evidenceSupplied
     *
     * ASBIE
     *  Completed Task. Evidence Supplied
     *  The evidence justifying a designation of "complete" for this task.
     *  0..n
     *  Completed Task
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @return \UBL\Common\CAC\EvidenceSupplied[]
     */
    public function getEvidenceSupplied()
    {
        return $this->evidenceSupplied;
    }

    /**
     * Sets a new evidenceSupplied
     *
     * ASBIE
     *  Completed Task. Evidence Supplied
     *  The evidence justifying a designation of "complete" for this task.
     *  0..n
     *  Completed Task
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param \UBL\Common\CAC\EvidenceSupplied[] $evidenceSupplied
     * @return self
     */
    public function setEvidenceSupplied(?array $evidenceSupplied = null)
    {
        $this->evidenceSupplied = $evidenceSupplied;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Completed Task. Period
     *  The period in which this completed task was performed.
     *  0..1
     *  Completed Task
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL\Common\CAC\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Completed Task. Period
     *  The period in which this completed task was performed.
     *  0..1
     *  Completed Task
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL\Common\CAC\Period $period
     * @return self
     */
    public function setPeriod(?\UBL\Common\CAC\Period $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as recipientCustomerParty
     *
     * ASBIE
     *  Completed Task. Recipient_ Customer Party. Customer Party
     *  The original customer for this completed task.
     *  0..1
     *  Completed Task
     *  Recipient
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \UBL\Common\CAC\RecipientCustomerParty
     */
    public function getRecipientCustomerParty()
    {
        return $this->recipientCustomerParty;
    }

    /**
     * Sets a new recipientCustomerParty
     *
     * ASBIE
     *  Completed Task. Recipient_ Customer Party. Customer Party
     *  The original customer for this completed task.
     *  0..1
     *  Completed Task
     *  Recipient
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \UBL\Common\CAC\RecipientCustomerParty $recipientCustomerParty
     * @return self
     */
    public function setRecipientCustomerParty(?\UBL\Common\CAC\RecipientCustomerParty $recipientCustomerParty = null)
    {
        $this->recipientCustomerParty = $recipientCustomerParty;
        return $this;
    }
}

