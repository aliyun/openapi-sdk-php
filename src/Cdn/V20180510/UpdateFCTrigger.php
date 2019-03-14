<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * Api UpdateFCTrigger
 *
 * @method string getNotes()
 * @method string getTriggerARN()
 * @method string getSourceARN()
 * @method string getOwnerId()
 * @method string getRoleARN()
 */
class UpdateFCTrigger extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';

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
