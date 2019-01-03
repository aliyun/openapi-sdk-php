<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateOssIncrementCheckSetting
 *
 * @method string getImageAutoFreeze()
 * @method string getVideoSceneList()
 * @method string getImageSceneList()
 * @method string getBucketConfigList()
 * @method string getSourceIp()
 * @method string getImageScanLimit()
 * @method string getVideoAutoFreezeSceneList()
 * @method string getVideoFrameInterval()
 * @method string getVideoMaxSize()
 * @method string getLang()
 * @method string getVideoMaxFrames()
 */
class UpdateOssIncrementCheckSetting extends RpcRequest
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
    public $action = 'UpdateOssIncrementCheckSetting';

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
     * @deprecated deprecated since version 2.0, Use withVideoSceneList() instead.
     *
     * @param string $videoSceneList
     *
     * @return $this
     */
    public function setVideoSceneList($videoSceneList)
    {
        return $this->withVideoSceneList($videoSceneList);
    }

    /**
     * @param string $videoSceneList
     *
     * @return $this
     */
    public function withVideoSceneList($videoSceneList)
    {
        $this->data['VideoSceneList'] = $videoSceneList;
        $this->options['query']['VideoSceneList'] = $videoSceneList;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageSceneList() instead.
     *
     * @param string $imageSceneList
     *
     * @return $this
     */
    public function setImageSceneList($imageSceneList)
    {
        return $this->withImageSceneList($imageSceneList);
    }

    /**
     * @param string $imageSceneList
     *
     * @return $this
     */
    public function withImageSceneList($imageSceneList)
    {
        $this->data['ImageSceneList'] = $imageSceneList;
        $this->options['query']['ImageSceneList'] = $imageSceneList;

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
     * @deprecated deprecated since version 2.0, Use withImageScanLimit() instead.
     *
     * @param string $imageScanLimit
     *
     * @return $this
     */
    public function setImageScanLimit($imageScanLimit)
    {
        return $this->withImageScanLimit($imageScanLimit);
    }

    /**
     * @param string $imageScanLimit
     *
     * @return $this
     */
    public function withImageScanLimit($imageScanLimit)
    {
        $this->data['ImageScanLimit'] = $imageScanLimit;
        $this->options['query']['ImageScanLimit'] = $imageScanLimit;

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
}
