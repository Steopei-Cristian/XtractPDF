<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing HazardousItemType
 *
 * ABIE
 *  Hazardous Item. Details
 *  A class to describe a hazardous item.
 *  Hazardous Item
 * XSD Type: HazardousItemType
 */
class HazardousItemType
{
    /**
     * BBIE
     *  Hazardous Item. Identifier
     *  An identifier for this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Round Up
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Hazardous Item. Placard Notation. Text
     *  Text of the placard notation corresponding to the hazard class of this hazardous item. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Placard Notation
     *  Text
     *  Text. Type
     *  5.1
     *
     * @var \UBL\Common\CBC\PlacardNotation $placardNotation
     */
    private $placardNotation = null;

    /**
     * BBIE
     *  Hazardous Item. Placard Endorsement. Text
     *  Text of the placard endorsement that is to be shown on the shipping papers for this hazardous item. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Placard Endorsement
     *  Text
     *  Text. Type
     *  2
     *
     * @var \UBL\Common\CBC\PlacardEndorsement $placardEndorsement
     */
    private $placardEndorsement = null;

    /**
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Text providing further information about the hazardous substance.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  Must be stored away from flammable materials N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @var \UBL\Common\CBC\AdditionalInformation[] $additionalInformation
     */
    private $additionalInformation = [
        
    ];

    /**
     * BBIE
     *  Hazardous Item. UNDG Code. Code
     *  The UN code for this kind of hazardous item.
     *  0..1
     *  Hazardous Item
     *  UNDG Code
     *  Code
     *  Code. Type
     *  UN Code
     *
     * @var \UBL\Common\CBC\UNDGCode $uNDGCode
     */
    private $uNDGCode = null;

    /**
     * BBIE
     *  Hazardous Item. Emergency Procedures Code. Code
     *  A code signifying the emergency procedures for this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Emergency Procedures Code
     *  Code
     *  Code. Type
     *  EMG code, EMS Page Number
     *
     * @var \UBL\Common\CBC\EmergencyProceduresCode $emergencyProceduresCode
     */
    private $emergencyProceduresCode = null;

    /**
     * BBIE
     *  Hazardous Item. Medical First Aid Guide Code. Code
     *  A code signifying a medical first aid guide appropriate to this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Medical First Aid Guide Code
     *  Code
     *  Code. Type
     *  MFAG page number
     *
     * @var \UBL\Common\CBC\MedicalFirstAidGuideCode $medicalFirstAidGuideCode
     */
    private $medicalFirstAidGuideCode = null;

    /**
     * BBIE
     *  Hazardous Item. Technical_ Name. Name
     *  The full technical name of a specific hazardous substance contained in this goods item.
     *  0..1
     *  Hazardous Item
     *  Technical
     *  Name
     *  Name
     *  Name. Type
     *  Granular Sodium Chlorate WeedKiller
     *
     * @var \UBL\Common\CBC\TechnicalName $technicalName
     */
    private $technicalName = null;

    /**
     * BBIE
     *  Hazardous Item. Category. Name
     *  The name of the category of hazard that applies to the Item.
     *  0..1
     *  Hazardous Item
     *  Category
     *  Name
     *  Name. Type
     *
     * @var \UBL\Common\CBC\CategoryName $categoryName
     */
    private $categoryName = null;

    /**
     * BBIE
     *  Hazardous Item. Hazardous Category Code. Code
     *  A code signifying a kind of hazard for a material.
     *  0..1
     *  Hazardous Item
     *  Hazardous Category Code
     *  Code
     *  Code. Type
     *  Hazardous material class code
     *
     * @var \UBL\Common\CBC\HazardousCategoryCode $hazardousCategoryCode
     */
    private $hazardousCategoryCode = null;

    /**
     * BBIE
     *  Hazardous Item. Upper_ Orange Hazard Placard Identifier. Identifier
     *  The number for the upper part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Upper
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Hazard identification number (upper part)
     *
     * @var \UBL\Common\CBC\UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID
     */
    private $upperOrangeHazardPlacardID = null;

