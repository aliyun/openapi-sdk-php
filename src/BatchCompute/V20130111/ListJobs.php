<?php

namespace AlibabaCloud\BatchCompute\V20130111;

use AlibabaCloud\Roa;

/**
 * @method string getResourceOwnerId()
 */
class ListJobs extends Roa
{
    public $product = 'BatchCompute';

    public $version = '2013-01-11';

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
