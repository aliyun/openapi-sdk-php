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
