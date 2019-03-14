<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api DownloadClusterNodeCerts
 *
 * @method string getNodeId()
 * @method string getToken()
 */
class DownloadClusterNodeCerts extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/token/[Token]/nodes/[NodeId]/certs';

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
