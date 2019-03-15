<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMonthQuota()
 * @method $this withMonthQuota($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDailyQuota()
 * @method $this withDailyQuota($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountSummary extends Rpc
{
    public $product = 'Sms';

    public $version = '2016-09-27';

    public $method = 'POST';
}
