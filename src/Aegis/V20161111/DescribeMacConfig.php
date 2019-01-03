<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeMacConfig
 *
 * @method string getResourceOwnerId()
 * @method string getTypes()
 * @method string getSourceIp()
 * @method string getExtern()
 * @method string getType()
 * @method string getConfig()
 * @method string getTarget()
 */
class DescribeMacConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeMacConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTypes() instead.
     *
     * @param string $types
     *
     * @return $this
     */
    public function setTypes($types)
    {
        return $this->withTypes($types);
    }

    /**
     * @param string $types
     *
     * @return $this
     */
    public function withTypes($types)
    {
        $this->data['Types'] = $types;
        $this->options['query']['Types'] = $types;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use withExtern() instead.
     *
     * @param string $extern
     *
     * @return $this
     */
    public function setExtern($extern)
    {
        return $this->withExtern($extern);
    }

    /**
     * @param string $extern
     *
     * @return $this
     */
    public function withExtern($extern)
    {
        $this->data['Extern'] = $extern;
        $this->options['query']['Extern'] = $extern;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withConfig() instead.
     *
     * @param string $config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        return $this->withConfig($config);
    }

    /**
     * @param string $config
     *
     * @return $this
     */
    public function withConfig($config)
    {
        $this->data['Config'] = $config;
        $this->options['query']['Config'] = $config;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTarget() instead.
     *
     * @param string $target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        return $this->withTarget($target);
    }

    /**
     * @param string $target
     *
     * @return $this
     */
    public function withTarget($target)
    {
        $this->data['Target'] = $target;
        $this->options['query']['Target'] = $target;

        return $this;
    }
}
