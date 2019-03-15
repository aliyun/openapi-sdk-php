<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method array getTaskIdList()
 */
class TaskConfigUnhealthy extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

    /**
     * @param array $taskIdList
     *
     * @return $this
     */
    public function withTaskIdList(array $taskIdList)
    {
        $this->data['TaskIdList'] = $taskIdList;
        foreach ($taskIdList as $i => $iValue) {
            $this->options['query']['TaskIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
