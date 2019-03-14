<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * Api CreateFileSystem
 *
 * @method string getDescription()
 * @method string getProtocolType()
 * @method string getStorageType()
 */
class CreateFileSystem extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';

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
