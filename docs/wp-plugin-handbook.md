Table of Contents:

- [Plugin Handbook](#plugins)
- [Introduction to Plugin Development](#plugins/intro)
- [What is a Plugin?](#plugins/intro/what-is-a-plugin)
- [Plugin Basics](#plugins/plugin-basics)
- [Header Requirements](#plugins/plugin-basics/header-requirements)
- [Activation / Deactivation Hooks](#plugins/plugin-basics/activation-deactivation-hooks)
- [Best Practices](#plugins/plugin-basics/best-practices)
- [Determining Plugin and Content Directories](#plugins/plugin-basics/determining-plugin-and-content-directories)
- [Including a Software License](#plugins/plugin-basics/including-a-software-license)
- [Uninstall Methods](#plugins/plugin-basics/uninstall-methods)
- [Plugin Security](#plugins/security)
- [Checking User Capabilities](#plugins/security/checking-user-capabilities)
- [Data Validation](#plugins/security/data-validation)
- [Securing (sanitizing) Input](#plugins/security/securing-input)
- [Nonces](#plugins/security/nonces)
- [Securing (escaping) Output](#plugins/security/securing-output)
- [Hooks](#plugins/hooks)
- [Actions](#plugins/hooks/actions)
- [Filters](#plugins/hooks/filters)
- [Custom Hooks](#plugins/hooks/custom-hooks)
- [Advanced Topics](#plugins/hooks/advanced-topics)
- [Privacy](#plugins/privacy)
- [Suggesting text for the site privacy policy](#plugins/privacy/suggesting-text-for-the-site-privacy-policy)
- [Adding the Personal Data Exporter to Your Plugin](#plugins/privacy/adding-the-personal-data-exporter-to-your-plugin)
- [Adding the Personal Data Eraser to Your Plugin](#plugins/privacy/adding-the-personal-data-eraser-to-your-plugin)
- [Privacy Related Options, Hooks and Capabilities](#plugins/privacy/privacy-related-options-hooks-and-capabilities)
- [Administration Menus](#plugins/administration-menus)
- [Top-Level Menus](#plugins/administration-menus/top-level-menus)
- [Sub-Menus](#plugins/administration-menus/sub-menus)
- [Shortcodes](#plugins/shortcodes)
- [Basic Shortcodes](#plugins/shortcodes/basic-shortcodes)
- [Enclosing Shortcodes](#plugins/shortcodes/enclosing-shortcodes)
- [Shortcodes with Parameters](#plugins/shortcodes/shortcodes-with-parameters)
- [TinyMCE Enhanced Shortcodes](#plugins/shortcodes/tinymce-enhanced-shortcodes)
- [Settings](#plugins/settings)
- [Using Settings API](#plugins/settings/using-settings-api)
- [Options API](#plugins/settings/options-api)
- [Settings API](#plugins/settings/settings-api)
- [Custom Settings Page](#plugins/settings/custom-settings-page)
- [Metadata](#plugins/metadata)
- [Managing Post Metadata](#plugins/metadata/managing-post-metadata)
- [Custom Meta Boxes](#plugins/metadata/custom-meta-boxes)
- [Rendering Post Metadata](#plugins/metadata/rendering-post-metadata)
- [Custom Post Types](#plugins/post-types)
- [Registering Custom Post Types](#plugins/post-types/registering-custom-post-types)
- [Working with Custom Post Types](#plugins/post-types/working-with-custom-post-types)
- [Taxonomies](#plugins/taxonomies)
- [Working with Custom Taxonomies](#plugins/taxonomies/working-with-custom-taxonomies)
- [Term Splitting (WordPress 4.2)](#plugins/taxonomies/split-terms-wp-4-2)
- [Users](#plugins/users)
- [Working with Users](#plugins/users/working-with-users)
- [Working with User Metadata](#plugins/users/working-with-user-metadata)
- [Roles and Capabilities](#plugins/users/roles-and-capabilities)
- [HTTP API](#plugins/http-api)
- [REST API](#plugins/rest-api)
- [REST API Overview](#plugins/rest-api/rest-api-overview)
- [Routes &amp; Endpoints](#plugins/rest-api/routes-endpoints)
- [Requests](#plugins/rest-api/requests)
- [Responses](#plugins/rest-api/responses-2)
- [Schema](#plugins/rest-api/schema)
- [Controller Classes](#plugins/rest-api/controller-classes)
- [JavaScript](#plugins/javascript)
- [Heartbeat API](#plugins/javascript/heartbeat-api)
- [jQuery](#plugins/javascript/jquery)
- [AJAX](#plugins/javascript/ajax)
- [Server Side PHP and Enqueuing](#plugins/javascript/enqueuing)
- [Summary](#plugins/javascript/summary)
- [Cron](#plugins/cron)
- [Understanding WP-Cron Scheduling](#plugins/cron/understanding-wp-cron-scheduling)
- [Scheduling WP Cron Events](#plugins/cron/scheduling-wp-cron-events)
- [Testing of WP-Cron](#plugins/cron/simple-testing)
- [Hooking WP-Cron Into the System Task Scheduler](#plugins/cron/hooking-wp-cron-into-the-system-task-scheduler)
- [Internationalization](#plugins/internationalization)
- [How to Internationalize Your Plugin](#plugins/internationalization/how-to-internationalize-your-plugin)
- [Localization](#plugins/internationalization/localization)
- [Internationalization Security](#plugins/internationalization/security)
- [The WordPress.org Plugin Directory](#plugins/wordpress-org)
- [Planning, Submitting, and Maintaining Plugins](#plugins/wordpress-org/planning-submitting-and-maintaining-plugins)
- [Block Specific Plugin Guidelines](#plugins/wordpress-org/block-specific-plugin-guidelines)
- [Add Your Plugin to the Block Directory](#plugins/wordpress-org/add-your-plugin-to-the-block-directory)
- [Release Confirmation Emails](#plugins/wordpress-org/release-confirmation-emails)
- [Transferring Your Plugin to a New Owner](#plugins/wordpress-org/transferring-your-plugin-to-a-new-owner)
- [Preventing WordPress from Updating Your External Plugin](#plugins/wordpress-org/preventing-wordpress-from-updating-your-external-plugin)
- [Detailed Plugin Guidelines](#plugins/wordpress-org/detailed-plugin-guidelines)
- [Using Subversion](#plugins/wordpress-org/how-to-use-subversion)
- [Previews and Blueprints](#plugins/wordpress-org/previews-and-blueprints)
- [Plugin Developer FAQ](#plugins/wordpress-org/plugin-developer-faq)
- [Common issues](#plugins/wordpress-org/common-issues)
- [How Your Plugin Assets Work](#plugins/wordpress-org/plugin-assets)
- [Plugin Readmes](#plugins/wordpress-org/how-your-readme-txt-works)
- [Take Over an Existing Plugin](#plugins/wordpress-org/take-over-an-existing-plugin)
- [Managing Your Plugin&#8217;s Security](#plugins/wordpress-org/plugin-security)
- [Reporting Plugin Security Issues](#plugins/wordpress-org/plugin-security/reporting-plugin-security-issues)
- [Special User Roles and Capabilities](#plugins/wordpress-org/special-user-roles-capabilities)
- [Alerts and Warnings](#plugins/wordpress-org/alerts-and-warnings)
- [Compliance Disclaimers](#plugins/wordpress-org/compliance-disclaimers)
- [Using the Forums](#plugins/wordpress-org/using-the-forums)
- [Developer Tools](#plugins/developer-tools)
- [Debug Bar and Add-Ons](#plugins/developer-tools/debug-bar-and-add-ons)
- [Helper Plugins](#plugins/developer-tools/helper-plugins)
- [Creating Tables with Plugins](#plugins/creating-tables-with-plugins)
- [Credits](#plugins/credits)

# Plugin Handbook <a name="plugins" />

Source: https://developer.wordpress.org/plugins/

*Welcome to the WordPress Plugin Developer Handbook; are you ready to jump right in to the world of WordPress plugins?*

The Plugin Developer Handbook is a resource for all things WordPress plugins. Whether you’re new to WordPress plugin development, or you’re an experienced plugin developer, you should be able to find the answer to many of your plugin-related questions right here.

- If you’re new to plugin development, start by reading the [introduction](#plugin/intro) and then move on to [the basics](#plugins/plugin-basics).
- The info in [plugin security](#plugin/security) will introduce best practices for security related stuff.
- [Hooks](#plugin/hooks) are what make your plugin interact with WordPress, and how you can let other developers interact with your plugin.
- [Privacy](#plugins/privacy) will help you understand about handling sensitive data.
- To find out more about WordPress’ built-in functionality that you can use in your plugin, check out [Administration Menus](#plugin/administration-menus), [Shortcodes](#plugin/shortcodes), [Settings](#plugin/settings), [Metadata](#plugin/metadata), [Custom Post Types](#plugins/post-types), [Taxonomies](#plugins/taxonomies), and [Users](#plugin/users).
- Learn about getting data using the [HTTP API](#plugin/http-api).
- If you’re using [JavaScript, jQuery or Ajax](#plugin/javascript) in your plugin, you’ll find the information you need in that section.
- To learn about time-based WordPress tasks, check out the [Cron](#plugin/cron) chapter.
- [Internationalization](#plugin/internationalization) is how you get your plugin ready for use in locales other than your own.
- When all that is done, you can prepare your plugin for inclusion in the [Plugin Directory](#plugin/wordpress-org)
- Finally: some [developer tools](#plugin/developer-tools) you might find useful.

The WordPress Plugin Developer Handbook is created by the WordPress community, for the WordPress community. We are always looking for more contributors; if you’re interested, stop by the [docs team blog](https://make.wordpress.org/docs) to find out more about getting involved.

---

# Introduction to Plugin Development <a name="plugins/intro" />

Source: https://developer.wordpress.org/plugins/intro/

Welcome to the Plugin Developer Handbook. Whether you’re writing your first plugin or your fiftieth, we hope this resource helps you write the best plugin possible.

The Plugin Developer Handbook covers a variety of topics — everything from what should be in the plugin header, to security best practices, to tools you can use to build your plugin. It’s also a work in progress — if you find something missing or incomplete, please notify the documentation team in slack and we’ll make it better together.

## Why We Make Plugins

If there’s one cardinal rule in WordPress development, it’s this: **Don’t touch WordPress core**. This means that you don’t edit core WordPress files to add functionality to your site. This is because WordPress overwrites core files with each update. Any functionality you want to add or modify should be done using plugins.

WordPress plugins can be as simple or as complicated as you need them to be, depending on what you want to do. The simplest plugin is a single PHP file. The [Hello Dolly](https://wordpress.org/plugins/hello-dolly/ "Hello Dolly Plugin") plugin is an example of such a plugin. The plugin PHP file just needs a [Plugin Header](#plugins/the-basics/header-requirements), a couple of PHP functions, and some [hooks](#plugins/hooks) to attach your functions to.

Plugins allow you to greatly extend the functionality of WordPress without touching WordPress core itself.

---

# What is a Plugin? <a name="plugins/intro/what-is-a-plugin" />

Source: https://developer.wordpress.org/plugins/intro/what-is-a-plugin/

Plugins are packages of code that extend the core functionality of WordPress. WordPress plugins are made up of PHP code and can include other assets such as images, CSS, and JavaScript.

By making your own plugin you are *extending* WordPress, i.e. building additional functionality on top of what WordPress already offers. For example, you could write a plugin that displays links to the ten most recent posts on your site.

Or, using WordPress’ custom post types, you could write a plugin that creates a full-featured support ticketing system with email notifications, custom ticket statuses, and a client-facing portal. The possibilities are *endles*s*!*

Most WordPress plugins are composed of many files, but a plugin really only *needs* one main file with a specifically formatted [DocBlock](http://en.wikipedia.org/wiki/PHPDoc#DocBlock) in the header.

[Hello Dolly](https://wordpress.org/plugins/hello-dolly/ "Hello Dolly"), one of the first plugins, is only [100 lines](https://plugins.trac.wordpress.org/browser/hello-dolly/trunk/hello.php) long. Hello Dolly shows lyrics from [the famous song](http://en.wikipedia.org/wiki/Hello,_Dolly!_(song)) in the WordPress admin. Some CSS is used in the PHP file to control how the lyric is styled.

As a WordPress.org plugin author, you have an amazing opportunity to create a plugin that will be installed, tinkered with, and loved by millions of WordPress users. All **you** need to do is turn your great idea into code. The Plugin Handbook is here to help you with that.

---

# Plugin Basics <a name="plugins/plugin-basics" />

Source: https://developer.wordpress.org/plugins/plugin-basics/

## Getting Started

At its simplest, a WordPress plugin is a PHP file with a WordPress plugin header comment. It’s highly recommended that you create a directory to hold your plugin so that all of your plugin’s files are neatly organized in one place.

To get started creating a new plugin, follow the steps below.

1. Navigate to the WordPress installation’s **wp-content** directory.
2. Open the **plugins** directory.
3. Create a new directory and name it after the plugin (e.g. `plugin-name`).
4. Open the new plugin’s directory.
5. Create a new PHP file (it’s also good to name this file after your plugin, e.g. `plugin-name.php`).

Here’s what the process looks like on the Unix command line:

```bash
wordpress $ cd wp-content
wp-content $ cd plugins
plugins $ mkdir plugin-name
plugins $ cd plugin-name
plugin-name $ vi plugin-name.php
```

In the example above, `vi` is the name of the text editor. Use whichever editor that is comfortable for you.

Now that you’re editing your new plugin’s PHP file, you’ll need to add a plugin header comment. This is a specially formatted PHP block comment that contains metadata about the plugin, such as its name, author, version, license, etc. The plugin header comment must comply with the [header requirements](#plugins/the-basics/header-requirements), and at the very least, contain the name of the plugin.

Only one file in the plugin’s folder should have the header comment — if the plugin has multiple PHP files, only one of those files should have the header comment.

After you save the file, you should be able to see your plugin listed in your WordPress site. Log in to your WordPress site, and click **Plugins** on the left navigation pane of your WordPress Admin. This page displays a listing of all the plugins your WordPress site has. Your new plugin should now be in that list!

## Hooks: Actions and Filters

WordPress hooks allow you to tap into WordPress at specific points to change how WordPress behaves without editing any core files.

There are two types of hooks within WordPress: *actions* and *filters*. Actions allow you to add or change WordPress functionality, while filters allow you to alter content as it is loaded and displayed to the website user.

Hooks are not just for plugin developers; hooks are used extensively to provide default functionality by WordPress core itself. Other hooks are unused place holders that are simply available for you to tap into when you need to alter how WordPress works. This is what makes WordPress so flexible.

### Basic Hooks

The 3 basic hooks you’ll need when creating a plugin are the [register\_activation\_hook()](#reference/functions/register_activation_hook) , the [register\_deactivation\_hook()](#reference/functions/register_deactivation_hook) , and the [register\_uninstall\_hook()](#reference/functions/register_uninstall_hook) .

The [activation hook](#plugins/the-basics/activation-deactivation-hooks) is run when you *activate* your plugin. You would use this to provide a function to set up your plugin — for example, creating some default settings in the `options` table.

The [deactivation hook](#plugins/the-basics/activation-deactivation-hooks) is run when you *deactivate* your plugin. You would use this to provide a function that clears any temporary data stored by your plugin.

These [uninstall methods](#plugins/the-basics/uninstall-methods) are used to clean up after your plugin is *deleted* using the WordPress Admin. You would use this to delete all data created by your plugin, such as any options that were added to the `options` table.

### Adding Hooks

You can add your own, custom hooks with [do\_action()](#reference/functions/do_action) , which will enable developers to extend your plugin by passing functions through your hooks.

### Removing Hooks

You can also use invoke [remove\_action()](#reference/functions/remove_action) to remove a function that was defined earlier. For example, if your plugin is an add-on to another plugin, you can use [remove\_action()](#reference/functions/remove_action) with the same function callback that was added by the previous plugin with [add\_action()](#reference/functions/add_action) . The priority of actions is important in these situations, as [remove\_action()](#reference/functions/remove_action) would need to run after the initial [add\_action()](#reference/functions/add_action) .

You should be careful when removing an action from a hook, as well as when altering priorities, because it can be difficult to see how these changes will affect other interactions with the same hook. We highly recommend testing frequently.

You can learn more about creating hooks and interacting with them in the [Hooks](#plugin/hooks) section of this handbook.

## WordPress APIs

Did you know that WordPress provides a number of [Application Programming Interfaces (APIs)](https://make.wordpress.org/core/handbook/core-apis/)? These APIs can greatly simplify the code you need to write in your plugins. You don’t want to reinvent the wheel, especially when so many people have done a lot of the work and testing for you.

The most common one is the [Options API](https://codex.wordpress.org/Options_API), which makes it easy to store data in the database for your plugin. If you’re thinking of using [cURL](https://en.wikipedia.org/wiki/CURL) in your plugin, the [HTTP API](https://codex.wordpress.org/HTTP_API) might be of interest to you.

Since we’re talking about plugins, you’ll want to study the [Plugin API](https://codex.wordpress.org/Plugin_API). It has a variety of functions that will assist you in developing plugins.

## How WordPress Loads Plugins

When WordPress loads the list of installed plugins on the Plugins page of the WordPress Admin, it searches through the `plugins` folder (and its sub-folders) to find PHP files with WordPress plugin header comments. If your entire plugin consists of just a single PHP file, like [Hello Dolly](https://wordpress.org/plugins/hello-dolly/ "Hello Dolly"), the file could be located directly inside the root of the `plugins` folder. But more commonly, plugin files will reside in their own folder, named after the plugin.

## Sharing your Plugin

Sometimes a plugin you create is just for your site. But many people like to share their plugins with the rest of the WordPress community. Before sharing your plugin, one thing you need to do is [choose a license](https://opensource.org/licenses/category). This lets the user of your plugin know how they are allowed to use your code. To maintain compatibility with WordPress core, it is recommended that you pick a license that works with GNU General Public License (GPLv2+).

---

# Header Requirements <a name="plugins/plugin-basics/header-requirements" />

Source: https://developer.wordpress.org/plugins/plugin-basics/header-requirements/

As described in [Getting Started](#plugins/plugin-basics), the main PHP file should include header comment what tells WordPress that a file is a plugin and provides information about the plugin.

## Minimum Fields

At a minimum, a header comment must contain the Plugin Name:

```php
/*
 * Plugin Name: YOUR PLUGIN NAME
 */
```

## Header Fields

Available header fields:

- **Plugin Name:** (*required*) The name of your plugin, which will be displayed in the Plugins list in the WordPress Admin.
- **Plugin URI:** The home page of the plugin, which should be a unique URL, preferably on your own website. This *must be unique* to your plugin. You cannot use a WordPress.org URL here.
- **Description:** A short description of the plugin, as displayed in the Plugins section in the WordPress Admin. Keep this description to fewer than 140 characters.
- **Version:** The current version number of the plugin, such as 1.0 or 1.0.3.
- **Requires at least:** The lowest WordPress version that the plugin will work on.
- **Requires PHP:** The minimum required PHP version.
- **Author:** The name of the plugin author. Multiple authors may be listed using commas.
- **Author URI:** The author’s website or profile on another website, such as WordPress.org.
- **License:** The short name (slug) of the plugin’s license (e.g. GPLv2). More information about licensing can be found in the [WordPress.org guidelines](#plugins/wordpress-org/detailed-plugin-guidelines).
- **License URI:** A link to the full text of the license (e.g. <https://www.gnu.org/licenses/gpl-2.0.html>).
- **Text Domain:** The [gettext](https://www.gnu.org/software/gettext/) text domain of the plugin. More information can be found in the [Text Domain](#plugins/internationalization/how-to-internationalize-your-plugin) section of the [How to Internationalize your Plugin](#plugins/internationalization/how-to-internationalize-your-plugin) page.
- **Domain Path:** The domain path lets WordPress know where to find the translations. More information can be found in the [Domain Path](#plugins/internationalization/how-to-internationalize-your-plugin#domain-path) section of the [How to Internationalize your Plugin](#plugins/internationalization/how-to-internationalize-your-plugin) page.
- **Network:** Whether the plugin can only be activated network-wide. Can only be set to *true*, and should be left out when not needed.
- **Update URI:** Allows third-party plugins to avoid accidentally being overwritten with an update of a plugin of a similar name from the WordPress.org Plugin Directory. For more info read related [dev note](https://make.wordpress.org/core/2021/06/29/introducing-update-uri-plugin-header-in-wordpress-5-8/).
- **Requires Plugins**: A comma-separated list of WordPress.org-formatted slugs for its dependencies, such as `my-plugin` (`my-plugin/my-plugin.php` is not supported). It does not support commas in plugin slugs. For more info read the related [dev note](https://make.wordpress.org/core/2024/03/05/introducing-plugin-dependencies-in-wordpress-6-5/).

A valid PHP file with a header comment might look like this:

```php
/*
 * Plugin Name:       My Basics Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 * Requires Plugins:  my-plugin, yet-another-plugin
 */
```

Here’s another example which allows file-level PHPDoc DocBlock as well as WordPress plugin file headers:

```php
/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            Your Name
 * @copyright         2019 Your Name or Company Name
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Plugin Name
 * Plugin URI:        https://example.com/plugin-name
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Your Name
 * Author URI:        https://example.com
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 * Requires Plugins:  my-plugin, yet-another-plugin
 */
```

## Notes

When assigning a version number to your project, keep in mind that WordPress uses the PHP version_compare() function to compare plugin version numbers. Therefore, before you release a new version of your plugin, you should make sure that this PHP function considers the new version to be “greater” than the old one. For example, 1.02 is actually greater than 1.1.

---

# Activation / Deactivation Hooks <a name="plugins/plugin-basics/activation-deactivation-hooks" />

Source: https://developer.wordpress.org/plugins/plugin-basics/activation-deactivation-hooks/

Activation and deactivation hooks provide ways to perform actions when plugins are activated or deactivated.

- On *activation*, plugins can run a routine to add rewrite rules, add custom database tables, or set default option values.
- On *deactivation*, plugins can run a routine to remove temporary data such as cache and temp files and directories.

  
The deactivation hook is sometimes confused with the [uninstall hook](#plugins/plugin-basics/uninstall-methods). The uninstall hook is best suited to **delete all data permanently** such as deleting plugin options and custom tables, etc.  

## Activation

To set up an activation hook, use the [register\_activation\_hook()](#reference/functions/register_activation_hook) function:

```php
register_activation_hook(
	__FILE__,
	'pluginprefix_function_to_run'
);
```

## Deactivation

To set up a deactivation hook, use the [register\_deactivation\_hook()](#reference/functions/register_deactivation_hook) function:

```php
register_deactivation_hook(
	__FILE__,
	'pluginprefix_function_to_run'
);
```

The first parameter in each of these functions refers to your main plugin file, which is the file in which you have placed the [plugin header comment](#plugins/the-basics/header-requirements). Usually these two functions will be triggered from within the main plugin file; however, if the functions are placed in any other file, you must update the first parameter to correctly point to the main plugin file.

## Example

One of the most common uses for an activation hook is to refresh WordPress permalinks when a plugin registers a custom post type. This gets rid of the nasty 404 errors.

Let’s look at an example of how to do this:

```php
/**
 * Register the "book" custom post type
 */
function pluginprefix_setup_post_type() {
	register_post_type( 'book', ['public' => true ] ); 
} 
add_action( 'init', 'pluginprefix_setup_post_type' );

/**
 * Activate the plugin.
 */
function pluginprefix_activate() { 
	// Trigger our function that registers the custom post type plugin.
	pluginprefix_setup_post_type(); 
	// Clear the permalinks after the post type has been registered.
	flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );
```

If you are unfamiliar with registering custom post types, don’t worry – this will be covered later. This example is used simply because it’s very common.

Using the example from above, the following is how to reverse this process and deactivate a plugin:

```php
/**
 * Deactivation hook.
 */
function pluginprefix_deactivate() {
	// Unregister the post type, so the rules are no longer in memory.
	unregister_post_type( 'book' );
	// Clear the permalinks to remove our post type's rules from the database.
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'pluginprefix_deactivate' );
```

For further information regarding activation and deactivation hooks, here are some excellent resources:

- [register\_activation\_hook()](#reference/functions/register_activation_hook) in the WordPress function reference.
- [register\_deactivation\_hook()](#reference/functions/register_deactivation_hook) in the WordPress function reference.

---

# Best Practices <a name="plugins/plugin-basics/best-practices" />

Source: https://developer.wordpress.org/plugins/plugin-basics/best-practices/

Here are some best practices to help organize your code so it works well alongside WordPress core and other WordPress plugins.

## Avoid Naming Collisions

A naming collision happens when your plugin is using the same name for a variable, function or a class as another plugin.

Luckily, you can avoid naming collisions by using the methods below.

### Procedural Coding Method

By default, all variables, functions and classes are defined in the **global namespace**, which means that it is possible for your plugin to override variables, functions and classes set by another plugin and vice-versa. Variables that are defined *inside* of functions or classes are not affected by this.

#### Prefix Everything

All globally accessible code should be prefixed with a *unique* identifier. Prefixes prevent conflicts with other plugins and prevents them from overwriting your variables and accidentally calling your functions and classes.

In order to prevent conflicts with other plugins, your prefix should be at least 4 letters long, though we recommend 5. You should avoid using a common English word, and instead choose something unique to your plugin. We host tens of thousands of plugins on WordPress.org alone. There are hundreds of thousands more outside our servers. You’re *going* to run into conflicts.

A good way to do this is with a prefix. For example, if your plugin is called “Easy Custom Post Types” then you could use names like these:

- `function ecpt_save_post()`
- `define( ‘ECPT_LICENSE’, true );`
- `class ECPT_Admin{}`
- `namespace EasyCustomPostTypes;`
- `update_option( 'ecpt_settings', $settings );`

Because you are making code as a part of the **WordPress** project, you must avoid the use of prefixes that have a high probability of conflicting with the core WordPress. This includes but is not limited to: `__` (double underscores), `wp_` , `WordPress`, or `_` (single underscore)

If you are making code for a ‘sub’ plugin (such as a WooCommece extension), you would similarly need to avoid using any of their normal/common prefixes (i.e. Woo, WooCommerce).

You can use them *inside* your classes or namespace, but not as stand-alone function/namespace/class.

If you’re using `_n()` or `__()` for translation, that’s fine. We’re **only** talking about functions you’ve created for your plugin, not the core functions from WordPress. In fact, those core features are *why* you need to not use those prefixes in your own plugin! You wouldn’t want to break WordPress for your users.

Remember: Good prefix names are unique and distinct to your plugin. This will help you and the next person in debugging, as well as prevent conflicts.

Code that **must** be prefixed includes:

- Functions (unless namespaced)
- Classes, interfaces, and traits (unless namespaced)
- Namespaces
- Global variables
- Options and transients

#### Check for Existing Implementations

PHP provides a number of functions to verify existence of variables, functions, classes and constants. All of these will return true if the entity exists.

- **Variables**: [isset()](http://php.net/manual/en/function.isset.php) (includes arrays, objects, etc.)
- **Functions**: [function\_exists()](http://php.net/manual/en/function.function-exists.php)
- **Classes**: [class\_exists()](http://php.net/manual/en/function.class-exists.php)
- **Constants**: [defined()](http://php.net/manual/en/function.defined.php)

Keep in mind that using` (!function_exists(‘NAME ‘)) {` around all your functions and classes sounds like a great idea until you realize the fatal flaw. If something else has a function with the same name and their code loads first, your plugin will break. Using if-exists to replace/override a function or class should be reserved for *shared* libraries only.

#### Example

```php
// Create a function called "wporg_init" if it doesn't already exist
if ( ! function_exists( 'wporg_init' ) ) {
    function wporg_init() {
        register_setting( 'wporg_settings', 'wporg_option_foo' );
    }
}

// Create a function called "wporg_get_foo" if it doesn't already exist
if ( ! function_exists( 'wporg_get_foo' ) ) {
    function wporg_get_foo() {
        return get_option( 'wporg_option_foo' );
    }
}
```

### Object Oriented Programming Method

An easier way to tackle the naming collision problem is to use a [class](http://php.net/manual/en/language.oop5.php) for the code of your plugin.

You will still need to take care of checking whether the name of the class you want is already taken but the rest will be taken care of by PHP.

#### Example

```php
if ( ! class_exists( 'WPOrg_Plugin' ) ) {
    class WPOrg_Plugin {
        public static function init() {
            register_setting( 'wporg_settings', 'wporg_option_foo' );
        }

        public static function get_foo() {
            return get_option( 'wporg_option_foo' );
        }
    }

    WPOrg_Plugin::init();
    WPOrg_Plugin::get_foo();
}
```

## File Organization

The root level of your plugin directory should contain your `plugin-name.php` file and, optionally, your [uninstall.php](#plugin/the-basics/uninstall-methods) file. All other files should be organized into sub folders whenever possible.

### Folder Structure

A clear folder structure helps you and others working on your plugin keep similar files together.

Here’s a sample folder structure for reference:

```
/plugin-name
     plugin-name.php
     uninstall.php
     /languages
     /includes
     /admin
          /js
          /css
          /images
     /public
          /js
          /css
          /images
```

## Plugin Architecture

The architecture, or code organization, you choose for your plugin will likely depend on the size of your plugin.

For small, single-purpose plugins that have limited interaction with WordPress core, themes or other plugins, there’s little benefit in engineering complex classes; unless you know the plugin is going to expand greatly later on.

For large plugins with lots of code, start off with classes in mind. Separate style and scripts files, and even build-related files. This will help code organization and long-term maintenance of the plugin.

### Conditional Loading

It’s helpful to separate your admin code from the public code. Use the conditional [is\_admin()](https://codex.wordpress.org/Function_Reference/is_admin). You must still perform capability checks as this doesn’t indicate the user is authenticated or has Administrator-level access. See [Checking User Capabilities](#plugins/security/checking-user-capabilities).

For example:

```php
if ( is_admin() ) {
    // we are in admin mode
    require_once __DIR__ . '/admin/plugin-name-admin.php';
}
```

### Avoiding Direct File Access

As a security precaution, it’s a good practice to disallow access if the `ABSPATH` global is not defined. This is only applicable to files which contain code outside of class or function definitions, such as the main plugin file.

You can implement this by including this code at the top of the file:

```php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
```

### Architecture Patterns

While there are a number of possible architecture patterns, they can broadly be grouped into three variations:

- [Single plugin file, containing functions](https://github.com/GaryJones/move-floating-social-bar-in-genesis/blob/master/move-floating-social-bar-in-genesis.php)
- [Single plugin file, containing a class, instantiated object and optionally functions](https://github.com/norcross/wp-comment-notes/blob/master/wp-comment-notes.php)
- [Main plugin file, then one or more class files](https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate)

### Architecture Patterns Explained

Specific implementations of the more complex of the above code organizations have already been written up as tutorials and slides:

- [Slash – Singletons, Loaders, Actions, Screens, Handlers](https://jjj.blog/2012/12/slash-architecture-my-approach-to-building-wordpress-plugins/)
- [Implementing the MVC Pattern in WordPress Plugins](http://iandunn.name/wp-mvc)

## Boilerplate Starting Points

Instead of starting from scratch for each new plugin you write, you may want to start with a **boilerplate**. One advantage of using a boilerplate is to have consistency among your own plugins. Boilerplates also make it easier for other people to contribute to your code if you use a boilerplate they are already familiar with.

These also serve as further examples of different yet comparable architectures.

- [WordPress Plugin Boilerplate](https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate): A foundation for WordPress Plugin Development that aims to provide a clear and consistent guide for building your plugins.
- [WordPress Plugin Bootstrap](https://github.com/claudiosmweb/wordpress-plugin-boilerplate): Basic bootstrap to develop WordPress plugins using Grunt, Compass, GIT, and SVN.
- [WP Skeleton Plugin](https://github.com/ptahdunbar/wp-skeleton-plugin): Skeleton plugin that focuses on unit tests and use of composer for development.
- [WP CLI Scaffold](#cli/commands/scaffold/plugin): The Scaffold command of WP CLI creates a skeleton plugin with options such as CI configuration files

Of course, you could take different aspects of these and others to create your own custom boilerplate.

---

# Determining Plugin and Content Directories <a name="plugins/plugin-basics/determining-plugin-and-content-directories" />

Source: https://developer.wordpress.org/plugins/plugin-basics/determining-plugin-and-content-directories/

When coding WordPress plugins you often need to reference various files and folders throughout the WordPress installation and within your plugin or theme.

WordPress provides several functions for easily determining where a given file or directory lives. Always use these functions in your plugins instead of hard-coding references to the wp-content directory or using the WordPress internal constants.

WordPress allows users to place their wp-content directory anywhere they want and rename it whatever they want. Never assume that plugins will be in wp-content/plugins, uploads will be in wp-content/uploads, or that themes will be in wp-content/themes.

PHP’s `__FILE__` magic-constant resolves symlinks automatically, so if the `wp-content` or `wp-content/plugins` or even the individual plugin directory is symlinked, hardcoded paths will not work correctly.

## Common Usage

If your plugin includes JavaScript files, CSS files or other external files, then it’s likely you’ll need the URL to these files so you can load them into the page. To do this you should use the [plugins\_url()](#reference/functions/plugins_url) function like so:

```php
plugins_url( 'myscript.js', __FILE__ );
```

This will return the full URL to myscript.js, such as `example.com/wp-content/plugins/myplugin/myscript.js`.

To load your plugins’ JavaScript or CSS into the page you should use [`wp_enqueue_script()`](#reference/functions/wp_enqueue_script) or [`wp_enqueue_style()`](#reference/functions/wp_enqueue_style) respectively, passing the result of `plugins_url()` as the file URL.

## Available Functions

WordPress includes many other functions for determining paths and URLs to files or directories within plugins, themes, and WordPress itself. See the individual DevHub pages for each function for complete information on their use.

### Plugins

```php
plugins_url()
plugin_dir_url()
plugin_dir_path()
plugin_basename()
```

### Themes

```php
get_template_directory_uri()
get_stylesheet_directory_uri()
get_stylesheet_uri()
get_theme_root_uri()
get_theme_root()
get_theme_roots()
get_stylesheet_directory()
get_template_directory()
```

### Site Home

```php
home_url()
get_home_path()
```

### WordPress

```php
admin_url()
site_url()
content_url()
includes_url()
wp_upload_dir()
```

### Multisite

```php
get_admin_url()
get_home_url()
get_site_url()
network_admin_url()
network_site_url()
network_home_url()
```

## Constants

WordPress makes use of the following constants when determining the path to the content and plugin directories. These should not be used directly by plugins or themes, but are listed here for completeness.

```php
WP_CONTENT_DIR  // no trailing slash, full paths only
WP_CONTENT_URL  // full url 
WP_PLUGIN_DIR  // full path, no trailing slash
WP_PLUGIN_URL  // full url, no trailing slash

// Available per default in MS, not set in single site install
// Can be used in single site installs (as usual: at your own risk)
UPLOADS // (If set, uploads folder, relative to ABSPATH) (for e.g.: /wp-content/uploads)
```

## Related

****WordPress Directories****:

| [home\_url()](#reference/functions/home_url) | Home URL | <http://www.example.com> |
|---|---|---|
| [site\_url()](#reference/functions/site_url) | Site directory URL | <http://www.example.com> or <http://www.example.com/wordpress> |
| [admin\_url()](#reference/functions/admin_url) | Admin directory URL | <http://www.example.com/wp-admin> |
| [includes\_url()](#reference/functions/includes_url) | Includes directory URL | <http://www.example.com/wp-includes> |
| [content\_url()](#reference/functions/content_url) | Content directory URL | <http://www.example.com/wp-content> |
| [plugins\_url()](#reference/functions/plugins_url) | Plugins directory URL | <http://www.example.com/wp-content/plugins> |
| [wp\_upload\_dir()](#reference/functions/wp_upload_dir) | Upload directory URL (returns an array) | <http://www.example.com/wp-content/uploads> |

---

# Including a Software License <a name="plugins/plugin-basics/including-a-software-license" />

Source: https://developer.wordpress.org/plugins/plugin-basics/including-a-software-license/

Most WordPress plugins are released under the [GPL](http://www.gnu.org/licenses/gpl.html), which is the same license that [WordPress itself uses](https://wordpress.org/about/license/). However, there are other compatible options available. It is always best to clearly indicate the license your plugin uses.

In the [Header Requirements](#plugins/the-basics/header-requirements) section, we briefly mentioned how you can indicate your plugin’s license within the plugin header comment. Another common, and encouraged, practice is to place a license block comment near the top of your main plugin file (the same one that has the plugin header comment).

This license block comment usually looks something like this:

```php
/*
{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {URI to Plugin License}.
*/
```

---

# Uninstall Methods <a name="plugins/plugin-basics/uninstall-methods" />

Source: https://developer.wordpress.org/plugins/plugin-basics/uninstall-methods/

Your plugin may need to do some clean-up when it is uninstalled from a site.

A plugin is considered uninstalled if a user has deactivated the plugin, and then clicks the delete link within the WordPress Admin.

When your plugin is uninstalled, you’ll want to clear out any plugin options and/or settings specific to the plugin, and/or other database entities such as tables.

Less experienced developers sometimes make the mistake of using the deactivation hook for this purpose.

This table illustrates the differences between deactivation and uninstall.

| Scenario | Deactivation Hook | Uninstall Hook |
|---|---|---|
| Flush Cache/Temp | Yes | No |
| Flush Permalinks | Yes | No |
| Remove Options from {$[wpdb](#reference/classes/wpdb)-&gt;prefix}\_options | No | Yes |
| Remove Tables from [wpdb](#reference/classes/wpdb) | No | Yes |

## Method 1: `register_uninstall_hook`

To set up an uninstall hook, use the [register\_uninstall\_hook()](#reference/functions/register_uninstall_hook) function:

```php
register_uninstall_hook(
	__FILE__,
	'pluginprefix_function_to_run'
);
```

## Method 2: `uninstall.php`

To use this method you need to create an `uninstall.php` file inside the root folder of your plugin. This magic file is run automatically when the users deletes the plugin.

For example: `/plugin-name/uninstall.php`

  
Always check for the constant `WP_UNINSTALL_PLUGIN` in `uninstall.php` before doing anything. This protects against direct access. The constant will be defined by WordPress during the `uninstall.php` invocation.

The constant is **NOT** defined when uninstall is performed by [register\_uninstall\_hook()](#reference/functions/register_uninstall_hook) .

Here is an example deleting option entries and dropping a database table:

```php
// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

$option_name = 'wporg_option';

delete_option( $option_name );

// for site options in Multisite
delete_site_option( $option_name );

// drop a custom database table
global $wpdb;
$wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}mytable" );
```

  
In Multisite, looping through all blogs to delete options can be very resource intensive.

---

# Plugin Security <a name="plugins/security" />

Source: https://developer.wordpress.org/plugins/security/

This content has been moved to the [Security page](#apis/security) in the Common APIs Handbook.

---

# Checking User Capabilities <a name="plugins/security/checking-user-capabilities" />

Source: https://developer.wordpress.org/plugins/security/checking-user-capabilities/

If your plugin allows users to submit data—be it on the Admin or the Public side—it should check for User Capabilities.

## User Roles and Capabilities

The most important step in creating an efficient security layer is having a user permission system in place. WordPress provides this in the form of [User Roles and Capabilities](#plugins/users/roles-and-capabilities).

Every user logged into WordPress is automatically assigned specific User capabilities depending on their User role.

**User roles** is just a fancy way of saying which group the user belongs to. Each group has a specific set of predefined capabilities.

For example, the main user of your website will have the User role of an Administrator while other users might have roles like Editor or Author. You could have more than one user assigned to a role, i.e. there might be two Administrators for a website.

**User capabilities** are the specific permissions that you assign to each user or to a User role.

For example, Administrators have the “manage\_options” capability which allows them to view, edit and save options for the website. Editors on the other hand lack this capability which will prevent them from interacting with options.

These capabilities are then checked at various points within the Admin. Depending on the capabilities assigned to a role; menus, functionality, and other aspects of the WordPress experience may be added or removed.

**As you build a plugin, make sure to run your code only when the current user has the necessary capabilities.**

### Hierarchy

The higher the user role, the more capabilities the user has. Each user role inherits the previous roles in the hierarchy.

For example, the “Administrator”, which is the highest user role on a single site installation, inherits the following roles and their capabilities: “Subscriber”, “Contributor”, “Author” and “Editor”.

## Examples

### No Restrictions

The example below creates a link on the frontend which gives the ability to trash posts. Because this code does not check user capabilities, **it allows any visitor to the site to trash posts!**

```php
/**
 * Generate a Delete link based on the homepage url.
 *
 * @param string $content   Existing content.
 *
 * @return string|null
 */
function wporg_generate_delete_link( $content ) {
	// Run only for single post page.
	if ( is_single() && in_the_loop() && is_main_query() ) {
		// Add query arguments: action, post.
		$url = add_query_arg(
			[
				'action' => 'wporg_frontend_delete',
				'post'   => get_the_ID(),
			], home_url()
		);

		return $content . ' <a href="' . esc_url( $url ) . '">' . esc_html__( 'Delete Post', 'wporg' ) . '</a>';
	}

	return null;
}

/**
 * Request handler
 */
function wporg_delete_post() {
	if ( isset( $_GET['action'] ) && 'wporg_frontend_delete' === $_GET['action'] ) {

		// Verify we have a post id.
		$post_id = ( isset( $_GET['post'] ) ) ? ( $_GET['post'] ) : ( null );

		// Verify there is a post with such a number.
		$post = get_post( (int) $post_id );
		if ( empty( $post ) ) {
			return;
		}

		// Delete the post.
		wp_trash_post( $post_id );

		// Redirect to admin page.
		$redirect = admin_url( 'edit.php' );
		wp_safe_redirect( $redirect );

		// We are done.
		die;
	}
}

/**
 * Add the delete link to the end of the post content.
 */
add_filter( 'the_content', 'wporg_generate_delete_link' );

/**
 * Register our request handler with the init hook.
 */
add_action( 'init', 'wporg_delete_post' );

```

### Restricted to a Specific Capability

The example above allows any visitor to the site to click on the “Delete” link and trash the post. However, we only want Editors and above to be able to click on the “Delete” link.

To accomplish this, we will check that the current user has the capability `edit_others_posts`, which only Editors or above would have:

```php
/**
 * Generate a Delete link based on the homepage url.
 *
 * @param string $content   Existing content.
 *
 * @return string|null
 */
function wporg_generate_delete_link( $content ) {
	// Run only for single post page.
	if ( is_single() && in_the_loop() && is_main_query() ) {
		// Add query arguments: action, post.
		$url = add_query_arg(
			[
				'action' => 'wporg_frontend_delete',
				'post'   => get_the_ID(),
			], home_url()
		);

		return $content . ' <a href="' . esc_url( $url ) . '">' . esc_html__( 'Delete Post', 'wporg' ) . '</a>';
	}

	return null;
}

/**
 * Request handler
 */
function wporg_delete_post() {
	if ( isset( $_GET['action'] ) && 'wporg_frontend_delete' === $_GET['action'] ) {

		// Verify we have a post id.
		$post_id = ( isset( $_GET['post'] ) ) ? ( $_GET['post'] ) : ( null );

		// Verify there is a post with such a number.
		$post = get_post( (int) $post_id );
		if ( empty( $post ) ) {
			return;
		}

		// Delete the post.
		wp_trash_post( $post_id );

		// Redirect to admin page.
		$redirect = admin_url( 'edit.php' );
		wp_safe_redirect( $redirect );

		// We are done.
		die;
	}
}

/**
 * Add delete post ability
 */
add_action('plugins_loaded', 'wporg_add_delete_post_ability');
 
function wporg_add_delete_post_ability() {    
    if ( current_user_can( 'edit_others_posts' ) ) {
        /**
         * Add the delete link to the end of the post content.
         */
        add_filter( 'the_content', 'wporg_generate_delete_link' );
      
        /**
         * Register our request handler with the init hook.
         */
        add_action( 'init', 'wporg_delete_post' );
    }
}
```

---

# Data Validation <a name="plugins/security/data-validation" />

Source: https://developer.wordpress.org/plugins/security/data-validation/

This content has been moved to the [Data Validation page](#apis/security/data-validation) in the Common APIs Handbook.

---

# Securing (sanitizing) Input <a name="plugins/security/securing-input" />

Source: https://developer.wordpress.org/plugins/security/securing-input/

This content has been moved to the [Sanitizing Data](#apis/security/sanitizing) page in the Common APIs Handbook.

---

# Nonces <a name="plugins/security/nonces" />

Source: https://developer.wordpress.org/plugins/security/nonces/

This content has been moved to the [Nonces page](#apis/security/nonces) in the Common APIs Handbook.

---

# Securing (escaping) Output <a name="plugins/security/securing-output" />

Source: https://developer.wordpress.org/plugins/security/securing-output/

This content has been moved to the [Escaping Data](#apis/security/escaping) page in the Common APIs Handbook.

---

# Hooks <a name="plugins/hooks" />

Source: https://developer.wordpress.org/plugins/hooks/

Hooks are a way for one piece of code to interact/modify another piece of code at specific, pre-defined spots. They make up the foundation for how plugins and themes interact with WordPress Core, but they’re also used extensively by Core itself.

There are two types of hooks: [Actions](#plugins/hooks/actions) and [Filters](#plugins/hooks/filters). To use either, you need to write a custom function known as a `Callback`, and then register it with a WordPress hook for a specific action or filter.

[Actions](#plugins/hooks/actions) allow you to add data or change how WordPress operates. Actions will run at a specific point in the execution of WordPress Core, plugins, and themes. Callback functions for Actions can perform some kind of a task, like echoing output to the user or inserting something into the database. Callback functions for an Action do not return anything back to the calling Action hook.

[Filters](#plugins/hooks/filters) give you the ability to change data during the execution of WordPress Core, plugins, and themes. Callback functions for Filters will accept a variable, modify it, and return it. They are meant to work in an isolated manner, and should never have [side effects](https://en.wikipedia.org/wiki/Side_effect_(computer_science)) such as affecting global variables and output. Filters expect to have something returned back to them.

WordPress provides many hooks that you can use, but you can also [create your own](#plugins/hooks/custom-hooks) so that other developers can extend and modify your plugin or theme.

## Actions vs. Filters

The main difference between an action and a filter can be summed up like this:

- an action takes the info it receives, does something with it, and returns nothing. In other words: it *acts* on something and then exits, returning nothing back to the calling hook.
- a filter takes the info it receives, modifies it somehow, and returns it. In other words: it *filters* something and passes it back to the hook for further use.

Said another way:

- an action interrupts the code flow to do something, and then returns back to the normal flow without modifying anything;
- a filter is used to modify something in a specific way so that the modification is then used by code later on.

The *something* referred to is the parameter list sent via the hook definition. More on this in later sections.

## More Resources

- [Filter Reference](#apis/hooks/filter-reference)
- [Action Reference](#apis/hooks/action-reference)

---

# Actions <a name="plugins/hooks/actions" />

Source: https://developer.wordpress.org/plugins/hooks/actions/

**Actions** are one of the two types of [Hooks](#plugins/hooks). They provide a way for running a function at a specific point in the execution of WordPress Core, plugins, and themes. Callback functions for an Action do not return anything back to the calling Action hook. They are the counterpart to [Filters](#plugin/hooks/filters). Here is a refresher of [the difference between actions and filters](#plugins/hooks#actions-vs-filters).

## Adding an Action

The process of adding an action includes two steps:

### Create a *callback function*

First, create a *callback function*. This function will be run when the action it is hooked to is run.

The callback function is just like a normal function: it should be prefixed, and it should be in `functions.php` or somewhere callable. The parameters it should accept will be defined by the action you are hooking to; most hooks are well defined, so review the hooks docs to see what parameters the action you have selected will pass to your function.

### Assign (*hook*) your callback function

Second, add your callback function to the action. This is called *hooking* and tells the action to run your callback function when the action is run.

When your callback function is ready, use [add\_action()](#reference/functions/add_action) to hook it to the action you have selected. At a minimum, `add_action()` requires two parameters:

1. `string $hook_name` which is the name of the action you’re hooking to, and
2. `callable $callback` the name of your callback function.

The example below will run `wporg_callback()` when the `init` hook is executed:

```php
function wporg_callback() {
    // do something
}
add_action( 'init', 'wporg_callback' );
```

You can refer to the [Hooks](#plugins/hooks) chapter for a list of available hooks.

As you gain more experience, looking through WordPress Core source code will allow you to find the most appropriate hook.

### Additional Parameters

`add_action()` can accept two additional parameters, `int $priority` for the priority given to the callback function, and `int $accepted_args` for the number of arguments that will be passed to the callback function.

#### Priority

Many callback functions can be hooked to a single action. The `init` hook for example gets a lot of use. There may be cases where you need to ensure that your callback function runs before or after other callback functions, even when those other functions may not yet have been hooked.

WordPress determines the order that callback functions are run based on two things: The first way is by manually setting the *priority*. This is done using the third argument to `add_action()`.

Here are some important facts about priorities:

- priorities are positive integers, typically between 1 and 20
- the default priority (meaning, the priority assigned when no `priority` value is manually supplied) is 10
- there is no theoretical upper limit on the priority value, but the realistic upper limit is 100

A function with a priority of 11 will run *after* a function with a priority of 10; and a function with a priority of 9 will run *before* a function with a priority of 10.

The second way that callback function order is determined is simply by the order in which it was registered *within the same priority value*. So if two callback functions are registered for the same hook with the same priority, they will be run in the order that they were registered to the hook.

For example, the following callback functions are all registered to the `init` hook, but with different priorities:

```php
add_action('init', 'wporg_callback_run_me_late', 11);
add_action('init', 'wporg_callback_run_me_normal');
add_action('init', 'wporg_callback_run_me_early', 9);
add_action('init', 'wporg_callback_run_me_later', 11);
```

In the example above:

- The first function run will be `wporg_callback_run_me_early()`, because it has a manual priority of 9
- Next, `wporg_callback_run_me_normal(),` because it has no priority set and so its priority is 10
- Next, `wporg_callback_run_me_late()` is run because it has a manual priority of 11
- Finally, `wporg_callback_run_me_later()` is run: it also has a priority of 11, but it was hooked after `wporg_callback_run_me_late()`.

#### Number of Arguments

Sometimes it’s desirable for a callback function to receive some extra data related to the action being hooked to.

For example, when WordPress saves a post and runs the `<a href="#reference/hooks/save_post">save_post</a>` hook, it passes two parameters to the callback function: the ID of the post being saved, and the post object itself:

```php
do_action( 'save_post', $post->ID, $post );
```

When a callback function is registered for the `<a href="#reference/hooks/save_post">save_post</a>` hook, it can specify that it wants to receive those two parameters. It does so by telling `add_action` to expect them by (in this case) putting `2` as the fourth argument:

```php
add_action('save_post', 'wporg_custom', 10, 2);
```

In order to actually receive those parameters in your callback function, modify the parameters your callback function will accept, like this:

```php
function wporg_custom( $post_id, $post ) {
    // do something
}
```

It’s good practice to give your callback function parameters the same name as the passed parameters, or as close as you can.

---

# Filters <a name="plugins/hooks/filters" />

Source: https://developer.wordpress.org/plugins/hooks/filters/

**Filters** are one of the two types of [Hooks](#plugins/hooks).

They provide a way for functions to modify data during the execution of WordPress Core, plugins, and themes. They are the counterpart to [Actions](#plugins/hooksactions/).

Unlike [Actions](#plugins/hooksactions/), filters are meant to work in an isolated manner, and should never have [side effects](https://en.wikipedia.org/wiki/Side_effect_(computer_science)) such as affecting global variables and output. Filters expect to have something returned back to them.

## Add Filter

The process of adding a filter includes two steps.

First, you need to create a Callback function which will be called when the filter is run. Second, you need to add your Callback function to a hook which will perform the calling of the function.

You will use the [add\_filter()](#reference/functions/add_filter) function, passing at least two parameters:

1. `string $hook_name` which is the name of the filter you’re hooking to, and
2. `callable $callback` the name of your callback function.

The example below will run when the `the_title` filter is executed.

```php
function wporg_filter_title( $title ) {
	return 'The ' . $title . ' was filtered';
}
add_filter( 'the_title', 'wporg_filter_title' );
```

Lets say we have a post title, “Learning WordPress”, the above example will modify it to be “The Learning WordPress was filtered”.

You can refer to the [Hooks](#plugins/hooks) chapter for a list of available hooks.

As you gain more experience, looking through WordPress Core source code will allow you to find the most appropriate hook.

### Additional Parameters

[add\_filter()](#reference/functions/add_filter) can accept two additional parameters, `int $priority` for the priority given to the callback function, and `int $accepted_args` for the number of arguments that will be passed to the callback function.

For detailed explanation of these parameters please read the article on [Actions](#plugins/hooksactions/).

### Example

To add a CSS class to the `<body>` tag when a certain condition is met:

```php
function wporg_css_body_class( $classes ) {
	if ( ! is_admin() ) {
		$classes[] = 'wporg-is-awesome';
	}
	return $classes;
}
add_filter( 'body_class', 'wporg_css_body_class' );
```

---

# Custom Hooks <a name="plugins/hooks/custom-hooks" />

Source: https://developer.wordpress.org/plugins/hooks/custom-hooks/

An important, but often overlooked practice is using custom hooks in your plugin so that other developers can extend and modify it.

Custom hooks are created and called in the same way that WordPress Core hooks are.

## Create a Hook

To create a custom hook, use `<a href="#reference/functions/do_action">do_action()</a>` for [Actions](#plugins/hooks/actions) and `<a href="#reference/functions/apply_filters">apply_filters()</a>` for [Filters](#plugins/hooks/filters).

  
We recommend using `[apply\_filters()](#reference/functions/apply_filters) ` on any text that is output to the browser. Particularly on the frontend. This makes it easier for plugins to be modified according to the user’s needs.

## Add a Callback to the Hook

To add a callback function to a custom hook, use `<a href="#reference/functions/add_action">add_action()</a>` for [Actions](#plugins/hooks/actions) and `<a href="#reference/functions/add_filter">add_filter()</a>` for [Filters](#plugins/hooks/filters).

## Naming Conflicts

Naming conflicts (“collisions”) occur when two developers use the same hook name for completely different purposes. This leads to difficult to find bugs. So it’s important to prefix your hook names with a unique string to avoid hook name collisions.collisions with other plugins.

For example, a filter named `email_body` is generic enough that two or more developers could use this hook in different plugins for different purposes. So to avoid this, a prefix is added. For example, functions used as examples in this handbook use `wporg_` as the prefix.

When you choose your prefix, you can use your company name, your wp handle, the plugin name, anything you like really. The goal is to make it unique so choose wisely.

## Examples

### Extensible Action: Settings Form

If your plugin adds a settings form to the Administrative Panels, you can use Actions to allow other plugins to add their own settings to it.

```php
    do_action( 'wporg_after_settings_page_html' );
```

Now another plugin can register a callback function for the `wporg_after_settings_page_html` hook and inject new settings:

```php
add_action( 'wporg_after_settings_page_html', 'myprefix_add_settings' );
```

Note that because this is an action, no value is returned. Also note that since no priority is given, it will run at default priority 10.

### Extensible Filter: Custom Post Type

In this example, when the new post type is registered, the parameters that define it are passed through a filter, so another plugin can change them before the post type is created.

```php
function wporg_create_post_type() {
    $post_type_params = [/* ... */];

    register_post_type(
        'post_type_slug',
        apply_filters( 'wporg_post_type_params', $post_type_params )
    );
}
```

Now another plugin can register a callback function for the `wporg_post_type_params` hook and change post type parameters:

```php
function myprefix_change_post_type_params( $post_type_params ) {
	$post_type_params['hierarchical'] = true;
	return $post_type_params;
}
add_filter( 'wporg_post_type_params', 'myprefix_change_post_type_params' );
```

Note that filters filters take data, modify it, and return it. So the code called ( `myprefix_change_post_type_params` ) doesn’t output anything using echo or html, or anything else directly to the screen. Also note that the retuned value is used directly by `register_post_type` without being assigned to a variable first. This is simple to skip that extra (an unnecessary) step.

Also note that since no priority is given, it will run at default priority 10. And since there is no value for the number of parameters expected, the default of one is assumed.

---

# Advanced Topics <a name="plugins/hooks/advanced-topics" />

Source: https://developer.wordpress.org/plugins/hooks/advanced-topics/

## Removing Actions and Filters

Sometimes you want to remove a callback function from a hook that another plugin, theme or even WordPress Core has registered.

To remove a callback function from a hook, you need to call `remove_action()` or `remove_filter()`, depending whether the callback function was added as an Action or a Filter.

The parameters passed to `remove_action()` / `remove_filter()` must be identical to the parameters passed to `add_action()` / `add_filter()` that registered it, or the removal won’t work.

  
To successfully remove a callback function you must perform the removal after the callback function was registered. The order of execution is important.  

### Example

Lets say we want to improve the performance of a large theme by removing unnecessary functionality.

Let’s analyze the theme’s code by looking into `functions.php`.

```php
function wporg_setup_slider() {
	// ...
}
add_action( 'template_redirect', 'wporg_setup_slider', 9 );
```

The `wporg_setup_slider` function is adding a slider that we don’t need, which probably loads a huge CSS file followed by a JavaScript initialization file which uses a custom written library the size of 1MB. We can can get rid of that.

Since we want to hook into WordPress after the `wporg_setup_slider` callback function was registered (`functions.php` executed) our best chance would be the `<a href="#reference/hooks/after_setup_theme">after_setup_theme</a>` hook.

```php
function wporg_disable_slider() {
	// Make sure all parameters match the add_action() call exactly.
	remove_action( 'template_redirect', 'wporg_setup_slider', 9 );
}
// Make sure we call remove_action() after add_action() has been called.
add_action( 'after_setup_theme', 'wporg_disable_slider' );
```

## Removing All Callbacks

You can also remove all of the callback functions associated with a hook by using `remove_all_actions()` / `remove_all_filters()`.

## Determining the Current Hook

Sometimes you want to run an Action or a Filter on multiple hooks, but behave differently based on which one is currently calling it.

You can use the `current_action()` / `current_filter()` to determine the current Action / Filter.

```php
function wporg_modify_content( $content ) {
	switch ( current_filter() ) {
		case 'the_content':
			// Do something.
			break;
		case 'the_excerpt':
			// Do something.
			break;
	}
	return $content;
}

add_filter( 'the_content', 'wporg_modify_content' );
add_filter( 'the_excerpt', 'wporg_modify_content' );
```

## Checking How Many Times a Hook Has Run

Some hooks are called multiple times in the course of execution, but you may only want your callback function to run once.

In this situation, you can check how many times the hook has run with the [did\_action()](#reference/functions/did_action).

```php
function wporg_custom() {
   // If save_post has been run more than once, skip the rest of the code.
   if ( did_action( 'save_post' ) !== 1 ) {
      return;
   }
   // ...
}
add_action( 'save_post', 'wporg_custom' );
```

## Debugging with the “all” Hook

If you want a callback function to fire on every single hook, you can register it to the `all` hook. Sometimes this is useful in debugging situations to help determine when a particular event is happening or when a page is crashing.

```php
function wporg_debug() {
	echo '<p>' . current_action() . '</p>';
}
add_action( 'all', 'wporg_debug' );
```

---

# Privacy <a name="plugins/privacy" />

Source: https://developer.wordpress.org/plugins/privacy/

Are you writing a plugin that handles personal data – things like names, addresses, and other things that can be used to identify a person? You’ll want to take care with that data and protect the privacy of your users and visitors.

## What is Privacy?

WordPress.org made several enhancements ahead of Europe’s General Data Protection Regulation. Following the launch of this work, we have made Privacy a permanent focus in core trac development, which will allow us to continue making enhancements on privacy and data protection outside specific legislation.

But what kind of issues might fall under the definition of “privacy”, and how do we define it? Although privacy requirements vary widely across countries, cultures, and legal systems, there are several general principles applicable across any situation:

- **Consent and choice:** giving users (and site visitors) choices and options over the uses of their data, and requiring clear, specific, and informed opt-in;
- **Purpose legitimacy and specification:** only collect and use the personal data for the purpose it was intended for, and for which the user was clearly informed of in advance;
- **Collection limitation:** only collect the user data which is needed; don’t make extra copies of data or combine your data with data from other plugins if you can avoid it
- **Data minimization:** restrict the processing of data, as well as the number of people who have access to it, to the minimum uses and people necessary;
- **Use, retention and disclosure limitation:** delete data which is no longer needed, both in active use and in archives, by both the recipient and any third parties;
- **Accuracy and quality:** ensure that the data collected and used is correct, relevant, and up-to-date, especially if inaccurate or poor data could adversely impact the user;
- **Openness, transparency and notice:** inform users how their data is being collected, used, and shared, as well as any rights they have over those uses;
- **Individual participation and access:** give users a means to access or download their data;
- **Accountability:** documenting the uses of data, protecting it in transit and in use by third parties, and preventing misuse and breaches as much as is possible;
- **Information security:** protecting data through appropriate technical and security measures;
- **Privacy compliance:** ensuring that the work meets the privacy regulations of the location where it will be used to collect and process people’s data.

(Source: [ISO 29100/Privacy Framework standard](https://www.iso.org/standard/45123.html))

While not all of these principles will be applicable across all situations and uses, using them in the development process can help to ensure user trust.

## Privacy By Design

Many of these principles are espoused in the Privacy by Design framework, which states that:

- Privacy should be proactive, not reactive, and must anticipate privacy issues before they reach the user. Privacy must also be preventative, not remedial.
- Privacy should be the default setting. The user should not have to take actions to secure their privacy, and consent for data sharing should not be assumed.
- Privacy should be built into design as a core function, not an add-on.
- Privacy should be positive sum: there should be no trade-off between privacy and security, privacy and safety, or privacy and service provision.
- Privacy should offer end-to-end lifecycle protection through data minimization, minimal data retention, and regular deletion of data which is no longer required.
- The privacy standards used on your plugin (and service, if applicable) should be visible, transparent, open, documented and independently verifiable.
- Privacy should be user-centric. People should be given options such as granular privacy choices, maximized privacy defaults, detailed privacy information notices, user-friendly options, and clear notification of changes.

## Food for Thought for Your Plugin

To help your plugin be ready, we recommend going through the following list of questions for every plugin that you make:

1. How does your plugin handle personal data? Use wp\_add\_privacy\_policy\_content (link) to disclose to your users any of the following: 
    - Does the plugin share personal data with third parties (e.g. to outside APIs/servers). If so, what data does it share with which third parties and do they have a published privacy policy you can provide a link to?
    - Does the plugin collect personal data? If so, what data and where is it stored? Think about places like user data/meta, options, post meta, custom tables, files, etc.
    - Does the plugin use personal data collected by others? If so, what data? Does the plugin pass personal data to a SDK? What does that SDK do with the data?
    - Does the plugin collect telemetry data, directly or indirectly? Loading an image from a third-party source on every install, for example, could indirectly log and track the usage data of all of your plugin installs.
    - Does the plugin enqueue Javascript, tracking pixels or embed iframes from a third party (third party JS, tracking pixels and iframes can collect visitor’s data/actions, leave cookies, etc.)?
    - Does the plugin store things in the browser? If so, where and what? Think about things like cookies, local storage, etc.
2. If your plugin collects personal data… 
    - Does it provide a personal data exporter?
    - Does it provide a personal data eraser callback?
    - For what reasons (if any) does the plugin refuse to erase personal data? (e.g. order not yet completed, etc) – those should be disclosed as well.
3. Does the plugin use error logging? Does it avoid logging personal data if possible? Could you use things like wp\_privacy\_anonymize\_data to minimize the personal data logged? How long are log entries kept? Who has access to them?
4. In wp-admin, what role/capabilities are required to access/see personal data? Are they sufficient?
5. What personal data is exposed on the front end of the site by the plugin? Does it appear to logged-in and logged-out users? Should it?
6. What personal data is exposed in REST API endpoints by the plugin? Does it appear to logged-in and logged-out users? What roles/capabilities are required to see it? Are those appropriate?
7. Does the plugin properly remove/clean-up data, including especially personal data: 
    - During uninstall of the plugin?
    - When a related item is deleted (e.g. from the post meta or any post-referencing rows in another table)?
    - When a user is deleted (e.g. from any user referencing rows in a table)?
8. Does the plugin provide controls to reduce the amount of personal data required?
9. Does the plugin share personal data with SDKs or APIs only when the SDK or API requires it, or is the plugin also sharing personal data that is optional?
10. Does the amount of personal data collected or shared by this plugin change when certain other plugins are also installed?

## External Resources

- Privacy Blog <https://privacy.blog>
- WordPress.org Privacy Policy <https://wordpress.org/about/privacy/>

---

# Suggesting text for the site privacy policy <a name="plugins/privacy/suggesting-text-for-the-site-privacy-policy" />

Source: https://developer.wordpress.org/plugins/privacy/suggesting-text-for-the-site-privacy-policy/

Every plugin that collects, uses, or stores user data, or passes it to an external source or third party, should add a section of suggested text to the privacy policy postbox. This is best done with` wp_add_privacy_policy_content( $plugin_name, $policy_text )`. This will allow site administrators to pull that information into their site’s privacy policy.

To make this simpler for the users, the text should address the questions provided in the default privacy policy:

- What personal data we collect and why we collect it
    - Their own manually input information
    - WP: Contact forms
    - WP: Comments
    - WP: Cookies
    - WP: Third party embeds
    - Analytics
- Who we share your data with
- How long we retain your data
- What rights you have over your data
- Where we send your data
- Your contact information
- How we protect your data
- What data breach procedures we have in place
- What third parties we receive data from
- What automated decision making and/or profiling we do with user data
- Any industry regulatory disclosure requirements

While not all of these questions will be applicable to all plugins, we recommend taking care with the sections on data sharing.

## Code Example

It is recommended to call wp_add_privacy_policy_content during the admin_init action. Calling it outside of an action hook can lead to problems, see ticket #44142 for details.

Supplemental information can be provided through the use of the specialized `.privacy-policy-tutorial` CSS class. Any content contained within HTML elements that have this CSS class applied will be omitted from the clipboard when the section content is copied.

```php
/**
 * Adds a privacy policy statement.
 */
function wporg_add_privacy_policy_content() {
	if ( ! function_exists( 'wp_add_privacy_policy_content' ) ) {
		return;
	}
	$content = '<p class="privacy-policy-tutorial">' . __( 'Some introductory content for the suggested text.', 'text-domain' ) . '</p>'
			. '<strong class="privacy-policy-tutorial">' . __( 'Suggested Text:', 'my_plugin_textdomain' ) . '</strong> '
			. sprintf(
				__( 'When you leave a comment on this site, we send your name, email address, IP address and comment text to example.com. Example.com does not retain your personal data. The example.com privacy policy is <a href="%1$s" target="_blank">here</a>.', 'text-domain' ),
				'https://example.com/privacy-policy'
			);
	wp_add_privacy_policy_content( 'Example Plugin', wp_kses_post( wpautop( $content, false ) ) );
}

add_action( 'admin_init', 'wporg_add_privacy_policy_content' );
```

---

# Adding the Personal Data Exporter to Your Plugin <a name="plugins/privacy/adding-the-personal-data-exporter-to-your-plugin" />

Source: https://developer.wordpress.org/plugins/privacy/adding-the-personal-data-exporter-to-your-plugin/

In WordPress 4.9.6, new tools were added to make compliance easier with laws like the European Union’s General Data Protection Regulation, or GDPR for short. Among the tools added is a Personal Data Export tool which supports exporting all the personal data for a given user in a ZIP file. In addition to the personal data stored in things like WordPress comments, plugins can also hook into the exporter feature to export the personal data they collect, whether it be in something like postmeta or even an entirely new Custom Post Type (CPT).

The “key” for all the exports is the user’s email address – this was chosen because it supports exporting personal data for both full-fledged registered users and also unregistered users (e.g. like a logged out commenter).

However, since assembling a personal data export could be an intensive process and will likely contain sensitive data, we don’t want to just generate it and email it to the requestor without confirming the request, so the admin-facing user interface starts all requests by having the admin enter the username or email address making the request and then sends then a link to click to confirm their request.

Once a request has been confirmed, the admin can generate and download or directly email the personal data export ZIP file for the user, or do the export anyways if the need arises. Inside the ZIP file the user receives, they will find a “mini website” with an index HTML page containing their personal data organized in groups (e.g. a group for comments, etc. )

Whether the admin downloads the personal data export ZIP file or sends it directly to the requestor, the way the personal data export is assembled is identical – and relies on hooking “exporter” callbacks to do the dirty work of collecting all the data for the export. When the admin clicks on the download or email link, an AJAX loop begins that iterates over all the exporters registered in the system, one at a time. In addition to exporters built into core, plugins can register their own exporter callbacks.

The exporter callback interface is designed to be as simple as possible. A exporter callback receives the email address we are working with and a page parameter as well. The page parameter (which starts at 1) is used to avoid plugins potentially causing timeouts by attempting to export all the personal data they’ve collected at once. A well behaved plugin will limit the amount of data it attempts to erase per page (e.g. 100 posts, 200 comments, etc.)

The exporter callback replies with whatever data it has for that email address and page and whether it is done or not. If a exporter callback reports that it is not done, it will be called again (in a separate request) with the page parameter incremented by 1. Exporter callbacks are expected to return an array of items for the export. Each item contains an a group identifier for the group of which  
the item is a part (e.g. comments, posts, orders, etc.), an optional group label (translated), an item identifier (e.g. comment-133) and then an array of name, value pairs containing the data to be exported for that item.

It is noteworthy that the value could be a media path, in which case a link to the media file will be added to the index HTML page in the export.

When all the exporters have been called to completion, WordPress first assembles an “index” HTML document that serves as the heart of the export report. If a plugin reports additional data for an item that WordPress or another plugin has already added, all the data for that item will be presented together.

Exports are cached on the server for 3 days and then deleted.

A plugin can register one or more exporters, but most plugins will only need one. Let’s work on a hypothetical plugin which adds location data for the commenter to comments.

First, let’s assume the plugin has used `add\_comment\_meta` to add location data using `meta\_key`s of `latitude` and `longitude`

The first thing the plugin needs to do is to create an exporter function that accepts an email address and a page, e.g.:

```php
/**
 * Export user meta for a user using the supplied email.
 *
 * @param string $email_address   email address to manipulate
 * @param int    $page            pagination
 *
 * @return array
 */
function wporg_export_user_data_by_email( $email_address, $page = 1 ) {
	$number = 500; // Limit us to avoid timing out
	$page   = (int) $page;

	$export_items = array();

	$comments = get_comments(
		array(
			'author_email' => $email_address,
			'number'       => $number,
			'paged'        => $page,
			'order_by'     => 'comment_ID',
			'order'        => 'ASC',
		)
	);

	foreach ( (array) $comments as $comment ) {
		$latitude  = get_comment_meta( $comment->comment_ID, 'latitude', true );
		$longitude = get_comment_meta( $comment->comment_ID, 'longitude', true );

		// Only add location data to the export if it is not empty.
		if ( ! empty( $latitude ) ) {
			// Most item IDs should look like postType-postID. If you don't have a post, comment or other ID to work with,
			// use a unique value to avoid having this item's export combined in the final report with other items
			// of the same id.
			$item_id = "comment-{$comment->comment_ID}";

			// Core group IDs include 'comments', 'posts', etc. But you can add your own group IDs as needed
			$group_id = 'comments';

			// Optional group label. Core provides these for core groups. If you define your own group, the first
			// exporter to include a label will be used as the group label in the final exported report.
			$group_label = __( 'Comments', 'text-domain' );

			// Plugins can add as many items in the item data array as they want.
			$data = array(
				array(
					'name'  => __( 'Commenter Latitude', 'text-domain' ),
					'value' => $latitude,
				),
				array(
					'name'  => __( 'Commenter Longitude', 'text-domain' ),
					'value' => $longitude,
				),
			);

			$export_items[] = array(
				'group_id'    => $group_id,
				'group_label' => $group_label,
				'item_id'     => $item_id,
				'data'        => $data,
			);
		}
	}

	// Tell core if we have more comments to work on still.
	$done = count( $comments ) > $number;
	return array(
		'data' => $export_items,
		'done' => $done,
	);
}
```

The next thing the plugin needs to do is to register the callback by filtering the exporter array using the `wp\_privacy\_personal\_data\_exporters` filter.

When registering you provide a friendly name for the export (to aid in debugging – this friendly name is not shown to anyone at this time) and the callback, e.g.

```php
/**
 * Registers all data exporters.
 *
 * @param array $exporters
 *
 * @return mixed
 */
function wporg_register_user_data_exporters( $exporters ) {
	$exporters['my-plugin-slug'] = array(
		'exporter_friendly_name' => __( 'Comment Location Plugin', 'text-domain' ),
		'callback'               => 'my_plugin_exporter',
	);
	return $exporters;
}

add_filter( 'wp_privacy_personal_data_exporters', 'wporg_register_user_data_exporters' );
```

And that’s all there is to it! Your plugin will now provide data for the export!

---

# Adding the Personal Data Eraser to Your Plugin <a name="plugins/privacy/adding-the-personal-data-eraser-to-your-plugin" />

Source: https://developer.wordpress.org/plugins/privacy/adding-the-personal-data-eraser-to-your-plugin/

In WordPress 4.9.6, new tools were added to make compliance easier with laws like the European Union’s General Data Protection Regulation, or GDPR for short. Among the tools added is a Personal Data Removal tool which supports erasing/anonymizing personal data for a given user. It does NOT delete registered user accounts – that is still a separate step the admin can choose whether or not to do.

In addition to the personal data stored in things like WordPress comments, plugins can also hook into the eraser feature to erase the personal data they collect, whether it be in something like postmeta or even an entirely new Custom Post Type (CPT).

Like the exporters, the “key” for all the erasers is the user’s email address – this was chosen because it supports erasing personal data for both full-fledged registered users and also unregistered users (e.g. like a logged out commenter).

However, since performing a personal data erase is a destructive process, we don’t want to just do it without confirming the request, so the admin-facing user interface starts all requests by having the admin enter the username or email address making the request and then sends then a link to click to confirm their request. Once a request has been confirmed, the admin can kick off personal data erasure for the user, or force one if the need arises.

The way the personal data export is erased is similar to how the personal data exporters – and relies on hooking “eraser” callbacks to do the dirty work of erasing the data. When the admin clicks on the remove personal data link, an AJAX loop begins that iterates over all the erasers registered in the system, one at a time. In addition to erasers built into core, plugins can register their own eraser callbacks.

The eraser callback interface is designed to be as simple as possible. An eraser callback receives the email address we are working with, and a page parameter as well. The page parameter (which starts at 1) is used to avoid plugins potentially causing timeouts by attempting to erase all the personal data they’ve collected at once. A well behaved plugin will limit the amount of data it attempts to erase per page (e.g. 100 posts, 200 comments, etc.)

The eraser callback replies whether items containing personal data were erased, whether any items containing personal data were retained, an array of messages to present to the admin (explaining why items that were retained were retained) and whether it is done or not. If an eraser callback reports that it is not done, it will be called again (in a separate request) with the page parameter incremented by 1.

When all the exporters have been called to completion, the admin user interface is updated to show whether or not all personal data found was erased, and any messages explaining why personal data was retained.

Let’s work on a hypothetical plugin which adds commenter location data to comments. Let’s assume the plugin has used `add_comment_meta` to add location data using `meta_ke`ys of `latitude` and `longitude`

The first thing the plugin needs to do is to create an eraser function that accepts an email address and a page, e.g.:

```php
/**
 * Removes any stored location data from a user's comment meta for the supplied email address.
 *
 * @param string $email_address   email address to manipulate
 * @param int    $page            pagination
 *
 * @return array
 */
function wporg_remove_location_meta_from_comments_for_email( $email_address, $page = 1 ) {
	$number = 500; // Limit us to avoid timing out
	$page   = (int) $page;

	$comments = get_comments(
		array(
			'author_email' => $email_address,
			'number'       => $number,
			'paged'        => $page,
			'order_by'     => 'comment_ID',
			'order'        => 'ASC',
		)
	);

	$items_removed = false;

	foreach ( (array) $comments as $comment ) {
		$latitude  = get_comment_meta( $comment->comment_ID, 'latitude', true );
		$longitude = get_comment_meta( $comment->comment_ID, 'longitude', true );

		if ( ! empty( $latitude ) ) {
			delete_comment_meta( $comment->comment_ID, 'latitude' );
			$items_removed = true;
		}

		if ( ! empty( $longitude ) ) {
			delete_comment_meta( $comment->comment_ID, 'longitude' );
			$items_removed = true;
		}
	}

	// Tell core if we have more comments to work on still
	$done = count( $comments ) < $number;
	return array(
		'items_removed'  => $items_removed,
		'items_retained' => false, // always false in this example
		'messages'       => array(), // no messages in this example
		'done'           => $done,
	);
}
```

The next thing the plugin needs to do is to register the callback by filtering the eraser array using the `wp\_privacy\_personal\_data\_erasers`  
filter.

When registering you provide a friendly name for the eraser (to aid in debugging – this friendly name is not shown to anyone at this time) and the callback, e.g.

```php
/**
 * Registers all data erasers.
 *
 * @param array $exporters
 *
 * @return mixed
 */
function wporg_register_privacy_erasers( $erasers ) {
	$erasers['my-plugin-slug'] = array(
		'eraser_friendly_name' => __( 'Comment Location Plugin', 'text-domain' ),
		'callback'             => 'wporg_remove_location_meta_from_comments_for_email',
	);
	return $erasers;
}

add_filter( 'wp_privacy_personal_data_erasers', 'wporg_register_privacy_erasers' );
```

And that’s all there is to it! Your plugin will now clean up its personal data!

---

# Privacy Related Options, Hooks and Capabilities <a name="plugins/privacy/privacy-related-options-hooks-and-capabilities" />

Source: https://developer.wordpress.org/plugins/privacy/privacy-related-options-hooks-and-capabilities/

The privacy tools were originally introduced in WordPress 4.9.6. These tools are designed to allow (and encourage) developers to use them as part of the Privacy Exporter, Privacy Eraser and the Privacy Policy Guide.

Since then, several newer hooks have been introduced to expand on the available capabilities. These hooks allow developers to include additional personal data in export and erasure requests, and introduce suggested content for the privacy policy guide.

Along with the ability to control these tools, there are several new filters for use with the request and confirmation emails, enabling finer-grained controls over these notifications.

## Options

`wp_page_for_privacy_policy` – contains the page ID of a site’s privacy page

## Actions

`user_request_action_confirmed` – fired when a user confirms a privacy request

`wp_privacy_delete_old_export_files` – a scheduled action used to prune old exports from the personal data exports folder

`wp_privacy_personal_data_erased` – fired after the last page of the last eraser is complete

`wp_privacy_personal_data_export_file` – used to create a personal data export file as part of the export flow

`wp_privacy_personal_data_export_file_created` – fires after a personal data export file has been created

## Filters

`privacy_policy_url` – filters the URL of the privacy policy page.

`the_privacy_policy_link` – filters the privacy policy page link HTML.

`wp_get_default_privacy_policy_content` – filters the default content suggested for inclusion through the privacy policy guide.

`user_request_action_confirmed_message` – allows modifying the action confirmation message displayed to the user

`user_request_action_description` – filters the user action description.

`user_request_action_email_content` – filters the text of the email sent when an account action is attempted.

`user_request_action_email_headers` – filters the headers of the email sent when an account action is attempted.

`user_request_action_email_subject` – filters the subject of the email sent when an account action is attempted.

`user_request_confirmed_email_content` – filters the body of the user request confirmation email.

`user_request_confirmed_email_headers` – filters the headers of the user request confirmation email.

`user_request_confirmed_email_subject` – filters the subject of the user request confirmation email.

`user_request_confirmed_email_to` – filters the recipient of the data request confirmation notification.

`user_request_key_expiration` – filters the expiration time of confirmation keys for user requests.

`wp_privacy_additional_user_profile_data` – filter to extend the user’s profile data for the privacy exporter.

`wp_privacy_export_expiration` – controls how old export files are allowed to get, default is 3 days

`wp_privacy_personal_data_email_content` – allows modifying the email message send to users with their personal data export file link

`wp_privacy_personal_data_email_headers` – filters the headers of the email sent with a personal data export file.

`wp_privacy_personal_data_email_subject` – filters the subject of the email sent when an export request is completed.

`wp_privacy_personal_data_email_to` – filters the recipient of the personal data export email notification.

 `wp_privacy_personal_data_email_to` should be used with great caution to avoid sending the data export link to the wrong recipient email address(es).

`wp_privacy_personal_data_erasers` – supports registration of core and plugin personal data erasers

`wp_privacy_personal_data_erasure_page` – Filters a page of personal data eraser data. Allows the erasure response to be consumed by destinations in addition to Ajax.

`wp_privacy_personal_data_exporters` – supports registration of core and plugin personal data exporters

`wp_privacy_personal_data_export_page` – filters a page of personal data exporter data. Used to build the export report. Allows the export response to be consumed by destinations in addition to Ajax.

`wp_privacy_anonymize_data` – filters the anonymous data for each type.

`wp_privacy_exports_dir` – filters the directory used to store personal data export files.

`wp_privacy_exports_url` – filters the URL of the directory used to store personal data export files.

`user_confirmed_action_email_content` – Filters the body of the user request confirmation email. The email is sent to an administrator when an user request is confirmed.

`user_erasure_fulfillment_email_to` – Filters the recipient of the data erasure fulfillment notification.

`user_erasure_complete_email_subject` – Filters the subject of the email sent when an erasure request is completed.

`user_confirmed_action_email_content` – Filters the body of the data erasure fulfillment notification. The email is sent to a user when a their data erasure request is fulfilled by an administrator.

`user_erasure_complete_email_headers` – Filters the headers of the data erasure fulfillment notification.

## Capabilities

Access to the privacy tools is controlled by a few new capabilities. Administrators (on non-multisite installations) have these capabilities by default. These capabilities are:

`erase_others_personal_data` – determines if the Erase Personal Data sub-menu is available under Tools

`export_others_personal_data` – determines if the Export Personal Data sub-menu is available under Tools

`manage_privacy_options` – determines if the Privacy sub-menu is available under Settings

---

# Administration Menus <a name="plugins/administration-menus" />

Source: https://developer.wordpress.org/plugins/administration-menus/

Administration Menus are the interfaces displayed in WordPress Administration. They allow you to add option pages for your plugin.

  
For information on managing Navigation Menus, see the Navigation Menus chapter of the Theme Developer Handbook.  

## Top-Level Menus and Sub-Menus

The Top-level menus are rendered along the left side of the WordPress Administration. Each menu may contain a set of Sub-menus.

When deciding between [Top-level menus](#plugins/administration-menus/top-level-menus) and [Sub-menus](#plugins/administration-menus/sub-menus) think carefully about the needs of your plugin as well as the needs of your end users.

  
We recommend developers with a single option page to add it as Sub-menu to one of the existing Top-level menus; such as Settings or Tools.

---

# Top-Level Menus <a name="plugins/administration-menus/top-level-menus" />

Source: https://developer.wordpress.org/plugins/administration-menus/top-level-menus/

## Add a Top-Level Menu

To add a new Top-level menu to WordPress Administration, use the [add\_menu\_page()](#reference/functions/add_menu_page) function.

```php
add_menu_page(
    string $page_title,
    string $menu_title,
    string $capability,
    string $menu_slug,
    callable $function = '',
    string $icon_url = '',
    int $position = null
);
```

### Example

Lets say we want to add a new Top-level menu called “WPOrg”.

**The first step** will be creating a function which will output the HTML. In this function we will perform the necessary security checks and render the options we’ve registered using the [Settings API](#plugins/settings).

We recommend wrapping your HTML using a `<div>` with a class of `wrap`.

```php
function wporg_options_page_html() {
    ?>
    <div class="wrap">
      <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
      <form action="options.php" method="post">
        <?php
        // output security fields for the registered setting "wporg_options"
        settings_fields( 'wporg_options' );
        // output setting sections and their fields
        // (sections are registered for "wporg", each field is registered to a specific section)
        do_settings_sections( 'wporg' );
        // output save settings button
        submit_button( __( 'Save Settings', 'textdomain' ) );
        ?>
      </form>
    </div>
    <?php
}
```

**The second step** will be registering our WPOrg menu. The registration needs to occur during the `admin_menu` action hook.

```php
add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'WPOrg',
        'WPOrg Options',
        'manage_options',
        'wporg',
        'wporg_options_page_html',
        plugin_dir_url(__FILE__) . 'images/icon_wporg.png',
        20
    );
}
```

For a list of parameters and what each do please see the [add\_menu\_page()](#reference/functions/add_menu_page) in the reference.

### Using a PHP File for HTML

The best practice for portable code would be to create a Callback that requires/includes your PHP file.

For the sake of completeness and helping you understand legacy code, we will show another way: passing a `PHP file path` as the `$menu_slug` parameter with an `null` `$function` parameter.

```php
add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'WPOrg',
        'WPOrg Options',
        'manage_options',
        plugin_dir_path(__FILE__) . 'admin/view.php',
        null,
        plugin_dir_url(__FILE__) . 'images/icon_wporg.png',
        20
    );
}
```

## Remove a Top-Level Menu

To remove a registered menu from WordPress Administration, use the [remove\_menu\_page()](#reference/functions/remove_menu_page) function.

```php
remove_menu_page(
    string $menu_slug
);
```

  
Removing menus won’t prevent users accessing them directly.  
This should never be used as a way to restrict [user capabilities](#plugins/users/roles-and-capabilities).  

### Example

Lets say we want to remove the “Tools” menu from.

```php
add_action( 'admin_menu', 'wporg_remove_options_page', 99 );
function wporg_remove_options_page() {
    remove_menu_page( 'tools.php' );
}
```

Make sure that the menu have been registered with the `admin_menu` hook before attempting to remove, specify a higher priority number for [add\_action()](#reference/functions/add_action) .

## Submitting forms

To process the submissions of forms on options pages, you will need two things:

1. Use the URL of the page as the `action` attribute of the form.
2. Add a hook with the slug, returned by `add_menu_page`.

  
You only need to follow those steps if you are manually creating forms in the back-end. The [Settings API](#plugins/settings) is the recommended way to do this.  

### Form action attribute

Use the `$menu_slug` parameter of the options page as the first parameter of `<a href="#reference/functions/menu_page_url">menu_page_url()</a>`. By the function will automatically escape URL and echo it by default, so you can directly use it within the `<form>` tag:

```php
<form action="<?php menu_page_url( 'wporg' ) ?>" method="post">
```

### Processing the form

The `$function` you specify while adding the page will only be called once it is time to display the page, which makes it inappropriate if you need to send headers (ex. redirects) back to the browser.

`add_menu_page` returns a `$hookname`, and WordPress triggers the `"load-$hookname"` action before any HTML output. You can use this to assign a function, which could process the form.

  
`"load-$hookname"` will be executed every time before an options page will be displayed, even when the form is not being submitted.  

With the return parameter and action in mind, the example from above would like this:

```php
add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
	$hookname = add_menu_page(
		'WPOrg',
		'WPOrg Options',
		'manage_options',
		'wporg',
		'wporg_options_page_html',
		plugin_dir_url(__FILE__) . 'images/icon_wporg.png',
		20
	);

	add_action( 'load-' . $hookname, 'wporg_options_page_submit' );
}
```

You can program `wporg_options_page_submit` according to your needs, but keep in mind that you must manually perform all necessary checks, including:

1. Whether the form is being submitted (`'POST' === $_SERVER['REQUEST_METHOD']`).
2. [CSRF verification](#plugins/security/nonces)
3. Validation
4. Sanitization

---

# Sub-Menus <a name="plugins/administration-menus/sub-menus" />

Source: https://developer.wordpress.org/plugins/administration-menus/sub-menus/

## Add a Sub-Menu

To add a new Sub-menu to WordPress Administration, use the `add_submenu_page()` function.

```php
add_submenu_page(
	string $parent_slug,
	string $page_title,
	string $menu_title,
	string $capability,
	string $menu_slug,
	callable $function = ''
);
```

### Example

Lets say we want to add a Sub-menu “WPOrg Options” to the “Tools” Top-level menu.

**The first step** will be creating a function which will output the HTML. In this function we will perform the necessary security checks and render the options we’ve registered using the [Settings API](#plugins/settings).

We recommend wrapping your HTML using a `<div>` with a class of `wrap`.

```php
function wporg_options_page_html() {
	// check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			<?php
			// output security fields for the registered setting "wporg_options"
			settings_fields( 'wporg_options' );
			// output setting sections and their fields
			// (sections are registered for "wporg", each field is registered to a specific section)
			do_settings_sections( 'wporg' );
			// output save settings button
			submit_button( __( 'Save Settings', 'textdomain' ) );
			?>
		</form>
	</div>
	<?php
}
```

**The second step** will be registering our WPOrg Options Sub-menu. The registration needs to occur during the `admin_menu` action hook.

```php
function wporg_options_page()
{
	add_submenu_page(
		'tools.php',
		'WPOrg Options',
		'WPOrg Options',
		'manage_options',
		'wporg',
		'wporg_options_page_html'
	);
}
add_action('admin_menu', 'wporg_options_page');
```

For a list of parameters and what each do please see the [add\_submenu\_page()](#reference/functions/add_submenu_page) in the reference.

## Predefined Sub-Menus

Wouldn’t it be nice if we had helper functions that define the `$parent_slug` for WordPress built-in Top-level menus and save us from manually searching it through the source code?

Below is a list of parent slugs and their helper functions:

- [add\_dashboard\_page()](#reference/functions/add_dashboard_page) – `index.php`
- [add\_posts\_page()](#reference/functions/add_posts_page) – `edit.php`
- [add\_media\_page()](#reference/functions/add_media_page) – `upload.php`
- [add\_pages\_page()](#reference/functions/add_pages_page) – `edit.php?post_type=page`
- [add\_comments\_page()](#reference/functions/add_comments_page) – `edit-comments.php`
- [add\_theme\_page()](#reference/functions/add_theme_page) – `themes.php`
- [add\_plugins\_page()](#reference/functions/add_plugins_page) – `plugins.php`
- [add\_users\_page()](#reference/functions/add_users_page) – `users.php`
- [add\_management\_page()](#reference/functions/add_management_page) – `tools.php`
- [add\_options\_page()](#reference/functions/add_options_page) – `options-general.php`
- [add\_options\_page()](#reference/functions/add_options_page) – `settings.php`
- [add\_links\_page()](#reference/functions/add_links_page) – `link-manager.php` – requires a plugin since WP 3.5+
- Custom Post Type – `edit.php?post_type=wporg_post_type`
- Network Admin – `settings.php`

## Remove a Sub-Menu

The process of removing Sub-menus is exactly the same as [removing Top-level menus](#plugins/administration-menus/top-level-menus).

## Submitting forms

The process of handling form submissions within Sub-menus is exactly the same as [Submitting forms within Top-Level Menus](#plugins/administration-menus/top-level-menus).

`add_submenu_page()` along with all functions for pre-defined sub-menus (`add_dashboard_page`, `add_posts_page`, etc.) will return a `$hookname`, which you can use as the first parameter of `add_action` in order to handle the submission of forms within custom pages:

```php
function wporg_options_page() {
	$hookname = add_submenu_page(
		'tools.php',
		'WPOrg Options',
		'WPOrg Options',
		'manage_options',
		'wporg',
		'wporg_options_page_html'
	);

	add_action( 'load-' . $hookname, 'wporg_options_page_html_submit' );
}

add_action('admin_menu', 'wporg_options_page');
```

As always, do not forget to check whether the form is being submitted, do CSRF verification, [validation](#plugins/security/data-validation), and sanitization.

---

# Shortcodes <a name="plugins/shortcodes" />

Source: https://developer.wordpress.org/plugins/shortcodes/

As a security precaution, running PHP inside WordPress content is forbidden; to allow dynamic interactions with the content, Shortcodes were presented in WordPress version 2.5.

Shortcodes are macros that can be used to perform dynamic interactions with the content. i.e creating a gallery from images attached to the post or rendering a video.

## Why Shortcodes?

Shortcodes are a valuable way of keeping content clean and semantic while allowing end users some ability to programmatically alter the presentation of their content.

When the end user adds a photo gallery to their post using a shortcode, they’re using the least data possible to indicate how the gallery should be presented.

Advantages:

- No markup is added to the post content, which means that markup and styling can easily be manipulated on the fly or at a later state.
- Shortcodes can also accept parameters, allowing users to modify how the shortcode behaves on an instance by instance basis.

## Built-in Shortcodes

By default, WordPress includes the following shortcodes:

- `[caption]` – allows you to wrap captions around content
- `[gallery]` – allows you to show image galleries
- `[audio]` – allows you to embed and play audio files
- `[video]` – allows you to embed and play video files
- `[playlist]` – allows you to display collection of audio or video files
- `[embed]` – allows you to wrap embedded items

## Shortcode Best Practices

Best practices for developing shortcodes include the [plugin development best practices](#plugins/the-basics/best-practices) and the list below:

- **Always return!**  
    Shortcodes are essentially filters, so creating “[side effects](https://en.wikipedia.org/wiki/Side_effect_(computer_science))” will lead to unexpected bugs.
- Prefix your shortcode names to avoid collisions with other plugins.
- Sanitize the input and escape the output.
- Provide users with clear documentation on all shortcode attributes.

## Quick Reference

See the complete example of using a [basic shortcode structure, taking care of self-closing and enclosing scenarios, shortcodes within shortcodes and securing output](#plugins/shortcodes/shortcodes-with-parameters).

## External Resources

- [WordPress Shortcodes Generator](http://generatewp.com/shortcodes/)

---

# Basic Shortcodes <a name="plugins/shortcodes/basic-shortcodes" />

Source: https://developer.wordpress.org/plugins/shortcodes/basic-shortcodes/

## Add a Shortcode

It is possible to add your own shortcodes by using the Shortcode API. The process involves registering a callback `$func` to a shortcode `$tag` using `add_shortcode()`.

```php
add_shortcode(
    string $tag,
    callable $func
);
```

`[wporg]` is your new shortcode. The use of the shortcode will trigger the `wporg_shortcode` callback function.

```php
add_shortcode('wporg', 'wporg_shortcode');
function wporg_shortcode( $atts = [], $content = null) {
    // do something to $content
    // always return
    return $content;
}
```

## Remove a Shortcode

It is possible to remove shortcodes by using the Shortcode API. The process involves removing a registered `$tag` using [remove\_shortcode()](#reference/functions/remove_shortcode) .

```php
remove_shortcode(
    string $tag
);
```

Make sure that the shortcode have been registered before attempting to remove. Specify a higher priority number for [add\_action()](#reference/functions/add_action) or hook into an action hook that is run later.

## Check if a Shortcode Exists

To check whether a shortcode has been registered use `shortcode_exists()`.

---

# Enclosing Shortcodes <a name="plugins/shortcodes/enclosing-shortcodes" />

Source: https://developer.wordpress.org/plugins/shortcodes/enclosing-shortcodes/

The are two scenarios for using shortcodes:

- The shortcode is a self-closing tag like we seen in the [Basic Shortcodes](#plugins/shortcodes/basic-shortcodes) section.
- The shortcode is enclosing content.

## Enclosing Content

Enclosing content with a shortcode allows manipulations on the enclosed content.

```php
[wporg]content to manipulate[/wporg]
```

As seen above, all you need to do in order to enclose a section of content is add a beginning `[$tag]` and an end `[/$tag]`, similar to HTML.

## Processing Enclosed Content

Lets get back to our original \[wporg\] shortcode code:

```php
function wporg_shortcode( $atts = array(), $content = null ) {
    // do something to $content
    // always return
    return $content;
}
add_shortcode( 'wporg', 'wporg_shortcode' );
```

Looking at the callback function we see that we chose to accept two parameters, `$atts` and `$content`. The `$content` parameter is going to hold our enclosed content. We will talk about `$atts` later.

The default value of `$content` is set to `null` so we can differentiate between a self-closing tag and enclosing tags by using PHP function [is\_null()](http://php.net/is_null).

The shortcode `[$tag]`, including its content and the end `[/$tag]` will be replaced with the **return value** of the handler function.

  
It is the responsibility of the handler function to [secure the output](#plugins/security/securing-output).  

## Shortcode-ception

The shortcode parser performs a **single pass** on the content of the post.

This means that if the `$content` parameter of a shortcode handler contains another shortcode, it won’t be parsed. In this example, `[shortcode]` will not be processed:

```php
[wporg]another [shortcode] is included[/wporg]
```

Using shortcodes inside other shortcodes is possible by calling `do_shortcode()` on the **final return value** of the handler function.

```php
function wporg_shortcode( $atts = array(), $content = null ) {
	// do something to $content
	// run shortcode parser recursively
	$content = do_shortcode( $content );
	// always return
	return $content;
}
add_shortcode( 'wporg', 'wporg_shortcode' );
```

## Limitations

The shortcode parser is unable to handle mixing of enclosing and non-enclosing forms of the same `[$tag]`.

```php
[wporg] non-enclosed content [wporg]enclosed content[/wporg]
```

Instead of being treated as two shortcodes separated by the text “`non-enclosed content`“, the parser treats this as a single shortcode enclosing “`non-enclosed content [wporg]enclosed content`“.

---

# Shortcodes with Parameters <a name="plugins/shortcodes/shortcodes-with-parameters" />

Source: https://developer.wordpress.org/plugins/shortcodes/shortcodes-with-parameters/

Now that we know how to create a [basic shortcode](#plugins/shortcodes/basic-shortcodes) and how to use it as [self-closing and enclosing](#plugins/shortcodes/enclosing-shortcodes), we will look at using parameters in shortcode `[$tag]` and handler function.

Shortcode `[$tag]` can accept parameters, known as attributes:

```php
[wporg title="WordPress.org"]
Having fun with WordPress.org shortcodes.
[/wporg]
```

Shortcode handler function can accept 3 parameters:

- `$atts` – array – \[$tag\] attributes
- `$content` – string – The content inside your shortcode. In the example above, it will be “Having fun with WordPress.org shortcodes.”
- `$tag` – string – the name of the \[$tag\] (i.e. the name of the shortcode)

```php
function wporg_shortcode( $atts = array(), $content = null, $tag = '' ) {}
```

## Parsing Attributes

For the user, shortcodes are just strings with square brackets inside the post content. The user have no idea which attributes are available and what happens behind the scenes.

For plugin developers, there is no way to enforce a policy on the use of attributes. The user may include one attribute, two or none at all.

To gain control of how the shortcodes are used:

- Declare default parameters for the handler function
- Performing normalization of the key case for the attributes array with [array\_change\_key\_case()](http://php.net/manual/en/function.array-change-key-case.php)
- Parse attributes using [shortcode\_atts()](#reference/functions/shortcode_atts) providing default values array and user `$atts`
- [Secure the output](#plugins/security/securing-output) before returning it

## Complete Example

Complete example using a basic shortcode structure, taking care of self-closing and enclosing scenarios and securing output.

A `[wporg]` shortcode that will accept a title and will display a box that we can style with CSS.

```php
/**
 * The [wporg] shortcode.
 *
 * Accepts a title and will display a box.
 *
 * @param array  $atts    Shortcode attributes. Default empty.
 * @param string $content Shortcode content. Default null.
 * @param string $tag     Shortcode tag (name). Default empty.
 * @return string Shortcode output.
 */
function wporg_shortcode( $atts = [], $content = null, $tag = '' ) {
	// normalize attribute keys, lowercase
	$atts = array_change_key_case( (array) $atts, CASE_LOWER );

	// override default attributes with user attributes
	$wporg_atts = shortcode_atts(
		array(
			'title' => 'WordPress.org',
		), $atts, $tag
	);

	// start box
	$o = '<div class="wporg-box">';

	// title
	$o .= '<h2>' . esc_html( $wporg_atts['title'] ) . '</h2>';

	// enclosing tags
	if ( ! is_null( $content ) ) {
		// $content here holds everything in between the opening and the closing tags of your shortcode. eg.g [my-shortcode]content[/my-shortcode].
        // Depending on what your shortcode supports, you will parse and append the content to your output in different ways.
		// In this example, we just secure output by executing the_content filter hook on $content.
		$o .= apply_filters( 'the_content', $content );
	}

	// end box
	$o .= '</div>';

	// return output
	return $o;
}

/**
 * Central location to create all shortcodes.
 */
function wporg_shortcodes_init() {
	add_shortcode( 'wporg', 'wporg_shortcode' );
}

add_action( 'init', 'wporg_shortcodes_init' );
```

---

# TinyMCE Enhanced Shortcodes <a name="plugins/shortcodes/tinymce-enhanced-shortcodes" />

Source: https://developer.wordpress.org/plugins/shortcodes/tinymce-enhanced-shortcodes/

It’s possible to parse shortcodes within the visual editor of TinyMCE and make them render actual content, rather than the shortcode itself.

Switching to the `Text` tab allows you to see the actual shortcode again.

Below are the built-in WordPress shortcodes that use this functionality.

## Audio Shortcode

The `[audio]` shortcode allows you to embed a single audio file.

![](https://i0.wp.com/developer.wordpress.org/files/2014/09/shortcodes-tinymce-enhanced-shortcodes-01.png?resize=1260%2C318&ssl=1)

## Caption Shortcode

The `[caption]` shortcode wraps the image in a div and puts a `<p class="wp-caption-text">` tag around the caption.

![](https://i0.wp.com/developer.wordpress.org/files/2014/09/shortcodes-tinymce-enhanced-shortcodes-02.png?resize=737%2C502&ssl=1)

## Gallery Shortcode

The `[gallery]` shortcode allows you to embed several images at once in a div.

![](https://i0.wp.com/developer.wordpress.org/files/2014/09/shortcodes-tinymce-enhanced-shortcodes-03.png?resize=1006%2C912&ssl=1)

## Playlist Shortcode

The `[playlist]` shortcode allows you to attach more than one media file and render with an html5 playlist.

![](https://i0.wp.com/developer.wordpress.org/files/2014/09/shortcodes-tinymce-enhanced-shortcodes-04.png?resize=1272%2C730&ssl=1)

## Video Shortcode

The `[video]` shortcode is very similar to the `[audio]` shortcode, it simply renders a video instead of audio.

![](https://i0.wp.com/developer.wordpress.org/files/2014/09/shortcodes-tinymce-enhanced-shortcodes-05.png?resize=1270%2C940&ssl=1)

---

# Settings <a name="plugins/settings" />

Source: https://developer.wordpress.org/plugins/settings/

WordPress provides two core APIs to make the administrative interfaces easy to build, secure, and consistent with the design of WordPress Administration.

The [Settings API](#plugins/settings/settings-api) focuses on providing a way for developers to create forms and manage form data.

The [Options API](#plugins/settings/options-api) focuses on managing data using a simple key/value system.

## Quick Reference

See the complete example of [building a custom settings page](#plugins/settings/custom-settings-page) using the Settings API and Options API.

---

# Using Settings API <a name="plugins/settings/using-settings-api" />

Source: https://developer.wordpress.org/plugins/settings/using-settings-api/

## Adding Settings

You must define a new setting using [register\_setting()](#reference/functions/register_setting) , it will create an entry in the `{$wpdb->prefix}_options` table.

You can add new sections on existing pages using [add\_settings\_section()](#reference/functions/add_settings_section) .

You can add new fields to existing sections using [add\_settings\_field()](#reference/functions/add_settings_field) .

  
[register\_setting()](#reference/functions/register_setting) as well as the mentioned `add_settings_*()` functions should all be added to the `admin_init` action hook.  

### Add a Setting

```php
register_setting(<br></br>    string $option_group,<br></br>    string $option_name,<br></br>    array $args = []<br></br>);
```

Please refer to the Function Reference about [register\_setting()](#reference/functions/register_setting) for full explanation about the used parameters.

### Add a Section

```php
add_settings_section(<br></br>    string $id,<br></br>    string $title,<br></br>    callable $callback,<br></br>    string $page,<br></br>    array $args = []<br></br>);
```

Sections are the groups of settings you see on WordPress settings pages with a shared heading. In your plugin you can add new sections to existing settings pages rather than creating a whole new page. This makes your plugin simpler to maintain and creates fewer new pages for users to learn.

Please refer to the Function Reference about [add\_settings\_section()](#reference/functions/add_settings_section) for full explanation about the used parameters.

### Add a Field

```php
add_settings_field(
    string $id,
    string $title,
    callable $callback,
    string $page,
    string $section = 'default',
    array $args = []
);
```

Please refer to the Function Reference about [add\_settings\_field()](#reference/functions/add_settings_field) for full explanation about the used parameters.

### Example

```php
function wporg_settings_init() {
	// register a new setting for "reading" page
	register_setting('reading', 'wporg_setting_name');

	// register a new section in the "reading" page
	add_settings_section(
		'wporg_settings_section',
		'WPOrg Settings Section', 'wporg_settings_section_callback',
		'reading'
	);

	// register a new field in the "wporg_settings_section" section, inside the "reading" page
	add_settings_field(
		'wporg_settings_field',
		'WPOrg Setting', 'wporg_settings_field_callback',
		'reading',
		'wporg_settings_section'
	);
}

/**
 * register wporg_settings_init to the admin_init action hook
 */
add_action('admin_init', 'wporg_settings_init');

/**
 * callback functions
 */

// section content cb
function wporg_settings_section_callback() {
	echo '<p>WPOrg Section Introduction.</p>';
}

// field content cb
function wporg_settings_field_callback() {
	// get the value of the setting we've registered with register_setting()
	$setting = get_option('wporg_setting_name');
	// output the field
	?>
	<input type="text" name="wporg_setting_name" value="<?php echo isset( $setting ) ? esc_attr( $setting ) : ''; ?>">
    <?php
}
```

## Getting Settings

```php
get_option(
    string $option,
    mixed $default = false
);
```

Getting settings is accomplished with the [get\_option()](#reference/functions/get_option) function.  
The function accepts two parameters: the name of the option and an optional default value for that option.

### Example

```php
// Get the value of the setting we've registered with register_setting()
$setting = get_option('wporg_setting_name');
```

---

# Options API <a name="plugins/settings/options-api" />

Source: https://developer.wordpress.org/plugins/settings/options-api/

The Options API, added in WordPress 1.0, allows creating, reading, updating and deleting of WordPress options. In combination with the [Settings API](#plugins/settings/settings-api) it allows controlling of options defined in settings pages.

## Where Options are Stored?

Options are stored in the `{$wpdb->prefix}_options` table. `$wpdb->prefix` is defined by the `$table_prefix` variable set in the `wp-config.php` file.

## How Options are Stored?

Options may be stored in the WordPress database in one of two ways: as a single value or as an array of values.

### Single Value

When saved as a single value, the option name refers to a single value.

```php
// add a new option
add_option('wporg_custom_option', 'hello world!');
// get an option
$option = get_option('wporg_custom_option');
```

### Array of Values

When saved as an array of values, the option name refers to an array, which itself may be comprised key/value pairs.

```php
// array of options
$data_r = array('title' => 'hello world!', 1, false );
// add a new option
add_option('wporg_custom_option', $data_r);
// get an option
$options_r = get_option('wporg_custom_option');
// output the title
echo esc_html($options_r['title']);
```

If you are working with a large number of related options, storing them as an array can have a positive impact on overall performance.

  
Accessing data as individual options may result in many individual database transactions, and as a rule, database transactions are expensive operations (in terms of time and server resources). When you store or retrieve an array of options, it happens in a single transaction, which is ideal.  

## Function Reference

| Add Option | Get Option | Update Option | Delete Option |
|---|---|---|---|
| [add\_option()](#reference/functions/add_option) | [get\_option()](#reference/functions/get_option) | [update\_option()](#reference/functions/update_option) | [delete\_option()](#reference/functions/delete_option) |
| [add\_site\_option()](#reference/functions/add_site_option) | [get\_site\_option()](#reference/functions/get_site_option) | [update\_site\_option()](#reference/functions/update_site_option) | [delete\_site\_option()](#reference/functions/delete_site_option) |

---

# Settings API <a name="plugins/settings/settings-api" />

Source: https://developer.wordpress.org/plugins/settings/settings-api/

The Settings API, added in WordPress 2.7, allows admin pages containing settings forms to be managed semi-automatically. It lets you define settings pages, sections within those pages and fields within the sections.

New settings pages can be registered along with sections and fields inside them. Existing settings pages can also be added to by registering new settings sections or fields inside of them.

Organizing registration and validation of fields still requires some effort from developers, but avoids a lot of complex debugging of underlying options management.

  
When using the Settings API, the form POST to `wp-admin/options.php` which provides fairly strict capabilities checking. Users will need the `manage_options` capability (and in Multisite will have to be a Super Admin) to submit the form.  

## Why Use the Setting API?

A developer *could* ignore this API and write their own settings page without it. That begs the question, what benefit does this API bring to the table? Following is a quick rundown of some of the benefits.

### Visual Consistency

Using the API to generate your interface elements guarantees that your settings page will look like the rest of the administrative content. Your interface will follow the same styleguide and look like it belongs, and thanks to the talented team of WordPress designers, it’ll look awesome!

### Robustness (Future-Proofing!)

Since the API is part of WordPress Core, any updates will automatically consider your plugin’s settings page. If you make your own interface without using Setting API, WordPress Core updates are more likely to break your customizations. There is also a wider audience testing and maintaining that API code, so it will tend to be more stable.

### Less Work!

Of course the most immediate benefit is that the WordPress API does a lot of work for you under the hood. Here are a few examples of things the Settings API does besides applying an awesome-looking, integrated design.

- **Handling Form Submissions –** Let WordPress handle retrieving and storing your $\_POST submissions.
- **Include Security Measures –** You get extra security measures such as nonces, etc. for free.
- **Sanitizing Data –** You get access to the same methods that the rest of WordPress uses for ensuring strings are safe to use.

## Function Reference

| Setting Register/Unregister | Add Field/Section |
|---|---|
| [register\_setting()](#reference/functions/register_setting)    [unregister\_setting()](#reference/functions/unregister_setting) | [add\_settings\_section()](#reference/functions/add_settings_section)    [add\_settings\_field()](#reference/functions/add_settings_field) |

| Options Form Rendering | Errors |
|---|---|
| [settings\_fields()](#reference/functions/settings_fields)    [do\_settings\_sections()](#reference/functions/do_settings_sections)    [do\_settings\_fields()](#reference/functions/do_settings_fields) | [add\_settings\_error()](#reference/functions/add_settings_error)    [get\_settings\_errors()](#reference/functions/get_settings_errors)    [settings\_errors()](#reference/functions/settings_errors) |

---

# Custom Settings Page <a name="plugins/settings/custom-settings-page" />

Source: https://developer.wordpress.org/plugins/settings/custom-settings-page/

Creating a custom settings page includes the combination of: [creating an administration menu](#plugins/administration-menus), [using Settings API](#plugins/settings/using-settings-api) and [Options API](#plugins/settings/options-api).

  
Please read these chapters before attempting to create your own settings page.  

The example below can be used for quick reference on these topics by following the comments.

## Complete Example

Complete example which adds a Top-Level Menu named `WPOrg`, registers a custom option named `wporg_options` and performs the CRUD (create, read, update, delete) logic using Settings API and Options API (including showing error/update messages).

```php
/**
 * @internal never define functions inside callbacks.
 * these functions could be run multiple times; this would result in a fatal error.
 */

/**
 * custom option and settings
 */
function wporg_settings_init() {
	// Register a new setting for "wporg" page.
	register_setting( 'wporg', 'wporg_options' );

	// Register a new section in the "wporg" page.
	add_settings_section(
		'wporg_section_developers',
		__( 'The Matrix has you.', 'wporg' ), 'wporg_section_developers_callback',
		'wporg'
	);

	// Register a new field in the "wporg_section_developers" section, inside the "wporg" page.
	add_settings_field(
		'wporg_field_pill', // As of WP 4.6 this value is used only internally.
		                        // Use $args' label_for to populate the id inside the callback.
			__( 'Pill', 'wporg' ),
		'wporg_field_pill_cb',
		'wporg',
		'wporg_section_developers',
		array(
			'label_for'         => 'wporg_field_pill',
			'class'             => 'wporg_row',
			'wporg_custom_data' => 'custom',
		)
	);
}

/**
 * Register our wporg_settings_init to the admin_init action hook.
 */
add_action( 'admin_init', 'wporg_settings_init' );

/**
 * Custom option and settings:
 *  - callback functions
 */

/**
 * Developers section callback function.
 *
 * @param array $args  The settings array, defining title, id, callback.
 */
function wporg_section_developers_callback( $args ) {
	?>
	<p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'Follow the white rabbit.', 'wporg' ); ?></p>
	<?php
}

/**
 * Pill field callbakc function.
 *
 * WordPress has magic interaction with the following keys: label_for, class.
 * - the "label_for" key value is used for the "for" attribute of the <label>.
 * - the "class" key value is used for the "class" attribute of the <tr> containing the field.
 * Note: you can add custom key value pairs to be used inside your callbacks.
 *
 * @param array $args
 */
function wporg_field_pill_cb( $args ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'wporg_options' );
	?>
	<select
			id="<?php echo esc_attr( $args['label_for'] ); ?>"
			data-custom="<?php echo esc_attr( $args['wporg_custom_data'] ); ?>"
			name="wporg_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
		<option value="red" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'red', false ) ) : ( '' ); ?>>
			<?php esc_html_e( 'red pill', 'wporg' ); ?>
		</option>
 		<option value="blue" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'blue', false ) ) : ( '' ); ?>>
			<?php esc_html_e( 'blue pill', 'wporg' ); ?>
		</option>
	</select>
	<p class="description">
		<?php esc_html_e( 'You take the blue pill and the story ends. You wake in your bed and you believe whatever you want to believe.', 'wporg' ); ?>
	</p>
	<p class="description">
		<?php esc_html_e( 'You take the red pill and you stay in Wonderland and I show you how deep the rabbit-hole goes.', 'wporg' ); ?>
	</p>
	<?php
}

/**
 * Add the top level menu page.
 */
function wporg_options_page() {
	add_menu_page(
		'WPOrg',
		'WPOrg Options',
		'manage_options',
		'wporg',
		'wporg_options_page_html'
	);
}

/**
 * Register our wporg_options_page to the admin_menu action hook.
 */
add_action( 'admin_menu', 'wporg_options_page' );

/**
 * Top level menu callback function
 */
function wporg_options_page_html() {
	// check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	// add error/update messages

	// check if the user have submitted the settings
	// WordPress will add the "settings-updated" $_GET parameter to the url
	if ( isset( $_GET['settings-updated'] ) ) {
		// add settings saved message with the class of "updated"
		add_settings_error( 'wporg_messages', 'wporg_message', __( 'Settings Saved', 'wporg' ), 'updated' );
	}

	// show error/update messages
	settings_errors( 'wporg_messages' );
	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			<?php
			// output security fields for the registered setting "wporg"
			settings_fields( 'wporg' );
			// output setting sections and their fields
			// (sections are registered for "wporg", each field is registered to a specific section)
			do_settings_sections( 'wporg' );
			// output save settings button
			submit_button( 'Save Settings' );
			?>
		</form>
	</div>
	<?php
}
```

---

# Metadata <a name="plugins/metadata" />

Source: https://developer.wordpress.org/plugins/metadata/

Metadata is information about information. In the case of WordPress, it’s information associated with posts, users, comments and terms.

Given the many-to-one relationship of metadata in WordPress, your options are fairly limitless. You can have as many meta options as you wish, and you can store just about anything in there.

This chapter will discuss [managing post metadata](#plugins/metadata/managing-post-metadata), [creating custom meta boxes](#plugins/metadata/custom-meta-boxes), and [rendering post metadata](#plugins/metadata/rendering-post-metadata).

---

# Managing Post Metadata <a name="plugins/metadata/managing-post-metadata" />

Source: https://developer.wordpress.org/plugins/metadata/managing-post-metadata/

## Adding Metadata

Adding metadata can be done quite easily with [add\_post\_meta()](#reference/functions/add_post_meta) . The function accepts a `post_id`, a `meta_key`, a `meta_value`, and a `unique` flag.

The `meta_key` is how your plugin will reference the meta value elsewhere in your code. Something like `mycrazymetakeyname` would work, however a prefix related to your plugin or theme followed by a description of the key would be more useful. `wporg_featured_menu` might be a good one. It should be noted that the same `meta_key` may be used multiple times to store variations of the metadata (see the unique flag below).

The `meta_value` can be a string, integer, or an array. If it’s an array, it will be automatically serialized before being stored in the database.

The `unique` flag allows you to declare whether this key should be unique. A **non** unique key is something a post can have multiple variations of, like price.  
If you only ever want **one** price for a post, you should flag it `unique` and the `meta_key` will have one value only.

## Updating Metadata

If a key already exists and you want to update it, use [update\_post\_meta()](#reference/functions/update_post_meta) . If you use this function and the key does **NOT** exist, then it will create it, as if you’d used [add\_post\_meta()](#reference/functions/add_post_meta) .

Similar to [add\_post\_meta()](#reference/functions/add_post_meta) , the function accepts a `post_id`, a `meta_key`, and `meta_value`. It also accepts an optional `prev_value` – which, if specified, will cause the function to only update existing metadata entries with this value. If it isn’t provided, the function defaults to updating all entries.

## Deleting Metadata

[delete\_post\_meta()](#reference/functions/delete_post_meta) takes a `post_id`, a `meta_key`, and optionally `meta_value`. It does exactly what the name suggests.

## Character Escaping

Post meta values are passed through the [stripslashes()](http://php.net/manual/en/function.stripslashes.php) function upon being stored, so you will need to be careful when passing in values (such as JSON) that might include escaped characters.

Consider the JSON value `{"key":"value with \"escaped quotes\""}`:

```php
$escaped_json = '{"key":"value with \"escaped quotes\""}';
update_post_meta( $id, 'escaped_json', $escaped_json );
$broken = get_post_meta( $id, 'escaped_json', true );
/*
$broken, after stripslashes(), ends up unparsable:
{"key":"value with "escaped quotes""}
*/
```

### Workaround

By adding one more level of escaping using the function [wp\_slash()](#reference/functions/wp_slash) (introduced in WP 3.6), you can compensate for the call to [stripslashes()](http://php.net/manual/en/function.stripslashes.php):

```php
$escaped_json = '{"key":"value with \"escaped quotes\""}';
update_post_meta( $id, 'double_escaped_json', wp_slash( $escaped_json ) );
$fixed = get_post_meta( $id, 'double_escaped_json', true );
/*
$fixed, after stripslashes(), ends up as desired:
{"key":"value with \"escaped quotes\""}
*/
```

## Hidden Custom Fields

If you are a plugin or theme developer and you are planning to use custom fields to store parameters, it is important to note that WordPress will not show custom fields which have `meta_key` starting with an “\_” (underscore) in the custom fields list on the post edit screen or when using the [the\_meta()](#reference/functions/the_meta) template function.

This can be useful in order to show these custom fields in an unusual way by using the [add\_meta\_box()](#reference/functions/add_meta_box) function.

The example below will add a unique custom field with the `meta_key` name ‘\_color’ and the `meta_value` of ‘red’ but this custom field will not display in the post edit screen:

```php
add_post_meta( 68, '_color', 'red', true );
```

### Hidden Arrays

In addition, if the `meta_value` is an array, it will not be displayed on the page edit screen, even if you don’t prefix the `meta_key` name with an underscore.

---

# Custom Meta Boxes <a name="plugins/metadata/custom-meta-boxes" />

Source: https://developer.wordpress.org/plugins/metadata/custom-meta-boxes/

## What is a Meta Box?

When a user edits a post, the edit screen is composed of several default boxes: Editor, Publish, Categories, Tags, etc. These boxes are meta boxes. Plugins can add custom meta boxes to an edit screen of any post type.

The content of custom meta boxes are usually HTML form elements where the user enters data related to a Plugin’s purpose, but the content can be practically any HTML you desire.

## Why Use Meta Boxes?

Meta boxes are handy, flexible, modular edit screen elements that can be used to collect information related to the post being edited. Your custom meta box will be on the same screen as all the other post related information; so a clear relationship is established.

Meta boxes are easily hidden from users that do not need to see them, and displayed to those that do. Meta boxes can be user-arranged on the edit screen. The users are free to arrange the edit screen in a way that suits them, giving users control over their editing environment.

  
All examples on this page are for illustration purposes only. The code is not suitable for production environments. Operations such as [securing input](../../plugin-security/securing-input/), [user capabilities](#plugins/security/checking-user-capabilities), [nonces](#plugins/security/nonces), and [internationalization](../internationalization/) have been intentionally omitted. Be sure to always address these important operations.

## Adding Meta Boxes

To create a meta box use the [add\_meta\_box()](#reference/functions/add_meta_box) function and plug its execution to the `<a href="#reference/hooks/add_meta_boxes">add_meta_boxes</a>` action hook.

The following example is adding a meta box to the `post` edit screen and the `wporg_cpt` edit screen.

```php
function wporg_add_custom_box() {
	$screens = [ 'post', 'wporg_cpt' ];
	foreach ( $screens as $screen ) {
		add_meta_box(
			'wporg_box_id',                 // Unique ID
			'Custom Meta Box Title',      // Box title
			'wporg_custom_box_html',  // Content callback, must be of type callable
			$screen                            // Post type
		);
	}
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box' );
```

The `wporg_custom_box_html` function will hold the HTML for the meta box.

The following example is adding form elements, labels, and other HTML elements.

```php
function wporg_custom_box_html( $post ) {
	?>
	<label for="wporg_field">Description for this field</label>
	<select name="wporg_field" id="wporg_field" class="postbox">
		<option value="">Select something...</option>
		<option value="something">Something</option>
		<option value="else">Else</option>
	</select>
	<?php
}

```

  
**Note there are no submit buttons in meta boxes.** The meta box HTML is included inside the edit screen’s form tags, all the post data including meta box values are transfered via `POST` when the user clicks on the Publish or Update buttons.  

The example shown here only contains one form field, a drop down list. You may create as many as needed in any particular meta box. If you have a lot of fields to display, consider using multiple meta boxes, grouping similar fields together in each meta box. This helps keep the page more organized and visually appealing.

### Getting Values

To retrieve saved user data and make use of it, you need to get it from wherever you saved it initially. If it was stored in the `postmeta` table, you may get the data with [get\_post\_meta()](#reference/functions/get_post_meta) .

The following example enhances the previous form elements with pre-populated data based on saved meta box values. You will learn how to save meta box values in the next section.

```php
function wporg_custom_box_html( $post ) {
	$value = get_post_meta( $post->ID, '_wporg_meta_key', true );
	?>
	<label for="wporg_field">Description for this field</label>
	<select name="wporg_field" id="wporg_field" class="postbox">
		<option value="">Select something...</option>
		<option value="something" <?php selected( $value, 'something' ); ?>>Something</option>
		<option value="else" <?php selected( $value, 'else' ); ?>>Else</option>
	</select>
	<?php
}

```

More on the [selected()](#reference/functions/selected) function.

### Saving Values

When a post type is saved or updated, several actions fire, any of which might be appropriate to hook into in order to save the entered values. In this example we use the `save_post` action hook but other hooks may be more appropriate for certain situations. Be aware that `save_post` may fire more than once for a single update event. Structure your approach to saving data accordingly.

You may save the entered data anywhere you want, even outside WordPress. Since you are probably dealing with data related to the post, the `postmeta` table is often a good place to store data.

The following example will save the `wporg_field` field value in the `_wporg_meta_key` meta key, which is hidden.

```php
function wporg_save_postdata( $post_id ) {
	if ( array_key_exists( 'wporg_field', $_POST ) ) {
		update_post_meta(
			$post_id,
			'_wporg_meta_key',
			$_POST['wporg_field']
		);
	}
}
add_action( 'save_post', 'wporg_save_postdata' );
```

In production code, remember to follow the security measures outlined in the info box!

## Behind the Scenes

You don’t normally need to be concerned about what happens behind the scenes. This section was added for completeness.

When a post edit screen wants to display all the meta boxes that were added to it, it calls the [do\_meta\_boxes()](#reference/functions/do_meta_boxes) function. This function loops through all meta boxes and invokes the `callback` associated with each.  
In between each call, intervening markup (such as divs, titles, etc.) is added.

## Removing Meta Boxes

To remove an existing meta box from an edit screen use the [remove\_meta\_box()](#reference/functions/remove_meta_box) function. The passed parameters must exactly match those used to add the meta box with [add\_meta\_box()](#reference/functions/add_meta_box) .

To remove default meta boxes check the source code for the parameters used. The default [add\_meta\_box()](#reference/functions/add_meta_box) calls are made from `wp-includes/edit-form-advanced.php`.

## Implementation Variants

So far we’ve been using the procedural technique of implementing meta boxes. Many plugin developers find the need to implement meta boxes using various other techniques.

### OOP

Adding meta boxes using OOP is easy and saves you from having to worry about naming collisions in the global namespace.  
To save memory and allow easier implementation, the following example uses an abstract Class with static methods.

```php
abstract class WPOrg_Meta_Box {

	/**
	 * Set up and add the meta box.
	 */
	public static function add() {
		$screens = [ 'post', 'wporg_cpt' ];
		foreach ( $screens as $screen ) {
			add_meta_box(
				'wporg_box_id',          // Unique ID
				'Custom Meta Box Title', // Box title
				[ self::class, 'html' ],   // Content callback, must be of type callable
				$screen                  // Post type
			);
		}
	}

	/**
	 * Save the meta box selections.
	 *
	 * @param int $post_id  The post ID.
	 */
	public static function save( int $post_id ) {
		if ( array_key_exists( 'wporg_field', $_POST ) ) {
			update_post_meta(
				$post_id,
				'_wporg_meta_key',
				$_POST['wporg_field']
			);
		}
	}

	/**
	 * Display the meta box HTML to the user.
	 *
	 * @param WP_Post $post   Post object.
	 */
	public static function html( $post ) {
		$value = get_post_meta( $post->ID, '_wporg_meta_key', true );
		?>
		<label for="wporg_field">Description for this field</label>
		<select name="wporg_field" id="wporg_field" class="postbox">
			<option value="">Select something...</option>
			<option value="something" <?php selected( $value, 'something' ); ?>>Something</option>
			<option value="else" <?php selected( $value, 'else' ); ?>>Else</option>
		</select>
		<?php
	}
}

add_action( 'add_meta_boxes', [ 'WPOrg_Meta_Box', 'add' ] );
add_action( 'save_post', [ 'WPOrg_Meta_Box', 'save' ] );

```

### AJAX

Since the HTML elements of the meta box are inside the `form` tags of the edit screen, the default behavior is to parse meta box values from the `$_POST` super global *after the user have submitted the page*.

You can enhance the default experience with AJAX; this allows to perform actions based on user input and behavior; regardless if they’ve submitted the page.

#### Define a Trigger

First, you must define the trigger, this can be a link click, a change of a value or any other JavaScript event.

In the example below we will define `change` as our trigger for performing an AJAX request.

```js
/*jslint browser: true, plusplus: true */
(function ($, window, document) {
    'use strict';
    // execute when the DOM is ready
    $(document).ready(function () {
        // js 'change' event triggered on the wporg_field form field
        $('#wporg_field').on('change', function () {
            // our code
        });
    });
}(jQuery, window, document));
```

#### Client Side Code

Next, we need to define what we want the trigger to do, in other words we need to write our client side code.

In the example below we will make a `POST` request, the response will either be success or failure, this will indicate wither the value of the `wporg_field` is valid.

```js
/*jslint browser: true, plusplus: true */
(function ($, window, document) {
    'use strict';
    // execute when the DOM is ready
    $(document).ready(function () {
        // js 'change' event triggered on the wporg_field form field
        $('#wporg_field').on('change', function () {
            // jQuery post method, a shorthand for $.ajax with POST
            $.post(wporg_meta_box_obj.url,                        // or ajaxurl
                   {
                       action: 'wporg_ajax_change',                // POST data, action
                       wporg_field_value: $('#wporg_field').val(), // POST data, wporg_field_value
                       post_ID: jQuery('#post_ID').val()           // The ID of the post currently being edited
                   }, function (data) {
                        // handle response data
                        if (data === 'success') {
                            // perform our success logic
                        } else if (data === 'failure') {
                            // perform our failure logic
                        } else {
                            // do nothing
                        }
                    }
            );
        });
    });
}(jQuery, window, document));
```

We took the WordPress AJAX file URL dynamically from the `wporg_meta_box_obj` JavaScript custom object that we will create in the next step.

  
If your meta box only requires the WordPress AJAX file URL; instead of creating a new custom JavaScript object you could use the `ajaxurl` predefined JavaScript variable.  
**Available only in the WordPress Administration.** Make sure it is not empty before performing any logic.  

#### Enqueue Client Side Code

Next step is to put our code into a script file and enqueue it on our edit screens.

In the example below we will add the AJAX functionality to the edit screens of the following post types: post, wporg\_cpt.

The script file will reside at `/plugin-name/admin/meta-boxes/js/admin.js`,  
`plugin-name` being the main plugin folder,  
`/plugin-name/plugin.php` the file calling the function.

```php
function wporg_meta_box_scripts()
{
    // get current admin screen, or null
    $screen = get_current_screen();
    // verify admin screen object
    if (is_object($screen)) {
        // enqueue only for specific post types
        if (in_array($screen->post_type, ['post', 'wporg_cpt'])) {
            // enqueue script
            wp_enqueue_script('wporg_meta_box_script', plugin_dir_url(__FILE__) . 'admin/meta-boxes/js/admin.js', ['jquery']);
            // localize script, create a custom js object
            wp_localize_script(
                'wporg_meta_box_script',
                'wporg_meta_box_obj',
                [
                    'url' => admin_url('admin-ajax.php'),
                ]
            );
        }
    }
}
add_action('admin_enqueue_scripts', 'wporg_meta_box_scripts');
```

#### Server Side Code

The last step is to write our server side code that is going to handle the request.

```php
// The piece after `wp_ajax_`  matches the action argument being sent in the POST request.
add_action( 'wp_ajax_wporg_ajax_change', 'my_ajax_handler' );
 
/**
 * Handles my AJAX request.
 */
function my_ajax_handler() {
    // Handle the ajax request here
    if ( array_key_exists( 'wporg_field_value', $_POST ) ) {
        $post_id = (int) $_POST['post_ID'];
        if ( current_user_can( 'edit_post', $post_id ) ) {
            update_post_meta(
                $post_id,
                '_wporg_meta_key',
                $_POST['wporg_field_value']
            );
        }
    }
 
    wp_die(); // All ajax handlers die when finished
}
```

As a final reminder, the code illustrated on this page lacks important operations that take care of security. Be sure your production code includes such operations.

See [Handbook’s AJAX Chapter](#plugins/javascript/ajax) and the [Codex](https://codex.wordpress.org/AJAX_in_Plugins) for more on AJAX.

## More Information

- [Complex Meta Boxes in WordPress](http://www.wproots.com/complex-meta-boxes-in-wordpress/)
- [How To Create Custom Post Meta Boxes In WordPress](http://wp.smashingmagazine.com/2011/10/04/create-custom-post-meta-boxes-wordpress/)
- [WordPress Meta Boxes: a Comprehensive Developer’s Guide](http://themefoundation.com/wordpress-meta-boxes-guide/)

---

# Rendering Post Metadata <a name="plugins/metadata/rendering-post-metadata" />

Source: https://developer.wordpress.org/plugins/metadata/rendering-post-metadata/

Here is a non exhaustive list of functions and [template tags](#themes/basics/template-tags) used to get and render Post Metadata:

- [the\_meta() ](#reference/functions/the_meta)– Template tag that automatically lists all Custom Fields of a post
- [get\_post\_custom()](#reference/functions/get_post_custom) and [get\_post\_meta()](#reference/functions/get_post_meta) – Retrieves one or all metadata of a post.
- [get\_post\_custom\_values()](#reference/functions/get_post_custom_values) – Retrieves values for a custom post field.

---

# Custom Post Types <a name="plugins/post-types" />

Source: https://developer.wordpress.org/plugins/post-types/

WordPress stores the Post Types in the `posts` table allowing developers to register Custom Post Types along the ones that already exist.

This chapter will show you how to [register Custom Post Types](#plugins/post-types/registering-custom-post-types), how to [retrieve their content from the database, and how to render them to the public](#plugins/post-types/working-with-custom-post-types).

---

# Registering Custom Post Types <a name="plugins/post-types/registering-custom-post-types" />

Source: https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/

WordPress comes with five default post types: `post`, `page`, `attachment`, `revision`, and `menu`.

While developing your plugin, you may need to create your own specific content type: for example, products for an e-commerce website, assignments for an e-learning website, or movies for a review website.

Using Custom Post Types, you can register your own post type. Once a custom post type is registered, it gets a new top-level administrative screen that can be used to manage and create posts of that type.

To register a new post type, you use the [register\_post\_type()](#reference/functions/register_post_type) function.

  
We recommend that you put custom post types in a plugin rather than a theme. This ensures that user content remains portable even if the theme is changed.  

The following minimal example registers a new post type, Products, which is identified in the database as `wporg_product`.

```php
function wporg_custom_post_type() {
	register_post_type('wporg_product',
		array(
			'labels'      => array(
				'name'          => __('Products', 'textdomain'),
				'singular_name' => __('Product', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
		)
	);
}
add_action('init', 'wporg_custom_post_type');

```

Please visit the reference page for [register\_post\_type()](#reference/functions/register_post_type) for the description of arguments.

  
You must call `register_post_type()` before the `<a href="#reference/hooks/admin_init">admin_init</a>` hook and after the `<a href="#reference/hooks/after_setup_theme">after_setup_theme</a>` hook. A good hook to use is the `<a href="#reference/hooks/init">init</a>` action hook.  

## Naming Best Practices

It is important that you prefix your post type functions and identifiers with a short prefix that corresponds to your plugin, theme, or website.

  
**Make sure your custom post type identifier does not exceed 20 characters** as the `post_type` column in the database is currently a VARCHAR field of that length.  

  
**To ensure forward compatibility**, do not use **wp\_** as your identifier — it is being used by WordPress core.  

  
If your identifier is too generic (for example: “`product`“), it may conflict with other plugins or themes that have chosen to use that same identifier.  

  
**Solving duplicate post type identifiers is not possible without disabling one of the conflicting post types.**

## URLs

A custom post type gets its own slug within the site URL structure.

A post of type `wporg_product` will use the following URL structure by default: `http://example.com/wporg_product/%product_name%`.

`wporg_product` is the slug of your custom post type and `%product_name%` is the slug of your particular product.

The final permalink would be: `http://example.com/wporg_product/wporg-is-awesome`.

You can see the permalink on the edit screen for your custom post type, just like with default post types.

### A Custom Slug for a Custom Post Type

To set a custom slug for the slug of your custom post type all you need to do is add a key =&gt; value pair to the `rewrite` key in the `register_post_type()` arguments array.

Example:

```php
function wporg_custom_post_type() {
	register_post_type('wporg_product',
		array(
			'labels'      => array(
				'name'          => __( 'Products', 'textdomain' ),
				'singular_name' => __( 'Product', 'textdomain' ),
			),
			'public'      => true,
			'has_archive' => true,
			'rewrite'     => array( 'slug' => 'products' ), // my custom slug
		)
	);
}
add_action('init', 'wporg_custom_post_type');

```

The above will result in the following URL structure: `http://example.com/products/%product_name%`

  
Using a generic slug like `products` can potentially conflict with other plugins or themes, so try to use one that is more specific to your content.  

  
Unlike the custom post type identifiers, the duplicate slug problem can be solved easily by changing the slug for one of the conflicting post types. If the plugin author included an `apply_filters()` call on the arguments, this can be done programmatically by overriding the arguments submitted via the `register_post_type()` function.

---

# Working with Custom Post Types <a name="plugins/post-types/working-with-custom-post-types" />

Source: https://developer.wordpress.org/plugins/post-types/working-with-custom-post-types/

## Custom Post Type Templates

You can create custom [templates](https://make.wordpress.org/docs/theme-developer-handbook/theme-basics/theme-files/) for your custom post types. In the same way posts and their archives can be displayed using `single.php` and `archive.php`, you can create the templates:

- `single-{post_type}.php` – for single posts of a custom post type
- `archive-{post_type}.php` – for the archive

Where `{post_type}` is the post type identifier, used as the `$post_type` argument of the `register_post_type()` function.

Building upon what we’ve learned previously, you could create `single-wporg_product.php` and `archive-wporg_product.php` template files for single product posts and the archive.

Alternatively, you can use the [is\_post\_type\_archive()](#reference/functions/is_post_type_archive) function in any template file to check if the query shows an archive page of a given post type, and the [post\_type\_archive\_title()](#reference/functions/post_type_archive_title) function to display the post type title.

## Querying by Post Type

You can query posts of a specific type by passing the `post_type` key in the arguments array of the `WP_Query` class constructor.

```php
<?php
$args = array(
	'post_type'      => 'product',
	'posts_per_page' => 10,
);
$loop = new WP_Query($args);
while ( $loop->have_posts() ) {
	$loop->the_post();
	?>
	<div class="entry-content">
		<?php the_title(); ?>
		<?php the_content(); ?>
	</div>
	<?php
}
```

This loops through the latest ten product posts and displays the title and content of them one by one.

## Altering the Main Query

Registering a custom post type does not mean it gets added to the main query automatically.

If you want your custom post type posts to show up on standard archives or include them on your home page mixed up with other post types, use the `<a href="#reference/hooks/pre_get_posts">pre_get_posts</a>` action hook.

The next example will show posts from `post`, `page` and `movie` post types on the home page:

```php
function wporg_add_custom_post_types($query) {
	if ( is_home() && $query->is_main_query() ) {
		$query->set( 'post_type', array( 'post', 'page', 'movie' ) );
	}
	return $query;
}
add_action('pre_get_posts', 'wporg_add_custom_post_types');
```

---

# Taxonomies <a name="plugins/taxonomies" />

Source: https://developer.wordpress.org/plugins/taxonomies/

A **Taxonomy** is a fancy word for the classification/grouping of things. Taxonomies can be hierarchical (with parents/children) or flat.

WordPress stores the Taxonomies in the `term_taxonomy` database table allowing developers to register Custom Taxonomies along the ones that already exist.

Taxonomies have **Terms** which serve as the topic by which you classify/group things. They are stored inside the `terms` table.

For example: a Taxonomy named “Art” can have multiple Terms, such as “Modern” and “18th Century”.

This chapter will show you how to register Custom Taxonomies, how to retrieve their content from the database, and how to render them to the public.

  
WordPress 3.4 and earlier had a Taxonomy named “Links” which was deprecated in WordPress 3.5.

---

# Working with Custom Taxonomies <a name="plugins/taxonomies/working-with-custom-taxonomies" />

Source: https://developer.wordpress.org/plugins/taxonomies/working-with-custom-taxonomies/

## Introduction to Taxonomies

To understand what Taxonomies are and what they do please read the [Taxonomy](#plugins/taxonomies) introduction.

## Custom Taxonomies

As classification systems go, “Categories” and “Tags” aren’t very structured, so it may be beneficial for a developer to create their own.

WordPress allows developers to create **Custom Taxonomies**. Custom Taxonomies are useful when one wants to create distinct naming systems and make them accessible behind the scenes in a predictable way.

## Why Use Custom Taxonomies?

You might ask, “Why bother creating a Custom Taxonomy, when I can organize by Categories and Tags?”

Well… let’s use an example. Suppose we have a client that is a chef who wants you to create a website where she’ll feature original recipes.

One way to organize the website might be to create a Custom Post Type called “Recipes” to store her recipes. Then create a Taxonomy “Courses” to separate “Appetizers” from “Desserts”, and finally a Taxonomy “Ingredients” to separate “Chicken” from “Chocolate” dishes.

These groups *could* be defined using Categories or Tags, you could have a “Courses” Category with Subcategories for “Appetizers” and “Desserts”, and an “Ingredients” Category with Subcategories for each ingredient.

The main advantage of using Custom Taxonomies is that you can reference “Courses” and “Ingredients” independently of Categories and Tags. They even get their own menus in the Administration area.

In addition, creating Custom Taxonomies allows you to build custom interfaces which will ease the life of your client and make the process of inserting data intuitive to their business nature.

Now imagine that these Custom Taxonomies and the interface is implemented inside a plugin; you’ve just built your own Recipes plugin that can be reused on any WordPress website.

## Example: Courses Taxonomy

The following example will show you how to create a plugin which adds a Custom Taxonomy “Courses” to the default `post` Post Type. Note that the code to add custom taxonomies does not have to be in its own plugin; it can be included in a theme or as part of an existing plugin if desired.

Please make sure to read the [Plugin Basics](#plugin/the-basics "Plugin Basics") chapter before attempting to create your own plugin.

### Step 1: Before You Begin

Go to **Posts &gt; Add New** page. You will notice that you only have Categories and Tags.

[![No Custom Taxonomy Meta Box (Yet)](https://i0.wp.com/make.wordpress.org/docs/files/2014/02/no-custom-taxonomy-meta-box.png?ssl=1)](https://i0.wp.com/make.wordpress.org/docs/files/2014/02/no-custom-taxonomy-meta-box.png?ssl=1)

### Step 2: Creating a New Plugin

Register the Taxonomy “course” for the post type “post” using the `init` action hook.

```php
/*
* Plugin Name: Course Taxonomy
* Description: A short example showing how to add a taxonomy called Course.
* Version: 1.0
* Author: developer.wordpress.org
* Author URI: https://codex.wordpress.org/User:Aternus
*/

function wporg_register_taxonomy_course() {
	 $labels = array(
		 'name'              => _x( 'Courses', 'taxonomy general name' ),
		 'singular_name'     => _x( 'Course', 'taxonomy singular name' ),
		 'search_items'      => __( 'Search Courses' ),
		 'all_items'         => __( 'All Courses' ),
		 'parent_item'       => __( 'Parent Course' ),
		 'parent_item_colon' => __( 'Parent Course:' ),
		 'edit_item'         => __( 'Edit Course' ),
		 'update_item'       => __( 'Update Course' ),
		 'add_new_item'      => __( 'Add New Course' ),
		 'new_item_name'     => __( 'New Course Name' ),
		 'menu_name'         => __( 'Course' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
		 'rewrite'           => [ 'slug' => 'course' ],
	 );
	 register_taxonomy( 'course', [ 'post' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_course' );
```

### Step 3: Review the Result

Activate your plugin, then go to **Posts &gt; Add New**. You should see a new meta box for your “Courses” Taxonomy.

[![courses_taxonomy_post_screen](https://i0.wp.com/make.wordpress.org/docs/files/2014/02/courses_taxonomy_post_screen-1024x545.png?resize=1024%2C545&ssl=1)](https://i0.wp.com/make.wordpress.org/docs/files/2014/02/courses_taxonomy_post_screen.png?ssl=1)

### Code Breakdown

The following discussion breaks down the code used above describing the functions and parameters.

The function `wporg_register_taxonomy_course` contains all the steps necessary for registering a Custom Taxonomy.

The `$labels` array holds the labels for the Custom Taxonomy.  
These labels will be used for displaying various information about the Taxonomy in the Administration area.

The `$args` array holds the configuration options that will be used when creating our Custom Taxonomy.

The function [register\_taxonomy()](#reference/functions/register_taxonomy) creates a new Taxonomy with the identifier `course` for the `post` Post Type using the `$args` array for configuration.

The function [add\_action()](#reference/functions/add_action) ties the `wporg_register_taxonomy_course` function execution to the `init` action hook.

#### $args

The $args array holds important configuration for the Custom Taxonomy, it instructs WordPress how the Taxonomy should work.

Take a look at [register\_taxonomy()](#reference/functions/register_taxonomy) function for a full list of accepted parameters and what each of these do.

### Summary

With our Courses Taxonomy example, WordPress will automatically create an archive page and child pages for the `course` Taxonomy.

The archive page will be at `/course/` with child pages spawning under it using the Term’s slug (`/course/%%term-slug%%/`).

## Using Your Taxonomy

WordPress has **many** functions for interacting with your Custom Taxonomy and the Terms within it.

Here are some examples:

- `the_terms`: Takes a Taxonomy argument and renders the terms in a list.
- `wp_tag_cloud`: Takes a Taxonomy argument and renders a tag cloud of the terms.
- `is_taxonomy`: Allows you to determine if a given taxonomy exists.

---

# Term Splitting (WordPress 4.2) <a name="plugins/taxonomies/split-terms-wp-4-2" />

Source: https://developer.wordpress.org/plugins/taxonomies/split-terms-wp-4-2/

This information is here for historical purposes. If you’re not interested in how terms worked prior to 2015, you can skip this section.

## Prior to WordPress 4.2

Terms in different taxonomies with the same slug shared a single term ID. For instance, a tag and a category with the slug “news” had the same term ID.

## WordPress 4.2+

Beginning with 4.2, when one of these shared terms is updated, it will be split: the updated term will be assigned a new term ID.

## What does it mean for you?

In the vast majority of situations, this update was seamless and uneventful. However, some plugins and themes who store term IDs in options, post meta, user meta, or elsewhere might have been affected.

## Handling the Split

WordPress 4.2 includes two different tools to help authors of plugins and themes with the transition.

### The `split_shared_term` hook

When a shared term is assigned a new term ID, a new `split_shared_term` action is fired.

Here are a few examples of how plugin and theme authors can leverage this hook to ensure that stored term IDs are updated.

#### Term ID stored in an option

Let’s say your plugin stores an option called `featured_tags` that contains an array of term IDs (`[4, 6, 10]`) that serve as the query parameter for your homepage featured posts section.

In this example, you’ll hook to `split_shared_term` action, check whether the updated term ID is in the array, and update if necessary.

```php
/**
 * Update featured_tags option when a shared term gets split.
 *
 * @param int    $term_id          ID of the formerly shared term.
 * @param int    $new_term_id      ID of the new term created for the $term_taxonomy_id.
 * @param int    $term_taxonomy_id ID for the term_taxonomy row affected by the split.
 * @param string $taxonomy         Taxonomy for the split term.
 */
function wporg_featured_tags_split( int $term_id, int $new_term_id, int $term_taxonomy_id, string $taxonomy ): void {
	// we only care about tags, so we'll first verify that the taxonomy is post_tag.
	if ( 'post_tag' === $taxonomy ) {

		// get the currently featured tags.
		$featured_tags = get_option( 'featured_tags' );

		// if the updated term is in the array, note the array key.
		$found_term = array_search( $term_id, $featured_tags, true );
		if ( false !== $found_term ) {

			// the updated term is a featured tag! replace it in the array, save the new array.
			$featured_tags[ $found_term ] = $new_term_id;
			update_option( 'featured_tags', $featured_tags );
		}
	}
}
add_action( 'split_shared_term', 'wporg_featured_tags_split', 10, 4 );
```

#### Term ID stored in post meta

Let’s say your plugin stores a term ID in post meta for pages so that you can show related posts for a certain page.

In this case, you need to use the `get_posts()` function to get the pages with your `meta_key` and update the `meta_value` matching the split term ID.

```php
/**
 * Update related posts term ID for pages
 *
 * @param int    $term_id          ID of the formerly shared term.
 * @param int    $new_term_id      ID of the new term created for the $term_taxonomy_id.
 * @param int    $term_taxonomy_id ID for the term_taxonomy row affected by the split.
 * @param string $taxonomy         Taxonomy for the split term.
 */
function wporg_page_related_posts_split( int $term_id, int $new_term_id, int $term_taxonomy_id, string $taxonomy ): void {
	// find all the pages where meta_value matches the old term ID.
	$page_ids = get_posts(
		array(
			'post_type'  => 'page',
			'fields'     => 'ids',
			'meta_key'   => 'meta_key',
			'meta_value' => $term_id,
		)
	);

	// if such pages exist, update the term ID for each page.
	if ( $page_ids ) {
		foreach ( $page_ids as $id ) {
			update_post_meta( $id, 'meta_key', $new_term_id, $term_id );
		}
	}
}
add_action( 'split_shared_term', 'wporg_page_related_posts_split', 10, 4 );
```

### The `wp_get_split_term` function

  
Using the `split_shared_term` hook is the preferred method for processing Term ID changes. However, there may be cases where Terms are split without your plugin having a chance to hook to the `split_shared_term` action.

WordPress 4.2 stores information about taxonomy terms that have been split, and provides the `wp_get_split_term()` utility function to help developers retrieve this information.

Consider the case above, where your plugin stores term IDs in an option named `featured_tags`. You may want to build a function that validates these tag IDs (perhaps to be run on plugin update), to be sure that none of the featured tags has been split:

```php
/**
 * Retrieve information about split terms and udpates the featured_tags option with the new term IDs.
 *
 * @return void
 */
function wporg_featured_tags_check_split() {
	$featured_tag_ids = get_option( 'featured_tags', array() );

	// check to see whether any IDs correspond to post_tag terms that have been split.
	foreach ( $featured_tag_ids as $index => $featured_tag_id ) {
		$new_term_id = wp_get_split_term( $featured_tag_id, 'post_tag' );

		if ( $new_term_id ) {
			$featured_tag_ids[ $index ] = $new_term_id;
		}
	}

	// save
	update_option( 'featured_tags', $featured_tag_ids );
}
```

Note that `wp_get_split_term()` takes two parameters, `$old_term_id` and `$taxonomy` and returns an integer.

If you need to retrieve a list of all split terms associated with an old Term ID, regardless of taxonomy, use `wp_get_split_terms()`.

---

# Users <a name="plugins/users" />

Source: https://developer.wordpress.org/plugins/users/

A *User* is an access account with corresponding capabilities within the WordPress installation. Each WordPress user has, at the bare minimum, a username, password and email address.

Once a user account is created, that user may log in using the WordPress Admin (or programmatically) to access WordPress functions and data. WordPress stores the Users in the `users` table.

## Roles and Capabilities

Users are assigned [roles](#plugins/users/roles-and-capabilities), and each role has a set of [capabilities](#plugins/users/roles-and-capabilities).

You can create new roles with their own set of capabilities. Custom capabilities can also be created and assigned to existing roles or new roles.

In WordPress, developers can take advantage of user roles to limit the set of actions an account can perform.

## The Principle of Least Privileges

WordPress adheres to the principal of least privileges, the practice of giving a user *only* the privileges that are essential for performing the desired work. You should follow this lead when possible by creating roles where appropriate and checking capabilities before performing sensitive tasks.

---

# Working with Users <a name="plugins/users/working-with-users" />

Source: https://developer.wordpress.org/plugins/users/working-with-users/

## Adding Users

To add a user you can use `wp_create_user()` or `wp_insert_user()`.

`wp_create_user()` creates a user using only the username, password and email parameters while `wp_insert_user()` accepts an array or object describing the user and its properties.

### Create User

`wp_create_user()` allows you to create a new WordPress user.

  
It uses [wp\_slash()](#reference/functions/wp_slash) to escape the values. The PHP compact() function to create an array with these values. The [wp\_insert\_user()](#reference/functions/wp_insert_user) to perform the insert operation.  

Please refer to the Function Reference about `wp_create_user()` for full explanation about the used parameters.

#### Example Create

```php
// check if the username is taken
$user_id = username_exists( $user_name );

// check that the email address does not belong to a registered user
if ( ! $user_id && email_exists( $user_email ) === false ) {
	// create a random password
	$random_password = wp_generate_password( 12, false );
	// create the user
	$user_id = wp_create_user(
		$user_name,
		$random_password,
		$user_email
	);
}
```

### Insert User

```php
wp_insert_user( $userdata );
```

  
The function calls a filter for most predefined properties. The function performs the action `user_register` when creating a user (user ID does not exist).

The function performs the action `profile_update` when updating the user (user ID exists).

Please refer to the Function Reference about `wp_insert_user()` for full explanation about the used parameters.

#### Example Insert

Below is an example showing how to insert a new user with the website profile field filled in.

```php
$username  = $_POST['username'];
$password  = $_POST['password'];
$website   = $_POST['website'];
$user_data = [
	'user_login' => $username,
	'user_pass'  => $password,
	'user_url'   => $website,
];

$user_id = wp_insert_user( $user_data );

// success
if ( ! is_wp_error( $user_id ) ) {
	echo 'User created: ' . $user_id;
}
```

## Updating Users

`wp_update_user()` Updates a single user in the database. The update data is passed along in the `$userdata` array/object.

To update a single piece of user meta data, use `update_user_meta()` instead. To create a new user, use `wp_insert_user()` instead.

  
If current user’s password is being updated, then the cookies will be cleared!  

Please refer to the Function Reference about `wp_update_user()` for full explanation about the used parameters.

#### Example Update

Below is an example showing how to update a user’s website profile field.

```php
$user_id = 1;
$website = 'https://wordpress.org';

$user_id = wp_update_user(
	array(
		'ID'       => $user_id,
		'user_url' => $website,
	)
);

if ( is_wp_error( $user_id ) ) {
	// error
} else {
	// success
}
```

## Deleting Users

`wp_delete_user()` deletes the user and optionally reassign associated entities to another user ID.

  
The function performs the action `deleted_user` after the user have been deleted.  

  
If the $reassign parameter is not set to a valid user ID, then all entities belonging to the deleted user will be deleted!  

Please refer to the Function Reference about `wp_delete_user()` for full explanation about the used parameters.

---

# Working with User Metadata <a name="plugins/users/working-with-user-metadata" />

Source: https://developer.wordpress.org/plugins/users/working-with-user-metadata/

## Introduction

WordPress’ `users` table was designed to contain only the essential information about the user.

  
As of WP 4.7 the table contains: `ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status` and `display_name`.  

Because of this, to store additional data, the `usermeta` table was introduced, which can store any arbitrary amount of data about a user.

Both tables are tied together using one-to-many relationship based on the `ID` in the `users` table.

## Manipulating User Metadata

There are two main ways for manipulating User Metadata.

1. A form field in the user’s profile screen.
2. Programmatically, via a function call.

### via a Form Field

The form field option is suitable for cases where the user will have access to the WordPress admin area, in which he will be able to view and edit profiles.

Before we dive into an example, it’s important to understand the hooks involved in the process and why they are there.

#### `show_user_profile` hook

This action hook is fired whenever a user edits **it’s own** user profile.

**Remember,** a user that doesn’t have the capability of editing his own profile won’t fire this hook.

#### `edit_user_profile` hook

This action hook is fired whenever a user edits a user profile of **somebody else**.

**Remember,** a user that doesn’t have the capability for editing 3rd party profiles won’t fire this hook.

#### Example Form Field

In the example below we will be adding a birthday field to the all profile screens. Saving it to the database on profile updates.

```php
/**
 * The field on the editing screens.
 *
 * @param $user WP_User user object
 */
function wporg_usermeta_form_field_birthday( $user ) {
    ?>
    <h3>It's Your Birthday</h3>
    <table class="form-table">
        <tr>
            <th>
                <label for="birthday">Birthday</label>
            </th>
            <td>
                <input type="date"
                       class="regular-text ltr"
                       id="birthday"
                       name="birthday"
                       value="<?= esc_attr( get_user_meta( $user->ID, 'birthday', true ) ) ?>"
                       title="Please use YYYY-MM-DD as the date format."
                       pattern="(19[0-9][0-9]|20[0-9][0-9])-(1[0-2]|0[1-9])-(3[01]|[21][0-9]|0[1-9])"
                       required>
                <p class="description">
                    Please enter your birthday date.
                </p>
            </td>
        </tr>
    </table>
    <?php
}
 
/**
 * The save action.
 *
 * @param $user_id int the ID of the current user.
 *
 * @return bool Meta ID if the key didn't exist, true on successful update, false on failure.
 */
function wporg_usermeta_form_field_birthday_update( $user_id ) {
    // check that the current user have the capability to edit the $user_id
    if ( ! current_user_can( 'edit_user', $user_id ) ) {
        return false;
    }
 
    // create/update user meta for the $user_id
    return update_user_meta(
        $user_id,
        'birthday',
        $_POST['birthday']
    );
}
 
// Add the field to user's own profile editing screen.
add_action(
    'show_user_profile',
    'wporg_usermeta_form_field_birthday'
);
 
// Add the field to user profile editing screen.
add_action(
    'edit_user_profile',
    'wporg_usermeta_form_field_birthday'
);
 
// Add the save action to user's own profile editing screen update.
add_action(
    'personal_options_update',
    'wporg_usermeta_form_field_birthday_update'
);
 
// Add the save action to user profile editing screen update.
add_action(
    'edit_user_profile_update',
    'wporg_usermeta_form_field_birthday_update'
);
```

### Programmatically

This option is suitable for cases where you’re building a custom user area and/or plan to disable access to the WordPress admin area.

The functions available for manipulating User Metadata are: `<a href="/reference/functions/add_user_meta/">add_user_meta()</a>`, `<a href="/reference/functions/update_user_meta/">update_user_meta()</a>`, `<a href="/reference/functions/delete_user_meta/">delete_user_meta()</a>` and `<a href="/reference/functions/get_user_meta/">get_user_meta()</a>`.

#### Add

```php
add_user_meta(
    int $user_id,
    string $meta_key,
    mixed $meta_value,
    bool $unique = false
);
```

Please refer to the Function Reference about `<a href="/reference/functions/add_user_meta/">add_user_meta()</a>` for full explanation about the used parameters.

#### Update

```php
update_user_meta(
    int $user_id,
    string $meta_key,
    mixed $meta_value,
    mixed $prev_value = ''
);
```

Please refer to the Function Reference about `<a href="/reference/functions/update_user_meta/">update_user_meta()</a>` for full explanation about the used parameters.

#### Delete

```php
delete_user_meta(
    int $user_id,
    string $meta_key,
    mixed $meta_value = ''
);
```

Please refer to the Function Reference about `<a href="/reference/functions/delete_user_meta/">delete_user_meta()</a>` for full explanation about the used parameters.

#### Get

```php
get_user_meta(
    int $user_id,
    string $key = '',
    bool $single = false
);
```

Please refer to the Function Reference about `<a href="/reference/functions/get_user_meta/">get_user_meta()</a>` for full explanation about the used parameters.

Please note, if you pass only the `$user_id`, the function will retrieve all Metadata as an associative array.

You can render User Metadata anywhere in your plugin or theme.

---

# Roles and Capabilities <a name="plugins/users/roles-and-capabilities" />

Source: https://developer.wordpress.org/plugins/users/roles-and-capabilities/

Roles and capabilities are two important aspects of WordPress that allow you to control user privileges.

WordPress stores the Roles and their Capabilities in the `options` table under the `user_roles` key.

## Roles

A role defines a set of capabilities for a user. For example, what the user may see and do in his dashboard.

**By default, WordPress have six roles:**

- Super Admin
- Administrator
- Editor
- Author
- Contributor
- Subscriber

More roles can be added and the default roles can be removed.

![](https://i0.wp.com/developer.wordpress.org/files/2014/09/wp-roles.png?resize=405%2C142&ssl=1)### Adding Roles

Add new roles and assign capabilities to them with [add\_role()](#reference/functions/add_role) .

```php
function wporg_simple_role() {
	add_role(
		'simple_role',
		'Simple Role',
		array(
			'read'         => true,
			'edit_posts'   => true,
			'upload_files' => true,
		),
	);
}

// Add the simple_role.
add_action( 'init', 'wporg_simple_role' );
```

  
After the first call to [add\_role()](#reference/functions/add_role) , the Role and it’s Capabilities will be stored in the database! Sequential calls will do nothing: including altering the capabilities list, which might not be the behavior that you’re expecting.

  
To alter the capabilities list in bulk: remove the role using [remove\_role()](#reference/functions/remove_role) and add it again using [add\_role()](#reference/functions/add_role) with the new capabilities. Make sure to do it only if the capabilities differ from what you’re expecting (i.e. condition this) or you’ll degrade performance considerably!

### Removing Roles

Remove roles with [remove\_role()](#reference/functions/remove_role) .

```php
function wporg_simple_role_remove() {
	remove_role( 'simple_role' );
}

// Remove the simple_role.
add_action( 'init', 'wporg_simple_role_remove' );
```

  
After the first call to [remove\_role()](#reference/functions/remove_role) , the Role and it’s Capabilities will be removed from the database! Sequential calls will do nothing.

  
If you’re removing the default roles: - We advise **against** removing the Administrator and Super Admin roles!
- Make sure to keep the code in your plugin/theme as future WordPress updates may add these roles again.
- Run  
    `update_option('default_role', YOUR_NEW_DEFAULT_ROLE)`  
    since you’ll be deleting `subscriber` which is WP’s default role.

## Capabilities

Capabilities define what a **role** can and can not do: edit posts, publish posts, etc.

  
Custom post types can require a certain set of Capabilities.  

### Adding Capabilities

You may define new capabilities for a role.

Use [get\_role()](#reference/functions/get_role) to get the role object, then use the `add_cap()` method of that object to add a new capability.

```php
function wporg_simple_role_caps() {
	// Gets the simple_role role object.
	$role = get_role( 'simple_role' );

	// Add a new capability.
	$role->add_cap( 'edit_others_posts', true );
}

// Add simple_role capabilities, priority must be after the initial role definition.
add_action( 'init', 'wporg_simple_role_caps', 11 );
```

  
It’s possible to add custom capabilities to any role. Under the default WordPress admin, they would have no effect, but they can be used for custom admin screen and front-end areas.

### Removing Capabilities

You may remove capabilities from a role.

The implementation is similar to Adding Capabilities with the difference being the use of `remove_cap()` method for the role object.

## Using Roles and Capabilities

### Get Role

Get the role object including all of it’s capabilities with [get\_role()](#reference/functions/get_role) .

```php
get_role( $role );
```

### User Can

Check if a user have a specified **role** or **capability** with [user\_can()](#reference/functions/user_can) .

```php
user_can( $user, $capability );
```

  
There is an undocumented, third argument, $args, that may include the object against which the test should be performed. E.g. Pass a post ID to test for the capability of that specific post.

### Current User Can

[current\_user\_can()](#reference/functions/current_user_can) is a wrapper function for [user\_can()](#reference/functions/user_can) using the current user object as the `$user` parameter.

Use this in scenarios where back-end and front-end areas should require a certain level of privileges to access and/or modify.

```php
current_user_can( $capability );
```

### Example

Here’s a practical example of adding an Edit link on the in a template file if the user has the proper capability:

```php
if ( current_user_can( 'edit_posts' ) ) {
	edit_post_link( esc_html__( 'Edit', 'wporg' ), '<p>', '</p>' );
}
```

## Multisite

The [current\_user\_can\_for\_blog()](#reference/functions/current_user_can_for_blog) function is used to test if the current user has a certain **role** or **capability** on a specific blog.

```php
current_user_can_for_blog( $blog_id, $capability );
```

## Reference

Codex Reference for [User Roles and Capabilities](https://wordpress.org/support/article/roles-and-capabilities/).

---

# HTTP API <a name="plugins/http-api" />

Source: https://developer.wordpress.org/plugins/http-api/

## Introduction

HTTP stands for Hypertext Transfer Protocol and is the foundational communication protocol for the entire Internet. Even if this is your first experience with HTTP it’s likely that you probably understand more than you realize. At its most basic level, HTTP works like this:

- “Hello server XYZ, may I please have file abc.html”
- “Well hello there little client, yes you may, here it is”

There are many different methods to send HTTP requests in PHP. The purpose of the WordPress HTTP API is to support as many of those methods as possible and use the one that is the most suitable for the particular request.

The WordPress HTTP API can also be used to communicate and interact with other APIs like the Twitter API or the Google Maps API.

### HTTP methods

HTTP has several methods, or verbs, that describe particular types of actions. Though a couple more exist, WordPress has pre-built functions for three of the most common. Whenever an HTTP request is made a method is also passed with it to help the server determine what kind of action the client is requesting.

#### GET

GET is used to retrieve data. This is by far the most commonly used verb. Every time you view a website or pull data from an API you are seeing the result of a GET request. In fact your browser sent a GET request to the server you are reading this on and requested the data used to build this very article.

#### POST

POST is used to send data to the server for the server to act upon in some way. For example, a contact form. When you enter data into the form fields and click the submit button the browser takes the data and sends a POST request to the server with the text you entered into the form. From there the server will process the contact request.

#### HEAD

HEAD is much less well known than the other two. HEAD is essentially the same as a GET request except that it does not retrieve the data, only information about the data. This data describes such things as when the data was last updated, whether the client should cache the data, what type the data is, etc. Modern browsers often send HEAD requests to pages you have previously visited to determine if there are any updates. If not, you may actually be seeing a previously downloaded copy of the page instead of using bandwidth needlessly pulling in the same copy.

All good API clients utilize HEAD before performing a GET request to potentially save on bandwidth. Though it will require two separate HTTP requests if HEAD says there is new data, the data size with a GET request can be very large. Only using GET when HEAD says the data is new or should not be cached will help save on expensive bandwidth and load times.

#### Custom Methods

There are other HTTP methods, such as PUT, DELETE, TRACE, and CONNECT. These methods will not be covered in this article as there aren’t pre-built methods to utilize them in WordPress, nor is it yet common for APIs to implement them.

Depending upon how your server is configured you can also implement additional HTTP methods of your own. It is always a gamble to go outside of the standard methods, and places huge potential limitations on other developers creating clients to consume your site or API, however it is possible to utilize any method you wish with WordPress. We will briefly touch on how to do that in this article.

### Response codes

HTTP utilizes both numeric and string response codes. Rather than go into a lengthy explanation of each, here are the standard response codes. You can define your own response codes when creating APIs, however unless you need to support specific types of responses it may be best to stick to the standard codes. Custom codes are usually in the 1xx ranges.

#### Code Classes

The type of response can quickly be seen by the leftmost digit of the three digit codes.

| Status Code | Description |
|---|---|
| 2xx | Request was successful |
| 3xx | Request was redirected to another URL |
| 4xx | Request failed due to client error. Usually invalid authentication or missing data |
| 5xx | Request failed due to a server error. Commonly missing or misconfigured configuration files |

 **Common Codes**

These are the most common codes you will encounter.

| Status Code | Description |
|---|---|
| 200 | OK – Request was successful |
| 301 | Resource was moved permanently |
| 302 | Resource was moved temporarily |
| 403 | Forbidden – Usually due to an invalid authentication |
| 404 | Resource not found |
| 500 | Internal server error |
| 503 | Service unavailable |

## GETting data from an API

[GitHub](https://github.com/ "GitHub") provides an excellent API that does not require app registration for many public aspects, so to demonstrate some of these methods, examples will target the GitHub API.

GETting data is made incredibly simple in WordPress through the `<a href="#reference/functions/wp_remote_get" title="wp_remote_get">wp_remote_get()</a>` function. This function takes the following two arguments:

1. $url – Resource to retrieve data from. This must be in a standard HTTP format
2. $args – OPTIONAL – You may pass an array of arguments in here to alter behavior and headers, such as cookies, follow redirects, etc.

The following defaults are assumed, though they can be changed via the $args parameter:

- method – GET
- timeout – 5 – How long to wait before giving up
- redirection – 5 – How many times to follow redirects.
- httpversion – 1.0
- blocking – true – Should the rest of the page wait to finish loading until this operation is complete?
- headers – array()
- body – null
- cookies – array()

Let’s use the URL to a GitHub user account and see what sort of information we can get

```php
$response = wp_remote_get( 'https://api.github.com/users/blobaugh' );
```

  
$response will contain all the headers, content, and other meta data about our request

```php
Array(
	[headers] => Array(
		[server] => nginx
		[date] => Fri, 05 Oct 2012 04:43:50 GMT
		[content-type] => application/json; charset=utf-8
		[connection] => close
		[status] => 200 OK
		[vary] => Accept
		[x-ratelimit-remaining] => 4988
		[content-length] => 594
		[last-modified] => Fri, 05 Oct 2012 04:39:58 GMT
		[etag] => "5d5e6f7a09462d6a2b473fb616a26d2a"
		[x-github-media-type] => github.beta
		[cache-control] => public, s-maxage=60, max-age=60
		[x-content-type-options] => nosniff
		[x-ratelimit-limit] => 5000
	)
	[body] => {"type":"User","login":"blobaugh","gravatar_id":"f25f324a47a1efdf7a745e0b2e3c878f","public_gists":1,"followers":22,"created_at":"2011-05-23T21:38:50Z","public_repos":31,"email":"ben@lobaugh.net","hireable":true,"blog":"http://ben.lobaugh.net","bio":null,"following":30,"name":"Ben Lobaugh","company":null,"avatar_url":"https://secure.gravatar.com/avatar/f25f324a47a1efdf7a745e0b2e3c878f?d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png","id":806179,"html_url":"https://github.com/blobaugh","location":null,"url":"https://api.github.com/users/blobaugh"}
	[response] => Array(
		[preserved_text 5237511b45884ac6db1ff9d7e407f225 /] => 200
		[message] => OK
	)
	[cookies] => Array()
	[filename] =>
)
```

  
All of the same helper functions can be used on this function as with the previous two. The exception here being that HEAD never returns a body, so that element will always be empty.

### GET the body you always wanted

Just the body can be retrieved using `<a href="#reference/functions/wp_remote_retrieve_body" title="wp_remote_retrieve_body">wp_remote_retrieve_body()</a>`. This function takes just one parameter, the response from any of the other [wp\_remote\_X](#) functions where retrieve is not the next value.

```php
$response = wp_remote_get( 'https://api.github.com/users/blobaugh' );
$body     = wp_remote_retrieve_body( $response );
```

  
Still using the GitHub resource from the previous example, $body will be

```php
{"type":"User","login":"blobaugh","public_repos":31,"gravatar_id":"f25f324a47a1efdf7a745e0b2e3c878f","followers":22,"avatar_url":"https://secure.gravatar.com/avatar/f25f324a47a1efdf7a745e0b2e3c878f?d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png","public_gists":1,"created_at":"2011-05-23T21:38:50Z","email":"ben@lobaugh.net","following":30,"name":"Ben Lobaugh","company":null,"hireable":true,"id":806179,"html_url":"https://github.com/blobaugh","blog":"http://ben.lobaugh.net","location":null,"bio":null,"url":"https://api.github.com/users/blobaugh"}
```

  
If you do not have any other operations to perform on the response other than getting the body you can reduce the code to one line with

```php
$body = wp_remote_retrieve_body( wp_remote_get( 'https://api.github.com/users/blobaugh' ) );
```

  
Many of these helper functions can be used on one line similarly.

### GET the response code

You may want to check the response code to ensure your retrieval was successful. This can be done via the `<a href="#reference/functions/wp_remote_retrieve_response_code">wp_remote_retrieve_response_code()</a>` function:

```php
$response = wp_remote_get( 'https://api.github.com/users/blobaugh' );
$http_code = wp_remote_retrieve_response_code( $response );
```

  
If successful `$http_code` will contain `200`.

### GET a specific header

If your desire is to retrieve a specific header, say last-modified, you can do so with `<a href="#reference/functions/wp_remote_retrieve_header">wp_remote_retrieve_header()</a>`. This function takes two parameters

1. `$response` – The response from the get call
2. `$header` – Name of the header to retrieve

To retrieve the last-modified header

```php
$response      = wp_remote_get( 'https://api.github.com/users/blobaugh' );
$last_modified = wp_remote_retrieve_header( $response, 'last-modified' );
```

  
`$last_modified` will contain `[last-modified] => Fri, 05 Oct 2012 04:39:58 GMT`  
You can also retrieve all of the headers in an array with `wp_remote_retrieve_headers( $response )`.

### GET using basic authentication

APIs that are secured more provide one or more of many different types of authentication. A common, though not highly secure, authentication method is HTTP Basic Authentication. It can be used in WordPress by passing ‘Authorization’ to the second parameter of the `<a href="#reference/functions/wp_remote_get">wp_remote_get()</a>` function, as well as the other HTTP method functions.

```php
$args = array(
    'headers' => array(
        'Authorization' => 'Basic ' . base64_encode( YOUR_USERNAME . ':' . YOUR_PASSWORD )
    )
);
wp_remote_get( $url, $args );
```

## POSTing data to an API

The same helper methods (`<a href="#reference/functions/wp_remote_retrieve_body">wp_remote_retrieve_body()</a>`, etc ) are available for all of the HTTP method calls, and utilized in the same fashion.

POSTing data is done using the `<a href="#reference/functions/wp_remote_post">wp_remote_post()</a>` function, and takes exactly the same parameters as `<a href="#reference/functions/wp_remote_get">wp_remote_get()</a>`. It should be noted here that you are required to pass in ALL of the elements in the array for the second parameter. The Codex provides the default acceptable values. You only need to care right now about the data you are sending so the other values will be defaulted.

To send data to the server you will need to build an associative array of data. This data will be assigned to the `'body'` value. From the server side of things the value will appear in the `$_POST` variable as you would expect. i.e. if `body => array( 'myvar' => 5 )` on the server `$_POST['myvar'] = 5`.

Because GitHub does not allow POSTing to the API used in the previous example, this example will pretend that it does. Typically if you want to POST data to an API you will need to contact the maintainers of the API and get an API key or some other form of authentication token. This simply proves that your application is allowed to manipulate data on the API the same way logging into a website as a user does to the website.

Lets assume we are submitting a contact form with the following fields: name, email, subject, comment. To setup the body we do the following:

```php
$body = array(
	'name'    => 'Jane Smith',
	'email'   => 'some@email.com',
	'subject' => 'Checkout this API stuff',
	'comment' => 'I just read a great tutorial. You gotta check it out!',
);
```

  
Now we need to set up the rest of the values that will be passed to the second parameter of `<a href="#reference/functions/wp_remote_post">wp_remote_post()</a>`

```php
$args = array(
	'body'        => $body,
	'timeout'     => '5',
	'redirection' => '5',
	'httpversion' => '1.0',
	'blocking'    => true,
	'headers'     => array(),
	'cookies'     => array(),
);
```

  
Then of course to make the call

```php
$response = wp_remote_post( 'http://your-contact-form.com', $args );
```

## HEADing off bandwidth usage

It can be pretty important, and sometimes required by the API, to check a resource status using HEAD before retrieving it. On high traffic APIs, GET is often limited to a number of requests per minute or hour. There is no need to even attempt a GET request unless the HEAD request shows that the data on the API has been updated.

As mentioned previously, HEAD contains data on whether or not the data has been updated, if the data should be cached, when to expire the cached copy, and sometimes a rate limit on requests to the API.

Going back to the GitHub example, here are few headers to watch out for. Most of these headers are standard, but you should always check the API docs to ensure you understand which headers are named what, and their purpose.

- `x-ratelimit-limit` – Number of requests allowed in a time period
- `x-ratelimit-remaining` – Number of remaining available requests in time period
- `content-length` – How large the content is in bytes. Can be useful to warn the user if the content is fairly large
- `last-modified` – When the resource was last modified. Highly useful to caching tools
- `cache-control` – How should the client handle caching

The following will check the HEAD value of my GitHub user account:

```php
$response = wp_remote_head( 'https://api.github.com/users/blobaugh' );
```

  
$response should look similar to

```php
Array(
	[headers] => Array
		(
		[server] => nginx
		[date] => Fri, 05 Oct 2012 05:21:26 GMT
		[content-type] => application/json; charset=utf-8
		[connection] => close
		[status] => 200 OK
		[vary] => Accept
		[x-ratelimit-remaining] => 4982
		[content-length] => 594
		[last-modified] => Fri, 05 Oct 2012 04:39:58 GMT
		[etag] => "5d5e6f7a09462d6a2b473fb616a26d2a"
		[x-github-media-type] => github.beta
		[cache-control] => public, s-maxage=60, max-age=60
		[x-content-type-options] => nosniff
		[x-ratelimit-limit] => 5000
	)
    [body] =>
    [response] => Array
		(
		[preserved_text 39a8515bd2dce2aa06ee8a2a6656b1de /] => 200
		[message] => OK
	)
    [cookies] => Array(
	)
	[filename] =>
)
```

  
All of the same helper functions can be used on this function as with the previous two. The exception here being that HEAD never returns a body, so that element will always be empty.

## Make any sort of request

If you need to make a request using an HTTP method that is not supported by any of the above functions do not panic. The great people developing WordPress already thought of that and lovingly provided `<a href="#reference/functions/wp_remote_request">wp_remote_request()</a>`. This function takes the same two parameters as `<a href="#reference/functions/wp_remote_get">wp_remote_get()</a>`, and allows you to specify the HTTP method as well. What data you need to pass along is up to your method.

To send a DELETE method example you may have something similar to the following:

```php
$args     = array(
	'method' => 'DELETE',
);
$response = wp_remote_request( 'http://some-api.com/object/to/delete', $args );
```

## Introduction to caching

Caching is a practice whereby commonly used objects or objects requiring significant time to build are saved into a fast object store for quick retrieval on later requests. This prevents the need to spend the time fetching and building the object again. Caching is a vast subject that is part of website optimization and could go into an entire series of articles by itself. What follows is just an introduction to caching and a simple yet effective way to quickly setup a cache for API responses.

Why should you cache API responses? Well, the big elephant in the room is because external APIs slow down your site. Many consultants will tell you tapping into external APIs will improve the performance of your website by reducing the amount of connections and processing it performs, as well as costly bandwidth, but sometimes this is simply not true.

It is a fine balancing act between the speed your server can send data and the amount of time it takes for the remote server to process a request, build the data, and send it back. The second glaring aspect is that many APIs have a limited number of requests in a time period, and possibly a limit to the number of connections by an application at once. Caching helps solve these dilemmas by placing a copy of the data on your server until it needs to be refreshed.

## When should you cache?

The snap answer to this is \*always\*, but again there are times when you should not. If you are dealing with real time data or the API specifically says not to cache in the headers you may not want to cache, but for all other situations it is generally a good idea to cache any resources retrieved from an API.

## WordPress Transients

WordPress Transients provide a convenient way to store and use cached objects. Transients live for a specified amount of time, or until you need them to expire when a resource from the API has been updated. Using the transient functionality in WordPress may be the easiest to use caching system you ever encounter. There are only three functions to do all the heavy lifting for you.

### Cache an object ( Set a transient )

Caching an object is done with the `<a href="#reference/functions/set_transient">set_transient()</a>` function. This function takes the following three parameters:

1. `$transient` – Name of the transient for future reference
2. `$value` – Value of the transient
3. `$expiration` – How many seconds from saving the transient until it expires

An example of caching the GitHub user information response from above for one hour would be

```php
$response = wp_remote_get( 'https://api.github.com/users/blobaugh' );
set_transient( 'prefix_github_userinfo', $response, 60 * 60 );
```

### Get a cached object ( Get a transient )

Getting a cached object is quite a bit more complex than setting a transient. You need to request the transient, but then you also need to check to see if that transient has expired and if so fetch updated data. Usually the `set_transient()` call is made inside of the `get_transient()` call. Here is an example of getting the transient data for the GitHub user profile:

```php
$github_userinfo = get_transient( 'prefix_github_userinfo' );
if ( false === $github_userinfo ) {
	// Transient expired, refresh the data
	$response = wp_remote_get( 'https://api.github.com/users/blobaugh' );
	set_transient( 'prefix_github_userinfo', $response, HOUR_IN_SECONDS );
}
// Use $github_userinfo as you will
```

## Delete a cached object (Delete a transient)

Deleting a cached object is the easiest of all the transient functions, simply pass it a parameter of the name of the transient and you are done.

To remove the Github user info:

```php
delete_transient( 'blobaugh_github_userinfo' );
```

More information on transients can be found [here](#apis/handbook/transients).

---

# REST API <a name="plugins/rest-api" />

Source: https://developer.wordpress.org/plugins/rest-api/

WordPress 4.4 introduced the infrastructure for a REST API. The REST API provides an easy way to get data into and out of WordPress. Data can be retrieved and stored by sending HTTP requests to the REST API server. The REST API takes advantage of different HTTP methods.

- `GET` should be used for retrieving data from the API.
- `POST` should be used for creating new resources (i.e users, posts, taxonomies).
- `PUT` should be used for updating resources.
- `DELETE` should be used for deleting resources.
- `OPTIONS` should be used to provide context about our resources.

A resource is any single entity or object. A good example of a resource for WordPress would be a post. A post has different properties like its title and content. A response from the API could show us title and content as fields in the response. The REST API enables us to interact with posts and other WordPress resources in a new way. The REST API makes sharing our content with the rest of the web easier, and it provides us a structured way to handle complex interactions within WordPress.

In this chapter of the Plugin Handbook, we will explore how the API works and how we can leverage its power to do great things with WordPress!

---

# REST API Overview <a name="plugins/rest-api/rest-api-overview" />

Source: https://developer.wordpress.org/plugins/rest-api/rest-api-overview/

The WordPress REST API brings many new features to WordPress. The REST API uses JSON (JavaScript Object Notation) as its data format. JSON is an open standard data format that is becoming more widely used across the web as a whole, and software in general. It is light-weight and human readable, and looks like Objects do in JavaScript; hence the name. When you make a request to the API, the response will be returned in JSON. This enables developers to use WordPress in languages beyond PHP, which in turn allows WordPress to be used in new and exciting ways.

## Why use the WordPress REST API

There are many use cases for the WordPress REST API. One of the largest use cases is creating Single Page Applications on top of WordPress. You could create an entirely new admin experience for WordPress, or you could create an entirely new front end experience for WordPress. You would not even have to write the applications in PHP. Any programming language that can make HTTP requests and interpret JSON could be used to write something on WordPress.

The WordPress REST API can also serve as a strong replacement for the admin-ajax API in core. By using the REST API, you can more easily structure the way you want to get data into and out of WordPress. AJAX calls can be greatly simplified by using the REST API, enabling us to provide better user experiences in our work.

The use cases extend beyond these and really our imagination is the only limit to what can be done. The bottom line is, if you want an structured, extensible, and simple way to get data in and out of WordPress, you probably want to use the REST API. The API, for all of its simplicity, can be quite complex at first and we will attempt to break it down into smaller components so that we can easily piece together the larger puzzle.

## Key Concepts

To get started with using the WordPress REST API we will break down some of the key concepts and terms associated with the API:

- Routes/Endpoints
- Requests
- Responses
- Schema
- Controller Classes

Each of these concepts play a crucial role in using and understanding the WordPress REST API. Let’s briefly break them down so that we can later explore each in greater depth.

### Routes &amp; Endpoints

A route, in the context of the WordPress REST API, is a URI which can be mapped to different HTTP methods. The mapping of an individual HTTP method to a route is known as an endpoint. To clarify: If we make a `GET` request to `http://oursite.com/wp-json/`, we will get a JSON response showing us what routes are available, and within each route, what endpoints are available. `/wp-json/` Is a route itself and when a `GET` request is made it matches to the endpoint that displays what is known as the index for the WordPress REST API. We will learn how to register our own routes and endpoints in the following sections.

### Requests

In the WordPress REST API infrastructure one of the primary classes is `WP_REST_Request`. The request class is used to store and retrieve information for the current request, requests can also be made internally within PHP to avoid using HTTP. `WP_REST_Request` objects are automatically generated for you whenever you make an HTTP request to a registered route. The data specified in the request will have an impact on what response you get back out of the API. There are a lot of neat things that can be done using the request class. The request section will go into greater detail.

### Responses

Responses are the data you get back from the API. The `WP_REST_Response` provides a way to interact with the response data returned by endpoints. Responses can return the desired data, and they can also be used to return errors.

### Schema

When we have responses and requests of different kinds of data, we need to be able to tell what type of data we are interacting with. Schema provides us a way to structure our data. Schema also provides security benefits for the API as it enables us to validate requests being made to the API. Schema is a large topic and we will get into that in the schema section.

### Controller Classes

As you can see the WordPress REST API has a lot of moving parts that all need to work together. Controller classes enable us to bring all of these elements together in a single place. With a controller class we will be able to manage the registering of routes &amp; endpoints, handle requests, utilize schema, and generate responses.

## Next Steps

Let’s dive into how to register routes and endpoints for the REST API.

---

# Routes &amp; Endpoints <a name="plugins/rest-api/routes-endpoints" />

Source: https://developer.wordpress.org/plugins/rest-api/routes-endpoints/

## Overview

The REST API provides us a way to match URIs to various resources in our WordPress install. By default, if you have pretty permalinks enabled, the WordPress REST API “lives” at `/wp-json/`. At our WordPress site `https://ourawesomesite.com`, we can access the REST API’s index by making a `GET` request to `https://ourawesomesite.com/wp-json/`. The index provides information regarding what routes are available for that particular WordPress install, along with what HTTP methods are supported and what endpoints are registered.

If we wanted to create an endpoint that would return the phrase “Hello World, this is the WordPress REST API”, we would first need to register the route for that endpoint. To register routes you should use the `register_rest_route()` function. It needs to be called on the `rest_api_init` action hook. `register_rest_route()` handles all of the mapping for routes to endpoints. Let’s try to create a “Hello World, this is the WordPress REST API” route.

```php
/**
 * This is our callback function that embeds our phrase in a WP_REST_Response
 */
function prefix_get_endpoint_phrase() {
    // rest_ensure_response() wraps the data we want to return into a WP_REST_Response, and ensures it will be properly returned.
    return rest_ensure_response( 'Hello World, this is the WordPress REST API' );
}

/**
 * This function is where we register our routes for our example endpoint.
 */
function prefix_register_example_routes() {
    // register_rest_route() handles more arguments but we are going to stick to the basics for now.
    register_rest_route( 'hello-world/v1', '/phrase', array(
        // By using this constant we ensure that when the WP_REST_Server changes our readable endpoints will work as intended.
        'methods'  => WP_REST_Server::READABLE,
        // Here we register our callback. The callback is fired when this endpoint is matched by the WP_REST_Server class.
        'callback' => 'prefix_get_endpoint_phrase',
    ) );
}

add_action( 'rest_api_init', 'prefix_register_example_routes' );
```

The first argument passed into `register_rest_route()` is the namespace, which provides us a way to group our routes. The second argument passed in is the resource path, or resource base. For our example, the resource we are retrieving is the “Hello World, this is the WordPress REST API” phrase. The third argument is an array of options. We specify what methods the endpoint can use and what callback should happen when the endpoint is matched (more things can be done but these are the fundamentals).

The third argument also allows us to provide a permissions callback, which can restrict access for the endpoint to only certain users. The third argument also offers a way to register arguments for the endpoint so that requests can modify the response of our endpoint. We will get into those concepts in the endpoints section of this guide.

When we go to `https://ourawesomesite.com/wp-json/hello-world/v1/phrase` we can now see our REST API greeting us kindly. Let’s take a look at routes a bit more in depth.

## Routes

Routes in the REST API are represented by URIs. The route itself is what is tacked onto the end of `https://ourawesomesite.com/wp-json`. The index route for the API is `'/'` which is why `https://ourawesomesite.com/wp-json/` returns all of the available information for the API. All routes should be built onto this route, the `wp-json` portion can be changed, but in general, it is advised to keep it the same.

We want to make sure that our routes are unique. For instance we could have a route for books like this: `/books`. Our books route would now live at `https://ourawesomesite.com/wp-json/books`. However, this is not a good practice as we would end up polluting potential routes for the API. What if another plugin we wanted to register a books route as well? We would be in big trouble in that case, as the two routes would conflict with each other and only one could be used. The fourth parameter to `register_rest_field()` is a boolean for whether the route should override an existing route.

The override parameter does not really solve our problem either, as both routes could override or we would want to use both routes for different things. This is where using namespaces for our routes comes in.

### Namespaces

It is extremely important to add namespaces to your routes. The “core” endpoints, which are awaiting to be merged into WordPress core, use the `/wp/v2` namespace.

**DO NOT PLACE ANYTHING INTO THE `/wp` NAMESPACE UNLESS YOU ARE MAKING ENDPOINTS WITH THE INTENTION OF MERGING THEM INTO CORE.**

There are some key things to take notice of in the core endpoint namespace. The first part of the namespace is `/wp`, which represents the vendor name; WordPress. For our plugins we will want to come up with unique names for what we call the vendor portion of the namespace. In the example above we used `hello-world`.

Following the vendor portion is the version portion of the namespace. The “core” endpoints utilize `v2` to represent version 2 of the WordPress REST API. If you are writing a plugin, you can maintain backwards compatibility of your REST API endpoints by simply creating new endpoints and bumping up the version number you provide. This way both the original `v1` and `v2` endpoints can be accessed.

The part of the route that follows the namespace is the resource path.

### Resource Paths

The resource path should signify what resource the endpoint is associated with. In the example we used above, we used the word `phrase` to signify that the resource we are interacting with is a phrase. To avoid any collisions, each resource path we register should also be unique within a namespace. Resource paths should be used to define different resource routes within a given namespace.

Let’s say we have a plugin that handles some basic eCommerce functionality. We will have two main resource types orders, and products. Orders are a request for product(s) but they are not the product themselves. The same concept applies to products. Although these resources are related they are not the same thing and each should live in a separate resource paths. Our routes will end up looking something like this for our eCommerce plugin: `/my-shop/v1/orders` and `/my-shop/v1/products`.

Using routes like this, we would want each to return a collection of orders or products. What if we wanted to grab a specific product by ID, we would need to use path variables in our routes.

### Path Variables

Path variables enable us to add dynamic routes. To expand on our eCommerce routes, we could register a route to grab individual products.

```php
/**
 * This is our callback function to return our products.
 *
 * @param WP_REST_Request $request This function accepts a rest request to process data.
 */
function prefix_get_products( $request ) {
    // In practice this function would fetch the desired data. Here we are just making stuff up.
    $products = array(
        '1' => 'I am product 1',
        '2' => 'I am product 2',
        '3' => 'I am product 3',
    );

    return rest_ensure_response( $products );
}

/**
 * This is our callback function to return a single product.
 *
 * @param WP_REST_Request $request This function accepts a rest request to process data.
 */
function prefix_get_product( $request ) {
    // In practice this function would fetch the desired data. Here we are just making stuff up.
    $products = array(
        '1' => 'I am product 1',
        '2' => 'I am product 2',
        '3' => 'I am product 3',
    );

    // Here we are grabbing the 'id' path variable from the $request object. WP_REST_Request implements ArrayAccess, which allows us to grab properties as though it is an array.
    $id = (string) $request['id'];

    if ( isset( $products[ $id ] ) ) {
        // Grab the product.
        $product = $products[ $id ];

        // Return the product as a response.
        return rest_ensure_response( $product );
    } else {
        // Return a WP_Error because the request product was not found. In this case we return a 404 because the main resource was not found.
        return new WP_Error( 'rest_product_invalid', esc_html__( 'The product does not exist.', 'my-text-domain' ), array( 'status' => 404 ) );
    }

    // If the code somehow executes to here something bad happened return a 500.
    return new WP_Error( 'rest_api_sad', esc_html__( 'Something went horribly wrong.', 'my-text-domain' ), array( 'status' => 500 ) );
}

/**
 * This function is where we register our routes for our example endpoint.
 */
function prefix_register_product_routes() {
    // Here we are registering our route for a collection of products.
    register_rest_route( 'my-shop/v1', '/products', array(
        // By using this constant we ensure that when the WP_REST_Server changes our readable endpoints will work as intended.
        'methods'  => WP_REST_Server::READABLE,
        // Here we register our callback. The callback is fired when this endpoint is matched by the WP_REST_Server class.
        'callback' => 'prefix_get_products',
    ) );
    // Here we are registering our route for single products. The (?P<id>[\d]+) is our path variable for the ID, which, in this example, can only be some form of positive number.
    register_rest_route( 'my-shop/v1', '/products/(?P<id>[\d]+)', array(
        // By using this constant we ensure that when the WP_REST_Server changes our readable endpoints will work as intended.
        'methods'  => WP_REST_Server::READABLE,
        // Here we register our callback. The callback is fired when this endpoint is matched by the WP_REST_Server class.
        'callback' => 'prefix_get_product',
    ) );
}

add_action( 'rest_api_init', 'prefix_register_product_routes' );
```

The above example covers a lot. The important part to note is that in the second route we register, we add on a path variable `/(?P[\d]+)` to our resource path `/products`. The path variable is a regular expression. In this case it uses `[\d]+` to signify that should be any numerical character at least once. If you are using numeric IDs for your resources, then this is a great example of how to use a path variable. When using path variables, we now have to be careful around what can be matched as it is user input.

The regex luckily will filter out anything that is not numerical. However, what if the product for the requested ID doesn’t exist. We need to do error handling. You can see the basic way we are handling errors in the code example above. When you return a `WP_Error` in your endpoint callbacks the API server will automatically handle serving the error to the client.

Although this section is about routes, we have covered quite a bit about endpoints. Endpoints and routes are interrelated, but they definitely have distinctions.

## Endpoints

Endpoints are the destination that a route needs to map to. For any given route, you could have a number of different endpoints registered to it. We will expand on our fictitious eCommerce plugin, to better show the distinction between routes and endpoints. We are going to create two endpoints that exist at the `/wp-json/my-shop/v1/products/` route. One endpoint uses the HTTP verb `GET` to get products, and the other endpoint uses the HTTP verb `POST` to create a new product.

```php
/**
 * This is our callback function to return our products.
 *
 * @param WP_REST_Request $request This function accepts a rest request to process data.
 */
function prefix_get_products( $request ) {
    // In practice this function would fetch the desired data. Here we are just making stuff up.
    $products = array(
        '1' => 'I am product 1',
        '2' => 'I am product 2',
        '3' => 'I am product 3',
    );

    return rest_ensure_response( $products );
}

/**
 * This is our callback function to return a single product.
 *
 * @param WP_REST_Request $request This function accepts a rest request to process data.
 */
function prefix_create_product( $request ) {
    // In practice this function would create a product. Here we are just making stuff up.
   return rest_ensure_response( 'Product has been created' );
}

/**
 * This function is where we register our routes for our example endpoint.
 */
function prefix_register_product_routes() {
    // Here we are registering our route for a collection of products and creation of products.
    register_rest_route( 'my-shop/v1', '/products', array(
        array(
            // By using this constant we ensure that when the WP_REST_Server changes, our readable endpoints will work as intended.
            'methods'  => WP_REST_Server::READABLE,
            // Here we register our callback. The callback is fired when this endpoint is matched by the WP_REST_Server class.
            'callback' => 'prefix_get_products',
        ),
        array(
            // By using this constant we ensure that when the WP_REST_Server changes, our create endpoints will work as intended.
            'methods'  => WP_REST_Server::CREATABLE,
            // Here we register our callback. The callback is fired when this endpoint is matched by the WP_REST_Server class.
            'callback' => 'prefix_create_product',
        ),
    ) );
}

add_action( 'rest_api_init', 'prefix_register_product_routes' );
```

Depending on what HTTP Method we use for the route `/wp-json/my-shop/v1/products`, we are matched to a different endpoint and a different callback is fired. When we use `POST` we trigger the `prefix_create_product()` callback, and when we use `GET` we trigger the `prefix_get_products()` callback.

There are a number of different HTTP methods and the REST API can make use of any of them.

### HTTP Methods

HTTP methods are sometimes referred to as HTTP verbs. They are simply just different ways to communicate via HTTP. The main ones used by the WordPress REST API are:

- `GET` should be used for retrieving data from the API.
- `POST` should be used for creating new resources (i.e users, posts, taxonomies).
- `PUT` should be used for updating resources.
- `DELETE` should be used for deleting resources.
- `OPTIONS` should be used to provide context about our resources.

It is important to note that these methods are not supported by every client, as they were introduced in HTTP 1.1. Luckily, the API provides a workaround for these unfortunate cases. If you want to delete a resource but can’t send a `DELETE` request, then you can use the `_method` parameter or the `X-HTTP-Method-Override` header in your request. How this works is you will send a `POST` request to `https://ourawesomesite.com/wp-json/my-shop/v1/products/1?_method=DELETE`. Now you will have deleted product number 1, even though your client could not send the proper HTTP method in the request, or maybe there was a firewall in place that blocks out DELETE requests.

The HTTP method, in combination with the route and callbacks, are what make up the core of an endpoint.

### Callbacks

There are currently only two types of callbacks for endpoints supported by the REST API; `callback` and `permissions_callback`. The main callback should handle the interaction with the resource. The permissions callback should handle what users have access to the endpoint. You can add additional callbacks by adding additional information when registering an endpoint. You can then hook into `rest_pre_dispatch`, `rest_dispatch_request`, or `rest_post_dispatch` hooks to fire your new custom callbacks.

#### Endpoint Callback

The main callback for a delete endpoint should only delete the resource and return a copy of it in the response. The main callback for a creation endpoint should only create the resource and return a response matching the newly created data. An update callback should only modify resources that actually exist. A reading callback should only retrieve data that already exists. It is important to take into account the concept of idempotence.

Idempotence, in the context of a REST API, means that if you make the same request to an endpoint the server will process the request the same way. Imagine if our read endpoint was not idempotent. Whenever we made a request to it the state of our server would be modified by the request, even though we were only trying to get data. This could be catastrophic. Any time someone fetched data from your server something would change internally. It is important to make sure that read, update, and delete endpoints do not have nasty side effects and just stick to what they are intended to do.

In a REST API, the concept of idempotence is tied to HTTP methods instead of endpoint callbacks. Any callback using `GET`, `HEAD`, `TRACE`, `OPTIONS`, `PUT`, or `DELETE`, should not produce any side effects. `POST` requests are not idempotent, and are typically used for creating resources. If you created an idempotent creation method then you would only ever create one resource because when you make the same request there would be no more side effects to the server. For creating, if you make the same request over and over the server should generate new resources each time.

To restrict usage of endpoints we need to register a permissions callback.

#### Permissions Callback

Permissions callbacks are extremely important for security with the WordPress REST API. If you have any private data that should not be displayed publicly, then you need to have permissions callbacks registered for your endpoints. Below is an example of how to register permissions callbacks.

```php
/**
 * This is our callback function that embeds our resource in a WP_REST_Response
 */
function prefix_get_private_data() {
    // rest_ensure_response() wraps the data we want to return into a WP_REST_Response, and ensures it will be properly returned.
    return rest_ensure_response( 'This is private data.' );
}

/**
 * This is our callback function that embeds our resource in a WP_REST_Response
 */
function prefix_get_private_data_permissions_check() {
    // Restrict endpoint to only users who have the edit_posts capability.
    if ( ! current_user_can( 'edit_posts' ) ) {
        return new WP_Error( 'rest_forbidden', esc_html__( 'OMG you can not view private data.', 'my-text-domain' ), array( 'status' => 401 ) );
    }

    // This is a black-listing approach. You could alternatively do this via white-listing, by returning false here and changing the permissions check.
    return true;
}

/**
 * This function is where we register our routes for our example endpoint.
 */
function prefix_register_example_routes() {
    // register_rest_route() handles more arguments but we are going to stick to the basics for now.
    register_rest_route( 'my-plugin/v1', '/private-data', array(
        // By using this constant we ensure that when the WP_REST_Server changes our readable endpoints will work as intended.
        'methods'  => WP_REST_Server::READABLE,
        // Here we register our callback. The callback is fired when this endpoint is matched by the WP_REST_Server class.
        'callback' => 'prefix_get_private_data',
        // Here we register our permissions callback. The callback is fired before the main callback to check if the current user can access the endpoint.
        'permissions_callback' => 'prefix_get_private_data_permissions_check',
    ) );
}

add_action( 'rest_api_init', 'prefix_register_example_routes' );
```

If you try out this endpoint without any Authentication enabled then you will also be returned the error response, preventing you from seeing the data. Authentication is a huge topic and eventually a portion of this chapter will be created to show you how to create your own authentication processes.

### Arguments

When making requests to an endpoint you might need to specify extra parameters to change the response. These extra parameters can be added while registering endpoints. Let’s look at an example of how to use arguments with an endpoint.

```php
/**
 * This is our callback function that embeds our resource in a WP_REST_Response
 */
function prefix_get_colors( $request ) {
    // In practice this function would fetch the desired data. Here we are just making stuff up.
    $colors = array(
        'blue',
        'blue',
        'red',
        'red',
        'green',
        'green',
    );

    if ( isset( $request['filter'] ) ) {
       $filtered_colors = array();
       foreach ( $colors as $color ) {
           if ( $request['filter'] === $color ) {
               $filtered_colors[] = $color;
           }
       }
       return rest_ensure_response( $filtered_colors );
    }
    return rest_ensure_response( $colors );
}

/**
 * We can use this function to contain our arguments for the example product endpoint.
 */
function prefix_get_color_arguments() {
    $args = array();
    // Here we are registering the schema for the filter argument.
    $args['filter'] = array(
        // description should be a human readable description of the argument.
        'description' => esc_html__( 'The filter parameter is used to filter the collection of colors', 'my-text-domain' ),
        // type specifies the type of data that the argument should be.
        'type'        => 'string',
        // enum specified what values filter can take on.
        'enum'        => array( 'red', 'green', 'blue' ),
    );
    return $args;
}

/**
 * This function is where we register our routes for our example endpoint.
 */
function prefix_register_example_routes() {
    // register_rest_route() handles more arguments but we are going to stick to the basics for now.
    register_rest_route( 'my-colors/v1', '/colors', array(
        // By using this constant we ensure that when the WP_REST_Server changes our readable endpoints will work as intended.
        'methods'  => WP_REST_Server::READABLE,
        // Here we register our callback. The callback is fired when this endpoint is matched by the WP_REST_Server class.
        'callback' => 'prefix_get_colors',
        // Here we register our permissions callback. The callback is fired before the main callback to check if the current user can access the endpoint.
        'args' => prefix_get_color_arguments(),
    ) );
}

add_action( 'rest_api_init', 'prefix_register_example_routes' );
```

We have now specified a `filter` argument for this example. We can specify the argument as a query parameter when we request the endpoint. If we make a `GET` request to `https://ourawesomesitem.com/my-colors/v1/colors?filter=blue`, we will be returned only the blue colors in our collection. You could also pass these as body parameters in the request body, instead of in the query string. To understand the distinction between query parameters and body parameters you should read about the HTTP spec. Query parameters live in the query string tacked onto the URL and body parameters are directly embedded in the body of an HTTP request.

We have created an argument for our endpoint, but how do we verify that the argument is a string and tell whether it matches the value red, green, or blue. To do this we need to specify a validation callback for our argument.

#### Validation

Validation and sanitization are extremely important for security in the API. The validate callback (in WP 4.6+), fires before the sanitize callback. You should use the `validate_callback` for your arguments to verify whether the input you are receiving is valid. The `sanitize_callback` should be used to transform the argument input or clean out unwanted parts out of the argument, before the argument is processed by the main callback.

In the example above, we need to verify that the `filter` parameter is a string, and it matches the value red, green, or blue. Let’s look at what the code looks like after adding in a `validate_callback`.

```php
/**
 * This is our callback function that embeds our resource in a WP_REST_Response
 */
function prefix_get_colors( $request ) {
    // In practice this function would fetch more practical data. Here we are just making stuff up.
    $colors = array(
        'blue',
        'blue',
        'red',
        'red',
        'green',
        'green',
    );

    if ( isset( $request['filter'] ) ) {
       $filtered_colors = array();
       foreach ( $colors as $color ) {
           if ( $request['filter'] === $color ) {
               $filtered_colors[] = $color;
           }
       }
       return rest_ensure_response( $filtered_colors );
    }
    return rest_ensure_response( $colors );
}
/**
 * Validate a request argument based on details registered to the route.
 *
 * @param  mixed            $value   Value of the 'filter' argument.
 * @param  WP_REST_Request  $request The current request object.
 * @param  string           $param   Key of the parameter. In this case it is 'filter'.
 * @return WP_Error|boolean
 */
function prefix_filter_arg_validate_callback( $value, $request, $param ) {
    // If the 'filter' argument is not a string return an error.
    if ( ! is_string( $value ) ) {
        return new WP_Error( 'rest_invalid_param', esc_html__( 'The filter argument must be a string.', 'my-text-domain' ), array( 'status' => 400 ) );
    }

    // Get the registered attributes for this endpoint request.
    $attributes = $request->get_attributes();

    // Grab the filter param schema.
    $args = $attributes['args'][ $param ];

    // If the filter param is not a value in our enum then we should return an error as well.
    if ( ! in_array( $value, $args['enum'], true ) ) {
        return new WP_Error( 'rest_invalid_param', sprintf( __( '%s is not one of %s' ), $param, implode( ', ', $args['enum'] ) ), array( 'status' => 400 ) );
    }
}

/**
 * We can use this function to contain our arguments for the example product endpoint.
 */
function prefix_get_color_arguments() {
    $args = array();
    // Here we are registering the schema for the filter argument.
    $args['filter'] = array(
        // description should be a human readable description of the argument.
        'description' => esc_html__( 'The filter parameter is used to filter the collection of colors', 'my-text-domain' ),
        // type specifies the type of data that the argument should be.
        'type'        => 'string',
        // enum specified what values filter can take on.
        'enum'        => array( 'red', 'green', 'blue' ),
        // Here we register the validation callback for the filter argument.
        'validate_callback' => 'prefix_filter_arg_validate_callback',
    );
    return $args;
}

/**
 * This function is where we register our routes for our example endpoint.
 */
function prefix_register_example_routes() {
    // register_rest_route() handles more arguments but we are going to stick to the basics for now.
    register_rest_route( 'my-colors/v1', '/colors', array(
        // By using this constant we ensure that when the WP_REST_Server changes our readable endpoints will work as intended.
        'methods'  => WP_REST_Server::READABLE,
        // Here we register our callback. The callback is fired when this endpoint is matched by the WP_REST_Server class.
        'callback' => 'prefix_get_colors',
        // Here we register our permissions callback. The callback is fired before the main callback to check if the current user can access the endpoint.
        'args' => prefix_get_color_arguments(),
    ) );
}

add_action( 'rest_api_init', 'prefix_register_example_routes' );
```

#### Sanitizing

In the above example, we do not need to use a `sanitize_callback`, because we are restricting input to only values in our enum. If we did not have strict validation and accepted any string as a parameter, we would definitely need to register a `sanitize_callback`. What if we wanted to update a content field and the user entered something like `alert('ZOMG Hacking you');`. The field value could potentially be a executable script. To strip out unwanted data or to transform data into a desired format we need to register a `sanitize_callback` for our arguments. Here is an example of how to use WordPress’s `sanitize_text_field()` for a sanitize callback:

```php
/**
 * This is our callback function that embeds our resource in a WP_REST_Response.
 *
 * The parameter is already sanitized by this point so we can use it without any worries.
 */
function prefix_get_item( $request ) {
    if ( isset( $request['data'] ) ) {
        return rest_ensure_response( $request['data'] );
    }

    return new WP_Error( 'rest_invalid', esc_html__( 'The data parameter is required.', 'my-text-domain' ), array( 'status' => 400 ) );
}

/**
 * Validate a request argument based on details registered to the route.
 *
 * @param  mixed            $value   Value of the 'filter' argument.
 * @param  WP_REST_Request  $request The current request object.
 * @param  string           $param   Key of the parameter. In this case it is 'filter'.
 * @return WP_Error|boolean
 */
function prefix_data_arg_validate_callback( $value, $request, $param ) {
    // If the 'data' argument is not a string return an error.
    if ( ! is_string( $value ) ) {
        return new WP_Error( 'rest_invalid_param', esc_html__( 'The filter argument must be a string.', 'my-text-domain' ), array( 'status' => 400 ) );
    }
}

/**
 * Sanitize a request argument based on details registered to the route.
 *
 * @param  mixed            $value   Value of the 'filter' argument.
 * @param  WP_REST_Request  $request The current request object.
 * @param  string           $param   Key of the parameter. In this case it is 'filter'.
 * @return WP_Error|boolean
 */
function prefix_data_arg_sanitize_callback( $value, $request, $param ) {
    // It is as simple as returning the sanitized value.
    return sanitize_text_field( $value );
}

/**
 * We can use this function to contain our arguments for the example product endpoint.
 */
function prefix_get_data_arguments() {
    $args = array();
    // Here we are registering the schema for the filter argument.
    $args['data'] = array(
        // description should be a human readable description of the argument.
        'description' => esc_html__( 'The data parameter is used to be sanitized and returned in the response.', 'my-text-domain' ),
        // type specifies the type of data that the argument should be.
        'type'        => 'string',
        // Set the argument to be required for the endpoint.
        'required'    => true,
        // We are registering a basic validation callback for the data argument.
        'validate_callback' => 'prefix_data_arg_validate_callback',
        // Here we register the validation callback for the filter argument.
        'sanitize_callback' => 'prefix_data_arg_sanitize_callback',
    );
    return $args;
}

/**
 * This function is where we register our routes for our example endpoint.
 */
function prefix_register_example_routes() {
    // register_rest_route() handles more arguments but we are going to stick to the basics for now.
    register_rest_route( 'my-plugin/v1', '/sanitized-data', array(
        // By using this constant we ensure that when the WP_REST_Server changes our readable endpoints will work as intended.
        'methods'  => WP_REST_Server::READABLE,
        // Here we register our callback. The callback is fired when this endpoint is matched by the WP_REST_Server class.
        'callback' => 'prefix_get_item',
        // Here we register our permissions callback. The callback is fired before the main callback to check if the current user can access the endpoint.
        'args' => prefix_get_data_arguments(),
    ) );
}

add_action( 'rest_api_init', 'prefix_register_example_routes' );
```

## Summary

We have covered the basics of registering endpoints for the WordPress REST API. Routes are the URIs that our endpoints live at. Endpoints are a collection of callbacks, methods, args, and other options. Each endpoint is mapped to a route when using `register_rest_route()`. An endpoint by default can support various HTTP methods, a main callback, a permissions callback, and registered arguments. We can register endpoints to cover any of our use cases for interacting with WordPress. The endpoints serve as the core interaction point with the REST API, but there are many other topics to explore and understand, to fully utilize this powerful API.

---

# Requests <a name="plugins/rest-api/requests" />

Source: https://developer.wordpress.org/plugins/rest-api/requests/

## Overview

The REST API is very simple in many ways. There is input, known as the request. The input is interpreted by the server and output is created. The output, is known as the response. In some ways, you can think of a request to the WordPress REST API as a set of directions or instructions that should be carried out and interpreted by the API. By default, the WordPress REST API is intended to use HTTP requests as its request medium. HTTP is the foundation for communication of data over the internet, which makes the WordPress REST API a very far reaching API. Requests in the API utilize a lot of the different aspects present in HTTP requests like URIs, HTTP methods, headers, and parameters. The data structure of a request is conveniently handled by the `WP_REST_Request` class. ## [WP\_REST\_Request](#reference/classes/wp_rest_request)

This class is one of the three main infrastructure classes introduced in WordPress 4.4. When an HTTP request is made to an endpoint of the API, the API will automatically create an instance of the `WP_REST_Request` class, matching the provided data. The response object is auto-generated in `WP_REST_Server`‘s `serve_request()` method. Once the request is created and authentication is checked, the request is dispatched and our endpoint callbacks begin to be fired. All of the data stored up in the `WP_REST_Request` object is passed into our callbacks for our registered endpoints. So both our `permissions_callback` and `callback` are called with the request object being passed in. This enables us to access the various request properties in our callbacks, so that we can tailor our responses to match the desired output. ## Request Properties

Request objects have many different properties, each of which can be used in various ways. The main properties are the request method, route, headers, parameters and attributes. Let’s break each of these down into their role in a request. If you were to create a request object yourself it would look like this: ```php
$request = new WP_REST_Request( 'GET', '/my-namespace/v1/examples' );
```

In the above code sample we are only specifying that the request object method is `GET` and we should be matching the route `/my-namespace/v1/examples` which in the context of an entire URL would look like this: `https://ourawesomesite.com/wp-json/my-namepsace/v1/examples`. The method and route arguments for the `WP_REST_Request` constructor are used to map the request to the desired endpoint. If the request is made to an endpoint that is not registered then a helpful 404 error message is returned in the response. Let’s look at the various properties in more depth. ### Method

The method property of a request object by default matches the HTTP Request method. The method in most cases will be one of `GET`, `POST`, `PUT`, `DELETE`, `OPTIONS`, or `HEAD`. These methods will be used to match the various endpoints registered to a route. When the API finds a match for the method and route it will fire the callbacks for that endpoint. The following convention is a best practice for matching HTTP methods: `GET` for read only tasks, `POST` for creation, `PUT` for updating, and `DELETE` for deleting. The request method acts as an indicator for the expected functionality of your endpoints. When you make a `GET` request to a route, you should expect to be returned read only data. ### Route

The route for a request, by default, will match the server environment variable for path info; `$_SERVER['PATH_INFO']`. When you make an HTTP request to a route of the WordPress REST API, the generated `WP_REST_Request` object will be made to match that path, which will hopefully then be matched to a valid endpoint. In short the route for a request is where you want to target your request in the API. If we had registered a books endpoint, using `GET`, it might live at `https://ourawesomesite.com/wp-json/my-namespace/v1/books`. If we went to that URL in our browser, we would see our collection of books represented in JSON. WordPress will automatically generate the request object for us and handle all of the routing to match endpoints. So since we don’t really have to worry about the routing ourselves understanding how to pass extra data we want in our requests is a much more important thing to understand. ### Headers

HTTP Request headers are simply just extra data about our HTTP request. Request headers can specify caching policy, what our request content is, where the request is coming from and many other things. Request headers do not necessarily interact with our endpoints directly, but the information in the headers helps WordPress know what to do. To pass in data that we want our endpoints to interact with we want to use parameters. ### Parameters

When making requests to the WordPress REST API, most of the additional data passed in will take on the form of parameters. What are parameters? There are four different types in the context of the API. There are route parameters, query parameters, body parameters, and file parameters. Let’s take a look at each one a bit more in depth. #### URL Params

URL parameters are automatically generated in a `WP_REST_Request` from the path variables in the requested route. What does that mean? Let’s look at this route, which grabs individual books by id: `/my-namespace/v1/books/(?P\d+)`. The odd looking `(?P\d+)` is a path variable. The name of the path variable is ‘`id`‘. If we were to make a request like `GET https://ourawesomesite.com/wp-json/my-namespace/v1/books/5`, `5` will become the value for our `id` path variable. The `WP_REST_Request` object will automatically take that path variable and store it as a URL parameter. Now inside of our endpoint callbacks we can interact with that URL parameter really easily. Let’s look at an example. ```php
// Register our individual books endpoint.

function prefix_register_book_route() {

    register_rest_route( 'my-namespace/v1', '/books/(?P<id>\d+)', array(

        // Supported methods for this endpoint. WP_REST_Server::READABLE translates to GET.

        'methods' => WP_REST_Server::READABLE,

        // Register the callback for the endpoint.

        'callback' => 'prefix_get_book',

    ) );

}

add_action( 'rest_api_init', 'prefix_register_book_route' ); 

/**

 * Our registered endpoint callback. Notice how we are passing in $request as an argument.

 * By default, the WP_REST_Server will pass in the matched request object to our callback.

 *

 * @param WP_REST_Request $request The current matched request object.

 */

function prefix_get_book( $request ) {

    // Here we are accessing the path variable 'id' from the $request.

    $book = prefix_get_the_book( $request['id'] );

    return rest_ensure_response( $book );

}

// A simple function that grabs a book title from our books by ID.

function prefix_get_the_book( $id ) {

    $books = array(

        'Design Patterns',

        'Clean Code',

        'Refactoring',

        'Structure and Interpretation of Computer Programs',

    );

    $book = '';

    if ( isset( $books[ $id ] ) ) {

        // Grab the matching book.

        $book = $books[ $id ];

    } else {

        // Error handling.

        return new WP_Error( 'rest_not_found', esc_html__( 'The book does not exist', 'my-text-domain' ), array( 'status' => 404 ) );

    }

    return $book;

}
```

In the example above we see how path variables are stored as URL parameters in the request object. We can then access those parameters in our endpoint callbacks. The above example is a pretty common use case for using URL params. Adding too many path variables to a route can slow down the matching of routes and it can also over complicate registering endpoints, it is advised to use URL parameters sparingly. If we aren’t supposed to use parameters directly in our URL path, then we need another way to pass in extra information to our request. This is where query and body parameters come in, they will typically do most of the heavy lifting in your API. #### Query Params

Query parameters exist in the query string portion of a URI. The query string portion of a URI in `https://ourawesomesite.com/wp-json/my-namespace/v1/books?per_page=2&genre=fiction` is `?per_page=2&genre=fiction`. The query string is started by the ‘`?`‘ character, the different values within the query string are separated by the ‘`&`‘ character. We specified two parameters in our query string; `per_page` and `fiction`. In our endpoint we would want to grab only two books from the fiction genre. We could access those values in a callback like this: `$request['per_page']`, and `$request['genre']` ( assuming $request is the name of the argument we are using ). If you are familiar with PHP you have probably used query parameters in your web applications. In PHP, the query parameters get stored in the superglobal `$_GET`. It is important to note that you should never directly access any superglobals or server variables in your endpoints. It is always best to work with what is provided by the `WP_REST_Request` class. Another common method for passing in variables to an endpoint is to use body parameters. #### Body Params

Body parameters are key value pairs that are stored in the request body. If you have ever sent a `POST` request via a ``, through cURL, or some other method, then you have used body parameters. With body parameters you can pass them as different content types as well. The default `Content-Type` header for a `POST` request is `x-www-form-urlencoded`. When using `x-www-form-urlencoded`, the parameters are sent like a query string; `per_page=2&genre=fiction`. An HTML form, by default, will bundle up the various inputs and send a `POST` request matching the `x-www-form-urlencoded` pattern. It is important to note that although the HTTP specification does not prohibit the use of sending body parameters in `GET` requests, it is encouraged that you do not use body parameters in a `GET` request. Body parameters can and should be used for `POST`, `PUT`, and `DELETE` requests. #### File Params

File parameters in a `WP_REST_Request` object are stored when the request uses a special content type header; `multipart/form-data`. The file data can then be accessed from the request object using `$request->get_file_params()`. The file parameters are equivalent to the PHP superglobal: `$_FILES`. Remember, do not access the superglobals directly only use what the `WP_REST_Request` object provides. In the endpoint callback we could use `wp_handle_upload()` to then add in the desired files to WordPress’s media uploads directory. The file parameters are only useful for dealing with file data and you should never use them for any other purpose. ### Attributes

`WP_REST_Request` also supports request attributes. The attributes of a request are the attributes registered to the match route. If we made a `GET` request to `my-namespace/v1/books`, and then we called `$request->get_attributes()` inside of our endpoint callback, we would be returned all of the registration options for the `my-namespace/v1/books` endpoint. If we made a `POST` request to the same route and our endpoint callback also returned `$request->get_attributes()`, we would receive a different set of endpoint options registered to the `POST` endpoint callback. In the attributes we will get a response containing supported methods, options, whether to show this endpoint in the index, a list of registered arguments for the endpoint, and our registered callbacks. It might look something like this: ```js
{

  "methods": {

    "GET": true

  },

  "accept_json": false,

  "accept_raw": false,

  "show_in_index": true,

  "args": {

    "context": {

      "description": "Scope under which the request is made; determines fields present in response.",

      "type": "string",

      "sanitize_callback": "sanitize_key",

      "validate_callback": "rest_validate_request_arg",

      "enum": [

        "view",

        "embed",

        "edit"

      ],

      "default": "view"

    },

    "page": {

      "description": "Current page of the collection.",

      "type": "integer",

      "default": 1,

      "sanitize_callback": "absint",

      "validate_callback": "rest_validate_request_arg",

      "minimum": 1

    },

    "per_page": {

      "description": "Maximum number of items to be returned in result set.",

      "type": "integer",

      "default": 10,

      "minimum": 1,

      "maximum": 100,

      "sanitize_callback": "absint",

      "validate_callback": "rest_validate_request_arg"

    },

    "search": {

      "description": "Limit results to those matching a string.",

      "type": "string",

      "sanitize_callback": "sanitize_text_field",

      "validate_callback": "rest_validate_request_arg"

    },

    "after": {

      "description": "Limit response to resources published after a given ISO8601 compliant date.",

      "type": "string",

      "format": "date-time",

      "validate_callback": "rest_validate_request_arg"

    },

    "author": {

      "description": "Limit result set to posts assigned to specific authors.",

      "type": "array",

      "default": [],

      "sanitize_callback": "wp_parse_id_list",

      "validate_callback": "rest_validate_request_arg"

    },

    "author_exclude": {

      "description": "Ensure result set excludes posts assigned to specific authors.",

      "type": "array",

      "default": [],

      "sanitize_callback": "wp_parse_id_list",

      "validate_callback": "rest_validate_request_arg"

    },

    "before": {

      "description": "Limit response to resources published before a given ISO8601 compliant date.",

      "type": "string",

      "format": "date-time",

      "validate_callback": "rest_validate_request_arg"

    },

    "exclude": {

      "description": "Ensure result set excludes specific ids.",

      "type": "array",

      "default": [],

      "sanitize_callback": "wp_parse_id_list"

    },

    "include": {

      "description": "Limit result set to specific ids.",

      "type": "array",

      "default": [],

      "sanitize_callback": "wp_parse_id_list"

    },

    "offset": {

      "description": "Offset the result set by a specific number of items.",

      "type": "integer",

      "sanitize_callback": "absint",

      "validate_callback": "rest_validate_request_arg"

    },

    "order": {

      "description": "Order sort attribute ascending or descending.",

      "type": "string",

      "default": "desc",

      "enum": [

        "asc",

        "desc"

      ],

      "validate_callback": "rest_validate_request_arg"

    },

    "orderby": {

      "description": "Sort collection by object attribute.",

      "type": "string",

      "default": "date",

      "enum": [

        "date",

        "relevance",

        "id",

        "include",

        "title",

        "slug"

      ],

      "validate_callback": "rest_validate_request_arg"

    },

    "slug": {

      "description": "Limit result set to posts with a specific slug.",

      "type": "string",

      "validate_callback": "rest_validate_request_arg"

    },

    "status": {

      "default": "publish",

      "description": "Limit result set to posts assigned a specific status; can be comma-delimited list of status types.",

      "enum": [

        "publish",

        "future",

        "draft",

        "pending",

        "private",

        "trash",

        "auto-draft",

        "inherit",

        "any"

      ],

      "sanitize_callback": "sanitize_key",

      "type": "string",

      "validate_callback": [

        {},

        "validate_user_can_query_private_statuses"

      ]

    },

    "filter": {

      "description": "Use WP Query arguments to modify the response; private query vars require appropriate authorization."

    },

    "categories": {

      "description": "Limit result set to all items that have the specified term assigned in the categories taxonomy.",

      "type": "array",

      "sanitize_callback": "wp_parse_id_list",

      "default": []

    },

    "tags": {

      "description": "Limit result set to all items that have the specified term assigned in the tags taxonomy.",

      "type": "array",

      "sanitize_callback": "wp_parse_id_list",

      "default": []

    }

  },

  "callback": [

    {},

    "get_items"

  ],

  "permission_callback": [

    {},

    "get_items_permissions_check"

  ]

}
```

As you can see we have all of the information we have registered to our endpoint already there, ready to go! The request attributes are typically used at a lower level and are handled by the `WP_REST_Server` class, however there are cool things that can be done inside of endpoint callbacks, like restricting accepted parameters to match registered arguments. The WP REST API is designed for you so that you do not have to mess around with any internals, so some of these more advanced methods of interacting with `WP_REST_Request` are not going to be commonly practiced. The core of using the WP REST API is linked to registering routes and endpoints. Requests are the tool we use to tell the API which endpoint we want to hit. This is most commonly done over HTTP, however we can also use `WP_REST_Request`s internally. ## Internal Requests

The key to making internal requests is using `rest_do_request()`. All you need to do is pass in a request object and you will be returned a response. Because the request is never served by the `WP_REST_Server`, the response data is never encoded into json, meaning we have our response object as a PHP object. This is pretty awesome and enables us to do a lot of interesting things. For one, we can create efficient batch endpoints. From a performance perspective, one of the hurdles is minimizing HTTP requests. We can create batch endpoints that will use `rest_do_request()` to serve all of our requests internally all in one HTTP request. Here is a very simplistic batch endpoint for read only data, so you can see `rest_do_request()` in action. ```php
// Register our mock batch endpoint.

function prefix_register_batch_route() {

    register_rest_route( 'my-namespace/v1', '/batch', array(

        // Supported methods for this endpoint. WP_REST_Server::READABLE translates to GET.

        'methods' => WP_REST_Server::READABLE,

        // Register the callback for the endpoint.

        'callback' => 'prefix_do_batch_request',

        // Register args for the batch endpoint.

        'args' => prefix_batch_request_parameters(),

    ) );

}

add_action( 'rest_api_init', 'prefix_register_batch_route' );

/**

 * Our registered endpoint callback. Notice how we are passing in $request as an argument.

 * By default, the WP_REST_Server will pass in the matched request object to our callback.

 *

 * @param WP_REST_Request $request The current matched request object.

 */

function prefix_do_batch_request( $request ) {

    // Here we initialize the array that will hold our response data.

    $data = array();

	$data = prefix_handle_batch_requests( $request['requests'] );

	return $data;

}

/**

 * This handles the building of the response for the batch requests we make.

 *

 * @param array $requests An array of data to build WP_REST_Request objects from.

 * @return WP_REST_Response A collection of response data for batch endpoints.

 */

function prefix_handle_batch_requests( $requests ) {

	$data = array();

	// Foreach request specified in the requests param run the endpoint.

	foreach ( $requests as $request_params ) {

		$response = prefix_handle_request( $request_params );

		$key = $request_params['method'] . ' ' . $request_params['route'];

		$data[ $key ] = prefix_prepare_for_collection( $response );

	}

	return rest_ensure_response( $data );

}

/**

 * This handles the building of the response for the batch requests we make.

 *

 * @param array $request_params Data to build a WP_REST_Request object from.

 * @return WP_REST_Response Response data for the request.

 */

function prefix_handle_request( $request_params ) {

	$request = new WP_REST_Request( $request_params['method'], $request_params['route'] );

	// Add specified request parameters into the request.

	if ( isset( $request_params['params'] ) ) {

		foreach ( $request_params['params'] as $param_name => $param_value ) {

			$request->set_param( $param_name, $param_value );

		}

	}

	$response = rest_do_request( $request );

	return $response;

}

/**

 * Prepare a response for inserting into a collection of responses.

 *

 * This is lifted from WP_REST_Controller class in the WP REST API v2 plugin.

 *

 * @param WP_REST_Response $response Response object.

 * @return array Response data, ready for insertion into collection data.

 */

function prefix_prepare_for_collection( $response ) {

	if ( ! ( $response instanceof WP_REST_Response ) ) {

		return $response;

	}

	$data = (array) $response->get_data();

	$server = rest_get_server();

	if ( method_exists( $server, 'get_compact_response_links' ) ) {

		$links = call_user_func( array( $server, 'get_compact_response_links' ), $response );

	} else {

		$links = call_user_func( array( $server, 'get_response_links' ), $response );

	}

	if ( ! empty( $links ) ) {

		$data['_links'] = $links;

	}

	return $data;

}

/**

 * Returns the JSON schema data for our registered parameters.

 *

 * @return array $params A PHP representation of JSON Schema data.

 */

function prefix_batch_request_parameters() {

    $params = array();

    $params['requests'] = array(

		'description'        => esc_html__( 'An array of request objects arguments that can be built into WP_REST_Request instances.', 'my-text-domain' ),

		'type'               => 'array',

		'required'           => true,

		'validate_callback'  => 'prefix_validate_requests',

		'items'              => array(

			array(

				'type' => 'object',

				'properties' => array(

					'method' => array(

						'description' => esc_html__( 'HTTP Method of the desired request.', 'my-text-domain' ),

						'type'        => 'string',

						'required'    => true,

						'enum'        => array(

							'GET',

							'POST',

							'PUT',

							'DELETE',

							'OPTIONS',

						),

					),

					'route' => array(

						'description' => esc_html__( 'Desired route for the request.', 'my-text-domain' ),

						'required'    => true,

						'type'        => 'string',

						'format'      => 'uri',

					),

					'params' => array(

						'description' => esc_html__( 'Key value pairs of desired request parameters.', 'my-text-domain' ),

						'type' => 'object',

					),

				),

			),

		),

	);

	return $params;

}

function prefix_validate_requests( $requests, $request, $param_key ) {

	// If requests isn't an array of requests then we don't process the batch.

	if ( ! is_array( $requests ) ) {

		return new WP_Error( 'rest_invald_param', esc_html__( 'The requests parameter must be an array of requests.' ), array( 'status' => 400 ) );

	}

	foreach ( $requests as $request ) {

		// If the method or route is not set then we do not run the requests.

		if ( ! isset( $request['method'] ) || ! isset( $request['route'] ) ) {

			return new WP_Error( 'rest_invald_param', esc_html__( 'You must specify the method and route for each request.' ), array( 'status' => 400 ) );

		}

		if ( isset( $request['params'] ) && ! is_array( $request['params'] ) ) {

			return new WP_Error( 'rest_invald_param', esc_html__( 'You must specify the params for each request as an array of named key value pairs.' ), array( 'status' => 400 ) );

		}

	}

	// This is a black listing approach to data validation.

	return true;

}
```

That is quite a decent chunk of code that covers a number of topics, but everything centers around what happens in `prefix_handle_request()`. Here we are passing in an array that tells us a HTTP method, a route, and a set of parameters we want to turn into a request. We then build the request object for the method and route. If any parameters were specified we use the `WP_REST_Request::set_param()` method to add in the desired parameters. Once our `WP_REST_Request` is ready to go we use `rest_do_request` to internally match that endpoint and the response is returned to our batch endpoint response collection. Using a batch endpoint like this can net you huge performance gains, as you will only make one HTTP request to get a response for multiple endpoints. The implementation of this is not necessarily the best and serves as an example; not the only way to do this.

---

# Responses <a name="plugins/rest-api/responses-2" />

Source: https://developer.wordpress.org/plugins/rest-api/responses-2/

## Overview

Responses in the API are what holds all of the data we want. If we made a mistake in our request, our response’s data should also inform us that an error occurred. Responses in the WordPress REST API should return the data we requested or an error message. Responses in the API are handled by the `WP_REST_Response` class, one of the three infrastructural classes for the API.

## [WP\_REST\_Response](#reference/classes/wp_rest_response)

The `WP_REST_Response` extends WordPress’s `WP_HTTP_Response` class, allowing us access to response headers, response status code, and response data.

```php
// The following code will not do anything and just serves as a demonstration.
$response = new WP_REST_Response( 'This is some data' );

// To get the response data we can use this method. It should equal 'This is some data'.
$our_data = $response->get_data();

// To access the HTTP status code we can use this method. The most common status code is probably 200, which means OK!
$our_status = $response->get_status();

// To access the HTTP response headers we can use this method.
$our_headers = $response->get_headers();
```

The above is pretty straightforward and shows you how to get what you need out of a response. The `WP_REST_Response` takes things a bit further. You can access the matched route for the response to backtrack which endpoint the response came from with `$response->get_matched_route()`. `$response->get_matched_handler()` will return the options registered for the endpoint that produced our response. These could be useful for logging the API among other things. The response class also helps us with error handling.

### Error Handling

If something went terribly wrong in our request, we can return `WP_Error` objects in our endpoint callbacks explaining what went wrong, like this:

```php
// Register our mock batch endpoint.
function prefix_register_broken_route() {
    register_rest_route( 'my-namespace/v1', '/broken', array(
        // Supported methods for this endpoint. WP_REST_Server::READABLE translates to GET.
        'methods' => WP_REST_Server::READABLE,
        // Register the callback for the endpoint.
        'callback' => 'prefix_get_an_error',
    ) );
}

add_action( 'rest_api_init', 'prefix_register_broken_route' );

/**
 * Our registered endpoint callback. Notice how we are passing in $request as an argument.
 * By default, the WP_REST_Server will pass in the matched request object to our callback.
 *
 * @param WP_REST_Request $request The current matched request object.
 */
function prefix_get_an_error( $request ) {
    return new WP_Error( 'oops', esc_html__( 'This endpoint is currently broken, try another endpoint, I promise the API is cool! EEEK!!!!', 'my-textdomain' ), array( 'status' => 400 ) );
}
```

  
That is kind of a silly example but it touches on some key things. The most important thing to understand is that the WordPress REST API will automatically handle changing the [WP\_Error](#reference/classes/wp_error) object into an HTTP Response containing your data. When you set the status code in the `WP_Error` object your HTTP response status code will take on that value. This comes in really handy when you need to use different error codes like 404 for content that wasn’t found, or 403 for forbidden access. All we have to do is have our endpoint callbacks return a request and the `WP_REST_Server` class will handle a lot of really important things for us. There are other cool things the response class can help us with, like Linking.

## Linking

What if we wanted to get a post and the first comment for that post? Would we write a separate endpoint to handle this use case? If we did that, we would need to start adding a lot of endpoints to handle various small use cases and our API index would get bloated really fast. Response Linking provides us a way to form relations between our resources that the API can understand. The API implements a standard known as HAL for resource linking. Let’s look at our post and comment example, it would be better to have routes for each resource.

Let’s say we have post with ID = 1 and comment ID = 3. The comment is assigned to post 1, so realistically the two resources could live at the routes `/my-namespace/v1/posts/1` and `/my-namespace/v1/comments/3`. We would add links to the responses to create the relationships between them. Let’s look at this from the comment perspective first.

```php
// Register our mock endpoints.
function prefix_register_my_routes() {
    register_rest_route( 'my-namespace/v1', '/posts/(?P<id>[\d]+)', array(
        // Supported methods for this endpoint. WP_REST_Server::READABLE translates to GET.
        'methods' => WP_REST_Server::READABLE,
        // Register the callback for the endpoint.
        'callback' => 'prefix_get_rest_post',
    ) );
    register_rest_route( 'my-namespace/v1', '/comments', array(
        // Supported methods for this endpoint. WP_REST_Server::READABLE translates to GET.
        'methods' => WP_REST_Server::READABLE,
        // Register the callback for the endpoint.
        'callback' => 'prefix_get_rest_comments',
        // Register the post argument to limit results to a specific post parent.
        'args' => array(
            'post' => array(
                'description' => esc_html__( 'The post ID that the comment is assigned to.', 'my-textdomain' ),
                'type'        => 'integer',
                'required'    => true,
            ),
        ),
    ) );
    register_rest_route( 'my-namespace/v1', '/comments/(?P<id>[\d]+)', array(
        // Supported methods for this endpoint. WP_REST_Server::READABLE translates to GET.
        'methods' => WP_REST_Server::READABLE,
        // Register the callback for the endpoint.
        'callback' => 'prefix_get_rest_comment',
    ) );
}

add_action( 'rest_api_init', 'prefix_register_my_routes' );

// Grab a post.
function prefix_get_rest_post( $request ) {
    $id = (int) $request['id'];
    $post = get_post( $id );

    $response = rest_ensure_response( array( $post ) );

    $response->add_links( prefix_prepare_post_links( $post ) );

    return $response;
}

// Prepare post links.
function prefix_prepare_post_links( $post ) {
    $links = array();

    $replies_url = rest_url( 'my-namespace/v1/comments' );
    $replies_url = add_query_arg( 'post', $post->ID, $replies_url );
    $links['replies'] = array(
		'href'         => $replies_url,
		'embeddable'   => true,
    );

    return $links;
}

// Grab a comments.
function prefix_get_rest_comments( $request ) {
    if ( ! isset( $request['post'] ) ) {
        return new WP_Error( 'rest_bad_request', esc_html__( 'You must specify the post parameter for this request.', 'my-text-domain' ), array( 'status' => 400 ) );
    }

    $data = array();

    $comments = get_comments( array( 'post__in' => $request['post'] ) );

    if ( empty( $comments ) ) {
        return array();
    }

    foreach( $comments as $comment ) {
        $response = rest_ensure_response( $comment );
        $response->add_links( prefix_prepare_comment_links( $comment ) );
        $data[] = prefix_prepare_for_collection( $response );
    }

    $response = rest_ensure_response( $data );
    return $response;
}

// Grab a comment.
function prefix_get_rest_comment( $request ) {
    $id = (int) $request['id'];
    $post = get_comment( $id );

    $response = rest_ensure_response( $comment );

    $response->add_links( prefix_prepare_comment_links( $comment ) );

    return $response;
}

// Prepare comment links.
function prefix_prepare_comment_links( $comment ) {
    $links = array();
    if ( 0 !== (int) $comment->comment_post_ID ) {
        $post = get_post( $comment->comment_post_ID );
        if ( ! empty( $post->ID ) ) {
        $links['up'] = array(
                'href'       => rest_url( 'my-namespace/v1/posts/' . $comment->comment_post_ID ),
                'embeddable' => true,
                'post_type'  => $post->post_type,
            );
        }
    }
    return $links;
}

/**
 * Prepare a response for inserting into a collection of responses.
 *
 * This is lifted from WP_REST_Controller class in the WP REST API v2 plugin.
 *
 * @param WP_REST_Response $response Response object.
 * @return array Response data, ready for insertion into collection data.
 */
function prefix_prepare_for_collection( $response ) {
	if ( ! ( $response instanceof WP_REST_Response ) ) {
		return $response;
	}

	$data = (array) $response->get_data();
	$server = rest_get_server();

	if ( method_exists( $server, 'get_compact_response_links' ) ) {
		$links = call_user_func( array( $server, 'get_compact_response_links' ), $response );
	} else {
		$links = call_user_func( array( $server, 'get_response_links' ), $response );
	}

	if ( ! empty( $links ) ) {
		$data['_links'] = $links;
	}

	return $data;
}
```

As you can see in the example above we are using links to create the relations between our resources. If the post has comments, our endpoint callback will add a link to the comments route specifying the `post` parameter to match our current post ID. So if you were to follow that route you would now get the comments that have that assigned post ID. If you search for comments then each comment will have a link point `up` to the post. `up` has special meaning in links using the HAL spec. If we follow an up link for a comment then we will be returned the post that is the comment parent. Linking is pretty awesome, but it gets better.

The WordPress REST API also supports what is referred to as embedding. If you notice in both of the links we added, we specified that `embeddable => true`. This enables us to embed our linked data in our responses. So if we wanted to grab comment 3 and its assigned post we could make this request `https://ourawesomesite.com/wp-json/my-namespace/v1/comments/3?_embed`. The `_embed` parameter tells the API we want all of the embeddable resource links for our request to also be added to the API. Using embed is a performance gain as the multiple resources are all handled in one HTTP Request.

Smart use of embedding and links make the WordPress REST API incredibly flexible and powerful for interacting with WordPress.

---

# Schema <a name="plugins/rest-api/schema" />

Source: https://developer.wordpress.org/plugins/rest-api/schema/

## Overview

Schema is data that tells us how are other data should be structured. Most databases implement some form of schema which enables us to reason about our data in a more structured manner. The WordPress REST API utilizes JSON Schema to handle the structuring of its data. You can implement endpoints without using schema, but you will be missing out on a lot of things. It is up to you to decide what suits you best. ## JSON Schema

First, let’s talk about JSON a bit. JSON is a human readable data format that resembles JavaScript objects. JSON stands for JavaScript Object Notation. JSON is growing wildly in popularity and seems to be taking the world of data structure by storm. The WordPress REST API uses a special specification for JSON known as JSON schema. To learn more about JSON Schema please check out the [JSON Schema website](http://json-schema.org/) and this [easier to understand introduction to JSON Schema](https://spacetelescope.github.io/understanding-json-schema/index.html). Schema affords us many benefits: improved testing, discoverability, and overall better structure. Let’s look at a JSON blob of data. ```js
{

    "shouldBeArray": 'LOL definitely not an array',

    "shouldBeInteger": ['lolz', 'you', 'need', 'schema'],

    "shouldBeString": 123456789

}
```

A JSON parser will go through that data no problem and won’t complain about anything, because it is valid JSON. The clients and servers know nothing about the data and what to expect they just see the JSON. By implementing schema we can actually simplify our codebase. Schema will help structure our data better so our applications can more easily reason about our interactions with the WordPress REST API. The WordPress REST API does not force you to use schema, but it is encouraged. There are two ways in which schema data is incorporated into the API; schema for resources and schema for our registered arguments. ## Resource Schema

The schema for a resource indicates what fields are present for a particular object. When we register our routes we can also specify the resource schema for the route. Let’s look at what a simple comment schema might look like in a PHP representation of JSON schema. ```php
// Register our routes.

function prefix_register_my_comment_route() {

	register_rest_route( 'my-namespace/v1', '/comments', array(

		// Notice how we are registering multiple endpoints the 'schema' equates to an OPTIONS request.

		array(

			'methods'  => 'GET',

			'callback' => 'prefix_get_comment_sample',

		),

		// Register our schema callback.

		'schema' => 'prefix_get_comment_schema',

	) );

}

add_action( 'rest_api_init', 'prefix_register_my_comment_route' );

/**

 * Grabs the five most recent comments and outputs them as a rest response.

 *

 * @param WP_REST_Request $request Current request.

 */

function prefix_get_comment_sample( $request ) {

	$args = array(

		'post_per_page' => 5,

	);

	$comments = get_comments( $args );

	$data = array();

	if ( empty( $comments ) ) {

		return rest_ensure_response( $data );

	}

	foreach ( $comments as $comment ) {

		$response = prefix_rest_prepare_comment( $comment, $request );

		$data[] = prefix_prepare_for_collection( $response );

	}

	// Return all of our comment response data.

	return rest_ensure_response( $data );

}

/**

 * Matches the comment data to the schema we want.

 *

 * @param WP_Comment $comment The comment object whose response is being prepared.

 */

function prefix_rest_prepare_comment( $comment, $request ) {

	$comment_data = array();

	$schema = prefix_get_comment_schema( $request );

	// We are also renaming the fields to more understandable names.

	if ( isset( $schema['properties']['id'] ) ) {

		$comment_data['id'] = (int) $comment->comment_id;

	}

	if ( isset( $schema['properties']['author'] ) ) {

		$comment_data['author'] = (int) $comment->user_id;

	}

	if ( isset( $schema['properties']['content'] ) ) {

		$comment_data['content'] = apply_filters( 'comment_text', $comment->comment_content, $comment );

	}

	return rest_ensure_response( $comment_data );

}

/**

 * Prepare a response for inserting into a collection of responses.

 *

 * This is copied from WP_REST_Controller class in the WP REST API v2 plugin.

 *

 * @param WP_REST_Response $response Response object.

 * @return array Response data, ready for insertion into collection data.

 */

function prefix_prepare_for_collection( $response ) {

	if ( ! ( $response instanceof WP_REST_Response ) ) {

		return $response;

	}

	$data = (array) $response->get_data();

	$server = rest_get_server();

	if ( method_exists( $server, 'get_compact_response_links' ) ) {

		$links = call_user_func( array( $server, 'get_compact_response_links' ), $response );

	} else {

		$links = call_user_func( array( $server, 'get_response_links' ), $response );

	}

	if ( ! empty( $links ) ) {

		$data['_links'] = $links;

	}

	return $data;

}

/**

 * Get our sample schema for comments.

 *

 * @param WP_REST_Request $request Current request.

 */

function prefix_get_comment_schema( $request ) {

	$schema = array(

		// This tells the spec of JSON Schema we are using which is draft 4.

		'$schema'              => 'http://json-schema.org/draft-04/schema#',

		// The title property marks the identity of the resource.

		'title'                => 'comment',

		'type'                 => 'object',

		// In JSON Schema you can specify object properties in the properties attribute.

		'properties'           => array(

			'id' => array(

				'description'  => esc_html__( 'Unique identifier for the object.', 'my-textdomain' ),

				'type'         => 'integer',

				'context'      => array( 'view', 'edit', 'embed' ),

				'readonly'     => true,

			),

			'author' => array(

				'description'  => esc_html__( 'The id of the user object, if author was a user.', 'my-textdomain' ),

				'type'         => 'integer',

			),

			'content' => array(

				'description'  => esc_html__( 'The content for the object.', 'my-textdomain' ),

				'type'         => 'string',

			),

		),

	);

	return $schema;

}
```

If you notice, each comment resource now matches up to our schema that we specified. We made this switch in `prefix_rest_prepare_comment()`. By creating schema for our resources, we can now view this schema by making `OPTIONS` requests. Why is this useful? If we wanted other languages, JavaScript for example, to interpret our data and validate the data from our endpoint, JavaScript would need to know how our data is structured. When we provide schema, we open the doors for other authors, and ourselves, to build on top of our endpoints in a consistent manner. Schema provides machine readable data, so potentially anything that can read JSON can understand what kind of data it is looking at. When we look at the API index by making a `GET` request to `https://ourawesomesite.com/wp-json/`, we are returned the schema of our API, enabling others to write client libraries to interpret our data. This process of reading schema data is known as discovery. When we have provided schema for a resource we make that resource discoverable via `OPTIONS` requests to that route. Exposing resource schema is only one part of our schema puzzle. We also want to use schema for our registered arguments. ## Argument Schema

When we register request arguments for an endpoint, we can also use JSON Schema to provide us data about what the arguments should be. This enables us to write validation libraries that can be reused as our endpoints expand. Schema is more work upfront, but if you are going to write a production application that will grow, you should definitely consider using schema. Let’s look at an example of using argument schema and validation. ```php
// Register our routes.

function prefix_register_my_arg_route() {

	register_rest_route( 'my-namespace/v1', '/schema-arg', array(

		// Here we register our endpoint.

		array(

			'methods'  => 'GET',

			'callback' => 'prefix_get_item',

			'args' => prefix_get_endpoint_args(),

		),

	) );

}

// Hook registration into 'rest_api_init' hook.

add_action( 'rest_api_init', 'prefix_register_my_arg_route' );

/**

 * Returns the request argument `my-arg` as a rest response.

 *

 * @param WP_REST_Request $request Current request.

 */

function prefix_get_item( $request ) {

	// If we didn't use required in the schema this would throw an error when my arg is not set.

	return rest_ensure_response( $request['my-arg'] );

}

/**

 * Get the argument schema for this example endpoint.

 */

function prefix_get_endpoint_args() {

	$args = array();

	// Here we add our PHP representation of JSON Schema.

	$args['my-arg'] = array(

		'description'       => esc_html__( 'This is the argument our endpoint returns.', 'my-textdomain' ),

		'type'              => 'string',

		'validate_callback' => 'prefix_validate_my_arg',

		'sanitize_callback' => 'prefix_sanitize_my_arg',

		'required'          => true,

	);

	return $args;

}

/**

 * Our validation callback for `my-arg` parameter.

 *

 * @param mixed           $value   Value of the my-arg parameter.

 * @param WP_REST_Request $request Current request object.

 * @param string          $param   The name of the parameter in this case, 'my-arg'.

 */

function prefix_validate_my_arg( $value, $request, $param ) {

	$attributes = $request->get_attributes();

	if ( isset( $attributes['args'][ $param ] ) ) {

		$argument = $attributes['args'][ $param ];

		// Check to make sure our argument is a string.

		if ( 'string' === $argument['type'] && ! is_string( $value ) ) {

			return new WP_Error( 'rest_invalid_param', sprintf( esc_html__( '%1$s is not of type %2$s', 'my-textdomain' ), $param, 'string' ), array( 'status' => 400 ) );

		}

	} else {

		// This code won't execute because we have specified this argument as required.

		// If we reused this validation callback and did not have required args then this would fire.

		return new WP_Error( 'rest_invalid_param', sprintf( esc_html__( '%s was not registered as a request argument.', 'my-textdomain' ), $param ), array( 'status' => 400 ) );

	}

	// If we got this far then the data is valid.

	return true;

}

/**

 * Our santization callback for `my-arg` parameter.

 *

 * @param mixed           $value   Value of the my-arg parameter.

 * @param WP_REST_Request $request Current request object.

 * @param string          $param   The name of the parameter in this case, 'my-arg'.

 */

function prefix_sanitize_my_arg( $value, $request, $param ) {

	$attributes = $request->get_attributes();

	if ( isset( $attributes['args'][ $param ] ) ) {

		$argument = $attributes['args'][ $param ];

		// Check to make sure our argument is a string.

		if ( 'string' === $argument['type'] ) {

			return sanitize_text_field( $value );

		}

	} else {

		// This code won't execute because we have specified this argument as required.

		// If we reused this validation callback and did not have required args then this would fire.

		return new WP_Error( 'rest_invalid_param', sprintf( esc_html__( '%s was not registered as a request argument.', 'my-textdomain' ), $param ), array( 'status' => 400 ) );

	}

	// If we got this far then something went wrong don't use user input.

	return new WP_Error( 'rest_api_sad', esc_html__( 'Something went terribly wrong.', 'my-textdomain' ), array( 'status' => 500 ) );

}
```

In the example above we have abstracted away from using the `'my-arg'` name. We can use these validation and sanitizing functions for any other argument that should be a string we have specified schema for. As your codebase and endpoints grow, schema will help keep your code lightweight and maintainable. Without schema you can validate and sanitize, however it will be more difficult to keep track of which functions should be validating what. By adding schema to request arguments we can also expose our argument schema to clients, so validation libraries can be built client side which can help performance by preventing invalid requests from ever being sent to the API. 

If you are uncomfortable with using schema, it is still possible to have validate/sanitize callbacks for each of your arguments, and in some cases it will make the most sense to do a custom validation.

## Overview

Schema can seem silly at points and possibly like unnecessary work, but if you want maintainable, discoverable, and easily extensible endpoints, it is essential to use schema. Schema also helps to self document your endpoints both for humans and computers!

---

# Controller Classes <a name="plugins/rest-api/controller-classes" />

Source: https://developer.wordpress.org/plugins/rest-api/controller-classes/

## Overview

When writing endpoints it can be helpful to use a controller class to handle the functionality of an endpoint. Controller classes will provide a standard way to interact with the API and also a more maintainable way to interact with the API. WordPress’s current minimum PHP version is 5.2, if you are developing endpoints that will be used by the WordPress ecosystem at large you should consider supporting WordPress’s minimum requirements.

PHP 5.2 does not have namespacing built into it. This means that every function you declare will be in the global scope. If you decide to use a common function name for endpoints like `get_items()` and another plugin also registers that function, PHP will fail with a fatal error. This is because the function `get_items()` is being declared twice. By wrapping our endpoints we can avoid these naming conflicts and also have a consistent way to interact with the API.

## Controllers

Controllers typically do one thing; they receive input, and generate output. For the WordPress REST API our controllers will handle request input as `WP_REST_Request` objects and generate response output as `WP_REST_Response` objects. Let’s look at an example controller class:

```php
class My_REST_Posts_Controller {

	// Here initialize our namespace and resource name.
	public function __construct() {
		$this->namespace     = '/my-namespace/v1';
		$this->resource_name = 'posts';
	}

	// Register our routes.
	public function register_routes() {
		register_rest_route( $this->namespace, '/' . $this->resource_name, array(
			// Here we register the readable endpoint for collections.
			array(
				'methods'   => 'GET',
				'callback'  => array( $this, 'get_items' ),
				'permission_callback' => array( $this, 'get_items_permissions_check' ),
			),
			// Register our schema callback.
			'schema' => array( $this, 'get_item_schema' ),
		) );
		register_rest_route( $this->namespace, '/' . $this->resource_name . '/(?P<id>[\d]+)', array(
			// Notice how we are registering multiple endpoints the 'schema' equates to an OPTIONS request.
			array(
				'methods'   => 'GET',
				'callback'  => array( $this, 'get_item' ),
				'permission_callback' => array( $this, 'get_item_permissions_check' ),
			),
			// Register our schema callback.
			'schema' => array( $this, 'get_item_schema' ),
		) );
	}

	/**
	 * Check permissions for the posts.
	 *
	 * @param WP_REST_Request $request Current request.
	 */
	public function get_items_permissions_check( $request ) {
		if ( ! current_user_can( 'read' ) ) {
			return new WP_Error( 'rest_forbidden', esc_html__( 'You cannot view the post resource.' ), array( 'status' => $this->authorization_status_code() ) );
		}
		return true;
	}

	/**
	 * Grabs the five most recent posts and outputs them as a rest response.
	 *
	 * @param WP_REST_Request $request Current request.
	 */
	public function get_items( $request ) {
		$args = array(
			'post_per_page' => 5,
		);
		$posts = get_posts( $args );

		$data = array();

		if ( empty( $posts ) ) {
			return rest_ensure_response( $data );
		}

		foreach ( $posts as $post ) {
			$response = $this->prepare_item_for_response( $post, $request );
			$data[] = $this->prepare_response_for_collection( $response );
		}

		// Return all of our comment response data.
		return rest_ensure_response( $data );
	}

	/**
	 * Check permissions for the posts.
	 *
	 * @param WP_REST_Request $request Current request.
	 */
	public function get_item_permissions_check( $request ) {
		if ( ! current_user_can( 'read' ) ) {
			return new WP_Error( 'rest_forbidden', esc_html__( 'You cannot view the post resource.' ), array( 'status' => $this->authorization_status_code() ) );
		}
		return true;
	}

	/**
	 * Grabs the five most recent posts and outputs them as a rest response.
	 *
	 * @param WP_REST_Request $request Current request.
	 */
	public function get_item( $request ) {
		$id = (int) $request['id'];
		$post = get_post( $id );

		if ( empty( $post ) ) {
			return rest_ensure_response( array() );
		}

		$response = prepare_item_for_response( $post );

		// Return all of our post response data.
		return $response;
	}

	/**
	 * Matches the post data to the schema we want.
	 *
	 * @param WP_Post $post The comment object whose response is being prepared.
	 */
	public function prepare_item_for_response( $post, $request ) {
		$post_data = array();

		$schema = $this->get_item_schema( $request );

		// We are also renaming the fields to more understandable names.
		if ( isset( $schema['properties']['id'] ) ) {
			$post_data['id'] = (int) $post->ID;
		}

		if ( isset( $schema['properties']['content'] ) ) {
			$post_data['content'] = apply_filters( 'the_content', $post->post_content, $post );
		}

		return rest_ensure_response( $post_data );
	}

	/**
	 * Prepare a response for inserting into a collection of responses.
	 *
	 * This is copied from WP_REST_Controller class in the WP REST API v2 plugin.
	 *
	 * @param WP_REST_Response $response Response object.
	 * @return array Response data, ready for insertion into collection data.
	 */
	public function prepare_response_for_collection( $response ) {
		if ( ! ( $response instanceof WP_REST_Response ) ) {
			return $response;
		}

		$data = (array) $response->get_data();
		$server = rest_get_server();

		if ( method_exists( $server, 'get_compact_response_links' ) ) {
			$links = call_user_func( array( $server, 'get_compact_response_links' ), $response );
		} else {
			$links = call_user_func( array( $server, 'get_response_links' ), $response );
		}

		if ( ! empty( $links ) ) {
			$data['_links'] = $links;
		}

		return $data;
	}

	/**
	 * Get our sample schema for a post.
	 *
	 * @param WP_REST_Request $request Current request.
	 */
	public function get_item_schema( $request ) {
		$schema = array(
			// This tells the spec of JSON Schema we are using which is draft 4.
			'$schema'              => 'http://json-schema.org/draft-04/schema#',
			// The title property marks the identity of the resource.
			'title'                => 'post',
			'type'                 => 'object',
			// In JSON Schema you can specify object properties in the properties attribute.
			'properties'           => array(
				'id' => array(
					'description'  => esc_html__( 'Unique identifier for the object.', 'my-textdomain' ),
					'type'         => 'integer',
					'context'      => array( 'view', 'edit', 'embed' ),
					'readonly'     => true,
				),
				'content' => array(
					'description'  => esc_html__( 'The content for the object.', 'my-textdomain' ),
					'type'         => 'string',
				),
			),
		);

		return $schema;
	}

	// Sets up the proper HTTP status code for authorization.
	public function authorization_status_code() {

		$status = 401;

		if ( is_user_logged_in() ) {
			$status = 403;
		}

		return $status;
	}
}

// Function to register our new routes from the controller.
function prefix_register_my_rest_routes() {
	$controller = new My_REST_Posts_Controller();
	$controller->register_routes();
}

add_action( 'rest_api_init', 'prefix_register_my_rest_routes' );
```

## Overview &amp; The Future

Controller classes tackle two big problems for us while developing endpoints; lack of namespacing and consistent structures. It is important to note that you should not abuse inheritance of your endpoints. For example: if you wrote a controller class for a posts endpoint, like the above example, and wanted to support custom post types as well, you should **NOT** extend your `My_REST_Posts_Controller` like this `class My_CPT_REST_Controller extends My_REST_Posts_Controller`.

Instead you should either create an entirely separate controller class or make `My_REST_Posts_Controller` handle all available post types. When you start go down the dark chasm of inheritance, it is important to understand that if the parent classes ever have to change at any point and your subclasses are dependent on them, you will have a major headache. In most cases, you will want to create a base controller class as either an `interface` or `abstract class`, that each of your endpoint controllers can implement or extend. The `abstract class` approach is being taken by the WP REST API team for the potential inclusion to core for the `WP_REST_Controller` class.

Currently, “core endpoints” supporting posts, post types, post statuses, revisions, taxonomies, terms, users, comments, and attachments/media resources, are being developed in a feature plugin that will hopefully be moved into WordPress core at some point. Within the plugin is a proposed `WP_REST_Controller` class that can be used to build your own controllers for your endpoints. `WP_REST_Controller` features a lot of advantages and a consistent way to create endpoints for the API.

---

# JavaScript <a name="plugins/javascript" />

Source: https://developer.wordpress.org/plugins/javascript/

JavaScript is an important component in many WordPress plugins. WordPress comes with a [variety of JavaScript libraries bundled with core](#theme/basics/including-css-javascript). One of the most commonly-used libraries in WordPress is jQuery because it is lightweight and easy to use. jQuery can be used in your plugin to manipulate the DOM object or to perform Ajax actions.

---

# Heartbeat API <a name="plugins/javascript/heartbeat-api" />

Source: https://developer.wordpress.org/plugins/javascript/heartbeat-api/

The Heartbeat API is a simple server polling API built in to WordPress, allowing near-real-time frontend updates.

## How it works

When the page loads, the client-side heartbeat code sets up an interval (called the “tick”) to run every 15-120 seconds. When it runs, heartbeat gathers data to send via a jQuery event, then sends this to the server and waits for a response. On the server, an admin-ajax handler takes the passed data, prepares a response, filters the response, then returns the data in JSON format. The client receives this data and fires a final jQuery event to indicate the data has been received.

The basic process for custom Heartbeat events is:

1. Add additional fields to the data to be sent (JS `heartbeat-send` event)
2. Detect sent fields in PHP, and add additional response fields (`heartbeat_received` filter)
3. Process returned data in JS (JS `heartbeat-tick`)

(You can choose to use only one or two of these events, depending on what functionality you need.)

## Using the API

Using the heartbeat API requires two separate pieces of functionality: send and receive callbacks in JavaScript, and a server-side filter to process passed data in PHP.

### Sending Data to the Server

When Heartbeat sends data to the server, you can include custom data. This can be any data you want to send to the server, or a simple true value to indicate you are expecting data.

```js
jQuery( document ).on( 'heartbeat-send', function ( event, data ) {
	// Add additional data to Heartbeat data.
	data.myplugin_customfield = 'some_data';
});
```

### Receiving and Responding on the Server

On the server side, you can then detect this data, and add additional data to the response.

```php
/**
 * Receive Heartbeat data and respond.
 *
 * Processes data received via a Heartbeat request, and returns additional data to pass back to the front end.
 *
 * @param array $response Heartbeat response data to pass back to front end.
 * @param array $data     Data received from the front end (unslashed).
 *
 * @return array
 */
function myplugin_receive_heartbeat( array $response, array $data ) {
	// If we didn't receive our data, don't send any back.
	if ( empty( $data['myplugin_customfield'] ) ) {
		return $response;
	}

	// Calculate our data and pass it back. For this example, we'll hash it.
	$received_data = $data['myplugin_customfield'];

	$response['myplugin_customfield_hashed'] = sha1( $received_data );
	return $response;
}
add_filter( 'heartbeat_received', 'myplugin_receive_heartbeat', 10, 2 );
```

### Processing the Response

Back on the frontend, you can then handle receiving this data back.

```js
jQuery( document ).on( 'heartbeat-tick', function ( event, data ) {
	// Check for our data, and use it.
	if ( ! data.myplugin_customfield_hashed ) {
		return;
	}

	alert( 'The hash is ' + data.myplugin_customfield_hashed );
});
```

  
Not every feature will need all three of these steps. For example, if you don’t need to send any data to the server, you can use just the latter two steps.

---

# jQuery <a name="plugins/javascript/jquery" />

Source: https://developer.wordpress.org/plugins/javascript/jquery/

## Using jQuery

Your jQuery script runs on the user’s browser after your WordPress webpage is received. A basic jQuery statement has two parts: a selector that determines which HTML elements the code applies to, and an action or event, which determines what the code does or what it reacts to. The basic event statement looks like this:

```javascript
jQuery.(selector).event(function);
```

When an event, such as a mouse click, occurs in an HTML element selected by the selector, the function that is defined inside the final set of parentheses is executed.

All the following code examples are based on this HTML page content. Assume it appears on your plugin’s admin settings screen, defined by the file `myplugin_settings.php`. It is a simple table with radio buttons next to each title.

```markup
<form id="radioform">
	<table>
		<tbody>
		<tr>
			<td><input class="pref" checked="checked" name="book" type="radio" value="Sycamore Row" />Sycamore Row</td>
			<td>John Grisham</td>
		</tr>
		<tr>
			<td><input class="pref" name="book" type="radio" value="Dark Witch" />Dark Witch</td>
			<td>Nora Roberts</td>
		</tr>
		</tbody>
	</table>
</form>
```

The output could look something like this on your settings page.

![sample table](https://i0.wp.com/make.wordpress.org/docs/files/2013/11/pdh-ajax-example.png?ssl=1)In the [article on AJAX](#plugin/javascript/ajax "AJAX"), we will build an AJAX exchange that saves the user selection in usermeta and adds the number of posts tagged with the selected title. Not a very practical application, but it illustrates all the important steps. jQuery code can either reside in an external file or be output to the page inside a &lt;script&gt; block. We will focus on the external file variation because passing values from PHP requires special attention. The same code can be output to the page if that seems more expedient to you.

#### Selector and Event

The selector is the same form as CSS selectors: ".class" or "#id". There’s many [more forms](http://api.jquery.com/category/selectors/ "jQuery Reference"), but these are the two you will frequently use. In our example, we will use class ".pref". There’s also a slew of possible [events](http://api.jquery.com/category/events/ "jQuery Reference"), one you will likely use a lot is *‘click’*. In our example we will use *‘change’* to capture a radio button selection. Be aware that jQuery events are often named somewhat differently than those with JavaScript. So far, after we add in an empty anonymous function, our example statement looks like this:

```javascript
$.(".pref").change(function(){
	/*do stuff*/
});
```

This code will “do stuff” when any element of the “pref” class changes.

**Note:** This code snippet, and all examples on this page, are for illustrating the use of AJAX. The code is not suitable for production environments because related operations such as [sanitization](../../plugin-security/securing-input/ "Handbook Chapter"), [security](../../plugin-security/user-capabilities-nonces/#nonces "Handbook Chapter"), [error handling](http://www.sitepoint.com/error-handling-in-php/ "External Site"), and [internationalization](../internationalization/ "Handbook Chapter") have been intentionally omitted. Be sure to always address these important operations in your production code.

---

# AJAX <a name="plugins/javascript/ajax" />

Source: https://developer.wordpress.org/plugins/javascript/ajax/

## What is AJAX?

AJAX is the acronym for Asynchronous JavaScript And XML. XML is a data exchange format and UX is software developer shorthand for User Experience. Ajax is an Internet communications technique that allows a web page displayed in a user’s browser to request specific information from a server and display this new information on the same page without the need to reload the entire page. You can already imagine how this improves the user experience.

While XML is the traditional data exchange format used, the exchange can actually be any convenient format. When working with PHP code, many developers favor JSON because the internal data structure created from the transmitted data stream is easier to interface with.

To see AJAX in action, go to your WordPress administration area and add a category or tag. Pay close attention when you click the Add New button, notice the page changes but does not actually reload. Not convinced? Check your browser’s back history, if the page had reloaded, you would see two entries for the page.

AJAX does not even require a user action to work. Google Docs automatically saves your document every few minutes with AJAX without you needing to initiate a save action.

## Why use AJAX?

Obviously, it improves the user experience. Instead of presenting a boring, static page, AJAX allows you to present a dynamic, responsive, user friendly experience. Users can get immediate feedback that some action they took was right or wrong. No need to submit an entire form before finding out there is a mistake in one field. Important fields can be validated as soon as the data is entered. Or suggestions could be made as the user types.

AJAX can dramatically decrease the amount of data flowing back and forth. Only the pertinent data needs to be exchanged instead of all of the page content, which is what happens when the page reloads.

Specifically related to WordPress plugins, AJAX is by far the best way to initiate a process independent of WordPress content. If you’ve programmed PHP before, you would likely do this by simply linking to a new PHP page. The user following the link initiates the process. The problem with this is that you cannot access any WordPress functions when you link to a new external PHP page. In the past, developers accessed WordPress functions by including the core file `wp-load.php` on their new PHP page. The problem with doing that is you cannot possibly know the correct path to this file anymore. The WordPress architecture is now flexible enough that the `/wp-content/` and your plugin files can be moved from its usual location to one level from the installation root. You cannot know where `wp-load.php` is relative to your plugin files, and you cannot know the absolute path to the installation folder either.

What you can know is where to send an AJAX request, because it is defined in a global JavaScript variable. Your PHP AJAX handler script is actually an action hook, so all WordPress functions are automatically available to it, unlike an external PHP file.

## How Do I Use AJAX?

If you are new to WordPress but have experience using AJAX in other environments, you will need to relearn a few things. The way WordPress implements AJAX is most likely different than what you are used to. If everything is new to you, no problem. You will learn the basics here. Once you’ve developed a basic AJAX exchange, it’s a cinch to expand on that base and develop that killer app with an awesome user interface!

There are two major components of any AJAX exchange in WordPress. The client side JavaScript or jQuery and the server side PHP. All AJAX exchanges follow the following sequence of events.

1. Some sort of page event initiates a JavaScript or jQuery function. That function gathers some data from the page and sends it via a HTTP request to the server. Because handling HTTP requests with JavaScript is awkward and jQuery is bundled into WordPress anyway, we are going to focus only on jQuery code from here on out. AJAX with straight JavaScript is possible, but it’s not worth doing it when jQuery is available.
2. The server receives the request and does something with the data. It may assemble related data and send it back to the client browser in the form of an HTTP response. This is not a requirement, but since keeping the user informed about what’s going on is desirable, it’s very rare not to send some kind of response.
3. The jQuery function that sent the initial AJAX request receives the server response and does something with it. It may update something on the page and/or present a message to the user by some means.

## Using AJAX with jQuery

Now we will define the “do stuff” portion from the [snippet in the article on jQuery](#plugin/javascript/jquery). We will use the [$.post()](http://api.jquery.com/jQuery.post/ "jQuery Reference") method, which takes 3 parameters: the URL to send the POST request to, the data to send, and a callback function to handle the server response. Before we do that though, we have a bit of advance planning to get out of the way. We do the following assignment for use later in the callback function. The purpose will be more evident in the [Callback section](#callback "Page section").

```javascript
var this2 = this;
```

### URL

All WordPress AJAX requests must be sent to `wp-admin/admin-ajax.php`. The correct, complete URL needs to come from PHP, jQuery cannot determine this value on its own, and you cannot hardcode the URL in your jQuery code and expect anyone else to use your plugin on their site. If the page is from the administration area, WordPress sets the correct URL in the global JavaScript variable ajaxurl. For a page from the public area, you will need to establish the correct URL yourself and pass it to jQuery using [wp\_localize\_script()](#reference/functions/wp_localize_script) . This will be covered in more detail in the [PHP section](#plugin/javascript/enqueuing "Server Side PHP and Enqueuing"). For now just know that the URL that will work for both the front and back end is available as a property of a global object that you will define in the PHP segment. In jQuery it is referenced like so:

```javascript
my_ajax_obj.ajax_url
```

### Data

All data that needs to be sent to the server is included in the data array. Besides any data needed by your app, you must send an action parameter. For requests that could result in a change to the database you need to send a nonce so the server knows the request came from a legitimate source. Our example data array provided to the .post() method looks like this:

```json
{
  _ajax_nonce: my_ajax_obj.nonce, // nonce
  action: "my_tag_count", // action
  title: this.value // data
}
```

Each component is explained below.

### Nonce

[Nonce](https://codex.wordpress.org/WordPress_Nonces "Codex reference") is a portmanteau of “Number used ONCE”. It is essentially a unique serial number assigned to each instance of any form served. The nonce is established with PHP script and passed to jQuery the same way the URL was, as a property in a global object. In this case it is referenced as my\_ajax\_obj.nonce.

**Note**

A true nonce needs to be refreshed every time it is used so the next AJAX call has a new, unused nonce to send as verification. As it happens, the WordPress nonce implementation is not a true nonce. The same nonce can be used as many times as necessary in a 24 hour period, unless you logout. Generating a nonce with the same seed phrase will always yield the same number for a 12 hour period after which a new number will finally be generated.

If your app needs serious security, implement a true nonce system where the server sends a new, fresh nonce in response to an Ajax request for the script to use to verify the next request.

It’s easiest if you key this nonce value to \_ajax\_nonce. You can use a different key if it’s coordinated with the PHP code verifying the nonce, but it’s easier to just use the default value and not worry about coordination. Here is the way the declaration of this key-value pair appears:

```javascript
_ajax_nonce: my_ajax_obj.nonce
```

### Action

All WordPress AJAX requests must include an action argument in the data. This value is an arbitrary string that is used in part to construct an action tag you use to hook your AJAX handler code. It’s useful for this value to be a very brief description of the AJAX call’s purpose. Unsurprisingly, the key for this value is *‘action’*. In this example, we will use "my\_tag\_count" as our action value. The declaration of this key-value pair looks like this:

```javascript
action: "my_tag_count"
```

Any other data the server needs to do its task is also included in this array. If there are a lot of fields to transmit, there are two common formats to combine data fields into a single string for more convenient transmission, XML and JSON. Using these formats is optional, but whatever you do does need to be coordinated with the PHP script on the server side. More information on these formats is available in the following Callback section. It is more common to receive data in this format than to send it, but it can work both ways.

In our example, the server only needs one value, a single string for the selected book title, so we will use the key *‘title’*. In jQuery, the object that fired the event is always contained in the variable this. Accordingly, the value of the selected element is this.value. Our declaration of this key-value pair appears like so:

```javascript
title: this.value
```

### Callback

The callback handler is the function to execute when a response comes back from the server after the request is made. Once again, we usually see an anonymous function here. The function is passed one parameter, the server response. The response could be anything from a yes or no to a huge XML database. JSON formatted data is also a useful format for data. The response is not even required. If there is none, then no callback need be specified. In the interest of UX, it’s always a good idea to let the user know what happened to any request, so it is recommended to always respond and provide some indication that something happened.

In our example, we replace the current text following the radio input with the server response, which includes the number of posts tagged by the book title. Here is our anonymous callback function:

```javascript
function( data ) {
  this2.nextSibling.remove();
  $( this2 ).after( data );
}
```

data contains the entire server response. Earlier we assigned to this2 the object that triggered the change event (referenced as this) with the line var this2 = this;. This is because variable scope in closures only extends one level. By assigning this2 in the event handler (the part that initially just contained *“/\* do stuff \*/”*), we are able to use it in the callback where this would be out of scope.

The server response can take on any form. Significant quantities of data should be encoded into a data stream for easier handling. XML and JSON are two common encoding schemes.

#### XML

XML is the old data exchange format for AJAX. It is after all the ‘X’ in AJAX. It continues to be a viable exchange format even though it can be difficult to work with using native PHP functions. Many PHP programmers prefer the JSON exchange format for that reason. If you do use XML, the parsing method depends on the browser being used. Use Microsoft.XMLDOM ActiveX for Internet Explorer and use DOMParser for everything else. Note that [Internet Explorer is no longer supported by WordPress](https://make.wordpress.org/core/2021/04/22/ie-11-support-phase-out-plan/) since 5.8 release.

#### JSON

JSON is often favored for its light weight and ease of use. You can actually parse JSON using eval(), but don’t do that! The use of eval() carries significant security risks. Instead, use a dedicated parser, which is also faster. Use the global instance of the parser object JSON. There are [specific functions to provide an easy way to give a response in JSON format](#plugins/javascript/enqueuing) to your AJAX call.

#### Other

As long as the data format is coordinated with the PHP handler, it can be any format you like, such as comma delimited, tab delimited, or any kind of structure that works for you.

#### Client Side Summary

Now that we’ve added our callback as the final parameter for the $.post() function, we’ve completed our sample jQuery Ajax script. All the pieces put together look like this:

```javascript
jQuery(document).ready(function($) {         //wrapper
	$(".pref").change(function() {          //event
		var this2 = this;                  //use in callback
		$.post(my_ajax_obj.ajax_url, {      //POST request
			_ajax_nonce: my_ajax_obj.nonce, //nonce
			action: "my_tag_count",         //action
			title: this.value               //data
			}, function(data) {            //callback
				this2.nextSibling.remove(); //remove current title
				$(this2).after(data);       //insert server response
			}
		);
	} );
} );
```

This script can either be output into a block on the web page or contained in its own file. This file can reside anywhere on the Internet, but most plugin developers place it in a `/js/` subfolder of the plugin’s main folder. Unless you have reason to do otherwise, you may as well follow convention. For this example we will name our file `myjquery.js`

---

# Server Side PHP and Enqueuing <a name="plugins/javascript/enqueuing" />

Source: https://developer.wordpress.org/plugins/javascript/enqueuing/

There are two parts to the server side PHP script that are needed to implement AJAX communication. First we need to enqueue the jQuery script on the web page and localize any PHP values that the jQuery script needs. Second is the actual handling of the AJAX request.

## Enqueue Script

This section covers the two major quirks of AJAX in WordPress that trip up experienced coders new to WordPress. One is the need to enqueue scripts in order to get meta links to appear correctly in the page’s head section. The other is that **all** AJAX requests need to be sent through `wp-admin/admin-ajax.php`. Never send requests directly to your plugin pages.

### Enqueue

Use the function `<a href="#reference/functions/wp_enqueue_script">wp_enqueue_script()</a>` to get WordPress to insert a meta link to your script in the page’s section. Never hardcode such links in the header template. As a plugin developer, you do not have ready access to the header template, but this rule bears mentioning anyway.

The enqueue function accepts five parameters as follows:

- **$handle** is the name for the script.
- **$src** defines where the script is located. For portability, use `plugins_url()` to build the proper URL. If you are enqueuing the script for something besides a plugin, use some related function to create a proper URL – never hardcode it
- **$deps** is an array that can handle any script that your new script depends on, such as jQuery. Since we are using jQuery to send an AJAX request, you will at least need to list `'jquery'` in the array.
- **$ver** lets you list a version number.
- **$args** an array of arguments that define footer printing (via an `in_footer` key) and script loading strategies (via a `strategy` key) such as `defer` or `async`. This replaces/overloads the `$in_footer` parameter as of WordPress version 6.3.

```php
wp_enqueue_script(
	'ajax-script',
	plugins_url( '/js/myjquery.js', __FILE__ ),
	array( 'jquery' ),
	'1.0.,0',
	array(
	   'in_footer' => true,
	)
);
```

You cannot enqueue scripts directly from your plugin code page when it is loaded. Scripts must be enqueued from one of a few action hooks – which one depends on what sort of page the script needs to be linked to. For administration pages, use `admin_enqueue_scripts`. For front-end pages use `wp_enqueue_scripts`, except for the login page, in which case use `login_enqueue_scripts`.

The `admin_enqueue_scripts` hook passes the current page filename to your callback. Use this information to only enqueue your script on pages where it is needed. The front-end version does not pass anything. In that case, use template tags such as `is_home()`, `is_single()`, etc. to ensure that you only enqueue your script where it is needed. This is the complete enqueue code for our example:

```php
add_action( 'admin_enqueue_scripts', 'my_enqueue' );
function my_enqueue( $hook ) {
	if ( 'myplugin_settings.php' !== $hook ) {
		return;
	}
	wp_enqueue_script(
		'ajax-script',
		plugins_url( '/js/myjquery.js', __FILE__ ),
		array( 'jquery' ),
		'1.0.0',
		array(
		   'in_footer' => true,
		)
	);
}
```

Why do we use a named function here but use anonymous functions with jQuery? Because closures are only recently supported by PHP. jQuery has supported them for quite some time. Since some people may still be running older versions of PHP, we always use named functions for maximum compatibility. If you have a recent PHP version and are developing only for your own installation, go ahead and use closures if you like.

#### Register vs. Enqueue

You will see examples in other tutorials that religiously use `<a href="#reference/functions/wp_register_script">wp_register_script()</a>`. This is fine, but its use is optional. What is not optional is `wp_enqueue_script()`. This function must be called in order for your script file to be properly linked on the web page. So why register scripts? It creates a useful tag or handle with which you can easily reference the script in various parts of your code as needed. If you just need your script loaded and are not referencing it elsewhere in your code, there is no need to register it.

#### Delayed Script Loading

WordPress provides support for specifying a script loading strategy via the `wp_register_script()` and `wp_enqueue_script()` functions, by way of the `strategy` key within the new `$args` array parameter introduced in WordPress 6.3.

Supported strategies are as follows:

- **defer**
    - Added by specifying an array key value pair of `'strategy' => 'defer'` to the $args parameter.
    - Scripts marked for deferred execution — via the defer script attribute — are only executed once the DOM tree has fully loaded (but before the `DOMContentLoaded` and window load events). Deferred scripts are executed in the same order they were printed/added in the DOM, unlike asynchronous scripts.
- **async**
    - Added by specifying an array key value pair of `'strategy' => 'async'` to the `$args` parameter.
    - Scripts marked for asynchronous execution — via the `async` script attribute — are executed as soon as they are loaded by the browser. Asynchronous scripts do not have a guaranteed execution order, as script B (although added to the DOM after script A) may execute first given that it may complete loading prior to script A. Such scripts may execute either before the DOM has been fully constructed or after the `DOMContentLoaded` event.

Following is an example of specifying a loading strategy for an additional script enqueue within our plugin:

```php
wp_register_script(
    'ajax-script-two',
    plugins_url( '/js/myscript.js', __FILE__ ),
    array( ajax-script ),
    '1.0.,0',
    array(
          'strategy' => 'defer',
     )
);
```

The same approach applies when using `wp_enqueue_script()`. In the example above, we indicate that we intend to load the `'ajax-script-two'` script in a deferred manner.

When specifying a delayed script loading strategy, consideration of the script’s dependency tree (its dependencies and/or dependents) is taken into account when deciding on an “eligible strategy” so as not to result in application of a strategy that is valid for one script but detrimental to others in the tree by causing an unintended out of order of execution. As a result of such logic, the intended loading strategy that you pass via the `$args` parameter may not be the final (chosen) strategy, but it will never be detrimental to (or stricter than) the intended strategy.

### Nonce

You need to create a nonce so that the jQuery AJAX request can be validated as a legitimate request instead of a potentially nefarious request from some unknown bad actor. Only your PHP script and your jQuery script will know this value. When the request is received, you can verify it is the same value created here. This is how to create a nonce for our example:

```php
$title_nonce = wp_create_nonce( 'title_example' );
```

The parameter `title_example` can be any arbitrary string. It’s suggested the string be related to what the nonce is used for, but it can really be anything that suits you.

### Localize

If you recall from the [jQuery Section](#plugins/javascript/jquery), data created by PHP for use by jQuery was passed in a global object named `my_ajax_obj`. In our example, this data was a nonce and the complete URL to `admin-ajax.php`. The process of assigning object properties and creating the global jQuery object is called **localizing**. This is the localizing code used in our example which uses `<a href="#reference/functions/wp_localize_script">wp_localize_script()</a>`.

```php
wp_localize_script(
	'ajax-script',
	'my_ajax_obj',
	array(
		'ajax_url' => admin_url( 'admin-ajax.php' ),
		'nonce'    => $title_nonce,
	)
);
```

Note how our script handle `ajax-script` is used so that the global object is assigned to the right script. The object is global to our script, not to all scripts. Localization can also be called from the same hook that is used to enqueue scripts. The same goes for creating a nonce, though that particular function can be called virtually anywhere. All of that combined together in a single hook callback looks like this:

```php
add_action( 'admin_enqueue_scripts', 'my_enqueue' );

/**
 * Enqueue my scripts and assets.
 *
 * @param $hook
 */
function my_enqueue( $hook ) {
	if ( 'myplugin_settings.php' !== $hook ) {
		return;
	}
	wp_enqueue_script(
		'ajax-script',
		plugins_url( '/js/myjquery.js', __FILE__ ),
		array( 'jquery' ),
		'1.0.0',
		true
	);

	wp_localize_script(
		'ajax-script',
		'my_ajax_obj',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'nonce'    => wp_create_nonce( 'title_example' ),
		)
	);
}
```

 Remember to only add this nonce localization to the needed pages, do not display a nonce to someone who should not use it. And remember to use `current_user_can()` with a capability or role to complete the security.

## AJAX Action

The other major part of the server side PHP code is the actual AJAX handler that receives the POSTed data, does something with it, then sends an appropriate response back to the browser. This takes on the form of a WordPress [action hook](#plugins/hooks/actions). Which hook tag you use depends on whether the user is logged in or not and what value your jQuery script passed as the *action:* value.

 **$\_GET , $\_POST and $\_COOKIE vs $\_REQUEST**You’ve probably used one or more of the PHP super globals such as `$_GET` or `$_POST` to retrieve values from forms or cookies (using `$_COOKIE`). Maybe you prefer `$_REQUEST` instead, or at least have seen it used. It’s kind of cool – regardless of the request method, `POST` or `GET`, it will have the form values. Works great for pages that use both methods. On top of that, it has cookie values as well. One stop shopping! Therein lies its tragic flaw. In the case of a name conflict, the cookie value will override any form values. Thus it is ridiculously easy for a bad actor to craft a counterfeit cookie on their browser, which will overwrite any form value you might be expecting from the request. `$_REQUEST` is an easy route for hackers to inject arbitrary data into your form values. To be extra safe, stick to the specific variables and avoid the one size fits all.

Since our AJAX exchange is for the plugin’s settings page, the user must be logged in. If you recall from the [jQuery section](#plugins/javascript/jquery), the `action:` value is `"my_tag_count"`. This means our action hook tag will be `wp_ajax_my_tag_count`. If our AJAX exchange were to be utilized by users who were not currently logged in, the action hook tag would be `wp_ajax_nopriv_my_tag_count` The basic code used to hook the action looks like this:

```php
add_action( 'wp_ajax_my_tag_count', 'my_ajax_handler' );

/**
 * Handles my AJAX request.
 */
function my_ajax_handler() {
	// Handle the ajax request here

	wp_die(); // All ajax handlers die when finished
}
```

The first thing your AJAX handler should do is verify the nonce sent by jQuery with `<a href="#reference/functions/check_ajax_referer">check_ajax_referer()</a>`, which should be the same value that was localized when the script was enqueued.

```php
check_ajax_referer( 'title_example' );
```

The provided parameter must be identical to the parameter provided [earlier](#php-nonce) to `wp_create_nonce()`. The function simply dies if the nonce does not check out. If this were a true nonce, now that it was used, the value is no longer any good. You would then generate a new one and send it to the callback script so that it can be used for the next request. But since WordPress nonces are good for twenty-four hours, you needn’t do anything but check it.

### Data

With the nonce out of the way, our handler can deal with the data sent by the jQuery script contained in `$_POST['title']`. First we assign the value to a new variable, after running it through [wp\_unslash()](#reference/functions/wp_unslash) to remove any unexpected quotes.

```php
$title = wp_unslash( $_POST['title'] );
```

We can save the user’s selection in user meta by using [update\_user\_meta()](#reference/functions/update_user_meta).

```php
update_user_meta( get_current_user_id(), 'title_preference', sanitize_post_title( $title ) );
```

Then we build a query in order to get the post count for the selected title tag.

```php
$args      = array(
	'tag' => $title,
);
$the_query = new WP_Query( $args );
```

Finally we can send the response back to the jQuery script. There’s several ways to transmit data. Let’s look at some of the options before we deal with the specifics of our example.

#### XML

PHP support for XML leaves something to be desired. Fortunately, WordPress provides the `<a href="#reference/classes/wp_ajax_response">WP_Ajax_Response</a>` class to make the task easier. The [WP\_Ajax\_Response](#reference/classes/wp_ajax_response) class will generate an XML-formatted response, set the correct content type for the header, output the response xml, then die — ensuring a proper XML response.

#### JSON

This format is lightweight and easy to use, and WordPress provides the `<a href="#reference/functions/wp_send_json">wp_send_json</a>` function to json-encode your response, print it, and die — effectively replacing [WP\_Ajax\_Response](#reference/classes/wp_ajax_response). WordPress also provides the `<a href="#reference/functions/wp_send_json_success">wp_send_json_success</a>` and `<a href="#reference/functions/wp_send_json_error">wp_send_json_error</a>` functions, which allow the appropriate done() or fail() callbacks to fire in JS.

#### Other

You can transfer data any way you like, as long as the sender and receiver are coordinated. Text formats like comma delimited or tab delimited are one of many possibilities. For small amounts of data, sending the raw stream may be adequate. That is what we will do with our example – we will send the actual replacement HTML, nothing else.

```php
echo esc_html( $title ) . ' (' . $the_query->post_count . ') ';
```

In a real world application, you must account for the possibility that the action could fail for some reason–for instance, maybe the database server is down. The response should allow for this contingency, and the jQuery script receiving the response should act accordingly, perhaps telling the user to try again later.

### Die

When the handler has finished all of its tasks, it needs to die. If you are using the [WP\_Ajax\_Response](#reference/classes/wp_ajax_response) or wp\_send\_json\* functions, this is automatically handled for you. If not, simply use the WordPress `<a href="#reference/functions/wp_die">wp_die()</a> `function.

### AJAX Handler Summary

The complete AJAX handler for our example looks like this:

```php
/**
 * AJAX handler using JSON
 */
function my_ajax_handler__json() {
	check_ajax_referer( 'title_example' );
	$title = wp_unslash( $_POST['title'] );

	update_user_meta( get_current_user_id(), 'title_preference', sanitize_post_title( $title ) );

	$args      = array(
		'tag' => $title,
	);
	$the_query = new WP_Query( $args );
	wp_send_json( esc_html( $title ) . ' (' . $the_query->post_count . ') ' );
}
```

```php
/**
 * AJAX handler not using JSON.
 */
function my_ajax_handler() {
	check_ajax_referer( 'title_example' );
	$title = wp_unslash( $_POST['title'] );

	update_user_meta( get_current_user_id(), 'title_preference', sanitize_post_title( $title ) );

	$args      = array(
		'tag' => $title,
	);
	$the_query = new WP_Query( $args );
	echo esc_html( $title ) . ' (' . $the_query->post_count . ') ';
	wp_die(); // All ajax handlers should die when finished
}
```

---

# Summary <a name="plugins/javascript/summary" />

Source: https://developer.wordpress.org/plugins/javascript/summary/

Here are all the example code snippets from the preceding discussion, assembled into two complete code pages: one for jQuery and the other for PHP.

## PHP

This code resides on one of your plugin pages.

```php
add_action( 'admin_enqueue_scripts', 'my_enqueue' );
function my_enqueue( $hook ) {
   if ( 'myplugin_settings.php' !== $hook ) {
      return;
   }

   wp_enqueue_script(
      'ajax-script',
      plugins_url( '/js/myjquery.js', __FILE__ ),
      array( 'jquery' ),
      '1.0.0',
      true
   );

   $title_nonce = wp_create_nonce( 'title_example' );
   wp_localize_script(
      'ajax-script',
      'my_ajax_obj',
      array(
         'ajax_url' => admin_url( 'admin-ajax.php' ),
         'nonce'    => $title_nonce,
      )
   );
}

add_action( 'wp_ajax_my_tag_count', 'my_ajax_handler' );
function my_ajax_handler() {
   check_ajax_referer( 'title_example' );

   $title = wp_unslash( $_POST['title'] );

   update_user_meta( get_current_user_id(), 'title_preference', $title );

   $args = array(
      'tag' => $title,
   );

   $the_query = new WP_Query( $args );

   echo esc_html( $title ) . ' (' . $the_query->post_count . ') ';

   wp_die(); // all ajax handlers should die when finished
}
```

## jQuery

This code is in the file `js/myjquery.js` below your plugin folder.

```javascript
jQuery(document).ready(function($) { 	   //wrapper
	$(".pref").change(function() { 		   //event
		var this2 = this; 		           //use in callback
		$.post(my_ajax_obj.ajax_url, { 	   //POST request
	       _ajax_nonce: my_ajax_obj.nonce, //nonce
			action: "my_tag_count",        //action
	  		title: this.value 	           //data
  		}, function(data) {		           //callback
			this2.nextSibling.remove();    //remove the current title
			$(this2).after(data); 	       //insert server response
		});
	});
});
```

And after storing the preference, the resulting post count is added to the selected title.

## More Information

- [How To Use AJAX In WordPress](http://wp.smashingmagazine.com/2011/10/18/how-to-use-ajax-in-wordpress/ "External Site")
- [AJAX for WordPress](http://www.glennmessersmith.com/pages/wpajax.html "External Site")

---

# Cron <a name="plugins/cron" />

Source: https://developer.wordpress.org/plugins/cron/

## What is WP-Cron

WP-Cron is how WordPress handles scheduling time-based tasks in WordPress. Several WordPress core features, such as checking for updates and publishing scheduled post, utilize WP-Cron. The “Cron” part of the name comes from the cron time-based task scheduling system that is available on UNIX systems.

WP-Cron works by checking, on every page load, a list of scheduled tasks to see what needs to be run. Any tasks due to run will be called during that page load.

WP-Cron does not run constantly as the system cron does; it is only triggered on page load.

Scheduling errors could occur if you schedule a task for 2:00PM and no page loads occur until 5:00PM.

## Why use WP-Cron

- WordPress core and many plugins need a scheduling system to perform time-based tasks. However, many hosting services are shared and do not provide access to the system scheduler.
- Using the WordPress API is a simpler method for setting scheduled tasks than going outside of WordPress to the system scheduler.
- With the system scheduler, if the time passes and the task did not run, it will not be re-attempted. With WP-Cron, all scheduled tasks are put into a queue and will run at the next opportunity (meaning the next page load). So while you can’t be 100% sure *when* your task will run, you can be 100% sure that it will run *eventually*.

---

# Understanding WP-Cron Scheduling <a name="plugins/cron/understanding-wp-cron-scheduling" />

Source: https://developer.wordpress.org/plugins/cron/understanding-wp-cron-scheduling/

Unlike a traditional system cron that schedules tasks for specific times (e.g. “every hour at 5 minutes past the hour”), WP-Cron uses intervals to simulate a system cron.

WP-Cron is given two arguments: the time for the first task, and an interval (in seconds) after which the task should be repeated. For example, if you schedule a task to begin at 2:00PM with an interval of 300 seconds (five minutes), the task would first run at 2:00PM and then again at 2:05PM, then again at 2:10PM, and so on, every five minutes.

To simplify scheduling tasks, WordPress provides some default intervals and an easy method for adding custom intervals.

The default intervals provided by WordPress are:

- hourly
- twicedaily
- daily
- weekly (since WP 5.4)

## Custom Intervals

To add a custom interval, you can create a filter, such as:

```php
add_filter( 'cron_schedules', 'example_add_cron_interval' );
function example_add_cron_interval( $schedules ) { 
    $schedules['five_seconds'] = array(
        'interval' => 5,
        'display'  => esc_html__( 'Every Five Seconds' ), );
    return $schedules;
}
```

This filter function creates a new interval that will allow us to run a cron task every five seconds.

**Note:** All intervals are in seconds.

---

# Scheduling WP Cron Events <a name="plugins/cron/scheduling-wp-cron-events" />

Source: https://developer.wordpress.org/plugins/cron/scheduling-wp-cron-events/

The WP Cron system uses hooks to add new scheduled tasks.

## Adding the Hook

In order to get your task to run you must create your own custom hook and give that hook the name of a function to execute. This is a very important step. Forget it and your task will never run.

The following example will create a hook. The first parameter is the name of the hook you are creating, and the second is the name of the function to call.

```php
add_action( 'bl_cron_hook', 'bl_cron_exec' );
```

Remember, the “bl_” part of the function name is a *function prefix*. You can learn why prefixes are important [here](#plugins/plugin-basics/best-practices). 

You can read more about actions [here](#plugins/hooks/actions).

## Scheduling the Task

An important note is that WP-Cron is a simple task scheduler. As we know, tasks are added by the hook created to call the function that runs the desired task. However if you call `wp_schedule_event()` multiple times, even with the same hook name, the event will be scheduled multiple times. If your code adds the task on each page load this could result in the task being scheduled several thousand times. This is not what you want.

WordPress provides a convenient function called [wp\_next\_scheduled()](#reference/functions/wp_next_scheduled) to check if a particular hook is already scheduled. `wp_next_scheduled()` takes one parameter, the hook name. It will return either a string containing the timestamp of the next execution or false, signifying the task is not scheduled. It is used like so:

```php
wp_next_scheduled( 'bl_cron_hook' )
```

Scheduling a recurring task is accomplished with [wp\_schedule\_event()](#reference/functions/wp_schedule_event) . This function takes three required parameters, and one additional parameter that is an array that can be passed to the function executing the wp-cron task. We will focus on the first three parameters. The parameters are as follows:

1. `$timestamp` – The UNIX timestamp of the first time this task should execute
2. `$recurrence` – The name of the interval in which the task will recur in seconds
3. `$hook` – The name of our custom hook to call

We will use the 5 second interval we created [here](#plugins/cron/understanding-wp-cron-scheduling) and the hook we created above, like so:

```php
wp_schedule_event( time(), 'five_seconds', 'bl_cron_hook' );
```

Remember, we need to first ensure the task is not already scheduled. So we wrap the scheduling code in a check like this:

```php
if ( ! wp_next_scheduled( 'bl_cron_hook' ) ) {
    wp_schedule_event( time(), 'five_seconds', 'bl_cron_hook' );
}
```

## Unscheduling tasks

When you no longer need a task scheduled you can unschedule tasks with [wp\_unschedule\_event()](#reference/functions/wp_unschedule_event) . This function takes the following two parameters:

1. `$timestamp` – Timestamp of the next occurrence of the task
2. `$hook` – Name of the custom hook to be called

This function will not only unschedule the task indicated by the timestamp, it will also unschedule all future occurrences of the task. Since you probably will not know the timestamp for the next task, there is another handy function, [wp\_next\_scheduled()](#reference/functions/wp_next_scheduled) that will find it for you. `wp_next_scheduled()` takes one parameter (that we care about):

1. `$hook` – The name of the hook that is called to execute the task

Put it all together and the code looks like:

```php
$timestamp = wp_next_scheduled( 'bl_cron_hook' );
wp_unschedule_event( $timestamp, 'bl_cron_hook' );
```

It is very important to unschedule tasks when you no longer need them because WordPress will continue to attempt to execute the tasks, even though they are no longer in use (or even after your plugin has been deactivated or removed). An important place to remember to unschedule your tasks is upon plugin deactivation.

Unfortunately there are many plugins in the WordPress.org Plugin Directory that do not clean up after themselves. If you find one of these plugins please let the author know to update their code. WordPress provides a function called [register\_deactivation\_hook()](#reference/functions/register_deactivation_hook) that allows developers to run a function when their plugin is deactivated. It is very simple to setup and looks like:

```php
register_deactivation_hook( __FILE__, 'bl_deactivate' ); 

function bl_deactivate() {
    $timestamp = wp_next_scheduled( 'bl_cron_hook' );
    wp_unschedule_event( $timestamp, 'bl_cron_hook' );
}
```

You can read more about activation and deactivation hooks [here](#plugins/plugin-basics/activation-deactivation-hooks).

---

# Testing of WP-Cron <a name="plugins/cron/simple-testing" />

Source: https://developer.wordpress.org/plugins/cron/simple-testing/

## WP-CLI

Cron jobs can be tested using [WP-CLI](https://wp-cli.org/). It offers commands like `wp cron event list` and `wp cron event run {job name}`. [Check the documentation](#cli/commands/cron) for more details.

## WP-Cron Management Plugins

[Several plugins are available on the WordPress.org Plugin Directory for viewing, editing, and controlling the scheduled cron events and available schedules on your site.](https://wordpress.org/plugins/tags/cron/)

## `_get_cron_array()`

[The `_get_cron_array()` function](#reference/functions/_get_cron_array) returns an array of all currently scheduled cron events. Use this function if you need to inspect the raw list of events.

## `wp_get_schedules()`

[The `wp_get_schedules()` function](#reference/functions/wp_get_schedules) returns an array of available event recurrence schedules. Use this function if you need to inspect the raw list of available schedules.

---

# Hooking WP-Cron Into the System Task Scheduler <a name="plugins/cron/hooking-wp-cron-into-the-system-task-scheduler" />

Source: https://developer.wordpress.org/plugins/cron/hooking-wp-cron-into-the-system-task-scheduler/

As previously mentioned, WP-Cron does not run continuously, which can be an issue if there are critical tasks that must run on time. There is an easy solution for this. Simply set up your system’s task scheduler to run on the intervals you desire (or at the specific time needed). The easiest solution is to use a tool to make a web request to the `wp-cron.php` file.

After scheduling the task on your system, there is one more step to complete. WordPress will continue to run WP-Cron on each page load. This is no longer necessary and will contribute to extra resource usage on your server. WP-Cron can be disabled in the `wp-config.php` file. Open the `wp-config.php` file for editing and add the following line:

```php
define( 'DISABLE_WP_CRON', true );
```

## Windows

Windows calls their time based scheduling system the Task Scheduler. It can be accessed via the **Administrative Tools** in the control panel.

How you setup the task varies with server setup. One method is to use PowerShell and a Basic Task. After creating a Basic Task the following command can be used to call the WordPress Cron script.

```powershell
powershell "Invoke-WebRequest http://YOUR_SITE_URL/wp-cron.php"
```

## MacOS and Linux

Mac OS X and Linux both use cron as their time based scheduling system. It is typically access from the terminal with the `crontab -e` command. It should be noted that tasks will be run as a regular user or as root depending on the system user running the command.

Cron has a specific syntax that needs to be followed and contains the following parts:

- Minute
- Hour
- Day of month
- Month
- Day of week
- Command to execute

![](https://i0.wp.com/developer.wordpress.org/files/2014/10/plugin-wp-cron-cron-scheduling.png?resize=500%2C250&ssl=1)If a command should be run regardless of one of the time sections an asterisk (\*) should be used. For example if you wanted to run a command every 15 minutes regardless of the hour, day, or month it would look like:

```bash
*/15 * * * * command
```

Many servers have `wget` installed and this is an easy tool to call the WordPress Cron script.

```bash
wget --delete-after http://YOUR_SITE_URL/wp-cron.php
```

Note: without –delete-after option, wget would save the output of the HTTP GET request.

A daily call to your site’s WordPress Cron that triggers at midnight every night could look similar to:

```bash
0 0 * * * wget --delete-after http://YOUR_SITE_URL/wp-cron.php
```

---

# Internationalization <a name="plugins/internationalization" />

Source: https://developer.wordpress.org/plugins/internationalization/

## What is Internationalization?

Internationalization is the process of developing a plugin so it can easily be translated into other languages. Internationalization is often abbreviated as `i18n` (because there are 18 letters between the letters i and n).

## Why is Internationalization Important?

WordPress is used all over the world, in countries where English is not the main language. The strings in the WordPress plugins need to be coded in a special way so that can be easily translated into other languages. As a developer, you may not be able to provide *localizations* (meaning, changes required to the text and other things like number formats specific to a given *locale* (location))for all your users; however, a translator can successfully localize the theme without needing to modify the source code itself.

Read further on “[How to Internationalize your Plugin](#plugins/internationalization/how-to-internationalize-your-plugin "How to internationalize your plugin")“.

## Resources

- [Video: i18n: Preparing Your WordPress Theme for the World](http://www.youtube.com/watch?v=fJfqgrzjEis)
- [Video: On Internationalization: Plugins and themes for the whole world](http://wordpress.tv/2014/02/26/samuel-otto-wood-on-internationalization-plugins-and-themes-for-the-whole-world/) [Slides](http://wceu2013.ottopress.com/)
- [Video: Big in Japan: A Guide for Themes and Internationalization](http://wordpress.tv/2013/08/03/shannon-smith-big-in-japan-a-guide-for-themes-and-internationalization/)
- [Video: Lost in Translation—i18n and WordPress](http://wordpress.tv/2009/11/14/ze-fontainhas-i18n-nyc09/)
- [Internationalizing And Localizing Your WordPress Theme](http://wp.smashingmagazine.com/2011/12/29/internationalizing-localizing-wordpress-theme/)
- [Internationalization: You’re probably doing it wrong](http://ottopress.com/2012/internationalization-youre-probably-doing-it-wrong/)
- [More Internationalization Fun](http://ottopress.com/2012/more-internationalization-fun/)
- [Use wp\_localize\_script, It Is Awesome](http://pippinsplugins.com/use-wp_localize_script-it-is-awesome/)
- [Understanding \_n\_noop()](http://kovshenin.com/2013/_n_noop/)
- [Language Packs 101 – Prepwork](http://ottopress.com/2013/language-packs-101-prepwork/)
- [Translating WordPress Plugins and Themes: Don’t Get Clever](http://markjaquith.wordpress.com/2011/10/06/translating-wordpress-plugins-and-themes-dont-get-clever/)
- [How to load theme and plugin translations](http://ulrich.pogson.ch/load-theme-plugin-translations)
- [Polyglots Handbook: Plugin/Theme Authors Guide](https://make.wordpress.org/polyglots/handbook/plugin-theme-authors-guide/)

---

# How to Internationalize Your Plugin <a name="plugins/internationalization/how-to-internationalize-your-plugin" />

Source: https://developer.wordpress.org/plugins/internationalization/how-to-internationalize-your-plugin/

In order to make a string translatable in your application you have to wrap the original string in a call to one of a set of special functions. These functions collectively are known as “gettext.”

## Introduction to Gettext 

WordPress uses the [gettext](http://www.gnu.org/software/gettext/) libraries and tools for i18n, but not directly: there are a set of special functions created just for the purpose of enabling string translation. These functions are listed below. These are the functions you should use within your plugin.

For a deeper dive into gettext, read the [gettext online manual](http://www.gnu.org/software/gettext/manual/html_node/)

## Text Domains 

Use a *text domain* to denote all text belonging to your plugin. The text domain is a unique identifier to ensure WordPress can distinguish between all loaded translations. This increases portability and plays better with already existing WordPress tools.

The text domain must match the `slug` of the plugin. If your plugin is a single file called `my-plugin.php` or it is contained in a folder called `my-plugin` the domain name must be `my-plugin`. If your plugin is hosted on wordpress.org it must be the slug portion of your plugin URL (`wordpress.org/plugins/`**`<slug>`**).

The text domain name must use dashes and not underscores, be lower case, and have no spaces.

The text domain also needs to be added to the plugin header. WordPress uses it to internationalize your plugin metadata even when the plugin is disabled. The text domain should be same as the one used when [loading the text domain](#loading-text-domain).

 **Header example:**

```php
/* 
 * Plugin Name: My Plugin
 * Author: Plugin Author
 * Text Domain: my-plugin
 */
```

Again, change “my-plugin” to the slug of your plugin.

Since WordPress 4.6 the `Text Domain` header is optional because it must be the same as the plugin slug. There is no harm in including it, but it is not required.

## Domain Path 

The domain path defines the location for a plugin’s translation. This has a few uses, notably so that WordPress knows where to find the translation even when the plugin is disabled. This defaults to the folder in which your plugin is found.

For example, if the translation is located in a folder called `languages` within your plugin, then the Domain Path is `/languages` and must be written with the first slash:

 **Header example:**

```php
/*
 * Plugin Name: My Plugin
 * Author: Plugin Author
 * Text Domain: my-plugin
 * Domain Path: /languages
 */
```

 The `Domain Path` header can be omitted if the plugin is in the official WordPress Plugin Directory. 

## Basic strings 

For basic strings (meaning strings without placeholders or plurals) use `<a href="#reference/functions/__">__()</a>`. It returns the translation of its argument:

```php
__( 'Blog Options', 'my-plugin' );
```

Do not use variable names or constants for the text domain portion of a gettext function. For example: Do not do this as a shortcut: ```
__( 'Translate me.' , $text_domain );
```

To echo a retrieved translation, use `<a href="#reference/functions/_e">_e()</a>`. So instead of writing:

```php
echo __( 'WordPress is the best!', 'my-plugin' );
```

you can use:

```php
_e( 'WordPress is the best!', 'my-plugin' );
```

## Variables 

What if you have a string like the following:

```php
echo 'Your city is $city.'
```

In this case, the `$city` is a variable and should not be part of the translation. The solution is to use placeholders for the variable, along with the `printf` family of functions. Especially helpful are `<a href="http://php.net/printf">printf</a>` and `<a href="http://php.net/sprintf">sprintf</a>`. Here is what the right solution looks like:

```php
printf(
	/* translators: %s: Name of a city */
	__( 'Your city is %s.', 'my-plugin' ),
	$city
);
```

Notice that here the string for translation is just the template `"Your city is %s."`, which is the same both in the source and at run-time.

Also note that there is a hint for translators so that they know the context of the placeholder.

If you have more than one placeholder in a string, it is recommended that you use [argument swapping](http://www.php.net/manual/en/function.sprintf.php#example-4829). In this case, single quotes `(')` around the string are mandatory because double quotes `(")` will tell php to interpret the `$s` as the `s` variable, which is not what we want.

```php
printf(
	/* translators: 1: Name of a city 2: ZIP code */
	__( 'Your city is %1$s, and your zip code is %2$s.', 'my-plugin' ),
	$city,
	$zipcode
);
```

Here the zip code is being displayed after the city name. In some languages displaying the zip code and city in opposite order would be more appropriate. Using %s prefix in the above example, allows for such a case. A translation can thereby be written:

```php
printf(
	/* translators: 1: Name of a city 2: ZIP code */
	__( 'Your zip code is %2$s, and your city is %1$s.', 'my-plugin' ),
	$city,
	$zipcode
);
```

**Important!** The following code is incorrect:

```php
// This is incorrect do not use.
_e( "Your city is $city.", 'my-plugin' );
```

The strings for translation are extracted from the sources, so the translators will get this phrase to translate: `"Your city is $city."`.

However in the application `_e` will be called with an argument like `"Your city is London."` and `gettext` won’t find a suitable translation of this one and will return its argument: `"Your city is London."`. Unfortunately, it isn’t translated correctly.

## Plurals 

### Basic Pluralization 

If you have string that changes when the number of items changes, you’ll need a way to reflect this in your translations. For example, in English you have `"One comment"` and `"Two comments"`. In other languages you can have multiple plural forms. To handle this in WordPress use the `<a href="#reference/functions/_n">_n()</a>` function.

```php
printf(
	_n(
		'%s comment',
		'%s comments',
		get_comments_number(),
		'my-plugin'
	),
	number_format_i18n( get_comments_number() )
);
```

 `_n()` accepts 4 arguments:

- singular – the singular form of the string (note that it can be used for numbers other than one in some languages, so `'%s item'` should be used instead of `'One item'`)
- plural – the plural form of the string
- count – the number of objects, which will determine whether the singular or the plural form should be returned (there are languages, which have far more than 2 forms)
- text domain – the plugins text domain

The return value of the functions is the correct translated form, corresponding to the given count.

Note that some languages use the singular form for other numbers (e.g. 21, 31 and so on, much like ’21st’, ’31st’ in English). If you would like to special case the singular, check for it specifically:

```php
if ( 1 === $count ) {
	printf( esc_html__( 'Last thing!', 'my-text-domain' ), $count );
} else {
	printf( esc_html( _n( '%d thing.', '%d things.', $count, 'my-text-domain' ) ), $count );
}
```

Also note that the `$count` parameter is often used twice. First `$count` is passed to `_n()` to determine which translated string to use, and then `$count` is passed to `printf()` to substitute the number into the translated string.

### Pluralization done later 

You first set the plural strings with `<a href="#reference/functions/_n_noop">_n_noop()</a>` or `<a href="#reference/functions/_nx_noop">_nx_noop()</a>`.

```php
$comments_plural = _n_noop(
	'%s comment.',
	'%s comments.'
);
```

Then at a later point in the code you can use `<a href="#reference/functions/translate_nooped_plural">translate_nooped_plural()</a>` to load the strings.

```php
printf(
	translate_nooped_plural(
		$comments_plural,
		get_comments_number(),
		'my-plugin'
	),
	number_format_i18n( get_comments_number() )
);
```

## Disambiguation by context 

Sometimes one term is used in several contexts and although it is one and the same word in English it has to be translated differently in other languages. For example the word `Post` can be used both as a verb `"Click here to post your comment"` and as a noun `"Edit this post"`. In such cases the `_x()` or `_ex()` function should be used. It is similar to `__()` and `_e()`, but it has an additional argument — the context:

```php
_x( 'Post', 'noun', 'my-plugin' );
_x( 'Post', 'verb', 'my-plugin' );
```

Using this method in both cases we will get the string Comment for the original version, but the translators will see two Comment strings for translation, each in the different contexts.

Note that similarly to `__()`, `_x()` has an `echo` version: `_ex()`. The previous example could be written as:

```php
_ex( 'Post', 'noun', 'my-plugin' );
_ex( 'Post', 'verb', 'my-plugin' );
```

 Use whichever you feel enhances legibility and ease-of-coding.

## Descriptions 

So that translators know how to translate a string like `__( 'g:i:s a' )` you can add a clarifying comment in the source code. It has to start with the words `translators:` and to be the last PHP comment before the gettext call. Here is an example:

```php
/* translators: draft saved date format, see http://php.net/date */
$saved_date_format = __( 'g:i:s a' );
```

It’s also used to explain placeholders in a string like `_n_noop( '<strong>Version %1$s</strong> addressed %2$s bug.','<strong>Version %1$s</strong> addressed %2$s bugs.' )`.

```php
/* translators: 1: WordPress version number, 2: plural number of bugs. */
_n_noop( '<strong>Version %1$s</strong> addressed %2$s bug.','<strong>Version %1$s</strong>strong> addressed %2$s bugs.' );
```

## Newline characters 

Gettext doesn’t like `r` (ASCII code: 13) in translatable strings, so please avoid it and use `n` instead.

## Empty strings 

The empty string is reserved for internal Gettext usage and you must not try to internationalize the empty string. It also doesn’t make any sense, because the translators won’t see any context.

 If you have a valid use-case to internationalize an empty string, add context to both help translators and be in peace with the Gettext system.

## Escaping strings 

It is good to escape all of your strings, this way the translators cannot run malicious code. There are a few escape functions that are integrated with internationalization functions.

## Localization functions 

### Basic functions 

- [\_\_()](#reference/functions/__)
- [\_e()](#reference/functions/_e)
- [\_x()](#reference/functions/_x)
- [\_ex()](#reference/functions/_ex)
- [\_n()](#reference/functions/_n)
- [\_nx()](#reference/functions/_nx)
- [\_n\_noop()](#reference/functions/_n_noop)
- [\_nx\_noop()](#reference/functions/_nx_noop)
- [translate\_nooped\_plural()](#reference/functions/translate_nooped_plural())

### Translate &amp; Escape functions 

Strings that require translation and is used in attributes of html tags must be escaped.

- [esc\_html\_\_()](#reference/functions/esc_html__)
- [esc\_html\_e()](#reference/functions/esc_html_e)
- [esc\_html\_x()](#reference/functions/esc_html_x)
- [esc\_attr\_\_()](#reference/functions/esc_attr__)
- [esc\_attr\_e()](#reference/functions/esc_attr_e)
- [esc\_attr\_x()](#reference/functions/esc_attr_x)

### Date and number functions 

- [number\_format\_i18n()](#reference/functions/number_format_i18n)
- [date\_i18n()](#reference/functions/date_i18n)

## Best Practices for writing strings 

Here are the best practices for writing strings

- Use decent English style – minimize slang and abbreviations.
- Use entire sentences – in most languages word order is different than that in English.
- Split at paragraphs – merge related sentences, but do not include a whole page of text in one string.
- Do not leave leading or trailing whitespace in a translatable phrase.
- Assume strings can double in length when translated
- Avoid unusual markup and unusual control characters – do not include tags that surround your text
- Do not put unnecessary HTML markup into the translated string
- Do not leave URLs for translation, unless they could have a version in another language.
- Add the variables as placeholders to the string as in some languages the placeholders change position.

```php
printf(
	__( 'Search results for: %s', 'my-plugin' ),
	get_search_query()
);
```

- Use format strings instead of string concatenation – translate phrases and not words – `printf( __( 'Your city is %1$s, and your zip code is %2$s.', 'my-plugin' ), $city, $zipcode ); ` is always better than: ` __( 'Your city is ', 'my-plugin' ) . $city . __( ', and your zip code is ', 'my-plugin' ) . $zipcode; `
- Try to use the same words and same symbols so not multiple strings needs to be translated e.g.`__( 'Posts:', 'my-plugin' );` and `__( 'Posts', 'my-plugin' );`

### Add Text Domain to strings 

 You must add your Text domain as an argument to every `__()`, `_e()` and `__n()` gettext call, or your translations won’t work.

Examples:

- `__( 'Post' )` should become `__( 'Post', 'my-theme' )`
- `_e( 'Post' )` should become `_e( 'Post', 'my-theme' )`
- `_n( '%s post', '%s posts', $count )` should become `_n( '%s post', '%s posts', $count, 'my-theme' )`

If there are strings in your plugin that are also used in WordPress core (e.g. ‘Settings’), you should still add your own text domain to them, otherwise they’ll become untranslated if the core string changes (which happens).

Adding the text domain by hand can be a burden if not done continuously when writing code and that’s why you can do it automatically:

- Download the `<a href="https://develop.svn.wordpress.org/branches/5.2/tools/i18n/add-textdomain.php">add-textdomain.php</a>` script to the folder where the file is you want to add the text domain
- In command line move to the directory where the file is
- Run this command to create a new file with the text domain added:

```bash
php add-textdomain.php my-plugin my-plugin.php > new-my-plugin.php
```

If you wish to have the `add-textdomain.php` in a different folder you just need to define the location in the command.

```bash
php /path/to/add-textdomain.php my-plugin my-plugin.php > new-my-plugin.php
```

Use this command if you don’t want a new file outputted:

```php
php add-textdomain.php -i my-plugin my-plugin.php
```

If you want to change multiple files in a directory you can also pass a directory to the script:

```php
php add-textdomain.php -i my-plugin my-plugin-directory
```

After it’s done, the text domain will be added to the end of all gettext calls in the file. If there is an existing text domain it will not be replaced.

## Loading Text Domain

Translations can be loaded using `load_plugin_textdomain`, for example:

```php
add_action( 'init', 'wpdocs_load_textdomain' );

function wpdocs_load_textdomain() {
	load_plugin_textdomain( 'wpdocs_textdomain', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}
```

### Plugins on WordPress.org

Since WordPress 4.6 translations now take [translate.wordpress.org](https://translate.wordpress.org/) as priority and so plugins that are translated via translate.wordpress.org do not necessary require `load_plugin_textdomain()` anymore. If you don’t want to add a `load_plugin_textdomain()` call to your plugin you have to set the `Requires at least:` field in your readme.txt to 4.6 or more. 

If you still want to load your own translations and not the ones from translate, you will have to use a hook filter named `load_textdomain_mofile`.   
**Example** with a .mo file in the `/languages/` directory of your plugin, with this code inserted in the main plugin file:

```php
function my_plugin_load_my_own_textdomain( $mofile, $domain ) {
	if ( 'my-domain' === $domain && false !== strpos( $mofile, WP_LANG_DIR . '/plugins/' ) ) {
		$locale = apply_filters( 'plugin_locale', determine_locale(), $domain );
		$mofile = WP_PLUGIN_DIR . '/' . dirname( plugin_basename( __FILE__ ) ) . '/languages/' . $domain . '-' . $locale . '.mo';
	}
	return $mofile;
}
add_filter( 'load_textdomain_mofile', 'my_plugin_load_my_own_textdomain', 10, 2 );
```

## Handling JavaScript files 

Check the [Internationalizing javascript](#apis/handbook/internationalization) section of the [Common APIs Handbook](#apis) to see how to properly load your translation files. There is also the [Gutenburg plugin docs page](https://github.com/WordPress/gutenberg/blob/trunk/docs/how-to-guides/internationalization.md).

## Language Packs 

If you’re interested in language packs and how the import to [translate.wordpress.org](http://translate.wordpress.org) is working, please read the [Meta Handbook page about Translations](https://make.wordpress.org/meta/handbook/documentation/translations/).

Also refer [Plugin/Theme Authors Guide in Polyglots Handbooks](https://make.wordpress.org/polyglots/handbook/plugin-theme-authors-guide/) for getting your project translated.

---

# Localization <a name="plugins/internationalization/localization" />

Source: https://developer.wordpress.org/plugins/internationalization/localization/

## What is localization?

Localization describes the subsequent process of translating an internationalized plugin. Localization is often abbreviated as `l10n` (because there are 10 letters between the l and the n.)

## Localization files

### `POT` (Portable Object Template) files

This file contains the original strings (in English) in your plugin.

### `PO` (Portable Object) files

Every translator will take the `POT` file and translate the `msgstr` sections into their own language. The result is a `PO` file with the same format as a `POT`, but with translations and some specific headers. There is one `PO` file per language.

### `MO` (Machine Object) files

From every translated `PO` file a `MO` file is built. These are machine-readable, binary files that the gettext functions actually use (they don’t care about `.POT` or `.PO` files), and are a “compiled” version of the `PO` file. The conversion is done using the `msgfmt` command line tool. In general, an application may use more than one large logical translatable module and a different `MO` file accordingly. A text domain is a handle of each module, which has a different `MO` file.

## Generating the `POT` file

The `POT` file is the one you need to hand to translators, so that they can do their work. The `POT` and` PO` files can easily be interchangeably renamed to change file types without issues.

It is a good idea to offer the POT file along with your plugin, so that translators won’t have to ask you specifically about it.

 There are a couple of ways to generate a `POT` file for your plugin:

### WP-CLI

Install [WP-CLI](https://make.wordpress.org/cli/handbook/installing/) and use the `wp i18n make-pot` command according to the [documentation](#cli/commands/i18n/make-pot).

### Poedit

You can also use [Poedit](http://www.poedit.net/ "http://www.poedit.net/") locally when translating. This is an open source tool for all major OSs. The free Poedit default version supports manual scanning of all source code with Gettext functions. A pro version of it also features one-click scanning for WordPress plugins. After generating the `PO` file you can rename the file to `POT`. If a `MO` was generated then you can delete that file as it is not needed. If you don’t have the pro version you can easily get the [Blank POT](https://github.com/fxbenard/Blank-WordPress-Pot) and use that as the base of your `POT file`. Once you have placed the blank `POT` in the languages folder you can click “Update” in Poedit to update the `POT` file with your strings.

### Grunt Tasks

There are even some grunt tasks that you can use to create the POTs. [grunt-wp-i18n](https://github.com/blazersix/grunt-wp-i18n) &amp; [grunt-pot](https://www.npmjs.org/package/grunt-pot). Steps on setting up grunt are beyond the scope of this documentation, but just be aware that it is possible. Here is an [example Grunt.js and package.json](https://gist.github.com/grappler/10187003) that you can place in the root of your plugin.

## Translate the `PO` file

Save the translated file as `my-plugin-{locale}.mo`. The locale is the language code and/or country code. For example, the locale for German is `de_DE`. From the code example above the text domain is ‘my-plugin’ therefore the German MO and PO files should be named `my-plugin-de_DE.mo` and `my-plugin-de_DE.po`. For more information about language and country codes, see [Installing WordPress in Your Language](https://codex.wordpress.org/Installing_WordPress_in_Your_Language).

There are multiple ways to translate a `PO` file.

### Manually

You can use a text editor to enter the translation. In a text editor it will look like this.

```
#: plugin-name.php:123
msgid "Page Title"
msgstr ""
```

You enter the translation between the quotation marks. For the German translation it would look like this.

```
#: plugin-name.php:123
msgid "Page Title"
msgstr "Seitentitel"
```

### Poedit

You can also use [Poedit](http://www.poedit.net/ "http://www.poedit.net/") when translating. The free Poedit default version supports manual scanning of all source code with Gettext functions. A pro version of it also features one-click scanning for WordPress plugins and themes.

### Online Services

A third option is to use an online translation service. The general idea is that you upload the `POT` file and then you can give permission to users or translators to translate your plugin. This allows you to track the changes, always have the latest translation and reduce the translation being done twice.

Here are a few tools that can be used to translate PO files online:

- [Transifex](https://www.transifex.com/ "https://www.transifex.com/")
- [WebTranslateIt](https://webtranslateit.com/en "https://webtranslateit.com/")
- [Poeditor](https://poeditor.com/)
- [Google Translator Toolkit](http://translate.google.com/toolkit/ "http://translate.google.com/toolkit/")
- [GlotPress](http://blog.glotpress.org/ "http://blog.glotpress.org/")

## Generate MO file

### Command line

`msgfmt` is used to create the MO file. `msgfmt` is part of Gettext package. Otherwise command line can be used. A typical `msgfmt` command looks like this:

**Unix Operating Systems**

```bash
msgfmt -o filename.mo filename.po
```

**Windows Operating Systems**

```bash
msgfmt -o filename.mo filename.po
```

If you have a lot of `PO` files to convert at once, you can run it as a batch. For example, using a `bash` command:

**Unix Operating Systems**

```bash
# Find PO files, process each with msgfmt and rename the result to MO
for file in `find . -name "*.po"` ; do msgfmt -o ${file/.po/.mo} $file ; done
```

**Windows Operating Systems**  
For Windows you need to install [Cygwin](http://www.cygwin.com/) first.

Create a file called `potomo.sh` and put the following into it:

```bash
#! /bin/sh
# Find PO files, process each with msgfmt and rename the result to MO
for file in `/usr/bin/find . -name '*.po'` ; do /usr/bin/msgfmt -o ${file/.po/.mo} $file ; done
```

You can run this command in the command line.

```bash
cd C:/path/to/language/folder/my-plugin/languages & C:/cygwin/bin/bash -c /cygdrive/c/path/to/script/directory/potomo.sh
```

### Poedit

`msgfmt` is also integrated in [Poedit](http://www.poedit.net/ "http://www.poedit.net/") allowing you to use it to generate the MO file. There is a setting in the preferences where you can enable or disable it.

![internationalization-localization-04](https://i0.wp.com/developer.wordpress.org/files/2014/10/internationalization-localization-04.jpg?resize=436%2C448&ssl=1)### Grunt task

There is [grunt-po2mo](https://www.npmjs.org/package/grunt-po2mo) that will convert all of the files.

## Tips for Good Translations

### Don’t translate literally, translate organically

Being bi- or multi-lingual, you undoubtedly know that the languages you speak have different structures, rhythms, tones, and inflections. Translated messages don’t need to be structured the same way as the English ones: take the ideas that are presented and come up with a message that expresses the same thing in a natural way for the target language. It’s the difference between creating an equal message and an equivalent message: don’t replicate, replace. Even with more structural items in messages, you have creative license to adapt and change if you feel it will be more logical for, or better adapted to, your target audience.

### Try to keep the same level of formality (or informality)

Each message has a different level of formality or informality. Exactly what level of formality or informality to use for each message in your target language is something you’ll have to figure out on your own (or with your team), but WordPress messages (informational messages in particular) tend to have a politely informal tone in English. Try to accomplish the equivalent in the target language, within your cultural context.

### Don’t use slang or audience-specific terms

Some amount of terminology is to be expected in a blog, but refrain from using colloquialisms that only the “in” crowd will get. If the uninitiated blogger were to install WordPress in your language, would they know what the term means? Words like pingback, trackback, and feed are exceptions to this rule; they’re terminology that are typically difficult to translate, and many translators choose to leave in English.

### Read other software’s localizations in your language

If you get stuck or need direction, try reading through the translations of other popular software tools to get a feel for what terms are commonly used, how formality is addressed, etc. Of course, WordPress has its own tone and feel, so keep that in mind when you’re reading other localizations, but feel free to dig up UI terms and the like to maintain consistency with other software in your language.

## Using Localizations

Place the localization files in the language folder, either in the plugin `languages` folder or as of WordPress 3.7 in the plugin `languages` folder normally under `wp-content`. The full path would be `wp-content/languages/plugins/my-plugin-fr_FR.mo`.

You can change the language in the “General Settings”. If you do not see this option, or the language into which you want to switch i snot listed, do it manually:

- Define `WPLANG` inside of `wp-config.php` to your chosen language. For example, if you wanted to use French, you would have: `define ('WPLANG', 'fr_FR');`
- Go to `wp-admin/options-general.php` or “Settings” -&gt; “General”
- Select your language in “Site Language” dropdown
- Go to `wp-admin/update-core.php`
- Click “Update translations”, when available
- Core translations files are downloaded, when available

## Resources

- [Creating .pot file for your theme or plugin](https://foxland.fi/creating-pot-file-for-your-theme-or-plugin/)
- [How To Internationalize WordPress Plugins](http://tommcfarlin.com/internationalize-wordpress-plugins/)
- [Translating Your Theme](http://wp.tutsplus.com/tutorials/theme-development/translating-your-theme/)
- [Blank WordPress POT](https://github.com/fxbenard/Blank-WordPress-Pot)
- [Improved i18n WordPress tools](https://github.com/grappler/i18n)
- [How to update translations quickly](http://ulrich.pogson.ch/update-translations-quickly)
- [Workflow between GitHub/Transifex](http://wp-translations.org/workflow-using-github/)
- [Gist: Complete Localization Grunt task](https://gist.github.com/grappler/10187003)
- [WordPress.tv](http://wordpress.tv/) tags: [i18n](http://wordpress.tv/tag/i18n/), [internationalization](http://wordpress.tv/tag/internationalization/) and [translation](http://wordpress.tv/tag/translation/)

---

# Internationalization Security <a name="plugins/internationalization/security" />

Source: https://developer.wordpress.org/plugins/internationalization/security/

Security is often overlooked when talking about internationalization, but there are a few important things to keep in mind.

### Check for Spam and Other Malicious Strings

When a translator submits a localization to you, always check to make sure they didn’t include spam or other malicious words in their translation. You can use [Google Translate](https://translate.google.com/) to translate their translation back into your native language so that you can easily compare the original and translated strings.

### Escape Internationalized Strings

You can’t trust that a translator will only add benign text to their localization; if they want to, they could add malicious JavaScript or other code instead. To protect against that, it’s important to treat internationalized strings like you would any other untrusted input.

If you’re outputting the strings, then they should be escaped.

Insecure:

```php
_e( 'The REST API content endpoints were added in WordPress 4.7.', 'your-text-domain' ); 
```

Secure:

```php
esc_html_e( 'The REST API content endpoints were added in WordPress 4.7.', 'your-text-domain' );
```

Alternatively, some people choose to rely on a translation verification mechanism, rather than adding escaping to their code. One example of a verification mechanism is [the editor roles](https://make.wordpress.org/polyglots/handbook/glossary/#project-translation-editor) that the WordPress Polyglots team uses for [translate.wordpress.org](https://translate.wordpress.org). This ensures that any translation submitted by an untrusted contributor has been verified by a trusted editor before being accepted.

### Use Placeholders for URLs

Don’t include URLs in internationalized strings, because a malicious translator could change them to point to a different URL. Instead, use placeholders for [printf()](http://php.net/manual/en/function.printf.php) or [sprintf()](http://us3.php.net/manual/en/function.sprintf.php).

Insecure:

```php
_e(
	'Please <a href="https://login.wordpress.org/register"> register for a WordPress.org account</a>.',
	'your-text-domain'
);
```

Secure:

```php
printf(
	esc_html__( 'Please %1$s register for a WordPress.org account %2$s.', 'your-text-domain' ),
	'<a href="https://login.wordpress.org/register">',
	'</a>'
);
```

### Compile Your Own .mo Binaries

Often translators will send the compiled .mo file along with the plaintext .po file, but you should discard their .mo file and compile your own, because you have no way of knowing whether or not it was compiled from the corresponding .po file, or a different one. If it was compiled against a different one, then it could contain spam and other malicious strings without your knowledge.

Using PoEdit to generate the binary will override the headers in the .po file, so instead it’s better to compile it from the command line:

```bash
msgfmt -cv -o /path/to/output.mo /path/to/input.po
```

---

# The WordPress.org Plugin Directory <a name="plugins/wordpress-org" />

Source: https://developer.wordpress.org/plugins/wordpress-org/

WordPress.org offers free hosting to anyone who wishes to develop a plugin in our directory.

All plugins hosted here have access to:

- Monitor statistics (see also the [WordPress.org Plugin API](https://codex.wordpress.org/WordPress.org_API#Plugins))
- Receive feedback and reviews from users
- Provide support via a free forum

Make sure you review the [Developer FAQ](#plugins/wordpress-org/plugin-developer-faq)!

And make sure that you’ve reviewed the [common issues](#plugins/wordpress-org/common-issues) that the Plugin Review Team typically encounters when reviewing plugins.

If you require assistance with your hosting on WordPress.org, you can contact the plugin team via Slack in `#pluginreview`.

## Requirements

A brief overview:

- Plugins must be compatible with the [GNU General Public License v2](http://www.gnu.org/licenses/license-list.html#GPLCompatibleLicenses) or later. If a license is not specified, code will be considered “GPLv2 or later.”
- The provided [Subversion](http://subversion.tigris.org/) repository must be used for functional WordPress plugins only.
- Copyright and Trademark law must be respected.
- The plugin and developer must not do anything illegal, dishonest, or morally offensive. This includes spamming or harassment.

All plugins and developers must comply with our [Detailed Plugin Guidelines](#plugins/wordpress-org/detailed-plugin-guidelines).

## How to …

If you’re just getting started, it helps to know how to submit your plugin, use SVN, and so on.

- [… plan, submit, and maintain your plugin](#plugins/wordpress-org/planning-submitting-and-maintaining-plugins)
- [… use SVN (aka Subversion)](#plugins/wordpress-org/how-to-use-subversion)
- [… manage your readme.txt](#plugins/wordpress-org/how-your-readme-txt-works)
- [… write proper plugin headers](#plugins/the-basics/header-requirements)
- [… use plugin assets (header images and icons)](#plugins/wordpress-org/plugin-assets)
- [… take over an existing plugin](#plugins/wordpress-org/take-over-an-existing-plugin)
- [… use the support forums](#plugins/wordpress-org/using-the-forums)
- [… grant users special roles (contributor, supporter, committer, etc)](#plugins/wordpress-org/special-user-roles-capabilities)
- [… transfer your plugin to a new owner](#plugins/wordpress-org/transferring-your-plugin-to-a-new-owner)
- [… add your plugin to the block directory](#plugins/wordpress-org/add-your-plugin-to-the-block-directory)
- .[.. manage your plugin’s security](#plugins/wordpress-org/plugin-security)
- [… report an insecure plugin](#plugins/wordpress-org/plugin-securityreporting-plugin-security-issues/)

---

# Planning, Submitting, and Maintaining Plugins <a name="plugins/wordpress-org/planning-submitting-and-maintaining-plugins" />

Source: https://developer.wordpress.org/plugins/wordpress-org/planning-submitting-and-maintaining-plugins/

You’ve written the next [Hello Dolly](https://wordpress.org/plugins/hello-dolly/) and you want the world to use it. What should you do?

## 1. Test once and test again

With any luck, your plugin will be used by lots of people in many different situations and hosting environments. You’ll want to make sure you’ve tested your plugin to make sure it works in any situation and doesn’t frustrate your users.

## 2. Pick a good name

A plugin name should reflect the uniqueness of you and your work. When you pick a name, make sure you’re not violating trademarks or stomping on someone else’s product names. If you’re not working for FaceRange (a fake company), you shouldn’t name your plugin ‘FaceRange’s Dancing Squirrels’ after all. A much better name would be ‘Dancing Squirrels for FaceRange’ for example. It can be hard to come up with a good name, so take your time. Your plugin URL cannot be changed after you submit it, but the display name can change a thousand times.

Display names are generated from the headers in the main plugin file so mind your Ps and Qs.

## 3. Write great documentation

A [README.txt](https://wordpress.org/plugins/developers/#readme) file is the best place to start, as it’s a standard reference point for all plugins. You’ll want to make sure you include:

- A concise description of what your plugin actually does. If it does a lot, it might be better as two plugins.
- Installation instructions, especially if there’s special configuration to be done. If a user needs to register with your service, make sure you link to it.
- Directions on how to get support, and what you do and do not support.

## 4. Submit your plugin

In order to submit a plugin, there are three steps:

1. Register on WordPress.org with a valid, regularly checked email address. If you are submitting a plugin on behalf of a company, use an **official** company email for verification.
2. Whitelist `plugins@wordpress.org` in your email client to ensure you receive email communications.
3. [Submit your plugin](https://wordpress.org/plugins/developers/add/) with a brief overview of what it does and a complete, ready to go, zip of the plugin. The zip must be the complete version of your plugin, just like you would use to manually upload via the plugin installer.

Once a plugin is queued for review, we will review the code for any issues within 14 business days. Most of the issues can be avoided by following the guidelines. If we do find issues, we will contact the developer(s), and work towards a resolution. Once approved, you’ll receive an email with details as to how to access to a [Subversion Repository](#plugins/wordpress-org/how-to-use-subversion) where you’ll store your plugin.

After you upload your plugin (and a [readme file](https://wordpress.org/plugins/developers/#readme)) in that repository via SVN, it will appear on the [plugin directory](https://wordpress.org/plugins/).

## 5. Push out the first version

The WordPress.org plugins directory is the easiest way for potential users to download and install your plugin. WordPress’ integration with the plugin directory means your plugin can be updated by the user in a couple of clicks.

When you’re ready to release your first version, you’ll want to [sign up](https://wordpress.org/plugins/add/). After a review process is completed successfully, you’ll be granted a Subversion Repository for your code. We have documentation about [using SVN on WordPress.org](#plugins/wordpress-org/how-to-use-subversion), which is a slightly different workflow than you may be familiar with if you use GIT.

## 6. Embrace open source

Open source is one of the most powerful ideas of our time because it empowers collaboration across borders. By encouraging contributions, you’re allowing others to love your code as much as you do. There are several options to open source your code:

- [Github](http://github.com) makes it simple to get others involved with your project. Other developers and users can submit bug fixes or reports, feature requests, or brand new contributions easily. Github has a [great documentation portal](https://help.github.com/) and even an [interactive demo](http://try.github.com/) if you’ve never used Git before.
    - [Bitbucket](https://bitbucket.org/) and [Gitlab](https://about.gitlab.com/) are alternatives with similar features.
- The WordPress.org Plugin Directory provides and requires you to use a [Subversion repository](#plugins/wordpress-org/how-to-use-subversion).

## 7. Listen to your users

You’ll often find that your users put your code through many more test cases than you could’ve imagined. This can be tremendously valuable feedback.

Releasing your code through WordPress.org means your plugin automatically has a support forum. Use it! You can subscribe to receive new posts by email and respond to your users in a timely manner. They just want to love your plugin as much as you do.

Jetpack has a post you can point to about [writing great bug reports](http://jetpack.me/2011/11/18/how-to-write-a-great-bug-report/).

## 8. Regularly push new versions

The best plugins are the ones that keep iterating over time, pushing small changes along the way. Don’t let your hard work go stale by waiting too long to update. Keep in mind, constant upgrades can cause ‘Update Fatigue’ and users will stop upgrading. Keeping a balance between too few updates and too many updates is important.

## 9. Rinse and repeat

Like in other parts of life, the best things come from patience and hard work.

---

# Block Specific Plugin Guidelines <a name="plugins/wordpress-org/block-specific-plugin-guidelines" />

Source: https://developer.wordpress.org/plugins/wordpress-org/block-specific-plugin-guidelines/

All Block Specific plugins must also comply with the [overall plugin guidelines](#plugins/wordpress-org/detailed-plugin-guidelines). These additional guidelines are unique to block specific plugins.

## Guide to submitting plugins to the Block Directory

The goal of the [Block Directory](https://wordpress.org/plugins/browse/block/) is to provide a safe place for WordPress users to find and install new blocks.

### User Expectations

- Users will have a place they can go, both within their WordPress admin and on WordPress.org, where they can download and install blocks that have been pre-vetted for major security issues.
- Users will be able to one-click install blocks from their admin, one at a time.
- Blocks will appear in their block library after installation and activation.
- Blocks will work seamlessly and immediately without intrusive advertisements or upselling.

### Developer Expectations

- Developers will have a concrete set of requirements and guidelines to follow when writing blocks for the Block Directory.
- Following these guidelines will help ensure that the blocks they develop can be seamlessly installed in the editor.
- Blocks submitted to the Block Directory are held to stricter technical and policy rules than WordPress plugins in general.
- Plugins with blocks that do not meet the Block Directory Guidelines may still be submitted to the Plugin Directory.

### Definitions

For the purposes of the Block Directory, we distinguish between two types of plugins:

1. Plugins that exist solely to distribute a block.
2. All other plugins, including those that bundle many independent blocks, plugins that contain blocks in addition to other functionality, and plugins with no blocks at all.

These guidelines apply specifically to the first type of plugin, which is called a Block Plugin. If a plugin is of the second type, then the further guidelines and restrictions do not apply. All plugins, be they block-only or not, are required to comply with the [Detailed Plugin Guidelines](#plugins/wordpress-org/detailed-plugin-guidelines).

### Block Plugins and the Block Directory

The Block Directory contains only Block Plugins, that is to say plugins that contain only a single, independent, top-level block and a minimum of supporting code. Block plugins have the following characteristics:

1. A specific type of WordPress plugin, with the same structure including a `readme.txt` file.
2. Containing only blocks (typically a single top-level block).
3. Contain a minimum of server-side (i.e. PHP) code.
4. Self-contained with no UI outside of the post editor.

In addition to the guidelines that apply to all WordPress plugins, Block Plugins that are submitted to the Block Directory must adhere to these guidelines:

### Guidelines

#### 1. Block Plugins are for the Block Editor.

A Block Plugin must contain a block, and a minimum of other supporting code. It may not contain any UX outside of the editor, such as WordPress options or `wp-admin` menus. Server-side code should be kept to a minimum.

Plugins that only extend or provide styles for other, pre-existing blocks are currently not eligible for inclusion in the Block Directory. At this time, they are not supported by the Block Editor’s seamless install process. Only Block Plugins that register a new block are currently supported.

#### 2. Block Plugins are separate blocks.

Block plugins are intended to be single purpose, separate, independent blocks, not bundles or compendiums of many blocks. In most cases, a Block Plugin should contain only one single top-level block. The Block Directory will not include collections of blocks that could be reasonably split up into separate, independent, blocks.

Block plugins may contain more than one block where a clearly necessary parent/child or container/content dependency exists; for example a list block that contains list item blocks.

#### 3. Plugin and block names should reflect the block’s purpose.

Plugin titles and block titles should describe what the block does in a way that helps users easily understand its purpose. In most cases the plugin title and the block title should be identical or very similar. Some examples of good plugin and block names include:

`Rainbow Block`  
`Sepia Image Grid`  
`Business Hours Block`

Please avoid plugin and block titles unrelated to the block itself, or that cannot be easily distinguished from core blocks. Some examples of unhelpful plugin and block names are things such as:

`PluginCo Inc Block`  
`Widget`  
`Image Block`

The same trademark restrictions for plugin titles exist for block titles and names. This means that a block may not be named “Facerange Block” unless developed by a legal representative of Facerange.

#### 3a. Block names should be unique and properly namespaced.

The block name (meaning the [`name` parameter to `registerBlockType()`](#block-editor/developers/block-api/block-registration) and [`name` in `block.json`](https://github.com/WordPress/gutenberg/blob/master/docs/rfc/block-registration.md#name)) must be unique to the block. As with titles, please respect trademarks and other projects’ commonly used names, so as not to conflict with them.

The namespace prefix to the block name should reflect either the plugin author, or the plugin slug. For example:

`name: "my-rainbow-block-plugin/rainbow"`, or  
`name: "john-doe/rainbow"`, or  
`name: "pluginco/rainbow"`.

The namespace may not be a reserved one such as `core` or `wordpress`.

#### 4. Block Plugins must include a `block.json` file.

The Block Registration RFC outlines the format of a `block.json` file: <https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md>

Block Plugins must include a valid `block.json` file. In addition to the requirements specified in the RFC, the `block.json` must include the following attributes:

- `name`
- `title`
- At least one of: `script`, `editorScript`
- At least one of: `style`, `editorStyle`

#### 5. Block Plugins must work independently.

Block Plugins must function by themselves without requiring any external dependencies such as another WordPress plugin or theme.

A Block Plugin may make use of code or hooks in another WordPress plugin or theme, provided the Block Plugin is still usable without that plugin or theme installed. For example, a Recipe Block Plugin is permitted to apply a filter implemented in a slider plugin to improve its image display, as long as the Recipe Block Plugin is still usable without the slider plugin.

#### 6. Block Plugins should work seamlessly.

Block Plugins are intended to work seamlessly and instantly when installed from the editor. That means they should not encumber the user with additional steps or prerequisites such as installing another plugin or theme, signing up for an account, or logging in or manually connecting to an external service.

No form of payment is permitted for the use of a Block Plugin. While it is allowed to use the donation link feature in the plugin’s readme, or to link from the full plugin listing, the Block Plugin itself must be free to use. Block plugins that do require a paid service or include upselling and premium features are still permitted in the main WordPress Plugin Directory, subject to its guidelines.

Block Plugins may use an external/cloud API where necessary, provided it can be done seamlessly without requiring a login or activation key.

They should not rely on an external API or cloud service for functions that could be performed locally.

#### 7. Server-side code should be kept to a minimum.

Since Block Plugins are WordPress plugins, they necessarily contain PHP code for metadata and initialization. As much as possible, they should avoid including additional PHP code or server-side libraries. The WordPress REST API should be the preferred interface to WordPress, rather than custom server-side code.

There are limits to the REST API, and situations where server-side PHP is the only performant way to implement a feature. In those situations, PHP code may be included, provided it is clearly written, used as little as possible, and well documented.

#### 8. Must not include advertisements or promotional notices.

Block Plugins must not include code that displays alerts, dashboard notifications, or similar obtrusive messages unrelated to the purpose of the block.

---

# Add Your Plugin to the Block Directory <a name="plugins/wordpress-org/add-your-plugin-to-the-block-directory" />

Source: https://developer.wordpress.org/plugins/wordpress-org/add-your-plugin-to-the-block-directory/

There are two main directory listings of block related plugins.

- Plugins that are **only** blocks
- Plugins that contain blocks

A plugin can be listed in both, however there will be no benefit to your plugin SEO or ranking due to either. The only benefit to being a plugin that is only a block is that you gain the ability to be added to the Block Directory in the Block Editor itself, for immediate installation.

## Block Only Plugins

Block Only plugins are plugins that **only** contain blocks.

Block Plugins are required to be much smaller and more minimalist than a regular WordPress plugin in order to be safely installed with a single click. That means as well as keeping to the regular [plugin guidelines](#plugins/wordpress-org/detailed-plugin-guidelines) you’ll also need to follow some additional rules. In particular, you should stick to mostly JavaScript code and keep PHP to the bare minimum; and not add any UI or other code outside of the Gutenberg editor.

If you’re a committer of a block plugin that does meet the criteria for adding it to the [Block Directory](https://wordpress.org/plugins/browse/block/) as confirmed by the Checker tool, you can then add it yourself [using the Block Checker tool](https://wordpress.org/plugins/developers/block-plugin-validator/):

![Block checker tool interface with a "Add Plugin Name to the Block Directory" button](https://i0.wp.com/developer.wordpress.org/files/2020/08/Screen-Shot-2020-07-10-at-1.29.25-pm.png?resize=1024%2C308&ssl=1)Likewise you can remove it at any time using that same tool if you notice problems or would prefer it wasn’t included.

**Helpful tools:**

- [Block Creation tutorial](https://github.com/WordPress/gutenberg/pull/22831/files?short_path=c4d2c28#diff-c4d2c286eac33acdc7571032a984e0ca) – how to write a block plugin
- [Block Submission tutorial](https://github.com/WordPress/gutenberg/pull/23545/files?short_path=555f1c3#diff-555f1c31856d86ed5ff0d492b5a127c1) – tips and suggestions for ensuring your block is ready for the Block Directory
- [Block Checker tool](https://make.wordpress.org/plugins/2020/07/11/you-can-now-add-your-own-plugins-to-the-block-directory/) – validate plugin for inclusion

## Plugins Containing Blocks

Many older plugins, as well as larger and more complex plugins, may contain blocks. They also will contain other features, like widgets. An example of this sort of plugin would be Jetpack or Yoast SEO. While they have a large number of features, they also contain some blocks.

If you’ve written a plugin that introduces or improves blocks, or know of a plugin that does, **email us at <plugins@wordpress.org>** and request your plugin be added. At that time, your plugin will be reviewed to confirm this request, but also to ensure you meet all current guideline standards.

Before you email, please make certain your plugin is compatible with the latest version of WordPress and that it is free from all security issues. If there are security or guideline issues in your plugin, it may be closed pending your corrections.

---

# Release Confirmation Emails <a name="plugins/wordpress-org/release-confirmation-emails" />

Source: https://developer.wordpress.org/plugins/wordpress-org/release-confirmation-emails/

In order to better protect plugins from inadvertent releases, we’ve added a new **opt-in** feature for plugins: Release Confirmation.

When enabled on a plugin, to release a new version of a plugin you’ll need to tag a new release in SVN as normal, and then confirm on the [Release Management](https://wordpress.org/plugins/developers/releases/) dashboard.

Access to the Release Management dashboard is limited to plugin committers, and all actions require confirmation via a tokenised link which is emailed to you as needed.

When WordPress.org detects a new version has been tagged in SVN, all committers are automatically sent an email notifying them that a new release is pending, who made it, and a link to the dashboard to confirm the release.  
Plugin committers will also see a banner on the top of your WordPress.org plugins page directing you to the Release Management dashboard.

Once confirmed, the release will proceed as usual and should update within a few minutes.

## Requirements

- Plugins are required to use tags for new versions, you cannot release your plugin from trunk.
- You must still update the `Stable Tag:` header in your trunk/readme.txt file.
- Once released, alterations cannot be made to the tagged version. This includes changing the readme (for tested up to).
- Committers must be able to receive emails directly, and not have it go to a shared inbox or support ticket system.

## Requiring double approval

Release Confirmations are opt-in, but only requires a singular committer to confirm the release.  
If a group would like to require multiple committers to approve a release, please contact the Plugins team with your request.

---

# Transferring Your Plugin to a New Owner <a name="plugins/wordpress-org/transferring-your-plugin-to-a-new-owner" />

Source: https://developer.wordpress.org/plugins/wordpress-org/transferring-your-plugin-to-a-new-owner/

While any plugin can have an unlimited number of committers and support reps, there is only one official owner of a plugin at any time. This is akin to how a post on WordPress can only have one official post author.

## For Plugins With Under 10,000 Users

If you’re transferring your plugin to a new owner, there are two steps that must take place.

First, add the new user as a **committer** to the plugin:

- go to `https://wordpress.org/plugins/YOURPLUGIN/advanced` and add their username in as a committer
- update the `readme.txt` to add their userID as an author

Next, go to the Advanced tab and scroll down to the Danger Zone. There you will see a section for **Transfer Your Plugin**. Pick someone from the dropdown and click the button.

If there are no other committers, the plugin will not be available to be transferred, so you must do that first.

[![Transfer this plugin interface with a selector for the new owner and a "Please transfer -Plugin Name-" button](https://i0.wp.com/developer.wordpress.org/files/2020/04/transfer.jpeg?resize=1024%2C558&ssl=1)](https://i0.wp.com/developer.wordpress.org/files/2020/04/transfer.jpeg?ssl=1)## For Plugins with OVER 10,000 Users (or are beta/featured)

In order to prevent abuse, larger plugins and those officially recognized as featured/beta are restricted from these changes.

To transfer a plugin in this case, you will need to email `plugins@wordpress.org` from the **CURRENT** owner’s email the following information:

1. A *brief* explanation of the reason for the transfer
2. The user ID of the new owner
3. If applicable, any changes to the status of being a featured/beta plugin

Most requests are processed without issue, however should a plugin be determined to be critical to the WordPress.org project, or should there be reason to believe the request was invalid (i.e. not sent from the current owner’s email, or an email address positively connected back to them), it may be denied or delayed.

---

# Preventing WordPress from Updating Your External Plugin <a name="plugins/wordpress-org/preventing-wordpress-from-updating-your-external-plugin" />

Source: https://developer.wordpress.org/plugins/wordpress-org/preventing-wordpress-from-updating-your-external-plugin/

The information on this page is meant for use only on plugins **not** hosted on WordPress.org. Do not attempt to use this on your code hosted in the directory.

If you host your plugin on WordPress.org, we handle all updates for you. As such, the steps in this document are **prohibited** in all plugins submitted to the directory. Any plugin hosted here that is found to include this plugin will be closed and the developer required to remove it in order for their plugin to be restored.

We have chosen to document it here for the education of developers, as well as to ensure the global WordPress community can be safer.

## Always Use Good Folder Names

Before we get into the code, we must stress the absolute best way to ensure your plugin won’t get overwritten by an update from WordPress.org is to use a good name. If you’re making a plugin for your company, give it a folder name like `companyname-function-plugin` — for example, if you work for FaceRange and you’re making a status plugin, you could name it `facerange-status-plugin`

Not only would we not accept it for using the prohibited term ‘plugin’, the plugin team would validate that the plugin owner **legally** represents FaceRange.

## Update URI

As of WordPress 5.8, we have added in a feature to how the WordPress.org API checks for updates, and allowed it to be blocked by the use of a new header: Update URI.

Let’s say you have a plugin you made for your own site, and you gave it the folder name of `my-plugin`. That is a generic folder name, and has a high probability that someone else may use it. It’s also not a name we would allow you to block in our system, due to it’s generic nature.

The Update URI header can be added to the plugin headers. Look in your main plugin file for this section:

```php
/**
 * Plugin Name: My Cool Plugin
 * Plugin URI: https://example.com/my-plugin/
 * Description: My Plugin does cool things.
 * Version: 1.0
 * Author: the team
 * Author URI: https://example.com/
 * Text Domain: my-plugin
 * License: GPLv2
 * License URI: https://opensource.org/licenses/gpl-2.0.php
 */
```

To apply it, add a new header for **Update URI** and put a **non** WordPress.org URI in the value:

```php
 * Update URI: https://example.com/my-updater/
```

You can also set it to `Update URI: false` if you want. As long as it does not include `worpress.org/plugins` or `w.org/plugins` it will be protected.

## Filtering Updates

Another method, which is supported on older versions of WordPress, is to filter external API requests and discard any for your plugin.

This code, which was written by [Mark Jaquith](https://markjaquith.wordpress.com/2009/12/14/excluding-your-plugin-or-theme-from-update-checks/), can be added to your own plugin:

```php
function example_hidden_plugin_12345( $r, $url ) {
    if ( 0 !== strpos( $url, 'https://api.wordpress.org/plugins/update-check' ) )
        return $r; // Not a plugin update request. Bail immediately.
  
    $plugins = unserialize( $r['body']['plugins'] );
    unset( $plugins->plugins[ plugin_basename( __FILE__ ) ] );
    unset( $plugins->active[ array_search( plugin_basename( __FILE__ ), $plugins->active ) ] );
    $r['body']['plugins'] = serialize( $plugins );
    return $r;
}
 
add_filter( 'http_request_args', 'example_hidden_plugin_12345', 5, 2 );
```

What that does is check if the update request is from the WordPress.org api, and if it matches the plugin folder and file name of *this* plugin. If it does, the plugin is removed from the list of plugins to check for updates.

---

# Detailed Plugin Guidelines <a name="plugins/wordpress-org/detailed-plugin-guidelines" />

Source: https://developer.wordpress.org/plugins/wordpress-org/detailed-plugin-guidelines/

Last Updated: March 15, 2024

Adding a Block Only plugin? Please read the [Block Specific Guidelines](#plugins/wordpress-org/block-specific-plugin-guidelines)

## The Plugin Directory

The goal of the WordPress Plugin Directory is to provide a safe place for all WordPress users – from the non-technical to the developer – to download plugins that are consistent with the goals of the WordPress project.

To that end, we want to ensure a simple and transparent process for developers to submit plugins for the directory. As part of our ongoing efforts to make the plugin directory inclusion process more transparent, we have created a list of developer guidelines. We strive to create a level playing field for all developers.

If you have suggestions to improve the guidelines, or questions about them, please email `plugins@wordpress.org` and let us know.

## Developer Expectations

Developers, all users with commit access, and all users who officially support a plugin are expected to abide by the following guidelines:

- Plugin Directory Guidelines (this document)
- [Community Guidelines](https://make.wordpress.org/handbook/community-code-of-conduct/)
- [Forums Guidelines](https://wordpress.org/support/guidelines/) (should they use the forums/reviews)

Violations may result in plugins or plugin data (for previously approved plugins) being removed from the directory until the issues are resolved. Plugin data, such as user reviews and code, may not be restored depending on the nature of the violation and the results of a peer-review of the situation. Repeat violations may result in all the author’s plugins being removed and the developer being banned from hosting plugins on WordPress.org.

It is the responsibility of the plugin developer to ensure their contact information on WordPress.org is up to date and accurate, in order that they receive all notifications from the plugins team. Auto-replies and emails that route to a support system are not permitted as they historically prevent humans from addressing emails in a timely fashion.

All code in the directory should be made as secure as possible. Security is the ultimate responsibility of the plugin developer, and the Plugin Directory enforces this to the best of our ability. Should a plugin be found to have security issues, it will be closed until the situation is resolved. In extreme cases the plugin may be updated by the WordPress Security team and propagated for the safety of the general public.

While we attempt to account for as many relevant interpretations of the guidelines as possible, it is unreasonable to expect that every circumstance will be explicitly covered. If you are uncertain whether a plugin might violate the guidelines, please contact `plugins@wordpress.org` and ask.

## The Guidelines

### 1. Plugins must be compatible with the GNU General Public License

Although any GPL-compatible license is acceptable, using the same license as WordPress — “GPLv2 or later” — is strongly recommended. All code, data, and images — anything stored in the plugin directory hosted on WordPress.org — must comply with the GPL or a GPL-Compatible license. Included third-party libraries, code, images, or otherwise, must be compatible. For a specific list of compatible licenses, please read the [GPL-Compatible license list](https://www.gnu.org/philosophy/license-list.html#GPLCompatibleLicenses) on gnu.org.

### 2. Developers are responsible for the contents and actions of their plugins.

It is the sole responsibility of plugin developers to ensure all files within their plugins comply with the guidelines. Intentionally writing code to circumvent guidelines, or restoring code they were asked to remove, is prohibited (see #9 illegal/dishonest actions).

Developers are expected to confirm, before uploading to SVN, the licensing of all included files, from original source code to images and libraries. In addition, they must comply to the terms of use for all third party services and APIs utilized by their plugins. If there is no way to validate the licensing of a library or the terms of an API, then they cannot be used.

### 3. A stable version of a plugin must be available from its WordPress Plugin Directory page.

The only version of the plugin that WordPress.org distributes is the one in the directory. Though people may develop their code somewhere else, users will be downloading from the directory, not the development environment.

Distributing code via alternate methods, while not keeping the code hosted here up to date, may result in a plugin being removed.

### 4. Code must be (mostly) human readable.

Obscuring code by hiding it with techniques or systems similar to `p,a,c,k,e,r`‘s obfuscate feature, uglify’s mangle, or unclear naming conventions such as `$z12sdf813d`, is not permitted in the directory. Making code non-human readable forces future developers to face an unnecessary hurdle, as well as being a common vector for hidden, malicious code.

We require developers to provide public, maintained access to their source code and any build tools in one of the following ways:

- Include the source code in the deployed plugin
- A link in the readme to the development location

We strongly recommend you document how any development tools are to be used.

### 5. Trialware is not permitted.

Plugins may not contain functionality that is restricted or locked, only to be made available by payment or upgrade. Functionality may not be disabled after a trial period or quota is met. In addition, plugins that provide sandbox only access to APIs and services are also trial, or test, plugins and not permitted.

Paid functionality in services *is* permitted (see guideline 6: serviceware), provided all the code inside a plugin is fully available. We recommend the use of add-on plugins, hosted outside of WordPress.org, in order to exclude the premium code. Situations where a plugin is intended as a developer tool only will be reviewed on a case by case basis.

Attempting to upsell the user on ad-hoc products and features *is* acceptable, provided it falls within bounds of guideline 11 (hijacking the admin experience).

### 6. Software as a Service is permitted.

Plugins that act as an interface to some external third party service (e.g. a video hosting site) are allowed, even for paid services. The service itself must provide functionality of substance and be clearly documented in the readme file submitted with the plugin, preferably with a link to the service’s Terms of Use.

Services and functionality *not* allowed include:

- A service that exists for the sole purpose of validating licenses or keys while all functional aspects of the plugin are included locally is not permitted.
- Creation of a service by moving arbitrary code out of the plugin so that the service may falsely appear to provide supplemented functionality is prohibited.
- Storefronts that are not services. A plugin that acts only as a front-end for products to be purchased from external systems will not be accepted.

### 7. Plugins may not track users without their consent.

In the interest of protecting user privacy, plugins may not contact external servers without *explicit* and authorized consent. This is commonly done via an ‘opt in’ method, requiring registration with a service or a checkbox within the plugin settings. Documentation on how any user data is collected, and used, should be included in the plugin’s readme, preferably with a clearly stated privacy policy.

Some examples of prohibited tracking include:

- Automated collection of user data without explicit confirmation from the user.
- Intentionally misleading users into submitting information as a requirement for use of the plugin itself.
- Offloading assets (including images and scripts) that are unrelated to a service.
- Undocumented (or poorly documented) use of external data (such as blocklists).
- Third-party advertisement mechanisms which track usage and/or views.

An exception to this policy is Software as a Service, such as Twitter, an Amazon CDN plugin, or Akismet. By installing, activating, registering, and configuring plugins that utilize those services, consent is granted for those systems.

### 8. Plugins may not send executable code via third-party systems.

Externally loading code from documented services is permitted, however all communication must be made as securely as possible. Executing outside code within a plugin when not acting as a service is not allowed, for example:

- Serving updates or otherwise installing plugins, themes, or add-ons from servers other than WordPress.org’s
- Installing premium versions of the same plugin
- Calling third party CDNs for reasons other than font inclusions; all non-service related JavaScript and CSS must be included locally
- Using third party services to manage regularly updated lists of data, when not explicitly permitted in the service’s terms of use
- Using iframes to connect admin pages; APIs should be used to minimize security risks

Management services that interact with and push software down to a site *are* permitted, provided the service handles the interaction on it’s own domain and not within the WordPress dashboard.

### 9. Developers and their plugins must not do anything illegal, dishonest, or morally offensive.

While this is subjective and rather broad, the intent is to prevent plugins, developers, and companies from abusing the freedoms and rights of end users as well as other plugin developers.

This includes (but is not restricted to) the following examples:

- Artificially manipulating search results via keyword stuffing, black hat SEO, or otherwise
- Offering to drive more traffic to sites that use the plugin
- Compensating, misleading, pressuring, extorting, or blackmailing others for reviews or support
- Implying users must pay to unlock included features
- Creating accounts to generate fake reviews or support tickets (i.e. sockpuppeting)
- Taking other developers’ plugins and presenting them as original work
- implying that a plugin can create, provide, automate, or guarantee legal compliance
- Utilizing the user’s server or resources without permission, such as part of a botnet or crypto-mining
- Violations of the [WordPress.org Community Code of Conduct](https://make.wordpress.org/handbook/community-code-of-conduct/)
- Violations of the [WordCamp code of conduct](https://make.wordpress.org/community/handbook/wordcamp-organizer/planning-details/code-of-conduct/)
- Violations of the [Forum Guidelines](https://wordpress.org/support/guidelines/)
- Harassment, threats, or abuse directed at any other member of the WordPress community
- Falsifying personal information to intentionally disguise identities and avoid sanctions for previous infractions
- Intentionally attempting to exploit loopholes in the guidelines

### 10. Plugins may not embed external links or credits on the public site without explicitly asking the user’s permission.

All “Powered By” or credit displays and links included in the plugin code must be optional and default to *not* show on users’ front-facing websites. Users must opt-in to displaying any and all credits and links via clearly stated and understandable choices, not buried in the terms of use or documentation. Plugins may not require credit or links be displayed in order to function. Services *are* permitted to brand their output as they see fit, provided the code is handled in the service and not the plugin.

### 11. Plugins should not hijack the admin dashboard.

Users prefer and expect plugins to feel like part of WordPress. Constant nags and overwhelming the admin dashboard with unnecessary alerts detract from this experience.

Upgrade prompts, notices, alerts, and the like must be limited in scope and used sparingly, be that contextually or only on the plugin’s setting page. Site wide notices or embedded dashboard widgets *must* be dismissible or self-dismiss when resolved. Error messages and alerts must include information on how to resolve the situation, and remove themselves when completed.

Advertising within the WordPress dashboard should be avoided, as it is generally ineffective. Users normally only visit settings pages when they’re trying to solve a problem. Making it harder to use a plugin does not generally encourage a good review, and we recommend limiting any ads placed therein. Remember: tracking referrals via those ads is not permitted (see guideline 7) and most third-party systems do not permit back-end advertisements. Abusing the guidelines of an advertising system will result in developers being reported upstream.

Developers are welcome and encouraged to include links to their own sites or social networks, as well as locally (within the plugin) including images to enhance that experience.

### 12. Public facing pages on WordPress.org (readmes) must not spam.

Public facing pages, including readmes and translation files, may not be used to spam. Spammy behavior includes (but is not limited to) unnecessary affiliate links, tags to competitors plugins, use of over 5 tags total, blackhat SEO, and keyword stuffing.

Links to directly required products, such as themes or other plugins required for the plugin’s use, are permitted within moderation. Similarly, related products may be used in tags but not competitors. If a plugin is a WooCommerce extension, it may use the tag ‘woocommerce.’ However if the plugin is an alternative to Akismet, it may not use that term as a tag. Repetitive use of a tag or specific term is considered to be keyword stuffing, and is not permitted.

Readmes are to be written for people, not bots.

In all cases, affiliate links must be disclosed and must directly link to the affiliate service, not a redirect or cloaked URL.

### 13. Plugins must use WordPress’ default libraries.

WordPress includes a number of useful libraries, such as jQuery, Atom Lib, SimplePie, PHPMailer, PHPass, and more. For security and stability reasons plugins may not include those libraries in their own code. Instead plugins must use the versions of those libraries packaged with WordPress.

For a list of all javascript libraries included in WordPress, please review [Default Scripts Included and Registered by WordPress](#reference/functions/wp_enqueue_script).

### 14. Frequent commits to a plugin should be avoided.

The SVN repository is a release repository, not a development one. All commits, code or readme files, will trigger a regeneration of the zip files associated with the plugin, so only code that is ready for deployment (be that a stable release, beta, or RC) should be pushed to SVN. Including a descriptive and informative message with each commit is strongly recommended. Frequent ‘trash’ commit messages like ‘update’ or ‘cleanup’ makes it hard for others to follow changes. Multiple, rapid-fire commits that only tweak minor aspects of the plugin (including the readme) cause undue strain on the system and can be seen as gaming Recently Updated lists.

An exception to this is when readme files are updated solely to indicate support of the latest release of WordPress.

### 15. Plugin version numbers must be incremented for each new release.

Users are only alerted to updates when the plugin version is increased. The trunk readme.txt must always reflect the current version of the plugin. For more information on tagging, please read our [SVN directions on tagging](#plugins/wordpress-org/how-to-use-subversion) and [how the readme.txt works](#plugins/wordpress-org/how-your-readme-txt-works).

### 16. A complete plugin must be available at the time of submission.

All plugins are examined prior to approval, which is why a zip file is required. Names cannot be “reserved” for future use or to protect brands (see #17: respect brands). Directory names for approved plugins that are not used may be given to other developers.

### 17. Plugins must respect trademarks, copyrights, and project names.

The use of trademarks or other projects as the sole or initial term of a plugin slug is prohibited unless proof of legal ownership/representation can be confirmed. For example, the [WordPress Foundation has trademarked the term “WordPress”](http://wordpressfoundation.org/trademark-policy/) and it is a violation to use “wordpress” in a domain name. This policy extends to plugin slugs, and we will not permit a slug to begin with another product’s term.

For example only employees of Super Sandbox should use the slug “super-sandbox,” or their brand in a context such as “Super Sandbox Dancing Sloths.” Non-employees should use a format such as “Dancing Sloths for Superbox” instead to avoid potentially misleading users into believing the plugin was developed by Super Sandbox. Similarly, if you don’t represent the “MellowYellowSandbox.js” project, it’s inappropriate to use that as the name of your plugin.

Original branding is recommended as it not only helps to avoid confusion, but is more memorable to the user.

### 18. We reserve the right to maintain the Plugin Directory to the best of our ability.

Our intent is to enforce these guidelines with as much fairness as humanly possible. We do this to ensure overall plugin quality and the safety of their users. To that end, we reserve the following rights:

- … to update these guidelines at any time.
- … to disable or remove any plugin from the directory, even for reasons not explicitly covered by the guidelines.
- … to grant exceptions and allow developers time to address issues, even security related.
- … to remove developer access to a plugin in lieu of a new, active, developer.
- … to make changes to a plugin, without developer consent, in the interest of public safety.

In return, we promise to use those rights sparingly and with as much respect as possible for both end users and developers.

---

# Using Subversion <a name="plugins/wordpress-org/how-to-use-subversion" />

Source: https://developer.wordpress.org/plugins/wordpress-org/how-to-use-subversion/

SVN, or Subversion, is a version control system similar to Git. It can be used via command line, or one of numerous GUI applications, such as [Tortoise SVN](https://tortoisesvn.net/), [SmartSVN](https://www.smartsvn.com/), and more. If you’re new to SVN, we recommend reviewing a [comparison of SVN clients](https://en.wikipedia.org/wiki/Comparison_of_Subversion_clients) before deciding which is best for you.

This document is *not* a complete and robust explanation for using SVN, but more a quick primer to get started with plugins on WordPress.org. For more comprehensive documentation, see [The SVN Book](http://svnbook.red-bean.com/).

We’ll describe here some of the basics about using SVN as it relates to WordPress.org hosting. The basic concepts of SVN, and nearly all code repository services, remain the same.

For additional information, please see these documents:

- [How the readme.txt works](#plugins/wordpress-org/how-your-readme-txt-works)
- [How plugin assets (header images and icons) work](#plugins/wordpress-org/plugin-assets)

SVN and the Plugin Directory are a *release* repository. Unlike Git, you shouldn’t commit every small change, as doing so can degrade performance. Please only push **finished** changes to your SVN repository.

## Overview

All your files will be centrally stored in the **svn repository** on our servers. From that repository, anyone can **check out** a copy of your plugin files onto their local machine, but, as a plugin author, only you have the authority to **check in**. That means you can make changes to the files, add new files, and delete files on your local machine and upload those changes back to the central server. It’s this process of checking in that updates both the files in the repository and also the information displayed in the WordPress.org Plugin Directory.

Subversion keeps track of all these changes so that you can go back and look at old versions or **revisions** later if you ever need to. In addition to remembering each individual revision, you can tell subversion to **tag** certain revisions of the repository for easy reference. Tags are great for [labeling different releases of your plugin](#task-3) and are the only fully supported method of ensuring the correct versions are seen on WordPress.org and updated for users.

## Your Account

Your account for SVN will be the same username (not the email) of the account you used when you submitted the plugin. This is the username you use for the WordPress forums as well.

WordPress.org allows setting a SVN-specific password for your account, this can be done in [your Account Settings](https://profiles.wordpress.org/me/profile/edit/group/3/?screen=svn-password). For more information on why and how to use it, please see [this Meta Guide](https://make.wordpress.org/meta/handbook/tutorials-guides/svn-access/).

Remember, *capitalization matters* — if your username is JaneDoe, then you must use the capital J and D or else SVN will fail. You can see the specific capitalization of your name in your account settings: <https://profiles.wordpress.org/me/profile/edit/group/3/?screen=svn-password>

## SVN Folders

There are three directories created by default in all SVN repositories.

```bash
/assets/
/tags/
/trunk/
```

- Use `assets` for [screenshots, plugin headers, and plugin icons](#plugins/wordpress-org/plugin-assets).
- Development work belongs in `trunk`.
- Releases go in `tags`.

*The /branches/ directory is no longer created by default, as it was often unused.*

### Trunk

Do not put your *main* plugin file in a subfolder of trunk, like `/trunk/my-plugin/my-plugin.php` as that will break downloads. You may use subfolders for included files.

The `/trunk` directory is where your plugin code should live. The trunk can be considered to be the latest and greatest code, however this is not necessarily the latest *stable* code. Trunk is for the development version. Hopefully, the code in trunk should always be working code, but it may be buggy from time to time because it’s not necessarily the “stable” version. For simple plugins, the trunk may be the only version of the code that exists, and that’s fine as well.

Even if you do your development work elsewhere (like a git repository), we recommend you keep the trunk folder up to date with your code for easy SVN compares.

### Tags

The `/tags` directory is where you put versions of the plugin. You will use the same version numbers for the sub-directories here as you do for your plugin versioning. It is important that you always use tag folders and proper versioning to ensure your users get the correct code.

Version 1.0 of the plugin will be in `/tags/1.0`, version 1.1 would be in `/tags/1.1`, and so forth.

We **strongly** encourage the use of [semantic software versioning](https://en.wikipedia.org/wiki/Software_versioning).

### Assets

See also: [How Your Plugin Assets Work](#plugins/wordpress-org/plugin-assets)

Assets is where your screenshots, header images, and plugin icons reside. Some older plugins in the directory may have screenshot files in /trunk instead, however this is not recommended. All new plugins should put their screenshots in /assets. This keeps the filesizes of plugins small, as it is not necessary to send screenshots to WordPress installations along with the plugin itself.

### Branches

*The /branches/ directory is no longer created by default, as it was largely unused. This section can be considered deprecated and is available only for informational purposes.*

The `/branches` directory is a place that you can use to store branches of the plugin. Perhaps versions that are in development, or test code, etc.

The WordPress.org system **does not** use the branches directory for anything at all, it’s considered to be strictly for developers to use as they need it. As it is no longer created by default, you can ignore it as you do not need it any longer.

## Best Practices

In order to make your code the most accessible for other developers, the following practices are considered to be optimum.

### Don’t use SVN for development

This is often confusing. Unlike GitHub, SVN is meant to be a *release* system, not a development system. You don’t need to commit and push every small change, and in fact doing so is detrimental to the system. Every time you push code to SVN, it rebuilds *all* your zip files for all versions in SVN. This is why sometimes your plugin updates don’t show for up to 6 hours. Instead, you should push one time, when you’re ready to go.

### Use the trunk folder for code

Many people use `trunk` as a placeholder. While it’s possible to simply update the `readme.txt` file in trunk and put everything in tag folders, doing so makes it more difficult to compare any changes in your code. Instead, trunk should contain the latest version of your code, even if that version is a beta.

### Always Tag Releases

While it’s possible to use trunk as a stable tag for plugins, this feature is not actually supported nor recommended. Instead, releases should be properly tagged and iterated. This will ensure full compatibility with any automatic updater, as well as allow for rollbacks should there be an issue with your code.

### Create tags from trunk

Instead of pushing your code directly to a tag folder, you should edit the code in trunk, complete with the stable version in the readme, and *then* copy the code from trunk to the new tag.

Not only will this make it easier see any changes, you will be making smaller commits as SVN will only update the changed code. This will save you time and reduce potential errors (such as updating to the wrong stable tag and pushing bad code to users).

Don’t worry about the tag folder not existing for a short while. You can use `svn cp` to copy trunk to the tag and then push them up to SVN at the same time.

If you are operating locally, then you can update trunk and create tags from it all in one go. Checkout the root of your repository, update the files in /trunk, then `svn copy /trunk /tags/1.2.3` (or whatever the version number is) and then commit the whole thing in one go. SVN is a system based on differences, and as long as you use svn to do the copy operation, then it preserves history and makes everything easy for others to follow along with.

## Examples

### Starting a New Plugin

To start your plugin, you need to add the files you already have to your new SVN repository.

First create a local directory on your machine to house a copy of the SVN repository:

```bash
$ mkdir my-local-dir
```

Next, check out the pre-built repository

```bash
$ svn co https://plugins.svn.wordpress.org/your-plugin-name my-local-dir
> A my-local-dir/trunk
> A my-local-dir/branches
> A my-local-dir/tags
> Checked out revision 11325.
```

In our example, subversion has added ( “A” for “add” ) all of the directories from the central SVN repository to your local copy.

To add your code, navigate into the `my-local-dir` folder: `$ cd my-local-dir`

Now you can add your files to the `trunk/` directory of your local copy of the repository using copy/paste commands via command line, or dragging and dropping. Whatever you’re comfortable with.

Do not put your *main* plugin file in a subfolder of trunk, like `/trunk/my-plugin/my-plugin.php` as that will break downloads. You may use subfolders for included files.

Once your files are in the trunk folder, you must let subversion know you want to add those new files back into the central repository.

```bash
$ cd my-local-dir
my-local-dir/ $ svn add trunk/*
> A trunk/my-plugin.php
> A trunk/readme.txt
```

After you add all your files, you’ll check in the changes back to the central repository.

```bash
my-local-dir/ $ svn ci -m 'Adding first version of my plugin'
> Adding trunk/my-plugin.php
> Adding trunk/readme.txt
> Transmitting file data .
> Committed revision 11326.
```

It’s required to include a commit message for all checkins.

If the commit fails because of ‘Access forbidden’ and you **know** you have commit access, add your username and password to the check-in command.

```bash
my-local-dir/ $ svn ci -m 'Adding first version of my plugin' --username your_username --password your_password
```

Remember your username is *case sensitive*.

### Editing Existing Files

Once your plugin is in the directory, you will likely need to edit the code at some point.

First go into your local copy of the repository and make sure it’s up to date.

```bash
$ cd my-local-dir/
my-local-dir/ $ svn up
> At revision 11326.
```

In the above example, we’re all up to date. If there had been changes in the central repository, they would have been downloaded and merged into your local copy.

Now you can edit the file that needs changing using whatever editor you prefer.

If you’re not using an SVN GUI tool (like SubVersion or Coda) you can still check and see what’s different between your local copy and the central repository after you make changes. First we check the status of the local copy:

```bash
my-local-dir/ $ svn stat
> M trunk/my-plugin.php
```

This tells us that our local `trunk/my-plugin.php` is different from the copy we downloaded from the central repository ( “M” for “modified” ).

Let’s see what exactly has changed in that file, so we can check it over and make sure things look right.

```bash
my-local-dir/ $ svn diff
> * What comes out is essentially the result of a
  * standard `diff -u` between your local copy and the
  * original copy you downloaded.
```

If it all looks good then it’s time to check in those changes to the central repository.

```bash
my-local-dir/ $ svn ci -m "fancy new feature: now you can foo *and* bar at the same time"
> Sending trunk/my-plugin.php
> Transmitting file data .
> Committed revision 11327.
```

And now you’ve successfully updated trunk.

### “Tagging” New Versions

Each time you make a formal release of your plugin, you should tag a copy of that release’s code. This lets your users easily grab the latest (or an older) version, it lets you keep track of changes more easily, and lets the WordPress.org Plugin Directory know what version of your plugin it should tell people to download.

First copy your code to a subdirectory in the `tags/` directory. For the sake of the WordPress.org plugin browser, the new subdirectory should always look like a version number. `2.0.1.3` is good. `Cool hotness tag` is **bad**.

We want to use `svn cp` instead of the regular `cp` in order to take advantage of SVN’s features.

```bash
my-local-dir/ $ svn cp trunk tags/2.0
> A tags/2.0
```

As always, check in the changes.

```bash
my-local-dir/ $ svn ci -m "tagging version 2.0"
> Adding         tags/2.0
> Adding         tags/2.0/my-plugin.php
> Adding         tags/2.0/readme.txt
> Committed revision 11328.
```

When tagging a new version, **remember to update** the `Stable Tag` field in [`trunk/readme.txt`](https://wordpress.org/plugins/developers/#readme) to the new version.

Congratulations! You’ve updated your code!

## Notes

Don’t put anything in SVN that you’re not willing and prepared to have deployed to everyone who uses your plugin. This *includes* vendor files, `.gitignore` and everything else.

You also should never upload zip files. Like most code repository systems, SVN expects you to upload individual files.

### See Also

- [How the readme.txt works](#plugins/wordpress-org/how-your-readme-txt-works)
- [How plugin assets (header images and icons) work](#plugins/wordpress-org/plugin-assets)
- [The SVN Book](http://svnbook.red-bean.com/)

---

# Previews and Blueprints <a name="plugins/wordpress-org/previews-and-blueprints" />

Source: https://developer.wordpress.org/plugins/wordpress-org/previews-and-blueprints/

If you haven’t noticed it yet, the WordPress Playground is an amazing feature that lets anyone safely run a temporary WordPress install within their browser. It uses WASM to run a complete WordPress install – PHP, database, and all – entirely from within your web browser. No server needed, nothing to install.

For a while now Playground has supported loading any plugin or theme from the plugin directory; here’s how.

## The Plugin Preview Button[](https://github.com/WordPress/developer-plugins-handbook/blob/main/wordpress-org/previews-and-blueprints/index.md#the-plugin-preview-button)

The Plugin Preview feature adds a convenient button to plugins in the plugin directory, when enabled by a plugin’s developers. The button takes the user to Playground with that plugin installed. It’s right beside the Download button.

The Preview button is not shown by default; it must be explicitly enabled. Developers can use blueprint files in order to configure the preview environment and install dependencies (such as other plugins and themes).

## Enabling Plugin Previews[](https://github.com/WordPress/developer-plugins-handbook/blob/main/wordpress-org/previews-and-blueprints/index.md#enabling-plugin-previews)

There are two things required for a plugin preview button to appear to all users:

1. A valid `blueprint.json` file must be provided in a blueprints sub-directory of the plugin’s assets folder.
2. The plugin preview must be set to “public” from the plugin’s Advanced view by a committer.

If a valid `blueprint.json` file is present, then the Preview button will be present for plugin committers only. In which case it will look like this:

[![The Test Preview button allows plugin authors to showcase what their plugin does with one click.](https://i0.wp.com/developer.wordpress.org/files/2024/03/live-preview.png?resize=554%2C140&ssl=1)](https://i0.wp.com/developer.wordpress.org/files/2024/03/live-preview.png?ssl=1)It’s called Test Preview because that’s why it’s there: to allow plugin committers to test their plugin in the Playground environment and decide whether or not to make it easily available to the public.

## Blueprints[](https://github.com/WordPress/developer-plugins-handbook/blob/main/wordpress-org/previews-and-blueprints/index.md#blueprints)

Blueprints are json files used to set up a WordPress Playground instance.

They can be used to specify things like PHP and WP versions, the landing page, and (most importantly) a series of automated steps such as logging in, and installing and activating plugins and themes.

The blueprint for your plugin should be committed to the assets folder with subversion as `assets/blueprints/blueprint.json`. Initially only the one blueprint file is supported, but we expect to allow multiple in future.

Here’s an example of a simple blueprint.json file that you could use as a starting point:

```json
{
    "landingPage": "/wp-admin/edit.php",
    "preferredVersions": {
        "php": "7.4",
        "wp": "5.9"
    },
    "phpExtensionBundles": [
        "kitchen-sink"
    ],
    "steps": [
        {
            "step": "login",
            "username": "admin",
            "password": "password"
        }
    ]
}
```

The features used here are:

- `landingPage`, which specifies the URL of the page that the user will land on when the preview loads.
- `preferredVersions`, which specifies versions of PHP and WordPress.
- `phpExtensionBundles`, which in this case specifies that we want most common PHP extensions to be available (kitchen-sink).
- `steps`, which tells Playground what to do before displaying the landing page. In this case, it will simply log the user in to wp-admin.

Here’s an example of a more advanced blueprint.json that demonstrates some more features you could use to create a rich demo environment for users:

```json
{
    "landingPage": "/wp-admin/post.php?post=5&action=edit",
    "preferredVersions": {
        "php": "7.4",
        "wp": "5.9"
    },
    "phpExtensionBundles": [
        "kitchen-sink"
    ],
    "steps": [
        {
            "step": "login",
            "username": "admin",
            "password": "password"
        },
        {
            "step": "installPlugin",
            "pluginZipFile": {
                "resource": "wordpress.org\/plugins",
                "slug": "my-imaginary-plugin-dependency"
            },
            "options": {
                "activate": true
            }
        },
        {
            "step": "installPlugin",
            "pluginZipFile": {
                "resource": "wordpress.org\/plugins",
                "slug": "my-imaginary-plugin"
            },
            "options": {
                "activate": true
            }
        },
        {
            "step": "installTheme",
            "themeZipFile": {
                "resource": "wordpress.org\/themes",
                "slug": "my-imaginary-theme"
            }
        },
        {
            "step": "setSiteOptions",
            "options": {
                "some_required_option_1": "your_favorite_values",
                "some_required_option_2": "your_favorite_values"
            }
        },
        {
            "step": "runPHP",
            "code": "<?php require_once 'wordpress/wp-load.php'; wp_insert_post(array('post_title' => 'wp-load.php required for WP functionality', 'post_status' => 'publish')); ?>"
        }
    ]
}
```

## Using a generated Blueprint file[](https://github.com/WordPress/developer-plugins-handbook/blob/main/wordpress-org/previews-and-blueprints/index.md#using-a-generated-blueprint-file)

You might see a notice similar to this on your plugin’s page:

```
Your plugin does not yet have a blueprint file for user previews. If you'd like to enable previews, please follow these steps to create a blueprint.

1. Test your plugin in Playground.
2. Fix any bugs in your plugin that prevent it from working in Playground.
3. Download blueprint.json
4. Commit your blueprint to svn.

```

The **Test** link will use an auto-generated Blueprint file to load your plugin in Playground, with some default configuration values and steps. The **Download blueprint.json** link will let you download that auto-generated `blueprint.json` file, which you can then modify as needed and commit to Subversion when your plugin is ready for Playground previews.

## Committing a Blueprint to Subversion[](https://github.com/WordPress/developer-plugins-handbook/blob/main/wordpress-org/previews-and-blueprints/index.md#committing-a-blueprint-to-subversion)

You must commit your blueprint.json file to your plugin’s assets folder, named like this:

`/`assets/blueprints/`blueprint.json`

---

# Plugin Developer FAQ <a name="plugins/wordpress-org/plugin-developer-faq" />

Source: https://developer.wordpress.org/plugins/wordpress-org/plugin-developer-faq/

There are lot of ins and outs to hosting WordPress plugins. Please take a minute to see if your question is answered here before reaching out for assistance.

Last Updated: 12 October 2024

## The Plugin Review Team

### How do I contact the Plugin Review team?

You can contact us by email at `plugins@wordpress.org` – we reply to all emails within 7 business days.

### Can I join the team?

Please take a look at [this handbook page](https://make.wordpress.org/plugins/handbook/apply/).

## Submissions and Reviews

### Where do I submit my plugin?

Go to the [Add](https://wordpress.org/plugins/developers/add/) page and upload your file. You should make sure that:

- It’s a .zip file and under 10Mb.
- It’s in the common WordPress plugin format so that it can be installed using the ‘Upload Plugin’ feature in WordPress.
- It’s production-ready: complete, without errors, without unnecessary logs, without development tools, and that all necessary files are properly compiled or generated.

We do not accept placeholders or plugins that aren’t ready to be used.

### What if my plugin is over 10 megs?

Double check that you aren’t including unused files (like test folders, documentation, and full node/vendor folders). The majority of plugins who face this issue have included all sorts of development content that has no place in the final code.

### What happens after submission?

You will get an automated email telling you about the submission immediately. It will be queued, and as soon as we get to it, we will manually download and review your code. If we find no issues with the security, documentation, or presentation, your plugin will be approved. If we determine there are issues, you will receive a second email with details explaining what needs to be fixed.

### What will my plugin permalink (slug) be?

When you submit a plugin, you get an automated email telling you what the slug will be. This is populated based on the value of your Plugin Name in your main plugin file (the one with the plugin headers).

For example:

- Plugin name: `Boaty McBoatface`
- Autogenerated Slug: `boaty-mcboatface`

If there is an existing plugin with your name or slug, then [you’ll get a warning on the submission](#why-is-my-submission-failing-saying-my-plugin-name-already-exists).

The slug will also determine the following:

- The URL of your plugin’s WordPress.org public page: `wordpress.org/plugins/boaty-mcboatface`
- The folder name of your plugin in the WordPress plugins directory: `<wp-content-folder>/plugins/boaty-mcboatface`
- The address of your plugin’s SVN repository and trac: `plugins.svn.wordpress.org/boaty-mcboatface` and `plugins.trac.wordpress.org/browser/boaty-mcboatface `
- Your plugin’s text-domain for internationalization functions: `esc_html__('Hello', 'boaty-mcboatface');`

Once your plugin is approved, this name **cannot** be renamed. Please chose wisely.

### Why did I get a different slug than I was told?

If we have to change your permalink (slug) we will always email you to explain why. In general, we change your permalink when you have obvious typos or mistakes (*foundre* instead of *founder*, for example) or if there are conflicts with existing trademarks or other plugins. Please make sure you read your review email carefully, as we do explain why we do things.

### Why is my submission failing saying my plugin name already exists?

There are two reasons this happens:

1. You’re trying to use a plugin with a permalink that already exists on WordPress.org
2. You’re trying to use a plugin with a permalink that exists **outside** WordPress.org and has a significant user base.

The first one is obvious. You can’t have two plugins with the same permalink so you need to pick a new one.

The second one is confusing because it’s telling you that somewhere, not on WordPress.org, that permalink is in use. It’s important to understand that the way the plugin update API works is that it compares the plugin folder name (i.e. the permalink) to every plugin it has hosted on WordPress.org. If there’s a match, then it checks for updates and users are prompted to upgrade.

When that happens, users of the ‘original’ plugin (the one we don’t host) would upgrade to the one from WordPress.org and, if that isn’t what you actually wanted to do, you could break their sites.

Sometimes this situation develops when a company or person releases their plugin privately (via Github for example) and decides they want to re-release it on WordPress.org. In those cases, we recommend you email us and we’ll walk you through how to get past the error.

### Why am I getting an error that says I cannot begin my plugin name with a term?

That error is to inform you that you may not begin your Display Name with someone else’s trademarked term. This is to protect you and the directory from legal issues regarding trademark abuse. To correct the issue, you must change the Display Name in your plugin’s readme and main PHP files.

Please do not try to ‘work around’ this by cleverly renaming your plugin (WuuCommerce for example). All that does is make us worry you’re not going to be able to follow guidelines in the future.

### Why am I getting an error that says I cannot use a term *entirely* in my plugin name?

Some trademark owners have requested we no longer permit the use of specific terms in plugin names entirely. If you see this error, then you must remove the term from your plugin name.

> To proceed with this submission you must remove “\[TERM\]” from the Plugin Name: line in both your main plugin file and readme entirely.

If you attempt to get around this by changing your term from ‘Facerange’ to ‘Face-Range’, we will pend your submission and reiterate that you cannot use the term. Please don’t try to be sneaky or clever to get past this restriction.

### How do I submit an official plugin?

Log in as the official organization user account and submit with that account *only*.

How we will know that you are the official organization? Because of your email address mostly.

We cannot accept plugins that act in name of an organization submitted by individual developer accounts, unless they’re clearly company ones as well. For example, submitting your official plugin with a user that has a gmail address is likely to be flagged for trademark infringement.

### What if I submitted the plugin with the wrong user ID?

Just reply to the email right away and let us know. We can transfer ownership for you. If you forget to do this, you can fix it yourself by [adding the correct account as a committer](#how-do-i-give-someone-else-access-to-my-plugin) and then having that account remove your own.

**DO NOT** resubmit your plugin. Just tell us right away and we’ll fix it.

### How long does it take to get a plugin approved?

There’s no official average, as no two plugins are the same. If your plugin is small and all the code is correct, it should be approved within **fourteen** days of *initial review*.

If your plugin has any code issues, it will take as long as it takes for you to correct the issues. Either way, you *will* get an email from `plugins@wordpress.org` with the status, so please add that to your email whitelist and patiently wait for our response.

### I sent in the fixes but no one replied. How long should I wait?

We aim to reply to all reviews within ten (10) business days. If it’s been less than that, it just means we’ve been really busy. If it’s been two days, like over a weekend or a holiday, then you should not **reasonably** expect a reply.

Remember the review team is made up of 100% volunteers, all of whom have full time day jobs, and other volunteer duties. We do reply promptly, but we also have lives outside of WordPress.

### If my plugin has a problem, how long do I have to fix it?

There’s no timeline and as long as we know you’re working on it and we feel you’re making progress, we’ll leave the review open. Your plugin will be rejected after 3 months, but the review will remain open.

### Why was my plugin rejected after three months?

If your plugin review is not complete after three (3) months, we will reject your submission in order to keep the queue maintainable. At any point in time, we have more than 500 people mid-review, and we figure that 3 months is a pretty reasonable time frame.

### I finally fixed my plugin. Should I resubmit?

If your plugin was rejected after three months, submit it again and reply to the email so we are aware that you wanna continue a previous unfinished review. Even if it’s been 18 months. The longest time to date has been 3 years. We don’t mind if it takes a while.

**DO NOT** resubmit your plugin if it was rejected for any other reason, just reply to the email.

### How many plugins can I submit for review at a time?

Generally, just one. If you’re a plugin author with more than one million active plugin installations, we understand that you have more ongoing projects, so you would have a different limit of up to 10 plugin submissions at the same time.

### Why can’t I submit more than one plugin at a time?

Allowing people to have multiple submissions at once was proven to be detrimental to the review process. Errors were regularly found in all the plugins, resulting in the same emails being sent multiple times. In addition, people often got confused as to which review they were working on, muddying the waters about what needed to be solved. By changing this to one-at-a-time, confusion in those matters dropped significantly.

In addition, many new users don’t know how to use SVN, and wound up submitting multiple plugins and never using any. That can be a drain on our resources, so we do limit people.

Since all plugins get an initial review within four weeks, this should not be a hardship.

### Can I submit multiple plugins with multiple accounts?

No. And if you do so, we will suspend all your secondary accounts. Don’t try to get around the one-at-a-time rule please.

### I need my plugin approved by a specific date, what should I do?

Submit it as early as possible. Unless the plugin is meant to address a security or legal issue, we don’t permit queue jumping. If it *is* related to one of those, please email `plugins@wordpress.org` and explain the situation.

### Are there specific things that I should avoid doing?

We look for some pretty obvious things, all of which are listed [in our guidelines](#plugins/wordpress-org/detailed-plugin-guidelines). Most can be summed up as “Don’t be a spammer,” but to touch on the ones people do the most:

- Not including a `readme.txt` file when acting as a service
- Not testing the plugin with `WP_DEBUG`
- Including custom versions of packaged JavaScript libraries
- Calling external files unnecessarily
- “Powered By” links
- Phoning home

Again, this is a brief overview. Please read the guidelines, as the full list is quite detailed.

### Are there plugins you don’t accept?

We don’t accept plugins that do ‘nothing,’ are illegal, or encourage bad behavior. This includes black hat SEO spamming, content spinners, hate-plugins, and so on.

Similarly we do not accept framework plugins or library plugins. If your plugin has to require other plugins or themes to edit themselves in order to use your plugin, it’s a library. If your plugin is a template from which more code can be built by customizing the files directly, it’s a framework or boilerplate. Frameworks and libraries should be packaged with each plugin (hopefully in a way that doesn’t conflict with other plugins using the framework or libraries). At least until core supports plugin dependencies.

We also don’t accept 100% copies of other people’s work or plugins that duplicate functionality found in WordPress Core. Basically, your plugin should do something new, or in a new way, or solve a specific issue.

### I want to redo, upgrade, or rebrand my existing plugin. I just submit again, right?

No, you should rewrite and upgrade the existing plugin. Make it a major version release. We can’t rename plugins or transfer users, so a new one wouldn’t carry over any existing users, reviews, support topics, ratings, downloads, favorites, etc. Basically you’d leave *all* your current users out in the cold, and that’s mean.

### I made a mistake with my submission. How can I fix it?

You can update your plugin files from the submission page at any time.

You can update your slug once after submitting it.

Every submission gets an automated email with directions. If you have a different issue, please reply to that or email `plugins@wordpress.org` and explain the situation.

Regarding slugs if you need further changes, you’ll need to contact us. We also try to catch typos in names before we approve anything, but we make mistakes too.

### Are there things I can’t do in a plugin name?

We have the following restrictions:

- Plugins may not use vulgarities in the name or slug
- Plugins may not use ‘WordPress’ or ‘Plugin’ in their slugs except under extreme situations
- Plugins may not use version numbers in plugin slugs
- Due to system limitations, only English letters and Arabic numbers are permitted in the slug
- Plugins may not **start** or contain in a way that may be confusing a trademarked term or name of a specific project/library/tool *unless* submitted by an official representative

We encourage everyone to be creative and come up with unique slugs. We automatically correct any plugin that has an unacceptable slug. If there’s a question as to the best choice, we will contact you to be sure.

## Using The SVN Repository

### Where do I put my files?

Put your code files directly in the `trunk/` directory of your repository. Whenever you release a new version, [tag that release](#plugins/wordpress-org/how-to-use-subversion) by copying the current trunk revision to a new subdirectory of the `tags/` directory.

Make sure you update [`trunk/readme.txt`](https://wordpress.org/plugins/developers/#readme) to reflect the **new** stable tag.

Images for the readme (such as [screenshots, plugin headers, and plugin icons](#plugins/wordpress-org/plugin-assets)), belong in the `assets/` directory (which you may need to create) in the root of your SVN checkout. This will be on the same level as `tags/` and `trunk/`, for example.

### Can I put my files in a subdirectory of `trunk/`?

No. Doing that will cause the zip generator to break.

If you have complicated plugin with lots of files, you can of course organize them into subdirectories, but the [readme.txt file](https://wordpress.org/plugins/developers/#readme) and the root plugin file should go straight into `trunk/`.

### How should I name my tags (a.k.a. releases)?

Your Subversion tags should look like version numbers. Specifically, they should only contain **numbers and periods**. `2.8.4` is a good lookin’ tag, `my neato releaso` is a bad lookin’ tag. We recommend you use [Semantic Versioning](http://semver.org) to keep track of releases, but we do not enforce this.

Note that we’re talking about *Subversion* tags here, not `readme.txt` search type tags.

### How many old releases should I keep in SVN?

As few as possible. Very rarely does anyone need your old code in the release repository. Remember, SVN is **not** meant for your code versioning. You can use Github for stuff like that. SVN should have your current release versions, but you don’t need all the minor releases to all the previous versions. Just the last one or two for them is good.

### Can I include SVN externals in my plugin?

No. You can add [svn externals](https://svnbook.red-bean.com/en/1.0/ch07s03.html) to your repository, but they won’t get added to the downloadable zip file.

### Can I put zips and other compressed files in my plugin?

No.

### Can I include minified JS?

Yes! However you either have to keep the non-minified in your plugin *or* direct people via your readme as to where they can get the non-minified files.

It’s fine to minify, but it’s not okay to hide it. All code must be human readable for inclusion in this directory.

## Your WordPress.Org Page

### When does my plugin go ‘live’?

As soon as you push code to the SVN folders, your plugin will be live. **DO NOT** push code if you’re not ready, as there’s no ‘off’ switch except to [close the plugin](#closed-plugins). As closing a plugin is permanent, we recommend you not push code until you’re ready to go live.

### Where does the WordPress.org Plugin Directory get its data?

From the information you specify in the plugin file and in the [readme.txt file](https://wordpress.org/plugins/developers/#readme), and from the Subversion repository itself. Read [about how the readme.txt works](#plugins/wordpress-org/how-your-readme-txt-works) for more information.

You should also make full use of the [Plugin Headers](#plugins/the-basics/header-requirements) in your main plugin file. Those will define how your username shows up on the WordPress.org hosting page, as well as in the WordPress Admin. We recommend using all those headers to fully document your plugin.

### Can I specify what version of my plugin the WordPress.org Plugin Directory should use?

Yes, by specifying the `Stable Tag` field in your trunk directory’s [readme.txt file](https://wordpress.org/plugins/developers/#readme).

We ask you **not** use ‘trunk’ as your stable tag, as that makes rollbacks more complicated than they need to be.

### What version of WordPress should the “Tested Up To” value be?

Logically, whatever version you tested up to. However, never go above the current release candidate. If there is none, don’t go above the active version. So if WordPress’ stable release is 6.0.9, you can use 6.0 to 6.0.9 and everything will be fine. If there is a release of 6.1-RC then you may use 6.1, however you can go no higher.

Do not attempt to be clever and use 6.5 or 7. This will result in errors on your page.

### Do I need to release a new version of my plugin every time I update the readme?

No. If you’re only making cosmetic changes to the readme or your icons/headers, you *do not* need to release a new version. Just make sure you update the trunk and tag folders.

### Do I need to release a new version of my plugin every time I update the code?

Yes. Otherwise no one gets updated.

### What should be in my changelog?

A changelog is a log or record of all or all notable changes made to your plugin, including records of changes such as bug fixes, new features, etc. If you need help formatting your changelogs, we recommend [Keep A Changelog](https://keepachangelog.com/en/1.1.0/) as that’s the format used by many products out there.

### How many versions should I keep in my changelog?

Always keep the current major release in your change log. For example, if your current version is 3.9.1, you’ll want that and 3.9 in the change log. Older versions should be removed and migrated to a `changelog.txt` file. That will allow them to be accessible to users, while keeping your readme shorter and more pertinent. At most, keep the most recent version of your plugin and one major version back in your readme’s changelog. Your `changelog.txt` will **not** be visible within the WordPress.org Plugin Directory, but that’s okay. Most users just want to know what’s new.

### How do I include videos on plugin description pages?

For YouTube and Vimeo videos, simply paste the video link on a line by itself in your description. Note that the video must be set to allow embedding for the embed process to work. For videos hosted by the WordPress.com VideoPress service, use the `` shortcode. Shortcodes can also be used for YouTube and Vimeo, if needed, just like in WordPress.

### Why does my plugin say it’s not been tested with the most recent WordPress versions?

That happens when you neglected to use a proper ‘Tested Up To’ value in your headers in your readme. That value should be the latest version of WordPress that you’ve tested your plugin against. If the latest **major** WordPress version is 4.9, then you should have the value `4.9` to indicate compatibility. You do not need to update for minor releases (if your readme is compatible to 4.9 then that will cover 4.9 through 4.9.1000).

Keep in mind, if you put in non-released versions of WordPress (like 6.0) you’ll see the same message.

### How long does it take for the Plugin Directory to reflect my changes?

The WordPress.org Plugin Directory updates every few minutes. However, it may take longer for your changes to appear depending on the size of the update queue. Please give it at least **6 hours** before contacting us.

### How do I make one of those cool banners for my plugin page?

You can make your own [plugin headers](#plugins/wordpress-org/plugin-assets#plugin-headers) by uploading the correctly named files into the `assets` folder. Read [about plugin headers](#plugins/wordpress-org/plugin-assets#plugin-headers) for more information.

### How do I make a plugin icon?

You can make your own [plugin icons](#plugins/wordpress-org/plugin-assets#plugin-icons) by uploading the correctly named files into the `assets` folder. Read [about plugin icons](#plugins/wordpress-org/plugin-assets#plugin-icons) for more information.

### Can I use official logos in my plugin banner/icons?

Usually no.

Your plugin icon should *never* be the unaltered, official logo of, say, Facerange. That would be infringing on their property. You may not use official logos for your branding in your banners or icons. Even if you have permission to do so on your site, *we* don’t have that permission here.

Much like your plugin name, we recommend your icons and headers be something unique to you. They tend to be more memorable that way.

### How many tags can I use in my readme?

Per the guidelines, [plugins are limited to 12 tags in their readme](#plugins/wordpress-org/detailed-plugin-guidelines#12-public-facing-pages-on-wordpress-org-readmes-must-not-spam). This is to control spam. That said, only the first **FIVE** tags will display on WordPress.org, much for the same reason. The first 12 tags are used for searches, and the rest are ignored, so tag-stuffing won’t help you at all.

In addition, any tags where you are the only one who uses them won’t show, because they’re not going to help anyone find another, similar, plugin.

## Plugin Names

### Can I change my plugin’s name after it’s approved?

Yes and no. You can change the display name, but the *slug* — that part of the plugin URL that is yours — cannot be changed once a plugin is approved. That’s why we warn you, multiple times, upon submission.

To change the display name, edit your main plugin file and change the value of “Plugin Name:” to the new name. You also will want to edit your header in your readme.txt to match.

### Why can’t I use someone’s trademark/brand as my plugin name?

Simply put, because you’re not them.

If you have written an add-on plugin for BooCommerce, you may not name it “BooCommerce Improved Product Search” as that would generate the slug `boocommerce-improved-product-search` and that would conflict with the trademark of ‘BooCommerce.’ That said, it would be acceptable to submit the name “Boo Improved Product Search” which would use the slug `bc-improved-product-search` (“bc” not being trademarked you see).

As another example, if you have a plugin that integrates a service with a a popular cloud hosting company named Amazorn, you may call it “My Service Integration for Amazorn”, but you may **not** use “Amazorn – My Service Integration”.

Consider the real life example of Keurig. If you made an eco-friendly brew cup, you could market it “EcoBrew Pod for Keurig” but you could NOT attempt to market it as “Keurig EcoBrew Pod.” The latter implies a direct relationship to Keurig and is actually against the law in some countries. In order to protect you, we need you to tread lightly with recognized brand names and trademarks. Always err on the side of caution; if they come and tell us to close your plugin because you used their term as the *first* word in the display name, we have to do it.

*Note: We no longer have permission to permit new plugins to use `woo` as the start of their permalink, and are required to enforce the use of `wc` instead.*

### Can a company give me permission to use their trademark in my permalink?

No.

While we understand that companies can and do grant usage permissions, we do not accept them for permalinks for a really important reason: we ***cannot*** change your permalink once the plugin is approved. This means if, later on, the company changes their mind and rescinds approval, the plugin will be closed and all of it’s users abandoned.

In order to be forward thinking and proactive about a plugin’s long-term life in the directory, we do not accept ‘permission.’ A permalink may not begin with a trademark (or commonly known brand/term) unless it is by the official owners.

### Can I change my plugin’s URL/slug?

It’s impossible to change a plugin’s URL once it’s approved and we warn you about that in multiple places through the process.

Due to that, we deny most requests for ‘new’ plugins to replace old ones just to get a better slug.

This is because we cannot migrate users between plugins nor can we redirect traffic. This means that submitted a new plugin to change a slug is incredibly detrimental to the plugin’s SEO and reputation, as users will be abandoned. The majority of plugins don’t actually need a new URL, and instead just want to edit their display name.

Unless there’s an egregious typo, language, or legal issue related to your slug, we are **unlikely** to approve a new slug. If we do, we will flag your account to note that future rename requests are to be denied.

### How do I change my plugin’s display name?

You’ll need to change it in the readme *and* the plugin main file.

### Can I make my display name anything?

Don’t use vulgarities or slurs or other intentionally abusive language. You cannot claim, or appear to claim, to be an official source if you’re not. For example, if you’ve made a plugin that connects to the Frozbaz Service, you should call your plugin “Connector to Frozbaz Service” – in this way, you have made it clear you are making a plugin for a service, rather than being the service.

If you’re combining multiple services (a payment gateway to a popular ecommerce plugin, for example), we strongly recommend you come up with an original, unique, display name.

### Can I use WordPress or Plugin in my display name?

Currently yes, but you shouldn’t. It’s incredibly redundant and doesn’t actually help your SEO in any way, shape, or form. We already put WordPress *and* Plugin in your page title.

### Should I use the trademark or registered symbol in my plugin name?

Assuming you actually did apply for trademarks, you certainly *can* but it’s not commonly done. Not even Google or Facebook do that. Simply by using your trademark term and having a log of it (like your SVN log), you have usually done the needed legal action required to protect your brand. Consult a lawyer for details.

## Search

### How long will it take for my plugin to show up in search?

Usually 6 to 14 days after a plugin is committed to SVN. This is because we have to add your data, parse it, and share it to all of our *heavily* cached servers. It’s not instantaneous. Also as a new plugin, we have no data on usage, so you may need to wait a bit.

### How do I rank higher?

Write a good readme for the language, answer support posts promptly, get good reviews.

### What’s weighted more, my URL or my display name?

Neither. Make your display name memorable and descriptive, while keeping it under 5 words, for maximum benefit.

## The Support Forums

### How do I get notified for forums posts?

Go to `https://wordpress.org/support/plugin/YOURPLUGIN` and look at the sidebar on the right. Click the Subscribe to this Plugin button for email alerts.

### How do I get notified for all my plugins?

Every plugin support forum page has a “Subscribe” button at the top of it. Click that and you will be emailed. You can see which plugin forums sets you are subscribed to at `https://wordpress.org/support/users/YOURID/subscriptions`

For RSS, visit `https://wordpress.org/support/view/plugin-committer/YOURID` will list all of the support requests and reviews for any plugin you have commit access. Not a committer, just someone listed as an author? Use `https://wordpress.org/support/view/plugin-contributor/YOURID`

You can also go to `https://profiles.wordpress.org/YOURID/profile/notifications/` and put in any terms you want to be emailed for. Be careful, this can escalate if you use generic terms.

### How do I give a support account access to my plugin?

You can add Support Representatives to your plugin. Support representatives can mark forum topics as resolved or sticky (same as plugin authors and contributors), but don’t have commit access to the plugin.

The UI for managing plugin support reps can be found in Advanced View on the plugin page, next to managing committers. Once someone is added as a support rep, they will get a Plugin Support badge when replying to the plugin support topics or reviews.

### Will you delete bad reviews or comments on my plugin?

Generally no. A review is a reflection of an individual’s experience with your product. If they didn’t like it, that’s not for us to change. If you feel that a review is invalid (such as for a different plugin), use the `modlook` button on the post. A member of the **forums** team will investigate.

Abuse of the modlook feature may result in suspension of your plugins. Please, use it wisely.

### What is ‘Sockpuppeting’?

That’s what happens when someone makes multiple accounts on the forums, usually to give themselves a number of 5-star reviews, or create fake support tickets to appear more responsive. Sockpuppeting is against our guidelines and will result in the reviews and posts being removed, but also may result in your account and all plugins being removed. Don’t do it and don’t flagrantly accuse others of doing it.

## Closed Plugins

### How do I close my plugin?

As of April 2020, you can close your own plugins at any time. To do so, go to the **advanced** tab on your plugin page (i.e. `https://wordpress.org/plugins/myplugin/advanced/`) and scroll down to the **CLOSE THIS PLUGIN** section. There you will see a warning message and a button.

![Image of the "Close this plugin" feature, with the note "WARNING: Closing your plugin is intended to be a permanent action. You will not be able to reopen it without contacting the plugins team." Below that is a button saying "I understand."](https://i0.wp.com/developer.wordpress.org/files/2020/04/HowtoClose.png?resize=1024%2C275&ssl=1)If you agree to the warning, and want to close your plugin, press the button.

Keep in mind, you *will not* get your plugin restored unless you can justify your situation. Closing a plugin by request is intended to be **permanent**.

### What if I accidentally closed my plugin?

Email `plugins@wordpress.org` and ask to please have your plugin reopened. However you will be asked how you managed to do that so that we can improve the functionality of the feature.

### Why won’t it let me close my own plugin?

Assuming you’re logged in as the correct account, it’s probably because you have too many users. If your plugin has more than 10,000 users, you will need to email `plugins@wordpress.org` and request for us to close it.

### Can I temporarily close my plugin?

No.

We do not permit this as it creates a poor experience for users. Hiding plugins makes users think the plugin has been pulled for security or guideline issues, which causes them not to trust you anymore. We cannot prevent what they think, so instead we prohibit ‘temporary’ closures.

Generally people want to do this when their plugin has a bug that is being fixed, or when they’re unable to support it. We recommend you instead just fix the bug as soon as possible, or if you cannot support the plugin, update the readme to say it’s currently unsupported and why.

If this is for a brand new plugin, you should just call it a ‘public beta’ so people are aware of the status.

### What happens when a plugin is closed?

When a plugin is closed, the page shows as closed and the zips are no longer generated. No one will be able to download the plugin via the website, nor will they be able to install it via the WordPress admin. The SVN repository will remain accessible to allow others to download and fork the code if desired, per the tenets of the directory.

After 60 days, the closure message will change to alert people as to *why* it was closed but only in the broadest terms (Guideline Violation, Security, etc) and not with explicit details.

### Why was my plugin closed?

Plugins are closed for guideline violations, security issues, or by author requests. In the case of active issues (such as copyright infringement, abuse, and security), all accounts with commit access to a plugin are notified.

If a plugin has never been used within 6 months (i.e. no code has been pushed to SVN), SVN is broken for upwards of 12 months, or a plugin’s readme indicates it’s deprecated, we *may* close without notification.

### Why was someone else’s plugin closed?

As of 2017, plugin closure reasons are tracked in the plugin database. Sixty days after a plugin is closed, the reason for the closure will be made public:

![Example of a closed plugin with the reason 'Author Request'](https://i0.wp.com/developer.wordpress.org/files/2015/04/not-hello-dolly.jpg?resize=1058%2C526&ssl=1)Please note: We do not publicly disclose the details on exactly why a plugin has been closed.

### Can I get someone else’s plugin closed?

If you report an [security issue](#plugins/wordpress-org/plugin-security/reporting-plugin-security-issues) or a [guideline violation](#plugins/wordpress-org/detailed-plugin-guidelines) in a plugin to `plugins@wordpress.org`, we will review and take appropriate action. Most of the time, this involves closing a plugin. Your name will not be disclosed unless you ask for it to be so, in order to protect you from backlash.

### Someone posted a copy of my plugin! What do I do?

Email `plugins@wordpress.org` with a link to the stolen plugin. Include either a link to where we can download yours or attach the zip. We will compare the two files, as well as all the coding history we have, to determine if the plugin is, indeed, theft, or just an uncredited fork.

Keep in mind, if you licensed your plugin as GPLv2 or later, then it’s perfectly permissible to fork your work, as long as copyright remains intact and you’re credited.

### What do I do if someone copied some of my code and didn’t credit me?

Email `plugins@wordpress.org` right away! **Especially** if your code was non-GPL. While we do permit people to fork other plugins and include that code in their own plugins, it must be credited at all times. Copyright and credits are a requirement.

### Will you close another plugin for violating a brand/trademark?

We do our best to uphold copyright and trademark requirements, as well as prevent brand confusion. Before plugin are approved, we often require them to make some of the more obvious changes. That said, there is a limit to how ‘different’ a URL or name can be when we have 60,000 plugins in the directory, and when some terms are quite common (like ‘popup’ or ‘all-in-one’). Because of that, we require developers to change the plugin’s **display name** to no longer cause conflict or confusion.

If someone is clearly infringing on your copyright or trademark or existing brand, be it by display name or use of trademarked images, please email us at `plugins@wordpress.org` with some proof and we will contact the developer and require changes.

We do expect these to be *reasonable* requests. That is, if you send us a complaint and list 12 plugins that all use the term ‘best contact form’ because that’s your plugin name, we will review the plugins and only close them if they’re using the phrase excessively. If they use it once (i.e. “This is the best contact form plugin in the Faroe Islands”) then it’s acceptable. If they’re keyword stuffing the phrase, we’re more likely to close them for keyword stuffing. Simply, if your plugin name is super generic, this is going to happen, and it’s usually **not** an infringement case.

Also note that if it’s not **your** trademark, we cannot accept your report. It is the responsibility of the trademark owners, not it’s users, to manage and maintain that.

### How can I send a security report?

Email `plugins@wordpress.org` a clear and concise description of the issue. [Please read our document on reporting security issues for details](#plugins/wordpress-org/plugin-security/reporting-plugin-security-issues).

### Do you provide bounties for finding bugs in a plugin?

No. We have no relationship with any bug bounty programs, so we don’t file your reports etc to them. The only one with which we work is [hackerone.com/automattic](https://hackerone.com/automattic) and that’s for bugs related to Automattic properties. Everything else is on your own, don’t ask us to submit things.

### Do you help file or provide CVEs?

No. We do not have the ability to assist with CVEs.

### My plugin was closed, can I reopen it?

Maybe. If it was closed for a security reason, fix the issue, reply to the email, and most of the time we’ll reopen the plugin unless it has more security issues or severe guideline issues. If it was closed for guideline violations, it depends on the severity and nature of the violation. Repeat offenders are less likely to have a plugin reopened, for example, than first-timers.

If you asked for the plugin to be closed, you will be expected to explain why the change of heart. Plugins are intended to remain closed when a developer requests it, and not reopened again a month later.

*All* plugins must pass a current standards and security review in order to be restored. This is not optional. Users will lose more faith in you for having your plugin closed multiple times than they would for one longer closure where you address all the potential issues.

### Why was my plugin closed when it was my employee/co-worker who violated guidelines?

Everyone who represents a plugin, from support tech to developer, is the responsibility of the plugin owner. If they violate the guidelines egregiously, then the owners are expected to accept those consequences and correct course. When that doesn’t happen, plugins get closed. We notify the plugin owners in these cases and explain why and do our best to keep plugins open.

### *All* my plugins were closed! How can I get them back?

It’s exceptionally rare that we close all of a developer’s plugins. In general it happens because of the following:

1. You asked us to close all your plugins
2. Email issues 
    1. The email bounced and we were unable to get in touch
    2. The email sent us auto-replies and warnings were sent at least twice to fix that
3. Guideline issues 
    1. Previous censuring for behaviour and/or a final warning was issued
    2. Delivering legal threats to the directory and/or the volunteers
    3. The violation was deemed ‘egregious’ (death threats, hundreds of sock puppets, harassment, etc)

If you asked us to close them, you have to explain *why* the change of heart.

If you’re having email issues, you have to resolve them and you’ll be required to bring all your plugins up to current standards of security and guidelines.

As for that last one … Generally you don’t get to come back from that. If we deliver you a final warning for your behaviour and, within less than a year, you start up again with the issues (or fail to resolve all the issues we mentioned), we’re not going to reopen your plugins.

### I just got a final warning. What do I do?

First and foremost, *take it seriously*. The email will list exactly what the problems have been and why we’ve chosen to escalate to a final warning. Plugin Owners are expected to resolve all the issues, to cease causing new guideline violations, and to closely monitor the actions of any coworkers. In short, stop breaking the guidelines, stop making excuses, apologize for any misbehaviour, and correct course.

The last thing we want to do is ban someone and disable all their plugins. It’s not healthy for the community. At the same time, if a developer is unable or unwilling to play by the same rules as everyone else, it’s detrimental to keep then in the directory and disrespectful to everyone else.

## Plugin Ownership

### How do I give someone else access to my plugin?

To add users as committers, that is give them access to update code, go to `https://wordpress.org/plugins/YOURPLUGIN/advanced` and add their username in as a committer.

To have them show up as an author, add their username to the `readme.txt` file.

*Do not add regular users as authors.* It’s meant for people who help with development only. This means if someone ‘inspired’ you, you should not add them as an author.

### What happens to a plugin if the plugin owner gets blocked?

The leadership of the WordPress project and the Plugin Review team will review each case individually.

Not having a new owner for a plugin can have a lot of security implications, as users would no longer be able to receive new updates.

In most cases, the plugin will be:

- **Closed for new updates:** When the plugin doesn’t have a lot of active installations or is only necessary for specific use cases, the team will likely just close it.
- **Transferred to the WP community:** Whenever we have a plugin that is relevant enough to become a community/canonical project, it could be transferred to the `wordpressdotorg` user.
- **[Adopted by a new user](#plugins/wordpress-org/take-over-an-existing-plugin):** In an application process managed by the team, it could be possibly donated to a different user if approved by the WordPress project leadership.

### How do I remove someone’s access from my plugin?

Anyone with commit access can do this. Go to `https://wordpress.org/plugins/YOURPLUGIN/advanced` and hover over their ID. A delete link will appear. Click on it.

Please don’t delete yourself.

### How do I change the plugin owner?

Go to the Advanced tab and scroll down to the Danger Zone. There you will see a section for **Transfer Your Plugin**. Pick someone from the dropdown and click the button.

For more details, please read the [documentation on transferring plugins](#plugins/wordpress-org/transferring-your-plugin-to-a-new-owner).

### I tried to transfer my plugin but it says I can’t. Why not?

Plugins with a large number of users (over 10,000) or ones that are deemed critical to the WordPress project (such as featured or beta plugins) can only be transfered via written request to the plugins team. [Please read the documentation on transfering plugins for details](#plugins/wordpress-org/transferring-your-plugin-to-a-new-owner).

### How can I take over an abandoned plugin?

[We permit users to adopt existing plugins that are no longer currently developed](#plugins/wordpress-org/take-over-an-existing-plugin).

We ask you try to connect with the original developers first, so they can add you. In some case, that’s not possible and you should start with fixing the plugin. Make sure it meets coding standards, is secure, and update the copyright information to include yourself. Then you can contact us regarding [plugin adoption](#plugins/wordpress-org/take-over-an-existing-plugin).

We offer **no** guarantee that you will be given anyone’s plugin, even following a successful review.

### Are these offers to buy my plugin legit?

Short answer: Probably not.

Many developers receive unsolicited emails or offers to purchase their plugin. We have found the vast majority of these to be fraudulent and do *not* recommend you follow up with them.

While legitimate offers do come, they’re usually from the official company to whom a plugin is related, or from a well established plugin company. The ones that start “We’re reaching out to the WordPress community …” or “We are looking to acquire existing WordPress plugins …” should not be trusted. Such purchases have often destroyed the reputation of the plugin (and the original developer) by engaging in sleazy tactics such as tracking users or other serious guideline violations.

If you do choose to sell your plugin (or give it away to someone else), please make sure the new owners understand all the [guidelines of the repository](#plugins/wordpress-org/detailed-plugin-guidelines). Should they violate our terms the plugin will be removed, and we may not give it back depending on the level of the violation. Whomever has commit access to a plugin has the ownership and responsibility of it’s behavior for users. Spamming, inserting tracking data, and adding junk features are the fastest way to ruin your plugin.

We advocate only giving your plugin to people you *personally* have vetted, and that you trust with being responsible with your code and your users.

### What happens when a plugin developer dies?

When a developer is determined to have died, they are removed from their own plugins in order to prevent the unethical from gaining access and harming users. If they are the only developer, the plugin may be closed. All attempts are made to find their friends and coworkers, to offer them a chance to adopt the code first, but if no one reliable or willing can be found the plugin is closed.

---

# Common issues <a name="plugins/wordpress-org/common-issues" />

Source: https://developer.wordpress.org/plugins/wordpress-org/common-issues/

This is a compilation of some of the most common issues the Plugin Review Team encounters when reviewing plugins.

This list contains excerpts from the team’s email messages, and should not be considered a complete or exhaustive list; the outcome of the reviews depends on the manual review performed by the team.

## Security

### Sanitize

**Input data must be Sanitized, Validated, and Escaped on output**

When you include POST/GET/REQUEST/FILE calls in your plugin, it’s important to sanitize, validate, and escape them. The goal here is to prevent a user from accidentally sending trash data through the system, as well as protecting them from potential security issues.

SANITIZE: Data that is input (either by a user or automatically) must be sanitized as soon as possible. This lessens the possibility of XSS vulnerabilities and MITM attacks where posted data is subverted.

VALIDATE: All data should be validated, no matter what. Even when you sanitize, remember that you don’t want someone putting in ‘dog’ when the only valid values are numbers.

ESCAPE: Data that is output must be escaped properly when it is echo’d, so it can’t hijack admin screens. There are many esc\_\*() functions you can use to make sure you don’t show people the wrong data.

To help you with this, WordPress comes with a number of sanitization and escaping functions. You can read about those here:

[\#apis/security/sanitizing](#apis/security/sanitizing) [\#apis/security/escaping](#apis/security/escaping)

Remember: You must use the most appropriate functions for the context. If you’re sanitizing email, use [sanitize\_email()](#reference/functions/sanitize_email) , if you’re outputting HTML, use [wp\_kses\_post()](#reference/functions/wp_kses_post) , and so on.

An easy mantra here is this:

Sanitize early  
Escape Late  
Always Validate

Clean everything, check everything, escape everything, and never trust the users to always have input sane data. After all, users come from all walks of life.

#### Sanitize: Confusion about escape and sanitize functions

**Note**: escape functions cannot be used to sanitize. They serve different purposes. Even if they seem to be perfect for this purpose, most of the functions are filterable and people expect to use them to escape. Therefore, another plugin may change what they do and make yours at risk and exploitable.

If you are trying to echo the variable, you have to first sanitize it and then escape it, as for example:

```
echo esc_html(sanitize_text_field($_POST['example']));

```

#### Sanitize: Using filter functions to sanitize

**Note**: When using functions like `filter_var`, `filter_var_array`, `filter_input` and/or `filter_input_array` you will need to [set the FILTER parameter to any kind of filter that sanitizes the input](https://www.php.net/manual/en/filter.filters.php).

Leaving the filter parameter empty, PHP by default will apply the filter “FILTER\_DEFAULT” **which is not sanitizing at all**.

```
$post_id = filter_input(INPUT_GET, 'post_id', FILTER_SANITIZE_NUMBER_INT);

```

#### Sanitize: Nonces

**Note**: When checking a nonce using `wp_verify_nonce` you will need to sanitize the input using `wp_unslash` AND `sanitize_text_field`, [this is because this function is pluggable, and extenders should not trust its input values](#news/2023/08/understand-and-use-wordpress-nonces-properly).

Example:

```
if ( ! isset( $_POST['prefix_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash ( $_POST['prefix_nonce'] ) ) , 'prefix_nonce' ) )

```

### Processing the whole input

We strongly recommend you **never** attempt to process the whole $\_POST/$\_REQUEST/$\_GET stack. This makes your plugin slower as you’re needlessly cycling through data you don’t need. Instead, you should only be attempting to process the items within that are required for your plugin to function.

### Escape

**Variables and options must be escaped when echo’d**

Much related to sanitizing everything, all variables that are echoed need to be escaped when they’re echoed, so it can’t hijack users or (worse) admin screens. There are many esc\_\*() functions you can use to make sure you don’t show people the wrong data, as well as some that will allow you to echo HTML safely.

At this time, we ask you escape **all $-variables, options, and any sort of generated data when it is being echoed**. That means you should not be escaping when you build a variable, but when you output it at the end. We call this ‘escaping late.’

Besides protecting yourself from a possible XSS vulnerability, escaping late makes sure that you’re keeping the future you safe. While today your code may be only outputted hardcoded content, that may not be true in the future. By taking the time to properly escape **when** you echo, you prevent a mistake in the future from becoming a critical security issue.

This remains true of options you’ve saved to the database. Even if you’ve properly sanitized when you saved, the tools for sanitizing and escaping aren’t interchangeable. Sanitizing makes sure it’s safe for processing and storing in the database. Escaping makes it safe to output.

Also keep in mind that sometimes a function is echoing when it should really be returning content instead. This is a common mistake when it comes to returning JSON encoded content. Very rarely is that actually something you should be echoing at all. Echoing is because it needs to be on the screen, read by a human. Returning (which is what you would do with an API) can be json encoded, though remember to **sanitize** when you save to that json object!

There are a number of options to secure all types of content (html, email, etc). Yes, even HTML needs to be properly escaped.

> [Escaping Data](#apis/security/escaping)

Remember: You must use the most appropriate functions for the context. There is pretty much an option for everything you could echo. Even echoing HTML safely.

#### Escape: Use of esc\_url\_raw

We know this is confusing, the `esc_url_raw` function is not an escaping function, but a sanitizing function similar to `sanitize_url`. Specifically it is used to sanitize a URL for use in a database or a redirection.

The appropriate function to escape a URL is `esc_url`.

#### Escape: Use of \_\_

The function `__` retrieves the translation without escaping, please either:

- Use an alternative function that escapes the resulting value such as `esc_html__` or `esc_attr__`.
- Or wrap the `__` function with a proper escaping function such as `esc_html`, `esc_attr`, `wp_kses_post`, etc.

Examples:

```
<h2><?php echo esc_html__('Settings page', 'plugin-slug'); ?></h2>
<h2><?php echo esc_html(__('Settings page', 'plugin-slug')); ?></h2>

```

#### Escape: Use of \_e and \_ex

The functions `_e` and `_ex` output the translation without escaping, please use an alternative function that escapes the output.

- An alternative to `_e` would be `esc_html_e`, `esc_attr_e` or simply using `__` wrapped by an escaping function and inside an `echo`.
- An alternative to `_ex` would be using `_x` wrapped by an escaping function and inside an `echo`.

Examples:

```
<h2><?php esc_html_e('Settings page', 'plugin-slug'); ?></h2>
<h2><?php echo esc_html(__('Settings page', 'plugin-slug')); ?></h2>
<h2><?php echo esc_html(_x('Settings page', 'Settings page title', 'plugin-slug')); ?></h2>

```

#### Escape: Use json\_encode

When you need to echo a JSON, it’s better to make use of the function `wp_json_encode`, also, make sure you are not avoiding escaping with the options passed on the second parameter.

```
echo wp_json_encode($array_or_object);

```

#### Escape: HTML

When escaping, there are cases where your plugin will need to output HTML. This can be done using the functions `wp_kses_post` or `wp_kses`. The function `wp_kses_post` will allow any common HTML that can go inside a post content, `wp_kses` will allow any HTML that you set up using its second and third parameters, please [refer to its documentation](#reference/functions/wp_kses).

A common mistake is to use `esc_html` to escape HTML. This function is not intended for that, it’s intended to escape the output that will go **inside** an HTML tag, therefore it will strip any HTML tags.

Examples:

```
echo wp_kses_post($html_content);
echo wp_kses($html_content, array( 'a', 'div', 'span' ));

```

#### Escape: Using sanitizing functions

Sanitize functions cannot be used to escape. They serve different purposes. Even if they seem to be perfect for this purpose, most of the functions are filterable and people expect to use them to sanitize. Therefore, another plugin may change what they do and make yours at risk and exploitable.

If you are trying to echo the variable, you have to first sanitize it and then escape it, as for example:

```
echo esc_html(sanitize_text_field($_POST['example']));
```

### Files

#### Files: Use the WordPress file uploader

**Please use WordPress’ file uploader**

When plugins use `move_uploaded_file()`, they exclude their uploads from the built-in checks and balances with WordPress’s functions. Instead of that, you should use the built in function:

> [wp\_handle\_upload](#reference/functions/wp_handle_upload)

#### Files: Unfiltered uploads

**ALLOW\_UNFILTERED\_UPLOADS is not allowed.**

Setting this constant to true will allow the user to upload any type of file (including PHP and other executables), creating serious potential security risks. As developers, we should not use or allow the use of this constant in any kind of logic, not even in a conditional.

WordPress includes a list of safe files, as you can see in the function [wp\_get\_mime\_types](#reference/functions/wp_get_mime_types).

If you need to add a specific file that is not in the list and that won’t represent a security risk, you can do so using the [upload\_mimes](#reference/hooks/upload_mimes) filter.

#### Files: Calling files remotely

Offloading images, js, css, and other scripts to your servers or any remote service (like Google, MaxCDN, jQuery.com etc) is disallowed. When you call remote data you introduce an unnecessary dependency on another site. If the file you’re calling isn’t a part of WordPress Core, then you should include it -locally- in your plugin, not remotely. If the file IS included in WordPress core, please call that instead.

An exception to this rule is if your plugin is performing a service. We will permit this on a case by case basis. Since this can be confusing we have some examples of what are not permitted:

- Offloading jquery CSS files to Google – You should include the CSS in your plugin.
- Inserting an iframe with a help doc – A link, or including the docs in your plugin is preferred.
- Calling images from your own domain – They should be included in your plugin.

Here are some examples of what we would permit:

- Calling font families from Google or their approved CDN (if GPL compatible)
- API calls back to your server to process possible spam comments (like Akismet)
- Offloading comments to your own servers (like Disqus)
- oEmbed calls to a service provider (like Twitter or YouTube)

Please remove external dependencies from your plugin and, if possible, include all files within the plugin (that is not called remotely). If instead you feel you are providing a service, please re-write your readme.txt in a manner that explains the service, the servers being called, and if any account is needed to connect.

### Libraries

#### Libraries: Using development versions

**Using Beta / Alpha / Development versions of libraries**

We do not recommend you use the beta version of a library unless it has features required by your plugin. Instead, you should be using the most stable release of the library.

If there is a technical reason you must use the beta version, please explain why. Otherwise, please change your library to the stable release.

#### Libraries: Not maintained

**Libraries that are no longer maintained are not permitted**

We no longer accept using any library that is no longer supported or maintained by their developers, as they pose a significant security risk. Please consider other options.

#### Libraries: Out of Date

At least one of the 3rd party libraries you’re using is out of date. Please upgrade to the latest stable version for better support and security. We do not recommend you use beta releases.

### WPDB: Unsafe SQL calls

When making database calls, it’s highly important to protect your code from SQL injection vulnerabilities. You need to update your code to use [wpdb](#reference/classes/wpdb) calls and prepare() with your queries to protect them.

Please review the following:

- [\#reference/classes/wpdb#protect-queries-against-sql-injection-attacks](#reference/classes/wpdb#protect-queries-against-sql-injection-attacks)
- [https://codex.wordpress.org/Data\\\_Validation#Database](https://codex.wordpress.org/Data_Validation#Database)
- <https://make.wordpress.org/core/2012/12/12/php-warning-missing-argument-2-for-wpdb-prepare/>
- <https://ottopress.com/2013/better-know-a-vulnerability-sql-injection/>

#### WPDB: Arrays of placeholders

**Note**: Passing individual values to [wpdb::prepare()](#reference/classes/wpdbprepare/) using placeholders is fairly straightforward, but what if we need to pass an array of values instead?

You’ll need to create a placeholder for each item of the array and pass all the corresponding values to those placeholders, this seems tricky, but here is a snippet to do so.

```
$wordcamp_id_placeholders = implode( ', ', array_fill( 0, count( $wordcamp_ids ), '%d' ) );
$prepare_values = array_merge( array( $new_status ), $wordcamp_ids );
$wpdb->query( $wpdb->prepare( "
    UPDATE `$table_name`
    SET `post_status` = %s
    WHERE ID IN ( $wordcamp_id_placeholders )",
    $prepare_values
) );
```

There is a core ticket that could make this easier in the future: <https://core.trac.wordpress.org/ticket/54042>

### Not use HEREDOC-NOWDOC

**Do not use HEREDOC or NOWDOC syntax in your plugins**

While both are totally valid, and in many ways desirable features of PHP that allow you to output content, it comes with a cost that is too high for most plugins.

The primary issue is that most (if not all) codesniffers won’t detect lack of escaping in code when you use HEREDOC or NOWDOC. While there are ways around this they have the end result of dashing all that readability to the rubbish pile and leaving you with a jumbled mess that won’t properly be scanned.

We feel the risk here is much higher than the benefits, which is why we don’t permit their use.

### Direct file access

**Allowing Direct File Access to plugin files**

Direct file access occurs when someone directly queries a PHP file. This can be done by entering the complete path to the file in the browser’s URL bar or by sending a POST request directly to the file.

For files that only contain class or function definitions, the risk of something funky happening when accessed directly is minimal. However, for files that contain executable code (e.g., function calls, class instance creation, class method calls, or inclusion of other PHP files), the risk of security issues is hard to predict because it depends on the specific case, but it can exist and it can be high.

You can easily prevent this by adding the following code at the top of all PHP files that could potentially execute code if accessed directly:

```
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

```

## Compatibility

### Prefixing

**Generic function/class/define/namespace/option names**

All plugins must have unique function names, namespaces, defines, class and option names. This prevents your plugin from conflicting with other plugins or themes. We need you to update your plugin to use more unique and distinct names.

A good way to do this is with a prefix. For example, if your plugin is called “Easy Custom Post Types” then you could use names like these:

- function ecpt\_save\_post()
- class ECPT\_Admin{}
- namespace ECPT;
- update\_option( ‘ecpt\_settings’, $settings );
- define( ‘ECPT\_LICENSE’, true );
- global $ecpt\_options;

Don’t try to use two (2) or three (3) letter prefixes anymore. We host nearly 100-thousand plugins on WordPress.org alone. There are tens of thousands more outside our servers. Believe us, you’re going to run into conflicts.

You also need to avoid the use of \_\_ (double underscores), wp\_ , or \_ (single underscore) as a prefix. Those are reserved for WordPress itself. You can use them inside your classes, but not as stand-alone function.

Please remember, if you’re using [\_n()](#reference/functions/_n) or [\_\_()](#reference/functions/__) for translation, that’s fine. We’re **only** talking about functions you’ve created for your plugin, not the core functions from WordPress. In fact, those core features are why you need to not use those prefixes in your own plugin! You don’t want to break WordPress for your users.

Related to this, using if (!function\_exists(‘NAME’)) { around all your functions and classes sounds like a great idea until you realize the fatal flaw. If something else has a function with the same name and their code loads first, your plugin will break. Using if-exists should be reserved for shared libraries only.

Remember: Good prefix names are unique and distinct to your plugin. This will help you and the next person in debugging, as well as prevent conflicts.

### PHP

#### PHP: Do not use Short Tags

The primary issue with PHP’s short tags is that PHP managed to choose a tag (`<?`) that was used by another syntax: XML. This is a big issue when you consider how common XML parsing and management is.

We know as of PHP 5.4, `<?= ... ?>` tags are supported everywhere, regardless of short tags settings. This should mean they’re safe to use in portable code but in reality that has proven not to be the case. Add on to that the fact that many codesniffers won’t detect lack of escaping in code when you use short-tags, and it becomes not worth the headache for anyone.

Basically the risk here is way higher than the benefits, which is why we don’t permit their use.

#### PHP: Changing Settings globally

**Don’t Force Set PHP Settings Globally**

While many plugins can need optimal settings for PHP, we ask you please not set them as global defaults.

Having defines like ini\_set(‘memory\_limit’, ‘-1’); run globally (like on init or in the \_\_construct() part of your code) means you’ll be running that for everything on the site, which may cause your users to fall out of compliance with any limits or restrictions on their host.

If you must use those, you need to limit them specifically to only the exact functions that require them.

#### PHP: Setting a default timezone

This is rarely a good idea. People should be able to define their own timezones in WordPress.

Also WordPress explicitly sets and expects the default timezone to be UTC (in settings.php) and the date/time functions sometimes rely on the fact that the default timezone is UTC. For instance if you do date\_default\_timezone\_set(get\_option(‘timezone\_string’)) and then later try to get a GMT timestamp from [get\_post\_time()](#reference/functions/get_post_time) or [get\_post\_modified\_time()](#reference/functions/get_post_modified_time) , it will fail to give you the right date.

#### PHP: Error reporting

**Don’t Use Error Reporting in Production Code**

While error\_reporting() is a great tool in PHP ( <https://www.php.net/manual/en/function.error-reporting.php> ) but if you set it permanently in your plugin, you mess things up for everyone who uses your code. Should they have a reason to try to debug their site which happens to use your code, they won’t be able to get a clean test because you’re messing with the output. It has no place in the day to day function of your plugin.

### Plugin standards

#### Main file convention

**The main file of the plugin has a name that does not follow the convention.**

We expect the main plugin file (the file containing the plugin headers) to have the same name as the plugin folder, which is also the same name as the slug / permalink of the plugin.

For example, if your plugin slug is `ecpt-social-manager` we expect your main plugin filename to be `ecpt-social-manager.php`.

Note that using some common names as the filename for the main plugin file can lead to issues in some configurations.

Please check out our tips on how to [structure files and folders in a plugin](#plugins/plugin-basics/best-practices).

#### Incomplete Headers

Your headers are either missing or incomplete.

Please review [Header Requirements](#plugins/the-basics/header-requirements) and update your plugin accordingly, putting the headers in only the main file.

#### Incomplete Readme

Your readme is either missing or incomplete.

In some cases, such as for first plugins, ones with dependencies, or plugins that call external services, we require you to provide a complete readme. This means your readme has to have headers as well as a proper description and documentation as to how it works and how one can use it.

Our goal with this is to make sure everyone knows what they’re installing and what they need to do before they install it. No surprises. This is especially important if your plugin is making calls to other servers. You are expected to provide users with all the information they need before they install your plugin.

Your readme also must validate per [Validator](https://wordpress.org/plugins/about/validator/) or we will reject it. Keep in mind, we don’t want to see a readme.MD. While they can work, a readme.txt file will always be given priority, and not all of the markdown will work as expected.

We ask you please create your readme one based on this: <https://wordpress.org/plugins/readme.txt>

#### No GPL-compatible license declared

It is necessary to declare the license of this plugin. You can do this using the fields available both in the plugin readme and in the plugin headers.

Remember that all code, data, and images — anything stored in the plugin directory hosted on WordPress.org — must comply with the GPL or a GPL-Compatible license. Included third-party libraries, code, images, or otherwise, must be also compatible.

For a specific list of compatible licenses, [please read the GPL-Compatible license list on gnu.org](https://www.gnu.org/licenses/license-list.html#GPLCompatibleLicenses).

#### Incorrect Stable Tag

In your readme, your ‘Stable Tag’ does not match the Plugin Version as indicated in your main plugin file.

Your Stable Tag is meant to be the stable version of your plugin, not of WordPress. For your plugin to be properly downloaded from WordPress.org, those values need to be the same. If they’re out of sync, your users won’t get the right version of your code.

We recommend you use Semantic Versioning (aka SemVer) for managing versions:

- [Software Versioning](https://en.wikipedia.org/wiki/Software_versioning)
- [SemVer](https://semver.org/)

Please note: While currently using the stable tag of trunk currently works in the Plugin Directory, it’s not actually a supported or recommended method to indicate new versions and has been known to cause issues with automatic updates.

We ask you please properly use tags and increment them when you release new versions of your plugin, just like you update the plugin version in the main file. Having them match is the best way to be fully forward supporting.

#### Declared license mismatched

When declaring the license for this plugin, it has to be the same.

Please make sure that you are declaring the same license in both the readme file and the plugin headers.

It is fine for this plugin to contain code from other sources under other licenses as long those are well documented and are under GPL or GPL-Compatible license, but we need a sole license declared for your code.

### Use HTTP API

**Using CURL Instead of HTTP API**

WordPress comes with an extensive HTTP API that should be used instead of creating your own curl calls. It’s both faster and more extensive. It’ll fall back to curl if it has to, but it’ll use a lot of WordPress’ native functionality first.

> [HTTP API](#plugins/http-api)

In case you need, you can use setopt with [\#reference/hooks/http\_api\_curl](#reference/hooks/http_api_curl)

Please note: If you’re using CURL in 3rd party vendor libraries, that’s permitted. It’s in your own code unique to this plugin (or any dedicated WordPress libraries) that we need it corrected.

### Use wp\_enqueue commands

Your plugin is not correctly including JS and/or CSS. You should be using the built in functions for this:

When including **JavaScript code** you can use:

- [wp\_register\_script()](#reference/functions/wp_register_script) and [wp\_enqueue\_script()](#reference/functions/wp_enqueue_script) to add JavaScript code from a file.
- [wp\_add\_inline\_script()](#reference/functions/wp_add_inline_script) to add inline JavaScript code to previous declared scripts.

When including **CSS** you can use:

- [wp\_register\_style()](#reference/functions/wp_register_style) and [wp\_enqueue\_style()](#reference/functions/wp_enqueue_style) to add CSS from a file.
- [wp\_add\_inline\_style()](#reference/functions/wp_add_inline_style) to add inline CSS to previously declared CSS.

Note that as of WordPress 5.7, you can pass attributes like async, nonce, and type by using new functions and filters: [Script Attributes Related Functions in WordPress 5.7](https://make.wordpress.org/core/2021/02/23/introducing-script-attributes-related-functions-in-wordpress-5-7/)

If you’re trying to enqueue on the admin pages you’ll want to use the admin enqueues.

- [admin\_enqueue\_scripts](#reference/hooks/admin_enqueue_scripts)
- [admin\_print\_scripts](#reference/hooks/admin_print_scripts)
- [admin\_print\_styles](#reference/hooks/admin_print_styles)

### Including Libraries Already In Core

Your plugin has included a copy of a library that WordPress already includes.

WordPress includes a number of useful libraries, such as jQuery, Atom Lib, SimplePie, PHPMailer, PHPass, and more. For security and stability reasons, plugins may not include those libraries in their own code, but instead must use the versions of those libraries packaged with WordPress.

You can see the list of JS Libraries here:

[Default Scripts and JS Libraries included and registered by WordPress](#reference/functions/wp_enqueue_script#default-scripts-and-js-libraries-included-and-registered-by-wordpress)

While we do not YET have a decent public facing page to list all these libraries, we do have a list here:

[Core Credits](https://meta.trac.wordpress.org/browser/sites/trunk/api.wordpress.org/public_html/core/credits/wp-59.php#L739)

It’s fine to locally include add-ons not in core, but please ONLY add those additional files. For example, you do not need the entire jQuery UI library for one file. If your code doesn’t work with the built-in versions of jQuery, it’s most likely a noConflict issue.

### Internationalization

#### Internationalization: Using variables

**Internationalization: Don’t use variables or defines as text, context or text domain parameters.**

In order to make a string translatable in your plugin you are using a set of special functions. These functions collectively are known as “gettext”.

There is a [dedicated team in the WordPress community](https://make.wordpress.org/polyglots/) to translate and help other translating strings of WordPress core, plugins and themes to other languages.

To make them be able to translate this plugin, please **do not use variables or function calls** for the text, context or text domain parameters of any gettext function, all of them **NEED to be strings**. Note that the translation parser reads the code without executing it, so it won’t be able to read anything that is not a string within these functions.

For example, if your gettext function looks like this…

`esc_html__( $greetings , 'plugin-slug' );`

…the translator won’t be able to see anything to be translated as `$greetings` is not a string, it is not something that can be translated. You need to give them the string to be translated, so they can see it in the translation system and can translate it, the correct would be as follows…

`esc_html__( 'Hello, how are you?' , 'plugin-slug' );`

This also applies to the translation domain, this is a bad call:

`esc_html__( 'Hello, how are you?' , $plugin_slug );`

The fix here would be like this:

`esc_html__( 'Hello, how are you?' , 'plugin-slug' );`

Also note that the translation domain needs to be the same as your plugin slug.

What if we want to include a dynamic value inside the translation? Easy, you need to add a placeholder which will be part of the string and change it after the gettext function does its magic, you can use `printf` to do so, like this:

```
printf(
    /* translators: %s: First name of the user */
    esc_html__( 'Hello %s, how are you?', 'plugin-slug' ),
    esc_html( $user_firstname )
);

```

You can read [more information here](#plugins/internationalization/how-to-internationalize-your-plugin).

## Compliance

### Changing Active Plugins

It is not allowed for plugins to change the activation status of other plugins, this is an action that must be performed by the user.

It is also not allowed to interfere with the user’s actions when activating or deactivating a plugin, unless that’s done to prevent errors (For example: When your plugin depends on another plugin, deactivate your own plugin when that other plugin is not active).

WordPress 6.5 introduces [Plugin Dependencies](https://make.wordpress.org/core/2024/03/05/introducing-plugin-dependencies-in-wordpress-6-5/), you can use it to manage dependencies (although it’s fine if you use this as a fallback).

### Update checker

**Including An Update Checker / Changing Updates functionality**

Please remove the checks you have in your plugin to provide for updates.

We do not permit plugins to phone home to other servers for updates, as we are providing that service for you with WordPress.org hosting. One of our guidelines is that you actually use our hosting, so we need you to remove that code.

We also ask that plugins not interfere with the built-in updater as it will cause users to have unexpected results with WordPress 5.5 and up.

### Undocumented 3rd party

**Undocumented use of a 3rd Party or external service**

We permit plugins to require the use of 3rd party (i.e. external) services, provided they are properly documented in a clear manner.

We require plugins that reach out to other services to disclose this, in clear and plain language, so users are aware of where data is being sent. This allows them to ensure that any legal issues with data transmissions are covered. This is true even if you are the 3rd party service.

In order to do so, you must update your readme to do the following:

- Clearly explain that your plugin is relying on a 3rd party as a service and under what circumstances
- Provide a link to the service.
- Provide a link to the service terms of use and/or privacy policies.

Remember, this is for your own legal protection. Use of services must be upfront and well documented.

### Included Unneeded Folders

This plugin includes folders and files that looks like are not required for the running of your plugin. Some examples are:

- development tools
- unneeded vendor folders for production (bower, node, grunt, etc)
- demos
- unit tests

If you’re trying to include the human-readable version of your own code (in order to comply with our guidelines) that’s fine, remember that we also permit you to put links to them in your readme.

You should also keep and/or link configuration files, as for example, the `composer.json` file in order to allow others to review, study, and yes, fork this code.

[Detailed Plugin Guidelines](#plugins/wordpress-org/detailed-plugin-guidelines)

But you can, and should, safely remove those other unneeded folders from your plugins.

### Not permitted files

A plugin typically consists of files related to the plugin functionality (php, js, css, txt, md) and maybe some multimedia files (png, svg, jpg) and / or data files (json, xml).

We have detected files that are not among of the files normally found in a plugin, are they necessary? If not, then those won’t be allowed.

#### Including code from a “premium” source

Some premium libraries are specifically not permitted to be included in free (WordPress.org hosted) plugins. Those must be removed.

### GPL

#### GPL: Non-GPL compatible Code Included

It’s required that all code be compatible with the GPLv2 (or later) license in order to be included in our directory.

You must remove the code and alter the plugin so it is not required. We suggest you find code that is GPL compatible and use that instead. For more information on what types of licenses are compatible with GPL, please review the following links:

- [GNU Licenses – License List](https://www.gnu.org/licenses/license-list.html)
- [GPL FAQ – All Compatibility](https://www.gnu.org/licenses/gpl-faq.html#AllCompatibility)

#### GPL: No publicly documented resource

**No publicly documented resource for your compressed content**

In reviewing your plugin, we cannot find a non-compiled version of your javascript and/or css related source code.

In order to comply with our guidelines of human-readable code, we require you to include the source code and/or a link to the non-compressed, developer libraries you’ve included in your plugin. If you include a link, this may be in your source code, however we require you to also have it in your readme.

[Detailed Plugin Guidelines](#plugins/wordpress-org/detailed-plugin-guidelines)

We strongly feel that one of the strengths of open source is the ability to review, observe, and adapt code. By maintaining a public directory of freely available code, we encourage and welcome future developers to engage with WordPress and push it forward.

That said, with the advent of larger and larger plugins using more complex libraries, people are making good use of build tools (such as composer or npm) to generate their distributed production code. In order to balance the need to keep plugin sizes smaller while still encouraging open source development, we require plugins to make the source code to any compressed files available to the public in an easy to find location, by documenting it in the readme.

For example, if you’ve made a Gutenberg plugin and used npm and webpack to compress and minify it, you must either include the source code within the published plugin or provide access to a public maintained source that can be reviewed, studied, and yes, forked.

We strongly recommend you include directions on the use of any build tools to encourage future developers.

#### GPL: Using composer but no composer.json file

We noticed that your plugin is using Composer to handle library dependencies, that’s great as it will help maintaining and updating your plugin in the future while avoiding collisions with other plugins that are using same libraries.

The `composer.json` file describes the dependencies of your project and may contain other metadata as well. It’s a small file that typically can be found in the top-most directory of your plugin.

As one of the strengths of open source is the ability to review, observe, and adapt code, **we would like to ask you to include that file in your plugin**, even if it is only used for development purposes. This will allow others to exercise the open source freedoms from which we all benefit.

---

# How Your Plugin Assets Work <a name="plugins/wordpress-org/plugin-assets" />

Source: https://developer.wordpress.org/plugins/wordpress-org/plugin-assets/

The `assets` folder in your plugin is where you can store images (like plugin headers, icons, and screenshots) used on your plugin’s display page.

All files should be placed into the `assets` directory of your SVN directory and will work for all versions of your plugin. This is a top level directory, just like `trunk`. You would **not** place the screenshots into `trunk/assets` or `tags/1.0/assets`.

All images are served through a CDN and cached heavily, so it may take a some time to update when changed or added. Please give the proxy some time to retrieve your images and cache them before reporting it’s not working. It should only take a few minutes, but 6 hours is not unheard of when the servers are under high load (like the week before and during a release of a major version of WordPress).

## Default Image Sizes

Image sizes should be the same as implied by the names. That is, `banner-772x250.png` should be 772 pixels wide by 250 pixels high. Similarly, `icon-256x256.png` should be a 256×256 square.

We have **not** defined any new banner sizes so please don’t try to be clever and rename yours thinking they’ll work. They simply won’t show. Similarly, don’t make your images larger (or smaller) and use the existing names. Things will look terrible.

## Plugin Headers

Plugin headers are those images you see at the top of a plugin page:

[![](https://i0.wp.com/developer.wordpress.org/files/2015/05/Screenshot-2024-07-02-at-12.50.04%E2%80%AFPM.png?resize=1024%2C472&ssl=1)](https://i0.wp.com/developer.wordpress.org/files/2015/05/Screenshot-2024-07-02-at-12.50.04%E2%80%AFPM.png?ssl=1)When designing your header image, keep in mind the use of international plugin directories. Some of these, like [Hebrew](https://he.wordpress.org/plugins/) and [Arabic](https://ar.wordpress.org/plugins/), use Right-To-Left (RTL) languages. Ideally, design your banner such that the elements included in the image can be positioned from right to left or from left to right. You can create a different image for RTL pages, with `-rtl` in the name.

### Filenames

- Normal Banner: `banner-772x250.(jpg|png)`
- Normal Banner (Localized): `banner-772x250-(rtl|es|es_ES).(jpg|png)`
- High-DPI (Retina): `banner-1544x500.(jpg|png)`
- High-DPI (Retina Localized): `banner-1544x500-(rtl|es|es_ES).(jpg|png)`

Images can be localised to a specific language, or for all RTL languages.  
The locale can be specified as a full locale (`es_ES`) or as a partial locale (`es`), if the language is RTL and a locale-specific image isn’t provided, the `rtl` image will be checked for.  
Do not duplicate English images into RTL and locale-specific files without making alterations, the English variant will be used instead.

For example of an RTL image, look at bbPress [in English](https://wordpress.org/plugins/bbpress/) and then [in Arabic](https://ar.wordpress.org/plugins/bbpress/).

For an example of Retina images, [check out Hello Dolly](https://wordpress.org/extend/plugins/hello-dolly/) or [Pluginception](https://wordpress.org/plugins/pluginception/). You *cannot* use the retina image alone, it only works as an “add-on” to the 772×250 image. The larger ‘retina’ image is only used on displays that can show the higher detail.

4MB is the maximum size for headers images, but smaller is better.

## Plugin Icons

Plugin icons are square images that show on the side of the plugin in searches on WordPress.org but also on the back-end of WordPress.org.

[![Akismet with it's Plugin Icon](https://i0.wp.com/developer.wordpress.org/files/2015/05/akismet1.png?resize=651%2C235&ssl=1)](https://i0.wp.com/developer.wordpress.org/files/2015/05/akismet1.png?ssl=1)In addition to JPG and PNG formats, you can also use **SVG**. Vectors are perfect for icons, as they can be scaled to any size and the file itself is small. If you chose to use SVGs, you *must* also use a PNG icon as a fallback, otherwise your plugin icon will not display properly in older browsers or on Facebook.

If you do not use an icon, an auto-generated one will be made for you. Some examples are the circled icons below:

[![Example of auto-generated icons](https://i0.wp.com/developer.wordpress.org/files/2015/05/auto-generated-icons.jpg?resize=798%2C332&ssl=1)](https://i0.wp.com/developer.wordpress.org/files/2015/05/auto-generated-icons.jpg?ssl=1)1MB is the maximum file size for icons, but as with headers, the smaller the better.

### Filenames

- Normal: `icon-128x128.(png|jpg|gif)`
- High-DPI (Retina): `icon-256x256.(png|jpg|gif)`
- SVG: `icon.svg`

There are no plans to change these sizes.

## Screenshots

Screenshots show on the main page of your plugin, and are used to illustrate aspects of the plugin admin dashboard or live examples. There should be **one** screenshot for every line in your `readme.txt` file. The content of the lines will become the captions of the screenshots on your plugin’s page.

For example: `1. This is a monkey`

That would show the caption ‘This is a monkey’ under the first screenshot. Presumably of a monkey.

Screenshots *must* be local to display. Links to external files won’t work.

10MB is maximum file size for screenshots, but as always, the smaller the better.

### Filenames

- `screenshot-1.(png|jpg)`
- `screenshot-2.(png|jpg)`

All filenames should be lowercase; uppercase names won’t work.

Screenshots can be localized [similar to banners](#banner-filenames), the following filenames would take priority over the above English names when the plugin is viewed in German:

- `screenshot-1<strong>-de</strong>.(png|jpg)`
- `screenshot-2<strong>-de</strong>.(png|jpg)`

## Issues

If you find your images are downloading when people click on them from your WordPress.org Plugin Directory page, you’ll need to make a change in how you upload them via SVN. It’s due to how some images are sent with the `Content-Type application/octet-stream`.

To fix it, run this command:

```
svn propset svn:mime-type image/png *.png
svn propset svn:mime-type image/jpeg *.jpg
```

Alternatively, plugin authors can set this in their ~/.subversion/config file:

```
*.png = svn:mime-type=image/png
*.jpg = svn:mime-type=image/jpeg
```

That’ll apply to only new files though. Fixing already-committed files will require the command above.

---

# Plugin Readmes <a name="plugins/wordpress-org/how-your-readme-txt-works" />

Source: https://developer.wordpress.org/plugins/wordpress-org/how-your-readme-txt-works/

This page will explain some aspects of the plugin directory, and explain of the more obvious aspects which a lot of people miss.

To make your entry in the plugin browser most useful, each plugin should have a readme file named `readme.txt` that adheres to the [WordPress plugin readme file standard](https://wordpress.org/plugins/readme.txt). This file controls the output on the front-facing part of the directory. Writing a description in the readme determines exactly what will be displayed on `wordpress.org/plugins/Your-Plugin`

You can use the [plugin readme generator](https://generatewp.com/plugin-readme/) and put your completed result through the [official readme validator](https://wordpress.org/plugins/developers/readme-validator/) to check it. If you need more visual assistance you can use the tool [wpreadme.com](https://wpreadme.com/)

Since WordPress 5.8 plugin [readme files are not parsed for requirements](https://core.trac.wordpress.org/ticket/48520). This means that headers `Requires PHP` and `Requires at least` are going to be parsed from plugin’s main PHP file.

## Section Details

All plugins contain a main PHP file, and almost all plugins have a `readme.txt` file as well. The `readme.txt` file is intended to be written using a subset of markdown.

### Readme Header Information

The Plugin readme header consists of this information:

```adoc
=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: https://example.com/
Tags: tag1, tag2
Requires at least: 4.7
Tested up to: 5.4
Stable tag: 4.3
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.
```

- **Contributors** – a case sensitive, comma separated list of all WordPress.org usernames who have contributed to the code. It is generally considered respectful to include the names of people who worked on forked projects. Some developers will ask to be removed from the list, as they don’t want other plugins showing up on their profile page. It’s best to honor those requests. Remember to *only* use the WordPress.org username – anything else will show up sans profile link and gravatar. To change someone’s display name (which shows on the front facing pages for the plugin), edit the profile `https://wordpress.org/support/users/YOURID/edit/` and change the display name.
- **Donate link** – (OPTIONAL) Makes a “Donate to this plugin” link in the sidebar. If there is no link, nothing shows up.
- **Tags** – 1 to 5 comma separated terms that describe the plugin. Plugins must refrain from using competitors plugin names as tags. Plugins should not use tags which are unique to that plugin, as these will not be shown.
- **Tested up to** – The version of WordPress that the plugin has been tested against. This field *ignores* minor versions, as plugins shouldn’t break with a minor update. This means a plugin only need to define the major version it is tested against and the WordPress.org plugin directory will automatically add the minor version. This should be numbers *only*, so ‘4.9’ and not ‘WP 4.9’
- **Requires PHP** – (OPTIONAL) The required *minimum* version of PHP needed for use with this plugin. This should be numbers *only*, so ‘7.0’ and not ‘PHP 7.0’
- **Stable Tag** – The stable version of the plugin. This is *not* the version of WordPress, but the version of the plugin itself. Only use numbers and periods, and [SemVer formatting](https://semver.org/) is recommended.
- **License** – The GPLV2 (or later) compatible license used for the plugin.
- **License URI** – (OPTIONAL) A link to the license. This is optional, but if a plugin uses a more rare license, strongly recommended.

At the end of the header section is a place for a *short* description of a plugin. The example recommends no more than 150 characters and to not use markup. That line of text is the single line description of the plugin which shows up right under the plugin name. If it’s longer than 150 characters, it gets cut off, so keep it short.

### Installation

If your plugin has no custom install settings, it’s okay to omit this section. If your plugin has custom configuration notes post install, this is a great place to put that information.

### Custom Sections

While custom sections are permitted and supported, please use them in moderation. People get used to seeing how every other plugin looks, and when yours is weird, they’ll miss important information.

## Technical Details

While most of the readme details are self evident, there are a few sections that trip people up.

### How The Readme Is Parsed

While using the stable tag of trunk currently works in the Plugin Directory, it’s not a supported or recommended method to indicate new versions and has been known to cause issues with automatic updates. At this time, we are actively discouraging and (in the case of new plugins) prohibiting it’s use 

WordPress.org’s Plugin Directory works based on the information found in the field **Stable Tag** in the readme. When WordPress.org parses the `readme.txt`, the very first thing it does is to look at the `readme.txt` in the `/trunk` directory, where it reads the “Stable Tag” line.

When the Stable Tag is properly set, WordPress.org will go and look in `/tags/` for the referenced version. So a Stable Tag of “1.2.3” will make it look for `/tags/1.2.3/`.

The readme.txt in the tag folder must also be properly updated to have the correct “Stable Tag” — failing to do so may cause your plugin to not be updatable.

If the Stable Tag is 1.2.3 and `/tags/1.2.3/` exists, then nothing in trunk will be read any further for parsing by any part of the system. If you try to change the description of the plugin in `/trunk/readme.txt` then your changes won’t do anything on your plugin page. Everything comes from the `readme.txt` in the file being pointed to by the Stable Tag.

The WordPress.org Plugin Directory reads the main plugin PHP file to get things like the Name of the plugin, the Plugin URI, and most importantly, the version number. On the plugin page, you’ll see the download button which reads “Download Version 1.2.3” or similar. That version number comes from the plugin’s main PHP file, *not* the readme!

The Stable Tag points to a subdirectory in the `/tags` directory. But the version of the plugin is not actually set by that folder name. Instead, it’s the version that is listed in the plugin’s PHP file itself which determines the name. If you have changed Stable Tag to 1.4 and the plugin still says 1.3 in the PHP file, then the version listed will be 1.3.

### Videos

You can embed videos from YouTube, Vimeo, and anywhere else [WordPress supports by default](https://wordpress.org/support/article/embeds/). All you have to do is paste the video URL onto it’s own line in your readme.

We recommend you NOT have the video as the final line in a FAQ section, as sometimes formatting gets weird.

### Markdown

The readmes use a customized version of [Markdown](https://daringfireball.net/projects/markdown/). Most Markdown calls work as expected.

Markdown allows for easy linking in your readme.txt as well. Just write like this to link a word to a URL:

```
[WordPress](http://wordpress.org)
```

Videos can be put into your readme.txt too. A YouTube or Vimeo link on a line by itself will be auto-embedded. It’s also possible to embed videos hosted on VideoPress using the wpvideo shortcode.

### Field Details

For those who want to know exactly what gets parsed into what:

- **Authors**  
    Author field from the plugin header and Contributors field from the readme file.
- **Version**  
    Version field from the plugin header.
- **Tags** (as in categories)  
    Tags field from the readme file.
- **Plugin Name**  
    The Plugin Name from the readme file falling back on the Plugin Name specified in the plugin header.
- **Author and Plugin Homepages**  
    The Author URI and Plugin URI fields of the plugin header. The Plugin URI should be *unique* to each plugin. Do **not** use the same URI for your free and pro plugin. It ends badly.
- **Last updated time**  
    Time of last check in to the appropriate directory after a version number change.
- **Creation time**  
    Time of *first* check in.

### File Size

While readmes are simple text files, having a file larger than 10k may result in errors. Your readme should be brief and to the point. The description should not be a sales pitch as much as a description of the plugin, what it does, and how to use it. Your install directions should be direct. Your FAQ should actually address issues.

As for your changelog, we recommend keeping the current release in the readme and splitting the rest out out into it’s own file — `changelog.txt` for example. By storing all the older changelog data there, you keep your readme small and allow the people who get really into long changelogs to read things on their own.

Similarly, if you need in-depth documentation with inline images and so on, direct people to your own website.

## See Also

- [Plugin Headers](#plugins/plugin-basics/header-requirements) (found in the main file of the plugin)

---

# Take Over an Existing Plugin <a name="plugins/wordpress-org/take-over-an-existing-plugin" />

Source: https://developer.wordpress.org/plugins/wordpress-org/take-over-an-existing-plugin/

People cease development on their plugins for a variety of reasons. Instead of letting those plugins stagnate, we encourage people to instead list them for adoption by another, more active, developer.

In adopting a plugin, you are promising to be responsible for all future development, and to ensure the plugin (and you) comply with all [plugin guidelines](#plugins/wordpress-org/detailed-plugin-guidelines).

Not all requests will be approved, even following a successful review.

## The Adoption Process

There are two ways a plugin can be adopted.

1. You ask the developer directly, they say yes and add you
2. You ask the Plugin Review team to assist you

Since you’re reading this, you likely are working on the second method, so keep reading. You will be expected to have followed **all** the steps herein.

In some specific situations, the Plugin Review team might also consider donating the plugin to a different user if the original plugin author gets blocked.

### 1. Check the Plugin Status

If the plugin is open and active, give it a full review on your own before you go any further. Make sure you feel comfortable and capable of maintaining the code long term.

If a plugin is closed because it was **unused**, you can skip the rest of this and email `plugins@wordpress.org` right away and attach your version of the proposed plugin.

If the plugin was closed for security issues, we require **all** those issues to be resolved, so put your best foot forward and demonstrate you have the impetus to find and fix those issues.

Closed plugins are *less* likely to be able to be adopted, as the nature of their closures may be more complex and intricate. If a plugin was closed for license issues, for example, we may not be permitted to reopen it for anyone except the license holders.

Larger plugins (100k users or more) are also less likely to be adopted, as that is a not-insignificant userbase, and we need to be sure you really are capable of managing a plugin of that size.

### 2. Contact the Original Developer

You *must* attempt to contact the original developer, as they can [give you access to the plugin](#plugins/wordpress-org/plugin-developer-faq). We recommend trying:

- email
- leaving a comment on the plugin support page
- opening a GitHub issue

We expect you to make all reasonable efforts to reach out to them. If the plugin page says the plugin has no active developer, then you’re fine.

If you *do* get in touch with the developer, ask them to [transfer ownership to you](#plugins/wordpress-org/plugin-developer-faq). They can do this on their own and, once it’s done, you may manage the plugin. If they have issues, have them contact the plugin team via email and we will assist them.

If there’s no way to get in touch, or they don’t reply, move to step 3.

### 3. Update The Code

Even if the plugin has been given to you by the developer, you must review the code from the top down to make sure it’s safe, secure, and meets our current [guidelines](#plugins/wordpress-org/detailed-plugin-guidelines).

Your update must include editing the readme to ensure it documents the new ownership (and preferably when it takes place), removing all links to their site/support resources, as well as updating the copyright information to include you. Remember, copyright is additive. You keep the old and add yours on.

If your plugin is a major upgrade, you *must* provide an upgrade path. Just wanting a name-slug is not sufficient reason to take over a plugin. We care deeply about our users, and violating their trust in us by breaking their existing sites with your upgrades is to be avoided at all costs.

Remember you need to *increase* the version number so people are prompted to upgrade to your new version.

### 4. Submit Your Code for Review

If you still can’t get in touch with the original developer, you’ll need to ask the Plugin Review Team for help.

Once you’ve finished updating the code, email `plugins@wordpress.org` explaining how you tried to contact the original developer and with your code attached as a zip. If you can’t email zips, then upload it to some file service (Google Drive, Dropbox, etc) or provide a link to your code repository (Github, Bitbucket, etc). Make sure the link is public!

After we receive your version of the code as a zip, we will review it and test it. At this point, you will go through a *normal* review process. That is, we will treat you like any new plugin and we will check the whole plugin for security and guidelines. Even if those issues are found in the original plugin, you will be required to fix them.

At this stage, some plugins are determined to have existing security flaws. We may close those plugins, depending on the nature of the issues, and you will be trusted to not publicly disclose those issues.

### 5. We Contact the Original Developer

Once we feel the code is acceptable, and that you are capable of sustaining that specific plugin in a secure manner that adheres to our guidelines, we will contact the original developer on your behalf and give them your information, explaining that you want to take over development.

We’ll do everything we can to ensure the original plugin author has been notified, but sometimes that’s just not possible.

### 6. Wait Patiently

We give the original developer 30 days (1 month) to reply to our inquiry. Should they reply and deny the request, we will honour their decision and ask you to convert the plugin into a forked version. We do our best to respect them as much as we respect you as a developer, and honor their wishes with their work.

If they approve it, we will assist in transitioning the plugin to your account.

If they don’t reply, and you’ve made it this far, we will likely transfer the plugin to you.

### 7. Update the Plugin

In order to *safely* update the plugin, we will close it before we add you. You will then be required to update via SVN. Once that’s done, we’ll double check everything is correct and reopen it. The plugin will now be yours.

## Frequently Asked Questions

### Will old reviews/support posts be removed?

No. You inherit the good and the bad.

### Do I have to keep the original developer on?

No. You can (and in fact should) remove commit access from anyone who is not actively maintaining the plugin. However. Per copyright restrictions, you must retain their credit in the code. We recommend you also leave them listed as a contributor.

### The original developer is dead. Does that change anything?

Yes, but not how you’re thinking. You (obviously) can skip asking them for permissions first, but we actually reach out to the developers’ coworkers and teams to see if they want to continue maintaining the plugin. In some cases, a developer will ask us to permanently close their plugins in the event of their death. We respect their wishes.

### Why was my request denied?

In cases where we deny an adoption, it’s usually for the following reasons.

- The requesting developer does not have the experience we feel the plugin requires
- The requested plugin is deemed high-risk
- The existing developer is a company or legal entity who owns the trademark
- The plugin has legal issues preventing us from from any transfers
- The requesting developer has had multiple guideline infractions
- The original developer asked us not to

If we don’t feel comfortable handing over a plugin, we will inform you as soon as possible.

There are rare cases where the plugin has already been given to new owners, but they have not yet deployed code. In general, if you’re told that a specific plugin is not available, there is a long history concerning the plugin preventing us from permitting takeover. In those cases, we recommend you submit your plugin as a fork.

---

# Managing Your Plugin&#8217;s Security <a name="plugins/wordpress-org/plugin-security" />

Source: https://developer.wordpress.org/plugins/wordpress-org/plugin-security/

The security of code in WordPress plugins is taken [very seriously](https://wordpress.org/about/security/).

If you have found a plugin with a security issue, please read [Reporting Plugin Security Issues](#plugins/wordpress-org/plugin-security/reporting-plugin-security-issues)

When a plugin vulnerability is verified by the WordPress Security Team, they contact the plugin author and direct them as to how to fix and release a secure version of the plugin. If there is a lack of response from the plugin author or if the vulnerability is severe, the plugin/theme is pulled from the public directory, and in some cases, fixed and updated directly by the Security Team.

## Fixing Security Issues

When you receive a report of security issues in your plugins, it can be terrifying. First, don’t panic. Everyone makes mistakes. What matters most is fixing it safely and promptly.

1. Make sure you understand the report. If you’re not sure what it means, ask for details. Even third-party reporters are usually willing to take the time to explain what’s wrong and direct you where to research a proper fix.
2. Keep your changes as small as possible. This will make it much easier for you to review later on.
3. Test your plugin. Make sure the security fix doesn’t break anything else. Make sure upgrading doesn’t cause weird errors. Keep `WP_DEBUG` on and log any errors.
4. Document the issue in your change log. You don’t need to include details on exactly what happened, but do document that a security issue was resolved.
5. Credit the reporter in your readme. This is just nice, and makes people more inclined to help you for free later on.
6. Bump your version number. We recommend [SemVer](https://semver.org), so a security release for version 3.9 of your plugin would change the version to 3.9.1 and so on.

## Automatic Plugin Security Updates

Since WordPress 3.7, we have had the ability to push automatic security updates for plugins to fix critical vulnerabilities in plugins. Many sites have made use of the plugin automatic updates functionality, either by opting in directly through filters, or by using one of the many remote management services for WordPress that are available.

In extreme situations, the Plugin Review Team and the WordPress Security Team may determine a plugin issue is great enough that it must be updated for all users. This is exceptionally rare, as the potential for conflicts is high.

The process of approving a plugin for an automatic update, and rolling it out to WordPress users, is highly manual. The security team reviews all code changes in the release, verifies the issue and the fix, and confirms the plugin is safe to trigger an update. Rolling out an automatic update requires modification and deployment of the API code. This is the same standard and process for a core security release.

### Criteria

The current criteria we take into consideration for a security push is a simple list:

1. Has the security team been made aware of the issue?
2. How severe is the issue? What impact would it have on the security of a WordPress install, and the greater internet?
3. Is the fix for the issue self-contained or does it add significant extra superfluous code?
4. If multiple branches of the plugin are affected, has a release per branch been prepared?
5. Can the update be *safely* installed automatically?

These requirements are defined in a way that anyone should be able to tick each box.

The first criterion — making the security team aware of the issue — is critical. Since it’s a tightly controlled process, the WordPress security team needs to be notified as early as possible. Letting us know is as simple as emailing us at `plugins@wordpress.org` with the details.

The plugin and security teams will work with the plugin author (and the reporter, if different) to study the vulnerability and its exact exposure, verify the proposed fix, and determine what versions will be released and when.

## FAQ

### How do I request my plugin be automatically updated?

If you feel your plugin has a large enough user base or the issue is of great significance, email `plugin@wordpress.org` **before** you push the code. Include a patch of the changes for review in the email, and explain why you feel this should be automated.

### Can I include changes besides the security related ones for automated updates?

With few exceptions, no. A security push should *only* be security related. We prefer (and many times require) plugin releases which fix **only** the security issue, with minimal code changes and with no unrelated changes.

This allows everyone to review the changes quickly and to be far more confident in them. Also it means there is a minimal amount of disruption on the part of the users.

### Why did plugin A get a automatic update, but plugin B didn’t?

It’s not bias from WordPress.org, it’s just a throwback to the manual process we’ve been using. If we’re alerted to an issue, we’ll work to handle it. If we find out several days later, the window of opportunity to get the fix rolled out has usually passed and it won’t be as effective.

### How can I disable automatic updates?

There are several options to disable this functionality. The article for [disabling core automatic updates](https://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7/) applies here. Anything that disables all automatic update functionality will prevent plugin updates. If you only wish to disable plugin updates, whether for all plugins or a single plugin, you can do so with a single filter call.

### What if I can’t (or don’t want to) fix my code?

You don’t have to. Your plugin will remain closed and, after 2 or 3 months, the plugin page will report that it was closed for security issues. If you want to push a fix but keep the plugin closed, we can do that too. Just reply to the email and talk to us.

### Do I only have to fix the reported issue?

Yes and no. You *do* have to fix the issues reported, but when you’re done, the *entire* plugin is re-reviewed, and if more issues are found, you’ll be required to fix those as well. The ultimate goal is to make sure the reopened plugin is safe.

### What if I have guideline issues?

This comes up when people are breaking other guidelines like including their own copy of jQuery or making undocumented external service calls. It depends on the severity of the other issues. If it’s just your own jQuery, we’ll likely let it be reopened and allow you to fix that at your own pace. If you’re logging all installs of your plugins, you’ll be required to correct that before we reopen the plugin.

---

# Reporting Plugin Security Issues <a name="plugins/wordpress-org/plugin-security/reporting-plugin-security-issues" />

Source: https://developer.wordpress.org/plugins/wordpress-org/plugin-security/reporting-plugin-security-issues/

Please do not report security issues with WordPress Core to the plugin team. To report an issue with WordPress itself, [follow the directions for reporting security vulnerabilities.](https://make.wordpress.org/core/handbook/testing/reporting-security-vulnerabilities/)

If you find a plugin with a security issue, please **do not** post about it publicly anywhere. Even if there’s a report filed on one of the official security tracking sites, bringing more awareness to the security issue tends to increase people being hacked, and rarely speeds up the fixing.

To report a plugin, please email `plugins@wordpress.org` with the following:

- a clear and concise description of the issue
- a link to the specific plugin
- whether or not you have validated the security issue yourself
- **optional** – links to any public disclosures on 3rd party sites

In the case of serious exploits, please keep in mind responsible and reasonable disclosure. Every attempt to contact the developer directly should be made *before* you reported the plugin to us (though we understand this can be difficult – check in the source code of the plugin first, many developers list their emails). If you cannot contact them privately, please contact us directly and we’ll help out.

Most plugins are closed to prevent new downloads until the issue is resolved. As such, you may *not* be alerted of a fix until the plugin is updated. We also **do not** provide assistance with filing CVEs at this time, due to a lack of resources. You’re welcome to do so on your own, but we cannot help you.

If you’ve already posted the vulnerability in public and provided a link to your report, please do not delete it! We will pass it on directly to the developers of the plugin.

---

# Special User Roles and Capabilities <a name="plugins/wordpress-org/special-user-roles-capabilities" />

Source: https://developer.wordpress.org/plugins/wordpress-org/special-user-roles-capabilities/

Every person who pushes code for, or aids in support for, a plugin is required to have their **OWN** individual account. These accounts do not have to be personally identifying (that is, you can name them PluginNameSupport1 if you wanted), however all accounts must be used by a single human for your own protection.

There are four roles a user can have with regards to plugins. All can be managed from the **advanced view** section of a plugin page:

![Interface of the plugin page, the link ''Advanced View'' is highlighted.](https://i0.wp.com/developer.wordpress.org/files/2020/08/advanced-view.jpg?resize=300%2C260&ssl=1)There are fields to add Support Reps and Committers as needed.

## Owner

A plugin owner is automatically set by the person who submits the plugin. On plugin approval, they are added as a Committer (see below) and flagged as the owner. Should this need to be changed, scroll down to the **Danger Zone** section and select the new owner from the dropdown:

![Transfer this plugin interface with a selector for the new owner and a "Please transfer -Plugin Name-" button](https://i0.wp.com/developer.wordpress.org/files/2020/08/can-transger.jpg?resize=1024%2C548&ssl=1)If there are no other users with commit access, you will need to grant them access before you can transfer the plugin. Remember, plugin owners should **always** have commit access to the plugins they own.

If you see this message, then you are not the current owner, and need to contact them to have ownership transferred:

![Message: This plugin is currently owned by -user- the can choose to transfer ownership rights of the plugin to you](https://i0.wp.com/developer.wordpress.org/files/2020/08/Owner.jpg?resize=1024%2C249&ssl=1)If the original owner is no longer available, you may contact the plugins team for assistance.

## Committer

Someone with commit access has the ability to push code via SVN and make official requests concerning a plugin to the Plugin Directory Team.

Anyone with commit access has the right to request a plugin be closed, and has the ability to add and remove anyone from commit access. This is done from the **Advanced Page** on the sidebar:

[![Interface to add a committer, an input with an "Add" button next to it](https://i0.wp.com/developer.wordpress.org/files/2021/02/Commit.jpg?resize=604%2C266&ssl=1)](https://i0.wp.com/developer.wordpress.org/files/2021/02/Commit.jpg?ssl=1)In the forums, these people are labeled as a “Plugin Author” and have the ability to mark posts regarding their plugin as resolved.

Other than the “Plugin Author” label in the forum for replies to plugin support topics, having commit access is not outwardly displayed. In order to be listed in the plugin’s “Contributors &amp; Developers” section, and to have the plugin included in a WordPress.org profile, the user must be listed as a contributor (see the subsequent section).

Adding and removing commit access can only be done by an existing committer.

## Support Rep

A support rep has **no** extra ability to directly manage the plugin itself. They cannot request changes be made to a plugin’s status in the directory. However, they will be labeled in the forums as being official support and this can help people understand who is helping them.

[![Interface to add a support rep, an input with an "Add" button next to it](https://i0.wp.com/developer.wordpress.org/files/2021/02/Support.jpg?resize=634%2C280&ssl=1)](https://i0.wp.com/developer.wordpress.org/files/2021/02/Support.jpg?ssl=1)In the forums, they are labeled as a “Plugin Support” and have the ability to mark posts regarding their plugin as resolved.

They are displayed on the plugin page, and the plugin appears on their profile page as a Support Representative.

Adding and removing this status can only be done by an existing committer.

## Contributor

A contributor has no extra ability to directly manage the plugin itself. They *cannot* request changes be made to a plugin’s status in the directory.

In the forums, they are labeled as a “Plugin Contributor” and have the ability to mark posts regarding their plugin as resolved.

A contributor is publicly listed in the plugin’s “Contributors &amp; Developers” section and the plugin is listed as one of the user’s plugins in their WordPress.org profile.

To be added as a contributor, a user must be listed within *Contributors* in the plugin’s `readme.txt`.

While it is common to add people who helped with a plugin’s conceptualization or was an original contributor, you do not need to add anyone to your plugin with more access than you’re comfortable with.

---

# Alerts and Warnings <a name="plugins/wordpress-org/alerts-and-warnings" />

Source: https://developer.wordpress.org/plugins/wordpress-org/alerts-and-warnings/

When you visit plugin pages on WordPress.org, you may notice special alerts or warnings. These exist to help visitors understand the status of various plugins.

## Approved and Pending Data

[![Blue background - This plugin is approved and awaiting data upload but not visible to the public yet. Once you make your first commit, the plugin will become public.](https://i0.wp.com/developer.wordpress.org/files/2018/02/approved.jpg?resize=954%2C76&ssl=1)](https://i0.wp.com/developer.wordpress.org/files/2018/02/approved.jpg?ssl=1)

Plugins that have been approved but no code has yet been uploaded will see this message:This *only* displays to the plugin owner and will go away once code has been pushed via SVN.

## Closed

As of November 2017, plugins that are closed display a notice:

![Red background: This plugin has been closed and is no longer available for download.](https://i0.wp.com/developer.wordpress.org/files/2018/02/closed.png?resize=629%2C52&ssl=1)

This is viewable by all visitors and indicates a plugin was closed. Plugins closed after January 2018 will include a date:

![Red background: This plugin was closed on February 7, 2018 and is no longer available for download.](https://i0.wp.com/developer.wordpress.org/files/2018/02/closed-alt.jpg?resize=624%2C56&ssl=1)

After 60 days, the alert will be updated to explain *why* the plugin was closed:

![Alert detailing why a plugin was closed](https://i0.wp.com/developer.wordpress.org/files/2018/02/why-closed.png?resize=626%2C81&ssl=1)

Plugin committers will see the following additional note:

![Blue background: If you did not request this change, please contact plugins@wordpress.org for a status. All developers with commit access are contacted when a plugin is closed, with the reasons why, so check your spam email too.](https://i0.wp.com/developer.wordpress.org/files/2018/02/closed-owner.png?resize=629%2C101&ssl=1)

### Reasons why plugins are closed

- Author Request – the author has asked the plugin to be closed
- Guideline Violation – a violation of any of the guideline
- Licensing/Trademark Violation – non-GPL code in use, or trademarks are being misused
- Merged Into Core – the plugin is now a part of core (reserved for feature projects)
- Security Issue – a security concern has been found in this plugin

Additional details on why a plugin is closed are not provided to anyone outside the WordPress.org security team or the plugin authors, unless there is an extreme circumstance.

## Out of Date

Plugins that do not support the last 3 major releases of WordPress have the following notice:

![Yellow background: This plugin hasn’t been tested with the latest 3 major releases of WordPress. It may no longer be maintained or supported and may have compatibility issues when used with more recent versions of WordPress.](https://i0.wp.com/developer.wordpress.org/files/2018/02/old.jpg?resize=965%2C83&ssl=1)

Previously this message alerted users to plugins not updated within the last 2 years. In 2018 it was modified to rely on more pertinent data. Since WordPress updates major releases 2 to 3 times per year, and a maintained a plugin should be testing with the recent versions, this alert can be avoided by updating a plugin readme when new versions of WordPress is released.

Developers are emailed before every major release of WordPress and asked to update this value. They *do not* need to push a new version, just [update the readme](#plugins/wordpress-org/how-your-readme-txt-works) and edit the value of `Tested up to:` to the latest version of WordPress.

---

# Compliance Disclaimers <a name="plugins/wordpress-org/compliance-disclaimers" />

Source: https://developer.wordpress.org/plugins/wordpress-org/compliance-disclaimers/

As of **April 12, 2018**, [Guideline 9](#plugins/wordpress-org/detailed-plugin-guidelines) (Developers and their plugins must not do anything illegal, dishonest, or morally offensive.) has been amended to include the following new prohibition:

- implying that a plugin can create, provide, automate, or guarantee legal compliance

Some plugins offer to assist a site with being ‘compliant’ with laws like the ADA, GDPR, EU Cookie Law, VAT, HIPPA, PCI, and so on.

No plugin can offer 100% legal compliance. They can (and do) assist sites with being more compliant. Still, at the end of the day, the responsibility remains with the site administrators to ensure their sites meet the qualifications for any compliance. Even services are not providing full compliance, just compliance when *their* service is in use.

In order to make this more clear to site administrators, we recommend that plugins do **not** claim to be 100% compliant, and instead to explain that the plugin itself will assist in compliance. This has the added benefit of protecting developers in the case where compliance guidelines change and the plugin has not yet been updated.

## What do I need to do?

tl;dr: Update your readme, documentation, assets (banners, screenshots, etc), and descriptions to clearly state that your plugin is meant to **assist** in compliance.

For example, if your plugin says it “will make your website ADA compliant.” you should change that to “will help make your website more ADA compliant.” In addition, it would be wise to add in a note that “no plugin can provide 100% compliance” and then enumerate what yours does to get people closer. It’ll help your sales pitches too!

## Do I need to change my plugin display name?

If your plugin name claims or implies compliance, yes.

For example, if your plugin display name is “100% EU Cookie Law Compliance” or “VAT-MOSS Compliance” then you should change the display name to “Improve EU Cookie Law Compliance” or “VAT-MOSS Compliance Assistant”

Keep in mind, a BETTER plugin name would be one that is unique to you. Remember, people can find “Foobar’s EU Cookie Law Tools” easier than “EU Cookie Law Tools” – they’ll remember your name easier.

## My plugin’s a service and is 100% compliant. Do I still need to do this?

Yes, but in a slightly different way.

A service assumes the responsibility for the compliance needed in those cases, and that’s what needs to be clear in the readme: it’s not the plugin code, it’s the service. We strongly recommend you link to your proof of compliance, and that is has a date on it.

For example, instead of saying “Foobar Payment Plugin is PCI compliant.” you could say “The Foobar Payment Gateway Service handles PCI compliance, however this only pertains to purchases made using our gateway. Full details on our compliance can be found in our `[documentation](https://service-name.com/doc/)`.”

## My plugin uses a 3rd party library that claims 100% compliance. Do I need to change that?

Not unless you also claim it in your own readme/documentation. Though you should be a good human and warn them that what they’re doing isn’t really accurate.

## I only talk about 100% XHTML compliance. Do I have to change things?

Technically no, but … can you **really** promise 100% compliance forever and ever? Probably best to change that and just say “Updated for further XHTML compliance.” Check out how WordPress.org handles [Accessibility compliance](https://wordpress.org/about/accessibility/) for a good place to start.

## What happens if I don’t do this?

If we find you’re making inaccurate claims, we will warn you. Then if it’s not fixed in a reasonable amount of time (60 days) your plugin may be closed. Worst than that, however, you open yourself up for legal disputes. This is not actually our responsibility to protect you from, however we feel that being good stewards of open source includes educating you as to these things. Essential, this is something that could seriously hurt you (or your company), and we’d rather that not happen.

In addition, from this point forward, if your plugin is closed for other issues (guideline or security related), we will require you to update the readme before we will reopen the plugin.

## How do I report other plugins for this violation?

Same way you would anything. Email `plugins@wordpress.org` with a link to their plugin and an explanation as to why you feel they’re in violation. Keep in mind, closing a plugin is a last resort, so we may already be talking to them about it. Also remember pointing out other people making this mistake doesn’t give you a free pass. You have to fix your own stuff too.

---

# Using the Forums <a name="plugins/wordpress-org/using-the-forums" />

Source: https://developer.wordpress.org/plugins/wordpress-org/using-the-forums/

With the free plugin hosting, all plugin developers are given access to use the support forums and the reviews to help manage their plugins.

Developers are required to comply with the [forum guidelines](https://wordpress.org/support/guidelines/) while using the forums, which can lead to some confusion about how to manage premium versions of plugins.

## The guidelines apply to everyone

The plugin owner is the ultimate controller of the plugin. However, if the other developers or support reps violate the guideline, the plugin is at risk for censure and closure. It is not the responsibility of the forum or plugin teams to manage your company/employees. If a support rep is making sock puppets, the plugin developers will be notified and expected to take action. If they cannot, or will not, restrain their coworkers, we will cease to host their plugins and may ban the company.

***Everyone*** has to abide by the guidelines. No exceptions.

## The directory is not a marketplace

The plugin directory and forums are not for you to sell or support products that are not hosted here. If the only reason you have a plugin in our systems is for your business promotion, you must understand that there are no special considerations granted to anyone for that.

## Users are not customers

Users on WordPress.org are not your customers and should be treated as users. This means you *cannot* ask them for private contact information, you cannot offer to log in to their site, and you cannot charge them for help. It is for your own legal protection, we prohibit those things. Even with the contract of a purchase, you are liable for damages caused by your logging into their site. Doing so without the purchase makes it more dangerous.

If someone is a customer (that is they purchased your premium offering and posted in the free forums), you can and should remind them that you cannot support them in the WordPress.org forums, and provide a link to your professional support services. Similarly, you can tell people that you aren’t able to offer free support in the forums and link to your site where you can explain in full detail.

## You may request users open tickets on your own system

This is especially true if you have a service that requires an account. There is already a pre-existing relationship with the user, and asking them to open a ticket for support of services is reasonable and permitted. You may also ask them to open a ticket if they’re an actual paying customer.

If you want to offer a higher level of support as a service (i.e. something they pay for), it’s acceptable to tell users that they have reached the limit of what you can support for free. In those situations, we recommend you have this disclosed in your readme with a dedicated page on your site to explain in detail what is and is not available for free help.

For everyone else, if you’re helping people in the free forums, you are expected to help them *in* the forums.

## You are *not* required to offer free support

If you don’t want to offer free support, you don’t have to. We strongly recommend you make that clear in your readme (preferably at the top of the description so its hard to miss), and we will back you up on this.

Keep in mind, people leaving you bad reviews because of that won’t be removed. You can reply to the reviews and explain why you don’t offer support, of course, and that you did disclose that fact.

## Reviews of premium versions are permitted (within reason)

This can be confusing.

We believe users have the right to leave a review that includes details about a premium version of a plugin provided the following are true:

1. The plugin itself upsells/promotes the premium version either within the readme or the plugin settings page
2. The review contains details about the functionality/usability of the plugin
3. The review is **not** only a complaint about upselling
4. The review does **not** contain harassment, abuse, vulgarities, or other attacks towards the developer
5. The review is **not** about a premium-only plugin that is not hosted (whole or in part) on WordPress.org

We do not tolerate abuse or harassment towards developers any more than we do towards users. That said, negative reviews are not, in and of themselves, always abusive. Sometimes people just don’t like your plugins, and that’s okay.

## Multiple accounts for a company are permitted (within reason)

The real issue here is that users don’t like talking to “MarvelTech100” as much as they like to talk to Carol Danvers. Faceless automatons are hard to connect with.

That said, having a company account to own your plugin is perfectly logical and reasonable. However in those situations, the account is only intended to be the **owner** of the plugins/themes, and is **not** permitted to use the forums.

If you want to have two accounts, where one is your personal account and the other is “You at the company” that’s totally fine. People just prefer talking to people.

## Sharing accounts is not permitted

Related to that, don’t share accounts. It causes confusion, drama, and makes it very difficult to unravel who you are if someone on your team violates the guidelines. It never ends well.

---

# Developer Tools <a name="plugins/developer-tools" />

Source: https://developer.wordpress.org/plugins/developer-tools/

There are a wide variety of tools available to help with plugin development. Some of them are run in your development environment ([xdebug](http://xdebug.org/), [PHPCS](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards), etc), but there are also some excellent tools that can run right inside WordPress to help you build things properly and diagnose problems. This chapter deals with the in-browser tools.

---

# Debug Bar and Add-Ons <a name="plugins/developer-tools/debug-bar-and-add-ons" />

Source: https://developer.wordpress.org/plugins/developer-tools/debug-bar-and-add-ons/

The Debug Bar is a plugin that adds a debug menu to the admin bar that shows query, cache, and other helpful debugging information.

## Debug Bar

This is the main plugin, adding the base functionality that is extended by the remaining plugins listed on this page.

When WP\_DEBUG is enabled it also tracks PHP Warnings and Notices to make them easier to find.

When SAVEQUERIES is enabled the mysql queries are tracked and displayed.

[Visit Debug Bar](https://wordpress.org/plugins/debug-bar/)

## Debug Bar Console

This plugin adds a console in which you can run arbitrary PHP. This is excellent for testing the contents of variables, among many other uses.

[Visit Debug Bar Console](https://wordpress.org/plugins/debug-bar-console/)

## Debug Bar Shortcodes

This plugin adds a new panel to the Debug Bar that displays the registered shortcodes for the current request.

Additionally it will show you:

- Which function/method is called by the shortcode.
- Whether the shortcode is used on the current post/page/post type and how (only when on singular).
- Any additional information available about the shortcode, such as a description, which parameters it takes, whether or not it is self-closing.
- Find out all pages/posts/etc on which a shortcode is used.

[Visit Debug Bar Shortcodes](https://wordpress.org/plugins/debug-bar-shortcodes/)

## Debug Bar Constants

This plugin adds three new panels to the Debug Bar that display the defined constants available to you as a developer for the current request:

- WP Constants
- WP Class Constants
- PHP Constants

[Visit Debug Bar Constants](https://wordpress.org/plugins/debug-bar-constants/)

## Debug Bar Post Types

This plugin adds a new panel to the Debug Bar that displays detailed information about the registered post types for your site.

[Visit Debug Bar Post Types](https://wordpress.org/plugins/debug-bar-post-types/)

## Debug Bar Cron

This plugin adds a new panel in the Debug Bar displaying information about WordPress’ scheduled events.

Once installed, you will have access to the following information:

- Number of scheduled events
- If cron is currently running
- Time of next event
- Current time
- List of custom scheduled events
- List of core scheduled events
- List of schedules

[Visit Debug Bar Cron](https://wordpress.org/plugins/debug-bar-cron/)

## Debug Bar Actions and Filters Addon

This plugin adds two more tabs in the Debug Bar to display hooks (Actions and Filters) attached to the current request. Actions tab displays the actions hooked to current request. Filters tab displays the filter tags along with the functions attached to it with respective priority.

[Visit Debug Bar Actions and Filters Addon](https://wordpress.org/plugins/debug-bar-actions-and-filters-addon/)

## Debug Bar Transients

This plugin adds information about WordPress transients to a new panel in the Debug Bar.

Once installed, you will have access to the following information:

- Number of existing transients
- List of custom transients
- List of core transients
- List of custom site transients
- List of core site transients
- An option to delete a transient

[Visit Debug Bar Transients](https://wordpress.org/plugins/debug-bar-transients/)

## Debug Bar List Script &amp; Style Dependencies

This plugin lists scripts and styles that are loaded, in which order they’re loaded, and what dependencies exist.

[Visit Debug Bar List Script &amp; Style Dependencies](https://wordpress.org/plugins/debug-bar-list-dependencies/)

## Debug Bar Remote Requests

This plugin will add a new panel to Debug Bar that will display and profile remote requests made through the HTTP API.

Once installed, you will have access to the following information:

- Request method (GET, POST, etc)
- URL
- Time per request
- Total time for all requests
- Total number of requests

Optionally, you can add `?dbrr_full=1` to your URL to get additional information, including all request parameters and a full dump of the response with headers.

[Visit Debug Bar Remote Requests](https://wordpress.org/plugins/debug-bar-remote-requests/)

---

# Helper Plugins <a name="plugins/developer-tools/helper-plugins" />

Source: https://developer.wordpress.org/plugins/developer-tools/helper-plugins/

## Plugin Check

Plugin Check is a tool for testing whether your plugin meets the required standards for the WordPress.org plugin directory. With this plugin you will be able to run most of the checks used for new submissions, and check if your plugin meets the requirements.

Additionally, the tool flags violations or concerns around plugin development best practices, from basic requirements like correct usage of internationalization functions to accessibility, performance, and security best practices.

[Visit Plugin Check](https://wordpress.org/plugins/plugin-check/)

## Query Monitor

Query Monitor is a debugging plugin for anyone developing with WordPress. You can view debugging and performance information on database queries, hooks, conditionals, HTTP requests, redirects and more. It has some advanced features not available in other debugging plugins, including automatic AJAX debugging and the ability to narrow down things by plugin or theme.

[Visit Query Monitor](https://wordpress.org/plugins/query-monitor/)

---

# Creating Tables with Plugins <a name="plugins/creating-tables-with-plugins" />

Source: https://developer.wordpress.org/plugins/creating-tables-with-plugins/

If you are [writing a plugin](#plugins) for WordPress, you will almost certainly find that you need to store some information in the WordPress database. There are two types of information you could store:

- **Setup information** — user choices that are entered when the user first sets up your plugin, and don’t tend to grow much beyond that (for example, in a tag-related plugin, the user’s choices regarding the format of the tag cloud in the sidebar).  
    Setup information will generally be stored using the [WordPress *options* mechanism](#pluginssettings/options-api/).
- **Data** — information that is added as the user continues to use your plugin, which is generally expanded information related to posts, categories, uploads, and other WordPress components (for example, in a statistics-related plugin, the various page views, referrers, and other statistics associated with each post on your site).  
    Data can be stored in a separate MySQL/MariaDB table, which will have to be created. Before jumping in with a whole new table, however, consider if storing your plugin’s data in [WordPress’ Post Meta](#pluginsmetadata/) (a.k.a. Custom Fields) would work. Post Meta is the preferred method; use it when possible/practical.

This article describes how to have your plugin automatically create a MySQL/MariaDB table to store its data. Note that as an alternative to following the steps here, you could have the plugin user run an install script when they install your plugin. Another approach would be to have the user execute an SQL query on their own, using something like [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin). But neither of those options is very satisfactory, since a user could easily forget to run the install script or mess up the query (and they might not have phpMyAdmin available).

So, it is recommended that you follow the steps below to have your plugin automatically create its database tables:

1. Write a PHP function that creates the table.
2. Ensure that WordPress calls the function when the plugin is activated.
3. Create an upgrade function, if a new version of your plugin needs to have a different table structure.

## Create Database Tables

The first step in making your plugin create database tables automatically is to create a PHP function within your plugin that adds a table or tables to the WordPress MySQL/MariaDB database. For purposes of this article, we’ll assume you want to call this function jal\_install.

### Database Table Prefix

In the wp-config.php file, a WordPress site owner can define a database table prefix. By default, the prefix is “wp\_”, but you’ll need to check on the actual value and use it to define your database table name. This value is found in the $[wpdb](#reference/classes/wpdb)-&gt;prefix variable. (If you’re developing for a version of WordPress older than 2.0, you’ll need to use the $table\_prefix global variable, which is deprecated in version 2.1).

So, if you want to create a table called (prefix)liveshoutbox, the first few lines of your table-creation function will be:

```php
function jal_install () {
   global $wpdb;

   $table_name = $wpdb->prefix . "liveshoutbox"; 
}

```

### Creating or Updating the Table

The next step is to actually create the database table. Rather than executing an SQL query directly, we’ll use the dbDelta function in wp-admin/includes/upgrade.php (we’ll have to load this file, as it is not loaded by default). The dbDelta function examines the current table structure, compares it to the desired table structure, and either adds or modifies the table as necessary, so it can be very handy for updates (see wp-admin/upgrade-schema.php for more examples of how to use dbDelta). Note that the dbDelta function is rather picky, however. For instance:

- You must put each field on its own line in your SQL statement.
- You must have two spaces between the words PRIMARY KEY and the definition of your primary key.
- You must use the key word KEY rather than its synonym INDEX and you must include at least one KEY.
- KEY must be followed by a SINGLE SPACE then the key name then a space then open parenthesis with the field name then a closed parenthesis.
- You must not use any apostrophes or backticks around field names.
- Field types must be all lowercase.
- SQL keywords, like CREATE TABLE and UPDATE, must be uppercase.
- You must specify the length of all fields that accept a length parameter. int(11), for example.

With those caveats, here are the next lines in our function, which will actually create or update the table. You’ll need to substitute your own table structure in the $sql variable:

```php
global $wpdb;

$charset_collate = $wpdb->get_charset_collate();

$sql = "CREATE TABLE $table_name (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
  name tinytext NOT NULL,
  text text NOT NULL,
  url varchar(55) DEFAULT '' NOT NULL,
  PRIMARY KEY  (id)
) $charset_collate;";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );

```

**Note:** Above we set the default character set and collation for the table. If we don’t do this, some characters could end up being converted to just ?’s when saved in our table. In this example we use $[wpdb::get\_charset\_collate()](#reference/classes/wpdbget_charset_collate/) to get the character set and collation. That function was introduced in WordPress 3.5, and if you need to support versions before that you will need create the charset/collate string yourself (you could copy the source of that function).

### Adding Initial Data

Finally, you may want to add some data to the table you just created. Here is an example of how to do that:

```php
$welcome_name = 'Mr. WordPress';
$welcome_text = 'Congratulations, you just completed the installation!';

$table_name = $wpdb->prefix . 'liveshoutbox';

$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'name' => $welcome_name, 
		'text' => $welcome_text, 
	) 
);

```

**NOTE:** **For more on using WPDB, see [wpdb](#reference/classes/wpdb) class.** In this case, we’re using $[wpdb](#reference/classes/wpdb)-&gt;insert, so our data will automatically be escaped. If you need to use another method like $[wpdb](#reference/classes/wpdb)-&gt;query instead, it’s a good idea to run the variables through the $[wpdb](#reference/classes/wpdb)-&gt;prepare function before passing the query to the database to prevent security problems, even though we defined $welcome\_name and $welcome\_text in this function and know that there are no SQL special characters in them.

### A Version Option

Another excellent idea is to add an option to record a version number for your database table structure, so you can use that information later if you need to update the table:

```php
add_option( "jal_db_version", "1.0" );

```

### The Whole Function

This function is done. Let’s see it all in one piece. Note that the version number is now stored in a global variable.

```php
<?php

global $jal_db_version;
$jal_db_version = '1.0';

function jal_install() {
	global $wpdb;
	global $jal_db_version;

	$table_name = $wpdb->prefix . 'liveshoutbox';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		name tinytext NOT NULL,
		text text NOT NULL,
		url varchar(55) DEFAULT '' NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $sql );

	add_option( 'jal_db_version', $jal_db_version );
}

function jal_install_data() {
	global $wpdb;
	
	$welcome_name = 'Mr. WordPress';
	$welcome_text = 'Congratulations, you just completed the installation!';
	
	$table_name = $wpdb->prefix . 'liveshoutbox';
	
	$wpdb->insert( 
		$table_name, 
		array( 
			'time' => current_time( 'mysql' ), 
			'name' => $welcome_name, 
			'text' => $welcome_text, 
		) 
	);
}

```

## Calling the functions

Now that we have the initialization function defined, we want to make sure that WordPress calls this function when the plugin is activated by a WordPress administrator. To do that, we will use the activate\_ action hook. If your plugin file is wp-content/plugins/plugindir/pluginfile.php, you’ll add the following line to the main body of your plugin:

```php
register_activation_hook( __FILE__, 'jal_install' );
register_activation_hook( __FILE__, 'jal_install_data' );

```

See [Function\_Reference/register\_activation\_hook](#reference/functions/register_activation_hook) for more details.

## Adding an Upgrade Function

Over the lifetime of your plugin, you may find that you need to change the plugin’s database structure in an upgraded version. To do that, you will need to create update code within your plugin that will detect that a new version has been installed, and upgrade the database structure. The easiest thing to do is to add the code to the jal\_install function we just created.

So, let’s assume that the function above was used to create database version 1.0 of your plugin, and you are now upgrading to version 1.1 so that the URL field can be wider (100 characters instead of 55). You will need to add the following lines to the end of your jal\_install function, to check the version and upgrade if necessary:

```php
<?php

global $wpdb;
$installed_ver = get_option( "jal_db_version" );

if ( $installed_ver != $jal_db_version ) {

	$table_name = $wpdb->prefix . 'liveshoutbox';

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		name tinytext NOT NULL,
		text text NOT NULL,
		url varchar(100) DEFAULT '' NOT NULL,
		PRIMARY KEY  (id)
	);";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	update_option( "jal_db_version", $jal_db_version );
}

```

You’ll also need to change the global $jal\_db\_version variable at the top of the file, and of course you’ll want to change the initialization section created above to use the new table structure.

Since 3.1 the activation function registered with [register\_activation\_hook()](#reference/functions/register_activation_hook) is not called when a plugin is updated. So to run the above code after the plugin is upgraded, you need to check the plugin db version on another hook, and call the function manually if the the database version is old. Like this:

```php
function myplugin_update_db_check() {
    global $jal_db_version;
    if ( get_site_option( 'jal_db_version' ) != $jal_db_version ) {
        jal_install();
    }
}
add_action( 'plugins_loaded', 'myplugin_update_db_check' );

```

## Resources

For further reading on plugin development, check out [Plugin Handbook](#plugins), a comprehensive list of plugin resources. You may also find this post from the [wp-hackers mailing list](https://codex.wordpress.org/Mailing_Lists#Hackers) to be helpful: [WordPress Hackers Mailing List: Answer to Plugin Requires Additional Tables](http://lists.automattic.com/pipermail/wp-hackers/2005-May/000940.html). Also see: [Post meta vs separate database tables](http://wordpress.stackexchange.com/questions/4852/post-meta-vs-seperate-database-tables).

---

# Credits <a name="plugins/credits" />

Source: https://developer.wordpress.org/plugins/credits/

List of credits brought over manually.

- @2Neil
- @aternus
- @awoods
- @blobaugh
- @code\_poet
- @cyrijones
- @danielbachhuber
- @dawnmschaffer
- @drewapicture
- @endeavorm
- @grapplerulrich
- @hanni
- @hlashbrooke
- @iandunn
- @jasonm4563
- @jazzs3quence
- @joedolson
- @johnregan3
- @kimparsell
- @krogsgard
- @Marella
- @metripaldi9
- @mordauk
- @NemesisVex
- @netweb
- @NikV
- @nlarnold1
- @Otto42
- @pjackson1972
- @pollyplumber
- @ramiy
- @roccotripaldi
- @sewmyheadon
- @skippywp
- @theMikeD
- @tmoorewp
- @topher1kenobe