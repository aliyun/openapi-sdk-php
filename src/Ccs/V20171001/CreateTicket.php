<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateTicket
 *
 * @method string getCreatorId()
 * @method string getDescription()
 * @method string getType()
 * @method string getCcsInstanceId()
 * @method string getCustomFields()
 */
class CreateTicket extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ccs';

    /**
     * @var string
     */
    public $version = '2017-10-01';

    /**
     * @var string
     */
    public $action = 'CreateTicket';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccs';

    /**
     * @deprecated deprecated since version 2.0, Use withCreatorId() instead.
     *
     * @param string $creatorId
     *
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        return $this->withCreatorId($creatorId);
    }

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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
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
     * @deprecated deprecated since version 2.0, Use withCcsInstanceId() instead.
     *
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function setCcsInstanceId($ccsInstanceId)
    {
        return $this->withCcsInstanceId($ccsInstanceId);
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
     * @deprecated deprecated since version 2.0, Use withCustomFields() instead.
     *
     * @param string $customFields
     *
     * @return $this
     */
    public function setCustomFields($customFields)
    {
        return $this->withCustomFields($customFields);
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
