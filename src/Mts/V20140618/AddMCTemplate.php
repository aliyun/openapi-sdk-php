<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * @method string getPolitics()
 * @method $this withPolitics($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getContraband()
 * @method $this withContraband($value)
 * @method string getAd()
 * @method $this withAd($value)
 * @method string getAbuse()
 * @method $this withAbuse($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getQrcode()
 * @method $this withQrcode($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPorn()
 * @method $this withPorn($value)
 * @method string getTerrorism()
 * @method $this withTerrorism($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLogo()
 * @method $this withLogo($value)
 * @method string getSpam()
 * @method string getLive()
 * @method $this withLive($value)
 */
class AddMCTemplate extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';

    /**
     * @param string $spam
     *
     * @return $this
     */
    public function withSpam($spam)
    {
        $this->data['Spam'] = $spam;
        $this->options['query']['spam'] = $spam;

        return $this;
    }
}
