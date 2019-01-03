<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyMountTarget
 *
 * @method string getMountTargetDomain()
 * @method string getAccessGroupName()
 * @method string getFileSystemId()
 * @method string getStatus()
 */
class ModifyMountTarget extends RpcRequest
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
    public $action = 'ModifyMountTarget';

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
     * @deprecated deprecated since version 2.0, Use withAccessGroupName() instead.
     *
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function setAccessGroupName($accessGroupName)
    {
        return $this->withAccessGroupName($accessGroupName);
    }

    /**
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function withAccessGroupName($accessGroupName)
    {
        $this->data['AccessGroupName'] = $accessGroupName;
        $this->options['query']['AccessGroupName'] = $accessGroupName;

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

    /**
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->withStatus($status);
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
