<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of UpdateClusterAgentVersion
 *
 * @method string getClusterId()
 * @method string getVersion()
 */
class UpdateClusterAgentVersion extends RoaRequest
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
    public $action = 'UpdateClusterAgentVersion';

    /**
     * @var string
     */
    public $pathPattern = '/admin/clusters/[ClusterId]/agent/[Version]/modify';

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
