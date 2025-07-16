<?php

namespace AlibabaCloud\LingMou\V20250527;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateChatSession createChatSession(array $options = [])
 */
class LingMouApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'LingMou';

    /** @var string */
    public $version = '2025-05-27';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getLicense()
 * @method string getInstanceId()
 * @method string getId()
 * @method string getPlatform()
 */
class CreateChatSession extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/chat/init/[id]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLicense($value)
    {
        $this->data['License'] = $value;
        $this->options['query']['license'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->pathParameters['id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlatform($value)
    {
        $this->data['Platform'] = $value;
        $this->options['query']['platform'] = $value;

        return $this;
    }
}
