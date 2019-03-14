<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api StopTasks
 *
 * @method string getTaskIds()
 */
class StopTasks extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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
