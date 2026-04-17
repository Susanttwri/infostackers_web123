winget install --id PHP.PHP.8.3 -e --source winget --accept-source-agreements --accept-package-agreements
$env:Path = [System.Environment]::GetEnvironmentVariable('Path', 'Machine') + ';' + [System.Environment]::GetEnvironmentVariable('Path', 'User')

$phpPath = (Get-Command php.exe -ErrorAction SilentlyContinue).Source
if (-not $phpPath) {
    $phpPath = (Get-ChildItem -Path "C:\*" -Filter "php.exe" -Recurse -Depth 3 -ErrorAction SilentlyContinue | Select-Object -First 1).FullName
}

if ($phpPath) {
    Write-Host "PHP found at $phpPath. Starting web server at http://localhost:8000 ..."
    & $phpPath -S localhost:8000
} else {
    Write-Host "PHP installed, but could not locate php.exe automatically."
    Write-Host "Please restart your IDE/terminal to refresh PATH, and run: php -S localhost:8000"
}
