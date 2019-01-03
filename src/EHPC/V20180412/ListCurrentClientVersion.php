<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListCurrentClientVersion
 *
 */
class ListCurrentClientVersion extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'ListCurrentClientVersion';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';
}
