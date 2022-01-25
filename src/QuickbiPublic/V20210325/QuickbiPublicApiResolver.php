<?php

namespace AlibabaCloud\QuickbiPublic\V20210325;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BuildSignatureUrl buildSignatureUrl(array $options = [])
 * @method CreateEmbedToken createEmbedToken(array $options = [])
 * @method CreateTicket createTicket(array $options = [])
 * @method DelayEmbedToken delayEmbedToken(array $options = [])
 * @method DelayTicketExpireTime delayTicketExpireTime(array $options = [])
 * @method DeleteEmbedToken deleteEmbedToken(array $options = [])
 * @method DeleteTicket deleteTicket(array $options = [])
 * @method QueryEmbedTokenInfo queryEmbedTokenInfo(array $options = [])
 * @method QueryTicketInfo queryTicketInfo(array $options = [])
 * @method UpdateTicketNum updateTicketNum(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2021-03-25';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quickbi';
}

/**
 * @method string getWatermark()
 * @method $this withWatermark($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getWithHost()
 * @method $this withWithHost($value)
 * @method string getExpireMin()
 * @method $this withExpireMin($value)
 */
class BuildSignatureUrl extends Rpc
{
}

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getExpireMin()
 * @method $this withExpireMin($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class CreateEmbedToken extends Rpc
{
}

/**
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCmptId()
 * @method $this withCmptId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getGlobalParam()
 * @method $this withGlobalParam($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getTicketNum()
 * @method $this withTicketNum($value)
 * @method string getWatermarkParam()
 * @method $this withWatermarkParam($value)
 */
class CreateTicket extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getExpireMin()
 * @method $this withExpireMin($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class DelayEmbedToken extends Rpc
{
}

/**
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DelayTicketExpireTime extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class DeleteEmbedToken extends Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DeleteTicket extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class QueryEmbedTokenInfo extends Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryTicketInfo extends Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getTicketNum()
 * @method $this withTicketNum($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class UpdateTicketNum extends Rpc
{
}
