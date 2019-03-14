<?php

namespace AlibabaCloud\ImageSearch\V20180120;

use AlibabaCloud\ImageSearch\V20180120\Traits\DeleteItemTrait;
use AlibabaCloud\Roa;

/**
 * Api DeleteItem
 *
 * @method string getInstanceName()
 */
class DeleteItem extends Roa
{
    use DeleteItemTrait;

    public $product = 'ImageSearch';

    public $version = '2018-01-20';

    public $pathPattern = '/item/delete';

    public $method = 'POST';

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function withInstanceName($instanceName)
    {
        $this->data['InstanceName'] = $instanceName;
        $this->options['query']['instanceName'] = $instanceName;

        return $this;
    }
}
