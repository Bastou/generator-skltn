'use strict';
var yeoman = require('yeoman-generator');
var chalk = require('chalk');
var yosay = require('yosay');

module.exports = yeoman.generators.Base.extend({
    constructor: function() {
        var testLocal;

        yeoman.generators.Base.apply(this, arguments);

        this.option('skip-welcome-message', {
            desc: 'Skips intro message',
            type: Boolean
        });

    },
    //Ask for user input
    prompting: function() {
        var done = this.async();

        if (!this.options['skip-welcome-message']) {
            this.log(" ______     __  __     __         ______   __   __    \n/\\  ___\\   /\\ \\/ /    /\\ \\       /\\__  _\\ /\\ \"-.\\ \\   \n\\ \\___  \\  \\ \\  _\"-.  \\ \\ \\____  \\/_/\\ \\/ \\ \\ \\-.  \\  \n \\/\\_____\\  \\ \\_\\ \\_\\  \\ \\_____\\    \\ \\_\\  \\ \\_\\\\\"\\_\\ \n  \\/_____/   \\/_/\\/_/   \\/_____/     \\/_/   \\/_/ \\/_/ \n                                                      ");
            this.log(yosay('\'Hey! This is ' +  
                chalk.white.bgBlack.bold('SKLTN')  + 
                '. A website skeleton to kickstart your new php web project on top of ' +
                chalk.magenta('  HTML5 Boilerplate, SASS, Bootstrap 4, jQuery, Gulp')  +
                '. It\'s fully customizable and it include lot of features'));
        }
        this.prompt([{
            type: 'input',
            name: 'name',
            message: 'Your project name',
            default: this.appname, // Default to current folder name
            store: true
        }, {
            type: 'input',
            name: 'description',
            message: 'Make a small description of your project',
            store: true
        }, {
            type: 'input',
            name: 'appurl',
            message: 'Your project url ("/" by default)',
            store: true
        }, {
            type: 'input',
            name: 'authorname',
            message: 'The author name',
            store: true
        }, {
            type: 'input',
            name: 'authoremail',
            message: 'The author email (optional)',
            store: true
        }, {
            type: 'confirm',
            name: 'fr',
            message: 'Is it in french ?',
            store: true,
            default: true
        }, {
            type: 'confirm',
            name: 'fullwidth',
            message: 'Is page full width ?',
            store: true,
            default: true
        }, {
            type: 'list',
            name: 'layoutmenu',
            message: 'Which menu layout do you want?',
            default: false,
            choices: [{
                name: 'Horizontal menu at the top of content',
                value: false
            }, {
                name: 'Vertical menu on the left of content',
                value: true
            }],
            when: function(answers) {
                return answers.fullwidth == true;
            }
        }, {
            type: 'confirm',
            name: 'bannerImage',
            message: 'Add an image banner on top of pages ?',
            checked: true,
            default: true
        }, {
            type: 'confirm',
            name: 'headerTopBar',
            message: 'Add a top header menu bar ?',
            checked: true,
            default: true,
            when: function(answers) {
                return answers.layoutmenu !== true;
            }
        }, {
            type: 'checkbox',
            name: 'modelPages',
            message: 'Which model pages would you like to include?',
            choices: [{
                name: 'Articles',
                value: 'news',
                checked: true
            }, {
                name: 'Contact',
                value: 'contact',
                checked: true
            }]
        }, {
            type: 'checkbox',
            name: 'components',
            message: 'Which components would you like to include?',
            choices: [{
                name: 'Cards bloc',
                value: 'cards',
                checked: true
            }, {
                name: 'Forms',
                value: 'forms',
                checked: true
            }, {
                name: 'Slider with swipe',
                value: 'slider',
                checked: true
            }, {
                name: 'Map google map',
                value: 'map',
                checked: false
            }, {
                name: 'Accordion',
                value: 'accordion',
                checked: false
            }, {
                name: 'Tabs',
                value: 'tabs',
                checked: false
            }, {
                name: 'Gallery with lightbox',
                value: 'gallery',
                checked: false
            }, {
                name: 'Filters',
                value: 'filters',
                checked: false
            }, {
                name: 'Progress bar',
                value: 'progressBar',
                checked: false
            }]
        }, {
            type: 'confirm',
            name: 'includeDatepicker',
            message: 'Would you like to include a datepicker?',
            default: true,
            when: function(answers) {
                return answers.components.indexOf('forms') !== -1;
            }
        }, {
            type: 'confirm',
            name: 'cookies',
            message: 'Does it have cookies ?',
            checked: true,
            default: true
        }], function(answers) {

            // Set answers to global object use
            this.props = answers;
            this.log(answers.name);

            this.props.slug = slugify(this.props.name);

            //# manually deal with the response, get back and store the results #
            // for conditionnal features
            this.includeComponents = includeFeatureGroup(answers.components);

            // for conditionnal pages
            this.includePages = includeFeatureGroup(answers.modelPages);

            //# Set data for conditionnal templating #

            // app info 
            this.tplAppInfo = {
                date: (new Date).toISOString().split('T')[0],
                appname: answers.name,
                appslug: answers.slug,
                appurl: answers.appurl || '/',
                description: answers.description,
                authorname: answers.authorname,
                authoremail: answers.authoremail,
                isFR: answers.fr
            };

            // layout config 
            this.tplLayoutConfig = {
                isFullwidth: answers.fullwidth,
                hasVerticalMenu: answers.layoutmenu || false,
                hasBannerImage: answers.bannerImage,
                hasHeaderTopBar: answers.headerTopBar || false

            };

            // components
            this.tplIncludeComponents = {
                includeCards: this.includeComponents['cards'],
                includeForms: this.includeComponents['forms'],
                includeSlider: this.includeComponents['slider'],
                includeMap: this.includeComponents['map'],
                includeAccordion: this.includeComponents['accordion'],
                includeTabs: this.includeComponents['tabs'],
                includeGallery: this.includeComponents['gallery'],
                includeFilters: this.includeComponents['filters'],
                includeProgressBar: this.includeComponents['progressBar'],
                includeDatepicker: answers.includeDatepicker,
                includeCookies: answers.cookies,
            };

            // pages
            this.tplIncludePages = {
                includeNews: this.includePages['news'],
                includeContact: this.includePages['contact']
            };

            // Concat everything
            this.tplAppAllData = Object.assign(
                this.tplAppInfo,
                this.tplLayoutConfig,
                this.tplIncludePages,
                this.tplIncludeComponents
            );

            done();
        }.bind(this));
    },
    //Writing Logic here
    writing: {
        //Copy the configuration files
        config: function() {
            this.fs.copyTpl(
                this.templatePath('config.php'),
                this.destinationPath('config.php'),
                this.tplAppAllData
            );

            this.fs.copy(
                this.templatePath('package.json'),
                this.destinationPath('package.json')
            );
        },

        // Partials
        head: function() {
            this.fs.copyTpl(
                this.templatePath('head.php'),
                this.destinationPath('head.php'),
                Object.assign(
                    this.tplAppInfo,
                    this.tplIncludeComponents
                )
            );
        },

        header: function() {
            var headerTemplate = this.props.layoutmenu ? 'header-left-vertical-menu.php' : 'header-top-menu.php';
            this.fs.copyTpl(
                this.templatePath(headerTemplate),
                this.destinationPath('header.php'),
                this.tplAppAllData
            );
        },
        footer: function() {
            this.fs.copyTpl(
                this.templatePath('footer.php'),
                this.destinationPath('footer.php'),
                this.tplAppAllData
            );
        },


        //Copy application files
        pages: function() {
            // Index
            this.fs.copyTpl(
                this.templatePath('index.php'),
                this.destinationPath('index.php'),
                this.tplIncludeComponents
            );

            // Styleguide
            this.fs.copyTpl(
                this.templatePath('styleguide.php'),
                this.destinationPath('styleguide.php'),
                Object.assign(
                    this.tplLayoutConfig,
                    this.tplIncludeComponents
                )
            );

            // Model
            this.fs.copyTpl(
                this.templatePath('model.php'),
                this.destinationPath('model.php'), {
                    hasBannerImage: this.props.bannerImage
                }
            );

            // Contact
            if (this.includePages['contact']) {
                this.fs.copyTpl(
                    this.templatePath('contact.php'),
                    this.destinationPath('contact.php'),
                    Object.assign(
                        this.tplLayoutConfig,
                        this.tplIncludeComponents
                    )
                );
            };

            // News
            if (this.includePages['news']) {
                this.fs.copyTpl(
                    this.templatePath('actualites.php'),
                    this.destinationPath('actualites.php'), {
                        hasBannerImage: this.props.bannerImage
                    }
                );
                this.fs.copyTpl(
                    this.templatePath('actualites-detail.php'),
                    this.destinationPath('actualites-detail.php'), {
                        hasBannerImage: this.props.bannerImage
                    }
                );
            };

            // Search results
            this.fs.copyTpl(
                this.templatePath('resultats-recherche.php'),
                this.destinationPath('resultats-recherche.php'), {
                    hasBannerImage: this.props.bannerImage
                }
            );

            // Sitemap
            this.fs.copyTpl(
                this.templatePath('sitemap.php'),
                this.destinationPath('sitemap.php'), {
                    hasBannerImage: this.props.bannerImage
                }
            );

            // Page directory
            this.fs.copyTpl(
                this.templatePath('liste-pages.html'),
                this.destinationPath('liste-pages.html'),
                this.tplIncludePages
            );

        },

        css: function() {
            // Content of sass folder
            this.fs.copy(
                this.templatePath('sass/**/*'),
                this.destinationPath('sass')
            );

            // Main css file
            this.fs.copyTpl(
                this.templatePath('sass/main.scss'),
                this.destinationPath('sass/main.scss'),
                this.tplAppAllData
            );

            // Css vendors
            if (this.includeComponents['accordion'] || this.includeComponents['tabs'] || this.props.includeDatepicker) {
                this.fs.copy(
                    this.templatePath('css/vendor/jquery-ui.min.css'),
                    this.destinationPath('css/vendor/jquery-ui.min.css')
                );
            };

            if (this.includeComponents['gallery']) {
                this.fs.copy(
                    this.templatePath('css/vendor/jquery.fancybox.css'),
                    this.destinationPath('css/vendor/jquery.fancybox.css')
                );
            };

            if (this.includeComponents['slider']) {
                this.fs.copy(
                    this.templatePath('css/vendor/swiper.css'),
                    this.destinationPath('css/vendor/swiper.css')
                );
            };

        },

        javascript: function() {
            // Main
            this.fs.copyTpl(
                this.templatePath('js/main.js'),
                this.destinationPath('js/main.js'),
                this.tplAppAllData
            );

            // Vendors
            if (this.includeComponents['slider']) {
                this.fs.copy(
                    this.templatePath('js/vendor/swiper.jquery.min.js'),
                    this.destinationPath('js/vendor/swiper.jquery.min.js')
                );
            };

            if (this.includeComponents['progressBar']) {
                this.fs.copy(
                    this.templatePath('js/vendor/nanobar.min.js'),
                    this.destinationPath('js/vendor/nanobar.min.js')
                );
            };

            if (this.includeComponents['accordion'] || this.includeComponents['tabs'] || this.props.includeDatepicker) {
                this.fs.copy(
                    this.templatePath('js/vendor/jquery-ui.min.js'),
                    this.destinationPath('js/vendor/jquery-ui.min.js')
                );
            };

            if (this.includeComponents['datepicker'] && this.props.fr) {
                this.fs.copy(
                    this.templatePath('js/vendor/datepicker-fr.js'),
                    this.destinationPath('js/vendor/datepicker-fr.js')
                );
            };

            if (this.includeComponents['gallery']) {
                this.fs.copy(
                    this.templatePath('js/vendor/jquery.fancybox.pack.js'),
                    this.destinationPath('js/vendor/jquery.fancybox.pack.js')
                );
            };

            this.fs.copy(
                this.templatePath('js/vendor/jquery-2.2.2.min.js'),
                this.destinationPath('js/vendor/jquery-2.2.2.min.js')
            );

            // Vertical menu
            if (this.props.layoutmenu) {
                this.fs.copy(
                    this.templatePath('js/vendor/tether.min.js'),
                    this.destinationPath('js/vendor/tether.min.js')
                );
                this.fs.copy(
                    this.templatePath('js/vendor/bootstrap.min.js'),
                    this.destinationPath('js/vendor/bootstrap.min.js')
                );
                this.fs.copy(
                    this.templatePath('js/left-vertical-menu.js'),
                    this.destinationPath('js/left-vertical-menu.js')
                );
            };

        },

        // Files that do not have conditionnal
        other: function() {
            // images
            this.fs.copy(
                this.templatePath('images/**/*'),
                this.destinationPath('images')
            );
            // Fonts
            this.fs.copy(
                this.templatePath('fonts/**/*'),
                this.destinationPath('fonts')
            );

            // Root static files
            this.fs.copy(
                this.templatePath('static_root/**/*'),
                this.destinationPath('/')
            );

            // Dot files
            this.fs.copy(
                this.templatePath('editorconfig'),
                this.destinationPath('.editorconfig')
            );

            this.fs.copy(
                this.templatePath('gitattributes'),
                this.destinationPath('.gitatributes')
            );

            this.fs.copy(
                this.templatePath('gitignore'),
                this.destinationPath('.gitignore')
            );

            this.fs.copyTpl(
                this.templatePath('htaccess'),
                this.destinationPath('.htaccess'),
                this.tplAppInfo
            );

            // Human.txt
            this.fs.copyTpl(
                this.templatePath('humans.txt'),
                this.destinationPath('humans.txt'),
                Object.assign(
                    this.tplAppInfo,
                    this.tplIncludeComponents
                )
            );


        }
    },
    install: function() {
        var afterInstall =
        '\n#######################################################\n' +
          '\nAfter running ' +
          chalk.yellow.bold('gulp sass:watch') +
          ', go to' +
          chalk.blue.bold('./sass/helpers/_variables.scss') +
          '\nand change the variables for setting up the UI.' +
          '\nYou can check your app config in ' +
           chalk.blue.bold('config.php') +
          '.' +
          '\nBye !\n' +
          '\n#######################################################\n';


        this.installDependencies({
            callback: function () {
              this.spawnCommand('gulp', ['sass']);
              this.log(afterInstall);
            }.bind(this) // bind the callback to the parent scope
        });
    }

});

