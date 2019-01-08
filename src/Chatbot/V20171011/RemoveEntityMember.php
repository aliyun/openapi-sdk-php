<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RemoveEntityMember
 *
 * @method string getRemoveType()
 * @method string getMember()
 * @method string getEntityId()
 */
class RemoveEntityMember extends RpcRequest
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
    public $action = 'RemoveEntityMember';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @param string $removeType
     *
     * @return $this
     */
    public function withRemoveType($removeType)
    {
        $this->data['RemoveType'] = $removeType;
        $this->options['query']['RemoveType'] = $removeType;

        return $this;
    }

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
}
