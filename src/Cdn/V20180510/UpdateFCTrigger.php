<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateFCTrigger
 *
 * @method string getNotes()
 * @method string getTriggerARN()
 * @method string getSourceARN()
 * @method string getOwnerId()
 * @method string getRoleARN()
 */
class UpdateFCTrigger extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'UpdateFCTrigger';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withNotes() instead.
     *
     * @param string $notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        return $this->withNotes($notes);
    }

    /**
     * @param string $notes
     *
     * @return $this
     */
    public function withNotes($notes)
    {
        $this->data['Notes'] = $notes;
        $this->options['query']['Notes'] = $notes;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTriggerARN() instead.
     *
     * @param string $triggerARN
     *
     * @return $this
     */
    public function setTriggerARN($triggerARN)
    {
        return $this->withTriggerARN($triggerARN);
    }

    /**
     * @param string $triggerARN
     *
     * @return $this
     */
    public function withTriggerARN($triggerARN)
    {
        $this->data['TriggerARN'] = $triggerARN;
        $this->options['query']['TriggerARN'] = $triggerARN;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceARN() instead.
     *
     * @param string $sourceARN
     *
     * @return $this
     */
    public function setSourceARN($sourceARN)
    {
        return $this->withSourceARN($sourceARN);
    }

    /**
     * @param string $sourceARN
     *
     * @return $this
     */
    public function withSourceARN($sourceARN)
    {
        $this->data['SourceARN'] = $sourceARN;
        $this->options['query']['SourceARN'] = $sourceARN;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRoleARN() instead.
     *
     * @param string $roleARN
     *
     * @return $this
     */
    public function setRoleARN($roleARN)
    {
        return $this->withRoleARN($roleARN);
    }

    /**
     * @param string $roleARN
     *
     * @return $this
     */
    public function withRoleARN($roleARN)
    {
        $this->data['RoleARN'] = $roleARN;
        $this->options['query']['RoleARN'] = $roleARN;

        return $this;
    }
}
