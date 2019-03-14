<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api RevokeClusterToken
 *
 * @method string getToken()
 */
class RevokeClusterToken extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/token/[Token]/revoke';

    public $method = 'DELETE';

    public $serviceCode = 'cs';

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
