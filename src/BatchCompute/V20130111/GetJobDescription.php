<?php

namespace AlibabaCloud\BatchCompute\V20130111;

use AlibabaCloud\Roa;

/**
 * @method string getResourceOwnerId()
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class GetJobDescription extends Roa
{
    public $product = 'BatchCompute';

    public $version = '2013-01-11';

    public $pathPattern = '/jobs/[ResourceName]/description';

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
