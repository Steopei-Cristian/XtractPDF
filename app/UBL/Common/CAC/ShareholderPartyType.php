<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ShareholderPartyType
 *
 * ABIE
 *  Shareholder Party. Details
 *  A class to describe a shareholder party.
 *  Shareholder Party
 * XSD Type: ShareholderPartyType
 */
class ShareholderPartyType
{
    /**
     * BBIE
     *  Shareholder Party. Partecipation. Percent
     *  The shareholder participation, expressed as a percentage.
     *  0..1
     *  Shareholder Party
     *  Partecipation
     *  Percent
     *  Percent. Type
     *
     * @var \App\UBL\Common\CBC\PartecipationPercent $partecipationPercent
     */
    private $partecipationPercent = null;

    /**
     * ASBIE
     *  Shareholder Party. Party
     *  The shareholder party.
     *  0..1
     *  Shareholder Party
     *  Party
     *  Party
     *  Party
     *
     * @var \App\UBL\Common\CAC\Party $party
     */
    private $party = null;

    /**
     * Gets as partecipationPercent
     *
     * BBIE
     *  Shareholder Party. Partecipation. Percent
     *  The shareholder participation, expressed as a percentage.
     *  0..1
     *  Shareholder Party
     *  Partecipation
     *  Percent
     *  Percent. Type
     *
     * @return \App\UBL\Common\CBC\PartecipationPercent
     */
    public function getPartecipationPercent()
    {
        return $this->partecipationPercent;
    }

    /**
     * Sets a new partecipationPercent
     *
     * BBIE
     *  Shareholder Party. Partecipation. Percent
     *  The shareholder participation, expressed as a percentage.
     *  0..1
     *  Shareholder Party
     *  Partecipation
     *  Percent
     *  Percent. Type
     *
     * @param \App\UBL\Common\CBC\PartecipationPercent $partecipationPercent
     * @return self
     */
    public function setPartecipationPercent(?\App\UBL\Common\CBC\PartecipationPercent $partecipationPercent = null)
    {
        $this->partecipationPercent = $partecipationPercent;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Shareholder Party. Party
     *  The shareholder party.
     *  0..1
     *  Shareholder Party
     *  Party
     *  Party
     *  Party
     *
     * @return \App\UBL\Common\CAC\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Shareholder Party. Party
     *  The shareholder party.
     *  0..1
     *  Shareholder Party
     *  Party
     *  Party
     *  Party
     *
     * @param \App\UBL\Common\CAC\Party $party
     * @return self
     */
    public function setParty(?\App\UBL\Common\CAC\Party $party = null)
    {
        $this->party = $party;
        return $this;
    }
}

