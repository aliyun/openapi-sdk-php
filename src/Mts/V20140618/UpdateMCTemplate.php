<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateMCTemplate
 *
 * @method string getPolitics()
 * @method string getResourceOwnerId()
 * @method string getContraband()
 * @method string getAd()
 * @method string getAbuse()
 * @method string getResourceOwnerAccount()
 * @method string getQrcode()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getTemplateId()
 * @method string getPorn()
 * @method string getTerrorism()
 * @method string getName()
 * @method string getLogo()
 * @method string getSpam()
 * @method string getLive()
 */
class UpdateMCTemplate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Mts';

    /**
     * @var string
     */
    public $version = '2014-06-18';

    /**
     * @var string
     */
    public $action = 'UpdateMCTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

    /**
     * @param string $politics
     *
     * @return $this
     */
    public function withPolitics($politics)
    {
        $this->data['Politics'] = $politics;
        $this->options['query']['Politics'] = $politics;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $contraband
     *
     * @return $this
     */
    public function withContraband($contraband)
    {
        $this->data['Contraband'] = $contraband;
        $this->options['query']['Contraband'] = $contraband;

        return $this;
    }

    /**
     * @param string $ad
     *
     * @return $this
     */
    public function withAd($ad)
    {
        $this->data['Ad'] = $ad;
        $this->options['query']['Ad'] = $ad;

        return $this;
    }

    /**
     * @param string $abuse
     *
     * @return $this
     */
    public function withAbuse($abuse)
    {
        $this->data['Abuse'] = $abuse;
        $this->options['query']['Abuse'] = $abuse;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $qrcode
     *
     * @return $this
     */
    public function withQrcode($qrcode)
    {
        $this->data['Qrcode'] = $qrcode;
        $this->options['query']['Qrcode'] = $qrcode;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

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
     * @param string $templateId
     *
     * @return $this
     */
    public function withTemplateId($templateId)
    {
        $this->data['TemplateId'] = $templateId;
        $this->options['query']['TemplateId'] = $templateId;

        return $this;
    }

    /**
     * @param string $porn
     *
     * @return $this
     */
    public function withPorn($porn)
    {
        $this->data['Porn'] = $porn;
        $this->options['query']['Porn'] = $porn;

        return $this;
    }

    /**
     * @param string $terrorism
     *
     * @return $this
     */
    public function withTerrorism($terrorism)
    {
        $this->data['Terrorism'] = $terrorism;
        $this->options['query']['Terrorism'] = $terrorism;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $logo
     *
     * @return $this
     */
    public function withLogo($logo)
    {
        $this->data['Logo'] = $logo;
        $this->options['query']['Logo'] = $logo;

        return $this;
    }

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

    /**
     * @param string $live
     *
     * @return $this
     */
    public function withLive($live)
    {
        $this->data['Live'] = $live;
        $this->options['query']['Live'] = $live;

        return $this;
    }
}
