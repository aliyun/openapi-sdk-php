<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getIsDeleteAlarms()
 * @method $this withIsDeleteAlarms($value)
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class DeleteTasks extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
