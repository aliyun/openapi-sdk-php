<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * Api CreateTicket
 *
 * @method string getCreatorId()
 * @method string getDescription()
 * @method string getType()
 * @method string getCcsInstanceId()
 * @method string getCustomFields()
 */
class CreateTicket extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';

    /**
     * @param string $creatorId
     *
     * @return $this
     */
    public function withCreatorId($creatorId)
    {
        $this->data['CreatorId'] = $creatorId;
        $this->options['query']['CreatorId'] = $creatorId;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function withCcsInstanceId($ccsInstanceId)
    {
        $this->data['CcsInstanceId'] = $ccsInstanceId;
        $this->options['query']['CcsInstanceId'] = $ccsInstanceId;

        return $this;
    }

    /**
     * @param string $customFields
     *
     * @return $this
     */
    public function withCustomFields($customFields)
    {
        $this->data['CustomFields'] = $customFields;
        $this->options['query']['CustomFields'] = $customFields;

        return $this;
    }
}
