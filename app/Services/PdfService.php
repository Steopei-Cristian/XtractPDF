<?php

namespace App\Services;

use TCPDF;
use NOKA\PHPUBL\UBL\Invoice;

class PdfService
{
    public function generateInvoicePdf(Invoice $invoice): string
    {
        // Create new PDF document
        $pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);

        // Remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Company');
        $pdf->SetTitle('Factura ' . $invoice->getID());

        // Set margins - adjusted for landscape
        $pdf->SetMargins(15, 10, 15);
        $pdf->SetAutoPageBreak(TRUE, 10);

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('helvetica', '', 10);

        // Start building the HTML content
        $html = '<table cellpadding="2" cellspacing="0" border="0" style="width: 100%;">
                    <tr>
                        <td style="width: 40%;">
                            <strong>VANZATOR</strong><br>
                            <table cellpadding="2" cellspacing="0" border="0">';

        // Supplier Information
        if ($supplierParty = $invoice->getAccountingSupplierParty()) {
            if ($party = $supplierParty->getParty()) {
                if ($partyIdentifications = $party->getPartyIdentification()) {
                    foreach ($partyIdentifications as $identification) {
                        if ($id = $identification->getID()) {
                            $html .= '<tr><td>Identificator: ' . $id . '</td></tr>';
                        }
                    }
                }

                if ($legalEntities = $party->getPartyLegalEntity()) {
                    foreach ($legalEntities as $legalEntity) {
                        if ($registrationName = $legalEntity->getRegistrationName()) {
                            $html .= '<tr><td>Nume: ' . $registrationName . '</td></tr>';
                        }
                        if ($companyId = $legalEntity->getCompanyID()) {
                            $html .= '<tr><td>Nr. inregistrare: ' . $companyId . '</td></tr>';
                        }
                    }
                }

                if ($postalAddress = $party->getPostalAddress()) {
                    if ($streetName = $postalAddress->getStreetName()) {
                        $html .= '<tr><td>Strada: ' . $streetName . '</td></tr>';
                    }
                    if ($cityName = $postalAddress->getCityName()) {
                        $html .= '<tr><td>Oras: ' . $cityName . '</td></tr>';
                    }
                    if ($country = $postalAddress->getCountry()) {
                        if ($identificationCode = $country->getIdentificationCode()) {
                            $html .= '<tr><td>Tara: ' . $identificationCode . '</td></tr>';
                        }
                    }
                }

                if ($contact = $party->getContact()) {
                    if ($telephone = $contact->getTelephone()) {
                        $html .= '<tr><td>Telefon: ' . $telephone . '</td></tr>';
                    }
                    if ($email = $contact->getElectronicMail()) {
                        $html .= '<tr><td>E-mail: ' . $email . '</td></tr>';
                    }
                }
            }
        }

        $html .= '</table>
                </td>
                <td style="width: 20%; text-align: center;">
                    <h2>RO eFactura</h2>
                    <table cellpadding="2" cellspacing="0" border="0" style="width: 100%;">';

        // Invoice Details
        if ($invoice->getID()) {
            $html .= '<tr><td>Nr. factura: ' . $invoice->getID() . '</td></tr>';
        }
        if ($invoice->getInvoiceTypeCode()) {
            $html .= '<tr><td>Codul tipului: ' . $invoice->getInvoiceTypeCode() . '</td></tr>';
        }
        if ($invoice->getIssueDate()) {
            $html .= '<tr><td>Data emitere: ' . $invoice->getIssueDate()->format('Y-m-d') . '</td></tr>';
        }
        /* 
        if ($invoice->getDueDate()) {
            $html .= '<tr><td>Data scadenta: ' . $invoice->getDueDate()->format('Y-m-d') . '</td></tr>';
        }
            */
        if ($invoice->getDocumentCurrencyCode()) {
            $html .= '<tr><td>Moneda facturii: ' . $invoice->getDocumentCurrencyCode() . '</td></tr>';
        }

        $html .= '</table>
                </td>
                <td style="width: 40%;">
                    <strong>CUMPARATOR</strong><br>
                    <table cellpadding="2" cellspacing="0" border="0">';

