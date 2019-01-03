<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateCasterSceneAudio
 *
 * @method array getAudioLayer()
 * @method string getCasterId()
 * @method string getSceneId()
 * @method array getMixList()
 * @method string getOwnerId()
 * @method string getFollowEnable()
 */
class UpdateCasterSceneAudio extends RpcRequest
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
    public $action = 'UpdateCasterSceneAudio';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

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
     * @deprecated deprecated since version 2.0, Use withSceneId() instead.
     *
     * @param string $sceneId
     *
     * @return $this
     */
    public function setSceneId($sceneId)
    {
        return $this->withSceneId($sceneId);
    }

    /**
     * @param string $sceneId
     *
     * @return $this
     */
    public function withSceneId($sceneId)
    {
        $this->data['SceneId'] = $sceneId;
        $this->options['query']['SceneId'] = $sceneId;

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
     * @deprecated deprecated since version 2.0, Use withFollowEnable() instead.
     *
     * @param string $followEnable
     *
     * @return $this
     */
    public function setFollowEnable($followEnable)
    {
        return $this->withFollowEnable($followEnable);
    }

    /**
     * @param string $followEnable
     *
     * @return $this
     */
    public function withFollowEnable($followEnable)
    {
        $this->data['FollowEnable'] = $followEnable;
        $this->options['query']['FollowEnable'] = $followEnable;

        return $this;
    }
}
