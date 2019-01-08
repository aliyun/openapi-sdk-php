<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SchemaDetail
 *
 * @method string getSchemaId()
 * @method string getBizid()
 */
class SchemaDetail extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'SchemaDetail';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $schemaId
     *
     * @return $this
     */
    public function withSchemaId($schemaId)
    {
        $this->data['SchemaId'] = $schemaId;
        $this->options['query']['SchemaId'] = $schemaId;

        return $this;
    }

    /**
     * @param string $bizid
     *
     * @return $this
     */
    public function withBizid($bizid)
    {
        $this->data['Bizid'] = $bizid;
        $this->options['query']['Bizid'] = $bizid;

        return $this;
    }
}
