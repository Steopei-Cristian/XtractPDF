<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ItemPropertyType
 *
 * ABIE
 *  Item Property. Details
 *  A class to describe a specific property of an item.
 *  Item Property
 * XSD Type: ItemPropertyType
 */
class ItemPropertyType
{
    /**
     * BBIE
     *  Item Property. Identifier
     *  An identifier for this property of an item.
     *  0..1
     *  Item Property
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Item Property. Name
     *  The name of this item property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
     *
     * @var \UBL\Common\CBC\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Item Property. Name Code. Code
     *  The name of this item property, expressed as a code.
     *  0..1
     *  Item Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\NameCode $nameCode
     */
    private $nameCode = null;

    /**
     * BBIE
     *  Item Property. Test Method. Text
     *  The method of testing the value of this item property.
     *  0..1
     *  Item Property
     *  Test Method
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @var \UBL\Common\CBC\TestMethod $testMethod
     */
    private $testMethod = null;

    /**
     * BBIE
     *  Item Property. Value. Text
     *  The value of this item property, expressed as text.
     *  0..1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @var \UBL\Common\CBC\Value $value
     */
    private $value = null;

    /**
     * BBIE
     *  Item Property. Value_ Quantity. Quantity
     *  The value of this item property, expressed as a quantity.
     *  0..1
     *  Item Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL\Common\CBC\ValueQuantity $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\ValueQualifier[] $valueQualifier
     */
    private $valueQualifier = [
        
    ];

    /**
     * BBIE
     *  Item Property. Importance Code. Code
     *  A code signifying the importance of this property in using it to describe a related Item.
     *  0..1
     *  Item Property
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\ImportanceCode $importanceCode
     */
    private $importanceCode = null;

    /**
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\ListValue[] $listValue
     */
    private $listValue = [
        
    ];

    /**
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period during which this item property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL\Common\CAC\UsabilityPeriod $usabilityPeriod
     */
    private $usabilityPeriod = null;

    /**
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @var \UBL\Common\CAC\ItemPropertyGroup[] $itemPropertyGroup
     */
    private $itemPropertyGroup = [
        
    ];

    /**
     * ASBIE
     *  Item Property. Range_ Dimension. Dimension
     *  The range of values for the dimensions of this property.
     *  0..1
     *  Item Property
     *  Range
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \UBL\Common\CAC\RangeDimension $rangeDimension
     */
    private $rangeDimension = null;

