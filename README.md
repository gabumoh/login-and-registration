# Demo Login and Registratoin App Start Up Instructions


Please follow these steps to get the app running. If these steps are not followed properly the app would not work properly or not work at all.

1. **Step 1**: Navigate to the app folder.

2. **Step 2**: If a `.env` file is not available, create an empty `.env` file and copy over content from the `.env.example` file into your newly created `.env` file.

3. **Step 3**: The `.env` file configuration in the `.env.example` file has already been set up for `sqlite`. If there is not a `database.sqlite` file present in the database folder create one.
If you are going to use your system's local `mysql` database, update the database section of your `.env` file to match the configurations of your local machine.

4. **Step 4**: Open a new terminal in the publisher-app folder and run the commands in the listed order to install componser requirements and create the database tables and seed the topics table:
```bash
composer install
```

```bash
php artisan migrate
```

5. **Step 5**: Still in that terminal you opened start the server
```bash
php artisan serve --port=8000