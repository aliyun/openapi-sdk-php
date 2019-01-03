<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateFileSystem
 *
 * @method string getDescription()
 * @method string getProtocolType()
 * @method string getStorageType()
 */
class CreateFileSystem extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'NAS';

    /**
     * @var string
     */
    public $version = '2017-06-26';

    /**
     * @var string
     */
    public $action = 'CreateFileSystem';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nas';

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
     * @deprecated deprecated since version 2.0, Use withProtocolType() instead.
     *
     * @param string $protocolType
     *
     * @return $this
     */
    public function setProtocolType($protocolType)
    {
        return $this->withProtocolType($protocolType);
    }

    /**
     * @param string $protocolType
     *
     * @return $this
     */
    public function withProtocolType($protocolType)
    {
        $this->data['ProtocolType'] = $protocolType;
        $this->options['query']['ProtocolType'] = $protocolType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStorageType() instead.
     *
     * @param string $storageType
     *
     * @return $this
     */
    public function setStorageType($storageType)
    {
        return $this->withStorageType($storageType);
    }

    /**
     * @param string $storageType
     *
     * @return $this
     */
    public function withStorageType($storageType)
    {
        $this->data['StorageType'] = $storageType;
        $this->options['query']['StorageType'] = $storageType;

        return $this;
    }
}
