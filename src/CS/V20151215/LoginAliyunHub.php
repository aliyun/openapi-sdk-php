<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of LoginAliyunHub
 *
 * @method string getClusterId()
 * @method string getVersion()
 */
class LoginAliyunHub extends RoaRequest
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
    public $action = 'LoginAliyunHub';

    /**
     * @var string
     */
    public $pathPattern = '/admin/clusters/[ClusterId]/hub_login';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cs';

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

    /**
     * @param string $version
     *
     * @return $this
     */
    public function withVersion($version)
    {
        $this->data['Version'] = $version;
        $this->pathParameters['Version'] = $version;

        return $this;
    }
}
