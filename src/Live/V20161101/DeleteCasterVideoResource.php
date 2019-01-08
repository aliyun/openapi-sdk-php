<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteCasterVideoResource
 *
 * @method string getResourceId()
 * @method string getCasterId()
 * @method string getOwnerId()
 */
class DeleteCasterVideoResource extends RpcRequest
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
    public $action = 'DeleteCasterVideoResource';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
}
