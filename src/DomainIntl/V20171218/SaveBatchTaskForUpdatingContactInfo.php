<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method array getDomainName()
 * @method string getAddTransferLock()
 * @method $this withAddTransferLock($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveBatchTaskForUpdatingContactInfo extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

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
