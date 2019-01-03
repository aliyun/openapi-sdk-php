<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of BindSLB
 *
 * @method string getSlbID()
 * @method string getClusterId()
 */
class BindSLB extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'CS';

    /**
     * @var string
     */
    public $version = '2015-12-15';

    /**
     * @var string
     */
    public $action = 'BindSLB';

    /**
     * @var string
     */
    public $pathPattern = '/clusters/[ClusterId]/slb/[SlbID]/bind';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cs';

    /**
     * @deprecated deprecated since version 2.0, Use withSlbID() instead.
     *
     * @param string $slbID
     *
     * @return $this
     */
    public function setSlbID($slbID)
    {
        return $this->withSlbID($slbID);
    }

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
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
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
