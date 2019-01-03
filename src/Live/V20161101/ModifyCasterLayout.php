<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyCasterLayout
 *
 * @method array getBlendList()
 * @method array getAudioLayer()
 * @method array getVideoLayer()
 * @method string getCasterId()
 * @method array getMixList()
 * @method string getOwnerId()
 * @method string getLayoutId()
 */
class ModifyCasterLayout extends RpcRequest
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
    public $action = 'ModifyCasterLayout';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use getBlendList() instead.
     *
     * @return array
     */
    public function getBlendLists()
    {
        return $this->getBlendList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBlendList() instead.
     *
     * @param array $blendLists
     *
     * @return $this
     */
    public function setBlendLists(array $blendLists)
    {
        return $this->withBlendList($blendLists);
    }

    /**
     * @param array $blendList
     *
     * @return $this
     */
    public function withBlendList(array $blendList)
    {
        $this->data['BlendList'] = $blendList;
        foreach ($blendList as $i => $iValue) {
            $this->options['query']['BlendList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getAudioLayer() instead.
     *
     * @return array
     */
    public function getAudioLayers()
    {
        return $this->getAudioLayer();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAudioLayer() instead.
     *
     * @param array $audioLayers
     *
     * @return $this
     */
    public function setAudioLayers(array $audioLayers)
    {
        return $this->withAudioLayer($audioLayers);
    }

    /**
     * @param array $audioLayer
     *
     * @return $this
     */
    public function withAudioLayer(array $audioLayer)
    {
        $this->data['AudioLayer'] = $audioLayer;
        foreach ($audioLayer as $i => $iValue) {
            $this->options['query']['AudioLayer.' . ($i + 1) . '.FixedDelayDuration'] = $audioLayer[$i]['FixedDelayDuration'];
            $this->options['query']['AudioLayer.' . ($i + 1) . '.VolumeRate'] = $audioLayer[$i]['VolumeRate'];
            $this->options['query']['AudioLayer.' . ($i + 1) . '.ValidChannel'] = $audioLayer[$i]['ValidChannel'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getVideoLayer() instead.
     *
     * @return array
     */
    public function getVideoLayers()
    {
        return $this->getVideoLayer();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVideoLayer() instead.
     *
     * @param array $videoLayers
     *
     * @return $this
     */
    public function setVideoLayers(array $videoLayers)
    {
        return $this->withVideoLayer($videoLayers);
    }

    /**
     * @param array $videoLayer
     *
     * @return $this
     */
    public function withVideoLayer(array $videoLayer)
    {
        $this->data['VideoLayer'] = $videoLayer;
        foreach ($videoLayer as $i => $iValue) {
            $this->options['query']['VideoLayer.' . ($i + 1) . '.FillMode'] = $videoLayer[$i]['FillMode'];
            $this->options['query']['VideoLayer.' . ($i + 1) . '.WidthNormalized'] = $videoLayer[$i]['WidthNormalized'];
            $this->options['query']['VideoLayer.' . ($i + 1) . '.FixedDelayDuration'] = $videoLayer[$i]['FixedDelayDuration'];
            $this->options['query']['VideoLayer.' . ($i + 1) . '.PositionRefer'] = $videoLayer[$i]['PositionRefer'];
            foreach ($videoLayer[$i]['PositionNormalizeds'] as $j => $jValue) {
                $this->options['query']['VideoLayer.' . ($i + 1) . '.PositionNormalized.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['VideoLayer.' . ($i + 1) . '.HeightNormalized'] = $videoLayer[$i]['HeightNormalized'];
        }

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
     * @deprecated deprecated since version 2.0, Use getMixList() instead.
     *
     * @return array
     */
    public function getMixLists()
    {
        return $this->getMixList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMixList() instead.
     *
     * @param array $mixLists
     *
     * @return $this
     */
    public function setMixLists(array $mixLists)
    {
        return $this->withMixList($mixLists);
    }

    /**
     * @param array $mixList
     *
     * @return $this
     */
    public function withMixList(array $mixList)
    {
        $this->data['MixList'] = $mixList;
        foreach ($mixList as $i => $iValue) {
            $this->options['query']['MixList.' . ($i + 1)] = $iValue;
        }

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
     * @deprecated deprecated since version 2.0, Use withLayoutId() instead.
     *
     * @param string $layoutId
     *
     * @return $this
     */
    public function setLayoutId($layoutId)
    {
        return $this->withLayoutId($layoutId);
    }

    /**
     * @param string $layoutId
     *
     * @return $this
     */
    public function withLayoutId($layoutId)
    {
        $this->data['LayoutId'] = $layoutId;
        $this->options['query']['LayoutId'] = $layoutId;

        return $this;
    }
}