/* UTILS
----------------------------------------------------------------------------------------*/

// TODO : remove hasFeature
/*
 * hasFeature
 *
 *  Test if a feature is included in a feature group
 *
 *  @param   featureGroup
 *  @param   feat
 *  @return  true/false
 */
function hasFeature(featureGroup, feat) {
    return featureGroup && featureGroup.indexOf(feat) !== -1;
};

/*
 * includeFeatureGroup
 *
 *  Fill object with chosed features
 *
 *  @param   sourceObject
 *  @param   targetObject
 *  @return  object
 */
function includeFeatureGroup(sourceObject) {
    var targetObject = {};
    for (var index in sourceObject) {
        if (sourceObject.hasOwnProperty(index)) {
            var attr = sourceObject[index];
            targetObject[attr] = true;
        }
    }
    return targetObject;
}

/*
 * slugify
 *
 *  Format string to slug for url/ids
 *
 *  @param   text
 *  @return  formated string
 */
function slugify(text) {
    return text.toString().toLowerCase()
        .replace(/\s+/g, '-') // Replace spaces with -
        .replace(/[^\w\-]+/g, '') // Remove all non-word chars
        .replace(/\-\-+/g, '-') // Replace multiple - with single -
        .replace(/^-+/, '') // Trim - from start of text
        .replace(/-+$/, ''); // Trim - from end of text
}
