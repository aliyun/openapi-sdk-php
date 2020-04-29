<?php

namespace AlibabaCloud\OnsMqtt\V20200420;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ApplyToken applyToken(array $options = [])
 * @method CreateGroupId createGroupId(array $options = [])
 * @method DeleteGroupId deleteGroupId(array $options = [])
 * @method ListGroupId listGroupId(array $options = [])
 * @method QueryToken queryToken(array $options = [])
 * @method RevokeToken revokeToken(array $options = [])
 */
class OnsMqttApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'OnsMqtt';

    /** @var string */
    public $version = '2020-04-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'onsmqtt';
}

/**
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getActions()
 * @method $this withActions($value)
 */
class ApplyToken extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateGroupId extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteGroupId extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListGroupId extends Rpc
{
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class QueryToken extends Rpc
{
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RevokeToken extends Rpc
{
}