    /**
     * BBIE
     *  Hazardous Item. Lower_ Orange Hazard Placard Identifier. Identifier
     *  The number for the lower part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Lower
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Substance identification number (lower part)
     *
     * @var \UBL\Common\CBC\LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID
     */
    private $lowerOrangeHazardPlacardID = null;

    /**
     * BBIE
     *  Hazardous Item. Marking Identifier. Identifier
     *  An identifier to the marking of the Hazardous Item
     *  0..1
     *  Hazardous Item
     *  Marking Identifier
     *  Identifier
     *  Identifier. Type
     *  Dangerous goods label marking
     *
     * @var \UBL\Common\CBC\MarkingID $markingID
     */
    private $markingID = null;

    /**
     * BBIE
     *  Hazardous Item. Hazard Class Identifier. Identifier
     *  An identifier for the hazard class applicable to this hazardous item as defined by the relevant regulation authority (e.g., the IMDG Class Number of the SOLAS Convention of IMO and the ADR/RID Class Number for the road/rail environment).
     *  0..1
     *  Hazardous Item
     *  Hazard Class Identifier
     *  Identifier
     *  Identifier. Type
     *  IMDG Class Number, ADR/RID Class Number
     *
     * @var \UBL\Common\CBC\HazardClassID $hazardClassID
     */
    private $hazardClassID = null;

    /**
     * BBIE
     *  Hazardous Item. Net_ Weight. Measure
     *  The net weight of this hazardous item, excluding packaging.
     *  0..1
     *  Hazardous Item
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \UBL\Common\CBC\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * BBIE
     *  Hazardous Item. Net_ Volume. Measure
     *  The volume of this hazardous item, excluding packaging and transport equipment.
     *  0..1
     *  Hazardous Item
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \UBL\Common\CBC\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * BBIE
     *  Hazardous Item. Quantity
     *  The quantity of goods items in this hazardous item that are hazardous.
     *  0..1
     *  Hazardous Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL\Common\CBC\Quantity $quantity
     */
    private $quantity = null;

    /**
     * ASBIE
     *  Hazardous Item. Contact_ Party. Party
     *  The individual, group, or body to be contacted in case of a hazardous incident associated with this item.
     *  0..1
     *  Hazardous Item
     *  Contact
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL\Common\CAC\ContactParty $contactParty
     */
    private $contactParty = null;

    /**
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  A secondary hazard associated with this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @var \UBL\Common\CAC\SecondaryHazard[] $secondaryHazard
     */
    private $secondaryHazard = [
        
    ];

    /**
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Information related to the transit of this kind of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @var \UBL\Common\CAC\HazardousGoodsTransit[] $hazardousGoodsTransit
     */
    private $hazardousGoodsTransit = [
        
    ];

    /**
     * ASBIE
     *  Hazardous Item. Emergency_ Temperature. Temperature
     *  The threshold temperature at which emergency procedures apply in the handling of temperature-controlled goods.
     *  0..1
     *  Hazardous Item
     *  Emergency
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \UBL\Common\CAC\EmergencyTemperature $emergencyTemperature
     */
    private $emergencyTemperature = null;

    /**
     * ASBIE
     *  Hazardous Item. Flashpoint_ Temperature. Temperature
     *  The flashpoint temperature of this hazardous item; i.e., the lowest temperature at which vapors above a volatile combustible substance ignite in air when exposed to flame.
     *  0..1
     *  Hazardous Item
     *  Flashpoint
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \UBL\Common\CAC\FlashpointTemperature $flashpointTemperature
     */
    private $flashpointTemperature = null;

