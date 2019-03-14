<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

/**
 * Api BindImagePackage
 *
 * @method string getEcsInstanceId()
 * @method string getImagePackageInstanceId()
 */
class BindImagePackage extends Rpc
{
    public $product = 'Market';

    public $version = '2015-11-01';

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
