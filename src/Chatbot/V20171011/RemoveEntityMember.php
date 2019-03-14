<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * Api RemoveEntityMember
 *
 * @method string getRemoveType()
 * @method string getMember()
 * @method string getEntityId()
 */
class RemoveEntityMember extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

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
