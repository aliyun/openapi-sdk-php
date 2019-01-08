<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of TransferInReenterTransferAuthorizationCode
 *
 * @method string getTransferAuthorizationCode()
 * @method string getDomainName()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class TransferInReenterTransferAuthorizationCode extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-01-29';

    /**
     * @var string
     */
    public $action = 'TransferInReenterTransferAuthorizationCode';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $transferAuthorizationCode
     *
     * @return $this
     */
    public function withTransferAuthorizationCode($transferAuthorizationCode)
    {
        $this->data['TransferAuthorizationCode'] = $transferAuthorizationCode;
        $this->options['query']['TransferAuthorizationCode'] = $transferAuthorizationCode;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

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
}
