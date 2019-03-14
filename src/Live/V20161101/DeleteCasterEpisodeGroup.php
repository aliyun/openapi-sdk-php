<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api DeleteCasterEpisodeGroup
 *
 * @method string getOwnerId()
 * @method string getProgramId()
 */
class DeleteCasterEpisodeGroup extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

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
