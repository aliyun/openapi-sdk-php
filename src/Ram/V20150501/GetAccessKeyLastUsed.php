<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * Api GetAccessKeyLastUsed
 *
 * @method string getUserAccessKeyId()
 * @method string getUserName()
 */
class GetAccessKeyLastUsed extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';

    /**
     * @param string $userAccessKeyId
     *
     * @return $this
     */
    public function withUserAccessKeyId($userAccessKeyId)
    {
        $this->data['UserAccessKeyId'] = $userAccessKeyId;
        $this->options['query']['UserAccessKeyId'] = $userAccessKeyId;

        return $this;
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function withUserName($userName)
    {
        $this->data['UserName'] = $userName;
        $this->options['query']['UserName'] = $userName;

        return $this;
    }
}
