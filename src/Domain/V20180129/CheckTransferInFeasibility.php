<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CheckTransferInFeasibility
 *
 * @method string getTransferAuthorizationCode()
 * @method string getUserClientIp()
 * @method string getDomainName()
 * @method string getLang()
 */
class CheckTransferInFeasibility extends RpcRequest
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
    public $action = 'CheckTransferInFeasibility';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withTransferAuthorizationCode() instead.
     *
     * @param string $transferAuthorizationCode
     *
     * @return $this
     */
    public function setTransferAuthorizationCode($transferAuthorizationCode)
    {
        return $this->withTransferAuthorizationCode($transferAuthorizationCode);
    }

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
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
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
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
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
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
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
