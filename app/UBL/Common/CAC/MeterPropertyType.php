<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing MeterPropertyType
 *
 * ABIE
 *  Meter Property. Details
 *  The name of this meter property.
 *  Meter Property
 * XSD Type: MeterPropertyType
 */
class MeterPropertyType
{
    /**
     * BBIE
     *  Meter Property. Name
     *  The name of this meter property, expressed as a code.
     *  0..1
     *  Meter Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
     *
     * @var \App\UBL\Common\CBC\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Meter Property. Name Code. Code
     *  The value of this meter property, expressed as text.
     *  0..1
     *  Meter Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\NameCode $nameCode
     */
    private $nameCode = null;

    /**
     * BBIE
     *  Meter Property. Value. Text
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @var \App\UBL\Common\CBC\Value $value
     */
    private $value = null;

    /**
     * BBIE
     *  Meter Property. Value_ Quantity. Quantity
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \App\UBL\Common\CBC\ValueQuantity $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\ValueQualifier[] $valueQualifier
     */
    private $valueQualifier = [
        
    ];

    /**
     * Gets as name
     *
     * BBIE
     *  Meter Property. Name
     *  The name of this meter property, expressed as a code.
     *  0..1
     *  Meter Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
     *
     * @return \App\UBL\Common\CBC\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Meter Property. Name
     *  The name of this meter property, expressed as a code.
     *  0..1
     *  Meter Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
     *
     * @param \App\UBL\Common\CBC\Name $name
     * @return self
     */
    public function setName(?\App\UBL\Common\CBC\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as nameCode
     *
     * BBIE
     *  Meter Property. Name Code. Code
     *  The value of this meter property, expressed as text.
     *  0..1
     *  Meter Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\NameCode
     */
    public function getNameCode()
    {
        return $this->nameCode;
    }

    /**
     * Sets a new nameCode
     *
     * BBIE
     *  Meter Property. Name Code. Code
     *  The value of this meter property, expressed as text.
     *  0..1
     *  Meter Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\NameCode $nameCode
     * @return self
     */
    public function setNameCode(?\App\UBL\Common\CBC\NameCode $nameCode = null)
    {
        $this->nameCode = $nameCode;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Meter Property. Value. Text
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @return \App\UBL\Common\CBC\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Meter Property. Value. Text
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @param \App\UBL\Common\CBC\Value $value
     * @return self
     */
    public function setValue(?\App\UBL\Common\CBC\Value $value = null)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * BBIE
     *  Meter Property. Value_ Quantity. Quantity
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \App\UBL\Common\CBC\ValueQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * BBIE
     *  Meter Property. Value_ Quantity. Quantity
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \App\UBL\Common\CBC\ValueQuantity $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\App\UBL\Common\CBC\ValueQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Adds as valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\ValueQualifier $valueQualifier
     */
    public function addToValueQualifier(\App\UBL\Common\CBC\ValueQualifier $valueQualifier)
    {
        $this->valueQualifier[] = $valueQualifier;
        return $this;
    }

    /**
     * isset valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValueQualifier($index)
    {
        return isset($this->valueQualifier[$index]);
    }

    /**
     * unset valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValueQualifier($index)
    {
        unset($this->valueQualifier[$index]);
    }

    /**
     * Gets as valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\ValueQualifier[]
     */
    public function getValueQualifier()
    {
        return $this->valueQualifier;
    }

    /**
     * Sets a new valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\ValueQualifier[] $valueQualifier
     * @return self
     */
    public function setValueQualifier(?array $valueQualifier = null)
    {
        $this->valueQualifier = $valueQualifier;
        return $this;
    }
}

