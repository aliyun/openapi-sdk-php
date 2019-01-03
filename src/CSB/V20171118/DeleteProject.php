<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteProject
 *
 * @method string getCsbId()
 * @method string getProjectId()
 */
class DeleteProject extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'DeleteProject';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withCsbId() instead.
     *
     * @param string $csbId
     *
     * @return $this
     */
    public function setCsbId($csbId)
    {
        return $this->withCsbId($csbId);
    }

    /**
     * @param string $csbId
     *
     * @return $this
     */
    public function withCsbId($csbId)
    {
        $this->data['CsbId'] = $csbId;
        $this->options['query']['CsbId'] = $csbId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProjectId() instead.
     *
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        return $this->withProjectId($projectId);
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function withProjectId($projectId)
    {
        $this->data['ProjectId'] = $projectId;
        $this->options['query']['ProjectId'] = $projectId;

        return $this;
    }
}
