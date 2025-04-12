<?php

namespace UBL\Common\CAC;

/**
 * Class representing EnvironmentalEmissionType
 *
 * ABIE
 *  Environmental Emission. Details
 *  A class to describe an environmental emission.
 *  Environmental Emission
 * XSD Type: EnvironmentalEmissionType
 */
class EnvironmentalEmissionType
{
    /**
     * BBIE
     *  Environmental Emission. Environmental Emission Type Code. Code
     *  A code specifying the type of environmental emission.
     *  1
     *  Environmental Emission
     *  Environmental Emission Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\EnvironmentalEmissionTypeCode $environmentalEmissionTypeCode
     */
    private $environmentalEmissionTypeCode = null;

    /**
     * BBIE
     *  Environmental Emission. Value. Measure
     *  A value measurement for the environmental emission.
     *  1
     *  Environmental Emission
     *  Value
     *  Measure
     *  Measure. Type
     *
     * @var \UBL\Common\CBC\ValueMeasure $valueMeasure
     */
    private $valueMeasure = null;

    /**
     * BBIE
     *  Environmental Emission. Description. Text
     *  Text describing this environmental emission.
     *  0..n
     *  Environmental Emission
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
     *  Environmental Emission. Emission Calculation Method
     *  A method used to calculate the amount of this emission.
     *  0..n
     *  Environmental Emission
     *  Emission Calculation Method
     *  Emission Calculation Method
     *  Emission Calculation Method
     *
     * @var \UBL\Common\CAC\EmissionCalculationMethod[] $emissionCalculationMethod
     */
    private $emissionCalculationMethod = [
        
    ];

    /**
     * Gets as environmentalEmissionTypeCode
     *
     * BBIE
     *  Environmental Emission. Environmental Emission Type Code. Code
     *  A code specifying the type of environmental emission.
     *  1
     *  Environmental Emission
     *  Environmental Emission Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\EnvironmentalEmissionTypeCode
     */
    public function getEnvironmentalEmissionTypeCode()
    {
        return $this->environmentalEmissionTypeCode;
    }

    /**
     * Sets a new environmentalEmissionTypeCode
     *
     * BBIE
     *  Environmental Emission. Environmental Emission Type Code. Code
     *  A code specifying the type of environmental emission.
     *  1
     *  Environmental Emission
     *  Environmental Emission Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\EnvironmentalEmissionTypeCode $environmentalEmissionTypeCode
     * @return self
     */
    public function setEnvironmentalEmissionTypeCode(\UBL\Common\CBC\EnvironmentalEmissionTypeCode $environmentalEmissionTypeCode)
    {
        $this->environmentalEmissionTypeCode = $environmentalEmissionTypeCode;
        return $this;
    }

    /**
     * Gets as valueMeasure
     *
     * BBIE
     *  Environmental Emission. Value. Measure
     *  A value measurement for the environmental emission.
     *  1
     *  Environmental Emission
     *  Value
     *  Measure
     *  Measure. Type
     *
     * @return \UBL\Common\CBC\ValueMeasure
     */
    public function getValueMeasure()
    {
        return $this->valueMeasure;
    }

    /**
     * Sets a new valueMeasure
     *
     * BBIE
     *  Environmental Emission. Value. Measure
     *  A value measurement for the environmental emission.
     *  1
     *  Environmental Emission
     *  Value
     *  Measure
     *  Measure. Type
     *
     * @param \UBL\Common\CBC\ValueMeasure $valueMeasure
     * @return self
     */
    public function setValueMeasure(\UBL\Common\CBC\ValueMeasure $valueMeasure)
    {
        $this->valueMeasure = $valueMeasure;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Environmental Emission. Description. Text
     *  Text describing this environmental emission.
     *  0..n
     *  Environmental Emission
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
     *  Environmental Emission. Description. Text
     *  Text describing this environmental emission.
     *  0..n
     *  Environmental Emission
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
     *  Environmental Emission. Description. Text
     *  Text describing this environmental emission.
     *  0..n
     *  Environmental Emission
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
     *  Environmental Emission. Description. Text
     *  Text describing this environmental emission.
     *  0..n
     *  Environmental Emission
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
     *  Environmental Emission. Description. Text
     *  Text describing this environmental emission.
     *  0..n
     *  Environmental Emission
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
     * Adds as emissionCalculationMethod
     *
     * ASBIE
     *  Environmental Emission. Emission Calculation Method
     *  A method used to calculate the amount of this emission.
     *  0..n
     *  Environmental Emission
     *  Emission Calculation Method
     *  Emission Calculation Method
     *  Emission Calculation Method
     *
     * @return self
     * @param \UBL\Common\CAC\EmissionCalculationMethod $emissionCalculationMethod
     */
    public function addToEmissionCalculationMethod(\UBL\Common\CAC\EmissionCalculationMethod $emissionCalculationMethod)
    {
        $this->emissionCalculationMethod[] = $emissionCalculationMethod;
        return $this;
    }

    /**
     * isset emissionCalculationMethod
     *
     * ASBIE
     *  Environmental Emission. Emission Calculation Method
     *  A method used to calculate the amount of this emission.
     *  0..n
     *  Environmental Emission
     *  Emission Calculation Method
     *  Emission Calculation Method
     *  Emission Calculation Method
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmissionCalculationMethod($index)
    {
        return isset($this->emissionCalculationMethod[$index]);
    }

    /**
     * unset emissionCalculationMethod
     *
     * ASBIE
     *  Environmental Emission. Emission Calculation Method
     *  A method used to calculate the amount of this emission.
     *  0..n
     *  Environmental Emission
     *  Emission Calculation Method
     *  Emission Calculation Method
     *  Emission Calculation Method
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmissionCalculationMethod($index)
    {
        unset($this->emissionCalculationMethod[$index]);
    }

    /**
     * Gets as emissionCalculationMethod
     *
     * ASBIE
     *  Environmental Emission. Emission Calculation Method
     *  A method used to calculate the amount of this emission.
     *  0..n
     *  Environmental Emission
     *  Emission Calculation Method
     *  Emission Calculation Method
     *  Emission Calculation Method
     *
     * @return \UBL\Common\CAC\EmissionCalculationMethod[]
     */
    public function getEmissionCalculationMethod()
    {
        return $this->emissionCalculationMethod;
    }

    /**
     * Sets a new emissionCalculationMethod
     *
     * ASBIE
     *  Environmental Emission. Emission Calculation Method
     *  A method used to calculate the amount of this emission.
     *  0..n
     *  Environmental Emission
     *  Emission Calculation Method
     *  Emission Calculation Method
     *  Emission Calculation Method
     *
     * @param \UBL\Common\CAC\EmissionCalculationMethod[] $emissionCalculationMethod
     * @return self
     */
    public function setEmissionCalculationMethod(?array $emissionCalculationMethod = null)
    {
        $this->emissionCalculationMethod = $emissionCalculationMethod;
        return $this;
    }
}

