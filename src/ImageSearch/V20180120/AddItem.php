<?php

namespace AlibabaCloud\ImageSearch\V20180120;

use AlibabaCloud\ImageSearch\V20180120\Traits\AddItemTrait;
use AlibabaCloud\Roa;

/**
 * @method string getInstanceName()
 */
class AddItem extends Roa
{
    use AddItemTrait;

    public $product = 'ImageSearch';

    public $version = '2018-01-20';

    public $pathPattern = '/item/add';

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
