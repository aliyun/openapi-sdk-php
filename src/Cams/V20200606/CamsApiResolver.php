<?php

namespace AlibabaCloud\Cams\V20200606;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method SendMessage sendMessage(array $options = [])
 */
class CamsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cams';

    /** @var string */
    public $version = '2020-06-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cams';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTemplateBodyParams()
 * @method $this withTemplateBodyParams($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getChannelType()
 * @method $this withChannelType($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 */
class SendMessage extends Rpc
{
}
