<?php

namespace AlibabaCloud\Dybaseapi\MNS\Requests;

use AlibabaCloud\Dybaseapi\MNS\Constants;
use XMLWriter;

/**
 * Class BatchDeleteMessage
 *
 * @package AlibabaCloud\Dybaseapi\MNS\Requests
 */
class BatchDeleteMessage extends BaseRequest
{
    /**
     * @var string
     */
    private $queueName;

    /**
     * @var array
     */
    private $receiptHandles;

    /**
     * BatchDeleteMessage constructor.
     *
     * @param       $queueName
     * @param array $receiptHandles
     */
    public function __construct($queueName, array $receiptHandles)
    {
        parent::__construct('delete', 'queues/' . $queueName . '/messages');

        $this->queueName      = $queueName;
        $this->receiptHandles = $receiptHandles;
    }

    /**
     * @return mixed
     */
    public function getQueueName()
    {
        return $this->queueName;
    }

    /**
     * @return array
     */
    public function getReceiptHandles()
    {
        return $this->receiptHandles;
    }

    /**
     * @return string
     */
    public function generateBody()
    {
        $xmlWriter = new XMLWriter;
        $xmlWriter->openMemory();
        $xmlWriter->startDocument('1.0', 'UTF-8');
        $xmlWriter->startElementNs(null, Constants::RECEIPT_HANDLES, Constants::MNS_XML_NAMESPACE);
        foreach ($this->receiptHandles as $receiptHandle) {
            $xmlWriter->writeElement(Constants::RECEIPT_HANDLE, $receiptHandle);
        }
        $xmlWriter->endElement();
        $xmlWriter->endDocument();

        return $xmlWriter->outputMemory();
    }

    /**
     * @return null
     */
    public function generateQueryString()
    {
        return null;
    }
}
