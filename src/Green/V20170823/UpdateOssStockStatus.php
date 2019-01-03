<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateOssStockStatus
 *
 * @method string getImageAutoFreeze()
 * @method string getResourceTypeList()
 * @method string getVideoFrameInterval()
 * @method string getVideoMaxSize()
 * @method string getStartDate()
 * @method string getEndDate()
 * @method string getBucketConfigList()
 * @method string getSourceIp()
 * @method string getSceneList()
 * @method string getVideoAutoFreezeSceneList()
 * @method string getLang()
 * @method string getVideoMaxFrames()
 * @method string getOperation()
 */
class UpdateOssStockStatus extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'UpdateOssStockStatus';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @deprecated deprecated since version 2.0, Use withImageAutoFreeze() instead.
     *
     * @param string $imageAutoFreeze
     *
     * @return $this
     */
    public function setImageAutoFreeze($imageAutoFreeze)
    {
        return $this->withImageAutoFreeze($imageAutoFreeze);
    }

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
     * @deprecated deprecated since version 2.0, Use withResourceTypeList() instead.
     *
     * @param string $resourceTypeList
     *
     * @return $this
     */
    public function setResourceTypeList($resourceTypeList)
    {
        return $this->withResourceTypeList($resourceTypeList);
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
     * @deprecated deprecated since version 2.0, Use withVideoFrameInterval() instead.
     *
     * @param string $videoFrameInterval
     *
     * @return $this
     */
    public function setVideoFrameInterval($videoFrameInterval)
    {
        return $this->withVideoFrameInterval($videoFrameInterval);
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
     * @deprecated deprecated since version 2.0, Use withVideoMaxSize() instead.
     *
     * @param string $videoMaxSize
     *
     * @return $this
     */
    public function setVideoMaxSize($videoMaxSize)
    {
        return $this->withVideoMaxSize($videoMaxSize);
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
     * @deprecated deprecated since version 2.0, Use withStartDate() instead.
     *
     * @param string $startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        return $this->withStartDate($startDate);
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
     * @deprecated deprecated since version 2.0, Use withEndDate() instead.
     *
     * @param string $endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        return $this->withEndDate($endDate);
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
     * @deprecated deprecated since version 2.0, Use withBucketConfigList() instead.
     *
     * @param string $bucketConfigList
     *
     * @return $this
     */
    public function setBucketConfigList($bucketConfigList)
    {
        return $this->withBucketConfigList($bucketConfigList);
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
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use withSceneList() instead.
     *
     * @param string $sceneList
     *
     * @return $this
     */
    public function setSceneList($sceneList)
    {
        return $this->withSceneList($sceneList);
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
     * @deprecated deprecated since version 2.0, Use withVideoAutoFreezeSceneList() instead.
     *
     * @param string $videoAutoFreezeSceneList
     *
     * @return $this
     */
    public function setVideoAutoFreezeSceneList($videoAutoFreezeSceneList)
    {
        return $this->withVideoAutoFreezeSceneList($videoAutoFreezeSceneList);
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
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
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
     * @deprecated deprecated since version 2.0, Use withVideoMaxFrames() instead.
     *
     * @param string $videoMaxFrames
     *
     * @return $this
     */
    public function setVideoMaxFrames($videoMaxFrames)
    {
        return $this->withVideoMaxFrames($videoMaxFrames);
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
     * @deprecated deprecated since version 2.0, Use withOperation() instead.
     *
     * @param string $operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        return $this->withOperation($operation);
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
