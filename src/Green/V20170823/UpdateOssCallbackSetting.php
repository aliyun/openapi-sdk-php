<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getScanCallback()
 * @method $this withScanCallback($value)
 * @method string getScanCallbackSuggestions()
 * @method $this withScanCallbackSuggestions($value)
 * @method string getCallbackSeed()
 * @method $this withCallbackSeed($value)
 * @method string getAuditCallback()
 * @method $this withAuditCallback($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getServiceModules()
 * @method $this withServiceModules($value)
 */
class UpdateOssCallbackSetting extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
