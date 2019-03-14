<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api ModifyCasterVideoResource
 *
 * @method string getResourceId()
 * @method string getVodUrl()
 * @method string getCasterId()
 * @method string getEndOffset()
 * @method string getOwnerId()
 * @method string getMaterialId()
 * @method string getBeginOffset()
 * @method string getLiveStreamUrl()
 * @method string getPtsCallbackInterval()
 * @method string getResourceName()
 * @method string getRepeatNum()
 */
class ModifyCasterVideoResource extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

    /**
     * @param string $resourceId
     *
     * @return $this
     */
    public function withResourceId($resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        $this->options['query']['ResourceId'] = $resourceId;

        return $this;
    }

    /**
     * @param string $vodUrl
     *
     * @return $this
     */
    public function withVodUrl($vodUrl)
    {
        $this->data['VodUrl'] = $vodUrl;
        $this->options['query']['VodUrl'] = $vodUrl;

        return $this;
    }

    /**
     * @param string $casterId
     *
     * @return $this
     */
    public function withCasterId($casterId)
    {
        $this->data['CasterId'] = $casterId;
        $this->options['query']['CasterId'] = $casterId;

        return $this;
    }

    /**
     * @param string $endOffset
     *
     * @return $this
     */
    public function withEndOffset($endOffset)
    {
        $this->data['EndOffset'] = $endOffset;
        $this->options['query']['EndOffset'] = $endOffset;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $materialId
     *
     * @return $this
     */
    public function withMaterialId($materialId)
    {
        $this->data['MaterialId'] = $materialId;
        $this->options['query']['MaterialId'] = $materialId;

        return $this;
    }

    /**
     * @param string $beginOffset
     *
     * @return $this
     */
    public function withBeginOffset($beginOffset)
    {
        $this->data['BeginOffset'] = $beginOffset;
        $this->options['query']['BeginOffset'] = $beginOffset;

        return $this;
    }

    /**
     * @param string $liveStreamUrl
     *
     * @return $this
     */
    public function withLiveStreamUrl($liveStreamUrl)
    {
        $this->data['LiveStreamUrl'] = $liveStreamUrl;
        $this->options['query']['LiveStreamUrl'] = $liveStreamUrl;

        return $this;
    }

    /**
     * @param string $ptsCallbackInterval
     *
     * @return $this
     */
    public function withPtsCallbackInterval($ptsCallbackInterval)
    {
        $this->data['PtsCallbackInterval'] = $ptsCallbackInterval;
        $this->options['query']['PtsCallbackInterval'] = $ptsCallbackInterval;

        return $this;
    }

    /**
     * @param string $resourceName
     *
     * @return $this
     */
    public function withResourceName($resourceName)
    {
        $this->data['ResourceName'] = $resourceName;
        $this->options['query']['ResourceName'] = $resourceName;

        return $this;
    }

    /**
     * @param string $repeatNum
     *
     * @return $this
     */
    public function withRepeatNum($repeatNum)
    {
        $this->data['RepeatNum'] = $repeatNum;
        $this->options['query']['RepeatNum'] = $repeatNum;

        return $this;
    }
}
