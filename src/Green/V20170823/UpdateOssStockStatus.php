<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api UpdateOssStockStatus
 *
 * @method string getImageAutoFreeze()
 * @method string getResourceTypeList()
 * @method string getVideoFrameInterval()
 * @method string getVideoMaxSize()
 * @method string getStartDate()
 * @method string getAutoFreezeType()
 * @method string getEndDate()
 * @method string getBucketConfigList()
 * @method string getSourceIp()
 * @method string getSceneList()
 * @method string getVideoAutoFreezeSceneList()
 * @method string getLang()
 * @method string getVideoMaxFrames()
 * @method string getOperation()
 */
class UpdateOssStockStatus extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';

    /**
     * @param string $imageAutoFreeze
     *
     * @return $this
     */
    public function withImageAutoFreeze($imageAutoFreeze)
    {
        $this->data['ImageAutoFreeze'] = $imageAutoFreeze;
        $this->options['query']['ImageAutoFreeze'] = $imageAutoFreeze;

        return $this;
    }

    /**
     * @param string $resourceTypeList
     *
     * @return $this
     */
    public function withResourceTypeList($resourceTypeList)
    {
        $this->data['ResourceTypeList'] = $resourceTypeList;
        $this->options['query']['ResourceTypeList'] = $resourceTypeList;

        return $this;
    }

    /**
     * @param string $videoFrameInterval
     *
     * @return $this
     */
    public function withVideoFrameInterval($videoFrameInterval)
    {
        $this->data['VideoFrameInterval'] = $videoFrameInterval;
        $this->options['query']['VideoFrameInterval'] = $videoFrameInterval;

        return $this;
    }

    /**
     * @param string $videoMaxSize
     *
     * @return $this
     */
    public function withVideoMaxSize($videoMaxSize)
    {
        $this->data['VideoMaxSize'] = $videoMaxSize;
        $this->options['query']['VideoMaxSize'] = $videoMaxSize;

        return $this;
    }

    /**
     * @param string $startDate
     *
     * @return $this
     */
    public function withStartDate($startDate)
    {
        $this->data['StartDate'] = $startDate;
        $this->options['query']['StartDate'] = $startDate;

        return $this;
    }

    /**
     * @param string $autoFreezeType
     *
     * @return $this
     */
    public function withAutoFreezeType($autoFreezeType)
    {
        $this->data['AutoFreezeType'] = $autoFreezeType;
        $this->options['query']['AutoFreezeType'] = $autoFreezeType;

        return $this;
    }

    /**
     * @param string $endDate
     *
     * @return $this
     */
    public function withEndDate($endDate)
    {
        $this->data['EndDate'] = $endDate;
        $this->options['query']['EndDate'] = $endDate;

        return $this;
    }

    /**
     * @param string $bucketConfigList
     *
     * @return $this
     */
    public function withBucketConfigList($bucketConfigList)
    {
        $this->data['BucketConfigList'] = $bucketConfigList;
        $this->options['query']['BucketConfigList'] = $bucketConfigList;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $sceneList
     *
     * @return $this
     */
    public function withSceneList($sceneList)
    {
        $this->data['SceneList'] = $sceneList;
        $this->options['query']['SceneList'] = $sceneList;

        return $this;
    }

    /**
     * @param string $videoAutoFreezeSceneList
     *
     * @return $this
     */
    public function withVideoAutoFreezeSceneList($videoAutoFreezeSceneList)
    {
        $this->data['VideoAutoFreezeSceneList'] = $videoAutoFreezeSceneList;
        $this->options['query']['VideoAutoFreezeSceneList'] = $videoAutoFreezeSceneList;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $videoMaxFrames
     *
     * @return $this
     */
    public function withVideoMaxFrames($videoMaxFrames)
    {
        $this->data['VideoMaxFrames'] = $videoMaxFrames;
        $this->options['query']['VideoMaxFrames'] = $videoMaxFrames;

        return $this;
    }

    /**
     * @param string $operation
     *
     * @return $this
     */
    public function withOperation($operation)
    {
        $this->data['Operation'] = $operation;
        $this->options['query']['Operation'] = $operation;

        return $this;
    }
}
