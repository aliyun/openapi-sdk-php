<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\Rpc;

/**
 * Api QueryGenerateTaskResult
 *
 * @method string getTaskId()
 */
class QueryGenerateTaskResult extends Rpc
{
    public $product = 'lubancloud';

    public $version = '2018-05-09';

    public $method = 'POST';

    public $serviceCode = 'luban';

    /**
     * @param string $taskId
     *
     * @return $this
     */
    public function withTaskId($taskId)
    {
        $this->data['TaskId'] = $taskId;
        $this->options['query']['TaskId'] = $taskId;

        return $this;
    }
}
