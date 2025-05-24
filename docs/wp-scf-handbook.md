Table of Contents:

- [Getting Started with Secure Custom Fields](#secure-custom-fields)
- [Installing Secure Custom Fields](#secure-custom-fields/welcome/installation)
- [Quick Start Guide](#secure-custom-fields/welcome/quick-start)
- [Core Concepts](#secure-custom-fields/concepts)
- [Architecture](#secure-custom-fields/concepts/architecture)
- [Security in Secure Custom Fields](#secure-custom-fields/concepts/security)
- [Contributing to SCF](#secure-custom-fields/contributing)
- [Documentation Guidelines](#secure-custom-fields/contributing/documentation)
- [Features](#secure-custom-fields/features)
- [Custom Post Types](#secure-custom-fields/features/post-types)
- [API Reference](#secure-custom-fields/features/scf-api)
- [Field Types](#secure-custom-fields/features/field)
- [Repeater Field](#secure-custom-fields/features/field/repeater)
- [Using the Repeater Field](#secure-custom-fields/features/field/repeater/repeater-tutorial)
- [Select Field](#secure-custom-fields/features/field/select)
- [Using the Select Field](#secure-custom-fields/features/field/select/select-tutorial)
- [Separator Field](#secure-custom-fields/features/field/separator)
- [Using the Separator Field](#secure-custom-fields/features/field/separator/separator-tutorial)
- [Tab Field](#secure-custom-fields/features/field/tab)
- [Using the Tab Field](#secure-custom-fields/features/field/tab/tab-tutorial)
- [Taxonomy Field](#secure-custom-fields/features/field/taxonomy)
- [Using the Taxonomy Field](#secure-custom-fields/features/field/taxonomy/taxonomy-tutorial)
- [Text Field](#secure-custom-fields/features/field/text)
- [Using the Text Field](#secure-custom-fields/features/field/text/text-tutorial)
- [Textarea Field](#secure-custom-fields/features/field/textarea)
- [Using the Textarea Field](#secure-custom-fields/features/field/textarea/textarea-tutorial)
- [Time Picker Field](#secure-custom-fields/features/field/time-picker)
- [Using the Time Picker Field](#secure-custom-fields/features/field/time-picker/time-picker-tutorial)
- [True/False Field](#secure-custom-fields/features/field/true-false)
- [Using the True/False Field](#secure-custom-fields/features/field/true-false/true-false-tutorial)
- [URL Field](#secure-custom-fields/features/field/url)
- [Using the URL Field](#secure-custom-fields/features/field/url/url-tutorial)
- [User Field](#secure-custom-fields/features/field/user)
- [Using the User Field](#secure-custom-fields/features/field/user/user-tutorial)
- [WYSIWYG Field](#secure-custom-fields/features/field/wysiwyg)
- [Using the WYSIWYG Field](#secure-custom-fields/features/field/wysiwyg/wysiwyg-tutorial)
- [Tutorials](#secure-custom-fields/tutorials)
- [Creating Your First Post Type](#secure-custom-fields/tutorials/first-post-type)
- [Code Reference](#secure-custom-fields/code-reference)
- [Api](#secure-custom-fields/code-reference/api)
- [API Helpers Global Functions](#secure-custom-fields/code-reference/api/api-helpers-file)
- [API Template Global Functions](#secure-custom-fields/code-reference/api/api-template-file)
- [API Term Global Functions](#secure-custom-fields/code-reference/api/api-term-file)
- [Fields](#secure-custom-fields/code-reference/fields)
- [Accordion Field](#secure-custom-fields/code-reference/fields/accordion)
- [Using the Accordion Field](#secure-custom-fields/code-reference/fields/accordion/accordion-tutorial)
- [Button Group Field](#secure-custom-fields/code-reference/fields/button-group)
- [Using the Button Group Field](#secure-custom-fields/code-reference/fields/button-group/button-group-tutorial)
- [Checkbox Field](#secure-custom-fields/code-reference/fields/checkbox)
- [Using the Checkbox Field](#secure-custom-fields/code-reference/fields/checkbox/checkbox-tutorial)
- [Clone Field](#secure-custom-fields/code-reference/fields/clone)
- [Using the Clone Field](#secure-custom-fields/code-reference/fields/clone/clone-tutorial)
- [Color Picker Field](#secure-custom-fields/code-reference/fields/color-picker)
- [Using the Color Picker Field](#secure-custom-fields/code-reference/fields/color-picker/color-picker-tutorial)
- [Date Picker Field](#secure-custom-fields/code-reference/fields/date-picker)
- [Using the Date Picker Field](#secure-custom-fields/code-reference/fields/date-picker/date-picker-tutorial)
- [Date Time Picker Field](#secure-custom-fields/code-reference/fields/date-time-picker)
- [Using the Date Time Picker Field](#secure-custom-fields/code-reference/fields/date-time-picker/date-time-picker-tutorial)
- [Email Field](#secure-custom-fields/code-reference/fields/email)
- [Using the Email Field](#secure-custom-fields/code-reference/fields/email/email-tutorial)
- [File Field](#secure-custom-fields/code-reference/fields/file)
- [Using the File Field](#secure-custom-fields/code-reference/fields/file/file-tutorial)
- [Flexible Content Field](#secure-custom-fields/code-reference/fields/flexible-content)
- [Using the Flexible Content Field](#secure-custom-fields/code-reference/fields/flexible-content/flexible-content-tutorial)
- [Gallery Field](#secure-custom-fields/code-reference/fields/gallery)
- [Using the Gallery Field](#secure-custom-fields/code-reference/fields/gallery/gallery-tutorial)
- [Google Map Field](#secure-custom-fields/code-reference/fields/google-map)
- [Using the Google Map Field](#secure-custom-fields/code-reference/fields/google-map/google-map-tutorial)
- [Group Field](#secure-custom-fields/code-reference/fields/group)
- [Using the Group Field](#secure-custom-fields/code-reference/fields/group/group-tutorial)
- [Icon Picker Field](#secure-custom-fields/code-reference/fields/icon-picker)
- [Using the Icon Picker Field](#secure-custom-fields/code-reference/fields/icon-picker/icon-picker-tutorial)
- [Image Field](#secure-custom-fields/code-reference/fields/image)
- [Using the Image Field](#secure-custom-fields/code-reference/fields/image/image-tutorial)
- [Link Field](#secure-custom-fields/code-reference/fields/link)
- [Using the Link Field](#secure-custom-fields/code-reference/fields/link/link-tutorial)
- [Message Field](#secure-custom-fields/code-reference/fields/message)
- [Using the Message Field](#secure-custom-fields/code-reference/fields/message/message-tutorial)
- [Number Field](#secure-custom-fields/code-reference/fields/number)
- [Using the Number Field](#secure-custom-fields/code-reference/fields/number/number-tutorial)
- [oEmbed Field](#secure-custom-fields/code-reference/fields/oembed)
- [Using the oEmbed Field](#secure-custom-fields/code-reference/fields/oembed/oembed-tutorial)
- [Page Link Field](#secure-custom-fields/code-reference/fields/page-link)
- [Using the Page Link Field](#secure-custom-fields/code-reference/fields/page-link/page-link-tutorial)
- [Password Field](#secure-custom-fields/code-reference/fields/password)
- [Using the Password Field](#secure-custom-fields/code-reference/fields/password/password-tutorial)
- [Post Object Field](#secure-custom-fields/code-reference/fields/post-object)
- [Using the Post Object Field](#secure-custom-fields/code-reference/fields/post-object/post-object-tutorial)
- [Radio Field](#secure-custom-fields/code-reference/fields/radio)
- [Using the Radio Field](#secure-custom-fields/code-reference/fields/radio/radio-tutorial)
- [Range Field](#secure-custom-fields/code-reference/fields/range)
- [Using the Range Field](#secure-custom-fields/code-reference/fields/range/range-tutorial)
- [ACF_Repeater_Table](#secure-custom-fields/code-reference/fields/class-acf-repeater-table-file)
- [Acf Bidirectional Functions Global Functions](#secure-custom-fields/code-reference/acf-bidirectional-functions-file)
- [Acf Field Functions Global Functions](#secure-custom-fields/code-reference/acf-field-functions-file)
- [Acf Field Group Functions Global Functions](#secure-custom-fields/code-reference/acf-field-group-functions-file)
- [Acf Form Functions Global Functions](#secure-custom-fields/code-reference/acf-form-functions-file)
- [Acf Helper Functions Global Functions](#secure-custom-fields/code-reference/acf-helper-functions-file)
- [Acf Hook Functions Global Functions](#secure-custom-fields/code-reference/acf-hook-functions-file)
- [Acf Input Functions Global Functions](#secure-custom-fields/code-reference/acf-input-functions-file)
- [Acf Internal Post Type Functions Global Functions](#secure-custom-fields/code-reference/acf-internal-post-type-functions-file)
- [Acf Meta Functions Global Functions](#secure-custom-fields/code-reference/acf-meta-functions-file)
- [Acf Post Functions Global Functions](#secure-custom-fields/code-reference/acf-post-functions-file)
- [Acf Post Type Functions Global Functions](#secure-custom-fields/code-reference/acf-post-type-functions-file)
- [Acf Taxonomy Functions Global Functions](#secure-custom-fields/code-reference/acf-taxonomy-functions-file)
- [Acf User Functions Global Functions](#secure-custom-fields/code-reference/acf-user-functions-file)
- [Acf Utility Functions Global Functions](#secure-custom-fields/code-reference/acf-utility-functions-file)
- [Acf Value Functions Global Functions](#secure-custom-fields/code-reference/acf-value-functions-file)
- [Acf Wp Functions Global Functions](#secure-custom-fields/code-reference/acf-wp-functions-file)
- [Assets Global Functions](#secure-custom-fields/code-reference/assets-file)
- [Blocks Global Functions](#secure-custom-fields/code-reference/blocks-file)
- [Compatibility Global Functions](#secure-custom-fields/code-reference/compatibility-file)
- [Deprecated Global Functions](#secure-custom-fields/code-reference/deprecated-file)
- [Fields Global Functions](#secure-custom-fields/code-reference/fields-file)
- [L10n Global Functions](#secure-custom-fields/code-reference/l10n-file)
- [Local Fields Global Functions](#secure-custom-fields/code-reference/local-fields-file)
- [Local Json Global Functions](#secure-custom-fields/code-reference/local-json-file)
- [Local Meta Global Functions](#secure-custom-fields/code-reference/local-meta-file)
- [Locations Global Functions](#secure-custom-fields/code-reference/locations-file)
- [Loop Global Functions](#secure-custom-fields/code-reference/loop-file)
- [Revisions Global Functions](#secure-custom-fields/code-reference/revisions-file)
- [Scf Ui Options Page Functions Global Functions](#secure-custom-fields/code-reference/scf-ui-options-page-functions-file)
- [Upgrades Global Functions](#secure-custom-fields/code-reference/upgrades-file)
- [Validation Global Functions](#secure-custom-fields/code-reference/validation-file)
- [Admin](#secure-custom-fields/code-reference/admin)
- [Admin Notices Global Functions](#secure-custom-fields/code-reference/admin/admin-notices-file)
- [Admin Tools Global Functions](#secure-custom-fields/code-reference/admin/admin-tools-file)
- [Form Front Global Functions](#secure-custom-fields/code-reference/form-front-file)
- [Forms](#secure-custom-fields/code-reference/forms)
- [Hooks](#secure-custom-fields/code-reference/hooks)
- [ACF_Rest_Api](#secure-custom-fields/code-reference/class-acf-rest-api-file)
- [Acf Rest API Functions Global Functions](#secure-custom-fields/code-reference/class-acf-rest-api-file/acf-rest-api-functions-file)
- [ACF_Rest_Embed_Links](#secure-custom-fields/code-reference/class-acf-rest-api-file/class-acf-rest-embed-links-file)
- [ACF_Rest_Request](#secure-custom-fields/code-reference/class-acf-rest-api-file/class-acf-rest-request-file)
- [REST API](#secure-custom-fields/code-reference/rest-api)

# Getting Started with Secure Custom Fields <a name="secure-custom-fields" />

Source: https://developer.wordpress.org/secure-custom-fields/

This section helps you get up and running with Secure Custom Fields (SCF). Whether you’re new to WordPress development or an experienced developer, these guides will help you start using SCF effectively.

## In This Section

- [Installation](installation) – How to install and activate SCF
- [Quick Start](quick-start) – Create your first custom field group in minutes

## Documentation Sections

- [Concepts](../concepts/) – Core concepts and architecture
- [Features](../features/) – Detailed feature documentation
- [Tutorials](../tutorials/) – Step-by-step guides
- [Contributing](../contributing/) – How to contribute to SCF

## Code Reference

The [Code Reference](../code-reference/) provides detailed technical documentation of SCF’s functions, classes, hooks, and APIs. This is particularly useful for developers who want to:

- Extend SCF’s functionality
- Integrate SCF with other plugins or themes
- Understand SCF’s internal architecture
- Find specific hooks and filters

## Prerequisites

- WordPress 6.0 or later
- PHP 7.4 or later
- Basic understanding of WordPress development

---

# Installing Secure Custom Fields <a name="secure-custom-fields/welcome/installation" />

Source: https://developer.wordpress.org/secure-custom-fields/welcome/installation/

This guide walks you through installing Secure Custom Fields (SCF) on your WordPress site.

## Requirements

Before installing, ensure your site meets these requirements:

- WordPress 6.0 or later
- PHP 7.4 or later
- WordPress memory limit of 40MB or greater (64MB recommended)

## Installation Methods

### Via WordPress Admin (Recommended)

1. Log in to your WordPress admin panel
2. Navigate to Plugins → Add New
3. Search for “Secure Custom Fields”
4. Click “Install Now”
5. Click “Activate”

### Manual Installation

1. Download the latest release from WordPress.org
2. Extract the plugin files
3. Upload the plugin folder to `/wp-content/plugins/`

## 4. Activate through the WordPress admin interface

### Composer Installation

To install and manage Secure Custom Fields in your WordPress theme or plugin, it is recommended to use Composer.

This ensures that SCF is properly versioned, loaded automatically, and easy to update.

### Why integrate **Secure Custom Fields (SCF)** with Composer?

Integrating SCF using Composer offers several important advantages for the professional development of WordPress plugins and themes:

- **Centralized dependency management:**  
    Composer allows you to declare, install, and update SCF easily along with other libraries needed in your project.
- **Version control:**  
    You can lock a specific version of SCF in your `composer.json`, ensuring that all development and production environments use exactly the same version, avoiding unexpected errors.
- **Simplified deployment and automation (CI/CD):**  
    Composer installs SCF automatically during deployment processes (`composer install`), eliminating the need to manually copy files.
- **Automatic autoloading:**  
    Composer handles PHP class autoloading. Integrating SCF this way makes your code cleaner, safer, and PSR-4 compliant.
- **Reduced repository size:**  
    By installing SCF as an external dependency, you avoid having redundant copies of the plugin in your project, keeping your repository lighter and easier to maintain.
- **License compliance:**  
    Composer records the licenses of all dependencies used, which is very useful if you distribute your plugins or themes and need to meet legal or auditing requirements.
- **Facilitates project changes:**  
    By managing SCF as a dependency, any theme or plugin can change its structure or installation system without affecting its functionality, ensuring greater flexibility and compatibility in development.

---

### How to Load and Use **Secure Custom Fields (SCF)** with Composer

Add the following configuration to your `composer.json` file:

```json
{
  "repositories": [
    {
      "type": "composer",
      "url": "https://wpackagist.org"
    }
  ],
  "extra": {
    "installer-paths": {
      "vendor/{$name}/": ["type:wordpress-plugin"]
    }
  },
  "require": {
    "wpackagist-plugin/secure-custom-fields": "^6.4"
  },
  "config": {
    "allow-plugins": {
      "composer/installers": true
    }
  }
}

```

Once the configuration is set, run the following command in your terminal to install the dependencies:

```shell
composer install

```

or

```shell
composer i

```

---

### Add the Composer Autoloader

To ensure Composer dependencies are loaded correctly, add the following line in your plugin or theme:

```php
require_once plugin_dir_path(dirname(__FILE__)) . 'vendor/autoload.php';

```

### Load Secure Custom Fields

Now you need to manually load the Secure Custom Fields plugin and define its paths. Adjust the paths according to the structure of your plugin or theme:

```php
if (! class_exists('ACF')) {
    // Define the path and URL to the Secure Custom Fields plugin.
    define('MY_SCF_PATH', plugin_dir_path(dirname(__FILE__)) . 'vendor/secure-custom-fields/');
    define('MY_SCF_URL', plugin_dir_url(dirname(__FILE__)) . 'vendor/secure-custom-fields/');

    // Include the plugin main file.
    require_once MY_SCF_PATH . 'secure-custom-fields.php';
}

```

⚠️ **Note:** Replace MY\_SCF\_PATH and MY\_SCF\_URL with constants that match your plugin/theme structure if necessary.

### Done!

You have successfully installed and integrated Secure Custom Fields via Composer. You can now use it as you would with a normal installation, but with all the benefits of Composer-based dependency management.

---

### Optional: Hide SCF Admin Menu and Updates

If you want to hide the **Secure Custom Fields (SCF)** admin menu from the WordPress dashboard and prevent the plugin’s update notifications from appearing, you can use the following code:

```php
// Hide the SCF admin menu item.
add_filter( 'acf/settings/show_admin', '__return_false' );

// Hide the SCF Updates menu.
add_filter( 'acf/settings/show_updates', '__return_false', 100 );

```

#### What does this do?

- **Hide Admin Menu:**  
    The first filter disables the SCF menu in the WordPress admin area, preventing users from accessing SCF field groups or settings.
- **Hide Update Notifications:**  
    The second filter disables the SCF update notices, so users won’t see update prompts for the plugin inside the admin dashboard.

#### When should you use it?

- If you are bundling SCF inside your plugin or theme and want to **control all the custom fields yourself** without allowing clients or users to modify them.
- If you want to **maintain full control** over SCF versions and updates to avoid compatibility issues caused by manual updates.

> **Note:** Hiding updates means you are responsible for manually updating SCF when necessary to keep your project secure and compatible, but it also helps avoid potential conflicts between Composer and the built-in updater.

## Verify Your Installation

After installation:

1. Navigate to **Secure Custom Fields** in your WordPress admin menu.
2. Verify that you can access all **Secure Custom Fields** plugin features.
3. Create a **test field group** to ensure that fields are saved and displayed correctly.

---

# Quick Start Guide <a name="secure-custom-fields/welcome/quick-start" />

Source: https://developer.wordpress.org/secure-custom-fields/welcome/quick-start/

This guide will help you create your first custom field group with Secure Custom Fields.

## Creating a Field Group

1. Navigate to Custom Fields → Add New
2. Enter a title for your field group
3. Click “Add Field”
4. Choose a field type
5. Configure the field settings
6. Set the location rules
7. Save the field group

## Example: Author Bio

Let’s create a simple author bio field group:

1. Create a new field group called “Author Profile”
2. Add these fields: 
    - Profile Image (Image field)
    - Bio (Textarea field)
    - Social Links (Repeater field)
3. Set location to “User Form”
4. Save and test

## Next Steps

- Learn about [field types](../features/fields)
- Explore [advanced features](../features/README)
- Read the [security guidelines](../concepts/security)

---

# Core Concepts <a name="secure-custom-fields/concepts" />

Source: https://developer.wordpress.org/secure-custom-fields/concepts/

This section covers the fundamental concepts and architecture of Secure Custom Fields.

## In This Section

- [Architecture](architecture) – Understanding SCF’s internal structure
- [Security](security) – Security principles and best practices

## Overview

Secure Custom Fields is built on several core concepts that ensure security, flexibility, and extensibility. Understanding these concepts will help you make the most of the plugin.

---

# Architecture <a name="secure-custom-fields/concepts/architecture" />

Source: https://developer.wordpress.org/secure-custom-fields/concepts/architecture/

This document explains the internal architecture of Secure Custom Fields.

## Core Components

### 1. Field Management System

- Field type registration and validation
- Field rendering and display
- Data storage and retrieval
- Value sanitization and escaping

### 2. Post Type Management

- Custom post type registration
- Advanced configuration options
- WordPress core integration
- Rewrite rules and permalinks

### 3. Security Layer

- Input validation and sanitization
- Context-aware output escaping
- Permission and capability management
- Nonce verification

## Plugin Structure

The plugin is organized into several key directories:

### Core Directories

- **includes/** – Core functionality 
    - **fields/** – Field type definitions
    - **admin/** – Admin interface
    - **api/** – Public API
- **assets/** – JS, CSS, and images

### Directory Responsibilities

1. **includes/**
    - Core plugin functionality
    - Field type handling
    - Post type management
    - API endpoints
2. **fields/**
    - Individual field type classes
    - Field validation logic
    - Field rendering code
    - Field storage handling
3. **admin/**
    - Admin interface components
    - Settings pages
    - Field group management
    - Post type configuration
4. **api/**
    - Public API endpoints
    - Integration points
    - External access methods

## Loading Process

### 1. Plugin Initialization

- Load dependencies
- Set up autoloader
- Initialize core classes

### 2. WordPress Integration

- Register post types
- Add hooks and filters
- Set up admin menus

### 3. Feature Registration

- Register field types
- Set up API endpoints
- Initialize components

### 4. Admin Interface Setup

- Load admin scripts
- Set up field management
- Configure settings pages

## Data Flow

1. **Input Processing**
    - Form submission
    - API requests
    - AJAX calls
2. **Data Validation**
    - Type checking
    - Format validation
    - Security verification
3. **Storage**
    - WordPress post meta
    - Custom tables
    - Caching
4. **Output**
    - Template functions
    - REST API responses
    - Admin interface

---

# Security in Secure Custom Fields <a name="secure-custom-fields/concepts/security" />

Source: https://developer.wordpress.org/secure-custom-fields/concepts/security/

Security is a core principle of Secure Custom Fields. This guide explains our security practices and how to implement them in your projects.

## Core Security Principles

1. **Input Validation**
    - All user input is validated
    - Type checking enforced
    - Sanitization applied appropriately
2. **Output Escaping**
    - Context-aware escaping
    - HTML, attributes, and URLs handled separately
    - Custom escaping functions for specific needs
3. **Capability Checking**
    - Granular permission system
    - Role-based access control
    - Custom capability support

## Best Practices

When working with SCF:

1. Always use provided escaping functions
2. Check user capabilities before operations
3. Validate all data before saving
4. Use nonces for form submissions

---

# Contributing to SCF <a name="secure-custom-fields/contributing" />

Source: https://developer.wordpress.org/secure-custom-fields/contributing/

Guide for contributing to Secure Custom Fields development.

## Ways to Contribute

1. **Code Contributions**
    - Bug fixes
    - New features
    - Performance improvements
    - Security enhancements
2. **Documentation**
    - Writing tutorials
    - Improving reference docs
    - Fixing errors
    - Adding examples
3. **Testing**
    - Unit testing
    - Integration testing
    - Bug reporting
    - Feature validation

## Development Setup

1. Fork the repository
2. Set up local environment 
    - The local environment runs with WP env, for setup, see: https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/ along with prerequisites.
3. Install dependencies 
    - run `composer install`
    - build the plugin files (JS/CSS) via `npm run build`
4. Run test suite 
    - `composer run test`

## Contribution Guidelines

- Follow WordPress coding standards
- Write unit tests for new features
- Document all changes
- Keep pull requests focused

---

# Documentation Guidelines <a name="secure-custom-fields/contributing/documentation" />

Source: https://developer.wordpress.org/secure-custom-fields/contributing/documentation/

Guidelines for contributing to SCF documentation.

## Style Guide

We follow the [WordPress Documentation Style Guide](https://make.wordpress.org/docs/style-guide/):

1. **Voice and Tone**
    - Clear and concise
    - Professional but friendly
    - Internationally accessible
    - Gender-neutral language
2. **Formatting**
    - Use Markdown
    - Follow heading hierarchy
    - Include code examples
    - Use proper spacing
3. **Content Structure**
    - Start with overview
    - Include examples
    - Provide context
    - Link related topics

## Documentation Types

1. **User Documentation**
    - Installation guides
    - Usage instructions
    - UI explanations
    - Troubleshooting
2. **Developer Documentation**
    - API reference
    - Hook documentation
    - Integration guides
    - Security practices

---

# Features <a name="secure-custom-fields/features" />

Source: https://developer.wordpress.org/secure-custom-fields/features/

This section details all features available in Secure Custom Fields.

## Core Features

- [Post Types](post-types) – Create and manage custom post types
- [Fields](fields) – Available field types and their usage
- [API](api) – Programmatic access and integration

## Feature Categories

1. **Content Management**
    - Custom post types
    - Custom taxonomies
    - Field groups
2. **Field Types**
    - Basic fields (text, textarea, etc.)
    - Advanced fields (repeater, flexible content)
    - Special fields (relationship, clone)
3. **Developer Tools**
    - API endpoints
    - Hooks and filters
    - Helper functions

## Available Fields

- [Accordion](fields/accordion) – Group fields into collapsible sections
- [Button Group](fields/button-group) – Select one option from a group of buttons
- [Checkbox](fields/checkbox) – Select one or more choices
- [Clone](fields/clone) – Duplicate and reuse existing field configurations
- [Color Picker](fields/color-picker) – Choose colors with a visual picker
- [Date Picker](fields/date-picker) – Select dates from a calendar
- [Date/Time Picker](fields/date-time-picker) – Select dates and times
- [Email](fields/email) – Input and validate email addresses
- [File](fields/file) – Upload and manage files
- [Flexible Content](fields/flexible-content) – Create flexible content layouts
- [Gallery](fields/gallery) – Manage collections of images
- [Google Map](fields/google-map) – Add location data with Google Maps
- [Group](fields/group) – Group fields together
- [Icon Picker](fields/icon-picker) – Select from available icons
- [Image](fields/image) – Upload and manage images
- [Link](fields/link) – Create links with titles and targets
- [Message](fields/message) – Display instructional text
- [Number](fields/number) – Input numeric values
- [oEmbed](fields/oembed) – Embed external content
- [Page Link](fields/page-link) – Link to internal content
- [Password](fields/password) – Securely input passwords
- [Post Object](fields/post-object) – Relate to other posts
- [Radio](fields/radio) – Select one choice from options
- [Range](fields/range) – Select a numeric value with a slider

---

# Custom Post Types <a name="secure-custom-fields/features/post-types" />

Source: https://developer.wordpress.org/secure-custom-fields/features/post-types/

Learn how to create and manage custom post types with SCF.

## Creating Post Types

### Basic Usage

Create a custom post type through the admin interface:

1. Navigate to Custom Fields → Post Types
2. Click “Add New”
3. Configure basic settings
4. Save and publish

### Advanced Configuration

- **Capabilities**: Set custom capabilities for managing posts
- **REST API**: Enable and configure REST API support
- **Archive Pages**: Configure archive behavior and permalinks
- **Custom Permalinks**: Set up SEO-friendly URL structures

## Best Practices

1. Choose descriptive post type names
2. Configure proper labels for better UX
3. Plan taxonomy relationships
4. Consider permalink structure
5. Set appropriate capabilities

## Examples

Common use cases for custom post types:

- Products
- Team Members
- Portfolio Items
- Testimonials
- Events

---

# API Reference <a name="secure-custom-fields/features/scf-api" />

Source: https://developer.wordpress.org/secure-custom-fields/features/scf-api/

The Secure Custom Fields API provides programmatic access to field data and plugin functionality.

## Core Functions

### Field Operations

- Get field values
- Update field data
- Delete field content
- Check field existence

### Post Type Management

- Register post types
- Modify post type settings
- Handle custom capabilities
- Manage taxonomies

## Integration Points

1. **WordPress Core**
    - Post type registration
    - Taxonomy integration
    - Capability handling
2. **Theme Integration**
    - Template functions
    - Conditional tags
    - Layout helpers
3. **Plugin Compatibility**
    - REST API support
    - Cache integration
    - Query modifications

## Best Practices

1. Always sanitize input
2. Validate data types
3. Use proper escaping
4. Check capabilities
5. Follow WordPress coding standards

---

# Field Types <a name="secure-custom-fields/features/field" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/

Documentation for all available field types in Secure Custom Fields.

Each field type has its own documentation and tutorial showing how to implement and use it effectively.

## Available Fields

- [Accordion](accordion) – Group fields into collapsible sections
- [Button Group](button-group) – Select one option from a group of buttons
- [Checkbox](checkbox) – Select one or more choices
- [Clone](clone) – Duplicate and reuse existing field configurations
- [Color Picker](color-picker) – Choose colors with a visual picker
- [Date Picker](date-picker) – Select dates from a calendar
- [Date/Time Picker](date-time-picker) – Select dates and times
- [Email](email) – Input and validate email addresses
- [File](file) – Upload and manage files
- [Flexible Content](flexible-content) – Create flexible content layouts
- [Gallery](gallery) – Manage collections of images
- [Google Map](google-map) – Add location data with Google Maps
- [Group](group) – Group fields together
- [Icon Picker](icon-picker) – Select from available icons
- [Image](image) – Upload and manage images
- [Link](link) – Create links with titles and targets
- [Message](message) – Display instructional text
- [Number](number) – Input numeric values
- [oEmbed](oembed) – Embed external content
- [Page Link](page-link) – Link to internal content
- [Password](password) – Securely input passwords
- [Post Object](post-object) – Relate to other posts
- [Radio](radio) – Select one choice from options
- [Range](range) – Select a numeric value with a slider
- [Repeater](repeater) – Create repeatable groups of fields
- [Select](select) – Choose from dropdown options
- [Separator](separator) – Add visual breaks between fields
- [Tab](tab) – Organize fields into tabbed sections
- [Taxonomy](taxonomy) – Select taxonomy terms
- [Text](text) – Single line text input
- [Textarea](textarea) – Multi-line text input
- [Time Picker](time-picker) – Select time values
- [True/False](true-false) – Toggle switch for yes/no choices
- [URL](url) – Input and validate web addresses
- [User](user) – Select WordPress users
- [WYSIWYG](wysiwyg) – Rich text editor

---

# Repeater Field <a name="secure-custom-fields/features/field/repeater" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/repeater/

The Repeater field allows you to create a set of sub fields which can be repeated again and again.

## Key Features

- Flexible row management
- Multiple field types support
- Nested repeater capability
- Row reordering
- Min/max rows control

## Settings

- Sub Fields – Add fields to repeat
- Minimum Rows – Set required rows
- Maximum Rows – Limit total rows
- Layout – Table or block display
- Button Label – Customize add row text

---

# Using the Repeater Field <a name="secure-custom-fields/features/field/repeater/repeater-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/repeater/repeater-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Repeater field
3. Configure options: 
    - Add sub fields
    - Set min/max rows
    - Choose layout style
    - Configure labels

## Common Use Cases

1. Dynamic Content 
    - Social media links
    - Team members
    - Feature lists
2. Content Management 
    - Gallery items
    - Related links
    - Service offerings

## Tips

- Plan field structure carefully
- Consider nesting depth
- Use clear labels
- Set appropriate limits

---

# Select Field <a name="secure-custom-fields/features/field/select" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/select/

The Select field provides a dropdown interface for selecting single or multiple options from a predefined list.

## Key Features

- Single/multiple selection
- Custom choices
- Ajax loading support
- Placeholder text
- Conditional logic

## Settings

- Choices – Define available options
- Default Value – Set initial selection
- Allow Null – Make selection optional
- Multiple – Enable multiple selections
- UI – Enhanced select interface

---

# Using the Select Field <a name="secure-custom-fields/features/field/select/select-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/select/select-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Select field
3. Configure options: 
    - Add choice options
    - Set default value
    - Configure UI settings
    - Enable/disable features

## Common Use Cases

1. Option Selection 
    - Status choices
    - Category selection
    - Preference settings
2. Data Filtering 
    - View options
    - Content filtering
    - Display settings

## Tips

- Use clear option labels
- Consider grouping options
- Enable search for long lists
- Set meaningful defaults

---

# Separator Field <a name="secure-custom-fields/features/field/separator" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/separator/

The Separator field provides visual separation between fields in the editing interface. It helps organize and structure field layouts.

## Key Features

- Visual organization
- Custom styling
- Layout control
- Group separation
- Visual hierarchy

## Settings

- Label – Optional separator text
- Instructions – Field description
- Wrapper – CSS class options

---

# Using the Separator Field <a name="secure-custom-fields/features/field/separator/separator-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/separator/separator-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Separator field
3. Configure options: 
    - Set label text
    - Add instructions
    - Style wrapper
    - Position field

## Common Use Cases

1. Content Organization 
    - Section breaks
    - Field grouping
    - Visual hierarchy
2. Form Structure 
    - Content sections
    - Logical breaks
    - Visual spacing

## Tips

- Use clear labels
- Keep consistent styling
- Consider spacing
- Group related fields

---

# Tab Field <a name="secure-custom-fields/features/field/tab" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/tab/

The Tab field creates navigation tabs to organize fields into sections. It improves the editing interface by grouping related fields together.

## Key Features

- Field organization
- Visual navigation
- Grouped content
- Layout control
- Conditional display

## Settings

- Placement – Top/Left alignment
- Endpoint – Tab section end
- Label – Tab name
- Instructions – Optional help text

---

# Using the Tab Field <a name="secure-custom-fields/features/field/tab/tab-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/tab/tab-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Tab field
3. Configure options: 
    - Set tab label
    - Choose placement
    - Set endpoint
    - Add instructions

## Common Use Cases

1. Content Organization 
    - Content sections
    - Settings groups
    - Form organization
2. Interface Design 
    - Complex forms
    - Settings panels
    - Data grouping

## Tips

- Use clear tab labels
- Group related fields
- Consider tab order
- Plan section breaks

---

# Taxonomy Field <a name="secure-custom-fields/features/field/taxonomy" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/taxonomy/

The Taxonomy field creates an interface for selecting taxonomy terms. It supports multiple selection methods and term management.

## Key Features

- Term selection
- Multiple display types
- Term creation
- Hierarchical support
- Load on demand

## Settings

- Taxonomy – Choose taxonomy
- Appearance – Select UI style
- Allow Create – Enable term creation
- Load Terms – Auto-load options
- Save Terms – Term relationships

---

# Using the Taxonomy Field <a name="secure-custom-fields/features/field/taxonomy/taxonomy-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/taxonomy/taxonomy-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Taxonomy field
3. Configure options: 
    - Select taxonomy
    - Choose field type
    - Set load behavior
    - Configure saving

## Common Use Cases

1. Content Classification 
    - Categories
    - Tags
    - Custom taxonomies
2. Term Management 
    - Content organization
    - Filtering systems
    - Related content

## Tips

- Choose appropriate UI
- Consider term hierarchy
- Enable term creation
- Plan relationship structure

---

# Text Field <a name="secure-custom-fields/features/field/text" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/text/

The Text field provides a standard single-line text input with various formatting and validation options.

## Key Features

- Text input
- Character limits
- Placeholder text
- Prepend/append
- Custom formatting

## Settings

- Default Value – Preset text
- Placeholder – Input helper text
- Character Limit – Set max length
- Prepend – Text before input
- Append – Text after input

---

# Using the Text Field <a name="secure-custom-fields/features/field/text/text-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/text/text-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Text field
3. Configure options: 
    - Set placeholder
    - Add character limits
    - Configure formatting
    - Set default value

## Common Use Cases

1. Basic Information 
    - Titles
    - Names
    - Short descriptions
    - References
2. Form Elements 
    - Input fields
    - Search boxes
    - Labels
    - Identifiers

## Tips

- Use clear placeholders
- Set appropriate limits
- Consider validation
- Use meaningful defaults

---

# Textarea Field <a name="secure-custom-fields/features/field/textarea" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/textarea/

The Textarea field provides a multi-line text input for longer content with formatting options and character limits.

## Key Features

- Multi-line text input
- Character counting
- Rows configuration
- New line handling
- Placeholder support

## Settings

- Default Value – Preset content
- Placeholder – Helper text
- Character Limit – Max length
- Rows – Input height
- New Lines – Handling options

---

# Using the Textarea Field <a name="secure-custom-fields/features/field/textarea/textarea-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/textarea/textarea-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Textarea field
3. Configure options: 
    - Set rows
    - Add placeholder
    - Configure limits
    - Set line handling

## Common Use Cases

1. Long Text Content 
    - Descriptions
    - Biographies
    - Instructions
    - Notes
2. Content Management 
    - Excerpts
    - Summaries
    - Meta descriptions
    - Comments

## Tips

- Set appropriate height
- Consider word limits
- Use clear placeholders
- Plan for formatting

---

# Time Picker Field <a name="secure-custom-fields/features/field/time-picker" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/time-picker/

The Time Picker field provides an interface for selecting time values with customizable display and increment options.

## Key Features

- Time selection
- Format options
- Step intervals
- Range limits
- Display customization

## Settings

- Display Format – Time format
- Return Format – Data format
- Time Increment – Minute steps
- Placeholder – Helper text
- Default Value – Preset time

---

# Using the Time Picker Field <a name="secure-custom-fields/features/field/time-picker/time-picker-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/time-picker/time-picker-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Time Picker field
3. Configure options: 
    - Set time format
    - Choose increment
    - Set default time
    - Configure display

## Common Use Cases

1. Schedule Management 
    - Event times
    - Opening hours
    - Appointment slots
2. Time Settings 
    - Scheduling
    - Time restrictions
    - Operating hours

## Tips

- Use consistent formats
- Set appropriate steps
- Consider time zones
- Plan for validation

---

# True/False Field <a name="secure-custom-fields/features/field/true-false" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/true-false/

The True/False field provides a simple toggle switch for boolean values. It offers a clean interface for yes/no choices.

## Key Features

- Toggle interface
- Custom labels
- Default state
- Message display
- UI customization

## Settings

- Message – Field description
- Default Value – Initial state
- On Text – Custom label
- Off Text – Custom label
- UI – Style options

---

# Using the True/False Field <a name="secure-custom-fields/features/field/true-false/true-false-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/true-false/true-false-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a True/False field
3. Configure options: 
    - Set message
    - Choose default
    - Configure labels
    - Style interface

## Common Use Cases

1. Simple Toggles 
    - Feature flags
    - Display options
    - Status switches
2. Settings Control 
    - Visibility settings
    - Enable/disable
    - Option toggles

## Tips

- Use clear labels
- Set logical defaults
- Consider UI placement
- Plan conditional logic

---

# URL Field <a name="secure-custom-fields/features/field/url" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/url/

The URL field provides input for web addresses with validation and formatting options. It ensures proper URL format and structure.

## Key Features

- URL validation
- Protocol handling
- Placeholder text
- Custom formatting
- Link preview

## Settings

- Default Value – Preset URL
- Placeholder – Helper text
- Protocol – Required/optional
- Return Format – URL structure

---

# Using the URL Field <a name="secure-custom-fields/features/field/url/url-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/url/url-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a URL field
3. Configure options: 
    - Set placeholder
    - Configure protocol
    - Set validation
    - Choose format

## Common Use Cases

1. Web Links 
    - Website URLs
    - Social profiles
    - Resource links
2. Reference Links 
    - Documentation
    - External content
    - Media sources

## Tips

- Validate URLs properly
- Consider protocols
- Use clear placeholders
- Check link validity

---

# User Field <a name="secure-custom-fields/features/field/user" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/user/

The User field creates an interface for selecting WordPress users. It supports multiple selection methods and user filtering.

## Key Features

- User selection
- Role filtering
- Multiple formats
- Search capability
- Multiple selection

## Settings

- Roles – Filter by role
- Allow Null – Optional selection
- Multiple – Enable multiple
- Return Format – Object/ID/Array
- Filter – User query args

---

# Using the User Field <a name="secure-custom-fields/features/field/user/user-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/user/user-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a User field
3. Configure options: 
    - Select roles
    - Set return format
    - Configure multiple
    - Set filters

## Common Use Cases

1. User Assignment 
    - Author selection
    - Team members
    - User permissions
2. User Relations 
    - Content ownership
    - User groups
    - Access control

## Tips

- Filter appropriate roles
- Consider permissions
- Use clear search
- Plan user structure

---

# WYSIWYG Field <a name="secure-custom-fields/features/field/wysiwyg" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/wysiwyg/

The WYSIWYG (What You See Is What You Get) field provides a rich text editor with formatting tools and media integration.

## Key Features

- Rich text editing
- Media integration
- Toolbar customization
- HTML handling
- Editor styles

## Settings

- Toolbar – Editor tools
- Media Upload – Enable/disable
- Tabs – Visual/Text tabs
- Height – Editor height
- Default Value – Initial content

---

# Using the WYSIWYG Field <a name="secure-custom-fields/features/field/wysiwyg/wysiwyg-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/features/field/wysiwyg/wysiwyg-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a WYSIWYG field
3. Configure options: 
    - Choose toolbar
    - Set media options
    - Configure height
    - Set defaults

## Common Use Cases

1. Rich Content 
    - Post content
    - Product descriptions
    - Page sections
2. Formatted Text 
    - Documentation
    - Guidelines
    - Formatted messages

## Tips

- Configure appropriate tools
- Consider media handling
- Plan content structure
- Set consistent styling

---

# Tutorials <a name="secure-custom-fields/tutorials" />

Source: https://developer.wordpress.org/secure-custom-fields/tutorials/

Step-by-step guides for working with Secure Custom Fields.

## Getting Started

- [Creating Your First Post Type](first-post-type) – Basic post type setup
- [Field Group Basics](field-group-basics) – Creating and configuring field groups
- [Working with Fields](working-with-fields) – Using different field types

## Advanced Topics

- Custom Field Validation
- Complex Layouts with Flexible Content
- Advanced Post Type Configuration
- REST API Integration

## Best Practices

Each tutorial follows these principles:

- Clear step-by-step instructions
- Practical examples
- Security considerations
- Performance optimization tips

---

# Creating Your First Post Type <a name="secure-custom-fields/tutorials/first-post-type" />

Source: https://developer.wordpress.org/secure-custom-fields/tutorials/first-post-type/

A step-by-step guide to creating a custom post type using Secure Custom Fields.

## Prerequisites

- SCF installed and activated
- Administrator access to WordPress
- Basic understanding of WordPress concepts

## Steps

1. **Access the Admin Panel**
    - Navigate to Custom Fields → Post Types
    - Click “Add New”
2. **Basic Configuration**
    - Enter a descriptive name
    - Configure labels
    - Set visibility options
3. **Advanced Settings**
    - Configure permalinks
    - Set up taxonomies
    - Define capabilities
4. **Testing**
    - Save your post type
    - Create a test post
    - View on front end

## Next Steps

- Add custom fields to your post type
- Configure archive displays
- Set up custom taxonomies

---

# Code Reference <a name="secure-custom-fields/code-reference" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/

## Files

- [Acf Bidirectional Functions](acf-bidirectional-functions-file)
- [Acf Field Functions](acf-field-functions-file)
- [Acf Field Group Functions](acf-field-group-functions-file)
- [Acf Form Functions](acf-form-functions-file)
- [Acf Helper Functions](acf-helper-functions-file)
- [Acf Hook Functions](acf-hook-functions-file)
- [Acf Input Functions](acf-input-functions-file)
- [Acf Internal Post Type Functions](acf-internal-post-type-functions-file)
- [Acf Meta Functions](acf-meta-functions-file)
- [Acf Post Functions](acf-post-functions-file)
- [Acf Post Type Functions](acf-post-type-functions-file)
- [Acf Taxonomy Functions](acf-taxonomy-functions-file)
- [Acf User Functions](acf-user-functions-file)
- [Acf Utility Functions](acf-utility-functions-file)
- [Acf Value Functions](acf-value-functions-file)
- [Acf Wp Functions](acf-wp-functions-file)
- [Assets](assets-file)
- [Blocks](blocks-file)
- [Compatibility](compatibility-file)
- [Deprecated](deprecated-file)
- [Fields](fields-file)
- [L10n](l10n-file)
- [Local Fields](local-fields-file)
- [Local Json](local-json-file)
- [Local Meta](local-meta-file)
- [Locations](locations-file)
- [Loop](loop-file)
- [Revisions](revisions-file)
- [Scf Ui Options Page Functions](scf-ui-options-page-functions-file)
- [Upgrades](upgrades-file)
- [Validation](validation-file)

---

# Api <a name="secure-custom-fields/code-reference/api" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/api/

## Files

- [Api Helpers](api-helpers-file)
- [Api Template](api-template-file)
- [Api Term](api-term-file)

---

# API Helpers Global Functions <a name="secure-custom-fields/code-reference/api/api-helpers-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/api/api-helpers-file/

## `acf_is_array()`

This function will return true for a non empty array

- @since ACF 5.4.0
- @param mixed $array The variable to test.
- @return boolean

## `acf_has_setting()`

Alias of acf()-&gt;has\_setting()

- @since ACF 5.6.5
- @param string $name Name of the setting to check for.
- @return boolean

## `acf_raw_setting()`

acf\_raw\_setting

- alias of acf()-&gt;get\_setting()
- @since ACF 5.6.5
- @param n/a
- @return n/a

## `acf_update_setting()`

acf\_update\_setting

- alias of acf()-&gt;update\_setting()
- @since ACF 5.0.0
- @param $name (string)
- @param $value (mixed)
- @return n/a

## `acf_validate_setting()`

acf\_validate\_setting

- Returns the changed setting name if available.
- @since ACF 5.6.5
- @param n/a
- @return n/a

## `acf_get_setting()`

Alias of acf()-&gt;get\_setting()

- @since ACF 5.0.0
- @param string $name The name of the setting to test.
- @param string $value An optional default value for the setting if it doesn’t exist.
- @return n/a

## `acf_get_internal_post_types()`

Return an array of ACF’s internal post type names

- @since ACF 6.1
- @return array An array of ACF’s internal post type names

## `acf_append_setting()`

acf\_append\_setting

- This function will add a value into the settings array found in the acf object
- @since ACF 5.0.0
- @param $name (string)
- @param $value (mixed)
- @return n/a

## `acf_get_data()`

acf\_get\_data

- Returns data.
- @since ACF 5.0.0
- @param string $name
- @return mixed

## `acf_set_data()`

acf\_set\_data

- Sets data.
- @since ACF 5.0.0
- @param string $name
- @param mixed $value
- @return n/a

## `acf_append_data()`

Appends data to an existing key.

- @since ACF 5.9.0
- @param string $name The data name.
- @param mixed $data The data to append to name.

## `acf_init()`

Alias of acf()-&gt;[init()](#reference/functions/init) – the core ACF init function.

- @since ACF 5.0.0

## `acf_has_done()`

acf\_has\_done

- This function will return true if this action has already been done
- @since ACF 5.3.2
- @param $name (string)
- @return (boolean)

## `acf_get_external_path()`

This function will return the path to a file within an external folder

- @since ACF 5.5.8
- @param string $file Directory path.
- @param string $path Optional file path.
- @return string File path.

## `acf_get_external_dir()`

This function will return the url to a file within an internal ACF folder

- @since ACF 5.5.8
- @param string $file Directory path.
- @param string $path Optional file path.
- @return string File path.

## `acf_plugin_dir_url()`

This function will calculate the url to a plugin folder.  
Different to the WP [plugin\_dir\_url()](#reference/functions/plugin_dir_url) , this function can calculate for urls outside of the plugins folder (theme include).

- @since ACF 5.6.8
- @param string $file A file path inside the ACF plugin to get the plugin directory path from.
- @return string The plugin directory path.

## `acf_parse_args()`

This function will merge together 2 arrays and also convert any numeric values to ints

- @since ACF 5.0.0
- @param array $args The configured arguments array.
- @param array $defaults The default properties for the passed args to inherit.
- @return array $args Parsed arguments with defaults applied.

## `acf_parse_types()`

acf\_parse\_types

- This function will convert any numeric values to int and trim strings
- @since ACF 5.0.0
- @param $var (mixed)
- @return $var (mixed)

## `acf_parse_type()`

acf\_parse\_type

- description
- @since ACF 5.0.9
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_get_view()`

This function will load in a file from the ‘admin/views’ folder and allow variables to be passed through

- @since ACF 5.0.0
- @param string $view\_path
- @param array $view\_args

## `acf_merge_atts()`

acf\_merge\_atts

- description
- @since ACF 5.0.9
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_nonce_input()`

This function will create and echo a basic nonce input

- @since ACF 5.6.0
- @param string $nonce The nonce parameter string.

## `acf_extract_var()`

This function will remove the var from the array, and return the var

- @since ACF 5.0.0
- @param array $extract\_array an array passed as reference to be extracted.
- @param string $key The key to extract from the array.
- @param mixed $default\_value The default value if it doesn’t exist in the extract array.
- @return mixed Extracted var or default.

## `acf_extract_vars()`

This function will remove the vars from the array, and return the vars

- @since ACF 5.0.0
- @param array $extract\_array an array passed as reference to be extracted.
- @param array $keys An array of keys to extract from the original array.
- @return array An array of extracted values.

## `acf_get_sub_array()`

acf\_get\_sub\_array

- This function will return a sub array of data
- @since ACF 5.3.2
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_get_post_types()`

Returns an array of post type names.

- @since ACF 5.0.0
- @param array $args Optional. An array of key =&gt; value arguments to match against the post type objects. Default empty array.
- @return array A list of post type names.

## `acf_get_post_stati()`

Function acf\_get\_post\_stati()

- Returns an array of post status names.
- @since ACF 6.1.0
- @param array $args Optional. An array of key =&gt; value arguments to match against the post status objects. Default empty array.
- @return array A list of post status names.

## `acf_get_pretty_post_statuses()`

Function acf\_get\_pretty\_post\_statuses()

- Returns a clean array of post status names.
- @since ACF 6.1.0
- @param array $post\_statuses Optional. An array of post status objects. Default empty array.
- @return array An array of post status names.

## `acf_get_post_type_label()`

acf\_get\_post\_type\_label

- This function will return a pretty label for a specific post\_type
- @since ACF 5.4.0
- @param $post\_type (string)
- @return (string)

## `acf_get_post_status_label()`

Function acf\_get\_post\_status\_label()

- This function will return a pretty label for a specific post\_status
- @since ACF 6.1.0
- @param string $post\_status The post status.
- @return string The post status label.

## `acf_verify_nonce()`

acf\_verify\_nonce

- This function will look at the $\_POST\[‘\_acf\_nonce’\] value and return true or false
- @since ACF 5.0.0
- @param $nonce (string)
- @return (boolean)

## `acf_verify_ajax()`

Returns true if the current AJAX request is valid.  
It’s action will also allow WPML to set the lang and avoid AJAX get\_posts issues

- @since ACF 5.2.3
- @param string $nonce The nonce to check.
- @param string $action The action of the nonce.
- @return boolean

## `acf_get_image_sizes()`

acf\_get\_image\_sizes

- This function will return an array of available image sizes
- @since ACF 5.0.0
- @param n/a
- @return (array)

## `acf_version_compare()`

acf\_version\_compare

- Similar to the version\_compare() function but with extra functionality.
- @since ACF 5.5.0
- @param string $left The left version number.
- @param string $compare The compare operator.
- @param string $right The right version number.
- @return boolean

## `acf_get_full_version()`

acf\_get\_full\_version

- This function will remove any ‘-beta1’ or ‘-RC1’ strings from a version
- @since ACF 5.5.0
- @param $version (string)
- @return (string)

## `acf_get_terms()`

acf\_get\_terms

- This function is a wrapper for the [get\_terms()](#reference/functions/get_terms) function
- @since ACF 5.4.0
- @param $args (array)
- @return (array)

## `acf_get_taxonomy_terms()`

acf\_get\_taxonomy\_terms

- This function will return an array of available taxonomy terms
- @since ACF 5.0.0
- @param $taxonomies (array)
- @return (array)

## `acf_decode_taxonomy_terms()`

acf\_decode\_taxonomy\_terms

- This function decodes the $taxonomy:$term strings into a nested array
- @since ACF 5.0.0
- @param $terms (array)
- @return (array)

## `acf_decode_taxonomy_term()`

acf\_decode\_taxonomy\_term

- This function will return the taxonomy and term slug for a given value
- @since ACF 5.0.0
- @param $string (string)
- @return (array)

## `acf_array()`

acf\_array

- Casts the value into an array.
- @since ACF 5.7.10
- @param mixed $val The value to cast.
- @return array

## `acf_unarray()`

Returns a non-array value.

- @since ACF 5.8.10
- @param mixed $val The value to review.
- @return mixed

## `acf_get_array()`

acf\_get\_array

- This function will force a variable to become an array
- @since ACF 5.0.0
- @param $var (mixed)
- @return (array)

## `acf_get_numeric()`

acf\_get\_numeric

- This function will return numeric values
- @since ACF 5.4.0
- @param $value (mixed)
- @return (mixed)

## `acf_get_posts()`

acf\_get\_posts

- Similar to the [get\_posts()](#reference/functions/get_posts) function but with extra functionality.
- @since ACF 5.1.5
- @param array $args The query args.
- @return array

## `_acf_query_remove_post_type()`

\_acf\_query\_remove\_post\_type

- This function will remove the ‘wp\_posts.post\_type’ WHERE clause completely  
    When using ‘post\_\_in’, this clause is unnecessary and slow.
- @since ACF 5.1.5
- @param $sql (string)
- @return $sql

## `acf_get_grouped_posts()`

acf\_get\_grouped\_posts

- This function will return all posts grouped by post\_type  
    This is handy for select settings
- @since ACF 5.0.0
- @param $args (array)
- @return (array)

## `_acf_orderby_post_type()`

The internal ACF function to add order by post types for use in `acf_get_grouped_posts`

- @param string $orderby The current orderby value for a query.
- @param object $wp\_query The [WP\_Query](#reference/classes/wp_query).
- @return string The potentially modified orderby string.

## `acf_get_pretty_user_roles()`

acf\_get\_pretty\_user\_roles

- description
- @since ACF 5.3.2
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_get_grouped_users()`

acf\_get\_grouped\_users

- This function will return all users grouped by role  
    This is handy for select settings
- @since ACF 5.0.0
- @param $args (array)
- @return (array)

## `acf_json_encode()`

acf\_json\_encode

- Returns json\_encode() ready for file / database use.
- @since ACF 5.0.0
- @param array $json The array of data to encode.
- @return string

## `acf_str_exists()`

acf\_str\_exists

- This function will return true if a sub string is found
- @since ACF 5.0.0
- @param $needle (string)
- @param $haystack (string)
- @return (boolean)

## `acf_debug()`

A legacy function designed for developer debugging.

- @deprecated 6.2.6 Removed for security, but keeping the definition in case third party devs have it in their code.
- @since ACF 5.0.0
- @return false

## `acf_debug_start()`

A legacy function designed for developer debugging.

- @deprecated 6.2.6 Removed for security, but keeping the definition in case third party devs have it in their code.
- @since ACF 5.0.0
- @return false

## `acf_debug_end()`

A legacy function designed for developer debugging.

- @deprecated 6.2.6 Removed for security, but keeping the definition in case third party devs have it in their code.
- @since ACF 5.0.0
- @return false

## `acf_encode_choices()`

acf\_encode\_choices

- description
- @since ACF 5.0.0
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_str_replace()`

acf\_str\_replace

- This function will replace an array of strings much like str\_replace  
    The difference is the extra logic to avoid replacing a string that has already been replaced  
    This is very useful for replacing date characters as they overlap with each other
- @since ACF 5.3.8
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_split_date_time()`

acf\_split\_date\_time

- This function will split a format string into separate date and time
- @since ACF 5.3.8
- @param $date\_time (string)
- @return $formats (array)

## `acf_convert_date_to_php()`

acf\_convert\_date\_to\_php

- This function converts a date format string from JS to PHP
- @since ACF 5.0.0
- @param $date (string)
- @return (string)

## `acf_convert_date_to_js()`

acf\_convert\_date\_to\_js

- This function converts a date format string from PHP to JS
- @since ACF 5.0.0
- @param $date (string)
- @return (string)

## `acf_convert_time_to_php()`

acf\_convert\_time\_to\_php

- This function converts a time format string from JS to PHP
- @since ACF 5.0.0
- @param $time (string)
- @return (string)

## `acf_convert_time_to_js()`

acf\_convert\_time\_to\_js

- This function converts a date format string from PHP to JS
- @since ACF 5.0.0
- @param $time (string)
- @return (string)

## `acf_update_user_setting()`

acf\_update\_user\_setting

- description
- @since ACF 5.0.0
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_get_user_setting()`

acf\_get\_user\_setting

- description
- @since ACF 5.0.0
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_in_array()`

acf\_in\_array

- description
- @since ACF 5.0.0
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_get_valid_post_id()`

acf\_get\_valid\_post\_id

- This function will return a valid post\_id based on the current screen / parameter
- @since ACF 5.0.0
- @param $post\_id (mixed)
- @return $post\_id (mixed)

## `acf_get_post_id_info()`

acf\_get\_post\_id\_info

- This function will return the type and id for a given $post\_id string
- @since ACF 5.4.0
- @param $post\_id (mixed)
- @return $info (array)

## `acf_isset_termmeta()`

acf\_isset\_termmeta

- This function will return true if the termmeta table exists  
    [\#reference/functions/get\_term\_meta](#reference/functions/get_term_meta)
- @since ACF 5.4.0
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_upload_files()`

This function will walk through the $\_FILES data and upload each found.

- @since ACF 5.0.9
- @param array $ancestors An internal parameter, not required.

## `acf_upload_file()`

acf\_upload\_file

- This function will upload a $\_FILE
- @since ACF 5.0.9
- @param $uploaded\_file (array) array found from $\_FILE data
- @return $id (int) new attachment ID

## `acf_update_nested_array()`

acf\_update\_nested\_array

- This function will update a nested array value. Useful for modifying the $\_POST array
- @since ACF 5.0.9
- @param $array (array) target array to be updated
- @param $ancestors (array) array of keys to navigate through to find the child
- @param $value (mixed) The new value
- @return (boolean)

## `acf_is_screen()`

acf\_is\_screen

- This function will return true if all args are matched for the current screen
- @since ACF 5.1.5
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_is_acf_admin_screen()`

Check if we’re in an ACF admin screen

- @since ACF 6.2.2
- @return boolean Returns true if the current screen is an ACF admin screen.

## `acf_maybe_get()`

acf\_maybe\_get

- This function will return a var if it exists in an array
- @since ACF 5.1.5
- @param $array (array) the array to look within
- @param $key (key) the array key to look for. Nested values may be found using ‘/’
- @param $default (mixed) the value returned if not found
- @return $post\_id (int)

## `acf_get_attachment()`

Returns an array of attachment data.

- @since ACF 5.1.5
- @param integer|[WP\_Post](#reference/classes/wp_post) The attachment ID or object
- @return array|false

## `acf_get_truncated()`

This function will truncate and return a string

- @since ACF 5.0.0
- @param string $text The text to truncate.
- @param integer $length The number of characters to allow in the string.
- @return string

## `acf_current_user_can_admin()`

acf\_current\_user\_can\_admin

- This function will return true if the current user can administrate the ACF field groups
- @since ACF 5.1.5
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_current_user_can_edit_post()`

Wrapper function for current\_user\_can( ‘edit\_post’, $post\_id ).

- @since ACF 6.3.4
- @param integer $post\_id The post ID to check.
- @return boolean

## `acf_get_filesize()`

acf\_get\_filesize

- This function will return a numeric value of bytes for a given filesize string
- @since ACF 5.1.5
- @param $size (mixed)
- @return (int)

## `acf_format_filesize()`

acf\_format\_filesize

- This function will return a formatted string containing the filesize and unit
- @since ACF 5.1.5
- @param $size (mixed)
- @return (int)

## `acf_get_valid_terms()`

acf\_get\_valid\_terms

- This function will replace old terms with new split term ids
- @since ACF 5.1.5
- @param $terms (int|array)
- @param $taxonomy (string)
- @return $terms

## `acf_validate_attachment()`

acf\_validate\_attachment

- This function will validate an attachment based on a field’s restrictions and return an array of errors
- @since ACF 5.2.3
- @param $attachment (array) attachment data. Changes based on context
- @param $field (array) field settings containing restrictions
- @param context (string) $file is different when uploading / preparing
- @return $errors (array)

## `acf_translate()`

acf\_translate

- This function will translate a string using the new ‘l10n\_textdomain’ setting  
    Also works for arrays which is great for fields – select -&gt; choices
- @since ACF 5.3.2
- @param mixed $string String or array containing strings to be translated.
- @return mixed

## `acf_maybe_add_action()`

acf\_maybe\_add\_action

- This function will determine if the action has already run before adding / calling the function
- @since ACF 5.3.2
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_is_row_collapsed()`

acf\_is\_row\_collapsed

- This function will return true if the field’s row is collapsed
- @since ACF 5.3.2
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_get_attachment_image()`

Return an image tag for the provided attachment ID

- @since ACF 5.5.0
- @deprecated 6.3.2
- @param integer $attachment\_id The attachment ID
- @param string $size The image size to use in the image tag.
- @return false

## `acf_get_post_thumbnail()`

acf\_get\_post\_thumbnail

- This function will return a thumbnail image url for a given post
- @since ACF 5.3.8
- @param $post (obj)
- @param $size (mixed)
- @return (string)

## `acf_get_browser()`

acf\_get\_browser

- Returns the name of the current browser.
- @since ACF 5.0.0
- @return string

## `acf_is_ajax()`

acf\_is\_ajax

- This function will return true if performing a wp ajax call
- @since ACF 5.3.8
- @param n/a
- @return (boolean)

## `acf_format_date()`

Returns a date value in a formatted string.

- @since ACF 5.3.8
- @param string $value The date value to format.
- @param string $format The format to use.
- @return string

## `acf_clear_log()`

Previously, deletes the debug.log file.

- @since ACF 5.7.10
- @deprecated 6.2.7

## `acf_log()`

acf\_log

- description
- @since ACF 5.3.8
- @param $post\_id (int)
- @return $post\_id (int)

## `acf_dev_log()`

acf\_dev\_log

- Used to log variables only if ACF\_DEV is defined
- @since ACF 5.7.4
- @param mixed
- @return void

## `acf_doing()`

acf\_doing

- This function will tell ACF what task it is doing
- @since ACF 5.3.8
- @param $event (string)
- @param context (string)
- @return n/a

## `acf_is_doing()`

acf\_is\_doing

- This function can be used to state what ACF is doing, or to check
- @since ACF 5.3.8
- @param $event (string)
- @param context (string)
- @return (boolean)

## `acf_is_plugin_active()`

acf\_is\_plugin\_active

- This function will return true if the ACF plugin is active
- May be included within a theme or other plugin
- @since ACF 5.4.0
- @param $basename (int)
- @return $post\_id (int)

## `acf_send_ajax_results()`

acf\_send\_ajax\_results

- This function will print JSON data for a Select2 AJAX query
- @since ACF 5.4.0
- @param $response (array)
- @return n/a

## `acf_is_sequential_array()`

acf\_is\_sequential\_array

- This function will return true if the array contains only numeric keys
- @source <http://stackoverflow.com/questions/173400/how-to-check-if-php-array-is-associative-or-sequential>
- @since ACF 5.4.0
- @param $array (array)
- @return (boolean)

## `acf_is_associative_array()`

acf\_is\_associative\_array

- This function will return true if the array contains one or more string keys
- @source <http://stackoverflow.com/questions/173400/how-to-check-if-php-array-is-associative-or-sequential>
- @since ACF 5.4.0
- @param $array (array)
- @return (boolean)

## `acf_add_array_key_prefix()`

acf\_add\_array\_key\_prefix

- This function will add a prefix to all array keys  
    Useful to preserve numeric keys when performing array\_multisort
- @since ACF 5.4.0
- @param $array (array)
- @param $prefix (string)
- @return (array)

## `acf_remove_array_key_prefix()`

acf\_remove\_array\_key\_prefix

- This function will remove a prefix to all array keys  
    Useful to preserve numeric keys when performing array\_multisort
- @since ACF 5.4.0
- @param $array (array)
- @param $prefix (string)
- @return (array)

## `acf_connect_attachment_to_post()`

This function will connect an attachment (image etc) to the post  
Used to connect attachments uploaded directly to media that have not been attached to a post

- @since ACF 5.8.0 Added filter to prevent connection.
- @since ACF 5.5.4
- @param integer $attachment\_id The attachment ID.
- @param integer $post\_id The post ID.
- @return boolean True if attachment was connected.

## `acf_encrypt()`

acf\_encrypt

- This function will encrypt a string using PHP  
    [https://bhoover.com/using-php-openssl\_encrypt-openssl\_decrypt-encrypt-decrypt-data/](https://bhoover.com/using-php-openssl_encrypt-openssl_decrypt-encrypt-decrypt-data/)
- @since ACF 5.5.8
- @param $data (string)
- @return (string)

## `acf_decrypt()`

acf\_decrypt

- This function will decrypt an encrypted string using PHP  
    [https://bhoover.com/using-php-openssl\_encrypt-openssl\_decrypt-encrypt-decrypt-data/](https://bhoover.com/using-php-openssl_encrypt-openssl_decrypt-encrypt-decrypt-data/)
- @since ACF 5.5.8
- @param $data (string)
- @return (string)

## `acf_parse_markdown()`

acf\_parse\_markdown

- A very basic regex-based Markdown parser function based off [slimdown](https://gist.github.com/jbroadway/2836900).
- @since ACF 5.7.2
- @param string $text The string to parse.
- @return string

## `acf_get_sites()`

acf\_get\_sites

- Returns an array of sites for a network.
- @since ACF 5.4.0
- @return array

## `acf_convert_rules_to_groups()`

acf\_convert\_rules\_to\_groups

- Converts an array of rules from ACF4 to an array of groups for ACF5
- @since ACF 5.7.4
- @param array $rules An array of rules.
- @param string $anyorall The anyorall setting used in ACF4. Defaults to ‘any’.
- @return array

## `acf_register_ajax()`

acf\_register\_ajax

- Registers an ajax callback.
- @since ACF 5.7.7
- @param string $name The ajax action name.
- @param array $callback The callback function or array.
- @param boolean $public Whether to allow access to non logged in users.
- @return void

## `acf_str_camel_case()`

acf\_str\_camel\_case

- Converts a string into camelCase.  
    Thanks to <https://stackoverflow.com/questions/31274782/convert-array-keys-from-underscore-case-to-camelcase-recursively>
- @since ACF 5.8.0
- @param string $string The string ot convert.
- @return string

## `acf_array_camel_case()`

acf\_array\_camel\_case

- Converts all array keys to camelCase.
- @since ACF 5.8.0
- @param array $array The array to convert.
- @return array

## `acf_is_block_editor()`

Returns true if the current screen is using the block editor.

- @since ACF 5.8.0
- @return boolean

## `acf_get_wp_reserved_terms()`

Return an array of the WordPress reserved terms

- @since ACF 6.1
- @return array The WordPress reserved terms list.

## `acf_is_multisite_sub_site()`

Detect if we’re on a multisite subsite.

- @since ACF 6.2.4
- @return boolean true if we’re in a multisite install and not on the main site

## `acf_is_multisite_main_site()`

Detect if we’re on a multisite main site.

- @since ACF 6.2.4
- @return boolean true if we’re in a multisite install and on the main site

---

---

# API Template Global Functions <a name="secure-custom-fields/code-reference/api/api-template-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/api/api-template-file/

## `get_field()`

This function will return a custom field value for a specific field name/key + post\_id.  
There is a 3rd parameter to turn on/off formatting. This means that an image field will not use  
its ‘return option’ to format the value but return only what was saved in the database

- @since ACF 3.6
- @param string $selector The field name or key.
- @param mixed $post\_id The post\_id of which the value is saved against.
- @param boolean $format\_value Whether or not to format the value as described above.
- @param boolean $escape\_html If we’re formatting the value, make sure it’s also HTML safe.
- @return mixed

## `the_field()`

This function is the same as echo get\_field(), but will escape the value for safe HTML output regardless of parameters.

- @since ACF 1.0.3
- @param string $selector The field name or key.
- @param mixed $post\_id The post\_id of which the value is saved against.
- @param boolean $format\_value Enable formatting of value. Default true.
- @return void

## `_acf_log_escaped_html()`

Logs instances of ACF successfully escaping unsafe HTML.

- @since ACF 6.2.5
- @param string $function The function that resulted in HTML being escaped.
- @param string $selector The selector (field key, name, etc.) passed to that function.
- @param array $field The field being queried when HTML was escaped.
- @param mixed $post\_id The post ID the function was called on.
- @return void

## `_acf_get_escaped_html_log()`

Returns an array of instances where HTML was altered due to escaping in the\_field or a shortcode.

- @since ACF 6.2.5
- @return array

## `_acf_update_escaped_html_log()`

Updates the array of instances where HTML was altered due to escaping in the\_field or a shortcode.

- @since ACF 6.2.5
- @param array $escaped The array of instances.
- @return boolean True on success, or false on failure.

## `_acf_delete_escaped_html_log()`

Deletes the array of instances where HTML was altered due to escaping in the\_field or a shortcode.  
Since ACF 6.2.7, also clears the legacy `acf_will_escape_html_log` option to clean up.

- @since ACF 6.2.5
- @return boolean True on success, or false on failure.

## `get_field_object()`

This function will return an array containing all the field data for a given field\_name.

- @since ACF 3.6
- @param string $selector The field name or key.
- @param mixed $post\_id The post\_id of which the value is saved against.
- @param boolean $format\_value Whether to format the field value.
- @param boolean $load\_value Whether to load the field value.
- @param boolean $escape\_html Should the field return a HTML safe formatted value if $format\_value is true.
- @return array|false $field

## `acf_maybe_get_field()`

This function will return a field for the given selector.  
It will also review the field\_reference to ensure the correct field is returned which makes it useful for the template API

- @since ACF 5.2.3
- @param $selector (mixed) identifier of field. Can be an ID, key, name or post object
- @param $post\_id (mixed) the post\_id of which the value is saved against
- @param $strict (boolean) if true, return a field only when a field key is found.
- @return $field (array)

## `acf_maybe_get_sub_field()`

This function will attempt to find a sub field

- @since ACF 5.4.0
- @param $post\_id (int)
- @return $post\_id (int)

## `get_fields()`

This function will return an array containing all the custom field values for a specific post\_id.  
The function is not very elegant and wastes a lot of PHP memory / SQL queries if you are not using all the values.

- @since ACF 3.6
- @param mixed $post\_id The post\_id of which the value is saved against.
- @param boolean $format\_value Whether or not to format the field value.
- @param boolean $escape\_html Should the field return a HTML safe formatted value if $format\_value is true.
- @return array|false Associative array where field name =&gt; field value, or false on failure.

## `get_field_objects()`

This function will return an array containing all the custom field objects for a specific post\_id.  
The function is not very elegant and wastes a lot of PHP memory / SQL queries if you are not using all the fields / values.

- @since ACF 3.6
- @param mixed $post\_id The post\_id of which the value is saved against.
- @param boolean $format\_value Whether or not to format the field value.
- @param boolean $load\_value Whether or not to load the field value.
- @param boolean $escape\_html Should the field return a HTML safe formatted value if $format\_value is true.
- @return array|false Associative array where field name =&gt; field, or false on failure.

## `have_rows()`

Checks if a field (such as Repeater or Flexible Content) has any rows of data to loop over.  
This function is intended to be used in conjunction with the\_row() to step through available values.

- @since ACF 4.3.0
- @param string $selector The field name or field key.
- @param mixed $post\_id The post ID where the value is saved. Defaults to the current post.
- @return boolean

## `the_row()`

This function will progress the global repeater or flexible content value 1 row

- @since ACF 4.3.0
- @param N/A
- @return (array) the current row data

## `get_row_sub_field()`

This function is used inside a ‘has\_sub\_field’ while loop to return a sub field object

- @since ACF 5.3.8
- @param $selector (string)
- @return (array)

## `get_row_sub_value()`

This function is used inside a ‘has\_sub\_field’ while loop to return a sub field value

- @since ACF 5.3.8
- @param $selector (string)
- @return (mixed)

## `reset_rows()`

This function will find the current loop and unset it from the global array.  
To be used when loop finishes or a break is used

- @since ACF 5.0.0
- @param $hard\_reset (boolean) completely wipe the global variable, or just unset the active row
- @return (boolean)

## `has_sub_field()`

This function is used inside a while loop to return either true or false (loop again or stop).  
When using a repeater or flexible content field, it will loop through the rows until  
there are none left or a break is detected

- @since ACF 1.0.3
- @param $field\_name (string) the field name
- @param $post\_id (mixed) the post\_id of which the value is saved against
- @return (boolean)

## `has_sub_fields()`

Alias of has\_sub\_field

## `get_sub_field()`

This function is used inside a ‘has\_sub\_field’ while loop to return a sub field value

- @since ACF 1.0.3
- @param string $selector The field name or key.
- @param boolean $format\_value Whether or not to format the value as described above.
- @param boolean $escape\_html If we’re formatting the value, make sure it’s also HTML safe.
- @return mixed

## `the_sub_field()`

This function is the same as echo get\_sub\_field(), but will escape the value for safe HTML output.

- @since ACF 1.0.3
- @param string $field\_name The field name.
- @param boolean $format\_value Enable formatting of value. When false, the field value will be escaped at this level with `acf_esc_html`. Default true.
- @return void

## `get_sub_field_object()`

This function is used inside a ‘has\_sub\_field’ while loop to return a sub field object

- @since ACF 3.5.8.1
- @param string $selector The field name or key.
- @param boolean $format\_value Whether to format the field value.
- @param boolean $load\_value Whether to load the field value.
- @param boolean $escape\_html Should the field return a HTML safe formatted value.
- @return mixed

## `get_row_layout()`

This function will return a string representation of the current row layout within a ‘have\_rows’ loop

- @since ACF 3.0.6
- @return mixed

## `acf_shortcode()`

This function is used to add basic shortcode support for the ACF plugin  
eg. \[acf field=”heading” post\_id=”123″ format\_value=”1″\]

- @since ACF 1.1.1
- @param array $atts The shortcode attributes.
- @return string|void

## `update_field()`

This function will update a value in the database

- @since ACF 3.1.9
- @param string $selector The field name or key.
- @param mixed $value The value to save in the database.
- @param mixed $post\_id The post\_id of which the value is saved against.
- @return boolean

## `update_sub_field()`

This function will update a value of a sub field in the database

- @since ACF 5.0.0
- @param $selector (mixed) the sub field name or key, or an array of ancestors
- @param $value (mixed) the value to save in the database
- @param $post\_id (mixed) the post\_id of which the value is saved against
- @return boolean

## `delete_field()`

This function will remove a value from the database

- @since ACF 3.1.9
- @param $selector (string) the field name or key
- @param $post\_id (mixed) the post\_id of which the value is saved against
- @return boolean

## `delete_sub_field()`

This function will delete a value of a sub field in the database

- @since ACF 5.0.0
- @param $selector (mixed) the sub field name or key, or an array of ancestors
- @param $value (mixed) the value to save in the database
- @param $post\_id (mixed) the post\_id of which the value is saved against
- @return (boolean)

## `add_row()`

This function will add a row of data to a field

- @since ACF 5.2.3
- @param $selector (string)
- @param $row (array)
- @param $post\_id (mixed)
- @return (boolean)

## `add_sub_row()`

This function will add a row of data to a field

- @since ACF 5.2.3
- @param $selector (string)
- @param $row (array)
- @param $post\_id (mixed)
- @return (boolean)

## `update_row()`

This function will update a row of data to a field

- @since ACF 5.2.3
- @param $selector (string)
- @param $i (int)
- @param $row (array)
- @param $post\_id (mixed)
- @return (boolean)

## `update_sub_row()`

This function will add a row of data to a field

- @since ACF 5.2.3
- @param $selector (string)
- @param $row (array)
- @param $post\_id (mixed)
- @return (boolean)

## `delete_row()`

This function will delete a row of data from a field

- @since ACF 5.2.3
- @param $selector (string)
- @param $i (int)
- @param $post\_id (mixed)
- @return (boolean)

## `delete_sub_row()`

This function will add a row of data to a field

- @since ACF 5.2.3
- @param $selector (string)
- @param $row (array)
- @param $post\_id (mixed)
- @return (boolean)

## `create_field()`

Deprecated Functions

- These functions are outdated
- @since ACF 1.0.0
- @param n/a
- @return n/a

---

---

# API Term Global Functions <a name="secure-custom-fields/code-reference/api/api-term-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/api/api-term-file/

## `acf_get_taxonomies()`

Returns an array of taxonomy names.

- @date 7/10/13
- @since ACF 5.0.0
- @param array $args An array of args used in the [get\_taxonomies()](#reference/functions/get_taxonomies) function.
- @return array An array of taxonomy names.

## `acf_get_taxonomies_for_post_type()`

acf\_get\_taxonomies\_for\_post\_type

- Returns an array of taxonomies for a given post type(s)
- @date 7/9/18
- @since ACF 5.7.5
- @param string|array $post\_types The post types to compare against.
- @return array

## `acf_get_taxonomy_labels()`

Returns an array of taxonomies in the format “name =&gt; label” for use in a select field.

- @date 3/8/18
- @since ACF 5.7.2
- @param array $taxonomies Optional. An array of specific taxonomies to return.
- @return array

## `acf_get_term_title()`

acf\_get\_term\_title

- Returns the title for this term object.
- @date 10/9/18
- @since ACF 5.0.0
- @param object $term The [WP\_Term](#reference/classes/wp_term) object.
- @return string

## `acf_get_grouped_terms()`

acf\_get\_grouped\_terms

- Returns an array of terms for the given query $args and groups by taxonomy name.
- @date 2/8/18
- @since ACF 5.7.2
- @param array $args An array of args used in the [get\_terms()](#reference/functions/get_terms) function.
- @return array

## `_acf_terms_clauses()`

\_acf\_terms\_clauses

- Used in the ‘terms\_clauses’ filter to order terms by taxonomy name.
- @date 2/8/18
- @since ACF 5.7.2
- @param array $pieces Terms query SQL clauses.
- @param array $taxonomies An array of taxonomies.
- @param array $args An array of terms query arguments.
- @return array $pieces

## `acf_get_pretty_taxonomies()`

acf\_get\_pretty\_taxonomies

- Deprecated in favor of acf\_get\_taxonomy\_labels() function.
- @date 7/10/13
- @since ACF 5.0.0
- @deprecated 5.7.2

## `acf_get_term()`

acf\_get\_term

- Similar to [get\_term()](#reference/functions/get_term) but with some extra functionality.
- @date 19/8/18
- @since ACF 5.7.3
- @param mixed $term\_id The term ID or a string of “taxonomy:slug”.
- @param string $taxonomy The taxonomyname.
- @return [WP\_Term](#reference/classes/wp_term)

## `acf_encode_term()`

acf\_encode\_term

- Returns a “taxonomy:slug” string for a given [WP\_Term](#reference/classes/wp_term).
- @date 27/8/18
- @since ACF 5.7.4
- @param [WP\_Term](#reference/classes/wp_term) $term The term object.
- @return string

## `acf_decode_term()`

acf\_decode\_term

- Decodes a “taxonomy:slug” string into an array of taxonomy and slug.
- @date 27/8/18
- @since ACF 5.7.4
- @param [WP\_Term](#reference/classes/wp_term) $term The term object.
- @return string

## `acf_get_encoded_terms()`

acf\_get\_encoded\_terms

- Returns an array of [WP\_Term](#reference/classes/wp_term) objects from an array of encoded strings
- @date 9/9/18
- @since ACF 5.7.5
- @param array $values The array of encoded strings.
- @return array

## `acf_get_choices_from_terms()`

acf\_get\_choices\_from\_terms

- Returns an array of choices from the terms provided.
- @date 8/9/18
- @since ACF 5.7.5
- @param array $values and array of WP\_Terms objects or encoded strings.
- @param string $format The value format (term\_id, slug).
- @return array

## `acf_get_choices_from_grouped_terms()`

acf\_get\_choices\_from\_grouped\_terms

- Returns an array of choices from the grouped terms provided.
- @date 8/9/18
- @since ACF 5.7.5
- @param array $value A grouped array of WP\_Terms objects.
- @param string $format The value format (term\_id, slug).
- @return array

## `acf_get_choice_from_term()`

acf\_get\_choice\_from\_term

- Returns an array containing the id and text for this item.
- @date 10/9/18
- @since ACF 5.7.6
- @param object $item The item object such as [WP\_Post](#reference/classes/wp_post) or [WP\_Term](#reference/classes/wp_term).
- @param string $format The value format (term\_id, slug)
- @return array

## `acf_get_term_post_id()`

Returns a valid post\_id string for a given term and taxonomy.  
No longer needed since WP introduced the termmeta table in WP 4.4.

- @date 6/2/17
- @since ACF 5.5.6
- @deprecated 5.9.2
- @param $taxonomy (string) The taxonomy type.
- @param $term\_id (int) The term ID.
- @return (string)

---

---

# Fields <a name="secure-custom-fields/code-reference/fields" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/

## Files

- [Class Acf Repeater Table](class-acf-repeater-table-file)

---

# Accordion Field <a name="secure-custom-fields/code-reference/fields/accordion" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/accordion/

The Accordion field creates collapsible sections to organize your fields into logical groups. It helps improve the editing experience by reducing visual clutter and grouping related fields together.

## Key Features

- Creates collapsible sections for field organization
- Can be set to open/closed by default
- Supports multiple open sections simultaneously
- Can act as an endpoint for previous accordion sections

## Settings

- Open – Display this accordion as open on page load
- Multi-Expand – Allow this accordion to open without closing others
- Endpoint – Define an endpoint for the previous accordion to stop

---

# Using the Accordion Field <a name="secure-custom-fields/code-reference/fields/accordion/accordion-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/accordion/accordion-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add an Accordion field
3. Configure basic settings: 
    - Set a clear section title
    - Choose if it should be open by default
    - Decide if multiple sections can be open

## Common Use Cases

1. Organizing Content Sections 
    - Group related fields together
    - Use clear section names
    - Consider the editing workflow
2. Creating Form Sections 
    - Basic Information
    - Detailed Content
    - Settings/Configuration

## Tips

- Keep section names concise but descriptive
- Don’t nest accordions too deeply
- Consider using endpoints to create clear breaks
- Group related fields logically

---

# Button Group Field <a name="secure-custom-fields/code-reference/fields/button-group" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/button-group/

The Button Group field provides a set of buttons where users can select one option from multiple choices. It offers a more visual and user-friendly alternative to radio buttons or select dropdowns.

## Key Features

- Visual button-style interface
- Single option selection
- Customizable button labels
- Clear visual indication of selected option

## Settings

- Choices – Define the available options
- Default Value – Set the pre-selected option
- Return Format – Specify how the value should be returned
- Allow Null – Option to have no selection

---

# Using the Button Group Field <a name="secure-custom-fields/code-reference/fields/button-group/button-group-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/button-group/button-group-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Button Group field
3. Configure the choices: 
    - Add value:label pairs
    - Set a default value
    - Choose return format

## Common Use Cases

1. Simple Toggle Options 
    - Yes/No choices
    - Show/Hide settings
    - Layout selections
2. Status Selection 
    - Draft/Review/Published
    - Active/Inactive
    - Priority levels

## Tips

- Keep choices concise
- Use clear labels
- Consider mobile usability
- Limit number of options

---

# Checkbox Field <a name="secure-custom-fields/code-reference/fields/checkbox" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/checkbox/

The Checkbox field allows users to select one or multiple choices from a set of options. It’s ideal for situations where multiple selections are needed or when users need to toggle specific options on/off.

## Key Features

- Multiple option selection
- Toggle individual choices
- Customizable checkbox layout
- Flexible return format

## Settings

- Choices – Define the available options
- Default Value – Set pre-selected options
- Layout – Choose between vertical or horizontal layout
- Allow Custom – Enable user-added choices
- Toggle All – Option to select/deselect all choices

---

# Using the Checkbox Field <a name="secure-custom-fields/code-reference/fields/checkbox/checkbox-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/checkbox/checkbox-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Checkbox field
3. Configure options: 
    - Add checkbox choices
    - Set layout (vertical/horizontal)
    - Choose return format
    - Enable/disable “Select All”

## Common Use Cases

1. Multiple Selection Lists 
    - Categories/Tags
    - Feature toggles
    - Permission settings
2. Option Configuration 
    - Settings panels
    - Display preferences
    - Content filters

## Tips

- Group related options together
- Consider using columns for many options
- Provide clear labels
- Use “Select All” for long lists

---

# Clone Field <a name="secure-custom-fields/code-reference/fields/clone" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/clone/

The Clone field allows you to reuse existing fields or field groups in multiple locations. This helps maintain consistency and reduces the need to recreate commonly used field configurations.

## Key Features

- Copy existing field configurations
- Clone individual fields or entire field groups
- Prefix labels to avoid naming conflicts
- Maintain synchronized settings across cloned instances

## Settings

- Select Fields – Choose which fields or groups to clone
- Display – Control how the cloned fields appear
- Prefix Label – Add a prefix to cloned field labels
- Prefix Name – Add a prefix to cloned field names

---

# Using the Clone Field <a name="secure-custom-fields/code-reference/fields/clone/clone-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/clone/clone-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Clone field
3. Configure clone settings: 
    - Select fields/groups to clone
    - Choose display format
    - Set prefix options
    - Configure labels

## Common Use Cases

1. Reusable Field Sets 
    - Contact information
    - Social media links
    - Common metadata
2. Template Components 
    - Shared content blocks
    - Repeated field patterns
    - Standard form elements

## Tips

- Use meaningful prefixes
- Consider data structure
- Keep cloned groups focused
- Document clone relationships

---

# Color Picker Field <a name="secure-custom-fields/code-reference/fields/color-picker" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/color-picker/

The Color Picker field provides an interactive interface for selecting colors. It supports both RGB and RGBA color formats and includes a visual color picker with opacity control.

## Key Features

- Visual color selection interface
- RGB and RGBA color support
- Opacity/transparency control
- Default color presets
- Hex color input

## Settings

- Default Value – Set a default color
- Return Format – Choose between string, array, or rgba format
- Enable Opacity – Allow transparency selection

---

# Using the Color Picker Field <a name="secure-custom-fields/code-reference/fields/color-picker/color-picker-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/color-picker/color-picker-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Color Picker field
3. Configure options: 
    - Set default color
    - Enable/disable opacity
    - Choose return format
    - Set display preferences

## Common Use Cases

1. Theme Customization 
    - Brand colors
    - Background colors
    - Text colors
2. Design Elements 
    - Button colors
    - Border colors
    - Overlay settings

## Tips

- Consider color validation
- Use default colors strategically
- Document color usage
- Consider accessibility

---

# Date Picker Field <a name="secure-custom-fields/code-reference/fields/date-picker" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/date-picker/

The Date Picker field provides a calendar interface for selecting dates. It offers a user-friendly way to input and format dates consistently across your content.

## Key Features

- Interactive calendar interface
- Customizable date formats
- Week starts on any day
- Restrict date ranges
- Multiple display formats

## Settings

- Display Format – How the date appears to editors
- Return Format – How the date is stored/returned
- Week Starts On – Set first day of week
- First Day – Configure week start day

---

# Using the Date Picker Field <a name="secure-custom-fields/code-reference/fields/date-picker/date-picker-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/date-picker/date-picker-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Date Picker field
3. Configure options: 
    - Set display format
    - Choose return format
    - Configure week start day
    - Set default value

## Common Use Cases

1. Event Management 
    - Event dates
    - Scheduling
    - Deadlines
2. Content Planning 
    - Publication dates
    - Campaign scheduling
    - Time-sensitive content

## Tips

- Use consistent date formats
- Consider timezone implications
- Set appropriate restrictions
- Use clear date formatting

---

# Date Time Picker Field <a name="secure-custom-fields/code-reference/fields/date-time-picker" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/date-time-picker/

The Date Time Picker field combines date and time selection into a single interface. It provides precise control over datetime values with both calendar and time input options.

## Key Features

- Combined date and time selection
- Customizable date/time formats
- Time increment control
- Multiple display formats
- Timezone support

## Settings

- Display Format – How the datetime appears to editors
- Return Format – How the datetime is stored/returned
- Week Starts On – Set first day of week
- Time Increment – Control minute stepping

---

# Using the Date Time Picker Field <a name="secure-custom-fields/code-reference/fields/date-time-picker/date-time-picker-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/date-time-picker/date-time-picker-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Date Time Picker field
3. Configure options: 
    - Set display format
    - Choose return format
    - Set time increment
    - Configure default value

## Common Use Cases

1. Event Scheduling 
    - Event start/end times
    - Appointment booking
    - Session timing
2. Content Scheduling 
    - Post scheduling
    - Time-based features
    - Automated tasks

## Tips

- Consider time zone handling
- Use appropriate time increments
- Validate date ranges
- Clear datetime formatting

---

# Email Field <a name="secure-custom-fields/code-reference/fields/email" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/email/

The Email field provides a specialized input for email addresses. It includes built-in validation to ensure proper email format and can be configured with custom display options.

## Key Features

- Email format validation
- Custom placeholder text
- Prepend/append text options
- Required field validation
- Multiple email support

## Settings

- Default Value – Set a default email address
- Placeholder – Custom placeholder text
- Prepend – Add text before the input
- Append – Add text after the input

---

# Using the Email Field <a name="secure-custom-fields/code-reference/fields/email/email-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/email/email-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add an Email field
3. Configure options: 
    - Set placeholder text
    - Add prepend/append text
    - Configure validation
    - Set default value

## Common Use Cases

1. Contact Information 
    - Contact forms
    - User profiles
    - Directory listings
2. Notification Settings 
    - Alert recipients
    - Newsletter subscriptions
    - System notifications

## Tips

- Use clear validation messages
- Consider multiple email support
- Add helpful placeholder text
- Validate email format

---

# File Field <a name="secure-custom-fields/code-reference/fields/file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/file/

The File field enables file uploads and management through the WordPress media library. It supports various file types and provides flexible display options for the selected files.

## Key Features

- Media library integration
- File type restrictions
- Size limitations
- Custom return formats
- Preview capabilities

## Settings

- Library – Restrict to uploaded or all files
- Return Format – Array, URL, or ID
- Preview Size – Thumbnail display size
- Min/Max Size – File size restrictions
- Allowed File Types – Restrict accepted formats

---

# Using the File Field <a name="secure-custom-fields/code-reference/fields/file/file-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/file/file-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a File field
3. Configure options: 
    - Set allowed file types
    - Configure size limits
    - Choose library restriction
    - Set return format

## Common Use Cases

1. Document Management 
    - PDF uploads
    - Document attachments
    - Resource libraries
2. Media Handling 
    - Download files
    - Asset management
    - Resource linking

## Tips

- Restrict file types appropriately
- Set reasonable size limits
- Consider storage implications
- Use clear preview options

---

# Flexible Content Field <a name="secure-custom-fields/code-reference/fields/flexible-content" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/flexible-content/

The Flexible Content field provides a flexible content builder interface. It allows users to create dynamic layouts by selecting from predefined content block types and arranging them in any order.

## Key Features

- Dynamic layout builder
- Multiple layout types
- Drag and drop ordering
- Nested content structures
- Customizable templates

## Settings

- Layouts – Define available content block types
- Button Label – Customize the “Add Row” text
- Min/Max Layouts – Limit number of blocks
- Layout Settings – Configure each layout type

---

# Using the Flexible Content Field <a name="secure-custom-fields/code-reference/fields/flexible-content/flexible-content-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/flexible-content/flexible-content-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Flexible Content field
3. Configure layouts: 
    - Create layout types
    - Add fields to each layout
    - Set minimum/maximum
    - Configure button labels

## Common Use Cases

1. Page Building 
    - Content sections
    - Landing pages
    - Dynamic layouts
2. Content Management 
    - Article components
    - Product displays
    - Feature blocks

## Tips

- Plan layouts carefully
- Use clear layout labels
- Consider nesting depth
- Optimize for editors

---

# Gallery Field <a name="secure-custom-fields/code-reference/fields/gallery" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/gallery/

The Gallery field enables management of multiple images in a single field. It provides an intuitive interface for uploading, ordering, and managing collections of images.

## Key Features

- Multiple image upload
- Drag and drop ordering
- Image previews
- Bulk selection
- Media library integration

## Settings

- Library – Restrict to uploaded or all images
- Min/Max Selection – Limit number of images
- Preview Size – Thumbnail display size
- Insert – Prepend or append new images
- Return Format – Array, URL, or ID

---

# Using the Gallery Field <a name="secure-custom-fields/code-reference/fields/gallery/gallery-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/gallery/gallery-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Gallery field
3. Configure options: 
    - Set image restrictions
    - Choose preview size
    - Configure min/max images
    - Set insert position

## Common Use Cases

1. Image Collections 
    - Photo galleries
    - Product images
    - Portfolio displays
2. Media Management 
    - Slideshows
    - Image grids
    - Media libraries

## Tips

- Set appropriate image limits
- Consider thumbnail sizes
- Enable easy reordering
- Optimize image sizes

---

# Google Map Field <a name="secure-custom-fields/code-reference/fields/google-map" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/google-map/

The Google Map field provides an interactive map interface for selecting and storing location data. It integrates with the Google Maps API to offer address search and precise location picking.

## Key Features

- Interactive map interface
- Address search functionality
- Latitude/longitude selection
- Custom map center point
- Zoom level control

## Settings

- Center Latitude – Default map center point
- Center Longitude – Default map center point
- Zoom Level – Default map zoom
- Height – Map display height
- Return Format – Location data format

---

# Using the Google Map Field <a name="secure-custom-fields/code-reference/fields/google-map/google-map-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/google-map/google-map-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Google Map field
3. Configure options: 
    - Set default center point
    - Configure zoom level
    - Set map height
    - Choose display format

## Common Use Cases

1. Location Information 
    - Business locations
    - Event venues
    - Contact pages
2. Geographic Data 
    - Service areas
    - Delivery zones
    - Store locators

## Tips

- Configure API key properly
- Set appropriate zoom levels
- Consider mobile display
- Use clear location markers

---

# Group Field <a name="secure-custom-fields/code-reference/fields/group" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/group/

The Group field allows you to organize multiple fields together into a single data structure. It helps create logical groupings of related fields and simplifies data organization.

## Key Features

- Group multiple fields together
- Single data structure
- Simplified data retrieval
- Layout customization
- Nested field support

## Settings

- Sub Fields – Add fields within the group
- Layout – Stack or table display format
- Return Format – Group or individual field values

---

# Using the Group Field <a name="secure-custom-fields/code-reference/fields/group/group-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/group/group-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Group field
3. Configure sub-fields: 
    - Add desired fields
    - Arrange field layout
    - Set labels
    - Choose return format

## Common Use Cases

1. Related Data Sets 
    - Address information
    - Social media profiles
    - Contact details
2. Structured Content 
    - Product specifications
    - Team member details
    - Feature sets

## Tips

- Keep groups focused
- Use clear labeling
- Consider data structure
- Plan field organization

---

# Icon Picker Field <a name="secure-custom-fields/code-reference/fields/icon-picker" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/icon-picker/

The Icon Picker field provides an interface for selecting icons from various sources including Dashicons, custom icon sets, or the media library.

## Key Features

- Multiple icon source options
- Dashicons integration
- Media library support
- URL input option
- Visual icon preview

## Settings

- Icon Library – Choose available icon sources
- Return Format – Icon class, URL, or array
- Preview Size – Icon display size
- Allow Custom – Enable custom icon URLs

---

# Using the Icon Picker Field <a name="secure-custom-fields/code-reference/fields/icon-picker/icon-picker-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/icon-picker/icon-picker-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add an Icon Picker field
3. Configure options: 
    - Select icon libraries
    - Set preview size
    - Configure return format
    - Enable custom URLs

## Common Use Cases

1. UI Elements 
    - Menu icons
    - Feature indicators
    - Button symbols
2. Visual Content 
    - Social media icons
    - Category markers
    - Navigation elements

## Tips

- Maintain icon consistency
- Consider icon sizing
- Use clear previews
- Document icon usage

---

# Image Field <a name="secure-custom-fields/code-reference/fields/image" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/image/

The Image field provides a dedicated interface for uploading and selecting images through the WordPress media library. It offers preview capabilities and multiple return format options.

## Key Features

- Media library integration
- Image preview
- Size restrictions
- Format validation
- Multiple return formats

## Settings

- Preview Size – Thumbnail display size
- Library – Restrict to uploaded or all images
- Min/Max Width/Height – Image dimension limits
- File Size Restrictions – Control upload sizes
- Return Format – Array, URL, or ID

---

# Using the Image Field <a name="secure-custom-fields/code-reference/fields/image/image-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/image/image-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add an Image field
3. Configure options: 
    - Set preview size
    - Choose library type
    - Configure size limits
    - Set return format

## Common Use Cases

1. Content Images 
    - Featured images
    - Article photos
    - Profile pictures
2. Design Elements 
    - Background images
    - Logo uploads
    - Banner images

## Tips

- Set appropriate size limits
- Consider image dimensions
- Use meaningful preview sizes
- Plan for responsive display

---

# Link Field <a name="secure-custom-fields/code-reference/fields/link" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/link/

The Link field provides an interface for creating links with various properties. It allows users to select internal content, enter external URLs, and set link attributes.

## Key Features

- Internal/external link support
- Link text customization
- Target attribute control
- Internal content picker
- WordPress link picker integration

## Settings

- Return Format – Array or URL
- Default Value – Preset link data
- Display Format – How the link appears in admin

---

# Using the Link Field <a name="secure-custom-fields/code-reference/fields/link/link-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/link/link-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Link field
3. Configure options: 
    - Choose return format
    - Set default value
    - Configure display
    - Enable/disable features

## Common Use Cases

1. Navigation Elements 
    - Menu links
    - Call-to-actions
    - Resource links
2. Content References 
    - Related content
    - External resources
    - Document links

## Tips

- Validate URLs properly
- Consider link targets
- Use clear link text
- Check for broken links

---

# Message Field <a name="secure-custom-fields/code-reference/fields/message" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/message/

The Message field displays instructional text or HTML content within the editing interface. It’s useful for providing guidance, separating content sections, or displaying formatted information.

## Key Features

- Custom HTML support
- No data storage
- Formatting options
- Visual organization
- Editor instructions

## Settings

- Message – The content to display
- New Lines – Handle line breaks
- Escape HTML – Display HTML as text
- Format – Text formatting options

---

# Using the Message Field <a name="secure-custom-fields/code-reference/fields/message/message-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/message/message-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Message field
3. Configure options: 
    - Enter message content
    - Set formatting options
    - Configure HTML handling
    - Choose display style

## Common Use Cases

1. User Guidance 
    - Field instructions
    - Section descriptions
    - Important notices
2. Content Organization 
    - Section dividers
    - Group headers
    - Information blocks

## Tips

- Keep messages concise
- Use clear formatting
- Consider visibility
- Update content regularly

---

# Number Field <a name="secure-custom-fields/code-reference/fields/number" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/number/

The Number field provides an input specifically for numeric values. It includes validation and formatting options to ensure proper number handling.

## Key Features

- Numeric validation
- Min/max restrictions
- Step increment control
- Custom formatting
- Prefix/suffix support

## Settings

- Default Value – Preset number
- Placeholder – Input placeholder text
- Prepend – Text before the input
- Append – Text after the input
- Min – Minimum allowed value
- Max – Maximum allowed value
- Step – Number increment size

---

# Using the Number Field <a name="secure-custom-fields/code-reference/fields/number/number-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/number/number-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Number field
3. Configure options: 
    - Set min/max values
    - Configure step size
    - Add placeholder text
    - Set default value

## Common Use Cases

1. Numeric Input 
    - Quantities
    - Ratings
    - Measurements
2. Settings Control 
    - Display options
    - Configuration values
    - Numeric parameters

## Tips

- Set appropriate ranges
- Use clear step intervals
- Consider validation needs
- Add helpful placeholders

---

# oEmbed Field <a name="secure-custom-fields/code-reference/fields/oembed" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/oembed/

The oEmbed field allows embedding external content from various providers like YouTube, Vimeo, and Twitter. It automatically handles the embedding process using WordPress’s oEmbed functionality.

## Key Features

- Support for multiple providers
- Automatic embed handling
- Preview capability
- Width/height control
- WordPress oEmbed integration

## Settings

- Width – Maximum width of embedded content
- Height – Maximum height of embedded content
- Preview Size – Display size in admin

---

# Using the oEmbed Field <a name="secure-custom-fields/code-reference/fields/oembed/oembed-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/oembed/oembed-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add an oEmbed field
3. Configure options: 
    - Set width/height
    - Configure preview
    - Set display options
    - Choose providers

## Common Use Cases

1. Media Integration 
    - Video embeds
    - Social media posts
    - Audio content
2. External Content 
    - YouTube videos
    - Twitter posts
    - Spotify tracks

## Tips

- Check provider compatibility
- Consider responsive sizing
- Test embed previews
- Validate URLs properly

---

# Page Link Field <a name="secure-custom-fields/code-reference/fields/page-link" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/page-link/

The Page Link field provides an interface for creating links to internal WordPress content. It allows selection of posts, pages, and custom post types with search functionality.

## Key Features

- Internal content linking
- Multiple post type support
- Search functionality
- Archive URL support
- Multiple selection option

## Settings

- Post Type – Select available content types
- Taxonomy – Filter by taxonomy terms
- Allow Archives – Enable archive URL selection
- Multiple Values – Allow multiple selections
- Allow Null – Make selection optional

---

# Using the Page Link Field <a name="secure-custom-fields/code-reference/fields/page-link/page-link-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/page-link/page-link-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Page Link field
3. Configure options: 
    - Select post types
    - Configure taxonomy filters
    - Set multiple selection
    - Enable/disable archives

## Common Use Cases

1. Internal Navigation 
    - Related content
    - Section links
    - Menu structures
2. Content Relationships 
    - Related posts
    - Resource links
    - Content hierarchy

## Tips

- Use clear selection filters
- Consider multiple selection needs
- Test search functionality
- Validate link targets

---

# Password Field <a name="secure-custom-fields/code-reference/fields/password" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/password/

The Password field provides a secure input for password data. It includes masking functionality and can be configured with various display options.

## Key Features

- Masked input
- Custom placeholder text
- Prepend/append options
- Basic password validation
- Secure handling

## Settings

- Placeholder – Input placeholder text
- Prepend – Text before the input
- Append – Text after the input

---

# Using the Password Field <a name="secure-custom-fields/code-reference/fields/password/password-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/password/password-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Password field
3. Configure options: 
    - Set placeholder text
    - Add prepend/append
    - Configure validation
    - Set character limits

## Common Use Cases

1. Security Settings 
    - API keys
    - Access tokens
    - Private credentials
2. User Management 
    - Password fields
    - Security questions
    - Access codes

## Tips

- Use secure handling
- Clear validation rules
- Consider masking options
- Implement proper sanitization

---

# Post Object Field <a name="secure-custom-fields/code-reference/fields/post-object" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/post-object/

The Post Object field creates relationships with other WordPress posts, pages, or custom post types. It provides an intuitive interface for selecting and linking to other content.

## Key Features

- Content relationship management
- Multiple post type support
- Advanced search functionality
- Single or multiple selection
- Bidirectional relationships

## Settings

- Post Type – Select available content types
- Taxonomy – Filter by taxonomy terms
- Allow Null – Make selection optional
- Multiple Values – Allow multiple selections
- Return Format – Object, ID, or custom

---

# Using the Post Object Field <a name="secure-custom-fields/code-reference/fields/post-object/post-object-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/post-object/post-object-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Post Object field
3. Configure options: 
    - Select post types
    - Set taxonomy filters
    - Configure multiple selection
    - Choose return format

## Common Use Cases

1. Content Relationships 
    - Related posts
    - Parent/child content
    - Cross-references
2. Content Selection 
    - Featured content
    - Resource lists
    - Content linking

## Tips

- Use clear search filters
- Consider relationship structure
- Plan for scalability
- Test search performance

---

# Radio Field <a name="secure-custom-fields/code-reference/fields/radio" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/radio/

The Radio field presents users with a list of options where they can select a single choice. It provides a clear visual representation of available options.

## Key Features

- Single option selection
- Custom choice labels
- Vertical or horizontal layout
- Other/custom value option
- Clear visual feedback

## Settings

- Choices – Define available options
- Default Value – Pre-selected option
- Layout – Vertical or horizontal display
- Allow Other – Enable custom value input
- Return Format – Value or label

---

# Using the Radio Field <a name="secure-custom-fields/code-reference/fields/radio/radio-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/radio/radio-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Radio field
3. Configure options: 
    - Add choice options
    - Set layout format
    - Configure default value
    - Enable/disable features

## Common Use Cases

1. Single Choice Selection 
    - Status options
    - Display preferences
    - Content types
2. Configuration Options 
    - Layout choices
    - Setting selections
    - Display modes

## Tips

- Keep options clear
- Use logical ordering
- Consider mobile layout
- Provide clear labels

---

# Range Field <a name="secure-custom-fields/code-reference/fields/range" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/range/

The Range field provides a slider interface for selecting numeric values within a defined range. It offers an intuitive way to input numbers with visual feedback.

## Key Features

- Slider interface
- Min/max value limits
- Step increment control
- Visual value display
- Prepend/append text

## Settings

- Default Value – Starting position
- Min – Minimum allowed value
- Max – Maximum allowed value
- Step – Value increment size
- Prepend/Append – Add text before/after

---

# Using the Range Field <a name="secure-custom-fields/code-reference/fields/range/range-tutorial" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/range/range-tutorial/

## Basic Setup

1. Create a new Field Group
2. Add a Range field
3. Configure options: 
    - Set min/max values
    - Configure step size
    - Add prepend/append text
    - Set default value

## Common Use Cases

1. Numeric Ranges 
    - Volume controls
    - Percentage settings
    - Scale selections
2. Visual Settings 
    - Opacity levels
    - Size adjustments
    - Intensity controls

## Tips

- Set intuitive ranges
- Use clear min/max values
- Consider step granularity
- Add helpful labels

---

# ACF_Repeater_Table <a name="secure-custom-fields/code-reference/fields/class-acf-repeater-table-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields/class-acf-repeater-table-file/

ACF\_Repeater\_Table

- Helper class for rendering repeater tables.

## Properties

### `$field`

The main field array used to render the repeater.

- @var array

### `$sub_fields`

An array containing the subfields used in the repeater.

- @var array

### `$value`

The value(s) of the repeater field.

- @var array

### `$show_add`

If we should show the “Add Row” button.

- @var boolean

### `$show_remove`

If we should show the “Remove Row” button.

- @var boolean

### `$show_order`

If we should show the order of the fields.

- @var boolean

## Methods

### `__construct`

Constructs the ACF\_Repeater\_Table class.

- @param array $field The main field array for the repeater being rendered.

### `setup`

Sets up the field for rendering.

- @since ACF 6.0.0
- @return void

### `prepare_value`

Prepares the repeater values for rendering.

- @since ACF 6.0.0
- @return array

### `render`

Renders the full repeater table.

- @since ACF 6.0.0
- @return void

### `thead`

Renders the table head.

- @since ACF 6.0.0
- @return void

### `rows`

Renders or returns rows for the repeater field table.

- @since ACF 6.0.0
- @param boolean $should\_return If we should return the rows or render them.
- @return array|void

### `row`

Renders an individual row.

- @since ACF 6.0.0
- @param integer $i The row number.
- @param array $row An array containing the row values.
- @param boolean $should\_return If we should return the row or render it.
- @return string|void

### `row_handle`

Renders the row handle at the start of each row.

- @since ACF 6.0.0
- @param integer $i The current row number.
- @return void

### `row_actions`

Renders the actions displayed at the end of each row.

- @since ACF 6.0.0
- @return void

### `table_actions`

Renders the actions displayed underneath the table.

- @since ACF 6.0.0
- @return void

### `pagination`

Renders the table pagination.  
Mostly lifted from the WordPress core [WP\_List\_Table](#reference/classes/wp_list_table) class.

- @since ACF 6.0.0
- @return void

---

# Acf Bidirectional Functions Global Functions <a name="secure-custom-fields/code-reference/acf-bidirectional-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-bidirectional-functions-file/

## `acf_update_bidirectional_values()`

Process updating bidirectional fields.

- @since ACF 6.2
- @param array $target\_item\_ids The post, user or term IDs which should be updated with the origin item ID.
- @param integer|string $post\_id The ACF encoded origin post, user or term ID.
- @param array $field The field being updated on the origin post, user or term ID.
- @param string|false $target\_prefix The ACF prefix for a post, user or term ID required for the update\_field call for this field type.

## `acf_get_valid_bidirectional_target_types()`

Allows third party fields to enable support as a target field type for a particular object type

- @since ACF 6.2
- @param string $object\_type The object type that will be updated on the target field, such as ‘term’, ‘user’ or ‘post’.
- @return array An array of valid field type names (slugs) for the target of the bidirectional field.

## `acf_build_bidirectional_target_current_choices()`

Build the complete choices argument for rendering the select2 field for bidirectional target based on the currently selected choices

- @since ACF 6.2
- @param array $choices The currently selected choices (as an array of field keys).
- @return array

## `acf_build_bidirectional_relationship_field_target_args()`

Build valid fields for a bidirectional relationship for select2 display

- @since ACF 6.2
- @param array $results The original results array.
- @param array $options The options provided to the select2 AJAX search.
- @return array

## `acf_render_bidirectional_field_settings()`

Renders the field settings required for bidirectional fields

- @since ACF 6.2
- @param array $field The field object passed into field setting functions.

## `acf_get_bidirectional_field_settings_instruction_text()`

Returns the translated instructional text for the message field for the bidirectional field settings.

- @since ACF 6.2
- @return string The html containing the instructional message.

---

---

# Acf Field Functions Global Functions <a name="secure-custom-fields/code-reference/acf-field-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-field-functions-file/

## `acf_get_field()`

acf\_get\_field

- Retrieves a field for the given identifier.
- @date 17/1/19
- @since ACF 5.7.10
- @param (int|string) $id The field ID, key or name.
- @return (array|false) The field array.

## `acf_get_raw_field()`

acf\_get\_raw\_field

- Retrieves raw field data for the given identifier.
- @date 18/1/19
- @since ACF 5.7.10
- @param (int|string) $id The field ID, key or name.
- @return (array|false) The field array.

## `acf_get_field_post()`

acf\_get\_field\_post

- Retrieves the field’s [WP\_Post](#reference/classes/wp_post) object.
- @date 18/1/19
- @since ACF 5.7.10
- @param (int|string) $id The field ID, key or name.
- @return (array|false) The field array.

## `acf_is_field_key()`

acf\_is\_field\_key

- Returns true if the given identifier is a field key.
- @date 6/12/2013
- @since ACF 5.0.0
- @param string $id The identifier.
- @return boolean

## `acf_validate_field()`

acf\_validate\_field

- Ensures the given field valid.
- @date 18/1/19
- @since ACF 5.7.10
- @param array $field The field array.
- @return array

## `acf_get_valid_field()`

acf\_get\_valid\_field

- Ensures the given field valid.
- @date 28/09/13
- @since ACF 5.0.0
- @param array $field The field array.
- @return array

## `acf_translate_field()`

acf\_translate\_field

- Translates a field’s settings.
- @date 8/03/2016
- @since ACF 5.3.2
- @param array $field The field array.
- @return array

## `acf_get_fields()`

acf\_get\_fields

- Returns and array of fields for the given $parent.
- @date 30/09/13
- @since ACF 5.0.0
- @param (int|string|array) $parent The field group or field settings. Also accepts the field group ID or key.
- @return array

## `acf_get_raw_fields()`

acf\_get\_raw\_fields

- Returns and array of raw field data for the given parent id.
- @date 18/1/19
- @since ACF 5.7.10
- @param integer $id The field group or field id.
- @return array

## `acf_get_field_count()`

acf\_get\_field\_count

- Return the number of fields for the given field group.
- @date 17/10/13
- @since ACF 5.0.0
- @param array $parent The field group or field array.
- @return integer

## `acf_clone_field()`

acf\_clone\_field

- Allows customization to a field when it is cloned. Used by the clone field.
- @date 8/03/2016
- @since ACF 5.3.2
- @param array $field The field being cloned.
- @param array $clone\_field The clone field.
- @return array

## `acf_prepare_field()`

acf\_prepare\_field

- Prepare a field for input.
- @date 20/1/19
- @since ACF 5.7.10
- @param array $field The field array.
- @return array

## `acf_render_fields()`

acf\_render\_fields

- Renders an array of fields. Also loads the field’s value.
- @date 8/10/13
- @since ACF 5.0.0
- @since ACF 5.6.9 Changed parameter order.
- @param array $fields An array of fields.
- @param (int|string) $post\_id The post ID to load values from.
- @param string $element The wrapping element type.
- @param string $instruction The instruction render position (label|field).
- @return void

## `acf_render_field_wrap()`

Render the wrapping element for a given field.

- @since ACF 5.0.0
- @param array $field The field array.
- @param string $element The wrapping element type.
- @param string $instruction The instruction render position (label|field).
- @param boolean $field\_setting If a field setting is being rendered.
- @return void

## `acf_render_field()`

acf\_render\_field

- Render the input element for a given field.
- @date 21/1/19
- @since ACF 5.7.10
- @param array $field The field array.
- @return void

## `acf_render_field_label()`

acf\_render\_field\_label

- Renders the field’s label.
- @date 19/9/17
- @since ACF 5.6.3
- @param array $field The field array.
- @return void

## `acf_get_field_label()`

acf\_get\_field\_label

- Returns the field’s label with appropriate required label.
- @date 4/11/2013
- @since ACF 5.0.0
- @param array $field The field array.
- @param string $context The output context (admin).
- @return string The field label in HTML format.

## `acf_render_field_instructions()`

Renders the field’s instructions.

- @since ACF 5.6.3
- @param array $field The field array.
- @param boolean $tooltip If the instructions are being rendered as a tooltip.
- @return void

## `acf_render_field_setting()`

acf\_render\_field\_setting

- Renders a field setting used in the admin edit screen.
- @date 21/1/19
- @since ACF 5.7.10
- @param array $field The field array.
- @param array $setting The settings field array.
- @param boolean $global Whether this setting is a global or field type specific one.
- @return void

## `acf_update_field()`

acf\_update\_field

- Updates a field in the database.
- @date 21/1/19
- @since ACF 5.7.10
- @param array $field The field array.
- @param array $specific An array of specific field attributes to update.
- @return array

## `_acf_apply_unique_field_slug()`

\_acf\_apply\_unique\_field\_slug

- Allows full control over ‘acf-field’ slugs.
- @date 21/1/19
- @since ACF 5.7.10
- @param string $slug The post slug.
- @param integer $post\_ID Post ID.
- @param string $post\_status The post status.
- @param string $post\_type Post type.
- @param integer $post\_parent Post parent ID
- @param string $original\_slug The original post slug.

## `acf_flush_field_cache()`

acf\_flush\_field\_cache

- Deletes all caches for this field.
- @date 22/1/19
- @since ACF 5.7.10
- @param array $field The field array.
- @return void

## `acf_delete_field()`

acf\_delete\_field

- Deletes a field from the database.
- @date 21/1/19
- @since ACF 5.7.10
- @param (int|string) $id The field ID, key or name.
- @return boolean True if field was deleted.

## `acf_trash_field()`

acf\_trash\_field

- Trashes a field from the database.
- @date 2/10/13
- @since ACF 5.0.0
- @param (int|string) $id The field ID, key or name.
- @return boolean True if field was trashed.

## `acf_untrash_field()`

acf\_untrash\_field

- Restores a field from the trash.
- @date 2/10/13
- @since ACF 5.0.0
- @param (int|string) $id The field ID, key or name.
- @return boolean True if field was trashed.

## `_acf_untrash_field_post_status()`

Filter callback which returns the previous post\_status instead of “draft” for the “acf-field” post type.

- Prior to WordPress 5.6.0, this filter was not needed as restored posts were always assigned their original status.
- @since ACF 5.9.5
- @param string $new\_status The new status of the post being restored.
- @param integer $post\_id The ID of the post being restored.
- @param string $previous\_status The status of the post at the point where it was trashed.
- @return string.

## `acf_prefix_fields()`

acf\_prefix\_fields

- Changes the prefix for an array of fields by reference.
- @date 5/9/17
- @since ACF 5.6.0
- @param array $fields An array of fields.
- @param string $prefix The new prefix.
- @return void

## `acf_get_sub_field()`

acf\_get\_sub\_field

- Searches a field for sub fields matching the given selector.
- @date 21/1/19
- @since ACF 5.7.10
- @param (int|string) $id The field ID, key or name.
- @param array $field The parent field array.
- @return (array|false)

## `acf_search_fields()`

acf\_search\_fields

- Searches an array of fields for one that matches the given identifier.
- @date 12/2/19
- @since ACF 5.7.11
- @param (int|string) $id The field ID, key or name.
- @param array $haystack The array of fields.
- @return (int|false)

## `acf_is_field()`

acf\_is\_field

- Returns true if the given params match a field.
- @date 21/1/19
- @since ACF 5.7.10
- @param array $field The field array.
- @param mixed $id An optional identifier to search for.
- @return boolean

## `acf_get_field_ancestors()`

acf\_get\_field\_ancestors

- Returns an array of ancestor field ID’s or keys.
- @date 22/06/2016
- @since ACF 5.3.8
- @param array $field The field array.
- @return array

## `acf_duplicate_fields()`

acf\_duplicate\_fields

- Duplicate an array of fields.
- @date 16/06/2014
- @since ACF 5.0.0
- @param array $fields An array of fields.
- @param integer $parent\_id The new parent ID.
- @return array

## `acf_duplicate_field()`

acf\_duplicate\_field

- Duplicates a field.
- @date 16/06/2014
- @since ACF 5.0.0
- @param (int|string) $id The field ID, key or name.
- @param integer $parent\_id The new parent ID.
- @return boolean True if field was duplicated.

## `acf_prepare_fields_for_export()`

acf\_prepare\_fields\_for\_export

- Returns a modified array of fields ready for export.
- @date 11/03/2014
- @since ACF 5.0.0
- @param array $fields An array of fields.
- @return array

## `acf_prepare_field_for_export()`

acf\_prepare\_field\_for\_export

- Returns a modified field ready for export.
- @date 11/03/2014
- @since ACF 5.0.0
- @param array $field The field array.
- @return array

## `acf_prepare_fields_for_import()`

acf\_prepare\_field\_for\_import

- Returns a modified array of fields ready for import.
- @date 11/03/2014
- @since ACF 5.0.0
- @param array $fields An array of fields.
- @return array

## `acf_prepare_field_for_import()`

acf\_prepare\_field\_for\_import

- Returns a modified field ready for import.  
    Allows parent fields to modify themselves and also return sub fields.
- @date 11/03/2014
- @since ACF 5.0.0
- @param array $field The field array.
- @return array

---

---

# Acf Field Group Functions Global Functions <a name="secure-custom-fields/code-reference/acf-field-group-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-field-group-functions-file/

## `acf_get_field_group()`

acf\_get\_field\_group

- Retrieves a field group for the given identifier.
- @date 30/09/13
- @since ACF 5.0.0
- @param (int|string) $id The field group ID, key or name.
- @return (array|false) The field group array.

## `acf_get_raw_field_group()`

acf\_get\_raw\_field\_group

- Retrieves raw field group data for the given identifier.
- @date 18/1/19
- @since ACF 5.7.10
- @param (int|string) $id The field ID, key or name.
- @return (array|false) The field group array.

## `acf_get_field_group_post()`

acf\_get\_field\_group\_post

- Retrieves the field group’s [WP\_Post](#reference/classes/wp_post) object.
- @date 18/1/19
- @since ACF 5.7.10
- @param (int|string) $id The field group’s ID, key or name.
- @return (array|false) The field group’s array.

## `acf_is_field_group_key()`

acf\_is\_field\_group\_key

- Returns true if the given identifier is a field group key.
- @date 6/12/2013
- @since ACF 5.0.0
- @param string $id The identifier.
- @return boolean

## `acf_validate_field_group()`

Ensures the given field group is valid.

- @date 18/1/19
- @since ACF 5.7.10
- @param array $field\_group The field group array.
- @return array

## `acf_get_valid_field_group()`

acf\_get\_valid\_field\_group

- Ensures the given field group is valid.
- @date 28/09/13
- @since ACF 5.0.0
- @param array $field\_group The field group array.
- @return array

## `acf_translate_field_group()`

acf\_translate\_field\_group

- Translates a field group’s settings.
- @date 8/03/2016
- @since ACF 5.3.2
- @param array $field\_group The field group array.
- @return array

## `acf_get_field_groups()`

acf\_get\_field\_groups

- Returns and array of field\_groups for the given $filter.
- @date 30/09/13
- @since ACF 5.0.0
- @param array $filter An array of args to filter results by.
- @return array

## `acf_get_raw_field_groups()`

acf\_get\_raw\_field\_groups

- Returns and array of raw field\_group data.
- @date 18/1/19
- @since ACF 5.7.10
- @return array

## `acf_filter_field_groups()`

acf\_filter\_field\_groups

- Returns a filtered array of field groups based on the given $args.
- @date 29/11/2013
- @since ACF 5.0.0
- @param array $field\_groups An array of field groups.
- @param array $args An array of location args.
- @return array

## `acf_get_field_group_visibility()`

acf\_get\_field\_group\_visibility

- Returns true if the given field group’s location rules match the given $args.
- @date 7/10/13
- @since ACF 5.0.0
- @param array $field\_groups An array of field groups.
- @param array $args An array of location args.
- @return boolean

## `acf_update_field_group()`

acf\_update\_field\_group

- Updates a field group in the database.
- @date 21/1/19
- @since ACF 5.7.10
- @param array $field\_group The field group array.
- @return array

## `_acf_apply_unique_field_group_slug()`

\_acf\_apply\_unique\_field\_group\_slug

- Allows full control over ‘acf-field-group’ slugs.
- @date 21/1/19
- @since ACF 5.7.10
- @param string $slug The post slug.
- @param integer $post\_ID Post ID.
- @param string $post\_status The post status.
- @param string $post\_type Post type.
- @param integer $post\_parent Post parent ID
- @param string $original\_slug The original post slug.

## `acf_flush_field_group_cache()`

acf\_flush\_field\_group\_cache

- Deletes all caches for this field group.
- @date 22/1/19
- @since ACF 5.7.10
- @param array $field\_group The field group array.
- @return void

## `acf_delete_field_group()`

acf\_delete\_field\_group

- Deletes a field group from the database.
- @date 21/1/19
- @since ACF 5.7.10
- @param (int|string) $id The field group ID, key or name.
- @return boolean True if field group was deleted.

## `acf_trash_field_group()`

acf\_trash\_field\_group

- Trashes a field group from the database.
- @date 2/10/13
- @since ACF 5.0.0
- @param (int|string) $id The field group ID, key or name.
- @return boolean True if field group was trashed.

## `acf_untrash_field_group()`

acf\_untrash\_field\_group

- Restores a field\_group from the trash.
- @date 2/10/13
- @since ACF 5.0.0
- @param (int|string) $id The field\_group ID, key or name.
- @return boolean True if field\_group was trashed.

## `_acf_untrash_field_group_post_status()`

Filter callback which returns the previous post\_status instead of “draft” for the “acf-field-group” post type.

- Prior to WordPress 5.6.0, this filter was not needed as restored posts were always assigned their original status.
- @since ACF 5.9.5
- @param string $new\_status The new status of the post being restored.
- @param integer $post\_id The ID of the post being restored.
- @param string $previous\_status The status of the post at the point where it was trashed.
- @return string.

## `acf_is_field_group()`

acf\_is\_field\_group

- Returns true if the given params match a field group.
- @date 21/1/19
- @since ACF 5.7.10
- @param array $field\_group The field group array.
- @param mixed $id An optional identifier to search for.
- @return boolean

## `acf_duplicate_field_group()`

acf\_duplicate\_field\_group

- Duplicates a field group.
- @date 16/06/2014
- @since ACF 5.0.0
- @param (int|string) $id The field\_group ID, key or name.
- @param integer $new\_post\_id Optional post ID to override.
- @return array The new field group.

## `acf_update_field_group_active_status()`

Activates or deactivates a field group.

- @param integer|string $id The field\_group ID, key or name.
- @param boolean $activate True if the post should be activated.
- @return boolean

## `acf_get_field_group_style()`

acf\_get\_field\_group\_style

- Returns the CSS styles generated from field group settings.
- @date 20/10/13
- @since ACF 5.0.0
- @param array $field\_group The field group array.
- @return string.

## `acf_get_field_group_edit_link()`

acf\_get\_field\_group\_edit\_link

- Checks if the current user can edit the field group and returns the edit url.
- @date 23/9/18
- @since ACF 5.7.7
- @param integer $post\_id The field group ID.
- @return string

## `acf_prepare_field_group_for_export()`

acf\_prepare\_field\_group\_for\_export

- Returns a modified field group ready for export.
- @date 11/03/2014
- @since ACF 5.0.0
- @param array $field\_group The field group array.
- @return array

## `acf_prepare_field_group_for_import()`

acf\_prepare\_field\_group\_for\_import

- Prepares a field group for the import process.
- @date 21/11/19
- @since ACF 5.8.8
- @param array $field\_group The field group array.
- @return array

## `acf_import_field_group()`

acf\_import\_field\_group

- Imports a field group into the database.
- @date 11/03/2014
- @since ACF 5.0.0
- @param array $field\_group The field group array.
- @return array The new field group.

## `acf_get_combined_field_group_settings_tabs()`

Returns an array of tabs for the field group settings.  
We combine a list of default tabs with filtered tabs.  
I.E. Default tabs should be static and should not be changed by the  
filtered tabs.

- @since ACF 6.1
- @return array Key/value array of the default settings tabs for field group settings.

## `acf_field_group_has_location_type()`

Checks if a field group has the provided location rule.

- @since ACF 6.2.8
- @param integer $post\_id The post ID of the field group.
- @param string $location The location type to check for.
- @return boolean

---

---

# Acf Form Functions Global Functions <a name="secure-custom-fields/code-reference/acf-form-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-form-functions-file/

## `acf_set_form_data()`

acf\_set\_form\_data

- Sets data about the current form.
- @date 6/10/13
- @since ACF 5.0.0
- @param string $name The store name.
- @param array $data Array of data to start the store with.
- @return ACF\_Data

## `acf_get_form_data()`

acf\_get\_form\_data

- Gets data about the current form.
- @date 6/10/13
- @since ACF 5.0.0
- @param string $name The store name.
- @return mixed

## `acf_form_data()`

acf\_form\_data

- Called within a form to set important information and render hidden inputs.
- @date 15/10/13
- @since ACF 5.0.0
- @return void

## `acf_save_post()`

acf\_save\_post

- Saves the $\_POST data.
- @date 15/10/13
- @since ACF 5.0.0
- @param integer|string $post\_id The post id.
- @param array $values An array of values to override $\_POST.
- @return boolean True if save was successful.

## `_acf_do_save_post()`

\_acf\_do\_save\_post

- Private function hooked into ‘acf/save\_post’ to actually save the $\_POST data.  
    This allows developers to hook in before and after ACF has actually saved the data.
- @date 11/1/19
- @since ACF 5.7.10
- @param integer|string $post\_id The post id.
- @return void

---

---

# Acf Helper Functions Global Functions <a name="secure-custom-fields/code-reference/acf-helper-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-helper-functions-file/

## `acf_is_empty()`

Returns true if the value provided is considered “empty”. Allows numbers such as 0.

- @date 6/7/16
- @since ACF 5.4.0
- @param mixed $var The value to check.
- @return boolean

## `acf_not_empty()`

Returns true if the value provided is considered “not empty”. Allows numbers such as 0.

- @date 15/7/19
- @since ACF 5.8.1
- @param mixed $var The value to check.
- @return boolean

## `acf_uniqid()`

Returns a unique numeric based id.

- @date 9/1/19
- @since ACF 5.7.10
- @param string $prefix The id prefix. Defaults to ‘acf’.
- @return string

## `acf_merge_attributes()`

Merges together two arrays but with extra functionality to append class names.

- @date 22/1/19
- @since ACF 5.7.10
- @param array $array1 An array of attributes.
- @param array $array2 An array of attributes.
- @return array

## `acf_cache_key()`

acf\_cache\_key

- Returns a filtered cache key.
- @date 25/1/19
- @since ACF 5.7.11
- @param string $key The cache key.
- @return string

## `acf_request_args()`

acf\_request\_args

- Returns an array of $\_REQUEST values using the provided defaults.
- @date 28/2/19
- @since ACF 5.7.13
- @param array $args An array of args.
- @return array

## `acf_request_arg()`

Returns a single $\_REQUEST arg with fallback.

- @date 23/10/20
- @since ACF 5.9.2
- @param string $key The property name.
- @param mixed $default The default value to fallback to.
- @return mixed

## `acf_enable_filter()`

acf\_enable\_filter

- Enables a filter with the given name.
- @date 14/7/16
- @since ACF 5.4.0
- @param string $name The modifier name.
- @return void

## `acf_disable_filter()`

acf\_disable\_filter

- Disables a filter with the given name.
- @date 14/7/16
- @since ACF 5.4.0
- @param string $name The modifier name.
- @return void

## `acf_is_filter_enabled()`

acf\_is\_filter\_enabled

- Returns the state of a filter for the given name.
- @date 14/7/16
- @since ACF 5.4.0
- @param string $name The modifier name.
- @return array

## `acf_get_filters()`

acf\_get\_filters

- Returns an array of filters in their current state.
- @date 14/7/16
- @since ACF 5.4.0
- @return array

## `acf_set_filters()`

acf\_set\_filters

- Sets an array of filter states.
- @date 14/7/16
- @since ACF 5.4.0
- @param array $filters An Array of modifiers.
- @return array

## `acf_disable_filters()`

acf\_disable\_filters

- Disables all filters and returns the previous state.
- @date 14/7/16
- @since ACF 5.4.0
- @return array

## `acf_enable_filters()`

acf\_enable\_filters

- Enables all or an array of specific filters and returns the previous state.
- @date 14/7/16
- @since ACF 5.4.0
- @param array $filters An Array of modifiers.
- @return array

## `acf_idval()`

acf\_idval

- Parses the provided value for an ID.
- @date 29/3/19
- @since ACF 5.7.14
- @param mixed $value A value to parse.
- @return integer

## `acf_maybe_idval()`

acf\_maybe\_idval

- Checks value for potential id value.
- @date 6/4/19
- @since ACF 5.7.14
- @param mixed $value A value to parse.
- @return mixed

## `acf_format_numerics()`

Convert any numeric strings into their equivalent numeric type. This function will  
work with both single values and arrays.

- @param mixed $value Either a single value or an array of values.
- @return mixed

## `acf_numval()`

acf\_numval

- Casts the provided value as eiter an int or float using a simple hack.
- @date 11/4/19
- @since ACF 5.7.14
- @param mixed $value A value to parse.
- @return (int|float)

## `acf_idify()`

acf\_idify

- Returns an id attribute friendly string.
- @date 24/12/17
- @since ACF 5.6.5
- @param string $str The string to convert.
- @return string

## `acf_slugify()`

Returns a slug friendly string.

- @date 24/12/17
- @since ACF 5.6.5
- @param string $str The string to convert.
- @param string $glue The glue between each slug piece.
- @return string

## `acf_punctify()`

Returns a string with correct full stop punctuation.

- @date 12/7/19
- @since ACF 5.8.2
- @param string $str The string to format.
- @return string

## `acf_did()`

acf\_did

- Returns true if ACF already did an event.
- @date 30/8/19
- @since ACF 5.8.1
- @param string $name The name of the event.
- @return boolean

## `acf_strlen()`

Returns the length of a string that has been submitted via $\_POST.

- Uses the following process:

1. Unslash the string because posted values will be slashed.
2. Decode special characters because [wp\_kses()](#reference/functions/wp_kses) will normalize entities.
3. Treat line-breaks as a single character instead of two.
4. Use mb\_strlen() to accommodate special characters.

- @date 04/06/2020
- @since ACF 5.9.0
- @param string $str The string to review.
- @return integer

## `acf_with_default()`

Returns a value with default fallback.

- @date 6/4/20
- @since ACF 5.9.0
- @param mixed $value The value.
- @param mixed $default\_value The default value.
- @return mixed

## `acf_doing_action()`

Returns the current priority of a running action.

- @date 14/07/2020
- @since ACF 5.9.0
- @param string $action The action name.
- @return integer|boolean

## `acf_get_current_url()`

Returns the current URL.

- @date 23/01/2015
- @since ACF 5.1.5
- @return string

## `acf_sanitize_request_args()`

Sanitizes request arguments.

- @param mixed $args The data to sanitize.
- @return array|boolean|float|integer|mixed|string

## `acf_sanitize_files_array()`

Sanitizes file upload arrays.

- @since ACF 6.0.4
- @param array $args The file array.
- @return array

## `acf_sanitize_files_value_array()`

Sanitizes file upload values within the array.

- This addresses nested file fields within repeaters and groups.
- @since ACF 6.0.5
- @param array $array The file upload array.
- @param string $sanitize\_function Callback used to sanitize array value.
- @return array

## `acf_maybe_unserialize()`

Maybe unserialize, but don’t allow any classes.

- @since ACF 6.1
- @param string $data String to be unserialized, if serialized.
- @return mixed The unserialized, or original data.

## `acf_is_beta()`

Check if ACF is a beta-like release.

- @since ACF 6.3
- @return boolean True if the current install version contains a dash, indicating a alpha, beta or RC release.

## `acf_get_version_when_first_activated()`

Returns the version of ACF when it was first activated.  
However, if ACF was first activated prior to the introduction of the acf\_first\_activated\_version option,  
this function returns false (boolean) to indicate that the version could not be determined.

- @since ACF 6.3
- @return string|boolean The (string) version of ACF when it was first activated, or false (boolean) if the version could not be determined.

---

---

# Acf Hook Functions Global Functions <a name="secure-custom-fields/code-reference/acf-hook-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-hook-functions-file/

## `acf_add_filter_variations()`

acf\_add\_filter\_variations

- Registers variations for the given filter.
- @date 26/1/19
- @since ACF 5.7.11
- @param string $filter The filter name.
- @param array $variations An array variation keys.
- @param integer $index The param index to find variation values.
- @return void

## `acf_add_action_variations()`

acf\_add\_action\_variations

- Registers variations for the given action.
- @date 26/1/19
- @since ACF 5.7.11
- @param string $action The action name.
- @param array $variations An array variation keys.
- @param integer $index The param index to find variation values.
- @return void

## `_acf_apply_hook_variations()`

\_acf\_apply\_hook\_variations

- Applies hook variations during [apply\_filters()](#reference/functions/apply_filters) or [do\_action()](#reference/functions/do_action) .
- @date 25/1/19
- @since ACF 5.7.11
- @param mixed
- @return mixed

## `acf_add_deprecated_filter()`

acf\_add\_deprecated\_filter

- Registers a deprecated filter to run during the replacement.
- @date 25/1/19
- @since ACF 5.7.11
- @param string $deprecated The deprecated hook.
- @param string $version The version this hook was deprecated.
- @param string $replacement The replacement hook.
- @return void

## `acf_add_deprecated_action()`

acf\_add\_deprecated\_action

- Registers a deprecated action to run during the replacement.
- @date 25/1/19
- @since ACF 5.7.11
- @param string $deprecated The deprecated hook.
- @param string $version The version this hook was deprecated.
- @param string $replacement The replacement hook.
- @return void

## `_acf_apply_deprecated_hook()`

Applies a deprecated filter during [apply\_filters()](#reference/functions/apply_filters) or [do\_action()](#reference/functions/do_action) .

- @date 25/1/19
- @since ACF 5.7.11
- @param mixed
- @return mixed

---

---

# Acf Input Functions Global Functions <a name="secure-custom-fields/code-reference/acf-input-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-input-functions-file/

## `acf_filter_attrs()`

acf\_filter\_attrs

- Filters out empty attrs from the provided array.
- @date 11/6/19
- @since ACF 5.8.1
- @param array $attrs The array of attrs.
- @return array

## `acf_esc_attrs()`

acf\_esc\_attrs

- Generated valid HTML from an array of attrs.
- @date 11/6/19
- @since ACF 5.8.1
- @param array $attrs The array of attrs.
- @return string

## `acf_esc_html()`

Sanitizes text content and strips out disallowed HTML.

- This function emulates `wp_kses_post()` with a context of “acf” for extensibility.
- @since ACF 5.9.6
- @param string $string The string to be escaped
- @return string|false

## `_acf_kses_allowed_html()`

Private callback for the “wp\_kses\_allowed\_html” filter used to return allowed HTML for “acf” context.

- @since ACF 5.9.6
- @param array $tags An array of allowed tags.
- @param string $context The context name.
- @return array

## `acf_hidden_input()`

acf\_hidden\_input

- Renders the HTML of a hidden input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_get_hidden_input()`

acf\_get\_hidden\_input

- Returns the HTML of a hidden input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_text_input()`

acf\_text\_input

- Renders the HTML of a text input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_get_text_input()`

acf\_get\_text\_input

- Returns the HTML of a text input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_file_input()`

acf\_file\_input

- Renders the HTML of a file input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_get_file_input()`

acf\_get\_file\_input

- Returns the HTML of a file input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_textarea_input()`

acf\_textarea\_input

- Renders the HTML of a textarea input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_get_textarea_input()`

acf\_get\_textarea\_input

- Returns the HTML of a textarea input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_checkbox_input()`

acf\_checkbox\_input

- Renders the HTML of a checkbox input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_get_checkbox_input()`

acf\_get\_checkbox\_input

- Returns the HTML of a checkbox input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_radio_input()`

acf\_radio\_input

- Renders the HTML of a radio input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_get_radio_input()`

acf\_get\_radio\_input

- Returns the HTML of a radio input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_select_input()`

acf\_select\_input

- Renders the HTML of a select input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_get_select_input()`

acf\_select\_input

- Returns the HTML of a select input.
- @date 3/02/2014
- @since ACF 5.0.0
- @param array $attrs The array of attrs.
- @return string

## `acf_walk_select_input()`

acf\_walk\_select\_input

- Returns the HTML of a select input’s choices.
- @date 27/6/17
- @since ACF 5.6.0
- @param array $choices The choices to walk through.
- @param array $values The selected choices.
- @param array $depth The current walk depth.
- @return string

## `acf_clean_atts()`

acf\_clean\_atts

- See acf\_filter\_attrs().
- @date 3/10/17
- @since ACF 5.6.3
- @param array $attrs The array of attrs.
- @return string

## `acf_esc_atts()`

acf\_esc\_atts

- See acf\_esc\_attrs().
- @date 27/6/17
- @since ACF 5.6.0
- @param array $attrs The array of attrs.
- @return string

## `acf_esc_attr()`

acf\_esc\_attr

- @date 13/6/19
- @since ACF 5.8.1
- @deprecated 5.6.0  
    @see acf\_esc\_attrs().
- @param array $attrs The array of attrs.
- @return string

## `acf_esc_attr_e()`

acf\_esc\_attr\_e

- See acf\_esc\_attrs().
- @date 13/6/19
- @since ACF 5.8.1
- @deprecated 5.6.0
- @param array $attrs The array of attrs.

## `acf_esc_atts_e()`

acf\_esc\_atts\_e

- See acf\_esc\_attrs().
- @date 13/6/19
- @since ACF 5.8.1
- @deprecated 5.6.0
- @param array $attrs The array of attrs.

---

---

# Acf Internal Post Type Functions Global Functions <a name="secure-custom-fields/code-reference/acf-internal-post-type-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-internal-post-type-functions-file/

## `acf_get_internal_post_type_instance()`

Gets an instance of an ACF\_Internal\_Post\_Type.

- @param string $post\_type The ACF internal post type to get the instance for.
- @return ACF\_Internal\_Post\_Type|bool The internal post type class instance, or false on failure.

## `acf_get_internal_post_type()`

Get an ACF CPT object as an array

- @param integer $id The post ID being queried.
- @param string $post\_type The post type being queried.
- @return array|false The post type object.

## `acf_get_raw_internal_post_type()`

Retrieves raw internal post type data for the given identifier.

- @since ACF 6.1
- @param integer|string $id The post ID.
- @param string $post\_type The post type name.
- @return array|false The internal post type array.

## `acf_get_internal_post_type_post()`

Gets a post object from an ACF internal post type.

- @since ACF 6.1
- @param integer|string $id The post ID, key, or name.
- @param string $post\_type The post type name.
- @return object|boolean The post object, or false on failure.

## `acf_is_internal_post_type_key()`

Returns true if the given identifier is a ACF internal post type key.

- @since ACF 6.1
- @param string $id The identifier.
- @param string $post\_type The ACF post type the key is for.
- @return boolean

## `acf_validate_internal_post_type()`

Validates an ACF internal post type.

- @since ACF 6.1
- @param array $internal\_post\_type The internal post type array.
- @param string $post\_type\_name The post type name.
- @return array|boolean

## `acf_translate_internal_post_type()`

Translates the settings for an ACF internal post type.

- @since ACF 6.1
- @param array $internal\_post\_type The ACF post array.
- @param string $post\_type The post type name.
- @return array

## `acf_get_internal_post_type_posts()`

Returns and array of ACF posts for the given $filter.

- @since ACF 6.1
- @param string $post\_type The ACF post type to get posts for.
- @param array $filter An array of args to filter results by.
- @return array

## `acf_get_raw_internal_post_type_posts()`

Returns an array of raw/unvalidated ACF post data.

- @since ACF 6.1
- @param string $post\_type The ACF post type to get post data for.
- @return array

## `acf_filter_internal_post_type_posts()`

Returns a filtered array of ACF posts based on the given $args.

- @since ACF 6.1
- @param array $posts An array of ACF posts.
- @param array $args An array of args to filter by.
- @param string $post\_type The ACF post type of the posts being filtered.
- @return array

## `acf_update_internal_post_type()`

Updates a internal post type in the database.

- @since ACF 6.1
- @param array $internal\_post\_type Array of data to be saved.
- @param string $post\_type\_name The internal post type being updated.
- @return array

## `acf_flush_internal_post_type_cache()`

Deletes all caches for the provided ACF post.

- @since ACF 6.1
- @param array $post The ACF post array.
- @param string $post\_type The ACF post type the cache is being cleared for.
- @return void

## `acf_delete_internal_post_type()`

Deletes an internal post type from the database.

- @since ACF 6.1
- @param integer|string $id The internal post type ID, key or name.
- @param string $post\_type\_name The post type to be deleted.
- @return boolean True if field group was deleted.

## `acf_trash_internal_post_type()`

Trashes an internal post type.

- @since ACF 6.1
- @param integer|string $id The internal post type ID, key, or name.
- @param string $post\_type\_name The post type being trashed.
- @return boolean True if post was trashed.

## `acf_untrash_internal_post_type()`

Restores an ACF post from the trash.

- @since ACF 6.1
- @param integer|string $id The internal post type ID, key, or name.
- @param string $post\_type\_name The post type being untrashed.
- @return boolean True if post was untrashed.

## `acf_is_internal_post_type()`

Returns true if the given params match an ACF post.

- @since ACF 6.1
- @param array $post The ACF post array.
- @param string $post\_type The ACF post type.
- @return boolean

## `acf_duplicate_internal_post_type()`

Duplicates an ACF post.

- @since ACF 6.1
- @param integer|string $id The field\_group ID, key or name.
- @param integer $new\_post\_id Optional ID to override.
- @param string $post\_type The post type of the post being duplicated.
- @return array|boolean The new ACF post, or false on failure.

## `acf_update_internal_post_type_active_status()`

Activates or deactivates an ACF post.

- @param integer|string $id The field\_group ID, key or name.
- @param boolean $activate True if the post should be activated.
- @param string $post\_type The post type being activated/deactivated.
- @return boolean

## `acf_get_internal_post_type_edit_link()`

Checks if the current user can edit the field group and returns the edit url.

- @since ACF 6.1
- @param integer $post\_id The ACF post ID.
- @param string $post\_type The ACF post type to get the edit link for.
- @return string

## `acf_prepare_internal_post_type_for_export()`

Returns a modified field group ready for export.

- @since ACF 6.1
- @param array $post The ACF post array.
- @param string $post\_type The post type of the ACF post being exported.
- @return array

## `acf_export_internal_post_type_as_php()`

Exports an ACF post as PHP.

- @since ACF 6.1
- @param array $post The ACF post array.
- @param string $post\_type The post type of the ACF post being exported.
- @return string|boolean

## `acf_prepare_internal_post_type_for_import()`

Prepares an ACF post for the import process.

- @since ACF 6.1
- @param array $post The ACF post array.
- @param string $post\_type The post type of the ACF post being imported.
- @return array

## `acf_import_internal_post_type()`

Imports an ACF post into the database.

- @since ACF 6.1
- @param array $post The ACF post array.
- @param string $post\_type The post type of the ACF post being imported.
- @return array The imported post.

## `acf_determine_internal_post_type()`

Tries to determine the ACF post type for the provided key.

- @param string $key The key to check.
- @return string|boolean

## `acf_is_valid_internal_post_type_key()`

Check if the provided key is an identifiable ACF post type.

- @since ACF 6.2.8
- @param string $key The key to check.
- @return boolean

## `acf_internal_post_object_contains_valid_key()`

Check if the provided post type object contains a valid internal post type key.

- @since ACF 6.2.8
- @param array $internal\_post\_type The post type object array to check it’s key.
- @return boolean

## `acf_get_combined_post_type_settings_tabs()`

Returns an array of tabs for the post type advanced settings.

- @since ACF 6.1
- @return array

## `acf_get_combined_taxonomy_settings_tabs()`

Returns an array of tabs for the taxonomy advanced settings.

- @since ACF 6.1
- @return array

## `acf_get_combined_options_page_settings_tabs()`

Returns an array of tabs for the options page advanced settings

- @since ACF 6.2
- @return array

## `acf_get_post_type_from_screen_value()`

Converts an \_acf\_screen or hook value into a post type.

- @since ACF 6.1
- @param string $screen The ACF screen being viewed.
- @return string The post type matching the screen or hook value.

## `acf_validate_internal_post_type_values()`

Calls the ajax validator for a post type

- @since ACF 6.1
- @param string $post\_type The post type being validated.
- @return mixed

## `acf_add_internal_post_type_validation_error()`

Adds a validation error for ACF internal post types.

- @since ACF 6.1
- @param string $name The name of the input.
- @param string $message An optional error message to display.
- @param string $post\_type Optional post type the error message is for.
- @return void

## `acf_get_post_type_from_request_args()`

Gets an ACF post type from request args and verifies nonce based on action.

- @since ACF 6.1.5
- @param string $action The action being performed.
- @return array|boolean

## `acf_get_taxonomy_from_request_args()`

Gets an ACF taxonomy from request args and verifies nonce based on action.

- @since ACF 6.1.5
- @param string $action The action being performed.
- @return array|boolean

## `acf_get_ui_options_page_from_request_args()`

Gets an ACF options page from request args and verifies nonce based on action.

- @since ACF 6.2
- @param string $action The action being performed.
- @return array|boolean

---

---

# Acf Meta Functions Global Functions <a name="secure-custom-fields/code-reference/acf-meta-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-meta-functions-file/

## `acf_get_meta()`

Returns an array of “ACF only” meta for the given post\_id.

- @date 9/10/18
- @since ACF 5.8.0
- @param mixed $post\_id The post\_id for this data.
- @return array

## `acf_get_option_meta()`

acf\_get\_option\_meta

- Returns an array of meta for the given wp\_option name prefix in the same format as [get\_post\_meta()](#reference/functions/get_post_meta) .
- @date 9/10/18
- @since ACF 5.8.0
- @param string $prefix The wp\_option name prefix.
- @return array

## `acf_get_metadata()`

Retrieves specific metadata from the database.

- @date 16/10/2015
- @since ACF 5.2.3
- @param integer|string $post\_id The post id.
- @param string $name The meta name.
- @param boolean $hidden If the meta is hidden (starts with an underscore).
- @return mixed

## `acf_update_metadata()`

Updates metadata in the database.

- @date 16/10/2015
- @since ACF 5.2.3
- @param integer|string $post\_id The post id.
- @param string $name The meta name.
- @param mixed $value The meta value.
- @param boolean $hidden If the meta is hidden (starts with an underscore).
- @return integer|boolean Meta ID if the key didn’t exist, true on successful update, false on failure.

## `acf_delete_metadata()`

Deletes metadata from the database.

- @date 16/10/2015
- @since ACF 5.2.3
- @param integer|string $post\_id The post id.
- @param string $name The meta name.
- @param boolean $hidden If the meta is hidden (starts with an underscore).
- @return boolean

## `acf_copy_metadata()`

acf\_copy\_postmeta

- Copies meta from one post to another. Useful for saving and restoring revisions.
- @date 25/06/2016
- @since ACF 5.3.8
- @param (int|string) $from\_post\_id The post id to copy from.
- @param (int|string) $to\_post\_id The post id to paste to.
- @return void

## `acf_copy_postmeta()`

acf\_copy\_postmeta

- Copies meta from one post to another. Useful for saving and restoring revisions.
- @date 25/06/2016
- @since ACF 5.3.8
- @deprecated 5.7.11
- @param integer $from\_post\_id The post id to copy from.
- @param integer $to\_post\_id The post id to paste to.
- @return void

## `acf_get_meta_field()`

acf\_get\_meta\_field

- Returns a field using the provided $id and $post\_id parameters.  
    Looks for a reference to help loading the correct field via name.
- @date 21/1/19
- @since ACF 5.7.10
- @param string $key The meta name (field name).
- @param (int|string) $post\_id The post\_id where this field’s value is saved.
- @return (array|false) The field array.

## `acf_get_metaref()`

acf\_get\_metaref

- Retrieves reference metadata from the database.
- @date 16/10/2015
- @since ACF 5.2.3
- @param (int|string) $post\_id The post id.
- @param string type The reference type (fields|groups).
- @param string $name An optional specific name
- @return mixed

## `acf_update_metaref()`

acf\_update\_metaref

- Updates reference metadata in the database.
- @date 16/10/2015
- @since ACF 5.2.3
- @param (int|string) $post\_id The post id.
- @param string type The reference type (fields|groups).
- @param array $references An array of references.
- @return (int|bool) Meta ID if the key didn’t exist, true on successful update, false on failure.

---

---

# Acf Post Functions Global Functions <a name="secure-custom-fields/code-reference/acf-post-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-post-functions-file/

## `acf_get_post_templates()`

Returns available templates for each post type.

- @date 29/8/17
- @since ACF 5.6.2
- @return array

---

---

# Acf Post Type Functions Global Functions <a name="secure-custom-fields/code-reference/acf-post-type-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-post-type-functions-file/

## `acf_get_post_type()`

Get an ACF CPT as an array

- @param integer|string $id The post ID being queried.
- @return array|false The post type object.

## `acf_get_raw_post_type()`

Retrieves a raw ACF CPT.

- @since ACF 6.1
- @param integer|string $id The post ID.
- @return array|false The internal post type array.

## `acf_get_post_type_post()`

Gets a post object for an ACF CPT.

- @since ACF 6.1
- @param integer|string $id The post ID, key, or name.
- @return object|boolean The post object, or false on failure.

## `acf_is_post_type_key()`

Returns true if the given identifier is an ACF CPT key.

- @since ACF 6.1
- @param string $id The identifier.
- @return boolean

## `acf_validate_post_type()`

Validates an ACF CPT.

- @since ACF 6.1
- @param array $post\_type The ACF post type array.
- @return array|boolean

## `acf_translate_post_type()`

Translates the settings for an ACF internal post type.

- @since ACF 6.1
- @param array $post\_type The ACF post type array.
- @return array

## `acf_get_acf_post_types()`

Returns and array of ACF post types for the given $filter.

- @since ACF 6.1
- @param array $filter An array of args to filter results by.
- @return array

## `acf_get_raw_post_types()`

Returns an array of raw ACF post types.

- @since ACF 6.1
- @return array

## `acf_filter_post_types()`

Returns a filtered array of ACF post types based on the given $args.

- @since ACF 6.1
- @param array $post\_types An array of ACF posts.
- @param array $args An array of args to filter by.
- @return array

## `acf_update_post_type()`

Updates an ACF post type in the database.

- @since ACF 6.1
- @param array $post\_type The main ACF post type array.
- @return array

## `acf_flush_post_type_cache()`

Deletes all caches for the provided ACF post type.

- @since ACF 6.1
- @param array $post\_type The ACF post type array.
- @return void

## `acf_delete_post_type()`

Deletes an ACF post type from the database.

- @since ACF 6.1
- @param integer|string $id The ACF post type ID, key or name.
- @return boolean True if post type was deleted.

## `acf_trash_post_type()`

Trashes an ACF post type.

- @since ACF 6.1
- @param integer|string $id The post type ID, key, or name.
- @return boolean True if post was trashed.

## `acf_untrash_post_type()`

Restores an ACF post type from the trash.

- @since ACF 6.1
- @param integer|string $id The post type ID, key, or name.
- @return boolean True if post was untrashed.

## `acf_is_post_type()`

Returns true if the given params match an ACF post type.

- @since ACF 6.1
- @param array $post\_type The ACF post type array.
- @return boolean

## `acf_duplicate_post_type()`

Duplicates an ACF post type.

- @since ACF 6.1
- @param integer|string $id The ACF post type ID, key or name.
- @param integer $new\_post\_id Optional ID to override.
- @return array|boolean The new ACF post type, or false on failure.

## `acf_update_post_type_active_status()`

Activates or deactivates an ACF post type.

- @param integer|string $id The ACF post type ID, key or name.
- @param boolean $activate True if the post type should be activated.
- @return boolean

## `acf_get_post_type_edit_link()`

Checks if the current user can edit the post type and returns the edit url.

- @since ACF 6.1
- @param integer $post\_id The ACF post type ID.
- @return string

## `acf_prepare_post_type_for_export()`

Returns a modified ACF post type ready for export.

- @since ACF 6.1
- @param array $post\_type The ACF post type array.
- @return array

## `acf_export_post_type_as_php()`

Exports an ACF post type as PHP.

- @since ACF 6.1
- @param array $post\_type The ACF post type array.
- @return string|boolean

## `acf_prepare_post_type_for_import()`

Prepares an ACF post type for the import process.

- @since ACF 6.1
- @param array $post\_type The ACF post type array.
- @return array

## `acf_import_post_type()`

Imports an ACF post type into the database.

- @since ACF 6.1
- @param array $post\_type The ACF post type array.
- @return array The imported post type.

## `acf_export_enter_title_here()`

Exports the “Enter Title Here” text for the provided ACF post types.

- @since ACF 6.2.1
- @param array $post\_types The post types being exported.
- @return string

---

---

# Acf Taxonomy Functions Global Functions <a name="secure-custom-fields/code-reference/acf-taxonomy-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-taxonomy-functions-file/

## `acf_get_taxonomy()`

Get an ACF taxonomy as an array

- @param integer|string $id The post ID being queried.
- @return array|false The taxonomy object.

## `acf_get_raw_taxonomy()`

Retrieves a raw ACF taxonomy.

- @since ACF 6.1
- @param integer|string $id The post ID.
- @return array|false The taxonomy array.

## `acf_get_taxonomy_post()`

Gets a post object for an ACF taxonomy.

- @since ACF 6.1
- @param integer|string $id The post ID, key, or name.
- @return object|boolean The post object, or false on failure.

## `acf_is_taxonomy_key()`

Returns true if the given identifier is an ACF taxonomy key.

- @since ACF 6.1
- @param string $id The identifier.
- @return boolean

## `acf_validate_taxonomy()`

Validates an ACF taxonomy.

- @since ACF 6.1
- @param array $taxonomy The ACF taxonomy array.
- @return array|boolean

## `acf_translate_taxonomy()`

Translates the settings for an ACF taxonomy.

- @since ACF 6.1
- @param array $taxonomy The ACF taxonomy array.
- @return array

## `acf_get_acf_taxonomies()`

Returns an array of ACF taxonomies for the given $filter.

- @since ACF 6.1
- @param array $filter An array of args to filter results by.
- @return array

## `acf_get_raw_taxonomies()`

Returns an array of raw ACF taxonomies.

- @since ACF 6.1
- @return array

## `acf_filter_taxonomies()`

Returns a filtered array of ACF taxonomies based on the given $args.

- @since ACF 6.1
- @param array $taxonomies An array of ACF taxonomies.
- @param array $args An array of args to filter by.
- @return array

## `acf_update_taxonomy()`

Updates an ACF taxonomy in the database.

- @since ACF 6.1
- @param array $taxonomy The main ACF taxonomy array.
- @return array

## `acf_flush_taxonomy_cache()`

Deletes all caches for the provided ACF taxonomy.

- @since ACF 6.1
- @param array $taxonomy The ACF taxonomy array.
- @return void

## `acf_delete_taxonomy()`

Deletes an ACF taxonomy from the database.

- @since ACF 6.1
- @param integer|string $id The ACF taxonomy ID, key or name.
- @return boolean True if taxonomy was deleted.

## `acf_trash_taxonomy()`

Trashes an ACF taxonomy.

- @since ACF 6.1
- @param integer|string $id The taxonomy ID, key, or name.
- @return boolean True if taxonomy was trashed.

## `acf_untrash_taxonomy()`

Restores an ACF taxonomy from the trash.

- @since ACF 6.1
- @param integer|string $id The taxonomy ID, key, or name.
- @return boolean True if taxonomy was untrashed.

## `acf_is_taxonomy()`

Returns true if the given params match an ACF taxonomy.

- @since ACF 6.1
- @param array $taxonomy The ACF taxonomy array.
- @return boolean

## `acf_duplicate_taxonomy()`

Duplicates an ACF taxonomy.

- @since ACF 6.1
- @param integer|string $id The ACF taxonomy ID, key or name.
- @param integer $new\_post\_id Optional ID to override.
- @return array|boolean The new ACF taxonomy, or false on failure.

## `acf_update_taxonomy_active_status()`

Activates or deactivates an ACF taxonomy.

- @param integer|string $id The ACF taxonomy ID, key or name.
- @param boolean $activate True if the taxonomy should be activated.
- @return boolean

## `acf_get_taxonomy_edit_link()`

Checks if the current user can edit the taxonomy and returns the edit url.

- @since ACF 6.1
- @param integer $post\_id The ACF taxonomy ID.
- @return string

## `acf_prepare_taxonomy_for_export()`

Returns a modified ACF taxonomy ready for export.

- @since ACF 6.1
- @param array $taxonomy The ACF taxonomy array.
- @return array

## `acf_export_taxonomy_as_php()`

Exports an ACF taxonomy as PHP.

- @since ACF 6.1
- @param array $taxonomy The ACF taxonomy array.
- @return string|boolean

## `acf_prepare_taxonomy_for_import()`

Prepares an ACF taxonomy for the import process.

- @since ACF 6.1
- @param array $taxonomy The ACF taxonomy array.
- @return array

## `acf_import_taxonomy()`

Imports an ACF taxonomy into the database.

- @since ACF 6.1
- @param array $taxonomy The ACF taxonomy array.
- @return array The imported taxonomy.

---

---

# Acf User Functions Global Functions <a name="secure-custom-fields/code-reference/acf-user-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-user-functions-file/

## `acf_get_users()`

acf\_get\_users

- Similar to the [get\_users()](#reference/functions/get_users) function but with extra functionality.
- @date 9/1/19
- @since ACF 5.7.10
- @param array $args The query args.
- @return array

## `acf_get_user_result()`

acf\_get\_user\_result

- Returns a result containing “id” and “text” for the given user.
- @date 21/5/19
- @since ACF 5.8.1
- @param [WP\_User](#reference/classes/wp_user) $user The user object.
- @return array

## `acf_get_user_role_labels()`

acf\_get\_user\_role\_labels

- Returns an array of user roles in the format “name =&gt; label”.
- @date 20/5/19
- @since ACF 5.8.1
- @param array $roles A specific array of roles.
- @return array

## `acf_allow_unfiltered_html()`

acf\_allow\_unfiltered\_html

- Returns true if the current user is allowed to save unfiltered HTML.
- @date 9/1/19
- @since ACF 5.7.10
- @return boolean

---

---

# Acf Utility Functions Global Functions <a name="secure-custom-fields/code-reference/acf-utility-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-utility-functions-file/

## `acf_new_instance()`

acf\_new\_instance

- Creates a new instance of the given class and stores it in the instances data store.
- @date 9/1/19
- @since ACF 5.7.10
- @param string $class The class name.
- @return object The instance.

## `acf_get_instance()`

Returns an instance for the given class.

- @date 9/1/19
- @since ACF 5.7.10
- @param string $class The class name.
- @return object The instance.

## `acf_register_store()`

acf\_register\_store

- Registers a data store.
- @date 9/1/19
- @since ACF 5.7.10
- @param string $name The store name.
- @param array $data Array of data to start the store with.
- @return ACF\_Data

## `acf_get_store()`

acf\_get\_store

- Returns a data store.
- @date 9/1/19
- @since ACF 5.7.10
- @param string $name The store name.
- @return ACF\_Data

## `acf_switch_stores()`

acf\_switch\_stores

- Triggered when switching between sites on a multisite installation.
- @date 13/2/19
- @since ACF 5.7.11
- @param integer $site\_id New blog ID.
- @param int prev\_blog\_id Prev blog ID.
- @return void

## `acf_get_path()`

acf\_get\_path

- Returns the plugin path to a specified file.
- @date 28/9/13
- @since ACF 5.0.0
- @param string $filename The specified file.
- @return string

## `acf_get_url()`

acf\_get\_url

- Returns the plugin url to a specified file.  
    This function also defines the ACF\_URL constant.
- @date 12/12/17
- @since ACF 5.6.8
- @param string $filename The specified file.
- @return string

## `acf_include()`

Includes a file within the ACF plugin.

- @date 10/3/14
- @since ACF 5.0.0
- @param string $filename The specified file.
- @return void

---

---

# Acf Value Functions Global Functions <a name="secure-custom-fields/code-reference/acf-value-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-value-functions-file/

## `acf_get_reference()`

acf\_get\_reference

- Retrieves the field key for a given field name and post\_id.
- @date 26/1/18
- @since ACF 5.6.5
- @param string $field\_name The name of the field. eg ‘sub\_heading’.
- @param mixed $post\_id The post\_id of which the value is saved against.
- @return string The field key.

## `acf_get_value()`

Retrieves the value for a given field and post\_id.

- @date 28/09/13
- @since ACF 5.0.0
- @param integer|string $post\_id The post id.
- @param array $field The field array.
- @return mixed

## `acf_format_value()`

Returns a formatted version of the provided value.

- @since ACF 5.0.0
- @param mixed $value The field value.
- @param integer|string $post\_id The post id.
- @param array $field The field array.
- @param boolean $escape\_html Ask the field for a HTML safe version of it’s output.
- @return mixed

## `acf_update_value()`

acf\_update\_value

- Updates the value for a given field and post\_id.
- @date 28/09/13
- @since ACF 5.0.0
- @param mixed $value The new value.
- @param (int|string) $post\_id The post id.
- @param array $field The field array.
- @return boolean

## `acf_update_values()`

acf\_update\_values

- Updates an array of values.
- @date 26/2/19
- @since ACF 5.7.13
- @param array values The array of values.
- @param (int|string) $post\_id The post id.
- @return void

## `acf_flush_value_cache()`

acf\_flush\_value\_cache

- Deletes all cached data for this value.
- @date 22/1/19
- @since ACF 5.7.10
- @param (int|string) $post\_id The post id.
- @param string $field\_name The field name.
- @return void

## `acf_delete_value()`

acf\_delete\_value

- Deletes the value for a given field and post\_id.
- @date 28/09/13
- @since ACF 5.0.0
- @param (int|string) $post\_id The post id.
- @param array $field The field array.
- @return boolean

## `acf_preview_value()`

acf\_preview\_value

- Return a human friendly ‘preview’ for a given field value.
- @date 28/09/13
- @since ACF 5.0.0
- @param mixed $value The new value.
- @param (int|string) $post\_id The post id.
- @param array $field The field array.
- @return boolean

## `acf_log_invalid_field_notice()`

Potentially log an error if a field doesn’t exist when we expect it to.

- @param array $field An array representing the field that a value was requested for.
- @param string $function The function that noticed the problem.
- @return void

---

---

# Acf Wp Functions Global Functions <a name="secure-custom-fields/code-reference/acf-wp-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/acf-wp-functions-file/

## `acf_get_object_type()`

Returns a WordPress object type.

- @date 1/4/20
- @since ACF 5.9.0
- @param string $object\_type The object type (post, term, user, etc).
- @param string $object\_subtype Optional object subtype (post type, taxonomy).
- @return object

## `acf_decode_post_id()`

Decodes a post\_id value such as 1 or “user\_1” into an array containing the type and ID.

- @date 25/1/19
- @since ACF 5.7.11
- @param (int|string) $post\_id The post id.
- @return array

## `acf_get_object_type_rest_base()`

Determine the REST base for a post type or taxonomy object. Note that this is not intended for use  
with term or post objects but is, instead, to be used with the underlying [WP\_Post\_Type](#reference/classes/wp_post_type) and [WP\_Taxonomy](#reference/classes/wp_taxonomy)  
instances.

- @param [WP\_Post\_Type](#reference/classes/wp_post_type)|[WP\_Taxonomy](#reference/classes/wp_taxonomy) $type\_object
- @return string|null

## `acf_get_object_id()`

Extract the ID of a given object/array. This supports all expected types handled by our update\_fields() and  
load\_fields() callbacks.

- @param [WP\_Post](#reference/classes/wp_post)|[WP\_User](#reference/classes/wp_user)|[WP\_Term](#reference/classes/wp_term)|[WP\_Comment](#reference/classes/wp_comment)|array $object
- @return integer|mixed|null

---

---

# Assets Global Functions <a name="secure-custom-fields/code-reference/assets-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/assets-file/

## `acf_localize_text()`

Appends an array of i18n data for localization.

- @date 13/4/18
- @since ACF 5.6.9
- @param array $text An array of text for i18n.
- @return void

## `acf_localize_data()`

Appends an array of l10n data for localization.

- @date 13/4/18
- @since ACF 5.6.9
- @param array $data An array of data for l10n.
- @return void

## `acf_enqueue_script()`

Enqueues a script with support for supplemental inline scripts.

- @date 27/4/20
- @since ACF 5.9.0
- @param string $name The script name.
- @return void

## `acf_enqueue_scripts()`

Enqueues the input scripts required for fields.

- @date 13/4/18
- @since ACF 5.6.9
- @param array $args See ACF\_Assets::enqueue\_scripts() for a list of args.
- @return void

## `acf_enqueue_uploader()`

Enqueues the WP media uploader scripts and styles.

- @date 27/10/2014
- @since ACF 5.0.9
- @return void

---

---

# Blocks Global Functions <a name="secure-custom-fields/code-reference/blocks-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/blocks-file/

## `acf_add_block_namespace()`

Prefix block names for SCF blocks registered through block.json

- @since ACF 6.0.0
- @param array $metadata The block metadata array.
- @return array The original array with a prefixed block name if it’s an ACF block.

## `acf_handle_json_block_registration()`

Handle an SCF block registered through block.json

- @since ACF 6.0.0
- @param array $settings The compiled block settings.
- @param array $metadata The raw json metadata.
- @return array Block registration settings with ACF required additions.

## `acf_is_acf_block_json()`

Check if a block.json block is an SCF block.

- @since ACF 6.0.0
- @param array $metadata The raw block metadata array.
- @return boolean

## `acf_register_block_type()`

Registers a block type.

- @date 18/2/19
- @since ACF 5.8.0
- @param array $block The block settings.
- @return (array|false)

## `acf_register_block()`

See acf\_register\_block\_type().

- @date 18/2/19
- @since ACF 5.7.12
- @param array $block The block settings.
- @return (array|false)

## `acf_has_block_type()`

Returns true if a block type exists for the given name.

- @since ACF 5.7.12
- @param string $name The block type name.
- @return boolean

## `acf_get_block_types()`

Returns an array of all registered block types.

- @since ACF 5.7.12
- @return array

## `acf_get_block_type()`

Returns a block type for the given name.

- @since ACF 5.7.12
- @param string $name The block type name.
- @return (array|null)

## `acf_remove_block_type()`

Removes a block type for the given name.

- @since ACF 5.7.12
- @param string $name The block type name.
- @return void

## `acf_get_block_type_default_attributes()`

Returns an array of default attribute settings for a block type.

- @date 19/11/18
- @since ACF 5.8.0
- @param array $block\_type A block configuration array.
- @return array

## `acf_validate_block_type()`

Validates a block type ensuring all settings exist.

- @since ACF 5.8.0
- @param array $block The block settings.
- @return array

## `acf_prepare_block()`

Prepares a block for use in render\_callback by merging in all settings and attributes.

- @since ACF 5.8.0
- @param array $block The block props.
- @return array|boolean

## `acf_add_back_compat_attributes()`

Add backwards compatible attribute values.

- @since ACF 6.0.0
- @param array $block The original block.
- @return array Modified block array with backwards compatibility attributes.

## `acf_get_block_back_compat_attribute_key_array()`

Get back compat new values and old values.

- @since ACF 6.0.0
- @return array back compat key array.

## `acf_render_block_callback()`

The render callback for all ACF blocks.

- @date 28/10/20
- @since ACF 5.9.2
- @param array $attributes The block attributes.
- @param string $content The block content.
- @param [WP\_Block](#reference/classes/wp_block) $wp\_block The block instance (since WP 5.5).
- @return string The block HTML.

## `acf_rendered_block()`

Returns the rendered block HTML.

- @date 28/2/19
- @since ACF 5.7.13
- @param array $attributes The block attributes.
- @param string $content The block content.
- @param boolean $is\_preview Whether or not the block is being rendered for editing preview.
- @param integer $post\_id The current post being edited or viewed.
- @param [WP\_Block](#reference/classes/wp_block) $wp\_block The block instance (since WP 5.5).
- @param array $context The block context array.
- @param boolean $is\_ajax\_render Whether or not this is an ACF AJAX render.
- @return string The block HTML.

## `acf_render_block()`

Renders the block HTML.

- @since ACF 5.7.12
- @param array $attributes The block attributes.
- @param string $content The block content.
- @param boolean $is\_preview Whether or not the block is being rendered for editing preview.
- @param integer $post\_id The current post being edited or viewed.
- @param [WP\_Block](#reference/classes/wp_block) $wp\_block The block instance (since WP 5.5).
- @param array $context The block context array.
- @return void|string

## `acf_block_render_template()`

Locate and include an ACF block’s template.

- @since ACF 6.0.4
- @param array $block The block props.
- @param string $content The block content.
- @param boolean $is\_preview Whether this is a preview render.
- @param int $post\_id The post ID this block is saved to.
- @param object $wp\_block The block instance object.
- @param array $context The block context array.

## `acf_get_block_fields()`

Returns an array of all fields for the given block.

- @date 24/10/18
- @since ACF 5.8.0
- @param array $block The block props.
- @return array

## `acf_enqueue_block_assets()`

Enqueues and localizes block scripts and styles.

- @since ACF 5.7.13
- @return void

## `acf_enqueue_block_type_assets()`

Enqueues scripts and styles for a specific block type.

- @since ACF 5.7.13
- @param array $block\_type The block type settings.
- @return void

## `acf_ajax_fetch_block()`

Handles the ajax request for block data.

- @since ACF 5.7.13
- @return void

## `acf_get_empty_block_form_html()`

Render the empty block form for when a block has no fields assigned.

- @since ACF 6.0.0
- @param string $block\_name The block name current being rendered.
- @return string The html that makes up a block form with no fields.

## `acf_parse_save_blocks()`

Parse content that may contain HTML block comments and saves ACF block meta.

- @since ACF 5.7.13
- @param string $text Content that may contain HTML block comments.
- @return string

## `acf_parse_save_blocks_callback()`

Callback used in preg\_replace to modify ACF Block comment.

- @since ACF 5.7.13
- @param array $matches The preg matches.
- @return string

## `acf_get_block_id()`

Return or generate a block ID.

- @since ACF 6.0.0
- @param array $attributes A block attributes array.
- @param array $context The block context array, defaults to an empty array.
- @param boolean $force If we should generate a new block ID even if one exists.
- @return string A block ID.

## `acf_ensure_block_id_prefix()`

Ensure a block ID always has a block\_ prefix for post meta internals.

- @since ACF 6.0.0
- @param string $block\_id A possibly non-prefixed block ID.
- @return string A prefixed block ID.

## `acf_serialize_block_attributes()`

This directly copied from the WordPress core `serialize_block_attributes()` function.

- We need this in order to make sure that block attributes are stored in a way that is  
    consistent with how Gutenberg sends them over from JS, and so that things like [wp\_kses()](#reference/functions/wp_kses)   
    work as expected. Copied from core to get around a bug that was fixed in 5.8.1 or on the off chance  
    that folks are still using WP 5.3 or below.
- TODO: Remove this when we refactor `acf_parse_save_blocks_callback()` to use `serialize_block()`,  
    or when we’re confident that folks aren’t using WP versions prior to 5.8.
- @since ACF 5.12
- @param array $block\_attributes Attributes object.
- @return string Serialized attributes.

## `acf_get_block_validation_state()`

Handle validating a block’s fields and return the validity, and any errors.

- This function can use values loaded into Local Meta, which means they have to be  
    converted back to the data format before they can be validated.
- @since ACF 6.3
- @param array $block An array of the block’s data attribute.
- @param boolean $using\_defaults True if the block is currently being generated with default values. Default false.
- @param boolean $use\_post\_data True if we should validate the POSTed data rather than local meta values. Default false.
- @param boolean $on\_load True if we’re validating as part of a render. This is essentially the same as a first load. Default false.
- @return array An array containing a valid boolean, and an errors array.

## `acf_validate_block_from_post_data()`

Handle the specific validation for a block from POSTed values.

- @since ACF 6.3.1
- @param array $block The block object containing the POSTed values and other block data.
- @return array|boolean An array containing the validation errors, or false if there are no errors.

## `acf_validate_block_from_local_meta()`

Handle the specific validation for a block from local meta.

- This function uses the values loaded into Local Meta, which means they have to be  
    converted back to the data format because they can be validated.
- @since ACF 6.3.1
- @param string $block\_id The block ID.
- @param array $field\_objects The field objects in local meta to be validated.
- @param boolean $using\_defaults True if this is the first load of the block, when special validation may apply.
- @return array|boolean An array containing the validation errors, or false if there are no errors.

## `acf_set_after_rest_media_enqueue_reset_flag()`

Set ACF data before a rest call if media scripts have not been enqueued yet for after REST reset.

- @date 07/06/22
- @since ACF 6.0
- @param [WP\_REST\_Response](#reference/classes/wp_rest_response)|[WP\_HTTP\_Response](#reference/classes/wp_http_response)|[WP\_Error](#reference/classes/wp_error)|mixed $response The WordPress response object.
- @return mixed

## `acf_reset_media_enqueue_after_rest()`

Reset wp\_enqueue\_media action count after REST call so it can happen inside the main execution if required.

- @date 07/06/22
- @since ACF 6.0
- @param [WP\_REST\_Response](#reference/classes/wp_rest_response)|[WP\_HTTP\_Response](#reference/classes/wp_http_response)|[WP\_Error](#reference/classes/wp_error)|mixed $response The WordPress response object.
- @return mixed

## `acf_block_uses_post_meta()`

Checks if the provided block is configured to save/load post meta.

- @since ACF 6.3
- @param array $block The block to check.
- @return boolean

## `acf_add_block_meta_values()`

Loads ACF field values from the post meta if the block is configured to do so.

- @since ACF 6.3
- @param array $block The block to get values for.
- @param integer $post\_id The ID of the post to retrieve meta from.
- @return array

## `acf_save_block_meta_values()`

Stores ACF field values in post meta for any blocks configured to do so.

- @since ACF 6.3
- @param integer $post\_id The ID of the post being saved.
- @param [WP\_Post](#reference/classes/wp_post) $post The post object.
- @return void

## `acf_get_block_meta_values_to_save()`

Iterates over blocks in post content and retrieves values  
that need to be saved to post meta.

- @since ACF 6.3
- @param string $content The content saved for the post.
- @return array An array containing the field values that need to be saved.

---

---

# Compatibility Global Functions <a name="secure-custom-fields/code-reference/compatibility-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/compatibility-file/

## `acf_get_compatibility()`

Returns true if compatibility is enabled for the given component.

- @date 20/1/15
- @since ACF 5.1.5
- @param string $name The name of the component to check.
- @return boolean

---

---

# Deprecated Global Functions <a name="secure-custom-fields/code-reference/deprecated-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/deprecated-file/

## `acf_render_field_wrap_label()`

acf\_render\_field\_wrap\_label

- Renders the field’s label.
- @date 19/9/17
- @since ACF 5.6.3
- @deprecated 5.6.5
- @param array $field The field array.
- @return void

## `acf_render_field_wrap_description()`

acf\_render\_field\_wrap\_description

- Renders the field’s instructions.
- @date 19/9/17
- @since ACF 5.6.3
- @deprecated 5.6.5
- @param array $field The field array.
- @return void

## `acf_get_fields_by_id()`

Returns and array of fields for the given $parent\_id.

- @date 27/02/2014
- @since ACF 5.0.0.
- @deprecated 5.7.11
- @param integer $parent\_id The parent ID.
- @return array

## `acf_update_option()`

acf\_update\_option

- A wrapper for the WP update\_option but provides logic for a ‘no’ autoload
- @date 4/01/2014
- @since ACF 5.0.0
- @deprecated 5.7.11
- @param string $option The option name.
- @param string $value The option value.
- @param string $autoload An optional autoload value.
- @return boolean

## `acf_get_field_reference()`

acf\_get\_field\_reference

- Finds the field key for a given field name and post\_id.
- @date 26/1/18
- @since ACF 5.6.5
- @deprecated 5.6.8
- @param string $field\_name The name of the field. eg ‘sub\_heading’
- @param mixed $post\_id The post\_id of which the value is saved against
- @return string $reference The field key

## `acf_get_dir()`

acf\_get\_dir

- Returns the plugin url to a specified file.
- @date 28/09/13
- @since ACF 5.0.0
- @deprecated 5.6.8
- @param string $filename The specified file.
- @return string

---

---

# Fields Global Functions <a name="secure-custom-fields/code-reference/fields-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/fields-file/

## `acf_register_field_type()`

alias of acf()-&gt;fields-&gt;register\_field\_type()

- @type function
- @date 31/5/17
- @since ACF 5.6.0
- @param n/a
- @return n/a

## `acf_register_field_type_info()`

alias of acf()-&gt;fields-&gt;register\_field\_type\_info()

- @type function
- @date 31/5/17
- @since ACF 5.6.0
- @param n/a
- @return n/a

## `acf_get_field_type()`

alias of acf()-&gt;fields-&gt;get\_field\_type()

- @type function
- @date 31/5/17
- @since ACF 5.6.0
- @param n/a
- @return n/a

## `acf_get_field_types()`

alias of acf()-&gt;fields-&gt;get\_field\_types()

- @type function
- @date 31/5/17
- @since ACF 5.6.0
- @param n/a
- @return n/a

## `acf_get_field_types_info()`

acf\_get\_field\_types\_info

- Returns an array containing information about each field type
- @date 18/6/18
- @since ACF 5.6.9
- @param type $var Description. Default.
- @return type Description.

## `acf_is_field_type()`

alias of acf()-&gt;fields-&gt;is\_field\_type()

- @type function
- @date 31/5/17
- @since ACF 5.6.0
- @param n/a
- @return n/a

## `acf_get_field_type_prop()`

This function will return a field type’s property

- @type function
- @date 1/10/13
- @since ACF 5.0.0
- @param n/a
- @return (array)

## `acf_get_field_type_label()`

This function will return the label of a field type

- @type function
- @date 1/10/13
- @since ACF 5.0.0
- @param n/a
- @return (array)

## `acf_field_type_supports()`

Returns the value of a field type “supports” property.

- @since ACF 6.2.5
- @param string $name The name of the field type.
- @param string $prop The name of the supports property.
- @param mixed $default The default value if the property is not set.
- @return mixed The value of the supports property which may be false, or $default on failure.

## `acf_field_type_exists()`

- @deprecated  
    @see acf\_is\_field\_type()
- @type function
- @date 1/10/13
- @since ACF 5.0.0
- @param $type (string)
- @return (boolean)

## `acf_get_field_categories_i18n()`

Returns an array of localised field categories.

- @since ACF 6.1
- @return array

## `acf_get_grouped_field_types()`

Returns an multi-dimensional array of field types “name =&gt; label” grouped by category

- @since ACF 5.0.0
- @return array

## `acf_get_combined_field_type_settings_tabs()`

Returns an array of tabs for a field type.  
We combine a list of default tabs with filtered tabs.  
I.E. Default tabs should be static and should not be changed by the  
filtered tabs.

- @since ACF 6.1
- @return array Key/value array of the default settings tabs for field type settings.

## `acf_get_pro_field_types()`

Get the PRO only fields and their core metadata.

- @since ACF 6.1
- @return array An array of all the pro field types and their field type selection required meta data.

---

---

# L10n Global Functions <a name="secure-custom-fields/code-reference/l10n-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/l10n-file/

## `acf_get_locale()`

Returns the current locale.

- @date 16/12/16
- @since ACF 5.5.0
- @return string

## `acf_load_textdomain()`

acf\_load\_textdomain

- Loads the plugin’s translated strings similar to [load\_plugin\_textdomain()](#reference/functions/load_plugin_textdomain) .
- @date 8/1/19
- @since ACF 5.7.10
- @param string $locale The plugin’s current locale.
- @return void

## `_acf_apply_language_cache_key()`

\_acf\_apply\_language\_cache\_key

- Applies the current language to the cache key.
- @date 23/1/19
- @since ACF 5.7.11
- @param string $key The cache key.
- @return string

---

---

# Local Fields Global Functions <a name="secure-custom-fields/code-reference/local-fields-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/local-fields-file/

## `acf_enable_local()`

acf\_enable\_local

- Enables the local filter.
- @date 22/1/19
- @since ACF 5.7.10
- @return void

## `acf_disable_local()`

acf\_disable\_local

- Disables the local filter.
- @date 22/1/19
- @since ACF 5.7.10
- @return void

## `acf_is_local_enabled()`

acf\_is\_local\_enabled

- Returns true if local fields are enabled.
- @date 23/1/19
- @since ACF 5.7.10
- @return boolean

## `acf_get_local_store()`

Returns either local store or a dummy store for the given name or post type.

- @date 23/1/19
- @since ACF 5.7.10
- @param string $name The store name.
- @param string $post\_type The post type for the desired store.
- @return ACF\_Data

## `acf_reset_local()`

acf\_reset\_local

- Resets the local data.
- @date 22/1/19
- @since ACF 5.7.10
- @return void

## `acf_get_local_field_groups()`

acf\_get\_local\_field\_groups

- Returns all local field groups.
- @date 22/1/19
- @since ACF 5.7.10
- @return array

## `acf_get_local_internal_posts()`

Returns local ACF posts with the provided post type.

- @since ACF 6.1
- @param string $post\_type The post type to check for.
- @return array|mixed

## `acf_have_local_field_groups()`

acf\_have\_local\_field\_groups

- description
- @date 22/1/19
- @since ACF 5.7.10
- @param type $var Description. Default.
- @return type Description.

## `acf_count_local_field_groups()`

acf\_count\_local\_field\_groups

- description
- @date 22/1/19
- @since ACF 5.7.10
- @param type $var Description. Default.
- @return type Description.

## `acf_add_local_field_group()`

acf\_add\_local\_field\_group

- Adds a local field group.
- @date 22/1/19
- @since ACF 5.7.10
- @param array $field\_group The field group array.
- @return boolean

## `acf_add_local_internal_post_type()`

Adds a local ACF internal post type.

- @since ACF 6.1
- @param array $post The main ACF post array.
- @param string $post\_type The post type being added.
- @return boolean

## `register_field_group()`

register\_field\_group

- See acf\_add\_local\_field\_group().
- @date 22/1/19
- @since ACF 5.7.10
- @param array $field\_group The field group array.
- @return void

## `acf_remove_local_field_group()`

acf\_remove\_local\_field\_group

- Removes a field group for the given key.
- @date 22/1/19
- @since ACF 5.7.10
- @param string $key The field group key.
- @return boolean

## `acf_remove_local_internal_post_type()`

Removes a local ACF post with the given key and post type.

- @since ACF 6.1
- @param string $key The ACF key.
- @param string $post\_type The ACF post type.
- @return boolean

## `acf_is_local_field_group()`

acf\_is\_local\_field\_group

- Returns true if a field group exists for the given key.
- @date 22/1/19
- @since ACF 5.7.10
- @param string $key The field group key.
- @return boolean

## `acf_is_local_internal_post_type()`

Returns true if an ACF post exists for the given key.

- @since ACF 6.1
- @param string $key The ACF key.
- @param string $post\_type The ACF post type.
- @return boolean

## `acf_is_local_field_group_key()`

acf\_is\_local\_field\_group\_key

- Returns true if a field group exists for the given key.
- @date 22/1/19
- @since ACF 5.7.10
- @param string $key The field group key.
- @return boolean

## `acf_is_local_internal_post_type_key()`

Returns true if a local ACF post exists for the given key.

- @since ACF 6.1
- @param string $key The ACF post key.
- @param string $post\_type The post type to check.
- @return boolean

## `acf_get_local_field_group()`

acf\_get\_local\_field\_group

- Returns a field group for the given key.
- @date 22/1/19
- @since ACF 5.7.10
- @param string $key The field group key.
- @return (array|null)

## `acf_get_local_internal_post_type()`

Returns an ACF post for the given key.

- @since ACF 6.1
- @param string $key The field group key.
- @param string $post\_type The ACF post type.
- @return array|null

## `acf_add_local_fields()`

acf\_add\_local\_fields

- Adds an array of local fields.
- @date 22/1/19
- @since ACF 5.7.10
- @param array $fields An array of un prepared fields.
- @return array

## `acf_get_local_fields()`

acf\_get\_local\_fields

- Returns all local fields for the given parent.
- @date 22/1/19
- @since ACF 5.7.10
- @param string $parent The parent key.
- @return array

## `acf_have_local_fields()`

acf\_have\_local\_fields

- Returns true if local fields exist.
- @date 22/1/19
- @since ACF 5.7.10
- @param string $parent The parent key.
- @return boolean

## `acf_count_local_fields()`

acf\_count\_local\_fields

- Returns the number of local fields for the given parent.
- @date 22/1/19
- @since ACF 5.7.10
- @param string $parent The parent key.
- @return integer

## `acf_add_local_field()`

acf\_add\_local\_field

- Adds a local field.
- @date 22/1/19
- @since ACF 5.7.10
- @param array $field The field array.
- @param boolean $prepared Whether or not the field has already been prepared for import.
- @return void

## `_acf_generate_local_key()`

\_acf\_generate\_local\_key

- Generates a unique key based on the field’s parent.
- @date 22/1/19
- @since ACF 5.7.10
- @param string $key The field key.
- @return boolean

## `acf_remove_local_field()`

acf\_remove\_local\_field

- Removes a field for the given key.
- @date 22/1/19
- @since ACF 5.7.10
- @param string $key The field key.
- @return boolean

## `acf_is_local_field()`

acf\_is\_local\_field

- Returns true if a field exists for the given key or name.
- @date 22/1/19
- @since ACF 5.7.10
- @param string $key The field group key.
- @return boolean

## `acf_is_local_field_key()`

acf\_is\_local\_field\_key

- Returns true if a field exists for the given key.
- @date 22/1/19
- @since ACF 5.7.10
- @param string $key The field group key.
- @return boolean

## `acf_get_local_field()`

acf\_get\_local\_field

- Returns a field for the given key.
- @date 22/1/19
- @since ACF 5.7.10
- @param string $key The field group key.
- @return (array|null)

## `_acf_apply_get_local_field_groups()`

\_acf\_apply\_get\_local\_field\_groups

- Appends local field groups to the provided array.
- @date 23/1/19
- @since ACF 5.7.10
- @param array $field\_groups An array of field groups.
- @return array

## `_acf_apply_get_local_internal_posts()`

Appends local ACF internal post types to the provided array.

- @since ACF 6.1
- @param array $posts An array of ACF posts.
- @param string $post\_type The ACF internal post type being loaded.
- @return array

## `_acf_apply_is_local_field_key()`

\_acf\_apply\_is\_local\_field\_key

- Returns true if is a local key.
- @date 23/1/19
- @since ACF 5.7.10
- @param boolean $bool The result.
- @param string $id The identifier.
- @return boolean

## `_acf_apply_is_local_field_group_key()`

\_acf\_apply\_is\_local\_field\_group\_key

- Returns true if is a local key.
- @date 23/1/19
- @since ACF 5.7.10
- @param boolean $bool The result.
- @param string $id The identifier.
- @return boolean

## `_acf_apply_is_local_internal_post_type_key()`

Returns true if is a local key.

- @since ACF 6.1
- @param boolean $bool The result.
- @param string $id The identifier.
- @param string $post\_type The post type.
- @return boolean

## `_acf_do_prepare_local_fields()`

\_acf\_do\_prepare\_local\_fields

- Local fields that are added too early will not be correctly prepared by the field type class.
- @date 23/1/19
- @since ACF 5.7.10
- @return void

---

---

# Local Json Global Functions <a name="secure-custom-fields/code-reference/local-json-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/local-json-file/

## `acf_get_local_json_files()`

Returns an array of found JSON field group files.

- @date 14/4/20
- @since ACF 5.9.0
- @param string $post\_type The ACF post type to get files for.
- @return array

## `acf_write_json_field_group()`

Saves a field group JSON file.

- @date 5/12/2014
- @since ACF 5.1.5
- @param array $field\_group The field group.
- @return boolean

## `acf_delete_json_field_group()`

Deletes a field group JSON file.

- @date 5/12/2014
- @since ACF 5.1.5
- @param string $key The field group key.
- @return boolean True on success.

---

---

# Local Meta Global Functions <a name="secure-custom-fields/code-reference/local-meta-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/local-meta-file/

## `acf_setup_meta()`

acf\_setup\_meta

- Adds postmeta to storage.
- @date 8/10/18
- @since ACF 5.8.0  
    @see ACF\_Local\_Meta::add() for list of parameters.
- @return array

## `acf_reset_meta()`

acf\_reset\_meta

- Removes postmeta to storage.
- @date 8/10/18
- @since ACF 5.8.0  
    @see ACF\_Local\_Meta::remove() for list of parameters.
- @return void

---

---

# Locations Global Functions <a name="secure-custom-fields/code-reference/locations-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/locations-file/

## `acf_register_location_type()`

Registers a location type.

- @date 8/4/20
- @since ACF 5.9.0
- @param string $class\_name The location class name.
- @return (ACF\_Location|false)

## `acf_get_location_types()`

Returns an array of all registered location types.

- @date 8/4/20
- @since ACF 5.9.0
- @return array

## `acf_get_location_type()`

Returns a location type for the given name.

- @date 18/2/19
- @since ACF 5.7.12
- @param string $name The location type name.
- @return (ACF\_Location|null)

## `acf_get_location_rule_types()`

Returns a grouped array of all location rule types.

- @date 8/4/20
- @since ACF 5.9.0
- @return array

## `acf_validate_location_rule()`

Returns a validated location rule with all props.

- @date 8/4/20
- @since ACF 5.9.0
- @param array $rule The location rule.
- @return array

## `acf_get_location_rule_operators()`

Returns an array of operators for a given rule.

- @date 30/5/17
- @since ACF 5.6.0
- @param array $rule The location rule.
- @return array

## `acf_get_location_rule_values()`

Returns an array of values for a given rule.

- @date 30/5/17
- @since ACF 5.6.0
- @param array $rule The location rule.
- @return array

## `acf_match_location_rule()`

Returns true if the provided rule matches the screen args.

- @date 30/5/17
- @since ACF 5.6.0
- @param array $rule The location rule.
- @param array $screen The screen args.
- @param array $field The field group array.
- @return boolean

## `acf_get_location_screen()`

Returns ann array of screen args to be used against matching rules.

- @date 8/4/20
- @since ACF 5.9.0
- @param array $screen The screen args.
- @param array $deprecated The field group array.
- @return array

## `acf_register_location_rule()`

Alias of acf\_register\_location\_type().

- @date 31/5/17
- @since ACF 5.6.0
- @param string $class\_name The location class name.
- @return (ACF\_Location|false)

## `acf_get_location_rule()`

Alias of acf\_get\_location\_type().

- @date 31/5/17
- @since ACF 5.6.0
- @param string $class\_name The location class name.
- @return (ACF\_Location|false)

## `acf_get_valid_location_rule()`

Alias of acf\_validate\_location\_rule().

- @date 30/5/17
- @since ACF 5.6.0
- @param array $rule The location rule.
- @return array

---

---

# Loop Global Functions <a name="secure-custom-fields/code-reference/loop-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/loop-file/

## `acf_add_loop()`

alias of acf()-&gt;loop-&gt;add\_loop()

- @type function
- @date 6/10/13
- @since ACF 5.0.0
- @param n/a
- @return n/a

## `acf_update_loop()`

alias of acf()-&gt;loop-&gt;update\_loop()

- @type function
- @date 6/10/13
- @since ACF 5.0.0
- @param n/a
- @return n/a

## `acf_get_loop()`

alias of acf()-&gt;loop-&gt;get\_loop()

- @type function
- @date 6/10/13
- @since ACF 5.0.0
- @param n/a
- @return n/a

## `acf_remove_loop()`

alias of acf()-&gt;loop-&gt;remove\_loop()

- @type function
- @date 6/10/13
- @since ACF 5.0.0
- @param n/a
- @return n/a

---

---

# Revisions Global Functions <a name="secure-custom-fields/code-reference/revisions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/revisions-file/

## `acf_save_post_revision()`

This function will copy meta from a post to it’s latest revision

- @type function
- @date 26/09/2016
- @since ACF 5.4.0
- @param $post\_id (int)
- @return n/a

## `acf_get_post_latest_revision()`

This function will return the latest revision for a given post

- @type function
- @date 25/06/2016
- @since ACF 5.3.8
- @param $post\_id (int)
- @return $post\_id (int)

---

---

# Scf Ui Options Page Functions Global Functions <a name="secure-custom-fields/code-reference/scf-ui-options-page-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/scf-ui-options-page-functions-file/

## `acf_get_ui_options_page()`

Get an SCF UI options page as an array

- @since ACF 6.2
- @param integer|string $id The post ID being queried.
- @return array|false The UI options page array.

## `acf_get_raw_ui_options_page()`

Retrieves a raw SCF UI options page.

- @since ACF 6.2
- @param integer|string $id The post ID.
- @return array|false The UI options page array.

## `acf_get_ui_options_page_post()`

Gets a post object for an SCF UI options page.

- @since ACF 6.2
- @param integer|string $id The post ID, key, or name.
- @return object|boolean The post object, or false on failure.

## `acf_is_ui_options_page_key()`

Returns true if the given identifier is an SCF UI options page key.

- @since ACF 6.2
- @param string $id The identifier.
- @return boolean

## `acf_validate_ui_options_page()`

Validates an SCF UI options page.

- @since ACF 6.2
- @param array $ui\_options\_page The SCF UI options page array to validate.
- @return array|boolean

## `acf_translate_ui_options_page()`

Translates the settings for an SCF UI options page.

- @since ACF 6.2
- @param array $ui\_options\_page The SCF UI options page array.
- @return array

## `acf_get_ui_options_pages()`

Returns and array of SCF UI options pages for the given $filter.

- @since ACF 6.2
- @param array $filter An array of args to filter results by.
- @return array

## `acf_get_raw_ui_options_pages()`

Returns an array of raw SCF UI options pages.

- @since ACF 6.2
- @return array

## `acf_filter_ui_options_pages()`

Returns a filtered array of SCF UI options pages based on the given $args.

- @since ACF 6.2
- @param array $ui\_options\_pages An array of SCF UI options pages.
- @param array $args An array of args to filter by.
- @return array

## `acf_update_ui_options_page()`

Updates an SCF UI options page in the database.

- @since ACF 6.2
- @param array $ui\_options\_page The main ACF UI options page array.
- @return array

## `acf_flush_ui_options_page_cache()`

Deletes all caches for the provided ACF UI options page.

- @since ACF 6.2
- @param array $ui\_options\_page The SCF UI options page array.
- @return void

## `acf_delete_ui_options_page()`

Deletes an ACF UI options page from the database.

- @since ACF 6.2
- @param integer|string $id The ACF UI options page ID, key or name.
- @return boolean True if the options page was deleted.

## `acf_trash_ui_options_page()`

Trashes an ACF UI options page.

- @since ACF 6.2
- @param integer|string $id The UI options page ID, key, or name.
- @return boolean True if the options page was trashed.

## `acf_untrash_ui_options_page()`

Restores an ACF UI options page from the trash.

- @since ACF 6.2
- @param integer|string $id The UI options page ID, key, or name.
- @return boolean True if the options page was untrashed.

## `acf_is_ui_options_page()`

Returns true if the given params match an ACF UI options page.

- @since ACF 6.2
- @param array $ui\_options\_page The ACF UI options page array.
- @return boolean

## `acf_duplicate_ui_options_page()`

Duplicates an ACF UI options page.

- @since ACF 6.2
- @param integer|string $id The ACF UI options page ID, key or name.
- @param integer $new\_post\_id Optional ID to override.
- @return array|boolean The new ACF UI options page, or false on failure.

## `acf_update_ui_options_page_active_status()`

Activates or deactivates an ACF UI options page.

- @since ACF 6.2
- @param integer|string $id The ACF UI options page ID, key or name.
- @param boolean $activate True if the UI options page should be activated.
- @return boolean

## `acf_get_ui_options_page_edit_link()`

Checks if the current user can edit the UI options page and returns the edit URL.

- @since ACF 6.2
- @param integer $post\_id The ACF UI options page ID.
- @return string

## `acf_prepare_ui_options_page_for_export()`

Returns a modified ACF UI options page ready for export.

- @since ACF 6.2
- @param array $ui\_options\_page The ACF UI options page array.
- @return array

## `acf_export_ui_options_page_as_php()`

Exports an ACF UI options page as PHP.

- @since ACF 6.2
- @param array $ui\_options\_page The ACF UI options page array.
- @return string|boolean

## `acf_prepare_ui_options_page_for_import()`

Prepares an ACF UI options page for the import process.

- @since ACF 6.2
- @param array $ui\_options\_page The ACF UI options page array.
- @return array

## `acf_import_ui_options_page()`

Imports an ACF UI options page into the database.

- @since ACF 6.2
- @param array $ui\_options\_page The ACF UI options page array.
- @return array The imported options page.

---

---

# Upgrades Global Functions <a name="secure-custom-fields/code-reference/upgrades-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/upgrades-file/

## `acf_has_upgrade()`

acf\_has\_upgrade

- Returns true if this site has an upgrade available.
- @date 24/8/18
- @since ACF 5.7.4
- @return boolean

## `acf_upgrade_all()`

Runs upgrade routines if this site has an upgrade available.

- @date 24/8/18
- @since ACF 5.7.4

## `acf_get_db_version()`

acf\_get\_db\_version

- Returns the ACF DB version.
- @date 10/09/2016
- @since ACF 5.4.0
- @return string

## `acf_update_db_version()`

Updates the ACF DB version.

- @date 10/09/2016
- @since ACF 5.4.0
- @param string $version The new version.
- @return void

## `acf_upgrade_500()`

acf\_upgrade\_500

- Version 5 introduces new post types for field groups and fields.
- @date 23/8/18
- @since ACF 5.7.4
- @return void

## `acf_upgrade_500_field_groups()`

acf\_upgrade\_500\_field\_groups

- Upgrades all ACF4 field groups to ACF5
- @date 23/8/18
- @since ACF 5.7.4
- @return void

## `acf_upgrade_500_field_group()`

acf\_upgrade\_500\_field\_group

- Upgrades a ACF4 field group to ACF5
- @date 23/8/18
- @since ACF 5.7.4
- @param object $ofg The old field group post object.
- @return array $nfg The new field group array.

## `acf_upgrade_500_fields()`

acf\_upgrade\_500\_fields

- Upgrades all ACF4 fields to ACF5 from a specific field group
- @date 23/8/18
- @since ACF 5.7.4
- @param object $ofg The old field group post object.
- @param array $nfg The new field group array.
- @return void

## `acf_upgrade_500_field()`

acf\_upgrade\_500\_field

- Upgrades a ACF4 field to ACF5
- @date 23/8/18
- @since ACF 5.7.4
- @param array $field The old field.
- @return array $field The new field.

## `acf_upgrade_550()`

acf\_upgrade\_550

- Version 5.5 adds support for the wp\_termmeta table added in WP 4.4.
- @date 23/8/18
- @since ACF 5.7.4
- @return void

## `acf_upgrade_550_termmeta()`

acf\_upgrade\_550\_termmeta

- Upgrades all ACF4 termmeta saved in wp\_options to the wp\_termmeta table.
- @date 23/8/18
- @since ACF 5.7.4
- @return void

## `acf_wp_upgrade_550_termmeta()`

When the database is updated to support term meta, migrate ACF term meta data across.

- @date 23/8/18
- @since ACF 5.7.4
- @param string $wp\_db\_version The new $wp\_db\_version.
- @param string $wp\_current\_db\_version The old (current) $wp\_db\_version.
- @return void

## `acf_upgrade_550_taxonomy()`

acf\_upgrade\_550\_taxonomy

- Upgrades all ACF4 termmeta for a specific taxonomy.
- @date 24/8/18
- @since ACF 5.7.4
- @param string $taxonomy The taxonomy name.
- @return void

---

---

# Validation Global Functions <a name="secure-custom-fields/code-reference/validation-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/validation-file/

## `acf_add_validation_error()`

Add validation error.

- Alias of acf()-&gt;validation-&gt;add\_error()
- @type function
- @date 6/10/13
- @since ACF 5.0.0
- @param string $input name attribute of DOM element.
- @param string $message error message.
- @return void

## `acf_get_validation_errors()`

Retrieve validation errors.

- Alias of acf()-&gt;validation-&gt;function()
- @type function
- @date 6/10/13
- @since ACF 5.0.0
- @return array|bool

## `acf_get_validation_error()`

Get the validation error.

- Alias of acf()-&gt;validation-&gt;get\_error()
- @type function
- @date 6/10/13
- @since ACF 5.0.0
- @since SCF 6.4.1 Added the $input parameter, which is required in the get\_error method.
- @param string $input name attribute of DOM element.
- @return string|bool

## `acf_reset_validation_errors()`

Reset Validation errors.

- Alias of acf()-&gt;validation-&gt;reset\_errors()
- @type function
- @date 6/10/13
- @since ACF 5.0.0
- @return void

## `acf_validate_save_post()`

This function will validate $\_POST data and add errors

- @type function
- @date 25/11/2013
- @since ACF 5.0.0
- @param bool $show\_errors if true, errors will be shown via a wp\_die screen.
- @return bool

## `acf_validate_values()`

This function will validate an array of field values

- @type function
- @date 6/10/13
- @since ACF 5.0.0
- @param array $values An array of field values.
- @param string $input\_prefix The input element’s name attribute.
- @return void

## `acf_validate_value()`

This function will validate a field’s value

- @type function
- @date 6/10/13
- @since ACF 5.0.0
- @param mixed $value The field value to validate.
- @param array $field The field array.
- @param string $input The input element’s name attribute.
- @return boolean

---

---

# Admin <a name="secure-custom-fields/code-reference/admin" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/admin/

## Files

- [Admin Notices](admin-notices-file)
- [Admin Tools](admin-tools-file)

---

# Admin Notices Global Functions <a name="secure-custom-fields/code-reference/admin/admin-notices-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/admin/admin-notices-file/

## `acf_new_admin_notice()`

Instantiates and returns a new model.

- @date 23/12/18
- @since ACF 5.8.0
- @param array $data Optional data to set.
- @return ACF\_Admin\_Notice

## `acf_render_admin_notices()`

Renders all admin notices HTML.

- @date 10/1/19
- @since ACF 5.7.10
- @return void

## `acf_add_admin_notice()`

Creates and returns a new notice.

- @date 17/10/13
- @since ACF 5.0.0
- @param string $text The admin notice text.
- @param string $type The type of notice (warning, error, success, info).
- @param boolean $dismissible Is this notification dismissible (default true) (since ACF 5.11.0).
- @param boolean $persisted Store once a notice has been dismissed per user and prevent showing it again. (since ACF 6.1.0).
- @return ACF\_Admin\_Notice

---

---

# Admin Tools Global Functions <a name="secure-custom-fields/code-reference/admin/admin-tools-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/admin/admin-tools-file/

## `acf_register_admin_tool()`

Alias of acf()-&gt;admin\_tools-&gt;register\_tool()

- @type function
- @date 31/5/17
- @since ACF 5.6.0
- @param ACF\_Admin\_Tool $class The tool class.
- @return void

## `acf_get_admin_tools_url()`

- This function will return the admin URL to the tools page
- @type function
- @date 31/5/17
- @since ACF 5.6.0
- @return string The URL to the tools page.

## `acf_get_admin_tool_url()`

This function will return the admin URL to the tools page

- @type function
- @date 31/5/17
- @since ACF 5.6.0
- @param string $tool The tool name.
- @return string The URL to a particular tool’s page.

---

---

# Form Front Global Functions <a name="secure-custom-fields/code-reference/form-front-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/form-front-file/

## `acf_form_head()`

Functions

- alias of acf()-&gt;form-&gt;functions
- @type function
- @date 11/06/2014
- @since ACF 5.0.0
- @param n/a
- @return n/a

---

---

# Forms <a name="secure-custom-fields/code-reference/forms" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/forms/

## Files

- [Form Front](form-front-file)

---

# Hooks <a name="secure-custom-fields/code-reference/hooks" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/hooks/

## Files

- [Action](action)
- [Filter](filter)

---

# ACF_Rest_Api <a name="secure-custom-fields/code-reference/class-acf-rest-api-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/class-acf-rest-api-file/

## Properties

### `$request`

- @var ACF\_Rest\_Request

### `$embed_links`

- @var ACF\_Rest\_Embed\_Links

## Methods

### `register_field`

Register our custom property as a REST field.

### `get_schema`

Dynamically generate the schema for the current request.

- @return array

### `validate_rest_arg`

Validate the request args. Mostly a wrapper for `rest_validate_request_arg()`, but also  
fires off a filter, so we can add some custom validation for specific fields.

- This will likely no longer be needed once WordPress implements something like `validate_callback`  
    and `sanitize_callback` for nested schema properties, see:  
    <https://core.trac.wordpress.org/ticket/49960>
- @param mixed $value
- @param \\[WP\_REST\_Request](#reference/classes/wp_rest_request) $request
- @param string $param
- @return boolean|[WP\_Error](#reference/classes/wp_error)

### `load_fields`

Load field values into the requested object. This method is not a part of any public API and is only public as  
it is required by WordPress.

- @param array $object An array representation of the post, term, or user object.
- @param string $field\_name
- @param [WP\_REST\_Request](#reference/classes/wp_rest_request) $request
- @param string $object\_sub\_type Note that this isn’t the same as $this-&gt;object\_type. This variable is  
    more specific and can be a post type or taxonomy.
- @return array

### `update_fields`

Update any incoming field values for the given object. This method is not a part of any public API and is only  
public as it is required by WordPress.

- @param array $data
- @param [WP\_Post](#reference/classes/wp_post)|[WP\_Term](#reference/classes/wp_term)|[WP\_User](#reference/classes/wp_user) $object
- @param string $property ‘acf’
- @param [WP\_REST\_Request](#reference/classes/wp_rest_request) $request
- @param string $object\_sub\_type This will be the post type, the taxonomy, or ‘user’.
- @return boolean|[WP\_Error](#reference/classes/wp_error)

### `make_identifier`

Make the ACF identifier string for the given object.

- @param integer $object\_id
- @param string $object\_type ‘user’, ‘term’, or ‘post’
- @return string

### `object_type_has_field_group`

Gets an array of the location types that a field group is configured to use.

- @param string $object\_type ‘user’, ‘term’, or ‘post’
- @param array $field\_group The field group to check.
- @param array $location\_types An array of location types.
- @return boolean

### `get_field_groups_by_object_type`

Get all field groups for the provided object type.

- @param string $object\_type ‘user’, ‘term’, or ‘post’
- @return array An array of field groups that display for that location type.

### `get_field_groups_by_id`

Get all field groups for a given object.

- @param integer $object\_id
- @param string $object\_type ‘user’, ‘term’, or ‘post’
- @param string|null $object\_sub\_type The post type or taxonomy. When an $object\_type of ‘user’ is in play, this can be ignored.
- @param array $scope Field group keys to limit the returned set of field groups to. This is used to scope field lookups to specific groups.
- @return array An array of matching field groups.

### `get_fields`

Get all ACF fields for a given field group and allow third party filtering.

- @param array $field\_group This could technically be other possible values supported by acf\_get\_fields() but in this  
    context, we’re only using the field group arrays.
- @param null|integer $object\_id The ID of the object being prepared.
- @return array

---

# Acf Rest API Functions Global Functions <a name="secure-custom-fields/code-reference/class-acf-rest-api-file/acf-rest-api-functions-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/class-acf-rest-api-file/acf-rest-api-functions-file/

## `acf_get_field_rest_schema()`

Get the REST API schema for a given field.

- @param array $field
- @return array

## `acf_get_field_rest_links()`

Get the REST API field links for a given field. The links are appended to the REST response under the \_links property  
and provide API resource links to related objects. If a link is marked as ’embeddable’, WordPress can load the resource  
in the main request under the\_embedded property when the request contains the \_embed URL parameter.

- @see \\acf\_field::get\_rest\_links()  
    @see [\#rest-api/using-the-rest-api/linking-and-embedding](#rest-api/using-the-rest-api/linking-and-embedding)
- @param string|integer $post\_id
- @param array $field
- @return array

## `acf_format_value_for_rest()`

Format a given field’s value for output in the REST API.

- @param $value
- @param $post\_id
- @param $field
- @param string $format ‘light’ for normal REST API formatting or ‘standard’ to apply ACF’s normal field formatting.
- @return mixed

---

---

# ACF_Rest_Embed_Links <a name="secure-custom-fields/code-reference/class-acf-rest-api-file/class-acf-rest-embed-links-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/class-acf-rest-api-file/class-acf-rest-embed-links-file/

Class ACF\_Rest\_Embed\_Links

- Manage the addition of embed links on supported REST endpoints.

## Properties

### `$links`

- @var array Links to add to the response. These can be flagged as embeddable and expanded when \_embed is passed with the request.

## Methods

### `hook_link_handlers`

Hook into all REST-enabled post type, taxonomy, and the user controllers in order to prepare links.

### `prepare_links`

Add links to internal property for subsequent use in \\ACF\_Rest\_Embed\_Links::load\_item\_links().

- @param $post\_id
- @param array $field

### `load_item_links`

Hook into the rest\_prepare\_{$type} filters and add links for the object being prepared.

- @param [WP\_REST\_Response](#reference/classes/wp_rest_response) $response
- @param [WP\_Post](#reference/classes/wp_post)|[WP\_User](#reference/classes/wp_user)|[WP\_Term](#reference/classes/wp_term) $item
- @param [WP\_REST\_Request](#reference/classes/wp_rest_request) $request
- @return [WP\_REST\_Response](#reference/classes/wp_rest_response)

---

# ACF_Rest_Request <a name="secure-custom-fields/code-reference/class-acf-rest-api-file/class-acf-rest-request-file" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/class-acf-rest-api-file/class-acf-rest-request-file/

Class ACF\_Rest\_Request

## Properties

### `$readonly_props`

Define which private/protected class properties are allowed read access. Access to these is controlled in  
\\ACF\_Rest\_Request::\_\_get();

- @var string\[\]

### `$http_method`

- @var string The HTTP request method for the current request. i.e; GET, POST, PATCH, PUT, DELETE, OPTIONS, HEAD

### `$current_route`

- @var string The current route being requested.

### `$supported_routes`

- @var array Route URL patterns we support.

### `$url_params`

- @var array Parameters matched from the URL. e.g; object IDs.

### `$object_type`

- @var string The underlying object type. e.g; post, term, user, etc.

### `$object_sub_type`

- @var string The requested object type.

### `$child_object_type`

- @var string The object type for a child object. e.g. post-revision, autosaves, etc.

## Methods

### `parse_request`

Determine all required information from the current request.

### `__get`

Magic getter for accessing read-only properties. Should we ever need to enforce a getter method, we can do so here.

- @param string $name The desired property name.
- @return string|null

### `get_url_param`

Get a URL parameter if found on the request URL.

- @param $param
- @return mixed|null

### `set_http_method`

Determine the HTTP method of the current request.

### `set_current_route`

Get the current REST route as determined by WordPress.

### `build_supported_routes`

Build an array of route match patterns that we handle. These are the same as WordPress’ core patterns except  
we are also matching the object type here as well.

### `set_url_params`

Loop through supported routes to find matching pattern. Use matching pattern to determine any URL parameters.

### `set_object_types`

Determine the object type and sub type from the requested route. We need to know both the underlying WordPress  
object type as well as post type or taxonomy in order to provide the right context when getting/updating fields.

### `get_post_type_by_rest_base`

Find the REST enabled post type object that matches the given REST base.

- @param string $rest\_base
- @return [WP\_Post\_Type](#reference/classes/wp_post_type)|null

### `get_taxonomy_by_rest_base`

Find the REST enabled taxonomy object that matches the given REST base.

- @param $rest\_base
- @return [WP\_Taxonomy](#reference/classes/wp_taxonomy)|null

---

# REST API <a name="secure-custom-fields/code-reference/rest-api" />

Source: https://developer.wordpress.org/secure-custom-fields/code-reference/rest-api/

## Files

- [Acf REST API Functions](acf-rest-api-functions-file)
- [Class Acf REST API](class-acf-rest-api-file)
- [Class ACF REST Embed Links](class-acf-rest-embed-links-file)
- [Class ACF REST Request](class-acf-rest-request-file)