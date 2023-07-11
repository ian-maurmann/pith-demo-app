### :warning: **(Not ready yet)** :warning:

# pith-demo-app
Pith Framework - Demo Application

### :warning: **(Not ready yet)** :warning:

---

# Installation

### 1) Clone / Copy to project folder.


### 2) Install Composer
- Open the terminal and navigate to the project folder.
- Install Composer. Follow the instruction at [Download Composer](https://getcomposer.org/download/).

### 3) Run Composer

- Test PHP version
```bash
php -v
```

- See that Composer is really there and working.

```bash
php composer.phar
```

- Run Composer:

```bash
php composer.phar install

php composer.phar update
```

### 3) Copy runnable scripts

```bash
cp vendor/pith/framework/pith .

cp vendor/pith/framework/mig .
```

### 4) Configure the Env file

 - Copy `env.dist.php` to `env.php`
 - Add your own settings.

### 5) Run Migrations

- Test that doctrine migrations will work.

```bash
php mig
```
- Look at the list of migrations

```bash
php mig migrations:list
```

- Run all migrations

```bash
php mig migrations:migrate
```





