<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing PowerOfAttorneyType
 *
 * ABIE
 *  Power Of Attorney. Details
 *  A class to describe a power of attorney.
 *  Power Of Attorney
 * XSD Type: PowerOfAttorneyType
 */
class PowerOfAttorneyType
{
    /**
     * BBIE
     *  Power Of Attorney. Identifier
     *  An identifier for this power of attorney.
     *  0..1
     *  Power Of Attorney
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Power Of Attorney. Issue Date. Date
     *  The date on which this power of attorney was issued.
     *  0..1
     *  Power Of Attorney
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Power Of Attorney. Issue Time. Time
     *  The time at which this power of attorney was issued.
     *  0..1
     *  Power Of Attorney
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Power Of Attorney. Description. Text
     *  Text describing this power of attorney.
     *  0..n
     *  Power Of Attorney
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
     *  Power Of Attorney. Notary_ Party. Party
     *  The party notarizing this power of attorney.
     *  0..1
     *  Power Of Attorney
     *  Notary
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL\Common\CAC\NotaryParty $notaryParty
     */
    private $notaryParty = null;

    /**
     * ASBIE
     *  Power Of Attorney. Agent_ Party. Party
     *  The party who acts as an agent or fiduciary for the principal and who holds this power of attorney on behalf of the principal.
     *  1
     *  Power Of Attorney
     *  Agent
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL\Common\CAC\AgentParty $agentParty
     */
    private $agentParty = null;

    /**
     * ASBIE
     *  Power Of Attorney. Witness_ Party. Party
     *  An association to a WitnessParty.
     *  0..n
     *  Power Of Attorney
     *  Witness
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL\Common\CAC\WitnessParty[] $witnessParty
     */
    private $witnessParty = [
        
    ];

    /**
     * ASBIE
     *  Power Of Attorney. Mandate_ Document Reference. Document Reference
     *  A reference to a mandate associated with this power of attorney.
     *  0..n
     *  Power Of Attorney
     *  Mandate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL\Common\CAC\MandateDocumentReference[] $mandateDocumentReference
     */
    private $mandateDocumentReference = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Power Of Attorney. Identifier
     *  An identifier for this power of attorney.
     *  0..1
     *  Power Of Attorney
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
     *  Power Of Attorney. Identifier
     *  An identifier for this power of attorney.
     *  0..1
     *  Power Of Attorney
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
     * Gets as issueDate
     *
     * BBIE
     *  Power Of Attorney. Issue Date. Date
     *  The date on which this power of attorney was issued.
     *  0..1
     *  Power Of Attorney
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Power Of Attorney. Issue Date. Date
     *  The date on which this power of attorney was issued.
     *  0..1
     *  Power Of Attorney
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(?\DateTime $issueDate = null)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Power Of Attorney. Issue Time. Time
     *  The time at which this power of attorney was issued.
     *  0..1
     *  Power Of Attorney
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * BBIE
     *  Power Of Attorney. Issue Time. Time
     *  The time at which this power of attorney was issued.
     *  0..1
     *  Power Of Attorney
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(?\DateTime $issueTime = null)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Power Of Attorney. Description. Text
     *  Text describing this power of attorney.
     *  0..n
     *  Power Of Attorney
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
     *  Power Of Attorney. Description. Text
     *  Text describing this power of attorney.
     *  0..n
     *  Power Of Attorney
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
     *  Power Of Attorney. Description. Text
     *  Text describing this power of attorney.
     *  0..n
     *  Power Of Attorney
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
     *  Power Of Attorney. Description. Text
     *  Text describing this power of attorney.
     *  0..n
     *  Power Of Attorney
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
     *  Power Of Attorney. Description. Text
     *  Text describing this power of attorney.
     *  0..n
     *  Power Of Attorney
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
     * Gets as notaryParty
     *
     * ASBIE
     *  Power Of Attorney. Notary_ Party. Party
     *  The party notarizing this power of attorney.
     *  0..1
     *  Power Of Attorney
     *  Notary
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL\Common\CAC\NotaryParty
     */
    public function getNotaryParty()
    {
        return $this->notaryParty;
    }

    /**
     * Sets a new notaryParty
     *
     * ASBIE
     *  Power Of Attorney. Notary_ Party. Party
     *  The party notarizing this power of attorney.
     *  0..1
     *  Power Of Attorney
     *  Notary
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL\Common\CAC\NotaryParty $notaryParty
     * @return self
     */
    public function setNotaryParty(?\UBL\Common\CAC\NotaryParty $notaryParty = null)
    {
        $this->notaryParty = $notaryParty;
        return $this;
    }

    /**
     * Gets as agentParty
     *
     * ASBIE
     *  Power Of Attorney. Agent_ Party. Party
     *  The party who acts as an agent or fiduciary for the principal and who holds this power of attorney on behalf of the principal.
     *  1
     *  Power Of Attorney
     *  Agent
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL\Common\CAC\AgentParty
     */
    public function getAgentParty()
    {
        return $this->agentParty;
    }

