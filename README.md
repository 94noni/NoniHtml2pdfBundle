NoniHtml2pdfBundle
=====================

Html2pdf for Symfony.

History
-------

[Html2pdf](https://github.com/spipu/html2pdf) for [Symfony](https://symfony.com) applications.

Please read https://github.com/Deamon/EnseparHtml2pdfBundle/pull/37

How to install?
---------------

Use [Composer](https://getcomposer.org) to install it:

```bash
$ composer require noni/html2pdf-bundle
```

Enable it in your `config/bundles.php` file:

```php
Noni\Html2pdfBundle\NoniHtml2pdfBundle::class => ['all' => true],
```

How to use?
-----------

In your code:

```php
use Noni\Html2pdfBundle\Factory\Html2pdfFactory;

class MyClass
{
    private Html2pdfFactory $html2pdfFactory;

    public function __construct(Html2pdfFactory $html2pdfFactory)
    {
        $this->html2pdfFactory = $html2pdfFactory;
    }
}
```

You can pass every options you would pass to `Html2pdf`, for instance:

```php
$html2pdfFactory = $this->html2pdfFactory->create('P', 'A4', 'en', true, 'UTF-8', [10, 15, 10, 15]);
```

If the previous arguments are not provided, the factory uses its own default values.
You can configure those default values by adding the bundle configuration to your config file:

```yaml
noni_html2pdf:
    orientation: 'P'
    format: 'A4'
    lang: 'en'
    unicode: true
    encoding: 'UTF-8'
    margin: [10, 15, 10, 15]
```

Read more on the library `Html2pdf` [here](https://github.com/spipu/html2pdf/blob/master/doc/README.md).
