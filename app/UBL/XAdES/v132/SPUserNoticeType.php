<?php

namespace App\UBL\XAdES\v132;

/**
 * Class representing SPUserNoticeType
 *
 *
 * XSD Type: SPUserNoticeType
 */
class SPUserNoticeType
{
    /**
     * @var \UBL\XAdES\v132\NoticeReferenceType $noticeRef
     */
    private $noticeRef = null;

    /**
     * @var string $explicitText
     */
    private $explicitText = null;

    /**
     * Gets as noticeRef
     *
     * @return \UBL\XAdES\v132\NoticeReferenceType
     */
    public function getNoticeRef()
    {
        return $this->noticeRef;
    }

    /**
     * Sets a new noticeRef
     *
     * @param \UBL\XAdES\v132\NoticeReferenceType $noticeRef
     * @return self
     */
    public function setNoticeRef(?\UBL\XAdES\v132\NoticeReferenceType $noticeRef = null)
    {
        $this->noticeRef = $noticeRef;
        return $this;
    }

    /**
     * Gets as explicitText
     *
     * @return string
     */
    public function getExplicitText()
    {
        return $this->explicitText;
    }

    /**
     * Sets a new explicitText
     *
     * @param string $explicitText
     * @return self
     */
    public function setExplicitText($explicitText)
    {
        $this->explicitText = $explicitText;
        return $this;
    }
}