    /**
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Another temperature relevant to the handling of this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \UBL\Common\CAC\AdditionalTemperature[] $additionalTemperature
     */
    private $additionalTemperature = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Hazardous Item. Identifier
     *  An identifier for this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Round Up
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
     *  Hazardous Item. Identifier
     *  An identifier for this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Round Up
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
     * Gets as placardNotation
     *
     * BBIE
     *  Hazardous Item. Placard Notation. Text
     *  Text of the placard notation corresponding to the hazard class of this hazardous item. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Placard Notation
     *  Text
     *  Text. Type
     *  5.1
     *
     * @return \UBL\Common\CBC\PlacardNotation
     */
    public function getPlacardNotation()
    {
        return $this->placardNotation;
    }

    /**
     * Sets a new placardNotation
     *
     * BBIE
     *  Hazardous Item. Placard Notation. Text
     *  Text of the placard notation corresponding to the hazard class of this hazardous item. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Placard Notation
     *  Text
     *  Text. Type
     *  5.1
     *
     * @param \UBL\Common\CBC\PlacardNotation $placardNotation
     * @return self
     */
    public function setPlacardNotation(?\UBL\Common\CBC\PlacardNotation $placardNotation = null)
    {
        $this->placardNotation = $placardNotation;
        return $this;
    }

    /**
     * Gets as placardEndorsement
     *
     * BBIE
     *  Hazardous Item. Placard Endorsement. Text
     *  Text of the placard endorsement that is to be shown on the shipping papers for this hazardous item. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Placard Endorsement
     *  Text
     *  Text. Type
     *  2
     *
     * @return \UBL\Common\CBC\PlacardEndorsement
     */
    public function getPlacardEndorsement()
    {
        return $this->placardEndorsement;
    }

    /**
     * Sets a new placardEndorsement
     *
     * BBIE
     *  Hazardous Item. Placard Endorsement. Text
     *  Text of the placard endorsement that is to be shown on the shipping papers for this hazardous item. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Placard Endorsement
     *  Text
     *  Text. Type
     *  2
     *
     * @param \UBL\Common\CBC\PlacardEndorsement $placardEndorsement
     * @return self
     */
    public function setPlacardEndorsement(?\UBL\Common\CBC\PlacardEndorsement $placardEndorsement = null)
    {
        $this->placardEndorsement = $placardEndorsement;
        return $this;
    }

    /**
     * Adds as additionalInformation
     *
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Text providing further information about the hazardous substance.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  Must be stored away from flammable materials N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @return self
     * @param \UBL\Common\CBC\AdditionalInformation $additionalInformation
     */
    public function addToAdditionalInformation(\UBL\Common\CBC\AdditionalInformation $additionalInformation)
    {
        $this->additionalInformation[] = $additionalInformation;
        return $this;
    }

    /**
     * isset additionalInformation
     *
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Text providing further information about the hazardous substance.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  Must be stored away from flammable materials N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInformation($index)
    {
        return isset($this->additionalInformation[$index]);
    }

    /**
     * unset additionalInformation
     *
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Text providing further information about the hazardous substance.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  Must be stored away from flammable materials N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInformation($index)
    {
        unset($this->additionalInformation[$index]);
    }

    /**
     * Gets as additionalInformation
     *
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Text providing further information about the hazardous substance.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  Must be stored away from flammable materials N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @return \UBL\Common\CBC\AdditionalInformation[]
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Sets a new additionalInformation
     *
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Text providing further information about the hazardous substance.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  Must be stored away from flammable materials N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @param \UBL\Common\CBC\AdditionalInformation[] $additionalInformation
     * @return self
     */
    public function setAdditionalInformation(?array $additionalInformation = null)
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * Gets as uNDGCode
     *
     * BBIE
     *  Hazardous Item. UNDG Code. Code
     *  The UN code for this kind of hazardous item.
     *  0..1
     *  Hazardous Item
     *  UNDG Code
     *  Code
     *  Code. Type
     *  UN Code
     *
     * @return \UBL\Common\CBC\UNDGCode
     */
    public function getUNDGCode()
    {
        return $this->uNDGCode;
    }

