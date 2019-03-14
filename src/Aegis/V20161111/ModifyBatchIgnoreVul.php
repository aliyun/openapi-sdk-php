<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api ModifyBatchIgnoreVul
 *
 * @method string getReason()
 * @method string getSourceIp()
 * @method string getInfo()
 */
class ModifyBatchIgnoreVul extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $reason
     *
     * @return $this
     */
    public function withReason($reason)
    {
        $this->data['Reason'] = $reason;
        $this->options['query']['Reason'] = $reason;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $info
     *
     * @return $this
     */
    public function withInfo($info)
    {
        $this->data['Info'] = $info;
        $this->options['query']['Info'] = $info;

        return $this;
    }
}
