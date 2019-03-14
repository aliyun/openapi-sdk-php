<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api BindSLB
 *
 * @method string getSlbID()
 * @method string getClusterId()
 */
class BindSLB extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/clusters/[ClusterId]/slb/[SlbID]/bind';

    public $method = 'POST';

    public $serviceCode = 'cs';

    /**
     * @param string $slbID
     *
     * @return $this
     */
    public function withSlbID($slbID)
    {
        $this->data['SlbID'] = $slbID;
        $this->pathParameters['SlbID'] = $slbID;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->pathParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
