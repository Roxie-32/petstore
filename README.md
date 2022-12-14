## Project SetUp

- Run git clone <https://github.com/Roxie-32/petstore.git>.

- Move into your project directory by running cd petstore

- Run 'composer install' to install all the project dependencies

- Run 'composer copy:env' to create a .env file in the project root

> If the above does not work(which usually occurs if your terminal is not one of the unix-based terminals like bash, zsh etc), Manually Create a .env file at the root of the project directory and copy the content of .env.example.

- Updated the .env file with the necessary variables.

## Database Setup

- Update the .env file with the Database credentials
- Run `php artisan migrate --seed` to migrate the database tables and also seed the tables with some dummy data

## Start Application

- Run `php artisan serve` to start the application development server
- Run `php artisan route:list` to list all the available route that exists in the application
Sip some coffee while going through the code, you will enjoy it 😅

## Extra

I acknowledge that this codebase could be improved, however I focused on The Main Page(Blog)  and Product Section. I also included some nice-to-haves like Laravel IDE helper and Larastan level 8 rules. Run `/vendor/bin/phpstan analyse` to analyze the project.

The authentication for this API isnt entirely completed so most routes are unprotected but valid.

## Documentation

All endpoints have been documented in [OpenApi(Swagger)](https://app.swaggerhub.com/apis-docs/FIZZYFLEXY397/PetShop/1.0) to see how requests can be made and how a sample response looks like.
