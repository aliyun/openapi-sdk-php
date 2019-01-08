<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of RevokeTrigger
 *
 * @method string getActionType()
 * @method string getClusterId()
 */
class RevokeTrigger extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'CS';

    /**
     * @var string
     */
    public $version = '2015-12-15';

    /**
     * @var string
     */
    public $action = 'RevokeTrigger';

    /**
     * @var string
     */
    public $pathPattern = '/clusters/[ClusterId]/trigger/[ActionType]/';

    /**
     * @var string
     */
    public $method = 'DELETE';

    /**
     * @var string
     */
    public $serviceCode = 'cs';

    /**
     * @param string $actionType
     *
     * @return $this
     */
    public function withActionType($actionType)
    {
        $this->data['ActionType'] = $actionType;
        $this->pathParameters['ActionType'] = $actionType;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->pathParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
