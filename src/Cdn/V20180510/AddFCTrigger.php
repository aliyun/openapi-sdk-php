<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * Api AddFCTrigger
 *
 * @method string getNotes()
 * @method string getEventMetaVersion()
 * @method string getTriggerARN()
 * @method string getSourceARN()
 * @method string getOwnerId()
 * @method string getRoleARN()
 * @method string getEventMetaName()
 */
class AddFCTrigger extends Rpc
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
     * @param string $eventMetaVersion
     *
     * @return $this
     */
    public function withEventMetaVersion($eventMetaVersion)
    {
        $this->data['EventMetaVersion'] = $eventMetaVersion;
        $this->options['query']['EventMetaVersion'] = $eventMetaVersion;

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

    /**
     * @param string $eventMetaName
     *
     * @return $this
     */
    public function withEventMetaName($eventMetaName)
    {
        $this->data['EventMetaName'] = $eventMetaName;
        $this->options['query']['EventMetaName'] = $eventMetaName;

        return $this;
    }
}
