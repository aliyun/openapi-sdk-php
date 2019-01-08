<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteCasterEpisode
 *
 * @method string getCasterId()
 * @method string getOwnerId()
 * @method string getEpisodeId()
 */
class DeleteCasterEpisode extends RpcRequest
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
    public $action = 'DeleteCasterEpisode';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $episodeId
     *
     * @return $this
     */
    public function withEpisodeId($episodeId)
    {
        $this->data['EpisodeId'] = $episodeId;
        $this->options['query']['EpisodeId'] = $episodeId;

        return $this;
    }
}
