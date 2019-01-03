<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeMountTargets
 *
 * @method string getMountTargetDomain()
 * @method string getPageSize()
 * @method string getPageNumber()
 * @method string getFileSystemId()
 */
class DescribeMountTargets extends RpcRequest
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
    public $action = 'DescribeMountTargets';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nas';

    /**
     * @deprecated deprecated since version 2.0, Use withMountTargetDomain() instead.
     *
     * @param string $mountTargetDomain
     *
     * @return $this
     */
    public function setMountTargetDomain($mountTargetDomain)
    {
        return $this->withMountTargetDomain($mountTargetDomain);
    }

    /**
     * @param string $mountTargetDomain
     *
     * @return $this
     */
    public function withMountTargetDomain($mountTargetDomain)
    {
        $this->data['MountTargetDomain'] = $mountTargetDomain;
        $this->options['query']['MountTargetDomain'] = $mountTargetDomain;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

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
