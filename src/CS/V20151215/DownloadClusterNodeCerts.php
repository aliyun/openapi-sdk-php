<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DownloadClusterNodeCerts
 *
 * @method string getNodeId()
 * @method string getToken()
 */
class DownloadClusterNodeCerts extends RoaRequest
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
    public $action = 'DownloadClusterNodeCerts';

    /**
     * @var string
     */
    public $pathPattern = '/token/[Token]/nodes/[NodeId]/certs';

    /**
     * @var string
     */
    public $serviceCode = 'cs';

    /**
     * @param string $nodeId
     *
     * @return $this
     */
    public function withNodeId($nodeId)
    {
        $this->data['NodeId'] = $nodeId;
        $this->pathParameters['NodeId'] = $nodeId;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function withToken($token)
    {
        $this->data['Token'] = $token;
        $this->pathParameters['Token'] = $token;

        return $this;
    }
}
