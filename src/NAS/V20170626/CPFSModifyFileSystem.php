<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * @method string getFsId()
 * @method $this withFsId($value)
 * @method string getLdapUrl()
 * @method $this withLdapUrl($value)
 * @method string getFsDesc()
 * @method $this withFsDesc($value)
 */
class CPFSModifyFileSystem extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';
}
