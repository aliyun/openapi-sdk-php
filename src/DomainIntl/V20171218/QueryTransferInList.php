<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * @method string getSubmissionStartDate()
 * @method $this withSubmissionStartDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getSubmissionEndDate()
 * @method $this withSubmissionEndDate($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSimpleTransferInStatus()
 * @method $this withSimpleTransferInStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryTransferInList extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';
}
