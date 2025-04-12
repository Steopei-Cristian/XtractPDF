<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing EventCommentType
 *
 * ABIE
 *  Event Comment. Details
 *  A class to define comments about a retail event.
 *  Event Comment
 * XSD Type: EventCommentType
 */
class EventCommentType
{
    /**
     * BBIE
     *  Event Comment. Comment. Text
     *  Text commenting on the event.
     *  1
     *  Event Comment
     *  Comment
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Comment $comment
     */
    private $comment = null;

    /**
     * BBIE
     *  Event Comment. Issue Date. Date
     *  The date on which this comment was made.
     *  0..1
     *  Event Comment
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Event Comment. Issue Time. Time
     *  The time at which this comment was made.
     *  0..1
     *  Event Comment
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * Gets as comment
     *
     * BBIE
     *  Event Comment. Comment. Text
     *  Text commenting on the event.
     *  1
     *  Event Comment
     *  Comment
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * BBIE
     *  Event Comment. Comment. Text
     *  Text commenting on the event.
     *  1
     *  Event Comment
     *  Comment
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\Comment $comment
     * @return self
     */
    public function setComment(\UBL\Common\CBC\Comment $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Event Comment. Issue Date. Date
     *  The date on which this comment was made.
     *  0..1
     *  Event Comment
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
     *  Event Comment. Issue Date. Date
     *  The date on which this comment was made.
     *  0..1
     *  Event Comment
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
     *  Event Comment. Issue Time. Time
     *  The time at which this comment was made.
     *  0..1
     *  Event Comment
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
     *  Event Comment. Issue Time. Time
     *  The time at which this comment was made.
     *  0..1
     *  Event Comment
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
}


