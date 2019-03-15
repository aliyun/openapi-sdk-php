<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateUserUsageDataExportTask extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}
