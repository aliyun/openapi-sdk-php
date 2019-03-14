<?php

namespace AlibabaCloud\NlsFiletrans\V20180817;

use AlibabaCloud\Rpc;

/**
 * Api GetTaskResult
 *
 * @method string getDebug()
 * @method string getTaskId()
 */
class GetTaskResult extends Rpc
{
    public $product = 'nls-filetrans';

    public $version = '2018-08-17';

    /**
     * @param string $debug
     *
     * @return $this
     */
    public function withDebug($debug)
    {
        $this->data['Debug'] = $debug;
        $this->options['query']['Debug'] = $debug;

        return $this;
    }

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
