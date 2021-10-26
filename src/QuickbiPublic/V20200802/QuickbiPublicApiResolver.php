<?php

namespace AlibabaCloud\QuickbiPublic\V20200802;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddUserTagMeta addUserTagMeta(array $options = [])
 * @method DeleteUserTagMeta deleteUserTagMeta(array $options = [])
 * @method QueryUserTagMetaList queryUserTagMetaList(array $options = [])
 * @method QueryUserTagValueList queryUserTagValueList(array $options = [])
 * @method UpdateUserTagMeta updateUserTagMeta(array $options = [])
 * @method UpdateUserTagValue updateUserTagValue(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2020-08-02';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quickbi';
}

/**
 * @method string getTagDescription()
 * @method $this withTagDescription($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class AddUserTagMeta extends Rpc
{
}

/**
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DeleteUserTagMeta extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryUserTagMetaList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryUserTagValueList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTagDescription()
 * @method $this withTagDescription($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class UpdateUserTagMeta extends Rpc
{
}

/**
 * @method string getTagValue()
 * @method $this withTagValue($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class UpdateUserTagValue extends Rpc
{
}
