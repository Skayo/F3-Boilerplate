# Fat-Free Framework Boilerplate

This is a simple boilerplate for Projects using the [Fat-Free Framework](https://fatfreeframework.com/).

## Getting Started

1. Install Composer and then run:
   ```properties
   composer install
   ```

2. Copy `.env.example` to `.env`

3. Done. You can quickly get up and running by starting the PHP in-built web server:
   ```properties
   php -S localhost:8080 -t public
   ```

## Directory Structure

The directory structure is heavily inspired by Laravel/Lumen and can be customized however you want:
```
.
├── .env               # environment variables
├── app/
│   ├── Controllers/
│   ├── Models/
│   └── Helpers/       # helper functions and classes
├── config/
│   ├── bootstrap.php  # initializes the whole application
│   ├── globals.php    # framework variables and other globals
│   └── routes.php     # routes, maps and redirects
├── public/            # public web root
│   └── index.php      # entry point of the whole application
├── resources/
│   ├── langs/         # localization files
│   └── views/         # views/layouts
├── storage/           # storage for the application (needs chmod 0777)
│   ├── cache/
│   ├── logs/ 
│   ├── tmp/           # temporary files  
│   └── uploads/
└── lib/               # composer install directory
```
