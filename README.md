<div align="center">

<!-- Module Image Here -->

</div>

<h1 align="center">element119 | Hyva Signature</h1>

<div align="center">

![github release](https://img.shields.io/github/v/release/pykettk/module-hyva-signature?color=ffbf00&label=version)
![github release date](https://img.shields.io/github/release-date/pykettk/module-hyva-signature?color=8b32a8&label=last%20release)
![license](https://img.shields.io/badge/license-OSL-ff00dd.svg)
![packagist downloads](https://img.shields.io/packagist/dt/element119/module-hyva-signature?color=ff0000)

</div>

---

## 📝 Features
✔️ Adds an AlpineJS-powered signature component to Hyvä themes

✔️ Allows customers to draw, reset, and submit signatures

✔️ Responsive design to suit mobile and desktop devices

✔️ Supports multiple signature components per page

<br/>

## 🔌 Installation
Run the following command to *install* this module:
```bash
composer require element119/module-hyva-signature
php bin/magento setup:upgrade
```

<br/>

## ⏫ Updating
Run the following command to *update* this module:
```bash
composer update element119/module-hyva-signature
php bin/magento setup:upgrade
```

<br/>

## ❌ Uninstallation
Run the following command to *uninstall* this module:
```bash
composer remove element119/module-hyva-signature
php bin/magento setup:upgrade
```

<br/>

## 📚 User Guide
### Adding the Signature Component
To add the signature component to a page, simply use layout XML to create a new block using the `Element119_HyvaSignature::signature.phtml` template.

```xml
<block name="my.signature.component" template="Element119_HyvaSignature::signature.phtml"/>
```

<br/>

### Obtaining the Signature Value
A custom JavaScript event is fired whenever the user submits their signature.
This event name is `signature-submitted` and the signature data can be accessed via its `detail` object:

```
{
    ...
    detail: {
        signatureBlockName: "my_signature_component",
        signatureImage: "data:image/png;base64,iVBORw0...",
    },
    ...
}
```

![signature-demo](https://user-images.githubusercontent.com/40261741/199075851-22070660-9dbc-4c32-8456-a4e918e8ad56.gif)

<br/>

---

<div align="center">

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://paypal.me/pykettk)

For those that want to support this project.

</div>
