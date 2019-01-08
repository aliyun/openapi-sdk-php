<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateUserUsageDataExportTask
 *
 * @method string getTaskName()
 * @method string getLanguage()
 * @method string getStartTime()
 * @method string getEndTime()
 * @method string getOwnerId()
 */
class CreateUserUsageDataExportTask extends RpcRequest
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
    public $action = 'CreateUserUsageDataExportTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $taskName
     *
     * @return $this
     */
    public function withTaskName($taskName)
    {
        $this->data['TaskName'] = $taskName;
        $this->options['query']['TaskName'] = $taskName;

        return $this;
    }

    /**
     * @param string $language
     *
     * @return $this
     */
    public function withLanguage($language)
    {
        $this->data['Language'] = $language;
        $this->options['query']['Language'] = $language;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

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
}
