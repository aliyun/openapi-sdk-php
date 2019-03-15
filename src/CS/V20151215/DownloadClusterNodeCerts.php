<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class DownloadClusterNodeCerts extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/token/[Token]/nodes/[NodeId]/certs';

    public $serviceCode = 'cs';
}
