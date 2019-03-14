<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * Api ApplyInvoice
 *
 * @method string getInvoicingType()
 * @method string getApplyUserNick()
 * @method string getInvoiceByAmount()
 * @method string getCustomerId()
 * @method array getSelectedIds()
 * @method string getProcessWay()
 * @method string getCallerBid()
 * @method string getOwnerId()
 * @method string getInvoiceAmount()
 * @method string getAddressId()
 * @method string getCallerUid()
 */
class ApplyInvoice extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';

    /**
     * @param string $invoicingType
     *
     * @return $this
     */
    public function withInvoicingType($invoicingType)
    {
        $this->data['InvoicingType'] = $invoicingType;
        $this->options['query']['InvoicingType'] = $invoicingType;

        return $this;
    }

    /**
     * @param string $applyUserNick
     *
     * @return $this
     */
    public function withApplyUserNick($applyUserNick)
    {
        $this->data['ApplyUserNick'] = $applyUserNick;
        $this->options['query']['ApplyUserNick'] = $applyUserNick;

        return $this;
    }

    /**
     * @param string $invoiceByAmount
     *
     * @return $this
     */
    public function withInvoiceByAmount($invoiceByAmount)
    {
        $this->data['InvoiceByAmount'] = $invoiceByAmount;
        $this->options['query']['InvoiceByAmount'] = $invoiceByAmount;

        return $this;
    }

    /**
     * @param string $customerId
     *
     * @return $this
     */
    public function withCustomerId($customerId)
    {
        $this->data['CustomerId'] = $customerId;
        $this->options['query']['CustomerId'] = $customerId;

        return $this;
    }

    /**
     * @param array $selectedIds
     *
     * @return $this
     */
    public function withSelectedIds(array $selectedIds)
    {
        $this->data['SelectedIds'] = $selectedIds;
        foreach ($selectedIds as $i => $iValue) {
            $this->options['query']['SelectedIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $processWay
     *
     * @return $this
     */
    public function withProcessWay($processWay)
    {
        $this->data['ProcessWay'] = $processWay;
        $this->options['query']['ProcessWay'] = $processWay;

        return $this;
    }

    /**
     * @param string $callerBid
     *
     * @return $this
     */
    public function withCallerBid($callerBid)
    {
        $this->data['CallerBid'] = $callerBid;
        $this->options['query']['callerBid'] = $callerBid;

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
     * @param string $invoiceAmount
     *
     * @return $this
     */
    public function withInvoiceAmount($invoiceAmount)
    {
        $this->data['InvoiceAmount'] = $invoiceAmount;
        $this->options['query']['InvoiceAmount'] = $invoiceAmount;

        return $this;
    }

    /**
     * @param string $addressId
     *
     * @return $this
     */
    public function withAddressId($addressId)
    {
        $this->data['AddressId'] = $addressId;
        $this->options['query']['AddressId'] = $addressId;

        return $this;
    }

    /**
     * @param string $callerUid
     *
     * @return $this
     */
    public function withCallerUid($callerUid)
    {
        $this->data['CallerUid'] = $callerUid;
        $this->options['query']['callerUid'] = $callerUid;

        return $this;
    }
}
