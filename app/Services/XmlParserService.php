<?php

namespace App\Services;

use App\Models\Invoice;
use App\Models\Party;
use App\Models\Address;
use App\Models\TaxTotal;
use App\Models\TaxSubtotal;
use App\Models\LegalMonetaryTotal;
use App\Models\InvoiceLine;
use App\Models\Item;
use App\Models\Price;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class XmlParserService
{
    public function parseXml(string $xmlContent): Invoice
    {
        $xml = new SimpleXMLElement($xmlContent);
        $invoice = new Invoice();

        // Parse basic invoice information
        $invoice->setId((string)$xml->cbc->ID);
        $invoice->setIssueDate((string)$xml->cbc->IssueDate);
        $invoice->setDueDate((string)$xml->cbc->DueDate);
        $invoice->setInvoiceTypeCode((string)$xml->cbc->InvoiceTypeCode);
        $invoice->setDocumentCurrencyCode((string)$xml->cbc->DocumentCurrencyCode);

        Log::info('Invoice ID: ' . $invoice->getId());
        Log::info($xmlContent);
        Log::info($xml);
        //dump($invoice);
        //echo "<script>console.log('Invoice ID: " . $invoice->getId() . "');</script>";

        // Parse supplier party
        /*$supplierParty = $this->parseParty($xml->AccountingSupplierParty->Party);
        $invoice->setAccountingSupplierParty($supplierParty);

        // Parse customer party
        $customerParty = $this->parseParty($xml->AccountingCustomerParty->Party);
        $invoice->setAccountingCustomerParty($customerParty);

        // Parse tax totals
        foreach ($xml->TaxTotal as $taxTotalXml) {
            $taxTotal = new TaxTotal();
            $taxTotal->setTaxAmount((float)$taxTotalXml->TaxAmount);
            
            foreach ($taxTotalXml->TaxSubtotal as $taxSubtotalXml) {
                $taxSubtotal = new TaxSubtotal();
                $taxSubtotal->setTaxableAmount((float)$taxSubtotalXml->TaxableAmount);
                $taxSubtotal->setTaxAmount((float)$taxSubtotalXml->TaxAmount);
                $taxSubtotal->setTaxCategory((string)$taxSubtotalXml->TaxCategory);
                $taxSubtotal->setTaxPercent((string)$taxSubtotalXml->Percent);
                $taxTotal->addTaxSubtotal($taxSubtotal);
            }
            
            $invoice->addTaxTotal($taxTotal);
        }

        // Parse legal monetary totals
        foreach ($xml->LegalMonetaryTotal as $monetaryTotalXml) {
            $monetaryTotal = new LegalMonetaryTotal();
            $monetaryTotal->setLineExtensionAmount((float)$monetaryTotalXml->LineExtensionAmount);
            $monetaryTotal->setTaxExclusiveAmount((float)$monetaryTotalXml->TaxExclusiveAmount);
            $monetaryTotal->setTaxInclusiveAmount((float)$monetaryTotalXml->TaxInclusiveAmount);
            $monetaryTotal->setPayableAmount((float)$monetaryTotalXml->PayableAmount);
            $invoice->addLegalMonetaryTotal($monetaryTotal);
        }

        // Parse invoice lines
        foreach ($xml->InvoiceLine as $invoiceLineXml) {
            $invoiceLine = new InvoiceLine();
            $invoiceLine->setId((string)$invoiceLineXml->ID);
            $invoiceLine->setInvoicedQuantity((float)$invoiceLineXml->InvoicedQuantity);
            $invoiceLine->setLineExtensionAmount((string)$invoiceLineXml->LineExtensionAmount);

            // Parse item
            $item = new Item();
            $item->setName((string)$invoiceLineXml->Item->Name);
            $item->setDescription((string)$invoiceLineXml->Item->Description);
            $item->setSellersItemIdentification((string)$invoiceLineXml->Item->SellersItemIdentification);
            $item->setClassifiedTaxCategory((string)$invoiceLineXml->Item->ClassifiedTaxCategory);
            $invoiceLine->setItem($item);

            // Parse price
            $price = new Price();
            $price->setPriceAmount((float)$invoiceLineXml->Price->PriceAmount);
            $price->setCurrencyID((string)$invoiceLineXml->Price->CurrencyID);
            $invoiceLine->setPrice($price);

            $invoice->addInvoiceLine($invoiceLine);
        }
            */

        return $invoice;
    }

    private function parseParty(SimpleXMLElement $partyXml): Party
    {
        $party = new Party();
        $party->setId((string)$partyXml->EndpointID);
        $party->setName((string)$partyXml->PartyName->Name);

        // Parse address
        $address = new Address();
        $address->setStreetName((string)$partyXml->PostalAddress->StreetName);
        $address->setBuildingNumber((string)$partyXml->PostalAddress->BuildingNumber);
        $address->setCityName((string)$partyXml->PostalAddress->CityName);
        $address->setPostalZone((string)$partyXml->PostalAddress->PostalZone);
        $address->setCountry((string)$partyXml->PostalAddress->Country);
        $party->setPostalAddress($address);

        return $party;
    }
}
