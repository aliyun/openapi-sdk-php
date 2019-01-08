<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryGenerateTaskResult
 *
 * @method string getTaskId()
 */
class QueryGenerateTaskResult extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'lubancloud';

    /**
     * @var string
     */
    public $version = '2018-05-09';

    /**
     * @var string
     */
    public $action = 'QueryGenerateTaskResult';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
