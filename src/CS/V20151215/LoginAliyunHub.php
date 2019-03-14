<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api LoginAliyunHub
 *
 * @method string getClusterId()
 * @method string getVersion()
 */
class LoginAliyunHub extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/admin/clusters/[ClusterId]/hub_login';

    public $method = 'POST';

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
