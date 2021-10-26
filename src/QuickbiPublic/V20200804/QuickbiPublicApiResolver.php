<?php

namespace AlibabaCloud\QuickbiPublic\V20200804;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddShareReport addShareReport(array $options = [])
 * @method CancelReportShare cancelReportShare(array $options = [])
 * @method QueryShareList queryShareList(array $options = [])
 * @method QuerySharesToUserList querySharesToUserList(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2020-08-04';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quickbi';
}

/**
 * @method string getShareToType()
 * @method $this withShareToType($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getShareToId()
 * @method $this withShareToId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAuthPoint()
 * @method $this withAuthPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getExpireDate()
 * @method $this withExpireDate($value)
 */
class AddShareReport extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getShareToType()
 * @method $this withShareToType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getShareToIds()
 * @method $this withShareToIds($value)
 */
class CancelReportShare extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryShareList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QuerySharesToUserList extends Rpc
{
}
