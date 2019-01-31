# UniversityTradingSystem
A laravel-based php university trading system.

## Features:
* Users can post items and recieve offers from other users to swap.
* Users can add items to their favorite list.
* Users can accept or reject other users' offers (swap requests).
* Admin has to approve an accepted offer for transaction to be done.
* Admin can CRUD Users|Products|Categories
* Admin has a dashboard where they can monitor clicks and favorites on items.
* Homepage has three ways of displaying items, based on clicks|favorites|time added

## Usage:
1. Clone the repository
2. Use `php artisan migrate` to create tables in your DB
3. Use `php artisan serve` to host it on localhost:8000 * or add it to your virtual server

### Info:
You can change database creds in .env file.
* Server: localhost
* DB name: UTS
During signing up and login, the system will check for the email to match UKM university email 'xxxxx@siswa.ukm.edu.my' you can change that from 'app/Providers/AppServiceProvider.php'

> This is a university project built during our study in UKM for a Software Engineering bechelor degree.
