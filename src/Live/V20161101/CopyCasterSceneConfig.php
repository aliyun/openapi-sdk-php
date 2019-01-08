<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CopyCasterSceneConfig
 *
 * @method string getFromSceneId()
 * @method string getCasterId()
 * @method string getOwnerId()
 * @method string getToSceneId()
 */
class CopyCasterSceneConfig extends RpcRequest
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
    public $action = 'CopyCasterSceneConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @param string $fromSceneId
     *
     * @return $this
     */
    public function withFromSceneId($fromSceneId)
    {
        $this->data['FromSceneId'] = $fromSceneId;
        $this->options['query']['FromSceneId'] = $fromSceneId;

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
     * @param string $toSceneId
     *
     * @return $this
     */
    public function withToSceneId($toSceneId)
    {
        $this->data['ToSceneId'] = $toSceneId;
        $this->options['query']['ToSceneId'] = $toSceneId;

        return $this;
    }
}