    /**
     * Sets a new uNDGCode
     *
     * BBIE
     *  Hazardous Item. UNDG Code. Code
     *  The UN code for this kind of hazardous item.
     *  0..1
     *  Hazardous Item
     *  UNDG Code
     *  Code
     *  Code. Type
     *  UN Code
     *
     * @param \UBL\Common\CBC\UNDGCode $uNDGCode
     * @return self
     */
    public function setUNDGCode(?\UBL\Common\CBC\UNDGCode $uNDGCode = null)
    {
        $this->uNDGCode = $uNDGCode;
        return $this;
    }

    /**
     * Gets as emergencyProceduresCode
     *
     * BBIE
     *  Hazardous Item. Emergency Procedures Code. Code
     *  A code signifying the emergency procedures for this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Emergency Procedures Code
     *  Code
     *  Code. Type
     *  EMG code, EMS Page Number
     *
     * @return \UBL\Common\CBC\EmergencyProceduresCode
     */
    public function getEmergencyProceduresCode()
    {
        return $this->emergencyProceduresCode;
    }

    /**
     * Sets a new emergencyProceduresCode
     *
     * BBIE
     *  Hazardous Item. Emergency Procedures Code. Code
     *  A code signifying the emergency procedures for this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Emergency Procedures Code
     *  Code
     *  Code. Type
     *  EMG code, EMS Page Number
     *
     * @param \UBL\Common\CBC\EmergencyProceduresCode $emergencyProceduresCode
     * @return self
     */
    public function setEmergencyProceduresCode(?\UBL\Common\CBC\EmergencyProceduresCode $emergencyProceduresCode = null)
    {
        $this->emergencyProceduresCode = $emergencyProceduresCode;
        return $this;
    }

    /**
     * Gets as medicalFirstAidGuideCode
     *
     * BBIE
     *  Hazardous Item. Medical First Aid Guide Code. Code
     *  A code signifying a medical first aid guide appropriate to this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Medical First Aid Guide Code
     *  Code
     *  Code. Type
     *  MFAG page number
     *
     * @return \UBL\Common\CBC\MedicalFirstAidGuideCode
     */
    public function getMedicalFirstAidGuideCode()
    {
        return $this->medicalFirstAidGuideCode;
    }

    /**
     * Sets a new medicalFirstAidGuideCode
     *
     * BBIE
     *  Hazardous Item. Medical First Aid Guide Code. Code
     *  A code signifying a medical first aid guide appropriate to this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Medical First Aid Guide Code
     *  Code
     *  Code. Type
     *  MFAG page number
     *
     * @param \UBL\Common\CBC\MedicalFirstAidGuideCode $medicalFirstAidGuideCode
     * @return self
     */
    public function setMedicalFirstAidGuideCode(?\UBL\Common\CBC\MedicalFirstAidGuideCode $medicalFirstAidGuideCode = null)
    {
        $this->medicalFirstAidGuideCode = $medicalFirstAidGuideCode;
        return $this;
    }

    /**
     * Gets as technicalName
     *
     * BBIE
     *  Hazardous Item. Technical_ Name. Name
     *  The full technical name of a specific hazardous substance contained in this goods item.
     *  0..1
     *  Hazardous Item
     *  Technical
     *  Name
     *  Name
     *  Name. Type
     *  Granular Sodium Chlorate WeedKiller
     *
     * @return \UBL\Common\CBC\TechnicalName
     */
    public function getTechnicalName()
    {
        return $this->technicalName;
    }

    /**
     * Sets a new technicalName
     *
     * BBIE
     *  Hazardous Item. Technical_ Name. Name
     *  The full technical name of a specific hazardous substance contained in this goods item.
     *  0..1
     *  Hazardous Item
     *  Technical
     *  Name
     *  Name
     *  Name. Type
     *  Granular Sodium Chlorate WeedKiller
     *
     * @param \UBL\Common\CBC\TechnicalName $technicalName
     * @return self
     */
    public function setTechnicalName(?\UBL\Common\CBC\TechnicalName $technicalName = null)
    {
        $this->technicalName = $technicalName;
        return $this;
    }

