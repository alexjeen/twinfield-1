<?php

namespace PhpTwinfield\Transactions\BankTransactionLine;

use Money\Money;
use PhpTwinfield\Enums\LineType;
use PhpTwinfield\Office;
use PhpTwinfield\Transactions\TransactionFields\InvoiceNumberField;
use PhpTwinfield\Transactions\TransactionLine;
use PhpTwinfield\Transactions\TransactionLineFields\CommentField;
use PhpTwinfield\Transactions\TransactionLineFields\ThreeDimFields;
use PhpTwinfield\Transactions\TransactionLineFields\ValueFields;

abstract class Base implements TransactionLine
{
    use ValueFields;
    use ThreeDimFields;
    use CommentField;

    /**
     * Note that the field is not in the documentation but it is in all the examples.
     *
     * @link https://c3.twinfield.com/webservices/documentation/#/ApiReference/Transactions/BankTransactions
     */
    use InvoiceNumberField;

    /**
     * Line ID.
     *
     * @var int
     */
    private $id;
    /**
     * @var LineType
     */
    private $type;

    /**
     * @var string
     */
    private $description;

    /**
     * @var Office
     */
    private $destOffice;

    /**
     * Free character field. (1 char)
     *
     * @var string
     */
    private $freeChar;

    /**
     * @return LineType
     */
    final public function getType(): LineType
    {
        return $this->type;
    }

    /**
     * @param LineType $type
     */
    final protected function setType(LineType $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return Office
     */
    public function getDestOffice(): Office
    {
        return $this->destOffice;
    }

    /**
     * @param Office $destOffice
     */
    public function setDestOffice(Office $destOffice): void
    {
        $this->destOffice = $destOffice;
    }

    /**
     * @return string
     */
    public function getFreeChar(): ?string
    {
        return $this->freeChar;
    }

    /**
     * @param string $freeChar
     */
    public function setFreeChar(string $freeChar): void
    {
        $this->freeChar = $freeChar;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}