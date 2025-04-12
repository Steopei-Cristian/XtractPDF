<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ClassificationCategoryType
 *
 * ABIE
 *  Classification Category. Details
 *  A class to define a category within a classification scheme.
 *  Classification Category
 * XSD Type: ClassificationCategoryType
 */
class ClassificationCategoryType
{
    /**
     * BBIE
     *  Classification Category. Name
     *  The name of this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Name
     *  Name
     *  Name. Type
     *  Code List Name
     *  UNSPSC Class , UNSPSC Segment , UNSPSC Family
     *
     * @var \UBL\Common\CBC\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Classification Category. Code Value. Text
     *  The value of a code used to identify this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Code Value
     *  Text
     *  Text. Type
     *  Code Value
     *  3420001, 3273666, HSJJD-213
     *
     * @var \UBL\Common\CBC\CodeValue $codeValue
     */
    private $codeValue = null;

    /**
     * BBIE
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
     *
     * @var \UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @var \UBL\Common\CAC\CategorizesClassificationCategory[] $categorizesClassificationCategory
     */
    private $categorizesClassificationCategory = [
        
    ];

    /**
     * Gets as name
     *
     * BBIE
     *  Classification Category. Name
     *  The name of this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Name
     *  Name
     *  Name. Type
     *  Code List Name
     *  UNSPSC Class , UNSPSC Segment , UNSPSC Family
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
     *  Classification Category. Name
     *  The name of this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Name
     *  Name
     *  Name. Type
     *  Code List Name
     *  UNSPSC Class , UNSPSC Segment , UNSPSC Family
     *
     * @param \UBL\Common\CBC\Name $name
     * @return self
     */
    public function setName(?\UBL\Common\CBC\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as codeValue
     *
     * BBIE
     *  Classification Category. Code Value. Text
     *  The value of a code used to identify this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Code Value
     *  Text
     *  Text. Type
     *  Code Value
     *  3420001, 3273666, HSJJD-213
     *
     * @return \UBL\Common\CBC\CodeValue
     */
    public function getCodeValue()
    {
        return $this->codeValue;
    }

    /**
     * Sets a new codeValue
     *
     * BBIE
     *  Classification Category. Code Value. Text
     *  The value of a code used to identify this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Code Value
     *  Text
     *  Text. Type
     *  Code Value
     *  3420001, 3273666, HSJJD-213
     *
     * @param \UBL\Common\CBC\CodeValue $codeValue
     * @return self
     */
    public function setCodeValue(?\UBL\Common\CBC\CodeValue $codeValue = null)
    {
        $this->codeValue = $codeValue;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     * Adds as categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @return self
     * @param \UBL\Common\CAC\CategorizesClassificationCategory $categorizesClassificationCategory
     */
    public function addToCategorizesClassificationCategory(\UBL\Common\CAC\CategorizesClassificationCategory $categorizesClassificationCategory)
    {
        $this->categorizesClassificationCategory[] = $categorizesClassificationCategory;
        return $this;
    }

    /**
     * isset categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategorizesClassificationCategory($index)
    {
        return isset($this->categorizesClassificationCategory[$index]);
    }

    /**
     * unset categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategorizesClassificationCategory($index)
    {
        unset($this->categorizesClassificationCategory[$index]);
    }

    /**
     * Gets as categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @return \UBL\Common\CAC\CategorizesClassificationCategory[]
     */
    public function getCategorizesClassificationCategory()
    {
        return $this->categorizesClassificationCategory;
    }

    /**
     * Sets a new categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param \UBL\Common\CAC\CategorizesClassificationCategory[] $categorizesClassificationCategory
     * @return self
     */
    public function setCategorizesClassificationCategory(?array $categorizesClassificationCategory = null)
    {
        $this->categorizesClassificationCategory = $categorizesClassificationCategory;
        return $this;
    }
}