    /**
     * Gets as categoryName
     *
     * BBIE
     *  Hazardous Item. Category. Name
     *  The name of the category of hazard that applies to the Item.
     *  0..1
     *  Hazardous Item
     *  Category
     *  Name
     *  Name. Type
     *
     * @return \UBL\Common\CBC\CategoryName
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Sets a new categoryName
     *
     * BBIE
     *  Hazardous Item. Category. Name
     *  The name of the category of hazard that applies to the Item.
     *  0..1
     *  Hazardous Item
     *  Category
     *  Name
     *  Name. Type
     *
     * @param \UBL\Common\CBC\CategoryName $categoryName
     * @return self
     */
    public function setCategoryName(?\UBL\Common\CBC\CategoryName $categoryName = null)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * Gets as hazardousCategoryCode
     *
     * BBIE
     *  Hazardous Item. Hazardous Category Code. Code
     *  A code signifying a kind of hazard for a material.
     *  0..1
     *  Hazardous Item
     *  Hazardous Category Code
     *  Code
     *  Code. Type
     *  Hazardous material class code
     *
     * @return \UBL\Common\CBC\HazardousCategoryCode
     */
    public function getHazardousCategoryCode()
    {
        return $this->hazardousCategoryCode;
    }

    /**
     * Sets a new hazardousCategoryCode
     *
     * BBIE
     *  Hazardous Item. Hazardous Category Code. Code
     *  A code signifying a kind of hazard for a material.
     *  0..1
     *  Hazardous Item
     *  Hazardous Category Code
     *  Code
     *  Code. Type
     *  Hazardous material class code
     *
     * @param \UBL\Common\CBC\HazardousCategoryCode $hazardousCategoryCode
     * @return self
     */
    public function setHazardousCategoryCode(?\UBL\Common\CBC\HazardousCategoryCode $hazardousCategoryCode = null)
    {
        $this->hazardousCategoryCode = $hazardousCategoryCode;
        return $this;
    }

    /**
     * Gets as upperOrangeHazardPlacardID
     *
     * BBIE
     *  Hazardous Item. Upper_ Orange Hazard Placard Identifier. Identifier
     *  The number for the upper part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Upper
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Hazard identification number (upper part)
     *
     * @return \UBL\Common\CBC\UpperOrangeHazardPlacardID
     */
    public function getUpperOrangeHazardPlacardID()
    {
        return $this->upperOrangeHazardPlacardID;
    }

    /**
     * Sets a new upperOrangeHazardPlacardID
     *
     * BBIE
     *  Hazardous Item. Upper_ Orange Hazard Placard Identifier. Identifier
     *  The number for the upper part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Upper
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Hazard identification number (upper part)
     *
     * @param \UBL\Common\CBC\UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID
     * @return self
     */
    public function setUpperOrangeHazardPlacardID(?\UBL\Common\CBC\UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID = null)
    {
        $this->upperOrangeHazardPlacardID = $upperOrangeHazardPlacardID;
        return $this;
    }

    /**
     * Gets as lowerOrangeHazardPlacardID
     *
     * BBIE
     *  Hazardous Item. Lower_ Orange Hazard Placard Identifier. Identifier
     *  The number for the lower part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Lower
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Substance identification number (lower part)
     *
     * @return \UBL\Common\CBC\LowerOrangeHazardPlacardID
     */
    public function getLowerOrangeHazardPlacardID()
    {
        return $this->lowerOrangeHazardPlacardID;
    }

