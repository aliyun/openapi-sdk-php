<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteFileSystem
 *
 * @method string getFileSystemId()
 */
class DeleteFileSystem extends RpcRequest
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
    public $action = 'DeleteFileSystem';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nas';

    /**
     * @deprecated deprecated since version 2.0, Use withFileSystemId() instead.
     *
     * @param string $fileSystemId
     *
     * @return $this
     */
    public function setFileSystemId($fileSystemId)
    {
        return $this->withFileSystemId($fileSystemId);
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