    /**
     * ASBIE
     *  Item Property. Item Property Range
     *  A range of values for this item property.
     *  0..1
     *  Item Property
     *  Item Property Range
     *  Item Property Range
     *  Item Property Range
     *
     * @var \UBL\Common\CAC\ItemPropertyRange $itemPropertyRange
     */
    private $itemPropertyRange = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Item Property. Identifier
     *  An identifier for this property of an item.
     *  0..1
     *  Item Property
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
     *  Item Property. Identifier
     *  An identifier for this property of an item.
     *  0..1
     *  Item Property
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
     * Gets as name
     *
     * BBIE
     *  Item Property. Name
     *  The name of this item property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
     *
     * @return \UBL\Common\CBC\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Item Property. Name
     *  The name of this item property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
     *
     * @param \UBL\Common\CBC\Name $name
     * @return self
     */
    public function setName(\UBL\Common\CBC\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as nameCode
     *
     * BBIE
     *  Item Property. Name Code. Code
     *  The name of this item property, expressed as a code.
     *  0..1
     *  Item Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\NameCode
     */
    public function getNameCode()
    {
        return $this->nameCode;
    }

    /**
     * Sets a new nameCode
     *
     * BBIE
     *  Item Property. Name Code. Code
     *  The name of this item property, expressed as a code.
     *  0..1
     *  Item Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\NameCode $nameCode
     * @return self
     */
    public function setNameCode(?\UBL\Common\CBC\NameCode $nameCode = null)
    {
        $this->nameCode = $nameCode;
        return $this;
    }

    /**
     * Gets as testMethod
     *
     * BBIE
     *  Item Property. Test Method. Text
     *  The method of testing the value of this item property.
     *  0..1
     *  Item Property
     *  Test Method
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @return \UBL\Common\CBC\TestMethod
     */
    public function getTestMethod()
    {
        return $this->testMethod;
    }

    /**
     * Sets a new testMethod
     *
     * BBIE
     *  Item Property. Test Method. Text
     *  The method of testing the value of this item property.
     *  0..1
     *  Item Property
     *  Test Method
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @param \UBL\Common\CBC\TestMethod $testMethod
     * @return self
     */
    public function setTestMethod(?\UBL\Common\CBC\TestMethod $testMethod = null)
    {
        $this->testMethod = $testMethod;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Item Property. Value. Text
     *  The value of this item property, expressed as text.
     *  0..1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @return \UBL\Common\CBC\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Item Property. Value. Text
     *  The value of this item property, expressed as text.
     *  0..1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @param \UBL\Common\CBC\Value $value
     * @return self
     */
    public function setValue(?\UBL\Common\CBC\Value $value = null)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * BBIE
     *  Item Property. Value_ Quantity. Quantity
     *  The value of this item property, expressed as a quantity.
     *  0..1
     *  Item Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL\Common\CBC\ValueQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * BBIE
     *  Item Property. Value_ Quantity. Quantity
     *  The value of this item property, expressed as a quantity.
     *  0..1
     *  Item Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL\Common\CBC\ValueQuantity $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\UBL\Common\CBC\ValueQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Adds as valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\ValueQualifier $valueQualifier
     */
    public function addToValueQualifier(\UBL\Common\CBC\ValueQualifier $valueQualifier)
    {
        $this->valueQualifier[] = $valueQualifier;
        return $this;
    }

    /**
     * isset valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
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
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
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
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\ValueQualifier[]
     */
    public function getValueQualifier()
    {
        return $this->valueQualifier;
    }

    /**
     * Sets a new valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\ValueQualifier[] $valueQualifier
     * @return self
     */
    public function setValueQualifier(?array $valueQualifier = null)
    {
        $this->valueQualifier = $valueQualifier;
        return $this;
    }

    /**
     * Gets as importanceCode
     *
     * BBIE
     *  Item Property. Importance Code. Code
     *  A code signifying the importance of this property in using it to describe a related Item.
     *  0..1
     *  Item Property
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\ImportanceCode
     */
    public function getImportanceCode()
    {
        return $this->importanceCode;
    }

    /**
     * Sets a new importanceCode
     *
     * BBIE
     *  Item Property. Importance Code. Code
     *  A code signifying the importance of this property in using it to describe a related Item.
     *  0..1
     *  Item Property
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\ImportanceCode $importanceCode
     * @return self
     */
    public function setImportanceCode(?\UBL\Common\CBC\ImportanceCode $importanceCode = null)
    {
        $this->importanceCode = $importanceCode;
        return $this;
    }

    /**
     * Adds as listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\ListValue $listValue
     */
    public function addToListValue(\UBL\Common\CBC\ListValue $listValue)
    {
        $this->listValue[] = $listValue;
        return $this;
    }

    /**
     * isset listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListValue($index)
    {
        return isset($this->listValue[$index]);
    }

    /**
     * unset listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListValue($index)
    {
        unset($this->listValue[$index]);
    }

    /**
     * Gets as listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\ListValue[]
     */
    public function getListValue()
    {
        return $this->listValue;
    }

    /**
     * Sets a new listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\ListValue[] $listValue
     * @return self
     */
    public function setListValue(?array $listValue = null)
    {
        $this->listValue = $listValue;
        return $this;
    }

    /**
     * Gets as usabilityPeriod
     *
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period during which this item property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL\Common\CAC\UsabilityPeriod
     */
    public function getUsabilityPeriod()
    {
        return $this->usabilityPeriod;
    }

    /**
     * Sets a new usabilityPeriod
     *
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period during which this item property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL\Common\CAC\UsabilityPeriod $usabilityPeriod
     * @return self
     */
    public function setUsabilityPeriod(?\UBL\Common\CAC\UsabilityPeriod $usabilityPeriod = null)
    {
        $this->usabilityPeriod = $usabilityPeriod;
        return $this;
    }

    /**
     * Adds as itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @return self
     * @param \UBL\Common\CAC\ItemPropertyGroup $itemPropertyGroup
     */
    public function addToItemPropertyGroup(\UBL\Common\CAC\ItemPropertyGroup $itemPropertyGroup)
    {
        $this->itemPropertyGroup[] = $itemPropertyGroup;
        return $this;
    }

    /**
     * isset itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemPropertyGroup($index)
    {
        return isset($this->itemPropertyGroup[$index]);
    }

    /**
     * unset itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemPropertyGroup($index)
    {
        unset($this->itemPropertyGroup[$index]);
    }

    /**
     * Gets as itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @return \UBL\Common\CAC\ItemPropertyGroup[]
     */
    public function getItemPropertyGroup()
    {
        return $this->itemPropertyGroup;
    }

    /**
     * Sets a new itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @param \UBL\Common\CAC\ItemPropertyGroup[] $itemPropertyGroup
     * @return self
     */
    public function setItemPropertyGroup(?array $itemPropertyGroup = null)
    {
        $this->itemPropertyGroup = $itemPropertyGroup;
        return $this;
    }

    /**
     * Gets as rangeDimension
     *
     * ASBIE
     *  Item Property. Range_ Dimension. Dimension
     *  The range of values for the dimensions of this property.
     *  0..1
     *  Item Property
     *  Range
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \UBL\Common\CAC\RangeDimension
     */
    public function getRangeDimension()
    {
        return $this->rangeDimension;
    }

    /**
     * Sets a new rangeDimension
     *
     * ASBIE
     *  Item Property. Range_ Dimension. Dimension
     *  The range of values for the dimensions of this property.
     *  0..1
     *  Item Property
     *  Range
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \UBL\Common\CAC\RangeDimension $rangeDimension
     * @return self
     */
    public function setRangeDimension(?\UBL\Common\CAC\RangeDimension $rangeDimension = null)
    {
        $this->rangeDimension = $rangeDimension;
        return $this;
    }

    /**
     * Gets as itemPropertyRange
     *
     * ASBIE
     *  Item Property. Item Property Range
     *  A range of values for this item property.
     *  0..1
     *  Item Property
     *  Item Property Range
     *  Item Property Range
     *  Item Property Range
     *
     * @return \UBL\Common\CAC\ItemPropertyRange
     */
    public function getItemPropertyRange()
    {
        return $this->itemPropertyRange;
    }

    /**
     * Sets a new itemPropertyRange
     *
     * ASBIE
     *  Item Property. Item Property Range
     *  A range of values for this item property.
     *  0..1
     *  Item Property
     *  Item Property Range
     *  Item Property Range
     *  Item Property Range
     *
     * @param \UBL\Common\CAC\ItemPropertyRange $itemPropertyRange
     * @return self
     */
    public function setItemPropertyRange(?\UBL\Common\CAC\ItemPropertyRange $itemPropertyRange = null)
    {
        $this->itemPropertyRange = $itemPropertyRange;
        return $this;
    }
}


