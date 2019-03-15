<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method array getBlendList()
 * @method array getAudioLayer()
 * @method array getVideoLayer()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method array getMixList()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddCasterLayout extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
