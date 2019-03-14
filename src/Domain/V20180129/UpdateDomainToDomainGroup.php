<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api UpdateDomainToDomainGroup
 *
 * @method string getDataSource()
 * @method string getUserClientIp()
 * @method string getFileToUpload()
 * @method array getDomainName()
 * @method string getReplace()
 * @method string getLang()
 * @method string getDomainGroupId()
 */
class UpdateDomainToDomainGroup extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

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
