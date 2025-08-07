Table of Contents:

- [Advanced Administration Handbook](#advanced-administration)
- [Before You Install](#advanced-administration/before-install)
- [Creating Database for WordPress](#advanced-administration/before-install/creating-database)
- [How to install WordPress](#advanced-administration/before-install/howto-install)
- [Running a Development Copy of WordPress](#advanced-administration/before-install/development)
- [Installing WordPress in your language](#advanced-administration/before-install/in-your-language)
- [Installing Multiple WordPress Instances](#advanced-administration/before-install/multiple-instances)
- [Install WordPress at popular providers](#advanced-administration/before-install/popular-providers)
- [Server configuration](#advanced-administration/server)
- [Changing File Permissions](#advanced-administration/server/file-permissions)
- [Finding Server Info](#advanced-administration/server/server-info)
- [Giving WordPress Its Own Directory](#advanced-administration/server/wordpress-in-directory)
- [Configuring Wildcard Subdomains](#advanced-administration/server/subdomains-wildcard)
- [Emptying a Database Table](#advanced-administration/server/empty-database)
- [Web servers](#advanced-administration/server/web-server)
- [Apache HTTPD / .htaccess](#advanced-administration/server/web-server/httpd)
- [Nginx](#advanced-administration/server/web-server/nginx)
- [Control Panels](#advanced-administration/server/control-panel)
- [WordPress configuration](#advanced-administration/wordpress)
- [Editing wp-config.php](#advanced-administration/wordpress/wp-config)
- [Site Architecture (v1.5)](#advanced-administration/wordpress/site-architecture)
- [Post Formats](#advanced-administration/wordpress/post-formats)
- [Cookies](#advanced-administration/wordpress/cookies)
- [Update Services](#advanced-administration/wordpress/update-services)
- [Editing Files](#advanced-administration/wordpress/edit-files)
- [CSS](#advanced-administration/wordpress/css)
- [WordPress Feeds](#advanced-administration/wordpress/feeds)
- [Multilingual WordPress](#advanced-administration/wordpress/multilingual)
- [oEmbed](#advanced-administration/wordpress/oembed)
- [Loopbacks](#advanced-administration/wordpress/loopback)
- [Importing Content](#advanced-administration/wordpress/import)
- [Common WordPress errors](#advanced-administration/wordpress/common-errors)
- [Upgrading / Migration](#advanced-administration/upgrade)
- [Updating WordPress using FTP](#advanced-administration/upgrade/ftp)
- [Using FileZilla](#advanced-administration/upgrade/ftp/filezilla)
- [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin)
- [Upgrading WordPress](#advanced-administration/upgrade/upgrading)
- [Migrating WordPress](#advanced-administration/upgrade/migrating)
- [WordPress Multisite / Network](#advanced-administration/multisite)
- [Before You Create A Network](#advanced-administration/multisite/prepare-network)
- [Create A Network](#advanced-administration/multisite/create-network)
- [WordPress Multisite Domain Mapping](#advanced-administration/multisite/domain-mapping)
- [Multisite Network Administration](#advanced-administration/multisite/administration)
- [Network Admin](#advanced-administration/multisite/admin)
- [Network Admin Settings Screen](#advanced-administration/multisite/admin/settings)
- [Migrate WordPress sites into WordPress Multisite](#advanced-administration/multisite/sites-multisite)
- [Plugins](#advanced-administration/plugins)
- [File Editor Screen](#advanced-administration/plugins/editor-screen)
- [Must Use Plugins](#advanced-administration/plugins/mu-plugins)
- [Themes](#advanced-administration/themes)
- [Security](#advanced-administration/security)
- [Your password](#advanced-administration/security/logging-in)
- [Two Step Authentication](#advanced-administration/security/mfa)
- [Backups](#advanced-administration/security/backup)
- [Backing Up Your Database](#advanced-administration/security/backup/database)
- [Backing Up Your WordPress Files](#advanced-administration/security/backup/files)
- [HTTPS](#advanced-administration/security/https)
- [Brute Force Attacks](#advanced-administration/security/brute-force)
- [Hardening WordPress](#advanced-administration/security/hardening)
- [Display Errors](#advanced-administration/security/hardening/display-errors)
- [Monitoring](#advanced-administration/security/monitoring)
- [Performance / Optimization](#advanced-administration/performance)
- [Cache](#advanced-administration/performance/cache)
- [Optimization](#advanced-administration/performance/optimization)
- [PHP Optimization](#advanced-administration/performance/php)
- [Debugging WordPress](#advanced-administration/debug)
- [Debugging in WordPress](#advanced-administration/debug/debug-wordpress)
- [Debugging a WordPress Network](#advanced-administration/debug/debug-network)
- [Using Your Browser to Diagnose JavaScript Errors](#advanced-administration/debug/debug-javascript)
- [Test Driving WordPress](#advanced-administration/debug/test-driving)
- [Version Control](#advanced-administration/debug/version-control)
- [Resources for Building on WordPress](#advanced-administration/resources)
- [FAQ Troubleshooting](#advanced-administration/resources/faq)

# Advanced Administration Handbook <a name="advanced-administration" />

Source: https://developer.wordpress.org/advanced-administration/

Welcome to the **WordPress Advanced Administration Handbook**! Here you will find WordPress advanced documentation. Use the “Contents” menu on the left to navigate topics.

## Why Advanced Administration?

Not all users who use WordPress have to know about technology, and therefore in its documentation should not appear either, and developers do not have to know certain advanced system configurations.

With this in mind, all the more technically complex documentation has been included in this documentation so that it can be used by more or less technical people.

## Where can I be involved?

The Documentation Team meets in the WordPress Slack, in the [\#docs](https://wordpress.slack.com/archives/docs/) channel. The conversations are in English. Check out the [WordPress Meeting calendar](https://make.wordpress.org/meetings#docs) for the current schedule.

## Advanced Administration Handbook managers

This documentation is managed by [@javiercasares](https://profiles.wordpress.org/javiercasares/), [@lucp](https://profiles.wordpress.org/lucp/), and [@milana\_cap](https://profiles.wordpress.org/milana_cap/). Also, the [Documentation Team](https://make.wordpress.org/docs/) and [Hosting Team](https://make.wordpress.org/hosting/) are involved in this.

If you’re interested in improving this handbook, check the [Github Handbook repo](https://github.com/WordPress/WordPress-Advanced-administration-handbook), the [Documentation Issue tracked](https://github.com/WordPress/Documentation-Issue-Tracker/labels/advanced%20administration), or leave a message in the [\#hosting-community channel](https://wordpress.slack.com/archives/hosting-community/) at [WordPress Slack](https://make.wordpress.org/chat/).

---

# Before You Install <a name="advanced-administration/before-install" />

Source: https://developer.wordpress.org/advanced-administration/before-install/

Before installing WordPress, you need to check that your web hosting provider fulfills the necessary software and conditions. Also, you must have access to the server and some tools.

## Requirements on the server side

- PHP 7.4 or greater
- MySQL 5.7 or MariaDB 10.3 or greater
- HTTPS support

For a list of detail requirements on your web host, refer the [official requirement page](https://wordpress.org/about/requirements/) and the [Server Environment page](https://make.wordpress.org/hosting/handbook/server-environment/). ## Requirements on local

- Login Account (user id and password) to the server via FTP or shell
- Text Editor
- FTP
- Your web browser of choice

You will need to know how to use a text editor to edit the main configuration file. If you are a Windows user, Notepad will do. If you’re an OS X user you can use TextEdit. Later, you will likely want to edit your Template Files (see [Templates](https://codex.wordpress.org/Templates) for some references). You can do this through the WordPress [Administration Screens](https://wordpress.org/documentation/article/administration-screens/), but using a good text editor is highly recommended. For more information on this, see [Editing files](#advanced-administration/wordpress/edit-files). You will need to be able to use an FTP program to [upload](#advanced-administration/upgrade/ftp/filezilla) files and [set file permissions](#advanced-administration/server/file-permissions) (optional). You could choose [FileZilla](#advanced-administration/upgrade/ftp/filezilla) for this task. Now you are all set to go on to [Installation](#advanced-administration/before-install/howto-install).

---

# Creating Database for WordPress <a name="advanced-administration/before-install/creating-database" />

Source: https://developer.wordpress.org/advanced-administration/before-install/creating-database/

If you are installing WordPress on your own web server, follow the one of below instructions to create your WordPress database and user account.

## Using phpMyAdmin

If your web server has [phpMyAdmin](https://wordpress.org/documentation/article/wordpress-glossary/#phpMyAdmin) installed, you may follow these instructions to create your WordPress username and database. If you work on your own computer, on most Linux distributions you can install PhpMyAdmin automatically.

***Note:** These instructions are written for phpMyAdmin 4.4; the phpMyAdmin user interface can vary slightly between versions.*

If a database relating to WordPress does not already exist in the **Database** dropdown on the left, create one:

Choose a name for your WordPress database: ‘wordpress’ or ‘blog’ are good, but most hosting services (especially shared hosting) will require a name beginning with your username and an underscore, so, even if you work on your own computer, we advise that you check your hosting service requirements so that you can follow them on your own server and be able to transfer your database without modification. Enter the chosen database name in the **Create database** field and choose the best collation for your language and encoding. In most cases it’s better to choose in the “utf8\_” series and, if you don’t find your language, to choose “utf8mb4\_general\_ci” (Reference: [\[1\]](https://make.wordpress.org/core/2015/04/02/the-utf8mb4-upgrade/)).

[![phpMyAdmin language encoding dropdown with utf8mb4_general_ci selected](https://i1.wp.com/wordpress.org/support/files/2018/11/phpMyAdmin_create_database_4.4.jpg?fit=688%2C411&ssl=1)](https://i1.wp.com/wordpress.org/support/files/2018/11/phpMyAdmin_create_database_4.4.jpg?fit=688%2C411&ssl=1)

phpMyAdmin language encoding drop down

Click the **phpMyAdmin** icon in the upper left to return to the main page, then click the **Users** tab. If a user relating to WordPress does not already exist in the list of users, create one:

[![phpMyAdmin Users Tab selected](https://i0.wp.com/wordpress.org/documentation/files/2018/11/users-768x500.jpg?resize=768%2C500&ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/users-768x500.jpg?ssl=1)

phpMyAdmin Users Tab

1. Click **Add user**.
2. Choose a username for WordPress (‘wordpress’ is good) and enter it in the **User name** field. (Be sure **Use text field:** is selected from the dropdown.)
3. Choose a secure password (ideally containing a combination of upper- and lower-case letters, numbers, and symbols), and enter it in the **Password** field. (Be sure **Use text field:** is selected from the dropdown.) Re-enter the password in the **Re-type**field.
4. Write down the username and password you chose.
5. Leave all options under **Global privileges** at their defaults.
6. Click **Go**.
7. Return to the **Users** screen and click the **Edit privileges** icon on the user you’ve just created for WordPress.
8. In the **Database-specific privileges** section, select the database you’ve just created for WordPress under the **Add privileges to the following database** dropdown, and click **Go**.
9. The page will refresh with privileges for that database. Click **Check All** to select all privileges, and click **Go**.
10. On the resulting page, make note of the host name listed after **Server:** at the top of the page. (This will usually be **localhost**.)

[![Databaser Server selected showing 'localhost'](https://i1.wp.com/wordpress.org/support/files/2018/11/phpMyAdmin_server_info_4.4.jpg?fit=682%2C107&ssl=1)](https://i1.wp.com/wordpress.org/support/files/2018/11/phpMyAdmin_server_info_4.4.jpg?fit=682%2C107&ssl=1)

## Using the MySQL Client

You can create MySQL users and databases quickly and easily by running mysql from the shell. The syntax is shown below and the dollar sign is the command prompt:

```
$ mysql -u adminusername -p  
Enter password:  
Welcome to the MySQL monitor. Commands end with ; or \\g.  
Your MySQL connection id is 5340 to server version: 3.23.54  

Type 'help;' or '\\h' for help. Type '\\c' to clear the buffer.  

mysql> CREATE DATABASE databasename;  
Query OK, 1 row affected (0.00 sec)

mysql> CREATE USER "wordpressusername"@"hostname" IDENTIFIED BY "password";
mysql> GRANT ALL PRIVILEGES ON databasename.* TO "wordpressusername"@"hostname";
Query OK, 0 rows affected (0.00 sec)

mysql> FLUSH PRIVILEGES;  
Query OK, 0 rows affected (0.01 sec)   

mysql> EXIT  
Bye  

```

The example shows:

- That root is also the *adminusername*. It is a safer practice to choose a so-called “mortal” account as your mysql admin, so that you are not entering the command “mysql” as the root user on your system. (Any time you can avoid doing work as root you decrease your chance of being exploited.) The name you use depends on the name you assigned as the database administrator using mysqladmin.
- wordpress or blog are good values for *databasename*.
- wordpress is a good value for *wordpressusername* but you should realize that, since it is used here, the entire world will know it, too.
- *hostname* will usually be localhost. If you don’t know what this value should be, check with your system administrator if you are not the admin for your WordPress host. If you are the system admin, consider using a non-root account to administer your database.
- *password* should be a difficult-to-guess password, ideally containing a combination of upper- and lower-case letters, numbers, and symbols. One good way of avoiding the use of a word found in a dictionary is to use the first letter of each word in a phrase that you find easy to remember.

If you need to write these values somewhere, avoid writing them in the system that contains the things protected by them. You need to remember the value used for *databasename*, *wordpressusername*, *hostname*, and *password*. Of course, since they are already (or will be shortly) in your wp-config.php file, there is no need to put them somewhere else, too.

## Using Plesk

If your hosting provider supplies the [Plesk](https://www.plesk.com/) hosting control panel and you want to install WordPress manually, follow the instructions below to create a database:

1. Log in to Plesk.
2. Click **Databases** in the Custom Website area of your website on the Websites &amp; Domains page:

[![Plesk panel highlighting the Custom Website box with the databases button highlighted](https://i0.wp.com/wordpress.org/documentation/files/2018/11/plesk-db-768x558.png?resize=768%2C558&ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/plesk-db-768x558.png?ssl=1)

Plesk custom website databases

1. Click **Add New Database**, change database name if you want, create database user by providing credentials and click **OK**. You’re done!

## Using cPanel

If your hosting provider supplies the [cPanel](https://wordpress.org/documentation/article/wordpress-glossary/#cPanel) hosting control panel, you may follow these simple instructions to create your WordPress username and database. A more complete set of instructions for using cPanel to create the database and user can be found in [Using cPanel](https://wordpress.org/documentation/article/using-cpanel/).

1. Log in to your [cPanel](https://wordpress.org/documentation/article/wordpress-glossary/#cPanel).
2. Click **MySQL Database Wizard** icon under the Databases section.
3. In **Step 1. Create a Database** enter the database name and click Next Step.
4. In **Step 2. Create Database Users** enter the database user name and the password. Make sure to use a strong password. Click Create User.
5. In **Step 3. Add User to Database** click the All Privileges checkbox and click Next Step.
6. In **Step 4. Complete the task** note the database name and user. Write down the values of *hostname*, *username*, *databasename*, and the password you chose. (Note that *hostname* will usually be **localhost**.)

## Using DirectAdmin

If you’re a regular User of a single-site webhosting account, you can log in normally. Then click **MySQL Management**. (If this is not readily visible, perhaps your host needs to modify your “package” to activate MySQL.) Then follow part “c” below.

Reseller accounts Admin accounts may need to click **User Level**. They must first log in as Reseller if the relevant domain is a Reseller’s primary domain… or log in as a User if the domain is not a Reseller’s primary domain. If it’s the Reseller’s primary domain, then when logged in as Reseller, simply click **User Level**. However if the relevant domain is not the Reseller’s primary domain, then you must log in as a User. Then click **MySQL Management**. (If not readily visible, perhaps you need to return to the Reseller or Admin level, and modify the “Manage user package” or “Manage Reseller package” to enable MySQL.)

In MySQL Management, click on the small words: **Create new database**. Here you are asked to submit two suffixes for the database and its username. For maximum security, use two different sets of 4-6 random characters. Then the password field has a Random button that generates an 8-character password. You may also add more characters to the password for maximum security. Click **Create**. The next screen will summarize the database, username, password and hostname. Be sure to copy and paste these into a text file for future reference.

---

# How to install WordPress <a name="advanced-administration/before-install/howto-install" />

Source: https://developer.wordpress.org/advanced-administration/before-install/howto-install/

WordPress is well-known for its ease of installation. Under most circumstances, installing WordPress is a very simple process and takes less than five minutes to complete. [Many web hosts](#) now offer [tools (e.g. Fantastico) to automatically install WordPress](https://wordpress.org/documentation/article/automated-installation/) for you. However, if you wish to install WordPress yourself, the following guide will help.

## Things to Know Before Installing WordPress

Before you begin the install, there are a few things you need to have and do. Refer the article [Before You Install](#advanced-administration/before-install).  
If you need multiple WordPress instances, refer [Installing Multiple WordPress Instances.](#advanced-administration/before-installmultiple-instances/)

## Basic Instructions

Here’s the quick version of the instructions for those who are already comfortable with performing such installations. More [detailed instructions](#detailed-instructions) follow.

1. Download and unzip the WordPress package if you haven’t already.
2. Create a database for WordPress on your web server, as well as a [MySQL](https://wordpress.org/documentation/article/glossary/#mysql) (or MariaDB) user who has all privileges for accessing and modifying it.
3. (Optional) Find and rename `wp-config-sample.php` to `wp-config.php`, then edit the file [(see Editing wp-config.php)](#advanced-administration/wordpress/wp-config) and add your database information.  
    **Note:** If you are not comfortable with renaming files, step 3 is optional and you can skip it as the install program will create the `wp-config.php` file for you.
4. Upload the WordPress files to the desired location on your web server: 
    - If you want to integrate WordPress into the root of your domain (e.g. https://example.com/), move or upload all contents of the unzipped WordPress directory (excluding the WordPress directory itself) into the root directory of your web server.
    - If you want to have your WordPress installation in its own subdirectory on your website (e.g. https://example.com/blog/), create the blog directory on your server and upload the contents of the unzipped WordPress package to the directory via FTP.
    - **Note:** If your FTP client has an option to convert file names to lower case, make sure it’s disabled.
5. Run the WordPress installation script by accessing the URL in a web browser. This should be the URL where you uploaded the WordPress files.

– If you installed WordPress in the root directory, you should visit: https://example.com/  
– If you installed WordPress in its own subdirectory called blog, for example, you should visit: https://example.com/blog/  
That’s it! WordPress should now be installed.

## Detailed instructions

### Step 1: Download and Extract

Download and unzip the WordPress package from [wordpress.org/download/](https://wordpress.org/download/).

- If you will be uploading WordPress to a remote web server, download the WordPress package to your computer with a web browser and unzip the package.
- If you will be using FTP, skip to the next step – uploading files is covered later.
- If you have [shell](https://wordpress.org/documentation/article/glossary/#shell) access to your web server, and are comfortable using console-based tools, you may wish to download WordPress directly to your [web server](https://wordpress.org/documentation/article/glossary/#web-server) using wget (or lynx or another console-based web browser) if you want to avoid [FTPing](https://wordpress.org/documentation/article/glossary/#ftp): 
    - wget https://wordpress.org/latest.tar.gz
    - Then extract the package using:
    - tar -xzvf latest.tar.gz
    
    The WordPress package will extract into a folder called wordpress in the same directory that you downloaded latest.tar.gz.

### Step 2: Create a database for WordPress

If you are using a [hosting provider](https://wordpress.org/documentation/article/glossary/#hosting-provider), you may already have a WordPress database set up for you, or there may be an automated setup solution to do so. Check your hosting provider’s support pages or your control panel for clues about whether or not you’ll need to create one manually.

If you determine that you’ll need to create one manually, follow the instructions for Using phpMyAdmin below to create your WordPress username and database. For other tools such as Plesk, cPanel and Using the MySQL Client, refer the article [Creating Database for WordPress.](#advanced-administration/before-installcreating-database/)

If you have only one database and it is already in use, you can install WordPress in it – just make sure to have a distinctive prefix for your tables to avoid over-writing any existing database tables.

#### Using phpMyAdmin

If your web server has [phpMyAdmin](https://wordpress.org/documentation/article/glossary/#phpmyadmin) installed, you may follow these instructions to create your WordPress username and database. If you work on your own computer, on most Linux distributions you can install PhpMyAdmin automatically.

***Note:** These instructions are written for phpMyAdmin 4.4; the phpMyAdmin user interface can vary slightly between versions.*

1. If a database relating to WordPress does not already exist in the **Database** dropdown on the left, create one: 
    1. Choose a name for your WordPress database: ‘`wordpress`‘ or ‘`blog`‘ are good, but most hosting services (especially shared hosting) will require a name beginning with your username and an underscore, so, even if you work on your own computer, we advise that you check your hosting service requirements so that you can follow them on your own server and be able to transfer your database without modification. Enter the chosen database name in the **Create database** field and choose the best collation for your language and encoding. In most cases it’s better to choose in the “utf8\_” series and, if you don’t find your language, to choose “utf8mb4\_general\_ci” [(Refer this article about upgrading to utf8mb4)](https://make.wordpress.org/core/2015/04/02/the-utf8mb4-upgrade/).  
        ![Creating a database in phpMyAdmin 4.4](https://i0.wp.com/wordpress.org/documentation/files/2018/10/phpMyAdmin_create_database_4.4.jpg?ssl=1)
    2. Click the **phpMyAdmin** icon in the upper left to return to the main page, then click the **Users** tab. If a user relating to WordPress does not already exist in the list of users, create one:  
        ![Create user in phpMyAdmin 4.4](https://i0.wp.com/codex.wordpress.org/images/2/26/users.jpg?ssl=1)
        1. Click **Add user**.
        2. Choose a username for WordPress (‘`wordpress`‘ is good) and enter it in the **User name** field. (Be sure **Use text field**: is selected from the dropdown.)
        3. Choose a secure password (ideally containing a combination of upper- and lower-case letters, numbers, and symbols), and enter it in the **Password** field. (Be sure **Use text field**: is selected from the dropdown.) Re-enter the password in the **Re-type** field.
        4. Write down the username and password you chose.
        5. Leave all options under **Global privileges** at their defaults.
        6. Click **Go**.
        7. Return to the Users screen and click the **Edit privileges** icon on the user you’ve just created for WordPress.
        8. In the **Database-specific privileges** section, select the database you’ve just created for WordPress under the **Add privileges to the following database** dropdown, and click Go.
        9. The page will refresh with privileges for that database. Click **Check All** to select all privileges, and click **Go**.
        10. On the resulting page, make note of the host name listed after **Server**: at the top of the page. (This will usually be **localhost**.)
    
    ![Make sure the server is localhost](https://i0.wp.com/wordpress.org/documentation/files/2018/10/phpMyAdmin_server_info_4.4.jpg?ssl=1)

### Step 3: Set up wp-config.php

You can either create and edit the wp-config.php file yourself, or you can skip this step and let WordPress try to do this itself when you run the installation script (step 5). (you’ll still need to tell WordPress your database information).

(For more extensive details, and step by step instructions for creating the configuration file and your secret key for password security, please see [Editing wp-config.php](#advanced-administration/wordpress/wp-config)).

Return to where you extracted the WordPress package in Step 1, rename the file wp-config-sample.php to wp-config.php, and open it in a text editor.

[Enter your database information](#advanced-administration/wordpress/wp-config#configure-database-settings) under the section labeled

```
 // ** MySQL settings - You can get this info from your web host ** //

```

**DB\_NAME**  
 The name of the database you created for WordPress in Step 2.  
**DB\_USER**  
 The username you created for WordPress in Step 2.  
**DB\_PASSWORD**  
 The password you chose for the WordPress username in Step 2.  
**DB\_HOST**  
 The hostname you determined in Step 2 (usually localhost, but not always; see [some possible DB\_HOST values](#advanced-administration/wordpress/wp-config#set-database-host)). If a port, socket, or pipe is necessary, append a colon (:) and then the relevant information to the hostname.  
**DB\_CHARSET**  
The database character set, normally should not be changed (see [Editing wp-config.php](#advanced-administration/wordpress/wp-config)).  
**DB\_COLLATE**  
The database collation should normally be left blank (see [Editing wp-config.php](#advanced-administration/wordpress/wp-config)).

[Enter your secret key values](#advanced-administration/wordpress/wp-config) under the section labeled

```
/* Authentication Unique Keys and Salts. */

```

Save the `wp-config.php` file.

### Step 4: Upload the files

Now you will need to decide where on your domain you’d like your WordPress-powered site to appear:  
– In the root directory of your website. (For example, https://example.com/)  
– In a subdirectory of your website. (For example, https://example.com/blog/)

***Note:** The location of your root web directory in the filesystem on your [web server](https://wordpress.org/documentation/article/glossary/#web-server) will vary across [hosting providers](https://wordpress.org/documentation/article/glossary/#hosting-provider) and operating systems. Check with your hosting provider or system administrator if you do not know where this is.*

#### In the Root Directory

- If you need to upload your files to your web server, use an [FTP](https://wordpress.org/documentation/article/glossary/#ftp) client to upload all the contents of the wordpress directory (but not the directory itself) into the root directory of your website.  
    If your files are already on your web server, and you are using [shell](https://wordpress.org/documentation/article/glossary/#shell) access to install WordPress, move all of the contents of the wordpress directory (but not the directory itself) into the root directory of your website.

#### In a Subdirectory

- If you need to upload your files to your web server, rename the wordpress directory to your desired name, then use an [FTP](https://wordpress.org/documentation/article/glossary/#ftp) client to upload the directory to your desired location within the root directory of your website.
- If your files are already on your web server, and you are using [shell](https://wordpress.org/documentation/article/glossary/#shell) access to install WordPress, move the wordpress directory to your desired location within the root directory of your website, and rename the directory to your desired name.

### Step 5: Run the Install Script

Point a web browser to start the installation script.

- If you placed the WordPress files in the root directory, you should visit: https://example.com/wp-admin/install.php
- If you placed the WordPress files in a subdirectory called blog, for example, you should visit: https://example.com/blog/wp-admin/install.php

#### Setup configuration file

If WordPress can’t find the wp-config.php file, it will tell you and offer to try to create and edit the file itself. (You can also do this directly by loading `wp-admin/setup-config.php` in your web browser.) WordPress will ask you the database details and write them to a new wp-config.php file. If this works, you can go ahead with the installation; otherwise, go back and [create, edit, and upload the wp-config.php file yourself (step 3).](#advanced-administration/before-installhowto-install/#step-3-set-up-wp-config-php)

![The WordPress setup screen](https://i0.wp.com/wordpress.org/documentation/files/2018/10/install-step3_v47.png?ssl=1)

#### Finishing installation

The following screenshots show how the installation progresses. Notice that in entering the details screen, you enter your site title, your desired user name, your choice of a password (twice), and your e-mail address. Also displayed is a check-box asking if you would like your blog to appear in search engines like Google and DuckDuckGo. Leave the box unchecked if you would like your blog to be visible to everyone, including search engines, and check the box if you want to block search engines, but allow normal visitors. Note all this information can be changed later in your [Administration Screen](https://wordpress.org/documentation/article/administration-screens/).

![The WordPress installation screen](https://i0.wp.com/wordpress.org/documentation/files/2018/10/install-step5_v47.png?ssl=1)

If you successfully install the WordPress, login prompt will be displayed.

Install script troubleshooting  
– If you get an error about the database when you run the install script:  
 – Go back to [Step 2](#detailed-step-2) and [Step 3](#detailed-step-3), and make sure you entered all the correct database information into wp-config.php.  
 – Make sure you granted your WordPress user permission to access your WordPress database in **Step 3.**  
 – Make sure the database server is running.

## Installing WordPress at popular Hosting Companies

### installing WordPress at Atlantic.net

[Install WordPress On A Ubuntu 14.04 LTS](https://www.atlantic.net/vps-hosting/how-to-install-wordpress-ubuntu-14/)  
You can also install WordPress on Ubuntu with [one click WordPress Hosting](https://www.atlantic.net/vps-hosting/wordpress-vps-hosting/) on Atlantic.Net.

### Installing WordPress at AWS

- [Installatron WordPress](https://aws.amazon.com/marketplace/pp/prodview-duuvqpjnl65oe) Installatron WordPress is a pre-configured and ready-to-launch image that contains a WordPress website and Installatron’s WordPress management tools.
- [Architecting a Highly Scalable WordPress Site in AWS](https://www.slideshare.net/harishganesan/scaling-wordpress-in-aws-amazon-ec2) A guide for building a more expensive, highly scalable AWS implementation using Amazon’s Relational Data Store (RDS) et al.

### Installing WordPress at DigitalOcean

- [How to install WordPress on Ubuntu 14.04](https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-on-ubuntu-14-04)

### Installing WordPress at Linode

- [Manage Web Content with WordPress](https://www.linode.com/docs/websites/cms/manage-web-content-with-wordpress) Install WordPress on a Debian Server with a LAMP Stack

You can also install WordPress on Ubuntu with one click using this [StackScript](https://www.linode.com/stackscripts/view/12) on Linode.

### Installing WordPress at iPage Hosting

- [This is a great step by step tutorial by IStartBlogging](https://istartblogging.com/#express-blog-install) on how to setup your blog the smart way with iPage Hosting.

In less than 5 minutes from now, you will have your blog ready on your domain. You will install WordPress on your own domain as an Automated Process with ONE Click WordPress Installation feature from iPage hosting.

### Installing WordPress at Microsoft Azure

- [Installing WordPress on Microsoft Azure](https://azure.microsoft.com/en-us/marketplace/partners/wordpress/wordpress/) is as simple as a few clicks. A hosting space and MySQL database will be created and configured, so you’re ready to start creating within a matter of seconds.
- Running into some issues and need to troubleshoot your WordPress site on Azure? Follow this handy [Troubleshooting guide for WordPress on Azure](https://azure.microsoft.com/en-us/blog/wordpress-troubleshooting-techniques-on-azure-websites/)
- There is a full listing of resources on how to [learn more about WordPress on Microsoft Azure!](https://azure.microsoft.com/en-us/documentation/articles/develop-wordpress-on-app-service-web-apps/)

## Common installation problems

The following are some of the most common installation problems. For more information and troubleshooting for problems with your WordPress installation, check out [FAQ Installation](https://wordpress.org/documentation/article/faq-installation/) and [FAQ Troubleshooting](https://wordpress.org/documentation/article/faq-troubleshooting/).

**I see a directory listing rather than a web page.**

The web server needs to be told to view index.php by default. In Apache, use the DirectoryIndex index.php directive. The simplest option is to create a file named .htaccess in the installed directory and place the directive there. Another option is to add the directive to the web server’s configuration files.

**I see lots of `Headers already sent` errors. How do I fix this?**

You probably introduced a syntax error in editing wp-config.php.

1. Download wp-config.php (if you don’t have [shell](https://wordpress.org/documentation/article/glossary/#shell) access).
2. Open it in a [text editor](https://wordpress.org/documentation/article/glossary/#text-editor).
3. Check that the first line contains nothing but , and that there is no text after it (not even whitespace).
4. If your text editor saves as Unicode, make sure it adds **no byte order mark (BOM)**. Most Unicode-enabled text editors do not inform the user whether or not it adds a BOM to files; if so, try using a different text editor.
5. Save the file, upload it again if necessary, and reload the page in your browser.

**My page comes out gibberish. When I look at the source I see a lot of “`<?php ?>`” tags.**

If the `<?php ?>` tags are being sent to the browser, it means your [PHP](https://wordpress.org/documentation/article/glossary/#php) is not working properly. All PHP code is supposed to be executed before the server sends the resulting [HTML](https://wordpress.org/documentation/article/glossary/#html) to your web browser. (That’s why it’s called a preprocessor.) Make sure your web server meets the requirements to run WordPress, that PHP is installed and configured properly, or contact your hosting provider or system administrator for assistance.

**I keep getting an `Error connecting to database` message but I’m sure my configuration is correct.**

Try resetting your MySQL password manually. If you have access to MySQL via shell, try issuing:

```
SET PASSWORD FOR 'wordpressusername'@'hostname' = OLD_PASSWORD('password');

```

If you do not have shell access, you should be able to simply enter the above into an SQL query in phpMyAdmin. Failing that, you may need to use your host’s control panel to reset the password for your database user.

**I keep getting an `Your PHP installation appears to be missing the MySQL extension which is required by WordPress` message but I’m sure my configuration is correct.**

Check to make sure that your configuration of your web-server is correct and that the MySQL plugin is getting loaded correctly by your web-server program. Sometimes this issue requires everything in the path all the way from the web-server down to the MySQL installation to be checked and verified to be fully operational. Incorrect configuration files or settings are often the cause of this issue.

**My image/MP3 uploads aren’t working.**

If you use the Rich Text Editor on a blog that’s installed in a subdirectory, and drag a newly uploaded image into the editor field, the image may vanish a couple seconds later. This is due to a problem with TinyMCE (the rich text editor) not getting enough information during the drag operation to construct the path to the image or other file correctly. The solution is to NOT drag uploaded images into the editor. Instead, click and hold on the image and select **Send to Editor.**

---

# Running a Development Copy of WordPress <a name="advanced-administration/before-install/development" />

Source: https://developer.wordpress.org/advanced-administration/before-install/development/

Having a development instance of WordPress is a good way to update, develop, and modify a website without interrupting the live version of WordPress. There are many ways to set up a development copy of WordPress, but this article will cover the basics, best practices, tips, and some tools to make running a development copy of WordPress much easier.

## Installing WordPress on your computer

Use these instructions to set up a local server environment for testing and development. Installing WordPress locally is usually meant for development. Those interested in development can follow the instructions below to download and install WordPress locally. – [wp-env](#block-editor/reference-guides/packages/packages-env) – a free, open-source development environment maintained by the WordPress core developer community. – [VVV or Varying Vagrant Vagrants](https://varyingvagrantvagrants.org/) – free, open-source local development environment maintained by members of the WordPress community. – [XAMPP](https://www.apachefriends.org/) – free and open-source local development environment maintained by Apache Friends – [MAMP](https://www.mamp.info/en/mac/) – free local development environment that everything you need to install WordPress locally. – [DDEV](https://ddev.readthedocs.io/en/stable/users/quickstart/#wordpress) – free, open-source, development environment. Seamlessly share local sites over public domains, includes a database editor, Xdebug, and other performance profiling tools. – [Lando](https://lando.dev/) – free, open-source development environment that offers a [plugin to install WordPress locally](https://docs.lando.dev/plugins/wordpress/). – [AMPPS](https://ampps.com/downloads/) – free WAMP/MAMP/LAMP stack with Softaculous Installer built in. It can 1-click install and upgrade WordPress and others as well. – [Bitnami package for WordPress](https://bitnami.com/stack/wordpress) and [Bitnami package for WordPress Multisite](https://bitnami.com/stack/wordpress-multisite) – Bitnami packages for WordPress that provide a one-click install solution for WordPress or WordPress Multisite on your local computer or in the cloud. – [Instant WordPress](https://instantwp.com/) – free, standalone, portable WordPress development environment for Windows that will run from a USB key. – [WordPress Studio](https://developer.wordpress.com/studio/) – free, open-source app to install and manage multiple WordPress sites locally. ### Software Appliance – Ready-to-use

You may find that using a pre-integrated [software appliance](https://en.wikipedia.org/wiki/Software_appliance) is a great way to get up and running with WordPress, especially in combination with virtual machine software (e.g., VMWare, VirtualBox, Xen HVM, KVM). Parallels is another software that can be used. Unlike virtual machine software, it requires payment. It allows you to run both Mac and Windows on your machine. A software appliance allows users to skip the manual installation of WordPress and its dependencies and instead deploy a self-contained system that requires little to no setup in just a couple of minutes. - [TurnKey WordPress Appliance](https://www.turnkeylinux.org/wordpress): a free Debian-based appliance that just works. It bundles a collection of popular WordPress plugins and features a small footprint, automatic security updates, SSL support, and a Web administration interface. Available as ISO, virtual machine images, or launch in the cloud.

### Unattended/automated installation of WordPress on Ubuntu Server 16.04 LTS

## Two WordPress Installations with One Database

**Note:** This method is NOT recommended if you plan on doing database development. A popular approach to running a local copy of your live site is using the same local and live database. Using the same database will allow you to work on your local copy and push changes from local to your production with no break in uptime. **Setup of the local copy**Once you have your local files set up, you must modify wp-config.php in the root of your local install. ```
define('WP_HOME',  "https://{$_SERVER['HTTP_HOST']}");
define('WP_SITEURL', "https://{$_SERVER['HTTP_HOST']}");

ob_start( 'ob_replace_home_url' );
function ob_replace_home_url( $content ) {
    $home_urls = array(
        'https://site.testing.example.com',
        'https://site.example.com',
        'https://site.authoring.testing.example.com',
        'https://site.authoring.example.com',
    );

    $content = str_replace( $home_urls, WP_HOME, $content );

    return $content;
}

```

### Using a Drop-In

What if we don’t want to hack core code? Avoiding changes to core code is a good practice for easy upgrading and code-sharing. There is even a filter for this (`pre_option_siteurl` and `pre_option_home`) but there’s a problem: within **wp-settings.php**, - the filter can’t be defined until after line 65 when `functions.php` is included
- WordPress makes calls to `get_option` on line 155 of (via `wp_plugin_directory_constants()`)
- plugins aren’t defined until later down around line 194.

However, between lines 65 and 155, there is something we can use, namely the loading of the drop-in `db.php`; the filter can be safely defined there. (However, this is perhaps only halfway towards “not core” code.) Check if you already have an existing wp-content/db.php before trying this technique. Plugins like W3 Total Cache use it for similar reasons. ```
<?php
// paste this in a (new) file, wp-content/db.php
add_filter ( 'pre_option_home', 'test_localhosts' );
add_filter ( 'pre_option_siteurl', 'test_localhosts' );
function test_localhosts( ) {
  if (... same logic as before to see if on dev site ...) {
     return "https://my.example.com/dev";
  }
  else return false; // act as normal; will pull main site info from db
}

```

---

# Installing WordPress in your language <a name="advanced-administration/before-install/in-your-language" />

Source: https://developer.wordpress.org/advanced-administration/before-install/in-your-language/

*Note: This article is about displaying the WordPress Administrative “back-end” in your language. If you are looking for information on how to localize your “front-end” website, or customize your theme to be localizable, refer to [i18n for WordPress Developers](https://codex.wordpress.org/I18n_for_WordPress_Developers) (and optionally [Internationalization](#themes/functionality/internationalization) and [Localization](#themes/functionality/localization) for theme developers. If you are interested in how to build a multilingual (e.g.: French / English) WordPress site, you can start your journey [here](#advanced-administration/wordpress/multilingual).*

Although WordPress displays in U.S. English by default, it has the built-in capability to be used in any language. The WordPress community has already translated WordPress into many languages, and there are Themes, translation files, and support available in many other languages (see [WordPress in Your Language](#advanced-administration/wordpress/multilingual)).

## Installing language files from the admin dashboard

As of version 4.0, you can have WordPress [automatically install the language of your choice](https://make.wordpress.org/core/2014/09/05/language-chooser-in-4-0/) during the installation process.

For WordPress 4.1 or later, you can [install language packs directly from the Admin back-end](https://wplang.org/wordpress-4-1-install-language-packs-dashboard/) at any time. WordPress will download them and switch the admin back-end to that language. Navigate to **Settings &gt; General &gt; Site Language** and select from the list of available languages. For Multisite Super Admins, you can set the default language using the Network Administration **Settings** panel.

## Manually installing language files

Here are the steps you will need to follow to install an international version of WordPress.

**Note:** If you make an error in the steps or you do not specify the correct language, WordPress will default back to English. For more help Installing WordPress, see [Installing WordPress](#advanced-administration/before-install/howto-install) and [FAQ Installation](https://wordpress.org/documentation/article/faq-installation/).

- Download the `.mo` language file for your language. The naming convention of the `.mo` files is based on the ISO-639 language code (e.g. *pt* for Portuguese) followed by the ISO-3166 country code (e.g. *PT* for Portugal or *BR* for Brazil). So, the Brazilian Portuguese file would be called `pt_BR.mo`, and a non-specific Portuges file would be called `pt.mo`. Complete lists of codes can be found at [(country codes)](https://www.gnu.org/savannah-checkouts/gnu/gettext/manual/gettext.html#Country-Codes) and [(language codes)](https://www.gnu.org/savannah-checkouts/gnu/gettext/manual/gettext.html#Language-Codes).

## Setting the language for your site

### Single-site installations

#### WordPress 4.0 and above

- Change the language in the admin settings screen. `Settings > General > Site Language`.

#### WordPress 3.9.2 and below

- Open your `wp-config.php` file in a [text editor](https://wordpress.org/documentation/article/wordpress-glossary/#Text_editor) and search for:

```
define( 'WPLANG', '' );

```

- Edit this line according to the `.mo` file you’ve just downloaded, e.g. for the Portuguese spoken in Brazil you must add:

```
define ( 'WPLANG', 'pt_BR' );

```

- Note that if the .mo and .po files don’t exist for a language code called for in wp-config.php then there is no error message, but the code is still used in [language\_attributes()](#reference/functions/language_attributes) . This is useful for those of us whose language is similar enough to en\_US not to require translation, but who don’t want en-US as the language tag in the blog, instead wanting some other variant of English. For example:

```
define ( 'WPLANG', 'en_GB' );

```

- Once you’ve added your language code, save the file.

### Multisite installations

If you have a [site network](#advanced-administration/multisite/create-network) (WordPress multisite), the language is set on a per-blog basis through the “Site language” option in the `Settings > General` subpanel.

You can set the default language for the entire network under the `Network Admin > Settings` screen (“Default Language”).

### Adding translation

If you want to add translations for terms that are still displaying in English after installation, visit [translate.wordpress.org](https://translate.wordpress.org) and select your language. To get started, refer [this page](https://make.wordpress.org/polyglots/handbook/tools/glotpress-translate-wordpress-org/) in the [Translator’s Handbook](https://make.wordpress.org/polyglots/handbook/).

---

# Installing Multiple WordPress Instances <a name="advanced-administration/before-install/multiple-instances" />

Source: https://developer.wordpress.org/advanced-administration/before-install/multiple-instances/

If you need multiple WordPress instances, there are three types of installations based on system architecture, or a combination of WordPress instances and databases:

1. WordPress Multisite Network: a single WordPress instance (with multiple sites created within the same WP instance) sharing a single database instance.
2. Single Database: multiple WordPress instances sharing a single database instance.
3. Multiple Databases: multiple WordPress instances with each instance using its own databases instance.

![](https://i0.wp.com/wordpress.org/documentation/files/2022/06/multisite_db_layout-1024x469.jpg?resize=1024%2C469&ssl=1)

Let’s first look at the third type, multiple WordPress instances with multiple databases, because it has the same installation process as a single WordPress instance.

## Multiple WordPress Instances with Multiple Databases

You’ll need a separate [MySQL database](https://wordpress.org/documentation/article/wordpress-glossary/#mysql) for each instance you plan to install. If you have not yet created these, [basic instructions are found here](#advanced-administration/before-install/howto-install).

To make sure each WordPress instance connects to the right database you need to add those information to the [wp-config.php](#advanced-administration/wordpress/wp-config) file. The lines to change are the following:

```
define('DB_NAME', 'wordpress');    // The name of the database
define('DB_USER', 'username');     // Your MySQL username
define('DB_PASSWORD', 'password'); // The users password
define('DB_HOST', 'localhost' );  // The host of the database

```

`DB_NAME` is the name of the individual database created for that blog hosted on the `DB_HOST` MySQL server. If you are using different user logins for each database, edit `DB_USER` and `DB_PASSWORD` to reflect this as well.

Upload each [wp-config.php](#advanced-administration/wordpress/wp-config) file to its specific root/installation directory, and run the installation. See [Installing WordPress](#advanced-administration/before-install/howto-install) for more information.

## The Multisite Feature

If you want multiple sites to use WordPress, you can use the multisite feature to create what is referred to as a *network* of sites. The multisite feature involves installing a single WordPress instance and a single database.

The multisite feature appears to be simpler than other types of multiple WordPress installations, but there are some considerations and restrictions. Refer to the following documents for more detailed information:

- [Before You Create A Network](#advanced-administration/multisite/prepare-network)
- [Create A Network](#advanced-administration/multisite/create-network)
- [Multisite Network Administration](#advanced-administration/multisite/administration)

## Multiple WordPress Instances with a Single Database

As with the multiple-database solution described above, the [wp-config.php](#advanced-administration/wordpress/wp-config) file will vary for each installation. In this case, however, only a single line is unique to each blog:

```
$table_prefix = 'wp_'; // example: 'wp_' or 'b2' or 'mylogin_' 

```

By default, WordPress assigns the table prefix `wp_` to its [MySQL database](https://wordpress.org/documentation/article/wordpress-glossary/#mysql) tables, but this prefix can be anything you choose. This allows you to create unique identifiers for each blog in your database. For example, let’s say you have three blogs to set up, with the names *Main*, *Projects*, and *Test*. You should substitute the prefix `wp_` in each blog’s  
[wp-config.php](#advanced-administration/wordpress/wp-config):

**Main blog:**

```
$table_prefix = 'main_'; 

```

**Projects blog:**

```
$table_prefix = 'projects_'; 

```

**Test blog:**

```
$table_prefix = 'test_'; 

```

As noted, you may use a prefix of your own making. Those provided here are for example only.

Upload each [wp-config.php](#advanced-administration/wordpress/wp-config) file to its specific root/installation directory, and run the installation. See [Installing WordPress](#advanced-administration/before-install/howto-install) for more information.

For enhanced security you can also add multiple users to the same database and give each WordPress Instance their own MySQL user.

## Multiple Databases, Same Users

You can use the same userbase for all your blogs on the same domain by defining the `CUSTOM_USER_TABLE` and optionally the `CUSTOM_USER_META_TABLE` constants to point to the same `wp_your_blog_users` and `wp_your_blog_usermeta` tables.  
See [Editing wp-config.php/Custom User and Usermeta Tables](#advanced-administration/wordpress/wp-config#custom-user-and-usermeta-tables).

---

# Install WordPress at popular providers <a name="advanced-administration/before-install/popular-providers" />

Source: https://developer.wordpress.org/advanced-administration/before-install/popular-providers/

## Installing WordPress at Atlantic.Net

- [ How to Install WordPress on a Ubuntu 14.04 LTS Cloud Server ](https://www.atlantic.net/community/howto/install-wordpress-ubuntu-14/)

You can also install WordPress on Ubuntu with one click [WordPress Hosting](https://www.atlantic.net/vps-hosting/wordpress-vps-hosting/).

## Installing WordPress at AWS

- [WordPress Certified by Bitnami and Automattic](https://aws.amazon.com/marketplace/pp/prodview-bzstv3wbn5wkq). WordPress is the world’s most popular content management platform. It includes the new Gutenberg editor and over 45,000 themes and plugins. This image is certified by Bitnami as secure, up-to-date, and packaged using industry best practices, and approved by Automattic, the experts behind WordPress.
- [WordPress with NGINX and SSL Certified by Bitnami and Automattic](https://aws.amazon.com/marketplace/pp/prodview-s6cuqgfczpuwm). WordPress with NGINX and SSL enhances WordPress with SSL auto-configuration and the high-performance NGINX web server. This image is certified by Bitnami as secure, up-to-date, and packaged using industry best practices, and approved by Automattic, the experts behind WordPress.
- [WordPress with LiteSpeed Cache (Powered OpenLiteSpeed).](https://aws.amazon.com/marketplace/pp/prodview-w7ee7rs5uhlem) This OLS + WordPress image is 200+ times faster than a regular WordPress image.
- [WordPress Multisite Certified by Bitnami and Automattic.](https://aws.amazon.com/marketplace/pp/prodview-rcmdzzu2x3ntm) WordPress Multisite makes it simple to manage multiple WordPress websites from the same server and interface. This image is certified by Bitnami as secure, up-to-date, and packaged using industry best practices, and approved by Automattic, the experts behind WordPress.
- [Architecting a Highly Scalable WordPress Site in AWS](https://www.slideshare.net/harishganesan/scaling-wordpress-in-aws-amazon-ec2) A guide for building a more expensive, highly scalable AWS implementation using Amazon’s Relational Data Store (RDS).

## Installing WordPress at DigitalOcean

- [How To Install WordPress on Ubuntu 12.04](https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-on-ubuntu-12-04)
- [How To Install WordPress on Ubuntu 14.04](https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-on-ubuntu-14-04)
- [How To Install WordPress with LAMP on Ubuntu 16.04](https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-with-lamp-on-ubuntu-16-04)
- [How To Install WordPress with LAMP on Ubuntu 18.04](https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-with-lamp-on-ubuntu-18-04)
- [How To Install WordPress on Ubuntu 20.04 with a LAMP Stack](https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-on-ubuntu-20-04-with-a-lamp-stack)
- [How To Install WordPress on Ubuntu 22.04 with a LAMP Stack](https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-on-ubuntu-22-04-with-a-lamp-stack)
- [How To Use Ansible to Install and Set Up WordPress with LAMP on Ubuntu 18.04](https://www.digitalocean.com/community/tutorials/how-to-use-ansible-to-install-and-set-up-wordpress-with-lamp-on-ubuntu-18-04)
- [How To Install WordPress with LAMP on Debian 9](https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-with-lamp-on-debian-9)
- [How to Install WordPress with LAMP on Debian 10](https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-with-lamp-on-debian-10)

## Installing WordPress at Linode

- [Install WordPress on Ubuntu 16.04](https://www.linode.com/docs/guides/install-wordpress-on-ubuntu-16-04/)
- [Install WordPress on Ubuntu 18.04](https://www.linode.com/docs/guides/install-wordpress-ubuntu-18-04/)
- [Install WordPress on Ubuntu 20.04](https://www.linode.com/docs/guides/how-to-install-wordpress-ubuntu-2004/)
- [Install WordPress on Ubuntu 22.04](https://www.linode.com/docs/guides/how-to-install-wordpress-ubuntu-22-04/)
- [Install WordPress on Debian 10](https://www.linode.com/docs/guides/how-to-install-wordpress-debian-10/)
- [Install WordPress on AlmaLinux 8](https://www.linode.com/docs/guides/how-to-install-wordpress-almalinux-8/)

## Installing WordPress at Microsoft Azure

- [Installing WordPress on Microsoft Azure](https://learn.microsoft.com/azure/app-service/quickstart-wordpress) is as simple as a few clicks. A hosting space and MySQL database will be created and configured, so you’re ready to start creating within a matter of seconds.
- Running into some issues and need to troubleshoot your WordPress site on Azure? Follow this handy [Troubleshooting guide for WordPress on Azure](https://learn.microsoft.com/troubleshoot/azure/app-service/web-apps-open-source-technologies-faqs).
- For other WordPress related content or specific WordPress related questions, you may perform a [search with WordPress related terms on Microsoft Learn](https://learn.microsoft.com/en-us/search/?terms=wordpress).

---

# Server configuration <a name="advanced-administration/server" />

Source: https://developer.wordpress.org/advanced-administration/server/



---

# Changing File Permissions <a name="advanced-administration/server/file-permissions" />

Source: https://developer.wordpress.org/advanced-administration/server/file-permissions/

On computer file systems, different files and directories have **permissions** that specify who and what can read, write, modify and access them. This is important because WordPress may need access to write to files in your `wp-content` directory to enable certain functions.

## Short explanation

Linux [file permissions](https://en.wikipedia.org/wiki/File_system_permissions) consist primarily of three components — the permissions the owner of the file or folder has, the permissions members of the group that owns the file or folder have, and the permissions that anyone else has for accessing or modifying the file and folder. The three permission components are usually represented using three numbers in order of the owner’s permission level, the group’s permission level, and everyone’s permission level. *There is technically a fourth component, but that is beyond what we need to know to secure WordPress. It will not be discussed here.*

There are three kinds of access each for the user, the group, and everyone else. They are read access, write access, and execute access. Read access lets you read the contents of the file or the directory. Write access lets you modify the file or the directory. And execute access lets you run the file like a program or a script.

## Permission Modes

```
 7      5      5
user   group  world
r+w+x  r+x    r+x
4+2+1  4+0+1  4+0+1  = 755

```

The permission mode is computed by adding up the following values for the user, the file group, and for everyone else. The diagram shows how.

- **R**ead 4 – Allowed to read files
- **W**rite 2 – Allowed to write/modify files
- e**X**ecute1 – Read/write/delete/modify/directory

```
 7      4      4
user   group  world
r+w+x  r      r
4+2+1  4+0+0  4+0+0  = 744

```

### Example Permission Modes

| Mode | Str Perms | Explanation |
|---|---|---|
| **0677** | -rw-rwxrwx | owner has rw only(6), other and group has rwx (7) |
| **0670** | -rw-rwx— | owner has rw only, group has rwx, others have no permission |
| **0666** | -rw-rw-rw- | all have rw only (6) |
| **0607** | -rw—-rwx | owner has rw only, group has no permission and others have rwx |
| **0600** | -rw——- | owner has rw only, group and others have no permission |
| **0477** | -r–rwxrwx | owner has read only (4), other and group has rwx (7) |
| **0470** | -r–rwx— | owner has read only, group has rwx, others have no permission |
| **0407** | -r—–rwx | owner has read only, other has rwx, group has no permission |
| **0444** | -r–r–r– | all have read only (4) |
| **0400** | -r——– | owner has read only(4), group and others have no permission(0) |

## Permission Scheme for WordPress

Permissions will be different from host to host, so this guide only details general principles. It cannot cover all cases. This guide applies to servers running a standard setup (note, for shared hosting using “suexec” methods, see below).

Typically, all files should be owned by your user (ftp) account on your web server, and should be writable by that account. On shared hosts, files should never be owned by the webserver process itself (sometimes this is **www**, or **apache**, or **nobody** user).

Any file that needs write access from WordPress should be owned or group-owned by the user account used by WordPress (which may be different than the server account). For example, you may have a user account that lets you FTP files back and forth to your server, but your server itself may run using a separate user, in a separate usergroup, such as **dhapache** or **nobody**. If WordPress is running as the FTP account, that account needs to have write access, i.e., be the owner of the files, or belong to a group that has write access. In the latter case, that would mean permissions are set more permissively than default (for example, 775 rather than 755 for folders, and 664 instead of 644).

The file and folder permissions of WordPress should be the same for most users, depending on the type of installation you performed and the umask settings of your system environment at the time of install.

**NOTE:** If an experienced user installed WordPress for you, you likely do not need to modify file permissions. Unless you are experiencing problems with permission errors, or you *want to*, you probably should not mess with this.

**NOTE:** If you installed WordPress yourself, you likely DO need to modify file permissions. Some files and directories should be “hardened” with stricter permissions, specifically, the wp-config.php file. This file is initially created with 644 permissions, and it’s a hazard to leave it like that. See Security and Hardening.

Typically, all core WordPress files should be writable only by your user account (or the httpd account, if different). (Sometimes though, multiple ftp accounts are used to manage an install, and if all ftp users are known and trusted, i.e., not a shared host, then assigning group writable may be appropriate. Ask your server admin for more info.) However, if you utilize mod\_rewrite Permalinks or other `.htaccess` features you should make sure that WordPress can also write to your `/.htaccess` file.

If you want to use the built-in theme editor, all files need to be group writable. Try using it before modifying file permissions, it should work. (This may be true if different users uploaded the WordPress package and the Plugin or Theme. This wouldn’t be a problem for Plugin and Themes installed via the admin. When uploading files with different ftp users group writable is needed. On shared hosting, make sure the group is exclusive to users you trust… the apache user shouldn’t be in the group and shouldn’t own files.)

Some plugins require the `/wp-content/` folder be made writeable, but in such cases they will let you know during installation. In some cases, this may require assigning 755 permissions. The same is true for `/wp-content/cache/` and maybe `/wp-content/uploads/` (if you’re using [MultiSite](#advanced-administration/multisite/create-network) you may also need to do this for `/wp-content/blogs.dir/`)

Additional directories under /wp-content/ should be documented by whatever plugin / theme requires them. Permissions will vary.

```
|
|- index.php
|- wp-admin
|   |- wp-admin.css
|- wp-blog-header.php
|- wp-comments-post.php
|- wp-commentsrss2.php
|- wp-config.php
|- wp-content
|   |- cache
|   |- plugins
|   |- themes
|   |- uploads
|- wp-cron.php
|- wp-includes
|- xmlrpc.php

```

### Shared Hosting with suexec

The above may not apply to shared hosting systems that use the “suexec” approach for running PHP binaries. This is a popular approach used by many web hosts. For these systems, the php process runs as the owner of the php files themselves, allowing for a simpler configuration and a more secure environment for the specific case of shared hosting.

Note: suexec methods should NEVER be used on a single-site server configuration, they are more secure **only** for the specific case of shared hosting.

In such an suexec configuration, the correct permissions scheme is simple to understand.

- All files should be owned by the actual user’s account, not the user account used for the httpd process.
- Group ownership is irrelevant, unless there’s specific group requirements for the web-server process permissions checking. This is not usually the case.
- All directories should be 755 or 750.
- All files should be 644 or 640. Exception: wp-config.php should be 440 or 400 to prevent other users on the server from reading it.
- No directories should ever be given 777, even upload directories. Since the php process is running as the owner of the files, it gets the owners permissions and can write to even a 755 directory.

In this specific type setup, WordPress will detect that it can directly create files with the proper ownership, and so it will not ask for FTP credentials when upgrading or installing plugins.

Popular methods used by sysadmins for this setup are:

- [suPHP](https://smarsching.github.io/suphp/Home.html), runs through php-cgi, currently unmaintained since 2013.
- [mod\_ruid2](https://github.com/mind04/mod-ruid2), apache module, currently unmaintained since 2013.
- [mpm-itk](http://mpm-itk.sesse.net/), apache module.
- [mod\_fcgid](https://httpd.apache.org/mod_fcgid/), an Apache module and FastCGI server with more extensive configuration.
- [PHP-FPM](https://php-fpm.org/), an alternative FastCGI server with shared OPCode, for use with Apache and Nginx.

## Using an FTP Client

[FTP programs](#advanced-administration/upgrade/ftp) (“clients”) allow you to set permissions for files and directories on your remote host. This function is often called `chmod` or `set permissions` in the program menu.

In [WordPress install](#advanced-administration/before-install/howto-install), two files that you will probably want to alter are the index page, and the css which controls the layout. Here’s how you change index.php – *the process is the same for any file*.

In the screenshot below, look at the last column – that shows the permissions. It looks a bit confusing, but for now just note the sequence of letters.

[![](https://i0.wp.com/wordpress.org/documentation/files/2019/02/podz_filezilla_12.gif?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2019/02/podz_filezilla_12.gif?ssl=1)  
Initial permissions

Right-click ‘index.php’ and select ‘File Permissions’  
A popup screen will appear.

[![](https://i0.wp.com/wordpress.org/documentation/files/2019/02/podz_filezilla_13.gif?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2019/02/podz_filezilla_13.gif?ssl=1)  
Altering file permissions

Don’t worry about the check boxes. Just delete the ‘Numeric value:’ and enter the number you need – in this case it’s 666. Then click OK.

[![](https://i0.wp.com/wordpress.org/documentation/files/2019/02/podz_filezilla_14.gif?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2019/02/podz_filezilla_14.gif?ssl=1)  
Permissions have been altered.

You can now see that the file permissions have been changed.

### Unhide the hidden files

By default, most [FTP Clients](#advanced-administration/upgrade/ftp), including [FileZilla](https://sourceforge.net/projects/filezilla/), keep hidden files, those files beginning with a period (.), from being displayed. But, at some point, you may need to see your hidden files so that you can change the permissions on that file. For example, you may need to make your [.htaccess](https://wordpress.org/documentation/article/glossary#htaccess) file, the file that controls [permalinks](https://wordpress.org/documentation/article/using-permalinks/), writeable.

To display hidden files in FileZilla, in it is necessary to select ‘View’ from the top menu, then select ‘Show hidden files’. The screen display of files will refresh and any previously hidden file should come into view.

To get FileZilla to always show hidden files – under Edit, Settings, Remote File List, check the Always show hidden files box.

In the latest version of Filezilla, the ‘Show hidden files’ option was moved to the ‘Server’ tab. Select ‘Force show hidden files.’

## Using the Command Line

If you have shell/SSH access to your hosting account, you can use `chmod` to change file permissions, which is the preferred method for experienced users. Before you start using `chmod` it would be recommended to read some tutorials to make sure you understand what you can achieve with it. Setting incorrect permissions can take your site offline, so please take your time.

- [Unix Permissions](https://web.archive.org/web/20190715230319/http://www.washington.edu/computing/unix/permissions.html)

You can make **all** the files in your `wp-content` directory writable in two steps, but before making every single file and folder writable you should first try safer alternatives like modifying just the directory. Try each of these commands first and if they don’t work then go recursive, which will make even your themes image files writable. Replace **DIR** with the folder you want to write in

```
chmod -v 746 DIR
chmod -v 747 DIR
chmod -v 756 DIR
chmod -v 757 DIR
chmod -v 764 DIR
chmod -v 765 DIR
chmod -v 766 DIR
chmod -v 767 DIR

```

If those fail to allow you to write, try them all again in order, except this time replace -v with -R, which will recursively change each file located in the folder. If after that you still can’t write, you may now try 777.

### [About Chmod](#about-chmod)

`chmod` is a unix command that means “**ch**ange **mod**e” on a file. The `-R` flag means to apply the change to every file and directory inside of `wp-content`. 766 is the mode we are changing the directory to, it means that the directory is readable and writable by WordPress and any and all other users on your system. Finally, we have the name of the directory we are going to modify, `wp-content`. If 766 doesn’t work, you can try 777, which makes all files and folders readable, writable, and executable by all users, groups, and processes.

If you use [Permalinks](https://wordpress.org/documentation/article/using-permalinks/) you should also change permissions of .htaccess to make sure that WordPress can update it when you change settings such as adding a new page, redirect, category, etc.. which requires updating the .htaccess file when mod\_rewrite Permalinks are being used.

1. Go to the main directory of WordPress
2. Enter `chmod -v 666 .htaccess`

**NOTE:** From a security standpoint, even a small amount of protection is preferable to a world-writeable directory. Start with low permissive settings like 744, working your way up until it works. Only use 777 if necessary, and hopefully only for a temporary amount of time.

## The dangers of 777

The crux of this permission issue is how your server is configured. The username you use to FTP or SSH into your server is most likely not the username used by the server application itself to serve pages.

```
 7      7      7
user   group  world
r+w+x  r+w+x  r+w+x
4+2+1  4+2+1  4+2+1  = 777

```

Often the Apache server is ‘owned’ by the **www-data**, **dhapache** or **nobody** user accounts. These accounts have a limited amount of access to files on the server, for a very good reason. By setting your personal files and folders owned by your user account to be World-Writable, you are literally making them World Writable. Now the www-data, dhapache and nobody users that run your server, serving pages, executing php interpreters, etc. will have full access to your user account files.

This provides an avenue for someone to gain access to your files by hijacking basically any process on your server, this also includes any other users on your machine. So you should think carefully about modifying permissions on your machine. I’ve never come across anything that needed more than 767, so when you see 777 ask why it’s necessary.

### The Worst Outcome

The worst that can happen as a result of using 777 permissions on a folder or even a file, is that if a malicious cracker or entity is able to upload a devious file or modify a current file to execute code, they will have complete control over your blog, including having your database information and password.

### Find a Workaround

It is usually pretty easy to have the enhanced features provided by the impressive WordPress plugins available, without having to put yourself at risk. Contact the Plugin author or your server support and request a workaround.

## Finding Secure File Permissions

The .htaccess file is one of the files that is accessed by the owner of the process running the server. So if you set the permissions too low, then your server won’t be able to access the file and will cause an error. Therein lies the method to find the most secure settings. Start too restrictive and increase the permissions until it works.

### Example Permission Settings

The following example has a *custom compiled php-cgi binary* and a *custom php.ini* file located in the cgi-bin directory for executing php scripts. To prevent the interpreter and `php.ini` file from being accessed directly in a web browser they are protected with a .htaccess file.

Default Permissions (umask 022)

```
644 -rw-r--r--  /home/user/wp-config.php
644 -rw-r--r--  /home/user/cgi-bin/.htaccess
644 -rw-r--r--  /home/user/cgi-bin/php.ini
755 -rwxr-xr-x  /home/user/cgi-bin/php.cgi
755 -rwxr-xr-x  /home/user/cgi-bin/php5.cgi

```

Secured Permissions

```
600 -rw-------  /home/user/wp-config.php
6**0**4 -rw----r--  /home/user/cgi-bin/.htaccess
6**00** -rw-------  /home/user/cgi-bin/php.ini
7**11** -rwx--x--x  /home/user/cgi-bin/php.cgi
**100** ---x------  /home/user/cgi-bin/php5.cgi

```

#### .htaccess permissions

**644 &gt; 604** – The bit allowing the group owner of the .htaccess file read permission was removed. 644 is normally required and recommended for .htaccess files.

#### php.ini permissions

**644 &gt; 600** – Previously all groups and all users with access to the server could access the php.ini, even by just requesting it from the site. The tricky thing is that because the php.ini file is only used by the php.cgi, we only needed to make sure the php.cgi process had access. The php.cgi runs as the same user that owns both files, so that single user is now the only user able to access this file.

#### php.cgi permissions

**755 &gt; 711** This file is a compiled php-cgi binary used instead of mod\_php or the default vanilla php provided by the hosting company. The default permissions for this file are 755.

#### php5.cgi permissions

**755 &gt; 100** – Because of the setup where the user account is the owner of the process running the php cgi, no other user or group needs access, so we disable all access except execution access. This is interesting because it really works. You can try reading the file, writing to the file, etc. but the only access you have to this file is to run php scripts. And as the owner of the file you can always change the permission modes back again.

```
$ cat: php5.cgi: Permission denied
./php5.cgi:  Welcome

```

## SELinux

[Security Enhanced linux](https://en.wikipedia.org/wiki/Security-Enhanced_Linux) is a kernel security module that provides mechanisms by which processes can be sandboxed into particular contexts. This is of particular use to limit the actions that web pages can perform on other parts of the operating system. Actions that are denied by the security policy are often hard to distinguish from regular file permission errors.

selinux is typically installed on Redhat family distributions (e.g., CentOS, Fedora, Scientific, Amazon and others).

### How to determine if selinux is the problem?

If you are on a debian based distribution, you are probably fine.

Run the following command (on rpm based systems);

```
$ rpm -qa | grep selinux
selinux-policy-targeted-3.13.1-166.el7_4.7.noarch
selinux-policy-3.13.1-166.el7_4.7.noarch
libselinux-2.5-11.el7.x86_64
libselinux-python-2.5-11.el7.x86_64
libselinux-utils-2.5-11.el7.x86_64

```

and to check whether it is the cause of denials of permissions:

```
$ getenforce
Enforcing

```

One issue that selinux causes is blocking the wp-admin tools from writing out the `.htaccess` file that is required for url rewriting. There are several commands for inspecting this behaviour

```
$ audit2allow -w -a
type=AVC msg=audit(1517275570.388:55362): avc:  denied  { write } for  pid=11831 comm="httpd" path="/var/www/example.org/.htaccess" dev="vda1" ino=67137959 scontext=system_u:system_r:httpd_t:s0 tcontext=system_u:object_r:httpd_sys_content_t:s0 tclass=file
        Was caused by:
        The boolean httpd_unified was set incorrectly.
        Description:
        Allow httpd to unified

        Allow access by executing:
        # setsebool -P httpd_unified 1

```

and

```
$ ausearch -m avc -c httpd
----
time->Tue Jan 30 01:30:31 2018
type=PROCTITLE msg=audit(1517275831.762:55364): proctitle=2F7573722F7362696E2F6874747064002D44464F524547524F554E44
type=SYSCALL msg=audit(1517275831.762:55364): arch=c000003e syscall=21 success=no exit=-13 a0=55b9c795d268 a1=2 a2=0 a3=1 items=0 ppid=11826 pid=11829 auid=4294967295 uid=48 gid=48 euid=48 suid=48 fsuid=48 egid=48 sgid=48 fsgid=48 tty=(none) ses=4294967295 comm="httpd" exe="/usr/sbin/httpd" subj=system_u:system_r:httpd_t:s0 key=(null)
type=AVC msg=audit(1517275831.762:55364): avc:  denied  { write } for  pid=11829 comm="httpd" name="bioactivator.org" dev="vda1" ino=67137958 scontext=system_u:system_r:httpd_t:s0 tcontext=unconfined_u:object_r:httpd_sys_content_t:s0 tclass=dir
----

```

You can temporarily disable selinux to determine if it is the cause of the problems;

```
$ setenforce
usage:  setenforce \[ Enforcing | Permissive | 1 | 0 \]

```

---

# Finding Server Info <a name="advanced-administration/server/server-info" />

Source: https://developer.wordpress.org/advanced-administration/server/server-info/

What version of [PHP](https://wordpress.org/documentation/article/glossary#php) are you using? What server software is your site host using? What version of [MySQL](https://wordpress.org/documentation/article/glossary#mysql) do you have? What operating system does your site host use?

![php73win_phpinfo](https://i0.wp.com/user-images.githubusercontent.com/1508963/201365720-3a13ccab-c44c-43f2-8326-e3a997c5acfa.jpg?ssl=1)

ALT= Top of PHP Info test file results

These are questions often asked by WordPress users as they prepare to [install WordPress](#advanced-administration/before-install/howto-install). Other times, these questions are asked while troubleshooting a problem with a WordPress installation. But don’t spend at lot of time searching your site, or your host’s site, for the answers—there’s a very easy way to get that information.

The easiest way to collect the information is to make use of a PHP function called phpinfo(). The phpinfo() function will query your (or your host’s) server and generate a report with a long list of data. Note: Remember to bookmark this page, because, in the future, a volunteer in the [WordPress Support Forum](https://www.wordpress.org/support/forums/) may ask you to use this method to get information to assist them in troubleshooting a question you asked on the Support Forum.

**Warning:** This file will contain some moderately sensitive information about your server that could help an attacker gain access to it. Make sure that you give the file an obscure filename and delete it as soon as you’re done.

In a text editor, copy and paste the following command:

```
<?php phpinfo(); ?>

```

Make sure there are no spaces before or after the command, just the command, and save the file as something obscure like sffdsajk234.php. It’s important to make the file difficult for hackers to file, because it will contain information that could help them compromise your server.

Upload the file to the root directory of your site. Then type in the address to the file in your browser:

```
https://example.com/sffdsajk234.php

```

The result will be several pages long and it will contain a ton of information. Though your data may be in a different order, for the most part, you just need the summary items that lists things like this:

|  |  |
|---|---|
| PHP | Version 7.3.0 |
| System | Windows NT DESKTOP-LK01DAN 10.0 build 17763 (Windows 10) i586 |
| Build Date | Dec 6 2018 01:51:18 |
| Server API | Apache 2.0 Handler |
| Apache Version | Apache/2.4.37 (Win32) OpenSSL/1.1.1a PHP/7.3.0 |

That’s it. Make sure you remember to delete the file once you’re done with it, because leaving it there could help hackers compromise your server.

## Information and Resources

- [PHP.net’s phpinfo Manual](https://www.php.net/phpinfo)
- [Zend’s PHP Manual on phpinfo](https://www.zend.com/manual/function.phpinfo.php)
- [WordPress Environment PHP library](https://github.com/abelcallejo/wordpress-environment)

---

# Giving WordPress Its Own Directory <a name="advanced-administration/server/wordpress-in-directory" />

Source: https://developer.wordpress.org/advanced-administration/server/wordpress-in-directory/

Many people want WordPress to power their website’s root (e.g. https://example.com) but they don’t want all of the WordPress files cluttering up their root directory. WordPress allows you to install it into a subdirectory, but have your website served from the website root.

As of [Version 3.5](https://wordpress.org/documentation/wordpress-version/version-3-5/), Multisite users may use all of the functionality listed below. If you are running a version of WordPress older than 3.5, please update before installing a Multisite WordPress install on a subdirectory.

**Note to theme/plugin developers:** this will not separate your code from WordPress. Themes and plugins will still reside under `wp-content` folder.

## Moving a Root install to its own directory

Let’s say you’ve installed WordPress at `example.com`. Now you have two different methods to move WordPress installations into subdirectory:

1. Without change of SITE-URL (remains `example.com`)
2. With change in SITE-URL (it will redirect to `example.com/subdirectory`)

## Method I (Without URL change)

1. After Installing WordPress in the root folder, move EVERYTHING from the root folder into subdirectory.
2. Create a `.htaccess` file in the root folder, and put this content inside (just change `example.com` and `my_subdir`):

```
<IfModule mod_rewrite.c>
RewriteEngine on
RewriteCond %{HTTP_HOST} ^(www.)?example.com$
RewriteCond %{REQUEST_URI} !^/my_subdir/
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /my_subdir/$1
RewriteCond %{HTTP_HOST} ^(www.)?example.com$
RewriteRule ^(/)?$ my_subdir/index.php [L] 
</IfModule>

```

That’s all 🙂

## Method II (With URL change)

### Moving process

*(p.s. If you’ve already installed WP in subdirectory, some steps might be already done automatically).*

1. Create the new location for the core WordPress files to be stored—we will use `/wordpress` in our examples. On Linux, use `mkdir wordpress` from your `www` directory. You’ll probably want to use `chown apache:apache` on the `wordpress` directory you created.
2. Go to the [General](https://wordpress.org/documentation/article/administration-screens/#settings-configuration-settings) screen.
3. In **WordPress address (URL):** set the address of your main WordPress core files. Example: `https://example.com/wordpress`.
4. In **Site address (URL):** set root directory’s URL. Example: `https://example.com`.
5. Click **Save Changes**. Do not worry about the errors that happen now! Continue reading.
6. Now move your WordPress core files (from root directory) to the subdirectory.
7. Copy (NOT MOVE!) the `index.php` and `.htaccess` files from the WordPress directory into the root directory of your site (Blog address). The `.htaccess` file is invisible, so you may have to set your FTP client to [show hidden files](#advanced-administration/server/file-permissions). If you are not using [pretty permalinks](https://wordpress.org/documentation/article/using-permalinks/#using-pretty-permalinks), then you may not have a .`htaccess` file. ***If you are running WordPress on a Windows (IIS) server** and are using pretty permalinks, you’ll have a `web.config` rather than a `.htaccess` file in your WordPress directory. For the `index.php` file the instructions remain the same, copy (don’t move) the index.php file to your root directory. The `web.config` file, must be treated differently than the `.htaccess` file so you must MOVE (DON’T COPY) the `web.config` file to your root directory.*
8. Open your root directory’s `index.php` file in a [text editor](https://wordpress.org/documentation/article/glossary#text-editor).
9. Change the following and save the file. Change the line that says:`require dirname( __FILE__ ) . '/wp-blog-header.php';`to the following, using your directory name for the WordPress core files: `require dirname( __FILE__ ) . '/wordpress/wp-blog-header.php';`.
10. Login to the new location. It might now be `https://example.com/wordpress/wp-admin/`.
11. If you have set up [Permalinks](https://wordpress.org/documentation/article/using-permalinks/), go to the [Permalinks Screen](https://wordpress.org/documentation/article/administration-screens/#permalinks) and update your Permalink structure. WordPress will automatically update your `.htaccess` file if it has the appropriate file permissions. If WordPress can’t write to your `.htaccess` file, it will display the new rewrite rules to you, which you should manually copy into your `.htaccess` file (in the same directory as the main `index.php` file).

### .htaccess modification

In some cases, some people like to install separate versions in a subdirectory (such as `/2010`, `/2011`, `/latest` and etc..), and want that website (by default) used the latest version, then Install WordPress in a subdirectory, such as `/my_subdir` and in your root folder’s .htaccess file add the following (just change the words as you need):

```
RewriteEngine On
RewriteCond %{HTTP_HOST} ^(www.)?example.com$
RewriteRule ^(/)?$ my_subdir\[L\]

```

Now when users to go your root domain (`example.com`), it will automatically redirect to the subdirectory you specified.

Note: This code comes from Site 5’s post here: [How to Redirect Your Domain to a Subfolder Using .htaccess](https://qa.site5.com/advanced/how-to-redirect-your-domain-to-a-subfolder-using-htaccess/).

## Moving Specific WordPress Folders

The following links explains how to change specific directories within WordPress:

- [Moving wp-content folder](https://wordpress.org/documentation/article/editing-wp-config-php/#moving-wp-content-folder)
- [Moving Plugin Folder](https://wordpress.org/documentation/article/editing-wp-config-php/#moving-plugin-folder)
- [Moving Themes Folder](https://wordpress.org/documentation/article/editing-wp-config-php/#moving-themes-folder)
- [Moving Uploads Folder](https://wordpress.org/documentation/article/editing-wp-config-php/#moving-uploads-folder)

## See also

- [Using Caddy to give WordPress its own directory](https://caddy.community/t/using-caddy-to-give-wordpress-its-own-directory/13185)

---

# Configuring Wildcard Subdomains <a name="advanced-administration/server/subdomains-wildcard" />

Source: https://developer.wordpress.org/advanced-administration/server/subdomains-wildcard/

Wildcard subdomains are useful to allow end users of a domain-based WordPress [multisite](https://wordpress.org/documentation/article/wordpress-glossary/#multisite) network to create new sites on demand. In this type of network each new site has its own subdomain, and the wildcard configuration means that those subdomains do not have to be configured individually. For information on how to create a multisite network, see: [Create A Network](#advanced-administration/multisite/create-network).

This page contains some examples of how to configure wildcard subdomains in different circumstances. If you cannot determine how to set up wildcard subdomains on your particular web server, *contact your webhost* for directions.

## Apache

In the `httpd.conf` file, or in the include file containing the `VirtualHost` section for your web account, add a line like this (if it is not already present):

```
ServerAlias *.example.com

```

Also create a wildcard DNS record like:

```
*.example.com A 192.0.2.1

```

## CPanel

Make a sub-domain named “\*” (wildcard) at your CPanel (`*.example.com`). Make sure to point this at the same folder location where your `wp-config.php` file is located.

## Plesk

There are several steps that differ when setting up the server for wildcard subdomains on a server using Plesk Panel compared to a server using cPanel (or no control panel). This article [Configuring Wildcard Subdomains for multi site under Plesk Control Panel](https://codex.wordpress.org/Configuring_Wildcard_Subdomains_for_multi_site_under_Plesk_Control_Panel) details all the steps involved.

## DirectAdmin

Click “User Panel” -&gt; DNS Management -&gt; add the following three entries using the three columns:

```
* A 192.0.2.1

```

Click “Admin Panel” (If you have no “admin panel” ask your host to do this) -&gt; Custom Httpd -&gt; yourdomain.com -&gt; In the text input area, just paste and “save” precisely the following:

```
ServerAlias *.|DOMAIN|

```

*If you ever need to un-do a custom Httpd: return here, delete text from input area, save.*

- DirectAdmin.com: [Apache Wildcard Documentation](https://help.directadmin.com/item.php?id=127). DirectAdmin.com forum: [WordPress wildcard subdomains](https://forum.directadmin.com/threads/wildcard-subdomains-yea-i-know-its-a-common-one.29074/#post-195033).

## Amazon Web Services

AWS instances are not assigned a permanent IP address by default. This means that a “server’s” IP address may change when it is rebooted. To resolve this issue, assign an Elastic IP Address to your server instance and use that IP address when configuring the A record with your registrar.

AWS Elastic Load Balancers cannot be assigned an elastic IP, therefore you must use a CName to give them a friendly URL. You cannot have a CName to a root URL. Therefore you must point the domain root (example.com) at a specific server instance with an Elastic IP address and create a wildcard CName (\*.example.com) and point that at your Elastic Load Balancer. In your .htaccess, then just redirect all domain root traffic (example.com) to a specific sub-domain (www.example.com).

**Notes:**

- Some registrars do not currently support wildcard CNames.
- Amazon’s Route53 Domain Name Service eliminates the CName issue, but at an additional cost.

---

# Emptying a Database Table <a name="advanced-administration/server/empty-database" />

Source: https://developer.wordpress.org/advanced-administration/server/empty-database/

Plugins which generate site statistics for you can rapidly create large amounts of data — every visitor causes something to be written to the database. Ordinarily, this is not a problem, but if your database size is limited by your host it could be. Also, if you are moving the database for whatever reason, its size will impact the export and import time. This page will show you how to empty a table, thus resetting its contents and size to zero. This does not stop the statistics plugins from working or otherwise damage your database.

[phpMyAdmin](#advanced-administration/upgrade/phpmyadmin) is the name of the program used to manipulate your database. A good hosting package will have this included. [Accessing phpMyAdmin](#advanced-administration/security/backup) offers information on accessing phpMyAdmin under various server control panels.

The procedure outlined in this article has been tried and tested using phpMyAdmin versions 2.5.3 and 2.5.7 pl1 running on Unix.

**Note:** When making significant changes like this to your database, you should always create a BACKUP!

See [WordPress Backups](#advanced-administration/security/backup) and [Backing Up Your Database](#advanced-administration/security/backupdatabase/) for details.

## The Process

1. Login to phpMyAdmin on your server.
2. From the left side bar, select your WordPress database.

![Database selection on the left side bar](https://i0.wp.com/user-images.githubusercontent.com/90067869/189547314-a8bbe78e-70b6-4533-b14e-196a5db35840.png?ssl=1)

1. All the tables in the WordPress database will appear.

![Table list](https://i0.wp.com/user-images.githubusercontent.com/90067869/189547350-944a1066-e81d-404b-8eca-9125161eb5d4.png?ssl=1)

1. Click “Erase” button of the table you wish to empty. For this example, we will be emptying the “wp\_dstats2” table.

**Note:** Your table may well have a different name, check the plugin’s documentation to find out what it is. DO NOT empty a table that is used by the WordPress core. (Please see the list under [Database\_Description](https://codex.wordpress.org/Database_Description) for those specific table names.)

![Clicking the “Empty” button](https://i0.wp.com/user-images.githubusercontent.com/90067869/189547374-2088ff00-3c19-420d-86b7-fbcd0df6ed6d.png?ssl=1)

1. You will now get a confirmation screen.

![image](https://i0.wp.com/user-images.githubusercontent.com/90067869/189547394-d6a58758-7a2d-420c-9cd6-33de864b3078.png?ssl=1)

**This is your last chance to check that you have the right table and database selected** — phpMyAdmin has no UNDO function, so once changes are committed, you are stuck with them. Unless, of course, you made that suggested back up.

1. Click “OK” and you will be returned to viewing all the tables in your database with the specified table’s contents emptied.

---

# Web servers <a name="advanced-administration/server/web-server" />

Source: https://developer.wordpress.org/advanced-administration/server/web-server/

The web server is a piece of software that accepts user web requests and serves them the appropriate result. Many different web servers run on other operation systems. Generally, if your web server supports and executes PHP files, it should be able to work with WordPress.

## Apache HTTPD

See [Apache HTTPD / .htaccess](#advanced-administration/server/web-server/httpd)

## nginx

See [Nginx](#advanced-administration/server/web-server/nginx).

---

# Apache HTTPD / .htaccess <a name="advanced-administration/server/web-server/httpd" />

Source: https://developer.wordpress.org/advanced-administration/server/web-server/httpd/

## .htaccess

The `.htaccess` is a distributed configuration file, and is how Apache handles configuration changes on a per-directory basis.

WordPress uses this file to manipulate how Apache serves files from its root directory, and subdirectories thereof. Most notably, WP modifies this file to be able to handle pretty permalinks.

This page may be used to restore a corrupted `.htaccess` file (e.g. a misbehaving plugin).

### Basic WP

```
# BEGIN WordPress

RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]

# END WordPress

```

### Multisite

#### WordPress 3.5 and up

If you activated Multisite on WordPress 3.5 or later, use one of these.

##### WordPress &gt;=3.5 Subfolder Example

```
# BEGIN WordPress Multisite
# Using subfolder network type: https://wordpress.org/documentation/article/htaccess/#multisite

RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]

# add a trailing slash to /wp-admin
RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ $1wp-admin/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(wp-(content|admin|includes).*) $2 [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(.*\.php)$ $2 [L]
RewriteRule . index.php [L]

# END WordPress Multisite

```

##### WordPress &gt;=3.5 SubDomain Example

```
# BEGIN WordPress Multisite
# Using subdomain network type: https://wordpress.org/documentation/article/htaccess/#multisite

RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]

# add a trailing slash to /wp-admin
RewriteRule ^wp-admin$ wp-admin/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule ^(wp-(content|admin|includes).*) $1 [L]
RewriteRule ^(.*\.php)$ $1 [L]
RewriteRule . index.php [L]

# END WordPress Multisite

```

#### WordPress 3.4 and below

If you originally installed WordPress with 3.4 or older and activated Multisite then, you need to use one of these:

##### WordPress &lt;=3.4 SubFolder Example

WordPress 3.0 through 3.4.2

```
# BEGIN WordPress Multisite
# Using subfolder network type: https://wordpress.org/documentation/article/htaccess/#multisite

RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]

# uploaded files
RewriteRule ^([_0-9a-zA-Z-]+/)?files/(.+) wp-includes/ms-files.php?file=$2 [L]

# add a trailing slash to /wp-admin
RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ $1wp-admin/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule ^[_0-9a-zA-Z-]+/(wp-(content|admin|includes).*) $1 [L]
RewriteRule ^[_0-9a-zA-Z-]+/(.*\.php)$ $1 [L]
RewriteRule . index.php [L]

# END WordPress Multisite

```

##### WordPress &lt;=3.4 SubDomain Example

```
# BEGIN WordPress Multisite
# Using subdomain network type: https://wordpress.org/documentation/article/htaccess/#multisite

RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]

# uploaded files
RewriteRule ^files/(.+) wp-includes/ms-files.php?file=$1 [L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule . index.php [L]

# END WordPress Multisite

```

### General Examples

#### Options

Any options preceded by a **+** are added to the options currently in force, and any options preceded by a **–** are removed from the options currently in force.

Possible values for the [Options directive](https://httpd.apache.org/docs/trunk/mod/core.html#options) are any combination of:

**None**

All options are turned off.

**All**

All options except for MultiViews. This is the default setting.

**ExecCGI**

Execution of CGI scripts using mod\_cgi is permitted.

**FollowSymLinks**

The server will follow symbolic links in this directory.

**Includes**

Server-side includes provided by mod\_include are permitted.

**IncludesNOEXEC**

Server-side includes are permitted, but the #exec cmd and #exec cgi are disabled.

**Indexes**

URL maps to a directory, and no DirectoryIndex, a formatted listing of the directory.

**MultiViews**

Content negotiated “MultiViews” are allowed using mod\_negotiation.

**SymLinksIfOwnerMatch**

Only follow symbolic links where target is owned by the same user id as the link.

This will disable all options, and then only enable FollowSymLinks, which is necessary for mod\_rewrite.

```
Options None
Options FollowSymLinks

```

#### DirectoryIndex

[DirectoryIndex Directive](https://httpd.apache.org/docs/trunk/mod/mod_dir.html#directoryindex) sets the file that Apache will serve if a directory is requested.

Several URLs may be given, in which case the server will return the first one that it finds.

```
DirectoryIndex index.php index.html /index.php

```

#### DefaultLanguage

[DefaultLanguage Directive](https://httpd.apache.org/docs/trunk/mod/mod_mime.html#defaultlanguage) will cause all files that do not already have a specific language tag associated with it will use this.

```
DefaultLanguage en

```

#### Default Charset

Set the default character encoding sent in the HTTP header. See [Setting charset information in .htaccess](https://www.w3.org/International/questions/qa-htaccess-charset)

```
AddDefaultCharset UTF-8

```

**Set Charset for Specific Files**

```
AddType 'text/html; charset=UTF-8' .html

```

**Set for specific files**

```
AddCharset UTF-8 .html

```

#### ServerSignature

The [ServerSignature Directive](https://httpd.apache.org/docs/trunk/mod/core.html#serversignature) allows the configuration of a trailing footer line under server-generated documents. Optionally add a line containing the server version and virtual host name to server-generated pages (internal error documents, FTP directory listings, mod\_status and mod\_info output etc., but not CGI generated documents or custom error documents).

**On**

adds a line with the server version number and ServerName of the serving virtual host

**Off**

suppresses the footer line

**Email**

creates a “mailto:” reference to the ServerAdmin of the referenced document

```
SetEnv SERVER_ADMIN admin@site.com
ServerSignature Email

```

#### Force Files to be Downloaded

The below will cause any requests for files ending in the specified extensions to not be displayed in the browser but instead force a “Save As” dialog so the client can download.

```
AddType application/octet-stream .avi .mpg .mov .pdf .xls .mp4

```

#### HTTP Compression

The [AddOutputFilter Directive](https://httpd.apache.org/docs/trunk/mod/mod_mime.html#addoutputfilter) maps the filename extension extension to the filters which will process responses from the server before they are sent to the client. This is in addition to any filters defined elsewhere, including `SetOutputFilter` and `AddOutputFilterByType`. This mapping is merged over any already in force, overriding any mappings that already exist for the same extension.

See also [Enable Compression](https://developers.google.com/speed/docs/insights/EnableCompression)

```
AddOutputFilterByType DEFLATE text/html text/plain text/xml application/xml application/xhtml+xml text/javascript text/css application/x-javascript
BrowserMatch ^Mozilla/4 gzip-only-text/html
BrowserMatch ^Mozilla/4\.0[678] no-gzip
BrowserMatch \bMSIE !no-gzip !gzip-only-text/html

```

**Force Compression for certain files**

```
SetOutputFilter DEFLATE

```

#### Send Custom HTTP Headers

The [Header Directive](https://httpd.apache.org/docs/trunk/mod/mod_headers.html#header) lets you send HTTP headers for every request, or just specific files. You can view a sites HTTP Headers using [Firebug](https://getfirebug.com/), [Chrome Dev Tools](https://developer.chrome.com/docs/devtools/), [Wireshark](https://www.wireshark.org/) or [Advanced HTTP Request / Response Headers](https://www.askapache.com/online-tools/http-headers-tool/).

```
Header set X-Pingback "https://example.com/xmlrpc.php"
Header set Content-Language "en-US"

```

#### Unset HTTP Headers

This will unset HTTP headers, using **always** will try extra hard to remove them.

```
Header unset Pragma
Header always unset WP-Super-Cache
Header always unset X-Pingback

```

#### Password Protect Login

This is very useful for protecting the `wp-login.php` file. You can use this [Advanced Htpasswd/Htdigest file creator](https://www.askapache.com/online-tools/htpasswd-generator/).

**Basic Authentication**

```
AuthType Basic
AuthName "Password Protected"
AuthUserFile /full/absolute/path/to/.htpasswd
Require valid-user
Satisfy All

```

**Digest Authentication**

```
AuthType Digest
AuthName "Password Protected"
AuthDigestDomain /wp-login.php https://example.com/wp-login.php
AuthUserFile /full/absolute/path/to/.htpasswd
Require valid-user
Satisfy All

```

#### Require Specific IP

This is a way to only allow access for IP addresses listed. Note usage of RequireAny instead of RequireAll.

```
<RequireAny>
  Require ip 192.0.2.123
  Require ip 2001:0DB8:1111:2222:3333:4444:5555:6666
</RequireAny>

```

#### Protect Sensitive Files

This denies all web access to your wp-config file, htaccess/htpasswd and WordPress debug.log. On installed site, consider adding install.php as well.

```
<FilesMatch "^(wp-config\.php|\.htaccess|\.htpasswd|debug\.log)$">
  Require all denied
</FilesMatch>

```

#### Require SSL

This will force SSL, and require the exact hostname or else it will redirect to the SSL version. Useful in a `/wp-admin/.htaccess` file.

```
SSLOptions +StrictRequire
SSLRequireSSL
SSLRequire %{HTTP_HOST} eq "www.example.com"
ErrorDocument 403 https://www.example.com

```

### External Resources

- [Official Apache HTTP Server Tutorial: .htaccess files](https://httpd.apache.org/docs/trunk/howto/htaccess.html)
- [Official Htaccess Directive Quick Reference](https://httpd.apache.org/docs/trunk/mod/quickreference.html)
- [Htaccess Tutorial](https://www.askapache.com/htaccess/)
- [Google PageSpeed for Developers](https://developers.google.com/speed/docs/insights/rules)
- [Stupid Htaccess Tricks](https://perishablepress.com/stupid-htaccess-tricks/)
- [Advanced Mod\_Rewrite](https://www.askapache.com/htaccess/crazy-advanced-mod_rewrite-tutorial/)

### See also

- [htaccess for subdirectories](https://codex.wordpress.org/htaccess%20for%20subdirectories)
- [Using Permalinks](https://wordpress.org/documentation/article/customize-permalinks/)
- [Changing File Permissions](https://wordpress.org/documentation/article/changing-file-permissions/)
- [UNIX Shell Skills](https://codex.wordpress.org/UNIX%20Shell%20Skills)
- [Rewrite API](https://codex.wordpress.org/Rewrite%20API)

---

# Nginx <a name="advanced-administration/server/web-server/nginx" />

Source: https://developer.wordpress.org/advanced-administration/server/web-server/nginx/

While the LAMP stack (Linux + Apache + MySQL + PHP) is very popular for powering WordPress, it is also possible to use Nginx. WordPress supports Nginx, and some large WordPress sites, such as WordPress.com, are powered by Nginx.

When talking about Nginx, it is important to know that there are multiple ways to implement Nginx. It can be setup as a reverse-proxy in front of Apache, which is a very powerful setup that allows you to use all of the features and power of Apache, while benefiting from the speed of Nginx. Most websites that report using Nginx as the server (based on stats gathered from HTTP response headers), are actually Apache running with Nginx as the reverse proxy. (The HTTP response headers showing “Nginx” are being reported by the reverse-proxy, not the server itself.)

**This guide is referring to a standalone Nginx setup, where it is used as the primary server instead of Apache.** It should be noted that Nginx is not a completely interchangeable substitute for Apache. There are a few key differences affecting WordPress implementation that you need to be aware of before you proceed:

- With Nginx there is no directory-level configuration file like Apache’s .htaccess or IIS’s web.config files. All configuration has to be done at the server level by an administrator, and WordPress cannot modify the configuration, like it can with Apache or IIS.
- Pretty Permalinks functionality is slightly different when running Nginx.
- Since Nginx does not have .htaccess-type capability and WordPress cannot automatically modify the server configuration for you, it cannot generate the rewrite rules for you.
- Without modifications to your install, “index.php” will be added to your Permalinks. (There are ways to mitigate this with plugins (see below) and/or adding custom code to your child theme’s functions.php.)
- However, if you do want to have some (limited) .htaccess capability, it is technically possible to do add by installing the [htscanner PECL extension for PHP](https://www.php.net/manual/en/book.htscanner.php). (However, this is not a perfect solution so be sure to test and debug thoroughly before using on a live site.)

This guide is not going to cover how to install and configure Nginx, so this assumes that you have already installed Nginx and have a basic understanding of how to work with and debug it.

## Generic and Multi-Site Support

To make WordPress work with Nginx you have to configure the backend php-cgi. The options available are `fastcgi` or `php-fpm`. Here, php-fpm is being used because it is included with PHP 5.3+, so installing it is straight forward.

The Nginx configuration has been broken up into five distinct files and is heavily commented to make each option easier to understand. The [author](https://wordpress.org/support/users/bigsite/) also made a best-effort attempting to follow “best practices” for nginx configurations.

### Main (generic) startup file

This is equivalent to /etc/nginx/nginx.conf (or /etc/nginx/conf/nginx.conf if you’re using Arch Linux).

```
# Generic startup file.
user {user} {group};

#usually equal to number of CPUs you have. run command "grep processor /proc/cpuinfo | wc -l" to find it
worker_processes  auto;
worker_cpu_affinity auto;

error_log  /var/log/nginx/error.log;
pid        /var/run/nginx.pid;

# Keeps the logs free of messages about not being able to bind().
#daemon     off;

events {
    worker_connections  1024;
}

http {
    #rewrite_log on;

    include mime.types;
    default_type       application/octet-stream;
    access_log         /var/log/nginx/access.log;
    sendfile           on;
    #tcp_nopush         on;
    keepalive_timeout  3;
    #tcp_nodelay        on;
    #gzip               on;
    #php max upload limit cannot be larger than this
    client_max_body_size 13m;
    index              index.php index.html index.htm;

    # Upstream to abstract backend connection(s) for PHP.
    upstream php {
        #this should match value of "listen" directive in php-fpm pool
        server unix:/tmp/php-fpm.sock;
        # server 127.0.0.1:9000;
    }

    include sites-enabled/*;
}

```

### Per Site configuration

```
# Redirect everything to the main site. We use a separate server statement and NOT an if statement - see https://www.nginx.com/resources/wiki/start/topics/depth/ifisevil/

server {
    server_name  _;
    return 302 $scheme://example.com$request_uri;
}

server {
    server_name example.com;
    root /var/www/example.com;

    index index.php;

    include global/restrictions.conf;

    # Additional rules go here.

    # Only include one of the files below.
    include global/wordpress.conf;
    # include global/wordpress-ms-subdir.conf;
    # include global/wordpress-ms-subdomain.conf;
}

```

Splitting sections of the configuration into multiple files allows the same logic to be reused over and over. A ‘global’ subdirectory is used to add extra rules for general purpose use (either /etc/nginx/conf/global/ or /etc/nginx/global/ depending on how your nginx install is set up).

### Global restrictions file

```
# Global restrictions configuration file.
# Designed to be included in any server {} block.
location = /favicon.ico {
    log_not_found off;
    access_log off;
}

location = /robots.txt {
    allow all;
    log_not_found off;
    access_log off;
}

# Deny all attempts to access hidden files such as .htaccess, .htpasswd, .DS_Store (Mac).
# Keep logging the requests to parse later (or to pass to firewall utilities such as fail2ban)
location ~ /\. {
    deny all;
}

# Deny access to any files with a .php extension in the uploads directory
# Works in sub-directory installs and also in multisite network
# Keep logging the requests to parse later (or to pass to firewall utilities such as fail2ban)
location ~* /(?:uploads|files)/.*\.php$ {
    deny all;
}

```

### General WordPress rules

For single site installations, here is the `global/wordpress.conf` file:

```
# WordPress single site rules.
# Designed to be included in any server {} block.
# Upstream to abstract backend connection(s) for php
upstream php {
    server unix:/tmp/php-cgi.socket;
    server 127.0.0.1:9000;
}

server {
    ## Your website name goes here.
    server_name domain.tld;
    ## Your only path reference.
    root /var/www/wordpress;
    ## This should be in your http block and if it is, it's not needed here.
    index index.php;

    location = /favicon.ico {
        log_not_found off;
        access_log off;
    }

    location = /robots.txt {
        allow all;
        log_not_found off;
        access_log off;
    }

    location / {
        # This is cool because no php is touched for static content.
        # include the "?$args" part so non-default permalinks doesn't break when using query string
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        #NOTE: You should have "cgi.fix_pathinfo = 0;" in php.ini
        include fastcgi.conf;
        fastcgi_intercept_errors on;
        fastcgi_pass php;
    }

    location ~* \.(js|css|png|jpg|jpeg|gif|ico)$ {
        expires max;
        log_not_found off;
    }
}

```

This is more up-to-date example for Nginx: https://www.nginx.com/resources/wiki/start/topics/recipes/wordpress/

### WordPress Multisite

For multisite installations, use one of the below sections for the `global/wordpress.conf` file, depending on the version of WordPress that was in use when multisite was *activated*, as well as the domain/subdirectory configuration.

#### WordPress 3.5 and up

If you activated Multisite on WordPress 3.5 or later, use one of these.

##### WordPress 3.5 and up Subdirectory Examples

```
# WordPress multisite subdirectory config file for WP 3.5 and up.
server {
    server_name example.com ;

    root /var/www/example.com/htdocs;
    index index.php;

    if (!-e $request_filename) {
        rewrite /wp-admin$ $scheme://$host$request_uri/ permanent;
        rewrite ^(/[^/]+)?(/wp-.*) $2 last;
        rewrite ^(/[^/]+)?(/.*\.php) $2 last;
    }

    location / {
        try_files $uri $uri/ /index.php?$args ;
    }

    location ~ \.php$ {
        try_files $uri =404;
        include fastcgi_params;
        fastcgi_pass php;
    }

    #add some rules for static content expiry-headers here
}

```

##### WordPress 3.5 and up Subdomains Examples

```
# WordPress multisite subdomain config file for WP 3.5 and up.
server {
    server_name example.com *.example.com ;

    root /var/www/example.com/htdocs;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$args ;
    }

    location ~ \.php$ {
        try_files $uri =404;
        include fastcgi_params;
        fastcgi_pass php;
    }

    #add some rules for static content expiry-headers here
}

```

#### WordPress 3.4 and below

If you originally activated Multisite with WordPress with 3.4 or older, you need to use one of these:

##### WordPress &lt;=3.4 Subdirectory Examples

```
# WordPress multisite subdirectory config file for WP 3.4 and below.

map $uri $blogname{
    ~^(?P<blogpath>/[^/]+/)files/(.*)       $blogpath ;
}

map $blogname $blogid{
    default -999;

    #Ref: https://wordpress.org/extend/plugins/nginx-helper/
    #include /var/www/wordpress/wp-content/plugins/nginx-helper/map.conf ;
}

server {
    server_name example.com ;

    root /var/www/example.com/htdocs;
    index index.php;

    location ~ ^(/[^/]+/)?files/(.+) {
        try_files /wp-content/blogs.dir/$blogid/files/$2 /wp-includes/ms-files.php?file=$2 ;
        access_log off;     log_not_found off; expires max;
    }

    #avoid php readfile()
    location ^~ /blogs.dir {
        internal;
        alias /var/www/example.com/htdocs/wp-content/blogs.dir ;
        access_log off;     log_not_found off; expires max;
    }

    if (!-e $request_filename) {
        rewrite /wp-admin$ $scheme://$host$request_uri/ permanent;
        rewrite ^(/[^/]+)?(/wp-.*) $2 last;
        rewrite ^(/[^/]+)?(/.*\.php) $2 last;
    }

    location / {
        try_files $uri $uri/ /index.php?$args ;
    }

    location ~ \.php$ {
        try_files $uri =404;
        include fastcgi_params;
        fastcgi_pass php;
    }

    #add some rules for static content expiry-headers here
}

```

NGINX provides 2 special directive: X-Accel-Redirect and map. Using these 2 directives, one can eliminate performance hit for static-file serving on WordPress multisite network.

##### WordPress &lt;=3.4 Subdomains Examples

```
# WordPress multisite subdomain config file for WP 3.4 and below.
map $http_host $blogid {
    default       -999;

    #Ref: https://wordpress.org/extend/plugins/nginx-helper/
    #include /var/www/wordpress/wp-content/plugins/nginx-helper/map.conf ;

}

server {
    server_name example.com *.example.com ;

    root /var/www/example.com/htdocs;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$args ;
    }

    location ~ \.php$ {
        try_files $uri =404;
        include fastcgi_params;
        fastcgi_pass php;
    }

    #WPMU Files
        location ~ ^/files/(.*)$ {
            try_files /wp-content/blogs.dir/$blogid/$uri /wp-includes/ms-files.php?file=$1 ;
            access_log off; log_not_found off; expires max;
        }

    #WPMU x-sendfile to avoid php readfile()
    location ^~ /blogs.dir {
        internal;
        alias /var/www/example.com/htdocs/wp-content/blogs.dir;
        access_log off;     log_not_found off;      expires max;
    }

    #add some rules for static content expiry-headers here
}

```

Ref: https://www.nginx.com/resources/wiki/start/topics/recipes/wordpress/

### HTTPS in Nginx

Enabling HTTPS in Nginx is relatively simple.

```
server {
    # listens both on IPv4 and IPv6 on 443 and enables HTTPS and HTTP/2 support.
    # HTTP/2 is available in nginx 1.9.5 and above.
    listen *:443 ssl;
    listen [::]:443 ssl;
    http2 on;

    # indicate locations of SSL key files.
    ssl_certificate /srv/www/ssl/ssl.crt;
    ssl_certificate_key /srv/www/ssl/ssl.key;
    ssl_dhparam /srv/www/master/ssl/dhparam.pem;

    # indicate the server name
    server_name example.com *.example.com;

    # Enable HSTS. This forces SSL on clients that respect it, most modern browsers. The includeSubDomains flag is optional.
    add_header Strict-Transport-Security "max-age=31536000; includeSubDomains";

    # Set caches, protocols, and accepted ciphers. This config will merit an A+ SSL Labs score as of Sept 2015.
    ssl_session_cache shared:SSL:20m;
    ssl_session_timeout 10m;
    ssl_protocols TLSv1 TLSv1.1 TLSv1.2;
    ssl_prefer_server_ciphers on;
    ssl_ciphers 'ECDH+AESGCM:ECDH+AES256:ECDH+AES128:DH+3DES:!ADH:!AECDH:!MD5';
}

```

Mozilla offers an [excellent SSL config generation tool](https://mozilla.github.io/server-side-tls/ssl-config-generator/) as well.

### WP Super Cache Rules

```
# WP Super Cache rules.
# Designed to be included from a 'wordpress-ms-...' configuration file.

set $cache_uri $request_uri;

# POST requests and urls with a query string should always go to PHP
if ($request_method = POST) {
    set $cache_uri 'null cache';
}

if ($query_string != "") {
    set $cache_uri 'null cache';
}

# Don't cache uris containing the following segments
if ($request_uri ~* "(/wp-admin/|/xmlrpc.php|/wp-(app|cron|login|register|mail).php|wp-.*.php|/feed/|index.php|wp-comments-popup.php|wp-links-opml.php|wp-locations.php|sitemap(_index)?.xml|[a-z0-9_-]+-sitemap([0-9]+)?.xml)") {
    set $cache_uri 'null cache';
}

# Don't use the cache for logged in users or recent commenters
if ($http_cookie ~* "comment_author|wordpress_[a-f0-9]+|wp-postpass|wordpress_logged_in") {
    set $cache_uri 'null cache';
}

# START MOBILE
# Mobile browsers section to server them non-cached version. COMMENTED by default as most modern wordpress themes including twenty-eleven are responsive. Uncomment config lines in this section if you want to use a plugin like WP-Touch
# if ($http_x_wap_profile) {
    # set $cache_uri 'null cache';
#}

#if ($http_profile) {
    # set $cache_uri 'null cache';
#}

#if ($http_user_agent ~* (2.0\ MMP|240x320|400X240|AvantGo|BlackBerry|Blazer|Cellphone|Danger|DoCoMo|Elaine/3.0|EudoraWeb|Googlebot-Mobile|hiptop|IEMobile|KYOCERA/WX310K|LG/U990|MIDP-2.|MMEF20|MOT-V|NetFront|Newt|Nintendo\ Wii|Nitro|Nokia|Opera\ Mini|Palm|PlayStation\ Portable|portalmmm|Proxinet|ProxiNet|SHARP-TQ-GX10|SHG-i900|Small|SonyEricsson|Symbian\ OS|SymbianOS|TS21i-10|UP.Browser|UP.Link|webOS|Windows\ CE|WinWAP|YahooSeeker/M1A1-R2D2|iPhone|iPod|Android|BlackBerry9530|LG-TU915\ Obigo|LGE\ VX|webOS|Nokia5800)) {
    # set $cache_uri 'null cache';
#}

#if ($http_user_agent ~* (w3c\ |w3c-|acs-|alav|alca|amoi|audi|avan|benq|bird|blac|blaz|brew|cell|cldc|cmd-|dang|doco|eric|hipt|htc_|inno|ipaq|ipod|jigs|kddi|keji|leno|lg-c|lg-d|lg-g|lge-|lg/u|maui|maxo|midp|mits|mmef|mobi|mot-|moto|mwbp|nec-|newt|noki|palm|pana|pant|phil|play|port|prox|qwap|sage|sams|sany|sch-|sec-|send|seri|sgh-|shar|sie-|siem|smal|smar|sony|sph-|symb|t-mo|teli|tim-|tosh|tsm-|upg1|upsi|vk-v|voda|wap-|wapa|wapi|wapp|wapr|webc|winw|winw|xda\ |xda-)) {
    # set $cache_uri 'null cache';
#}
#END MOBILE

# Use cached or actual file if they exists, otherwise pass request to WordPress
location / {
    try_files /wp-content/cache/supercache/$http_host/$cache_uri/index.html $uri $uri/ /index.php?$args ;
}

```

**Experimental modifications:**

If you are using HTTPS, the latest development version of WP Super Cache may use a different directory structure to differentiate between HTTP and HTTPS. try\_files line may look like below:

```
location / {
    try_files /wp-content/cache/supercache/$http_host/$cache_uri/index-https.html $uri $uri/ /index.php?$args ;
}

```

### W3 Total Cache Rules

W3 Total Cache uses different directory structure for disk-based cache storage depending on WordPress configuration.

Cache validation checks will remain common as shown below:

```
#W3 TOTAL CACHE CHECK
set $cache_uri $request_uri;

# POST requests and urls with a query string should always go to PHP
if ($request_method = POST) {
    set $cache_uri 'null cache';
}
if ($query_string != "") {
    set $cache_uri 'null cache';
}

# Don't cache uris containing the following segments
if ($request_uri ~* "(/wp-admin/|/xmlrpc.php|/wp-(app|cron|login|register|mail).php|wp-.*.php|/feed/|index.php|wp-comments-popup.php|wp-links-opml.php|wp-locations.php|sitemap(_index)?.xml|[a-z0-9_-]+-sitemap([0-9]+)?.xml)") {
    set $cache_uri 'null cache';
}

# Don't use the cache for logged in users or recent commenters
if ($http_cookie ~* "comment_author|wordpress_[a-f0-9]+|wp-postpass|wordpress_logged_in") {
    set $cache_uri 'null cache';
}
#ADD mobile rules from WP SUPER CACHE section above

#APPEND A CODE BLOCK FROM BELOW...

```

**FOR Normal WordPress (without Multisite)**

Use following:

```
# Use cached or actual file if they exists, otherwise pass request to WordPress
location / {
    try_files /wp-content/w3tc/pgcache/$cache_uri/_index.html $uri $uri/ /index.php?$args ;
}

```

**FOR Multisite with subdirectories**  
Use the following:

```
if ( $request_uri ~* "^/([_0-9a-zA-Z-]+)/.*" ){
    set $blog $1;
}

set $blog "${blog}.";

if ( $blog = "blog." ){
    set $blog "";
}

# Use cached or actual file if they exists, otherwise pass request to WordPress
location / {
    try_files /wp-content/w3tc-$blog$host/pgcache$cache_uri/_index.html $uri $uri/ /index.php?$args ;
}

```

**FOR Multisite with Subdomains/Domain-mapping**  
Use following:

```
location / {
    try_files /wp-content/w3tc-$host/pgcache/$cache_uri/_index.html $uri $uri/ /index.php?$args;
}

```

Notes

- Nginx can handle gzip &amp; browser cache automatically so better leave that part to nginx.
- W3 Total Cache Minify rules will work with above config without any issues.

## Nginx fastcgi\_cache

Nginx can perform caching on its own end to reduce load on your server. When you want to use Nginx’s built-in fastcgi\_cache, you better compile nginx with [fastcgi\_cache\_purge](https://github.com/FRiCKLE/ngx_cache_purge) module. It will help nginx purge cache for a page when it gets edited. On the WordPress side, you need to install a plugin like [Nginx Helper](https://wordpress.org/plugins/nginx-helper/) to utilize fastcgi\_cache\_purge feature.

Config will look like below:

**Define a Nginx cache zone in http{…} block, outside server{…} block**

```
#move next 3 lines to /etc/nginx/nginx.conf if you want to use fastcgi_cache across many sites
fastcgi_cache_path /var/run/nginx-cache levels=1:2 keys_zone=WORDPRESS:500m inactive=60m;
fastcgi_cache_key "$scheme$request_method$host$request_uri";
fastcgi_cache_use_stale error timeout invalid_header http_500;

```

**For WordPress site config, in server{..} block add a cache check block as follow**

```
#fastcgi_cache start
set $no_cache 0;

# POST requests and urls with a query string should always go to PHP
if ($request_method = POST) {
    set $no_cache 1;
}
if ($query_string != "") {
    set $no_cache 1;
}

# Don't cache uris containing the following segments
if ($request_uri ~* "(/wp-admin/|/xmlrpc.php|/wp-(app|cron|login|register|mail).php|wp-.*.php|/feed/|index.php|wp-comments-popup.php|wp-links-opml.php|wp-locations.php|sitemap(_index)?.xml|[a-z0-9_-]+-sitemap([0-9]+)?.xml)") {
        set $no_cache 1;
}

# Don't use the cache for logged in users or recent commenters
if ($http_cookie ~* "comment_author|wordpress_[a-f0-9]+|wp-postpass|wordpress_no_cache|wordpress_logged_in") {
        set $no_cache 1;
}

```

**Then make changes to PHP handling block**

Just add this to the following php block. Note the line fastcgi\_cache\_valid 200 60m; which tells nginx only to cache 200 responses(normal pages), which means that redirects are not cached. This is important for multilanguage sites where, if not implemented, nginx would cache the main url in one language instead of redirecting users to their respective content according to their language.

```
fastcgi_cache_bypass $no_cache;
fastcgi_no_cache $no_cache;

fastcgi_cache WORDPRESS;
fastcgi_cache_valid 200 60m;

```

Such that it becomes something like this

```
location ~ [^/]\.php(/|$) {
    fastcgi_split_path_info ^(.+?\.php)(/.*)$;
    if (!-f $document_root$fastcgi_script_name) {
        return 404;
    }
    # This is a robust solution for path info security issue and works with "cgi.fix_pathinfo = 1" in /etc/php.ini (default)

    include fastcgi.conf;
    fastcgi_index index.php;
    # fastcgi_intercept_errors on;
    fastcgi_pass php;

    fastcgi_cache_bypass $no_cache;
    fastcgi_no_cache $no_cache;

    fastcgi_cache WORDPRESS;
    fastcgi_cache_valid 200 60m;
}

```

**Finally add a location for conditional purge**

```
location ~ /purge(/.*) {
    # Uncomment the following two lines to allow purge only from the webserver
    # allow 127.0.0.1;
    # deny all;

    fastcgi_cache_purge WORDPRESS "$scheme$request_method$host$1";
}

```

If you get an ‘unknown directive “fastcgi\_cache\_purge”‘ error check that your Nginx installation has fastcgi\_cache\_purge module.

## Better Performance for Static Files in Multisite (WP &lt;= 3.4)

By default, on multisite networks activated prior to 3.5, a static file request brings php into picture i.e. `ms-files.php` file. You can get much better performance using Nginx `Map{..}` directive.

In Nginx config for your site, above `server{..}` block, add a section as follows:

```
map $http_host $blogid {
    default               0;

    example.com           1;
    site1.example.com     2;
    site1.com             2;
}

```

It is just a list of site-names and blog-ids. You can use [Nginx helper](https://wordpress.org/extend/plugins/nginx-helper) to get such a list of site-name/blog-id pairs. This plugin will also generate a `map.conf` file which you can directly include in the `map{}` section like this:

```
map $http_host $blogid {
    default               0;

    include /path/to/map.conf ;
}

```

After creating a `map{..}` section, you just need to make one more change in your Nginx config so requests for /files/ will be first processed using nginx `map{..}`:

```
location ~ ^/files/(.*)$ {
    try_files /wp-content/blogs.dir/$blogid/$uri /wp-includes/ms-files.php?file=$1 ;
    access_log off; log_not_found off; expires max;
}

```

Notes

- Whenever a new site is created, deleted or an extra domain is mapped to an existing site, Nginx helper will update map.conf file automatically but you will still need to reload Nginx config manually. You can do that anytime later. Till then, only files for new sites will be served using php-fpm.
- This method does not generate any symbolic links. So, there will be no issues with accidental deletes or backup scripts that follow symbolic links.
- For large networks, this will scale-up nicely as there will be a single map.conf file.

A couple of final but important notes: This whole setup assumes that the root of the site is the blog and that all files that will be referenced reside on the host. If you put the blog in a subdirectory such as /blog, then the rules will have to be modified. Perhaps someone can take these rules and make it possible to, for instance, use a:

```
set $wp_subdir "/blog";

```

directive in the main ‘server’ block and have it automagically apply to the generic WP rules.

## Warning

A typo in [Global restrictions file](#advanced-administration/server/web-server/nginx) can create loopholes. To test if your “uploads” directory is really protected, create a PHP file with some content (example: ), upload it to “uploads” directory (or one of its sub-directories), then try to access (execute) it from your browser.

## Resources

### Reference

- [nginx + php-fpm + PHP APC + WordPress multisite (subdirectory) + WP Super Cache](https://wordpress.org/support/topic/nginx-php-fpm-php-apc-wordpress-multisite-subdirectory-wp-super-cache/).

### External Links

- [Nginx WordPress wiki page](https://www.nginx.com/resources/wiki/start/topics/recipes/wordpress/)
- [LEMP guides on Linode’s Library](https://www.linode.com/docs/guides/web-servers/lemp/)
- [Various guides about Nginx on Linode’s Library](https://www.linode.com/docs/guides/web-servers/nginx/)
- [Lightning fast WordPress with Php-fpm and Nginx](https://www.sitepoint.com/lightning-fast-wordpress-with-php-fpm-and-nginx/)
- [Virtual Hosts Examples](https://wiki.nginx.org/VirtualHostExample)
- [List of 20+ WordPress-Nginx Tutorials for common situations](https://rtcamp.com/wordpress-nginx/tutorials/)
- [An introduction to Nginx configuration](https://blog.martinfjordvald.com/nginx-primer/)
- [A comprehensive blog series on hosting WordPress yourself using Nginx](https://deliciousbrains.com/hosting-wordpress-setup-secure-virtual-server/)
- [WordPress Installation CentminMod](https://centminmod.com/nginx_configure_wordpress.html)
- [Nginx WordPress Installation Guide](https://thecustomizewindows.com/2015/12/nginx-wordpress-installation-guide-steps/)

### Scripts &amp; Tools

For WordPress Nginx scripted installation [CentminMod](https://centminmod.com/nginx_configure_wordpress.html) can be used for CentOS.

### Securing Nginx

- [Securing Nginx and PHP](http://kbeezie.com/securing-nginx-php/)
- [Setting up PHP-FastCGI and nginx? Don’t trust the tutorials: check your configuration!](https://nealpoole.com/blog/2011/04/setting-up-php-fastcgi-and-nginx-dont-trust-the-tutorials-check-your-configuration/)

---

# Control Panels <a name="advanced-administration/server/control-panel" />

Source: https://developer.wordpress.org/advanced-administration/server/control-panel/

## WP Toolkit for cPanel &amp; WHM and Plesk

WP Toolkit is a single management interface that allows you to install, configure, and manage WordPress® easily. WP Toolkit can install, configure, and manage WordPress versions 4.9 or later.

cPanel &amp; WHM versions 102 and above install WP Toolkit by default. WP Toolkit is available in Plesk if the server administrator has installed the WP Toolkit extension.

## cPanel &amp; WHM

This tutorial describes how to install WordPress in the cPanel &amp; WHM control panel using WP Toolkit. For other options to install WordPress in cPanel &amp; WHM, read cPanel’s [How to Install WordPress with cPanel](https://docs.cpanel.net/knowledge-base/third-party/how-to-install-wordpress-with-cpanel/) documentation.

To install WordPress via WP Toolkit, perform the following actions:

1. Log in to the cPanel interface with the information provided by your hosting company.
2. Select *WP Toolkit* from the lefthand menu bar. The *WP Toolkit* interface will appear.
3. Click *Install WordPress* to create a new WordPress installation.

### Install WordPress

In the *Install WordPress* interface, click *Install* to use the default settings. Or provide the following optional information to customize your installation, then click *Install*:

- The installation directory. By default, the installation uses the account’s `public_html` directory.
- The title for the website.
- The plugin or theme set.
- The language of the website.
- The version of WordPress to install. By default, the installation uses the current WordPress version.
- The WordPress Administrator username and password.
- The database name, table prefix, username and password.
- The automatic update settings for the WordPress software, plugins, and themes.

Click *Install Plugins* if you want to install plugins and themes, or click *No, thanks* to optionally install them later.

## Plesk

This tutorial provides step-by-step examples of installing Plesk WP Toolkit using the Plesk Web Installer.

### Using Web Installer

Install Plesk using Web Installer please open your browser and go to [get.plesk.com](https://get.plesk.com/). For Plesk installation, it is required a fresh Linux server with access to the Internet. You can install Plesk on any supported Linux-based OS.

![Image_1](https://i0.wp.com/user-images.githubusercontent.com/19301688/189542599-4fce4d63-8060-416e-9fdf-f21ae62c87e1.png?ssl=1)

Provide your server’s IP address or hostname, enter your root password, or just add a private key.

- Accept the terms of End-User License Agreement and click Install button.
- Relax and wait for some time to let the installation be finalized.
- Click on the Login link. No worries about “secure connection warnings”, just make an exception.

### Installing WordPress

![image_2](https://i0.wp.com/user-images.githubusercontent.com/19301688/189542665-78f52a1c-e92b-4d70-bb5d-899ac02cc57e.png?ssl=1)

- For an express installation, click Install (Quick). The latest version of WordPress will be installed, and the default settings will be used. The new instance will be available via HTTPS if SSL/TLS support is enabled for the domain.
- If you want to change the default installation settings, click Install (Custom). This enables you to set up the administrator user, select the desired WordPress version, specify the database name, select auto-update settings, and more.

### Managing WordPress Instances

Go to WordPress to see all your WordPress instances. WP Toolkit groups information about each instance in blocks we call cards.

![image_3](https://i0.wp.com/user-images.githubusercontent.com/19301688/189542692-5d6f38b5-1b32-4de8-8f40-2abe9a5d1d86.png?ssl=1)

A card shows a screenshot of your website and features several controls that give you easy access to frequently used tools. The screenshot changes in real time to reflect the changes you make to your website. For example, if you switch the maintenance mode on or change the WordPress theme, the screenshot of the website will change immediately.

### Tools

In the “Tools” section, click to access the following WP Toolkit features:

![image_4](https://i0.wp.com/user-images.githubusercontent.com/19301688/189542713-abf476de-fcbd-4113-9975-1c2961765190.png?ssl=1)

- “Sync” to synchronize the content of your website with another one.
- “Clone” to make a full copy of your website.
- “Manage Files” to manage the website’s files in File Manager.
- “Back Up/Restore” to create a backup of your website and restore it if necessary.

The controls below give you easy access to the following settings and tools:

- “Search engine indexing” shows your website in search results of search engines.
- “Caching (nginx)” speeds up the website load time and reduces server load.
- “Debugging” helps you debug a website that is not ready for viewing and being tested or developed.
- “Maintenance mode” hides your website’s content from visitors.
- “Password Protection” specifies the password you will use to log in to WordPress from Plesk.

---

# WordPress configuration <a name="advanced-administration/wordpress" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/



---

# Editing wp-config.php <a name="advanced-administration/wordpress/wp-config" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/wp-config/

One of the most important files in your WordPress installation is the `wp-config.php` file. This file is located in the root of your WordPress file directory and contains your website’s base configuration details, such as database connection information.

When you first download WordPress, the `wp-config.php` file isn’t included. The WordPress setup process will create a `wp-config.php` file for you based on the information you provide in the [installation](#advanced-administration/before-install/howto-install) process.

It is unlikely that a non-developer would have to edit the wp-config.php file, in the case you are acting on trouble shooting steps provided by a technical person or by your webhost, this [page](#advanced-administration/wordpress/wp-config) should help.

# wp-config.php

TEMPORALLY NOTE: this may link for the simple part, to:  
\* #advanced-administration/wordpress/wp-config  
\* #advanced-administration/debug/debug-wordpress

## Advanced Options

The following sections may contain advanced information and some changes might result in unforeseen issues. Please make sure you practice [regular backups](#advanced-administration/security/backup) and know how to restore them before modifying these settings.

### table\_prefix

The **$table\_prefix** is the value placed in the front of your database tables. Change the value if you want to use something other than **wp\_** for your database prefix. Typically this is changed if you are [installing multiple WordPress blogs](#advanced-administration/before-install/multiple-instances) in the same database, as is done with the multisite feature.

It is possible to have multiple installations in one database if you give each a unique prefix. Keep security in mind if you choose to do this.

```
$table_prefix = 'example123_'; // Only numbers, letters, and underscores please!

```

### WP\_SITEURL

WP\_SITEURL allows the WordPress address (URL) to be defined. The value defined is the address where your WordPress core files reside. It should include the https:// part too. Do not put a slash “**/**” at the end. Setting this value in `wp-config.php` overrides the [wp\_options table](https://codex.wordpress.org/Database_Description#Table:_wp_options) value for **siteurl**. Adding this in can reduce the number of database calls when loading your site. **Note:** This will **not** change the database stored value. The URL will revert to the old database value if this line is ever removed from `wp-config`. [Use the **RELOCATE** constant](#advanced-administration/upgrade/migrating) to change the **siteurl** value in the database.

If WordPress is installed into a directory called “wordpress” for the [domain](https://en.wikipedia.org/wiki/Domain_name_system) example.com, define `WP_SITEURL` like this:

```
define( 'WP_SITEURL', 'https://example.com/wordpress' );

```

Dynamically set WP\_SITEURL based on $\_SERVER\[‘HTTP\_HOST’\]

```
define( 'WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] . '/path/to/wordpress' );

```

**Note:** HTTP\_HOST is created dynamically by PHP based on the value of the HTTP HOST Header in the request, thus possibly allowing for [file inclusion vulnerabilities](https://en.wikipedia.org/wiki/File_inclusion_vulnerability). SERVER\_NAME may also be created dynamically. However, when Apache is configured as UseCanonicalName “on”, SERVER\_NAME is set by the server configuration, instead of dynamically. In that case, it is safer to user SERVER\_NAME than HTTP\_HOST.

Dynamically set `WP_SITEURL` based on `$_SERVER['SERVER_NAME']`

```
define( 'WP_SITEURL', 'https://' . $_SERVER['SERVER_NAME'] . '/path/to/wordpress' );

```

### Blog address (URL)

Similar to WP\_SITEURL, WP\_HOME *overrides the [wp\_options table](https://codex.wordpress.org/Database_Description#Table:_wp_options) value for* home *but does not change it in the database.* **home** is the address you want people to type in their browser to reach your WordPress blog. It should include the https:// part and should not have a slash “**/**” at the end. Adding this in can reduce the number of database calls when loading your site.

```
define( 'WP_HOME', 'https://example.com/wordpress' );

```

If you are using the technique described in [Giving WordPress Its Own Directory](#advanced-administration/server/wordpress-in-directory) then follow the example below. Remember, you will also be placing an `index.php` in your web-root directory if you use a setting like this.

```
define( 'WP_HOME', 'https://example.com' );

```

Dynamically set `WP_HOME` based on `$_SERVER['HTTP_HOST']`

```
define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] . '/path/to/wordpress' );

```

### Moving wp-content folder

You can move the `wp-content` directory, which holds your themes, plugins, and uploads, outside of the WordPress application directory.

Set WP\_CONTENT\_DIR to the full **local path** of this directory (no trailing slash), e.g.

```
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/blog/wp-content' );

```

Set WP\_CONTENT\_URL to the full **URL** of this directory (no trailing slash), e.g.

```
define( 'WP_CONTENT_URL', 'https://example/blog/wp-content' );

```

### Moving plugin folder

Set WP\_PLUGIN\_DIR to the full **local path** of this directory (no trailing slash), e.g.

```
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/blog/wp-content/plugins' );

```

Set WP\_PLUGIN\_URL to the full **URI** of this directory (no trailing slash), e.g.

```
define( 'WP_PLUGIN_URL', 'https://example/blog/wp-content/plugins' );

```

If you have compatibility issues with plugins Set PLUGINDIR to the full **local path** of this directory (no trailing slash), e.g.

```
define( 'PLUGINDIR', dirname(__FILE__) . '/blog/wp-content/plugins' );

```

### Moving themes folder

You cannot move the themes folder because its path is hardcoded relative to the `wp-content` folder:

```
$theme_root = WP_CONTENT_DIR . '/themes';

```

However, you can register additional theme directories using [register\_theme\_directory](#reference/functions/register_theme_directory).

See how to [move the wp-content](#advanced-administration/wordpress/wp-config) folder. For more details how the themes folder is determined, see `wp-includes/theme.php`.

### Moving uploads folder

Set UPLOADS to:

```
define( 'UPLOADS', 'blog/wp-content/uploads' );

```

This path can not be absolute. It is always relative to ABSPATH, therefore does not require a leading slash.

### Modify AutoSave Interval

When editing a post, WordPress uses Ajax to auto-save revisions to the post as you edit. You may want to increase this setting for longer delays in between auto-saves, or decrease the setting to make sure you never lose changes. The default is 60 seconds.

```
define( 'AUTOSAVE_INTERVAL', 180 ); // Seconds

```

### Post Revisions

WordPress, by default, will save copies of each edit made to a post or page, allowing the possibility of reverting to a previous version of that post or page. The saving of revisions can be disabled, or a maximum number of revisions per post or page can be specified.

#### Disable Post Revisions

If you do **not** set this value, WordPress defaults WP\_POST\_REVISIONS to *true* (enable post revisions). If you want to disable the awesome revisions feature, use this setting:

```
define( 'WP_POST_REVISIONS', false );

```

Note: Some users could not get this to function until moving the command to the first line under the initial block comment in `wp-config.php`.

#### Specify the Number of Post Revisions

If you want to specify a maximum number of revisions that WordPress stores, change *false* to an integer/number (*e.g.*, 3 or 12).

```
define( 'WP_POST_REVISIONS', 3 );

```

Note: Some users could not get this to function until moving the command to the first line under the initial block comment in `wp-config.php`.

### Set Cookie Domain

The domain set in the cookies for WordPress can be specified for those with unusual domain setups. For example, if subdomains are used to serve static content, you can set the cookie domain to only your non-static domain to prevent WordPress cookies from being sent with each request to static content on your subdomain .

```
define( 'COOKIE_DOMAIN', 'www.example.com' );

```

### Enable Multisite / Network Ability

WP\_ALLOW\_MULTISITE is a feature enable multisite functionality. If this setting is absent from `wp-config.php` it defaults to false.

```
define( 'WP_ALLOW_MULTISITE', true );

```

### Redirect Nonexistent Blogs

NOBLOGREDIRECT can be used to redirect the browser if the visitor tries to access a nonexistent subdomain or a subfolder.

```
define( 'NOBLOGREDIRECT', 'https://example.com' );

```

### Fatal Error Handler

WordPress 5.2 introduced [Recovery Mode](https://make.wordpress.org/core/2019/04/16/fatal-error-recovery-mode-in-5-2/) which displays error message instead of white screen when plugins causes fatal error.

*The site is experiencing technical difficulties. Please check your site admin email inbox for instructions.*

White screens and PHP error messages are not displayed to users any more. But in a development environment, if you want to enable WP\_DEBUG\_DISPLAY, you have to disable recovery mode by set true to WP\_DISABLE\_FATAL\_ERROR\_HANDLER.

```
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

```

### WP\_DEBUG

The [WP\_DEBUG](#advanced-administration/debug/debug-wordpress) option controls the reporting of some errors and warnings and enables use of the WP\_DEBUG\_DISPLAY and WP\_DEBUG\_LOG settings. The default boolean value is false.

```
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
define( 'WP_DEBUG', true );

```

[Database errors are printed only if WP\_DEBUG is set to true](https://trac.wordpress.org/ticket/5473). Database errors are handled by the [wpdb](#reference/classes/wpdb) class and are not affected by [PHP’s error settings](https://www.php.net/errorfunc).

Setting WP\_DEBUG to true also raises the [error reporting level](https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-reporting) to E\_ALL and activates warnings when deprecated functions or files are used; otherwise, WordPress sets the error reporting level to E\_ALL ^ E\_NOTICE ^ E\_USER\_NOTICE.

### WP\_ENVIRONMENT\_TYPE

The WP\_ENVIRONMENT\_TYPE option controls the environment type for a site: `local`, `development`, `staging`, and `production`.

The values of environment types are processed in the following order with each sequential method overriding any previous values: the WP\_ENVIRONMENT\_TYPE [PHP environment variable](https://www.php.net/manual/en/reserved.variables.environment.php) and the WP\_ENVIRONMENT\_TYPE constant.

For both methods, if the value of an environment type provided is not in the list of allowed environment types, the default `production` value will be returned.

The simplest way to set the value is probably through defining the constant:

```
define( 'WP_ENVIRONMENT_TYPE', 'staging' );

```

Note: When `development` is returned by [wp\_get\_environment\_type()](#reference/functions/wp_get_environment_type), WP\_DEBUG will be set to `true` if it is not defined in the `wp-config.php` file of the site.

### SCRIPT\_DEBUG

[SCRIPT\_DEBUG](#advanced-administration/debug/debug-wordpress) is a related constant that will force WordPress to use the “dev” versions of scripts and stylesheets in `wp-includes/js`, `wp-includes/css`, `wp-admin/js`, and `wp-admin/css` will be loaded instead of the `.min.css` and `.min.js` versions. If you are planning on modifying some of WordPress’ built-in JavaScript or Cascading Style Sheets, you should add the following code to your config file:

```
define( 'SCRIPT_DEBUG', true );

```

### Disable Javascript Concatenation

To result in faster administration screens, all JavaScript files are [concatenated](https://en.wikipedia.org/wiki/Concatenation) into one URL. If JavaScript is failing to work in an administration screen, you can try disabling this feature:

```
define( 'CONCATENATE_SCRIPTS', false );

```

### Configure Error Logging

Configuring error logging can be a bit tricky. First of all, default PHP error log and display settings are set in the php.ini file, which you may or may not have access to. If you do, they should be set to the desired settings for live PHP pages served to the public. It’s strongly recommended that no error messages are displayed to the public and instead routed to an error log. Further more, error logs should not be located in the publicly accessible portion of your server. Sample recommended php.ini error settings:

```
error_reporting = 4339
display_errors = Off
display_startup_errors = Off
log_errors = On
error_log = /home/example.com/logs/php_error.log
log_errors_max_len = 1024
ignore_repeated_errors = On
ignore_repeated_source = Off
html_errors = Off

```

**About Error Reporting 4339** This is a custom value that only logs issues that affect the functioning of your site, and ignores things like notices that may not even be errors. See [PHP Error Constants](https://www.php.net/manual/en/errorfunc.constants.php) for the meaning of each binary position for 1000011110011, which is the binary number equal to 4339. The far left 1 means report any E\_RECOVERABLE\_ERROR. The next 0 means do not report E\_STRICT, (which is thrown when sloppy but functional coding is used) and so on. Feel free to determine your own custom error reporting number to use in place of 4339.

Obviously, you will want different settings for your development environment. If your staging copy is on the same server, or you don’t have access to `php.ini`, you will need to override the default settings at run time. It’s a matter of personal preference whether you prefer errors to go to a log file, or you prefer to be notified immediately of any error, or perhaps both. Here’s an example that reports all errors immediately that you could insert into your `wp-config.php` file:

```
@ini_set( 'log_errors', 'Off' );
@ini_set( 'display_errors', 'On' );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', true );

```

Because `wp-config.php` is loaded for every page view not loaded from a cache file, it is an excellent location to set `php.ini` settings that control your PHP installation. This is useful if you don’t have access to a `php.ini` file, or if you just want to change some settings on the fly. One exception is ‘error\_reporting’. When WP\_DEBUG is defined as true, ‘error\_reporting’ will be set to E\_ALL by WordPress regardless of anything you try to set in wp-config.php. If you really have a need to set ‘error\_reporting’ to something else, it must be done after `wp-settings.php` is loaded, such as in a plugin file.

If you turn on error logging, remember to delete the file afterwards, as it will often be in a publicly accessible location, where anyone could gain access to your log.

Here is an example that turns PHP error\_logging on and logs them to a specific file. If WP\_DEBUG is defined to true, the errors will also be saved to this file. Just place this above any *require\_once* or *include* commands.

```
@ini_set( 'log_errors', 'On' );
@ini_set( 'display_errors', 'Off' );
@ini_set( 'error_log', '/home/example.com/logs/php_error.log' );
/* That's all, stop editing! Happy blogging. */

```

Another example of logging errors, as suggested by Mike Little on the [wp-hackers email list](https://lists.automattic.com/pipermail/wp-hackers/2010-September/034830.html):

```
/**
 * This will log all errors notices and warnings to a file called debug.log in
 * wp-content (if Apache does not have write permission, you may need to create
 * the file first and set the appropriate permissions (i.e. use 666) )
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

```

A refined version from Mike Little on the [Manchester WordPress User Group](https://groups.google.com/g/manchester-wordpress-user-group/c/tHJxMGhcnZs/m/dn-8yjYIq9wJ):

```
/**
 * This will log all errors notices and warnings to a file called debug.log in
 * wp-content only when WP_DEBUG is true. if Apache does not have write permission,
 * you may need to create the file first and set the appropriate permissions (i.e. use 666).
 */
define( 'WP_DEBUG', true ); // Or false
if ( WP_DEBUG ) {
    define( 'WP_DEBUG_LOG', true );
    define( 'WP_DEBUG_DISPLAY', false );
    @ini_set( 'display_errors', 0 );
}

```

Confusing the issue is that WordPress has three (3) constants that look like they could do the same thing. First off, remember that if WP\_DEBUG is false, it and the other two WordPress DEBUG constants do not do anything. The PHP directives, whatever they are, will prevail. Except for ‘error\_reporting’, WordPress will set this to 4983 if WP\_DEBUG is defined as false. Second, even if WP\_DEBUG is true, the other constants only do something if they too are set to true. If they are set to false, the PHP directives remain unchanged. For example, if your `php.ini` file has the directive (‘display\_errors’ = ‘On’); but you have the statement define( ‘WP\_DEBUG\_DISPLAY’, false ); in your `wp-config.php` file, errors will still be displayed on screen even though you tried to prevent it by setting WP\_DEBUG\_DISPLAY to false because that is the PHP configured behavior. This is why it’s very important to set the PHP directives to what you need in case any of the related WP constants are set to false. To be safe, explicitly set/define both types. More detailed descriptions of the WP constants is available at [Debugging in WordPress](#advanced-administration/debug/debug-wordpress).

For your public, production WordPress installation, you might consider placing the following in your `wp-config.php` file, even though it may be partly redundant:

```
@ini_set( 'log_errors', 'On' );
@ini_set( 'display_errors', 'Off' );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false ); // 5.2 and later
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

```

The default debug log file is `/wp-content/debug.log`. Placing error logs in publicly accessible locations is a security risk. Ideally, your log files should be placed above you site’s public root directory. If you can’t do this, at the very least, set the log file permissions to 600 and add this entry to the `.htaccess` file in the root directory of your WordPress installation:

```
<Files debug.log>
  Order allow,deny
  Deny from all
</Files>

```

This prevents anyone from accessing the file via HTTP. You can always view the log file by retrieving it from your server via FTP.

### Increasing memory allocated to PHP

**WP\_MEMORY\_LIMIT** option allows you to specify the maximum amount of memory that can be consumed by PHP. This setting may be necessary in the event you receive a message such as “Allowed memory size of xxxxxx bytes exhausted”.

This setting increases PHP Memory only for WordPress, not other applications. By default, WordPress will attempt to increase memory allocated to PHP to 40MB (code is at the beginning of `/wp-includes/default-constants.php`) for single site and 64MB for multisite, so the setting in `wp-config.php` should reflect something higher than 40MB or 64MB depending on your setup.

WordPress will automatically check if PHP has been allocated less memory than the entered value before utilizing this function. For example, if PHP has been allocated 64MB, there is no need to set this value to 64M as WordPress will automatically use all 64MB if need be.

Note: Some hosts do not allow for increasing the PHP memory limit automatically. In that event, contact your host to increase the PHP memory limit. Also, many hosts set the PHP limit at 8MB.

Adjusting the WordPress memory limit potentially creates problems as well. You might end up hiding the root of the issue for it to happen later down the line as you add in more plugins or functionalities.

If you are facing Out of Memory issues even with an elevated memory limit, you should properly debug your installation. Chances are you have too many memory intensive functions tied to a specific action and should move these functions to a cronjob.

Increase PHP Memory to 64MB

```
define( 'WP_MEMORY_LIMIT', '64M' );

```

Increase PHP Memory to 96MB

```
define( 'WP_MEMORY_LIMIT', '96M' );

```

Administration tasks require may require memory than usual operation. When in the administration area, the memory can be increased or decreased from the WP\_MEMORY\_LIMIT by defining WP\_MAX\_MEMORY\_LIMIT.

```
define( 'WP_MAX_MEMORY_LIMIT', '128M' );

```

Note: this has to be put before wp-settings.php inclusion.

### Cache

The **WP\_CACHE** setting, if true, includes the `wp-content/advanced-cache.php` script, when executing `wp-settings.php`.

```
define( 'WP_CACHE', true );

```

### Custom User and Usermeta Tables

**CUSTOM\_USER\_TABLE** and **CUSTOM\_USER\_META\_TABLE** are used to designate that the user and usermeta tables normally utilized by WordPress are not used, instead these values/tables are used to store your user information.

```
define( 'CUSTOM_USER_TABLE', $table_prefix.'my_users' );
define( 'CUSTOM_USER_META_TABLE', $table_prefix.'my_usermeta' );

```

Note: Even if ‘CUSTOM\_USER\_META\_TABLE’ is manually set, a usermeta table is still created for each database with the corresponding permissions for each instance. By default, the WordPress installer will add permissions for the first user (ID #1). You also need to manage permissions to each of the site via a plugin or custom function. If this isn’t setup you will experience permission errors and log-in issues.

CUSTOM\_USER\_TABLE is easiest to adopt during initial Setup your first instance of WordPress. The define statements of the `wp-config.php` on the first instance point to where `wp_users` data will be stored by default. After the first site setup, copying the working `wp-config.php` to your next instance will only require a change the `$table_prefix` variable. Do not use an e-mail address that is already in use by your original install. Once you have finished the setup process log in with the auto generated admin account and password. Next, promote your normal account to the administrator level and Log out of admin. Log back in as yourself, delete the admin account and promote the other user accounts as is needed.

### Language and Language Directory

WordPress [Version 4.0](https://wordpress.org/documentation/wordpress-version/version-4-0/) allows you to change the language in your WordPress [Administration Screens](https://wordpress.org/documentation/article/administration-screens/). To change the language in the admin settings screen. Go to [Settings](https://wordpress.org/documentation/article/administration-screens/#settings-configuration-settings) &gt; [General](https://wordpress.org/documentation/article/settings-general-screen/) and select Site Language.

#### WordPress v3.9.6 and below

**WPLANG** defines the name of the language translation (.mo) file. **WP\_LANG\_DIR** defines what directory the WPLANG .mo file resides. If WP\_LANG\_DIR is not defined WordPress looks first to wp-content/languages and then `wp-includes/languages` for the .mo defined by WPLANG file.

```
define( 'WPLANG', 'de_DE' );
define( 'WP_LANG_DIR', dirname(__FILE__) . 'wordpress/languages' );

```

To find out the WPLANG language code, please [refer here](https://make.wordpress.org/polyglots/teams/). The code in WP Local column is what you need.

### Save queries for analysis

The **SAVEQUERIES** definition saves the database queries to an array and that array can be displayed to help analyze those queries. The information saves each query, what function called it, and how long that query took to execute. **Note:** This will have a performance impact on your site, so make sure to turn this off when you aren’t debugging.

First, add this to the `wp-config.php` file:

```
define( 'SAVEQUERIES', true );

```

Then in the footer of your theme put this:

```
if ( current_user_can( 'administrator' ) ) {
  global $wpdb;
  echo "";
  print_r( $wpdb->queries );
  echo "";
}

```

Alternatively, consider using [Query Monitor](https://wordpress.org/plugins/query-monitor/)

### Override of default file permissions

The **FS\_CHMOD\_DIR** and **FS\_CHMOD\_FILE** define statements allow override of default file permissions. These two variables were developed in response to the problem of the core update function failing with hosts running under [suexec](https://en.wikipedia.org/wiki/SuEXEC). If a host uses restrictive file permissions (e.g. 400) for all user files, and refuses to access files which have group or world permissions set, these definitions could solve the problem.

```
define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );

```

Example to provide setgid:

```
define( 'FS_CHMOD_DIR', ( 02755 & ~umask() ) );

```

Note: ‘**0755′** and ‘**02755**‘ are octal values. Octal values must be prefixed with a 0 and are not delineated with single quotes (‘). See Also: [Changing File Permissions](#advanced-administration/server/file-permissions)

### WordPress Upgrade Constants

**Note: Define as few of the below constants as needed to correct your update issues.**

The most common causes of needing to define these are:

Host running with a special installation setup involving symlinks. You may need to define the path-related constants (FTP\_BASE, FTP\_CONTENT\_DIR, and FTP\_PLUGIN\_DIR). Often defining simply the base will be enough.

Certain PHP installations shipped with a PHP FTP extension which is incompatible with certain FTP servers. Under these rare situations, you may need to define FS\_METHOD to “ftpsockets”.

The following are valid constants for WordPress updates:

- **FS\_METHOD** forces the filesystem method. It should only be “direct”, “ssh2”, “ftpext”, or “ftpsockets”. Generally, you should only change this if you are experiencing update problems. If you change it and it doesn’t help, **change it back/remove it**. Under most circumstances, setting it to ‘ftpsockets’ will work if the automatically chosen method does not. 
    - **(Primary Preference) “direct”** forces it to use Direct File I/O requests from within PHP, this is fraught with opening up security issues on poorly configured hosts, This is chosen automatically when appropriate.
    - **(Secondary Preference) “ssh2”** is to force the usage of the SSH PHP Extension if installed
    - **(3rd Preference) “ftpext”** is to force the usage of the FTP PHP Extension for FTP Access, and finally
    - **(4th Preference) “ftpsockets”** utilises the PHP Sockets Class for FTP Access.
- **FTP\_BASE** is the full path to the “base”(ABSPATH) folder of the WordPress installation.
- **FTP\_CONTENT\_DIR** is the full path to the wp-content folder of the WordPress installation.
- **FTP\_PLUGIN\_DIR** is the full path to the plugins folder of the WordPress installation.
- **FTP\_PUBKEY** is the full path to your SSH public key.
- **FTP\_PRIKEY** is the full path to your SSH private key.
- **FTP\_USER** is either user FTP or SSH username. Most likely these are the same, but use the appropriate one for the type of update you wish to do.
- **FTP\_PASS** is the password for the username entered for **FTP\_USER**. If you are using SSH public key authentication this can be omitted.
- **FTP\_HOST** is the hostname:port combination for your SSH/FTP server. The default FTP port is 21 and the default SSH port is 22. These do not need to be mentioned.
- **FTP\_SSL** TRUE for SSL-connection *if supported by the underlying transport* (not available on all servers). This is for “Secure FTP” not for SSH SFTP.

```
define( 'FS_METHOD', 'ftpext' );
define( 'FTP_BASE', '/path/to/wordpress/' );
define( 'FTP_CONTENT_DIR', '/path/to/wordpress/wp-content/' );
define( 'FTP_PLUGIN_DIR ', '/path/to/wordpress/wp-content/plugins/' );
define( 'FTP_PUBKEY', '/home/username/.ssh/id_rsa.pub' );
define( 'FTP_PRIKEY', '/home/username/.ssh/id_rsa' );
define( 'FTP_USER', 'username' );
define( 'FTP_PASS', 'password' );
define( 'FTP_HOST', 'ftp.example.org' );
define( 'FTP_SSL', false );

```

Some configurations should set FTP\_HOST to localhost to avoid 503 problems when trying to update plugins or WP itself.

#### Enabling SSH Upgrade Access

There are two ways to upgrade using SSH2.

The first is to use the [SSH SFTP Updater Support plugin](https://wordpress.org/plugins/ssh-sftp-updater-support/). The second is to use the built-in SSH2 upgrader, which requires the pecl SSH2 extension be installed.

To install the pecl SSH2 extension you will need to issue a command similar to the following or talk to your web hosting provider to get this installed:

```
pecl install ssh2

```

After installing the pecl ssh2 extension you will need to modify your PHP configuration to automatically load this extension.

pecl is provided by the pear package in most linux distributions. To install pecl in Redhat/Fedora/CentOS:

```
yum -y install php-pear

```

To install pecl in Debian/Ubuntu:

```
apt-get install php-pear

```

It is recommended to use a private key that is not pass-phrase protected. There have been numerous reports that pass phrase protected private keys do not work properly. If you decide to try a pass phrase protected private key you will need to enter the pass phrase for the private key as FTP\_PASS, or entering it in the “Password” field in the presented credential field when installing updates.

### Alternative Cron

There might be reason to use an alternative Cron with WP. Most commonly this is done if scheduled posts are not getting published as predicted. This alternative method uses a redirection approach. The users’ browser get a redirect when the cron needs to run, so that they come back to the site immediately while cron continues to run in the connection they just dropped. This method has certain risks, since it depends on a non-native WordPress service.

```
define( 'ALTERNATE_WP_CRON', true );

```

### Disable Cron and Cron Timeout

Disable cron entirely by setting DISABLE\_WP\_CRON to true.

```
define( 'DISABLE_WP_CRON', true );

```

Make sure a cron process cannot run more than once every WP\_CRON\_LOCK\_TIMEOUT seconds.

```
define( 'WP_CRON_LOCK_TIMEOUT', 60 );

```

### Additional Defined Constants

Here are additional constants that can be defined. These probably shouldn’t be set unless other methodologies have been attempted first. The Cookie definitions can be particularly useful if you have an unusual domain setup.

```
define( 'COOKIEPATH', preg_replace( '|https?://[^/]+|i', '', get_option( 'home' ) . '/' ) );
define( 'SITECOOKIEPATH', preg_replace( '|https?://[^/]+|i', '', get_option( 'siteurl' ) . '/' ) );
define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . 'wp-admin' );
define( 'PLUGINS_COOKIE_PATH', preg_replace( '|https?://[^/]+|i', '', WP_PLUGIN_URL ) );
define( 'TEMPLATEPATH', get_template_directory() );
define( 'STYLESHEETPATH', get_stylesheet_directory() );

```

### Empty Trash

This constant controls the number of days before WordPress permanently deletes posts, pages, attachments, and comments, from the trash bin. The default is 30 days:

```
define( 'EMPTY_TRASH_DAYS', 30 ); // 30 days

```

To disable trash set the number of days to zero.

```
define( 'EMPTY_TRASH_DAYS', 0 ); // Zero days

```

**Note:** WordPress will not ask for confirmation when someone clicks on “Delete Permanently” using this setting.

### Automatic Database Optimizing

There is automatic database repair support, which you can enable by adding the following define to your `wp-config.php` file.

Note: This should only be enabled if needed and disabled once the issue is solved. When enabled, a user does not need to be logged in to access the functionality, since its main intent is to repair a corrupted database and users can often not login when the database is corrupt.

```
define( 'WP_ALLOW_REPAIR', true );

```

The script can be found at `{$your_site}/wp-admin/maint/repair.php`.

### DO\_NOT\_UPGRADE\_GLOBAL\_TABLES

A **DO\_NOT\_UPGRADE\_GLOBAL\_TABLES** define prevents [dbDelta()](#reference/functions/dbdelta) and the upgrade functions from doing expensive queries against global tables.

Sites that have large global tables (particularly users and usermeta), as well as sites that share user tables with bbPress and other WordPress installs, can prevent the upgrade from changing those tables during upgrade by defining **DO\_NOT\_UPGRADE\_GLOBAL\_TABLES** to true. Since an ALTER, or an unbounded DELETE or UPDATE, can take a long time to complete, large sites usually want to avoid these being run as part of the upgrade so they can handle it themselves. Further, if installations are sharing user tables between multiple bbPress and WordPress installs you may to want one site to be the upgrade master.

```
define( 'DO_NOT_UPGRADE_GLOBAL_TABLES', true );

```

### View All Defined Constants

PHP has a function that returns an array of all the currently defined constants with their values.

```
print_r( @get_defined_constants() );

```

### Disable the Plugin and Theme File Editor

Occasionally you may wish to disable the plugin or theme file editor to prevent overzealous users from being able to edit sensitive files and potentially crash the site. Disabling these also provides an additional layer of security if a hacker gains access to a well-privileged user account.

```
define( 'DISALLOW_FILE_EDIT', true );

```

**Note**: The functionality of some plugins may be affected by the use of `current_user_can('edit_plugins')` in their code. Plugin authors should avoid checking for this capability, or at least check if this constant is set and display an appropriate error message. Be aware that if a plugin is not working this may be the cause.

### Disable Plugin and Theme Update and Installation

This will block users being able to use the plugin and theme installation/update functionality from the WordPress admin area. Setting this constant also disables the Plugin and Theme File editor (i.e. you don’t need to set DISALLOW\_FILE\_MODS and DISALLOW\_FILE\_EDIT, as on its own DISALLOW\_FILE\_MODS will have the same effect).

```
define( 'DISALLOW_FILE_MODS', true );

```

### Require SSL for Admin and Logins

**Note:** WordPress [Version 4.0](https://wordpress.org/documentation/wordpress-version/version-4-0/) deprecated FORCE\_SSL\_LOGIN. Please use FORCE\_SSL\_ADMIN.

FORCE\_SSL\_ADMIN is for when you want to secure logins and the admin area so that both passwords and cookies are never sent in the clear. See also [HTTPS](#advanced-administration/security/https) for more details.

```
define( 'FORCE_SSL_ADMIN', true );

```

### Block External URL Requests

Block external URL requests by defining WP\_HTTP\_BLOCK\_EXTERNAL as true and this will only allow localhost and your blog to make requests. The constant WP\_ACCESSIBLE\_HOSTS will allow additional hosts to go through for requests. The format of the WP\_ACCESSIBLE\_HOSTS constant is a comma separated list of hostnames to allow, wildcard domains are supported, eg `*.wordpress.org` will allow for all subdomains of wordpress.org to be contacted.

```
define( 'WP_HTTP_BLOCK_EXTERNAL', true );
define( 'WP_ACCESSIBLE_HOSTS', 'api.wordpress.org,*.github.com' );

```

### Disable WordPress Auto Updates

There might be reason for a site to not auto-update, such as customizations or host supplied updates. It can also be done before a major release to allow time for testing on a development or staging environment before allowing the update on a production site.

```
define( 'AUTOMATIC_UPDATER_DISABLED', true );

```

### Disable WordPress Core Updates

The easiest way to manipulate core updates is with the WP\_AUTO\_UPDATE\_CORE constant:

**Disable all core updates:**

```
define( 'WP_AUTO_UPDATE_CORE', false );

```

**Enable all core updates, including minor and major:**

```
define( 'WP_AUTO_UPDATE_CORE', true );

```

**Enable core updates for minor releases (default):**

```
define( 'WP_AUTO_UPDATE_CORE', 'minor' );

```

Reference: [Disabling Auto Updates in WordPress 3.7](https://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7/)

### Cleanup Image Edits

By default, WordPress creates a new set of images every time you edit an image and when you restore the original, it leaves all the edits on the server. Defining IMAGE\_EDIT\_OVERWRITE as true changes this behavior. Only one set of image edits are ever created and when you restore the original, the edits are removed from the server.

```
define( 'IMAGE_EDIT_OVERWRITE', true );

```

## Double Check Before Saving

***Be sure to check for leading and/or trailing spaces around any of the above values you entered, and DON’T delete the single quotes!***

Before you save the file, be sure to **double-check** that you have not accidentally deleted any of the single quotes around the parameter values. Be sure there is nothing after the closing PHP tag in the file. The last thing in the file should be **?&gt;** and nothing else. No spaces.

To save the file, choose **File &gt; Save As &gt; wp-config.php** and save the file in the root of your WordPress install. Upload the file to your web server and you’re ready to install WordPress!

---

# Site Architecture (v1.5) <a name="advanced-administration/wordpress/site-architecture" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/site-architecture/

The following is a description of the general site architecture for WordPress 1.5. WordPress theme developers are encouraged but not required to maintain much of the core site architecture of XHTML tags and CSS selectors. Therefore, you can just consider this to be a general outline, because your theme may be different.

## Template Driven Pages

Before we get to the [core structure](#Core_Structure) of the WordPress page architecture, you need to understand that WordPress uses [template files](https://codex.wordpress.org/Templates) to generate the final page “look” and content. For example, when viewing the front page of your WordPress site, you are actually viewing several template files:

- index.php
- header.php
- sidebar.php
- footer.php

When you view a single post page, you might be viewing the following template files:

- single.php
- header.php
- sidebar.php
- footer.php
- comments.php

On a multi-post page like categories, archives, and search, you might be viewing any combination of the following template files:

- index.php
- category.php
- 404.php
- search.php
- header.php
- sidebar.php
- footer.php

As much as possible in the following architecture specifications, we’ve specified which CSS selectors belong in which template files.

## Core Structure

The core structure of a WordPress site represents the main containers that hold the page’s content. The core structure of a WordPress site features, at a minimum:

- Header
- Sidebar/Menu
- Content
- Footer

These are the main containers in which the most important parts of the page are “contained.” Remember, the core structure is like a set of building blocks, where each unit is dependent upon the other units. If you change one, you have to change the others.

**Classic Theme**

```
<body>
  <div id="rap">
    <h1 id="header"></h1>
    <div id="content"></div>
    <div id="menu"></div>
    <p class="credit"></p>
  </div>
</body>

```

**Default Theme**

```
<body>
  <div id="page">
    <div id="header"></div>
    <div id="content" class="narrowcolumn"></div>
    <div id="sidebar"></div>
    <div id="footer"></div>
  </div><!-- end page -->
</body>

```

Please note that, while both themes make use of a sidebar, the first theme refers to it as a menu, while the other theme refers to it as a sidebar.

Perhaps the main difference between the core structures of these two themes is the use of the header and footer. For the Classic Theme, the header is in an h1 tag, and the footer is enclosed in a paragraph tag. Meanwhile in the Default Theme, the header has been placed in a div called header, while the footer has been placed in a footer div.

Both themes feature a container that encompasses or “wraps” itself around the entire page. This container (often used in combination with the body HTML tag) allows for more definitive control of the entire structure. Depending on the WordPress theme being used, this container can also be referred to as:

- page
- wrap
- rap

Some themes may add a second, third, or even fourth sidebar, creating a column effect. They may also include additional wrappers around the entire page or around specific containers. However, in all cases, the basic core structure essentially remains the same.

### The Modular Template Files

Based on the premise of building blocks, WordPress themes divide the core structure into individual blocks called [template files](https://codex.wordpress.org/Templates). These are the template files:

- Header – header.php
- Sidebar/Menu – sidebar.php
- Content – index.php, single.php, page.php, category.php, author.php, search.php, etc.
- Footer – footer.php

In each of these template files, it is possible to use the body div as an all-encompassing container for content.

When viewing a web page that uses a particular WordPress theme, the specific template files generated are dependent upon the user’s request. If a user clicks on a category tag, the category template will be used. If the user views a [page](https://wordpress.org/documentation/article/create-pages/), the page template will be used.

When these core template files are loaded in combination with the [WordPress Loop](https://codex.wordpress.org/The_Loop) and queries, a variety of templates can be generated. This allows web page developers to create individual and unique styles for each specific template.

## Interior Structures

Within these core structural containers are smaller building blocks which hold the specific content within the parent container. WordPress themes can feature a variety of these, but we are going to concentrate on the two themes that come with WordPress. (Most WordPress theme templates are based on these two themes.)

### Header

The header is the structure that traditionally sits at the top of a web page. It contains the title of the website. It may also be referred to as a masthead, head, title, or banner. In all WordPress themes, the header is found within the header.php template file.

The Classic Theme features the simplest header code:

```
<h1 id="header"></h1>

```

The Default Theme has a more complex header code:

```
<div id="header">
  <div id="headerimg">
    <h1></h1>
    <div class="description"></div>
  </div>
</div>

```

While the styles for the Classic Theme are found within the theme’s style.css file, styles for the Default Theme are found both within the style.css file and the of the header.php [template file](https://codex.wordpress.org/Templates). Working with these styles is extensively covered in the article [Designing Headers](https://codex.wordpress.org/Designing_Headers).

### Content

The content container in WordPress plays a critical role, because it holds the [WordPress Loop](https://codex.wordpress.org/The_Loop). The WordPress Loop processes each post that will be displayed on the current page. These posts are then formatted according to how they match specific criteria within the Loop tags.

The Classic Theme has the simplest content structure:

```
<div id="content">
  <h2>Date</h2> 
  <div class="post" id="post-1">
    <h3 class="storytitle">Post Title</h3>
    <div class="meta">Post Meta Data</div>
    <div class="storycontent">
      <p>Welcome to WordPress.</p>
    </div>
    <div class="feedback">Comments (2)</div>
  </div>
</div>

```

The Classic Theme hosts containers for the Date, Title, Post Meta Data, Post Content, and Feedback (number of comments). It also showcases a powerful feature: the ability to individually style a single post’s look.

```
<div class="post" id="post-1">

```

The post CSS class selector applies the post styles to this container. It is important to note that the post class selector also has an ID which is generated automatically by WordPress. Here is an example of the code that can be used to display a class selector’s ID:

```
<div class="post" id="post-<?php the_ID(); ?>">

```

The use of the template tag [the\_ID()](#reference/functions/the_ID) displays the ID number for the post. This unique identifier can be used for internal page links as well as for styles. For instance, an individual post could have a style for post-1, as well as for post-2. While it is a bit excessive to feature a style for every post, there may be a post or two that you need to have look a little different. Some plugins may use this identifier to automatically change the look of different posts, too.

The content container for the Default Theme features a **multi-post view** (e.g. for the front page, categories, archives, and searches) as well as a **single post view** for single posts. The multi-post view looks like this:

```
<div id="content" class="narrowcolumn">
  <div class="post" id="post-1">
    <h2>Post Title</h2>
    <small>Date</small>
    <div class="entry">
      <p>Post Content.</p>
    </div>
    <p class="postmetadata">Post Meta Data Section</p>
  </div>
  <div class="navigation">
    <div class="alignleft">Previous Post</div>
    <div class="alignright">Next Post</div>
  </div>
</div>

```

There is a lot going on here. Let’s break it down.

### Breakdown of Content Example

```
<div id="content" class="narrowcolumn">

```

The **multi-post view** features a content container with a class called narrowcolumn, while the **single post view** features a class called widecolumn. The sidebar for the single post view is not generated on that page, allowing the post to be viewed across the width of the entire content area.

```
<div class="post" id="post-1">

```

Like the Classic Theme, this division sets up the style for post and the identifier for post-X, with X representing the post’s unique ID number. This allows the user to customize the specific post’s look.

```
<h2>Post Title</h2>

```

This encompasses the post’s title code, styled by the `<h2>` tag.

```
<small>Date</small>

```

The date code is surrounded and styled by the small tag.

```
<div class="entry">

```

The post content is styled with a combination of the styles within the entry CSS selectors, and the paragraph tag.

```
<p class="postmetadata">Post Meta Data Section</p>

```

The [Post Meta Data Section](https://codex.wordpress.org/Post_Meta_Data_Section) contains data details about the post, such as the date, time, and categories the post belongs to.

```
<div class="navigation">

```

The [Next and Previous Links](https://codex.wordpress.org/Next_and_Previous_Links) are styled in the navigation div. They also include classes for alignleft (for the Previous Post) and alignright (for the Next Post in chronological order).

These elements are shifted around in the **single post view** content structure:

```
<div id="content" class="widecolumn">
  <div class="navigation">
    <div class="alignleft"></div>
    <div class="alignright"></div>
  </div>
  <div class="post" id="post-1">
    <h2>Post Title</h2>
    <div class="entrytext">
      <p>Post content.</p>
      <p class="postmetadata alt">
        <small>Post Meta Data</small>
      </p>
    </div>
  </div>
</div>

```

In the absence of the sidebar, the widecolumn class has been formatted to stretch content across the page. The navigation div has been moved up to the top. And the Post Meta Data is now incorporated into the entrytext parent container, and has been styled differently, with an alt class selector added.

These two examples from the Default Theme give you just a glimpse into the myriad ways your WordPress site can be customized.

#### Comments

Comments may be featured in the single post view (using the comments.php template file) or in a popup window (using the comments-popup.php template file). The overall styles for these two types of comments are basically the same.

##### Classic Theme Comments

```
<h2 id="comments">1 Comment
  <a href="#postcomment" title="Leave a comment">»</a></h2>
  <ol id="commentlist">
    <li id="comment-1">
      <p>Hi, this is a comment.</p>
      <p><cite>Comment by Person</cite> </p>
    </li>
  </ol>
  <p>
    <a href='https://example.com/archives/name-of-post/feed/'><abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post.</a>
    <a href="https://example.com/name-of-post/trackback/" rel="trackback">TrackBack <abbr title="Uniform Resource Identifier">URI</abbr></a>
  </p>
  <h2 id="postcomment">Leave a comment</h2>
  <form action="https://example.com/blog/wp-comments-post.php" method="post" id="commentform">
    <p>
      <input type="text" name="author" id="author" value="" size="22" tabindex="1">
      <label for="author"><small>Name (required)</small></label>
    </p>
    <p>
      <input type="text" name="email" id="email" value="" size="22" tabindex="2">
      <label for="email"><small>Mail (will not be published) required)</small></label>
    </p>
    <p>
      <input type="text" name="url" id="url" value="" size="22" tabindex="3">
      <label for="url"><small>Website</small></label>
    </p>
    <p>
      <small><strong>XHTML:</strong> List of Tags you can use in comments</small>
    </p>
    <p>
      <textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
    </p>
    <p>
      <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment">
      <input type="hidden" name="comment_post_ID" value="1">
    </p>
  </form>
</div>

```

While individual sections of the comments feature styling reference, the Classic Theme has no general comment division or group style reference, one could be easily added.

**\#comments h2**

Styles the title at the top of the comments list which says “Comments 4 Leave a Comment”, with the latter part of the sentence in a link that jumps to `<h2 id="postcomment">Leave a comment</h2>`.

**\#comment-n**

Comments are given a unique ID number, signified here by the letter n. This allows them to be styled individually.

**\#comments ol**

This begins the **ordered list** of the comments, counting down from one, and sets the overall style of the comments list.

**\#comments li**

Style reference for each comment on the list.

**\#comments p**

This paragraph tag styles the actual comments on the comment list.

**\#comment cite**

This use of the cite controls the look of the commenter’s name. It usually states “Name says:” in the comments list.

**\#comments h2** or **\#postcomment**

The h2 heading can be styled two ways, as #comments h2 or #postcomment. The latter is used by the “Leave a Comment” link from the top of the comments section, too.

**\#commentform**

Style reference for the overall “form” for inputting comments. Each input area has it’s own ID.

**\#author**

ID reference for the comment author’s input area.

**\#comments small**

The `<small>` tag is used in several places in the Classic Theme. This usage surrounds the text in the **comment submit form** and the text for the **list of tags** that can be used in the comment.

**\#email**

ID reference for the comment author’s email.

**\#url**

ID reference for the comment author’s URL.

**\#comment**

ID reference for the comment input textarea. It does not style the final generated comment, just the input box.

**\#comment #submit**

There are two submit buttons in the Classic Theme, for search and comment submissions. This is the submit comment button.

##### Default Theme Comments

The Default Theme comments feature a loop query within the comments.php and comments-popup.php which changes some of the information depending upon if comments are open, closed, and any present. If the comments are open or closed and no comments have been made, this information will be displayed within the `<h3 id="comments">` tag.

```
<h3 id="comments">One Response to "Hello world!"</h3> 
<ol class="commentlist">
  <li class="alt" id="comment-1">
    <cite>
      <a href="https://example.org/" rel="external nofollow">Mr WordPress</a>
    </cite> Says:<br>
    <small class="commentmetadata">
      <a href="#comment-1" title="">Date and Time</a>
    </small>
    <p>Hi, this is a comment.</p>
  </li>
</ol>
<h3 id="respond">Leave a Reply</h3>
<form action="https://example.com/blog/wp-comments-post.php" method="post" id="commentform">
  <p>
    <input name="author" id="author" value="" size="22" tabindex="1" type="text">
    <label for="author">
      <small>Name (required)</small>
    </label>
  </p>
  <p>
    <input name="email" id="email" value="" size="22" tabindex="2" type="text">
    <label for="email">
      <small>Mail (will not be published) required)</small>
    </label>
  </p>
  <p>
    <input name="url" id="url" value="" size="22" tabindex="3" type="text">
    <label for="url">
      <small>Website</small>
    </label>
  </p>
  <p>
    <small><strong>XHTML:</strong> You can use these tags:....</small>
  </p>
  <p>
    <textarea name="comment" id="comment" cols="100" rows="10" tabindex="4">
    </textarea>
  </p>
  <p>
    <input name="submit" id="submit" tabindex="5" value="Submit Comment" type="submit">
    <input name="comment_post_ID" value="1" type="hidden">
  </p>
</form>
</div>

```

While individual sections of the comments feature styling reference, the Default Theme has no general comment division or group style reference, though one could be easily added.

**h3 #comments**

Styles the `<h3>` tag for the “number of responses to the post” heading.

**\#commentlist ol**

Styles the “ordered list” of the comments list.

**.alt li** and **\#comment-n**

The comment list items have two style references. The first one is the class alt and the second is the comment ID number signified here by the letter n. This allows them to be styled individually.

**cite**

The tag cite frames the “Name says:” and link to the comment author’s URL.

**.commentmetadata small**

The `<small>` tag has a class of commentmetadata which allows the date and time of the post to be styled.

**ol #commentlist p**

Styles the paragraph within the ordered list of comments.

**\#respond h3**

Styles the heading for “Leave a Reply”.

**\#commentform**

Style reference for the overall “form” for inputting comments. Each input area has it’s own ID.

**\#author**

ID reference for the comment author’s input area.

**\#comments small**

The `<small>` tag is used in several places in the Classic Theme. This usage surrounds the text in the **comment submit form *and the text for the*** *list of tags’* that can be used in the comment.

**\#email**

ID reference for the comment author’s email.

**\#url**

ID reference for the comment author’s URL.

**\#comment**

ID reference for the comment input textarea. It does not style the final generated comment, just the input box.

**\#comment #submit**

There are two submit buttons in the Classic Theme, for search and comment submissions. This is the submit comment button.

##### Popup Comments

The Classic and Default Themes’ `comments-popup.php` template file is essentially the same. They use the layout for the [Classic Theme comment structure](#Default_Theme_Comments). While the Classic Theme uses `<h2>` headings and the Default Theme uses `<h3>` headings for the title headings in their comments, in the comments-popup.php template file, they both use the `<h2>` heading tag.

```
<body id="commentspopup">
  <h1 id="header"></h1>
  <h2 id="comments">Comments</h2>
  ....Classic Theme comment section.....
  ...Classic Theme footer....

```

The body tag sets the style for the overall page with `#commentspopup`. The `<h2>` heading begins the comments section.

If you make modifications to the structure of the tags within the header and footer of the overall Theme, ensure those structural changes are applied to the comments popup template, especially if you will be [releasing the Theme to the public](https://codex.wordpress.org/Designing_Themes_for_Public_Release).

### Sidebar

As you saw with the Default Theme, the sidebar can be visible or not, depending upon the template file in use. The sidebar, in general, can be simple or complex. WordPress Themes often feature information within the sidebar in **nested lists**. There is a step-by-step guide for the sidebar at [Customizing Your Sidebar](https://codex.wordpress.org/Customizing_Your_Sidebar) and more information on [Styling Lists with CSS](https://codex.wordpress.org/Styling_Lists_with_CSS), too.

In general, the WordPress sidebar features titles of the various sections within a list, with the section items in a nested list below the title.

The Classic Theme sidebar looks like this, with the links removed for simplification:

```
<div id="menu">
  <ul>
    <li class="pagenav">Pages
      <ul>
        <li class="page_item">Contact</li>
        <li class="page_item">About</li>
      </ul>
    </li>
    <li id="linkcat-1"><h2>Blogroll</h2>
      <ul>
        <li>Blogroll Link 1</li>
        <li>Blogroll Link 1</li>
        <li>Blogroll Link 1</li>
      </ul>
    </li>
    <li id="categories">Categories:
      <ul>
        <li>Category Link 1</li>
        <li>Category Link 2</li>
      </ul>
    </li>
    <li id="search">
      <label for="s">Search:</label>   
      <form id="searchform" method="get" action="/index.php">
        <div>
          <input type="text" name="s" id="s" size="15"><br>
          <input type="submit" id="searchsubmit" value="Search">
        </div>
      </form>
    </li>
    <li id="archives">Archives: 
      <ul>
        <li>Archives Month Link 1</li>
        <li>Archives Month Link 2</li>
      </ul>
    </li>
    <li id="meta">Meta:
      <ul>
        <li>RSS Feed Link</li>
        <li>RSS Comments Feed Link</li>
        <li>XHTML Validator</li>
        <li>XFN Link</li>
        <li>WordPress Link</li>
      </ul>
    </li>
  </ul>
</div>

```

Most of these are self-explanatory. Each set of links has its own CSS selector: [Pages](https://wordpress.org/documentation/article/create-pages/), categories, archives, search, and meta.

#### Pages and Link Categories

The [Pages](https://wordpress.org/documentation/article/create-pages/) and [Links](https://codex.wordpress.org/Links_Manager) category, labeled “Blogroll”, uses the [](#reference/functions/get_links_list) and [](#reference/functions/wp_list_pages) template tags which automatically generates a heading.

For the **Links** category, it generates an h2 heading for that set of links. This means you can style the menu h2 heading to look differently from the rest of the headings, or, if you want them to all look the same, make sure that the menu h2 style *matches* the rest of the category styles which are not automatically generated.

The **Pages** template tag generates pagenav as the heading and then identifies the pages in a new way. As a general list viewed on multi-post and single post views, the Page list items feature a class=”page\_item” to style those links. When viewing an individual Page, that Page’s link will change to class=”current\_page\_item”, which can then be styled to look differently from the rest of the Page links.

#### Categories, Archives, and Meta

The other sidebar section titles, *categories*, *archives*, *meta*, and others, do not use template tags which generate their own titles. These are set inside of PHP statements which “print” the text on the page. While these could be put inside of [heading tags](https://codex.wordpress.org/Designing_Headings), WordPress uses the `_e()` function to display or `echo` the text titles while also marking the text as a possible target for language translation. If you will be [developing your theme](https://codex.wordpress.org/Theme_Development) for [public release](https://codex.wordpress.org/Designing_Themes_for_Public_Release), using the echo functions is highly recommended.

You can style these individually or all the same. Some Themes, like the Default Theme, put all these in `<h2>` headings so the list headings will all look the same. Therefore, they may or may not use style references for each section. You may add them if you need them to change the look of each section of links.

#### Search Form

The search form is found within the searchform.php. It may be found in different locations within the sidebar. To style the overall search form, use the search ID. Here is a list of the individual areas of the search form which may be styled by default. You may add style classes to gain more control over the look of your search form.

```
<li id="search">
  <label for="s">Search:</label>   
  <form id="searchform" method="get" action="/index.php">
    <div>
      <input type="text" name="s" id="s" size="15"><br>
      <input type="submit" id="searchsubmit" value="Search">
    </div>
  </form>
</li>

```

**\#search**

The overall style for the search form.

**\#search label**

Used to style the label tag, if necessary.

**\#searchform**

Used to style the form itself.

**\#search div**

This unlabeled div is a child container of the parent container search and maybe styled from within that selector.

**\#searchform input**

To style the input area for the search, this selector combination will work.

**\#searchsubmit**

*Used by the Default Theme*, this selector may be used to style the **search** or **submit** button.

The search form area, input, and button can be styled in many ways, or left with the default input and “button” look.

#### Meta Feed Links

The Meta links may be shown as text or icons representing the various links. The XHTML and CSS validation links may use the W3 icons. The various Feeds can also be represented as icons. Or left as text. It’s up to you. Use of the feeds within your sidebar with text or icons is covered by the article [WordPress Feeds](https://wordpress.org/documentation/article/wordpress-feeds/).

### Footer

The footer is found within the footer.php template file. In both the Default and Classic Themes, the footer contains little information.

**Classic Theme**

```
<p class="credit">
  <!--15 queries. 0.152 seconds. -->
  <cite>Powered by <a href='https://wordpress.org' title='Powered by WordPress, state-of-the-art semantic personal publishing platform.'> <strong>WordPress</strong></a></cite>
</p>
</div>

```

The footer’s content is styled with the credit class and the paragraph and cite tags.

The tag displays the number of mysql queries used on the page and the time it took for the page to load, in HTML commented code. It is there for the administrator’s convenience and use. It is only visible within the page’s source code. If you would like to display this visible on the page, remove the [comments](https://codex.wordpress.org/Commenting_Code). It’s look will be influenced by the credit class style of the paragraph tag. On the template file, it looks like this:

```
<!--<?php echo $wpdb->num_queries; ?> queries. 
<?php timer_stop(1); ?> seconds. -->

```

**Default Theme**

```
<div id="footer">
  <p>Blogging in the WordPress World is proudly powered by <a href="https://wordpress.org/">WordPress</a><br>
    <a href="feed:http://example.com/feed/">Entries (RSS)</a> and <a href="feed:https://example.com/comments/feed/"> Comments (RSS)</a>.
    <!-- 18 queries. 0.186 seconds. -->
  </p>
</div>

```

The Default Theme’s footer is styled by the footer ID and the paragraph tag. While the footer area itself maybe styled by the footer, the paragraph tag controls the text within it. To style the paragraph tag differently within the footer than the rest of your page:

**\#footer p {styles}**

## Resources

- [CSS](#advanced-administration/wordpress/css)
- [Finding Your CSS Styles](https://codex.wordpress.org/Finding_Your_CSS_Styles)
- [CSS Troubleshooting](https://codex.wordpress.org/CSS_Troubleshooting)
- [Using Themes](https://wordpress.org/documentation/article/worik-with-themes/)
- [Theme Development](https://codex.wordpress.org/Theme_Development)
- [Designing Themes for Public Release](https://codex.wordpress.org/Designing_Themes_for_Public_Release)
- [WordPress Lessons](https://learn.wordpress.org/)
- [Blog Design and Layout](https://codex.wordpress.org/Blog_Design_and_Layout)
- [Stepping Into Template Tags](https://codex.wordpress.org/Stepping_Into_Template_Tags)

---

# Post Formats <a name="advanced-administration/wordpress/post-formats" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/post-formats/

## Intro

**Post Formats** is a [theme feature](https://codex.wordpress.org/Theme_Features) introduced with [Version 3.1](https://wordpress.org/documentation/wordpress-version/version-3-1/). A Post Format is a piece of meta information that can be used by a theme to customize its presentation of a post. The Post Formats feature provides a standardized list of formats that are available to all themes that support the feature. Themes are not required to support every format on the list. New formats cannot be introduced by themes or even plugins. The standardization of this list provides both compatibility between numerous themes and an avenue for external blogging tools to access this feature in a consistent fashion.

In short, with a theme that supports Post Formats, a blogger can change how each post looks by choosing a Post Format from a radio-button list.

Using **Asides** as an example, in the past, a category called Asides was created, and posts were assigned that category, and then displayed differently based on styling rules from [post\_class()](#reference/functions/post_class) or from [in\_category(‘asides’)](#reference/functions/in_category). With **Post Formats**, the new approach allows a theme to add support for a Post Format (e.g. [add\_theme\_support(‘post-formats’, array(‘aside’))](#reference/functions/add_theme_support)), and then the post format can be selected in the Publish meta box when saving the post. A function call of [get\_post\_format($post-&gt;ID)](#reference/functions/get_post_format) can be used to determine the format, and [post\_class()](#reference/functions/post_class) will also create the “format-asides” class, for pure-css styling.

## Supported Formats

The following Post Formats are available for users to choose from, if the theme enables support for them.

Note that while the actual post content entry won’t change, the theme can use this user choice to display the post differently based on the format chosen. For example, a theme could leave off the display of the title for a “Status” post. How things are displayed is entirely up to the theme, but here are some general guidelines.

- **aside**: Typically styled without a title. Similar to a Facebook note update.
- **gallery**: A gallery of images. Post will likely contain a gallery shortcode and will have image attachments.
- **link**: A link to another site. Themes may wish to use the first `<a href="">` tag in the post content as the external link for that post. An alternative approach could be if the post consists only of a URL, then that will be the URL and the title (`post_title`) will be the name attached to the anchor for it.
- **image**: A single image. The first `<img>` tag in the post could be considered the image. Alternatively, if the post consists only of a URL, that will be the image URL and the title of the post (`post_title`) will be the title attribute for the image.
- **quote**: A quotation. Probably will contain a blockquote holding the quote content. Alternatively, the quote may be just the content, with the source/author being the title.
- **status**: A short status update, similar to a Twitter status update.
- **video**: A single video or video playlist. The first `<video>` tag or object/embed in the post content could be considered the video. Alternatively, if the post consists only of a URL, that will be the video URL. May also contain the video as an attachment to the post, if video support is enabled on the blog (like via a plugin).
- **audio**: An audio file or playlist. Could be used for Podcasting.
- **chat**: A chat transcript, like so:

```
John: foo
Mary: bar
John: foo 2

```

Note: When writing or editing a Post, Standard is used to designate that no Post Format is specified. Also if a format is specified that is invalid then standard (no format) will be used.

## Function Reference

**Main Functions**: [set\_post\_format()](#reference/functions/set_post_format), [get\_post\_format()](#reference/functions/get_post_format), [has\_post\_format()](#reference/functions/has_post_format).

**Other Functions**: [get\_post\_format\_link()](#reference/functions/get_post_format_link), [get\_post\_format\_string()](#reference/functions/get_post_format_string).

## Adding Theme Support

Themes need to use [add\_theme\_support()](#reference/functions/add_theme_support) in the *functions.php* file to tell WordPress which post formats to support by passing an array of formats like so:

```
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

```

Note that you must call this before the [init](#reference/hooks/init) hook gets called! A good hook to use is the [after\_setup\_theme](#reference/hooks/after_setup_theme) hook.

## Adding Post Type Support

Post Types need to use [add\_post\_type\_support()](#reference/functions/add_post_type_support) in the *functions.php* file to tell WordPress which post formats to support:

```
// add post-formats to post\_type 'page'
add_post_type_support( 'page', 'post-formats' );

```

Next example registers custom post type `my_custom_post_type`, and add Post Formats.

```
// register custom post type 'my_custom_post_type'
add_action( 'init', 'create_my_post_type' );
function create_my_post_type() {
  register_post_type( 'my_custom_post_type',
    array(
      'labels' => array( 'name' => __( 'Products' ) ),
      'public' => true
    )
  );
}

//add post-formats to post_type 'my_custom_post_type'
add_post_type_support( 'my_custom_post_type', 'post-formats' );

```

Or in the function [register\_post\_type()](#reference/functions/register_post_type), add `post-formats`, in `supports` parameter array. Next example is equivalent to above one.

```
// register custom post type 'my_custom_post_type' with 'supports' parameter
add_action( 'init', 'create_my_post_type' );
function create_my_post_type() {
  register_post_type( 'my_custom_post_type',
    array(
      'labels' => array( 'name' => __( 'Products' ) ),
      'public' => true,
      'supports' => array('title', 'editor', 'post-formats')
    )
  );
}

```

## Using Formats

In the theme, make use of [get\_post\_format()](#reference/functions/get_post_format) to check the format for a post, and change its presentation accordingly. Note that posts with the default format will return a value of FALSE. Or make use of the [has\_post\_format()](#reference/functions/has_post_format) [conditional tag](https://codex.wordpress.org/Conditional_Tags):

```
if ( has_post_format( 'video' )) {
  echo 'this is the video format';
}

```

An alternate way to use formats is through styling rules. Themes should use the [post\_class()](#reference/functions/post_class) function in the wrapper code that surrounds the post to add dynamic styling classes. Post formats will cause extra classes to be added in this manner, using the “format-foo” name.

For example, one could hide post titles from status format posts by putting this in your theme’s stylesheet:

```
.format-status .post-title {
  display:none;
}

```

### Suggested Styling

Although you can style and design your formats to be displayed any way you see fit, each of the formats lends itself to a certain type of “style”, as dictated by modern usage. It is well to keep in mind the intended usage for each format, as this will lend them towards being easily recognized as a specific type of thing visually by readers.

For example, the aside, link, and status formats will typically be displayed without title or author information. They are simple, short, and minor. The aside could contain perhaps a paragraph or two, while the link would probably be only a sentence with a link to some URL in it. Both the link and aside might have a link to the single post page (using [the\_permalink()](#reference/functions/the_permalink)) and would thus allow comments, but the status format very likely would not have such a link.

An image post, on the other hand, would typically just contain a single image, with or without a caption/text to go along with it. An audio/video post would be the same but with audio/video added in. Any of these three could use either plugins or standard [Embeds](https://wordpress.org/documentation/article/embeds/) to display their content. Titles and authorship might not be displayed for them either, as the content could be self-explanatory.

The quote format is especially well suited to posting a simple quote from a person with no extra information. If you were to put the quote into the post content alone, and put the quoted person’s name into the title of the post, then you could style the post so as to display [the\_content()](#reference/functions/the_content) by itself but restyled into a blockquote format, and use [the\_title()](#reference/functions/the_title) to display the quoted person’s name as the byline.

A chat in particular will probably tend towards a monospaced type display, in many cases. With some styling on the `.format-chat`, you can make it display the content of the post using a monospaced font, perhaps inside a gray background div or similar, thus distinguishing it visually as a chat session.

### Formats in a Child Theme

[Child Themes](#themes/advanced-topics/child-themes) inherit the post formats defined by the parent theme. Calling [add\_theme\_support()](#reference/functions/add_theme_support) for post formats in a child theme must be done at a later priority than that of the parent theme and will **override** the existing list, not add to it.

```
add_action( 'after_setup_theme', 'childtheme_formats', 11 );
function childtheme_formats() {
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link' ) );
}

```

Calling [remove\_theme\_support(‘post-formats’)](#reference/functions/remove_theme_support) will remove it all together.

## Backwards Compatibility

If your plugin or theme needs to be compatible with earlier versions of WordPress, you need to add terms named `post-format-$format` to the `post_format` taxonomy. For example,

```
wp_insert_term( 'post-format-aside', 'post_format' );

```

You must also register the `post_format` taxonomy with [register\_taxonomy()](#reference/functions/register_taxonomy).

## Source File

- [wp-includes/post-formats.php](https://core.trac.wordpress.org/browser/tags/4.4.2/src/wp-includes/post-formats.php#L0)

## External Resources

- [Styling Chat Transcript with WordPress Custom Post Format](https://www.narga.net/styling-wordpress-chat-transcript/)
- [Post Types and Formats and Taxonomies, oh my!](http://ottopress.com/2010/post-types-and-formats-and-taxonomies-oh-my/)
- [On standardized Post Formats](https://nacin.com/2011/01/27/on-standardized-post-formats/)
- [Post Formats vs. Post Types](https://markjaquith.wordpress.com/2010/11/12/post-formats-vs-custom-post-types/)
- [Smarter Post Formats?](https://dougal.gunters.org/blog/2010/12/10/smarter-post-formats/)
- [WordPress Theme Support Generator](https://generatewp.com/theme-support/)

---

# Cookies <a name="advanced-administration/wordpress/cookies" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/cookies/

WordPress uses cookies, or tiny pieces of information stored on your computer, to verify who you are. There are cookies for logged in users and for commenters.

## Enable Cookies in Your Browser

WordPress uses cookies for authentication. That means that in order to log in to your WordPress site, you must have cookies enabled in your browser.

You can find information on how to manage those for the most popular browsers here:  
– [Google Chrome](https://support.google.com/chrome/answer/95647)  
– [Mozilla Firefox](https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences)  
– [Microsoft Edge](https://privacy.microsoft.com/en-us/windows-10-microsoft-edge-and-privacy)  
– [Safari](https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac)  
– [Opera](https://help.opera.com/en/latest/web-preferences/#cookies)  
– [Brave](https://brave.com/privacy/browser/)

## User’s Cookie

Users are those people who have registered an account with the WordPress site.

On login, WordPress uses the `wordpress_[hash]` cookie to store your authentication details. Its use is limited to the Administration Screen area, `/wp-admin/`.

After login, WordPress sets the `wordpress_logged_in_[hash]` cookie, which indicates when you’re logged in, and who you are, for most interface use.

WordPress also sets a few `wp-settings-{time}-[UID]` cookies. The number on the end is your individual user ID from the users database table. This is used to customize your view of admin interface, and possibly also the main site interface.

The cookies lifetime can be adjusted with the `auth_cookie_expiration` hook. An example of this can be found at [what’s the easiest way to stop wp from ever logging me out](https://wordpress.stackexchange.com/questions/515/whats-the-easiest-way-to-stop-wp-from-ever-logging-me-out).

### Non-Version-Specific Data

The actual cookies contain your username, the expiration time and *hashed* data that ensures you have a valid session. A *hash* is the result of a specific mathematical formula applied to some data. In case of these cookies, only 4 characters of your hashed password are stored in a hash in your cookie. This ensures that it is impossible to retrieve your password from the cookie. It also ensures that any cookie will invalidated whenever your password is changed.

WordPress uses the two cookies to bypass the password entry portion of `wp-login.php`. If WordPress recognizes that you have valid, non-expired cookies, you go directly to the [WordPress Administration Screen](https://wordpress.org/documentation/article/administration-screens). If you don’t have the cookies, or they’re expired, or in some other way invalid (like you edited them manually for some reason), WordPress will require you to log in again, in order to obtain new cookies.

## Commenter’s Cookie

When visitors comment on your blog, they get cookies stored on their computers too. This is purely a convenience, so that the visitor won’t need to re-type all their information again when they want to leave another comment. Three cookies are set for commenters:

- `comment_author_{HASH}`
- `comment_author_email_{HASH}`
- `comment_author_url_{HASH}`

The commenter cookies are set to expire a little under one year from the time they’re set.

## WordPress Test Cookie

WordPress will set a temporary cookie named `wordpress_test_cookie` which is to probe the ability of WordPress to set cookies. If writing this cookie fails, you will get the following error message “Cookies are blocked or not supported by your browser.”

In case you get this after moving your website, always try to delete your cookies and if you are using a caching plugin, the server cache. This will solve temporary issues.

## Language Cookie

WordPress allows you to alter the language of all translatable strings on login. For this measure WordPress will set a cookie named `wp_lang` which is a session cookie and will store the language key of the selected language.

## References

- [Wikipedia: Cookies](https://en.wikipedia.org/wiki/HTTP_cookie)
- [RFC2965](http://www.faqs.org/rfcs/rfc2965.html)
- [PHP cookie documentation](https://www.php.net/manual/en/features.cookies.php)

---

# Update Services <a name="advanced-administration/wordpress/update-services" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/update-services/

Update Services are tools you can use to let other people know you’ve updated your blog. WordPress automatically notifies popular Update Services that you’ve updated your blog by sending a [XML-RPC](https://xmlrpc.com/) [ping](https://wordpress.org/documentation/article/glossary/#pingback) each time you create or update a post. In turn, Update Services process the ping and updates their proprietary indices with *your* update.

## Common Usage

Most people use [Ping-o-Matic](https://pingomatic.com/) which, with just one “ping” from you, will let many other services know that you’ve updated. As for why, Ping-O-Matic puts it best:

> Ping-O-Matic is a service to update different search engines that your blog has updated.  
>  We regularly check downstream services to make sure that they’re legit and still work. So while it may appear like we have fewer services, they’re the most important ones.

If you do not want the update services to be pinged, remove all the update service URIs listed under “Update Services” on the [Settings](https://wordpress.org/documentation/article/administration-screens/#settings-configuration-settings)-&gt;[Writing](https://wordpress.org/documentation/article/settings-writing-screen/) administration screen of your WordPress installation.

![Screenshot of the Update Services screen.](https://i0.wp.com/wordpress.org/documentation/files/2018/10/update_service.png?ssl=1)

Certain web hosts – particularly free ones – disable the PHP functions used to alert update services. If your web host prevents pings, you should stop WordPress from attempting to ping.

## XML-RPC Ping Services

```
http://rpc.pingomatic.com
http://rpc.twingly.com
http://www.blogdigger.com/RPC2
http://ping.blo.gs/
http://ping.feedburner.com
http://rpc.weblogs.com/RPC2
http://www.pingmyblog.com

```

## Alternatives

An alternative is [Feed Shark](https://feedshark.brainbliss.com/), which pings over 60 services for free.

## WordPress Multisite Network

By default, editing the Ping Services for a WordPress Multisite network site is disabled. This can be re-enabled with a plugin such as the [Activate Update Services](https://wordpress.org/plugins/activate-update-services/) plugin.

---

# Editing Files <a name="advanced-administration/wordpress/edit-files" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/edit-files/

There are times when you will need to edit WordPress files, especially if you want to change your [WordPress Theme](https://wordpress.org/documentation/article/worik-with-themes/). WordPress features a [built-in editor](#advanced-administration/wordpress/edit-files) that allows you to edit files online, using any internet browser. You can also edit files copied or stored on your computer, and then upload them to your site using an [FTP client](#advanced-administration/upgrade/ftp).

Before editing any of your WordPress files, be sure to do the following:

- Work from copies of backup files when possible, and make sure that you [back up your information](#advanced-administration/security/backup) frequently–while you work, and whenever you make changes. Remember to keep your backups in a safe place!
- When working online, you need to set the appropriate [file permissions](#advanced-administration/server/file-permissions) so that you can modify and save files. If you see a note at the bottom of the WordPress editor panel that says *If this file was writable, you could edit it…* this means that you need to change the file permissions before you can make any changes.
- When modifying files outside the built-in plugin and theme editors, use a [text editor](https://wordpress.org/documentation/article/wordpress-glossary/#text-editor). **It is strongly advisable not to use a word-processing program**. Word processors change quote marks to characters, they sometimes convert specific characters, and they can also add in unwanted code. These changes can cause files to break. For similar reasons, it is also inadvisable to use certain HTML generator programs.

## Using the Theme File Editor and Plugin File Editor

WordPress contains two built-in editors that allow you to edit theme files directly from your browser. They are called the **theme file editor** and the **plugin file editor**.

Please note that, depending on the level of user privileges that you have, you may or may not be able to access these features in the administrative panel of your blog. Please contact your blog or website administrator, to have your privileges adjusted.

### Where can I find these editors?

You can find these editors in the following places, depending on your theme:

- If you are using a [Block theme](https://wordpress.org/documentation/article/block-themes/), both the Theme and Plugin File Editor will be listed under Tools.
- If you are using a Classic theme, the Theme File Editor will be listed under Appearance and the Plugin File Editor will be listed under Plugins.

You can view a file in either of these editors by accessing it from the right-hand sidebar navigation.

More information on editing themes is available at [Theme Developer Handbook](#themes).

Be aware that if the theme you edit is updated, your changes will be overwritten. To better organize your changes and protect them from updates, consider creating a [Child Theme](#themesadvanced-topics/child-themes/) in which to keep all your changes.

### What Files Can Be Edited?

The following file types (if [writable](#advanced-administration/server/file-permissions)) can be edited in the plugin editor that is built into the WordPress administrative panel:

- [HTML](https://wordpress.org/documentation/article/glossary#html)
- [PHP](https://wordpress.org/documentation/article/glossary#php)
- [CSS](https://wordpress.org/documentation/article/glossary#css)
- TXT (and related text-like files such as RTF)

In the theme editor, only writable PHP and CSS files can be edited.

### Things You Need to Know

#### Instant Changes

The changes you make to files using the WordPress editors are instant. The changes happen online, in real-time. You and any visitors to your site will see the changes, immediately.

Because of the immediate nature of the changes, it’s usually safer to edit copies of your files offline, test the file copies, and then upload your changes when they are verified.

Always make sure you have a current backup before editing files.

#### Editor Features

The built-in WordPress plugin and theme file editors are very basic, allowing you to easily view and edit plugin and theme files on your website. Please note that there are no advanced editor features such as search and replace, line numbers, syntax highlighting, or code completion.

Hint: Use your browser’s internal search bar to help find code within the visual editors.

#### File Permissions

To edit a file using the built-in WordPress plugin and theme editors, the permissions for that file must be set to writable (at least 604). You can [change the permissions](#advanced-administration/server/file-permissions) on files by using an [FTP client program](#advanced-administration/upgrade/ftp), a web-based file manager provided by your host, or from the [command-line](https://wordpress.org/documentation/article/glossary#shell) using SSH (secure shell). Your options depend on the type of access your host offers.

#### Make a Mistake? Use Backup Files

Back up all files before editing. If you make a mistake that causes errors, causes a site crash, creates a blank screen, or blocks access to your WordPress Dashboard, delete the changed file and replace it with a good copy from your backup.

No backup? Download a fresh copy of the file you edited from the original source, replace it, and start over. BACK UP FIRST.

#### Security Warning

By default, any user that logs in with administrative permissions can access the WordPress plugin and theme editors, and change any theme or plugin file on your site in real-time.

To combat accidents, errors, or even hacking, you may wish to disable the ability to edit files within the WordPress theme by adding the [DISALLOW\_FILE\_EDIT](https://wordpress.org/documentation/article/editing-wp-config-php/#disable-the-plugin-and-theme-editor) function to your `wp-config.php` file.

## Editing Files Offline

To edit files offline, you can use any of the [recommended text editors](#advanced-administration/wordpress/edit-files) to create and edit files, and an [FTP client](#advanced-administration/upgrade/ftp) to upload them. Make sure to view the results in your browser, to see if the desired changes have taken effect.

**Note**: It is not recommended to change WordPress core files other than [wp-config.php](https://wordpress.org/documentation/article/editing-wp-config-php/). If you must change anything else, take notes about your changes, and store a copy of these notes in a text file in your WordPress root directory. You should also make a backup copy of your WordPress core files, for future reference and upgrades.

## Using Text Editors

### Editors to Avoid

Editors to avoid include any do-it-yourself instant web page software (like Adobe Dreamweaver), or text processor (like Google Docs or Microsoft Word).

**Note:** If you use an external editor such as a word-processor to create and edit files, this can corrupt the file you are editing. See [text editor](https://wordpress.org/documentation/article/wordpress-glossary/#text-editor) in the glossary for a short explanation as to why you should avoid these editors.

### Text Editors

The following [text editors](https://wordpress.org/documentation/article/wordpress-glossary/#text-editor) are acceptable for file editing:

- [BBEdit](https://www.barebones.com/products/bbedit/) (Mac, Free)
- [Crimson Editor](http://www.crimsoneditor.com/) (Windows, Free)
- [CodeLobster](https://codelobster.com/) (Mac, Linux, Windows, Free)
- [EditPad](https://www.editpadpro.com/) (Windows)
- [EditPlus](https://www.editplus.com/) (Windows)
- [emacs](https://www.gnu.org/software/emacs/emacs.html) (Mac, Linux, Windows) Open-Source, Free
- [JEdit](https://jedit.org/) (Mac, Linux, Windows)
- [Notepad++](https://notepad-plus-plus.org/) (Windows) Open-Source, Free
- [PSPad](https://www.pspad.com/) (Windows) Free
- [Smultron](https://www.peterborgapps.com/smultron/) (Mac) $
- [SubEthaEdit](https://apps.apple.com/us/app/subethaedit/id728530824) (Mac) Open-Source, Free
- [Sublime Text](https://www.sublimetext.com/) (Mac, Linux, Windows) $
- [TextMate](https://macromates.com/) (Mac) $
- [TextPad](https://www.textpad.com/home) (Windows)
- [UltraEdit-32](https://www.ultraedit.com/) (Mac, Linux, Windows) $
- [vim](https://www.vim.org/) (Mac, Linux, Windows) Open-Source, Free
- [Visual Studio Code](https://code.visualstudio.com/) (Mac, Linux, Windows)
- [NetBeans](https://netbeans.apache.org/) (Mac, Linux, Windows)

---

# CSS <a name="advanced-administration/wordpress/css" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/css/

As of WordPress 6.2, you can add custom CSS in the Styles area of the Site Editor. Learn more about the [site-wide and per-block custom CSS editors](https://wordpress.org/documentation/article/styles-overview/#applying-custom-css).

WordPress relies heavily on the presentation styles within CSS. With the use of [Themes](https://wordpress.org/documentation/article/using-themes/), you have an almost infinite choice of layout options. WordPress Themes make it easy to change your website’s appearance, and open up the field to help you [create your own Theme](https://codex.wordpress.org/Theme_Development) and page layout.

[CSS](https://wordpress.org/documentation/article/glossary/#css) stands for **Cascading Style Sheets**. It allows you to store style presentation information (like colors and layout) separate from your HTML structure. This allows precision control of your website layout and makes your pages faster and easier to update.

This article briefly describes the use of CSS in WordPress, and lists some references for further information. For information on CSS itself, see [Resources for Building on WordPress#CSS](#advanced-administration/resources).

## [WordPress and CSS](#wordpress-and-css)

WordPress Themes use a combination of [template files](https://codex.wordpress.org/Templates), [template tags](https://codex.wordpress.org/Template_Tags), and CSS files to generate your WordPress site’s look.

### [Template Files](#template-files)

[Template files](https://codex.wordpress.org/Stepping_Into_Templates) are the building blocks which come together to create your site. In the [WordPress Theme structure](#advanced-administration/wordpress/site-architecture), the header, sidebar, content, and footer are all contained within individual files. They join together to create your page. This allows you to customize the building blocks. For example, in the default WordPress Theme, the multi-post view found on the front page, category, [archives](https://codex.wordpress.org/Creating_an_Archive_Index), and [search](https://codex.wordpress.org/Creating_a_Search_Page) web pages on your site, the sidebar is present. Click on any post, you will be taken to the single post view and the sidebar will now be gone. You can [choose which parts and pieces appear](https://codex.wordpress.org/The_Loop_in_Action) on your page, and customize them individually, allowing for a different header or sidebar to appear on all pages within a specific category. And more. For a more extensive introduction to Templates, see [Stepping Into Templates](https://codex.wordpress.org/Stepping_Into_Templates).

### [Template Tags](#template-tags)

Template tags are the bits of code which provide instructions and requests for information stored within the WordPress database. Some of these are highly configurable, allowing you to customize the date, time, lists, and other elements displayed on your website. You can learn more about template tags in [Stepping Into Template Tags](https://codex.wordpress.org/Stepping_Into_Template_Tags).

### [Stylesheet](#stylesheet)

The CSS file is where it all comes together. On every template file within your site there are HTML elements wrapped around your template tags and content. In the stylesheet within each Theme are rules to control the design and layout of each HTML element. Without these instructions, your page would simply look like a long typed page. With these instructions, you can move the building block structures around, making your header very long and filled with graphics or photographs, or simple and narrow. Your site can “float” in the middle of the viewer’s screen with space on the left and right, or stretch across the screen, filling the whole page. Your sidebar can be on the right or left, or even start midway down the page. How you style your page is up to you. But the instructions for styling are found in the `style.css` file within each Theme folder.

## [Custom CSS in WordPress](#custom-css-in-wordpress)

Starting with WordPress 4.7, you can now add custom CSS to your own theme from the [Appearance Customize Screen](https://wordpress.org/documentation/article/appearance-customize-screen/), without the need for additional plugins or directly editing themes and child themes. Just choose the **Additional CSS** tab when customizing your current theme to get started!

Any CSS changes you make will appear in the preview, just like other changes made in the customizer, this means you have time to tweak and perfect the look of your site, without actually changing anything until you are happy with it all!

Keep in mind that the CSS changes are tied in with your theme. This means that if you change to a new theme, your custom CSS styles will no longer be active (of course, if you change back to your previous theme, they will once again be there).

### [Why use Custom CSS?](#why-use-custom-css)

There are a few reasons why:

- If you modify a theme directly and it is updated, then your modifications may be lost. By using Custom CSS you will ensure that your modifications are preserved.
- Using Custom CSS can speed up development time.
- Custom CSS is loaded after the theme’s original CSS and thus allows overriding specific CSS statements, without having to write an entire CSS set from scratch.

## [WordPress Generated Classes](#wordpress-generated-classes)

Several classes for aligning images and block elements (`div`, `p`, `table` etc.) were introduced in WordPress 2.5: `aligncenter`, `alignleft` and `alignright`. In addition the class `alignnone` is added to images that are not aligned, so they can be styled differently if needed.

The same classes are used to align images that have a caption (as of WordPress 2.6). Three additional CSS classes are needed for the captions, and one more for accessibility. Together, the classes are:

```
/* WordPress Core
-------------------------------------------------------------- */
.alignnone {
  margin: 5px 20px 20px 0;
}

.aligncenter,
div.aligncenter {
  display: block;
  margin: 5px auto 5px auto;
}

.alignright {
  float:right;
  margin: 5px 0 20px 20px;
}

.alignleft {
  float: left;
  margin: 5px 20px 20px 0;
}

a img.alignright {
  float: right;
  margin: 5px 0 20px 20px;
}

a img.alignnone {
  margin: 5px 20px 20px 0;
}

a img.alignleft {
  float: left;
  margin: 5px 20px 20px 0;
}

a img.aligncenter {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.wp-caption {
  background: #fff;
  border: 1px solid #f0f0f0;
  max-width: 96%; /* Image does not overflow the content area */
  padding: 5px 3px 10px;
  text-align: center;
}

.wp-caption.alignnone {
  margin: 5px 20px 20px 0;
}

.wp-caption.alignleft {
  margin: 5px 20px 20px 0;
}

.wp-caption.alignright {
  margin: 5px 0 20px 20px;
}

.wp-caption img {
  border: 0 none;
  height: auto;
  margin: 0;
  max-width: 98.5%;
  padding: 0;
  width: auto;
}

.wp-caption p.wp-caption-text {
  font-size: 11px;
  line-height: 17px;
  margin: 0;
  padding: 0 4px 5px;
}

/* Text meant only for screen readers. */
.screen-reader-text {
  border: 0;
  clip: rect(1px, 1px, 1px, 1px);
  clip-path: inset(50%);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute !important;
  width: 1px;
  word-wrap: normal !important; /* Many screen reader and browser combinations announce broken words as they would appear visually. */
}

.screen-reader-text:focus {
  background-color: #eee;
  clip: auto !important;
  clip-path: none;
  color: #444;
  display: block;
  font-size: 1em;
  height: auto;
  left: 5px;
  line-height: normal;
  padding: 15px 23px 14px;
  text-decoration: none;
  top: 5px;
  width: auto;
  z-index: 100000;
  /* Above WP toolbar. */
}

```

Each Theme should have these or similar styles in its `style.css` file to be able to display images and captions properly. The exact HTML elements and class and ID values will depend on the structure of the Theme you are using.

## [Templates and CSS](#templates-and-css)

To help you understand more about how CSS works in relationship to your web page, you may wish to read some of the articles cited in these lists:

- [Using Themes](https://wordpress.org/documentation/article/using-themes/) – There are also many advanced articles in this list.
- [Templates](https://codex.wordpress.org/Templates) – Comprehensive list of WordPress Theme and Template articles.
- [Theme Development](https://codex.wordpress.org/Theme_Development) – WordPress Theme Development guide and code standards.

## [WordPress Layout Help](#wordpress-layout-help)

If you are having some problems or questions about your WordPress Theme or layout, begin by checking the website of the Theme author to see if there is an upgrade or whether there are answers to your questions. Here are some other resources:

- [Lessons on Designing Your WordPress Site](https://wordpress.org/documentation/article/wordpress-lessons/)
- [Site Design and Layout](https://codex.wordpress.org/Site_Design_and_Layout) – Comprehensive list of resources related to site design in WordPress.
- [FAQ Layout and Design](https://codex.wordpress.org/FAQ_Layout_and_Design)

## [CSS Resources](#css-resources)

- [Finding Your CSS Styles](https://codex.wordpress.org/Finding_Your_CSS_Styles)
- [CSS Troubleshooting](https://codex.wordpress.org/CSS_Troubleshooting)
- [CSS Fixing Browser Bugs](https://codex.wordpress.org/CSS_Fixing_Browser_Bugs)
- [CSS Coding Standards](#coding-standards/wordpress-coding-standards/css)
- [CSS Shorthand](https://codex.wordpress.org/CSS_Shorthand)
- [Resources for Building on WordPress#CSS](#advanced-administration/resources)
- [Conditional Comment CSS](https://codex.wordpress.org/Conditional_Comment_CSS)
- [Validating a Website](https://codex.wordpress.org/Validating_a_Website)

---

# WordPress Feeds <a name="advanced-administration/wordpress/feeds" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/feeds/

## WordPress Built-in Feeds

By default, WordPress comes with various feeds. They are generated by template tag for [bloginfo()](#reference/functions/bloginfo) for each type of feed and are typically listed in the sidebar and/or footer of most WordPress Themes. They look like this:

URL for [RDF/RSS 1.0 feed](https://web.resource.org/rss/1.0/)

```
<?php bloginfo('rdf_url'); ?>

```

URL for [RSS 0.92 feed](https://www.rssboard.org/rss-0-9-2)

```
<?php bloginfo('rss_url'); ?>

```

URL for [RSS 2.0 feed](https://www.rssboard.org/rss-specification)

```
<?php bloginfo('rss2_url'); ?>

```

URL for [Atom feed](http://www.atomenabled.org/)

```
<?php bloginfo('atom_url'); ?>

```

URL for comments RSS 2.0 feed

```
<?php bloginfo('comments_rss2_url'); ?>

```

The first four feeds display recent updates and changes to your site’s content for the different feedreaders. Of these, the RSS feeds are the most well known. The last feed example is used by RSS 2.0 feedreaders and does not show your site’s content. It only shows the comments made on your site.

To track the comments on a specific post, the [post\_comments\_feed\_link()](#reference/functions/post_comments_feed_link) template tag is used on single post pages like this:

```
<?php post_comments_feed_link('RSS 2.0'); ?>

```

There are ways to modify these feeds, and these are covered in the article on [Customizing Feeds](https://codex.wordpress.org/Customizing_Feeds).

## Adding Feeds

Not all WordPress Themes feature all of the RSS Feed types that are available through WordPress. To add a feed to your site, find the location of where the other feeds are, typically in your sidebar.php or footer.php template files of your Theme. Then add one of the tags listed above to the list, like this example:

```
<ul class="feeds">
  <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
  <li><a href="<?php bloginfo('atom_url'); ?>" title="<?php _e('Syndicate this site using Atom'); ?>"><?php _e('Atom'); ?></a></li>
  <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
</ul>

```

### Adding Graphics to Feed Links

Many people like to have a graphic representing the feed instead of words. There are now [standards](http://www.feedicons.com/) for these graphics or “buttons”, but you can [make your own](https://kalsey.com/tools/buttonmaker/) to match the look and colors on your site. ![](https://i0.wp.com/wordpress.org/documentation/files/2019/03/rssfeed.gif?ssl=1)

To add a graphic to your feed link, simply wrap the link around the graphic such as:

```
<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><img src="https://example.com/images/feed-icon-14x14.png" alt="RSS Feed" title="RSS Feed"></a>

```

### Changing Addresses

If you are currently using other webblog software and are changing to WordPress, or are moving your weblog to a new location, you can “forward” RSS readers to your new RSS feeds using file rewrites and redirects in your .htaccess file.

Edit the `.htaccess` file in your root folder; if no file exists, create one.

Here is an example for a b2 feed:

```
RewriteRule ^b2rss2.php(.*)? /wordpress/?feed=rss2 [QSA]

```

Here is an example for MovableType Users:

```
RewriteRule ^index.xml(.*)? /wordpress/?feed=rss2 [QSA]

```

---

# Multilingual WordPress <a name="advanced-administration/wordpress/multilingual" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/multilingual/

WordPress currently does not support a bilingual or multilingual blog out-of-the-box. However, plugins developed by the WordPress community make it easy to create a multilingual blog. The fourth and final phase of the WordPress Gutenberg project will add core implementation for multilingual sites as listed in the [WordPress roadmap](https://wordpress.org/about/roadmap/).

Creating a multilingual blog is basically installing WordPress in more than one language and letting the Plugin switch between them. This includes installing .mo languages files which most Plugins will require you to do manually. For more details, see [Installing WordPress in Your Language](#advanced-administration/before-install/in-your-language).

## Different types of multilingual plugins

There are a few basic types of multilingual Plugins:

1. Manage multilingual posts in one post per language. Translations are then linked together, indicating that one post is the translation of another.
2. Store all languages alternatives for each post in the same post.
3. Manage translations on the generated page instead of using a post context.
4. Link together separate WordPress sites in a network (multisite) installations for each language by pinging back and forth.

### One language per post

Multilingual plugins that assign a single language per post will let the user select the post’s language and add translations as new posts (same for pages, tag and categories).

Then, different versions of the same content are linked together to form translation groups. This grouping allows users to switch the display language.

Pros:

1. The database contents for posts remain unmodified (easy install and uninstall).
2. Everything gets translated by default. If a post includes custom fields, they’re attached to that post, so they are already associated with the language.
3. Some plugins use – for theme’s displayed terms – the language files (.mo) delivered with localizable themes. In WordPress, localization is based in [GNU gettext](https://make.wordpress.org/polyglots/handbook/#Localization_Technology) technology. So when a single post is in french, plugin switch all the terms of the theme in the same language (here french). The files can be completed with the specific terms of the site (categories titles, widget, links…). No need to re-translate all, just add specific terms and translations in target languages.
4. Other plugins that analyze contents (like related posts) keep working correctly.

Cons:

1. More complex architecture. The plugin needs to hook to many WordPress functions and filter them so that only contents that matches the language is returned.
2. Additional tables are required by some plugins – normally, to hold the translation grouping. Newer plugins likely use a custom taxonomy or post meta fields instead.
3. May cause excessive database grow and slow performance as a result. A WooCommerce-based site having a 100,000 products will have 500,000 records after translating to 5 languages. All product metas (could be tens of those per product, and also transients will be duplicated, too, so the database might become huge).

### All languages in a single post

Multilingual plugins that hold all the language contents in the same post use language meta tags to distinguish between contents in different languages. When the post is displayed, it’s first processed and only the active language content remains.

Pros:

1. Side by side editing is easily implemented.
2. Less things to break. There are no additional tables and much fewer things to modify in WordPress.
3. The search will find the same post, regardless on which language you used for the keyword.
4. Number of records in the database stays the same.

Cons:

1. Uninstall can be complicated, as the database needs to be cleaned from multilingual contents.
2. Post permalinks may not be translatable.

### Manage translations on the generated page

Multilingual plugins that use the content pages generated by WordPress and perform translation on those pages. When any page is displayed on WordPress the plugin (either offline or online) attempts to create a translated version of the page using machine translation. Later on that translation can be manually changed or modified.

Pros:

1. Installation is simple and translation for any content on the page is provided.
2. Editing the translation can be done with ease.

Cons:

1. Automatic translation is not good enough and pages on the site might be badly translated.
2. There’s a strong coupling between content and translation, and changes in the original content might break the translation.

### Plugins that direct you to external translation services

Those Multilingual plugins are normally used to create a widget that creates a shortcut for using online translation services (such as Google Translate). The content is auto translated on demand by the third party engine.

Pros:

1. Installation is simple and translation for any content on the page is provided.
2. It is quite clear that the translation process is automated, so the users expectations are lowered.

Cons:

1. Automatic translation is not good enough and pages on the site might be badly translated.
2. Without the ability to change the translation those plugins limit the ability of the content publisher to provide quality translated content.

### Each language in its own WordPress installation

A separate site is created for each language you want to translate into (e.g. in a [WordPress Multisite](#advanced-administration/multisite/create-network) installation). All the sites need to run the same theme and plugin. When a translation is saved source posts get pinged by translation posts and the system keeps a separate table with the translation relationships.

Pros:

1. Each language site is a regular WordPress install with regular posts (postmeta and external db is used for translation data)
2. If you turn off the plugin the content continues to work fine, albeit without knowledge of its sources/translations.

Cons:

1. Separate sites create more management needs which might be undesirable.

## Language negotiation

Language negotiation means how to determine the language in which users see the site.

Regardless of the solution for storing multilingual contents, multilingual plugins also need to be able to choose which language to display in.

Normally, the URL indicates the display language. Different URL strategies for encoding language information are:

- Add the language name as a parameter: example.com/?lang=en or example.com/?lang=es
- Add virtual ‘directories’ as language names: example.com/en/ or example.com/es/
- Use different domains for different languages: www.example.com or es.example.com

## How to choose the right multilingual solution

Choosing the most suitable multilingual Plugin for your needs will take some time. See the [WordPress Plugin Directory](https://wordpress.org/plugins/search/multilingual) for a list of multilingual Plugins.

There is not only one way but a way adapted to the content strategy, the data-model, the number of posts and pages, and the behavior/experience expected by visitors. And for WordPress Network (multisite), a good knowledge of server administration is required.

In any case, installing a multilingual plugin is a big change for any site. It would be a good idea to first create a test site and verify that everything works correctly between all the required plugins and the theme and only then install.

Since many multilingual plugins change the database significantly, doing a [database backup](#advanced-administration/security/backup/database) is required before experimenting.

## Related

- [WordPress in Your Language](#advanced-administration/before-install/in-your-language)

---

# oEmbed <a name="advanced-administration/wordpress/oembed" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/oembed/

The easy embedding feature is mostly powered by oEmbed, a protocol for consumers (such as your blog) to ask providers (such as YouTube) for the HTML needed to embed content from the provider.

oEmbed is designed to avoid the need to copy and paste HTML from the site hosting the media you wish to embed. It supports different kind of content like videos, images, text, and more.

## Does This Work With Any URL?

No, not by default. The WordPress Core has an [internal whitelist](#reference/hooks/oembed_providers) that will only allow certain URLs to be embeddable for security reasons. The good news is that the whitelist can be modified, and new sites and URLs can be added by registering their handle.

## How Can I Add or Change Support For Websites?

Adding support for an additional website depends on whether the site supports oEmbed. [oEmbed.com](https://oembed.com/) provides a list of hundreds of [supported provides](https://oembed.com/providers.json).

### Adding Support For An oEmbed-Enabled Site

If a site supports oEmbed, you’ll want to call [`wp_oembed_add_provider()`](#reference/functions/wp_oembed_add_provider) to add the site and URL format to the internal whitelist.

### Adding Support For A Non-oEmbed Site

You’ll need to register a handler using [`wp_embed_register_handler()`](#reference/functions/wp_embed_register_handler) and provide a callback function that generates the HTML.

### Removing Support for An oEmbed-Enabled Site

If you wish to remove an oEmbed-enabled provider, you’ll want to call [`wp_oembed_remove_provider`](#reference/functions/wp_oembed_remove_provider).

## What About oEmbed Discovery?

As of version 4.4, WordPress supports oEmbed discovery, but has severe limitations on what type of content can be embedded via non-whitelisted sites.

Specifically, the HTML and Video content is filtered to only allow links, blockquotes, and iframes, and these are additionally filtered to prevent insertion of malicious content. The HTML is then modified to be sandboxed and to have additional security restrictions placed on them as well.

However, if you feel you are knowledgeable enough to not require this level of safety, you can give `unfiltered_html` users (Administrators and Editors) the ability to embed from websites that have oEmbed discovery tags in their `<head>`.

The oEmbed discovery content for “link” and “photo” types is not quite so heavily filtered in this manner; however, it is properly escaped for security and to prevent any malicious content from being displayed on the site

---

# Loopbacks <a name="advanced-administration/wordpress/loopback" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/loopback/

A loopback is when your own server or website tries to connect to it self.

WordPress uses this functionality to trigger scheduled posts, and other scheduled events that plugins or themes may introduce.

They are also used when making changes in the Plugin- or Theme-editor, by connecting back to the website and making sure that the changes made does not break your website.

## Troubleshooting loopback issues

If you are having problems with scheduled posts or other timed events not running, or seeing Site Health warnings about loopbacks failing, you may want to troubleshoot these.

The most common cause of loopback failures is a plugin or theme conflict, you should start by following the normal troubleshooting steps:

## Common troubleshooting steps

- Deactivating **all plugins** (yes, all) to see if this resolves the problem. If this works, re-activate the plugins one by one until you find the problematic plugin(s). If you can’t get into your admin dashboard, try resetting the plugins folder by [SFTP/FTP](#advanced-administration/upgrade/ftp) or phpMyAdmin (read [How to deactivate all plugins when you can’t log in to wp-admin](https://wordpress.org/documentation/article/faq-troubleshooting/) if you need help). Sometimes, an apparently inactive plugin can still cause problems. Also remember to deactivate any plugins in the `mu-plugins` folder. The easiest way is to rename that folder to `mu-plugins-old`.
- Switching to a Twenty-Something theme to rule out any theme-specific problems. If you can’t log in to change themes, you can remove the theme folders via [SFTP/FTP](#advanced-administration/upgrade/ftp) so the only one is `twentytwentythree`. That will force your site to use it.
- If you can install plugins, install the plugin [Health Check](https://wordpress.org/plugins/health-check/). On the troubleshooting tab, you can click the button to disable all plugins and change the theme for you, while you’re still logged in, **without affecting normal visitors to your site**.

---

# Importing Content <a name="advanced-administration/wordpress/import" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/import/

Using the WordPress Import tool, you can import content into your site from another WordPress site, or from another publishing system.

You can find many of the importers described here under [Tools](https://wordpress.org/documentation/article/administration-screens/#tools-managing-your-blog) -&gt; [Import](https://wordpress.org/documentation/article/tools-import-screen/) in the left nav of the WordPress [Administration Screen](https://wordpress.org/documentation/article/administration-screens/).

You can import content from publishing systems beyond those listed on the Administration Screen. Procedures differ for each system, so use the procedures and plugins listed below as necessary. If you’re new to WordPress, review the [WordPress Features](https://wordpress.org/about/features/) and [Working with WordPress](https://codex.wordpress.org/Working%20with%20WordPress) pages to get started.

If you run into problems, search the [WordPress Support Forum](https://wordpress.org/support/forums/) for a solution, or try the [FAQ](https://wordpress.org/documentation/article/faq-work-with-wordpress/).

## Before Importing

If the file you’re importing is too large, your server may run out of memory when you import it. If this happens, you’ll see an error like “Fatal error: Allowed memory size of 8388608 bytes exhausted.”

If you have sufficient permissions on the server, you can edit the `php.ini` file to increase the available memory. Alternatively, you could ask your hosting provider to do this. Otherwise, you can edit your import file and save it as several smaller files, then import each one.

If your import process fails, it still may create some content. When you resolve the error and try again, you may create duplicate data. Review your site after a failed import and remove records as necessary to avoid this.

## b2evolution

There are two methods of importing b2evolution content into WordPress.

- **Movable Type Export Format**: You can re-skin a b2evolution blog so that when its source is viewed it appears to be in the [Movable Type export format](https://movabletype.org/documentation/appendices/import-export-format.html). You can save the export and import it as Movable Type data. See Movable Type and TypePad.
- **BIMP Importer script**: You can use the [BIMP Importer script](https://wittyfinch.com/bimp-importer-migrate-b2evolution-to-wordpress/) to import b2evolution blogs, categories, posts, comments, files and users into your WordPress installation (v3 and higher). Note that this requires payment.

## Blogger

You can import posts, comments, categories and authors from Blogger. WordPress includes an import tool designed specifically for importing content from Blogger.

1. Export your Blogger contents as XML.
2. In your WordPress site, select Tools -&gt; Import on the left nav of the admin screen.
3. Under “Blogger”, if you haven’t already installed the Blogger importer, click “Install Now”.
4. Click the “Run Importer” link.
5. Click “Choose File” and navigate to your Blogger XML file.
6. Click “Upload file and import”.

## Drupal

Many resources are available to help you migrate content from Drupal to WordPress. A few are highlighted here, and you’re likely to find many others by searching the web.

- [FG Drupal to WordPress](https://wordpress.org/plugins/fg-drupal-to-wp/). This is compatible with Drupal 4, 5, 6, 7, 8 and 9.
- [Drupal2WordPress Plugin](https://github.com/jpSimkins/Drupal2WordPress-Plugin). Use this plugin to import terms, content, media, comments and users. Any external images included in your Drupal site can be fetched and added to the media library, and added to your pages and posts.
- [Drupal to WordPress migration SQL queries explained](https://anothercoffee.net/drupal-to-wordpress-migration-sql-queries-explained/) includes workarounds for some migration issues such as duplicate terms, terms exceeding maximum character length and duplicate URL aliases.

## XML and CSV

Here are some resources that can help guide you in importing XML or CSV content into WordPress.

- The [WP All Import](https://wordpress.org/plugins/wp-all-import/) plugin can import any XML or CSV file. It integrates with the [WP All Export](https://wordpress.org/plugins/wp-all-export/) plugin.

## Joomla

For Joomla you can use [FG Joomla to WordPress](https://wordpress.org/plugins/fg-joomla-to-wordpress/). This plugin has been tested with Joomla versions 1.5 through 4.0 on huge databases. It is compatible with multisite installations.

## LiveJournal

WordPress includes an import tool designed specifically for importing content from LiveJournal.

1. In your WordPress site, select Tools -&gt; Import on the left nav of the admin screen.
2. Under “LiveJournal”, if you haven’t already installed the LiveJournal importer, click “Install Now”.
3. Click the “Run Importer” link.
4. Enter your LiveJournal username and password, and click “Connect to LiveJournal and Import”.

## Live Space

See [Live Space Mover](https://b2.broom9.com/?page_id=519) for an article explaining how to use a python script for importing blog entries from live space to WordPress.

## Magento

The [FG Magento to WooCommerce](https://wordpress.org/plugins/fg-magento-to-woocommerce/) plugin migrates your Magento products and CMS pages to WooCommerce.

## Mambo

You can use the plugin [FG Joomla to WordPress](https://wordpress.org/plugins/fg-joomla-to-wordpress/). This WordPress plugin works with Mambo 4.5 and 4.6.

## Movable Type and TypePad

WordPress includes an import tool designed specifically for importing content from Movable Type and TypePad.

1. In your WordPress site, select Tools -&gt; Import on the left nav of the admin screen.
2. Under “Movable Type and TypePad”, if you haven’t already installed the importer, click “Install Now”.
3. Click the “Run Importer” link.
4. Click “Choose File” and navigate to your export file.
5. Click “Upload file and import”.

These articles provide more information on this process:

- [Importing from Movable Type to WordPress](https://codex.wordpress.org/Importing%20from%20Movable%20Type%20to%20WordPress)
- [Importing and Exporting Content](https://www.movabletype.org/documentation/administrator/maintenance/import-export.html)
- [Notes on a Massive WordPress Migration](https://blog.birdhouse.org/2008/02/07/notes-on-a-massive-wordpress-migration/)

## Nucleus CMS

Here are some resources that can help guide you in migrating content from Nucleus CMS to WordPress.

- [A Guide to Importing From Nucleus CMS](https://mamchenkov.net/wordpress/2005/04/26/nucleus2wordpress/)
- [Script for Importing From Nucleus CMS](http://james.onegoodcookie.com/pub/import-nucleus.phps)
- [Nucleus to WordPress](https://github.com/AbdussamadA/nucleus-importer)

## PrestaShop

[FG PrestaShop to WooCommerce](https://wordpress.org/plugins/fg-prestashop-to-woocommerce/). This WordPress plugin is compatible with PrestaShop versions 1.0 to 1.7.

## Roller

See [Importing From Roller](https://codex.wordpress.org/Importing%20From%20Roller).

See also [Migrating a Roller Blog to WordPress](https://nullpointer.debashish.com/migrating-a-roller-blog-to-wordpress).

## RSS

WordPress includes an import tool designed specifically for importing content from RSS.

1. In your WordPress site, select Tools -&gt; Import on the left nav of the admin screen.
2. Under “RSS”, if you haven’t already installed the importer, click “Install Now”.
3. Click the “Run Importer” link.
4. Click “Choose File” and navigate to your XML file.
5. Click “Upload file and import”.

## Serendipity

- [Serendipity to WordPress – Post Import](https://obviate.io/2010/06/11/serendipity-to-wordpress-post-import/).

## SPIP

The plugin [FG SPIP to WordPress](https://wordpress.org/plugins/fg-spip-to-wp/) migrates categories, articles, news and images from SPIP to WordPress. It has been tested with SPIP versions 1.8, 1.9, 2.0, 3.0, 3.1 and 3.2. It is compatible with multisite installations.

## Sunlog

1. Open [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin) to see the database of your Sunlog install. You only need two tables, “blogname\_entries” and “blogname\_comments”.
2. Use phpMyAdmin to export both tables as XML files.
3. Install the [WP All Import](https://wordpress.org/plugins/wp-all-import/) plugin to your WordPress site.
4. Create the following field mappings: 
    - `headline=title`
    - `content=entry+more`
    - `date=timestamp` in Unix format
    - `categories="cat,"` with each value separated by a semicolon.

## Textpattern

- [Fix Textpattern import](https://wordpress.org/support/topic/fix-textpattern-import/)
- [Textpattern to WordPress exporter](https://github.com/drewm/textpattern-to-wordpress)

## Tumblr

WordPress includes an import tool designed specifically for importing content from Tumblr.

1. In your WordPress site, select Tools -&gt; Import on the left nav of the admin screen.
2. Under “Tumblr”, if you haven’t already installed the importer, click “Install Now”.
3. Click the “Run Importer” link.
4. Click “Choose File” and navigate to your export file.
5. Click “Upload file and import”.
6. Create an app on Tumblr that provides a connection point between your blog and Tumblr’s servers.
7. Copy and paste the “OAuth Consumer Key” and “Secret Key”.
8. Click “Connect to Tumblr”.

## Twitter

There are several plugins to import your tweets into WordPress, such as [Get Your Twitter Timeline into WordPress](https://blog.birdhouse.org/2008/08/17/get-your-twitter-timeline-into-wordpress/).

## TypePad

See [Movable Type and TypePad](#movable-type-and-typepad).

## WooCommerce products (CSV)

If you’ve installed the WooCommerce plugin, this importer will already be installed. Click “Run Importer” to upload a CSV file.

## WooCommerce tax rates (CSV)

If you’ve installed the WooCommerce plugin, this importer will already be installed. Click “Run Importer” to upload a CSV file.

## WordPress

WordPress includes an import tool designed specifically for importing content from another WordPress blog.

1. In your WordPress site, select Tools -&gt; Import on the left nav of the admin screen.
2. Under “WordPress”, if you haven’t already installed the importer, click “Install Now”.
3. Click the “Run Importer” link.
4. Click “Choose File” and navigate to the WXR file exported from your source.
5. Click “Upload file and import”.

You will first be asked to map the authors in this export file to users on the blog. For each author, you may choose to map to an existing user on the blog or to create a new user. WordPress will then import each of the posts, comments and categories contained in the uploaded file into your blog. In addition, you can import attachments by checking the “Download and import file attachments” option.

## Xanga

[xanga.r](https://www.timwylie.com/xword.html) is a program that parses xanga pages to get the post and comments. Then it can output them in the WordPress rss 2.0 xml format for WordPress to import.

---

# Common WordPress errors <a name="advanced-administration/wordpress/common-errors" />

Source: https://developer.wordpress.org/advanced-administration/wordpress/common-errors/

If you are encountering a WordPress error message or white screen, don’t panic. Someone has likely encountered the same message before and it can easily be solved. This page lists the most common WordPress errors experienced by WordPress users, and provides a starting point for fixing them. At [WordPress Support](https://wordpress.org/documentation/), you will also find links to more detailed pages or forums where a volunteer will be there to help.

## The White Screen of Death

Both PHP errors and database errors can manifest as a white screen, a blank screen with no information, commonly known in the WordPress community as the *WordPress White Screen of Death* (WSOD). Before resorting to desperate measures, there are a number of reasons for the WordPress white screen of death: - **A Plugin is causing compatibility issues**. If you can access the [Administration Screens](https://wordpress.org/documentation/article/administration-screens/) try deactivating all of your Plugins and then reactivating them one by one. If you are unable to access your Screens, log in to your website via [FTP](#advanced-administration/upgrade/ftp). Locate the folder `wp-content/plugins` and rename the Plugin folder `plugins_old`. This will deactivate all of your Plugins. You can read more about manually deactivating your plugins in the [Troubleshooting FAQ](https://wordpress.org/documentation/article/faq-troubleshooting/#how-to-deactivate-all-plugins-when-not-able-to-access-the-administrative-menus).
- **Your Theme may be causing the problem**. This is especially likely if you are experiencing the white screen of death after you have just activated a new Theme, or created a New Site in a WordPress Network. Log in to the WordPress Administration Screens and activate a default WordPress Theme (e.g. Twenty Twenty-One). If you are using WordPress 5.8 and below, please switch to Twenty Twenty-One theme since the Twenty Twenty-Two theme requires 5.9 and above. If you can’t access your Administration Screens, access your website via FTP and navigate to the `/wp-content/themes/` folder. Rename the folder for the active Theme.

The [WP\_DEBUG feature](#advanced-administration/debug/debug-wordpress) often provides additional information. ## Internal Server Error

[![](https://i0.wp.com/wordpress.org/documentation/files/2018/11/internalservererror2.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/internalservererror2.jpg?ssl=1)Internal Server Error message There can be a number of reasons for an Internal Server Error. Here are some thing you can do to solve it: - The most likely issue is a corrupted `.htaccess` file. Log in to your site root using FTP and rename your `.htaccess` file to `.htaccess_old`. Try loading your site to see if this has solved your problem. If it works, make sure to visit [Settings](https://wordpress.org/documentation/article/administration-screens/#settings-configuration-settings) &gt; [Permalinks](https://wordpress.org/documentation/article/administration-screens/#permalinks) and reset your [permalinks](https://wordpress.org/documentation/article/using-permalinks/). This will generate a new `.htaccess` file for you.
- Try deactivating all of your Plugins to see if it is a Plugin issue. If you are unable to access your WordPress Administration Screens, deactivate your Plugins via FTP by following [these instructions](https://wordpress.org/documentation/article/faq-troubleshooting/#how-to-deactivate-all-plugins-when-not-able-to-access-the-administrative-menus).
- Switch the Theme to a WordPress default Theme (e.g. Twenty Twenty-One) to eliminate any Theme-related problems. If you are using WordPress 5.8 and below, please switch to Twenty Twenty-One theme since the Twenty Twenty-Two theme requires 5.9 and above.
- Increase the [PHP Memory limit](https://wordpress.org/documentation/article/editing-wp-config-php/#increasing-memory-allocated-to-php)
- Try re-uploading the `wp-admin` and `wp-includes` folders from a [fresh install of WordPress](https://wordpress.org/download/).

## Error Establishing Database Connection

If you get a page featuring the message “Error Establishing Database Connection”, this means that there is a problem with the connection to your database and there could be a number of reasons for this. The following are possible reasons and solutions. ### Incorrect wp-config.php Information

“Error establishing a database connection” is usually caused by an error in your [wp-config.php](https://wordpress.org/documentation/article/editing-wp-config-php/) file. Access your site in your FTP client. Open up `wp-config.php` and ensure that the following are correct: - Database name
- Database username
- Database password
- Database host

Learn more about [editing wp-config.php](https://wordpress.org/documentation/article/editing-wp-config-php/). If you are sure your configuration is correct you could [try resetting your MySQL password manually](#advanced-administration/before-install/howto-install). ### Problems with Your Web Host

The next step is to contact your web host. The following hosting issues may be causing the problem: - Your database has met its quota and has been shut down.
- The server is down.

Contact your hosting provider to see if either of these issues is causing your problem. ### Compromised Website

If you have checked `wp-config.php` for errors, and confirmed with your host for hosting issues, it is possible that your site has been hacked. Scan your site with [Sucuri SiteCheck](https://sitecheck.sucuri.net/) to ensure that it hasn’t been compromised. If it has you should check out [My Site was Hacked](https://wordpress.org/documentation/article/faq-my-site-was-hacked/). ## Failed Auto-Upgrade

There will be situations when the WordPress auto-update feature fails. Symptoms include: - A blank white screen and no information.
- A warning that the update failed.
- A PHP error message.

The WordPress automatic upgrade feature may fail due to a glitch in the connection with the main WordPress files, a problem with your Internet connection during upgrade, or incorrect [File Permissions](#advanced-administration/server/file-permissions). To update your WordPress site manually, see the [Manual Update article](https://wordpress.org/documentation/article/updating-wordpress/#manual-update). ## Connection Timed Out

The connection timed out error appears when your website is trying to do more than your server can manage. It is particularly common on shared hosting where your memory limit is restricted. Here are some things you can try: - **Deactivate all Plugins.** If deactivating all the WordPress Plugins on your site resolves the issue, reactivate them one-by-one to see which plugin is causing the problem. If you are unable to access your Administration Screens, [read about how to manually deactivate your plugins](https://wordpress.org/documentation/article/faq-troubleshooting/#how-to-deactivate-all-plugins-when-not-able-to-access-the-administrative-menus).
- **Switch to a default WordPress Theme.** If you are using WordPress 5.8 and below, please switch to Twenty Twenty-One theme since the Twenty Twenty-Two theme requires 5.9 and above. This should rule out any Theme-related problems.
- **Increase your [memory limit in wp-config.php](https://wordpress.org/documentation/article/editing-wp-config-php/#increasing-memory-allocated-to-php)**. If you are on shared hosting you may have to ask your hosting provider to increase your memory limit for you.
- **Increase the maximum execution time in your [php.ini](https://php.net/manual/en/ini.core.php) file.** This is not a WordPress core file so if you are not sure how to edit it, contact your hosting provider to ask them to increase your maximum execution time. See below instructions for increasing maximum execution time.

## Maintenance Mode Following Upgrade

[![](https://i0.wp.com/wordpress.org/documentation/files/2018/11/maintenancemode1.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/maintenancemode1.jpg?ssl=1)When WordPress updates, it automatically installs a `.maintenance` file. Following upgrade, you may receive a message that says “Briefly unavailable for scheduled maintenance. Please check back in a minute.” The maintenance file may not have been removed properly. To remove this message do the following: 1. Log in to your website using your FTP program
2. Delete the `.maintenance` file, which will be found in your site root.

Read more about the [maintenance mode issue](https://wordpress.org/documentation/article/faq-troubleshooting/#how-to-clear-the-briefly-unavailable-for-scheduled-maintenance-message-after-doing-automatic-upgrade). ## You Make Changes and Nothing Happens

If you are making changes to your website and you do not see the changes in your browser, you may need to clear your [browser cache](https://wordpress.org/support/topic/i-make-changes-and-nothing-happens/). Your browser stores information about the websites that you visit. This makes it faster to load websites when you visit them because the browser just has to reload information already stored on your computer, rather than downloading it again. If you make a change to a website and the browser does not think it is significant, it will simply load the data from your cache, and you won’t see your changes. To fix the problem, simply [empty your browser cache](https://wordpress.org/support/topic/i-make-changes-and-nothing-happens/) or close the tab and reopen the link. ## Pretty Permalinks 404 and Images not Working

If you are experiencing 404 errors with pretty [permalinks](https://wordpress.org/documentation/article/using-permalinks/) and a white screen when you upload images, [mod\_rewrite](https://wordpress.org/documentation/article/glossary#mod_rewrite) may not be enabled in Apache by default. Mod\_rewrite is an extension module of the [Apache web server](https://wordpress.org/documentation/article/glossary#apache) software which allows for “rewriting” of [URLs](https://en.wikipedia.org/wiki/Url) on-the-fly. It’s what you need to make pretty permalinks work. [WordPress Multisite](https://wordpress.org/documentation/article/glossary#multisite) networks usually experience this but it can also occur on shared hosting providers or after a [site migration or server move](https://wordpress.org/documentation/article/moving-wordpress/). Reset your permalinks through **Settings &gt; Permalinks.** If this does not work, you may have to edit the `.htaccess` file manually. ```
# BEGIN WordPress  
<IfModule mod\_rewrite.c>  
RewriteEngine On  
RewriteBase /  
RewriteRule ^index\.php$ - [L]  
RewriteCond %{REQUEST_FILENAME} !-f  
RewriteCond %{REQUEST_FILENAME} !-d  
RewriteRule . /index.php [L]  
</IfModule>  
# END WordPress

```

If you are not familiar with editing your `.htaccess` file, contact your hosting provider to ask them to turn on mod\_rewrite rules. There is more information on [pretty permalinks in the WordPress Codex](https://wordpress.org/documentation/article/using-permalinks/#using-pretty-permalinks). ## Custom Post Type 404 Errors

You may experience problems with 404 errors and [custom post types](https://wordpress.org/documentation/article/post-types/#custom-types). Try the following steps: 1. Make sure that none of your Custom Post Types and single pages have the same name. If they do, rename the single page, including the [slug](https://wordpress.org/documentation/article/glossary/#post-slug).
2. Log in to your WordPress Administration Screens, navigate to **Settings &gt; Permalinks**. Select the default permalinks. Save. Then reselect your preferred permalinks. This will flush the rewrite rules and should solve your problem.

## Specific Error Messages

There are a number of different errors that will appear in your error logs. To access your error logs you will need to turn on [debugging](https://wordpress.org/documentation/article/editing-wp-config-php/#wp_debug) and then locate your error log via FTP. The following information will help you to decipher some of the common error messages. ### PHP Errors

Below are some common PHP error messages. #### Fatal Errors and Warnings

##### Cannot modify header information – headers already sent

If you receive a warning that WordPress cannot modify header information and headers are already sent, it usually means that you have spaces or characters before the opening tags or after the closing tags. Read how to [fix the headers already sent error](https://wordpress.org/documentation/article/faq-troubleshooting/#how-do-i-solve-the-headers-already-sent-warning-problem). If you are experiencing this problem when you have just installed WordPress you may have introduced a syntax error into `wp-config.php`. [These instructions will help you to fix the error](#advanced-administration/before-install/howto-install). ##### Call to undefined function

An error reading call to undefined function could mean that a WordPress Plugin is trying to find a file or data which isn’t present or accessible in the code. Reasons for this include: - An error when trying to auto-install or auto-upgrade a Plugin. Try [installing or upgrading the Plugin manually](https://wordpress.org/documentation/article/managing-plugins/#manual-plugin-installation).
- An error when trying to auto-install or auto-upgrade a Theme. Try [installing or upgrading the Theme manually](https://wordpress.org/documentation/article/using-themes/#adding-new-themes).
- You may be using an [incompatible WordPress Plugin](https://wordpress.org/documentation/article/managing-plugins/#plugin-compatibility) or incompatible Theme. This could happen with older versions of WordPress and a new WordPress Plugin, or if you are trying to use a WordPress Multisite Plugin on a single site installation. Upgrade WordPress to resolve this issue.
- You may be trying to call a function that doesn’t exist. Check `functions.php` for misspellings.

Try deactivating the WordPress Plugin or changing the WordPress Theme that caused the error to appear. If you are unable to do this from within the Administration Screens, you may have to do this [manually via FTP](https://wordpress.org/documentation/article/faq-troubleshooting/#how-to-deactivate-all-plugins-when-not-able-to-access-the-administrative-menus). ##### Allowed memory size exhausted

An Allowed Memory Size Exhausted error means that your WordPress installation doesn’t have enough memory to achieve what you want. You can try out the following steps: - Increase your [memory limit in wp-config.php](https://wordpress.org/documentation/article/editing-wp-config-php/#increasing-memory-allocated-to-php)
- Increase your memory limit by editing `php.ini`. This is not a file that comes with WordPress so if you are unfamiliar with it you should contact your web host about increasing your memory limit.

##### Maximum execution time exceeded

You may receive a message such as “Maximum execution time of 30 seconds exceeded” or “Maximum execution time of 60 seconds exceeded”. This means that it is taking to longer for a process to complete and it is timing out. There are a number of ways to fix this error. **Editing `.htaccess`****Make sure you back up `.htaccess` before you edit it.**Add the following line to `.htaccess`: ```
php_value max_execution_time 60

```

**Editing `php.ini`**Add the following to `php.ini````
max_execution_time = 60

```

If you are unsure of how to make these changes, or if you are on shared hosting that prevents you from making them yourself, you should contact your hosting provider and ask them to increase your maximum execution time. #### Parse errors

##### Syntax Error

A syntax error means that you have made a mistake while creating your PHP structure. You could, for example, be: - Missing a `;` at the end of an individual line.
- Using curly quotation marks.
- Missing a curly bracket.

When this error appears it will tell you which file the error appears in (`functions.php` for example) and approximately which line (it may not always be the exact line so be sure to check just before and just after) in the code. ##### Unexpected

If you are receiving an error which says ‘parse error: unexpected’ this usually means that you have forgotten to include a character. The most common are: - **Unexpected ‘=’** : you have forgotten to include the $ when referencing a variable
- **Unexpected ‘)’** : you have forgotten to include the opening bracket (
- **Unexpected ‘(‘** : you have forgotten to include the closing bracket )
- **Unexpected T\_STRING**: you have forgotten a quotation mark or a semi-colon at the end of the previous line
- **Unexpected T\_ELSE**: you have an else statement with no opening if statement

#### Use of an undefined constant

As with parse errors, “use of an undefined constant” means that you are missing a character. It could be one of the following: - Missing a $ when referencing a variable
- Missing quotation marks around array keys

### Database Errors

The following errors may appear in relation to your WordPress database. #### Error 13 – Cannot Create/Write to File

There are a number of reasons why you may be experiencing this error. **MySQL cannot create a temporary file.** The MySQL variable `tmpdir` is set to a directory that cannot be written to when using PHP to access MySQL. To verify this, enter MySQL at the command line and type `show variables`. You’ll get a long list and one of them will read: **tmpdir = /somedir/** (whatever your setting is.) To solve this, alter the **tmpdir** variable to point to a writable directory. 1. Find the **my.cnf** file. On \*nix systems this is usually in **/etc/**. On Windows system, Find the **my.ini**.
2. Once found, open this in a simple text editor and find the **\[mysqld\]** section.
3. Under this section, find the **tmpdir** line. If this line is commented (has a **\#** at the start), delete the **\#** and edit the line so that it reads: **tmpdir = /writable/dir** where **/writable/dir** is a directory to which you can write. Some use **/tmp**, or you might also try **/var/tmp** or **/usr/tmp**. On Windows, use **C:/Windows/tmp**.
4. Save the file.
5. Shutdown MySQL by typing `mysqlshutdown -u -p shutdown`.
6. Start MySQL by going to the MySQL directory and typing `./bin/safe_mysqld &`. Usually the MySQL directory is in **/usr/local** or sometimes in **/usr/** on Linux systems.

**The** [**file permissions**](#advanced-administration/server/file-permissions) **are incorrect**Correct the [File Permissions](#advanced-administration/server/file-permissions). If none of this make sense and you have someone to administrate your system for you, show the above to them and they should be able to figure it out. #### CREATE Command Denied to User

This error occurs when the user assigned to the database does not have adequate permissions to perform the action to create columns and tables in the database. You will need to log in to [CPanel](https://wordpress.org/documentation/article/using-cpanel/) or [Plesk](https://www.plesk.com/) to give your database user adequate permissions. Alternatively you can [create a new user to assign to your database](https://wordpress.org/documentation/article/using-cpanel/#step-3-add-user-to-database). If you do create a new user you will need to ensure that it is [updated in](https://wordpress.org/documentation/article/using-cpanel/#editing-the-wordpress-config-file) `[wp-config.php](https://wordpress.org/documentation/article/using-cpanel/#editing-the-wordpress-config-file)`. #### Error

It could be because: - you are out of space on /tmp (wherever tmpdir is), or,
- you have too many files in /tmp (even if there is lots of free space), or,
- Your cache on your server is full

This is a MySQL error and has nothing to do with WordPress directly; you should contact your host about it. Some users have reported that running a “repair table” command in [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin) fixed the problem. #### Error 145

This indicates that a table in your database is damaged or corrupted. If you are comfortable using [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin) you can use [these instructions on repairing your MySQL database tables](https://wordpress.org/documentation/article/faq-troubleshooting-2/#how-do-you-repair-a-mysql-database-table). **Always [backup your database](https://wordpress.org/documentation/article/backing-up-your-database/) before performing any actions on it.**If you have not used phpMyAdmin before, or are uncomfortable doing so, contact your web host and ask them to run CHECK/REPAIR on your database. #### Unknown Column

An unknown column error can be caused by a missing column in the database. If you have just upgraded WordPress then try manually upgrading again. To update your WordPress site manually, see the [Update article](https://wordpress.org/documentation/article/updating-wordpress/#manual-update). If you are running a database query when you encounter the error then you may by using incorrect quotation marks for the identifier quote character. This [question on Stack Overflow provides more details](https://stackoverflow.com/questions/1346209/unknown-column-in-field-list-error-on-mysql-update-query). Also see the [MySQL documentation](https://dev.mysql.com/doc/refman/8.2/en/identifiers.html). ## Resources

- [MySQL Error Codes and Messages](https://dev.mysql.com/doc/refman/en/error-messages-server.html)

---

# Upgrading / Migration <a name="advanced-administration/upgrade" />

Source: https://developer.wordpress.org/advanced-administration/upgrade/



---

# Updating WordPress using FTP <a name="advanced-administration/upgrade/ftp" />

Source: https://developer.wordpress.org/advanced-administration/upgrade/ftp/

## FTP Clients

There are two ways of getting files onto your site, and once there, changing them:

1. By using the file manager provided in your host’s control panel. Popular file managers: [cPanel](https://documentation.cpanel.net/display/64Docs/File+Manager), [DirectAdmin](https://www.site-helper.com/filemanager.html), [Plesk](https://www.plesk.com/).
2. By using an FTP or SFTP client. This guide will show you how to use [FileZilla](https://filezilla-project.org/).

FTP or “File Transfer Protocol” has been the most widely used transfer protocol for over thirty years, but it sends your information in the clear, which is a security risk. Use SFTP (Secure File Transfer Protocol) if your host supports it. This transfers your files and your password over a secured connection, and should therefore be used instead of FTP whenever possible. Sometimes you have to contact your host to have SFTP enabled on your account.

Why use FileZilla? Because, like WordPress, it is released under the GPL. So, it is not just free, it is staying that way, too. The following pages will show you how to setup and use Filezilla:

1. [Setting up FileZilla for Your Website](#advanced-administration/upgrade/ftp/filezilla)
2. [Setting Permissions](#advanced-administration/server/file-permissions)
3. [FileZilla’s Extensive Documentation](https://wiki.filezilla-project.org/Documentation)

Want to try a different FTP or SFTP client? [Find more on Wikipedia](https://en.wikipedia.org/wiki/Comparison_of_FTP_clients).

---

# Using FileZilla <a name="advanced-administration/upgrade/ftp/filezilla" />

Source: https://developer.wordpress.org/advanced-administration/upgrade/ftp/filezilla/

[FileZilla](https://filezilla-project.org/) is an open-source FTP client and server. The FTP client is available for multiple platforms such as Windows, Linux, and Mac OS X. The FTP server is available for Windows only. FileZilla supports SFTP, FTPS, and many other file transfer protocols; we will use *FTP* for simplicity.

FileZilla may be used to manage your WordPress site by uploading and downloading files and images. This article will guide you through the process of installing and using the FileZilla FTP client to manage your WordPress site.

![Screenshot of the FileZilla application](https://i0.wp.com/raw.githubusercontent.com/WordPress/Advanced-administration-handbook/main/assets/filezilla_1.gif?ssl=1)

For more information about FileZilla, view the [list of features](https://filezilla-project.org/client_features.php) at the official site.

### Why would I want to download FileZilla?

It’s fast, stable, easy to use, and free. FTP is a standard way to upload or download files between your local system and your web server, and FileZilla is a solid client for everyday FTP needs.

## Setting Up the Options

You will need the following details regarding the FTP account on your server:

1. Your website FTP address (usually `ftp://example.com` if your URL is`https://example.com`)
2. Your FTP username
3. Your FTP password

If you do not already have an FTP account on your server, use your Control Panel or website administration tool to set one up — it will have all the information required. If in doubt, ask your host for directions or help regarding an FTP account for your use to access your webspace.

Before connecting the FTP server, you should register it in the Site Manager. Once you register it, you just one click to connect to the same server.

To register the FTP server, follow the below steps:

1. Click **File → Site Manager** from FileZilla main window.
2. Click **New Site** then name the new connection to what you want (example: My blog server).
3. Enter the FTP address for your website in the Host box. Usually, if your website is `https://www.example.com/`, then the FTP address may be`ftp://ftp.example.com` or `ftp://example.com`. Some hosts also have a single FTP address for all their customers, so it may be`ftp://ftp.examplehost.com/`. Note: Do not put a `/` at the end unless specifically told to do so on your Control Panel or by your host.
4. Leave the Port box blank. The default value 21 should be used. Only change these if your FTP account details explicitly indicate that you should.
5. Select **Normal** from Logon Type box
6. Enter the full username that you have been given in the User box. It may be just a username, or it may look like an email address (but it isn’t one). For instance, it would look similar to `user` or `user@example.com`.
7. Enter password. Remember that the password might be case-sensitive.
8. Click OK.

![Screenshot of the FileZilla site manager window.](https://i0.wp.com/raw.githubusercontent.com/WordPress/Advanced-administration-handbook/main/assets/filezilla_3.gif?ssl=1)

## Connecting

Go to the first icon in the toolbar of FileZilla’s main window, “Open the Site Manager”, click the down arrow, and select your FTP server from the dropdown list.

Alternatively, start the Site Manager from **File → Site Manager**, select your FTP server, and click ‘Connect’.

Following the appearance of a series of messages in the small window (Message Log), you should then see the list of the files on your server in the large window (Remote Directory Tree).

## Troubleshooting

If you have a problem, then it’s time to start troubleshooting!

Look at the top area of the FileZilla main window and check the messages.

1. If there was no attempt to connect, then the FTP address is wrong. All it needs is one character to be incorrect and it will fail. Click the red X, break the connection, and click the Site Manager to check what you entered.
2. If it says that the user does not exist or *Incorrect Login* and so on, check the Site Manager setting and ensure that it reflects what your FTP account and password details provided by your host says, or use the web server administration interface provided to you by your host to re-check the existence of the FTP account. Check your password carefully. It is case-sensitive (capitals and small letters). You may want to ask your web host for some assistance, too.
3. If it says *Could not retrieve directory listing*, you may need to change the Transfer Setting. From Site Manager, select your FTP Server and click the *Transfer Settings* tab. Select *Passive* from Transfer mode and click OK.

---

# phpMyAdmin <a name="advanced-administration/upgrade/phpmyadmin" />

Source: https://developer.wordpress.org/advanced-administration/upgrade/phpmyadmin/

## What is phpMyAdmin?

An administrator’s tool of sorts, phpMyAdmin is a PHP script meant for giving users the ability to interact with their MySQL databases. WordPress stores all of its information in the MySQL database and interacts with the database to generate information within your WordPress site. A “raw” view of the data, tables and fields stored in the MySQL database is accessible through phpMyAdmin.

## What is it good for?

The phpMyAdmin program is handy for performing maintenance operations on tables, backing up information, and editing things directly in the event that WordPress is not working. Occasionally, in the [Support Forums](https://wordpress.org/support/welcome/#asking-for-support), someone will post a SQL query of some benefit or other that can be run using phpMyAdmin. Although many of the same tasks can be performed on the MySQL command line, doing so is not an option for many people.

## Where can I get it?

Often host control panels, such as cPanel and Plesk, have phpMyAdmin pre-installed, so there is nothing special you have to do to use it. It is usually linked from the database page. Ask your host if this is available.

You can download phpMyAdmin yourself and install it from the main [phpMyAdmin project page](https://www.phpmyadmin.net/).

---

# Upgrading WordPress <a name="advanced-administration/upgrade/upgrading" />

Source: https://developer.wordpress.org/advanced-administration/upgrade/upgrading/

## Upgrading WordPress – Extended Instructions

This page contains a more detailed version of [the upgrade instructions](https://wordpress.org/documentation/article/updating-wordpress/).

### Back up WordPress

Before you get started, it’s a good idea to back up your website. This means if there are any issues you can restore your website. Complete instructions to make a backup can be found in the WordPress Backup.

### One-click Upgrade

WordPress lets you update with the click of a button. You can launch the update by clicking the link in the new version banner (if it’s there) or by going to the Dashboard &gt; Updates screen. Once you are on the “Update WordPress” page, click the button “Update Now” to start the process off. You shouldn’t need to do anything else and, once it’s finished, you will be up-to-date.

One-click updates work on most servers. If you have any problems, it is probably related to permissions issues on the filesystem.

#### Hosting Services Tools

You may have access to WP-Toolkit if your websites are hosted in cPanel (Look for “WordPress Management” in the left menu bar) or Plesk (Look for “WordPress” in the left menu bar). You can perform one-click update of your WordPress websites inside WP-Toolkit. You will also have the ability to configure automatic updates in WP-Toolkit.

If your websites are hosted in a WP Squared server, you will see a notification and a button to perform one-click update of your WordPress website when a new update is available. Automatic update is enabled by default, and you have the ability to configure whether to enable or disable automatic updates in WP Squared.

*Hosting providers: If your tools are missing here, feel free to create a pull request in Github to add it.*

### Manual Upgrade

#### Overview of the Upgrade Process

1. [Backup your database](#advanced-administration/upgrade/upgrading).
2. [Backup ALL your WordPress files](#advanced-administration/upgrade/upgrading) in your WordPress directory. Don’t forget your [`.htaccess`](https://wordpress.org/documentation/article/wordpress-glossary/#.htaccess) file.
3. [Verify the backups](#advanced-administration/upgrade/upgrading) you created are there and usable. This is essential.
4. [Deactivate ALL your Plugins](#advanced-administration/upgrade/upgrading).
5. [Ensure first four steps are completed](#advanced-administration/upgrade/upgrading). Do not attempt the upgrade unless you have completed the first four steps.
6. [Download and extract the WordPress package](#advanced-administration/upgrade/upgrading) from <https://wordpress.org/download/>.
7. [Delete the old WordPress files](#advanced-administration/upgrade/upgrading) on your site, but **DO NOT DELETE**  
     – `wp-config.php` file;  
     – `wp-content` folder; Special Exception: the `wp-content/cache` and the `wp-content/plugins/widgets` folders should be deleted.  
     – `.htaccess` file–if you have added custom rules to your `.htaccess`, do not delete it;  
     – `robots.txt` file–if your blog lives in the root of your site (ie. the blog is the site) and you have created such a file, do not delete it.
8. [Upload the new files](#advanced-administration/upgrade/upgrading) from your computer’s hard drive to the appropriate WordPress folder on your site.
9. [Run the WordPress upgrade program](#advanced-administration/upgrade/upgrading) and follow the instructions on the screen.
10. [Update Permalinks and .htaccess](#advanced-administration/upgrade/upgrading).
11. [Install updated Plugins and Themes](#advanced-administration/upgrade/upgrading).
12. [Reactivate Plugins](#advanced-administration/upgrade/upgrading)
13. [Review what has changed in WordPress](#advanced-administration/upgrade/upgrading).

That’s the overview of the upgrade process. Please continue reading the Detailed Upgrade Instructions.

Remember, if you do encounter problems, re-read the Instructions below to insure you’ve followed the proper procedures and consult [Troubleshooting: Common Installation Problems](#advanced-administration/before-install/howto-install).

#### Upgrading Across Multiple Versions

*While the methodology given below is the “safe” approach, as long as you have proper backups, then it is indeed possible to upgrade directly from the very first version of WordPress to the very latest version in one-easy-step. WordPress does support this process, and WordPress is extremely backwards compatible in this respect. That said, if you have a large site, the upgrade process may take longer than expected, in which case an incremental approach may help. Just remember to retain a backup of a working site so that you always have a fallback position.*

If you plan on upgrading across more than **two** major releases, you should consider upgrading incrementally to avoid potential conflicts and minimize the risks of database damage. Older versions of WordPress can be downloaded from the [release archive](https://wordpress.org/download/release-archive/).

WordPress 3.7 introduced an easy to use one-button updater which will take you directly to Current Version. This update step is safe, and it is possible to one-click update from 3.7 to any later version.

##### Upgrading from WordPress 0.7 – 3.6 (by migration)

Goals:  
– WordPress: upgrade to WordPress 6.2  
– PHP: upgrade to PHP 7.4  
– SQL: upgrade to MySQL 8.0 / MariaDB 10.11

Losses:  
– Content: none  
– Plugins: all  
– Themes: all

These are the oldest versions of WordPress and the ones that have not been supported for years. In general, have to assume some losses, although not of the contents, but probably of some functionality on themes and plugins.

Considering that the goal is to keep the contents and assuming the loss of the rest of the elements, there are some steps.

As with any upgrade, the first thing to do is to make a backup copy. The best way to upgrade from WP &lt; 3.6 is to perform a content migration.

1. Create a brand-new WordPress, without the database.
2. Copy the old WordPress files from the “/wp-content/uploads/” content to the new one.
3. Create a new database with the old database information. The best way is using “mysqldump”.
4. Configure the wp-config.php with all the new data.
5. Access the “/wp-admin/” page, and follow the upgrading process.

With this way, WordPress will be able to maintain and update the contents in the database and be able to work with these contents in an updated version of WordPress.

A WordPress with the default theme, and all the contents should now be available.

Character Encoding commonly presents technical hiccups when restoring a database. It is possible that backup data is not encoded in UTF-8 and instead may be in an ISO or ASCII “deprecated” format. Make sure that the character encoding is updated correctly upon restoring a database! More information on [converting Character Sets in a WordPress database can be found here](https://codex.wordpress.org/Converting_Database_Character_Sets).

##### Upgrading from WordPress 3.7 – 4.0

Goals  
– WordPress: upgrade to WordPress 4.1  
– PHP: upgrade to PHP 5.6.20+  
– SQL: upgrade to MySQL 5.6 / MariaDB 10.0

Losses:  
– Content: none  
– Plugins: probably yes  
– Themes: probably yes

WordPress Versions &lt;= 4.0 are compatible with PHP versions that are hardly available today. They can range from PHP 5.2 (or even earlier) to PHP 5.5. That is why the main goal will be to go to a version that is still easy to get on many operating systems.

The same will happen with the database. It is very likely that there is a MySQL 5.5 or earlier. Depending on whether want to continue with MySQL or move to MariaDB, choose which way to go and migrate the database to a MySQL 5.6 or MariaDB 10.0.

Note that WP-CLI is not available for PHP versions lower than PHP 5.6.20, so this process still must be done somewhat manually.

As with any upgrade, the first thing to do is to make a backup copy.

Remove all themes that are not active, leaving only the main theme. If there is a child theme active, please, maintain the child and parent.

Install and activate the [Twenty Ten](https://wordpress.org/themes/twentyten/) theme and activate it. This theme works in all sites since WordPress 3.7.

In the same way, delete all deactivated plugins (and, therefore, not working).

Deactivate all left active plugins.

Now, WordPress will have:  
– Core: any version (between WordPress 3.7 and WordPress 4.0)  
– Themes: Twenty Ten is active, and the main theme is deactivated.  
– Plugins: all plugins that should be active are deactivated.

At this point, overwrite the WordPress Core with [WordPress 4.1](https://wordpress.org/wordpress-4.1.zip), available in the [release list](https://wordpress.org/download/releases/). Install WordPress 4.1 major version or, if available and recommended, the latest 4.1.x minor version.

Upgrade the systems up to PHP 5.6.20+ and MySQL 5.6.x or MariaDB 10.0.x. Please, do not install the newest major version.

Access the “/wp-admin/” page, and follow the upgrading process.

WordPress will be able to maintain and update the contents in the database and be able to work with these contents. WordPress, with the default theme and all the contents should now be available and working.

Character Encoding commonly presents technical hiccups when restoring a database. It is possible that backup data is not encoded in UTF-8 and instead may be in an ISO or ASCII “deprecated” format. Make sure that the character encoding is updated correctly upon restoring a database! More information on [converting Character Sets in a WordPress database can be found here](https://codex.wordpress.org/Converting_Database_Character_Sets).

Proceed to the next step, which is upgrade to WordPress 4.9 from WordPress 4.1.

##### Upgrading from WordPress 4.1 – 4.8

Goals  
– WordPress: upgrade to WordPress 4.9  
– PHP: upgrade to PHP 7.2  
– SQL: maintain or upgrade to MySQL 5.6 / MariaDB 10.0

Losses:  
– Content: none  
– Plugins: probably yes  
– Themes: probably yes

*If you don’t have PHP 5.6.20+ configured yet, do it. Chances are that everything will still work normally.*

From WordPress 4.1 and PHP 5.6.20+, you can continue with the manual update process, or start using [WP-CLI](https://wp-cli.org/), the tool to run WordPress commands directly via console, something that can easy the process.

As with any upgrade, the first thing to do is to make a backup copy.

Remove all themes that are not active, leaving only the main theme. If there is a child theme active, please, maintain the child and parent.

Install and activate the [Twenty Ten](https://wordpress.org/themes/twentyten/) theme and activate it. This theme works in all sites since WordPress 3.7.

In the same way, delete all deactivated plugins (and, therefore, not working).

Now, WordPress will have:  
– Core: any version (between WordPress 4.1 and WordPress 4.8)  
– Themes: Twenty Ten is active, and the main theme is deactivated.  
– Plugins: all plugins that should be active are deactivated.

At this point, overwrite the WordPress Core with [WordPress 4.9](https://wordpress.org/wordpress-4.9.zip), available in the [release list](https://wordpress.org/download/releases/). Install WordPress 4.9 major version or, if available and recommended, the latest 4.9.x minor version.

Upgrade the systems up to PHP 7.2 and, if they are not already, to MySQL 5.6.x or MariaDB 10.0.x. Please, do not install the newest major version.

Access the “/wp-admin/” page, and follow the upgrading process.

WordPress will be able to maintain and update the contents in the database and be able to work with these contents. WordPress, with the default theme and all the contents should be available and working.

Character Encoding commonly presents technical hiccups when restoring a database. It is possible that backup data is not encoded in UTF-8 and instead may be in an ISO or ASCII “deprecated” format. Make sure that the character encoding is updated correctly upon restoring a database! More information on [converting Character Sets in a WordPress database can be found here](https://codex.wordpress.org/Converting_Database_Character_Sets).

Proceed to the next step, which is upgrade to WordPress 5.3 from WordPress 4.9.

##### WordPress 4.9 – 5.2

Goals  
– WordPress: upgrade to WordPress 5.3  
– PHP: upgrade to PHP 7.4  
– SQL: maintain or upgrade to MySQL 8.0 / MariaDB 10.3

Losses:  
– Content: none  
– Plugins: probably no  
– Themes: probably no

*If you don’t have PHP 7.4 configured yet, do it. Chances are that everything will still work normally.*

WordPress 4.9 was the last version with the Classic Editor, so, a lot of people, afraid of the new editor, stopped updating WordPress. WordPress 5.0+ is fully compatible with the Classic Editor content, so it can be upgraded without losing any content.

Also, when WordPress 4.9 was released, PHP 7.0+ was very stablished and WordPress 5.0 version had support. Upgrading from PHP 5.6.20+ to PHP 7.0+ should be very stable.

From WordPress 4.9, you can continue with the manual update process, or start using [WP-CLI](https://wp-cli.org/), the tool to run WordPress commands directly via console, something that can ease the process.

As with any upgrade, the first thing to do is to make a backup copy.

Remove all themes that are not active, leaving only the main theme. If there is a child theme active, please, maintain the child and parent.

Install and activate the [Twenty Ten](https://wordpress.org/themes/twentyten/) theme and activate it. This theme works in all sites since WordPress 3.7.

In the same way, delete all deactivated plugins.

Now, WordPress will have:  
– Core: any version (between WordPress 4.9 and WordPress 5.2)  
– Themes: Twenty Ten is active, and the main theme is deactivated.  
– Plugins: all plugins that should be active are deactivated.

At this point, overwrite the WordPress Core with [WordPress 5.3](https://wordpress.org/wordpress-5.3.zip), available in the [release list](https://wordpress.org/download/releases/). Install WordPress 5.3 major version or, if available and recommended, the latest 5.3.x minor version.

Upgrade the systems up to PHP 7.4 and, if they are not already, to MySQL 8.0.x or MariaDB 10.3.x. Please, do not install the newest major version.

Access the “/wp-admin/” page, and follow the upgrading process.

WordPress will be able to maintain and update the contents in the database and be able to work with these contents.

Getting this moment, make a new backup copy, because some more updates will be made and, at this point, there is a good WordPress situation.

Most of the plugins available in WordPress 4.9+ should work with WordPress 5.3, so try to update everything available in the plugin list. Please, do it one by one and check all the warnings and errors. If you get some big error, try an older release for this plugin. Usually they are at the end of the “Developer” tab in each plugin page at wordpress.org.

Try the same with the theme. Most of the themes available in WordPress 4.9+ should work with WordPress 5.3.

Proceed to the next step, which is upgrade to WordPress 6.2 from WordPress 5.3.

##### WordPress 5.3 – 6.2

Goals  
– WordPress: upgrade to WordPress 6.2  
– PHP: upgrade to PHP 7.4  
– SQL: maintain or upgrade to MySQL 8.0 LTS / MariaDB 10.11 LTS

Losses:  
– Content: none  
– Plugins: probably no  
– Themes: probably no

*If you don’t have PHP 7.4 configured yet, do it. Chances are that everything will still work normally.*

Upgrade everything normally. Everything should work fine.

##### WordPress 6.3 – 6.8

Goals  
– WordPress: upgrade to WordPress 6.8  
– PHP: upgrade to at least PHP 8.1 (WordPress 6.6+ supports PHP 8.2)  
– SQL: maintain or upgrade to MySQL 8.0 LTS / MariaDB 10.11 LTS

Losses:  
– Content: none  
– Plugins: probably no  
– Themes: probably no

*If you don’t have PHP 8.1 configured yet, do it. Chances are that everything will still work normally.*

When WordPress 6.3 was released, support for PHP 5.6 dropped and PHP 7.0 was stablished as the minimum PHP version. Upgrading from PHP 5.6.20+ to PHP 7.0+ should be very stable.

When WordPress 6.6 was released, support for PHP 7.0 and 7.1 dropped and PHP 7.2.24 was stablished as the minimum PHP version. Upgrading from PHP 7.0+, or PHP 7.1+ to PHP 7.2+ should be very stable. WordPress 6.6 also supports PHP 8.2 so you can try switching to PHP 8.2 when upgraded WordPress.

Upgrade everything normally. Everything should work fine.

### Troubleshooting

**Scrambled Layout or Errors**

If your blog looks scrambled now or features line errors, an old plugin that doesn’t work with the new code may be the culprit. In your WordPress [Administration Screen](https://wordpress.org/documentation/article/administration-screens), deactivate all plugins that do not come with WordPress by default. Re-activate them one by one.

**Made Custom Changes/Hacks?**

If you have made changes to other WordPress files (“hacked” WordPress), you are supposed to keep track of your changes. You will have to transfer your edits into the new code. [WordPress Versions](https://codex.wordpress.org/WordPress_Versions) lists the files that have changed in each release.

**Resist Using Old Code**

Upgrading gives you the newest and best code. Using your old code, no matter how much you have customised it, almost certainly will cause problems. The temptation just to use your old modified code will be great, but the chances of errors are much greater.

**Can I Go Back to Old Versions**

You can, but it is usually not recommended to rollback (revert) your current version to an older version. That is because newer versions often include security updates and a rollback may put your site at risk. Second, the change between the database structure between versions may cause complications in maintaining your site content, posts, comments, and plugins that are dependent upon the information stored in the database. If you are still intent on this, proceed at your own risk. **Please note, that without a backup of your entire site and your database, made prior to your upgrade attempt, a successful rollback is near impossible.** Delete all WordPress files except for `wp-config`. [Upload](#advanced-administration/upgrade/ftp/filezilla) the files from your backup to your server and [restore your database backup](https://wordpress.org/article/restoring-your-database-from-backup/). Remember, you must have good backups for the rollback to work. For older WordPress versions, a rollback might not work.

**Get More Help**

If you get any errors following an upgrade, check [Troubleshooting: Common Installation Problems](#advanced-administration/before-install/howto-install), [Troubleshooting](https://codex.wordpress.org/Troubleshooting), and the [Installation Category of Articles](https://wordpress.org/documentation/category/installation/). If you can’t find an answer, post a clear question on the [WordPress Support Forums](https://wordpress.org/support/forums/). You will be asked if you have used any old code. You’ll be told to change it then, so you may as well change it now 🙂.

## Configuring Automatic Background Updates

### Update Types

Automatic background updates were introduced in [WordPress 3.7](https://wordpress.org/documentation/wordpress-version/version-3-7/) in an effort to promote better security, and to streamline the update experience overall. By default, automatic updates of WordPress are enabled on most sites. In special cases, plugins and themes may be automatically updated as well. Translation files are auto-updated by default.

In WordPress, there are four types of automatic background updates:

1. Core updates
2. Plugin updates
3. Theme updates
4. Translation file updates

#### Core Updates

Core updates are subdivided into three types:

1. Core development updates, known as the “bleeding edge”
2. Minor core updates, such as maintenance and security releases
3. Major core release updates

Before WordPress 5.6, by default, every site had automatic updates enabled for minor core releases and translation files only. Starting WordPress 5.6 and above, every new site has automatic enabled for both minor and major releases.

Sites already running a development version also have automatic updates to further development versions enabled by default.

### Update Configuration

Automatic updates can be configured using one of two methods: defining constants in `wp-config.php`, or adding filters using a Plugin.

#### Configuration via wp-config.php

Using `wp-config.php`, automatic updates can be disabled completely, and core updates can be disabled or configured based on update type.

##### Constant to Disable All Updates

The core developers made a conscious decision to enable automatic updates for minor releases and translation files out of the box. Going forward, this will be one of the best ways to guarantee your site stays up to date and secure and, as such, disabling these updates is strongly discouraged.

To completely disable all types of automatic updates, core or otherwise, add the following to your `wp-config.php` file:

```
define( 'AUTOMATIC_UPDATER_DISABLED', true );

```

##### Constant to Configure Core Updates

To enable automatic updates for major releases or development purposes, the place to start is with the `WP_AUTO_UPDATE_CORE` constant. Defining this constant one of three ways allows you to blanket-enable, or blanket-disable several types of core updates at once.

```
define( 'WP_AUTO_UPDATE_CORE', true );

```

`WP_AUTO_UPDATE_CORE` can be defined with one of three values, each producing a different behavior:

- Value of `true` – Development, minor, and major updates are all **enabled**
- Value of `false` – Development, minor, and major updates are all **disabled**
- Value of `'minor'` – Minor updates are **enabled**, development, and major updates are **disabled**

Note that only sites already running a development version will receive development updates.

For development sites, the default value of `WP_AUTO_UPDATE_CORE` is `true`. For other sites, the default value of `WP_AUTO_UPDATE_CORE` is `minor`.

Starting WordPress 5.6, the default value of `WP_AUTO_UPDATE_CORE` for new WordPress installations is `true`. For new website, the default value of `WP_AUTO_UPDATE_CORE` is `minor`.

#### Configuration via Filters

Using filters allows for fine-tuned control of automatic updates.

The best place to put these filters is in a [must-use plugin](#advanced-administration/plugins/mu-plugins).

Do *not* add `add_filter()` calls directly in `wp-config.php`. WordPress isn’t fully loaded and can cause conflicts with other applications such as WP-CLI.

##### Disabling All Updates Via Filter

You can also disable all automatic updates using the following filter:

```
add_filter( 'automatic_updater_disabled', '__return_true' );

```

##### Core Updates via Filter

To enable all core-type updates only, use the following filter:

```
add_filter( 'auto_update_core', '__return_true' );

```

But let’s say rather than enabling or disabling all three types of core updates, you want to selectively enable or disable them. That’s where the `allow_dev_auto_core_updates`, `allow_minor_auto_core_updates`, and `allow_major_auto_core_updates` filters come in.

There are two shorthand functions built into WordPress that will allow you to enable or disable specific types of core updates with single lines of code. They are [\_\_return\_true](#reference/functions/__return_true) and [\_\_return\_false](#reference/functions/__return_false). Here are some example filters:

To specifically *enable* them individually (for disabling, use **false** instead of **true**):

```
add_filter( 'allow_dev_auto_core_updates', '__return_true' ); // Enable development updates
add_filter( 'allow_minor_auto_core_updates', '__return_true' ); // Enable minor updates
add_filter( 'allow_major_auto_core_updates', '__return_true' ); // Enable major updates

```

For Developers: To *enable* automatic updates even if a VCS folder (.git, .hg, .svn etc) was found in the WordPress directory or any of its parent directories:

```
add_filter( 'automatic_updates_is_vcs_checkout', '__return_false', 1 );

```

##### Plugin &amp; Theme Updates via Filter

By default, automatic background updates only happen for plugins and themes in special cases, as determined by the WordPress.org API response, which is controlled by the WordPress security team for patching critical vulnerabilities. To enable or disable updates in all cases, you can leverage the `auto_update_$type` filter, where `$type` would be replaced with “plugin” or “theme”.

Automatic updates for All plugins

```
add_filter( 'auto_update_plugin', '__return_true' );

```

Automatic updates for All themes:

```
add_filter( 'auto_update_theme', '__return_true' );

```

You can use `__return_false` instead of `__return_true` to specifically disable all plugin &amp; theme updates, even forced security pushes from the WordPress security team.

The `auto_update_$type` filters also allow for more fine-grained control, as the specific item to updated is also passed into the filter. If you wanted to enable auto-updates for specific plugins only, then you could use code like this:

```
function auto_update_specific_plugins ( $update, $item ) {
    // Array of plugin slugs to always auto-update
    $plugins = array (
        'akismet',
        'buddypress',
    );
    if ( in_array( $item->slug, $plugins ) ) {
         // Always update plugins in this array
        return true;
    } else {
        // Else, use the normal API response to decide whether to update or not
        return $update;
    }
}
add_filter( 'auto_update_plugin', 'auto_update_specific_plugins', 10, 2 );

```

##### Translation Updates via Filter

Automatic translation file updates are already enabled by default, the same as minor core updates.

To disable translation file updates, use the following:

```
add_filter( 'auto_update_translation', '__return_false' );

```

##### Disable Emails via Filter

```
// Disable update emails
add_filter( 'auto_core_update_send_email', '__return_false' );

```

This filter can also be used to manipulate update emails according to email $type (success, fail, critical), update type object $core\_update, or $result:

```
/* @param bool   $send        Whether to send the email. Default true.
@param string $type        The type of email to send. Can be one of 'success', 'fail', 'critical'.
@param object $core_update The update offer that was attempted.
@param mixed  $result      The result for the core update. Can be WP_Error.
*/
apply_filters( 'auto_core_update_send_email', true, $type, $core_update, $result );

```

### Resources

- More examples at <https://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7/>
- More information here: [How Do I Configure Automatic Updates in WordPress 3.7?](https://wordpress.stackexchange.com/questions/120081/how-do-i-configure-automatic-updates-in-wordpress-3-7)
- Info about wp-cli conflict: <https://github.com/wp-cli/wp-cli/issues/1310>

---

# Migrating WordPress <a name="advanced-administration/upgrade/migrating" />

Source: https://developer.wordpress.org/advanced-administration/upgrade/migrating/

## Changing The Site URL

On the `Settings -> General` screen in a single site installation of WordPress, there are two fields named “WordPress Address (URL)” and “Site Address (URL)”. They are important settings since they control where WordPress is located. These settings control the display of the URL in the admin section of your page, as well as the front end, and are used throughout the WordPress code.

- The “Site Address (URL)” setting is the address you want people to type in their browser to reach your WordPress blog.
- The “WordPress Address (URL)” setting is the address where your WordPress core files reside.

**Note:** Both settings should include the https:// part and should not have a slash `/` at the end.

Every once in a while, somebody finds a need to manually change (or fix) these settings. Usually, this happens when they change one or both and discover that their site no longer works properly. This can leave the user with no easily discoverable way to correct the problem. This article tells you how to change these settings directly.

Additional information is presented here for the case where you are moving WordPress from one site to another, as this will also require changing the site URL. You should not attempt to use this additional information if you’re only attempting to correct a “broken” site.

**Alert!** These directions are for single installs of WordPress only. If you are using WordPress MultiSite, you will need to manually edit your database.

There are four easy methods to change the Site URL manually. Any of these methods will work and perform much the same function.

#### Edit wp-config.php

It is possible to set the site URL manually in the `wp-config.php` file.

Add these two lines to your `wp-config.php`, where “example.com” is the correct location of your site.

```
define( 'WP_HOME', 'https://example.com' );
define( 'WP_SITEURL', 'https://example.com' );

```

This is not necessarily the best fix, it’s just hard-coding the values into the site itself. You won’t be able to edit them on the General settings page anymore when using this method.

#### Edit functions.php

If you have access to the site via FTP, then this method will help you quickly get a site back up and running, if you changed those values incorrectly.

1. FTP to the site, and get a copy of the active theme’s functions.php file. You’re going to edit it in a simple text editor and upload it back to the site.
2. Add these two lines to the file, immediately after the initial `<?php` line:

```
update_option( 'siteurl', 'https://example.com' );
update_option( 'home', 'https://example.com' );

```

Obviously, use your own URL instead of `example.com`.

1. Upload the file back to your site, in the same location. FileZilla offers a handy “edit file” function to do all of the above rapidly; if you can use that, do so.
2. Load the login or admin page a couple of times. The site should come back up.

**Important!** Do not leave this code in the `functions.php` file. Remove them after the site is up and running again.

Note: If your theme doesn’t have a `functions.php` file create a new one with a text editor. Add the `<?php` tag and the two lines using your own URL instead of `example.com`:

```
<?php
update_option( 'siteurl', 'https://example.com' );
update_option( 'home', 'https://example.com' );

```

Upload this file to your theme directory. Remove the lines or remove the file after the site is up and running again.

#### LAN-based site to externally accessible site

Here are some additional details that step you through transferring a LAN-based WordPress site into an externally accessible site, as well as enabling editing the wordpress site from inside the LAN.

Two important keys are router/firewall modifications and the “wait 10+ minutes” after making the changes at the end.

1. Using SSH to log into your server (nano is a server preinstalled text editor):

`$ nano /var/www/books/wp-content/themes/twentyeleven/functions.php`

1. Add lines just after `<?php`

```
update_option( 'siteurl', 'https://example.com:port/yourblog');
update_option( 'home', 'https://example.com:port/yourblog');

```

1. Refresh your web browser using your external site URL:

https://example.com:port/yourblog  
`$ nano /var/www/books/wp-content/themes/twentyeleven/functions.php`

1. Remove those lines you just added (or comment them out)
2. Access your router, these steps are for pfSense, other routers should have similar settings to look for/watch out for)
3. Add to firewall/nat table a line like this

`wan/tcp/port/LAN.server.IP/80`

1. Add to firewall/rules table a line like this:

`tcp/*/port/LAN.server.IP/port/*`

1. Uncheck the box at System/advanced/network address translation/Disable NAT Reflection

`"Disables the automatic creation of NAT redirect rules for access to your public IP addresses from within your internal networks. Note: Reflection only works on port forward type items and does not work for large ranges > 500 ports."`

1. Then go do something for ten minutes and when you get back see if the external url https://example.com:port/yourblog from a LAN browser brings the page up correctly.

#### Relocate method

WordPress supports an automatic relocation method intended to be a quick assist to getting a site working when relocating a site from one server to another.

#### Code function

When RELOCATE has been defined as true in `wp-config.php` (see next chapter), the following code in `wp-login.php` will take action:

```
if ( defined( 'RELOCATE' ) AND RELOCATE ) {    
    // Move flag is set
    if ( isset( $_SERVER['PATH_INFO'] ) AND ($_SERVER['PATH_INFO'] != $_SERVER['PHP_SELF']) ) 
        $_SERVER['PHP_SELF'] = str_replace( $_SERVER['PATH_INFO'], "", $_SERVER['PHP_SELF'] );
    $url = dirname( set_url_scheme( 'https://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ) );
    if ( $url != get_option( 'siteurl' ) )
        update_option( 'siteurl', $url );
}

```

**Steps**

1. Edit the `wp-config.php` file.
2. After the “define” statements (just before the comment line that says “That’s all, stop editing!”), insert a new line, and type: `define('RELOCATE',true);`
3. Save your `wp-config.php` file.
4. Open a web browser and manually point it to `wp-login.php` on the new server. For example, if your new site is at https://www.example.com, then type https://www.example.com/wp-login.php into your browser’s address bar.
5. Login as per normal.
6. Look in your web browser’s address bar to verify that you have, indeed, logged in to the correct server. If this is the case, then in the Admin back-end, navigate to `Settings > General` and verify that both the address settings are correct. Remember to Save Changes.
7. Once this has been fixed, edit `wp-config.php` and either completely remove the line that you added (delete the whole line), comment it out (with `//`) or change the true value to false if you think it’s likely you will be relocating again.

**Note:** When the `RELOCATE` flag is set to true, the Site URL will be automatically updated to whatever path you are using to access the login screen. This will get the admin section up and running on the new URL, but it will not correct any other part of the setup. You’ll still need to alter those manually.

**Important!** Leaving the RELOCATE constant in your `wp-config.php` file is insecure, as it allows an attacker to change your site URL to anything they want in some configurations. Always remove the RELOCATE line from `wp-config.php` after you’re done.

#### Changing the URL directly in the database

If you know how to access phpMyAdmin on your host, then you can edit these values directly to get your site up and running again.

1. [Backup your database](#advanced-administration/security/backup/database) and save the copy off-site.
2. Login to [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin).
3. Click the link to your **Databases**.
4. A list of your databases will appear. Choose the one that is your WordPress database.
5. All the tables in your database will appear on the screen.
6. From the list, look for `wp_options`. **Note:** The table prefix of `wp_` may be different if you changed it when installing.
7. Click on the small icon indicated as **Browse**.
8. A screen will open with a list of the fields within the wp\_options table.
9. Under the field option\_name, scroll down and look for `siteurl`.
10. Click the **Edit Field** icon which usually is found at the far left at the beginning of the row.
11. The **Edit Field** window will appear.
12. In the input box for option\_value, carefully change the URL information to the new address.
13. Verify this is correct and click **Go** to save the information.
14. You should be returned to your `wp_options` table.
15. Look for the home field in the table and click **Edit Field**. **Note:** There are several pages of tables inside `wp_options`. Look for the &gt; symbol to page through them.
16. In the input box for option\_value, carefully change the URL information to the new address.
17. Verify this is correct and click **Go** to save the information.

### Moving Sites

When moving sites from one location to another, it is sometimes necessary to manually modify data in the database to make the new site URL information to be recognized properly. Many tools exist to assist with this, and those should generally be used instead of manual modifications.

This is presented here as information only. This data may not be complete or accurate.

You should read the [Moving WordPress](#advanced-administration/upgrade/migrating) article first, if attempting to move WordPress from one system to another.

#### Altering Table Prefixes

Like many WordPress administrators, you may be running several WordPress installations off of one database using various `wp-config.php` hacks. Many of these hacks involve dynamically setting table prefixes, and if you do end up altering your table prefix, you must update several entries within the `prefix_usermeta` table as well.

As in the above section, remember that SQL changes are permanent and so you should back up your database first:

If you are changing table prefixes for a site, then remember to alter the table prefix in the usermeta tables as well. This will allow the new site to properly recognize user permissions from the old site.

```
UPDATE `newprefix_usermeta` SET `meta_key` = REPLACE( `meta_key` , 'oldprefix_', 'newprefix_' );

```

#### Changing Template Files

In your WordPress Theme, open each template file and search for any manually entered references to your old domain name and replace it with the new one. Look for specific hand-coded links you may have entered on the various template files such as the `sidebar.php` and `footer.php`. WordPress uses a template tag called `bloginfo()` to automatically generate your site address from information entered in your Administration &gt; Settings &gt; General panel. The tag in your template files will not have to be modified.

#### Changing the Config file

You will need to update your WordPress configuration file if your database has moved or changed in certain ways.

1. You will only need to modify the config file if: 
    - your database has moved to another server and is not running on your localhost
    - you have renamed your database
    - you have changed the database user name
2. Make a backup copy of your `wp-config.php` file.
3. Open the `wp-config.php` file in a [text editor](https://wordpress.org/documentation/article/wordpress-glossary/#Text_editor).
4. Review its contents. In particular, you are looking for the [database host entry](#advanced-administration/wordpress/wp-config).
5. Save the file.
6. At this point, your WordPress blog should be working.

#### Verify the Profile

1. In your [Administration](https://wordpress.org/documentation/article/administration-screens/) &gt; [Settings](https://wordpress.org/documentation/article/administration-screens/#general) &gt; [General](https://wordpress.org/documentation/article/settings-general-screen/) panel, you will verify that the changes you made in Changing the URL above, are correct.
2. Verify that the reference in your **WordPress Address (URL)** contains the new address.
3. Verify that the reference in your **Site Address (URL)** contains the new address.
4. If you have made changes, click **Save Changes**.

#### Changing the .htaccess file

After changing the information in your Administration &gt; Settings &gt; General panel, you will need to update your .htaccess file if you are using Permalinks or any rewrites or redirects.

1. **Make a backup copy** of your `.htaccess` file. This is not a recommendation but a requirement.
2. Open the `.htaccess` file in a [text editor](https://wordpress.org/documentation/article/glossary/#text-editor).
3. Review its contents, looking for any custom rewrites or redirects you entered. **Copy** these to another text file for safe keeping.
4. Close the file.
5. Follow the instructions on the Permalinks SubPanel for updating your Permalinks to the `.htaccess` file.
6. Open the new `.htaccess` file and check to see if your custom rewrites and redirects are still there. If not, copy them from the saved file and paste them into the new `.htaccess` file.
7. Make any changes necessary in those custom rewrites and redirects to reflect the new site address.
8. Save the file.
9. Test those redirects to ensure they are working.

If you make a mistake, you can [Restore Your Database](#advanced-administration/security/backup) from your backup and try this again. So make sure it is right the first time.

#### Additional items of note

There are other things you may wish to change in order to correct URLs when moving sites.

1. Images link: image links are stored in “post\_content” in the `wp_posts` table. You can use the similar code above to update image links.
2. wp\_options: Besides the “siteurl” and “home” items mentioned above, there are other option\_value that also need revision, such as “upload path”, and some plugin items (depends on what you’ve installed, such as widgets, stats, DMSGuestbook, sitemap, etc.)
3. To fix widgets that contain outdated URL’s, you may edit them in Dashboard / Appearance / Widgets.
4. Do a FULL database search for any items left. **MAKE SURE** you know what you are changing and go through each item for possible improper replacement.
5. If you a running a network / have multiple sites, you will need to replace instances of the URL in the database. They are stored in many tables, including each one of the sites (blogs). Be careful in what you replace and be sure you know the meaning of the field before changing it. See the Important GUID note below for an example of what not to change.
6. **Note:** If you find your old URL in the database options table under `dashboard_incoming_links`, you can ignore or delete that option. It’s unused since WP 3.8.

#### Important GUID Note

When doing the above and changing the URLs directly in the database, you will come across instances of the URL being located in the “guid” column in the `wp_posts` tables. It is critical that you do NOT change the contents of this field.

The term “GUID” stands for “Globally Unique Identifier”. It is a field that is intended to hold an identifier for the post which a) is unique across the whole of space and time and b) never, ever changes. The GUID field is primarily used to create the WordPress feeds.

When a feed-reader is reading feeds, it uses the contents of the GUID field to know whether or not it has displayed a particular item before. It does this in one of various ways, but the most common method is simply to store a list of GUID’s that it has already displayed and “marked as read” or similar.

Thus, changing the GUID will mean that many feedreaders will suddenly display your content in the user’s reader again as if it was new content, possibly annoying your users.

In order for the GUID field to be “globally” unique, it is an accepted convention that the URL or some representation of the URL is used. Thus, if you own `example.com`, then you’re the only one using `example.com` and thus it’s unique to you and your site. This is why WordPress uses the permalink, or some form thereof, for the GUID.

However, the second part of that is that the GUID must *never* change. Even if you shift domains around, the post is still the same post, even in a new location. Feed readers being shifted to your new feeds when you change URLs should still know that they’ve read some of your posts before, and thus the GUID *must* remain unchanged.

**Never, ever, change the contents of the GUID column, under any circumstances.**

If the default uploads folder needs to be changed to a different location, then any media URLs will need to be changed in the `post_content` column of the posts table. For example, if the default uploads folder is changing from `wp-content/uploads` to `images`:

`UPDATE wp_posts SET post_content = REPLACE(post_content,'www.domain.com/wp-content/uploads','www.domain.com/images');`

#### Multi-site notes

See [Moving WordPress Multisite](#advanced-administration/upgrade/migrating#moving-wordpress-multisite)

#### wp-cli

[wp-cli](https://wp-cli.org/) is a super useful shell tool.

`wp search-replace 'example.dev' 'example.com' --skip-columns=guid`

Or, if you only want to change the option, you can do:

```
wp option update home 'https://example.com'
wp option update siteurl 'https://example.com'

```

# Moving WordPress

Whether you are moving WordPress to a new server or to a different location on your server, you don’t need to reinstall. WordPress is flexible enough to handle all of these situations.

## Moving to a New Server

If you are moving WordPress from one server to another, begin by backing up your WordPress directory, images, plugins, and other files on your site as well as the database. See [WordPress Backups](#advanced-administration/security/backup) and [Backing Up Your Database](#advanced-administration/security/backup/database).

### Keeping Your Domain Name and URLs

Moving your domain without changing the Home and Site URLs of your WordPress site is very simple, and in most cases can be done by moving the files.

- If database and URL remain the same, you can move by just copying your files and database.
- If database name or user changes, [edit wp-config.php](#advanced-administration/wordpress/wp-config) to have the correct values.
- If you want to test before you switch, you must temporarily change “siteurl” and “home” in the database table “wp\_options” (through phpMyAdmin or similar).
- If you had any kind of rewrites (permalinks) setup you must disable .htaccess and reconfigure permalinks when it goes live.

### Changing Your Domain Name and URLs

Moving a website and changing your domain name or URLs (i.e. from https://example.com/site to https://example.com, or https://example.com to https://example.net) requires the following steps – in sequence.

1. Download your existing site files.
2. Export your database – go in to MySQL and export the database.
3. Move the backed up files and database into a new folder – somewhere safe – this is your site backup.
4. Log in to the site you want to move and go to Settings &gt; General, then change the URLs. (ie from https://example.com/ to https://example.net) – save the settings and expect to see a 404 page.
5. Download your site files again.
6. Export the database again.
7. Edit `wp-config.php` with the new server’s MySQL database name, user and password.
8. Upload the files.
9. Import the database on the new server.

When your domain name or URLs change there are additional concerns. The files and database can be moved, however references to the old domain name or location will remain in the database, and that can cause issues with links or theme display.

If you do a search and replace on your entire database to change the URLs, you can cause issues with data serialization, due to the fact that some themes and widgets store values with the length of your URL marked. When this changes, things break. To avoid that serialization issue, you have three options:

1. Use the [Velvet Blues Update URLs](https://wordpress.org/plugins/velvet-blues-update-urls/) or [Better Search Replace](https://wordpress.org/plugins/better-search-replace/) plugins if you can access your Dashboard.
2. Use [WP-CLI’s search-replace](#cli/commands/search-replace) if your hosting provider (or you) have installed WP-CLI.
3. Use the [Search and Replace for WordPress Databases Script](https://interconnectit.com/products/search-and-replace-for-wordpress-databases/) to safely change all instances on your old domain or path to your new one. (**only use this option if you are comfortable with database administration** )

Note: Only perform a search and replace on the wp\_posts table.  
Note: Search and Replace from Interconnectit is a 3rd party script

## Moving Directories On Your Existing Server

Moving the WordPress files from one location on your server to another – i.e. changing its URL – requires some special care. If you want to move WordPress to its own folder, but have it run from the root of your domain, please read Giving WordPress Its Own Directory for detailed instructions.

Here are the step-by-step instructions to move your WordPress site to a new location on the same server:

1. Create the new location using one of these two options: 
    - If you will be moving your WordPress core files to a new directory, create the new directory.
    - If you want to move WordPress to your root directory, make sure all `index.php`, [.htaccess](https://wordpress.org/documentation/article/glossary/#htaccess), and other files that might be copied over are backed up and/or moved, and that the root directory is ready for the new WordPress files.
2. Log in to your site.
3. Go to the [Administration](https://wordpress.org/documentation/article/administration-screens/) &gt; [Settings](https://wordpress.org/documentation/article/administration-screens/#settings-configuration-settings) &gt; [General](https://wordpress.org/documentation/article/settings-general-screen/) screen.
4. In the box for **WordPress Address (URL)**: change the address to the new location of your main WordPress core files.
5. In the box for **Site Address (URL)**: change the address to the new location, which should match the WordPress (your public site) address.
6. Click **Save Changes**.
7. (Do not try to open/view your site now!)
8. Move your WordPress core files to the new location. This includes the files found within the original directory, such as https://example.com/wordpress, and all the sub-directories, to the new location.
9. Now, try to open your site by going to yourdomain.com/wp-admin. Note, you may need to go to yourdomain.com/wp-login.php
10. If you are using [Permalinks](https://wordpress.org/documentation/article/using-permalinks/), go to the Administration &gt; Settings &gt; [Permalinks](https://wordpress.org/documentation/article/settings-permalinks-screen/) panel and update your Permalink structure to your [.htaccess](https://wordpress.org/documentation/article/glossary/#htaccess), file, which should be in the same directory as the main `index.php` file.
11. Existing image/media links uploaded media will refer to the old folder and must be updated with the new location. You can do this with the [Better Search Replace](https://wordpress.org/plugins/better-search-replace/) or [Velvet Blues Update URLs](https://wordpress.org/plugins/velvet-blues-update-urls/) plugins, [WP-CLI’s search-replace](#cli/commands/search-replace) if your hosting provider (or you) have installed WP-CLI, manually in your SQL database, or by using the 3rd party database updating tool [Search and Replace Databases Script](https://interconnectit.com/products/search-and-replace-for-wordpress-databases/) \* **Note:** this script is best used by experienced developers.
12. In some cases your permissions may have changed, depending on your ISP. Watch for any files with “0000” permissions and change them back to “0644”.
13. If your theme supports menus, links to your home page may still have the old subdirectory embedded in them. Go to Appearance &gt; Menus and update them.
14. Sometimes you would need to restart your server, otherwise your server may give out an error. (happens in MAMP software (Mac)).
15. It is important that you set the URI locations BEFORE you move the files.

#### If You Forget to Change the Locations

If you accidentally moved the files before you changed the URIs: you have two options.

1. Suppose the files were originally in /path/to/old/ and you moved them to /path/to/new before changing the URIs. The way to fix this would be to make

```
/path/to/old/ a symlink (for Windows users, "symlink" is equivalent to "shortcut") to /path/to/new/, i.e.
ln -s /path/to/new /path/to/old

```

and then follow the steps above as normal. Afterwards, delete the symlink if you want.

1. If you forget to change the WordPress Address and Blog Address, you will be unable to change it using the WordPress interface. However, you can fix it if you have access to the database. Go to the database of your site and find the wp\_options table. This table stores all the options that you can set in the interface. The WordPress Address and Blog Address are stored as `siteurl` and `home` (the option\_name field). All you have to do is change the option\_value field to the correct URL for the records with `option_name='siteurl‘` or `option_name='home‘`.

Note: Sometimes, the WordPress Address and Blog Address are stored in [WordPress Transients](#apis/handbook/transients). Search and replace scripts can have trouble modifying those to the new address and some plugins might therefore refer to the old address because of them. Transients are temporary (cached) values stored in the wp\_options database table that can be recreated on-demand when removed. It’s therefore safe to delete them from the migrated database copy and let them be recreated. This database query (again, have a backup!) clears all transients:

```
DELETE FROM `wp_options` WHERE option_name LIKE '%\_transient\_%' 

```

#### If You Have Accidentally Changed your WordPress Site URL

Suppose you accidentally changed the URIs where you cannot move the files (but can still access the login page, through a redirection or something).

`wp-login.php` can be used to (re-)set the URIs. Find this line:

```
require( dirname(__FILE__) . '/wp-load.php' );

```

and insert the following lines below:

```
//FIXME: do comment/remove these hack lines. (once the database is updated)
update_option('siteurl', 'https://example.com/the/path' );
update_option('home', 'https://example.com/the/path' );

```

You’re done. Test your site to make sure that it works right. If the change involves a new address for your site, make sure you let people know the new address, and consider adding some redirection instructions in your `.htaccess` file to guide visitors to the new location.

[Changing The Site URL](#advanced-administration/upgrade/migrating) also provides the details of this process.

## Managing Your Old Site

### Shutting It Down

1. Download a copy of the main WordPress files from your OLD site to your hard drive and [edit wp-config.php](#advanced-administration/wordpress/wp-config) to suit the new server.
2. Go back to your OLD site and go to [Administration](https://wordpress.org/documentation/article/administration-screens/) &gt; [Settings](https://wordpress.org/documentation/article/administration-screens/#settings-configuration-settings) &gt; [General](https://wordpress.org/documentation/article/settings-general-screen/) screen and change the URL (both of them) to that of your new site.
3. Login on your server, go to phpMyAdmin, export as file, and save your database (but keep the old one just in case). Now, upload this new database and the copy of the wordpress core files with the edited wp-config.php to your new server. That’s it!

#### Keeping it Running

Caution: Make sure you have a backup of your old site’s WordPress database before proceeding!

*Part A – Activating Your New Site*

1. Download your entire WordPress installation to your hard drive. Name the folder appropriately to indicate that this is your OLD site’s installation.
2. Download your database.
3. Go back to your OLD site and go to options and change the url (both of them) to that of your new site.
4. Again, download your entire WordPress installation to your hard drive. Name the folder appropriately to indicate that this is your NEW site’s installation.
5. Download your database once again (but keep the old one). Upload this database to your new server. It will be easiest if you use the same database name and you create a user with the same login credentials on your new server as on your old server.
6. If you used a different database name and/or user (see previous step), [edit wp-config.php](#advanced-administration/wordpress/wp-config) in your NEW site’s installation folder appropriately.
7. Upload the NEW site’s installation folder to your new site. Presto, your NEW site should be working!

*Part B – Restoring Your Old Site*

1. On the original server, delete your OLD site’s database (remember, you should have a copy on your local computer that you made at the very beginning).
2. Upload your OLD site’s installation folder to your original server, overwriting the files that are currently there (you may also delete the installation folder on the server and simply re-upload the OLD site’s files).
3. Upload your OLD site’s database from your local computer to the server. That should do it!

Another procedure for making copies of posts, comments, pages, categories and custom field (post status, data, permalinks, ping status, etc.) easy to follow:

1. Install a new WordPress site
2. Go to the old site Admin panel. Here, in Manage &gt; Export select “all” in the menu Restrict Author.
3. Click on Download Export File
4. In the new site go to Manage &gt; Import, and choose WordPress item.
5. On the page that will be shown, select the file just exported. Click on Upload file and Import
6. It will appear on a page. In Assign Authors, assign the author to users that already exist or create new ones.
7. Click on Submit
8. At the end, click on Have fun

*Note: using this method, if there are some articles in the new site (like Hello World, Info Page, etc.), these will not be erased. Articles are only added. Using the former procedure, the articles in the new site will be deleted.*

## Moving WordPress Multisite

[Multisite](#advanced-administration/multisite/create-network) is somewhat more complicated to move, as the database itself has multiple references to the server name as well as the folder locations. If you’re simply moving to a new server with the same domain name, you can copy the files and database over, exactly as you would a traditional install.

If, instead, you are changing domains, then the best way to move Multisite is to move the files, edit the `.htaccess` and `wp-config.php` (if the folder name containing Multisite changed), and then manually edit the database. Search for all instances of your domain name, and change them as needed. This step cannot yet be easily automated. It’s safe to search/replace any of the `wp_x_posts` tables, however do not attempt blanket search/replace without the [Search and Replace for WordPress Databases](https://github.com/interconnectit/Search-Replace-DB) script (aka the interconnectit script).

If you’re moving Multisite from one folder to another, you will need to make sure you edit the `wp_blogs` entries to change the folder name correctly. You should manually review both `wp_site` and `wp_blogs` regardless, to ensure all sites were changed correctly.

Also, manually review all the wp\_x\_options tables look for three fields, and edit them as needed:

- home
- siteurl
- fileupload\_url

If you are moving from subdomains to subfolders, or vice-versa, remember to adjust the .htaccess file and the value for SUBDOMAIN\_INSTALL in your `wp-config.php` file accordingly.

### Related Links

- [Moving a blog from wordpress.com to self-hosted blog](https://problogger.com/how-to-move-from-wordpresscom-to-wordpressorg/)
- [Moving WordPress to a new domain or server](https://sltaylor.co.uk/blog/moving-wordpress-new-domain-server/)
- [Italian version of this article – Versione italiana dell’articolo](https://www.valent-blog.eu/2007/09/14/trasferire-wordpress/)
- [Search and Replace for WordPress Databases](https://interconnectit.com/search-and-replace-for-wordpress-databases/)
- [PHP script to replace site url in WordPress database dump, even with WPML](http://blog.lavoie.sl/2012/07/php-script-to-replace-site-url-in.html)
- [The Duplicator plugin helps administrators move a site from one location to another](https://wordpress.org/plugins/duplicator/)
- [Technical tutorial on moving your WordPress blog to Bitnami’s AWS configuration](https://agileweboperations.com/2011/01/20/migrate-your-wordpress-blog-to-a-bitnami-ec2-instance/)

# Migrating multiple blogs into WordPress multisite

This tutorial explains how to migrate multiples WordPress installs to a WordPress multisite install. You can migrate sites that use their own domain names, as well as sites that use a subdomain on your primary domain.

This tutorial assumes that you are hosting WordPress on a server using cPanel. If you are using another solution to manage your server, you’ll have to adapt these instructions.

### Steps to Follow

#### Backup your site

Generate a full site backup in cPanel. It might also help to copy all the files on the server via FTP, so that you can easily access the files for plugins and themes, which you’ll need in a later step.

#### Export from your existing WordPress installs

In each of your existing WordPress installations, go to Tools &gt; Export in WordPress. Download the WXR files that contain all your posts and pages for each site. See the instructions on the [Tools Export Screen](https://wordpress.org/documentation/article/tools-export-screen/).

Make sure that your export file actually has all the posts and pages. You can verify this by looking at the last entry of the exported file using a text editor. The last entry should be the most recent post.

Some plugins can conflict with the export process, generating an empty file, or a partially complete file. To be on the safe side, you should probably disable all plugins before doing the exports.

It’s also a good idea to first delete all quarantined spam comments as these will also be exported, making the file unnecessarily large.

**Note:** Widget configuration and blog/plugin settings are NOT exported in this method. If you are migrating within a single hosting account, make note of those settings at this stage, because when you delete the old domain, they will disappear.

#### Install WordPress

Install WordPress. Follow the instructions for [Installing WordPress](#advanced-administration/before-install/howto-install).

#### Activate multisite

Activate multi-site in your WordPress install. This involves editing `wp-config.php` a couple of times. You need to use the subdomain, not the subdirectory, option. See the instructions on how to [Create A Network](#advanced-administration/multisite/create-network).

#### Create blogs for each site you want to import

Create blogs for each of the sites you want to host in separate domains. For example, `importedblogdotorg.mydomain.com`.

Note: choose the name carefully, because changing it causes admin redirection issues. This is particularly important if you are migrating a site within the same hosting account.

#### Import WXR files for each blog

Go to the backend of each blog, and import the exported WXR file for each blog. Map the authors to the proper users, or create new ones. Be sure to check the box that will pull in photos and other attachments. See the instructions on Tools Import SubPanel.

**Note:** If you choose to import images from the source site into the target site, make sure they have been uploaded into the right place and are displayed correctly in the respective post or page.

#### Edit WordPress configuration settings for each site

Edit the configuration settings, widget, etc. for each site. By the end of this step, each site should look exactly as it did before, only with the URL `subdomain.example.com` or `example.com/subsite` rather than its correct, final URL.

#### Limitations of PHP configuration

You may run into trouble with the PHP configuration on your host. There are two potential problems. One is that PHP’s `max_upload_size` will be too small for the WXR file. The other problem is that the PHP memory limit might be too small for importing all the posts.

There are a couple of ways to solve it. One is to ask your hosting provider to up the limits, even temporarily. The other is to put a php.ini file in your /wp-admin/ and /wp-includes directories that ups the limits for you (php.ini files are not recursive, so it has to be in those directories). Something like a 10 MB upload limit and a 128 MB memory limit should work, but check with your hosting provider first so that you don’t violate the terms of your agreement.

Search the [WordPress forum support](https://wordpress.org/support/forums/) for help with PHP configuration problems.

#### Converting add-on domains to parked domains

Deleting add-on domains in cPanel and replacing them with parked domains will also delete any domain forwarders and e-mail forwarders associated with those domains. Be aware of this, so that you can restore those forwarders once you’ve made the switch.

#### Limitations of importing users

As there is the above way to import the content into an instance of the Multisite-blog, you are running into massive troubles, when it gets to import multiple users. Users are generated during the import, but you won’t get any roles or additional information into the new blog.

#### Losing settings

If the old site is no longer available and you find you have forgotten to copy some setting or you want to make sure you have configured everything correctly, run a google search for your site and then click to view the cached version. This option is available only until your new site has been crawled, so you’d better be quick.

Another option might be the [Internet Archive Wayback Machine](https://archive.org/web/). They may have a copy of the site (or some part of it) archived.

---

# WordPress Multisite / Network <a name="advanced-administration/multisite" />

Source: https://developer.wordpress.org/advanced-administration/multisite/

WordPress Multisite is a feature of WordPress that enables you to create several instances of WordPress managed within one installation. You need to have rewrites enabled to use multisite. Check the [server requirements](#advanced-administration/multisite/prepare-network) for details.

One can use a multisite for a variety of purposes. Multisite is, for example, used by business sites that share some resources, such as the theme or plugins, and have different content for their regions.

The content in a Multisite has its own unique tables in the database, only the user table is shared between the instances.

You can create a multisite that works with subdirectories (“path-based”) or use domains or subdomains (“domain-based”). For how to map the domains, see [WordPress Multisite Domain Mapping](#advanced-administration/multisite/domain-mapping)

---

# Before You Create A Network <a name="advanced-administration/multisite/prepare-network" />

Source: https://developer.wordpress.org/advanced-administration/multisite/prepare-network/

This section outlines some requirements to consider before you begin [creating a multisite network](#advanced-administration/multisite/create-network).

## Do you really need a network?

The sites in a multisite network are separate, very much like the separate blogs at WordPress.com. They are not *interconnected* like things in other kinds of networks (even though plugins can create various kinds of interconnections between the sites). If you plan on creating sites that are strongly interconnected, that share data, or share users, then a multisite network might not be the best solution.

For example, if all you want is for different collections of web pages to look very different, then you can probably achieve what you want in a single site by using a plugin to switch themes, templates, or stylesheets.

For another example, if all you want is for different groups of users to have access to different information, then you can probably achieve what you want in a single site by using a plugin to switch capabilities, menus, and link URLs.

This guide describes how to install manually WordPress Multisite in your current WordPress installation.

## Types of multisite network

You can choose between several different types of multisite network depending on how you want your network to handle URLs, and on whether it will allow end users to create new sites on demand.

Different types of network have different server requirements, which are described in a section below. If you do not have full control over your server then certain types of multisite network might not be available to you. For example, you might not have full control over your server because you use a shared hosting environment. In that case you will have to negotiate the requirements with whoever operates the hosting environment.

The sites in a network have different URLs. You can choose one of two ways for the URL to specify the site:

- Each site has a different *subdomain*. For example: `site1.example.com`, `site2.example.com`.
- Each site has a different *path*. For example: `example.com/site1`, `example.com/site2`

Additionally, you can map domains like `example1.com`, `example2.com`, etc, however a plugin is suggested. You can make the changes directly in the network settings, but it’s considered advanced administration.

[![Administration managing sites screen](https://i0.wp.com/wordpress.org/support/files/2018/11/sites-edit-site_4.7.png?fit=612%2C235&ssl=1)](https://i0.wp.com/wordpress.org/support/files/2018/11/sites-edit-site_4.7.png?fit=612%2C235&ssl=1)

Administration managing sites

You can also choose whether or not to allow end users to create new sites on demand. Domain-based on-demand sites are normally only possible using subdomains like `site1.example.com` and `site2.example.com`. Path-based on-demand sites are also possible.

The multisite installation process uses different terminology. A *sub-domain install* creates a domain-based network, even though you might use separate mapped domains, and not subdomains, for your sites. A *sub-directory install* creates a path-based network, even though it does not use file system directories. If you want to use a *sub-domain* install, you must install WordPress in the root of your webpath (i.e. domain.com) however it does *not* need to be installed in the root (i.e. /public\_html/) if you choose to run WordPress from its own directory.

After the multisite network installation is complete, WordPress uses the terminology *domain* and *path* for each site’s domain and path in the Network Admin user interface. A super admin (that is, a multisite network administrator) can edit sites’ domain and path settings, although it is unusual to do this to established sites because it changes their URLs.

Plugins can extend the options available and help with administration. Search [Plugin Directory](https://wordpress.org/plugins/) by ‘multisite’ or click [this link](https://wordpress.org/plugins/search/multisite/).

## Admin Requirements

To create a multisite network you must be the administrator of a WordPress installation, and you normally need access to the server’s file system so that you can edit files and create a directory. For example, you could access the server’s file system using [FTP](https://wordpress.org/documentation/article/glossary#ftp), or using the File Manager in [cPanel](https://wordpress.org/documentation/article/glossary#cpanel), or in some other way.

You do not necessarily need any knowledge of WordPress [development](https://wordpress.org/documentation/article/glossary#developer), [PHP](https://wordpress.org/documentation/article/glossary#php), [HTML](https://wordpress.org/documentation/article/glossary#html), [CSS](https://wordpress.org/documentation/article/glossary#css), server administration or system administration, although knowledge of these things might be useful for troubleshooting or for customizing your multisite network after installation.

## Server Requirements

When you are planning a network, it can sometimes be helpful to use a development server for initial testing. However, setting up a development server that exactly matches your production server is not always possible, and transferring an entire network to a production server may not be easy. A test site on your production server is sometimes a more useful way to test your planned network.

In all cases, you will need to make sure your server can use the more complex .htaccess (or nginx.conf or web.config) rules that Multisite requires.

Multisite requires [mod\_rewrite](https://wordpress.org/documentation/article/glossary#mod-rewrite) to be loaded on the Apache server, support for it in [.htaccess](https://wordpress.org/documentation/article/glossary#htaccess) files, and Options FollowSymLinks either already enabled or at least not permanently disabled. If you have access to the server configuration, then you could use a Directory section instead of a .htaccess file. Also make sure that your httpd.conf file is set for “AllowOverride” to be “All” or “Options All” for the vhost of the domain. You can ask your webhost for more information on any of this.

Some server requirements depend on the type of multisite network you want to create, as follows.

### Domain-based

Also known as ‘Subdomain’ installs, a Domain-based network uses URLs like https://subsite.example.com

A domain-based network maps different domain names to the same directory in the server’s file system where WordPress is installed. You can do this in various ways, for example:

- by configuring wildcard subdomains
- by configuring virtual hosts, specifying the same document root for each
- by creating addon domains or subdomains in [cPanel](https://wordpress.org/documentation/article/glossary#cpanel) or in a similar web hosting control panel

On-demand domain-based sites require the wildcard subdomains method. You can create additional sites manually in the same network using other methods.

Whichever methods you use, you will need to configure your DNS (to map the domain name to the server’s IP address) and server (to map the domain name to the WordPress installation directory). WordPress will then map the domain name to the site.

WordPress *should* be run from the root of your webfolder (i.e. `public_html`) for subdomains to work correctly. Making subdomains work from a non-root directory requires experience with Virtual Hosts and redirects.

External links:

- [Wildcard DNS record](https://en.wikipedia.org/wiki/Wildcard_DNS_record) (Wikipedia)
- [Apache Virtual Host](https://httpd.apache.org/docs/2.0/en/vhosts/) (Apache HTTP Server documentation)
- [cPanel Domains](https://documentation.cpanel.net/display/74Docs/cPanel+Features+List#DomainsTab) (cPanel documentation)

For some examples of how to configure wildcard subdomains on various systems, see: [Configuring Wildcard Subdomains](https://wordpress.org/documentation/article/configuring-wildcard-subdomains/)

### Path-based

Also known as ‘Subfolder’ or ‘Subdirectory’ installs, a path-based network uses URLs like https://example.com/subsite

If you are using pretty permalinks in your site already, then a path-based network will work as well, and you do not need any of the other information in this section. That said, be aware that your main site will use the following URL pattern for posts: https://example.com/blog/\[postformat\]/

At this time, you **cannot** remove the blog slug without manual configuration to the network options in a non-obvious place. It’s not recommended.

## WordPress Settings Requirements

When you install a multisite network you start from an existing WordPress installation. If it is a fresh install with its own domain name, then you do not need to read this section. If it is an established site, or not reachable using just a domain name, then the following requirements apply to allow it to be converted to a multisite network.

### Be Aware

[Giving WordPress its own directory](#advanced-administration/server/wordpress-in-directory) works with Multisite as of 3.5, however you must make the ‘own directory’ changes before you activate Multisite.

While it’s not recommended to use www in your domain URL, if you chose to do so and plan to use *subdomains* for multisite, make sure that **both** the site address and the WordPress address are the same. Also keep in mind some hosts will default to showing this sort of URL:

[![](https://i0.wp.com/wordpress.org/support/files/2018/11/no-www.png?fit=474%2C215&ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/no-www.png?ssl=1)

For this, and many other reasons, we do not suggest you use www in your domain name whenever possible. If you plan on changing them to `domain.com` or `www.domain.com`, do so *before* you begin the rest of the setup for multisite, as changing the domain name after the fact is more complicated.

### Restrictions

You **cannot create a network** in the following cases:

- “WordPress address (URL)” uses a port number other than ‘:80’, ‘:443’.

You *cannot choose **Sub-domain** Install* (for a domain-based network) in the following cases:

- The WordPress URL contains a path, not just a domain. (That is, WordPress is not installed in a document root, or you are not using the URL of that document root.)
- “WordPress address (URL)” is `localhost`.
- “WordPress address (URL)” is IP address such as 127.0.0.1.

(Note that you can create a domain-based network on your local machine for testing purposes by using your hosts file to map some other hostnames to the IP address 127.0.0.1, so that you never have to use the hostname `localhost`.)

You *cannot choose **Sub-directory** Install* (for a path-based network) if your existing WordPress installation has been set up for more than a month, due to issues with existing permalinks. (This problem will be fixed in a future version. See [Switching network types](#advanced-administration/multisite/administration) for more information.)

*See `wp-admin/network.php` for more detail)*

---

# Create A Network <a name="advanced-administration/multisite/create-network" />

Source: https://developer.wordpress.org/advanced-administration/multisite/create-network/

You have the ability to create a [network](https://wordpress.org/documentation/article/glossary/#network) of [sites](https://wordpress.org/documentation/article/glossary/#site) by using the [multisite](https://wordpress.org/documentation/article/glossary/#multisite) feature. This article contains instructions for creating a multisite network. It is advised to read the post “[Before you Create a Network](#advanced-administration/multisite/prepare-network)” first, as it contains important information about planning your network.

A multisite network can be very similar to your own personal version of WordPress.com. End users of your network can create their own sites on demand, just like end users of WordPress.com can create blogs on demand. If you do not have any need to allow end users to create their own sites on demand, you can create a multisite network in which only you, the administrator, can add new sites.

A multisite network is a collection of sites that all share the same WordPress installation core files. They can also share plugins and themes. The individual sites in the network are *virtual* sites in the sense that they do not have their own directories on your server, although they do have separate directories for media uploads within the shared installation, and they do have separate tables in the database. **NOTE:** [Upgraded and can’t find the Network Admin menu?](#advanced-administration/multisite/administration).

## Step 0: Before You Begin

Compared with a typical single WordPress installation a network installation has additional considerations. You must decide if you want to use subdomains or subfolders and how you want to manage them. Installing themes and plugins is different: for example, each individual site of a network can activate both, but install neither.

This guide describes how to install manually WordPress Multisite in your current WordPress installation. There are also available [ready-to-run packages](https://codex.wordpress.org/User:Beltranrubo/BitNami_Multisite) from BitNami.

**Please read [Before You Create A Network](#advanced-administration/multisite/prepare-network) in full before continuing.**

## Step 1: Prepare Your WordPress

Your existing WordPress site will be updated when creating a network. Unless this is a fresh install and you have nothing to lose, please [backup your database and files](#advanced-administration/security/backup).

Verify that [Pretty Permalinks](https://wordpress.org/documentation/article/using-permalinks/) work on your single WP instance.

Also deactivate all active plugins. You can reactivate them again after the network is created.

If you plan to [run WordPress out of its own directory](#advanced-administration/server/wordpress-in-directory), do that *before* activating Multisite.

## Step 2: Allow Multisite

To enable the Network Setup menu item, you must first define multisite in the [wp-config.php](#advanced-administration/wordpress/wp-config) file.

Open up `wp-config.php` and add this line **above** where it says `/* That's all, stop editing! Happy publishing. */`. If it doesn’t say that anywhere, then add the line somewhere above the first line that begins with `require` or `include`:

```
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

```

You will need to refresh your browser to continue.

## Step 3: Installing a Network

The previous step enables the **Network Setup** item in your **Tools menu**. Use that menu item to go to the **Create a Network of WordPress Sites** screen.

To see an example of the Create a Network of WordPress Sites screen, look at [Administration](https://wordpress.org/documentation/article/administration-screens/) &gt; [Tools](https://wordpress.org/documentation/article/administration-screens/#tools-managing-your-blog) &gt; [Network Setup](https://wordpress.org/documentation/article/tools-network-screen/). The screen does not look exactly the same in all circumstances. The example shown is for an installation on `localhost`, which restricts the options available.

[![Create a Network of WordPress Sites page](https://i0.wp.com/wordpress.org/support/files/2018/11/network-create.png?fit=1024%2C743&ssl=1)](https://i0.wp.com/wordpress.org/support/files/2018/11/network-create.png?fit=1024%2C743&ssl=1)  
*Create a Network of WordPress Sites page*

**Addresses of Sites in your Network**

You are given the choice between sub-domains and sub-directories, except when [existing settings](#advanced-administration/multisite/prepare-network#wordpress-settings-requirements) restrict your choice.

You must choose one or the other. You can reconfigure your network to use the other choice after installation, despite the advice on the screen, but reconfiguring it might not be easy.

You only need wildcard DNS for on-demand domain-based sites, despite the advice that may be on the screen.

Once more: See [Before You Create A Network](#advanced-administration/multisite/prepare-network).

- **Sub-domains** — a domain-based network in which on-demand sites use subdomains
- **Sub-directories** — a path-based network in which on-demand sites use paths

**Network Details**

These are filled in automatically, but you can make changes. `Server Address`: the domain of the URL you are using to access your WordPress installation. `Network Title`: the title of your network as a whole. `Network Admin E-mail`: your email address as super admin of the network as a whole.

Double-check the details and press the **Install** button.

**Note:** The installer may perform a check for wildcard subdomains when you have not configured them yet, or when you do not need them at all. Ignore the warning if it does not apply to your network. See the [Server Requirements](#advanced-administration/multisite/prepare-network#server-requirements) section in [Before You Create A Network](#advanced-administration/multisite/prepare-network) for information about wildcard subdomains.

## Step 4: Enabling the Network

To enable your network, follow the instructions on the Create a Network of WordPress Sites screen. The instructions that you see are customized for your installation. They might not be the same as the examples you see here.

[![Populated settings when creating a network of sites](https://i0.wp.com/wordpress.org/support/files/2018/11/tools-network-created.png?fit=1024%2C742&ssl=1)](https://i0.wp.com/wordpress.org/support/files/2018/11/tools-network-created.png?fit=1024%2C742&ssl=1)  
*Populated settings when creating a network of sites*

Back up your existing `wp-config.php` and `.htaccess` files, unless this is a fresh install and you have nothing to lose.

There are two steps:

1. Add the specified lines to your [wp-config.php](#advanced-administration/wordpress/wp-config) file The extra lines go just after where you added the line in [Step 1: Prepare Your WordPress](#advanced-administration/multisite/create-network).
2. Add the specified lines to your `.htaccess` file If you do not have a `.htaccess` file, then create it in the same directory as your `wp-config.php` file. If you *ALREADY* have a `.htaccess` file, replace any existing WP lines with these new ones. In some cases you might also have to add Options FollowSymlinks at the start of the file.

After completing these steps, log in again using the link provided. You might have to clear your browser’s cache and cookies in order to log in.

## Step 5: Network Admin Settings

[![](https://i0.wp.com/wordpress.org/support/files/2018/11/network-admin-link.png?fit=383%2C184&ssl=1)](https://i0.wp.com/wordpress.org/support/files/2018/11/network-admin-link.png?fit=383%2C184&ssl=1)

At the left of your WordPress toolbar, **My Sites** is now the second item. There, all your sites are listed, with handy fly-out menus, as well as a **Network Admin** menu item. Under **Network Admin** you can use the **Dashboard** item to go to the Network Dashboard screen.

Go to the [Settings Screen](#advanced-administration/multisite/admin) to configure network options, and the [Sites Screen](#advanced-administration/multisite/admin#Sites) to manage your sites.

For more information, see: [Network Admin](#advanced-administration/multisite/admin)

[Upgraded and can’t find the Network Admin menu?](#advanced-administration/multisite/administration)

## Step 6: Administration

There are some additional things you might need to know about advanced administration of the network, due to the additional complexity of a Multisite. Even if you’re familiar with WordPress, the location and behavior of Multisite Network Administration can be confusing.

Read [Multisite Network Administration](#advanced-administration/multisite/administration) for more information.

For help troubleshooting:

- [Debugging a WordPress Network](#advanced-administration/debug/debug-network)

## Related Articles

- [Hosting WordPress](https://wordpress.org/documentation/article/hosting-wordpress/)
- [Installing Multiple Blogs](#advanced-administration/before-install/multiple-instances)
- [How to adapt my plugin to Multisite?](https://stackoverflow.com/questions/13960514/how-to-adapt-my-plugin-to-multisite/)

---

# WordPress Multisite Domain Mapping <a name="advanced-administration/multisite/domain-mapping" />

Source: https://developer.wordpress.org/advanced-administration/multisite/domain-mapping/

WordPress multisite subsites may be mapped to a non-network top-level domain. This means a site created as subsite1.networkdomain.com, can be mapped to show as domain.com. This also works for subdirectory sites, so networkdomain.com/subsite1 can also appear at domain.com. Before setting up domain mapping, make sure your network has been correctly set up, and subsites can be created without issues.

Before WordPress 4.5, domain mapping requires a domain mapping plugin like [WordPress MU Domain Mapping](https://wordpress.org/plugins/wordpress-mu-domain-mapping).

In WordPress 4.5+, domain mapping is a native feature.

## Map Domains in DNS

Make sure all the domains you want to use are already mapped to your **DNS** server. The additional domains should be parked upon the master domain.

## Install SSL Certificates

Install SSL for the primary domain and use **SERVER NAME INDICATION** (SNI) for all other domains. Every domain should have SSL installed to ensure encrypted admin login.

## Update WordPress

In the network admin dashboard, click on Sites to show the listing of all the subsites, and then click on edit for the subsite you want to map to. In our example, this is subsite1.mynetwork.com.

In the Site Address (URL) field, enter the full URL to the domain name you’re mapping – https://example.com – and click save.

## Edit wp-config.php

If you get an error about cookies being blocked when you try to log in to your network subsite (or log in fails with no error message), open your wp-config.php file and add this line after the other code you added to create the network:

```
define( 'COOKIE_DOMAIN', $_SERVER['HTTP_HOST'] );

```

## Related Articles

1. [Create A Network](#advanced-administration/multisite/create-network)
2. [MultiSite Network Administration](#advanced-administration/multisite/administration)
3. [Installing Multiple Blogs](#advanced-administration/before-install/multiple-instances)

---

# Multisite Network Administration <a name="advanced-administration/multisite/administration" />

Source: https://developer.wordpress.org/advanced-administration/multisite/administration/

Once you’ve [created a Multisite Network](#advanced-administration/multisite/create-network), there are some additional things you might need to know about advanced administration, due to the additional complexity of a Multisite. Even if you’re familiar with WordPress, the structure and behavior of Multisite Network Administration might seem confusing at first.

## User Access &amp; Capabilities

By default, all users added to your network will have *subscriber* access to **all sites** of your network. To assign a different default role for users on individual sites, you need to use a plugin.

The capabilities of the site administrator role are also reduced in a WordPress Network. Site admins cannot install new themes or plugins and cannot edit the profiles of users on their site. Only the Network Admin (aka Super Admin) has the ability to perform these tasks in a WordPress network.

## Permalinks in SubFolder Installs

While permalinks will continue to work, the main site (i.e. the first one created) will have an extra entry of `blog`, making your URLs appear like `domain.com/blog/YYYY/MM/POSTNAME`.

This is by design, in order to prevent collisions with SubFolder installs. Currently there is no easy way to change it, as doing so prevents WordPress from auto-detecting collisions between your main site and any subsites. This will be addressed, and customizable, in a future version of WordPress.

Also note that the `blog` prefix is not used for static pages which will be accessible directly under the base address, e.g. `domain.com/PAGENAME`. If you try to create a static page in the first site with the name of another existing site on the network, the page’s permalink will get a suffix (e.g. `domain.com/PAGENAME-2`). If you create a new site with the slug of an existing static page, the static page will not be reachable anymore. To prevent this, you can add the names of your static pages to the blacklist so that no site with that name can be created.

## Uploaded File Path

Your first site on a fresh install will put uploaded files in the traditional location of `/wp-content/uploads/`, however all *subsequent* sites on your network will be in the `/wp-content/uploads/sites/` folder, in their own subfolder based on the site number, designated by the database. These files will be accessible via that URL.

This is a change from Multisite 3.0-3.4.2, where images of subsites were stored in `/wp-content/blogs.dir/` and were shown in https://example.com/files/ and https://example.com/sitename/files and so on. If you started with a Multisite install older than 3.5, it is *not* an error if your images show with the URL of `/files/`.

Regardless of WP version, these locations cannot be changed by site admins. Only the network admin can make changes on the site settings page. It is not recommended that you change these without understanding how both the `ms-files.php` works in conjunction with your `.htaccess`, as it can easily become non-functional. If the `/files/` urls aren’t working, it’s indicative of a misconfigured .htaccess or httpd.conf file on your server.

## Plugins

Plugins now have additional flexibility, depending upon their implementation across the network. All plugins are installed on the network dashboard’s plugin page, and can be activated either per-site or for the entire network.

- **Site Specific Plugins:** These plugins are activated from within the plugins page of a single specific site. Some plugins (contact forms, for example) work best when they are single-site activated, so that they can store data and settings in that single site’s database tables, instead of the tables for the whole network. WordPress Plugins to be single-site activated/deactivated are stored in the plugins directory.
- **Network Plugins:** Network admins may ‘network activate’ plugins in the Network Admin dashboard for plugins. Once ‘network activated’, plugins will become active in all sites. ‘Network Activated’ plugins are indicated as “Network Active” in plugin lists in the dashboards of individual sites. Some plugins only function in a multisite environment when they are network activated. WordPress Plugins that are Network Activated are also stored in the plugins directory.
- **Must-Use Plugins:** Plugins to be used by all sites on the entire network may also be installed in the mu-plugins directory as single files, or a file to include a subfolder. Any files within a folder will not be read. These files are not activated or deactivated; if they exist, they are used. These plugins are hidden entirely from per-site plugin lists.

Not all plugins in the repository will work in a multisite environment. Consult the plugin’s repository page or contact the developer for information about whether a specific plugin will function in a multisite network.

If you would like single site administrators to be able to activate/deactivate site-specific plugins for their site, you need to enable the Plugins page for single site administrators from the Network Admin’s Settings -&gt; Network Settings menu (“Menu Settings”). Network Admins will always have access to the plugins of every site. Administrators of a single site will be able to activate and deactivate plugins that are not Network Activated, but will see the Network Activated plugins as “Network Active” with no options for deactivation or settings.

There are plugins that will assist with mass activating/deactivating plugins for single sites.

## Themes

All themes are installed for the entire network. If you edit the code of one theme, you edit it for all sites using that theme. You can install the plugin [WP Add Custom CSS](https://wordpress.org/plugins/wp-add-custom-css/) to allow each site to tweak their own CSS without affecting anyone else. Also, individual sites may use the Theme Customizer, and their settings will be stored only in the tables for their site.

“Network Activating” a theme does not make it the active theme on each site, but merely makes it available to be activated on all individual sites. To be available for activation in the dashboard of a single site, a theme must be either network activated or enabled in Network Admin – Edit Site – Themes tab. After a theme has been activated in a single site, it may be network deactivated without affecting the single site where it remains activated.

By default, WordPress assigns the most recent “Twenty …” as the theme for all new sites. This can be customized by adding a line like `define('WP_DEFAULT_THEME', 'classic');` to your `wp-config.php` file, where ‘classic’ is replaced with the folder name of your theme.

## Categories and Tags

Global terms (i.e. sharing tags and categories between sites on the network) is not available in WordPress 3.0. You can use plugin to incorporate global tags on the portal/front page of the site or on specific pages or sites within the network to increase navigation based upon micro-categorized content.

## Content Sharing Between Sites

The sites of a network are separate sites that don’t by default share content. Think of your network as a mini version of WordPress.com. There are several plugins which may help you share content between your sites, [like this one](https://wordpress.org/plugins/network-posts-extended/).

## Switching network types

It’s possible to switch between domain-based (sub-domain) and path-based (sub-directory) installations of Multisite. If you have had WordPress installed for longer than a month on a single site, and are attempting to activate that site into a network, you will be told to use **Sub-domain** sites. This is in order to ensure you don’t have conflicts between pages (i.e. example.com/pagename ) and sites (i.e. example.com/sitename ). If you are confident you will not have this issue, then you can change this after you finish the initial setup.

In your `wp-config.php` file, you’ll want to change the define call for `SUBDOMAIN_INSTALL`: For a domain-based network (sub-domain install)

```
define( 'SUBDOMAIN_INSTALL', true );

```

For a path-based network (sub-directory install)

```
define( 'SUBDOMAIN_INSTALL', false );

```

You’ll also have to change your `.htaccess` to the new setup. You can go to Network Admin — Settings — Network Setup to find the new `.htaccess` rules, or see below.

Note that per the [Settings Requirements](#advanced-administration/multisite/prepare-network) you cannot switch from **Sub-directory** to **Sub-domain** when running on `127.0.0.1` or `localhost`. This can potentially cause an endless loop of reauth=1 on your root site due to cookie handling.

## Apache Virtual Hosts and Mod Rewrite

To enable mod\_rewrite to work within an Apache Virtual host you may need to set some options on the DocumentRoot.

```
<VirtualHost *:80>
    ...
    DocumentRoot /var/www/vhosts/wordpress
    <Directory /var/www/vhosts/wordpress>
        AllowOverride Fileinfo Options
    </Directory>
    ...
</VirtualHost>

```

In some instances, you will need to add All to your AllowOverride for all htaccess rules to be honored.

## .htaccess and Mod Rewrite

Unlike Single Site WordPress, which can work with “ugly” [Permalinks](https://wordpress.org/documentation/article/customize-permalinks/) and thus does not need Mod Rewrite, MultiSite *requires* its use to format URLs for your subsites. This necessitates the use of an .htaccess file, the format of which will be slightly different if you’re using SubFolders or SubDomains. The examples below are the standard .htaccess entries for WordPress SubFolders and SubDomains, when WordPress is installed in the root folder of your website. If you have WordPress in its own folder, you will need to change the value for RewriteBase appropriately.

As a reminder, these are **EXAMPLES** and work in most, but not all, installs.

**SubFolder Example**

WordPress 3.0 through 3.4+

```
# BEGIN WordPress
RewriteEngine On
RewriteBase /
RewriteRule ^index.php$ - [L]

# uploaded files
RewriteRule ^([_0-9a-zA-Z-]+/)?files/(.+) wp-includes/ms-files.php?file=$2 [L]

# add a trailing slash to /wp-admin
RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ $1wp-admin/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule ^[_0-9a-zA-Z-]+/(wp-(content|admin|includes).*) $1 [L]
RewriteRule ^[_0-9a-zA-Z-]+/(.*\.php)$ $1 [L]
RewriteRule . index.php [L]
# END WordPress

```

WordPress 3.5+ *ONLY use this if you STARTED Multisite on 3.5. If you upgraded from 3.4 to 3.5, use the old one!*

```
# BEGIN WordPress
RewriteEngine On
RewriteBase /
RewriteRule ^index.php$ - [L]

# add a trailing slash to /wp-admin
RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ $1wp-admin/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(wp-(content|admin|includes).*) $2 [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(.*\.php)$ $2 [L]
RewriteRule . index.php [L]
# END WordPress

```

**SubDomain Example**

WordPress 3.0 through 3.4+

```
# BEGIN WordPress
RewriteEngine On
RewriteBase /
RewriteRule ^index.php$ - [L]

# uploaded files
RewriteRule ^files/(.+) wp-includes/ms-files.php?file=$1 [L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule . index.php [L]
# END WordPress

```

WordPress 3.5+

```
# BEGIN WordPress
RewriteEngine On
RewriteBase /
RewriteRule ^index.php$ - [L]

# add a trailing slash to /wp-admin
RewriteRule ^wp-admin$ wp-admin/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule ^(wp-(content|admin|includes).*) $1 [L]
RewriteRule ^(.*\.php)$ wp/$1 [L]
RewriteRule . index.php [L]
# END WordPress

```

**Issues with old WPMU installs**

If you installed WordPress MU in subfolder/subdirectory (not in root folder on your server via ftp) and you have problem with image library, where thumbnails and images do not show, you may need to manually add in rewrite rules for your file directories as follows:

```
RewriteRule ^([_0-9a-zA-Z-]+/)?siteN/files/(.+) wp-content/blogs.dir/N/files/$2 [L]

```

Put those *below* the normal call for uploaded files.

## Network Admin Link Location

The Network Admin Link has moved with each major release of WordPress, as this is still a work in progress. Depending on which version of WordPress you are using, the link can be found in the following locations:

- 3.0 – A menu called *Super Admin*
- 3.1 – On the admin header by “Howdy, YOURNAME.”
- 3.2 – On the admin header, as a drop-down under “Howdy, YOURNAME.”
- 3.3+ – On the admin bar, as a drop-down under your “My Sites”

## Domain Mapping

Before WordPress 4.5, domain mapping requires a domain mapping plugin. In WordPress 4.5+, domain mapping is a native feature in Multisites. Learn how to use this feature at [WordPress Multisite Domain Mapping](#advanced-administration/multisite/domain-mapping)

## Moving Multisite

Moving Multisite is more complicated than moving a single install. Please read [Moving WordPress Multisite](#advanced-administration/upgrade/migrating) before continuing.

## Importing into a Network

When you’ve created your WordPress Network for importing other sites, you need to look at the [Migrating Multiple Blogs into WordPress Multisite](https://wordpress.org/documentation/article/migrating-multiple-blogs-into-wordpress-multisite/) article.

---

# Network Admin <a name="advanced-administration/multisite/admin" />

Source: https://developer.wordpress.org/advanced-administration/multisite/admin/

## Network Admin

**The Network Admin Screen** is the central access point to the various options necessary to administer the [Multisite (or Network)](https://wordpress.org/documentation/article/glossary#multisite) capabilities of WordPress. The information below is directed specifically for Network Administrators. Other users should see [Administration Screens](https://wordpress.org/documentation/article/administration-screens/) for information on using WordPress.

The Network Admin link is only visible after you [Create A Network](#advanced-administration/multisite/create-network). The menu will appear in the upper right of the menu bar, and is only visible to super admins. It has been moved to a separate location with the admin area, and is available from the admin area of any site, as long as you are logged in as the super admin user.

When visiting Network Admin you will see the Dashboard screen. This looks similar to a site dashboard, with one additional widget, and the site specific widgets removed. The Right Now widget has quick links to the Create a Site and Create a User screens, as well as search boxes to quickly find sites and users.

Each screen is accessed via the main navigation menu, presented in the boxes below. The links in those boxes will lead you to sections of this article describing those screens. From those sections, you can navigate to articles detailing more information about each screen.

### Dashboard

The Dashboard is information central and tells you about your network sites, provides news from the WordPress community, gives access to your plugins, and shows other WordPress news.

### Sites

Use the [Network Admin Sites Screen](https://wordpress.org/documentation/articles/network-admin-sites/screen) to review and manage the various sites that are part of your network. These sites will be either subdirectory or subdomain sites as determined by how the network was configured. From this screen you can access Info, Users, Themes, and Settings for each site in your Network.

Use the [Add New Sites Screen](#advanced-administration/multisite/admin) to add new sites to your network.

### Users

The [Network Admin Users Screen](https://codex.wordpress.org/Network_Admin_Users_Screen) is where Network Admin personnel manages users and [Add New Users Screen](https://codex.wordpress.org/Network_Admin_Users_Screen#Add_User) is used to add new users.

### Themes

The [Network Admin Themes Screen](https://codex.wordpress.org/Network_Admin_Themes_Screen) allows you to control which themes site administrators can use for each site. It does not activate or deactivate which theme a site is currently using. If the network admin disables a theme that is in use, it can still remain selected on that site. If another theme is chosen, the disabled theme will not appear in the site’s Appearance &gt; Themes screen. Themes can be enabled on a site by site basis by the network admin on the Edit Site screen you go to via the Edit action link on the Sites screen.

To add new themes, refer to the [Add New Theme](https://codex.wordpress.org/Network_Admin_Themes_Screen#Add_New_Theme) to understand the process of finding and installing new themes for your network.

Use the Theme Editor to edit the various files that comprise your Themes. The [Theme Editor Screen](https://codex.wordpress.org/Network_Admin_Themes_Screen#Theme_Editor) allows you to designate which theme you want to edit then displays the files in that theme. Each file (Template and CSS) in the theme can be edited in the large text box.

### Plugins

The [Network Admin Plugins Screen](https://codex.wordpress.org/Network_Admin_Plugins_Screen) allow you to add new features to your WordPress network that don’t come standard with the default installation. There are a rich variety of available Plugins for WordPress, and plugin installation and management is a snap.

Refer to the [Add New Plugins](https://codex.wordpress.org/Network_Admin_Plugins_Screen#Add_New_Plugins) to add new plugins. For information on downloading and installing plugins, see [Managing Plugins](https://wordpress.org/documentation/article/manage-plugins/).

Using the [Plugin Editor](https://codex.wordpress.org/Network_Admin_Plugins_Screen#Plugin_Editor), you can modify the source code of all your plugins.

### Settings

The [Network Admin Settings Screen](https://wordpress.org/documentation/article/network-admin-settings-screen/) is where a network admin sets and changes settings for the network as a whole. The first site is the main site in the network and network settings are pulled from that original site’s options.

Also, [Network Setup](https://wordpress.org/documentation/article/network-admin-settings-screen/) information that was used when [Creating the Network](#advanced-administration/multisite/create-network) can be accessed.

### Updates

The [Network Admin Updates Screen](#advanced-administration/multisite/admin) controls update process of both network and sites. In the [Available Updates Screen](#advanced-administration/multisite/admin#available-updates), you can update WordPress core, themes and plugins. After you updates to the latest version of WordPress, you can upgrade all the sites on your network from [Upgrade Network Screen](https://wordpress.org/documentation/article/network-admin-updates-screen/#upgrade-network).

## Network Admin Sites Screen

The **Network Admin Sites Screen** allows you to add a new site and control existing sites on your [network](https://wordpress.org/documentation/article/glossary#network).

[![](https://i1.wp.com/wordpress.org/support/files/2019/02/superadmin-sites.png?fit=1277%2C443&ssl=1)](https://wordpress.org/documentation/superadmin-sites-2/)  
*Super Admin Sites*

### Sites

Lists all sites on this network.  
– **Edit**: Click this link to go to Edit Site Screen to view/edit Settings of the site and add users.  
– **Dashboard**: Switch Administration Screens to the site’s one.  
– **Deactivate / Activate**: Deactivate / Activate the site.  
– **Archive**: Archive the site (same as Deactivate, effectively)  
– **Spam**: Mark the site as spam. Makes it unavailable to use for anyone.  
– **Delete**: Delete the site.  
– **Visit**: Go to the website.

#### Add Site

Fill in the items and click the *Add Site* button to add a new site into your network.

- **Site Address**: Only the characters a-z and 0-9 permitted.
- **Site Title**: Name of the site.
- **Admin Email**: Email address of the administrator of the new site. A new user will be created if the above email address is not in the database.  
    The username and password will be mailed to this email address.

#### Edit Site

The Edit Site screen is split up into tabs for easier data management. It is strongly suggested you not edit these fields unless you’re sure you know what you’re doing.

**Info**

This data is the basic information of the site. Domain, registration date, time of last update, and if it’s public or mature.

[![](https://i2.wp.com/wordpress.org/support/files/2019/02/superadmin-sites-edit.png?fit=1277%2C633&ssl=1)](https://wordpress.org/documentation/superadmin-sites-edit/)  
*Edit Site – Super Admin*

- **Users**: Users lists all the users of the site. It also has options to add new users, via either “Add Existing User” (i.e. a user on your network already) or “Add New User” (i.e. a new user to the network).
- **Themes**: Themes shows all the themes on the site. Network enabled themes are not shown on this screen.
- **Settings**: All site settings are stored in this table. Do not edit anything here unless you know what you’re doing.

## Network Admin Updates Screen

The **Network Admin Updates Screen** controls update process in the network. If an update is available, you’ll see a notification appear in the Toolbar and navigation menu. Keeping your site updated is important for security. It also makes the internet a safer place for you and your readers. There are two screens under the [Network Admin](#advanced-administration/multisite/admin) &gt; [Updates](#advanced-administration/multisite/admin#updates). In the default [Available Updates Screen](#available-updates), you can update WordPress, themes and plugins. After you updates to the latest version of WordPress, you can upgrade all the sites on your network from [Upgrade Network Screen](#upgrade-nework).

### Available Updates

On this [Available Updates Screen](#available-updates), you can update to the latest version of WordPress, as well as update your themes and plugins from the [WordPress.org](https://wordpress.org/) repositories.

[![](https://i0.wp.com/wordpress.org/documentation/files/2019/04/network-available-updates-1024x590.png?resize=1024%2C590&ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2019/04/network-available-updates.png?ssl=1)

#### How to Update

**WordPress** Updating your WordPress installation is a simple one-click procedure: just click on the “Update Now” button when you are notified that a new version is available. In most cases, WordPress will automatically apply maintenance and security updates in the background for you.

**Themes and Plugins**: To update individual themes or plugins from this screen, use the checkboxes to make your selection, then click on the appropriate “Update” button. To update all of your themes or plugins at once, you can check the box at the top of the section to select all before clicking the update button.

**Translation**: Translation files are updated when it is needed. Click the “Update Translation” button when you are notified that a new translation is available.

### Upgrade Network

This [Upgrade Network Screen](#upgrade-network) is used to upgrade all the sites in a [Network](https://wordpress.org/documentation/article/glossary#network) after a [WordPress upgrade](#available-updates) is completed. After a WordPress upgrade, you are reminded to visit the **Upgrade Networks** with a message such as, “Thank you for Updating! Please visit the Upgrade Network page to upgrade all of your sites.”

[![](https://i1.wp.com/wordpress.org/support/files/2019/04/superadmin-update.png?fit=1024%2C584&ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2019/04/superadmin-update.png?ssl=1)

The Upgrade Networks feature will step through each site, five at a time, and make sure any database changes are applied. This menu item is only visible if you are logged in as a Super Admin role user. You can access it from any site in the network.

If for any reason a site does not get upgraded, each site should be upgraded when the admin for that site logs in to the administration for that site. Sites that have been deactivated will not be upgraded by this process, however, if a site is reactivated, the site will get upgraded when an admin for that site logs in to the dashboard for that site.

**Upgrade Network** Click this button to start the upgrade process. Clicking the Upgrade Network button will step through each site in the network, five at a time, and make sure any database updates are applied.

If a version update to core has not happened, clicking this button won’t affect anything.

---

# Network Admin Settings Screen <a name="advanced-administration/multisite/admin/settings" />

Source: https://developer.wordpress.org/advanced-administration/multisite/admin/settings/

The **Network Admin Settings** is where a network admin sets and changes settings for the network as a whole. The first site is the main site in the network and network settings are pulled from that original site’s options.

![](https://i0.wp.com/wordpress.org/documentation/files/2020/02/superadmin-options.png?fit=1024%2C751&ssl=1)

## Operational Settings

**Network Name**

What you would like to call this website.

**Network Admin Email**

Registration and support emails will come from this address. An address such as *support@example.com* is recommended.

## Registration Settings

**Allow new registrations**

Disable or enable registration and who or what can be registered. (Default is disabled.)

- Registration is disabled. (default)
- User accounts may be registered.
- Logged in users may register new sites.
- Both sites and user accounts can be registered.

**Registration notification**

Send the network admin an email notification every time someone registers a site or user account.

**Add New Users**

Allow site administrators to add new users to their site via the “Users -&gt; Add New” page.

**Banned Names**

Users are not allowed to register these sites. Separate names by spaces.

**Limited Email Registrations**

If you want to limit site registrations to certain domains. Enter one domain per line.

**Banned Email Domains**

If you want to ban domains from site registrations. Enter one domain per line.

## New Site Settings

**Welcome Email**

```
The welcome email sent to new site owners.

Dear User,

Your new SITE_NAME blog has been successfully set up at:
BLOG_URL

You can log in to the administrator account with the following information:
Username: USERNAME
Password: PASSWORD
Login Here: BLOG_URLwp-login.php

We hope you enjoy your new blog.
Thanks!

--The Team @ SITE_NAME

```

**Welcome User Email**

```
The welcome email sent to new users.

Dear User,

Your new account is set up.

You can log in with the following information:
Username: USERNAME
Password: PASSWORD
LOGINLINK

Thanks!

--The Team @ SITE_NAME

```

**First Post**

The first post on a new site.

```
Welcome to <a href="SITE_URL">SITE_NAME</a>. This is your first post. Edit or delete it, then start blogging!

```

**First Page**

The first page on a new site.

**First Comment**

The first comment on a new site.

**First Comment Author**

The author of the first comment on a new site.

**First Comment URL**

The URL for the first comment on a new site.

## Upload Settings

**Site upload space**

Limit total size of files uploaded to \[ 50 \] MB.

**Upload file types**

Default is `jpg jpeg png gif mp3 mov avi wmv midi mid pdf m2ts`.

Note: Adding arbitrary file types will not work unless a corresponding function is also hooked to [upload\_mimes](#reference/hooks/upload_mimes) filter. See the `wp_get_mime_types` function in [wp-includes/functions.php](https://github.com/WordPress/WordPress/blob/master/wp-includes/functions.php) for the current default set of supported mime-types / file extensions. Adding mime types in the ‘upload file types’ field not listed in the default set will **NOT** work unless you’ve added them using the [upload\_mimes](#reference/hooks/upload_mimes) filter! Uploading files with mime types not supported (without adding them using the filter) will fail with the message “Sorry, this file type is not permitted for security reasons”.

**Max upload file size**

Default is \[ 1500 \] KB.

## Language Settings

**Default Language**

Default is English.

## Menu Settings

**Enable administration menus**

- Plugins

On WordPress Multisite the default setting for plugins is disabled. This means your users won’t have access to the plugin admin panel inside their dashboard unless you first enable access to plugins network wide.

---

# Migrate WordPress sites into WordPress Multisite <a name="advanced-administration/multisite/sites-multisite" />

Source: https://developer.wordpress.org/advanced-administration/multisite/sites-multisite/

This tutorial explains how to migrate multiples WordPress installs to a WordPress multisite install. You can migrate sites that use their own domain names, as well as sites that use a subdomain on your primary domain.

This tutorial assumes that you are hosting WordPress on a server using cPanel. If you are using another solution to manage your server, you’ll have to adapt these instructions.

## Steps to follow

### Backup your site

Generate a full site backup in cPanel. It might also help to copy all the files on the server via FTP, so that you can easily access the files for plugins and themes, which you’ll need in a later step.

### Export from your existing WordPress installs

In each of your existing WordPress installations, go Tools &gt; Export in WordPress. Download the WXR files that contain all your posts and pages for each site. See the instructions on the [Tools Export Screen](https://wordpress.org/documentation/article/tools-export-screen/).

Make sure that your export file actually has all the posts and pages. You can verify this by looking at the last entry of the exported file using a text editor. The last entry should be the most recent post.

Some plugins can conflict with the export process, generating an empty file, or a partially complete file. To be on the safe side, you should probably disable all plugins before doing the exports.

It’s also a good idea to first delete all quarantined spam comments as these will also be exported, making the file unnecessarily large.

Note: widget configuration and blog/plugin settings are NOT exported in this method. If you are migrating within a single hosting account, make note of those settings at this stage, because when you delete the old domain, they will disappear.

### Install WordPress

Install WordPress. Follow the instructions for [Installing WordPress](#advanced-administration/before-install/howto-install).

### Activate multisite

Activate multi-site in your WordPress install. This involves editing wp-config.php a couple of times. You need to use the subdomain, not the subdirectory, option. See the instructions on how to [Create A Network](#advanced-administration/multisite/create-network).

### Create blogs for each site you want to import

Create blogs for each of the sites you want to host at separate domains. For example, `importedblogdotorg.mydomain.com`.

Note: choose the name carefully, because changing it causes admin redirection issues. This is particularly important if you are migrating a site within the same hosting account.

### Import WXR files for each blog

Go to the backend of each blog, and import the exported WXR file for each blog. Map the authors to the proper users, or create new ones. Be sure to check the box that will pull in photos and other attachments. See the instructions on Tools Import SubPanel.

Note: if you choose to import images from the source site into the target site, make sure they have been uploaded into the right place and are displayed correctly in the respective post or page.

### Copy theme and plugin files

Before you start, check that your plugins will work in the network installation. If a plugin is not supported, do not install it. Find suitable alternatives for it by searching for the plugin’s function with “multisite” or even “mu”, as in “social bookmarking plugin wordpress multisite”.

Copy the theme and plugin files from your old WP installs to their respective directories in the new wp-content. You can activate themes for the network, or you can go to Superadmin &gt; Sites, then click edit on the site you want, and enable a given theme for just that site.

Note: if you are using a child theme, copy both parent and child themes to the new site.

### Edit WordPress configuration settings for each site

Edit the configuration settings, widget, etc. for each site. By the end of this step, each site should look exactly as it did before, only with the URL subdomain.example.com or example.com/subsite rather than its correct, final URL.

## Potential problems

### Limitations of PHP configuration

You may run into trouble with the PHP configuration on your host. There are two potential problems. One is that PHP’s `max_upload_size` will be too small for the WXR file. The other problem is that the PHP memory limit might be too small for importing all the posts.

There are a couple ways to solve it. One is to ask your hosting provider to up the limits, even temporarily. The other is to put a php.ini file in your `/wp-admin/` and `/wp-includes` directories that ups the limits for you (php.ini files are not recursive, so it has to be in those directories). Something like a 10 MB upload limit and a 128 MB memory limit should work, but check with your hosting provider first so that you don’t violate the terms of your agreement.

Search the [WordPress forum support](https://wordpress.org/documentation/forums/) for help with PHP configuration problems.

### Converting add-on domains to parked domains

Deleting add-on domains in cPanel and replacing them with parked domains will also delete any domain forwarders and e-mail forwarders associated with those domains. Be aware of this, so that you can restore those forwarders once you’ve made the switch.

### Limitations of importing users

As there is the above way to import the content into an instance of the Multisite-blog, you are running into massive troubles, when it gets to import multiple users. Users are generated during the import, but you won’t get any roles or additional information into the new blog.

### Losing settings

If the old site is no longer available and you find you have forgotten to copy some setting or you want to make sure you have configured everything correctly, run a google search for your site and then click to view the cached version. This option is available only until your new site has been crawled, so you’d better be quick.

Another option might be the [Internet Archive Wayback Machine](https://archive.org/web/). They may have a copy of the site (or some part of it) archived.

---

# Plugins <a name="advanced-administration/plugins" />

Source: https://developer.wordpress.org/advanced-administration/plugins/



---

# File Editor Screen <a name="advanced-administration/plugins/editor-screen" />

Source: https://developer.wordpress.org/advanced-administration/plugins/editor-screen/

Among the many user-editable files in a standard WordPress installation are the [Plugins](https://wordpress.org/plugins/) files. Though it should be rare that you need to change a Plugin code, the **Plugin File Editor Screen** allows you to edit those Plugin files.

You can find this editor in the following places depending on your theme:

- If you are using a [Block theme](https://wordpress.org/documentation/article/block-themes/), this editor will be listed under Tools.
- If you are using a Classic theme, this editor will be listed under Appearance.

![Edit Plugins Screen](https://i0.wp.com/raw.githubusercontent.com/WordPress/Advanced-administration-handbook/main/assets/edit-plugins.png?ssl=1)

![Edit Plugins warning](https://i0.wp.com/raw.githubusercontent.com/WordPress/Advanced-administration-handbook/main/assets/edit-plugins-warning.png?ssl=1)

## Edit Plugins

The built-in Plugin File Editor allows you to view or change any Plugin PHP code in the large text (or edit) box that dominates this Screen.

If a particular file is writeable you can make changes and save the file from here. If not, you will see the message **You need to make this file writable before you can save your changes**.

The name of the Plugin file being edited shows up at the top of the text box. Since Plugin files are pure text, no images or pictures can be inserted into the text box.

You can select a Plugin to edit from the dropdown menu on the top right. Just find a Plugin name and click “Select”.

### Plugin Files

Below the Plugin Selection Menu is a list of the Plugin files that can be edited. Click on any of the file links to place the text of that file in the text box.

Be very careful editing activated plugin files. The editor does not make backup copies. If you introduce an error that crashes your site, you cannot use the editor to fix the problem. In such a case, use FTP to either upload a functional backup of the problem file or change the folder name of the */plugins/* folder under */wp-content/*, which effectively deactivates all plugins until the folder is renamed correctly.

### Documentation Lookup

Under the editor, there is a dropdown menu listing function names found in the Plugin file you are editing. By selecting a function and clicking the “Lookup” button, you can view its documentation on [Code Reference](#reference) or [PHP](https://www.php.net/).

## Update File

Remember to click this button to save the changes you have made to the Plugin file. After clicking this button you should see a splash message at the top of the screen saying “File edited successfully”. If you don’t see that message, then your changes are not saved! Note that if a file is not writeable the Update File button will not be available.

---

# Must Use Plugins <a name="advanced-administration/plugins/mu-plugins" />

Source: https://developer.wordpress.org/advanced-administration/plugins/mu-plugins/

Must-use plugins (a.k.a. mu-plugins) are plugins installed in a special directory inside the content folder and which are automatically enabled on all sites in the installation. Must-use plugins do not show in the default list of plugins on the Plugins page of wp-admin (although they do appear in a special Must-Use section) and cannot be disabled except by removing the plugin file from the must-use directory, which is found in **wp-content/mu-plugins** by default. For web hosts, mu-plugins are commonly used to add support for host-specific features, especially those where their absence could break the site.

To change the default directory manually, define `WPMU_PLUGIN_DIR` and `WPMU_PLUGIN_URL` in [wp-config.php](https://wordpress.org/documentation/article/editing-wp-config-php/).

## Features

- Always on, no need to enable via admin and users cannot disable by accident.
- Can be enabled simply by uploading file to the mu-plugins directory, without having to log-in.
- Loaded by PHP, in alphabetical order, before normal plugins, meaning API hooks added in an mu-plugin apply to all other plugins even if they run hooked-functions in the global namespace.

## Caveats

Despite its suitability for many special cases, the mu-plugins system is not always ideal and has several downsides that make it inappropriate in certain circumstances. Below are several important caveats to keep in mind:

- Plugins in the must-use directory will not appear in the update notifications nor show their update status on the plugins page, so you are responsible for learning about and performing updates on your own.
- Activation hooks are not executed in plugins added to the must-use plugins folder. These hooks are used by many plugins to run installation code that sets up the plugin initially and/or uninstall code that cleans up when the plugin is deleted. Plugins depending on these hooks may not function in the mu-plugins folder, and as such all plugins should be carefully tested specifically in the mu-plugins directory before being deployed to a live site.
- WordPress only looks for PHP files right inside the mu-plugins directory, and (unlike for normal plugins) not for files in subdirectories. You may want to create a proxy PHP loader file inside the mu-plugins directory:

```
<?php // mu-plugins/load.php
require WPMU_PLUGIN_DIR.'/my-plugin/my-plugin.php';

```

## History and Naming

The *mu-plugins* directory was originally implemented by WPMU (Multi-User) to offer site admins an easy way to activate plugins by default on all blogs in the farm. There was a need for this feature because at the time the multi-user-specific code did not offer ways of achieving this effect using the site admin section (today the renamed “Multisite WordPress” has features to manage plugins from inside the admin).

The code handling /mu-plugins/ was merged into the main WordPress code on 03/07/09 with [this changeset](https://core.trac.wordpress.org/changeset/10737) a full 10 months before the wpmu codebase was initially merged, and all WP sites could take advantage of autoloaded plugins, whether they had MU/Multisite enabled or not. The feature is useful for all types of WP installations depending on circumstances, so this makes sense.

In this process the name “mu plugins” became a misnomer because it did not apply exclusively to multisite installs and because “MU” was not even being used anymore to refer to WP installations with multiple blogs. Despite this, the name was kept and **re-interpreted to mean “must-use plugins”**, i.e. these are plugins that must always be used, thus they are autoloaded on all sites regardless of the settings in the Plugins pane of wp-admin.

Thus “Must-Use” is effectively a [Backronym](https://en.wikipedia.org/wiki/Backronym), like [PHP](https://wordpress.org/documentation/article/wordpress-glossary/#PHP) (which originally meant “Personal Home Page” but was later re-interpreted as meaning “PHP Hypertext Preprocessor”, which is also a [Recursive Acronym](https://en.wikipedia.org/wiki/Recursive_acronym)).

## Source Code

- `get_mu_plugins()` is located in [wp-admin/includes/plugin.php](https://core.trac.wordpress.org/browser/tags/4.5.3/src/wp-admin/includes/plugin.php#L0).
- `wp_get_mu_plugins()` is located in [wp-includes/load.php](https://core.trac.wordpress.org/browser/tags/4.5.3/src/wp-includes/load.php#L0).

---

# Themes <a name="advanced-administration/themes" />

Source: https://developer.wordpress.org/advanced-administration/themes/

The Theme refers to the underlying technologies and components that come together to deliver the visual design and functionality of a WordPress website. It encompasses the server-side components that power WordPress, as well as the architecture and files specific to WordPress themes.

Understanding the technology behind WordPress themes on the server is fundamental to building and maintaining successful WordPress websites. Whether you’re a developer, designer, or administrator, this knowledge empowers you to create and manage themes effectively, ensuring a secure, high-performing, and visually appealing web presence.

## Technology of Themes

### Web Servers

Web servers (e.g., Apache, Nginx) handle incoming HTTP requests and serve web pages. They play a critical role in delivering WordPress themes to users.

### PHP

PHP is the server-side scripting language that WordPress is built upon. It processes requests, connects to the database, and generates dynamic content based on theme files and user input.

### Databases

WordPress relies on databases, typically MySQL, to store content, settings, and theme data. It retrieves information from the database to dynamically generate web pages.

### File Systems

File systems are used to store theme files, images, JavaScript, and CSS. Understanding the structure and organization of theme files is essential for theme development.

## Theme Architecture

WordPress themes consist of PHP template files, CSS stylesheets, JavaScript files, and other assets. Themes are organized within the `wp-content/themes` directory on the server.

Template files determine the layout and structure of web pages. Key templates include `header.php`, `footer.php`, and various content-specific templates like `single.php` and `page.php`.

### Style Sheets (CSS)

CSS files control the visual presentation of the theme. Styles are defined in CSS files and determine elements like colors, fonts, and layout.

### JavaScript

JavaScript files enhance website interactivity and functionality. These files can be included in themes for tasks like form validation, animations, and AJAX functionality.

### Functions.php

The `functions.php` file contains PHP functions and code for theme-specific features and customizations. It’s where you can add actions, filters, and custom functions to modify how the theme behaves.

## Workflow on your Webserver

### User Requests

When a user visits a WordPress site, the web server processes their request and forwards it to WordPress.

### WordPress Core

WordPress core, which includes PHP scripts and database queries, interprets the user’s request and retrieves content and settings.

### Theme Integration

The selected theme’s template files and styles are integrated into the content, and the final HTML, CSS, and JavaScript are generated and sent to the user’s browser.

## Customization and Optimization

### Child Themes

Child themes are used to extend and customize existing themes without modifying the original theme files. This allows you to make changes without losing updates or risking theme conflicts.

### Performance

Optimizing themes for performance includes minimizing server requests, reducing image sizes, and optimizing CSS and JavaScript. Caching techniques can also enhance loading speed.

### Security Considerations

Proper security practices include keeping themes and WordPress core up-to-date, securing database access, and sanitizing user input to prevent vulnerabilities.

---

# Security <a name="advanced-administration/security" />

Source: https://developer.wordpress.org/advanced-administration/security/

The goal of the page is to inform users who manage a WordPress site about general security best practices both in terms of environment level items, such as file permissions, as well as application-level items, such as setting up proper user roles, so they have a better foundation for security than setting up WordPress somewhere with no additional configuration.

**The most important thing to do for WordPress security is to keep WordPress itself and all installed plugins and themes up to date. It is also encouraged for users to choose themes and plugins that are actively receiving updates.**

WordPress is committed to providing a secure experience for users. Information about WordPress’s official stance on security and a general discussion about WordPress’s overall aims for security can be found on [WordPress.org’s Security page](https://wordpress.org/about/security/).

This guide borrows heavily from the WordPress Codex’s guide on [Hardening WordPress](https://wordpress.org/support/article/hardening-wordpress/). Since it’s publicly editable, advice in the codex should be viewed with caution.

Keeping any system, not just WordPress, secure is continuous work. Good security requires careful planning, monitoring, and periodic maintenance.

Security largely consists of reducing risk and planning for recovery. Most security plans focus on minimizing the risk of unauthorized access only, but risk can never be successfully reduced to zero. As long as there is some risk, you must plan for recovery so that if something were to happen, user sites are not completely lost and can be quickly restored to normal operation.

Security is also about more than WordPress. It is also about making sure your hosting environment is secure and your personal online practices and behaviors keep you safe. Good security depends on the technology in use and the people using the technology. Obsolete or out-of-date technology can have bugs or vulnerabilities that can put your WordPress website at risk. People’s bad online practices can also put your WordPress website as risk. It is important to make sure that not only do you keep the technology you use up-to-date and maintained but also that employees are using security best practices when using the Internet and when interacting with your hosting platform or customer WordPress sites.

---

# Your password <a name="advanced-administration/security/logging-in" />

Source: https://developer.wordpress.org/advanced-administration/security/logging-in/

Creating an extension [of this post about resetting your password](https://wordpress.org/documentation/article/resetting-your-password/), but placing all technical details here.

[See this issue on github on sections to take over](https://github.com/WordPress/Documentation-Issue-Tracker/issues/79) with the following note:  
– promote WP CLI above the other options, for being the safest.

---

# Two Step Authentication <a name="advanced-administration/security/mfa" />

Source: https://developer.wordpress.org/advanced-administration/security/mfa/

Also known as Two-Factor Authentication.

Two-step authentication is showing up all over the Internet as more sites look for better ways to secure logins, which are the weakest part of anything a user does online.

### What is Two-Step Authentication

Passwords are the de-facto standard for logging in on the web, but they’re relatively easy to break. Even if you make good passwords and change them regularly, they need to be stored wherever you’re logging in, and a server breach can leak them. There are three ways to identify a person, things they are, things they have, and things they know.

Logging in with a password is single-step authentication. It relies only on something you know. Two-step authentication, by definition, is a system where you use two of the three possible factors to prove your identity, instead of just one. In practice, however, current two-step implementations still rely on a password you know, but use your Phone or another device to authenticate with something you have.

#### Three Possible Factors

There are three possible ways to identify users.

**Something You Are**

There are a lot of properties that are unique to each user and can be used to identify them. The most popular is fingerprints, but retinas, voice, DNA, or anything else specific to an individual will work. This is called biometric information because these pieces of information all belong to a person’s biology.

Biometric factors are interesting because they are not easily forged and the user can never lose or forget them. However, biometric authentication is tricky because a lost fingerprint can never be replaced. If hackers were to gain access to a database of fingerprints, there is no way that users could reset them or get a new set.

In 2013, Apple released TouchID which lets users unlock their iPhones using their fingerprints. This technology is interesting because the fingerprints are stored locally on the phone, not in the cloud where they would be easier for hackers to steal. There are still trade-offs with this kind of approach, but it is the most widespread consumer use of biometric authentication to date.

**Something You Have**

Also known as the possession factor, users can be identified by the devices which they carry. Traditionally, a company that wanted to enable two-step authentication would distribute secure keychain fobs to users. The keychain fobs would display a new number every 30 seconds, and that number would be needed to be typed along with the password every time a user logged in.

Modern two-step authentication more frequently relies on a user’s smartphone than on a new piece of hardware. One common model of this uses SMS in order to provide an easy second factor. When the user enters their password, they are sent a text message with a unique code. By entering that code, after the password, they supposedly prove that they also have their phone. Unfortunately, SMS is not a secure communication channel, so smartphone apps and [plugins](#plugins-for-two-step-authentication) have been developed to create that secure channel.

**Something You Know**

The most familiar form of authentication is the knowledge factor, or password. As old as [Open Sesame](https://en.wikipedia.org/wiki/Open_sesame), passwords have long been a standard for anonymous authentication. In order for a knowledge factor to work, both parties need to know the password, but other parties must not be able to find or guess it.

The first challenge is in exchanging the password with the trusted party safely. On the web, when you register for a new site, your password needs to be sent to that site’s servers and might be intercepted in the process (which is why you should always check for SSL when registering or logging in — [HTTPS](#advanced-administration/security/https)).

Once the password has been received, it must be kept secret. The user shouldn’t write it down or use it anywhere else, and the site needs to carefully guard its database to ensure that hackers can’t access the passwords.

Finally, the password needs to be verified. When a user visits the site, they need to be able to provide the password and have it verified against the stored copy. This exchange can also be intercepted (and so should always be done over SSL — [HTTPS](#advanced-administration/security/https)) and exposes the user to another risk.

#### Benefits

There are a lot of different places to increase the security of a site, but the WordPress Security Team [has said](https://wpvip.com/security/) that “The weakest link in the security of anything you do online is your password,” so it makes sense to put energy into strengthening that aspect of your site.

#### Drawbacks

As the name implies, two-step authentication is adding a step to a process that can already be long and painful. While most very high-security logins are protected by two-step authentication today, most consumer applications barely offer it as an option if they offer it at all. This is because users are less likely to sign up for and log in to a service if it is more difficult.

Two-step authentication can also prevent legitimate logins. If a user forgets their phone at home and has two-step authentication enabled, then they won’t be able to access their account. This is one of the main reasons why smartphones have been useful for two-step authentication — users are more likely to be carrying their phones than almost anything else.

#### Plugins for Two-Step Authentication

You can [search for two-step authentication plugins](https://wordpress.org/plugins/tags/two-factor-authentication) available in the WordPress.org plugin repository. Here are some of the most popular ones to get you started (in alphabetical order):

- [Duo](https://wordpress.org/plugins/duo-wordpress/)
- [Google Authenticator](https://wordpress.org/plugins/google-authenticator/)
- [Rublon](https://wordpress.org/plugins/rublon/)
- [Two-Factor](https://wordpress.org/plugins/two-factor/)
- [WordFence](https://wordpress.org/plugins/wordfence/)

### Related

- [Brute Force Attacks](#advanced-administration/security/brute-force)

---

# Backups <a name="advanced-administration/security/backup" />

Source: https://developer.wordpress.org/advanced-administration/security/backup/

## WordPress Backups

*Note: Want to skip the hard stuff? Skip to Automated Solutions such as [WordPress Plugins](https://wordpress.org/plugins/search.php?q=backup) for backups.*

Your WordPress database contains every post, every comment and every link you have on your blog. If your database gets erased or corrupted, you stand to lose everything you have written. There are many reasons why this could happen, and not all are things you can control. With a proper backup of your WordPress database and files, you can quickly restore things back to normal.

Instructions to back up your WordPress site include:

1. WordPress Site and your WordPress Database
2. Automatic WordPress backup options

In addition, support is provided online at the [WordPress Support Forum](https://wordpress.org/documentation/) to help you through the process.

Site backups are essential because problems inevitably occur and you need to be in a position to take action when disaster strikes. Spending a few minutes to make an easy, convenient backup of your database will allow you to spend even more time being creative and productive with your website.

### Backup Questions

*Back up your database regularly, and always before an upgrade.*

**How often should you back up?**

That depends on how often you blog, how often you want to do this, and how you would feel if your database were lost along with a few posts. It is your decision.

**Can you use this method to back up other data?**

Yes. Backups are good all around.

**How many backups should I keep?**

The general rule of thumb is to keep at least three backups and keep them in three different places or forms, like CD/DVDs, different hard drives, a thumbdrive, web disk, your e-mail account, etc. This prevents problems if a single backup becomes corrupted or damaged.

**Can backups be automated?**

Yes. There are several methods of automating the backup process available, and we’ve listed some in the Automatic WordPress backup section. However, it is highly recommended that you back up those auto backups with a manual backup once in a while to guarantee that the process is working.

**Is there more information on backing up WordPress available?**

Yes. See Backup Resources for more information.

### Backing Up Your WordPress Site

There are two parts to backing up your WordPress site: **Database** and **Files**. You need to back up the entire site, and you need to back up your WordPress database. Below are instructions for backing up your WordPress database for various server programs. We will start with backing up the rest of your WordPress site.

Your WordPress site consists of the following:

1. WordPress Core installation
2. WordPress plugins
3. WordPress themes
4. Images and files
5. JavaScript, PHP, and other code files
6. Additional files and static web pages

All of these are used in various combinations to generate your website. The database contains your posts and a lot of data generated on your site, but it does not include the above elements that all come together to create the look and information on your site. These need to be saved.

Most hosts back up the entire server, including your site, but it takes time to request a copy of your site from their backups, and a speedy recovery is critical. You need to learn how to back up your own site files and restore them.

Here are some methods to backup your site files:

**Website Host Provided Backup Software**

Most website hosts provide software to back up your site. Check with your host to find out what services and programs they provide.

**Create Sync With Your Site**

[WinSCP](https://winscp.net/eng/index.php) and other programs allow you to sync with your website to keep a mirror copy of the content on your server and hard drive updated. It saves time and makes sure you have the latest files in both places.

**Copy Your Files to Your Desktop**

Using [FTP Clients](#advanced-administration/upgrade/ftp) or [UNIX Shell Skills](https://codex.wordpress.org/UNIX_Shell_Skills) you can copy the files to a folder on your computer. Once there, you can compress them into a zip file to save space, allowing you to keep several versions.

Remember, keep at least three backups on file, just in case one is corrupted or lost, and store them in different places and on different mediums (such as CD’s, DVDs or hard drives).

### Database Backup Instructions

Back up your WordPress database regularly, and always before an upgrade or a move to a new location. The following information will help you back up your WordPress database using various popular server software packages. For detailed information, contact your website host for more information.

#### Accessing phpMyAdmin

See [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin) for more information on phpMyAdmin.

While familiarity with phpMyAdmin is not necessary to back up your WordPress database, these instructions should take you step-by-step through the process of finding phpMyAdmin on your server. Then you can follow the instructions below as a simple and easy backup. For more detailed instructions, see Backing Up Your Database.

- Plesk
- cPanel
- Direct Admin
- Ensim
- vDeck
- Ferozo

##### Plesk

On your Websites &amp; Domains screen, click Open button corresponding to the database you have set up during the [WordPress installation](#advanced-administration/before-install/howto-install). This will open **phpMyAdmin** interface:

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548052-05143263-7980-45b5-b2dc-23fc5a8b19fd.png?ssl=1)

If you cannot see the **Open** button, make sure to close the **Start creating your website** prompt:

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548074-703c1d79-a437-445b-8bf7-ac51272b69f8.png?ssl=1)

Click Select Existing Database to find select your WordPress database:

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548312-c455cf50-757e-4bf7-9128-825e3cb0832c.png?ssl=1)

##### cPanel

On your main control panel for cPanel, look for the MySQL logo and click the link to MySQL Databases. On the next page, look for **phpMyAdmin** link and click it to access your phpMyAdmin.

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548290-9e815d91-e598-4b31-8bde-3101ac09bd89.png?ssl=1)

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548157-74dd7be8-ea45-4ee0-90d4-e16f57225d24.png?ssl=1)

##### Direct Admin

From **Your Account** page, look for **MySQL Management** and click it to access **phpMyAdmin**.

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548174-6951023a-c593-4f46-af78-5bf43a390279.png?ssl=1)

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548195-4b1ca6c1-0a6d-4191-8060-c90e59696ee3.png?ssl=1)

##### Ensim

Look for the MySQL Admin logo and click the link. Under **Configuration** choose **MySQL Administration Tool**.

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548260-d911357c-8681-4c27-a1ad-043d7a678c22.png?ssl=1)

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548265-2a7b7721-10e9-41d7-a150-ab11422c29cd.png?ssl=1)

##### vDeck

From the main control panel, click **Host Manager**, then click **Databases**. In the next window, click **Admin**. Another window will popup taking you to the phpMyAdmin login screen.

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548348-9f1135eb-4336-4f45-9fe6-8fa482f758d5.png?ssl=1)

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548353-75778b1a-686c-44a7-ab15-89b49d94e146.png?ssl=1)

##### Ferozo

Login to your Ferozo Control Panel by using your credentials. Once inside, go to the “Base de Datos” (“Data Base”) menu and then click on “Acceso phpMyAdmin” (“Access phpMyAdmin”). A new window will open displaying the phpMyAdmin login screen.

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548372-ebebffc3-9723-4e4f-b478-df0d38499e58.png?ssl=1)

### Simple Backup with phpMyAdmin

The following is a very simple version of Backing Up Your Database. Once you have discovered how to access your site’s phpMyAdmin, follow these simple instructions.

1. Click on **Databases** in your phpMyAdmin panel. (It may not be necessary to do this, depending on your version of phpMyAdmin)

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548469-d63090c3-4e43-48d4-8039-507957e4a69c.png?ssl=1)

1. You may have several databases. Click the one that holds your WordPress data, the database you created when you [installed WordPress](https://wordpress.org/installation/how-to-install-wordpress/). (In older versions this may be done through a pull-down menu.)
2. Below is a picture of the default tables in the Structure view tab. You may have more tables — this would happen if you have any statistics plugins or anti-spam plugins.

![image](https://i0.wp.com/user-images.githubusercontent.com/8250598/189548524-84c2f476-7fae-4bc4-b7fb-19b72f72bed8.png?ssl=1)

1. Click **Export**.  
     – There are two methods to export, **Quick** and **Custom**; if you choose **Custom**, follow these steps:  
     – Select all the tables.  
     – In the **Output** section check **Save output to a file** and select **None** for **Compression**. (If your database is very large use a compression method)  
     – Select **SQL** from the **Format** drop-down menu.  
     – Check “Add DROP TABLE”: this can be useful for over-writing an existing database.  
     – Check “IF NOT EXISTS”: this prevents errors during restores if the tables are already there.  
     – Click **Go**. The data will now be saved into your computer.

### Automatic Backups

Various plugins exist to take automatic scheduled backups of your WordPress database. This helps to manage your backup collection easily. You can find automatic backup plugins in the **Plugin Browser** on the WordPress Administration Screens or through the [WordPress Plugin Directory](https://wordpress.org/plugins/).

- [List of Backup Plugins](https://wordpress.org/plugins/tags/backup)

### Backup Resources

- [FTP Backups](https://www.guyrutenberg.com/2010/02/28/improved-ftp-backup-for-wordpress/) – How to automate backing up to an FTP server
- [Incremental Backups](https://www.guyrutenberg.com/2013/03/28/incremental-wordpress-backups-using-duply-duplicity/) – How to make encrypted incremental backups using duplicity
- [Using phpMyAdmin with WordPress](#advanced-administration/upgrade/phpmyadmin)

#### Backup Tools

- [Using phpMyAdmin](#advanced-administration/upgrade/phpmyadmin)
- [FTP Clients](#advanced-administration/upgrade/ftp)
- [Using FileZilla](#advanced-administration/upgrade/ftpfilezilla/)

### Read Further

- [WordPress Backups](#advanced-administration/security/backup)
- [Upgrading WordPress Extended](#advanced-administration/upgrade/upgrading)

---

# Backing Up Your Database <a name="advanced-administration/security/backup/database" />

Source: https://developer.wordpress.org/advanced-administration/security/backup/database/

## Backing Up Your Database

> It is strongly recommended that you backup your database at regular intervals and before an upgrade.

[Restoring your database from backup](#advanced-administration/security/backup) is then possible if something goes wrong.

**NOTE:** Below steps backup core WordPress database that include all your posts, pages and comments, but DO NOT backup the files and folders such as images, theme files on the server. For whole WordPress site backup, refer [WordPress Backups](#advanced-administration/security/backup).

### Backup using cPanel X

cPanel is a popular control panel used by many web hosts. The backup feature can be used to backup your MySQL database. Do not generate a full backup, as these are strictly for archival purposes and cannot be restored via cPanel. Look for ‘Download a MySQL Database Backup’ and click the name of the database. A `*.gz` file will be downloaded to your local drive.

There is no need to unzip this file to restore it. Using the same cPanel program, browse to the gz file and upload it. Once the upload is complete, the bottom of the browser will indicate dump complete. If you are uploading to a new host, you will need to recreate the database user along with the matching password. If you change the password, make the corresponding change in the wp-config.php file.

### Using phpMyAdmin

[phpMyAdmin](#advanced-administration/upgrade/phpmyadmin) is the name of the program used to manipulate your database.

Information below has been tried and tested using phpMyAdmin version 4.4.13 connects to MySQL version 5.6.28 running on Linux.

[![phpmyadmin_top](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_top.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_top.jpg?ssl=1)

#### Quick backup process

When you backup all tables in the WordPress database without compression, you can use simple method. To restore this backup, your new database should not have any tables.

1. Log into phpMyAdmin on your server
2. From the left side window, select your WordPress database. In this example, the name of database is “wp”.
3. The right side window will show you all the tables inside your WordPress database. Click the ‘Export’ tab on the top set of tabs.

[![](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_dbtop.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_dbtop.jpg?ssl=1)

1. Ensure that the Quick option is selected, and click ‘Go’ and you should be prompted for a file to download. Save the file to your computer. Depending on the database size, this may take a few moments.

[![phpmyadmin_quick_export](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_quick_export.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_quick_export.jpg?ssl=1)

#### Custom backup process

If you want to change default behavior, select Custom backup. In above Step 4, select Custom option. Detailed options are displayed.

[![phpmyadmin_custom_export](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_custom_export.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_custom_export.jpg?ssl=1)

##### The Table section

All the tables in the database are selected. If you have other programs that use the database, then choose only those tables that correspond to your WordPress install. They will be the ones with that start with “wp\_” or whatever ‘table\_prefix’ you specified in your ‘wp-config.php’ file.

If you only have your WordPress blog installed, leave it as is (or click ‘Select All’ if you changed the selection)

##### The Output section

Select ‘zipped’ or ‘gzipped’ from Compression box to compress the data.

[![phpmyadmin_export_output](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_export_output.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_export_output.jpg?ssl=1)

##### The Format section

Ensure that the SQL is selected. Unlike CSV or other data formats, this option exports a sequence of SQL commands.

In the Format-specific options section, leave options as they are.

[![phpmyadmin_export_formatspecific](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_export_formatspecific.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_export_formatspecific.jpg?ssl=1)

##### The Object creation options section

Select Add DROP TABLE / VIEW / PROCEDURE / FUNCTION / EVENT / TRIGGER statement. Before table creation on target database, it will call DROP statement to delete the old existing table if it exist.

[![phpmyadmin_export_object](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_export_object.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_export_object.jpg?ssl=1)

### The Data creation options section

Leave options as they are.

[![phpmyadmin_export_data](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_export_data.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/phpmyadmin_export_data.jpg?ssl=1)

Now click ‘Go’ at the bottom of the window and you should be prompted for a file to download. Save the file to your computer. Depending on the database size, this may take a few moments.

**Remember** – you have NOT backed up the files and folders – such as images – but all your posts and comments are now safe.

### Using Straight MySQL/MariaDB Commands

phpMyAdmin cannot handle large databases so using straight MySQL/MariaDB code will help.

Change your directory to the directory you want to export backup to:

```
user@linux:~> cd files/blog
user@linux:~/files/blog>

```

Use the `mysqldump` command with your MySQL server name, user name and database name. It prompts you to input password (For help, try: `man mysqldump`).

**To backup all database tables**

```
mysqldump --add-drop-table -h mysql_hostserver -u mysql_username -p mysql_databasename﻿

```

**To backup only certain tables from the database**

```
mysqldump --add-drop-table -h mysql_hostserver -u mysql_username -p mysql_databasename﻿

```

Example:

```
user@linux:~/files/blog> mysqldump --add-drop-table -h db01.example.net -u dbocodex -p wp > blog.bak.sql
Enter password: (type password)

```

**Use bzip2 to compress the backup file**

```
user@linux:~/files/blog> bzip2 blog.bak.sql

```

You can do the same thing that above two commands do in one line:

```
user@linux:~/files/blog> mysqldump --add-drop-table -h db01.example.net -u dbocodex -p wp | bzip2 -c > blog.bak.sql.bz2
Enter password: (type password)

```

The `bzip2 -c` after the `|` (pipe) means the backup is compressed on the fly, and the `> blog.bak.sql.bz2` sends the bzip output to a file named `blog.bak.sql.bz2`.

Despite bzip2 being able to compress most files more effectively than the older compression algorithms (.Z, .zip, .gz), it is [considerably slower](https://en.wikipedia.org/wiki/Bzip2) (compression and decompression). If you have a large database to backup, gzip is a faster option to use.

```
user@linux:~/files/blog> mysqldump --add-drop-table -h db01.example.net -u dbocodex -p wp | gzip > blog.bak.sql.gz

```

### Using MySQL Workbench

[MySQL Workbench](https://dev.mysql.com/downloads/workbench/) (formerly known as My SQL Administrator) is a program for performing administrative operations, such as configuring your MySQL server, monitoring its status and performance, starting and stopping it, managing users and connections, performing backups, restoring backups and a number of other administrative tasks.

You can perform most of those tasks using a command line interface such as that provided by [mysqladmin](https://dev.mysql.com/doc/refman/8.0/en/mysqladmin.html) or [mysql](https://dev.mysql.com/doc/refman/8.0/en/mysql.html), but MySQL Workbench is advantageous in the following respects:

- Its graphical user interface makes it more intuitive to use.
- It provides a better overview of the settings that are crucial for the performance, reliability, and security of your MySQL servers.
- It displays performance indicators graphically, thus making it easier to determine and tune server settings.
- It is available for Linux, Windows and MacOS X, and allows a remote client to backup the database across platforms. As long as you have access to the MySQL databases on the remote server, you can backup your data to wherever you have write access.
- There is no limit to the size of the database to be backed up as there is with phpMyAdmin.

Information below has been tried and tested using MySQL Workbench version 6.3.6 connects to MySQL version 5.6.28 running on Linux.

[![mysql_workbench_top](https://i0.wp.com/wordpress.org/documentation/files/2018/11/mysql_workbench_top.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/mysql_workbench_top.jpg?ssl=1)

#### Backing Up the Database

This assumes you have already installed MySQL Workbench and set it up so that you can login to the MySQL Database Server either locally or remotely. Refer to the documentation that comes with the installation package of MySQL Workbench for your platform for installation instructions or [online document](https://dev.mysql.com/doc/workbench/en/).

1. Launch the MySQL Workbench
2. Click your database instance if it is displayed on the top page. Or, Click Database -&gt; Connect Database from top menu, enter required information and Click OK.
3. Click Data Export in left side window.

[![mysql_workbench_export](https://i0.wp.com/wordpress.org/documentation/files/2018/11/mysql_workbench_export.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/mysql_workbench_export.jpg?ssl=1)

1. Select your WordPress databases that you want to backup.
2. Specify target directory on Export Options. You need write permissions in the directory to which you are writing the backup.
3. Click Start Export on the lower right of the window.

[![mysql_workbench_export2](https://i0.wp.com/wordpress.org/documentation/files/2018/11/mysql_workbench_export2.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/mysql_workbench_export2.jpg?ssl=1)

#### Restoring From a Backup

1. Launch the MySQL Workbench
2. Click your database instance if it is displayed on the top page. Or, Click Database -&gt; Connect Database, and Click OK.
3. Click Data Import/Restore in left side window.
4. Specify folder where you have backup files. Click “…” at the right of Import from Dump Project Folder, select backup folder, and click Open.
5. Click Start Import on the lower right of the window. The database restore will commence.

[![mysql_workbench_import](https://i0.wp.com/wordpress.org/documentation/files/2018/11/mysql_workbench_import.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/mysql_workbench_import.jpg?ssl=1)

### MySQL GUI Tools

In addition to MySQL Workbench, there are many GUI tools that let you backup (export) your database.

| Name | OS (Paid edition) | OS (Free edition) |  |
|---|---|---|---|
| [MySQL Workbench](https://www.mysql.com/products/workbench/) | Windows/Mac/Linux | Windows/Mac/Linux | See [above](#advanced-administration/security/backupdatabase/#Using_MySQL_Workbench) |
| [EMS SQL Management Studio for MySQL](https://www.sqlmanager.net/products/mysql/studio) | Windows |  |  |
| [Aqua Data Studio](https://www.aquafold.com/) | Windows/Mac/Linux | Windows/Mac/Linux (14 days trial) | Available in 9 languages |
| [Navicat for MySQL](https://www.navicat.com/en/products/navicat-for-mysql) | Windows/Mac/Linux | Windows/Mac/Linux (14 days trial) | Available in 8 languages |
| [SQLyog](https://webyog.com/en/) | Windows |  |  |
| [Toad for MySQL](https://www.toadworld.com/) |  | Windows |  |
| [HeidiSQL](https://www.heidisql.com/) |  | Windows |  |
| [Sequel Pro](https://sequelpro.com/) | Mac | CocoaMySQL successor |  |
| [Querious](https://www.araelium.com/querious/) |  | Mac |  |

### Using WordPress Database Backup Plugin

You can find plugins that can help you back up your database in the [WordPress Plugin Directory](https://wordpress.org/plugins/search/database+backup/).

The instructions below are for the plugin called [WP-DB-Backup:](https://wordpress.org/plugins/wp-db-backup/)

#### Installation

1. Search for “WP-DB-Backup” on [Administration](https://wordpress.org/documentation/article/administration-screens/) &gt; [Plugins](https://wordpress.org/documentation/article/administration-screens/#plugins-add-functionality-to-your-blog) &gt; [Add New](https://wordpress.org/documentation/article/administration-screens/#add-new-plugins).
2. Click Install Now.
3. Activate the plugin.

#### Backing up

1. Navigate to [Administration](https://wordpress.org/documentation/article/administration-screens/) &gt; [Tools](https://wordpress.org/documentation/article/administration-screens/#tools-managing-your-blog) &gt; Backup
2. Core WordPress tables will always be backed up. Select some options from Tables section.

[![wp-db-backup_table](https://i0.wp.com/wordpress.org/documentation/files/2018/11/wp-db-backup_table.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/wp-db-backup_table.jpg?ssl=1)

1. Select the Backup Options; the backup can be downloaded, or emailed.
2. Finally, click on the Backup Now! button to actually perform the backup. You can also schedule regular backups.

[![wp-db-backup_settings](https://i0.wp.com/wordpress.org/documentation/files/2018/11/wp-db-backup_settings.jpg?ssl=1)](https://i0.wp.com/wordpress.org/documentation/files/2018/11/wp-db-backup_settings.jpg?ssl=1)

#### Restoring the Data

The file created is a standard SQL file. If you want information about how to upload that file, look at [Restoring Your Database From Backup](#advanced-administration/security/backup).

### More Resources

- [Backup Plugins on the official WordPress.org repository](https://wordpress.org/plugins/search.php?q=backup)
- [WordPress Backups](#advanced-administration/security/backup)

### External Resources

- [How to Schedule Daily Backup of WordPress Database](https://www.narga.net/schedule-backup-wordpress-database/)

## Restoring Your Database From Backup

### Using phpMyAdmin

[phpMyAdmin](#advanced-administration/upgrade/phpmyadmin) is a program used to manipulate databases remotely through a web interface. A good hosting package will have this included. For information on backing up your WordPress database, see [Backing Up Your Database](#advanced-administration/security/backupdatabase/).

Information here has been tested using [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin) 4.0.5 running on Unix.

The following instructions will **replace** your current database with the backup, **reverting** your database to the state it was in when you backed up.

#### Restore Process

Using phpMyAdmin, follow the steps below to restore a MySQL/MariaDB database.

1. Login to [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin).
2. Click “Databases” and select the database that you will be importing your data into.
3. You will then see either a list of tables already inside that database or a screen that says no tables exist. This depends on your setup.
4. Across the top of the screen will be a row of tabs. Click the **Import** tab.
5. On the next screen will be a location of text file box, and next to that a button named **Browse**.
6. Click **Browse**. Locate the backup file stored on your computer.
7. Make sure **SQL** is selected in the **Format** drop-down menu.
8. Click the **Go** button.

Now grab a coffee. This bit takes a while. Eventually you will see a success screen.

If you get an error message, your best bet is to post to the [WordPress support forums](https://wordpress.org/documentation/) to get help.

### Using MySQL/MariaDB Commands

The restore process consists of unarchiving your archived database dump, and importing it into your MySQL/MariaDB database.

Assuming your backup is a `.bz2` file, created using instructions similar to those given for [Backing up your database using MySQL/MariaDB commands](#advanced-administration/security/backupdatabase/#using-straight-mysqlmariadb-commands), the following steps will guide you through restoring your database:

1. Unzip your `.bz2` file:

```
user@linux:~/files/blog> bzip2 -d blog.bak.sql.bz2

```

**Note:** If your database backup was a `.tar.gz` file called `blog.bak.sql.tar.gz`, then

```
tar -zxvf blog.bak.sql.tar.gz

```

is the command that should be used instead of the above.

1. Put the backed-up SQL back into MySQL/MariaDB:

```
user@linux:~/files/blog> mysql -h mysqlhostserver -u mysqlusername -p databasename < blog.bak.sql  
Enter password: (enter your mysql password)   
user@linux:~/files/blog>

```

---

# Backing Up Your WordPress Files <a name="advanced-administration/security/backup/files" />

Source: https://developer.wordpress.org/advanced-administration/security/backup/files/

## Backing Up Your WordPress Files

There are two parts to backing up your WordPress site: **Database** and **Files**.

This page talks about **Files** only; if you need to back up your WordPress database, see the [Backing Up Your Database](#advanced-administration/security/backup/database).

Your WordPress site consists of the following files:

- WordPress Core Installation
- WordPress Plugins
- WordPress Themes
- Images and Files
- Javascripts, PHP scripts, and other code files
- Additional Files and Static Web Pages

Everything that has anything to do with the look and feel of your site is in a file somewhere and needs to be backed up. Additionally, you must back up all of your files in your WordPress directory (including subdirectories) and your [`.htaccess`](https://wordpress.org/documentation/article/wordpress-glossary/#.htaccess) file.

While most hosts back up the entire server, including your site, it is better that you back up your own files. The easiest method is to use an [FTP program](#advanced-administration/upgrade/ftp) to download all of your WordPress files from your host to your local computer.

By default, the files in the directory called wp-content are your own user-generated content, such as edited themes, new plugins, and uploaded files. Pay particular attention to backing up this area, along with your `wp-config.php`, which contains your connection details.

The remaining files are mostly the WordPress Core files, which are supplied by the [WordPress download zip file](https://wordpress.org/download/).

Please read [Backing Up Your WordPress Site](#advanced-administration/security/backup) for further information.

Other ways to backup your files include:

**Website Host Provided Backup Software**

Most website hosts provide software to back up your site. Check with your host to find out what services and programs they provide.

**Create Synchs With Your Site**

[WinSCP](https://winscp.net/eng/index.php) and other programs allow you to synchronize with your website to keep a mirror copy of the content on your server and hard drive updated. It saves time and makes sure you have the latest files in both places.

#### Synchronize your files in WinScp

1. Log in to your ftp server normally using WinScp.
2. Press the “Synchronize” button. Remote directory will automatically be set to the current ftp directory (often your root directory). Local directory would be set to the local directory as it was when you pressed Synchronize. You may want to change this to some other directory on your computer. Direction should be set to “local” to copy files FROM your web host TO your machine. Synchronization Mode would be set to Synchronize files.
3. Click “OK” to show a summary of actions.
4. Click “OK” again to complete the synchronization.

**Copy Your Files to Your Desktop**

Using [FTP Clients](#advanced-administration/upgrade/ftp) or [UNIX Shell Skills](https://codex.wordpress.org/UNIX_Shell_Skills) you can copy the files to a folder on your computer. Once there, you can zip or compress them into a zip file to save space, allowing you to keep several versions.

Normally, there would be no need to copy the WordPress core files, as you can replace them from a fresh download of the WordPress zip file. The important files to back up would be your wp-config.php file, which contains your settings and your wp-content directory (plus its contents) which contains all your theme and plugin files.

---

# HTTPS <a name="advanced-administration/security/https" />

Source: https://developer.wordpress.org/advanced-administration/security/https/

HTTPS is an encrypted communication protocol — essentially, a more secure way of browsing the web, since you get a private channel directly between your browser and the web server. That’s why most major sites use it.

If a site’s using HTTPS, you’ll see a little padlock icon in the address field, just as in the screenshot below:

![Screenshot of the "secure site" padlock icon](https://i0.wp.com/wordpress.org/documentation/files/2019/03/image.png?ssl=1)

Here are the most common reasons you might want to use HTTPS on your own site:

**Faster.** One might think that HTTPS would make your site slower, since it takes some time to encrypt and decrypt all data. But a lot of efficiency improvements to HTTP are only available when you use HTTPS. As a result, HTTPS will actually make your site faster for almost all visitors.

**Trust.** Users find it easier to trust a secure site. While they don’t necessarily know their traffic is encrypted, they do know the little padlock icon means a site cares about their privacy. Tech people will know that any servers between your computer and the web server won’t be able to see the information flowing forth and back, and won’t be able to change it.

**Payment security.** If you sell anything on your site, users want to know their payment information is secure. HTTPS, and the little padlock, assure that their information travels safely to the web server.

**Search Engine Optimization.** Many search engines will add a penalty to web sites that don’t use HTTPS, thus making it harder to reach the best spots in search results.

**Your good name.** Have you noticed that some websites have the text “not secure” next to their address?

That happens when your web browser wants you to know a site is NOT using HTTPS. Browsers want you to think (rightly!) that site owners who can’t be bothered using HTTPS (it’s free in many cases) aren’t worth your time and certainly not your money.

In turn, you don’t want browsers suggesting you might be that kind of shady site owner yourself.

WordPress is fully compatible with HTTPS when an TLS / SSL certificate is installed and available for the web server to use. Support for HTTPS is strongly recommended to help maintain the security of both WordPress logins and site visitors.

## Administration Over HTTPS

To easily enable (and enforce) WordPress administration over SSL, there are two constants that you can define in your site’s [wp-config.php](https://wordpress.org/documentation/article/editing-wp-config-php/) file. It is not sufficient to define these constants in a plugin file; they must be defined in your [wp-config.php](https://wordpress.org/documentation/article/editing-wp-config-php/) file. You must also already have SSL configured on the server and a (virtual) host configured for the secure server before your site will work properly with these constants set to true.

**Note:** `FORCE_SSL_LOGIN` was deprecated in [Version 4.0](https://wordpress.org/documentation/wordpress-version/version-4-0/). Please use `FORCE_SSL_ADMIN`.

### To Force HTTPS Logins and HTTPS Admin Access

The constant `FORCE_SSL_ADMIN` can be set to true in the `wp-config.php` file to force all logins **and** all admin sessions to happen over SSL.

#### Example

```
define( 'FORCE_SSL_ADMIN', true );

```

### Using a Reverse Proxy

If WordPress is hosted behind a reverse proxy that provides SSL, but is hosted itself without SSL, these options will initially send any requests into an infinite redirect loop. To avoid this, you may configure WordPress to recognize the `HTTP_X_FORWARDED_PROTO` header (assuming you have properly configured the reverse proxy to set that header).

#### Example

```
define( 'FORCE_SSL_ADMIN', true );
// in some setups HTTP_X_FORWARDED_PROTO might contain 
// a comma-separated list e.g. http,https
// so check for https existence
if( strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false )
    $_SERVER['HTTPS'] = 'on';

```

#### Notice

When you’re using a proxy pass redirection, you transmit the request to an host of your networks but don’t transmit the headers linked to it. However some headers are needed by wordpress to make it able to do some redirections. In order to transmit them you need to add some lines to your redirection.

For instance, with Nginx you need to have these lines:

```
location / {
    proxy_pass http://your_host_name:your_port;
    proxy_set_header Host $host:$server_port;
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header X-Forwarded-Host $server_name;
    proxy_set_header X-Forwarded-Proto $scheme;
    proxy_redirect off;
}

```

The variables like `$variabl`e are automatically managed by the reverse proxy.

### Further Information

The rest of this article serves as information in case you’re using an older version of WordPress (which ideally you shouldn’t!) or your SSL setup is somewhat different (ie. your SSL certificate is for a different domain).

Sometimes, you want your whole wp-admin to run over a secure connection using the https protocol. Conceptually, the procedure works like this:

1. Set up two virtual hosts with the same url (the blog url), one secure, the other not.
2. On the secure virtual host, set up a rewrite rule that shuttles all non-wp-admin traffic to the insecure site.
3. On the insecure virtual host, set up a rewrite rule that shuttles all traffic to wp-admin to the secure host.
4. Put in a filter (via a plugin) that filters the links in wp-admin so that once activated, administrative links are rewritten to use https and that edits cookies to work only over encrypted connections.

The following guide is for WordPress 1.5 and Apache running `mod_rewrite`, using rewrite rules in `httpd.conf` (as opposed to `.htaccess` files) but could easily be modified to fit other hosting scenarios.

#### Virtual Hosts

You need a (virtual) host configured for the secure server in addition to the non-secure site. In this example, the secure virtual host uses the same `DocumentRoot` as the insecure host. Hypothetically, you could use a host with a different name, such as wpadmin.mysite.com and link the document root to the wpadmin directory.

Please ask your ISP to set up a secure virtual host for you, or if you have administrative access set up your own. Note that [you cannot use name based virtual hosting to identify different SSL servers](https://httpd.apache.org/docs/2.0/ssl/ssl_faq.html#vhosts2).

**Rewrite Rules For The Insecure Host**

In the `.htaccess` or virtual host stanza in `httpd.conf` for your insecure host, add this rewrite rule to automatically go to the secure host when you browse to https://example.com/wp-admin/ or https://example.com/wp-login.php

This should go above the main wordpress rewrite block.

```
RewriteCond %{THE_REQUEST} ^[A-Z]{3,9}\ /(.*)\ HTTP/ [NC]
RewriteCond %{HTTPS} !=on [NC]
RewriteRule ^/?(wp-admin/|wp-login\.php) https://example.com%{REQUEST_URI}%{QUERY_STRING} [R=301,QSA,L]

```

If you are using permalink rewrite rules, this line must come before `RewriteRule ^.*$ - [S=40]`.

An important idea in this block is using `THE_REQUEST`, which ensures only actual http requests are rewritten and not local direct file requests, like an include or fopen.

**Rewrite Rules For Secure Host (Optional)**

These rewrite rules are optional. They disable access to the public site over a secure connection. If you wish to remain logged in to the public portion of your site using the plugin below, you must *not* add these rules, as the plugin disables the cookie over unencrypted connections.

The secure virtual host should have two rewrite rules in an .htaccess file or in the virtual host declaration (see [Using Permalinks](https://wordpress.org/documentation/article/customize-permalinks/) for more on rewriting):

```
RewriteRule !^/wp-admin/(.*) - [C]
RewriteRule ^/(.*) https://www.example.com/$1 [QSA,L]

```

The first rule excludes the wp-admin directory from the next rule, which shuffles traffic to the secure site over to the insecure site, to keep things nice and seamless for your audience.

**Setting WordPress URI**

For some plugins to work, and for other reasons, you may wish to set your WordPress URI in options to reflect the https protocol by making this setting https://example.com. Your blog address should not change.

**Example Config Stanzas**

NOTE: The below config is not 100% compatible with WordPress 2.8+, WordPress 2.8 uses some files from the wp-includes folder. The redirection that the first set of Rewrite rules introduces may cause security warnings for some users. See [\#10079](https://core.trac.wordpress.org/ticket/10079) for more information.

```
<VirtualHost nnn.nnn.nnn.nnn:443>
    ServerName www.example.com

    SSLEngine On
    SSLCertificateFile /etc/apache2/ssl/thissite.crt
    SSLCertificateKeyFile /etc/apache2/ssl/thissite.pem
    SetEnvIf User-Agent ".*MSIE.*" nokeepalive ssl-unclean-shutdown

    DocumentRoot /var/www/mysite

    <IfModule mod_rewrite.c>
        RewriteEngine On
        RewriteRule !^/wp-(admin|includes)/(.*) - [C]
        RewriteRule ^/(.*) https://www.example.com/$1 [QSA,L]
    </IfModule>

</VirtualHost>

```

*Insecure site*

```
<VirtualHost *>
    ServerName www.mysite.com

    DocumentRoot /var/www/ii/mysite

    <Directory /var/www/ii/mysite >
        <IfModule mod_rewrite.c>
            RewriteEngine On
            RewriteBase /
            RewriteCond %{REQUEST_FILENAME} -f [OR]
            RewriteCond %{REQUEST_FILENAME} -d
            RewriteRule ^wp-admin/(.*) https://www.example.com/wp-admin/$1 [C]
            RewriteRule ^.*$ - [S=40]
            RewriteRule ^feed/(feed|rdf|rss|rss2|atom)/?$ /index.php?&feed=$1 [QSA,L]

        </IfModule>
    </Directory>

</VirtualHost>

```

**Rewrite for Login and Registration**

It is probably a good idea to utilize SSL for user logins and registrations. Consider the following substitute RewriteRules.

*Insecure*

```
RewriteRule ^/wp-(admin|login|register)(.*) https://www.example.com/wp-$1$2 [C]

```

*Secure*

```
RewriteRule !^/wp-(admin|login|register)(.*) - [C]

```

**Rewrite for sites running on port 443 or port 80**

```
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /

# For a site running on port 443 or else (http over ssl)
RewriteCond %{SERVER_PORT} !^80$
RewriteRule !^wp-(admin|login|register)(.*) - [C]
RewriteRule ^(.*)$ https://%{SERVER_NAME}/$1 [L]

# For a site running on port 80 (http)
RewriteCond %{SERVER_PORT}  ^80$
RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^wp-(admin|login|register)(.*) https://%{SERVER_NAME}:10001/wp-$1$2 [L]

RewriteCond %{SERVER_PORT}  ^80$
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]

</IfModule>

```

#### Summary

This method does *not* fix some [inherent security risks](https://wordpress.org/support/topic/securing-loginphp-with-ssl/) in WordPress, nor does it protect you against man-in-the-middle attacks or other risks that can cripple secure connections.

However, this *should* make it much harder for a malicious person to steal your cookies and/or authentication headers and use them to impersonate you and gain access to wp-admin. It also obfuscates the ability to sniff your content, which could be important for legal blogs which may have drafts of documents that need strict protection.

#### Verification

On the author’s server, logs indicate that both GET and POST requests are over SSL and that all traffic to wp-admin on the insecure host is being shuttled over to the secure host.

Sample POST log line:

```
[Thu Apr 28 09:34:33 2005] 
<div class="wp-block-wporg-notice is-info-notice">
<div class="wp-block-wporg-notice__icon"></div>
<div class="wp-block-wporg-notice__content"></div></div>
 Subsequent (No.5) HTTPS request received for child 6 (server foo.com:443)
xx.xxx.xxx.xxx - - [28/Apr/2005:09:34:33 -0500] "POST /wp-admin/post.php HTTP/1.1" 302 - "https://foo.com/wp-admin/post.php?action=edit&post=71" "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.7) Gecko/20050414 Firefox/1.0.3"

```

More testing, preferably with a packet sniffer and some hardcore network analysis tools, would help to confirm.

#### Limitations

The author assumes (but hasn’t checked) that if the user has stored cookies/told their browser to remember passwords (not based on form fields but if using certain external auth mechanism) and hits https://www.example.com/wp-admin/, those packets are sent in the clear and the cookie/auth headers could be intercepted. Therefore, to ensure maximum security, the user should explicitly use the https host or always log in at the beginning of new sessions.

---

# Brute Force Attacks <a name="advanced-administration/security/brute-force" />

Source: https://developer.wordpress.org/advanced-administration/security/brute-force/

Unlike hacks that focus on vulnerabilities in software, a Brute Force Attack aims at being the simplest kind of method to gain access to a site: it tries usernames and passwords, over and over again, until it gets in. Often deemed ‘inelegant’, they can be very successful when people use passwords like ‘123456’ and usernames like ‘admin.’

They are, in short, an attack on the weakest link in any website’s security… you.

Due to the nature of these attacks, you may find your server’s memory goes through the roof, causing performance problems. This is because the number of http requests (that is the number of times someone visits your site) is so high that servers run out of memory.

This sort of attack is not endemic to WordPress, it happens with every webapp out there, but WordPress is popular and thus a frequent target.

### Throttling Multiple Login Attempts

One of the most common kinds of attacks targeting internet services is brute force login attacks. With this form of attack, a malicious party tries to guess WordPress usernames and passwords. The attacker needs only the URL of a user site to perform an attack. Software is readily available to perform these attacks using botnets, making increasingly complex passwords easier to find.

The best protection against this kind of attack is to set and recommend and/or enforce strong passwords for WordPress users.

It is also recommended for hosts to throttle login attempts at the network and server level when possible. It’s helpful to throttle both maximum logins per site over time, and maximum attempts per IP over time across server or infrastructure to mitigate bot password brute-force attacks. This can be done at the plugin level as well, but not without incurring the additional resource utilization caused during these attacks.

### Protect Yourself

A common attack point on WordPress is to hammer the `wp-login.php` file over and over until they get in or the server dies. You can do some things to protect yourself.

#### Don’t use the ‘admin’ username

The majority of attacks assume people are using the username ‘admin’ due to the fact that early versions of WordPress defaulted to this. If you are still using this username, make a new account, transfer all the posts to that account, and change ‘admin’ to a subscriber (or delete it entirely).

You can also use the plugin [Change Username](https://wordpress.org/plugins/change-username/) to change your username.

#### Good Passwords

The goal with your password is to make it hard for other people to guess and hard for a brute force attack to succeed. Many automatic password generators are available that can be used to create secure passwords.

WordPress also features a password strength meter which is shown when changing your password in WordPress. Use this when changing your password to ensure its strength is adequate.

Things to avoid when choosing a password:

- Any permutation of your own real name, username, company name, or name of your website.
- A word from a dictionary, in any language.
- A short password.
- Any numeric-only or alphabetic-only password (a mixture of both is best).

A strong password is necessary not just to protect your blog content. A hacker who gains access to your administrator account is able to install malicious scripts that can potentially compromise your entire server.

To further increase the strength of your password, you can enable [Two Step Authentication](#advanced-administration/security/mfa) to further protect your blog.

#### Plugins

There are many [plugins available to limit the number of login attempts](https://wordpress.org/plugins/tags/brute-force) made on your site. Alternatively, there are also many [plugins you can use to block people from accessing wp-admin](https://wordpress.org/plugins/search.php?q=admin+rename) altogether.

### Protect Your Server

If you decide to lock down wp-login.php or wp-admin, you may find you get a 404 or 401 error when accessing those pages. To avoid that, you will need to add the following to your .htaccess file.

```
ErrorDocument 401 default  

```

You can have the 401 point to 401.html, but the point is to aim it at *not* WordPress.

For Nginx you can use the `error_page` directive but must supply an absolute url.

```
error_page  401  https://example.com/forbidden.html;  

```

On IIS web servers you can use the `httpErrors` element in your web.config, set `errorMode="custom"`:

```
<httpErrors errorMode="Custom">  
    <error statusCode="401"
    subStatusCode="2"
    prefixLanguageFilePath=""
    path="401.htm"
    responseMode="File" />
</httpErrors>

```

#### Password Protect wp-login.php

Password protecting your wp-login.php file (and wp-admin folder) can add an extra layer to your server. Because password protecting wp-admin can break any plugin that uses ajax on the front end, it’s usually sufficient to just protect wp-login.php.

To do this, you will need to create a .htpasswd file. Many hosts have tools to do this for you, but if you have to do it manually, you can use this [htpasswd generator](https://hostingcanada.org/htpasswd-generator/). Much like your .htaccess file (which is a file that is only an extension), .htpasswd will also have no prefix.

You can either put this file outside of your public web folder (i.e. not in /public\_html/ or /domain.com/, depending on your host), or you *can* put it in the same folder, but you’ll want to do some extra security work in your .htaccess file if you do.

Speaking of which, once you’ve uploaded the .htpasswd file, you need to tell .htaccess where it’s at. Assuming you’ve put .htpasswd in your user’s home directory and your htpasswd username is mysecretuser, then you put this in your .htaccess:

```
# Stop Apache from serving .ht* files
<Files ~ "^\\.ht">  
    Order allow,deny
    Deny from all
</Files>  

# Protect wp-login.php
<Files wp-login.php>
    AuthUserFile ~/.htpasswd
    AuthName "Private access"
    AuthType Basic
    require user mysecretuser
</Files>

```

The actual location of AuthUserFile depends on your server, and the ‘require user’ will change based on what username you pick.

If you are using Nginx you can password protect your wp-login.php file using the [HttpAuthBasicModule](https://nginx.org/en/docs/http/ngx_http_auth_basic_module.html). This block should be inside your server block.

```
location /wp-login.php {
    auth_basic "Administrator Login";
    auth_basic_user_file .htpasswd;
}

```

The filename path is relative to directory of nginx configuration file nginx.conf

The file should be in the following format:

```
user:pass
user2:pass2
user3:pass3

```

Unfortunately there is no easy way of configuring a password protected wp-login.php on Windows Server IIS. If you use a .htaccess processor like Helicon Ape, you can use the .htaccess example mentioned above. Otherwise you’d have to ask your hosting provider to set up Basic Authentication.

All passwords must be encoded by function `crypt(3)`. You can use an online [htpasswd generator](https://hostingcanada.org/htpasswd-generator/) to encrypt your password.

#### Throttle Multiple Login Attempts

One of the most common kinds of attacks targeting internet services is brute force login attacks. With this form of attack, a malicious party tries to guess WordPress usernames and passwords. The attacker needs only the URL of a user site to perform an attack. Software is readily available to perform these attacks using botnets, making increasingly complex passwords easier to find.

The best protection against this kind of attack is to set and recommend and/or enforce strong passwords for WordPress users.

It is also recommended for hosts to throttle login attempts at the network and server level when possible. It’s helpful to throttle both maximum logins per site over time, and maximum attempts per IP over time across server or infrastructure to mitigate bot password brute-force attacks. This can be done at the plugin level as well, but not without incurring the additional resource utilization caused during these attacks.

#### Limit Access to wp-login.php by IP

If you are the only person who needs to login to your Admin area and you have a fixed IP address, you can deny wp-login.php (and thus the wp-admin/ folder) access to everyone but yourself via an .htaccess or web.config file. This is often referred to as an *IP whitelist*.

**Note:** Beware your ISP or computer may be changing your IP address frequently, this is called dynamic IP addressing, rather than fixed IP addressing. This could be used for a variety of reasons, such as saving money. If you suspect this to be the case, find out out how change your computer’s settings, or contact your ISP to obtain a fixed address, in order to use this procedure.

In all examples you have to replace 203.0.113.15 with your IP address. Your Internet Provider can help you to establish your IP address. Or you can use an online service such as [What Is My IP](https://www.whatismyip.com/).

Examples for multiple IP addresses are also provided. They’re ideal if you use more than one internet provider, if you have a small pool of IP addresses or when you have a couple of people that are allowed access to your site’s Dashboard.

Create a file in a plain text editor called .htaccess and add:

```
# Block access to wp-login.php.
<Files wp-login.php>
    order deny,allow
    allow from 203.0.113.15
    deny from all
</Files>

```

You can add more than one allowed IP address using:

```
# Block access to wp-login.php.
<Files wp-login.php>
    order deny,allow  
    allow from 203.0.113.15
    allow from 203.0.113.16
    allow from 203.0.113.17
    deny from all
</Files>

```

Are you using Apache 2.4 and Apache module [mod\_authz\_host](https://httpd.apache.org/docs/2.4/mod/mod_authz_host.html)? Then you have to use a slightly different syntax:

```
# Block access to wp-login.php.
<Files wp-login.php>
    Require ip 203.0.113.15
</Files>

```

If you want to add more than one IP address, you can use:

```
# Block access to wp-login.php.
<Files wp-login.php>
    Require ip 203.0.113.15 203.0.113.16 203.0.113.17
    # or for the entire network:
    # Require ip 203.0.113.0/255.255.255.0
</Files>

```

For Nginx you can add a location block inside your server block that works the same as the Apache example above.

```
error_page  403  https://example.com/forbidden.html;
location /wp-login.php {
    allow   203.0.113.15
    # or for the entire network:
    # allow   203.0.113.0/24;
    deny    all;
}

```

Note that the order of the deny/allow is of the utmost importance. You might be tempted to think that you can switch the access directives order and everything will work. In fact it doesn’t. Switching the order in the above example has the result of denying access to all addresses.

Again, on IIS web servers you can use a web.config file to limit IP addresses that have access. It’s best to add this in an additional `<location` directive.

```
<location path="wp-admin">
    <system.webServer>
        <security>
            <ipSecurity allowUnlisted="false"> <!-- this rule denies all IP addresses, except the ones mentioned below -->
                <!-- 203.0.113.x is a special test range for IP addresses -->
                <!-- replace them with your own -->
                <add ipAddress="203.0.113.15" allowed="true" />
                <add ipAddress="203.0.113.16" allowed="true" />
            </ipSecurity>
        </security>
    </system.webServer>
</location>

```

#### Deny Access to No Referrer Requests

Extended from [Combatting Comment Spam](https://codex.wordpress.org/Combating_Comment_Spam/Denying_Access#Deny_Access_to_No_Referrer_Requests), you can use this to prevent anyone who isn’t submitting the login form from accessing it:

```
# Stop spam attack logins and comments
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_METHOD} POST
    RewriteCond %{REQUEST_URI} .(wp-comments-post|wp-login)\.php*
    RewriteCond %{HTTP_REFERER} !.*example.com.* [OR]
    RewriteCond %{HTTP_USER_AGENT} ^$
    RewriteRule (.*) https://%{REMOTE_ADDR}/$1 [R=301,L]
</ifModule>

```

Nginx – Deny Access to No Referrer Requests

```
location ~* (wp-comments-posts|wp-login)\\.php$ {
    if ($http_referer !~ ^(https://example.com) ) {
        return 405;
    }
}

```

Windows Server IIS – Deny access to no referrer requests:

```
<rule name="block_comments_without_referer" patternSyntax="ECMAScript" stopProcessing="true">
<match url="(.*)" ignoreCase="true" />
    <conditions logicalGrouping="MatchAll">
        <add input="{URL}" pattern="^/(wp-comments-post|wp-login)\.php" negate="false"/>
        <add input="{HTTP_REFERER}" pattern=".*example\.com.*" negate="true" />
        <add input="{HTTP_METHOD}" pattern="POST" />
    </conditions>
    <action type="CustomResponse" statusCode="403" statusReason="Forbidden: Access is denied." statusDescription="No comments without referrer!" />
</rule>

```

Change example.com to your domain. If you’re using Multisite with mapped domains, you’ll want to change example.com to `(example.com|example.net|example.org)` and so on. If you are using Jetpack comments, don’t forget to add jetpack.wordpress.com as referrer: `(example.com|jetpack\.wordpress\com)`

#### ModSecurity

If you use ModSecurity, you can follow the advice from [Frameloss – Stopping brute force logins against WordPress](https://web.archive.org/web/20230113232859/https://www.frameloss.org/2011/07/29/stopping-brute-force-logins-against-wordpress/). This requires root level access to your server, and may need the assistance of your webhost.

If you’re using ModSecurity 2.7.3, you can add the rules into your .htaccess file instead.

#### Fail2Ban

Fail2ban is a Python daemon that runs in the background. It checks the logfiles that are generated by Apache (or SSH for example), and on certain events can add a firewall rule. It uses a so called filter with a regular expression. If that regular expression happens for example 5 times in 5 minutes, it can block that IP address for 60 minutes (or any other set of numbers).

Installing and setting up Fail2ban requires root access.

#### Blocklists

It appears that most brute force attacks are from hosts from Russia, Kazachstan and Ukraine. You can choose to block ip-addresses that originate from these countries. There are blocklists available on the internet that you can download. With some shell-scripting, you can then load blockrules with iptables.

You have to be aware that you are blocking legitimate users as well as attackers. Make sure you can support and explain that decision to your customers.

Besides blocklists per country, there are lists with ip-addresses of well-known spammers. You can also use these to block them with iptables. It’s good to update these lists regularly.

Setting up of blocklists and iptables requires root access.

#### Cloud/Proxy Services

Services like CloudFlare and Sucuri CloudProxy can also help mitigate these attacks by blocking the IPs before they reach your server.

### See Also

- [Sucuri: Protecting Against WordPress Brute Force Attacks](https://blog.sucuri.net/2013/04/protecting-against-wordpress-brute-force-attacks.html)
- [How to: Protect WordPress from brute-force XML-RPC attacks](https://www.saotn.org/how-to-wordpress-protection-from-brute-force-xml-rpc-attacks/)
- [Liquid Web: ModSecurity Rules To Alleviate Brute Force Attacks](https://www.liquidweb.com/kb/wordpress-modsecurity-rules/)
- [Swiss Army Knife for WordPress (SAK4WP)](https://github.com/orbisius/sak4wp/) – Free Open Source Tool that can help you protect your wp-login.php and /wp-admin/ but not /wp-admin/admin-ajax.php with one click and much more

---

# Hardening WordPress <a name="advanced-administration/security/hardening" />

Source: https://developer.wordpress.org/advanced-administration/security/hardening/

Security in WordPress is [taken very seriously](https://wordpress.org/about/security/), but as with any other system there are potential security issues that may arise if some basic security precautions aren’t taken. This article will go through some common forms of vulnerabilities, and the things you can do to help keep your WordPress installation secure.

This article is not the ultimate quick fix to your security concerns. If you have specific security concerns or doubts, you should discuss them with people whom you trust to have sufficient knowledge of computer security and WordPress.

## What is Security?

Fundamentally, security *is not* about perfectly secure systems. Such a thing might well be impractical, or impossible to find and/or maintain. What security is though is risk reduction, not risk elimination. It’s about employing all the appropriate controls available to you, within reason, that allow you to improve your overall posture reducing the odds of making yourself a target, subsequently getting hacked.

**Website Hosts**

Often, a good place to start when it comes to website security is your hosting environment. Today, there are a number of options available to you, and while hosts offer security to a certain level, it’s important to understand where their responsibility ends and yours begins. Here is a good article explaining the complicated dynamic between [web hosts and the security of your website](https://perezbox.com/2014/11/how-hosts-manage-your-website-security/). A secure server protects the privacy, integrity, and availability of the resources under the server administrator’s control.

Qualities of a trusted web host might include:

- Readily discusses your security concerns and which security features and processes they offer with their hosting.
- Provides the most recent stable versions of all server software.
- Provides reliable methods for backup and recovery.

Decide which security you need on your server by determining the software and data that needs to be secured. The rest of this guide will help you with this.

**Website Applications**

It’s easy to look at web hosts and pass the responsibility of security to them, but there is a tremendous amount of security that lies on the website owner as well. Web hosts are often responsible for the infrastructure on which your website sits, they are not responsible for the application you choose to install.

To understand where and why this is important you must [understand how websites get hacked](https://blog.sucuri.net/2015/05/website-security-how-do-websites-get-hacked.html), Rarely is it attributed to the infrastructure, and most often attributed to the application itself (i.e., the environment you are responsible for).

### Security Themes

Keep in mind some general ideas while considering security for each aspect of your system:

**Limiting access**

Making smart choices that reduce possible entry points available to a malicious person.

**Containment**

Your system should be configured to minimize the amount of damage that can be done in the event that it is compromised.

**Preparation and knowledge**

Keeping backups and knowing the state of your WordPress installation at regular intervals. Having a plan to backup and recover your installation in the case of catastrophe can help you get back online faster in the case of a problem.

**Trusted Sources**

Do not get plugins/themes from untrusted sources. Restrict yourself to the WordPress.org repository or well known companies. Trying to get plugins/themes from the outside [may lead to issues](https://blog.sucuri.net/2014/03/unmasking-free-premium-wordpress-plugins.html).

### Vulnerabilities on Your Computer

Make sure the computers you use are free of spyware, malware, and virus infections. No amount of security in WordPress or on your web server will make the slightest difference if there is a keylogger on your computer.

Always keep your operating system and the software on it, especially your web browser, up to date to protect you from security vulnerabilities. If you are browsing untrusted sites, we also recommend using tools like no-script (or disabling javascript/flash/java) in your browser.

### Vulnerabilities in WordPress

Like many modern software packages, WordPress is updated regularly to address new security issues that may arise. Improving software security is always an ongoing concern, and to that end **you should always keep up to date with the latest version of WordPress**. Older versions of WordPress are not maintained with security updates.

#### Updating WordPress

Main article: [Updating WordPress](https://wordpress.org/documentation/article/updating-wordpress/).

The latest version of WordPress is always available from the main WordPress website at https://wordpress.org. Official releases are not available from other sites — **never** download or install WordPress from any website other than https://wordpress.org.

Since version 3.7, WordPress has featured automatic updates. Use this functionality to ease the process of keeping up to date. You can also use the WordPress Dashboard to keep informed about updates. Read the entry in the Dashboard or the WordPress Developer Blog to determine what steps you must take to update and remain secure.

If a vulnerability is discovered in WordPress and a new version is released to address the issue, the information required to exploit the vulnerability is almost certainly in the public domain. This makes old versions more open to attack, and is one of the primary reasons you should always keep WordPress up to date.

If you are an administrator in charge of more than one WordPress installation, consider using [Subversion](https://codex.wordpress.org/Installing/Updating_WordPress_with_Subversion) to make management easier.

#### Reporting Security Issues

If you think you have found a security flaw in WordPress, you can help by reporting the issue. See the [Security FAQ](https://make.wordpress.org/core/handbook/testing/reporting-security-vulnerabilities/) for information on how to report security issues.

If you think you have found a bug, report it. See [Submitting Bugs](https://make.wordpress.org/core/handbook/testing/reporting-bugs/) for how to do this. You might have uncovered a vulnerability, or a bug that could lead to one.

### Web Server Vulnerabilities

The web server running WordPress, and the software on it, can have vulnerabilities. Therefore, make sure you are running secure, stable versions of your web server and the software on it, or make sure you are using a trusted host that takes care of these things for you.

If you’re on a shared server (one that hosts other websites besides your own) and a website on the same server is compromised, your website can potentially be compromised too even if you follow everything in this guide. Be sure to ask your [web host](https://wordpress.org/documentation/article/glossary/#Hosting_provider) what security precautions they take.

### Network Vulnerabilities

The network on both ends — the WordPress server side and the client network side — should be trusted. That means updating firewall rules on your home router and being careful about what networks you work from. An Internet cafe where you are sending passwords over an unencrypted connection, wireless or otherwise, is **not** a trusted network.

Your web host should be making sure that their network is not compromised by attackers, and you should do the same. Network vulnerabilities can allow passwords and other sensitive information to be intercepted.

### Passwords

Many potential vulnerabilities can be avoided with good security habits. A strong password is an important aspect of this.

The goal with your password is to make it hard for other people to guess and hard for a [brute force attack](#advanced-administration/security/brute-force) to succeed. Many [automatic password generators](https://www.google.com/?q=password+generator) are available that can be used to create secure passwords.

WordPress also features a password strength meter which is shown when changing your password in WordPress. Use this when changing your password to ensure its strength is adequate.

Things to avoid when choosing a password:

- Any permutation of your own real name, username, company name, or name of your website.
- A word from a dictionary, in any language.
- A short password.
- Any numeric-only or alphabetic-only password (a mixture of both is best).

A strong password is necessary not just to protect your blog content. A hacker who gains access to your administrator account is able to install malicious scripts that can potentially compromise your entire server.

In addition to using a strong password, it’s a good idea to enable [two-step authentication](#advanced-administration/security/mfa) as an additional security measure.

### FTP

When connecting to your server you should use SFTP encryption if your web host provides it. If you are unsure if your web host provides SFTP or not, just ask them.

Using SFTP is the same as FTP, except your password and other data is encrypted as it is transmitted between your computer and your website. This means your password is never sent in the clear and cannot be intercepted by an attacker.

### File Permissions

Some neat features of WordPress come from allowing various files to be writable by the web server. However, allowing write access to your files is potentially dangerous, particularly in a shared hosting environment.

It is best to lock down your file permissions as much as possible and to loosen those restrictions on the occasions that you need to allow write access, or to create specific folders with less restrictions for the purpose of doing things like uploading files.

Here is one possible permission scheme.

All files should be owned by your user account, and should be writable by you. Any file that needs write access from WordPress should be writable by the web server, if your hosting set up requires it, that may mean those files need to be group-owned by the user account used by the web server process.

**`/`**

The root WordPress directory: all files should be writable only by your user account, except `.htaccess` if you want WordPress to automatically generate rewrite rules for you.

**`/wp-admin/`**

The WordPress administration area: all files should be writable only by your user account.

**`/wp-includes/`**

The bulk of WordPress application logic: all files should be writable only by your user account.

**`/wp-content/`**

User-supplied content: intended to be writable by your user account and the web server process.

Within `/wp-content/` you will find:

**`/wp-content/themes/`**

Theme files. If you want to use the built-in theme editor, all files need to be writable by the web server process. If you do not want to use the built-in theme editor, all files can be writable only by your user account.

**`/wp-content/plugins/`**

Plugin files: all files should be writable only by your user account.

Other directories that may be present with `/wp-content/` should be documented by whichever plugin or theme requires them. Permissions may vary.

#### Changing file permissions

If you have shell access to your server, you can change file permissions recursively with the following command:

For Directories:

```
find /path/to/your/wordpress/install/ -type d -exec chmod 755 {} \;

```

For Files:

```
find /path/to/your/wordpress/install/ -type f -exec chmod 644 {} \;

```

#### Regarding Automatic Updates

When you tell WordPress to perform an automatic update, all file operations are performed as the user that owns the files, not as the web server’s user. All files are set to 0644 and all directories are set to 0755, and writable by only the user and readable by everyone else, including the web server.

### Database Security

If you run multiple blogs on the same server, it is wise to consider keeping them in separate databases each managed by a different user. This is best accomplished when performing the initial [WordPress installation](#advanced-administration/before-install/howto-install). This is a containment strategy: if an intruder successfully cracks one WordPress installation, this makes it that much harder to alter your other blogs.

If you administer MySQL yourself, ensure that you understand your MySQL configuration and that unneeded features (such as accepting remote TCP connections) are disabled. See [Secure MySQL Database Design](https://www.securityfocus.com/infocus/1667) for a nice introduction.

#### Restricting Database User Privileges

For normal WordPress operations, such as posting blog posts, uploading media files, posting comments, creating new WordPress users and installing WordPress plugins, the MySQL database user only needs data read and data write privileges to the MySQL database; SELECT, INSERT, UPDATE and DELETE.

Therefore any other database structure and administration privileges, such as DROP, ALTER and GRANT can be revoked. By revoking such privileges you are also improving the containment policies.

**Note:** Some plugins, themes and major WordPress updates might require to make database structural changes, such as add new tables or change the schema. In such case, before installing the plugin or updating a software, you will need to temporarily allow the database user the required privileges.

**WARNING:** Attempting updates without having these privileges can cause problems when database schema changes occur. Thus, it is **NOT** recommended to revoke these privileges. If you do feel the need to do this for security reasons, then please make sure that you have a solid backup plan in place first, with regular whole database backups which you have tested are valid and that can be easily restored. A failed database upgrade can usually be solved by restoring the database back to an old version, granting the proper permissions, and then letting WordPress try the database update again. Restoring the database will return it back to that old version and the WordPress administration screens will then detect the old version and allow you to run the necessary SQL commands on it. Most WordPress upgrades do not change the schema, but some do. Only major point upgrades (3.7 to 3.8, for example) will alter the schema. Minor upgrades (3.8 to 3.8.1) will generally not. Nevertheless, **keep a regular backup**.

### Securing wp-admin

Adding server-side password protection (such as [BasicAuth](https://en.wikipedia.org/wiki/Basic_access_authentication)) to `/wp-admin/` adds a second layer of protection around your blog’s admin area, the login screen, and your files. This forces an attacker or bot to attack this second layer of protection instead of your actual admin files. Many WordPress attacks are carried out autonomously by malicious software bots.

Simply securing the `wp-admin/` directory might also break some WordPress functionality, such as the AJAX handler at `wp-admin/admin-ajax.php`. See the [Resources](#advanced-administration/resources) section for more documentation on how to password protect your `wp-admin/` directory properly.

The most common attacks against a WordPress blog usually fall into two categories.

1. Sending specially-crafted HTTP requests to your server with specific exploit payloads for specific vulnerabilities. These include old/outdated plugins and software.
2. Attempting to gain access to your blog by using “brute-force” password guessing.

The ultimate implementation of this “second layer” password protection is to require an HTTPS SSL encrypted connection for administration, so that all communication and sensitive data is encrypted. *See [Administration Over SSL](#advanced-administration/security/https).*

### Securing wp-includes

A second layer of protection can be added where scripts are generally not intended to be accessed by any user. One way to do that is to block those scripts using mod\_rewrite in the .htaccess file. **Note:** to ensure the code below is not overwritten by WordPress, place it outside the `# BEGIN WordPress` and `# END WordPress` tags in the .htaccess file. WordPress can overwrite anything between these tags.

```
# Block the include-only files.
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^wp-admin/includes/ - [F,L]
RewriteRule !^wp-includes/ - [S=3]
RewriteRule ^wp-includes/[^/]+\.php$ - [F,L]
RewriteRule ^wp-includes/js/tinymce/langs/.+\.php - [F,L]
RewriteRule ^wp-includes/theme-compat/ - [F,L]
</IfModule>
# BEGIN WordPress

```

Note that this won’t work well on Multisite, as `RewriteRule ^wp-includes/[^/]+\.php$ - [F,L]` would prevent the ms-files.php file from generating images. Omitting that line will allow the code to work, but offers less security.

### Securing wp-config.php

You can move the `wp-config.php` file to the directory above your WordPress install. This means for a site installed in the root of your webspace, you can store `wp-config.php` outside the web-root folder.

**Note:** Some people assert that [moving wp-config.php has minimal security benefits](https://wordpress.stackexchange.com/questions/58391/is-moving-wp-config-outside-the-web-root-really-beneficial) and, if not done carefully, may actually introduce serious vulnerabilities. [Others disagree](https://wordpress.stackexchange.com/questions/58391/is-moving-wp-config-outside-the-web-root-really-beneficial/74972#74972).

Note that `wp-config.php` can be stored ONE directory level above the WordPress (where wp-includes resides) installation. Also, make sure that only you (and the web server) can read this file (it generally means a 400 or 440 permission).

If you use a server with .htaccess, you can put this in that file (at the very top) to deny access to anyone surfing for it:

```
<Files "wp-config.php">
Require all denied
</Files>

```

### Disable File Editing

The WordPress Dashboard by default allows administrators to edit PHP files, such as plugin and theme files. This is often the first tool an attacker will use if able to login, since it allows code execution. WordPress has a constant to disable editing from Dashboard. Placing this line in wp-config.php is equivalent to removing the ‘edit\_themes’, ‘edit\_plugins’ and ‘edit\_files’ capabilities of all users:

```
define( 'DISALLOW_FILE_EDIT', true );

```

This will not prevent an attacker from uploading malicious files to your site, but might stop some attacks.

### Plugins

First of all, make sure your plugins are always updated. Also, if you are not using a specific plugin, delete it from the system.

#### Firewall

There are many plugins and services that can act as a firewall for your website. Some of them work by modifying your .htaccess  
file and restricting some access at the Apache level, before it is processed by WordPress. A good example is [iThemes Security](https://wordpress.org/plugins/better-wp-security/) or [All in One WP Security](https://wordpress.org/plugins/all-in-one-wp-security-and-firewall/). Some firewall plugins act at the WordPress level, like [WordFence](https://wordpress.org/plugins/wordfence/) and [Shield](https://wordpress.org/plugins/wp-simple-firewall/), and try to filter attacks as WordPress is loading, but before it is fully processed.

Besides plugins, you can also install a WAF (web firewall) at your web server to filter content before it is processed by WordPress. The most popular open source WAF is ModSecurity.

A website firewall can also be added as intermediary between the traffic from the internet and your hosting server. These services all function as reverse proxies, in which they accept the initial requests and reroute them to your server, stripping it of all malicious requests. They accomplish this by modifying your DNS records, via an A record or full DNS swap, allowing all traffic to pass through the new network first. This causes all traffic to be filtered by the firewall before reaching your site. A few companies offer such service, like [CloudFlare](https://www.cloudflare.com/), [Sucuri](https://sucuri.net/wordpress-security/) and [Incapsula](https://www.imperva.com/).

Additionally, these third parties service providers function as Content Distribution Network (CDNs) by default, introducing performance optimization and global reach.

#### Plugins that need write access

If a plugin wants write access to your WordPress files and directories, please read the code to make sure it is legit or check with someone you trust. Possible places to check are the [Support Forums](https://wordpress.org/support/welcome/) and [IRC Channel](https://make.wordpress.org/support/handbook/appendix/other-support-locations/introduction-to-irc/).

#### Code execution plugins

As we said, part of the goal of hardening WordPress is containing the damage done if there is a successful attack. Plugins which allow arbitrary PHP or other code to execute from entries in a database effectively magnify the possibility of damage in the event of a successful attack.

A way to avoid using such a plugin is to use [custom page templates](https://wordpress.org/documentation/article/pages/#Creating_your_own_Page_Templates) that call the function. Part of the security this affords is active only when you [disallow file editing within WordPress](#File_Permissions).

### Security through obscurity

[Security through obscurity](https://en.wikipedia.org/wiki/Security_through_obscurity) is generally an unsound primary strategy. However, there are areas in WordPress where obscuring information *might* help with security:

1. **Rename the administrative account:** When creating an administrative account, avoid easily guessed terms such as `admin` or `webmaster` as usernames because they are typically subject to attacks first. On an existing WordPress install you may rename the existing account in the MySQL command-line client with a command like:

```
UPDATE wp_users SET user_login = 'newuser' WHERE user_login = 'admin';

```

or by using a MySQL frontend like [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin).  
2\. **Change the table\_prefix:** Many published WordPress-specific SQL-injection attacks make the assumption that the table\_prefix is `wp_`, the default. Changing this can block at least some SQL injection attacks.

### Data Backups

Back up your data regularly, including your MySQL databases. See the main article: [Backing Up Your Database](#advanced-administration/security/backup/database).

Data integrity is critical for trusted backups. Encrypting the backup, keeping an independent record of MD5 hashes for each backup file, and/or placing backups on read-only media increases your confidence that your data has not been tampered with.

A sound backup strategy could include keeping a set of regularly-timed snapshots of your entire WordPress installation (including WordPress core files and your database) in a trusted location. Imagine a site that makes weekly snapshots. Such a strategy means that if a site is compromised on May 1st but the compromise is not detected until May 12th, the site owner will have pre-compromise backups that can help in rebuilding the site and possibly even post-compromise backups which will aid in determining how the site was compromised.

### Logging

Logs are your best friend when it comes to understanding what is happening with your website, especially if you’re trying to perform forensics. Contrary to popular beliefs, logs allow you to see what was done and by who and when. Unfortunately the logs will not tell you who, username, logged in, but it will allow you to identify the IP and time and more importantly, the actions the attacker might have taken. You will be able to see any of these attacks via the logs – Cross Site Scripting (XSS), Remote File Inclusion (RFI), Local File Inclusion (LFI) and Directory Traversal attempts. You will also be able to see brute force attempts. There are various [examples and tutorials](https://blog.sucuri.net/2015/08/ask-sucuri-how-did-my-wordpress-website-get-hacked-a-tutorial.html) available to help guide you through the process of parsing and analyzing your raw logs.

If you get more comfortable with your logs you’ll be able to see things like, when the theme and plugin editors are being used, when someone updates your widgets and when posts and pages are added. All key elements when doing forensic work on your web server. The are a few WordPress Security plugins that assist you with this as well, like the [Sucuri Auditing tool](https://wordpress.org/plugins/sucuri-scanner/) or the [Audit Trail](https://wordpress.org/plugins/audit-trail/) plugin.

There are two key open-source solutions you’ll want on your web server from a security perspective, this is a layered approach to security.

OSSEC can run on any NIX distribution and will also run on Windows. When configured correctly its very powerful. The idea is correlate and aggregate all the logs. You have to be sure to configure it to capture all access\_logs and error\_logs and if you have multiple websites on the server account for that. You’ll also want to be sure to filter out the noise. By default you’ll see a lot of noise and you’ll want to configure it to be really effective.

### Monitoring

Sometimes prevention is not enough and you may still be hacked. That’s why intrusion detection/monitoring is very important. It will allow you to react faster, find out what happened and recover your site.

#### Monitoring your logs

If you are on a dedicated or virtual private server, in which you have the luxury of root access, you have the ability easily configure things so that you can see what’s going on. [OSSEC](https://www.ossec.net/) easily facilitates this and here is a little write up that might help you out [OSSEC for Website Security – Part I](https://perezbox.com/2013/03/ossec-for-website-security-part-i/).

#### Monitoring your files for changes

When an attack happens, it always leave traces. Either on the logs or on the file system (new files, modified files, etc). If you are using [OSSEC](https://www.ossec.net/) for example, it will monitor your files and alert you when they change.

##### Goals

The goals of file system tracking include:

- Monitor changed and added files
- Log changes and additions
- Ability to revert granular changes
- Automated alerts

##### General approaches

Administrators can monitor file system via general technologies such as:

- System utilities
- Revision control
- OS/kernel level monitoring

##### Specific tools

Options for file system monitoring include:

- [diff](https://en.wikipedia.org/wiki/Diff_utility) – build clean test copy of your site and compare against production
- [Git](https://git-scm.com/) – source code management
- [inotify](https://en.wikipedia.org/wiki/Inotify) and [incron](https://inotify.aiken.cz/?section=incron&page=doc&lang=en) – OS kernel level file monitoring service that can run commands on filesystem events
- [Watcher](https://github.com/gregghz/Watcher/blob/master/jobs.yml) – Python inotify library
- [OSSEC](https://www.ossec.net/) – Open Source Host-based Intrusion Detection System that performs log analysis, file integrity checking, policy monitoring, rootkit detection, real-time alerting and active response.

##### Considerations

When configuring a file based monitoring strategy, there are many considerations, including the following.

###### Run the monitoring script/service as root

This would make it hard for attackers to disable or modify your file system monitoring solution.

###### Disable monitoring during scheduled maintenance/upgrades

This would prevent unnecessary notifications when you are performing regular maintenance on the site.

###### Monitor only executable filetypes

It may be reasonably safe to monitor only executable file types, such as .php files, etc.. Filtering out non-executable files may reduce unnecessary log entries and alerts.

###### Use strict file system permissions

Read about securing file permissions and ownership. In general, avoid allowing *execute* and *write* permissions to the extent possible.

#### Monitoring your web server externally

If the attacker tries to deface your site or add malware, you can also detect these changes by using a web-based integrity monitor solution. This comes in many forms today, use your favorite search engine and look for Web Malware Detection and Remediation and you’ll likely get a long list of service providers.

### Official WordPress Resources

- [WordPress Security Whitepaper](https://wordpress.org/about/security/)
- [Brute Force Attacks](#advanced-administration/security/brute-force)
- [Security FAQ](https://make.wordpress.org/core/handbook/testing/reporting-security-vulnerabilities/)
- [FAQ – My site was hacked](https://wordpress.org/documentation/article/faq-my-site-was-hacked/)

### See Also

- [Open Source Security Explained](https://snyk.io/series/open-source-security/) (Snyk)
- [Is WordPress Safe?](https://patchstack.com/articles/is-wordpress-safe/) (Patchstack)
- [Authentication and Authorization — Official documentation for Apache HTTP server 2.2](https://httpd.apache.org/docs/current/howto/auth.html)
- [Security Controls](https://docs.nginx.com/nginx/admin-guide/security-controls/) and [Advanced Security documentation for NGINX](https://docs.nginx.com/nginx-management-suite/acm/how-to/policies/advanced-security/)
- Gridpane’s [WordPress Security Knowledgebase](https://gridpane.com/knowledgebase/security/) and [WordPress Security Step-by-Step](https://gridpane.com/knowledgebase/security-strategies-and-tools/)
- [How WordPress Uses Authentication Cookies &amp; Sessions: A Technical Deep-Dive](https://snicco.io/blog/how-wordpress-uses-authentication-cookies-and-sessions) (Snicco)
- [How WordPress Uses Salts and Why You Should Not Rotate Them: A Technical Deep-Dive](https://snicco.io/blog/wordpress-salts) (Snicco)
- [Session Management and Security](https://github.com/snicco/fortress/blob/beta/docs/modules/session/session-managment-and-security.md#session-management-and-security) (Snicco)
- [Securing WordPress Information Security Guideline](https://cio.ubc.ca/information-security/policy-standards-and-resources/securing-wordpress) (The University of British Columbia’s OCIO)
- [Security, From the Basics to Enterprise with Calvin Alkan, Kathy Zant, and Carl Alexander](https://dothewoo.io/security-from-the-basics-to-enterprise-with-calvin-alkan/) (Video)
- [WordPress Security Cutting Through the BS](https://blog.sucuri.net/2012/08/wordpress-security-cutting-through-the-bs.html)
- [e-Book: Locking Down WordPress](https://newcodepoet.files.wordpress.com/2012/07/lockingdownwordpress1-1.pdf)
- [Brad Williams: Lock it Up (Video)](https://wordpress.tv/2010/01/23/brad-williams-security-boston10/)
- [Security Plugins](https://wordpress.org/plugins/tags/security)

---

# Display Errors <a name="advanced-administration/security/hardening/display-errors" />

Source: https://developer.wordpress.org/advanced-administration/security/hardening/display-errors/

## What is display\_errors?

`display_errors` is a directive found in PHP, found in the php.ini file. With this option, PHP determines whether or not errors should be printed directly on the page.

## Why does display\_errors need to be disabled?

According to [PHP documentation](https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors), it should never be enabled on production environments or live sites.

While `display_errors` may provide useful information in debugging scenarios, there are potential security issues that need to be taken into account if it is activated. [See OWASP article about improper error handling.](https://owasp.org/www-community/Improper_Error_Handling)

However, some hosting companies have `display_errors` enabled by default. This may be due to a misconfiguration, such as trying to disable it by using a configuration that does not work in hosting environments where for example PHP is not running as a module, but with PHP FastCGI Process Manager (PHP-FPM).

## How to disable display\_errors

Check your hosting control panel to disable `display_errors` or reach out to your hosting provider.

If your PHP is running as Apache module, you may be able to disable display\_errors with the following .htaccess configuration:

`<IfModule mod_php8.c> php_flag display_errors off </IfModule>`

If your server uses FastCGI/PHP-FPM, it may be possible disable the display\_errors by ensuring that a .user.ini file with the following content:

`display_errors = 0`

If these examples do not work for you, or if you need more instructions, please reach out to your hosting provider.

---

# Monitoring <a name="advanced-administration/security/monitoring" />

Source: https://developer.wordpress.org/advanced-administration/security/monitoring/

Site monitoring systems and services can notify you when your site isn’t working properly. They can often correct any minor issues, or help you to do so before they become major issues.

## Uptime Monitoring

Uptime monitoring is traditionally done at the server level or by checking one or more URLs on the site at regular intervals to make sure they are responding properly. A combination of internal and external uptime monitoring is ideal for users, and there exist a variety of software and services to handle this for you.

## Performance Monitoring

While a site’s services may be responding, to a user, a site being “up” means more than this to them. Performance monitoring is similar to uptime monitoring, but also takes note of certain metrics that could indicate trouble. Metrics like “page load time” and “slowest average transactions” should be monitored and reported regularly to help keep you ahead of performance issues. Monitoring slow logs for problematic queries or requests can also help keep user sites stable. MySQL, PHP-FPM, and others provide options to capture these for monitoring.

## Performance Profiling

It is best practice to use performance profiling tools, such as New Relic, AppDynamics or Tideways, to diagnose the performance bottlenecks of your website and infrastructure. These tools will give you insight such as slow performing functions, external HTTP requests, slow database queries and more that are causing poor performance.

---

# Performance / Optimization <a name="advanced-administration/performance" />

Source: https://developer.wordpress.org/advanced-administration/performance/



---

# Cache <a name="advanced-administration/performance/cache" />

Source: https://developer.wordpress.org/advanced-administration/performance/cache/

This article is part of a series on [WordPress Optimization](#advanced-administration/performance/optimization).

WordPress caching is the fastest way to improve performance. If your site is getting hit **right now** install [W3 Total Cache](https://wordpress.org/plugins/w3-total-cache/), [WP Super Cache](https://wordpress.org/plugins/wp-super-cache/) or [Cache Enabler](https://wordpress.org/extend/plugins/cache-enabler/).

## Caching Plugins

Plugins like [W3 Total Cache](https://wordpress.org/plugins/w3-total-cache/), [WP Super Cache](https://wordpress.org/plugins/wp-super-cache/) and [Cache Enabler](https://wordpress.org/plugins/cache-enabler/) can be easily installed and will cache your WordPress posts and pages as static files. These static files are then served to users, reducing the processing load on the server. This can improve performance several hundred times over for fairly static pages.

When combined with a system level page cache such as Varnish, this can be quite powerful.

If your posts/pages have a lot of dynamic content configuring caching can be more complex. Search for “WordPress cache plugin” for more info.

## Browser Caching

**Browser caching** can help to reduce server load by reducing the number of requests per page. For example, by setting the correct file headers on files that don’t change (static files like images, CSS, JavaScript etc) browsers will then cache these files on your visitor’s computer. This technique allows the browser to check to see if files have changed, instead of simply requesting them. The result is your web server can answer many more 304 responses, confirming that a file is unchanged, instead of 200 responses, which require the file to be sent.

Look into HTTP Cache-Control (specifically **max-age**) and Expires headers, as well as [Entity Tags](https://en.wikipedia.org/wiki/HTTP_ETag) for more information.

## Object Caching

Object caching in WordPress is the act of moving data from a place of expensive and slow retrieval to a place of cheap and fast retrieval. An object cache is also typically persistent, meaning that data cached during one request is available during subsequent requests.

In addition to making data access much easier, cached data should always be replaceable and regenerable. If an application experiences database corruption (e.g., MySQL, Postgres, Couchbase), there will and should be severe consequences for this database (and let us hope that there is a good backup plan in place). In contrast with the main data store for the application, if a cache is corrupted, the application should continue to function as the cached data should regenerate itself. No data will be lost, although there will likely be some performance problems as the cache regenerates.

The storage engine for an object cache can be a number of technologies. Popular object caching engines include Redis, Memcached, APC, and the file system. The caching engine used should be dictated by the needs of the application. Each has its advantages and disadvantages. At a bare minimum the engine used should make accessing the data more performant than regenerating the data.

## Server Caching

**Web server caching** is more complex but is used in very high traffic sites. A wide range of options are available, beyond the scope of this article. The simplest solutions start with the server caching locally while more complex and involved systems may use multiple caching servers (also known as reverse proxy servers) “in front” of web servers where the WordPress application is actually running.

Adding an opcode cache like [Opcache](https://www.php.net/manual/en/book.opcache.php), or [WinCache](https://www.iis.net/downloads/microsoft/wincache-extension) on IIS, to your server will improve PHP’s performance by many times.

[Varnish](https://www.varnish-cache.org/) cache is very powerful when used with a WordPress caching plugin such as W3TC.

## Further Reading

- [Core Caching Concepts in WordPress](https://www.tollmanz.com/core-caching-concepts-in-wordpress/)
- [Best Practices for Speeding Up Your Web Site](https://developer.yahoo.com/performance/rules.html) – Expires / Cache-Control Header and ETags (by Yahoo! Developer Network)
- [WebSiteOptimization.com: Use Server Cache Control to Improve Performance](https://www.websiteoptimization.com/speed/tweak/cache/)

---

# Optimization <a name="advanced-administration/performance/optimization" />

Source: https://developer.wordpress.org/advanced-administration/performance/optimization/

Whether you run a high traffic WordPress installation or a small blog on a low cost shared host, you should optimize WordPress and your server to run as efficiently as possible. This article provides a broad overview of WordPress optimization, with specific recommended approaches. However, it’s not a detailed technical explanation of each aspect.

If you need a quick fix now, go straight to the Caching section, you’ll get the biggest benefit for the smallest hassle there. If you want to get started on a more thorough optimization process immediately, go to [How to Improve Performance on WordPress](#how-to-improve-performance-in-wordpress).

A broad overview of the topic of performance is included below in [Performance factors](#performance-factors) and [Performance testing tools](#performance-testing-tools). Many of the techniques discussed here also apply to WordPress Multisite (MU).

## Performance factors

Several factors can affect the performance of your WordPress blog (or website). Those factors include, but are not limited to, the hosting environment, WordPress configuration, software versions, number of images and their file sizes.

Most of these performance degrading factors are addressed here in this article.

### Hosting

The optimization techniques available to you will depend on your hosting setup.

#### Shared Hosting

This is the most common type of hosting. Your site will be hosted on a server along with many others. The hosting company manage the web server for you, so you have very little control over server settings and so on. In most shared hosting, the user can access the file system of the website root via SFTP and many of the common domain/hosting tasks via a [web hosting control panel](#advanced-administration/server/control-panel).

The areas most relevant to this type of hosting are: [Caching](#caching), [WordPress Performance](#optimizing-your-wordpress-website), and [Content Offloading](#content-offloading).

#### Managed Hosting

Managed hosting is similar to shared hosting, but more locked down to a set of software stacks that the users can run for a particular set of usage scenarios. Hence, the hosting provider manages the software stacks for the users, but with the condition of limiting the software selections. The users typically don’t have (or the need) to access the file system and manage any tasks via a [web hosting control panel](#advanced-administration/server/control-panel). Some hosting providers will offer more choice in the selection of software or plug-ins in the upper tier of the hosting plans.

Most of the content platforms on the web today (e.g. blogging / social media) are a form of managed hosting, as their purpose is to provide a platform for a particular set of usage scenarios.

#### Virtual Private Servers and Dedicated Servers

In this hosting scenario, you have control over your own server: the entire file system, SSH, and the ability to install/configure any software on an independent operating system dedicated to the server. The server might be a dedicated piece of hardware or one of many virtual servers sharing the same physical hardware.

The key thing is, you have control over the server settings. In addition to the areas above (caching and WordPress performance), the key areas of interest here are: [Optimize Software](#optimize-software) and [Content Offloading](#content-offloading).

#### Number of Servers

When dealing with very high traffic situations, it may be necessary to employ multiple servers. If you’re at this level, you should already have employed all the applicable techniques listed above.

The WordPress database can be easily moved to a different server and only requires a small change to the config file. Likewise, images and other static files can be moved to alternative servers (see [Content Offloading](#content-offloading)).

[Load balancers](https://en.wikipedia.org/wiki/Load_balancing_(computing)) can help spread traffic across multiple web servers but requires a higher level of expertise. If you’re employing multiple database servers, the [HyperDB](https://codex.wordpress.org/HyperDB) class provides a drop-in replacement for the standard [WPDB](#reference/classes/wpdb) class, and can handle multiple database servers in both replicated and partitioned structures.

#### Hardware Performance

Your hardware capability will have a huge impact on your site performance. The number of processors, the processor speed, the amount of available memory, disk space, and the disk storage medium are important factors. Hosting providers generally offer higher performance for a higher price.

#### Geographical distance

The distance between your server and your website visitors also has an impact on performance. A Content Delivery Network, or CDN, can mirror static files (like images) across various geographic regions so that all your site visitors have optimal performance.

#### Server Load

The amount of traffic on your server and how it’s configured to handle the load will have a huge impact as well. For example, if you don’t use a caching solution, performance will slow to a halt as additional page requests come in and stack up, often crashing your web or database server.

If configured properly, most hosting solutions can handle very high traffic amounts. Offloading traffic to other servers can also reduce server load.

Abusive traffic such as login [Brute Force attacks](#advanced-administration/security/brute-force), image hotlinking (other sites linking to your image files from high traffic pages) or DoS attacks can also increase server load. Identifying and blocking these attacks is critical.

#### Software version &amp; performance

Making sure you are using the latest software is also important, as software upgrades often fix bugs and enhance performance. Making sure you’re running the latest version of Linux (or Windows), Apache, MySQL/MariaDB, and PHP is essential.

### WordPress Configuration

Your theme will have a huge impact on the performance of your site. A fast lightweight theme will perform much more efficiently than a heavy graphic-laden inefficient one.

The number of plugins and their performance will also have a huge impact on your site’s performance. Deactivating and deleting unnecessary plugins is a significant way to improve performance.

Keeping up with WordPress upgrades is also important.

#### Size of Graphics

Making sure the images in your posts are optimized for the web can save time, bandwidth, and increase your search engine ranking.

## Performance testing tools

- [Online web page benchmarking tools](https://duckduckgo.com/?q=online+web+page+benchmarking+tools) can test real life website performance from different locations, browsers, and connection speeds.
- The built-in browser developer tools (e.g. Firefox or Chrome) all have performance measurement tools.

## How to improve performance on WordPress

### Optimizing Your WordPress Website

#### Minimizing Plugins

The first and easiest way to improve WordPress performance is by looking at the plugins. Deactivate and delete any unnecessary plugins. Try selectively disabling plugins to measure server performance.

Is one of your plugins significantly affecting your site’s performance? Look at the plugin documentation, ask for support in the appropriate plugin support forum or look for alternative plugins with similar featuresets.

#### Optimizing content

*Image Files*

- Are there any unnecessary images? (e.g. Can you replace some of the images with text?)
- Make sure all image files are optimized. Choose the correct format (JPG/PNG/GIF) and compression for each image.
- Consider using a more modern image format like WebP which is smaller in size.

*Total File Number/Size*

- Can you reduce the number of files needed to display the average page on your site?
- When still using HTTP/1.x, it’s recommended to combine multiple files in a single optimized file.
- Minify CSS and JavaScript files.

### Upgrade Hardware

Paying more for higher service levels at your hosting provider can be very effective. Increasing CPU and memory (RAM) or switching to a host with Solid-State Drives (SSD) or NVMe can make a big difference. Increased number of processors and processor speed will also help. Where possible, try to separate services with different functions – like HTTP and MySQL – on multiple servers or VPS (the servers should ideally be in the same location to reduce latency). If you are on shared hosting, upgrading to a plan with higher resource limits like Disk I/O, IOPS, NPROC and total processes of your hosting plan may help if you are maxing out your limits.

### Optimize Software

Make sure you are running the latest operating system version (e.g. Linux or Windows Server), the latest web server version (e.g. Apache or IIS), database (e.g. MySQL server), and PHP.

If you are unable to perform the following tasks below, your hosting provider may be able to perform some of them for you, or you may seek external help such as freelancers to help you. A good hosting provider will upgrade or move your account to an upgraded server to match the recommended spec, but not all of them will help you manage/optimize your servers, since it’s typically outside the scope of hosting plan offerings. If needed, a managed WordPress hosting solution, with a pre-chosen set of software stacks and fixed versions, could be a potential fit for your needs.

**DNS**: Don’t run a DNS on your WordPress server. Use a commercial DNS service or your domain registrar’s free offering. Using an external service can also make switching between backup servers during maintenance or emergencies much easier. It also provides a degree of fault tolerance. If you host your DNS on external servers, it will reduce the load on your primary web server. It’s a simple change, but it will offload some traffic and CPU load.

**Web Server**: Your web server can be configured to increase performance. There is a range of techniques, from web server caching to setting cache headers to reduce load per visitor. Search for your specific web server optimizations (for example, search for “Apache optimization” for more info). Some web servers have higher speed versions you can pay for. There are also a number of ways to tune Apache for higher performance based on your particular hosting and site configuration (e.g. Memcached).

**PHP**: There are various PHP accelerators available which can dramatically improve the performance of your PHP files. This will apply to all PHP files, not just your WordPress installation. Search for PHP optimization for more information (e.g. [APC](https://www.php.net/manual/book.apcu.php) or [OPcache](https://www.php.net/manual/book.opcache.php)). Some WordPress caching plugins offer integrated support for Memcached, APC and other Opcode caching. Newer PHP versions will usually include better performance optimization as well.

**MySQL/MariaDB**: MySQL or MariaDB optimization is a black art in itself. A few simple changes to the query cache settings can have a dramatic effect on WordPress performance because WordPress repeats many queries on every request. Nowadays, with InnoDB being the default storage engine for MySQL, you have to make sure to use that. InnoDB can be optimized and fine-tuned, search the web for [mysql optimization](https://duckduckgo.com/?q=mysql+optimization), [mysql innodb performance](https://duckduckgo.com/?q=mysql+innodb+performance) or [innodb optimization](https://duckduckgo.com/?q=innodb+optimization) for more information and examples. Search the web for [mysql convert myisam to innodb](https://duckduckgo.com/?q=mysql+convert+myisam+to+innodb) for information on how to convert older MyISAM tables to InnoDB.

**Other services**: Don’t run a mail server on your WordPress server. For your contact form, use a contact form plug-in along with an external mailing service.

### Caching

#### Caching Plugins

Caching plugins can be easily installed and will cache your WordPress posts and pages as static files. These static files are then served to users, reducing the processing load on the server. This can improve performance several hundred times over for fairly static pages. You can get a list of relevant plugins by searching for [cache](https://wordpress.org/plugins/search/cache/) in the plugins directory.

When combined with a system-level page cache such as Varnish, this can be powerful. If your posts/pages have a lot of dynamic content, configuring caching can be more complex.

#### Server-side Caching

Web server caching is more complex, but is used on very high traffic sites. A wide range of options are available, beyond the scope of this article. The simplest solutions start with the server caching locally, while more complex and involved systems may use multiple caching servers (also known as reverse proxy servers) “in front” of web servers where the WordPress application is currently running. Some web servers can also act as a reverse proxy at the same time. Adding an opcode cache like [Alternative PHP Cache](https://www.php.net/manual/book.apcu.php) (APC) to your server will improve the performance of PHP by many times.

[Varnish Cache](https://varnish-cache.org/) works in concert with some cache plug-ins to store pre-built pages in memory and serve them quickly without requiring execution of the Apache, PHP, and WordPress stack.

As described within, using an external comments plugin for comments instead of native WordPress comments can assist Varnish by not requiring your readers to log in to WordPress and increasing the number of page views that Varnish Cache can serve out of the cache.

#### Browser Caching

Browser caching can help to reduce server load by reducing the number of requests per page. For example, by setting the correct file headers on files that don’t change (static files like images, CSS, JavaScript etc.), browsers will then cache these files on the user’s computer. This technique allows the browser to check to see if files have changed, instead of simply requesting them. The result is your web server can answer many more 304 responses, confirming that a file is unchanged, instead of 200 responses, which require the file to be sent.

Look into HTTP Cache-Control (specifically `max-age`) and Expires headers, as well as [Entity Tags](https://developer.mozilla.org/docs/Web/HTTP/Headers/ETag) for more information.

Some WordPress cache plug-ins integrate support for browser caching and ETag.

#### Object Caching

Using a **persistent** Object Cache helps speed up page load times by saving on trips to the database from your web server. For example, your site’s options data needs to be available for each page view. Without a persistent object cache, your web server must read those options from the database to handle every page view. Those extra trips to the database slow down your web server’s response times such as “Time to first byte” (TTFB) and can quickly overwhelm your database server during traffic spikes.

For your site to use persistent object caching, your hosting provider must offer you a particular type of server, a [cache server](https://en.wikipedia.org/wiki/Category:Database_caching). Ask your hosting provider or external help such as freelancers to help you install and configure a persistent object cache server, then, install an [object cache WP plug-in](https://wordpress.org/plugins/search/object+cache/) that supports the cache server installed:

### Further Reading

- [WP Object Cache](#reference/classes/wp_object_cache)

### Content Offloading

#### Use a Content Delivery Network (CDN)

Using a CDN can greatly reduce the load on your website. Offloading the searching and delivery of images, JavaScript, CSS and theme files to a CDN are not only faster but takes a great load off your WordPress server’s own app stack. A CDN is most effective if used with a WordPress caching plugin, described above. Some newer CDN will also include Full Page Caching (FPC) or Edge Caching which will cache the entire HTML content of the website.

For details, see [list of notable content delivery service providers](https://en.wikipedia.org/wiki/Content_delivery_network#Notable_content_delivery_service_providers).

#### Static Content

Any static files can be offloaded to another server. For example, any static images, JavaScript, or CSS files can be moved to a different server. This is a common technique in very high-performance systems (Google, Flickr, YouTube, etc.) but can also be helpful for smaller sites where a single server is struggling. Also, moving this content onto different hostnames can lay the groundwork for multiple servers in the future.

Some web servers are optimized to serve static files and can do so far more efficiently than more complex web servers like Apache, for example [lighttpd](https://www.lighttpd.net/).

[Cloud storage](https://en.wikipedia.org/wiki/Object_storage#Cloud_storage) is a dedicated static file hosting service on a pay-per-usage basis. With no minimum costs, it might be practical for lower traffic sites which are reaching the peak that a shared or single server can handle.

#### Multiple Hostnames

There can also be user improvements by splitting static files between multiple hostnames. Most browsers will only make 2 simultaneous requests to a host, so if your page requires 16 files, they will be requested 2 at a time. If you spread the 16 files between 4 host names, they will be requested 8 at a time. This can reduce page loading times for the user, but it can increase server load (if the different hosts names are served by the same server) by creating more simultaneous requests. Also, known is “pipelining” can often saturate the visitor’s internet connection if overused.

Offloading images is the easiest and simplest place to start. All images files could be evenly split between three hostnames (`assets1.example.com`, `assets2.example.com`, `assets3.example.com` for example). As traffic grows, these hostnames could be moved to your own dedicated servers. Note: Avoid picking a hostname at random as this will affect browser caching and result in more traffic and may also create excessive DNS lookups which do carry a performance penalty.

Likewise, any static JavaScript and CSS files can be offloaded to separate hostnames or servers.

Under HTTP/2 and HTTP/3, “HTTP pipelining” is superseded by multiplexing, so the use of the above techniques may no longer be necessary.

#### Feeds

Your feeds can easily be offloaded to an external feed service that can handle all the feed traffic and only update the feed from your site every few minutes. This can be a big traffic saver.

Likewise, you could offload your own feeds to a separate server (feeds.example.com for example) and then handle your own feed stats / advertising.

### Compression

There are a number of ways to compress files and data on your server so that your pages are delivered more quickly to readers’ browsers. Some [cache plug-ins](https://wordpress.org/plugins/search/cache/) described above integrate support for most of the common approaches to compression.

Some WP cache plug-ins support Minify and Tidy to compress and combine your style sheets and JavaScript files. It also supports output compression such as [zlib](https://zlib.net/), see also [Output Compression](https://codex.wordpress.org/Output_Compression).

It’s also important to compress your media files – namely images.

### Database Tuning

#### Cleaning Your Database

Some [optimization plug-ins](https://wordpress.org/plugins/search/optimization/) and [database plug-ins](https://wordpress.org/plugins/search/database/) can help you reduce extra clutter in your database.

You can also instruct WordPress to [minimize the number of revisions](https://wordpress.org/documentation/article/revisions/) that it saves of your posts and pages.

### Adding Servers

While it requires additional expertise, adding servers can be a powerful way to increase performance.

You can use [load balancers](https://en.wikipedia.org/wiki/Load_balancing_(computing)) to spread traffic across multiple web servers, and you can use [HyperDB](https://codex.wordpress.org/HyperDB) or database service in the cloud to run more scalable or multiple database servers.

There are various guides on the web, as well as WordCamp presentations, about scaling WordPress sites on cloud services.

### Autoloaded Options

Autoloaded options are configuration settings for plugins and themes that are automatically loaded with every page load on WordPress. Each plugin and theme defines their own options and which options are autoloaded. Having too many autoloaded options can slow down your site. Generally, you should try to keep your site’s autoloaded options under 800kb.

By default, autoloaded options are saved in the wp\_options table. Autoload can be turned off on an option-by-option basis within this table. For step-by-step instructions on viewing and changing autoloaded options, check with your hosting provider.

If you use a Persistent Object Cache, options (whether autoloaded or not) load faster and more efficiently.

## Additional Resources

### Further Reading

- [High Traffic Tips for WordPress](https://codex.wordpress.org/High_Traffic_Tips_For_WordPress)

### WordCamp Performance Presentations

- [High-Performance WordPress by Iliya Polihronov from WordCamp 2012 (San Francisco)](https://wordpress.tv/2012/09/01/iliya-polihronov-high-performance-wordpress/)
- [WordPress Optimization from WordCamp Israel 2013](https://www.slideshare.net/AlmogBaku/wordpress-optimization-16678718)
- [Copy of the Slides on HyperDB and High Performance from WordCamp 2007 (San Francisco)](https://barry.blog/2007/07/22/high-performance-wordpress/)
    - [Presentation on HyperDB and High Performance from WordCamp 2007 (San Francisco)](https://onemansblog.com/2007/08/16/wordcamp-2007-hyperdb-and-high-performance-wordpress/)
- [50 tips su Web Performance Optimization per siti ad alto traffico WordCamp Bologna (Italy) 2013](https://www.slideshare.net/AndreaCardinali/50-tips-su-web-performance-optimization-per-siti-ad-alto-traffico-wpcamp-bologna-2013)

---

# PHP Optimization <a name="advanced-administration/performance/php" />

Source: https://developer.wordpress.org/advanced-administration/performance/php/

## PHP

PHP (PHP: Hypertext Preprocessor) is a popular programming language on the Internet. PHP turns dynamic content, like that in WordPress, into HTML, CSS, and JavaScript that web browsers can read. WordPress is written primarily in PHP, and a server must have PHP in order for WordPress to be able to run.

As PHP is an interpreted language, its version and configuration has a large impact on how well and whether WordPress will run.

### Version

When possible, PHP 7.4 or greater should be used to run WordPress. As of the writing of this document, PHP 7.4 is the officially supported version for WordPress while PHP 8.0 and 8.1 are “compatible with exceptions”, and PHP 8.2 is on “beta support”. PHP 8 is the only major version of PHP still receiving active development and support. The PHP group regularly retires support for older versions of PHP, and older versions are not guaranteed to be updated for security concerns.

At the same time, newer versions of PHP contain both security and performance improvements, while being accompanied by new features and bug fixes, which are not guaranteed to be backwards compatible. However, extreme care must be taken when upgrading the version of PHP. While WordPress is compatible with the latest releases of PHP, sites built to use older versions of PHP may not be compatible due to their included plugins and themes.

If upgrading to PHP 8 is not immediately possible, upgrading to PHP 7.4 should be done as soon as possible. While WordPress *may* work with older versions of PHP, these versions have reached official End Of Life, and running outdated PHP installations **may expose your site to security vulnerabilities**.

You can find which PHP version is compatible with your WordPress version in the [PHP Compatibility and WordPress Versions](https://make.wordpress.org/core/handbook/references/php-compatibility-and-wordpress-versions/) page.

More information about the support versions of PHP can always be found [on PHP’s supported versions page](https://www.php.net/supported-versions.php).

When upgrading PHP, it’s a good practice to test sites for compatibility before upgrading. If you offer multiple environments, such as a staging and a production environment, PHP version should be configurable separately for each environments. This will allow users to test newer version of PHP in their non-production environment and resolve any issues before upgrading PHP version in the production environment.

There’s a useful [WP-CLI command](https://github.com/danielbachhuber/php-compat-command) for performing a general compatibility check, but be aware that it is not 100% accurate.

### Configuration

PHP is primarily configured using a configuration file, `php.ini`, from which PHP reads all of its settings and configuration at runtime. This usually happens through CGI/FastCGI, or a process manager like PHP-FPM.

Some server environment may allow PHP configurations to be customized with other files like the `.htaccess` or `.user.ini` file.

You can see detailed information about each of these directives [in the official PHP documentation](https://www.php.net/manual/en/ini.core.php).

#### Timeouts

There are several timeout settings on a system that limit different aspects of a request. When configuring your timeouts, it’s important to select values that work well together. For example, it doesn’t make sense to have a very high script execution timeout on your PHP service, if the web server (e.g. Apache) timeout is lower than that – in such case, if the request takes longer, it will be killed by the web server no matter your PHP timeout setting is.

Note that processes take different amount of time, depending on the server load, and those limitations are placed to ensure that your server functions properly. If you have high server load, processes may take longer to complete thus causing a cascade effect leading to even more server load. That’s why it’s a matter of balance between giving enough time for your scripts to be compiled and ensuring that you’re within normal server loads.

The primary PHP timeout can be set with the [`max_execution_time`](https://www.php.net/manual/en/info.configuration.php#ini.max-execution-time) `php.ini` directive. This limits code execution, and not system library calls or MySQL queries, [except on Windows](https://www.php.net/manual/en/function.set-time-limit.php), where it does.

The maximum time allowed for data transfer from the web server to PHP is specified with the [`max_input_time`](https://www.php.net/manual/en/info.configuration.php#ini.max-input-time) `php.ini` directive. It is usually used to limit the amount of time allowed to upload files. It’s important to note that the amount of time is separate from `max_execution_time`, and defines the amount of time between when the web server calls PHP and execution starts.

Note that these timeouts are often configured per server and you won’t be able to modify them if you’re on a shared hosting account. The best approach would be to contact your hosting company tech support and see if they can be modified to suit your needs.

#### Memory Limits

The maximum amount of memory that PHP is allowed to use per page render is specified with the [`memory limit`](https://www.php.net/manual/en/ini.core.php#ini.memory-limit) `php.ini` directive.

In addition to setting memory limits within PHP, WordPress has two memory configuration constants that can be changed in the **wp-config.php** file. WordPress will raise the PHP `memory_limit` to these values if it has permission to do so, but if the `php.ini` specifies higher amounts, WordPress will not lower the amount allowed.

The option `WP_MEMORY_LIMIT` declares the amount of memory WordPress should request for rendering the frontend of the website. WordPress default is 40 MB and WordPress MultiSite default is 64 MB.

```
define( 'WP_MEMORY_LIMIT', '128M' );

```

The option `WP_MAX_MEMORY_LIMIT` declares the amount of memory WordPress should request for rendering the backend of the website. WordPress default is 256 MB.

```
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

```

Since the WordPress backend usually requires more memory, there’s a separate setting for the amount, that can be set for logged in users. This is mainly required for media uploads. You can have it set higher than the front end limit to ensure your backend has all the resources it needs. Usually, `WP_MEMORY_LIMIT <= WP_MAX_MEMORY_LIMIT`.

#### File Upload Sizes

When uploading media files and other content to WordPress using the WordPress admin dashboard, WordPress uses PHP to process the uploads. PHP’s configuration includes limits on the size of files that can be uploaded through PHP and on the size of requests that can be sent to the web server for processing. These will need to align with the server’s timeouts, discussed above.

The limit on the size of individual file uploads can be configured using the [`upload_max_filesize`](https://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize) `php.ini` directive.

The limit on the entire size of a request that can be sent from the web server to PHP for processing can be configured using the [`post_max_size`](https://www.php.net/manual/en/ini.core.php#ini.post-max-size) `php.ini` directive. The value for `post_max_size` must be greater than or equal to the value for `upload_max_filesize`. PHP will not process requests larger in size than the value for `post_max_size`.

Note that `post_max_size` applies to every PHP request and not only uploads, so it may become important to address separately if a site processes a large amount of other data included with the request.

Bear in mind that on shared hosting accounts, those limits are usually set on a server level and you may not be able to modify them or increase them above a certain value. In addition to that, different setups have different ways to modify the above mentioned values. Contact your hosting company tech support for additional assistance on that matter.

#### Replacing WordPress’ Cron Triggers

The `wp-cron.php` script is responsible for causing certain tasks to be scheduled and executed automatically. Every time someone visits your website, `wp-cron.php` checks whether it is time to execute a job or not. Even though these checks are small and fast they consume time and produce load. For this reason, it’s worth considering setting the [`DISABLE_WP_CRON` constant](#advanced-administration/wordpress/wp-config) and using an alternative method to trigger WordPress’ cron system. Note, however, that the WordPress cron system is designed with performance in mind and requires minimal resources to operate so it’s not mandatory to replace it unless you really need to do so.

---

# Debugging WordPress <a name="advanced-administration/debug" />

Source: https://developer.wordpress.org/advanced-administration/debug/

Debugging is an essential part of website development and a crucial step in ensuring a smooth and reliable experience for users. Debugging refers to the process of finding and fixing errors or issues within a website’s code.

In this part of the Advanced Administration Handbook, we will address various aspects of debugging a WordPress website, including general WordPress debugging, JavaScript debugging, WordPress network debugging, and test-driving.

## General WordPress Debugging

When it comes to [debugging a WordPress site](#advanced-administration/debug/debug-wordpress), there are various methods and techniques to use, including turning on debugging in the WordPress configuration file, using error logs and the use of debugging plugins. These techniques can help identify and resolve various types of errors, such as PHP errors and database errors.

## JavaScript Debugging

[JavaScript debugging](#advanced-administration/debug/debug-javascript) is essential for ensuring that the site’s front-end interactions and user experience are functioning correctly. Using browser dev tools to inspect the source code and diagnose issues with JavaScript along with a few more tips are provided in this section.

## WordPress Network Debugging

[WordPress network debugging](#advanced-administration/debug/debug-network) is a required when maintaining a network of WordPress sites; referring to the process of debugging multiple sites that are connected through a single installation of WordPress. This type of setup is often used by organizations that have multiple websites that share a common set of plugins, themes, and users.

## Test-driving

[Test-driving](#advanced-administration/debug/test-driving) refers to the process of testing a website before making it live. This process allows developers to identify and resolve any issues or bugs before the site is made available to the public. Test-driving is typically performed in a sandbox environment. Creating a sandbox environment is covered in this section.

---

# Debugging in WordPress <a name="advanced-administration/debug/debug-wordpress" />

Source: https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/

Debugging PHP code is part of any project, but WordPress comes with specific debugging systems designed to simplify the process as well as standardize code across the core, plugins, and themes. This page describes the various debugging tools available in WordPress and how to be more productive in your coding, as well as increasing the overall quality and interoperability of your code.

For non-programmers or general users, these options can be used to show detailed information about errors.

**NOTE**: Before making any modifications to your website, verify that you have either utilized a staging environment or taken an appropriate backup of your site.

## Example wp-config.php for Debugging

The following code, inserted in your [wp-config.php](https://wordpress.org/documentation/article/editing-wp-config-php/) file, will log all errors, notices, and warnings to a file called `debug.log` in the `wp-content` directory. It will also hide the errors, so they do not interrupt page generation.

```
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

```

```
// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

```

```
// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

```

```
// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

```

**NOTE**: You must insert this **BEFORE** `/* That's all, stop editing! Happy blogging. */` in the [wp-config.php](#advanced-administration/wordpress/wp-config) file.

## WP\_DEBUG

`WP_DEBUG` is a PHP constant (a permanent global variable) that can be used to trigger the “debug” mode throughout WordPress. It is assumed to be false by default, and is usually set to true in the [wp-config.php](#advanced-administration/wordpress/wp-config) file on development copies of WordPress.

```
// This enables debugging.
define( 'WP_DEBUG', true );

```

```
// This disables debugging.  
define( 'WP_DEBUG', false );

```

**Note**: The `true` and `false` values in the example are not surrounded by apostrophes (‘) because they are boolean (true/false) values. If you set constants to `'false'`, they will be interpreted as true because the quotes make it a string rather than a boolean.

It is not recommended to use `WP_DEBUG` or the other debug tools on live sites; they are meant for local testing and staging installs.

### PHP Errors, Warnings, and Notices

Enabling `WP_DEBUG` will cause all PHP errors, notices, and warnings to be displayed. This is likely to modify the default behavior of PHP, which only displays fatal errors or shows a white screen of death when errors are reached.

Showing all PHP notices and warnings often results in error messages for things that don’t seem broken, but do not follow proper data validation conventions inside PHP. These warnings are easy to fix once the relevant code has been identified, and the resulting code is almost always more bug-resistant and easier to maintain.

### Custom PHP Debugging

If it is necessary to log non-error information for debugging purposes, PHP does offer the `error_log` function for this purpose. However, this method does not provide properly formatted output by default.

To address this, you may add another function on your site to handle formatting, either by creating a [custom plugin](#plugins/plugin-basics) or using a snippet with some [code snippets](https://wordpress.org/plugins/search/code+snippets/) plugin. The function will act as a wrapper for the `error_log` using `print_r` to format arrays and objects correctly before logging them.

Below is an example function that requires `WP_DEBUG` to be enabled.

```
function write_log( $data ) {
    if ( true === WP_DEBUG ) {
        if ( is_array( $data ) || is_object( $data ) ) {
            error_log( print_r( $data, true ) );
        } else {
            error_log( $data );
        }
    }
}

```

Usage Examples:

```
write_log( 'DEBUG TEXT' );
write_log( $variable );

```

**Note**: It is not recommended to add custom code like the above example in `functions.php` to avoid maintenance, security, performance, compatibility, and code organization issues.

### Deprecated Functions and Arguments

Enabling `WP_DEBUG` will also cause notices about deprecated functions and arguments within WordPress that are being used on your site. These are functions or function arguments that have not been removed from the core code yet, but are slated for deletion in the near future. Deprecation notices often indicate the new function that should be used instead.

## WP\_DEBUG\_LOG

`WP_DEBUG_LOG` is a companion to WP\_DEBUG that causes all errors to also be saved to a `debug.log` log file. This is useful if you want to review all notices later or need to view notices generated off-screen (e.g. during an AJAX request or `wp-cron` run).

Note that this allows you to write to a log file using PHP’s built in `error_log()` function, which can be useful for instance when debugging Ajax events.

When set to `true`, the log is saved to `debug.log` in the content directory (usually `wp-content/debug.log`) within your site’s file system. Alternatively, you can set it to a valid file path to have the file saved elsewhere.

```
define( 'WP_DEBUG_LOG', true );

```

-or-

```
define( 'WP_DEBUG_LOG', '/tmp/wp-errors.log' );

```

**Note**: for `WP_DEBUG_LOG` to do anything, `WP_DEBUG` must be enabled (true). Remember, you can turn off `WP_DEBUG_DISPLAY` independently.

## WP\_DEBUG\_DISPLAY

`WP_DEBUG_DISPLAY` is another companion to `WP_DEBUG` that controls whether debug messages are shown inside the HTML of pages or not. The default is ‘true’ which shows errors and warnings as they are generated. Setting this to false will hide all errors. This should be used with `WP_DEBUG_LOG` so that errors can be reviewed later.

```
define( 'WP_DEBUG_DISPLAY', false );

```

**Note**: for `WP_DEBUG_DISPLAY` to do anything, `WP_DEBUG` must be enabled (true). Remember, you can control `WP_DEBUG_LOG` independently.

## SCRIPT\_DEBUG

`SCRIPT_DEBUG` is a related constant that will force WordPress to use the “dev” versions of core CSS and JavaScript files rather than the minified versions that are normally loaded. This is useful when you are testing modifications to any built-in `.js` or `.css` files. The default is `false`.

```
define( 'SCRIPT_DEBUG', true );

```

## SAVEQUERIES

The `SAVEQUERIES` definition saves database queries to an array, which can then be displayed to help analyze those queries. When the constant is set to true, it causes each query to be saved along with the time it took to execute and the function that called it.

```
define( 'SAVEQUERIES', true );

```

The array is stored in the global `$wpdb->queries`.

**NOTE**: This will have a performance impact on your site, so make sure to turn this off when you aren’t debugging.

## Debugging Plugins

There are many [debugging plugins](https://wordpress.org/plugins/search/debug/) for WordPress that show more information about the internals, either for a specific component or in general.

For example, [Debug Bar](https://wordpress.org/plugins/debug-bar/) adds a debug menu to the admin bar that shows query, cache, and other helpful debugging information. When WP\_DEBUG is enabled, it also tracks PHP Warnings and Notices to make them easier to find.

---

# Debugging a WordPress Network <a name="advanced-administration/debug/debug-network" />

Source: https://developer.wordpress.org/advanced-administration/debug/debug-network/

## Debugging a WordPress Network

If you have reached this page, chances are you have received an error in your [WordPress network](https://wordpress.org/documentation/article/multisite-network-administration/). This failure occurs when WordPress cannot find one or more of the global tables for the network in the database.

On some shared web hosts, the host has disabled the functionality from running. It is always best to check with your web host **before** [creating a network](#advanced-administration/multisite/create-network) to make sure your web host account fulfills the technical requirements.

## If You just installed your network

Check your [wp-config.php](#advanced-administration/wordpress/wp-config) file for:

- correct database details
- `SUBDOMAIN_INSTALL` constant
- `MULTISITE` constant
- `$base` variable
- table prefix

You should not have anything after

```
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

```

Move any code that is after

```
require_once(ABSPATH . 'wp-settings.php');

```

to above the stop editing line.

### Mod\_rewrite not working

The main site works, but 404 errors show up when trying to access added child subdomain sites. An Ubuntu with Apache HTTPD installation needs these steps:

```
sudo a2enmod rewrite
sudo nano /etc/apache2/sites-avail/default

```

and change in two places the ‘AllowOverride None’ to ‘AllowOverride all’

```
/etc/init.d/apache2 restart

```

to restart apache2. Note that on more modern versions of Ubuntu the following syntax is preferred (for restarting services such as Apache – also note that in either case you may need to use prepend *sudo*):

```
service apache2 restart

```

### Check the database

Assuming all that is correct, check the database itself and see if [all the extra network tables](https://codex.wordpress.org/Database_Description#Multisite_Table_Overview) were created. The tables are:

- wp\_blogs
- wp\_blogmeta
- wp\_blog\_versions
- wp\_registration\_log
- wp\_signups
- wp\_site
- wp\_sitemeta

If you have these DB tables or added them manually but wp\_site and/or wp\_blogs is empty, you may have to run some SQL queries to insert rows for your main site. Be sure to adjust the table prefixes, domains, dates, username, and other parts of the queries below to match your installation.

```
INSERT INTO wp_site VALUES ( 1, 'domain.com', '/' );
# change domain.com to the full domain of your original site and / to the path

INSERT INTO wp_blogs VALUES( 1, 1, 'domain.com', '/', '2015-01-01', '2015-01-01', 1, 0, 0, 0, 0, 0 );
# change domains.com and / to domain and path of your site. Change dates if you want.

INSERT INTO wp_sitemeta VALUES( 1, 1, 'site_admins', 'a:1:{i:1;s:5:"admin";}' );
# Sets the admin user as a Super Admin. Change "admin" to your user_login. 
# Change "s:5" to "s:#" where # is the number of characters in user_login.

```

## If new site creation suddenly stopped working

Please take a look at your database as above. Double-check that the location of the database server hasn’t changed, or is so, that you’ve updated your `wp-config.php` file.

## Other lesser-known issues

Check that the database user has ALL permissions on the database.

Also, on very few upgrades from WordPressMU to 3.0 and up, a few users experienced a problem with creating new sites and receiving errors. This turned out to be a database collation issue.

Check that the `.htaccess` instructions are not throwing up errors in the Apache logs.

Like this one:

```
Options FollowSymLinks or SymLinksIfOwnerMatch is off which implies that RewriteRule directive is forbidden:

This will result in a Network install appearing to fail and may show WP errors like

One or more database tables are unavailable. The database may need to be repaired.

```

## Related Articles

- [WordPress Multisite Network: A Complete Guide](https://multilingualpress.org/wordpress-multisite-network/)

## External Links

- [WordPress → Support → Multisite](https://wordpress.org/support/forum/multisite/)

---

# Using Your Browser to Diagnose JavaScript Errors <a name="advanced-administration/debug/debug-javascript" />

Source: https://developer.wordpress.org/advanced-administration/debug/debug-javascript/

If you’re experiencing issues with your interactive functionality this may be due to JavaScript errors or conflicts. For example, your flyout menus may be broken, your metaboxes don’t drag, or your add media buttons aren’t working. In order to formulate your support request it helps the team to know what the JavaScript error is.

This guide will show you how to diagnose JavaScript issues in different browsers.

## Step 1: Try Another Browser

Different browsers often implement parts of JavaScript differently. To make sure that this is a JavaScript error, and not a browser error, first of all try opening your site in another browser.

- if the site is not having the same issue in the new browser you know that the error is browser specific
- if the site is having the same error it is not an error that is specific to one browser

Make note of any browsers you are experiencing the error in. You can use this information when you are making a support request.

## Step 2: Enable SCRIPT\_DEBUG

You need to turn on [script debugging](#advanced-administration/debug/debug-wordpress). Open `wp-config.php` and add the following line before “That’s all, stop editing! Happy blogging”.

```
define('SCRIPT_DEBUG', true);

```

Check to see if you are still having an issue.

- **Issue is fixed** – turn off script debugging and report the issue on the support forum, telling the volunteers that you turned on script debugging and it solved the problem.
- **Issue persists** – proceed to Step 3.

## Step 3: Diagnosis

### Open the Developer Tools

- **Chrome**: Type `Cmd-Option-J` (Mac) or `Ctrl-Shift-J` (Windows, Linux, Chrome OS), or navigate to `View -> Developer -> Developer Tools` in the menu.
- **Firefox**: Type `Cmd-Option-K` (Mac) or `Ctrl-Shift-K` (Windows, Linux, Chrome OS), or navigate to `Web Development -> Web Console` in the menu.
- **Edge**: Follow the instructions for Chrome.
- **Safari**: First, navigate to `Safari -> Preferences`. Click on the `Advanced` tab, then check `Show Develop Menu in menu bar`. Then, in the new `Develop` menu, navigate to `Show JavaScript Console`.
- **Opera**: Navigate to `Tools -> Advanced -> Error Console` in the menu.

### Identify The Error

Often, the text of the error will already be visible in the console. It may look similar to this:

![Screenshot of an example developer tools error page.](https://i0.wp.com/wordpress.org/documentation/files/2020/07/chrome-devtools.png?ssl=1)

The image above shows the error to be in `jquery.js on line 2`, however remember to copy the whole stack information! Just saying what line is less helpful that showing context.

If no errors are displayed, reload the page; many errors occur only when the page is first loaded.

## Step 4: Reporting

Now that you have diagnosed your error, you should make your support forum request. Go to the [troubleshooting forum](https://wordpress.org/documentation/forum/how-to-and-troubleshooting).

If your problem is with a specific theme or plugin, you can access their dedicated support forum by visiting https://wordpress.org/support/plugin/PLUGINNAME or https://wordpress.org/support/theme/THEMENAME.

Please include the below information:

- the browsers that you are experiencing the problem in
- whether `SCRIPT_DEBUG` fixed the error or not
- the JavaScript error
- the location of the error – both the file name and the line number
- the context of the error – including the whole error stack will help developers
- If possible, a link to the web page showing the error

---

# Test Driving WordPress <a name="advanced-administration/debug/test-driving" />

Source: https://developer.wordpress.org/advanced-administration/debug/test-driving/

There are times when you need to test changes to your WordPress powered site out of the public eye. Making changes to a live site could adversely affect your readers.

You have several choices.

### Creating a Sandbox

Do this for test driving your WordPress Theme and style sheet, allowing you to develop your [WordPress Theme](https://wordpress.org/documentation/article/using-themes/) on your computer. This limits you to only working on CSS and not using plugins and other power features of WordPress. This is best for just styling a page.

### Hiding Your WordPress Test Area

You can also close off access to your WordPress test site on your website server. This involves some familiarity with .htaccess and Apache, but it allows you to continue working on the Internet while not exposing your test site to the public.

### Install WordPress on Your Computer

If you are determined to put WordPress through its paces, you can install WordPress on your own computer with a few modifications. This allows you total control over the actions and capabilities of WordPress. You can still use plugins, template files, Themes, and redesign everything as if it were on the Internet without using bandwidth or suffering with slow Internet access times. We have two sets of explanation for this: Installing a New Installation on Your Computer and Installing an Existing WordPress Site. We also cover Moving WordPress Onto Your Website after you have finished developing your site on your computer.

## Creating a Sandbox

A **Sandbox** is a term related to the sandbox you might have played in and built sand castles in as a child. It is a playground for working on concepts and exploring your imagination. A WordPress Sandbox is basically a copy of a generated page on a WordPress site that is saved to your hard drive for you to play with as you develop your final theme and look for your site.

WordPress uses different [template files](https://codex.wordpress.org/Templates) to generate different views on your site. In general, there is the **front page view**, the **single post view**, and the **multi-post view**, used for categories, archives, and search. For more information on the structure of WordPress Themes, see [Site Architecture 1.5](#advanced-administration/wordpress/site-architecture). As different page views use different CSS styles, at the least you need to put three page views in your sandbox following these instructions.

1. Choose the WordPress Theme you want to work from in your Appearance screen of your Administration Screen.
2. From your initial or test WordPress site, view one of the following page views: 
    - Front Page
    - Single Post
    - Mult-Post Page
3. From your browser: 
    - Choose File &gt; Save As.
    - Name the saved page with one of the above “titles.”
    - Save each page’s file to your sandbox folder.
4. From your Theme’s folder, copy the style.css style sheet file to your sandbox folder.
5. Open each of the three files you have saved in a text editor and change the following:

```
<style type="text/css" media="screen">
@import url('/wp-content/themes/yourtheme/style.css');
</style>

```

```
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />

```

Lastly, find all the image files and graphics associated with the style sheet, like background images, icons, bullets, or others, and copy them to your sandbox folder. Links to these items from within your style sheet should have no folders in their links, or link to a subfolder within your sandbox folder, such as:

```
header {
  margin:5px;
  padding:10px;
  background:url(images/background.jpg)....
}

```

To test this, double click on one of the pages in that folder to view it in your browser. If the the styles and graphics are visible, it worked. If not, check the link to your style sheet.

Now, you have a sandbox to play in.

To use your sandbox, have two programs open. One is your text editor with the style.css file and the other is your browser with the page you are working on in view. Make a change in your style sheet, save it, then do a [total refresh](https://wordpress.org/support/topic/i-make-changes-and-nothing-happens/) or your browser screen and look at what changes. Then repeat the process. When you are done with one page, go to the next page and check those changes and add more if necessary.

### Sandbox Tips

Here are a few tips for playing in your sandbox.

### Backup Frequently

As you work, copy the files in the folder before making major renovations to a backup folder. Or you can use a file compression utility like a zip program to save the entire folder. If the changes you make do not work, you have recent backups to work from.

### Trace DIVS and CLASSES

Before you begin, go through the source code file of each of the three page views in your text editor and add a comment as to where each division begins and ends. These often cross lines between template files and can be difficult to trace. Make your life easier by documenting where these begin and end.

### Make Notes

Before making a huge change, write down what you are changing. This way you have notes to refer to when things do not work later and you are trying to trace the history of the changes.

### Make Notes Inside

When making significant changes to the style sheet or to the web page source code, add notes or comments to the code. This will also help you to keep track of the changes you’ve made.

### Make Small Steps

Making a lot of changes at once makes it harder to find the small change that made things go out of whack. A good approach would be to take small steps and check, then make additional, small modifications and check again.

### Avoid Changing the Template Files

Begin by staying with the site architecture and style references already in place. If you will be releasing your Theme to the public, modifications to the template files must be seriously reconsidered and done carefully. If you are rebuilding your site for your private use, then you can make those changes to your HTML saved pages source code, then move those changes into the template files later.

### Moving Your Sandbox To Your Theme

When you have made all your changes and are satisfied with the results, it is time to move your sandbox back into your WordPress Theme.

1. Upload the style.css style sheet file to your WordPress Theme folder on your site, replacing the old file.
2. Upload all graphics and images to the Theme folder or subfolder.
3. View your site in your browser. The changes should be immediate.
4. If you made changes to the source code of any of the three pages, track those down to their specific template file and make the changes in those template files on your site.

### Install another Blog

1. Install WordPress again, but in the wp-config.php file, use a different table-prefix.
2. In Options &gt; Writing &gt; Update Services, clear the box.
3. Tell no one where your blog is located.

If you go to another site from your blog, then your site could be discovered because of the referer in the browser. To prevent this, go to your real blog, then to another site.

This method is useful toward the end of testing as you can ask for people to test using other browsers / screen resolutions.

## Hiding Your WordPress Test Area

To hide your WordPress test folder from others, you can use the `.htaccess` file on an Apache web server. The `.htaccess` file is a file that stores server directives, instructions which tell the server what to do in specific situations. You could also use the Apache config file (httpd.conf) or other methods, but the `.htaccess` file can apply only to the folder in which the .htaccess file resides, and all the folders under that one, allowing you to restrict access to a specific folder.

Remember, this will only work on servers that support `.htaccess`. If you are unsure that your server supports `.htaccess`, contact your hosting provider. You may or may not be able to do this depending upon the access permissions you have with your host server. You may need their assistance. If you are running your own server, or if your hosting provider is clue-free, consult the [AllowOverride documentation](https://httpd.apache.org/docs/2.0/mod/core.html#allowoverride).

Using the `.htaccess` file, you need to provide instructions to tell the server to restrict or deny access to your WordPress test site. In the folder or directory in which WordPress is installed, do the following:

1. Using a text editor create a blank text file called `.htaccess`.
2. You need the following information:
3. - The full path of a directory on your site server that is not accessible to the public (like https://example.com/public\_html/ is accessible but https://example.com/private/ is not. Use the latter.
4. - The name of the secured area such as “Enter Password” or “Secure Area” (this is not important, just simple).
5. In the file type the following, replacing /full/path/of/directory/ and Security Area with the above information: `AuthUserFile /full/path/of/directory/.htpasswd AuthName "Security Area" AuthType Basic require valid-user`
6. Save this .htaccess file and upload it to the directory on your server you want hidden and secured. This would be the installation directory for WordPress such as `/wordpress/` or `blog`.
7. Using Telnet, cPanel, or another way to access your server’s command panel, go to the directory specified as `AuthUserFile`.
8. Type the following command, where `user_name` is the user name for the `access:htpasswd -c .htpasswd user_name`
9. When prompted, enter the password, and confirm it.
10. Write down your password and user name and keep it in a safe place.

When you are ready to open your site to the public and remove the protection, delete the password and `.htaccess` files from their locations.

It is highly recommended that you remove the default ping URL to [Ping-o-Matic!](https://pingomatic.com/), otherwise your test posts will ping and your test blog will be made public though not accessible.

### Htaccess Resources

- [.htaccess files howto](https://httpd.apache.org/docs/2.0/howto/htaccess.html)
- [Authentication, Authorization and Access Control](https://httpd.apache.org/docs/2.0/howto/auth.html)

## Installing WordPress on a Mac

Use these instruction for setting up a local server environment for testing and development on a Mac.

- [Installing\_WordPress\_Locally\_on\_Your\_Mac\_With\_MAMP](https://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP)

## Installing WordPress on Your Windows Desktop

In order for WordPress to work, it must have access to an Apache server, MySQL/MariaDB, and phpMyAdmin. Installing these separately can be painful. Luckily for us, [XAMPP](https://www.apachefriends.org/download.html) installs all of these with one program, allowing you to run WordPress on your computer. There are two versions of the program, Basic and Lite. The Lite version is usually adequate.

1. Download and install [XAMPP](https://www.apachefriends.org/download.html).
2. This installs by default into `C:/xampplite` or `C:\xampp`.
3. Start XAMPP from `c:\xampplite` or `c:\xampp`.
4. You may need to restart your computer to allow apache services to start.
5. In your browser, go to http://localhost/xampp.
6. In the left column under Tools, click **phpMyAdmin**.
7. Login is admin.
8. In **Create new database** enter **wordpress**.
9. In the next box, select **utf8 unicode ci**.
10. Click **Create** button.
11. Unzip your WordPress download into the `htdocs` directory `– c:\xampp\htdocs\`.
12. From the folder, open `wp-config-sample.php` in a text editor.
13. The connection details you need are as follows:

```
// ** MySQL settings ** //
define('DB_NAME', 'wordpress'); // The name of the database
define('DB_USER', 'root'); // Your MySQL username
define('DB_PASSWORD', ''); // ...and password
define('DB_HOST', 'localhost'); // 99% chance you won't need to change this

```

1. Save as `wp-config.php`.
2. Install by going to http://localhost/wordpress/wp-admin/install.php

**IMPORTANT:** It is possible to use this to actually host your blog if you have a good enough connection. If you want to do this, you MUST increase the security level. This description is NOT SECURE if you allow web access to your blog.

## Installing an Existing WordPress Site

With the help of XAMPP, you can install WordPress directly on your computer and play with it to your heart’s content. This way, it is totally isolated from public exposure and all your mistakes are hidden. When you are ready, you can then move it onto your website, ready for all to see.

### Requirements

1. Access to your server database.
2. Ability to download your entire WordPress installation to your computer.
3. [Basic XAMPP for Windows](https://www.apachefriends.org/download.html)
4. Enough room on your hard drive to accommodate your database, WordPress installation, and XAMPP.

### Backup WordPress

![phpMyAdmin MySQL Databases](https://i0.wp.com/user-images.githubusercontent.com/6118303/189545243-6ac55696-9f98-41fe-ab06-061c505f5ab2.png?ssl=1)

Begin by backing up your WordPress site completely, the files and the database. This will ensure that you have a good copy to fall back on, just in case.

A second backup is then required of your database, but it requires you do a little housekeeping.

As the WordPress database normally stands, there are statistics tables which contain a huge amount of data which add to the overall size of the database, and slow down the process of backing up and downloading this backup copy of your database. You do not have to clear these, but it is generally considered a good idea.

1. Login to PHPMyAdmin on your website server.
2. From the main login screen, select **Databases**.
3. Choose the name of your WordPress database.
4. From the tags at the top of the screen, choose **Export**.
5. In the frame at the top of the [Export section](https://wordpress.org/documentation/files/2018/11/phpmyadmin-export-tab.jpg) you will see a list of tables in your database.
6. You will need to choose only those tables that correspond to your WordPress install. They will be the ones with the `table_prefix` found in your `wp-config.php` file. If you only have WordPress installed, then choose **Select All** from the left column.
7. Make sure the SQL button is selected.
8. On the right side of the panel, make sure the following boxes are checked.

![phpMyAdmin export screen](https://i0.wp.com/user-images.githubusercontent.com/6118303/189546285-35103e54-cba6-42ee-86ea-8ea480bf1630.png?ssl=1)

- Structure
- Add AUTO\_INCREMENT value
- Enclose table and field names with backquotes
- Data Tick the Save as file option, and leave the template name alone.
- For Compression, select **None**. Click **Go**.
- You should be prompted for a file to download. Save the file to your computer. Depending on the database size, this may take a few moments.

### Download WordPress

Now, download your entire WordPress site to your computer. This is usually done with an [FTP client program](#advanced-administration/upgrade/ftp). Make sure you include all core WordPress files within your root or WordPress directory, including the `index.php`.

You should now have in your computer two items:

1. One or more database backups.
2. All your WordPress files, folders, and images directories.

Copy the backup files again to somewhere safe on your machine so you work on a copy of the backup for the next stage.

### Install Basic XAMPP

1. Install XAMPP. By default, it will install to `C:\xampp`.
2. Go to `C:\xampp\apache\conf` and open the file called `httpd.conf` in a [text editor](https://wordpress.org/documentation/article/wordpress-glossary/#Text%20editor).
3. About line 166 you will find: `#LoadModule rewrite_module modules/mod_rewrite.so`.
4. Remove the # and save the file (this switches `mod_rewrite` on).
5. Create a folder inside `C:\xampp\htdocs`. This will be for WordPress.
6. Copy all your downloaded WordPress files (not the sql backup) into that directory.
7. With a text editor, open the file `wp-config.php` on your WordPress install.
8. Change the details for your new MySQL connection:

```
// ** MySQL settings ** //
define('DB_NAME', 'wordpress'); // The name of the new database you made
define('DB_USER', 'root'); // keep this as is
define('DB_PASSWORD', ''); // keep this empty
define('DB_HOST', 'localhost'); // 99% chance you won't need to change this

```

1. Your main `index.php` should be in the `/htdocs` folder or in a subdirectory such as `/htdocs/wordpress/`. Write that down.
2. Start XAMPP by clicking the orange `xampp_start.exe` or using the console program from `Program Files \ApacheFriends\XAMPP\XAMPP Control Panel`.
3. Once it is working, click on link in the left side bar for phpMyAdmin.
4. Create a database. The name should match the one used in your `wp-config.php` file.

### Importing Your SQL Backup File

Before you begin to import your SQL backup file, you need to change some information inside your `.SQL` file.

1. Using your text editor, open the `.sql` backup database file you downloaded.
2. Find and replace all the instances of your old URL with your new URL. For instance if your blog address is at https://example.com/wordpress/, and your files on your computer are at `/htdocs/wordpress/`, replace it with http://127.0.0.1/wordpress/.
3. Click **Save – Do not use Save as**.

![phpMyAdmin SQL tab](https://i0.wp.com/user-images.githubusercontent.com/6118303/189546617-26a843c4-e793-4c44-b2a6-13a32b366a8e.png?ssl=1)

Now it is time to import your sql file. From within the phpMyAdmin on your computer, click on **your database name**, then choose the **SQL** tab. From this screen, click **Browse** and find your backup files on your computer. Click **Go**. This can take a few minutes to import.

![Success message](https://i0.wp.com/user-images.githubusercontent.com/6118303/189546659-7e3cefe1-1744-4458-ac49-98fbd04626c5.png?ssl=1)

Once the procedure is complete, your database will be restored and will work just as it did before. If something goes wrong with this last part of the process, it could be that either your backup was corrupted in some way, or something went wrong with the database itself. **Keep your backup files safe!**

If everything so far has gone well, it is now time to visit your blog! In your browser, type in http://127.0.0.1/wordpress/index.php or the actual name of the folder you created for your WordPress files.

If you get a 404, check you have the right place. You do not need to put htdocs or xampp or anything else after the http://127.0.0.1/ except use your directory name.

WordPress should now function just as it did on the web. You do not need to use the built-in editor in WordPress to alter your files. Just open the files directly in a text editor and edit them as you would any other file. Refreshing your browser’s web page will then show the effects.

### Moving Your Test WordPress Site to Your Website

Coming soon – how to move your test site from your computer back live onto your host server site.

### Resources

- [qSandbox.com – Create a free WordPress test site to try (new) plugins and themes](https://qsandbox.com/app/)

---

# Version Control <a name="advanced-administration/debug/version-control" />

Source: https://developer.wordpress.org/advanced-administration/debug/version-control/

Version control is a way of tracking the changes made to files over time by different people, such as the code for a website or another application. It allows people to track the revision history of code and to revert or apply changes easily via the command line. It is also a good way to debug your website if something goes wrong, as you can quickly restore to a previous state of the site’s code without restoring from a full backup.

A lot of WordPress hosts offer version control but there are third-party services and self hosted options as well.

---

# Resources for Building on WordPress <a name="advanced-administration/resources" />

Source: https://developer.wordpress.org/advanced-administration/resources/

As you design your WordPress theme or build a plugin, you will be using a combination of HTML, CSS, PHP, and JavaScript (JS).

There are *plenty* (probably too many) resources online for you to get started with these web languages. It can be overwhelming!

With this resource page, we hope to focus on resources and guides that will help you the most to provide clear guidance and instruction on using HTML, CSS, PHP, and JS. This is nowhere near an exhaustive list, only meant to help you get started.

We recommend that you save or bookmark this page as a reference for learning while you’re working on your WordPress theme or plugin. See also:  
– [Theme Developer Handbook](#themes)  
– [Plugin Developer Handbook](#plugins)  
– [Block Editor Handbook](#block-editor).

## General Web Development Education

WordPress.org has released [Learn WordPress](https://learn.wordpress.org/) which will guide you through several topics around developing for WordPress.

[freeCodeCamp](https://freecodecamp.org/) is a free and open source education platform and is not WordPress-specific. They offer instruction, demo projects, and their own certification that have helped millions learn HTML, CSS and JavaScript.

They will teach you the basics of HTML and CSS in their [Responsive Web Design](https://www.freecodecamp.org/learn/2022/responsive-web-design/) course.

If you’d like to dive deeper with JavaScript, you can do so in their [Front End Development Libraries](https://www.freecodecamp.org/learn/front-end-development-libraries/#bootstrap) course, which will get you started with JavaScript and even React, which will be helpful for you to developer themes, plugins, and especially blocks.

Unfortunately, there’s currently no PHP course.

Also, since you’ll be writing code, it would be good to familiarize yourself with the [WordPress Coding Standards](#coding-standards) and [Inline Documentation Standards](#coding-standardsinline-documentation-standards/).

Beyond that, these are some resources you might find helpful for each of the languages.

## HTML

- [W3Schools HTML](https://www.w3schools.com/tags/default.asp)
- [Learn How to Make Websites](https://developer.mozilla.org/en-US/learn)

## CSS

If this is your first time using CSS with WordPress, [this document](#advanced-administration/wordpress/css) provides a fantastic overview

Other than that, these are some solid resources for you to review:

- [W3 Schools](https://www.w3schools.com/cssref/default.asp)
- [MDN](https://developer.mozilla.org/en-US/docs/CSS)
- [CSS Tricks](https://css-tricks.com/)
- [CSS Zen Garden – the art of the possible in CSS](https://www.csszengarden.com/)
- [CSS on A List Apart](https://alistapart.com/blog/topic/css/)
- [Flexbox Guide](https://duckduckgo.com/?q=css+tricks+flexbox&ia=web)
- [CSS Grid Guide](https://duckduckgo.com/?q=css+tricks+grid&ia=web)
- [CSS Grid by Example](https://gridbyexample.com/)

## JavaScript

- [W3Schools JS](https://www.w3schools.com/js/default.asp)
- [MDN](https://developer.mozilla.org/en-US/docs/Web/javascript)
- [JSDoc](https://jsdoc.app/about-getting-started.html) for documenting your code
- [ReactJS](https://reactjs.org/)

## PHP

- [PHP Language Reference](https://www.php.net/manual/en/langref.php)
- [PHP Function Reference](https://www.php.net/manual/en/funcref.php)
- [W3Schools PHP](https://www.w3schools.com/php/default.asp)
- [PHP The Right Way](https://phptherightway.com/) is a high level review of modern PHP
- [PHPDoc](https://www.phpdoc.org/docs/latest/index.html) for documenting your code
- [SitePoint’s PHP resources](https://www.sitepoint.com/php/)

### Books

- The good folks at WebDev Studios have put out several books on WordPress theming, plugin development, and also how to use WordPress. You can find a list of their books [here](https://webdevstudios.com/books/)
- [You Don’t Know JS](https://github.com/getify/You-Dont-Know-JS) is a book series on modern JS development. This the Github repo for the books, or you can purchase physical copies.
- [Eloquent JavaScript](https://eloquentjavascript.net/)
- [JavaScript: The Definitive Guide](https://www.oreilly.com/library/view/javascript-the-definitive/9781491952016/)
- [PHP Cookbook](https://www.oreilly.com/library/view/php-cookbook/9781098121310/)
- [Programming PHP](https://www.oreilly.com/library/view/programming-php-4th/9781492054122/)

---

# FAQ Troubleshooting <a name="advanced-administration/resources/faq" />

Source: https://developer.wordpress.org/advanced-administration/resources/faq/

## Why can’t I see my posts? All I see is Sorry, no posts match your criteria?

Clearing your browser cache and cookies may resolve this problem. Also, check your `search.php` and `index.php` template files for errors.

See also:

- [I Make Changes and Nothing Happens](https://wordpress.org/support/topic/i-make-changes-and-nothing-happens/)

## How do I find more help?

There are various resources that will help you find more help with WordPress, in addition to these [FAQ](https://codex.wordpress.org/FAQ).

- [Troubleshooting](https://codex.wordpress.org/Troubleshooting)
- [Finding WordPress Help](https://wordpress.org/documentation/article/where-to-find-wordpress-help/)
- [Using the Support Forums](https://wordpress.org/support/welcome/)
- [Resources and Technical Articles about WordPress](https://codex.wordpress.org/Technical%20Articles)
- [Installation Problems](https://codex.wordpress.org/Troubleshooting#Installation_Problems)

## Where can I find help with the CSS problems I’m having?

The following are articles that will help you troubleshoot and solve many of your [CSS](https://wordpress.org/documentation/article/css/) problems:

- [Blog Design and Layout](https://codex.wordpress.org/Blog_Design_and_Layout)
- [Finding Your CSS Styles](https://codex.wordpress.org/Finding%20Your%20CSS%20Styles)
- [CSS Fixing Browser Bugs](https://codex.wordpress.org/CSS%20Fixing%20Browser%20Bugs)
- [CSS Troubleshooting](https://codex.wordpress.org/CSS%20Troubleshooting)
- [WordPress CSS Information and Resources](https://wordpress.org/documentation/article/css/)

## Why do I get an error message about Sending Referrers?

If you got this message when trying to save a post, consider checking [Administration](https://wordpress.org/documentation/article/administration-screens/) &gt; [Settings](https://wordpress.org/documentation/article/administration-screens/) &gt; [General](https://wordpress.org/documentation/article/settings-general-screen/) and make sure both your **WordPress address (URI)** and the **Blog address (URI)** do not use ‘www’. For example, instead of https://www.example.com use https://example.com in those fields.

See also:

- [Enable Sending Referrers](https://codex.wordpress.org/Enable%20Sending%20Referrers)

## How do I empty a database table?

See also:

- [Emptying a Database Table](#advanced-administration/server/empty-database)

## How do I fix the following error SQL/DB Error errcode 13 Can’t create/write to file?

**Problem:** The MySQL variable `tmpdir` is set to a directory that cannot be written to when using PHP to access MySQL.

To verify this, enter MySQL at the command line and type `show variables`;

You’ll get a long list and one of them will read: `tmpdir = /somedir/` (whatever your setting is.)

**Solution:** Alter the `tmpdir` variable to point to a writable directory.

**Steps:**

1. Find the `my.cnf` file. On \*nix systems this is usually in `/etc/`. On Windows system, Find the `my.ini`.
2. Once found, open this in a simple text editor and find the `[mysqld]` section.
3. Under this section, find the `tmpdir` line. If this line is commented (has a `#` at the start), delete the `#` and edit the line so that it reads: `tmpdir = /writable/dir` where `/writable/dir` is a directory to which you can write. Some use `/tmp`, or you might also try `/var/tmp` or `/usr/tmp`. On Windows, use `C:/Windows/tmp`.
4. Save the file.
5. Shutdown MySQL by typing `mysqlshutdown -u -p shutdown`.
6. Start MySQL by going to the MySQL directory and typing `./bin/safe_mysqld &`. Usually the MySQL directory is in `/usr/local` or sometimes in `/usr/` on Linux systems.

If none of this make sense and you have someone to administrate your system for you, show the above to them and they should be able to figure it out.

**Description:** You get a warning message on your browser that says:

```
Warning: Cannot modify header information – headers already sent by (output started at

```

**Reason and Solution:**

It is usually because there are spaces, new lines, or other stuff before an opening `\<!--?php &lt;/code&gt;&lt;/strong&gt; tag or after a closing &lt;strong&gt;&lt;code&gt;?-->` tag, typically in `wp-config.php`. This could be true about some other file too, so please check the error message, as it will list the specific file name where the error occurred (see “Interpreting the Error Message” below). Replacing the faulty file with one from your most recent backup or one from a fresh WordPress download is your best bet, but if neither of those are an option, please follow the steps below.

Just because you cannot see anything does not mean that PHP sees the same.

1. Download the file mentioned in the error message via [FTP](#advanced-administration/upgrade/ftp) or the file manager provided in your host’s control panel.
2. Open that file in a [plain text editor](https://wordpress.org/documentation/article/wordpress-glossary/#text-editor) (**NOT** MS Word or similar. Notepad or BBEdit are fine).
3. Check that the *very* first characters are with no blank lines or spaces after it.
4. Before saving, or use the Save as dialog, ensure the file encoding is not `UTF-8 BOM` but plain `UTF-8` or any without the `BOM` suffix.

To be sure about the end of the file, do this:

1. Place the cursor between the `?` and `>`
2. Now press the DELETE key on your computer **Note to MAC users**: The “DELETE” key on a PC deletes characters to the *right* of the cursor. That is the key noted here.
3. Keep that key pressed
4. For at least 15 seconds
5. Now type `>` and
6. **save** without pressing any other key at all.
7. If you press another key, you will bring the problem back.
8. DO **NOT** PUT CODE IN UNNECESSARY CODE BLOCKS, PUT THEM IN A SINGLE PHP BLOCK.

Wrong:

```
<?php
some code;
?>

<?php
some other codes;
?>

```

Correct:

```
<?php
code;

some other code;
?>

```

Upload the file back to your server after editing and saving the file.

**Note**: Also check the encoding of the file. If the file is encoded as UTF-8 with BOM, the BOM is seen as a character which starts the output.

**Interpreting the Error Message:**

If the error message states: `Warning: Cannot modify header information - headers already sent by (output started at /path/blog/wp-config.php:34) in /path/blog/wp-login.php on line 42`, then the problem is at line `#34` of `wp-config.php`, not line `#42` of `wp-login.php`. In this scenario, line `#42` of `wp-login.php` is the victim. It is being affected by the excess whitespace at line `#34` of `wp-config.php`.

If the error message states: `Warning: Cannot modify header information - headers already sent by (output started at /path/wp-admin/admin-header.php:8) in /path/wp-admin/post.php on line 569`, then the problem is at line `#8` of `admin-header.php`, not line `#569` of `post.php`. In this scenario, line `#569` of `post.php` is the victim. It is being affected by the excess whitespace at line `#8` of `admin-header.php`.

**Other issues that might cause that error:**

In case you’ve used the function: [wp\_redirect()](#reference/functions/wp_redirect) or tried to use a header redirect after the header (or any content at all was sent) that error message will pop. Instead use javascript redirection if needed.

## Why doesn’t my “Publish” or “Save Draft” button work?

To resolve this and similar issues, disable your plugins one at a time until you find the source of the issue. Generally, this will be due to two or more plugins trying to use the same resources (for example, JQuery or other Java-based tools).

In addition, it could be that there is a problem with your browser. A common resolution is to empty the browser’s cache. Please consult the documentation for your preferred browser to learn how to do this.

## Why can’t I see the visual rich editor or Quicktag buttons when using Apple’s Safari browser?

Update your Safari browser. Early versions of Safari are not supported.

## E-mailed passwords are not being received

**Description:** When users try to register with your blog or change their passwords by entering their username and/or email, WordPress indicates that their password has been emailed to them, but it is never received.

**Reason and Solutions:** WordPress uses the standard PHP [mail()](https://www.php.net/manual/en/function.mail.php) function, which uses sendmail. No account information is needed. This is not generally a problem if you are using a hosting service, but if you are using your own box and do not have an SMTP server, the mail will never send. If you are using a \*NIX box, you should have either postfix or sendmail on your machine; you will just need to set them up (search the Internet for how-to’s). If you do not want to go through setting up a complete mail server on your \*NIX box you may find [ssmtp](https://packages.debian.org/stable/mail/ssmtp) useful — it provides \_”A secure, effective and simple way of getting mail off a system to your mail hub”\_. On a Windows machine, try a sendmail emulator like [Fake sendmail for Windows with TLS v1.2 support](https://github.com/sendmail-tls1-2/main).

More help can be found on this thread of the WordPress Support Forums [How does WP send the user registration email?](https://wordpress.org/support/topic/how-does-wp-send-the-user-registration-email/). For a plugin based alternative, you could try [Configure SMTP](https://coffee2code.com/wp-plugins/configure-smtp/): *“Configure SMTP mailing in WordPress, including support for sending e-mail via SSL/TLS (such as GMail).”*

**Windows Host Server Specific:** Check your “Relay” settings on the SMTP Virtual Server. Grant access to `127.0.0.1` . Then in your `php.ini` file, set the `SMTP` setting to the same IP address. Also set `smtp_port` to `25`.

**Ensure Proper Return Address is Used:** By default, the WordPress mailer fills in the From: field with *wordpress@example.com* and the From: name as *WordPress*.

This is fine if this is a valid e-mail address. For example, if your real e-mail is *wordpress@example.com*, your host should pass the email on for delivery. It will probably send your mail as long as *example.com* is setup to send and receive mail, even if *wordpress* is not a valid mail box. But if you set you real email as the From: address and it’s something like *wordpress@example.com*, the mail may not send because *gmail.com* is not a domain handled by the mail server.

**Treated as Spam:** Your email message may have been routed to a spam folder or even worse, simply discarded as malicious. There are a couple measures you can use to convince recipient’s mail servers that your message is legitimate and should be delivered as addressed.

**SPF:** (Sender Policy Framework) This is the most common anti-spam measure used. If you are on a hosted system, there is a good chance your host has set this up for the mail server you are using. Have WordPress email you and check the message headers for evidence that the message passed the SPF check. You can get a message sent by following the Forgot Password link on the login page. To keep your old password, do not follow the link in the message.

If your system email failed the SPF check, you can set up the credentials if you have access to your DNS records and your mail server’s domain belongs to you. Check the return path of the email your system sent. If the mail server listed there has your domain name, you can set up SPF credentials. There are several how-tos on the Internet.

**DKIM:** (Domain Key Identified Mail) This system is also used. You can use both SPF and DKIM in the same message. Again, just as with SPF, you can check if your receiving mailserver verified your host’s domain key by examining the mail header. There is a fair chance no signature key was provided, indicating your host chose to not use this protocol. Also as with SPF, if you can edit your DNS records and the mail server belongs to your domain, you can set up DKIM credentials yourself. Some how-tos exist if you search the Internet.

To get WordPress to send the proper DKIM keys, hook the `'phpmailer_init'` action. You are passed the `$phpmailer` object. Set the necessary properties and return the object. See the class source code for more information. It’s on *wp-includes/class-phpmailer.php*.

## I used the Quicktag `nextpage` in a post so why doesn’t it work?

In some [Themes](https://wordpress.org/documentation/article/worik-with-themes/), such as the WordPress Classic Theme, you may see the `<!–nextpage–>` work properly on your main page, but other [Themes](https://wordpress.org/documentation/article/worik-with-themes/), such as the WordPress default Theme, may only show the *page break* when viewing the posts individually. It may be necessary to change your Theme’s [template](https://codex.wordpress.org/Templates) *page.php* or *index.php* file to make this feature work according to your wishes. You’ll need to add the following:

```
<?php wp_link_pages(); ?>

```

## MySQL Error 28

It could be because:

- you are out of space on `/tmp` (wherever tmpdir is), or,
- you have too many files in `/tmp` (even if there is lots of free space)

This is a MySQL error and has nothing to do with WordPress directly; you should contact your host about it. Some users have reported that running a “repair table” command in [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin) fixed the problem.

## Why are the Quote Marks escaped or not escaped?

If you write plugins or make advanced custom templates, you may eventually find yourself dealing with data in the database. WordPress *usually* manages this data for you in such a way that it is immediately usable. There are circumstances though (especially if you are dealing directly with the database without using WordPress) where you will experience weirdness.

For example, quote marks cannot be stored directly in the MySQL database. MySQL uses quote marks in its SQL language. When a quote mark is used, for example, in a post, when the post is saved to the database, every quote mark gets escaped. That means a backslash character is prepended, which signifies that the next character should be taken as part of the input, and not as part of the SQL command.

For example, if you are adding the following in your post:

```
...an article about "Happiness" is at
<a href="https://example.com/happy" title="Happiness">Happiness</a>
if you would like to read it...

```

Is actually imported into the database looking like this:

```
...an article about \"Happiness\" is at
<a href=\"https://example.com/happy\" title=\"Happiness\">Happiness</a>
if you would like to read it...

```

When pulling data out of the database, the backslashes may not always be automatically removed. If this becomes an issue, you can use the [stripslashes()](https://www.php.net/manual/en/function.stripslashes.php) PHP function on the text.

**Description:** When anyone tries to comment on a post, the window goes blank and the comment doesn’t appear to have been recognised by WordPress.

**Reason and Solution:** The Theme that you are using is missing a critical part of the comment form so WordPress doesn’t know which post the comment refers to. You need to check the comment.php in your Theme and ensure that the following code appears within the form.

```
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

```

Relevant discussion threads:

- [Can’t comment](https://wordpress.org/support/topic/cant-comment-3/)

Sometimes it may be necessary to deactivate all plugins, but you can’t access the administrative menus to do so. One of two methods are available to deactivate all plugins.

Use [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin) to deactivate all plugins.

1. In the table wp\_options, under the `option_name` column (field) find the `active_plugins` row
2. Change the `option_value` field to: `a:0:{}`

Or reset your plugins folder via [FTP](#advanced-administration/upgrade/ftp) or the file manager provided in your host’s control panel. This method preserves plugin options but requires plugins be manually reactivated.

1. Via FTP or your host’s file manager, navigate to the `wp-contents` folder (directory).
2. Via FTP or your host’s file manager, rename the folder `plugins` to `plugins.hold`.
3. Login to your WordPress administration plugins page (`/wp-admin/plugins.php`) – this will disable any plugin that is “missing”.
4. Via FTP or your host’s file manager, rename `plugins.hold` back to `plugins`.

## How to clear the “Briefly unavailable for scheduled maintenance” message after doing automatic upgrade?

As part of the automatic upgrade WordPress places a file named `.maintenance` in the blog **base** folder (folder that contains the `wp-admin` folder). If that file exists, then visitors will see the message **Briefly unavailable for scheduled maintenance. Check back in a minute.**

To stop that message from being displayed to visitors, just delete the `.maintenance` file. The automatic upgrade should be executed again, just in case it failed.

Note the core automatic upgrade feature was added with [Version 2.7](https://wordpress.org/documentation/wordpress-version/version-2-7/).

## How to fix 404 error when using Pretty Permalinks?

If an error 404 occurs when using the [Pretty Permalink](https://wordpress.org/documentation/article/introduction-to-blogging/#pretty-permalinks) choices such as **Day and Name** in [Administration](https://wordpress.org/documentation/article/administration-screens/) &gt; [Settings](https://wordpress.org/documentation/article/administration-screens/#permalinks) &gt; [Settings\_Permalinks\_Screen](https://wordpress.org/documentation/article/settings-permalinks-screen/) it could be a result of the **mod\_rewrite** module not being activated/installed. The solution is to activate **mod\_rewrite** for the Apache web-server. Check the `apache/conf/httpd.conf` file for the line `# LoadModule rewrite_module modules/mod_rewrite.so` and delete the `#` in front of the line. Then stop Apache and start it again. **Note:** you may have to ask your host to activate **mod\_rewrite**.

See also:

- [Using Permalinks](https://wordpress.org/documentation/article/customize-permalinks/)

Relevant discussion thread:

- [LocalHost: Permalink question](https://wordpress.org/support/topic/localhost-permalink-question/)

Not sure why this problem happens, but here’s a couple of things to try one of these two solutions.

This usually fixes the problem:

1. Create new admin user (e.g. newadmin) with Administrator Role
2. Login as ‘newadmin’
3. Degrade the old ‘admin’ user to Role of Subscriber and Save
4. Promote the old ‘admin’ back to Administrator Role and Save
5. Login as the old ‘admin’

If that doesn’t work, try:

1. Create a new admin user (e.g. newadmin) with Administrator Role
2. Login as ‘newadmin’
3. Delete the old ‘admin’ user and assign any posts to ‘newadmin’
4. Create ‘admin’ user with Administrator Role
5. Login as ‘admin’
6. Delete ‘newadmin’ user and assign posts to ‘admin’

## Why is the wrong author name displayed for a post on a blog?

This problem is usually solved by the same solution as is presented in the question right before this one:  
[Why isn’t the admin user listed as an author when editing posts?](https://wordpress.org/documentation/article/faq-troubleshooting/#why-isnt-the-admin-user-listed-as-an-author-when-editing-posts).

## An update was just released, so why does my blog not recognize the update is available?

When an update is released, notification of that release is displayed at the top administration screens saying **WordPress x.x.x is available! Please update now.** Not every blog will see that message at the same time. Your blog is programmed to check for updates every 12 hours, but the timing of that check is purely random. So if your blog just checked for updates minutes before an update was released, you won’t see the update message until your blog checks for updates 12 hours later.

If you want your blog to check right now for updates, you can delete the `update_core` option name record in your `wp_options` table. Note that plugins and themes each have their own check and update cycle, controlled by the records `update_plugins` and `update_themes`, in `wp_options`.

Relevant discussion thread:

- [“2.7.1 Please update now” NOT showing up](https://wordpress.org/support/topic/271-please-update-now-not-showing-up-1/)

## Why did I lose custom changes to the WordPress Default Theme during the last automatic upgrade?

A core upgrade copies all the new files from the distribution over the old ones, so if you changed existing files in the WordPress default theme (e.g. `wp-content/themes/twentysixteen/style.css`), those changes got overwritten with the new version of that file.

Please note, a core upgrade goes through a list of “old files”, as defined in `wp-admin/includes/update-core.php`, and deletes those files. Any files not on the list, and not in the distribution, are preserved.

**Remember, that before upgrades, whether automatic or manual, both the WordPress Files and database should be backed-up as explained in [WordPress Backups](#advanced-administration/security/backup).**

A better way to modify the default theme is by using a [child theme](#themes/advanced-topics/child-themes). It’s a little more work to set up, but worth the effort because your customizations will be safe when the main theme is updated.

See also:

- [WordPress Backups](#advanced-administration/security/backup)
- [Child Themes](#themes/advanced-topics/child-themes)

## How do you repair a MySQL database table?

Every once in a while, it may be necessary to repair one or more MySQL database tables. According to the [How to Repair MyISAM Tables at dev.mysql.com](https://dev.mysql.com/doc/refman/8.0/en/myisam-repair.html) there are a number of reasons to repair a table including errors such as *“tbl\_name.frm is locked against change”*, *“Can’t find file tbl\_name.MYI (Errcode: nnn)”*, *“Unexpected end of file”*, *“Record file is crashed”*, or *“Got error nnn from table handler”*.

Here are the steps to repair a table in a MySQL database using [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin):

1. Login to hosting account.
2. Login to [phpMyAdmin](#advanced-administration/upgrade/phpmyadmin).
3. Choose the affected database. If you only have one database, it should choose it by default so you don’t need to do anything.
4. In the main panel, you should see a list of your database tables. Check the boxes by the tables that need repair.
5. At the bottom of the window just below the list of tables, there is a drop down menu. Choose “Repair Table”

Remember, that it is advisable to have a current backup of your database at all times.

See also:

- [WordPress Backups](#advanced-administration/security/backup)