    /**
     * Sets a new lowerOrangeHazardPlacardID
     *
     * BBIE
     *  Hazardous Item. Lower_ Orange Hazard Placard Identifier. Identifier
     *  The number for the lower part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Lower
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Substance identification number (lower part)
     *
     * @param \UBL\Common\CBC\LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID
     * @return self
     */
    public function setLowerOrangeHazardPlacardID(?\UBL\Common\CBC\LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID = null)
    {
        $this->lowerOrangeHazardPlacardID = $lowerOrangeHazardPlacardID;
        return $this;
    }

    /**
     * Gets as markingID
     *
     * BBIE
     *  Hazardous Item. Marking Identifier. Identifier
     *  An identifier to the marking of the Hazardous Item
     *  0..1
     *  Hazardous Item
     *  Marking Identifier
     *  Identifier
     *  Identifier. Type
     *  Dangerous goods label marking
     *
     * @return \UBL\Common\CBC\MarkingID
     */
    public function getMarkingID()
    {
        return $this->markingID;
    }

    /**
     * Sets a new markingID
     *
     * BBIE
     *  Hazardous Item. Marking Identifier. Identifier
     *  An identifier to the marking of the Hazardous Item
     *  0..1
     *  Hazardous Item
     *  Marking Identifier
     *  Identifier
     *  Identifier. Type
     *  Dangerous goods label marking
     *
     * @param \UBL\Common\CBC\MarkingID $markingID
     * @return self
     */
    public function setMarkingID(?\UBL\Common\CBC\MarkingID $markingID = null)
    {
        $this->markingID = $markingID;
        return $this;
    }

    /**
     * Gets as hazardClassID
     *
     * BBIE
     *  Hazardous Item. Hazard Class Identifier. Identifier
     *  An identifier for the hazard class applicable to this hazardous item as defined by the relevant regulation authority (e.g., the IMDG Class Number of the SOLAS Convention of IMO and the ADR/RID Class Number for the road/rail environment).
     *  0..1
     *  Hazardous Item
     *  Hazard Class Identifier
     *  Identifier
     *  Identifier. Type
     *  IMDG Class Number, ADR/RID Class Number
     *
     * @return \UBL\Common\CBC\HazardClassID
     */
    public function getHazardClassID()
    {
        return $this->hazardClassID;
    }

