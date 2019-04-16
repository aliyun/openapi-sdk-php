<?php

namespace AlibabaCloud\CF\V20151127;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method MonthlyPaymentCheckOrder monthlyPaymentCheckOrder(array $options = [])
 * @method CFMonthlyPayment cFMonthlyPayment(array $options = [])
 * @method GetRating getRating(array $options = [])
 * @method CfAccountFeedback cfAccountFeedback(array $options = [])
 * @method CfAccountQuery cfAccountQuery(array $options = [])
 * @method QuerySimple querySimple(array $options = [])
 * @method Authenticate authenticate(array $options = [])
 */
class CFApiResolver
{
    use ApiResolverTrait;
}

class V20151127Rpc extends Rpc
{
    /** @var string */
    public $product = 'CF';

    /** @var string */
    public $version = '2015-11-27';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'cf';
}

/**
 * @method string getData()
 */
class MonthlyPaymentCheckOrder extends V20151127Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 */
class CFMonthlyPayment extends V20151127Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
}

/**
 * @method string getIdType()
 * @method $this withIdType($value)
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getBankCardNumber()
 * @method $this withBankCardNumber($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class GetRating extends V20151127Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getUserFeedback()
 * @method $this withUserFeedback($value)
 * @method string getAliDecision()
 * @method $this withAliDecision($value)
 * @method string getCustomerDecision()
 * @method $this withCustomerDecision($value)
 * @method string getDenyReason()
 * @method $this withDenyReason($value)
 * @method string getAppToken()
 * @method $this withAppToken($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getCFTimestamp()
 * @method $this withCFTimestamp($value)
 */
class CfAccountFeedback extends V20151127Rpc
{
}

/**
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getAppToken()
 * @method $this withAppToken($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getCFTimestamp()
 * @method $this withCFTimestamp($value)
 * @method string getTrans()
 * @method $this withTrans($value)
 */
class CfAccountQuery extends V20151127Rpc
{
}

/**
 * @method string getTokenId()
 * @method $this withTokenId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getSerialNo()
 * @method $this withSerialNo($value)
 * @method string getTimeStamp()
 * @method $this withTimeStamp($value)
 * @method string getTrans()
 * @method $this withTrans($value)
 */
class QuerySimple extends V20151127Rpc
{
}

/**
 * @method string getSig()
 * @method $this withSig($value)
 * @method string getRemoteIp()
 * @method $this withRemoteIp($value)
 * @method string getSerno()
 * @method $this withSerno($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class Authenticate extends V20151127Rpc
{
}
