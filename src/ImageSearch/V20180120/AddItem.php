<?php

namespace AlibabaCloud\ImageSearch\V20180120;

use AlibabaCloud\Client\Request\RoaRequest;
use AlibabaCloud\ImageSearch\V20180120\Traits\AddItemTrait;

/**
 * Request of AddItem
 *
 * @method string getInstanceName()
 */
class AddItem extends RoaRequest
{
    use AddItemTrait;

    /**
     * @var string
     */
    public $product = 'ImageSearch';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'AddItem';

    /**
     * @var string
     */
    public $pathPattern = '/item/add';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceName() instead.
     *
     * @param string $instanceName
     *
     * @return $this
     */
    public function setinstanceName($instanceName)
    {
        return $this->withInstanceName($instanceName);
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function withInstanceName($instanceName)
    {
        $this->data['InstanceName']             = $instanceName;
        $this->options['query']['instanceName'] = $instanceName;

        return $this;
    }
}