    /**
     * Sets a new agentParty
     *
     * ASBIE
     *  Power Of Attorney. Agent_ Party. Party
     *  The party who acts as an agent or fiduciary for the principal and who holds this power of attorney on behalf of the principal.
     *  1
     *  Power Of Attorney
     *  Agent
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL\Common\CAC\AgentParty $agentParty
     * @return self
     */
    public function setAgentParty(\UBL\Common\CAC\AgentParty $agentParty)
    {
        $this->agentParty = $agentParty;
        return $this;
    }

    /**
     * Adds as witnessParty
     *
     * ASBIE
     *  Power Of Attorney. Witness_ Party. Party
     *  An association to a WitnessParty.
     *  0..n
     *  Power Of Attorney
     *  Witness
     *  Party
     *  Party
     *  Party
     *
     * @return self
     * @param \UBL\Common\CAC\WitnessParty $witnessParty
     */
    public function addToWitnessParty(\UBL\Common\CAC\WitnessParty $witnessParty)
    {
        $this->witnessParty[] = $witnessParty;
        return $this;
    }

    /**
     * isset witnessParty
     *
     * ASBIE
     *  Power Of Attorney. Witness_ Party. Party
     *  An association to a WitnessParty.
     *  0..n
     *  Power Of Attorney
     *  Witness
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWitnessParty($index)
    {
        return isset($this->witnessParty[$index]);
    }

    /**
     * unset witnessParty
     *
     * ASBIE
     *  Power Of Attorney. Witness_ Party. Party
     *  An association to a WitnessParty.
     *  0..n
     *  Power Of Attorney
     *  Witness
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWitnessParty($index)
    {
        unset($this->witnessParty[$index]);
    }

    /**
     * Gets as witnessParty
     *
     * ASBIE
     *  Power Of Attorney. Witness_ Party. Party
     *  An association to a WitnessParty.
     *  0..n
     *  Power Of Attorney
     *  Witness
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL\Common\CAC\WitnessParty[]
     */
    public function getWitnessParty()
    {
        return $this->witnessParty;
    }

    /**
     * Sets a new witnessParty
     *
     * ASBIE
     *  Power Of Attorney. Witness_ Party. Party
     *  An association to a WitnessParty.
     *  0..n
     *  Power Of Attorney
     *  Witness
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL\Common\CAC\WitnessParty[] $witnessParty
     * @return self
     */
    public function setWitnessParty(?array $witnessParty = null)
    {
        $this->witnessParty = $witnessParty;
        return $this;
    }

    /**
     * Adds as mandateDocumentReference
     *
     * ASBIE
     *  Power Of Attorney. Mandate_ Document Reference. Document Reference
     *  A reference to a mandate associated with this power of attorney.
     *  0..n
     *  Power Of Attorney
     *  Mandate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \UBL\Common\CAC\MandateDocumentReference $mandateDocumentReference
     */
    public function addToMandateDocumentReference(\UBL\Common\CAC\MandateDocumentReference $mandateDocumentReference)
    {
        $this->mandateDocumentReference[] = $mandateDocumentReference;
        return $this;
    }

    /**
     * isset mandateDocumentReference
     *
     * ASBIE
     *  Power Of Attorney. Mandate_ Document Reference. Document Reference
     *  A reference to a mandate associated with this power of attorney.
     *  0..n
     *  Power Of Attorney
     *  Mandate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMandateDocumentReference($index)
    {
        return isset($this->mandateDocumentReference[$index]);
    }

    /**
     * unset mandateDocumentReference
     *
     * ASBIE
     *  Power Of Attorney. Mandate_ Document Reference. Document Reference
     *  A reference to a mandate associated with this power of attorney.
     *  0..n
     *  Power Of Attorney
     *  Mandate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMandateDocumentReference($index)
    {
        unset($this->mandateDocumentReference[$index]);
    }

    /**
     * Gets as mandateDocumentReference
     *
     * ASBIE
     *  Power Of Attorney. Mandate_ Document Reference. Document Reference
     *  A reference to a mandate associated with this power of attorney.
     *  0..n
     *  Power Of Attorney
     *  Mandate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL\Common\CAC\MandateDocumentReference[]
     */
    public function getMandateDocumentReference()
    {
        return $this->mandateDocumentReference;
    }

    /**
     * Sets a new mandateDocumentReference
     *
     * ASBIE
     *  Power Of Attorney. Mandate_ Document Reference. Document Reference
     *  A reference to a mandate associated with this power of attorney.
     *  0..n
     *  Power Of Attorney
     *  Mandate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL\Common\CAC\MandateDocumentReference[] $mandateDocumentReference
     * @return self
     */
    public function setMandateDocumentReference(?array $mandateDocumentReference = null)
    {
        $this->mandateDocumentReference = $mandateDocumentReference;
        return $this;
    }
}


