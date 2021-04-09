<p align="center"><img src="https://i.ibb.co/gPPyM1X/Logo-Lite-crop.png" width="256px" border="0"></p>

<h1 align="center"> 🚀 Empathy Litecore</h1>

[![Latest Stable Version](https://poser.pugx.org/empathy-php/litecore/v)](//packagist.org/packages/empathy-php/litecore) [![Total Downloads](https://poser.pugx.org/empathy-php/litecore/downloads)](//packagist.org/packages/empathy-php/litecore) [![License](https://poser.pugx.org/empathy-php/litecore/license)](//packagist.org/packages/empathy-php/litecore)

**Empathy Litecore** - облегчённая версия проекта [Empathy Core](https://github.com/empathy-framework/core)

## Установка

```
composer require empathy-php/litecore
```

Используется совместно с **Empathy Engine** или **Empathy Litengine**

Не подключает расширения PHP. Для того, чтобы подключить их, достаточно добавить их в папку `ext` и дописать следующий код в файл `script.php`:

```php
foreach (glob ('ext/php_*.dll') as $ext)
	if (!extension_loaded (substr (basename ($ext), 4, -4)))
		load_extension ($ext);
```

Для лучшей работы рекомендуется прописать следующий код в корневом файле `composer.json`:

```json
{
    "scripts": {
        "empathy-run": "vendor/empathy-php/litecore/empathy.exe vendor/empathy-php/core/script.php"
    }
}
```

После чего можно будет исполнять код

```
composer empathy-run
```

для запуска проекта

Код приложения можно писать в файле `app.php` в корневой директории проекта. Ядро реализует константу `Empathy\CORE_DIR`, указывающую абсолютный адрес к папке с ядром

Авторы: [Подвирный Никита](https://vk.com/technomindlp) и [Кусов Андрей](https://vk.com/postmessagea)
