# Theme Smoosh
A Drupal 7 Theme Scaffold and SASS Workflow

## Description
This project aims to simplify Drupal 7 Custom Theme construction by providing a Gulp-Sass workflow and initial page.tpl.php setup.

## Technologies

Drupal, PHP, JavaScript, Gulp, and SASS.

## Usage

To use the code, you can clone the repository at [https://github.com/jryanconklin/theme-smoosh](https://github.com/jryanconklin/theme-smoosh).

For best results, please:

- Clone the Repository
- Remove the Git Folder with `rm -rf .git`
- Update 'theme-smoosh' Directory to 'your-template-name'
- Update 'theme_smoosh.info' to 'yourtemplatename.info'
- Update Content Name and Description of 'yourtemplatename.info'
- Edit 'package.json' file to match your new project name.
- Run `npm install` to pull in required devDependencies.

That's it! You should have a nice clean sassy workflow to create your new custom theme. Write your SASS in the `scss/style.scss` file. Run `gulp` to compile your SASS to CSS for production.

## Current Bugs

* None at this time. Still a WIP.

## Authors
J. Ryan Conklin

##License
This work can be used under the MIT License.
Copyright (c) 2016 J. Ryan Conklin
