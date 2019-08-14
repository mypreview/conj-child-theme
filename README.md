# CONJ Child Theme

The CONJ Child Theme is a starter blank child theme for MyPreview’s [CONJ](https://www.conj.ws) WordPress theme.

## What is a child theme?

A child theme is a theme that inherits the same functionality and styling of another theme, called the parent theme. By creating and working on a child theme, you can add, modify or disable parts of your site without changing the original files of the parent theme.

You don’t have to worry about updates to the parent theme since there is no need to exclude your modified files from the updating process or to re-add your changes to fit the new version. After having the child theme installed on your website, you end up significantly speeding up your development time.

## Installation

* Download the child theme from it's GitHub Repository Release window.
* Log into your WordPress website and navigate to **Appearance** » **Themes** » **Add New**.
* Click **Upload Theme** and **Choose File**, then select the theme's `.zip` file. Click **Install Now**.
* Click **Activate** to start using your child theme right away.

## Usage

Custom PHP that you write should be added to the child themes `functions.php` file whilst any custom CSS should be added to the child themes `style.min.css` file.

The blank child theme itself has no functionality and if you would like to learn more about child themes for WordPress see this documentation below.

[WordPress Child Themes](https://developer.wordpress.org/themes/advanced-topics/child-themes/)

## Overriding template files

If you want to edit the code in the theme’s template files like `header.php`, `index.php`, etc, you can just copy the file from the parent theme and put it into your child theme folder then edit it from there.

## Overriding functions and methods

If you want to edit the functions of the parent theme, for example, the `conj_posted_on()` method, you can do that by copying only the function from the parent theme and put it into the `functions.php` file of your child theme.

## Migrating existing options

WordPress considers a child theme to be an entirely separate theme from the parent concerning theme options. In case you have configured options for the parent theme under the Customizer settings before installing the child theme, these options will not carry over to the child.

You can either re-configure the existing options for the child theme, or try to migrate the theme options using a plugin such as [Theme Customizations Cloner](https://github.com/ArrowRootMedia/Theme-Customizations-Cloner).

## Contact us for help

If you want to ask questions about how CONJ works before buying, need help using the premium version you’ve purchased or just want to tell us how much you love creating with CONJ, that’s great! Contacting our support is easy, and you have a few options available to do this.

* [Documentation](https://www.conj.support)
* [Ask a pre-sale question](https://www.conj.ws/contact-us)
* [Submit a support request](https://www.conj.support/start-discussion)