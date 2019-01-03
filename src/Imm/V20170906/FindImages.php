<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FindImages
 *
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
class FindImages extends RpcRequest
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
    public $action = 'FindImages';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withGender() instead.
     *
     * @param string $gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        return $this->withGender($gender);
    }

    /**
     * @param string $gender
     *
     * @return $this
     */
    public function withGender($gender)
    {
        $this->data['Gender'] = $gender;
        $this->options['query']['Gender'] = $gender;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRemarksAPrefix() instead.
     *
     * @param string $remarksAPrefix
     *
     * @return $this
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
        $this->data['RemarksAPrefix'] = $remarksAPrefix;
        $this->options['query']['RemarksAPrefix'] = $remarksAPrefix;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProject() instead.
     *
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        return $this->withProject($project);
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderBy() instead.
     *
     * @param string $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        return $this->withOrderBy($orderBy);
    }

    /**
     * @param string $orderBy
     *
     * @return $this
     */
    public function withOrderBy($orderBy)
    {
        $this->data['OrderBy'] = $orderBy;
        $this->options['query']['OrderBy'] = $orderBy;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageSizeRange() instead.
     *
     * @param string $imageSizeRange
     *
     * @return $this
     */
    public function setImageSizeRange($imageSizeRange)
    {
        return $this->withImageSizeRange($imageSizeRange);
    }

    /**
     * @param string $imageSizeRange
     *
     * @return $this
     */
    public function withImageSizeRange($imageSizeRange)
    {
        $this->data['ImageSizeRange'] = $imageSizeRange;
        $this->options['query']['ImageSizeRange'] = $imageSizeRange;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRemarksBPrefix() instead.
     *
     * @param string $remarksBPrefix
     *
     * @return $this
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
        $this->data['RemarksBPrefix'] = $remarksBPrefix;
        $this->options['query']['RemarksBPrefix'] = $remarksBPrefix;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagNames() instead.
     *
     * @param string $tagNames
     *
     * @return $this
     */
    public function setTagNames($tagNames)
    {
        return $this->withTagNames($tagNames);
    }

    /**
     * @param string $tagNames
     *
     * @return $this
     */
    public function withTagNames($tagNames)
    {
        $this->data['TagNames'] = $tagNames;
        $this->options['query']['TagNames'] = $tagNames;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceUriPrefix() instead.
     *
     * @param string $sourceUriPrefix
     *
     * @return $this
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
        $this->data['SourceUriPrefix'] = $sourceUriPrefix;
        $this->options['query']['SourceUriPrefix'] = $sourceUriPrefix;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLocationBoundary() instead.
     *
     * @param string $locationBoundary
     *
     * @return $this
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
        $this->data['LocationBoundary'] = $locationBoundary;
        $this->options['query']['LocationBoundary'] = $locationBoundary;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEmotion() instead.
     *
     * @param string $emotion
     *
     * @return $this
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
        $this->data['Emotion'] = $emotion;
        $this->options['query']['Emotion'] = $emotion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageTimeRange() instead.
     *
     * @param string $imageTimeRange
     *
     * @return $this
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
        $this->data['ImageTimeRange'] = $imageTimeRange;
        $this->options['query']['ImageTimeRange'] = $imageTimeRange;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMarker() instead.
     *
     * @param string $marker
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        return $this->withMarker($marker);
    }

    /**
     * @param string $marker
     *
     * @return $this
     */
    public function withMarker($marker)
    {
        $this->data['Marker'] = $marker;
        $this->options['query']['Marker'] = $marker;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOCRContentsMatch() instead.
     *
     * @param string $oCRContentsMatch
     *
     * @return $this
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
        $this->data['OCRContentsMatch'] = $oCRContentsMatch;
        $this->options['query']['OCRContentsMatch'] = $oCRContentsMatch;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCreateTimeRange() instead.
     *
     * @param string $createTimeRange
     *
     * @return $this
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
        $this->data['CreateTimeRange'] = $createTimeRange;
        $this->options['query']['CreateTimeRange'] = $createTimeRange;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSetId() instead.
     *
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        return $this->withSetId($setId);
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function withSetId($setId)
    {
        $this->data['SetId'] = $setId;
        $this->options['query']['SetId'] = $setId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceType() instead.
     *
     * @param string $sourceType
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        return $this->withSourceType($sourceType);
    }

    /**
     * @param string $sourceType
     *
     * @return $this
     */
    public function withSourceType($sourceType)
    {
        $this->data['SourceType'] = $sourceType;
        $this->options['query']['SourceType'] = $sourceType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUpdateTimeRange() instead.
     *
     * @param string $updateTimeRange
     *
     * @return $this
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
        $this->data['UpdateTimeRange'] = $updateTimeRange;
        $this->options['query']['UpdateTimeRange'] = $updateTimeRange;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAgeRange() instead.
     *
     * @param string $ageRange
     *
     * @return $this
     */
    public function setAgeRange($ageRange)
    {
        return $this->withAgeRange($ageRange);
    }

    /**
     * @param string $ageRange
     *
     * @return $this
     */
    public function withAgeRange($ageRange)
    {
        $this->data['AgeRange'] = $ageRange;
        $this->options['query']['AgeRange'] = $ageRange;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrder() instead.
     *
     * @param string $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        return $this->withOrder($order);
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function withOrder($order)
    {
        $this->data['Order'] = $order;
        $this->options['query']['Order'] = $order;

        return $this;
    }
}
