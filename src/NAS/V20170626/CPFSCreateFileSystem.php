<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * @method string getFsSpec()
 * @method $this withFsSpec($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getFsDesc()
 * @method $this withFsDesc($value)
 * @method string getSquashType()
 * @method $this withSquashType($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 */
class CPFSCreateFileSystem extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';
}
