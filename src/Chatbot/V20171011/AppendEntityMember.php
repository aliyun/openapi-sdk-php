<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AppendEntityMember
 *
 * @method string getMember()
 * @method string getEntityId()
 * @method string getApplyType()
 */
class AppendEntityMember extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Chatbot';

    /**
     * @var string
     */
    public $version = '2017-10-11';

    /**
     * @var string
     */
    public $action = 'AppendEntityMember';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @param string $member
     *
     * @return $this
     */
    public function withMember($member)
    {
        $this->data['Member'] = $member;
        $this->options['query']['Member'] = $member;

        return $this;
    }

    /**
     * @param string $entityId
     *
     * @return $this
     */
    public function withEntityId($entityId)
    {
        $this->data['EntityId'] = $entityId;
        $this->options['query']['EntityId'] = $entityId;

        return $this;
    }

    /**
     * @param string $applyType
     *
     * @return $this
     */
    public function withApplyType($applyType)
    {
        $this->data['ApplyType'] = $applyType;
        $this->options['query']['ApplyType'] = $applyType;

        return $this;
    }
}
