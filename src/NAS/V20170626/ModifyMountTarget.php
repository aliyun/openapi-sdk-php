<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * Api ModifyMountTarget
 *
 * @method string getMountTargetDomain()
 * @method string getAccessGroupName()
 * @method string getFileSystemId()
 * @method string getStatus()
 */
class ModifyMountTarget extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';

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
