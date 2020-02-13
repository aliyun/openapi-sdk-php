<?php

namespace AlibabaCloud\OnsMqtt\V20191211;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ApplyToken applyToken(array $options = [])
 * @method BatchQuerySessionByClientIds batchQuerySessionByClientIds(array $options = [])
 * @method BatchSendMessages batchSendMessages(array $options = [])
 * @method QuerySessionByClientId querySessionByClientId(array $options = [])
 * @method QueryToken queryToken(array $options = [])
 * @method RevokeToken revokeToken(array $options = [])
 * @method SendMessage sendMessage(array $options = [])
 */
class OnsMqttApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'OnsMqtt';

    /** @var string */
    public $version = '2019-12-11';

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
 * @method string getNoPersistFlag()
 * @method $this withNoPersistFlag($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getMessages()
 */
class BatchSendMessages extends Rpc
{

    /**
     * @param array $messages
     *
     * @return $this
     */
	public function withMessages(array $messages)
	{
	    $this->data['Messages'] = $messages;
		foreach ($messages as $depth1 => $depth1Value) {
			$this->options['query']['Messages.' . ($depth1 + 1) . '.Payload'] = $depth1Value['Payload'];
			foreach ($depth1Value['Topics'] as $i => $iValue) {
				$this->options['query']['Messages.' . ($depth1 + 1) . '.Topics.' . ($i + 1)] = $iValue;
			}
			$this->options['query']['Messages.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			$this->options['query']['Messages.' . ($depth1 + 1) . '.ReceiptId'] = $depth1Value['ReceiptId'];
		}

		return $this;
    }
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
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RevokeToken extends Rpc
{
}

/**
 * @method string getNoPersistFlag()
 * @method $this withNoPersistFlag($value)
 * @method string getMqttTopic()
 * @method $this withMqttTopic($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPayload()
 * @method $this withPayload($value)
 * @method string getReceiptId()
 * @method $this withReceiptId($value)
 */
class SendMessage extends Rpc
{
}
