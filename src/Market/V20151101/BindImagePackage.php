<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BindImagePackage
 *
 * @method string getEcsInstanceId()
 * @method string getImagePackageInstanceId()
 */
class BindImagePackage extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Market';

    /**
     * @var string
     */
    public $version = '2015-11-01';

    /**
     * @var string
     */
    public $action = 'BindImagePackage';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withEcsInstanceId() instead.
     *
     * @param string $ecsInstanceId
     *
     * @return $this
     */
    public function setEcsInstanceId($ecsInstanceId)
    {
        return $this->withEcsInstanceId($ecsInstanceId);
    }

    /**
     * @param string $ecsInstanceId
     *
     * @return $this
     */
    public function withEcsInstanceId($ecsInstanceId)
    {
        $this->data['EcsInstanceId'] = $ecsInstanceId;
        $this->options['query']['EcsInstanceId'] = $ecsInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImagePackageInstanceId() instead.
     *
     * @param string $imagePackageInstanceId
     *
     * @return $this
     */
    public function setImagePackageInstanceId($imagePackageInstanceId)
    {
        return $this->withImagePackageInstanceId($imagePackageInstanceId);
    }

    /**
     * @param string $imagePackageInstanceId
     *
     * @return $this
     */
    public function withImagePackageInstanceId($imagePackageInstanceId)
    {
        $this->data['ImagePackageInstanceId'] = $imagePackageInstanceId;
        $this->options['query']['ImagePackageInstanceId'] = $imagePackageInstanceId;

        return $this;
    }
}
