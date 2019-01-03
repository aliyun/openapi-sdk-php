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
     * @deprecated deprecated since version 2.0, Use withIsDeleteAlarms() instead.
     *
     * @param string $isDeleteAlarms
     *
     * @return $this
     */
    public function setIsDeleteAlarms($isDeleteAlarms)
    {
        return $this->withIsDeleteAlarms($isDeleteAlarms);
    }

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
     * @deprecated deprecated since version 2.0, Use withTaskIds() instead.
     *
     * @param string $taskIds
     *
     * @return $this
     */
    public function setTaskIds($taskIds)
    {
        return $this->withTaskIds($taskIds);
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
