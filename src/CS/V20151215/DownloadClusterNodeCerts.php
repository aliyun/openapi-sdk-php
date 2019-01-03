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
     * @deprecated deprecated since version 2.0, Use withNodeId() instead.
     *
     * @param string $nodeId
     *
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        return $this->withNodeId($nodeId);
    }

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
     * @deprecated deprecated since version 2.0, Use withToken() instead.
     *
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        return $this->withToken($token);
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
