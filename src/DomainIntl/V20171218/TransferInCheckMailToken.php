<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of TransferInCheckMailToken
 *
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getToken()
 */
class TransferInCheckMailToken extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain-intl';

    /**
     * @var string
     */
    public $version = '2017-12-18';

    /**
     * @var string
     */
    public $action = 'TransferInCheckMailToken';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'domain';

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

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
        $this->options['query']['Token'] = $token;

        return $this;
    }
}
