<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of StartTasks
 *
 * @method string getTaskIds()
 */
class StartTasks extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'StartTasks';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $taskIds
     *
     * @return $this
     */
    public function withTaskIds($taskIds)
    {
        $this->data['TaskIds'] = $taskIds;
        $this->options['query']['TaskIds'] = $taskIds;

        return $this;
    }
}
