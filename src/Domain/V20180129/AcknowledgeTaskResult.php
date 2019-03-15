<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method array getTaskDetailNo()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AcknowledgeTaskResult extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

    /**
     * @param array $taskDetailNo
     *
     * @return $this
     */
    public function withTaskDetailNo(array $taskDetailNo)
    {
        $this->data['TaskDetailNo'] = $taskDetailNo;
        foreach ($taskDetailNo as $i => $iValue) {
            $this->options['query']['TaskDetailNo.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
