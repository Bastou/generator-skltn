# Getting Started

If you haven't already, install [yo] run:

```sh
$ npm install --global yo
```
Install the generator :

```sh
$ git clone
$ npm install
$ npm link
```

Now you can scaffold your own web app:

```sh
$ mkdir my-webapp
$ cd my-webapp
$ yo skltn
```

To start developing, run your site on an Apache server. You can do it with mamp/wamp.

## Tasks

You can get the list of available tasks, run:

```sh
$ gulp --tasks
```


## Basic structure

Adapted From html5 boilerplate

```
.
├── css
│   ├── main.css
│   └── vendors
├── sass
│   ├── main.scss
│   ├── base
│   ├── bourbon
│   ├── components
│   ├── helpers
│   ├── layout
│   ├── pages
│   └── vendors
├── img
├── js
│   ├── main.js
│   └── vendor
│       ├── jquery.min.js
│       └── ...
├── .editorconfig
├── .htaccess
├── 404.php
├── apple-touch-icon.png
├── browserconfig.xml
├── index.php
├── pages.php
├── ...
├── humans.txt
├── robots.txt
├── crossdomain.xml
├── favicon.ico
├── tile-wide.png
└── tile.png
```

## Sass

We use a modular organisation for sass with file structure

- base
- bourbon
- components
- helpers
- layout
- main.scss
- pages
- vendors

#### Parameters

You can change the global parameters in `helpers/variables.scss`

#### Add components

Add a file for your component in the /components folder and include it in `main.scss`

```scss
@import "nav";
```

#### Helpers

There's a lot of helper classes in `helpers/helpers.scss`

- Margin top 0 : .mt0`
- Padding bottom medium : `.pbm`
- Visually hidden : `.visuallyhidden`

## JavaScript

Javascript files are included in footer.php.
You can add vendor scripts in `/vendor` and link it like this :

```html
<!-- scripts -->
<script src="js/vendors/nav.js"></script>
<script src="js/scripts/main.js"></script>
<!-- endbuild -->
```

After that add a module in the `main.js` and run it in the `init()` function

## Use in a cms

You can change and add settings in `config.php` to adapt the project to any CMS 

## Templating 

If you don't want to use a CMS, you can use twig as a [templating engine](http://twig.sensiolabs.org/doc/2.x/intro.html#installation)
