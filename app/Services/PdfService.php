<?php

namespace App\Services;

use TCPDF;
use NOKA\PHPUBL\UBL\Invoice;

class PdfService
{
    public function generateInvoicePdf(Invoice $invoice): string
    {
        // Create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Company');
        $pdf->SetTitle('Invoice ' . $invoice->getID());

        // Set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Invoice', 'Generated on ' . date('Y-m-d'));

        // Set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // Set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // Set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // Set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('helvetica', '', 10);

        // Invoice Header
        $html = '<h1>Invoice</h1>';
        $html .= '<table cellpadding="4" cellspacing="0" border="1">';
        
        // Basic Information
        if ($invoice->getID()) {
            $html .= '<tr><td><strong>Invoice Number:</strong></td><td>' . $invoice->getID() . '</td></tr>';
        }
        if ($invoice->getIssueDate()) {
            $html .= '<tr><td><strong>Issue Date:</strong></td><td>' . $invoice->getIssueDate()->format('Y-m-d') . '</td></tr>';
        }
        /*
        if ($invoice->getDueDate()) {
            $html .= '<tr><td><strong>Due Date:</strong></td><td>' . $invoice->getDueDate()->format('Y-m-d') . '</td></tr>';
        }
        */
        if ($invoice->getInvoiceTypeCode()) {
            $html .= '<tr><td><strong>Invoice Type:</strong></td><td>' . $invoice->getInvoiceTypeCode() . '</td></tr>';
        }
        if ($invoice->getDocumentCurrencyCode()) {
            $html .= '<tr><td><strong>Currency:</strong></td><td>' . $invoice->getDocumentCurrencyCode() . '</td></tr>';
        }

        // Supplier Information
        if ($supplierParty = $invoice->getAccountingSupplierParty()) {
            if ($party = $supplierParty->getParty()) {
                $html .= '<tr><td colspan="2"><strong>Supplier Information</strong></td></tr>';
                if ($legalEntities = $party->getPartyLegalEntity()) {
                    foreach ($legalEntities as $legalEntity) {
                        if ($registrationName = $legalEntity->getRegistrationName()) {
                            $html .= '<tr><td><strong>Names:</strong></td><td>' . $registrationName . '</td></tr>';
                        }
                        if ($legalEntity->getCompanyID()) {
                            $html .= '<tr><td><strong>Registration Number:</strong></td><td>' . $legalEntity->getCompanyID() . '</td></tr>';
                        }
                    }
                }
                if ($postalAddress = $party->getPostalAddress()) {
                    $address = [];
                    if ($streetName = $postalAddress->getStreetName()) {
                        $address[] = $streetName;
                    }
                    if ($cityName = $postalAddress->getCityName()) {
                        $address[] = $cityName;
                    }
                    if ($countrySubentity = $postalAddress->getCountrySubentity()) {
                        $address[] = $countrySubentity;
                    }
                    if ($country = $postalAddress->getCountry()) {
                        if ($identificationCode = $country->getIdentificationCode()) {
                            $address[] = $identificationCode;
                        }
                    }
                    $html .= '<tr><td><strong>Address:</strong></td><td>' . implode(', ', $address) . '</td></tr>';
                }
            }
        }

        // Customer Information
        if ($customerParty = $invoice->getAccountingCustomerParty()) {
            if ($party = $customerParty->getParty()) {
                $html .= '<tr><td colspan="2"><strong>Customer Information</strong></td></tr>';
                if ($legalEntities = $party->getPartyLegalEntity()) {
                    foreach ($legalEntities as $legalEntity) {
                        if ($registrationNames = $legalEntity->getRegistrationName()) {
                            $html .= '<tr><td><strong>Names:</strong></td><td>';
                            $names = [];
                            foreach ($registrationNames as $name) {
                                $names[] = $name;
                            }
                            $html .= implode('<br>', $names) . '</td></tr>';
                        }
                        if ($legalEntity->getCompanyID()) {
                            $html .= '<tr><td><strong>Company ID:</strong></td><td>' . $legalEntity->getCompanyID() . '</td></tr>';
                        }
                    }
                }
                if ($postalAddress = $party->getPostalAddress()) {
                    $address = [];
                    if ($streetName = $postalAddress->getStreetName()) {
                        $address[] = $streetName;
                    }
                    if ($cityName = $postalAddress->getCityName()) {
                        $address[] = $cityName;
                    }
                    if ($countrySubentity = $postalAddress->getCountrySubentity()) {
                        $address[] = $countrySubentity;
                    }
                    if ($country = $postalAddress->getCountry()) {
                        if ($identificationCode = $country->getIdentificationCode()) {
                            $address[] = $identificationCode;
                        }
                    }
                    $html .= '<tr><td><strong>Address:</strong></td><td>' . implode(', ', $address) . '</td></tr>';
                }
            }
        }

        // Invoice Lines
        if ($invoiceLines = $invoice->getInvoiceLine()) {
            $html .= '<tr><td colspan="2"><strong>Invoice Lines</strong></td></tr>';
            $html .= '<tr><td colspan="2">';
            $html .= '<table cellpadding="4" cellspacing="0" border="1">';
            $html .= '<tr><th>Item</th><th>Description</th><th>Quantity</th><th>Price</th><th>Total</th></tr>';
            
            foreach ($invoiceLines as $line) {
                $html .= '<tr>';
                if ($item = $line->getItem()) {
                    if ($name = $item->getName()) {
                        $html .= '<td>' . $name . '</td>';
                    }
                    if ($description = $item->getDescription()) {
                        $html .= '<td>' . $description . '</td>';
                    }
                }
                if ($invoicedQuantity = $line->getInvoicedQuantity()) {
                    $html .= '<td>' . $invoicedQuantity . '</td>';
                }
                if ($price = $line->getPrice()) {
                    if ($priceAmount = $price->getPriceAmount()) {
                        $html .= '<td>' . $priceAmount . '</td>';
                    }
                }
                if ($lineExtensionAmount = $line->getLineExtensionAmount()) {
                    $html .= '<td>' . $lineExtensionAmount . '</td>';
                }
                $html .= '</tr>';
            }
            $html .= '</table>';
            $html .= '</td></tr>';
        }

        // Totals
        if ($legalMonetaryTotal = $invoice->getLegalMonetaryTotal()) {
            $html .= '<tr><td colspan="2"><strong>Totals</strong></td></tr>';
            if ($lineExtensionAmount = $legalMonetaryTotal->getLineExtensionAmount()) {
                $html .= '<tr><td><strong>Subtotal:</strong></td><td>' . $lineExtensionAmount . '</td></tr>';
            }
            if ($taxExclusiveAmount = $legalMonetaryTotal->getTaxExclusiveAmount()) {
                $html .= '<tr><td><strong>Tax Exclusive Amount:</strong></td><td>' . $taxExclusiveAmount . '</td></tr>';
            }
            if ($taxInclusiveAmount = $legalMonetaryTotal->getTaxInclusiveAmount()) {
                $html .= '<tr><td><strong>Tax Inclusive Amount:</strong></td><td>' . $taxInclusiveAmount . '</td></tr>';
            }
            if ($payableAmount = $legalMonetaryTotal->getPayableAmount()) {
                $html .= '<tr><td><strong>Payable Amount:</strong></td><td>' . $payableAmount . '</td></tr>';
            }
        }

        $html .= '</table>';

        // Output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        // Generate the PDF file
        $pdfPath = storage_path('app/invoices/invoice_' . $invoice->getID() . '.pdf');
        $pdf->Output($pdfPath, 'F');

        return $pdfPath;
    }
} 