<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddCasterProgram
 *
 * @method string getCasterId()
 * @method array getEpisode()
 * @method string getOwnerId()
 */
class AddCasterProgram extends RpcRequest
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
    public $action = 'AddCasterProgram';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

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
     * @deprecated deprecated since version 2.0, Use getEpisode() instead.
     *
     * @return array
     */
    public function getEpisodes()
    {
        return $this->getEpisode();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEpisode() instead.
     *
     * @param array $episodes
     *
     * @return $this
     */
    public function setEpisodes(array $episodes)
    {
        return $this->withEpisode($episodes);
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
}
