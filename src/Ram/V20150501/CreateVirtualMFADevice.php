<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * Api CreateVirtualMFADevice
 *
 * @method string getVirtualMFADeviceName()
 */
class CreateVirtualMFADevice extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

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
