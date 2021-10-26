<?php

namespace AlibabaCloud\QuickbiPublic\V20200806;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method QueryDatasetDetailInfo queryDatasetDetailInfo(array $options = [])
 * @method QueryDatasetInfo queryDatasetInfo(array $options = [])
 * @method QueryDatasetList queryDatasetList(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2020-08-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quickbi';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryDatasetDetailInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryDatasetInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getWithChildren()
 * @method $this withWithChildren($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryDatasetList extends Rpc
{
}
