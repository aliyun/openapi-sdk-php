<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getProject()
 * @method string getSetId()
 * @method string getNewGroupId()
 * @method string getFaceIds()
 */
class UpdateFaceGroupById extends RpcRequest
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
    public $action = 'UpdateFaceGroupById';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project']             = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function withSetId($setId)
    {
        $this->data['SetId']             = $setId;
        $this->options['query']['SetId'] = $setId;

        return $this;
    }

    /**
     * @param string $newGroupId
     *
     * @return $this
     */
    public function withNewGroupId($newGroupId)
    {
        $this->data['NewGroupId']             = $newGroupId;
        $this->options['query']['NewGroupId'] = $newGroupId;

        return $this;
    }

    /**
     * @param string $faceIds
     *
     * @return $this
     */
    public function withFaceIds($faceIds)
    {
        $this->data['FaceIds']             = $faceIds;
        $this->options['query']['FaceIds'] = $faceIds;

        return $this;
    }
}
