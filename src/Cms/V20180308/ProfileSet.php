<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getEnableInstallAgentNewECS()
 * @method $this withEnableInstallAgentNewECS($value)
 * @method string getEnableActiveAlert()
 * @method $this withEnableActiveAlert($value)
 * @method string getAutoInstall()
 * @method $this withAutoInstall($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ProfileSet extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
