<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api FindImages
 *
 * @method string getGender()
 * @method string getProject()
 * @method string getExternalId()
 * @method string getImageSizeRange()
 * @method string getRemarksBPrefix()
 * @method string getLocationBoundary()
 * @method string getImageTimeRange()
 * @method string getOCRContentsMatch()
 * @method string getLimit()
 * @method string getRemarksDPrefix()
 * @method string getSourceType()
 * @method string getAgeRange()
 * @method string getOrder()
 * @method string getRemarksAPrefix()
 * @method string getGroupId()
 * @method string getOrderBy()
 * @method string getTagNames()
 * @method string getSourceUriPrefix()
 * @method string getEmotion()
 * @method string getMarker()
 * @method string getRemarksCPrefix()
 * @method string getCreateTimeRange()
 * @method string getSetId()
 * @method string getModifyTimeRange()
 */
class FindImages extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';

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
     * @param string $externalId
     *
     * @return $this
     */
    public function withExternalId($externalId)
    {
        $this->data['ExternalId'] = $externalId;
        $this->options['query']['ExternalId'] = $externalId;

        return $this;
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
     * @param string $limit
     *
     * @return $this
     */
    public function withLimit($limit)
    {
        $this->data['Limit'] = $limit;
        $this->options['query']['Limit'] = $limit;

        return $this;
    }

    /**
     * @param string $remarksDPrefix
     *
     * @return $this
     */
    public function withRemarksDPrefix($remarksDPrefix)
    {
        $this->data['RemarksDPrefix'] = $remarksDPrefix;
        $this->options['query']['RemarksDPrefix'] = $remarksDPrefix;

        return $this;
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
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
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
     * @param string $remarksCPrefix
     *
     * @return $this
     */
    public function withRemarksCPrefix($remarksCPrefix)
    {
        $this->data['RemarksCPrefix'] = $remarksCPrefix;
        $this->options['query']['RemarksCPrefix'] = $remarksCPrefix;

        return $this;
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
     * @param string $modifyTimeRange
     *
     * @return $this
     */
    public function withModifyTimeRange($modifyTimeRange)
    {
        $this->data['ModifyTimeRange'] = $modifyTimeRange;
        $this->options['query']['ModifyTimeRange'] = $modifyTimeRange;

        return $this;
    }
}
