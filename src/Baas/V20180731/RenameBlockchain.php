<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api RenameBlockchain
 *
 * @method string getBizid()
 * @method string getNewName()
 */
class RenameBlockchain extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';

    /**
     * @param string $bizid
     *
     * @return $this
     */
    public function withBizid($bizid)
    {
        $this->data['Bizid'] = $bizid;
        $this->options['query']['Bizid'] = $bizid;

        return $this;
    }

    /**
     * @param string $newName
     *
     * @return $this
     */
    public function withNewName($newName)
    {
        $this->data['NewName'] = $newName;
        $this->options['query']['NewName'] = $newName;

        return $this;
    }
}
