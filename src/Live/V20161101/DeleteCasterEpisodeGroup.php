<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteCasterEpisodeGroup
 *
 * @method string getOwnerId()
 * @method string getProgramId()
 */
class DeleteCasterEpisodeGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'DeleteCasterEpisodeGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

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
     * @param string $programId
     *
     * @return $this
     */
    public function withProgramId($programId)
    {
        $this->data['ProgramId'] = $programId;
        $this->options['query']['ProgramId'] = $programId;

        return $this;
    }
}
