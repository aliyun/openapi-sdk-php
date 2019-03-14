<?php

namespace AlibabaCloud\NlsFiletrans\V20180817;

use AlibabaCloud\Rpc;

/**
 * Api SubmitTask
 *
 * @method string getTask()
 * @method string getDebug()
 */
class SubmitTask extends Rpc
{
    public $product = 'nls-filetrans';

    public $version = '2018-08-17';

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
