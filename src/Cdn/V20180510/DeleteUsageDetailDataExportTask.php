<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteUsageDetailDataExportTask
 *
 * @method string getOwnerId()
 * @method string getTaskId()
 */
class DeleteUsageDetailDataExportTask extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'DeleteUsageDetailDataExportTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

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
