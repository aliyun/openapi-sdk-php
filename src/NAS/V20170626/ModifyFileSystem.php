<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyFileSystem
 *
 * @method string getDescription()
 * @method string getFileSystemId()
 */
class ModifyFileSystem extends RpcRequest
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
    public $action = 'ModifyFileSystem';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $fileSystemId
     *
     * @return $this
     */
    public function withFileSystemId($fileSystemId)
    {
        $this->data['FileSystemId'] = $fileSystemId;
        $this->options['query']['FileSystemId'] = $fileSystemId;

        return $this;
    }
}
