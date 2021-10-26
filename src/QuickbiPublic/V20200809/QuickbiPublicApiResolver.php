<?php

namespace AlibabaCloud\QuickbiPublic\V20200809;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelCollection cancelCollection(array $options = [])
 * @method ListCollections listCollections(array $options = [])
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
