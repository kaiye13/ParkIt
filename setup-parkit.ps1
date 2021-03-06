# To run this script open this project in a powershell window and type '.\setup-parkit.ps1'

Write-Output 'Installing Laravel dependencies'
composer install

Write-Output 'Installing development dependencies'
npm install

Write-Output 'Generating .env file'
Copy-Item .env.example .env

Write-Output 'Generating artisan key'
php artisan key:generate
php artisan cache:clear
php artisan config:clear
