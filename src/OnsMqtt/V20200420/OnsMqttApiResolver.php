<?php

namespace AlibabaCloud\OnsMqtt\V20200420;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ApplyToken applyToken(array $options = [])
 * @method BatchQuerySessionByClientIds batchQuerySessionByClientIds(array $options = [])
 * @method CreateGroupId createGroupId(array $options = [])
 * @method DeleteGroupId deleteGroupId(array $options = [])
 * @method GetDeviceCredential getDeviceCredential(array $options = [])
 * @method ListGroupId listGroupId(array $options = [])
 * @method QuerySessionByClientId querySessionByClientId(array $options = [])
 * @method QueryToken queryToken(array $options = [])
 * @method RefreshDeviceCredential refreshDeviceCredential(array $options = [])
 * @method RegisterDeviceCredential registerDeviceCredential(array $options = [])
 * @method RevokeToken revokeToken(array $options = [])
 * @method SendMessage sendMessage(array $options = [])
 * @method UnRegisterDeviceCredential unRegisterDeviceCredential(array $options = [])
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
 * @method array getClientIdList()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class BatchQuerySessionByClientIds extends Rpc
{

    /**
     * @param array $clientIdList
     *
     * @return $this
     */
	public function withClientIdList(array $clientIdList)
	{
	    $this->data['ClientIdList'] = $clientIdList;
		foreach ($clientIdList as $i => $iValue) {
			$this->options['query']['ClientIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetDeviceCredential extends Rpc
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
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class QuerySessionByClientId extends Rpc
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
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RefreshDeviceCredential extends Rpc
{
}

/**
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RegisterDeviceCredential extends Rpc
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

/**
 * @method string getMqttTopic()
 * @method $this withMqttTopic($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPayload()
 * @method $this withPayload($value)
 */
class SendMessage extends Rpc
{
}

/**
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UnRegisterDeviceCredential extends Rpc
{
}
