<?php

namespace AlibabaCloud\ImageSearch\V20180120;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DeleteItem
 *
 * @method string getInstanceName()
 */
class DeleteItem extends RoaRequest
{

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
    public $action = 'DeleteItem';

    /**
     * @var string
     */
    public $pathPattern = '/item/delete';

    /**
     * @var string
     */
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
