<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getGender()
 * @method string getRemarksAPrefix()
 * @method string getProject()
 * @method string getOrderBy()
 * @method string getImageSizeRange()
 * @method string getRemarksBPrefix()
 * @method string getTagNames()
 * @method string getSourceUriPrefix()
 * @method string getLocationBoundary()
 * @method string getEmotion()
 * @method string getImageTimeRange()
 * @method string getMarker()
 * @method string getOCRContentsMatch()
 * @method string getCreateTimeRange()
 * @method string getSetId()
 * @method string getSourceType()
 * @method string getUpdateTimeRange()
 * @method string getAgeRange()
 * @method string getOrder()
 */
class SearchImages extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'imm';

    /**
     * @var string
     */
    public $version = '2017-09-06';

    /**
     * @var string
     */
    public $action = 'SearchImages';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @param string $gender
     *
     * @return $this
     */
    public function withGender($gender)
    {
        $this->data['Gender']             = $gender;
        $this->options['query']['Gender'] = $gender;

        return $this;
    }

    /**
     * @param string $remarksAPrefix
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withRemarksAPrefix() instead.
     *
     */
    public function setRemarksAPrefix($remarksAPrefix)
    {
        return $this->withRemarksAPrefix($remarksAPrefix);
    }

    /**
     * @param string $remarksAPrefix
     *
     * @return $this
     */
    public function withRemarksAPrefix($remarksAPrefix)
    {
        $this->data['RemarksAPrefix']             = $remarksAPrefix;
        $this->options['query']['RemarksAPrefix'] = $remarksAPrefix;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project']             = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @param string $orderBy
     *
     * @return $this
     */
    public function withOrderBy($orderBy)
    {
        $this->data['OrderBy']             = $orderBy;
        $this->options['query']['OrderBy'] = $orderBy;

        return $this;
    }

    /**
     * @param string $imageSizeRange
     *
     * @return $this
     */
    public function withImageSizeRange($imageSizeRange)
    {
        $this->data['ImageSizeRange']             = $imageSizeRange;
        $this->options['query']['ImageSizeRange'] = $imageSizeRange;

        return $this;
    }

    /**
     * @param string $remarksBPrefix
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withRemarksBPrefix() instead.
     *
     */
    public function setRemarksBPrefix($remarksBPrefix)
    {
        return $this->withRemarksBPrefix($remarksBPrefix);
    }

    /**
     * @param string $remarksBPrefix
     *
     * @return $this
     */
    public function withRemarksBPrefix($remarksBPrefix)
    {
        $this->data['RemarksBPrefix']             = $remarksBPrefix;
        $this->options['query']['RemarksBPrefix'] = $remarksBPrefix;

        return $this;
    }

    /**
     * @param string $tagNames
     *
     * @return $this
     */
    public function withTagNames($tagNames)
    {
        $this->data['TagNames']             = $tagNames;
        $this->options['query']['TagNames'] = $tagNames;

        return $this;
    }

    /**
     * @param string $sourceUriPrefix
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withSourceUriPrefix() instead.
     *
     */
    public function setSourceUriPrefix($sourceUriPrefix)
    {
        return $this->withSourceUriPrefix($sourceUriPrefix);
    }

    /**
     * @param string $sourceUriPrefix
     *
     * @return $this
     */
    public function withSourceUriPrefix($sourceUriPrefix)
    {
        $this->data['SourceUriPrefix']             = $sourceUriPrefix;
        $this->options['query']['SourceUriPrefix'] = $sourceUriPrefix;

        return $this;
    }

    /**
     * @param string $locationBoundary
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withLocationBoundary() instead.
     *
     */
    public function setLocationBoundary($locationBoundary)
    {
        return $this->withLocationBoundary($locationBoundary);
    }

    /**
     * @param string $locationBoundary
     *
     * @return $this
     */
    public function withLocationBoundary($locationBoundary)
    {
        $this->data['LocationBoundary']             = $locationBoundary;
        $this->options['query']['LocationBoundary'] = $locationBoundary;

        return $this;
    }

    /**
     * @param string $emotion
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withEmotion() instead.
     *
     */
    public function setEmotion($emotion)
    {
        return $this->withEmotion($emotion);
    }

    /**
     * @param string $emotion
     *
     * @return $this
     */
    public function withEmotion($emotion)
    {
        $this->data['Emotion']             = $emotion;
        $this->options['query']['Emotion'] = $emotion;

        return $this;
    }

    /**
     * @param string $imageTimeRange
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withImageTimeRange() instead.
     *
     */
    public function setImageTimeRange($imageTimeRange)
    {
        return $this->withImageTimeRange($imageTimeRange);
    }

    /**
     * @param string $imageTimeRange
     *
     * @return $this
     */
    public function withImageTimeRange($imageTimeRange)
    {
        $this->data['ImageTimeRange']             = $imageTimeRange;
        $this->options['query']['ImageTimeRange'] = $imageTimeRange;

        return $this;
    }

    /**
     * @param string $marker
     *
     * @return $this
     */
    public function withMarker($marker)
    {
        $this->data['Marker']             = $marker;
        $this->options['query']['Marker'] = $marker;

        return $this;
    }

    /**
     * @param string $oCRContentsMatch
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withOCRContentsMatch() instead.
     *
     */
    public function setOCRContentsMatch($oCRContentsMatch)
    {
        return $this->withOCRContentsMatch($oCRContentsMatch);
    }

    /**
     * @param string $oCRContentsMatch
     *
     * @return $this
     */
    public function withOCRContentsMatch($oCRContentsMatch)
    {
        $this->data['OCRContentsMatch']             = $oCRContentsMatch;
        $this->options['query']['OCRContentsMatch'] = $oCRContentsMatch;

        return $this;
    }

    /**
     * @param string $createTimeRange
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withCreateTimeRange() instead.
     *
     */
    public function setCreateTimeRange($createTimeRange)
    {
        return $this->withCreateTimeRange($createTimeRange);
    }

    /**
     * @param string $createTimeRange
     *
     * @return $this
     */
    public function withCreateTimeRange($createTimeRange)
    {
        $this->data['CreateTimeRange']             = $createTimeRange;
        $this->options['query']['CreateTimeRange'] = $createTimeRange;

        return $this;
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function withSetId($setId)
    {
        $this->data['SetId']             = $setId;
        $this->options['query']['SetId'] = $setId;

        return $this;
    }

    /**
     * @param string $sourceType
     *
     * @return $this
     */
    public function withSourceType($sourceType)
    {
        $this->data['SourceType']             = $sourceType;
        $this->options['query']['SourceType'] = $sourceType;

        return $this;
    }

    /**
     * @param string $updateTimeRange
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withUpdateTimeRange() instead.
     *
     */
    public function setUpdateTimeRange($updateTimeRange)
    {
        return $this->withUpdateTimeRange($updateTimeRange);
    }

    /**
     * @param string $updateTimeRange
     *
     * @return $this
     */
    public function withUpdateTimeRange($updateTimeRange)
    {
        $this->data['UpdateTimeRange']             = $updateTimeRange;
        $this->options['query']['UpdateTimeRange'] = $updateTimeRange;

        return $this;
    }

    /**
     * @param string $ageRange
     *
     * @return $this
     */
    public function withAgeRange($ageRange)
    {
        $this->data['AgeRange']             = $ageRange;
        $this->options['query']['AgeRange'] = $ageRange;

        return $this;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function withOrder($order)
    {
        $this->data['Order']             = $order;
        $this->options['query']['Order'] = $order;

        return $this;
    }
}
