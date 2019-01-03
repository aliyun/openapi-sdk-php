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
     * @deprecated deprecated since version 2.0, Use withSchemaId() instead.
     *
     * @param string $schemaId
     *
     * @return $this
     */
    public function setSchemaId($schemaId)
    {
        return $this->withSchemaId($schemaId);
    }

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
     * @deprecated deprecated since version 2.0, Use withBizid() instead.
     *
     * @param string $bizid
     *
     * @return $this
     */
    public function setBizid($bizid)
    {
        return $this->withBizid($bizid);
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
