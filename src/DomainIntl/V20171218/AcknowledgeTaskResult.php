<?php

namespace AlibabaCloud\DomainIntl\V20171218;

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
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

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
