<?php

namespace App\Models;

class Invoice
{
    private string $id;
    private string $issueDate;
    private string $dueDate;
    private string $invoiceTypeCode;
    private string $documentCurrencyCode;
    private Party $accountingSupplierParty;
    private Party $accountingCustomerParty;
    private array $taxTotal;
    private array $legalMonetaryTotal;
    private array $invoiceLines;

    public function __construct()
    {
        $this->taxTotal = [];
        $this->legalMonetaryTotal = [];
        $this->invoiceLines = [];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getIssueDate(): string
    {
        return $this->issueDate;
    }

    public function setIssueDate(string $issueDate): void
    {
        $this->issueDate = $issueDate;
    }

    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    public function setDueDate(string $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    public function getInvoiceTypeCode(): string
    {
        return $this->invoiceTypeCode;
    }

    public function setInvoiceTypeCode(string $invoiceTypeCode): void
    {
        $this->invoiceTypeCode = $invoiceTypeCode;
    }

    public function getDocumentCurrencyCode(): string
    {
        return $this->documentCurrencyCode;
    }

    public function setDocumentCurrencyCode(string $documentCurrencyCode): void
    {
        $this->documentCurrencyCode = $documentCurrencyCode;
    }

    public function getAccountingSupplierParty(): Party
    {
        return $this->accountingSupplierParty;
    }

    public function setAccountingSupplierParty(Party $accountingSupplierParty): void
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
    }

    public function getAccountingCustomerParty(): Party
    {
        return $this->accountingCustomerParty;
    }

    public function setAccountingCustomerParty(Party $accountingCustomerParty): void
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
    }

    public function getTaxTotal(): array
    {
        return $this->taxTotal;
    }

    public function addTaxTotal(TaxTotal $taxTotal): void
    {
        $this->taxTotal[] = $taxTotal;
    }

    public function getLegalMonetaryTotal(): array
    {
        return $this->legalMonetaryTotal;
    }

    public function addLegalMonetaryTotal(LegalMonetaryTotal $legalMonetaryTotal): void
    {
        $this->legalMonetaryTotal[] = $legalMonetaryTotal;
    }

    public function getInvoiceLines(): array
    {
        return $this->invoiceLines;
    }

    public function addInvoiceLine(InvoiceLine $invoiceLine): void
    {
        $this->invoiceLines[] = $invoiceLine;
    }
} 