<?php

namespace AlibabaCloud\NlsFiletrans\V20180817;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubmitTask
 *
 * @method string getTask()
 * @method string getDebug()
 */
class SubmitTask extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'nls-filetrans';

    /**
     * @var string
     */
    public $version = '2018-08-17';

    /**
     * @var string
     */
    public $action = 'SubmitTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $task
     *
     * @return $this
     */
    public function withTask($task)
    {
        $this->data['Task'] = $task;
        $this->options['query']['Task'] = $task;

        return $this;
    }

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
}
