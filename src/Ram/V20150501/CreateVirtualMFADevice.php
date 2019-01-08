<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateVirtualMFADevice
 *
 * @method string getVirtualMFADeviceName()
 */
class CreateVirtualMFADevice extends RpcRequest
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
    public $action = 'CreateVirtualMFADevice';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $virtualMFADeviceName
     *
     * @return $this
     */
    public function withVirtualMFADeviceName($virtualMFADeviceName)
    {
        $this->data['VirtualMFADeviceName'] = $virtualMFADeviceName;
        $this->options['query']['VirtualMFADeviceName'] = $virtualMFADeviceName;

        return $this;
    }
}
