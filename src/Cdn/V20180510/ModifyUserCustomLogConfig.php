<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyUserCustomLogConfig
 *
 * @method string getOwnerId()
 * @method string getConfigId()
 * @method string getTag()
 */
class ModifyUserCustomLogConfig extends RpcRequest
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
    public $action = 'ModifyUserCustomLogConfig';

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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

    /**
     * @deprecated deprecated since version 2.0, Use withConfigId() instead.
     *
     * @param string $configId
     *
     * @return $this
     */
    public function setConfigId($configId)
    {
        return $this->withConfigId($configId);
    }

    /**
     * @param string $configId
     *
     * @return $this
     */
    public function withConfigId($configId)
    {
        $this->data['ConfigId'] = $configId;
        $this->options['query']['ConfigId'] = $configId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag() instead.
     *
     * @param string $tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        return $this->withTag($tag);
    }

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function withTag($tag)
    {
        $this->data['Tag'] = $tag;
        $this->options['query']['Tag'] = $tag;

        return $this;
    }
}
