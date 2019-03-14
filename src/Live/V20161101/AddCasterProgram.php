<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api AddCasterProgram
 *
 * @method string getCasterId()
 * @method array getEpisode()
 * @method string getOwnerId()
 */
class AddCasterProgram extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
     * @param array $episode
     *
     * @return $this
     */
    public function withEpisode(array $episode)
    {
        $this->data['Episode'] = $episode;
        foreach ($episode as $i => $iValue) {
            $this->options['query']['Episode.' . ($i + 1) . '.ResourceId'] = $episode[$i]['ResourceId'];
            foreach ($episode[$i]['ComponentIds'] as $j => $jValue) {
                $this->options['query']['Episode.' . ($i + 1) . '.ComponentId.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Episode.' . ($i + 1) . '.SwitchType'] = $episode[$i]['SwitchType'];
            $this->options['query']['Episode.' . ($i + 1) . '.EpisodeType'] = $episode[$i]['EpisodeType'];
            $this->options['query']['Episode.' . ($i + 1) . '.EpisodeName'] = $episode[$i]['EpisodeName'];
            $this->options['query']['Episode.' . ($i + 1) . '.EndTime'] = $episode[$i]['EndTime'];
            $this->options['query']['Episode.' . ($i + 1) . '.StartTime'] = $episode[$i]['StartTime'];
        }

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
}
