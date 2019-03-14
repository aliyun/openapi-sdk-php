<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api ListCustomImages
 *
 * @method string getBaseOsTag()
 * @method string getImageOwnerAlias()
 */
class ListCustomImages extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

    /**
     * @param string $baseOsTag
     *
     * @return $this
     */
    public function withBaseOsTag($baseOsTag)
    {
        $this->data['BaseOsTag'] = $baseOsTag;
        $this->options['query']['BaseOsTag'] = $baseOsTag;

        return $this;
    }

    /**
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function withImageOwnerAlias($imageOwnerAlias)
    {
        $this->data['ImageOwnerAlias'] = $imageOwnerAlias;
        $this->options['query']['ImageOwnerAlias'] = $imageOwnerAlias;

        return $this;
    }
}
