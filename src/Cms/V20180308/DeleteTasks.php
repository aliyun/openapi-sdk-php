<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteTasks
 *
 * @method string getIsDeleteAlarms()
 * @method string getTaskIds()
 */
class DeleteTasks extends RpcRequest
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
    public $action = 'DeleteTasks';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $isDeleteAlarms
     *
     * @return $this
     */
    public function withIsDeleteAlarms($isDeleteAlarms)
    {
        $this->data['IsDeleteAlarms'] = $isDeleteAlarms;
        $this->options['query']['IsDeleteAlarms'] = $isDeleteAlarms;

        return $this;
    }

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
