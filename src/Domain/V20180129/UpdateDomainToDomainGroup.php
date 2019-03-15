<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getDataSource()
 * @method $this withDataSource($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getFileToUpload()
 * @method $this withFileToUpload($value)
 * @method array getDomainName()
 * @method string getReplace()
 * @method $this withReplace($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 */
class UpdateDomainToDomainGroup extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

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
}
