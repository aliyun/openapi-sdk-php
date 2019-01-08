<?php

namespace AlibabaCloud\BatchCompute\V20130111;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DeleteSnapshot
 *
 * @method string getResourceOwnerId()
 * @method string getResourceName()
 */
class DeleteSnapshot extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'BatchCompute';

    /**
     * @var string
     */
    public $version = '2013-01-11';

    /**
     * @var string
     */
    public $action = 'DeleteSnapshot';

    /**
     * @var string
     */
    public $pathPattern = '/snapshots/[ResourceName]';

    /**
     * @var string
     */
    public $method = 'DELETE';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resourceName
     *
     * @return $this
     */
    public function withResourceName($resourceName)
    {
        $this->data['ResourceName'] = $resourceName;
        $this->pathParameters['ResourceName'] = $resourceName;

        return $this;
    }
}