    /**
     * Sets a new hazardClassID
     *
     * BBIE
     *  Hazardous Item. Hazard Class Identifier. Identifier
     *  An identifier for the hazard class applicable to this hazardous item as defined by the relevant regulation authority (e.g., the IMDG Class Number of the SOLAS Convention of IMO and the ADR/RID Class Number for the road/rail environment).
     *  0..1
     *  Hazardous Item
     *  Hazard Class Identifier
     *  Identifier
     *  Identifier. Type
     *  IMDG Class Number, ADR/RID Class Number
     *
     * @param \UBL\Common\CBC\HazardClassID $hazardClassID
     * @return self
     */
    public function setHazardClassID(?\UBL\Common\CBC\HazardClassID $hazardClassID = null)
    {
        $this->hazardClassID = $hazardClassID;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * BBIE
     *  Hazardous Item. Net_ Weight. Measure
     *  The net weight of this hazardous item, excluding packaging.
     *  0..1
     *  Hazardous Item
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \UBL\Common\CBC\NetWeightMeasure
     */
    public function getNetWeightMeasure()
    {
        return $this->netWeightMeasure;
    }

    /**
     * Sets a new netWeightMeasure
     *
     * BBIE
     *  Hazardous Item. Net_ Weight. Measure
     *  The net weight of this hazardous item, excluding packaging.
     *  0..1
     *  Hazardous Item
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \UBL\Common\CBC\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(?\UBL\Common\CBC\NetWeightMeasure $netWeightMeasure = null)
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }

    /**
     * Gets as netVolumeMeasure
     *
     * BBIE
     *  Hazardous Item. Net_ Volume. Measure
     *  The volume of this hazardous item, excluding packaging and transport equipment.
     *  0..1
     *  Hazardous Item
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \UBL\Common\CBC\NetVolumeMeasure
     */
    public function getNetVolumeMeasure()
    {
        return $this->netVolumeMeasure;
    }

    /**
     * Sets a new netVolumeMeasure
     *
     * BBIE
     *  Hazardous Item. Net_ Volume. Measure
     *  The volume of this hazardous item, excluding packaging and transport equipment.
     *  0..1
     *  Hazardous Item
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \UBL\Common\CBC\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(?\UBL\Common\CBC\NetVolumeMeasure $netVolumeMeasure = null)
    {
        $this->netVolumeMeasure = $netVolumeMeasure;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Hazardous Item. Quantity
     *  The quantity of goods items in this hazardous item that are hazardous.
     *  0..1
     *  Hazardous Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL\Common\CBC\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Hazardous Item. Quantity
     *  The quantity of goods items in this hazardous item that are hazardous.
     *  0..1
     *  Hazardous Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL\Common\CBC\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\UBL\Common\CBC\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as contactParty
     *
     * ASBIE
     *  Hazardous Item. Contact_ Party. Party
     *  The individual, group, or body to be contacted in case of a hazardous incident associated with this item.
     *  0..1
     *  Hazardous Item
     *  Contact
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL\Common\CAC\ContactParty
     */
    public function getContactParty()
    {
        return $this->contactParty;
    }

    /**
     * Sets a new contactParty
     *
     * ASBIE
     *  Hazardous Item. Contact_ Party. Party
     *  The individual, group, or body to be contacted in case of a hazardous incident associated with this item.
     *  0..1
     *  Hazardous Item
     *  Contact
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL\Common\CAC\ContactParty $contactParty
     * @return self
     */
    public function setContactParty(?\UBL\Common\CAC\ContactParty $contactParty = null)
    {
        $this->contactParty = $contactParty;
        return $this;
    }

    /**
     * Adds as secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  A secondary hazard associated with this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @return self
     * @param \UBL\Common\CAC\SecondaryHazard $secondaryHazard
     */
    public function addToSecondaryHazard(\UBL\Common\CAC\SecondaryHazard $secondaryHazard)
    {
        $this->secondaryHazard[] = $secondaryHazard;
        return $this;
    }

    /**
     * isset secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  A secondary hazard associated with this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecondaryHazard($index)
    {
        return isset($this->secondaryHazard[$index]);
    }

    /**
     * unset secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  A secondary hazard associated with this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecondaryHazard($index)
    {
        unset($this->secondaryHazard[$index]);
    }

    /**
     * Gets as secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  A secondary hazard associated with this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @return \UBL\Common\CAC\SecondaryHazard[]
     */
    public function getSecondaryHazard()
    {
        return $this->secondaryHazard;
    }

    /**
     * Sets a new secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  A secondary hazard associated with this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @param \UBL\Common\CAC\SecondaryHazard[] $secondaryHazard
     * @return self
     */
    public function setSecondaryHazard(?array $secondaryHazard = null)
    {
        $this->secondaryHazard = $secondaryHazard;
        return $this;
    }

    /**
     * Adds as hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Information related to the transit of this kind of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @return self
     * @param \UBL\Common\CAC\HazardousGoodsTransit $hazardousGoodsTransit
     */
    public function addToHazardousGoodsTransit(\UBL\Common\CAC\HazardousGoodsTransit $hazardousGoodsTransit)
    {
        $this->hazardousGoodsTransit[] = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * isset hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Information related to the transit of this kind of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHazardousGoodsTransit($index)
    {
        return isset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * unset hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Information related to the transit of this kind of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHazardousGoodsTransit($index)
    {
        unset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * Gets as hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Information related to the transit of this kind of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @return \UBL\Common\CAC\HazardousGoodsTransit[]
     */
    public function getHazardousGoodsTransit()
    {
        return $this->hazardousGoodsTransit;
    }

    /**
     * Sets a new hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Information related to the transit of this kind of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param \UBL\Common\CAC\HazardousGoodsTransit[] $hazardousGoodsTransit
     * @return self
     */
    public function setHazardousGoodsTransit(?array $hazardousGoodsTransit = null)
    {
        $this->hazardousGoodsTransit = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * Gets as emergencyTemperature
     *
     * ASBIE
     *  Hazardous Item. Emergency_ Temperature. Temperature
     *  The threshold temperature at which emergency procedures apply in the handling of temperature-controlled goods.
     *  0..1
     *  Hazardous Item
     *  Emergency
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \UBL\Common\CAC\EmergencyTemperature
     */
    public function getEmergencyTemperature()
    {
        return $this->emergencyTemperature;
    }

    /**
     * Sets a new emergencyTemperature
     *
     * ASBIE
     *  Hazardous Item. Emergency_ Temperature. Temperature
     *  The threshold temperature at which emergency procedures apply in the handling of temperature-controlled goods.
     *  0..1
     *  Hazardous Item
     *  Emergency
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \UBL\Common\CAC\EmergencyTemperature $emergencyTemperature
     * @return self
     */
    public function setEmergencyTemperature(?\UBL\Common\CAC\EmergencyTemperature $emergencyTemperature = null)
    {
        $this->emergencyTemperature = $emergencyTemperature;
        return $this;
    }

    /**
     * Gets as flashpointTemperature
     *
     * ASBIE
     *  Hazardous Item. Flashpoint_ Temperature. Temperature
     *  The flashpoint temperature of this hazardous item; i.e., the lowest temperature at which vapors above a volatile combustible substance ignite in air when exposed to flame.
     *  0..1
     *  Hazardous Item
     *  Flashpoint
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \UBL\Common\CAC\FlashpointTemperature
     */
    public function getFlashpointTemperature()
    {
        return $this->flashpointTemperature;
    }

    /**
     * Sets a new flashpointTemperature
     *
     * ASBIE
     *  Hazardous Item. Flashpoint_ Temperature. Temperature
     *  The flashpoint temperature of this hazardous item; i.e., the lowest temperature at which vapors above a volatile combustible substance ignite in air when exposed to flame.
     *  0..1
     *  Hazardous Item
     *  Flashpoint
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \UBL\Common\CAC\FlashpointTemperature $flashpointTemperature
     * @return self
     */
    public function setFlashpointTemperature(?\UBL\Common\CAC\FlashpointTemperature $flashpointTemperature = null)
    {
        $this->flashpointTemperature = $flashpointTemperature;
        return $this;
    }

    /**
     * Adds as additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Another temperature relevant to the handling of this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return self
     * @param \UBL\Common\CAC\AdditionalTemperature $additionalTemperature
     */
    public function addToAdditionalTemperature(\UBL\Common\CAC\AdditionalTemperature $additionalTemperature)
    {
        $this->additionalTemperature[] = $additionalTemperature;
        return $this;
    }

    /**
     * isset additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Another temperature relevant to the handling of this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalTemperature($index)
    {
        return isset($this->additionalTemperature[$index]);
    }

    /**
     * unset additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Another temperature relevant to the handling of this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalTemperature($index)
    {
        unset($this->additionalTemperature[$index]);
    }

    /**
     * Gets as additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Another temperature relevant to the handling of this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \UBL\Common\CAC\AdditionalTemperature[]
     */
    public function getAdditionalTemperature()
    {
        return $this->additionalTemperature;
    }

    /**
     * Sets a new additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Another temperature relevant to the handling of this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \UBL\Common\CAC\AdditionalTemperature[] $additionalTemperature
     * @return self
     */
    public function setAdditionalTemperature(?array $additionalTemperature = null)
    {
        $this->additionalTemperature = $additionalTemperature;
        return $this;
    }
}


