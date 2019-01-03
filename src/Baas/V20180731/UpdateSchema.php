<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateSchema
 *
 * @method string getSchemaName()
 * @method string getSchemaId()
 * @method string getBizid()
 * @method string getDescription()
 * @method string getCategoryConfigs()
 */
class UpdateSchema extends RpcRequest
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
    public $action = 'UpdateSchema';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSchemaName() instead.
     *
     * @param string $schemaName
     *
     * @return $this
     */
    public function setSchemaName($schemaName)
    {
        return $this->withSchemaName($schemaName);
    }

    /**
     * @param string $schemaName
     *
     * @return $this
     */
    public function withSchemaName($schemaName)
    {
        $this->data['SchemaName'] = $schemaName;
        $this->options['query']['SchemaName'] = $schemaName;

        return $this;
    }

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

    /**
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCategoryConfigs() instead.
     *
     * @param string $categoryConfigs
     *
     * @return $this
     */
    public function setCategoryConfigs($categoryConfigs)
    {
        return $this->withCategoryConfigs($categoryConfigs);
    }

    /**
     * @param string $categoryConfigs
     *
     * @return $this
     */
    public function withCategoryConfigs($categoryConfigs)
    {
        $this->data['CategoryConfigs'] = $categoryConfigs;
        $this->options['query']['CategoryConfigs'] = $categoryConfigs;

        return $this;
    }
}
