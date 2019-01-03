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
     * @deprecated deprecated since version 2.0, Use withMember() instead.
     *
     * @param string $member
     *
     * @return $this
     */
    public function setMember($member)
    {
        return $this->withMember($member);
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
     * @deprecated deprecated since version 2.0, Use withEntityId() instead.
     *
     * @param string $entityId
     *
     * @return $this
     */
    public function setEntityId($entityId)
    {
        return $this->withEntityId($entityId);
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
     * @deprecated deprecated since version 2.0, Use withApplyType() instead.
     *
     * @param string $applyType
     *
     * @return $this
     */
    public function setApplyType($applyType)
    {
        return $this->withApplyType($applyType);
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
