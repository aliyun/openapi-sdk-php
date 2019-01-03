<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateGroupFacesJob
 *
 * @method string getNotifyTopicName()
 * @method string getNotifyEndpoint()
 * @method string getProject()
 * @method string getSetId()
 * @method string getOperation()
 */
class CreateGroupFacesJob extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'imm';

    /**
     * @var string
     */
    public $version = '2017-09-06';

    /**
     * @var string
     */
    public $action = 'CreateGroupFacesJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withNotifyTopicName() instead.
     *
     * @param string $notifyTopicName
     *
     * @return $this
     */
    public function setNotifyTopicName($notifyTopicName)
    {
        return $this->withNotifyTopicName($notifyTopicName);
    }

    /**
     * @param string $notifyTopicName
     *
     * @return $this
     */
    public function withNotifyTopicName($notifyTopicName)
    {
        $this->data['NotifyTopicName'] = $notifyTopicName;
        $this->options['query']['NotifyTopicName'] = $notifyTopicName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNotifyEndpoint() instead.
     *
     * @param string $notifyEndpoint
     *
     * @return $this
     */
    public function setNotifyEndpoint($notifyEndpoint)
    {
        return $this->withNotifyEndpoint($notifyEndpoint);
    }

    /**
     * @param string $notifyEndpoint
     *
     * @return $this
     */
    public function withNotifyEndpoint($notifyEndpoint)
    {
        $this->data['NotifyEndpoint'] = $notifyEndpoint;
        $this->options['query']['NotifyEndpoint'] = $notifyEndpoint;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProject() instead.
     *
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        return $this->withProject($project);
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSetId() instead.
     *
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        return $this->withSetId($setId);
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function withSetId($setId)
    {
        $this->data['SetId'] = $setId;
        $this->options['query']['SetId'] = $setId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOperation() instead.
     *
     * @param string $operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        return $this->withOperation($operation);
    }

    /**
     * @param string $operation
     *
     * @return $this
     */
    public function withOperation($operation)
    {
        $this->data['Operation'] = $operation;
        $this->options['query']['Operation'] = $operation;

        return $this;
    }
}
