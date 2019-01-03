<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListAvailableFileSystemTypes
 *
 */
class ListAvailableFileSystemTypes extends RpcRequest
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
    public $action = 'ListAvailableFileSystemTypes';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';
}
