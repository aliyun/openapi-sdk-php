<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * @method string getKeyTag()
 * @method $this withKeyTag($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDigestType()
 * @method $this withDigestType($value)
 * @method string getDigest()
 * @method $this withDigest($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class SaveSingleTaskForModifyingDSRecord extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';
}