        // Customer Information
        if ($customerParty = $invoice->getAccountingCustomerParty()) {
            if ($party = $customerParty->getParty()) {
                if ($partyIdentifications = $party->getPartyIdentification()) {
                    foreach ($partyIdentifications as $identification) {
                        if ($id = $identification->getID()) {
                            $html .= '<tr><td>Identificator: ' . $id . '</td></tr>';
                        }
                    }
                }

                if ($legalEntities = $party->getPartyLegalEntity()) {
                    foreach ($legalEntities as $legalEntity) {
                        if ($registrationName = $legalEntity->getRegistrationName()) {
                            $html .= '<tr><td>Nume: ' . $registrationName . '</td></tr>';
                        }
                        if ($companyId = $legalEntity->getCompanyID()) {
                            $html .= '<tr><td>Nr. inregistrare: ' . $companyId . '</td></tr>';
                        }
                    }
                }

                if ($postalAddress = $party->getPostalAddress()) {
                    if ($streetName = $postalAddress->getStreetName()) {
                        $html .= '<tr><td>Strada: ' . $streetName . '</td></tr>';
                    }
                    if ($cityName = $postalAddress->getCityName()) {
                        $html .= '<tr><td>Oras: ' . $cityName . '</td></tr>';
                    }
                    if ($country = $postalAddress->getCountry()) {
                        if ($identificationCode = $country->getIdentificationCode()) {
                            $html .= '<tr><td>Tara: ' . $identificationCode . '</td></tr>';
                        }
                    }
                }
            }
        }

        $html .= '</table>
                </td>
            </tr>
        </table>';

        // Invoice Lines
        if ($invoiceLines = $invoice->getInvoiceLine()) {
            $html .= '<br><table cellpadding="4" cellspacing="0" border="1" style="width: 100%;">
                <tr style="background-color: #f0f0f0;">
                    <th>Linia</th>
                    <th>Nume articol/Descriere articol</th>
                    <th>Tara provenienta</th>
                    <th>Pretul net al articolului</th>
                    <th>Moneda</th>
                    <th>Cantitate de baza</th>
                    <th>Cantitate facturata</th>
                    <th>UM</th>
                    <th>Cota TVA</th>
                    <th>Valoare neta</th>
                </tr>';
            
            $lineNumber = 1;
            foreach ($invoiceLines as $line) {
                $html .= '<tr>';
                $html .= '<td>' . $lineNumber++ . '</td>';
                
                // Item name and description
                if ($item = $line->getItem()) {
                    if ($name = $item->getName()) {
                        $html .= '<td>' . $name . '</td>';
                    } else {
                        $html .= '<td></td>';
                    }
                } else {
                    $html .= '<td></td>';
                }

                // Country of origin
                $html .= '<td></td>';

                // Net price
                if ($price = $line->getPrice()) {
                    if ($priceAmount = $price->getPriceAmount()) {
                        $amount = is_object($priceAmount) ? (string)$priceAmount : $priceAmount;
                        $html .= '<td style="text-align: right;">' . number_format((float)$amount, 2) . '</td>';
                    } else {
                        $html .= '<td></td>';
                    }
                } else {
                    $html .= '<td></td>';
                }

                // Currency
                $html .= '<td style="text-align: center;">' . $invoice->getDocumentCurrencyCode() . '</td>';

                // Base quantity
                $html .= '<td style="text-align: right;">1.000</td>';

                // Invoiced quantity
                if ($invoicedQuantity = $line->getInvoicedQuantity()) {
                    $quantity = is_object($invoicedQuantity) ? (string)$invoicedQuantity : $invoicedQuantity;
                    $html .= '<td style="text-align: right;">' . number_format((float)$quantity, 3) . '</td>';
                } else {
                    $html .= '<td></td>';
                }

                // Unit of measure
                $html .= '<td style="text-align: center;">H87</td>';

                // VAT rate
                $html .= '<td></td>';

                // Net value
                if ($lineExtensionAmount = $line->getLineExtensionAmount()) {
                    $amount = is_object($lineExtensionAmount) ? (string)$lineExtensionAmount : $lineExtensionAmount;
                    $html .= '<td style="text-align: right;">' . number_format((float)$amount, 2) . '</td>';
                } else {
                    $html .= '<td></td>';
                }
                
                $html .= '</tr>';
            }
            $html .= '</table>';
        }

