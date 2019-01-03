<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateDomainToDomainGroup
 *
 * @method string getDataSource()
 * @method string getUserClientIp()
 * @method string getFileToUpload()
 * @method array getDomainName()
 * @method string getReplace()
 * @method string getLang()
 * @method string getDomainGroupId()
 */
class UpdateDomainToDomainGroup extends RpcRequest
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
    public $action = 'UpdateDomainToDomainGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withDataSource() instead.
     *
     * @param string $dataSource
     *
     * @return $this
     */
    public function setDataSource($dataSource)
    {
        return $this->withDataSource($dataSource);
    }

    /**
     * @param string $dataSource
     *
     * @return $this
     */
    public function withDataSource($dataSource)
    {
        $this->data['DataSource'] = $dataSource;
        $this->options['query']['DataSource'] = $dataSource;

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
     * @deprecated deprecated since version 2.0, Use withFileToUpload() instead.
     *
     * @param string $fileToUpload
     *
     * @return $this
     */
    public function setFileToUpload($fileToUpload)
    {
        return $this->withFileToUpload($fileToUpload);
    }

    /**
     * @param string $fileToUpload
     *
     * @return $this
     */
    public function withFileToUpload($fileToUpload)
    {
        $this->data['FileToUpload'] = $fileToUpload;
        $this->options['query']['FileToUpload'] = $fileToUpload;

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
     * @deprecated deprecated since version 2.0, Use withReplace() instead.
     *
     * @param string $replace
     *
     * @return $this
     */
    public function setReplace($replace)
    {
        return $this->withReplace($replace);
    }

    /**
     * @param string $replace
     *
     * @return $this
     */
    public function withReplace($replace)
    {
        $this->data['Replace'] = $replace;
        $this->options['query']['Replace'] = $replace;

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

    /**
     * @deprecated deprecated since version 2.0, Use withDomainGroupId() instead.
     *
     * @param string $domainGroupId
     *
     * @return $this
     */
    public function setDomainGroupId($domainGroupId)
    {
        return $this->withDomainGroupId($domainGroupId);
    }

    /**
     * @param string $domainGroupId
     *
     * @return $this
     */
    public function withDomainGroupId($domainGroupId)
    {
        $this->data['DomainGroupId'] = $domainGroupId;
        $this->options['query']['DomainGroupId'] = $domainGroupId;

        return $this;
    }
}
