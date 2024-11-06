# ContactForm

[![Latest Version](https://img.shields.io/github/release/sontus/contactform.svg?style=flat-square)](https://packagist.org/packages/sontus/contactform)
[![Total Downloads](https://img.shields.io/packagist/dt/sontus/contactform.svg?style=flat-square)](https://packagist.org/packages/your-username/your-package)
[![License](https://img.shields.io/github/license/sontus/contactform.svg?style=flat-square)](https://github.com/sontus/contactform/blob/main/LICENSE)

Simple Contact Form Package for Any Laravel Website.Build with TailwindCSS.

---

## Table of Contents
- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Testing](#testing)
- [Changelog](#changelog)
- [Contributing](#contributing)
- [License](#license)

---

## Installation

To install this package, you can use Composer. Run the following command in your Laravel project:

```bash
composer require sontus/contactform
```

---

## Usage

```php
use Sontus\Contactform\ContractFormServiceProvider;

$app->register(ContractFormServiceProvider::class);
```

---

## Configuration

```php
use Sontus\Contractform\ContactFormServiceProvider;

$app->register(ContactFormServiceProvider::class);

$app->configure(ContactFormServiceProvider::class);
``` 

---

## Testing

```bash
php artisan test
```

---

## Changelog

- [v1.0.0](https://github.com/your-username/your-package/commit/your-commit-hash) - Initial release
- [v1.1.0](https://github.com/your-username/your-package/commit/your-commit-hash) - Added new feature

---

## Contributing

- [Contributing Guidelines](https://github.com/your-username/your-package/blob/main/CONTRIBUTING.md)
- [Code of Conduct](https://github.com/your-username/your-package/blob/main/CODE_OF_CONDUCT.md)
- [Security Vulnerabilities](https://github.com/your-username/your-package/blob/main/SECURITY.md)

---

## License

[MIT](https://github.com/sontus/contactform/blob/main/LICENSE)

--- 
