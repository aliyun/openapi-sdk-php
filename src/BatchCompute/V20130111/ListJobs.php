<?php

namespace AlibabaCloud\BatchCompute\V20130111;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of ListJobs
 *
 * @method string getResourceOwnerId()
 */
class ListJobs extends RoaRequest
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
    public $action = 'ListJobs';

    /**
     * @var string
     */
    public $pathPattern = '/jobs';

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
