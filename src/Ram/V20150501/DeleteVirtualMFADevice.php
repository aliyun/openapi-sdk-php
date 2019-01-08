<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteVirtualMFADevice
 *
 * @method string getSerialNumber()
 */
class DeleteVirtualMFADevice extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ram';

    /**
     * @var string
     */
    public $version = '2015-05-01';

    /**
     * @var string
     */
    public $action = 'DeleteVirtualMFADevice';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $serialNumber
     *
     * @return $this
     */
    public function withSerialNumber($serialNumber)
    {
        $this->data['SerialNumber'] = $serialNumber;
        $this->options['query']['SerialNumber'] = $serialNumber;

        return $this;
    }
}
