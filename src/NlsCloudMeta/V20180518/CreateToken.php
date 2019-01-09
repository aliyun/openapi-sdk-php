<?php

namespace AlibabaCloud\NlsCloudMeta\V20180518;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of CreateToken
 *
 */
class CreateToken extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'nls-cloud-meta';

    /**
     * @var string
     */
    public $version = '2018-05-18';

    /**
     * @var string
     */
    public $action = 'CreateToken';

    /**
     * @var string
     */
    public $pathPattern = '/pop/2018-05-18/tokens';

    /**
     * @var string
     */
    public $method = 'POST';
}
