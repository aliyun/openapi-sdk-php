<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method array getAudioLayer()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method array getMixList()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFollowEnable()
 * @method $this withFollowEnable($value)
 */
class UpdateCasterSceneAudio extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
}
