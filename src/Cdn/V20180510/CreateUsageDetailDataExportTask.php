<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateUsageDetailDataExportTask extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}
