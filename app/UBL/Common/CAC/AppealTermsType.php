<?php

namespace UBL\Common\CAC;

/**
 * Class representing AppealTermsType
 *
 * ABIE
 *  Appeal Terms. Details
 *  A class to describe the terms and conditions, set by the contracting authority, under which an appeal can be lodged for a tender award.
 *  Appeal Terms
 * XSD Type: AppealTermsType
 */
class AppealTermsType
{
    /**
     * BBIE
     *  Appeal Terms. Description. Text
     *  Text describing the terms of an appeal.
     *  0..n
     *  Appeal Terms
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
     *  Appeal Terms. Presentation_ Period. Period
     *  The period during which an appeal can be presented.
     *  0..1
     *  Appeal Terms
     *  Presentation
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL\Common\CAC\PresentationPeriod $presentationPeriod
     */
    private $presentationPeriod = null;

    /**
     * ASBIE
     *  Appeal Terms. Appeal Information_ Party. Party
     *  The party presenting the information for an appeal.
     *  0..1
     *  Appeal Terms
     *  Appeal Information
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL\Common\CAC\AppealInformationParty $appealInformationParty
     */
    private $appealInformationParty = null;

    /**
     * ASBIE
     *  Appeal Terms. Appeal Receiver_ Party. Party
     *  The party to whom an appeal should be presented.
     *  0..1
     *  Appeal Terms
     *  Appeal Receiver
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL\Common\CAC\AppealReceiverParty $appealReceiverParty
     */
    private $appealReceiverParty = null;

    /**
     * ASBIE
     *  Appeal Terms. Mediation_ Party. Party
     *  The party that has been appointed to mediate any appeal.
     *  0..1
     *  Appeal Terms
     *  Mediation
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL\Common\CAC\MediationParty $mediationParty
     */
    private $mediationParty = null;

    /**
     * Adds as description
     *
     * BBIE
     *  Appeal Terms. Description. Text
     *  Text describing the terms of an appeal.
     *  0..n
     *  Appeal Terms
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
     *  Appeal Terms. Description. Text
     *  Text describing the terms of an appeal.
     *  0..n
     *  Appeal Terms
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
     *  Appeal Terms. Description. Text
     *  Text describing the terms of an appeal.
     *  0..n
     *  Appeal Terms
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
     *  Appeal Terms. Description. Text
     *  Text describing the terms of an appeal.
     *  0..n
     *  Appeal Terms
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
     *  Appeal Terms. Description. Text
     *  Text describing the terms of an appeal.
     *  0..n
     *  Appeal Terms
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
     * Gets as presentationPeriod
     *
     * ASBIE
     *  Appeal Terms. Presentation_ Period. Period
     *  The period during which an appeal can be presented.
     *  0..1
     *  Appeal Terms
     *  Presentation
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL\Common\CAC\PresentationPeriod
     */
    public function getPresentationPeriod()
    {
        return $this->presentationPeriod;
    }

    /**
     * Sets a new presentationPeriod
     *
     * ASBIE
     *  Appeal Terms. Presentation_ Period. Period
     *  The period during which an appeal can be presented.
     *  0..1
     *  Appeal Terms
     *  Presentation
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL\Common\CAC\PresentationPeriod $presentationPeriod
     * @return self
     */
    public function setPresentationPeriod(?\UBL\Common\CAC\PresentationPeriod $presentationPeriod = null)
    {
        $this->presentationPeriod = $presentationPeriod;
        return $this;
    }

    /**
     * Gets as appealInformationParty
     *
     * ASBIE
     *  Appeal Terms. Appeal Information_ Party. Party
     *  The party presenting the information for an appeal.
     *  0..1
     *  Appeal Terms
     *  Appeal Information
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL\Common\CAC\AppealInformationParty
     */
    public function getAppealInformationParty()
    {
        return $this->appealInformationParty;
    }

    /**
     * Sets a new appealInformationParty
     *
     * ASBIE
     *  Appeal Terms. Appeal Information_ Party. Party
     *  The party presenting the information for an appeal.
     *  0..1
     *  Appeal Terms
     *  Appeal Information
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL\Common\CAC\AppealInformationParty $appealInformationParty
     * @return self
     */
    public function setAppealInformationParty(?\UBL\Common\CAC\AppealInformationParty $appealInformationParty = null)
    {
        $this->appealInformationParty = $appealInformationParty;
        return $this;
    }

    /**
     * Gets as appealReceiverParty
     *
     * ASBIE
     *  Appeal Terms. Appeal Receiver_ Party. Party
     *  The party to whom an appeal should be presented.
     *  0..1
     *  Appeal Terms
     *  Appeal Receiver
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL\Common\CAC\AppealReceiverParty
     */
    public function getAppealReceiverParty()
    {
        return $this->appealReceiverParty;
    }

    /**
     * Sets a new appealReceiverParty
     *
     * ASBIE
     *  Appeal Terms. Appeal Receiver_ Party. Party
     *  The party to whom an appeal should be presented.
     *  0..1
     *  Appeal Terms
     *  Appeal Receiver
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL\Common\CAC\AppealReceiverParty $appealReceiverParty
     * @return self
     */
    public function setAppealReceiverParty(?\UBL\Common\CAC\AppealReceiverParty $appealReceiverParty = null)
    {
        $this->appealReceiverParty = $appealReceiverParty;
        return $this;
    }

    /**
     * Gets as mediationParty
     *
     * ASBIE
     *  Appeal Terms. Mediation_ Party. Party
     *  The party that has been appointed to mediate any appeal.
     *  0..1
     *  Appeal Terms
     *  Mediation
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL\Common\CAC\MediationParty
     */
    public function getMediationParty()
    {
        return $this->mediationParty;
    }

    /**
     * Sets a new mediationParty
     *
     * ASBIE
     *  Appeal Terms. Mediation_ Party. Party
     *  The party that has been appointed to mediate any appeal.
     *  0..1
     *  Appeal Terms
     *  Mediation
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL\Common\CAC\MediationParty $mediationParty
     * @return self
     */
    public function setMediationParty(?\UBL\Common\CAC\MediationParty $mediationParty = null)
    {
        $this->mediationParty = $mediationParty;
        return $this;
    }
}

