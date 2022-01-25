<?php

namespace AlibabaCloud\QuickbiPublic\V20200809;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelCollection cancelCollection(array $options = [])
 * @method ListCollections listCollections(array $options = [])
 * @method ListFavoriteReports listFavoriteReports(array $options = [])
 * @method ListRecentViewReports listRecentViewReports(array $options = [])
 * @method ListSharedReports listSharedReports(array $options = [])
 * @method SaveFavorites saveFavorites(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2020-08-09';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quickbi';
}

/**
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class CancelCollection extends Rpc
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
class ListCollections extends Rpc
{
}

/**
 * @method string getTreeType()
 * @method $this withTreeType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListFavoriteReports extends Rpc
{
}

/**
 * @method string getQueryMode()
 * @method $this withQueryMode($value)
 * @method string getTreeType()
 * @method $this withTreeType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getOffsetDay()
 * @method $this withOffsetDay($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListRecentViewReports extends Rpc
{
}

/**
 * @method string getTreeType()
 * @method $this withTreeType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListSharedReports extends Rpc
{
}

/**
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getWorksType()
 * @method $this withWorksType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class SaveFavorites extends Rpc
{
}
