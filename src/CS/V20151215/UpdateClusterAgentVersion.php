<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class UpdateClusterAgentVersion extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/admin/clusters/[ClusterId]/agent/[Version]/modify';

    public $method = 'POST';

    public $serviceCode = 'cs';
}
