# Script to add App\ prefix to all namespaces in PHP files
$files = Get-ChildItem -Path app/UBL -Recurse -Filter *.php
$count = 0

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    if ($content -match 'namespace UBL\\') {
        # Replace namespace UBL\ with namespace App\UBL\
        $updatedContent = $content -replace 'namespace UBL\\', 'namespace App\UBL\'
        Set-Content -Path $file.FullName -Value $updatedContent
        $count++
        Write-Host "Updated namespace in: $($file.FullName)"
    }
}

Write-Host "Total files updated: $count" 