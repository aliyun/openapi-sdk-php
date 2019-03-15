<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * @method string getAlertGroup()
 * @method $this withAlertGroup($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getUserDomainName()
 * @method $this withUserDomainName($value)
 * @method string getCnameMode()
 * @method $this withCnameMode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLbaStrategy()
 * @method $this withLbaStrategy($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTtl()
 * @method $this withTtl($value)
 * @method string getCnameCustomDomainName()
 * @method $this withCnameCustomDomainName($value)
 */
class UpdateGtmInstanceGlobalConfig extends Rpc
{
    public $product = 'Alidns';

    public $version = '2015-01-09';

    public $method = 'POST';

    public $serviceCode = 'alidns';
}
