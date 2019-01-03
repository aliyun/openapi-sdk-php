<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddCasterVideoResource
 *
 * @method string getVodUrl()
 * @method string getCasterId()
 * @method string getEndOffset()
 * @method string getOwnerId()
 * @method string getMaterialId()
 * @method string getBeginOffset()
 * @method string getLiveStreamUrl()
 * @method string getLocationId()
 * @method string getPtsCallbackInterval()
 * @method string getResourceName()
 * @method string getRepeatNum()
 */
class AddCasterVideoResource extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'AddCasterVideoResource';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withVodUrl() instead.
     *
     * @param string $vodUrl
     *
     * @return $this
     */
    public function setVodUrl($vodUrl)
    {
        return $this->withVodUrl($vodUrl);
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
     * @deprecated deprecated since version 2.0, Use withCasterId() instead.
     *
     * @param string $casterId
     *
     * @return $this
     */
    public function setCasterId($casterId)
    {
        return $this->withCasterId($casterId);
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
     * @deprecated deprecated since version 2.0, Use withEndOffset() instead.
     *
     * @param string $endOffset
     *
     * @return $this
     */
    public function setEndOffset($endOffset)
    {
        return $this->withEndOffset($endOffset);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withMaterialId() instead.
     *
     * @param string $materialId
     *
     * @return $this
     */
    public function setMaterialId($materialId)
    {
        return $this->withMaterialId($materialId);
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
     * @deprecated deprecated since version 2.0, Use withBeginOffset() instead.
     *
     * @param string $beginOffset
     *
     * @return $this
     */
    public function setBeginOffset($beginOffset)
    {
        return $this->withBeginOffset($beginOffset);
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
     * @deprecated deprecated since version 2.0, Use withLiveStreamUrl() instead.
     *
     * @param string $liveStreamUrl
     *
     * @return $this
     */
    public function setLiveStreamUrl($liveStreamUrl)
    {
        return $this->withLiveStreamUrl($liveStreamUrl);
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
     * @deprecated deprecated since version 2.0, Use withLocationId() instead.
     *
     * @param string $locationId
     *
     * @return $this
     */
    public function setLocationId($locationId)
    {
        return $this->withLocationId($locationId);
    }

    /**
     * @param string $locationId
     *
     * @return $this
     */
    public function withLocationId($locationId)
    {
        $this->data['LocationId'] = $locationId;
        $this->options['query']['LocationId'] = $locationId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPtsCallbackInterval() instead.
     *
     * @param string $ptsCallbackInterval
     *
     * @return $this
     */
    public function setPtsCallbackInterval($ptsCallbackInterval)
    {
        return $this->withPtsCallbackInterval($ptsCallbackInterval);
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
     * @deprecated deprecated since version 2.0, Use withResourceName() instead.
     *
     * @param string $resourceName
     *
     * @return $this
     */
    public function setResourceName($resourceName)
    {
        return $this->withResourceName($resourceName);
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
     * @deprecated deprecated since version 2.0, Use withRepeatNum() instead.
     *
     * @param string $repeatNum
     *
     * @return $this
     */
    public function setRepeatNum($repeatNum)
    {
        return $this->withRepeatNum($repeatNum);
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
