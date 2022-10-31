<div align="center">

<!-- Module Image Here -->

</div>

<h1 align="center">element119 | Hyvä Canvas</h1>

<div align="center">

![github release](https://img.shields.io/github/v/release/pykettk/module-hyva-canvas?color=ffbf00&label=version)
![github release date](https://img.shields.io/github/release-date/pykettk/module-hyva-canvas?color=8b32a8&label=last%20release)
![license](https://img.shields.io/badge/license-OSL-ff00dd.svg)
![packagist downloads](https://img.shields.io/packagist/dt/element119/module-hyva-canvas?color=ff0000)

</div>

---

<div align="center">

![hyva-canvas](https://user-images.githubusercontent.com/40261741/199095544-11614a6e-a1c6-4326-84d2-50e3c4df13cf.gif)

</div>
    
## 📝 Features
✔️ Adds an AlpineJS-powered canvas component to Hyvä themes

✔️ Allows customers to draw, reset, and submit canvas data

✔️ Responsive design to suit mobile and desktop devices

✔️ Supports multiple canvas components per page

<br/>

## 🔌 Installation
Run the following command to *install* this module:
```bash
composer require element119/module-hyva-canvas
php bin/magento setup:upgrade
```

<br/>

## ⏫ Updating
Run the following command to *update* this module:
```bash
composer update element119/module-hyva-canvas
php bin/magento setup:upgrade
```

<br/>

## ❌ Uninstallation
Run the following command to *uninstall* this module:
```bash
composer remove element119/module-hyva-canvas
php bin/magento setup:upgrade
```

<br/>

## 📚 User Guide
### Adding the Canvas Component
To add the canvas component to a page, simply use layout XML to create a new block using the `Element119_HyvaCanvas::canvas.phtml` template.

```xml
<block name="my.canvas.component" template="Element119_HyvaCanvas::canvas.phtml"/>
```

<br/>

### Obtaining the Canvas Value
A custom JavaScript event is fired whenever the user submits their canvas data.
This event name is `customer-canvas-submitted` and the canvas data can be accessed via its `detail` object:

```
{
    ...
    detail: {
        canvasBlockName: "my_canvas_component",
        canvasImage: "data:image/png;base64,iVBORw0...",
    },
    ...
}
```

![canvas-demo](https://user-images.githubusercontent.com/40261741/199095607-829a692f-db1e-41b3-b313-663b5295c00f.gif)

<br/>

---

<div align="center">

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://paypal.me/pykettk)

For those that want to support this project.

</div>
