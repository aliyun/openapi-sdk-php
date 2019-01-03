<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID
 *
 * @method string getUserClientIp()
 * @method string getRegistrantProfileId()
 * @method array getDomainName()
 * @method string getTransferOutProhibited()
 * @method string getLang()
 */
class SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID extends RpcRequest
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
    public $action = 'SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withRegistrantProfileId() instead.
     *
     * @param string $registrantProfileId
     *
     * @return $this
     */
    public function setRegistrantProfileId($registrantProfileId)
    {
        return $this->withRegistrantProfileId($registrantProfileId);
    }

    /**
     * @param string $registrantProfileId
     *
     * @return $this
     */
    public function withRegistrantProfileId($registrantProfileId)
    {
        $this->data['RegistrantProfileId'] = $registrantProfileId;
        $this->options['query']['RegistrantProfileId'] = $registrantProfileId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getDomainName() instead.
     *
     * @return array
     */
    public function getDomainNames()
    {
        return $this->getDomainName();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param array $domainNames
     *
     * @return $this
     */
    public function setDomainNames(array $domainNames)
    {
        return $this->withDomainName($domainNames);
    }

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTransferOutProhibited() instead.
     *
     * @param string $transferOutProhibited
     *
     * @return $this
     */
    public function setTransferOutProhibited($transferOutProhibited)
    {
        return $this->withTransferOutProhibited($transferOutProhibited);
    }

    /**
     * @param string $transferOutProhibited
     *
     * @return $this
     */
    public function withTransferOutProhibited($transferOutProhibited)
    {
        $this->data['TransferOutProhibited'] = $transferOutProhibited;
        $this->options['query']['TransferOutProhibited'] = $transferOutProhibited;

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
