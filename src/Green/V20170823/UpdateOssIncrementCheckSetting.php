<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api UpdateOssIncrementCheckSetting
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
class UpdateOssIncrementCheckSetting extends Rpc
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
}
