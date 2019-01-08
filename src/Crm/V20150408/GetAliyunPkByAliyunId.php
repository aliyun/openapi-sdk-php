<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetAliyunPkByAliyunId
 *
 * @method string getAliyunId()
 */
class GetAliyunPkByAliyunId extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Crm';

    /**
     * @var string
     */
    public $version = '2015-04-08';

    /**
     * @var string
     */
    public $action = 'GetAliyunPkByAliyunId';

    /**
     * @var string
     */
    public $method = 'POST';

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
