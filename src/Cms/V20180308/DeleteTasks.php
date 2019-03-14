<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api DeleteTasks
 *
 * @method string getIsDeleteAlarms()
 * @method string getTaskIds()
 */
class DeleteTasks extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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
