<?php

namespace AlibabaCloud\BatchCompute\V20130111;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of ListSnapshots
 *
 * @method string getResourceOwnerId()
 */
class ListSnapshots extends RoaRequest
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
    public $action = 'ListSnapshots';

    /**
     * @var string
     */
    public $pathPattern = '/snapshots';

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
}
