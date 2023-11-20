# OpenWeather Laravel Integration

This Laravel project integrates with the OpenWeather API to fetch and store weather data for specified cities. The weather data is stored in a MySQL database, and a scheduled task updates the data at regular intervals(10 min).

## Getting Started

### Prerequisites

- PHP (>=7.3)
- Composer
- MySQL
- Laravel (>=9.0)

### Installation

1. Clone the repository:

```bash
git clone https://github.com/hajosroli/openweather-laravel.git
cd openweather-laravel
```  
   
2. Install dependencies:

```bash
composer install
``` 

3.Create a copy of the .env.example file and rename it to .env. Update the database configuration with your credentials.

4.Run migrations:

```bash
php artisan migrate
```

### Configuration
5.Update the OpenWeather API key and other configuration settings in the .env file:

```bash
OPENWEATHER_API_KEY=your-openweather-api-key
```

### Usage

6.Run the Laravel development server:
```bash
php artisan serve
```

7. Run the scheduler:

   To run the scheduled tasks using CRON, add the following to your CRON tab:
```bash
* * * * * cd /path/to/your/laravel/project && php artisan schedule:run >> /dev/null 2>&1
```

Access the application:

Open your browser and navigate to http://localhost:8000.
