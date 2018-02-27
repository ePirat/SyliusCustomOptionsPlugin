<?php

declare(strict_types=1);

namespace Brille24\CustomerOptionsPlugin\Entity;

use Brille24\CustomerOptionsPlugin\Entity\CustomerOptions\CustomerOptionInterface;
use Brille24\CustomerOptionsPlugin\Entity\CustomerOptions\CustomerOptionValueInterface;
use Brille24\CustomerOptionsPlugin\Entity\CustomerOptions\CustomerOptionValuePriceInterface;

interface OrderItemOptionInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return OrderItemInterface
     */
    public function getOrderItem(): OrderItemInterface;

    /**
     * @param OrderItemInterface $orderItem
     */
    public function setOrderItem(OrderItemInterface $orderItem): void;

    /**
     * @param CustomerOptionInterface|null $customerOption
     */
    public function setCustomerOption(?CustomerOptionInterface $customerOption): void;

    /**
     * @return CustomerOptionInterface|null
     */
    public function getCustomerOption(): ?CustomerOptionInterface;

    /**
     * @return string
     */
    public function getCustomerOptionCode(): ?string;

    /**
     * @return string
     */
    public function getCustomerOptionName(): string;

    /**
     * @return string
     */
    public function getOptionValue(): ?string;

    /**
     * @param CustomerOptionValueInterface|null $customerOptionValue
     */
    public function setCustomerOptionValue(?CustomerOptionValueInterface $customerOptionValue): void;

    /**
     * @return CustomerOptionValueInterface|null
     */
    public function getCustomerOptionValue(): ?CustomerOptionValueInterface;

    /**
     * @return string
     */
    public function getCustomerOptionValueCode(): ?string;

    /**
     * @return string
     */
    public function getCustomerOptionValueName(): string;

    /**
     * @param CustomerOptionValuePriceInterface $price
     */
    public function setPrice(CustomerOptionValuePriceInterface $price): void;

    /**
     * @param int $price
     */
    public function setFixedPrice(int $price): void;

    /**
     * @return int
     */
    public function getFixedPrice(): int;

    /**
     * @param float $percent
     */
    public function setPercent(float $percent): void;

    /**
     * @return float
     */
    public function getPercent(): float;

    /**
     * @return string
     */
    public function getPricingType(): string;

    /**
     * @return mixed
     */
    public function getScalarValue();

    /** {@inheritdoc} */
    public function equals(self $orderItemOption): bool;

}
