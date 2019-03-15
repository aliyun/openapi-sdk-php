<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method string getAutoCleanEnabled()
 * @method $this withAutoCleanEnabled($value)
 * @method string getDefaultTrashQuota()
 * @method $this withDefaultTrashQuota($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getDefaultQuota()
 * @method $this withDefaultQuota($value)
 * @method string getAutoCleanDays()
 * @method $this withAutoCleanDays($value)
 */
class EditPhotoStore extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';
}
