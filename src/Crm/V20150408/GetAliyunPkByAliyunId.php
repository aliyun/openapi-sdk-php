<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Rpc;

/**
 * Api GetAliyunPkByAliyunId
 *
 * @method string getAliyunId()
 */
class GetAliyunPkByAliyunId extends Rpc
{
    public $product = 'Crm';

    public $version = '2015-04-08';

    public $method = 'POST';

    public $serviceCode = 'crm';

    /**
     * @param string $aliyunId
     *
     * @return $this
     */
    public function withAliyunId($aliyunId)
    {
        $this->data['AliyunId'] = $aliyunId;
        $this->options['query']['AliyunId'] = $aliyunId;

        return $this;
    }
}