        // Totals
        if ($legalMonetaryTotal = $invoice->getLegalMonetaryTotal()) {
            $html .= '<br><table cellpadding="2" cellspacing="0" border="1" style="width: 100%; font-size: 8pt;">
                <tr style="text-align: center;">
                    <th style="width: 14.28%;">TOTAL NET</th>
                    <th style="width: 14.28%;">VALOARE TOTALA fara TVA</th>
                    <th style="width: 14.28%;">VALOARE TOTALA cu TVA</th>
                    <th style="width: 14.28%;">TOTAL DEDUCERI</th>
                    <th style="width: 14.28%;">TOTAL TAXE SUPLIMENTARE</th>
                    <th style="width: 14.28%;">SUMA PLATITA</th>
                    <th style="width: 14.28%;">VALOARE DE ROTUNJIRE</th>
                </tr>
                <tr style="text-align: right;">';

            if ($lineExtensionAmount = $legalMonetaryTotal->getLineExtensionAmount()) {
                $amount = is_object($lineExtensionAmount) ? (string)$lineExtensionAmount : $lineExtensionAmount;
                $formattedAmount = number_format((float)$amount, 2);
                $html .= '<td>' . $formattedAmount . '</td>';
                $html .= '<td>' . $formattedAmount . '</td>';
                $html .= '<td>' . $formattedAmount . '</td>';
            } else {
                $html .= '<td></td><td></td><td></td>';
            }

            // Empty cells for deductions and additional taxes
            $html .= '<td></td><td></td>';

            // Suma platita (same as total)
            if ($lineExtensionAmount) {
                $html .= '<td>' . $formattedAmount . '</td>';
            } else {
                $html .= '<td></td>';
            }

            // Empty cell for rounding value
            $html .= '<td></td>';

            $html .= '</tr></table>';

            // TOTAL PLATA row
            $html .= '<table cellpadding="2" cellspacing="0" border="0" style="width: 100%; font-size: 8pt;">
                <tr>
                    <td><strong>TOTAL PLATA</strong></td>
                    <td>' . $formattedAmount . '</td>
                </tr>
            </table>';

            // TOTAL row with 0.00 RON
            $html .= '<table cellpadding="2" cellspacing="0" border="0" style="width: 100%; font-size: 8pt;">
                <tr>
                    <td><strong>TOTAL</strong></td>
                    <td>0.00</td>
                    <td>RON</td>
                </tr>
            </table>';

            // DETALIEREA TVA section
            $html .= '<table cellpadding="2" cellspacing="0" border="0" style="width: 100%; font-size: 8pt;">
                <tr>
                    <td colspan="4"><strong>DETALIEREA TVA</strong></td>
                </tr>
                <tr>
                    <td>Codul categoriei</td>
                    <td>deO</td>
                    <td>Cota TVA</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Baza de calcul</td>
                    <td>' . $formattedAmount . '</td>
                    <td>Valoare TVA</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td colspan="4">Codul VATEX-EU-O motivul/Motivul scutirii: Entitatea nu este inregistrata in scopuri de TVA</td>
                </tr>
            </table>';
        }

        // Payment Instructions
        $html .= '<br><table cellpadding="4" cellspacing="0" border="0" style="width: 100%;">
            <tr><td colspan="2"><strong>Instructiuni de plata</strong></td></tr>
            <tr>
                <td style="width: 30%;">Codul tipului de instrument de plata</td>
                <td>42</td>
            </tr>
            <tr>
                <td>Nr. cont de plata</td>
                <td>RO70BTRLRONCRT0G3230701</td>
            </tr>
            <tr>
                <td>Numele contului de plata</td>
                <td>BANCA TRANSILVANIA</td>
            </tr>
        </table>';

        // Output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        // Generate the PDF file
        $pdfPath = storage_path('app/invoices/invoice_' . $invoice->getID() . '.pdf');
        $pdf->Output($pdfPath, 'F');

        return $pdfPath;
    }
} 