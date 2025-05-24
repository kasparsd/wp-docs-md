Table of Contents:

- [Common APIs Handbook](#apis)
- [Responsive Images](#apis/responsive-images)
- [Hooks](#apis/hooks)
- [Filter Reference](#apis/hooks/filter-reference)
- [Action Reference](#apis/hooks/action-reference)
- [Dashboard widgets API](#apis/dashboard-widgets)
- [Database API](#apis/database)
- [Internationalization](#apis/internationalization)
- [Internationalization Functions](#apis/internationalization/internationalization-functions)
- [Internationalization Guidelines](#apis/internationalization/internationalization-guidelines)
- [Localization](#apis/internationalization/localization)
- [Filesystem](#apis/filesystem)
- [Global Variables](#apis/global-variables)
- [Metadata](#apis/metadata)
- [Options](#apis/options)
- [Plugins](#apis/plugins)
- [Quicktags](#apis/quicktags)
- [Making HTTP requests](#apis/making-http-requests)
- [GETting data from an external service](#apis/making-http-requests/getting-data-from-an-external-service)
- [POSTing data to an external service](#apis/making-http-requests/posting-data-to-an-external-service)
- [Performance](#apis/making-http-requests/performance)
- [Advanced](#apis/making-http-requests/advanced)
- [Authentication](#apis/making-http-requests/authentication)
- [REST](#apis/rest)
- [Rewrite](#apis/rewrite)
- [Security](#apis/security)
- [Sanitizing Data](#apis/security/sanitizing)
- [Validating Data](#apis/security/data-validation)
- [Escaping Data](#apis/security/escaping)
- [Nonces](#apis/security/nonces)
- [User Roles and Capabilities](#apis/security/user-roles-and-capabilities)
- [Common Vulnerabilities](#apis/security/common-vulnerabilities)
- [Example](#apis/security/example)
- [Settings](#apis/settings)
- [Shortcode](#apis/shortcode)
- [Site Health](#apis/site-health)
- [Theme](#apis/theme)
- [Transients](#apis/transients)
- [XML-RPC](#apis/xml-rpc)
- [wp-config.php](#apis/wp-config-php)

# Common APIs Handbook <a name="apis" />

Source: https://developer.wordpress.org/apis/

This handbook serves as a clearinghouse for documentation on all APIs present within the WordPress software as well as APIs available from the WordPress.org ecosystem.

---

# Responsive Images <a name="apis/responsive-images" />

Source: https://developer.wordpress.org/apis/responsive-images/

Since WordPress 4.4, native responsive images is supported by including `srcset` and `sizes` attributes to the image markup it generates. For background on this feature, read the [merge proposal](https://make.wordpress.org/core/2015/09/30/responsive-images-merge-proposal/).

## Some History

When users upload images in WordPress, it automatically crops new images to smaller sizes. For example, if you upload an image that’s 1500 x 706, the image sizes might look like this:

- Full Size – 1500 x 706
- Large – 500 x 235
- Medium – 300 x 141
- Thumbnail – 150 x 150

So WordPress automatically creates several sizes of each image uploaded to the media library. Additional sizes are created depending on the theme. If the full size image is attached to a post, users on desktop and mobile devices will see the full size image. However, it doesn’t make sense to use the full size image on mobile devices because of its display and file size.

Before responsive design was popular, many sites attempted to dynamically serve different layouts (including images) to browsers based on the device type (e.g. phone, tablet, etc.). In these cases, all of the dynamic stuff happened at the server, before the page was rendered. This strategy is usually associated with the term **adaptive design**.

**Responsive design**, on the other hand, uses tools like media queries to allow a single page to be rendered that will *respond* in the browser based on things like viewport width and display density.

**Responsive images** follows the second strategy and sends all of the information to the browser up front and lets the browser take care of loading the appropriate image rather than making those decisions on the server before the page is loaded.

## How it works

By including the available sizes of an image into a `srcset` attribute, it allows the software to automatically use and display the right image based on a device’s screen size. If you attach a full size 1500 x 706 image to a post in WordPress, mobile devices will see the large or medium-sized image instead—potentially saving bandwidth and speeding up page load times in the process.

Note that for compatibility with existing markup, neither `srcset` nor `sizes` are added or modified if they already exist in content HTML. Responsive images don’t have any settings to configure as the magic happens behind the scenes.

### Browser side

To help browsers select the best image from the source set list, WordPress also include a default `sizes` attribute that is equivalent to `(max-width: {{image-width}}px) 100vw, {{image-width}}px`. While this default will work out of the box for a majority of sites, themes should customize the default `sizes` attribute as needed using the `wp_calculate_image_sizes` filter.

A normal browser request goes to server, server sends back response. This response includes links to other resources – fonts, css, JS, and images. The browser notices these resources, and sends additional requests to the server and fetches those resources.

What this responsive image approach does is provide additional attributes to the image tag that alerts the browser to the different image files available for that particular image tag so that the browser can then intelligently request the right image file (source) for whatever window/viewport size or even resolution support the browser has. This means the browser can request the right “sized” image file for an image instead of being served an overly large image and resizing down to fit the space after the fact.

For a full overview of how `srcset` and `sizes` works, read *[Responsive Images in Practice](http://alistapart.com/article/responsive-images-in-practice)*, by *Eric Portis* over at A List Apart.

## New functions and hooks

To implement this feature, the following new functions were added to WordPress:

- `<a href="#reference/functions/wp_get_attachment_image_srcset">wp_get_attachment_image_srcset</a>()` – Retrieves the value for an image attachment’s `srcset` attribute.
- `<a href="#reference/functions/wp_calculate_image_srcset">wp_calculate_image_srcset</a>()` – A helper function to calculate the image sources to include in a `srcset` attribute.
- `<a href="#reference/functions/wp_get_attachment_image_sizes">wp_get_attachment_image_sizes</a>()` – Creates a `sizes` attribute value for an image.
- `<a href="#reference/functions/wp_calculate_image_sizes">wp_calculate_image_sizes</a>()` – A helper function to create the `sizes` attribute for an image.
- `<a href="#reference/functions/wp_image_add_srcset_and_sizes">wp_image_add_srcset_and_sizes</a>()` – Adds `srcset` and `sizes` attributes to an existing `img` element.

As a safeguard against adding very large images to `srcset` attributes, a `<a href="#reference/hooks/max_srcset_image_width">max_srcset_image_width</a>` filter has been added, which allows themes to set a maximum image width for images include in source set lists. The default value is *2048px*.

## A new default image size

A new default intermediate size, `medium_large` has been added to better take advantage of responsive image support. The new size is 768px wide by default, with no height limit, and can be used like any other size available in WordPress. As it is a standard size, it will only be generated when new images are uploaded or sizes are regenerated with third party plugins.

The `medium_large` size is not included in the UI when selecting an image to insert in posts, nor are we including UI to change the image size from the media settings page. However, developers can modify the width of this new size using the `update_option()` function, similar to any other default image size.

## Customizing responsive image markup

To modify the default `srcset` and `sizes` attributes, you should use the `wp_calculate_image_srcset` and `wp_calculate_image_sizes` filters, respectively.

Overriding the `srcset` or `sizes` attributes for images not embedded in post content (e.g. post thumbnails, galleries, etc.), can be accomplished using the `<a href="#reference/hooks/wp_get_attachment_image_attributes">wp_get_attachment_image_attributes</a>` filter, similar to how other image attributes are modified.

Additionally, you can create your own custom markup patterns by using `wp_get_attachment_image_srcset()` directly in your templates. Here is an example of how you could use this function to build an `<img>` element with a custom `sizes` attribute:

```
<?php
$img_src = wp_get_attachment_image_url( $attachment_id, 'medium' );
$img_srcset = wp_get_attachment_image_srcset( $attachment_id, 'medium' );
?>
<img src="<?php echo esc_url( $img_src ); ?>"
     srcset="<?php echo esc_attr( $img_srcset ); ?>"
     sizes="(max-width: 50em) 87vw, 680px" alt="Foo Bar">
```

**Need more developer details?**  
[Learn more about customizing responsive images markup on this GitHub repository](https://github.com/ResponsiveImagesCG/wp-tevko-responsive-images).

## Sources

- <https://make.wordpress.org/core/2015/11/10/responsive-images-in-wordpress-4-4/>
- <https://wptavern.com/joe-mcgill-explains-how-responsive-images-work-in-wordpress-4-4>

---

# Hooks <a name="apis/hooks" />

Source: https://developer.wordpress.org/apis/hooks/

Hooks are a way for one piece of code to interact/modify another piece of code at specific, pre-defined spots.

You can read more about how to use Hooks in the [Plugin Developer Handbook](#plugins/hooks).

The reference guides below are a list of action and filter hooks available in WordPress.

[Action Reference](#apis/action-reference)

[Filter Reference](#apis/filter-reference)

---

# Filter Reference <a name="apis/hooks/filter-reference" />

Source: https://developer.wordpress.org/apis/hooks/filter-reference/

This article contains an extensive (but not 100% comprehensive) list of the filter hooks available for use in plugin development in Version 2.1 and above of WordPress. For more information:

- To learn more about what filter and action hooks are, see [Plugin API](/Plugin_API).
- To learn about writing plugins in general, see [Writing a Plugin](/Writing_a_Plugin).
- For a reference list of action hooks, see [Plugin API/Action Reference](/Plugin_API/Action_Reference).
- For information about filter and action hooks in previous versions of WordPress, see [Plugin API/Hooks 2.0.x](/Plugin_API/Hooks_2.0.x).
- For an automatically-generated list of *all* WordPress hooks, see the [WordPress Hooks Database](http://adambrown.info/p/wp_hooks)

Note: If you want to add to or clarify this documentation, please follow the style of the existing entries. Describe what data the filter is applied to, and if the filter function takes additional arguments, describe the argument list.

## Post, Page, and Attachment (Upload) Filters

See also [\#Category and Term Filters](/#Category_and_Term_Filters), [\#Author and User Filters](/#Author_and_User_Filters), [\#Link Filters](/#Link_Filters), [\#Date and Time Filters](/#Date_and_Time_Filters), and [\#Administrative Filters](/#Administrative_Filters) below.

### Database Reads

Filters in this section are applied to information read from the  
database, prior to displaying on a page or editing screen.

[attachment\_fields\_to\_edit](#reference/hooks/attachment_fields_to_edit) : applied to the form fields to be displayed when editing an attachment. Called in the `get_attachment_fields_to_edit` function. Filter function arguments: an array of form fields, the post object.

[attachment\_icon](#reference/hooks/attachment_icon) : applied to the icon for an attachment in the `get_attachment_icon` function. Filter function arguments: icon file as an HTML IMG tag, attachment ID.

[attachment\_innerHTML](#reference/hooks/attachment_innerHTML) : applied to the title to be used for an attachment if there is no icon, in the `get_attachment_innerHTML` function. Filter function arguments: inner HTML (defaults to the title), attachment ID.

[author\_edit\_pre](#reference/hooks/author_edit_pre) : applied to post author prior to display for editing.

[body\_class](#reference/hooks/body_class) : applied to the classes for the HTML

[content\_edit\_pre](#reference/hooks/content_edit_pre) : applied to post content prior to display for editing.

[content\_filtered\_edit\_pre](#reference/hooks/content_filtered_edit_pre) : applied to post content filtered prior to display for editing.

[excerpt\_edit\_pre](#reference/hooks/excerpt_edit_pre) : applied to post excerpt prior to display for editing.

[date\_edit\_pre](#reference/hooks/date_edit_pre) : applied to post date prior to display for editing.

[date\_gmt\_edit\_pre](#reference/hooks/date_gmt_edit_pre) : applied to post date prior to display for editing.

[get\_attached\_file](#reference/hooks/get_attached_file) : applied to the attached file information retrieved by the `get_attached_file` function. Filter function arguments: file information, attachment ID.

[get\_enclosed](#reference/hooks/get_enclosed) : applied to the enclosures list for a post by the `get_enclosed` function.

[get\_pages](#reference/hooks/get_pages) : applied to the list of pages returned by the [`get_pages` function](#reference/functions/get_pages). Filter function arguments: list of pages (each item of which contains a page data array), `get_pages` function argument list (telling which pages were requested).

[get\_pung](#reference/hooks/get_pung) : applied to the list of pinged URLs for a post by the `get_pung` function.

[get\_the\_archive\_title](#reference/hooks/get_the_archive_title) : applied to the archive’s title in the `get_the_archive_title` function.

[get\_the\_excerpt](#reference/hooks/get_the_excerpt) : applied to the post’s excerpt in the `get_the_excerpt` function.

[get\_the\_guid](#reference/hooks/get_the_guid) : applied to the post’s GUID in the `get_the_guid` function.

[get\_to\_ping](#reference/hooks/get_to_ping) : applied to the list of URLs to ping for a post by the `get_to_ping` function.

[icon\_dir](#reference/hooks/icon_dir) : applied to the template’s image directory in several functions. Basically allows a plugin to specify that icons for MIME types should come from a different location.

[icon\_dir\_uri](#reference/hooks/icon_dir_uri) : applied to the template’s image directory URI in several functions. Basically allows a plugin to specify that icons for MIME types should come from a different location.

[image\_size\_names\_choose](#reference/hooks/image_size_names_choose) : applied to the list of image sizes selectable in the Media Library. Commonly used to make [custom image sizes](#reference/functions/add_image_size) selectable.

[mime\_type\_edit\_pre](#reference/hooks/mime_type_edit_pre) : applied to post mime type prior to display for editing.

[modified\_edit\_pre](#reference/hooks/modified_edit_pre) : applied to post modification date prior to display for editing.

[modified\_gmt\_edit\_pre](#reference/hooks/modified_gmt_edit_pre) : applied to post modification gmt date prior to display for editing.

[no\_texturize\_shortcodes](#reference/hooks/no_texturize_shortcodes) : applied to registered shortcodes. Can be used to exempt shortcodes from the automatic texturize function.

[parent\_edit\_pre](#reference/hooks/parent_edit_pre) : applied to post parent id prior to display for editing.

[password\_edit\_pre](#reference/hooks/password_edit_pre) : applied to post password prior to display for editing.

[post\_class](#reference/hooks/post_class) : applied to the classes of the outermost HTML element for a post. Called in the [`get_post_class`](#reference/functions/get_post_class) function. Filter function arguments: an array of class names, an array of additional class names that were added to the first array, and the post ID.

[pre\_kses](#reference/hooks/pre_kses) : applied to various content prior to being processed/sanitized by KSES. This hook allows developers to customize what types of scripts/tags should either be allowed in content or stripped.

[prepend\_attachment](#reference/hooks/prepend_attachment) : applied to the HTML to be prepended by the `prepend_attachment` function.

[protected\_title\_format](#reference/hooks/protected_title_format) : Used to the change or manipulate the post title when the post is password protected.

[private\_title\_format](#reference/hooks/private_title_format) : Used to the change or manipulate the post title when its status is private.  
[sanitize\_title](#reference/hooks/sanitize_title) : applied to a post title by the `sanitize_title` function, after stripping out HTML tags.

[single\_post\_title](#reference/hooks/single_post_title) : applied to the post title when used to create a blog page title by the `wp_title` and `single_post_title` functions.

[status\_edit\_pre](#reference/hooks/status_edit_pre) : applied to post status prior to display for editing.

[the\_content](#reference/hooks/the_content) : applied to the post content retrieved from the database, prior to printing on the screen (also used in some other operations, such as trackbacks).

[the\_content\_rss](#reference/hooks/the_content_rss) : applied to the post content prior to including in an RSS feed. (Deprecated)

[the\_content\_feed](#reference/hooks/the_content_feed) : applied to the post content prior to including in an RSS feed.

[the\_editor\_content](#reference/hooks/the_editor_content) : applied to post content before putting it into a rich editor window.

[the\_excerpt](#reference/hooks/the_excerpt) : applied to the post excerpt (or post content, if there is no excerpt) retrieved from the database, prior to printing on the screen (also used in some other operations, such as trackbacks).

[the\_excerpt\_rss](#reference/hooks/the_excerpt_rss) : applied to the post excerpt prior to including in an RSS feed.

[the\_password\_form](#reference/hooks/the_password_form) : applied to the password form for protected posts.

[the\_tags](#reference/hooks/the_tags) : applied to the tags retrieved from the database, prior to printing on the screen.

[the\_title](#reference/hooks/the_title) : applied to the post title retrieved from the database, prior to printing on the screen (also used in some other operations, such as trackbacks).

[the\_title\_rss](#reference/hooks/the_title_rss) : applied to the post title before including in an RSS feed (after first filtering with `the_title`.

[title\_edit\_pre](#reference/hooks/title_edit_pre) : applied to post title prior to display for editing.

[type\_edit\_pre](#reference/hooks/type_edit_pre) : applied to post type prior to display for editing.

[wp\_dropdown\_pages](#reference/hooks/wp_dropdown_pages) : applied to the HTML dropdown list of WordPress pages generated by the `wp_dropdown_pages` function.

[wp\_list\_pages](#reference/hooks/wp_list_pages) : applied to the HTML list generated by the `wp_list_pages` function.

[wp\_list\_pages\_excludes](#reference/hooks/wp_list_pages_excludes) : applied to the list of excluded pages (an array of page IDs) in the `wp_list_pages` function.

[wp\_get\_attachment\_metadata](#reference/hooks/wp_get_attachment_metadata) : applied to the attachment metadata retrieved by the `wp_get_attachment_metadata` function. Filter function arguments: meta data, attachment ID.

[wp\_get\_attachment\_thumb\_file](#reference/hooks/wp_get_attachment_thumb_file) : applied to the attachment thumbnail file retrieved by the `wp_get_attachment_thumb_file` function. Filter function arguments: thumbnail file, attachment ID.

[wp\_get\_attachment\_thumb\_url](#reference/hooks/wp_get_attachment_thumb_url) : applied to the attachment thumbnail URL retrieved by the `wp_get_attachment_thumb_URL` function. Filter function arguments: thumbnail URL, attachment ID.

[wp\_get\_attachment\_url](#reference/hooks/wp_get_attachment_url) : applied to the attachment URL retrieved by the `wp_get_attachment_url` function. Filter function arguments: URL, attachment ID.

[wp\_mime\_type\_icon](#reference/hooks/wp_mime_type_icon) : applied to the MIME type icon for an attachment calculated by the `wp_mime_type_icon` function. Filter function arguments: icon URI calculated, MIME type, post ID.

[wp\_title](#reference/hooks/wp_title) : applied to the blog page title before sending to the browser in the `wp_title` function.

### Database Writes

Filters in this section are applied to information prior to saving to  
the database.

[add\_ping](#reference/hooks/add_ping) : applied to the new value of the pinged field on a post when a ping is added, prior to saving the new information in the database.

[attachment\_fields\_to\_save](#reference/hooks/attachment_fields_to_save) : applied to fields associated with an attachment prior to saving them in the database. Called in the `media_upload_form_handler` function. Filter function arguments: an array of post attributes, an array of attachment fields including the changes submitted from the form.

[attachment\_max\_dims](#reference/hooks/attachment_max_dims) : applied to the maximum image dimensions before reducing an image size. Filter function input (and return value) is either false (if no maximum dimensions have been specified) or a two-item list (width, height).

[category\_save\_pre](#reference/hooks/category_save_pre) : applied to post category comma-separated list prior to saving it in the database (also used for attachments).

[comment\_status\_pre](#reference/hooks/comment_status_pre) : applied to post comment status prior to saving it in the database (also used for attachments).

[content\_filtered\_save\_pre](#reference/hooks/content_filtered_save_pre) : applied to filtered post content prior to saving it in the database (also used for attachments).

[content\_save\_pre](#reference/hooks/content_save_pre) : applied to post content prior to saving it in the database (also used for attachments).

[excerpt\_save\_pre](#reference/hooks/excerpt_save_pre) : applied to post excerpt prior to saving it in the database (also used for attachments).

[image\_save\_pre](#reference/hooks/image_save_pre) (deprecated) : use [`image_editor_save_pre`](#reference/hooks/image_editor_sav_pre) instead.

[jpeg\_quality](#reference/hooks/jpeg_quality) (deprecated) : use [`wp_editor_set_quality`](#reference/hooks/wp_editor_set_quality) or `WP_Image_Editor::set_quality()` instead.

[name\_save\_pre](#reference/hooks/name_save_pre) (Deprecated): applied to post name prior to saving it in the database (also used for attachments).

[phone\_content](#reference/hooks/phone_content) : applied to the content of a post submitted by email, before saving.

[ping\_status\_pre](#reference/hooks/ping_status_pre) : applied to post ping status prior to saving it in the database (also used for attachments).

[post\_mime\_type\_pre](#reference/hooks/post_mime_type_pre) : applied to the MIME type for an attachment prior to saving it in the database.

[status\_save\_pre](#reference/hooks/status_save_pre) : applied to post status prior to saving it in the database.

[thumbnail\_filename](#reference/hooks/thumbnail_filename) : applied to the file name for the thumbnail when uploading an image.

[title\_save\_pre](#reference/hooks/title_save_pre) : applied to post title prior to saving it in the database (also used for attachments).

[update\_attached\_file](#reference/hooks/update_attached_file) : applied to the attachment information prior to saving in post metadata in the `update_attached_file` function. Filter function arguments: attachment information, attachment ID.

[wp\_create\_thumbnail](#reference/hooks/wp_create_thumbnail) (deprecated)

[wp\_delete\_file](#reference/hooks/wp_delete_file) : applied to an attachment file name just before deleting.

[wp\_generate\_attachment\_metadata](#reference/hooks/wp_generate_attachment_metadata) : applied to the attachment metadata array before saving in the database.

[wp\_save\_image\_file](#reference/hooks/wp_save_image_file) (deprecated) : use [`wp_save_image_editor_file`](#reference/hooks/wp_save_image_editor_file) instead.

[wp\_thumbnail\_creation\_size\_limit](#reference/hooks/wp_thumbnail_creation_size_limit) : applied to the size of the thumbnail when uploading an image. Filter function arguments: max file size, attachment ID, attachment file name.

[wp\_thumbnail\_max\_side\_length](#reference/hooks/wp_thumbnail_max_side_length) : applied to the size of the thumbnail when uploading an image. Filter function arguments: image side max size, attachment ID, attachment file name.

[wp\_update\_attachment\_metadata](#reference/hooks/wp_update_attachment_metadata) : applied to the attachment metadata just before saving in the `wp_update_attachment_metadata` function. Filter function arguments: meta data, attachment ID.

## Comment, Trackback, and Ping Filters

See also [\#Author and User Filters](/#Author_and_User_Filters), [\#Link Filters](/#Link_Filters), [\#Date and Time Filters](/#Date_and_Time_Filters), and [\#Administrative Filters](/#Administrative_Filters) below.

### Database Reads

Filters in this section are applied to information read from the  
database, prior to displaying on a page or editing screen.

[comment\_excerpt](#reference/hooks/comment_excerpt) : applied to the comment excerpt by the `comment_excerpt` function. See also `get_comment_excerpt`.

[comment\_flood\_filter](#reference/hooks/comment_flood_filter) : applied when someone appears to be flooding your blog with comments. Filter function arguments: already blocked (true/false, whether a previous filtering plugin has already blocked it; set to true and return true to block this comment in a plugin), time of previous comment, time of current comment.

[comment\_post\_redirect](#reference/hooks/comment_post_redirect) : applied to the redirect location after someone adds a comment. Filter function arguments: redirect location, comment info array.

[comment\_text](#reference/hooks/comment_text) : applied to the comment text before displaying on the screen by the `comment_text` function, and in the admin menus.

[comment\_text\_rss](#reference/hooks/comment_text_rss) : applied to the comment text prior to including in an RSS feed.

[comments\_array](#reference/hooks/comments_array) : applied to the array of comments for a post in the `comments_template` function. Filter function arguments: array of comment information structures, post ID.

[comments\_number](#reference/hooks/comments_number) : applied to the formatted text giving the number of comments generated by the `comments_number` function. See also `get_comments_number`.

[get\_comment\_excerpt](#reference/hooks/get_comment_excerpt) : applied to the comment excerpt read from the database by the `get_comment_excerpt` function (which is also called by `comment_excerpt`. See also `comment_excerpt`.

[get\_comment\_ID](#reference/hooks/get_comment_ID) : applied to the comment ID read from the global `$comments` variable by the `get_comment_ID` function.

[get\_comment\_text](#reference/hooks/get_comment_text) : applied to the comment text of the current comment in the `get_comment_text` function, which is also called by the `comment_text` function.

[get\_comment\_type](#reference/hooks/get_comment_type) : applied to the comment type (“comment”, “trackback”, or “pingback”) by the `get_comment_type` function (which is also called by `comment_type`).

[get\_comments\_number](#reference/hooks/get_comments_number) : applied to the comment count read from the `$post` global variable by the `get_comments_number` function (which is also called by the `comments_number` function; see also `comments_number` filter).

[post\_comments\_feed\_link](#reference/hooks/post_comments_feed_link) : applied to the feed URL generated for the comments feed by the `comments_rss` function.

### Database Writes

Filters in this section are applied to information prior to saving to  
the database.

[comment\_save\_pre](#reference/hooks/comment_save_pre) : applied to the comment data just prior to updating/editing comment data. Function arguments: comment data array, with indices “comment\_post\_ID”, “comment\_author”, “comment\_author\_email”, “comment\_author\_url”, “comment\_content”, “comment\_type”, and “user\_ID”.

[pre\_comment\_approved](#reference/hooks/pre_comment_approved) : applied to the current comment’s approval status (true/false) to allow a plugin to override. Return true/false and set first argument to true/false to approve/disapprove the comment, and use global variables such as `$comment_ID` to access information about this comment.

[pre\_comment\_content](#reference/hooks/pre_comment_content) : applied to the content of a comment prior to saving the comment in the database.

[preprocess\_comment](#reference/hooks/preprocess_comment) : applied to the comment data prior to any other processing, when saving a new comment in the database. Function arguments: comment data array, with indices “comment\_post\_ID”, “comment\_author”, “comment\_author\_email”, “comment\_author\_url”, “comment\_content”, “comment\_type”, and “user\_ID”.

[wp\_insert\_post\_data](#reference/hooks/wp_insert_post_data) : applied to modified and unmodified post data in [wp\_insert\_post()](#reference/functions/wp_insert_post) prior to update or insertion of post into database. Function arguments: modified and extended post array and sanitized post array.

## Category and Term Filters

See also [\#Administrative Filters](/#Administrative_Filters)  
below.

### Database Reads

Filters in this section are applied to information read from the  
database, prior to displaying on a page or editing screen.

[category\_description](#reference/hooks/category_description) : applied to the “description” field categories by the `category_description` and [`wp_list_categories`](#reference/functions/wp_list_categories) functions. Filter function arguments: description, category ID when called from `category_description`; description, category information array (all fields from the category table for that particular category) when called from [`wp_list_categories`](#reference/functions/wp_list_categories).

[category\_feed\_link](#reference/hooks/category_feed_link) : applied to the feed URL generated for the category feed by the [`get_category_feed_link`](#reference/functions/get_category_feed_link) function.

[category\_link](#reference/hooks/category_link) : applied to the URL created for a category by the [`get_category_link`](#reference/functions/get_category_link) function. Filter function arguments: link URL, category ID.

[get\_ancestors](#reference/hooks/get_ancestors) : applied to the list of ancestor IDs returned by the [`get_ancestors`](#reference/functions/get_ancestors) function (which is in turn used by many other functions). Filter function arguments: ancestor IDs array, given object ID, given object type.

[get\_categories](#reference/hooks/get_categories) : applied to the category list generated by the [`get_categories`](#reference/functions/get_categories) function (which is in turn used by many other functions). Filter function arguments: category list, [`get_categories`](#reference/functions/get_categories) options list.

[get\_category](#reference/hooks/get_category) : applied to the category information that the [`get_category`](#reference/functions/get_category) function looks up, which is basically an array of all the fields in WordPress’s category table for a particular category ID.

[list\_cats](#reference/hooks/list_cats) : called for two different purposes:

1. the  
    [`wp_dropdown_categories`](#reference/functions/wp_dropdown_categories)  
    function uses it to filter the `show_option_all` and  
    `show_option_none` arguments (which are used to put options “All”  
    and “None” in category drop-down lists). No additional filter  
    function arguments.
2. the  
    [`wp_list_categories`](#reference/functions/wp_list_categories)  
    function applies it to the category names. Filter function  
    arguments: category name, category information list (all fields from  
    the category table for that particular category).

[list\_cats\_exclusions](#reference/hooks/list_cats_exclusions) : applied to the SQL WHERE statement giving the categories to be excluded by the [`get_categories`](#reference/functions/get_categories) function. Typically, a plugin would add to this list, in order to exclude certain categories or groups of categories from category lists. Filter function arguments: excluded category WHERE clause, [`get_categories`](#reference/functions/get_categories) options list.

[single\_cat\_title](#reference/hooks/single_cat_title) : applied to the category name when used to create a blog page title by the [`wp_title`](#reference/functions/wp_title) and [`single_cat_title`](#reference/functions/single_cat_title) functions.

[the\_category](#reference/hooks/the_category) : applied to the list of categories (an HTML list with links) created by the `get_the_category_list` function. Filter function arguments: generated HTML text, list separator being used (empty string means it is a default LI list), `parents` argument to `get_the_category_list`.

[the\_category\_rss](#reference/hooks/the_category_rss) : applied to the category list (a list of category XML elements) for a post by the [`get_the_category_rss`](#reference/functions/get_the_category_rss) function, before including in an RSS feed. Filter function arguments are the list text and the type (“rdf” or “rss” generally).

[wp\_dropdown\_cats](#reference/hooks/wp_dropdown_cats) : applied to the drop-down category list (a text string containing HTML option elements) generated by the [`wp_dropdown_categories`](#reference/functions/wp_dropdown_categories) function.

[wp\_list\_categories](#reference/hooks/wp_list_categories) : applied to the category list (an HTML list) generated by the [`wp_list_categories`](#reference/functions/wp_list_categories) function.

[wp\_get\_object\_terms](#reference/functions/wp_get_object_terms) : applied to the list of terms (an array of objects) generated by the [`wp_get_object_terms`](https:#reference/functions/wp_get_object_terms) function, which is called by a number of category/term related functions, such as [`get_the_terms`](#reference/functions/get_the_terms) and [`get_the_category`](#reference/functions/get_the_category).

### Database Writes

Filters in this section are applied to information prior to saving to  
the database.

[pre\_category\_description](#reference/hooks/pre_category_description) : applied to the category desription prior to saving in the database.

[wp\_update\_term\_parent](#reference/hooks/wp_update_term_parent) : filter term parent before update to term is applied, hook to this filter to see if it will cause a hierarchy loop.

[edit\_terms](#reference/hooks/edit_terms) : (actually an action, but often used like a filter) hooked in prior to saving taxonomy/category change in the database

[pre\_category\_name](#reference/hooks/pre_category_name) : applied to the category name prior to saving in the database.

[pre\_category\_nicename](#reference/hooks/pre_category_nicename) : applied to the category nice name prior to saving in the database.

## Link Filters

Note: This section contains filters related to links to posts, pages,  
archives, feeds, etc. For blogroll links, see the [\#Blogroll Filters](/#Blogroll_Filters) section below.

[attachment\_link](#reference/hooks/attachment_link) : applied to the calculated attachment permalink by the `get_attachment_link` function. Filter function arguments: link URL, attachment ID.

[author\_feed\_link](#reference/hooks/author_feed_link) : applied to the feed URL generated for the author feed by the `get_author_rss_link` function.

[author\_link](#reference/hooks/author_link) : applied to the author’s archive permalink created by the `get_author_posts_url` function. Filter function arguments: link URL, author ID, author’s “nice” name. Note that `get_author_posts_url` is called within functions `wp_list_authors` and `the_author_posts_link`.

[comment\_reply\_link](#reference/hooks/comment_reply_link) : applied to the link generated for replying to a specific comment by the `get_comment_reply_link` function which is called within function `comments_template`. Filter function arguments: link (string), custom options (array), current comment (object), current post (object).

[day\_link](#reference/hooks/day_link) : applied to the link URL for a daily archive by the `get_day_link` function. Filter function arguments: URL, year, month number, day number.

[feed\_link](#reference/hooks/feed_link) : applied to the link URL for a feed by the `get_feed_link` function. Filter function arguments: URL, type of feed (e.g. “rss2”, “atom”, etc.).

[get\_comment\_author\_link](#reference/hooks/get_comment_author_link) : applied to the HTML generated for the author’s link on a comment, in the `get_comment_author_link` function (which is also called by `comment_author_link`. Action function arguments: user name

[get\_comment\_author\_url\_link](#reference/hooks/get_comment_author_url_link) : applied to the HTML generated for the author’s link on a comment, in the `get_comment_author_url_link` function (which is also called by `comment_author_link`).

[month\_link](#reference/hooks/month_link) : applied to the link URL for a monthly archive by the `get_month_link` function. Filter function arguments: URL, year, month number.

[page\_link](#reference/hooks/page_link) : applied to the calculated page URL by the `get_page_link` function. Filter function arguments: URL, page ID. Note that there is also an internal filter called `_get_page_link` that can be used to filter the URLS of pages that are not designated as the blog’s home page (same arguments). Note that this only applies to WordPress pages, not posts, custom post types, or attachments.

[post\_link](#reference/hooks/post_link) : applied to the calculated post permalink by the `get_permalink` function, which is also called by the `the_permalink`, `post_permalink`, `previous_post_link`, and `next_post_link` functions. Filter function arguments: permalink URL, post data list. Note that this only applies to WordPress default posts, and not custom post types (nor pages or attachments).

[post\_type\_link](#reference/hooks/post_type_link) : applied to the calculated custom post type permalink by the `get_post_permalink` function.

[the\_permalink](#reference/hooks/the_permalink) : applied to the permalink URL for a post prior to printing by function `the_permalink`.

[year\_link](#reference/hooks/year_link) : applied to the link URL for a yearly archive by the `get_year_link` function. Filter function arguments: URL, year.

[tag\_link](#reference/hooks/tag_link) : applied to the URL created for a tag by the get\_tag\_link function. Filter function arguments: link URL, tag ID.

[term\_link](#reference/hooks/term_link) : applied to the URL created for a term by the get\_term\_link function. Filter function arguments: term link URL, term object and taxonomy slug.

## Date and Time Filters

See also [\#Link Filters](/#Link_Filters) above.

[get\_comment\_date](#reference/hooks/get_comment_date) : applied to the formatted comment date generated by the `get_comment_date` function (which is also called by `comment_date`).

[get\_comment\_time](#reference/hooks/get_comment_time) : applied to the formatted comment time in the `get_comment_time` function (which is also called by `comment_time`).

[get\_the\_modified\_date](#reference/hooks/get_the_modified_date) : applied to the formatted post modification date generated by the `get_the_modified_date` function (which is also called by the `the_modified_date` function).

[get\_the\_modified\_time](#reference/hooks/get_the_modified_time) : applied to the formatted post modification time generated by the `get_the_modified_time` and `get_post_modified_time` functions (which are also called by the `the_modified_time` function).

[get\_the\_time](#reference/hooks/get_the_time) : applied to the formatted post time generated by the `get_the_time` and `get_post_time` functions (which are also called by the `the_time` function).

[the\_date](#reference/hooks/the_date) : applied to the formatted post date generated by the `the_date` function.

[the\_modified\_date](#reference/hooks/the_modified_date) : applied to the formatted post modification date generated by the `the_modified_date` function.

[the\_modified\_time](#reference/hooks/the_modified_time) : applied to the formatted post modification time generated by the `the_modified_time` function.

[the\_time](#reference/hooks/the_time) : applied to the formatted post time generated by the `the_time` function.

[the\_weekday](#reference/hooks/the_weekday) : applied to the post date weekday name generated by the `the_weekday` function.

[the\_weekday\_date](#reference/hooks/the_weekday_date) : applied to the post date weekday name generated by the `the_weekday_date` function. Function arguments are the weekday name, before text, and after text (before text and after text are added to the weekday name if the current post’s weekday is different from the previous post’s weekday).

## Author and User Filters

See also [\#Link Filters](/#Link_Filters) and [\#Administrative Filters](/#Administrative_Filters) sections.

[login\_body\_class](#reference/hooks/login_body_class) : Allows filtering of the body class applied to the login screen in [`login_header()`](#reference/functions/login_header).

[login\_redirect](#reference/hooks/login_redirect) : applied to the `redirect_to` post/get variable during the user login process.

[user\_contactmethods](#reference/hooks/user_contactmethods) : applied to the contact methods fields on the user profile page. (old page is here: [contactmethods](#reference/hooks/contactmethods))

[update\_(meta\_type)\_metadata](#reference/hooks/update_(meta_type)_metadata) : applied before a (user) metadata gets updated.

### Database Reads

Filters in this section are applied to information read from the  
database, prior to displaying on a page or editing screen.

[author\_email](#reference/hooks/author_email) : applied to the comment author’s email address retrieved from the database by the `comment_author_email` function. See also `get_comment_author_email`.

[comment\_author](#reference/hooks/comment_author) : applied to the comment author’s name retrieved from the database by the `comment_author` function. See also `get_comment_author`.  
[comment\_author\_rss](#reference/hooks/comment_author_rss) : applied to the comment author’s name prior to including in an RSS feed.

[comment\_email](#reference/hooks/comment_email) : applied to the comment author’s email address retrieved from the database by the `comment_author_email_link` function.

[comment\_url](#reference/hooks/comment_url) : applied to the comment author’s URL retrieved from the database by the `comment_author_url` function (see also `get_comment_author_url`).

[get\_comment\_author](#reference/hooks/get_comment_author) : applied to the comment author’s name retrieved from the database by `get_comment_author`, which is also called by `comment_author`. See also `comment_author`.

[get\_comment\_author\_email](#reference/hooks/get_comment_author_email) : applied to the comment author’s email address retrieved from the database by `get_comment_author_email`, which is also called by `comment_author_email`. See also `author_email`.

[get\_comment\_author\_IP](#reference/hooks/get_comment_author_IP) : applied to the comment author’s IP address retrieved from the database by the `get_comment_author_IP` function, which is also called by `comment_author_IP`.

[get\_comment\_author\_url](#reference/hooks/get_comment_author_url) : applied to the comment author’s URL retrieved from the database by the `get_comment_author_url` function, which is also called by `comment_author_url`. See also `comment_url`.

[login\_errors](#reference/hooks/login_errors) : applied to the login error message printed on the login screen.

[login\_headertitle](#reference/hooks/login_headertitle) : applied to the title for the login header URL (Powered by WordPress by default) printed on the login screen.

[login\_headerurl](#reference/hooks/login_headerurl) : applied to the login header URL (points to wordpress.org by default) printed on the login screen.

[login\_message](#reference/hooks/login_message) : applied to the login message printed on the login screen.

[role\_has\_cap](#reference/hooks/role_has_cap) : applied to a role’s capabilities list in the `WP_Role->has_cap` function. Filter function arguments are the capabilities list to be filtered, the capability being questioned, and the role’s name.

[sanitize\_user](#reference/hooks/sanitize_user) : applied to a user name by the `sanitize_user` function. Filter function arguments: user name (after some cleaning up), raw user name, strict (true or false to use strict ASCII or not).

[the\_author](#reference/hooks/the_author) : applied to a post author’s displayed name by the `get_the_author` function, which is also called by the `the_author` function.

[the\_author\_email](#reference/hooks/the_author_email) : applied to a post author’s email address by the `the_author_email` function.

[user\_search\_columns](#reference/hooks/user_search_columns) : applied to the list of columns in the wp\_users table to include in the `WHERE` clause inside [WP\_User\_Query](#reference/classes/wp_user_query).

### Database Writes

Filters in this section are applied to information prior to saving to  
the database.

[pre\_comment\_author\_email](#reference/hooks/pre_comment_author_email) : applied to a comment author’s email address prior to saving the comment in the database.

[pre\_comment\_author\_name](#reference/hooks/pre_comment_author_name) : applied to a comment author’s user name prior to saving the comment in the database.

[pre\_comment\_author\_url](#reference/hooks/pre_comment_author_url) : applied to a comment author’s URL prior to saving the comment in the database.

[pre\_comment\_user\_agent](#reference/hooks/pre_comment_user_agent) : applied to the comment author’s user agent prior to saving the comment in the database.

[pre\_comment\_user\_ip](#reference/hooks/pre_comment_user_ip) : applied to the comment author’s IP address prior to saving the comment in the database.

[pre\_user\_id](#reference/hooks/pre_user_id) : applied to the comment author’s user ID prior to saving the comment in the database.

[pre\_user\_description](#reference/hooks/pre_user_description) : applied to the user’s description prior to saving in the database.

[pre\_user\_display\_name](#reference/hooks/pre_user_display_name) : applied to the user’s displayed name prior to saving in the database.

[pre\_user\_email](#reference/hooks/pre_user_email) : applied to the user’s email address prior to saving in the database.

[pre\_user\_first\_name](#reference/hooks/pre_user_first_name) : applied to the user’s first name prior to saving in the database.

[pre\_user\_last\_name](#reference/hooks/pre_user_last_name) : applied to the user’s last name prior to saving in the database.

[pre\_user\_login](#reference/hooks/pre_user_login) : applied to the user’s login name prior to saving in the database.

[pre\_user\_nicename](#reference/hooks/pre_user_nicename) : applied to the user’s “nice name” prior to saving in the database.

[pre\_user\_nickname](#reference/hooks/pre_user_nickname) : applied to the user’s nickname prior to saving in the database.

[pre\_user\_url](#reference/hooks/pre_user_url) : applied to the user’s URL prior to saving in the database.

[registration\_errors](#reference/hooks/registration_errors) : applied to the list of registration errors generated while registering a user for a new account.

[user\_registration\_email](#reference/hooks/user_registration_email) : applied to the user’s email address read from the registration page, prior to trying to register the person as a new user.

[validate\_username](#reference/hooks/validate_username) : applied to the validation result on a new user name. Filter function arguments: valid (true/false), user name being validated.

## Blogroll Filters

Note: This section contains filters related to blogroll links. For  
filters related to links to posts, pages, categories, etc., see section  
[\#Link Filters](/#Link_Filters) above.

[get\_bookmarks](#reference/hooks/get_bookmarks) : applied to link/blogroll database query results by the `get_bookmarks` function. Filter function arguments: database query results list, `get_bookmarks` arguments list.

[link\_category](#reference/hooks/link_category) : applied to the link category by the `get_links_list` and `wp_list_bookmarks` functions (as of WordPress 2.2).

[link\_description](#reference/hooks/link_description) : applied to the link description by the `get_links` and `wp_list_bookmarks` functions (as of WordPress 2.2).

[link\_rating](#reference/hooks/link_rating) : applied to the link rating number by the `get_linkrating` function.

[link\_title](#reference/hooks/link_title) : applied to the link title by the `get_links` and `wp_list_bookmarks` functions (as of WordPress 2.2)

[pre\_link\_description](#reference/hooks/pre_link_description) : applied to the link description prior to saving in the database.

[pre\_link\_image](#reference/hooks/pre_link_image) : applied to the link image prior to saving in the database.

[pre\_link\_name](#reference/hooks/pre_link_name) : applied to the link name prior to saving in the database.

[pre\_link\_notes](#reference/hooks/pre_link_notes) : applied to the link notes prior to saving in the database.

[pre\_link\_rel](#reference/hooks/pre_link_rel) : applied to the link relation information prior to saving in the database.

[pre\_link\_rss](#reference/hooks/pre_link_rss) : applied to the link RSS URL prior to saving in the database.

[pre\_link\_target](#reference/hooks/pre_link_target) : applied to the link target information prior to saving in the database.

[pre\_link\_url](#reference/hooks/pre_link_url) : applied to the link URL prior to saving in the database.

## Blog Information and Option Filters

[all\_options](#reference/hooks/all_options) : applied to the option list retrieved from the database by the `get_alloptions` function.

[all\_plugins](#reference/hooks/all_plugins) : applied to the list of plugins retrieved for display in the plugins list table.

[bloginfo](#reference/hooks/bloginfo) : applied to the blog option information retrieved from the database by the `bloginfo` function, after first retrieving the information with the `get_bloginfo` function. A second argument `$show` gives the name of the bloginfo option that was requested. Note that `bloginfo("url")`, `bloginfo("directory")` and `bloginfo("home")` do *not* use this filtering function (see `bloginfo_url`).

[bloginfo\_rss](#reference/hooks/bloginfo_rss) : applied to the blog option information by function `get_bloginfo_rss` (which is also called from `bloginfo_rss`), after first retrieving the information with the `get_bloginfo` function, stripping out HTML tags, and converting characters appropriately. A second argument `$show` gives the name of the bloginfo option that was requested.

[bloginfo\_url](#reference/hooks/bloginfo_url) : applied to the the output of `bloginfo("url")`, `bloginfo("directory")` and `bloginfo("home")` before returning the information.

[loginout](#reference/hooks/loginout) : applied to the HTML link for logging in and out (generally placed in the sidebar) generated by the `wp_loginout` function.

[lostpassword\_url](#reference/hooks/lostpassword_url) : applied to the URL that allows users to reset their passwords.

[option\_(option name)](#reference/hooks/option_(option_name)) : applied to the option value retrieved from the database by the `get_option` function, after unserializing (which decodes array-based options). To use this filter, you will need to add filters for specific options names, such as “option\_foo” to filter the output of `get_option("foo")`.

[pre\_get\_space\_used](#reference/hooks/pre_get_space_used): applied to the [`get_space_used()`](#reference/functions/get_space_used) function to provide an alternative way of displaying storage space used. Returning false from this filter will revert to default display behavior (used [wp\_upload\_dir()](#reference/functions/wp_upload_dir) directory space in megabytes).

[pre\_option\_(option name)](#reference/hooks/pre_option_(option_name)) : applied to the option value retrieved from the database by the `get_alloptions` function, after unserializing (which decodes array-based options). To use this filter, you will need to add filters for specific options names, such as “pre\_option\_foo” to filter the option “foo”.

[pre\_update\_option\_(option name)](#reference/hooks/pre_update_option_(option_name)) : applied the option value before being saving to the database to allow overriding the value to be stored. To use this filter, you will need to add filters for specific options names, such as “pre\_update\_option\_foo” to filter the option “foo”.

[register](#reference/hooks/register) : applied to the sidebar link created for the user to register (if allowed) or visit the admin panels (if already logged in) by the `wp_register` function.

[upload\_dir](#reference/hooks/upload_dir) : applied to the directory to be used for uploads calculated by the `wp_upload_dir` function. Filter function argument is an array with components “dir” (the upload directory path), “url” (the URL of the upload directory), and “error” (which you can set to true if you want to generate an error).

[upload\_mimes](#reference/hooks/upload_mimes) : allows a filter function to return a list of MIME types for uploads, if there is no MIME list input to the `wp_check_filetype` function. Filter function argument is an associated list of MIME types whose component names are file extensions (separated by vertical bars) and values are the corresponding MIME types.

## General Text Filters

[attribute\_escape](#reference/hooks/attribute_escape) : applied to post text and other content by the `attribute_escape` function, which is called in many places in WordPress to change certain characters into HTML attributes before sending to the browser.

[js\_escape](#reference/hooks/js_escape) : applied to JavaScript code before sending to the browser in the `js_escape` function.

[sanitize\_key](#reference/hooks/sanitize_key) : applied to key before using it for your settings, field, or other needs, generated by `sanitize_key` function

## Administrative Filters

The filters in this section are related to the administration screens of  
WordPress, including content editing screens.

[admin\_user\_info\_links](#reference/hooks/admin_user_info_links) : applied to the user profile and info links in the WordPress admin quick menu.

[autosave\_interval](#reference/hooks/autosave_interval) : applied to the interval for auto-saving posts.

[bulk\_actions](#reference/hooks/bulk_actions) : applied to an array of bulk items in admin bulk action dropdowns.

[bulk\_post\_updated\_messages](#reference/hooks/bulk_post_updated_messages) : applied to an array of bulk action updated messages.

[cat\_rows](#reference/hooks/cat_rows) : applied to the category rows HTML generated for managing categories in the admin menus.

[comment\_edit\_pre](#reference/hooks/comment_edit_pre) : applied to comment content prior to display in the editing screen.

[comment\_edit\_redirect](#reference/hooks/comment_edit_redirect) : applied to the redirect location after someone edits a comment in the admin menus. Filter function arguments: redirect location, comment ID.

[comment\_moderation\_subject](#reference/hooks/comment_moderation_subject) : applied to the mail subject before sending email notifying the administrator of the need to moderate a new comment. Filter function arguments: mail subject, comment ID..

[comment\_moderation\_text](#reference/hooks/comment_moderation_text) : applied to the body of the mail message before sending email notifying the administrator of the need to moderate a new comment. Filter function arguments: mail body text, comment ID.

[comment\_notification\_headers](#reference/hooks/comment_notification_headers) : applied to the mail headers before sending email notifying the post author of a new comment. Filter function arguments: mail header text, comment ID.

[comment\_notification\_subject](#reference/hooks/comment_notification_subject) : applied to the mail subject before sending email notifying the post author of a new comment. Filter function arguments: mail subject, comment ID.

[comment\_notification\_text](#reference/hooks/comment_notification_text) : applied to the body of the mail message before sending email notifying the post author of a new comment. Filter function arguments: mail body text, comment ID.

[comment\_row\_actions](#reference/hooks/comment_row_actions) : applied to the list of action links under each comment row (like Reply, Quick Edit, Edit).

[cron\_request](#reference/hooks/cron_request) : Allows filtering of the URL, key and arguments passed to [wp\_remote\_post()](#reference/functions/wp_remote_post) in [spawn\_cron()](#reference/functions/spawn_cron).

[cron\_schedules](#reference/hooks/cron_schedules) : applied to an empty array to allow a plugin to generate cron schedules in the `wp_get_schedules` function.

[custom\_menu\_order](#reference/hooks/custom_menu_order) : used to activate the ‘menu\_order’ filter.

[default\_content](#reference/hooks/default_content) : applied to the default post content prior to opening the editor for a new post.

[default\_excerpt](#reference/hooks/default_excerpt) : applied to the default post excerpt prior to opening the editor for a new post.

[default\_title](#reference/hooks/default_title) : applied to the default post title prior to opening the editor for a new post.

[editable\_slug](#reference/hooks/editable_slug) : applied to the post, page, tag or category slug by the `get_sample_permalink` function.

[format\_to\_edit](#reference/hooks/format_to_edit) : applied to post content, excerpt, title, and password by the `format_to_edit` function, which is called by the admin menus to set up a post for editing. Also applied to when editing comments in the admin menus.

[format\_to\_post](#reference/hooks/format_to_post) : applied to post content by the `format_to_post` function, which is not used in WordPress by default.

[manage\_edit-${post\_type}\_columns](#reference/hooks/manage_edit-post_type_columns) : applied to the list of columns to print on the manage posts screen for a custom post type. Filter function argument/return value is an associative array where the element key is the name of the column, and the value is the header text for that column. See also action [`manage_${post_type}_posts_custom_column`](#reference/hooks/manage_post_type_posts_custom_column), which puts the column information into the edit screen.

[manage\_link-manager\_columns](#reference/hooks/manage_link-manager_columns) : was `manage_link_columns` until wordpress 2.7. applied to the list of columns to print on the blogroll management screen. Filter function argument/return value is an associative list where the element key is the name of the column, and the value is the header text for that column. See also action [`manage_link_custom_column`](#reference/hooks/manage_posts_custom_column), which puts the column information into the edit screen.

[manage\_posts\_columns](#reference/hooks/manage_posts_columns) : applied to the list of columns to print on the manage posts screen. Filter function argument/return value is an associative array where the element key is the name of the column, and the value is the header text for that column. See also action [`manage_posts_custom_column`](#reference/hooks/manage_posts_custom_column), which puts the column information into the edit screen. (see [Scompt’s tutorial](http://scompt.com/archives/2007/10/20/adding-custom-columns-to-the-wordpress-manage-posts-screen) for examples and use.)

[manage\_pages\_columns](#reference/hooks/manage_pages_columns) : applied to the list of columns to print on the manage pages screen. Filter function argument/return value is an associative array where the element key is the name of the column, and the value is the header text for that column. See also action `manage_pages_custom_column`, which puts the column information into the edit screen.

[manage\_users\_columns](#reference/hooks/manage_users_columns)

[manage\_users\_custom\_column](#reference/hooks/manage_users_custom_column)

[manage\_users\_sortable\_columns](#reference/hooks/manage_users_sortable_columns)

[media\_row\_actions](#reference/hooks/media_row_actions) : applied to the list of action links under each file in the Media Library (like View, Edit).

[menu\_order](#reference/hooks/menu_order) : applied to the array for the admin menu order. Must be activated with the ‘custom\_menu\_order’ filter before.

[nonce\_life](#reference/hooks/nonce_life) : applied to the lifespan of a [nonce](/Glossary#Nonce) to generate or verify the nonce. Can be used to generate nonces which expire earlier. The value returned by the filter should be in seconds.

[nonce\_user\_logged\_out](#reference/hooks/nonce_user_logged_out) : applied to the current user ID used to generate or verify a [nonce](/Glossary#Nonce) when the user is logged out.

[plugin\_row\_meta](#reference/hooks/plugin_row_meta) : add additional links below each plugin on the plugins page.

[postmeta\_form\_limit](#reference/hooks/postmeta_form_limit) : applied to the number of post-meta information items shown on the post edit screen.

[post\_row\_actions](#reference/hooks/post_row_actions) : applied to the list of action links (like Quick Edit, Edit, View, Preview) under each post in the Posts &gt; All Posts section.

[post\_updated\_messages](#reference/hooks/post_updated_messages) : applied to the array storing user-visible administrative messages when working with posts, pages and custom post types. This filter is used to change the text of said messages, not to trigger them. See “customizing the messages” in the [register\_post\_type](#reference/functions/register_post_type) documentation.

[pre\_upload\_error](#reference/hooks/pre_upload_error) : applied to allow a plugin to create an XMLRPC error for uploading files.

[preview\_page\_link](#reference/hooks/preview_page_link) : applied to the link on the page editing screen that shows the page preview at the bottom of the screen.

[preview\_post\_link](#reference/hooks/preview_post_link) : applied to the link on the post editing screen that shows the post preview at the bottom of the screen.

[richedit\_pre](#reference/hooks/richedit_pre) : applied to post content by the `wp_richedit_pre` function, before displaying in the rich text editor.

[schedule\_event](#reference/hooks/schedule_event) : applied to each recurring and single event as it is added to the cron schedule.

[set-screen-option](#reference/hooks/set-screen-option) : Filter a screen option value before it is set.

[show\_password\_fields](#reference/hooks/show_password_fields) : applied to the true/false variable that controls whether the user is presented with the opportunity to change their password on the user profile screen (true means to show password changing fields; false means don’t).

[terms\_to\_edit](#reference/hooks/terms_to_edit) : applied to the CSV of terms (for each taxonomy) that is used to show which terms are attached to the post.

[the\_editor](#reference/hooks/the_editor) : applied to the HTML DIV created to house the rich text editor, prior to printing it on the screen. Filter function argument/return value is a string.

[user\_can\_richedit](#reference/hooks/user_can_richedit) : applied to the calculation of whether the user’s browser has rich editing capabilities, and whether the user wants to use the rich editor, in the `user_can_richedit` function. Filter function argument and return value is true/false if the current user can/cannot use the rich editor.

[user\_has\_cap](#reference/hooks/user_has_cap) : applied to a user’s capabilities list in the `WP_User->has_cap` function (which is called by the `current_user_can` function). Filter function arguments are the capabilities list to be filtered, the capability being questioned, and the argument list (which has things such as the post ID if the capability is to edit posts, etc.)

[wp\_handle\_upload\_prefilter](#reference/hooks/wp_handle_upload_prefilter) : applied to the upload information when uploading a file. Filter function argument: array which represents a single element of $\_FILES.

[wp\_handle\_upload](#reference/hooks/wp_handle_upload) : applied to the upload information when uploading a file. Filter function argument: array with elements “file” (file name), “url”, “type”.

[wp\_revisions\_to\_keep](#reference/hooks/wp_revisions_to_keep) : alters how many revisions are kept for a given post. Filter function arguments: number representing desired revisions saved (default is unlimited revisions), the post object.

[wp\_terms\_checklist\_args](#reference/hooks/wp_terms_checklist_args) : applied to arguments of the [wp\_terms\_checklist()](#reference/functions/wp_terms_checklist) function. Filter function argument: array of checklist arguments, post ID.

[wp\_upload\_tabs](#reference/hooks/wp_upload_tabs) : applied to the list of custom tabs to display on the upload management admin screen. Use action `upload_files_(tab)` to display a page for your custom tab.

[media\_upload\_tabs](#reference/hooks/media_upload_tabs) : applied to the list of custom tabs to display on the upload management admin screen. Use action `upload_files_(tab)` to display a page for your custom tab.

[plugin\_action\_links\_(plugin file name)](#reference/hooks/plugin_action_links_(plugin_file_name)) : applied to the list of links to display on the plugins page (beside the activate/deactivate links).

[views\_edit-post](#reference/hooks/views_edit-post) : applied to the list posts eg All (30) | Published (22) | Draft (5) | Pending (2) | Trash (1)

## Rich Text Editor Filters

These filters modify the configuration of the rich text editor, TinyMCE.

[mce\_spellchecker\_languages](#reference/hooks/mce_spellchecker_languages) : applied to the language selection available in the spell checker.

[mce\_buttons, mce\_buttons\_2, mce\_buttons\_3, mce\_buttons\_4](#reference/hooks/mce_buttons,_mce_buttons_2,_mce_buttons_3,_mce_buttons_4) : applied to the rows of buttons for the rich editor toolbar (each is an array of button names).

[mce\_css](#reference/hooks/mce_css) : applied to the CSS file URL for the rich text editor.

[mce\_external\_plugins](#reference/hooks/mce_external_plugins) : applied to the array of external plugins to be loaded by the rich text editor.

[mce\_external\_languages](#reference/hooks/mce_external_languages) : applied to the array of language files loaded by external plugins, allowing them to use the standard translation method (see tinymce/langs/wp-langs.php for reference).

[tiny\_mce\_before\_init](#reference/hooks/tiny_mce_before_init) : applied to the whole init array for the editor.

## Template Filters

This section contains links related to themes, templates, and style  
files.

[locale\_stylesheet\_uri](#reference/hooks/locale_stylesheet_uri) : applied to the locale-specific stylesheet URI returned by the `get_locale_stylesheet_uri` function. Filter function arguments: URI, stylesheet directory URI.

[stylesheet](#reference/hooks/stylesheet) : applied to the stylesheet returned by the `get_stylesheet` function.

[stylesheet\_directory](#reference/hooks/stylesheet_directory) : applied to the stylesheet directory returned by the `get_stylesheet_directory` function. Filter function arguments: stylesheet directory, stylesheet.

[stylesheet\_directory\_uri](#reference/hooks/stylesheet_directory_uri) : applied to the stylesheet directory URI returned by the `get_stylesheet_directory_uri` function. Filter function arguments: stylesheet directory URI, stylesheet.

[stylesheet\_uri](#reference/hooks/stylesheet_uri) : applied to the stylesheet URI returned by the `get_stylesheet_uri` function. Filter function arguments: stylesheet URI, stylesheet.

[template](#reference/hooks/template) : applied to the template returned by the `get_template` function.

[template\_directory](#reference/hooks/template_directory) : applied to the template directory returned by the `get_template_directory` function. Filter function arguments: template directory, template.

[template\_directory\_uri](#reference/hooks/template_directory_uri) : applied to the template directory URI returned by the `get_template_directory_uri` function. Filter function arguments: template directory URI, template.

[theme\_root](#reference/hooks/theme_root) : applied to the theme root directory (normally wp-content/themes) returned by the `get_theme_root` function.

[theme\_root\_uri](#reference/hooks/theme_root_uri) : applied to the theme root directory URI returned by the `get_theme_root_uri` function. Filter function arguments: URI, site URL.

You can also replace individual template files from your theme, by using  
the following filter hooks. See also the  
[`template_redirect`](#reference/hooks/template_redirect)  
action hook. Each of these filters takes as input the path to the  
corresponding template file in the current theme. A plugin can modify  
the file to be used by returning a new path to a template file.

[404\_template](#reference/hooks/404_template) :  
[archive\_template](#reference/hooks/archive_template) : You can use this for example to enforce a specific template for a custom post type archive. This way you can keep all the code in a plugin.  
[attachment\_template](#reference/hooks/attachment_template) :  
[author\_template](#reference/hooks/author_template) :  
[category\_template](#reference/hooks/category_template) :  
[comments\_popup\_template](#reference/hooks/comments_popup_template) :  
[comments\_template](#reference/hooks/comments_template) : The “comments\_template” filter can be used to load a custom template form a plugin which replace the themes default comment template.  
[date\_template](#reference/hooks/date_template) :  
[home\_template](#reference/hooks/home_template) :  
[page\_template](#reference/hooks/page_template) :  
[paged\_template](#reference/hooks/paged_template) :  
[search\_template](#reference/hooks/search_template) :  
[single\_template](#reference/hooks/single_template) : You can use this for example to enforce a specific template for a custom post type. This way you can keep all the code in a plugin.  
[shortcut\_link](#reference/hooks/shortcut_link) : applied to the “Press This” bookmarklet link.  
[template\_include](#reference/hooks/template_include) :  
[wp\_nav\_menu\_args](#reference/hooks/wp_nav_menu_args) : applied to the arguments of the `wp_nav_menu` function.  
[wp\_nav\_menu\_items](#reference/hooks/wp_nav_menu_items) : Filter the HTML list content for navigation menus.

### Kubrick Filters

These filters were present in the pre-3.0 default theme kubrick.

[kubrick\_header\_color](#reference/hooks/kubrick_header_color) : applied to the color for the header of the kubrick theme.

[kubrick\_header\_display](#reference/hooks/kubrick_header_display) : applied to the display option for the header of the kubrick theme.

[kubrick\_header\_image](#reference/hooks/kubrick_header_image) : applied to the header image file for the kubrick theme.

## Registration &amp; Login Filters

[authenticate](#reference/hooks/authenticate) : allows basic authentication to be performed on login based on username and password.

[registration\_errors](#reference/hooks/registration_errors) : applied to the list of registration errors generated while registering a user for a new account.

[user\_registration\_email](#reference/hooks/user_registration_email) : applied to the user’s email address read from the registration page, prior to trying to register the person as a new user.

[validate\_username](#reference/hooks/validate_username) : applied to the validation result on a new user name. Filter function arguments: valid (true/false), user name being validated.

[wp\_authenticate\_user](#reference/hooks/wp_authenticate_user) : applied when a user attempted to log in, after WordPress validates username and password, but before validation errors are checked.

## Redirect/Rewrite Filters

These advanced filters relate to WordPress’s handling of rewrite rules.

[allowed\_redirect\_hosts](#reference/hooks/allowed_redirect_hosts) : applied to the list of host names deemed safe for redirection. wp-login.php uses this to defend against a dangerous ‘redirect\_to’ request parameter

[author\_rewrite\_rules](#reference/hooks/author_rewrite_rules) : applied to the author-related rewrite rules after they are generated.

[category\_rewrite\_rules](#reference/hooks/category_rewrite_rules) : applied to the category-related rewrite rules after they are generated.

[comments\_rewrite\_rules](#reference/hooks/comments_rewrite_rules) : applied to the comment-related rewrite rules after they are generated.

[date\_rewrite\_rules](#reference/hooks/date_rewrite_rules) : applied to the date-related rewrite rules after they are generated.

[mod\_rewrite\_rules](#reference/hooks/mod_rewrite_rules) : applied to the list of rewrite rules given to the user to put into their .htaccess file when they change their permalink structure. (Note: replaces deprecated filter `rewrite_rules`.)

[page\_rewrite\_rules](#reference/hooks/page_rewrite_rules) : applied to the page-related rewrite rules after they are generated.

[post\_rewrite\_rules](#reference/hooks/post_rewrite_rules) : applied to the post-related rewrite rules after they are generated.

[redirect\_canonical](#reference/hooks/redirect_canonical) : Can be used to cancel a “canonical” URL redirect. Accepts 2 parameters: `$redirect_url`, `$requested_url`. To cancel the redirect return **`FALSE`**, to allow the redirect return `$redirect_url`

[rewrite\_rules\_array](#reference/hooks/rewrite_rules_array) : applied to the entire rewrite rules array after it is generated.

[root\_rewrite\_rules](#reference/hooks/root_rewrite_rules) : applied to the root-level rewrite rules after they are generated.

[search\_rewrite\_rules](#reference/hooks/search_rewrite_rules) : applied to the search-related rewrite rules after they are generated.

[wp\_redirect](#reference/hooks/wp_redirect) : applied to a redirect URL by the default `wp_redirect` function. Filter function arguments: URL, HTTP status code.

[wp\_redirect\_status](#reference/hooks/wp_redirect_status) : applied to the HTTP status code when redirecting by the default `wp_redirect` function. Filter function arguments: HTTP status code, URL.

## [WP\_Query](#reference/classes/wp_query) Filters

These are filters run by the [WP\_Query object](#reference/classes/wp_query) in the course of building  
and executing a query to retrieve posts. See also [\#Advanced WordPress Filters](/#Advanced_WordPress_Filters) for queries relating  
to users, meta values, and more generic queries.

[found\_posts](#reference/hooks/found_posts) : applied to the list of posts, just after querying from the database.

[found\_posts\_query](#reference/hooks/found_posts_query) : after the list of posts to display is queried from the database, WordPress selects rows in the query results. This filter allows you to do something other than `SELECT FOUND_ROWS()` at that step.

[post\_limits](#reference/hooks/post_limits) : applied to the `LIMIT` clause of the query that returns the post array.

[posts\_clauses](#reference/hooks/posts_clauses) : applied to the entire SQL query, divided into a keyed array for each clause type, that returns the post array. Can be easier to work with than `posts_request`.

[posts\_distinct](#reference/hooks/posts_distinct) : allows a plugin to add a `DISTINCTROW` clause to the query that returns the post array.

[posts\_fields](#reference/hooks/posts_fields) : applied to the field list for the query that returns the post array.

[posts\_groupby](#reference/hooks/posts_groupby) : applied to the `GROUP BY` clause of the query that returns the post array (normally empty).

[posts\_join](#reference/hooks/posts_join) : applied to the `JOIN` clause of the query that returns the post array. This is typically used to add a table to the `JOIN`, in combination with the `posts_where` filter.

[posts\_join\_paged](#reference/hooks/posts_join_paged) : applied to the `JOIN` clause of the query that returns the post array, after the paging is calculated (though paging does not affect the JOIN, so this is actually equivalent to `posts_join`).

[posts\_orderby](#reference/hooks/posts_orderby) : applied to the `ORDER BY` clause of the query that returns the post array.

[posts\_request](#reference/hooks/posts_request) : applied to the entire SQL query that returns the post array, just prior to running the query.

[posts\_results](#reference/hooks/posts_results) : allows you to manipulate the resulting array returned from the query.

[posts\_search](#reference/hooks/posts_search) : applied to the search SQL that is used in the `WHERE` clause of [WP\_Query](#reference/classes/wp_query).

[posts\_where](#reference/hooks/posts_where) : applied to the `WHERE` clause of the query that returns the post array.

[posts\_where\_paged](#reference/hooks/posts_where_paged) : applied to the `WHERE` clause of the query that returns the post array, after the paging is calculated (though paging does not affect the WHERE, so this is actually equivalent to `posts_where`).

[the\_posts](#reference/hooks/the_posts) : applied to the list of posts queried from the database after minimal processing for permissions and draft status on single-post pages.

## Media Filters

This section contains media filters that are used to integrated  
different types of media.

[editor\_max\_image\_size](#reference/hooks/editor_max_image_size) :

[image\_downsize](#reference/hooks/image_downsize) :

[get\_image\_tag\_class](#reference/hooks/get_image_tag_class) :

[get\_image\_tag](#reference/hooks/get_image_tag) :

[image\_resize\_dimensions](#reference/hooks/image_resize_dimensions) :

[intermediate\_image\_sizes](#reference/hooks/intermediate_image_sizes) :

[icon\_dir](#reference/hooks/icon_dir) :

[wp\_get\_attachment\_image\_attributes](#reference/hooks/wp_get_attachment_image_attributes) :

[img\_caption\_shortcode](#reference/hooks/img_caption_shortcode) :

[post\_gallery](#reference/hooks/post_gallery) :

[use\_default\_gallery\_style](#reference/hooks/use_default_gallery_style) :

[gallery\_style](#reference/hooks/gallery_style) :

[(adjacent)\_image\_link](#reference/hooks/(adjacent)_image_link) :

[embed\_defaults](#reference/hooks/embed_defaults) :

[load\_default\_embeds](#reference/hooks/load_default_embeds) :

[embed\_oembed\_html](#reference/hooks/embed_oembed_html) :

[embed\_googlevideo](#reference/hooks/embed_googlevideo) :

[oembed\_result](#reference/hooks/oembed_result) :

[upload\_size\_limit](#reference/hooks/upload_size_limit) :

[wp\_image\_editors](#reference/hooks/wp_image_editors) :

[plupload\_default\_settings](#reference/hooks/plupload_default_settings) :

[plupload\_default\_params](#reference/hooks/plupload_default_params) :

[image\_size\_names\_choose](#reference/hooks/image_size_names_choose) :

[wp\_prepare\_attachment\_for\_js](#reference/hooks/wp_prepare_attachment_for_js) :

[media\_upload\_tabs](#reference/hooks/media_upload_tabs) :

[disable\_captions](#reference/hooks/disable_captions) :

[media\_view\_settings](#reference/hooks/media_view_settings) :

[media\_view\_strings](#reference/hooks/media_view_strings) :

[wp\_handle\_upload\_prefilter](#reference/hooks/wp_handle_upload_prefilter) :

## Advanced WordPress Filters

This section contains advanced filters related to internationalization,  
miscellaneous queries, and other fundamental WordPress functions.

[create\_user\_query](#reference/hooks/create_user_query) : applied to the query used to save a new user’s information to the database, just prior to running the query.

[get\_editable\_authors](#reference/hooks/get_editable_authors) : applied to the list of post authors that the current user is authorized to edit in the `get_editable_authors` function.

[get\_next\_post\_join](#reference/hooks/get_next_post_join) : in function `get_next_post` (which finds the post after the currently-displayed post), applied to the SQL JOIN clause (which normally joins to the category table if user is viewing a category archive). Filter function arguments: JOIN clause, stay in same category (true/false), list of excluded categories.

[get\_next\_post\_sort](#reference/hooks/get_next_post_sort) : in function `get_next_post` (which finds the post after the currently-displayed post), applied to the SQL ORDER BY clause (which normally orders by post date in ascending order with a limit of 1 post). Filter function arguments: ORDER BY clause.

[get\_next\_post\_where](#reference/hooks/get_next_post_where) : in function `get_next_post` (which finds the post after the currently-displayed post), applied to the SQL WHERE clause (which normally looks for the next dated published post). Filter function arguments: WHERE clause, stay in same category (true/false), list of excluded categories.

[get\_previous\_post\_join](#reference/hooks/get_previous_post_join) : in function `get_previous_post` (which finds the post before the currently-displayed post), applied to the SQL JOIN clause (which normally joins to the category table if user is viewing a category archive). Filter function arguments: join clause, stay in same category (true/false), list of excluded categories.

[get\_previous\_post\_sort](#reference/hooks/get_previous_post_sort) : in function `get_previous_post` (which finds the post before the currently-displayed post), applied to the SQL ORDER BY clause (which normally orders by post date in descending order with a limit of 1 post). Filter function arguments: ORDER BY clause.

[get\_previous\_post\_where](#reference/hooks/get_previous_post_where) : in function `get_previous_post` (which finds the post before the currently-displayed post), applied to the SQL WHERE clause (which normally looks for the previous dated published post). Filter function arguments: WHERE clause, stay in same category (true/false), list of excluded categories.

[gettext](#reference/hooks/gettext) : applied to the translated text by the [`translation()`](#reference/functions/translation) function (which is called by functions like the [`__()`](#reference/functions/_2) and [`_e()`](#reference/functions/_e) internationalization functions ). Filter function arguments: translated text, untranslated text and the text domain. Gets applied even if internationalization is not in effect or if the text domain has not been loaded.

[override\_load\_textdomain](#reference/hooks/override_load_textdomain)

[get\_meta\_sql](#reference/hooks/get_meta_sql) : in function `WP_Meta_Query::get_sql` (which generates SQL clauses to be appended to a main query for advanced meta queries.), applied to the SQL JOIN and WHERE clause generated by the advanced meta query. Filter function arguments: array( compact( ‘join’, ‘where’ ), $this-&gt;queries, $type, $primary\_table, $primary\_id\_column, $context )

[get\_others\_drafts](#reference/hooks/get_others_drafts) : applied to the query that selects the other users’ drafts for display in the admin menus.

[get\_users\_drafts](#reference/hooks/get_users_drafts) : applied to the query that selects the users’ drafts for display in the admin menus.

[locale](#reference/hooks/locale) : applied to the locale by the `get_locale` function.

[query](#reference/hooks/query) : applied to all queries (at least all queries run after plugins are loaded).

[query\_string](#reference/hooks/query_string) : deprecated – use `query_vars` or `request` instead.  
[query\_vars](#reference/hooks/query_vars) : applied to the list of public WordPress query variables before the SQL query is formed. Useful for removing extra permalink information the plugin has dealt with in some other manner.

[request](#reference/hooks/request) : like `query_vars`, but applied after “extra” and private query variables have been added.

[excerpt\_length](#reference/hooks/excerpt_length) : Defines the length of a single-post excerpt.

[excerpt\_more](#reference/hooks/excerpt_more) : Defines the more string at the end of the excerpt.

[post\_edit\_form\_tag](#reference/hooks/post_edit_form_tag) : Allows you to append code to the form tag in the default post/page editor.

[update\_user\_query](#reference/hooks/update_user_query) : applied to the update query used to update user information, prior to running the query.

[uploading\_iframe\_src](#reference/hooks/uploading_iframe_src) (removed since WP 2.5): applied to the HTML src tag for the uploading iframe on the post and page editing screens.

[xmlrpc\_methods](#reference/hooks/xmlrpc_methods) : applied to list of defined XMLRPC methods for the XMLRPC server.

[wp\_mail\_from](#reference/hooks/wp_mail_from) : applied before any mail is sent by the wp\_mail function. Supplied value is the calculated from address which is wordpress at the current hostname (set by $\_SERVER\[‘SERVER\_NAME’\]). The filter should return an email address or name/email combo in the form “user@example.com” or “Name \\&lt;user@example.com&gt;” (without the quotes!).

[wp\_mail\_from\_name](#reference/hooks/wp_mail_from_name) : applied before any mail is sent by the wp\_mail function. The filter should return a name string to be used as the email from name.

[update\_(meta\_type)\_metadata](#reference/hooks/update_(meta_type)_metadata) : applied before a metadata gets updated. For example if a user metadata gets updated the hook would be ‘update\_user\_metadata’

## Widgets

This section contains filters added by widgets present in WordPress  
core.

[dynamic\_sidebar\_params](#reference/hooks/dynamic_sidebar_params) : applied to the arguments passed to the widgets\_init function in the WordPress widgets.

[widget\_archives\_dropdown\_args](#reference/hooks/widget_archives_dropdown_args) : applied to the arguments passed to the [`wp_get_archives()`](#reference/functions/wp_get_archives) function in the WordPress Archives widget.

[widget\_categories\_args](#reference/hooks/widget_categories_args) : applied to the arguments passed to the [`wp_list_categories()`](#reference/functions/wp_list_categories) function in the WordPress Categories widget.

[widget\_links\_args](#reference/hooks/widget_links_args) : applied to the arguments passed to the [`wp_list_bookmarks()`](#reference/functions/wp_list_bookmarks) function in the WordPress Links widget.

[widget\_nav\_menu\_args](#reference/hooks/widget_nav_menu_args) : applied to the arguments passed to the [`wp_nav_menu()`](#reference/functions/wp_nav_menu) function in the WordPress Custom Menu widget.

[widget\_pages\_args](#reference/hooks/widget_pages_args) : applied to the arguments passed to the [`wp_list_pages()`](#reference/functions/wp_list_pages) function in the WordPress Pages widget.

[widget\_tag\_cloud\_args](#reference/hooks/widget_tag_cloud_args) : applied to the arguments passed to the [`wp_tag_cloud()`](#reference/functions/wp_tag_cloud) function in the WordPress Pages widget.

[widget\_text](#reference/hooks/widget_text) : applied to the widget text of the WordPress Text widget. May also apply to some third party widgets as well.

[widget\_title](#reference/hooks/widget_title) : applied to the widget title of any user editable WordPress Widget. May also apply to some third party widgets as well.

## Admin Bar

This section contains filters added by the Admin Bar added in WordPress  
3.1.0.

[wp\_admin\_bar\_class](#reference/hooks/wp_admin_bar_class) : allows changing the default ‘[WP\_Admin\_Bar](#reference/classes/wp_admin_bar)’ class in the [`_wp_admin_bar_init()`](#reference/functions/_wp_admin_bar_init) function in .

## Further Reading

- [Hooks Database](#reference/hooks) – documentation for all hooks in the official WordPress Code  
    Reference.

---

# Action Reference <a name="apis/hooks/action-reference" />

Source: https://developer.wordpress.org/apis/hooks/action-reference/

This is a (hopefully) comprehensive list of action hooks available in WordPress version 2.1 and above. For more information:

- To learn more about what filter and action hooks are, see [Plugin API](#plugins/hooks).
- To learn about writing plugins in general, see [Plugin Handbook](#plugins).
- For a reference list of filter hooks, see [Plugin API/Filter Reference](#apis/hooks/filter-reference).

*(If you want to add to or clarify this documentation, please follow the style of the existing entries. Describe when the action runs, and if the action function takes arguments, describe the arguments.)*

## Actions Run During a Typical Request

These actions are called when a logged-in user opens the home page, this list may be outdated. This list may show only the first time each action is called, and in many cases no function is hooked to the action. Themes and plugins can cause actions to be called multiple times and at differing times during a request. As proof of this, you can see action calls specific to the [Twenty Eleven](https://wordpress.org/extend/themes/twentyeleven) theme on this list. Cron tasks may also fire when a user visits the site, adding additional action calls. This list should be viewed as a guide line or approximation of WordPress action execution order, and not a concrete specification.

Actions are called with the function [`do_action()`](#reference/functions/do_action), except those marked (ref array), which are called with the function [`do_action_ref_array()`](#reference/functions/do_action_ref_array).

|  |  |
|---|---|
| [muplugins\_loaded](#reference/hooks/muplugins_loaded) | After must-use plugins are loaded. |
| [registered\_taxonomy](#reference/hooks/registered_taxonomy) | For category, post\_tag, *etc.* |
| [registered\_post\_type](#reference/hooks/registered_post_type) | For post, page, *etc.* |
| [plugins\_loaded](#reference/hooks/plugins_loaded) | After active plugins and before pluggable functions are loaded. |
| [sanitize\_comment\_cookies](#reference/hooks/sanitize_comment_cookies) | When comment cookies are sanitized. |
| [setup\_theme](#reference/hooks/setup_theme) | Before the theme is loaded. |
| [load\_textdomain](#reference/hooks/load_textdomain) | For the `default` domain |
| [after\_setup\_theme](#reference/hooks/after_setup_theme) | Generally used to initialize theme settings/options. This is the **first action hook available to themes**, triggered immediately after the active theme’s *functions.php* file is loaded. `add_theme_support()` should be called here, since the `init` action hook is too late to add some features. At this stage, the current user is not yet authenticated. |
| [auth\_cookie\_malformed](#reference/hooks/auth_cookie_malformed) |  |
| [auth\_cookie\_valid](#reference/hooks/auth_cookie_valid) |  |
| [set\_current\_user](#reference/hooks/set_current_user) |  |
| [init](#reference/hooks/init) | Typically used by plugins to initialize. The current user is already authenticated by this time. |
| └─ [widgets\_init](#reference/hooks/widgets_init) | Used to register sidebars. Fired at ‘init’ priority 1 (and so before ‘init’ actions with priority ≥ 1!) |
| [register\_sidebar](#reference/hooks/register_sidebar) | For each sidebar and footer area |
| [wp\_register\_sidebar\_widget](#reference/hooks/wp_register_sidebar_widget) | For each widget |
| [wp\_default\_scripts](#reference/hooks/wp_default_scripts) | (ref array) |
| [wp\_default\_styles](#reference/hooks/wp_default_styles) | (ref array) |
| [admin\_bar\_init](#reference/hooks/admin_bar_init) |  |
| [add\_admin\_bar\_menus](#reference/hooks/add_admin_bar_menus) |  |
| [wp\_loaded](#reference/hooks/wp_loaded) | After WordPress is fully loaded |
| [parse\_request](#reference/hooks/parse_request) | Allows manipulation of HTTP request handling (ref array) |
| [send\_headers](#reference/hooks/send_headers) | Allows customization of HTTP headers (ref array) |
| [parse\_query](#reference/hooks/parse_query) | After query variables are set (ref array) |
| [pre\_get\_posts](#reference/hooks/pre_get_posts) | Exposes the query-variables object before a query is executed. (ref array) |
| [posts\_selection](#reference/hooks/posts_selection) | Used by caching plugins. |
| [wp](#reference/hooks/wp) | After WP object is set up (ref array) |
| [template\_redirect](#reference/hooks/template_redirect) | Before determining which template to load. |
| [get\_header](#reference/hooks/get_header) | Before the header template file is loaded. Not relevant for block themes. |
| [wp\_enqueue\_scripts](#reference/hooks/wp_enqueue_scripts) | When scripts and styles are enqueued. |
| twentyeleven\_enqueue\_color\_scheme | (Specific to Twenty Eleven) |
| [wp\_head](#reference/hooks/wp_head) | Used to print scripts or data in the head tag on the front end. |
| [wp\_print\_styles](#reference/hooks/wp_print_styles) | Before styles in the $handles queue are printed. |
| [wp\_print\_scripts](#reference/hooks/wp_print_scripts) | Before scripts in the $handles queue are printed. |
| [get\_search\_form](#reference/hooks/get_search_form) |  |
| [loop\_start](#reference/hooks/loop_start) | (ref array) |
| [the\_post](#reference/hooks/the_post) | (ref array) Allows modification of the post object immediately after query |
| [get\_template\_part\_content](#reference/hooks/get_template_part) | Template part for the content |
| [loop\_end](#reference/hooks/loop_end) | (ref array) |
| [get\_sidebar](#reference/hooks/get_sidebar) | Before the sidebar template file is loaded. |
| [dynamic\_sidebar](#reference/hooks/dynamic_sidebar) | Before a widget’s display callback is called. |
| [get\_search\_form](#reference/hooks/get_search_form) |  |
| [pre\_get\_comments](#reference/hooks/pre_get_comments) | (ref array) |
| [wp\_meta](#reference/hooks/wp_meta) | Before displaying echoed content in the sidebar. |
| [get\_footer](#reference/hooks/get_footer) | Before the footer template file is loaded. Not relevant for block themes. |
| [get\_sidebar](#reference/hooks/get_sidebar) | Before the sidebar template file is loaded. Not relevant for block themes. |
| twentyeleven\_credits | (Specific to Twenty Eleven) |
| [wp\_footer](#reference/hooks/wp_footer) | Before determining which template to load. |
| [wp\_print\_footer\_scripts](#reference/hooks/wp_print_footer_scripts) | When footer scripts are printed. |
| [admin\_bar\_menu](#reference/hooks/admin_bar_menu) | (ref array) |
| [wp\_before\_admin\_bar\_render](#reference/hooks/wp_before_admin_bar_render) | Before the admin bar is rendered. |
| [wp\_after\_admin\_bar\_render](#reference/hooks/wp_after_admin_bar_render) | After the admin bar is rendered. |
| [shutdown](#reference/hooks/shutdown) | Before PHP execution is about to end. |

## Actions Run During an Admin Page Request

These actions are run when a logged-in user opens the [Posts](https://wordpress.org/documentation/article/posts-screen/) page. This list shows only the first time an action is called, and in many cases no function is hooked to the action. Each admin page has a different list of actions depending upon the purpose of the page and the plugins installed. This list should be viewed as a guide line or approximation, and not a concrete specification.

In these actions, `(hookname)` depends on the page. For the Posts page it is *edit.php*, or for a theme’s Background page it is `appearance_page_custom-background`.

Actions are called with the function [`do_action()`](#reference/functions/do_action), except those marked (ref array), which are called with the function [`do_action_ref_array()`](#reference/functions/do_action_ref_array).

|  |  |
|---|---|
| [muplugins\_loaded](#reference/hooks/muplugins_loaded) | After must-use plugins are loaded |
| [registered\_taxonomy](#reference/hooks/registered_taxonomy) | For category, post\_tag, *etc.* |
| [registered\_post\_type](#reference/hooks/registered_post_type) | For post, page, *etc.* |
| [plugins\_loaded](#reference/hooks/plugins_loaded) | After active plugins and pluggable functions are loaded |
| [sanitize\_comment\_cookies](#reference/hooks/sanitize_comment_cookies) |  |
| [setup\_theme](#reference/hooks/setup_theme) |  |
| [load\_textdomain](#reference/hooks/load_textdomain) | For domain `default` |
| [after\_setup\_theme](#reference/hooks/after_setup_theme) | At this stage, the current user is not yet authenticated. |
| [load\_textdomain](#reference/hooks/load_textdomain) | For domain `twentyeleven` |
| [auth\_cookie\_valid](#reference/hooks/auth_cookie_valid) |  |
| [set\_current\_user](#reference/hooks/set_current_user) |  |
| [init](#reference/hooks/init) | Typically used by plugins to initialize. The current user is already authenticated by this time. |
| └─ [widgets\_init](#reference/hooks/widgets_init) | Used to register sidebars. This is fired at ‘init’, with a priority of 1. |
| [register\_sidebar](#reference/hooks/register_sidebar) | For each sidebar |
| [wp\_register\_sidebar\_widget](#reference/hooks/wp_register_sidebar_widget) | For each widget |
| [wp\_default\_scripts](#reference/hooks/wp_default_scripts) | (ref array) |
| [wp\_default\_styles](#reference/hooks/wp_default_styles) | (ref array) |
| [admin\_bar\_init](#reference/hooks/admin_bar_init) |  |
| [add\_admin\_bar\_menus](#reference/hooks/add_admin_bar_menus) |  |
| [wp\_loaded](#reference/hooks/wp_loaded) | After WordPress is fully loaded |
| [auth\_cookie\_valid](#reference/hooks/auth_cookie_valid) |  |
| [auth\_redirect](#reference/hooks/auth_redirect) |  |
| [\_admin\_menu](#reference/hooks/_admin_menu) | See also: [\_user\_admin\_menu](#reference/hooks/_user_admin_menu), [\_network\_admin\_menu](#reference/hooks/_network_admin_menu) |
| [admin\_menu](#reference/hooks/admin_menu) | See also: [user\_admin\_menu](#reference/hooks/user_admin_menu), [network\_admin\_menu](#reference/hooks/network_admin_menu) |
| [admin\_init](#reference/hooks/admin_init) |  |
| [current\_screen](#reference/hooks/current_screen) |  |
| [load-{$page\_hook}](#reference/hooks/load-page_hook) |  |
| [send\_headers](#reference/hooks/send_headers) | Where custom HTTP headers can be added |
| [pre\_get\_posts](#reference/hooks/pre_get_posts) | Exposes the query-variables object before a query is executed. (ref array) |
| [posts\_selection](#reference/hooks/posts_selection) |  |
| [wp](#reference/hooks/wp) | After WP object is set up (ref array) |
| [admin\_xml\_ns](#reference/hooks/admin_xml_ns) |  |
| [admin\_xml\_ns](#reference/hooks/admin_xml_ns) |  |
| [admin\_enqueue\_scripts](#reference/hooks/admin_enqueue_scripts) |  |
| [admin\_print\_styles-{$hook\_suffix}](#reference/hooks/admin_print_styles-hook_suffix) |  |
| [admin\_print\_styles](#reference/hooks/admin_print_styles) |  |
| [admin\_print\_scripts-{$hook\_suffix}](#reference/hooks/admin_print_scripts-hook_suffix) |  |
| [admin\_print\_scripts](#reference/hooks/admin_print_scripts) |  |
| [wp\_print\_scripts](#reference/hooks/wp_print_scripts) |  |
| [admin\_head-{$hook\_suffix}](#reference/hooks/admin_head-hook_suffix) |  |
| [admin\_head](#reference/hooks/admin_head) |  |
| [admin\_menu](#reference/hooks/admin_menu) |  |
| [in\_admin\_header](#reference/hooks/in_admin_header) |  |
| [admin\_notices](#reference/hooks/admin_notices) |  |
| [all\_admin\_notices](#reference/hooks/all_admin_notices) |  |
| [restrict\_manage\_posts](#reference/hooks/restrict_manage_posts) |  |
| [the\_post](#reference/hooks/the_post) | (ref array) |
| [pre\_user\_query](#reference/hooks/pre_user_query) | (ref array) |
| [in\_admin\_footer](#reference/hooks/in_admin_footer) |  |
| [admin\_footer](#reference/hooks/admin_footer) |  |
| [admin\_bar\_menu](#reference/hooks/admin_bar_menu) | (ref array) |
| [wp\_before\_admin\_bar\_render](#reference/hooks/wp_before_admin_bar_render) |  |
| [wp\_after\_admin\_bar\_render](#reference/hooks/wp_after_admin_bar_render) |  |
| [admin\_print\_footer\_scripts](#reference/hooks/admin_print_footer_scripts) |  |
| [admin\_footer-{$hook\_suffix}](#reference/hooks/admin_footer-hook_suffix) | Admin page footer |
| [shutdown](#reference/hooks/shutdown) | PHP execution is about to end |
| [wp\_dashboard\_setup](#reference/hooks/wp_dashboard_setup) | Allows customization of admin Dashboard |

## Post, Page, Attachment, and Category Actions (Admin)

[post\_submitbox\_misc\_actions](#reference/hooks/post_submitbox_misc_actions) : Runs when an editing page gets generated to add some content (eg. fields) to the submit box (where the publish button is shown). No function arguments.

[add\_attachment](#reference/hooks/add_attachment) : Runs when an attached file is first added to the database. Action function arguments: attachment ID.

[add\_category](#reference/hooks/add_category) : Same as `create_category`.

[{$taxonomy}\_add\_form\_fields](#reference/hooks/taxonomy_add_form_fields) : Runs when a taxonomy add form is cerated in admin. Useful to add a field in this form before the submit button. For example `category_add_form_fields`.

[{$taxonomy}\_edit\_form](#reference/hooks/taxonomy_edit_form) : Runs when taxonomy term edit form is created in admin. Useful to add a new field to this form.

[clean\_post\_cache](#reference/hooks/clean_post_cache) : Runs when post cache is cleaned. Action function arguments: post ID. See [`clean_post_cache()`](#reference/functions/clean_post_cache).

[create\_{$taxonomy}](#reference/hooks/create_taxonomy) : Runs when a new taxonomy term is created. Action function arguments: term ID.

[delete\_attachment](#reference/hooks/delete_attachment) : Runs just before an attached file is deleted from the database. Action function arguments: attachment ID. ''(Prior to version 2.8 this hook was triggered after attachment was deleted.)

[delete\_{$taxonomy}](#reference/hooks/delete_taxonomy) : Runs just after a taxonomy term is deleted from the database and its corresponding links/posts are updated to remove the term. Action function arguments: Term ID.

[wp\_trash\_post](#reference/hooks/trash_post) : Runs when a post or page is about to be trashed. Action function arguments: post or page ID.

[trashed\_post](#reference/hooks/trashed_post) : Runs just after a post or page is trashed. Action function arguments: post or page ID.

[untrash\_post](#reference/hooks/untrash_post) : Runs just before undeletion, when a post or page is restored. Action function arguments: post or page ID.

[untrashed\_post](#reference/hooks/untrashed_post) : Runs just after undeletion, when a post or page is restored. Action function arguments: post or page ID.

[before\_delete\_post](#reference/hooks/before_delete_post) : Runs when a post or page is about to be deleted. Comments, attachments and metadata are still available. Action function arguments: post or page ID.

[delete\_post](#reference/hooks/delete_post) : Runs when a post or page is about to be deleted. Comments, attachments and metadata are already deleted. Action function arguments: post or page ID.

[deleted\_post](#reference/hooks/deleted_post) : Runs just after a post or page is deleted. Action function arguments: post or page ID.

[edit\_attachment](#reference/hooks/edit_attachment) : Runs when an attached file is edited/updated to the database. Action function arguments: attachment ID.

[edit\_category](#reference/hooks/edit_category) : Runs when a category is updated/edited, including when a post or blogroll link is added/deleted or its categories are updated (which causes the count for the category to update). Action function arguments: category ID.

[edit\_post](#reference/hooks/edit_post) : Runs when a post or page is updated/edited, including when a comment is added or updated (which causes the comment count for the post to update). Action function arguments: post or page ID.

[pre\_post\_update](#reference/hooks/pre_post_update) : Runs just before a post or page is updated. Action function arguments: post or page ID.

[post\_updated](#reference/hooks/post_updated) : Runs after a post or page is updated. Action function arguments: post or page ID, [WP\_Post](#reference/classes/wp_post) object of the post before the update and after the update.

[transition\_post\_status](#reference/hooks/transition_post_status) : Runs when any post status transition occurs. Action function arguments: `$new_status`, `$old_status`, `$post` object. (See also [Post Status Transitions](https://codex.wordpress.org/Post_Status_Transitions).)

[(old status)*to*(new status)](#reference/hooks/old_status_to_new_status) : Runs when a post changes status from `$old_status` to `$new_status`. Action function arguments: `$post` object. (See also [Post Status Transitions](https://codex.wordpress.org/Post_Status_Transitions).)

[{$new\_status}\_{$post-&gt;post\_type}](#reference/hooks/new_status_post-post_type) : Runs when a post of type `$post_type` is transitioned to `$status` from any other status. Action function arguments: post ID, `$post object`. (See also [Post Status Transitions](https://codex.wordpress.org/Post_Status_Transitions).)

[publish\_post](#reference/hooks/new_status_post-post_type) (not deprecated) : Runs when a post is published, or if it is edited and its status is changed to “published”. This action hook conforms to the [{$new\_status}\_{$post-&gt;post\_type}](#reference/hooks/new_status_post-post_type) action hook type. Action function arguments: post ID, `$post object`. (See also [Post Status Transitions](https://codex.wordpress.org/Post_Status_Transitions).)

[publish\_page](#reference/hooks/new_status_post-post_type) : Runs when a page is published, or if it is edited and its status is changed to “published”. This action hook conforms to the [{$new\_status}\_{$post-&gt;post\_type}](#reference/hooks/new_status_post-post_type) action hook type. Action function arguments: post ID, `$post object`. (See also [Post Status Transitions](https://codex.wordpress.org/Post_Status_Transitions).)

[publish\_phone](#reference/hooks/publish_phone) : Runs just after a post is added via email. Action function argument: post ID.

[save\_post](#reference/hooks/save_post) : Runs whenever a post or page is created or updated, which could be from an import, post/page edit form, xmlrpc, or post by email. Action function arguments: post ID and post object. Runs after the data is saved to the database. Note that post ID may reference a post revision and not the last saved post. Use [`wp_is_post_revision()`](#reference/functions/wp_is_post_revision) to get the ID of the real post.

[updated\_postmeta](#reference/hooks/updated_postmeta) : Runs when a metadata has been updated.

[wp\_insert\_post](#reference/hooks/wp_insert_post) : Same as `save_post`, runs immediately afterwards.

[xmlrpc\_publish\_post](#reference/hooks/xmlrpc_publish_post) : Runs when a post is published via XMLRPC request, or if it is edited via XMLRPC and its status is “published”. Action function arguments: post ID.

### Taxonomy and Terms

[create\_term](#reference/hooks/create_term) : Runs after a new term is created, before the term cache is cleaned.

[created\_term](#reference/hooks/created_term) : Runs after a new term is created, and after the term cache has been cleaned.

[create\_$taxonomy](#reference/hooks/create_$taxonomy) : Runs after a new term is created for a specific taxonomy.

[created\_$taxonomy](#reference/hooks/created_$taxonomy) : Runs after a new term in a specific taxonomy is created, and after the term cache has been cleaned.

[add\_term\_relationship](#reference/hooks/add_term_relationship) (Since version 2.9.0) : Runs before an object-term relationship is added.

[added\_term\_relationship](#reference/hooks/added_term_relationship) (Since version 2.9.0) : Runs after an object-term relationship is added.

[set\_object\_terms](#reference/hooks/set_object_terms) (Since version 2.8.0) : Runs after an object’s terms have been set.

[edit\_terms](#reference/hooks/edit_terms) (Since version 2.9.0) : Runs before the given terms are edited.

[edited\_terms](#reference/hooks/edited_terms) : Runs after saving taxonomy/category change in the database.

[edit\_term\_taxonomy](#reference/hooks/edit_term_taxonomy) : Runs before a term-taxonomy relationship is updated.

[edited\_term\_taxonomy](#reference/hooks/edited_term_taxonomy) : Runs after a term-taxonomy relationship is updated.

[edit\_term\_taxonomies](#reference/hooks/edit_term_taxonomies) (Since version 2.9.0) : Runs before a term to delete’s children are reassigned a parent.

[edited\_term\_taxonomies](#reference/hooks/edited_term_taxonomies) (Since version 2.9.0) : Runs after a term to delete’s children are reassigned a parent.

[edit\_$taxonomy](#reference/hooks/edit_$taxonomy) : Runs after a term is edited for a specific taxonomy.

[edited\_$taxonomy](#reference/hooks/edited_$taxonomy) : Runs after a term in a specific taxonomy is edited, and after the term cache has been cleaned.

[pre\_delete\_term](#reference/hooks/pre_delete_term) (Since version 4.1.0) : Runs before any modifications are made to posts or terms.

[delete\_term\_taxonomy](#reference/hooks/delete_term_taxonomy) (Since version 2.9.0) : Runs before a term taxonomy ID is deleted from database (after having change chidren’s term).

[deleted\_term\_taxonomy](#reference/hooks/deleted_term_taxonomy) (Since version 2.9.0) : Runs after a term taxonomy ID is deleted.

[delete\_term](#reference/hooks/delete_term) (Since version 2.5.0) : Runs after a term is deleted from the database and the cache is cleaned. (Paramètres : $Term\_ID, $Term\_taxonomy\_ID, $Taxonomy\_slug, $already\_deleted\_term)

[delete\_$taxonomy](#reference/hooks/delete_$taxonomy) (Since version 2.3.0) : Runs after a term in a specific taxonomy is deleted. (Paramètres : $Term\_ID, $Term\_taxonomy\_ID, $already\_deleted\_term)

[delete\_term\_relationships](#reference/hooks/delete_term_relationships) (Since version 2.9.0) : Runs before an object-term relationship is deleted.

[deleted\_term\_relationships](#reference/hooks/deleted_term_relationships) (Since version 2.9.0) : Runs after an object-term relationship is deleted.

[clean\_object\_term\_cache](#reference/hooks/clean_object_term_cache) (Since version 2.5.0) : Runs after the object term cache has been cleaned.

[clean\_term\_cache](#reference/hooks/clean_term_cache) (Since version 2.5.0) : Runs after each taxonomy’s term cache has been cleaned.

[split\_shared\_term](#reference/hooks/split_shared_term) (Since version 4.2.0) : Runs after a previously shared taxonomy term is split into two separate terms.

[pre\_term\_{$field}](#reference/hooks/pre_term_field) : Runs before a taxonomy term’s data is saved to the database. For example, `pre_term_description`.

[pre\_{$taxonomy}\_{$field}](#reference/hooks/pre_taxonomy_field) : Runs before a term’s field is saved to the database. For example, `pre_category_description`.

## Comment, Ping, and Trackback Actions

[comment\_closed](#reference/hooks/comment_closed) : Runs when the post is marked as not allowing comments while trying to display comment entry form. Action function argument: post ID.

[comment\_id\_not\_found](#reference/hooks/comment_id_not_found) : Runs when the post ID is not found while trying to display comments or comment entry form. Action function argument: post ID.

[comment\_flood\_trigger](#reference/hooks/comment_flood_trigger) : Runs when a comment flood is detected, just before `wp_die` is called to stop the comment from being accepted. Action function arguments: time of previous comment, time of current comment.

[comment\_{$old\_status}*\_to\_*{$new\_status}](#reference/hooks/comment_old_status_to_new_status) : Runs when a comment status transition occurs. Action function arguments: Comment object.

[comment\_on\_draft](#reference/hooks/comment_on_draft) : Runs when the post is a draft while trying to display a comment entry form or comments. Action function argument: post ID.

[comment\_post](#reference/hooks/comment_post) : Runs just after a comment is saved in the database. Action function arguments: comment ID, approval status (“spam”, or 0/1 for disapproved/approved).

[edit\_comment](#reference/hooks/edit_comment) : Runs after a comment is updated/edited in the database. Action function arguments: comment ID.

[delete\_comment](#reference/hooks/delete_comment) : Fires immediately before a comment is deleted from the database. Action function arguments: comment ID.

[deleted\_comment](#reference/hooks/deleted_comment) : Fires immediately after a comment is deleted from the database. Action function arguments: comment ID.

[trash\_comment](#reference/hooks/trash_comment) : Fires immediately before a comment is sent to the Trash. Action function arguments: comment ID.

[trashed\_comment](#reference/hooks/trashed_comment) : Fires immediately after a comment is sent to Trash. Action function arguments: comment ID.

[untrash\_comment](#reference/hooks/untrash_comment) : Fires immediately before a comment is restored from the Trash. Action function arguments: comment ID.

[untrashed\_comment](#reference/hooks/untrashed_comment) : Fires immediately after a comment is restored from the Trash. Action function arguments: comment ID.

[spam\_comment](#reference/hooks/spam_comment) : Fires immediately before a comment is marked as Spam. Action function arguments: comment ID.

[spammed\_comment](#reference/hooks/spammed_comment) : Fires immediately after a comment is marked as Spam. Action function arguments: comment ID.

[unspam\_comment](#reference/hooks/unspam_comment) : Fires immediately before a comment is unmarked as Spam. Action function arguments: comment ID.

[unspammed\_comment](#reference/hooks/unspammed_comment) : Fires immediately after a comment is unmarked as Spam. Action function arguments: comment ID.

[pingback\_post](#reference/hooks/pingback_post) : Runs when a ping is added to a post. Action function argument: comment ID.

[pre\_ping](#reference/hooks/pre_ping) : Runs before a ping is fully processed. Action function arguments: array of the post links to be processed, and the “pung” setting for the post.

[trackback\_post](#reference/hooks/trackback_post) : Runs when a trackback is added to a post. Action function argument: comment ID.

[wp\_blacklist\_check](#reference/hooks/wp_blacklist_check) : Runs to check whether a comment should be blacklisted. Action function arguments: author name, author email, author URL, comment text, author IP address, author’s user agent (browser). Your function can execute a `wp_die` to reject the comment, or perhaps modify one of the input arguments so that it will contain one of the blacklist keywords set in the WordPress options.

[wp\_insert\_comment](#reference/hooks/wp_insert_comment) : Runs whenever a comment is created.

[wp\_set\_comment\_status](#reference/hooks/wp_set_comment_status) : Runs when the status of a comment changes. Action function arguments: comment ID, status string indicating the new status (“delete”, “approve”, “spam”, “hold”).

## Blogroll Actions

[add\_link](#reference/hooks/add_link) : Runs when a new blogroll link is first added to the database. Action function arguments: link ID.

[delete\_link](#reference/hooks/delete_link) : Runs when a blogroll link is deleted. Action function arguments: link ID.

[edit\_link](#reference/hooks/edit_link) : Runs when a blogroll link is edited. Action function arguments: link ID.

## Feed Actions

[atom\_entry](#reference/hooks/atom_entry) : Runs just after the entry information has been printed (but before closing the entry tag) for each blog entry in an atom feed.

[atom\_head](#reference/hooks/atom_head) : Runs just after the blog information has been printed in an atom feed, just before the first entry.

[atom\_ns](#reference/hooks/atom_ns) : Runs inside the root XML element for an atom feed (to add namespaces).

[commentrss2\_item](#reference/hooks/commentrss2_item) : Runs just after a single comment’s information has been printed in a comment feed (but before closing the item tag). Action function arguments: comment ID, post ID.

[do\_feed\_{$feed}](#reference/hooks/do_feed_feed) : Runs when a feed is generated, where feed is the type of feed (`rss2, atom, rdf`, etc.). Use priority less than 10 to run **before** printing the feed. Action function argument: true (the feed is for comments) or false (it is for posts).

[rdf\_header](#reference/hooks/rdf_header) : Runs just after the blog information has been printed in an RDF feed, just before the first entry.

[rdf\_item](#reference/hooks/rdf_item) : Runs just after the entry information has been printed (but before closing the item tag) for each blog entry in an RDF feed.

[rdf\_ns](#reference/hooks/rdf_ns) : Runs inside the root XML element in an RDF feed (to add namespaces).

[rss\_head](#reference/hooks/rss_head) : Runs just after the blog information has been printed in an RSS feed, just before the first entry.

[rss\_item](#reference/hooks/rss_item) : Runs just after the entry information has been printed (but before closing the item tag) for each blog entry in an RSS feed.

[rss2\_head](#reference/hooks/rss2_head) : Runs just after the blog information has been printed in an RSS 2 feed, just before the first entry.

[rss2\_item](#reference/hooks/rss2_item) : Runs just after the entry information has been printed (but before closing the item tag) for each blog entry in an RSS 2 feed.

[rss2\_ns](#reference/hooks/rss2_ns) : Runs inside the root XML element in an RSS 2 feed (to add namespaces).

## Template Actions

[after\_setup\_theme](#reference/hooks/after_setup_theme) : Runs during a themes initialization. Is generally used to perform basic setup, registration, and init actions for a theme.

[comment\_form](#reference/hooks/comment_form) : Runs at the bottom of a comment form rendered by [comment\_form()](#reference/functions/comment_form), right before the closing

[comment\_form\_after](#reference/hooks/comment_form_after) : Runs after the comment form is rendered by [comment\_form()](#reference/functions/comment_form), right after the closing

[do\_robots](#reference/hooks/do_robots) : Runs when the template file chooser determines that it is a robots.txt request.

[do\_robotstxt](#reference/hooks/do_robotstxt) : Runs in the `do_robots()` function before it prints out the Disallow lists for the robots.txt file.

[get\_footer](#reference/hooks/get_footer) : Runs when the template calls the `get_footer()` function, just before the `footer.php` template file is loaded.

[get\_header](#reference/hooks/get_header) : Runs when the template calls the `get_header()` function, just before the `header.php` template file is loaded.

[switch\_theme](#reference/hooks/switch_theme) : Runs when the blog’s theme is changed. Action function argument: name of the new theme. If used in a theme, it only works if the theme that adds action is the one being disabled.

[after\_switch\_theme](#reference/hooks/after_switch_theme) : Runs when the blog’s theme is changed. Action function argument: name of the new theme. If used in a theme, it only works if the theme that adds action is the one being enabled. Can be used to run certain code when enabling a theme.

[load-themes.php](#reference/hooks/load-pagenow) : Runs when the theme is activate or deactivate (replace by an other).

[template\_redirect](#reference/hooks/template_redirect) : Runs before the determination of the template file to be used to display the requested page.

[wp\_footer](#reference/hooks/wp_footer) : Runs when the template calls the `wp_footer()` function, generally near the bottom of the blog page.

[wp\_head](#reference/hooks/wp_head) : Runs when the template calls the `wp_head()` function. This hook is generally placed near the top of a page template between

[wp\_meta](#reference/hooks/wp_meta) : Runs when the *sidebar.php* template file calls the `wp_meta()` function, to allow the plugin to insert content into the sidebar.

[wp\_print\_scripts](#reference/hooks/wp_print_scripts) : Runs just before WordPress prints registered JavaScript scripts into the page header.

## Administrative Actions

[activate\_{$plugin}](#reference/hooks/activate_plugin) : Runs when the plugin is first activated. See [Function\_Reference/register\_activation\_hook](#reference/functions/register_activation_hook).

[activity\_box\_end](#reference/hooks/activity_box_end) : Runs at the end of the activity box on the admin Dashboard screen.

[add\_category\_form\_pre](#reference/hooks/add_category_form_pre) : Runs before the add category form is put on the screen in the admin menus.

[add\_option\_{$option}](#reference/hooks/add_option_option) : Runs after a WordPress option has been added by the [add\_option()](#reference/functions/add_option) function. Action function arguments: option name, option value. You must add an action for the specific options that you want to respond to, such as ‘add\_option\_foo’ to respond when option “foo” has been added.

[add\_option](#reference/hooks/add_option) : Runs before an option gets added to the database.

[added\_option](#reference/hooks/added_option) : Runs after an an option has been added.

[admin\_head](#reference/hooks/admin_head) :Runs in the HTML

[admin\_head-{$hook\_suffix}](#reference/hooks/admin_head-hook_suffix) : Runs in the HTML

[admin\_init](#reference/hooks/admin_init) : Runs at the beginning of every admin page before the page is rendered. See *wp-admin/admin.php*, *wp-admin/admin-post.php*, and *wp-admin/admin-ajax.php*.

[admin\_footer-{$hook\_suffix}](#reference/hooks/admin_footer-hook_suffix) : Runs at the end of the

[admin\_post\_{$action}](#reference/hooks/admin_post_action) : also: [admin\_post\_nopriv\_{$action}](#reference/hooks/admin_post_nopriv_action) – Runs a handler for an unspecified GET or POST request.

[admin\_footer](#reference/hooks/admin_footer) : Runs at the end of the admin panel inside the body tag

[admin\_enqueue\_scripts](#reference/hooks/admin_enqueue_scripts) : Runs in the HTML header so a plugin or theme can enqueue JavaScript and CSS to all admin pages.

[admin\_print\_scripts](#reference/hooks/admin_print_scripts) : Runs in the HTML header so a plugin can add JavaScript scripts to all admin pages.

[admin\_print\_scripts-{$hook\_suffix}](#reference/hooks/admin_print_scripts-hook_suffix) : Runs to print JavaScript scripts in the HTML head section of a specific plugin-generated admin page. The (page\_hook) is returned when using any of the functions that add plugin menu items to the admin menu: [add\_management\_page()](#reference/functions/add_management_page) , [add\_options\_page()](#reference/functions/add_options_page) , etc. Example:

```
function myplugin_menu() {
    if ( function_exists( 'add_management_page' ) ) {
        $page = add_management_page( 'myplugin', 'myplugin', 'manage_options', 'myplugin_slug', 'myplugin_admin_page' );
        add_action( "admin_print_scripts-$page", 'myplugin_admin_head' );
    }
}
```

[admin\_print\_styles](#reference/hooks/admin_print_styles) : Runs in the HTML header so a plugin can add CSS/Stylesheets to all admin pages.

[admin\_print\_styles-{$hook\_suffix}](#reference/hooks/admin_print_styles-hook_suffix) : Runs when styles should be enqueued with [`wp_enqueue_style()`](#reference/functions/wp_enqueue_style) for a particular admin page. Use the return value of a function such as [`add_submenu_page()`](#reference/functions/add_submenu_page) to determine the value of *(page\_hook)*.

[check\_passwords](#reference/hooks/check_passwords) : Runs to validate the double-entry of password when creating a new user. Action function arguments: array of login name, first password, second password.

[dbx\_post\_advanced](#reference/hooks/dbx_post_advanced) : Runs at the bottom of the “advanced” section on the page editing screen in the admin menus.

[dbx\_post\_sidebar](#reference/hooks/dbx_post_sidebar) : Runs at the bottom of the sidebar on the page editing screen in the admin menus.

[dbx\_post\_advanced](#reference/hooks/dbx_post_advanced) : Runs at the bottom of the “advanced” section on the post editing screen in the admin menus.

[dbx\_post\_sidebar](#reference/hooks/dbx_post_sidebar) : Runs at the bottom of the sidebar on the post editing screen in the admin menus. Use [`add_meta_box()`](#reference/functions/add_meta_box) in WordPress 2.5 and higher.

[deactivate\_{$plugin}](#reference/hooks/deactivate_plugin) : Runs when a plugin is deactivated.

[delete\_option\_{$option}](#reference/hooks/delete_option_option) : Runs after a WordPress option has been deleted by the [delete\_option()](#reference/functions/delete_option) function. Action function arguments: option name. You must add an action for the specific options that you want to respond to, such as ‘delete\_option\_foo’ to respond when option “foo” has been deleted.

[delete\_option](#reference/hooks/delete_option) : Runs before an option gets deleted from the database.

[deleted\_option](#reference/hooks/deleted_option) : Runs after an an option has been deleted.

[delete\_user](#reference/hooks/delete_user) : Runs when a user is deleted. Action function arguments: user ID.

[edit\_category\_form](#reference/hooks/edit_category_form) : Runs after the add/edit category form is put on the screen (but before the end of the HTML form tag).

[edit\_category\_form\_pre](#reference/hooks/edit_category_form_pre) : Runs before the edit category form is put on the screen in the admin menus.

[edit\_tag\_form](#reference/hooks/edit_tag_form) : Runs after the add/edit tag form is put on the screen (but before the end of the HTML form tag).

[edit\_tag\_form\_pre](#reference/hooks/edit_tag_form_pre) : Runs before the edit tag form is put on the screen in the admin menus.

[edit\_form\_top](#reference/hooks/edit_form_top) : Runs inside the form before the title on WordPress post edit screen (and Custom Post Types), but after the inital hidden fields (user\_ID, action, etc.).

[edit\_form\_after\_title](#reference/hooks/edit_form_after_title) : Runs after the title on WordPress post edit screen (and Custom Post Types) but before the built in WordPress content area.

[edit\_form\_after\_editor](#reference/hooks/edit_form_after_editor) : Runs just after the WordPress post editor but before all other meta boxes. also available in Custom Post Types.

[edit\_form\_advanced](#reference/hooks/edit_form_advanced) : Runs just before the “advanced” section of the post editing form in the admin menus.

[edit\_page\_form](#reference/hooks/edit_page_form) : Runs just before the “advanced” section of the page editing form in the admin menus.

[edit\_user\_profile](#reference/hooks/edit_user_profile) : Runs near the end of the user profile editing screen in the admin menus.

[load-{$pagenow}](#reference/hooks/load-pagenow) : Runs when an administration menu page is loaded. This action is not usually added directly — see [Adding Administration Menus](https://codex.wordpress.org/Adding_Administration_Menus) for more details of how to add admin menus. If you do want to use it directly, the return value from `add_options_page()` and similar functions gives you the “(page)” part of the action name.

[login\_form](#reference/hooks/login_form) : Runs just before the end of the login form.

[login\_head](#reference/hooks/login_head) : Runs just before the end of the HTML head section of the login page.

[lost\_password](#reference/hooks/lost_password) : Runs before the “retrieve your password by email” form is printed on the login screen.

[lostpassword\_form](#reference/hooks/lostpassword_form) : Runs at the end of the form used to retrieve a user’s password by email, to allow a plugin to supply extra fields.

[lostpassword\_post](#reference/hooks/lostpassword_post) : runs when the user has requested an email message to retrieve their password, to allow a plugin to modify the PHP `$_POST` variable before processing.

[manage\_link\_custom\_column](#reference/hooks/manage_link_custom_column) : Runs when there is an unknown column name for an admin screen. Action function arguments: column name, link ID. See also filter <a>id}\_columns</a> in the [Plugin API/Filter Reference](#apis/hooks/filter-reference), which adds custom columns.

[manage\_posts\_custom\_column](#reference/hooks/manage_posts_custom_column) : Runs when there is an unknown column name for the managing posts admin screen. Action function arguments: column name, post ID. See also filter [manage\_posts\_columns](#reference/hooks/manage_posts_columns) in the [Plugin API/Filter Reference](#apis/hooks/filter-reference), which adds custom columns. (see [Scompt’s tutorial](http://scompt.com/archives/2007/10/20/adding-custom-columns-to-the-wordpress-manage-posts-screen) for examples and use.)

[manage\_pages\_custom\_column](#reference/hooks/manage_pages_custom_column) : Runs when there is an unknown column name for the managing pages admin screen. Action function arguments: column name, page ID. See also filter [manage\_pages\_columns](#reference/hooks/manage_pages_columns) in the [Plugin API/Filter Reference](#apis/hooks/filter-reference), which adds custom columns.

[manage\_media\_custom\_column](#reference/hooks/manage_media_custom_column) : Runs when there is an unknown column name for the managing media admin screen. Action function arguments: column name, page ID. See also filter [manage\_media\_columns](#reference/hooks/manage_media_columns) in the [Plugin API/Filter Reference](#apis/hooks/filter-reference), which adds custom columns.

[manage\_{$post-&gt;post\_type}\_posts\_custom\_column](#reference/hooks/manage_post-post_type_posts_custom_column) : Runs when there is an unknown column name for the managing custom post type admin screen. Action function arguments: column name, post ID. See also filter [manage\_{$post\_type}\_posts\_columns](#reference/hooks/manage_post_type_posts_columns), which adds custom columns for custom post types.

[password\_reset](#reference/hooks/password_reset) : Runs before the user’s password is reset to a random new password.

[personal\_options\_update](#reference/hooks/personal_options_update) : Runs when a user updates personal options from the admin screen.

[plugins\_loaded](#reference/hooks/plugins_loaded) : Runs after all plugins have been loaded.

[profile\_personal\_options](#reference/hooks/profile_personal_options) : Runs at the end of the Personal Options section of the user profile editing screen.

[profile\_update](#reference/hooks/profile_update) : Runs when a user’s profile is updated. Action function argument: user ID.

[quick\_edit\_custom\_box](#reference/hooks/quick_edit_custom_box) : Runs when there is an unknown column name when creating the quick editor.

[register\_form](#reference/hooks/register_form) : Runs just before the end of the new user registration form.

[register\_post](#reference/hooks/register_post) : Runs before a new user registration request is processed.

[restrict\_manage\_posts](#reference/hooks/restrict_manage_posts) : Runs before the list of posts to edit is put on the screen in the admin menus.

[retrieve\_password](#reference/hooks/retrieve_password) : Runs when a user’s password is retrieved, to send them a reminder email. Action function argument: login name.

[set\_current\_user](#reference/hooks/set_current_user) : Runs after the user has been changed by the default `wp_set_current_user()` function. Note that `wp_set_current_user()` is also a “pluggable” function, meaning that plugins can override it; see [Plugin API](#plugins/hooks)).

[show\_user\_profile](#reference/hooks/show_user_profile) : Runs near the end of the user profile editing screen.

[sidebar\_admin\_page](#reference/hooks/sidebar_admin_page) : Runs after the main content on the widgets admin page.

[sidebar\_admin\_setup](#reference/hooks/sidebar_admin_setup) : Runs early when editing the widgets displayed in sidebars.

[update\_option\_{$option}](#reference/hooks/update_option_option) : Runs after a WordPress option has been updated by the `update_option()` function. Action function arguments: old option value, new option value. You must add an action for the specific options that you want to respond to, such as ‘update\_option\_foo’ to respond when option “foo” has been updated.

[update\_option](#reference/hooks/update_option) : Runs before an option gets updated to the database.

[updated\_option](#reference/hooks/updated_option) : Runs after an option has been updated.

[user\_new\_form](#reference/hooks/user_new_form) : Runs near the end of the “Add New” user screen. Action function argument: Passes the string “add-existing-user” on multisite or “add-new-user” on single site and for network admins.

[user\_profile\_update\_errors](#reference/hooks/user_profile_update_errors) : Runs just before updated user details are committed to the database.

[wpmu\_new\_user](#reference/hooks/wpmu_new_user) : Runs when a user’s profile is first created in a Multisite environment. Action function argument: user ID. If not in Multisite then use user\_register.

[user\_register](#reference/hooks/user_register) : Runs when a user’s profile is first created. Action function argument: user ID.

[welcome\_panel](#reference/hooks/welcome_panel) : Allows you to hide the Welcome Panel in the Dashboard. This is also a smart filter, which hides the related Screen Option.

[wp\_ajax\_{$action}](#reference/hooks/wp_ajax_action) : also: [wp\_ajax\_nopriv\_{$action}](#reference/hooks/wp_ajax_nopriv_action) – Runs to do an unknown type of AJAX request handler.

[wp\_authenticate](#reference/hooks/wp_authenticate) : Runs to authenticate a user when they log in. Action function arguments: array with user name and password.

[wp\_login](#reference/hooks/wp_login) : Runs when a user logs in.

[wp\_logout](#reference/hooks/wp_logout) : Runs when a user logs out.

## Advanced Actions

This section contains actions related to the queries WordPress uses to figure out what posts to display, the WordPress loop, activating plugins, and other fundamental-level WordPress code.

[activated\_plugin](#reference/hooks/activated_plugin) : Runs any time any plugin is successfully activated

[add\_meta\_boxes](#reference/hooks/add_meta_boxes) : Runs when “edit post” page loads. (**3.0+**)

[admin\_menu](#reference/hooks/admin_menu) : Runs after the basic admin panel menu structure is in place.

[network\_admin\_notices](#reference/hooks/network_admin_notices) : Runs after the admin menu is printed to network admin screens.

[user\_admin\_notices](#reference/hooks/user_admin_notices) : Runs after the admin menu is printed to user admin screens.

[admin\_notices](#reference/hooks/admin_notices) : Runs after the admin menu is printed to screens that aren’t network- or user-admin screens.

[all\_admin\_notices](#reference/hooks/all_admin_notices) : Runs after the admin menu is printed to all screens.

[blog\_privacy\_selector](#reference/hooks/blog_privacy_selector) : Runs after the default blog privacy options are printed on the screen.

[check\_admin\_referer](#reference/hooks/check_admin_referer) : Runs in the default `check_admin_referrer()` function after the nonce has been checked for security purposes, to allow a plugin to force WordPress to die for extra security reasons. Note that `check_admin_referrer` is also a “pluggable” function, meaning that plugins can override it; see [Plugin API](#plugins/hooks)).

[check\_ajax\_referer](#reference/hooks/check_ajax_referer) : Runs in the default `check_ajax_referer()` function (which is called when an AJAX request goes to the `wp-admin/admin-ajax.php` script) after the user’s login and password have been successfully validated from cookies, to allow a plugin to force WordPress to die for extra security reasons. Note that `check_ajax_referer` is also a “pluggable” function, meaning that plugins can override it; see [Plugin API](#plugins/hooks)).

[customize\_controls\_enqueue\_scripts](#reference/hooks/customize_controls_enqueue_scripts) : triggered after the WP Theme Customizer after customize\_controls\_init was called, its actions/callbacks executed, and its own styles and scripts enqueued, so you can use this hook to register your own scripts and styles for WP Theme Customizer. For use with the [Theme Customization API](#themes/customize-api) (as of [Version 3.4](https://wordpress.org/support/wordpress-version/version-3-4/)).

[customize\_register](#reference/hooks/customize_register) : Runs on every request, allowing developers to register new theme options and controls for use with the [Theme Customization API](#themes/customize-api) (as of [Version 3.4](https://wordpress.org/support/wordpress-version/version-3-4/)).

[customize\_preview\_init](#reference/hooks/customize_preview_init) : Allows you to enqueue assets (such as javascript files) directly in the Theme Customizer only. For use with the [Theme Customization API](#themes/customize-api) (as of [Version 3.4](https://wordpress.org/support/wordpress-version/version-3-4/)).

[deactivated\_plugin](#reference/hooks/deactivated_plugin) : Runs any time any plugin is successfully de-activated

[generate\_rewrite\_rules](#reference/hooks/generate_rewrite_rules) : Runs after the rewrite rules are generated. Action function arguments: `WP_Rewrite` object (`$wp_rewrite`) by reference. Note that it is easier to use the r`ewrite_rules_array` filter instead of this action, to modify the rewrite rules.

[init](#reference/hooks/init) : Runs after WordPress has finished loading but before any headers are sent. Useful for intercepting $\_GET or $\_POST triggers.

[loop\_end](#reference/hooks/loop_end) : Runs after the last post of the WordPress loop is processed.

[loop\_start](#reference/hooks/loop_start) : Runs before the first post of the WordPress loop is processed.

[network\_admin\_menu](#reference/hooks/network_admin_menu) : Runs when the basic menu structure is prepared for the [Network](https://wordpress.org/support/article/create-a-network/) administration page. ([Administration Menus](https://codex.wordpress.org/Administration_Menus))

[parse\_query](#reference/hooks/parse_query) : Runs at the end of query parsing in [the main query](https://codex.wordpress.org/Query_Overview) or any instance of [WP\_Query](#reference/classes/wp_query), such as [query\_posts](#reference/functions/query_posts), [get\_posts](#reference/functions/get_posts), or [get\_children](#reference/functions/get_children). Action function arguments: `WP_Query` object by reference.

[parse\_request](#reference/hooks/parse_request) : Runs after the query request is parsed inside the main WordPress function `wp`. Action function argument: `WP` object ($wp) by reference.

[pre\_get\_posts](#reference/hooks/pre_get_posts) : Runs before a query is executed in [the main query](https://codex.wordpress.org/Query_Overview) or any instance of [`WP_Query`](#reference/classes/wp_query), such as [`query_posts()`](#reference/functions/query_posts), [`get_posts()`](#reference/functions/get_posts), or [`get_children()`](#reference/functions/get_children). This hook is called after the query variable object is created, but before the query is actually run, and can be used to to alter the primary query before it is run. Also see [`is_main_query()`](#reference/functions/is_main_query). Action function arguments: `WP_Query` object by reference.

[sanitize\_comment\_cookies](#reference/hooks/sanitize_comment_cookies) : Runs after cookies have been read from the HTTP request.

[send\_headers](#reference/hooks/send_headers) : Runs after the basic HTTP headers are sent inside the main WordPress function `wp()`. Action function argument: `WP` object ($wp) by reference.

[shutdown](#reference/hooks/shutdown) : Runs when the page output is complete.

[update\_{$meta\_type}\_meta](#reference/hooks/update_meta_type_meta) : Runs when a metadata gets saved.

[updated\_{$meta\_type}\_meta](#reference/hooks/updated_meta_type_meta) : Runs when a metadata has been updated.

[upgrader\_process\_complete](#reference/hooks/upgrader_process_complete) : Runs when the plugin downloader/upgrader class finishes running

[wp\_loaded](#reference/hooks/wp_loaded) : This hook is fired once WP, all plugins, and the theme are fully loaded and instantiated.

[wp](#reference/hooks/wp) : Executes after the query has been parsed and post(s) loaded, but before any template execution, inside the main WordPress function `wp()`. Useful if you need to have access to post data but can’t use templates for output. Action function argument: `WP` object (`$wp`) by reference.

## Admin Login Actions

This section contains actions that the WordPress Admin login page uses to handle display, authentication, registering, resetting passwords, forgot password, and other user handling.

[login\_init](#reference/hooks/login_init) : Fires when the login form is initialized.

[login\_form\_{$action}](#reference/hooks/login_form_action) : Fires before a specified login form action.

[login\_enqueue\_scripts](#reference/hooks/login_enqueue_scripts) : Enqueue scripts and styles for the login page.

[login\_head](#reference/hooks/login_head) : Fires in the login page header after scripts are enqueued.

[login\_header](#reference/hooks/login_header) : Fires in the login page header after the body tag is opened.

[login\_form](#reference/hooks/login_form) : Fires following the ‘Password’ field in the login form.

[lostpassword\_post](#reference/hooks/lostpassword_post) : Fires before errors are returned from a password reset request.

[admin\_email\_confirm](#reference/hooks/admin_email_confirm) : Fires before the admin email confirm form.

[admin\_email\_confirm\_form](#reference/hooks/admin_email_confirm_form) : Fires inside the admin-email-confirm-form form tags, before the hidden fields.

[lost\_password](#reference/hooks/lost_password) : Fires before the lost password form.

[lostpassword\_form](#reference/hooks/lostpassword_form) : Fires inside the lostpassword form tags, before the hidden fields.

[validate\_password\_reset](#reference/hooks/validate_password_reset) : Fires before the password reset procedure is validated.

[resetpass\_form](#reference/hooks/resetpass_form) : Fires following the ‘Strength indicator’ meter in the user password reset form.

[register\_form](#reference/hooks/register_form) : Fires following the ‘Email’ field in the user registration form.

[user\_request\_action\_confirmed](#reference/hooks/user_request_action_confirmed) : Fires an action hook when the account action has been confirmed by the user.

[login\_footer](#reference/hooks/login_footer) : Fires in the login page footer.

## Further Reading

- [Plugin Handbook](#plugins) – description of how to write a plugin
- [Plugin API](#plugins/hooks) – article on how to use filters and actions
- [Plugin API/Filter Reference](#apis/hooks/filter-reference) – reference list for filter hooks
- [Plugin Resources](https://codex.wordpress.org/Plugin_Resources) – comprehensive list of plugin-related resources
- [Hooks Database](#reference/hooks) – documentation for all hooks in the official WordPress Code Reference.
- [WordPress Hooks Database](http://adambrown.info/p/wp_hooks), a database of all WordPress’ hooks, showing which version they come from, and linking to the source code spots that use them

---

# Dashboard widgets API <a name="apis/dashboard-widgets" />

Source: https://developer.wordpress.org/apis/dashboard-widgets/

Added in WordPress Version [2.7](https://wordpress.org/support/wordpress-version/version-2-7/), the **Dashboard Widgets API** makes it simple to add new widgets to the [administration dashboard](https://wordpress.org/support/article/dashboard-screen/).

Doing so requires working knowledge of PHP and the WordPress [Plugin API](#plugins), but to plugin or theme authors familiar with hooking actions and filters, it only takes a few minutes and can be a great way to make your plugin even more useful.

[![](https://i0.wp.com/developer.wordpress.org/files/2019/08/admin-dashboard-widget-api.png?resize=1024%2C464&ssl=1)](https://i0.wp.com/developer.wordpress.org/files/2019/08/admin-dashboard-widget-api.png?ssl=1)Default Dashboard Widgets## Overview

### The main function

The main tool needed to add Dashboard Widgets is the [wp\_add\_dashboard\_widget()](#reference/functions/wp_add_dashboard_widget) function. You will find a complete description of this function on that link, but a brief overview is given below.

### Usage

```php
wp_add_dashboard_widget( $widget_id, $widget_name, $callback, $control_callback, $callback_args );
```

- `$widget_id`: an identifying slug for your widget. This will be used as its CSS class and its key in the array of widgets.
- `$widget_name`: this is the name your widget will display in its heading.
- `$callback`: The name of a function you will create that will display the actual contents of your widget.
- `$control_callback` (Optional): The name of a function you create that will handle submission of widget options forms, and will also display the form elements.
- `$callback_args` (Optional): Set of arguments for the callback function.

### Action hooks

To run the function you will need to hook into the action [wp\_dashboard\_setup](#reference/hooks/wp_dashboard_setup) via [add\_action()](#reference/functions/add_action). For the Network Admin dashboard, use the hook [wp\_network\_dashboard\_setup](#reference/hooks/wp_network_dashboard_setup).

```php
/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function wporg_add_dashboard_widgets() {
	// Add function here
}
add_action( 'wp_dashboard_setup', 'wporg_add_dashboard_widgets' );
```

Network dashboard:

```php
/**
 * Add a widget to the network dashboard.
 *
 * This function is hooked into the 'wp_network_dashboard_setup' action below.
 */
function wporg_add_network_dashboard_widgets() {
	// Add function here
}
add_action( 'wp_network_dashboard_setup', 'wporg_add_network_dashboard_widgets' );
```

## Examples

### Basic usage

```php
/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function wporg_add_dashboard_widgets() {
	wp_add_dashboard_widget(
		'wporg_dashboard_widget',                          // Widget slug.
		esc_html__( 'Example Dashboard Widget', 'wporg' ), // Title.
		'wporg_dashboard_widget_render'                    // Display function.
	); 
}
add_action( 'wp_dashboard_setup', 'wporg_add_dashboard_widgets' );

/**
 * Create the function to output the content of our Dashboard Widget.
 */
function wporg_dashboard_widget_render() {
	// Display whatever you want to show.
	esc_html_e( "Howdy! I'm a great Dashboard Widget.", "wporg" );
}
```

### Forcing your widget to the top

Normally you should just let the users of your plugin put your Dashboard Widget wherever they want by dragging it around. There currently isn’t an easy API way to pre-sort the default widgets, meaning your new widget will always be at the bottom of the list. Until sorting is added to the API its a bit complicated to get around this problem.

Below is an example hooking function that will try to put your widget before the default ones. It does so by manually altering the internal array of metaboxes (of which dashboard widgets are one type) and putting your widget at the top of the list so it shows first.

```php
function wporg_add_dashboard_widgets() {
	wp_add_dashboard_widget( 
		'wporg_dashboard_widget', 
		esc_html__( 'Example Dashboard Widget', 'wporg' ), 
		'wporg_dashboard_widget_function' 
	);
	
	// Globalize the metaboxes array, this holds all the widgets for wp-admin.
	global $wp_meta_boxes;
	
	// Get the regular dashboard widgets array 
	// (which already has our new widget but appended at the end).
	$default_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
	
	// Backup and delete our new dashboard widget from the end of the array.
	$example_widget_backup = array( 'example_dashboard_widget' => $default_dashboard['example_dashboard_widget'] );
	unset( $default_dashboard['example_dashboard_widget'] );
 
	// Merge the two arrays together so our widget is at the beginning.
	$sorted_dashboard = array_merge( $example_widget_backup, $default_dashboard );
 
	// Save the sorted array back into the original metaboxes. 
	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
}
add_action( 'wp_dashboard_setup', 'wporg_add_dashboard_widgets' );
```

Unfortunately this only works for people who have never re-ordered their widgets. Once a user has done so their existing preferences will override this and they will have to move your widget to the top for it to stay there.

### Removing default Dashboard Widgets

In some situations, especially on multi-user blogs, it may be useful to completely remove widgets from the interface. Each individual user can, by default, turn off any given widget using the *[Screen Options](https://wordpress.org/support/article/administration-screens/#screen-options)* tab at the top, but if you have a lot of non-technical users it might be nicer for them to not see it at all.

To remove dashboard widget, use the [remove\_meta\_box()](#reference/functions/remove_meta_box) function. See the example codes below for the required parameters.

These are the names of the default widgets on the dashboard:

```php
// Main column (left): 
// Browser Update Required
$wp_meta_boxes['dashboard']['normal']['high']['dashboard_browser_nag']; 
// PHP Update Required
$wp_meta_boxes['dashboard']['normal']['high']['dashboard_php_nag']; 

// At a Glance
$wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'];
// Right Now
$wp_meta_boxes['dashboard']['normal']['core']['network_dashboard_right_now'];
// Activity
$wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity'];
// Site Health Status
$wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health'];

// Side Column (right): 
// WordPress Events and News
$wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'];
// Quick Draft, Your Recent Drafts
$wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']; 
```

Here is an example function that removes the QuickPress widget:

```php
// Create the function to use in the action hook
function wporg_remove_dashboard_widget() {
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
} 
// Hook into the 'wp_dashboard_setup' action to register our function
add_action( 'wp_dashboard_setup', 'wporg_remove_dashboard_widget' );
```

The example below removes all Dashboard Widgets:

```php
function wporg_remove_all_dashboard_metaboxes() {
	// Remove Welcome panel
	remove_action( 'welcome_panel', 'wp_welcome_panel' );
	// Remove the rest of the dashboard widgets
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'health_check_status', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}
add_action( 'wp_dashboard_setup', 'wporg_remove_all_dashboard_metaboxes' );
```

### Adding Widgets in the right side

The function doesn’t allow you to choose where you want your widget to go and will automatically add it to the “core” which is the left side. However you are able to get it on the right side very easily.

You can use the [add\_meta\_box()](#reference/functions/add_meta_box) function instead of `wp_add_dashboard_widget`. Simply specify ‘dashboard’ in place of the $post\_type. For example:

```php
add_meta_box( 
	'dashboard_widget_id', 
	esc_html__( 'Dashboard Widget Title', 'wporg' ), 
	'dashboard_widget', 
	'dashboard', 
	'side', 'high' 
);
```

Or, after creating the widget:

```php
function wporg_add_dashboard_widget() {
	wp_add_dashboard_widget( 
		'wporg_dashboard_widget', 
		esc_html__( 'Example Dashboard Widget', 'wporg' ), 
		'wporg_dashboard_widget_function' 
	);
	
	// Global the $wp_meta_boxes variable (this will allow us to alter the array).
	global $wp_meta_boxes;

	// Then we make a backup of your widget.
	$wporg_widget = $wp_meta_boxes['dashboard']['normal']['core']['wporg_dashboard_widget'];

	// We then unset that part of the array.
	unset( $wp_meta_boxes['dashboard']['normal']['core']['wporg_dashboard_widget'] );

	// Now we just add your widget back in.
	$wp_meta_boxes['dashboard']['side']['core']['wporg_dashboard_widget'] = $wporg_widget;
}
add_action( 'wp_dashboard_setup', 'wporg_add_dashboard_widget' );
```

### Aggregating RSS feeds in the dashboard

If you need to aggregate RSS in your widget you should take a look at the way the existing plugins are set up with caching in `<a href="https://core.trac.wordpress.org/browser/tags/5.2.1/src//wp-admin/includes/dashboard.php#L0">/wp-admin/includes/dashboard.php</a>`.

## Widget Options

WordPress does not provide a built-in way to fetch options for a specific widget. By default, you would need to use `<a href="#reference/functions/get_option">get_option( 'dashboard_widget_options' )</a>` to fetch all widget options and then filter the returned array manually. This section presents some functions that can easily be added to a theme or plugin to help getting and setting of widget options.

### Getting Widget Options

This function will fetch all widget options, or only options for a specified widget:

```php

/**
 * Gets all widget options, or only options for a specified widget if a widget id is provided.
 *
 * @param string $widget_id Optional. If provided, will only get options for that widget.
 * @return array An associative array
 */
function wporg_get_dashboard_widget_options( $widget_id = '' ) {
    // Fetch ALL dashboard widget options from the db
    $options = get_option( 'dashboard_widget_options' );
 
    // If no widget is specified, return everything
    if ( empty( $widget_id ) ) {
        return $options;
    }
 
    // If we request a widget and it exists, return it
    if ( isset( $options[$widget_id] ) ) {
        return $options[$widget_id];
    }
 
    // Something went wrong...
    return false;
}
```

### Get a Single Widget Option

If you want to easily fetch only a single option (for outputting to a theme), the following function will make that easier.

This example should be used with the previous [Getting Widget Options](#apis/handbook/dashboard-widgets) example function.

```php
/**
 * Gets one specific option for the specified widget.
 * 
 * @param  string $widget_id Widget ID.
 * @param  string $option    Widget option.
 * @param  string $default   Default option.
 * 
 * @return string            Returns single widget option.
 */
function wporg_get_dashboard_widget_option( $widget_id, $option, $default = NULL ) {
	$options = wporg_get_dashboard_widget_options( $widget_id );

	// If widget options don't exist, return false.
	if ( ! $options ) {
		return false;
	}

	// Otherwise fetch the option or use default
	if ( isset( $options[$option] ) && ! empty( $options[$option] ) ) {
		return $options[$option];
	} else {
		return ( isset( $default ) ) ? $default : false;
	}
}
```

### Update Widget Options

This function can be used to easily update all of a widget’s options. It can also be used to add a widget option non-destructively. Simply set the $add\_option argument to true, and this will **NOT overwrite** any existing options (although it will add any missing ones).

```php
/**
 * Saves an array of options for a single dashboard widget to the database.
 * Can also be used to define default values for a widget.
 *
 * @param string $widget_id  The name of the widget being updated
 * @param array $args        An associative array of options being saved.
 * @param bool $add_only     Set to true if you don't want to override any existing options.
 */
function update_dashboard_widget_options( $widget_id , $args = array(), $add_only = false ) {
	// Fetch ALL dashboard widget options from the db...
	$options = get_option( 'dashboard_widget_options' );

	// Get just our widget's options, or set empty array.
	$widget_options = ( isset( $options[$widget_id] ) ) ? $options[$widget_id] : array();

	if ( $add_only ) {
		// Flesh out any missing options (existing ones overwrite new ones).
		$options[$widget_id] = array_merge( $args, $widget_options );
	} else {
		// Merge new options with existing ones, and add it back to the widgets array.
		$options[$widget_id] = array_merge( $widget_options, $args );
	}

	// Save the entire widgets array back to the db.
	return update_option( 'dashboard_widget_options', $options );
}
```

---

# Database API <a name="apis/database" />

Source: https://developer.wordpress.org/apis/database/

## Overview

This page lists all holistic pages of a given Database related API. Each covers the functions involved in and use of a given set of functionality. Together they form what might be called the **WordPress Database API**, which is the plugin/theme/add-on interface created by the entire WordPress project in respect to access data as named values stored in the database layer.

If you’ve read through all of these you should have a good sense of how to extend WordPress through Plugins that do access the database in an easy way.

## APIs

- [Options API](#apis/handbook/options)
- [Transients API](#apis/handbook/transients)
- [Metadata API](#apis/handbook/metadata)

---

# Internationalization <a name="apis/internationalization" />

Source: https://developer.wordpress.org/apis/internationalization/

## What is internationalization?

Internationalization is the process of developing your application in a way it can easily be translated into other languages. Internationalization is often abbreviated as `i18n` (because there are 18 letters between the letters i and n).

## Why is internationalization important?

WordPress is used all over the world, by people who speak many different languages. The strings in WordPress need to be coded in a special way so that they can be easily translated into other languages. As a developer, you may not be able to provide localization for all your users; however, a translator can successfully localize your code without needing to modify the source code itself.

While making your code translatable is called Internationalization, the act of translating it and adapting the strings to a specific location is called [Localization](#apis/handbook/internationalization/localization). Read more about [Localization in WordPress](#apis/handbook/internationalization/localization).

## The basics

In order to make a string translatable, you have to wrap the original strings in a call to one of the [WordPress i18n functions](#apis/handbook/internationalization/internationalization-functions).

For example, the PHP function [\_e()](#reference/functions/_e) echoes a translatable string:

```php
 _e('Edit post'); 
```

You will find code like this all over WordPress core files. However, if you are internationalizing a theme or a plugin, there is another argument that all i18n functions take called Text Domain.

Text Domains set the domain your plugin or theme translations belong. This assures there is no conflict between strings in plugins, themes, and the WordPress core.

With a text-domain, the most basic call to a i18n function that will output a string would be like:

```php
 _e('Edit movie', 'my-plugin'); 
```

## Setting up your plugin and theme to i18n

Setting up i18n is slightly different for Plugins and Themes, therefore this information is detailed in each respective Handbook:

- [How to internationalize your theme](#themes/functionality/internationalization)
- [How to internationalize your plugin](#plugins/internationalization/how-to-internationalize-your-plugin)

### Internationalizing JavaScript

Since WordPress 5.0 it’s possible to internationalize JavaScript files using the same set of i18n functions used in PHP.

In order to be able to use i18n functions in your JavaScript code, you have to declare `wp-i18n` as a dependency on your script when registering or enqueueing it. For example:

```php
wp_register_script(
     'my-script',
     plugins_url( 'js/my-script.js', FILE ),
     array( 'wp-i18n' ),
     '0.0.1'
 );
```

Now that you have added the dependency to your script, you can use i18n functions in it, however you still have to tell WordPress to load the translations.

You do this by calling `wp_set_script_translations()`. This function takes three arguments: the registered/enqueued script handle, the text domain, and optionally a path to the directory containing translation files. The latter is only needed if your plugin or theme is not hosted on WordPress.org, which provides these translation files automatically.

```php
wp_set_script_translations('my-script', 'my-plugin');
```

For better performance, always make sure to enqueue your scripts and load their translations only when they are really used.

In your JavaScript code you will use i18n functions pretty much the same way you do in your PHP code:

```js
const { __, _x, _n, sprintf } = wp.i18n;

// simple string
__( 'Hello World', 'my-plugin' );

// string with context
_x( 'My Gutenberg block name', 'block name', 'my-plugin' );
```

The available i18n for you to use in your JS code are (See internationalization functions for more details):

- [\_\_()](#reference/functions/__)
- [\_x()](#reference/functions/_x)
- [\_n()](#reference/functions/_n)
- [\_nx()](#reference/functions/_nx)
- sprintf()

Notice that the wp-i18n package also includes the `sprintf` function. This is very useful to internationalize strings that have variables in it.

Now refer to the Internationalization Guidelines to learn how to use all these functions and the best practices on writing your strings.

 If you are not hosting your plugin or theme on WordPress.org, you will need to create your translation files yourself. Check [this post](https://pascalbirchler.com/internationalization-in-wordpress-5-0/) out to learn how to do this.

#### Internationalizing JavaScript before WP 5.0

Another way to internationalize your JavaScript files is to use the [wp\_localize\_script()](#reference/functions/wp_localize_script) function.

With this function you can register translatable strings and have them available in your JavaScript to be used.

Please refer to the [`wp_localize_script`() reference](#reference/functions/wp_localize_script) to learn how to use it.

## Internationalization Guidelines

Now that you are ready to internationalize your application, read through the [Internationalization Guidelines](#apis/handbook/internationalization/internationalization-guidelines) and learn what each i18n function is for, how to use them, and the best practices when writing your strings.

---

# Internationalization Functions <a name="apis/internationalization/internationalization-functions" />

Source: https://developer.wordpress.org/apis/internationalization/internationalization-functions/

Check the [Internationalization Guidelines](#apis/handbook/internationalization/internationalization-guidelines) and learn what each i18n function is for, how to use them, and the best practices when writing your strings.

## Basic functions

- [\_\_()](#reference/functions/__)
- [\_e()](#reference/functions/_e)
- [\_x()](#reference/functions/_x)
- [\_ex()](#reference/functions/_ex)
- [\_n()](#reference/functions/_n)
- [\_nx()](#reference/functions/_nx)
- [\_n\_noop()](#reference/functions/_n_noop)
- [\_nx\_noop()](#reference/functions/_nx_noop)
- [translate\_nooped\_plural()](#reference/functions/translate_nooped_plural())

## Translate &amp; Escape functions

Strings that require translation and is used in attributes of html tags must be escaped.

- [esc\_html\_\_()](#reference/functions/esc_html__)
- [esc\_html\_e()](#reference/functions/esc_html_e)
- [esc\_html\_x()](#reference/functions/esc_html_x)
- [esc\_attr\_\_()](#reference/functions/esc_attr__)
- [esc\_attr\_e()](#reference/functions/esc_attr_e)
- [esc\_attr\_x()](#reference/functions/esc_attr_x)

## Date and number functions

- [number\_format\_i18n()](#reference/functions/number_format_i18n)
- [date\_i18n()](#reference/functions/date_i18n)

## Functions also available in javascript

- [\_\_()](#reference/functions/__)
- [\_x()](#reference/functions/_x)
- [\_n()](#reference/functions/_n)
- [\_nx()](#reference/functions/_nx)
- sprintf()

Note: To be able to use these functions available in your javascript, you have to [set up your plugin/theme javascript localization](#apis/handbook/internationalization).

---

# Internationalization Guidelines <a name="apis/internationalization/internationalization-guidelines" />

Source: https://developer.wordpress.org/apis/internationalization/internationalization-guidelines/

In this article, you will learn when and how to use all available i18n functions and the best practices for writing your strings.

The recommendations in this article applies both for your PHP and your javascript code. You can see all the available functions for each language in the [I18n functions](#apis/handbook/internationalization/internationalization-functions) page. The functions available for javascript will also be highlighted.

## Basic strings

The most commonly used function is `<a href="#reference/functions/__">__()</a>`. It returns the translation of its argument:

```php
__( 'Blog Options', 'my-theme' );
```

Another simple one is `<a href="#reference/functions/_e">_e()</a>`, which outputs the translation of its argument. Instead of writing:

```php
echo __( 'WordPress is the best!', 'my-theme' );
```

you can use the shorter:

```php
_e( 'WordPress is the best!', 'my-theme' );
```

`__()`is also available for javascript

## Variables

If you are using variables in strings, similar to the example below, you need to use placeholders.

```php
echo 'Your city is $city.'
```

Use the `printf` family of functions. Especially helpful are `<a href="http://php.net/printf">printf</a>` and `<a href="http://php.net/sprintf">sprintf</a>`. For example:

```php
printf(
    /* translators: %s: Name of a city */
    __( 'Your city is %s.', 'my-theme' ),
    $city
);
```

Notice that the string for translation is the template `"Your city is %s."`, which is the same in both the source and at run-time.

If you have more than one placeholder in a string, it is recommended that you use [argument swapping](http://www.php.net/manual/en/function.sprintf.php#example-4829). In this case, single quotes `(')` are mandatory : double quotes `(")` tell php to interpret the `$s` as the `s` variable, which is not what we want.

```php
printf(
    /* translators: 1: Name of a city 2: ZIP code */
    __( 'Your city is %1$s, and your zip code is %2$s.', 'my-theme' ),
    $city,
    $zipcode
);
```

Here the zip code is displayed after the city name. In some languages, displaying the zip code and city in opposite order is more appropriate. Using %s prefix, as in the above example, allows for this. A translation can be written:

```php
printf(
    /* translators: 1:ZIP code 2:Name of a city */
    __( 'Your zip code is %2$s, and your city is %1$s.', 'my-theme' ),
    $city,
    $zipcode
);
```

`sprintf` is also available for javascript translations:

```js
const zipCodeMessage = sprintf(
    /* translators: 1:ZIP code 2:Name of a city */
    __( 'Your zip code is %2$s, and your city is %1$s.', 'my-theme'),
    city,
    zipcode
);
```

The following example tells you what not to do

This is incorrect.

```php
// This is incorrect do not use.
_e( "Your city is $city.", 'my-theme' );
```

The strings for translation are extracted from the source without executing the PHP associated with it. For example: The variable `$city` may be Vancouver, so your string will read `"Your city is Vancouver"` when the template is run but gettext won’t know what is inside the PHP variable in advance.

As the value of the variable is unknown when your string is translated, it would require the translator to know every case for the variable `$country`. This is not ideal, and it is best to remove dynamic content and allow translators to focus on static content.

## Plurals

### Basic Pluralization

If you have a string that changes when the number of items changes. In English you have `"One comment"` and `"Two comments"`. In other languages, you can have multiple plural forms. To handle this in WordPress, you can use the `<a href="#reference/functions/_n">_n()</a>` function.

```php
printf(
    _n(
        '%s comment',
        '%s comments',
        get_comments_number(),
        'my-theme'
    ),
    number_format_i18n( get_comments_number() )
);
```

`_n()` accepts 4 arguments:

- singular – the singular form of the string (note that it can be used for numbers other than one in some languages, so `'%s item'` should be used instead of `'One item'`)
- plural – the plural form of the string
- count – the number of objects, which will determine whether the singular or the plural form should be returned (there are languages, which have far more than 2 forms)
- text domain – the theme’s text domain

The return value of the functions is the correct translated form, corresponding to the given count.

`[\_n()](#reference/functions/_n) is also available for javascript

### Pluralization done later

You first set the plural strings with `<a href="#reference/functions/_n_noop">_n_noop()</a>` or `<a href="#reference/functions/_nx_noop">_nx_noop()</a>`.

```php
$comments_plural = _n_noop(
    '%s comment.',
    '%s comments.'
);
```

At a later point in the code, you can use `<a href="#reference/functions/translate_nooped_plural">translate_nooped_plural()</a>` to load the strings.

```php
printf(
    translate_nooped_plural(
        $comments_plural,
        get_comments_number(),
        'my-theme'
    ),
    number_format_i18n( get_comments_number() )
);
```

## Disambiguation by context

Sometimes a term is used in more than one context and must be translated separately in other languages, even though the same word is used for each context in English. For example, the word `Post` can be used both as a verb `"Click here to post your comment"` and as a noun `"Edit this Post"`. In such cases the `<a href="#reference/functions/_x">_x()</a>` or `<a href="#reference/functions/_ex">_ex</a>()` function should be used. It is similar to `__()` and `_e()`, but it has an additional argument — the context:

```php
_x( 'Post', 'noun', 'my-theme' );
_x( 'post', 'verb', 'my-theme' );
```

Using this method in both cases, we get the string Comment for the original version. However, translators will see two Comment strings for translation, each in a different context.

Taking an example from the German version of WordPress as an illustration: Post is Beiträge. The corresponding verb form in German is beitragen.

Note that similar to `__()`, `_x()` has an `echo` version: `_ex()`. The previous example could be written as:

```php
_ex( 'Post', 'noun', 'my-theme' );
_ex( 'post', 'verb', 'my-theme' );
```

Use the one you feel enhances legibility and ease of coding.

`_x() and _nx()`are also available for javascript

## Descriptions

You can add a clarifying comment in the source code, so translators know how to translate a string like `__( 'g:i:s a' )` . It must start with the word `translators:`, in all lowercase, and be the last PHP comment before the gettext call. Here is an example:

```php
/* translators: draft saved date format, see http://php.net/date */
$saved_date_format = __( 'g:i:s a' );
```

Multi-line example:

```php
/*
 * translators: Replace with a city related to your locale.
 * Test that it matches the expected location and has upcoming
 * events before including it. If no cities related to your
 * locale have events, then use a city related to your locale
 * that would be recognizable to most users.
 */
?>
<input placeholder="<?php esc_attr_e( 'Cincinnati' ); ?>" id="location" type="text" name="location" />
```

## Newline characters

Gettext doesn’t like `r` (ASCII code: 13) in translatable strings, so avoid it and use `n` instead.

## Empty strings

The empty string is reserved for internal Gettext usage, and you must not try to internationalize the empty string. It also doesn’t make any sense because translators won’t have context.

If you have a valid use-case to internationalize an empty string, add context to both help translators and be in peace with the Gettext system.

## Escaping strings

It is good to escape all of your strings, preventing translators from running malicious code. There are a few escape functions that are integrated with internationalization functions.

```php
<a title="<?php esc_attr_e( 'Skip to content', 'my-theme' ); ?>" class="screen-reader-text skip-link" href="#content" >
  <?php _e( 'Skip to content', 'my-theme' ); ?>
</a>
```

```php
<label for="nav-menu">
  <?php esc_html_e( 'Select Menu:', 'my-theme' ); ?>
</label>
```

## Best Practices for writing strings

Here are the best practices for writing strings

- Use decent English style – minimize slang and abbreviations.
- Use entire sentences – in most languages, word order is different than English.
- Split at paragraphs – merge related sentences, but do not include a whole page of text in one string.
- Do not leave leading or trailing whitespace in a translatable phrase.
- Assume strings can double in length when translated.
- Avoid unusual markup and unusual control characters – do not include tags that surround your text.
- Do not put unnecessary HTML markup into the translated string.
- Do not leave URLs for translation, unless they could have a version in another language.
- Add the variables as placeholders to the string as in some languages the placeholders change position.

```php
printf(
    __( 'Search results for: %s', 'my-theme' ),
    get_search_query()
);
```

- Use format strings instead of string concatenation – translate phrases and not words –

```php
printf(
    __( 'Your city is %1$s, and your zip code is %2$s.', 'my-theme' ),
    $city,
    $zipcode
);
```

is always better than

```php
__( 'Your city is ', 'my-theme' ) . $city . __( ', and your zip code is ', 'my-theme' ) . $zipcode;
```

- Try to use the same words and symbols to prevent translating multiple similar strings (e.g. don’t do the following)

```php
__( 'Posts:', 'my-theme' ); and __( 'Posts', 'my-theme' );
```

---

# Localization <a name="apis/internationalization/localization" />

Source: https://developer.wordpress.org/apis/internationalization/localization/

## What is localization?

Localization describes the process of translating a software and adapting its strings to a specific location. Localization is abbreviated as `l10n` (because there are 10 letters between the l and the n.)

The process of localizing software has two steps. The first step is when the developers provide a mechanism and method for the eventual translation of the program and its interface to suit local preferences and languages for users worldwide. This process is [internationalization](#apis/handbook/internationalization) (i18n). WordPress developers have done this already, so in theory, WordPress can be used in any language.

The second step is the actual **localization** (l10n), the process by which the text on the page and other settings are translated and adapted to another language and culture, using the framework prescribed by the developers of the software. WordPress has already been localized into many languages (see the list of [polyglots teams](https://make.wordpress.org/polyglots/teams/) for more information).

## Translating WordPress, Plugins and Themes

If you want to help translating WordPress, or any Theme or Plugin hosted in WordPress.org themes and plugins directories, you should go to [Translate WordPress.](https://make.wordpress.org/polyglots)

There you will get to know all the translators teams and learn about [translate.wordpress.org](https://translate.wordpress.org), where you can work on translations online and in collaboration with thousands of translators around the world.

## Translating Themes and Plugins

If you want to translating plugins and themes that are not hosted on WordPress.org, or if, for any reason, you want to translate themes or plugins offline and directly in the plugins/themes files, you can do this creating and editing Localization Files.

### Localization files

There are three types of Localiztion files you need in order to translate your plugin/theme:

- POT files: a template file with all your original strings
- PO files: editable file with the translations to one language (one file per language)
- MO files: compiled versions of the PO files, actually used by the application

### POT (Portable Object Template) files

This file contains the original strings (in English) in your plugin/theme. Here is an example `POT` file entry:

```
#: plugin-name.php:123
msgid "Page Title"
msgstr ""
```

### PO (Portable Object) files

Every translator will take the `POT` file and translate the `msgstr` sections in their own language. The result is a `PO` file with the same format as a `POT`, but with translations and some specific headers. There is one PO file per language.

### MO (Machine Object) files

From every translated `PO` file a `MO` file is built. These are machine-readable, binary files that the gettext functions actually use (they don’t care about .POT or .PO files), and are a “compiled” version of the PO file. The conversion is done using the `msgfmt` tool. In general, an application may use more than one large logical translatable module and a different `MO` file accordingly. A text domain is a handle of each module, which has a different `MO` file.

### Generating POT file

The POT file is the one you need to hand to translators, so that they can do their work. The POT and PO files can easily be interchangeably renamed to change file types without issues. It is a good idea to offer the POT file along with your plugin/theme, so that translators won’t have to ask you specifically about it. There are a couple of ways to generate a POT file for your plugin:

#### WP-CLI

Install [WP-CLI](https://make.wordpress.org/cli/handbook/installing/) and use the `wp i18n make-pot` command according to the [documentation](#cli/commands/i18n/make-pot).

Open command line and run the command like this:

```
wp i18n make-pot path/to/your-plugin-directory
```

#### Poedit

You can also use [Poedit](http://www.poedit.net/) locally when translating. This is an open source tool for all major OS. The free Poedit default version supports manual scanning of all source code with Gettext functions. A pro version of it also features one-click scanning for WordPress plugins. After generating the po file you can rename the file to POT. If a mo was generated then you can delete that file as it is not needed. If you don’t have the pro version you can easily get the [Blank POT](https://github.com/fxbenard/Blank-WordPress-Pot) and use that as the base of your POT file. Once you have placed the blank POT in the languages folder you can click “Update” in Poedit to update the POT file with your strings.

![internationalization-localization-03](https://i0.wp.com/developer.wordpress.org/files/2014/10/internationalization-localization-03.jpg?resize=613%2C662&ssl=1)

#### Grunt Tasks

There are even some grunt tasks that you can use to create the POTs. [grunt-wp-i18n](https://github.com/blazersix/grunt-wp-i18n) &amp; [grunt-pot](https://www.npmjs.org/package/grunt-pot)  
To set it up you need to install [node.js](http://nodejs.org/). It is a simple installation. Then you need to [install grunt](http://gruntjs.com/getting-started) in the directory that you would like to use grunt in. This is done via [command line](http://leveluptuts.com/tutorials/command-line-basics). An [example Grunt.js and package.json](https://gist.github.com/grappler/10187003) that you can place in the root of your plugin. You can the grunt tasks with a simple command in the command line.

### Translate PO file

There are multiple ways to translate a PO file.

The easiest way is to use [Poedit](http://www.poedit.net/) when translating. This is an open source tool for all major OS. The free Poedit default version supports manual scanning of all source code with Gettext functions. A pro version of it also features one-click scanning for WordPress plugins and themes.

You can also use a text editor to enter the translation. In a text editor the strings will look like this.

```
#: plugin-name.php:123 
msgid "Page Title" 
msgstr ""
```

You can enter the translation between the quotation marks. For the German translation, the final result would look like this.

```
#: plugin-name.php:123 
msgid "Page Title" 
msgstr "Seitentitel"
```

A third option is to use an online translation service. The general idea is that you upload the POT file and then you can give permission to users or translators to translate your plugin. This allows you to track the changes, always have the latest translation and reduce the translation being done twice.

Here are a few tools that can be used to translate PO files online:

- [Transifex](https://www.transifex.com/)
- [WebTranslateIt](https://webtranslateit.com/en)
- [Poeditor](https://poeditor.com/)
- [Google Translator Toolkit](http://translate.google.com/toolkit/)
- [GlotPress](http://blog.glotpress.org/)

The translated file is to be saved as `my-plugin-{locale}.mo`. The locale is the language code and/or country code you defined in the constant `WPLANG` in the file `wp-config.php`. For example, the locale for German is `de_DE`. From the code example above the text domain is ‘my-plugin’ therefore the German MO and PO files should be named `my-plugin-de_DE.mo` and `my-plugin-de_DE.po`. For more information about language and country codes, see [Installing WordPress in Your Language](https://codex.wordpress.org/Installing_WordPress_in_Your_Language).

### Generate MO file

#### Command line

A program `msgfmt` is used to create the MO file. `msgfmt` is part of Gettext package. Otherwise command line can be used. A typical `msgfmt` command looks like this:

**Unix Operating Systems**

```
msgfmt -o filename.mo filename.po
```

**Windows Operating Systems**

```
msgfmt -o filename.mo filename.po
```

#### Converting multiple PO files at once

If you have a lot of `PO` files to convert at once, you can run it as a batch. For example, using a `bash` command:

**Unix Operating Systems**

```
# Find PO files, process each with msgfmt and rename the result to MO 
for file in `find . -name "*.po"` ; do msgfmt -o ${file/.po/.mo} $file ; 
done
```

**Windows Operating Systems**  
For Windows, you need to install [Cygwin](http://www.cygwin.com/) first.

Create a file called potomo.sh with the following content:

```
#! /bin/sh # Find PO files, process each with msgfmt and rename the result to MO 
for file in `/usr/bin/find . -name '*.po'` ; do /usr/bin/msgfmt -o ${file/.po/.mo} $file ; 
done
```

You can then run this command in the command line.

```
cd C:/path/to/language/folder/my-plugin/languages 
C:/cygwin/bin/bash -c /cygdrive/c/path/to/script/directory/potomo.sh
```

#### Poedit

`msgfmt` is also integrated in [Poedit](http://www.poedit.net/) allowing you to use it to generate the MO file. There is a setting in the preferences where you can enable or disable it.

![internationalization-localization-04](https://i0.wp.com/developer.wordpress.org/files/2014/10/internationalization-localization-04.jpg?resize=436%2C448&ssl=1)

#### Grunt task

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

As of [WordPress 4.0](https://make.wordpress.org/core/2014/09/05/language-chooser-in-4-0/) you can change the language in the “General Settings”. If you do not see any option or the language that you want to switch to then do the following steps:

- Define WPLANG inside of wp-config.php to your chosen language. For example, if you wanted to use french, you would have: ```php
    define ('WPLANG', 'fr_FR');
    ```
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

# Filesystem <a name="apis/filesystem" />

Source: https://developer.wordpress.org/apis/filesystem/

## Overview

The **Filesystem API**, added in [WordPress 2.6](/support/wordpress-version/version-2.6), was originally created for WordPress’ own automatic updates feature.

The Filesystem API abstracts out the functionality needed for reading and writing local files to the filesystem to be done securely, on a variety of host types.

It does this through the [WP\_Filesystem\_Base](#reference/classes/wp_filesystem_base) class, and several subclasses which implement different ways of connecting to the local filesystem, depending on individual host support.

Any theme or plugin that needs to write files locally should do so using the `WP_Filesystem` family of classes.

## Purpose

Different hosting systems have different limitations in the way that their webservers are configured.

In particular, many hosting systems have the webserver running as a different user than the owner of the WordPress files. When this is the case, a process writing files from the webserver user will have the resulting files owned by the webserver’s user account instead of the actual user’s account. This can lead to a security problem in shared hosting situations, where multiple users are sharing the same webserver for different sites.

`WP_Filesystem` is capable of detecting when the users for written files will not match, and switches to a method using FTP or similar instead. Depending on the available PHP libraries, [WP\_Filesystem](#reference/functions/wp_filesystem) supports three different methods of using FTP (via extension, sockets, or over-SSH) and will automatically choose the correct method.

In such a case, the plugin or theme implementing this code needs to request FTP credentials from the user. Functions have been added to make this easy to do and to standardize the look and feel of the credentials entry form.

## Filesystem API Class Reference

- Class: [WP\_Filesystem\_Base](#reference/classes/wp_filesystem_base)
- Class: [WP\_Filesystem\_Direct](#reference/classes/wp_filesystem_direct)
- Class: [WP\_Filesystem\_FTPext](#reference/classes/wp_filesystem_ftpext)
- Class: [WP\_Filesystem\_ftpsocket](#reference/classes/wp_filesystem_ftpsockets)
- Class: [WP\_Filesystem\_SSH2](#reference/classes/wp_filesystem_ssh2)
- Function: [request\_filesystem\_credentials()](#reference/functions/request_filesystem_credentials)

## Getting Credentials

The first step in using the WP\_Filesystem is requesting credentials from the user. The normal way this is accomplished is at the time when you’re saving the results of a form input, or you have otherwise determined that you need to write to a file.

The credentials form can be displayed onto an admin page by using the following code:

```php
$url = wp_nonce_url( 'themes.php?page=example', 'example-theme-options' );
if ( false === ( $creds = request_filesystem_credentials( $url, '', false, false, null ) ) ) {
	return; // stop processing here
}
```

The [request\_filesystem\_credentials()](#reference/functions/request_filesystem_credentials) call takes five arguments.

- The URL to which the form should be submitted (a nonced URL to a theme page was used in the example above)
- A method override (normally you should leave this as the empty string: “”)
- An error flag (normally false unless an error is detected, see below)
- A context directory (false, or a specific directory path that you want to test for access)
- Form fields (an array of form field names from your previous form that you wish to “pass-through” the resulting credentials form, or null if there are none)

The `request_filesystem_credentials` call will test to see if it is capable of writing to the local filesystem directly without credentials first. If this is the case, then it will return true and not do anything. Your code can then proceed to use the `WP_Filesystem` class.

The `request_filesystem_credentials` call also takes into account hardcoded information, such as hostname or username or password, which has been inserted into the `wp-config.php` file using defines. If these are pre-defined in that file, then this call will return that information instead of displaying a form, bypassing the form for the user.

If it does need credentials from the user, then it will output the FTP information form and return false. In this case, you should stop processing further, in order to allow the user to input credentials. Any form fields names you specified will be included in the resulting form as hidden inputs, and will be returned when the user resubmits the form, this time with FTP credentials.

Note: Do not use the reserved names of `hostname`, `username`, `password`, `public_key`, or `private_key` for your own inputs. These are used by the credentials form itself. Alternatively, if you do use them, the `request_filesystem_credentials` function will assume that they are the incoming FTP credentials.

When the credentials form is submitted, it will look in the incoming POST data for these fields, and if found, it will return them in an array suitable for passing to WP\_Filesystem, which is the next step.

## Initializing [WP\_Filesystem\_Base](#reference/classes/wp_filesystem_base)

Before the WP\_Filesystem can be used, it must be initialized with the proper credentials. This can be done like so:

```php
if ( ! WP_Filesystem( $creds ) ) {
	request_filesystem_credentials( $url, '', true, false, null );
	return;
}
```

First you call the `WP_Filesystem` function, passing it the credentials from before. It will then attempt to verify the credentials. If they are good, then it will return true. If not, then it will return false.

In the case of bad credentials, the above code then makes another call to `request_filesystem_credentials()`, but this time with the error flag set to true. This forces the function to display the form again, this time with an error message for the user saying that their information was incorrect. The user can then re-enter their information and try again.

## Using the [WP\_Filesystem\_Base](#reference/classes/wp_filesystem_base) Class

Once the class has been initialized, then the global `$wp_filesystem` variable becomes defined and available for you to use. The `WP_Filesystem_Base` class defines several methods you can use to read and write local files. For example, to write a file, you could do this:

```php
global $wp_filesystem;
$wp_filesystem->put_contents(
  '/tmp/example.txt',
  'Example contents of a file',
  FS_CHMOD_FILE // predefined mode settings for WP files
);
```

Other available methods include `get_contents()` and `get_contents_array()` to read files; `wp_content_dir()`, `wp_plugins_dir()`, and `wp_themes_dir()` which will return the filesystem paths to those directories; `mkdir()` and `rmdir()` to make and remove directories; along with several other handy filesystem related functions.

## Tips and Tricks

**When can you call `request_filesystem_credentials()`?**  
One of the initial challenges for developers using the WP Filesystem API is you cannot initialize it just anywhere. The `request_filesystem_credentials()` function isn’t available until AFTER the `wp_loaded` action hook, and is only included in the admin area. One of the earliest hooks you can utilize is admin\_init.

**The WP Filesystem API Methodology**  
Another problem with calling `request_filesystem_credentials()` directly is you cannot determine if you will have direct access to the file system or if the user will be prompted for credentials. From a UX standpoint this becomes problematic if you want to make changes to files when a plugin is activated. Just imagine, a user goes to install your plugin via their admin area, enters their FTP details, completes the installation and activates your plugin. But as soon as they do, they are prompted to enter their FTP details again and are left scratching their head as to why.

A better solution is to add a notice (using admin\_notice for instance) that explains to the user that your plugin needs to write to the file system to complete the installation. Along with that notice, you would add a button or link which triggers your function call to `request_filesystem_credentials()`.

But let’s expand on this scenario further and say this plugin needs to access the file system every time the plugin updated. If you’re regularly releasing updates and bug fixes, it soon becomes tenuous for users to click your actionable button every time they upgrade. What would be nice is to determine if we have direct write access before calling `request_filesystem_credentials()` and silently do the installation. That’s where the `get_filesystem_method()` function comes into play.

```php
$access_type = get_filesystem_method();
if ( $access_type === 'direct' )
{
	/* you can safely run request_filesystem_credentials() without any issues and don't need to worry about passing in a URL */
	$creds = request_filesystem_credentials( site_url() . '/wp-admin/', '', false, false, array() );
	/* initialize the API */
	if ( ! WP_Filesystem( $creds ) ) {
		/* any problems and we exit */
		return false;
	}	
	global $wp_filesystem;
	/* do our file manipulations below */
}	
else
{
	/* don't have direct write access. Prompt user with our notice */
	add_action( 'admin_notices', 'you_admin_notice_function' ); 	
}
```

This approach works well for all involved. Users who don’t have direct write permissions get prompted to make changes to the file system, while the plugin goes unnoticed (in a good way) on sites who can directly write to the file system.

**Working with Paths**  
WordPress developers worth their salt should be familiar with setting up constants or variables to access their plugin’s path. It usually looks like this:

```php
define( 'MY_PLUGIN_DIR', plugin_dir_path( __FILE__ ) ); 
```

What you need to take into consideration when working with the Filesystem API is the path to the files won’t always be the same. When using the direct method you can safely use the `MY_PLUGIN_DIR` constant, but if you tried to do the same when the FTP or SSH method is used then you can run into problems. This is because FTP and SSH are usually rooted to a directory somewhere along the absolute path. Now, the Filesystem API gives us ways of overcoming this problem with methods like `$wp_filesystem->wp_content_dir()` and `$wp_filesystem->wp_plugins_dir()`, but it isn’t practical to define the path to your plugin twice.

```php
/* replace the 'direct' absolute path with the Filesystem API path */
 $plugin_path = str_replace( ABSPATH, $wp_filesystem->abspath(), MY_PLUGIN_DIR );
/* Now we can use $plugin_path in all our Filesystem API method calls */
if ( ! $wp_filesystem->is_dir( $plugin_path . '/config/' ) ) {
	/* directory didn't exist, so let's create it */
	$wp_filesystem->mkdir( $plugin_path . '/config/' );
}
```

**`unzip_file($file, $to);`**

While this function requires the Filesystem API to be initialized, it isn’t a method of the `$wp_filesystem` object, which might be why its arguments are at odds with each other. The first parameter, `$file`, needs to be the absolute ‘direct’ path to the file, while the `$toparameter` needs to point to the absolute path of the Filesystem.

```php
define( 'MY_PLUGIN_DIR', plugin_dir_path( __FILE__ ) ); 
global $wp_filesystem; // already initialised the Filesystem API previously
$plugin_path = str_replace( ABSPATH, $wp_filesystem->abspath(), MY_PLUGIN_DIR ); // get remote system absolute path
/* Acceptable way to use the function */
$file = MY_PLUGIN_DIR . '/plugin-file.zip'; 
$to = $plugin_path;
$result = unzip_file( $file, $to ); 
if ( $result !== true ) {
	// unzip failed. Handle Error
}
/* Not acceptable */
$file = MY_PLUGIN_DIR . '/plugin-file.zip';
$to = MY_PLUGIN_DIR; // $to cannot be the 'direct' absolute path to the folder otherwise FTP and SSH methods are left in the cold
unzip_file( $file, $to ); 
$file = $plugin_path . '/plugin-file.zip'; // If $file isn't the 'direct' absolute path then users not using FTP and SSH methods are left in the cold
$to = $plugin_path;
unzip_file( $file, $to );
```

## External references

- [Tutorial: Using the WP\_Filesystem](http://ottopress.com/2011/tutorial-using-the-wp_filesystem/) by Otto
- [Filesystem Debug Helper Plugin](https://github.com/eventespresso/filesystem-debug-helper)

---

# Global Variables <a name="apis/global-variables" />

Source: https://developer.wordpress.org/apis/global-variables/

## Introduction

WordPress-specific global variables are used throughout WordPress code for various reasons. Almost all data that WordPress generates can be found in a global variable.

Note that it’s best to use the appropriate API functions when available, instead of modifying globals directly.

To access a global variable in your code, you first need to globalize the variable with `global $variable;`.

**Accessing other globals besides the ones listed below is not recommended.**

### Inside the Loop variables

While inside the loop, these globals are set, containing information about the current post being processed.

- `$post` ([WP\_Post](#reference/classes/wp_post)): The post object for the current post. Object described in [WP\_Post Class Reference](#reference/classes/wp_post).
- `$posts`: Used by some core functions, not to be mistaken for `$query->$posts`.
- `$authordata` ([WP\_User](#reference/classes/wp_user)): The author object for the current post. Object described in [WP\_User Class Reference](#reference/classes/wp_user).
- `$currentday` (string): Day that the current post was published.
- `$currentmonth` (string): Month that the curent post was published.
- `$page` (int): The page of the current post being viewed. Specified by the query var page.
- `$pages` (array): The content of the pages of the current post. Each page elements contains part of the content separated by the `<!--nextpage-->` tag.
- `$multipage` (boolean): Flag to know if the current post has multiple pages or not. Returns `true` if the post has multiple pages, related to `$pages`.
- `$more` (boolean): Flag to know if WordPress should enforce the `<!--more-->` tag for the current post. WordPress will not enforce the more tag if `true`.
- `$numpages` (int): Returns the number of pages in the post, related to `$pages`.

### Browser Detection Booleans

These globals store data about which browser the user is on.

- `$is_iphone` (boolean): iPhone Safari
- `$is_chrome` (boolean): Google Chrome
- `$is_safari` (boolean): Safari
- `$is_NS4` (boolean): Netscape 4
- `$is_opera` (boolean): Opera
- `$is_macIE` (boolean): Mac Internet Explorer
- `$is_winIE` (boolean): Windows Internet Explorer
- `$is_gecko` (boolean): FireFox
- `$is_lynx` (boolean): Lynx
- `$is_IE` (boolean): Internet Explorer
- `$is_edge` (boolean): Microsoft Edge

### Web Server Detection Booleans

These globals store data about which web server WordPress is running on.

- `$is_apache` (boolean): Apache HTTP Server
- `$is_IIS` (boolean): Microsoft Internet Information Services (IIS)
- `$is_iis7` (boolean): Microsoft Internet Information Services (IIS) v7.x
- `$is_nginx` (boolean): Nginx web server

### Version Variables

- `$wp_version` (string): The installed version of WordPress
- `$wp_db_version` (int): The version number of the database
- `$tinymce_version` (string): The installed version of TinyMCE
- `$manifest_version` (string): The cache manifest version
- `$required_php_version` (string): The version of PHP this install of WordPress requires
- `$required_mysql_version` (string): The version of MySQL this install of WordPress requires

### Misc

- `$super_admins` (array): An array of user IDs that should be granted super admin privileges (multisite). This global is only set by the site owner (e.g., in `wp-config.php`), and contains an array of IDs of users who should have super admin privileges. If set it will override the list of super admins in the database.
- `$wp_query` (object): The global instance of the [WP\_Query](#reference/classes/wp_query) class.
- `$wp_rewrite` (object): The global instance of the [WP\_Rewrite](#reference/classes/wp_rewrite) class.
- `$wp` (object): The global instance of the [WP](#reference/classes/wp) environment setup class.
- `$wpdb` (object): The global instance of the [wpdb](#reference/classes/wpdb) class.
- `$wp_locale` (object): The global instance of the [WP\_Locale](#reference/classes/wp_locale) class.
- `$wp_admin_bar` (object): The global instance of the [WP\_Admin\_Bar](#reference/classes/wp_admin_bar) class.
- `$wp_roles` (object): The global instance of the [WP\_Roles](#reference/classes/wp_roles) class.
- `$wp_meta_boxes` (array): Object containing all registered metaboxes, including their id’s, args, callback functions and title for all post types including custom.
- `$wp_registered_sidebars` (array)
- `$wp_registered_widgets` (array)
- `$wp_registered_widget_controls` (array)
- `$wp_registered_widget_updates` (array)

### Admin Globals

- `$pagenow` (string): Used in wp-admin.   
    See also [get\_current\_screen()](#reference/functions/get_current_screen) for the WordPress Admin Screen API.
- `$post_type` (string): Used in wp-admin
- `$allowedposttags` (array)
- `$allowedtags` (array)
- `$menu` (array)

---

# Metadata <a name="apis/metadata" />

Source: https://developer.wordpress.org/apis/metadata/

## Overview

The **Metadata API** is a simple and standarized way for retrieving and manipulating metadata of various WordPress object types.

Metadata for an object is a represented by a simple key-value pair.

Objects may contain multiple metadata entries that share the same key and differ only in their value.

## Function Reference

Add/Delete Metadata:

- [add\_metadata()](#reference/functions/add_metadata)
- [delete\_metadata()](#reference/functions/delete_metadata)

Get/Update Metadata:

- [get\_metadata()](#reference/functions/get_metadata)
- [update\_metadata()](#reference/functions/update_metadata)

## Database Requirements

This function assumes that a dedicated MySQL table exists for the `$meta_type` you specify. Some desired `$meta_types` do not come with pre-installed WordPress tables, and so they must be created manually.

### Default Meta Tables

Assuming a prefix of `wp_`, WordPress’s included meta tables are:

- `wp_commentmeta`: Metadata for specific comments.
- `wp_postmeta`: Metadata for pages, posts, and all other post types.
- `wp_usermeta`: Metadata for users.

### Meta Table Structure

To store data for meta types not included in the above table list, a new table needs to be created. All meta tables require four columns.

- `meta_id` – BIGINT(20): unsigned, auto\_increment, not null, primary key.
- `object_id` – BIGINT(20): unsigned, not null.  
    Replace *object* with the singular name of the content type being used.  
    For instance, this column might be named post\_id or term\_id.  
    Although this column is used like a foreign key, it should not be defined as one.
- `meta_key` – VARCHAR(255): The key of your custom meta data.
- `meta_value` – LONGTEXT: The value of your custom meta data.

## Source File

Metadata API is located in `<a href="https://core.trac.wordpress.org/browser/tags/5.2.1/src/wp-includes/meta.php#L0">wp-includes/meta.php</a>`.

## Related

****Metadata API****: [add\_metadata()](#reference/functions/add_metadata), [get\_metadata()](#reference/functions/get_metadata), [update\_metadata()](#reference/functions/update_metadata), [delete\_metadata()](#reference/functions/delete_metadata).

---

# Options <a name="apis/options" />

Source: https://developer.wordpress.org/apis/options/

## Overview

The **Options API** is a simple and standardized way of storing data in the database. The API makes it easy to create, access, update, and delete options. All the data is stored in the [wp\_options table](#apis/handbook/database) under a given custom name.

This page contains the technical documentation needed to use the Options API. A list of default options can be found in the [Option Reference](https://codex.wordpress.org/Option_Reference) (link to Codex version, waiting for content migration to HelpHub).

Note that the `_site_` functions are essentially the same as their counterparts. The only differences occur for WP Multisite, when the options apply network-wide and the data is stored in the [wp\_sitemeta](#apis/handbook/database) table under the given custom name.

## Function Reference

**Add/Delete Option**:

- [add\_option()](#reference/functions/add_option)
- [delete\_option()](#reference/functions/delete_option)
- [add\_site\_option()](#reference/functions/add_site_option)
- [delete\_site\_option()](#reference/functions/delete_site_option)

**Get/Update Option:**

- [get\_option()](#reference/functions/get_option)
- [update\_option()](#reference/functions/update_option)
- [get\_site\_option()](#reference/functions/get_site_option)
- [update\_site\_option()](#reference/functions/update_site_option)

## Examples

```php
// Create an option to the database
add_option( $option, $value = , $deprecated = , $autoload = 'yes' );

// Removes option by name.
delete_option( $option );

// Fetch a saved option
get_option( $option, $default = false );

// Update the value of an option that was already added.
update_option( $option, $newvalue );
```

## Available options by category

### Discussion

- `blacklist_keys`: When a comment contains any of these words in its content, name, URL, e-mail, or IP, it will be marked as spam. One word or IP per line. It will match inside words, so “press” will match “WordPress.”  
    Default: NULL  
    *Data type:***String (possibly multi-line)**
- `comment_max_links`: Hold a comment in the queue if it contains the value of this option or more.  
    Default: 2  
    *Data type:***Integer**
- `comment_moderation`: Before a comment appears, an administrator must always approve the comment.  
    **1** : *Yes*  
    0 : *False* (default)  
    *Data type:***Integer**
- `comments_notify`: E-mail me when anyone posts a comment.  
    **1** : *Yes* (default)  
    0 : *No*  
    *Data type:***Integer**
- `default_comment_status`: Allow comments (can be overridden with individual posts)  
    **open** : *Allow comments* (default)  
    **closed** : *Disallow comments*  
    *Data type:***String**
- `default_ping_status`: Allow link notifications from other blogs (pingbacks and trackbacks).  
    **open** : *Allow pingbacks and trackbacks from other blogs* (default)  
    **closed** : *Disallow pingbacks and trackbacks from other blogs*  
    *Data type:***String**
- `default_pingback_flag`: Attempt to notify any blogs linked to from the article (slows down posting).  
    **1** : *Yes* (default)  
    0 : *No*  
    *Data type:***Integer**
- `moderation_keys`: When a comment contains any of these words in its content, name, URL, e-mail, or IP, it will be held in the moderation queue. One word or IP per line. It will match inside words, so “press” will match “WordPress.”  
    Default: NULL  
    *Data type:***String (possibly multi-line)**
- `moderation_notify`: E-mail me when a comment is held for moderation.  
    **1** : *Yes* (default)  
    0 : *No*  
    *Data type:***Integer**
- `require_name_email`: Before a comment appears, the comment author must fill out his/her name and email.  
    **1** : *Yes* (default)  
    0 : *No*  
    *Data type:***Integer**
- `thread_comments`: Enable WP-native threaded (nested) comments.  
    **1** : *Yes*  
    0 : *No* (default)  
    *Data type:***Integer**
- `thread_comments_depth`: Set the number of threading levels for comments.  
    **1** thru   
    **10** : levels  
    Default: 5  
    *Data type:***Integer**
- `show_avatars`: Avatar Display  
    **1** : (default) *Show Avatars*  
    0 : *Do not show Avatars*  
    *Data type:***Integer**
- `avatar_rating`: Maximum Rating  
    **G** : (default) *Suitable for all audiences*  
    **PG** : *Possibly offensive, usually for audiences 13 and above*  
    **R** : *Intended for adult audiences above 17*  
    **X** : *Even more mature than above*  
    *Data type:***String**
- `avatar_default`: Default Avatar  
    **mystery** : (default) *Mystery Man*  
    **blank** : *Blank*  
    **gravatar\_default** : *Gravatar Logo*  
    **identicon** : *Identicon (Generated)*  
    **wavatar** : *Wavatar (Generated)*  
    **monsterid** : *MonsterID (Generated)*  
    **retro** : *Retro (Generated)*  
    *Data type:***String**
- `close_comments_for_old_posts`: Automatically close comments on old articles  
    **1** : *Yes*  
    0 : *No* (default)  
    *Data type:***Integer**
- `close_comments_days_old`: Automatically close comments on articles older than x days  
    Default: 14  
    *Data type:***Integer**
- `show_comments_cookies_opt_in`: Show the cookies opt-in checkbox on the comment form and enable comment cookies  
    **1** : *Yes* (default as of 4.9.8)  
    0 : *No*  
    *Data type:***Integer**
- `page_comments`: Break comments into pages  
    **1** : *Yes* (default)  
    0 : *No*  
    *Data type:***Integer**
- `comments_per_page`:  
    Default: 50  
    *Data type:***Integer**
- `default_comments_page`:  
    Default: ‘newest’  
    *Data type:***String**
- `comment_order`:  
    **asc** : (default)  
    **desc** :  
    *Data type:***String**
- `comment_whitelist`: Comment author must have a previously approved comment  
    **1** : *Yes* (default)  
    0 : *No*  
    *Data type:*

### General

- `admin_email`: Administrator email  
    Default: ‘you@example.com’  
    *Data type:***String**
- `blogdescription`: Blog tagline  
    Default: ‘\_\_(‘Just another WordPress weblog’)’  
    *Data type:***String**
- `blogname`: Blog title  
    Default: ‘\_\_(‘My Blog’)’  
    *Data type:***String**
- `comment_registration`: Users must be registered and logged in to comment  
    **1** : *Yes*  
    0 : *No* (default)  
    *Data type:***Integer**
- `date_format`: Default date format  
    Default: ‘\_\_(‘F j, Y’)’  
    *Data type:***String**
- `default_role`: The default role of users who register at the blog.  
    **subscriber** (default)  
    **administrator**  
    **editor**  
    **author**  
    **contributor**  
    *Data type:***String**
- `gmt_offset`: Times in the blog should differ by this value.  
    **-6** : *GMT -6 (aka Central Time, USA)*  
    0 : *GMT (aka Greenwich Mean Time)*  
    Default: [date](http://www.php.net/manual/en/function.date.php)(‘Z’) / 3600  
    *Data type:***Integer**
- `home`: Blog address (URL)  
    Default: [wp\_guess\_url()](#reference/functions/wp_guess_url)   
    *Data type:***String (URI)**
- `siteurl`: WordPress address (URL)  
    Default `wp_guess_url()`  
    *Data type:***String (URI)**
- `start_of_week`: The starting day of the week.  
    0 : *Sunday*  
    **1** : *Monday* (default)  
    **2** : *Tuesday*  
    **3** : *Wednesday*  
    **4** : *Thursday*  
    **5** : *Friday*  
    **6** : *Saturday*  
    *Data type:***Integer**
- `time_format`: Default time format  
    Default: ‘\_\_(‘g:i a’)’  
    *Data type:***String**
- `timezone_string`: Timezone  
    Default: NULL  
    *Data type:***String**
- `users_can_register`: Anyone can register  
    **1** : *Yes*  
    0 : *No* (default)  
    *Data type:***Integer**

### Links

- `links_updated_date_format`:  
    Default `__('F j, Y g:i a')`  
    *Data type:***String**
- `links_recently_updated_prepend`:  
    Default empty  
    *Data type: **String***
- `links_recently_updated_append`  
    *Default* empty  
    *Data type:***String**
- `links_recently_updated_time`  
    Default: 120  
    *Data type:***Integer**

### Media

- `thumbnail_size_w`:  
    Default: 150  
    *Data type:***Integer**
- `thumbnail_size_h`:  
    Default: 150  
    *Data type:***Integer**
- `thumbnail_crop`: Crop thumbnail to exact dimensions (normally thumbnails are proportional)  
    **1** : *Yes* (default)  
    0 : *No*  
    *Data type:***Integer**
- `medium_size_w`:   
    Default: 300  
    *Data type:***Integer**
- `medium_size_h`  
    Default: 300  
    *Data type:***Integer**
- `large_size_w`  
    Default: 1024  
    *Data type:***Integer**
- `large_size_h`  
    Default: 1024  
    *Data type:***Integer**
- `embed_autourls`: Attempt to automatically embed all plain text URLs  
    Default: 1  
    *Data type:***Integer**
- `embed_size_w`  
    Default: NULL  
    *Data type:***Integer**
- `embed_size_h`  
    Default: 600  
    *Data type:***Integer**

### Miscellaneous

- `hack_file`: Use legacy `my-hacks.php` file support  
    **1** : *Yes*  
    0 : *No* (default)  
    *Data type:***Integer**
- `html_type`: Default MIME type for blog pages (text/html, text/xml+html, etc.)  
    Default: ‘text/html’  
    *Data type:***String (MIME type)**
- `secret`: Secret value created during installation used with salting, etc.  
    Default: wp\_generate\_password(64)  
    *Data type:***String (MD5)**
- `upload_path`: Store uploads in this folder (relative to the WordPress root)  
    Default: NULL  
    *Data type:***String (relative path)**
- `upload_url_path`: URL path to upload folder (will be blank by default – Editable in “All Settings” Screen.  
    *Data type:***String (URL path)**
- `uploads_use_yearmonth_folders`: Organize my uploads into month- and year-based folders  
    **1** : *Yes* (default)  
    0 : *No* (default for safe mode)  
    *Data type:***Integer**
- `use_linksupdate`: Track links’ update times  
    **1** : *Yes*  
    0 : *No* (default)  
    *Data type:***Integer**

### Permalinks

- `permalink_structure`: The desired structure of your blog’s permalinks. Some examples:  
    `/%year%/%monthnum%/%day%/%postname%/`: Date and name based  
    `/archives/%post_id%/`: Numeric  
    `/%postname%/`: Post name-based  
    Default: NULL  
    *Data type:***String**
- `category_base`: The default category base of your blog categories permalink.  
    Default: NULL  
    *Data type:***String**
- `tag_base`: The default tag base for your blog tags permalink.  
    Default: NULL  
    *Data type:***String**

### Privacy

- `blog_public`:  
    **1** : *I would like my blog to be visible to everyone, including search engines (like Google, Sphere, Technorati) and archivers.* (default)  
    0 : *I would like to block search engines, but allow normal visitors.*  
    *Data type:***Integer**

### Reading

- `blog_charset`: Encoding for pages and feeds. The character encoding you write your blog in (UTF-8 is recommended).  
    Default: `UTF-8`  
    *Data type:***String**
- `gzipcompression`: WordPress should compress articles (with gzip) if browsers ask for them.  
    **1** : *Yes*  
    0 : *No* (default)  
    *Data type:***Integer**
- `page_on_front`: The ID of the page that should be displayed on the front page. Requires `show_on_front`‘s value to be **page**.  
    *Data type:***Integer**
- `page_for_posts`: The ID of the page that displays posts. Useful when `show_on_front`‘s value is **page**.  
    *Data type:***Integer**
- `posts_per_page`: Show at most **x** many posts on blog pages.  
    Default: 10  
    *Data type:***Integer**
- `posts_per_rss`: Show at most **x** many posts in RSS feeds.  
    Default: 10  
    *Data type:***Integer**
- `rss_language`: Language for RSS feeds (metadata purposes only)  
    Default: `en`  
    *Data type:***String (ISO two-letter language code)**
- `rss_use_excerpt`: Show an excerpt instead of the full text of a post in RSS feeds  
    **1** : *Yes*  
    0 : *No* (default)  
    *Data type:***Integer**
- `show_on_front`: What to show on the front page  
    **posts** : *Your latest posts* (default)  
    **page** : *A static page (see page\_on\_front)*  
    *Data type:***String**

### Themes

- `template`: The slug of the currently activated theme (how it is accessed by path, ex. `/wp-content/themes/my-theme` (`my-theme` would be the value of this option).  
    Default: ‘default’  
    *Data type:***String**
- `stylesheet`: The slug of the currently activated stylesheet (style.css) (how it is accessed by path, ex. `/wp-content/themes/my-style` (my-style would be the value of this option)  
    Default: ‘default’  
    *Data type:***String**

### Writing

- `default_category`: ID of the category that posts will be put in by default  
    Default: 1  
    *Data type:***Integer**
- `default_email_category`: ID of the category that posts will be put in by default when written via e-mail  
    Default: 1  
    *Data type:***Integer**
- `default_link_category`: ID of the category that links will be put in by default  
    Default: 2  
    *Data type:***Integer**
- `default_post_edit_rows`: Size of the post box (in lines)  
    Default: 10  
    *Data type:***Integer**
- `mailserver_login`: Mail server username for posting to WordPress by e-mail  
    Default: ‘login@example.com’  
    *Data type:***String**
- `mailserver_pass`: Mail server password for posting to WordPress by e-mail  
    Default: ‘password’  
    *Data type:***String**
- `mailserver_port`: Mail server port for posting to WordPress by e-mail  
    Default: 110  
    *Data type:***Integer**
- `mailserver_url`: Mail server for posting to WordPress by e-mail  
    Default: ‘mail.example.com’  
    *Data type:***String**
- `ping_sites`: When you publish a new post, WordPress automatically notifies the following site update services. For more about this, see [Update Services](https://codex.wordpress.org/Update_Services). Separate multiple service URLs with line breaks. Requires `blog_public` to have a value of **1**.  
    Default: ‘[http://rpc.pingomatic.com/’](http://rpc.pingomatic.com/')  
    *Data type:***String (possibly multi-line)**
- `use_balanceTags`: Correct invalidly-nested XHTML automatically  
    **1** : *Yes*  
    0 : *No* (default)  
    *Data type:***Integer**
- `use_smilies`: Convert emoticons like `:-)` and `:P` to graphics when displayed  
    **1** : *Yes* (default)  
    0 : *No*  
    *Data type:***Integer**
- `use_trackback`: Enable sending and receiving of trackbacks  
    **1** : *Yes*  
    0 : *No* (default)
- `enable_app`: Enable the Atom Publishing Protocol  
    **1** : *Yes*  
    0 : *No* (default)  
    *Data type:***Integer**
- `enable_xmlrpc`: Enable the WordPress, Movable Type, MetaWeblog and Blogger XML-RPC publishing protocols  
    **1** : *Yes*  
    0 : *No* (default)  
    *Data type:***Integer**

### Uncategorized

- `active_plugins`: Returns an array of strings containing the path of the *main* php file of the plugin. The path is relative to the *plugins* folder. An example of path in the array : `/mainpage.php`.  
    Default: array()  
    *Data type:***Array**
- `advanced_edit`:   
    Default: 0  
    *Data type:***Integer**
- `recently_edited`:   
    Default: NULL  
    *Data type:*
- `image_default_link_type`:   
    Default: ‘file’  
    *Data type:* ‘file’, ‘none’
- `image_default_size`:   
    Default: NULL  
    *Data type:* ‘thumbnail’, ‘medium’, ‘large’ or Custom size
- `image_default_align`:   
    Default: NULL  
    *Data type:* ‘left’, ‘right’, ‘center’, ‘none’
- `sidebars_widgets`: Returns array of sidebar states (list of active and inactive widgets).  
    Default:  
    *Data type:***Array**
- `sticky_posts`:   
    Default: array()  
    *Data type:*
- `widget_categories`:  
    Default: array()  
    *Data type:*
- `widget_text`:  
    Default: array()  
    *Data type:*
- `widget_rss`:  
    Default: array()  
    *Data type:*

## All Settings Screen

[WordPress 3.0](https://wordpress.org/documentation/wordpress-version/version-3-0/) removed Settings &gt; Miscellaneous screen and some of the options cannot be reached (e.g. `upload_url_path`). You may use the All Settings Screen to view and change almost all options listed above. It is accessible by visiting `/wp-admin/options.php`

![](https://i0.wp.com/developer.wordpress.org/files/2019/08/all-settings-screen.png?resize=1024%2C640&ssl=1)

---

# Plugins <a name="apis/plugins" />

Source: https://developer.wordpress.org/apis/plugins/

Refer [Plugin Developer Handbook](#plugins).

---

# Quicktags <a name="apis/quicktags" />

Source: https://developer.wordpress.org/apis/quicktags/

## Description

The Quicktags API allows you to include additional buttons in the Text (HTML) mode of the WordPress Classic editor.

![](https://i0.wp.com/developer.wordpress.org/files/2019/08/quicktags-editor.png?resize=550%2C90&ssl=1)## History

This API was introduced in [WordPress 3.3](/support/wordpress-version/version-3-3).

## Usage

```js
QTags.addButton( id, display, arg1, arg2, access_key, title, priority, instance, object );
```

## Parameters

- `<strong>id</strong>` **(*****string*****) (*****required*****):** The html id for the button. Default: *None*
- `<strong>display</strong>` **(*****string*****) (*****required*****):** The html value for the button. Default: *None*
- `<strong>arg1</strong>` **(*****string*****) (*****required*****):** Either a starting tag to be inserted like “&lt;span&gt;” or a callback that is executed when the button is clicked. Default: *None*
- `<strong>arg2</strong>` **(*****string*****) (*****optional*****):** Ending tag like “&lt;/span&gt;”. Leave empty if tag doesn’t need to be closed (i.e. “&lt;hr /&gt;”). Default: *None*
- `<strong>access_key</strong>` **(*****string*****) (*****optional*****):** **Deprecated and Not used.** Shortcut access key for the button. Default: *None*
- `<strong>title</strong>` **(*****string*****) (*****optional*****):** The html title value for the button. Default: *None*
- `<strong>priority</strong>` **(*****int*****) (*****optional*****):** A number representing the desired position of the button in the toolbar. 1 – 9 = first, 11 – 19 = second, 21 – 29 = third, etc. Default: *None*
- `<strong>instance</strong>` **(*****string*****) (*****optional*****):** Limit the button to a specific instance of Quicktags, add to all instances if not present. Default: *None*
- `<strong>object</strong>` **(*****attr*****) (*****optional*****):** Used to pass additional attributes. Currently supports `ariaLabel` and `ariaLabelClose` (for “close tag” state)

## Return Values

(*mixed*) Null or the button object that is needed for back-compat.

## Examples

Below examples would add HTML buttons to the default Quicktags in the Text editor.

### Modern example

This example uses the inline JS API to add the JavaScript when quicktags are enqueued.

```php
/**
 * Add a paragraph tag button to the quicktags toolbar
 *
 * @return void
 */
function wporg_add_quicktag_paragraph() {
	wp_add_inline_script(
		'quicktags',
		"QTags.addButton( 'eg_paragraph_v2', 'p_v2', '<p>', '</p>', '', 'Paragraph tag v2', 2, '', { ariaLabel: 'Paragraph', ariaLabelClose: 'Close Paragraph tag' });"
	);
}
add_action( 'admin_enqueue_scripts', 'wporg_add_quicktag_paragraph' );
```

### Another modern example

In this example,

1. Enqueue a script using the proper WordPress function [`wp_enqueue_script`](#reference/functions/wp_enqueue_script).
2. Call any JavaScript that you want to fire when or after the QuickTag was clicked inside the QuickTag call-back.

#### Enqueue the script

Put below codes into active theme’s `functions.php`.

```php
function enqueue_quicktag_script(){
	wp_enqueue_script( 'your-handle', get_template_directory_uri() . '/editor-script.js', array( 'jquery', 'quicktags' ), '1.0.0', true );
}
add_action( 'admin_enqueue_scripts', 'enqueue_quicktag_script' );
```

#### The JavaScript itself

Create new file `editor-script` and save under the active theme directory.

```javascript
QTags.addButton( 'eg_paragraph_v3', 'p_v3', my_callback, '', '', 'Prompted Paragraph tag', 3, '', { ariaLabel: 'Prompted Paragraph' } ); 

function my_callback(){
  var my_stuff = prompt( 'Enter Some Stuff:', '' );
  if ( my_stuff ) {
    QTags.insertContent( '<p>' + my_stuff + '</p>' );
  }
}
```

### Traditional example

This example manually add hardcoded JavaScript with `wp_script_is` on the admin footer hook. You should consider to use modern example. See above.

```php
/**
 * Add more buttons to the quicktags HTML editor
 *
 * @return void
 */
function wporg_traditional_add_quicktags() {
	if ( ! wp_script_is( 'quicktags' ) ) {
		return;
	}

	?>
	<script type="text/javascript">
		QTags.addButton( 'eg_paragraph', 'p', '<p>', '</p>', '', 'Paragraph tag', 1, '', { ariaLabel: 'Paragraph', ariaLabelClose: 'Close Paragraph tag' } );
		QTags.addButton( 'eg_hr', 'hr', '<hr />', '', '', 'Horizontal rule line', 201, '', { ariaLabel: 'Horizontal' } );
		QTags.addButton( 'eg_pre', 'pre', '', '', '', 'Preformatted text tag', 111, '', { ariaLabel: 'Pre', ariaLabelClose: 'Close Pre tag' } );
	</script>
	<?php
}

add_action( 'admin_print_footer_scripts', 'wporg_traditional_add_quicktags', 11 );
```

Note:

- To avoid a Reference Error we check to see whether or not the ‘quicktags’ script is in use.
- Since WordPress 6.0, the script loading order was changed and the error “QTags is not defined” occurs without 3rd parameter of `add_action()`. Also, you have to specfy the larger number than 10 (ex.11).

The “p” button HTML would be:

```markup
<input type="button" id="qt_content_eg_paragraph" class="ed_button button button-small" title="Paragraph tag" aria-label="Paragraph" value="p">
```

The ID value for each button is automatically prepended with the string qt\_content\_.

Here is a dump of the docblock from `quicktags.js`, it’s pretty useful on it’s own.

```php
/**
 * Main API function for adding a button to Quicktags
 *
 * Adds qt.Button or qt.TagButton depending on the args. The first three args are always required.
 * To be able to add button(s) to Quicktags, your script should be enqueued as dependent
 * on "quicktags" and outputted in the footer. If you are echoing JS directly from PHP,
 * use add_action( 'admin_print_footer_scripts', 'output_my_js', 100 ) or add_action( 'wp_footer', 'output_my_js', 100 )
 *
 * Minimum required to add a button that calls an external function:
 *     QTags.addButton( 'my_id', 'my button', my_callback );
 *     function my_callback() { alert('yeah!'); }
 *
 * Minimum required to add a button that inserts a tag:
 *     QTags.addButton( 'my_id', 'my button', '<span>', '</span>' );
 *     QTags.addButton( 'my_id2', 'my button', '<br />' );
 */
```

## Default Quicktags

Here are the values of the default Quicktags added by WordPress to the Text editor. ID must be unique. When adding your own buttons, do not use these values:

| **ID** | **Value** | **Tag Start** | **Tag End** |
|---|---|---|---|
| link | link | &lt;a href=”‘ + URL + ‘”&gt; | &lt;/a&gt; |
| strong | b | &lt;strong&gt; | &lt;/strong&gt; |
| code | code | &lt;code&gt; | &lt;/code&gt; |
| del | del | &lt;del datetime=”‘ + \_datetime + ‘”&gt; | &lt;/del&gt; |
| fullscreen | fullscreen |  |  |
| em | i | &lt;em&gt; | &lt;/em&gt; |
| li | li | t&lt;li&gt; | &lt;/li&gt;n |
| img | img | &lt;img src=”‘ + src + ‘” alt=”‘ + alt + ‘” /&gt; |  |
| ol | ol | &lt;ol&gt;n | &lt;/ol&gt;nn |
| block | b-quote | nn&lt;blockquote&gt; | &lt;/blockquote&gt;nn |
| ins | ins | &lt;ins datetime=”‘ + \_datetime + ‘”&gt; | &lt;/ins&gt; |
| more | more | &lt;!–more–&gt; |  |
| ul | ul | &lt;ul&gt;n | &lt;/ul&gt;nn |
| spell | lookup |  |  |
| close | close |  |

Some tag values above use variables, such as URL and `_datetime`, passed from functions.

## Source File

qt.addButton() source is located in `<a href="https://core.trac.wordpress.org/browser/tags/5.2.1/src/js/_enqueues/lib/quicktags.js#L0">js/_enqueues/lib/quicktags.js</a>`, during build it’s output in `wp-incudes/js/quicktags.js` and `wp-includes/js/quicktags.min.js`.

---

# Making HTTP requests <a name="apis/making-http-requests" />

Source: https://developer.wordpress.org/apis/making-http-requests/

Very often we need to make HTTP requests from our theme or plugin, for example when we need to fetch data from an external API. Luckily WordPress has many helper functions to help you do that.

In this section, you will learn how to properly make HTTP requests and handle their responses.

Here’s an example of what you’re going to see

```php
$response = wp_remote_get( 'https://api.github.com/users/wordpress' );
$body     = wp_remote_retrieve_body( $response );
```

In the next articles you’ll see a detailed explanation on how to make the requests:

- [GETting data from an external service](#apis/making-http-requests/getting-data-from-an-external-service)
- [POSTing data to an external service](#apis/making-http-requests/posting-data-to-an-external-service)
- [Performance](#apis/making-http-requests/performance)
- [Advanced](#apis/making-http-requests/advanced)
- [Authentication](#apis/making-http-requests/authentication)

If you’re just looking for the available helper functions, here they are:

The functions below are the ones you will use to retrieve a URL.

- [`wp_remote_get()`](#reference/functions/wp_remote_get): Retrieves a URL using the GET HTTP method.
- [`wp_remote_post()`](#reference/functions/wp_remote_post): Retrieves a URL using the POST HTTP method.
- [`wp_remote_head()`](#reference/functions/wp_remote_head): Retrieves a URL using the HEAD HTTP method.
- [`wp_remote_request()`](#reference/functions/wp_remote_request): Retrieves a URL using either the default GET or a custom HTTP method that you specify.

The other helper functions deal with retrieving different parts of the response. These make usage of the API very simple and are the preferred method for processing response objects.

- `<a href="#reference/functions/wp_remote_retrieve_body">wp_remote_retrieve_body()</a>` – Retrieves just the body from the response.
- `<a href="#reference/functions/wp_remote_retrieve_header">wp_remote_retrieve_header()</a>` – Retrieve a single header by name from the raw response.
- `<a href="#reference/functions/wp_remote_retrieve_headers">wp_remote_retrieve_headers()</a>` – Retrieve only the headers from the raw response.
- `<a href="#reference/functions/wp_remote_retrieve_response_code">wp_remote_retrieve_response_code()</a>` – Retrieve the response code for the HTTP response. This should be 200, but could be 4xx or even 3xx on failure.
- `<a href="#reference/functions/wp_remote_retrieve_response_message">wp_remote_retrieve_response_message()</a>` – Retrieve only the response message from the raw response.

---

# GETting data from an external service <a name="apis/making-http-requests/getting-data-from-an-external-service" />

Source: https://developer.wordpress.org/apis/making-http-requests/getting-data-from-an-external-service/

GETting data is made incredibly simple in WordPress through the `<a href="#reference/functions/wp_remote_get" title="wp_remote_get">wp_remote_get()</a>` function. This function takes the following two arguments:

1. `$url` – Resource to retrieve data from. This must be in a standard HTTP format
2. `$args` – OPTIONAL – You may pass an array of arguments in here to alter behavior and headers, such as cookies, follow redirects, etc.

The following defaults are assumed, though they can be changed via the `$args` parameter:

- method – GET
- timeout – 5 – How long to wait before giving up
- redirection – 5 – How many times to follow redirections.
- httpversion – 1.0
- blocking – true – Should the rest of the page wait to finish loading until this operation is complete?
- headers – array()
- body – null
- cookies – array()

Because [GitHub](https://github.com/) provides an excellent API that does not require app registration for many public aspects we will target GitHub API in the following examples.

Let’s use the URL to a GitHub WordPress organization and see what sort of information we can get.

```php
$response = wp_remote_get( 'https://api.github.com/users/wordpress' );
```

`$response` will contain all the headers, content, and other meta data about our request.

Response from previous example will be something like

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

	[body] => {
"login": "WordPress",
"id": 276006,
"node_id": "MDEyOk9yZ2FuaXphdGlvbjI3NjAwNg==",
"avatar_url": "https://avatars0.githubusercontent.com/u/276006?v=4",
"gravatar_id": "",
"url": "https://api.github.com/users/WordPress",
"html_url": "https://github.com/WordPress",
"followers_url": "https://api.github.com/users/WordPress/followers",
"following_url": "https://api.github.com/users/WordPress/following{/other_user}",
"gists_url": "https://api.github.com/users/WordPress/gists{/gist_id}",
"starred_url": "https://api.github.com/users/WordPress/starred{/owner}{/repo}",
"subscriptions_url": "https://api.github.com/users/WordPress/subscriptions",
"organizations_url": "https://api.github.com/users/WordPress/orgs",
"repos_url": "https://api.github.com/users/WordPress/repos",
"events_url": "https://api.github.com/users/WordPress/events{/privacy}",
"received_events_url": "https://api.github.com/users/WordPress/received_events",
"type": "Organization",
"site_admin": false,
"name": null,
"company": null,
"blog": "https://wordpress.org/",
"location": null,
"email": null,
"hireable": null,
"bio": null,
"twitter_username": null,
"public_repos": 50,
"public_gists": 0,
"followers": 0,
"following": 0,
"created_at": "2010-05-13T22:42:10Z",
"updated_at": "2020-05-22T14:27:02Z"
}
	[response] => Array(
		[preserved_text 5237511b45884ac6db1ff9d7e407f225 /] => 200
		[message] => OK
	)

	[cookies] => Array()
	[filename] =>
)
```

### GET the body you always wanted

To retrieve response body use `<a href="#reference/functions/wp_remote_retrieve_body" title="wp_remote_retrieve_body">wp_remote_retrieve_body()</a>` function. This function takes just one parameter, the response from `<a href="#reference/functions/wp_remote_get">wp_remote_get()</a>` function.

```php
$response = wp_remote_get( 'https://api.github.com/users/wordpress' );
$body     = wp_remote_retrieve_body( $response );
```

Using the `$response` from the previous example, `$body` will be something like:

```php
{
"login": "WordPress",
"id": 276006,
"node_id": "MDEyOk9yZ2FuaXphdGlvbjI3NjAwNg==",
"avatar_url": "https://avatars0.githubusercontent.com/u/276006?v=4",
"gravatar_id": "",
"url": "https://api.github.com/users/WordPress",
"html_url": "https://github.com/WordPress",
"followers_url": "https://api.github.com/users/WordPress/followers",
"following_url": "https://api.github.com/users/WordPress/following{/other_user}",
"gists_url": "https://api.github.com/users/WordPress/gists{/gist_id}",
"starred_url": "https://api.github.com/users/WordPress/starred{/owner}{/repo}",
"subscriptions_url": "https://api.github.com/users/WordPress/subscriptions",
"organizations_url": "https://api.github.com/users/WordPress/orgs",
"repos_url": "https://api.github.com/users/WordPress/repos",
"events_url": "https://api.github.com/users/WordPress/events{/privacy}",
"received_events_url": "https://api.github.com/users/WordPress/received_events",
"type": "Organization",
"site_admin": false,
"name": null,
"company": null,
"blog": "https://wordpress.org/",
"location": null,
"email": null,
"hireable": null,
"bio": null,
"twitter_username": null,
"public_repos": 50,
"public_gists": 0,
"followers": 0,
"following": 0,
"created_at": "2010-05-13T22:42:10Z",
"updated_at": "2020-05-22T14:27:02Z"
}
```

### GET the response code

You may want to check the response code to ensure your retrieval was successful. This can be done via the `<a href="#reference/functions/wp_remote_retrieve_response_code">wp_remote_retrieve_response_code()</a>` function:

```php
$http_code = wp_remote_retrieve_response_code( $response );
```

If successful `$http_code` will contain `200`. Otherwise, it will contain some HTTP status codes.

### GET a specific header

If your desire is to retrieve a specific header, say last-modified, you can do so with [wp\_remote\_retrieve\_header()](#reference/functions/wp_remote_retrieve_header). This function takes two parameters

1. `$response` – The response from the get call
2. `$header` – Name of the header to retrieve

To retrieve the last-modified header:

```php
$last_modified = wp_remote_retrieve_header( $response, 'last-modified' );
```

You can also retrieve all of the headers in an array with [wp\_remote\_retrieve\_headers()](#reference/functions/wp_remote_retrieve_headers) function.

### GET using basic authentication

APIs that are secured more provide one or more of many different types of authentication. A common, though not highly secure, the authentication method is HTTP Basic Authentication. It can be used in WordPress bypassing ‘Authorization’ to the second parameter of the `<a href="#reference/functions/wp_remote_get">wp_remote_get()</a>` function, as well as the other HTTP method functions.

```php
$args = array(
    'headers' => array(
        'Authorization' => 'Basic ' . base64_encode( YOUR_USERNAME . ':' . YOUR_PASSWORD )
    )
);
wp_remote_get( $url, $args );
```

MORE ABOUT AUTH

---

# POSTing data to an external service <a name="apis/making-http-requests/posting-data-to-an-external-service" />

Source: https://developer.wordpress.org/apis/making-http-requests/posting-data-to-an-external-service/

POST is used to send data to the server for the server to act upon in some way. For example, a contact form. When you enter data into the form fields and click the submit button the browser takes the data and sends a POST request to the server with the text you entered into the form. From there the server will process the contact request.

## POSTing data to an API

The same helper methods (`<a href="#reference/functions/wp_remote_retrieve_body">wp_remote_retrieve_body()</a>`, etc ) are available for all of the HTTP method requests, and utilized in the same fashion.

POSTing data is done using the `<a href="#reference/functions/wp_remote_post">wp_remote_post()</a>` function, and takes exactly the same parameters as `<a href="#reference/functions/wp_remote_get">wp_remote_get()</a>`.

To send data to the server you will need to build an associative array of data. This data will be assigned to the `'body'` value. From the server side of things the value will appear in the `$_POST` variable as you would expect. i.e. if `body => array( 'myvar' => 5 )` on the server `$_POST['myvar'] = 5`.

Because GitHub does not allow POSTing to the API used in the previous example, this example will pretend that it does. Typically if you want to POST data to an API you will need to contact the maintainers of the API and get an API key or some other form of authentication token. This simply proves that your application is allowed to manipulate data on the API the same way logging into a website as a user does to the website.

Let’s assume we are submitting a contact form with the following fields: name, email, subject, comment. To set up the body we do the following:

```php
$body = array(
	'name'    => sanitize_text_field( 'Jane Smith' ),
	'email'   => sanitize_email( 'some@email.com' ),
	'subject' => sanitize_text_field( 'Checkout this API stuff' ),
	'comment' => sanitize_textarea_field( 'I just read a great tutorial. You gotta check it out!' ),
);
```

Now we add the body to the `$args` array that will be passed as the second argument. (The second argument accepts many options, see Advanced section for more details)

```php
$args = array(
	'body'        => $body,
);
```

  
Then of course to make the call

```php
$response = wp_remote_post( 'https://your-contact-form.com', $args );
```

---

# Performance <a name="apis/making-http-requests/performance" />

Source: https://developer.wordpress.org/apis/making-http-requests/performance/

When you make an HTTP request, your application has to wait for the external server to respond to the request and for all the data to be transferred over the network. This can be very time consuming, and your application performance might be heavily impacted.

## Caching

That’s why you should always consider caching your API requests, so you don’t have to do them all the time.

Caching the response means storing the response on your server so you can easily use it multiple times without the need of an HTTP request every time.

For example, let’s say your site makes an HTTP request to Github to fetch your user’s stats and display it on your sidebar. If you don’t cache, every visitor in your site will trigger that API request and wait for github to response. And if you stop and think, they are all seeing the same information, because your stats don’t change so fast.

In the other hand, if you use cache, only the first visitor will have to wait for Github to respond. All the next users will see the same information that was quickly grabbed from the local database.

You can then define how often this information has to be updated. In other words, how often the cache has to be cleaned.

There are multiple apporaches to caching. An easy one provided by WordPress is the [Transient API](#apis/handbook/transients). Check it out!

## Check Headers

Many APIs allow you to make a HEAD request to check the status of things before actually retrieving the data you want. For example, you can make a HEAD request to check if there’s an update, before doing a GET request to actually fetch the data. This is a much faster request because it only responds a short piece of information.

Check the Advanced &gt; Headers section for more information.

---

# Advanced <a name="apis/making-http-requests/advanced" />

Source: https://developer.wordpress.org/apis/making-http-requests/advanced/

Here are some advanced usage of the HTTP API.

## Other methods

GET and POST are the most commonly used methods when making a HTTP request, but there are many others, such as DELETE, PUT, PATCH, OPTIONS, etc.

The WordPress HTTP API does not have one specific helper function for each method, but rest assured that the great people developing WordPress already thought of that and lovingly provided `<a href="#reference/functions/wp_remote_request">wp_remote_request()</a>`. This function takes the same two parameters as `<a href="#reference/functions/wp_remote_get">wp_remote_get()</a>`, and allows you to specify the HTTP method as well. What data you need to pass along is up to your method.

To send a DELETE method, for example, you may have something similar to the following:

```php
$args     = array(
	'method' => 'DELETE',
);
$response = wp_remote_request( 'http://some-api.com/object/to/delete', $args );
```

## Options

As you probably noticed by now, all the helper functions take a second `$args` parameter that allows you to set additional options to your request.

For example, `timeout` allows for setting the time in seconds, before the connection is dropped and an error is returned. The `httpversion` argument sets the HTTP version and defaults to ‘1.0’, however depending on the service you are interacting with you may need to set this to ‘1.1’.

Check `<a href="#reference/classes/WP_Http/request">WP_Http::request()</a>` method documentation for all available options and what they do.

## Headers

It can be pretty important, and sometimes required by the API, to check a resource status using HEAD before retrieving it. On high traffic APIs, GET is often limited to number of requests per minute or hour. There is no need to even attempt a GET request unless the HEAD request shows that the data on the API has been updated.

Going back to the GitHub example, here are are few headers to watch out for. Most of these headers are standard, but you should always check the API docs to ensure you understand which headers are named what, and their purpose.

- `x-ratelimit-limit` – Number of requests allowed in a time period
- `x-ratelimit-remaining` – Number of remaining available requests in time period
- `content-length` – How large the content is in bytes. Can be useful to warn the user if the content is fairly large
- `last-modified` – When the resource was last modified. Highly useful to caching tools
- `cache-control` – How should the client handle caching

The following will check the HEAD value of my GitHub user account:

```php
$response = wp_remote_head( 'https://api.github.com/users/wordpress' );
```

`$response` should look similar to:

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

---

# Authentication <a name="apis/making-http-requests/authentication" />

Source: https://developer.wordpress.org/apis/making-http-requests/authentication/

Many APIs will require you to make authenticated requests to access some endpoints. A common authentication method is called HTTP Basic Authentication. It can be used in WordPress using the ‘Authorization’ header `<a href="#reference/functions/wp_remote_get">wp_remote_get()</a>`.

```php
$args = array(
    'headers' => array(
        'Authorization' => 'Basic ' . base64_encode( YOUR_USERNAME . ':' . YOUR_PASSWORD )
    )
);
wp_remote_get( $url, $args );
```

HTTP Basic Auth is very insecure because it exposes the username and password and is only used for testing and development. Check the documentation of the API you want to access for more information on how to authenticate.

If you want to make authenticated requests to the WordPress REST API, check [this article](#rest-api/using-the-rest-api/authentication).

---

# REST <a name="apis/rest" />

Source: https://developer.wordpress.org/apis/rest/

Refer [REST API Handbook](#rest-api).

---

# Rewrite <a name="apis/rewrite" />

Source: https://developer.wordpress.org/apis/rewrite/

## Description

WordPress allows theme and plugin developers to programmatically specify new, custom rewrite rules.

The following functions (which are mostly aliases for [WP\_Rewrite](#reference/classes/wp_rewrite) methods) can be used to achieve this.

Please note that these rules are usually called inside the `init` hook. Furthermore, permalinks will need to be refreshed (you can do this from WP-Admin under Settings -&gt; Permalinks) before the rewrite changes will take effect. Requires one-time use of `flush_rules()` to take effect.

## API Reference

#### Articles

- Class: [`WP_Rewrite`](#reference/classes/wp_rewrite) – An overview of WordPress’s built-in URL rewrite class.

#### Hooks

- Filter: [`root_rewrite_rules`](#reference/hooks/root_rewrite_rules) – Filters the rewrite rules generated for the root of your weblog.
- Filter: [`post_rewrite_rules`](#reference/hooks/post_rewrite_rules) – Filters the rewrite rules generated for permalink URLs.
- Filter: [`page_rewrite_rules`](#reference/hooks/page_rewrite_rules) – Filters the rewrite rules generated for your Pages.
- Filter: [`date_rewrite_rules`](#reference/hooks/date_rewrite_rules) – Filters the rewrite rules generated for dated archive URLs.
- Filter: [`search_rewrite_rules`](#reference/hooks/search_rewrite_rules) – Filters the rewrite rules generated for search URLs.
- Filter: [`comments_rewrite_rules`](#reference/hooks/comments_rewrite_rules) – Filters the rewrite rules generated for the latest comment feed URLs.
- Filter: [`author_rewrite_rules`](#reference/hooks/author_rewrite_rules) – Filters the rewrite rules generated for author archive URLs.
- Filter: [`rewrite_rules_array`](#reference/hooks/rewrite_rules_array) – Filters *all* the rewrite rules at once.
- Filter: [`{$permastructname}_rewrite_rules`](#reference/hooks/permastructname_rewrite_rules) – Can be used to create or modify rewrite rules for any custom permastructs, such as taxonomies or custom post types.
- Action: [`generate_rewrite_rules`](#reference/hooks/generate_rewrite_rules) – Runs **after** all the rules have been created.

#### Functions

- [`add_rewrite_tag()`](#reference/functions/add_rewrite_tag) – Can be used to allow WordPress to recognize custom variables (particularly custom querystring variables).
- [`add_rewrite_rule()`](#reference/functions/add_rewrite_rule) – Allows you to specify new, custom rewrite rules.
- [`add_rewrite_endpoint()`](#reference/functions/add_rewrite_endpoint) – Add a new endpoint like /trackback/
- [`flush_rules()`](#reference/classes/wp_rewriteflush_rules/) – Regenerate the rewrite rules and save them to the database.
- [`flush_rewrite_rules()`](#reference/functions/flush_rewrite_rules) – Remove rewrite rules and then recreate rewrite rules.
- [`generate_rewrite_rules()`](#reference/hooks/generate_rewrite_rules) – Generates rewrite rules from a permalink structure
- [`add_permastruct()`](#reference/functions/add_permastruct) – Add a new permastruct
- [`add_feed()`](#reference/functions/add_feed)– Add a new feed type like `/atom1/`

---

# Security <a name="apis/security" />

Source: https://developer.wordpress.org/apis/security/

Congratulations, your code works! But is it safe?

The WordPress development team takes security seriously. With so much of the web relying on the integrity of the platform, security is critical. While the core developers have a dedicated team focused on securing the core platform, as a theme or plugin developer you are quite aware that there is potentially much that is outside the core which can be vulnerable. Because WordPress provides so much power and flexibility, plugins and themes are key points of weakness.

When writing code that will run across hundreds if not thousands of websites, you should be extra cautious of how you handle data coming into WordPress and how it’s then presented to the end user. This commonly comes up when building a settings page for your theme, creating and manipulating shortcodes, or saving and rendering extra data associated with a post.

## Developing a Security Mindset

When developing, it is important to consider security as you add functionality. Use the following principles as you progress through your development efforts:

- **Don’t trust any data.** Don’t trust user input, third-party APIs, or data in your database without verification. Protection of your WordPress themes begins with ensuring the data entering and leaving your theme is as intended. Always make sure to *validate* and *sanitize* user input fore using it, and to *escape* on output.
- **Rely on the WordPress API.** Many core WordPress functions provide the build in the functionality of validating and sanitizing data. Rely on the WordPress provided functions when possible.
- **Keep your code up to date.** As technology evolves, so does the potential for new security holes in your plugin or theme. Stay vigilant by maintaining your code and updating as required.

## Guiding principles

1. Never trust user input.
2. [Escape](#apis/security/escaping) as late as possible.
3. [Escape](#apis/security/escaping) everything from untrusted sources (e.g., databases and users), third-parties (e.g., Twitter), etc.
4. Never assume anything.
5. [Sanitation](#apis/security/sanitizing) is okay, but [validation/rejection](#apis/security/data-validation) is better.

---

# Sanitizing Data <a name="apis/security/sanitizing" />

Source: https://developer.wordpress.org/apis/security/sanitizing/

Untrusted data comes from many sources (users, third party sites, even your own database!) and all of it needs to be checked before it’s used.

Remember: Even admins are users, and users will enter incorrect data, either on purpose or accidentally. It’s your job to protect them from themselves.

*Sanitizing* input is the process of securing/cleaning/filtering input data. Validation is preferred over sanitization because validation is more specific. But when “more specific” isn’t possible, sanitization is the next best thing.

## Example

Let’s say we have an input field named `title`:

```markup
<input id="title" type="text" name="title">
```

We can’t use Validation here because the text field is too general: it can be anything at all. So we sanitize the input data with the `sanitize_text_field()` function:

```php
$title = sanitize_text_field( $_POST['title'] );
update_post_meta( $post->ID, 'title', $title );
```

Behind the scenes, `sanitize_text_field()` does the following:

1. Checks for invalid UTF-8
2. Converts single less-than characters (&lt;) to entity
3. Strips all tags
4. Removes line breaks, tabs and extra white space
5. Strips octets

## Sanitization functions

There are many functions that will help you sanitize your data.

- `<a href="#reference/functions/sanitize_email" rel="noreferrer noopener" target="_blank">sanitize_email()</a>`
- `<a href="#reference/functions/sanitize_file_name" rel="noreferrer noopener" target="_blank">sanitize_file_name()</a>`
- `<a href="#reference/functions/sanitize_hex_color" rel="noreferrer noopener" target="_blank">sanitize_hex_color()</a>`
- `<a href="#reference/functions/sanitize_hex_color_no_hash" rel="noreferrer noopener" target="_blank">sanitize_hex_color_no_hash()</a>`
- `<a href="#reference/functions/sanitize_html_class" rel="noreferrer noopener" target="_blank">sanitize_html_class()</a>`
- `<a href="#reference/functions/sanitize_key" rel="noreferrer noopener" target="_blank">sanitize_key()</a>`
- `<a href="#reference/functions/sanitize_meta" rel="noreferrer noopener" target="_blank">sanitize_meta()</a>`
- `<a href="#reference/functions/sanitize_mime_type" rel="noreferrer noopener" target="_blank">sanitize_mime_type()</a>`
- `<a href="#reference/functions/sanitize_option" rel="noreferrer noopener" target="_blank">sanitize_option()</a>`
- `<a href="#reference/functions/sanitize_sql_orderby" rel="noreferrer noopener" target="_blank">sanitize_sql_orderby()</a>`
- `<a href="#reference/functions/sanitize_term" rel="noreferrer noopener" target="_blank">sanitize_term()</a>`
- `<a data-id="#reference/functions/sanitize_term_field" data-type="URL" href="#reference/functions/sanitize_term_field" rel="noreferrer noopener" target="_blank">sanitize_term_field()</a>`
- `<a href="#reference/functions/sanitize_text_field" rel="noreferrer noopener" target="_blank">sanitize_text_field()</a>`
- `<a href="#reference/functions/sanitize_textarea_field" rel="noreferrer noopener" target="_blank">sanitize_textarea_field()</a>`
- `<a data-id="#reference/functions/sanitize_title" data-type="URL" href="#reference/functions/sanitize_title" rel="noreferrer noopener" target="_blank">sanitize_title()</a>`
- `<a href="#reference/functions/sanitize_title_for_query" rel="noreferrer noopener" target="_blank">sanitize_title_for_query()</a>`
- `<a href="#reference/functions/sanitize_title_with_dashes" rel="noreferrer noopener" target="_blank">sanitize_title_with_dashes()</a>`
- `<a href="#reference/functions/sanitize_user" rel="noreferrer noopener" target="_blank">sanitize_user()</a>`
- `<a href="#reference/functions/sanitize_url" rel="noreferrer noopener" target="_blank">sanitize_url()</a>`
- `<a href="#reference/functions/wp_kses" rel="noreferrer noopener" target="_blank">wp_kses()</a>`
- `<a href="#reference/functions/wp_kses_post" rel="noreferrer noopener" target="_blank">wp_kses_post()</a>`

---

# Validating Data <a name="apis/security/data-validation" />

Source: https://developer.wordpress.org/apis/security/data-validation/

Untrusted data comes from many sources (users, third party sites, even your own database!) and all of it needs to be checked before it’s used.

Remember: Even admins are users, and users will enter incorrect data, either on purpose or accidentally. It’s your job to protect them from themselves.

*Validating* input is the process of testing data against a predefined pattern (or patterns) with a definitive result: valid or invalid. Validation is a more specific approach when compared to sanitization, but both have their roles.

Simple validation examples:

- Check that required fields have not been left blank
- Check that an entered phone number only contains numbers and punctuation
- Check that an requested string is one of five valid options
- Check that a quantity field is greater than 0

**Data validation should be performed as early as possible.** That means validating the data before performing any actions.

## Validation Philosophies

There are several different philosophies about how validation should be done. Each is appropriate for different scenarios.

### Safelist

Accept data only from a finite list of known and trusted values.

When comparing untrusted data against the safelist, it’s important to make sure that strict type checking is used. Otherwise an attacker could craft input in a way that will pass the safelist but still have a malicious effect.

#### Comparison Operator

```php
$untrusted_input = '1 malicious string';  // will evaluate to integer 1 during loose comparisons

if ( 1 === $untrusted_input ) {  // == would have evaluated to true, but === evaluates to false
    echo '<p>Valid data';
} else {
    wp_die( 'Invalid data' );
}
```

#### `in_array()`

```php
$untrusted_input = '1 malicious string';  // will evaluate to integer 1 during loose comparisons
$safe_values     = array( 1, 5, 7 );

if ( in_array( $untrusted_input, $safe_values, true ) ) {  // `true` enables strict type checking
    echo '<p>Valid data';
} else {
    wp_die( 'Invalid data' );
}
```

#### `switch()`

```php
$untrusted_input = '1 malicious string';  // will evaluate to integer 1 during loose comparisons

switch ( true ) {
    case 1 === $untrusted_input:  // do your own strict comparison instead of relying on switch()'s loose comparison
        echo '<p>Valid data';
        break;

    default:
        wp_die( 'Invalid data' );
}
```

#### Blocklist

Reject data from finite list of known untrusted values. This is very rarely a good idea.

#### Format Detection

Test to see if the data is of the correct format. Only accept it if it is.

```php
if ( ! ctype_alnum( $data ) ) {
  wp_die( "Invalid format" );
}

if ( preg_match( "/[^0-9.-]/", $data ) ) {
  wp_die( "Invalid format" );
}
```

#### Format Correction

Accept most any data, but remove or alter the dangerous pieces.

```php
$trusted_integer = (int) $untrusted_integer;
$trusted_alpha = preg_replace( '/[^a-z]/i', "", $untrusted_alpha );
$trusted_slug = sanitize_title( $untrusted_slug );
```

## Example One

Let’s say we have an input field designed to accept a US zipcode:

```php
<input type="text" id="wporg_zip_code" name="my-zipcode" maxlength="10" />
```

Here we’ve told the browser to only allow up to ten characters of input…but there’s no limitation on *which* characters they can input. They could enter `11221` or `eval()`.

This is where validation comes in. When processing the form, we write code to check each field for its proper data type, and discard it if it’s incorrect.

For example: to check the `my-zipcode` field, we might do something like this:

```php
/**
 * Validate a US zip code.
 *
 * @param string $zip_code   RAW zip code to check.
 *
 * @return bool              true if valid, false otherwise.
 */
function wporg_is_valid_us_zip_code( string $zip_code ):bool {
    // Scenario 1: empty.
    if ( empty( $zip_code ) ) {
        return false;
    }

    // Scenario 2: more than 10 characters.
    // The `maxlength` attribute is only enforced by 
    // the browser, so we still need to validate the
    // length of the input on the server to protect
    // against a manual submission.
    if ( 10 < strlen( trim( $zip_code ) ) ) {
        return false;
    }

    // Scenario 3: incorrect format.
    if ( ! preg_match( '/^d{5}(-?d{4})?$/', $zip_code ) ) {
        return false;
    }

    // Passed successfully.
    return true;
}
```

Then, when processing the form, your code should check the `wporg_zip_code` field and perform the action based on the result:

```php
if ( isset( $_POST['wporg_zip_code'] ) && wporg_is_valid_us_zip_code( $_POST['wporg_zip_code'] ) ) {
    // $_POST['wporg_zip_code'] is valid; carry on
}
```

Note that this specific example is checking that the supplied data is in the correct format; it is not checking that the supplied and correctly formatted data is a valid zipcode. For that, you’d need a second function to compare against a list of valid zipcodes.

## Example Two

Say your code will query the database for posts, and you want to allow the user to sort the query results.

```php
$allowed_keys = array( 'author', 'post_author', 'date', 'post_date' );
$orderby      = sanitize_key( $_POST['orderby'] );
if ( in_array( $orderby, $allowed_keys, true ) ) {
    // $orderby is valid; carry on
}
```

This example code checks an incoming sort key (stored in the `orderby` input parameter) for validity by comparing it against an array of allowed sort keys. This prevents the user from passing in arbitrary and potentially malicious data.

Before checking the incoming sort key against the array, the key is passed into the built-in WordPress function `sanitize_key()`. This function ensures (among other things) that the key is in lowercase, which we want because `in_array()` performs a case-sensitive search.

Passing `true` into the third parameter of `in_array()` enables strict type checking, which tells the function to not only compare values but value types as well. This allows the code to be certain that the incoming sort key is a string and not some other data type.

## Validation Functions

Most validation is done as part of custom code, but there are some helper functions too. These are in addition to the ones listed on the Sanitization page.

- `balanceTags( $html )` or `force_balance_tags( $html )` – Tries to make sure HTML tags are balanced so that valid XML is output.
- `<a href="//php.net/count">count()</a>` for checking how many items are in an array
- `<a href="//php.net/in_array">in_array()</a>` for checking whether something exists in an array
- `<a href="/reference/functions/is_email/">is_email()</a>` will validate whether an email address is valid.
- [`is_array()`](https://www.php.net/is_array) for checking whether something is an array
- `<a href="https://php.net/mb_strlen">mb_strlen()</a>` or `<a href="https://php.net/strlen">strlen()</a>` for checking that a string has the expected number of characters
- `<a href="https://php.net/preg_match">preg_match()</a>`, `<a href="https://php.net/strpos">strpos()</a>` for checking for occurrences of certain strings in other strings
- `sanitize_html_class( $class, $fallback )` – Sanitizes a html classname to ensure it only contains valid characters. Strips the string down to A-Z,a-z,0-9,’-‘ and if this results in an empty string then it will return the alternate value supplied.
- `tag_escape( $html_tag_name )` – Sanitizes an HTML tag name (does not escape anything, despite the name of the function).
- `<a href="/reference/functions/term_exists/">term_exists()</a>` checks whether a tag, category, or other taxonomy term exists.
- `<a href="/reference/functions/username_exists/">username_exists()</a>` checks if username exists.
- `<a href="/reference/functions/validate_file/">validate_file()</a>` will validate that an entered file path is a real path (but not whether the file exists).

Check the [WordPress code reference](/reference/) for more functions like these. Search for functions with names like these: `*_exists()`, `*_validate()`, and `is_*()`. Not all of these are validation functions, but many are helpful.

---

# Escaping Data <a name="apis/security/escaping" />

Source: https://developer.wordpress.org/apis/security/escaping/

*Escaping* output is the process of securing output data by stripping out unwanted data, like malformed HTML or script tags. This process helps secure your data prior to rendering it for the end user.

## Escaping Functions

WordPress has many helper functions you can use for most common scenarios.

Pay close attention to what each function does, as some will remove HTML while others will permit it. You must use the most appropriate function to the content and context of what you’re echoing. You always want to escape when you echo, not before.

- `esc_html()` – Use anytime an HTML element encloses a section of data being displayed. This will remove HTML.

```
<h4><?php echo esc_html( $title ); ?></h4>
```

- `esc_js()` – Use for inline Javascript.

```
<div onclick='<?php echo esc_js( $value ); ?>' />
```

- `esc_url()` – Use on all URLs, including those in the src and href attributes of an HTML element.

```
<img alt="" src="<?php echo esc_url( $media_url ); ?>" />
```

- `esc_url_raw()` – Use when storing a URL in the database or in other cases where non-encoded URLs are needed.
- `esc_xml()` – Use to escape XML block.
- `esc_attr()` – Use on everything else that’s printed into an HTML element’s attribute.

```
<ul class="<?php echo esc_attr( $stored_class ); ?>">
```

- `esc_textarea()` – Use this to encode text for use inside a textarea element.
- `wp_kses()` – Use to safely escape for all non-trusted HTML (post text, comment text, etc.). This preserves HTML.
- `wp_kses_post()` – Alternative version of `wp_kses()`that automatically allows all HTML that is permitted in post content.
- `wp_kses_data()` – Alternative version of `wp_kses()`that allows only the HTML permitted in post comments.

## Custom Escaping Example

In the case that you need to escape your output in a specific way, the function [wp\_kses()](#reference/functions/wp_kses) (pronounced “kisses”) will come in handy.

This function makes sure that only the specified HTML elements, attributes, and attribute values will occur in your output, and normalizes HTML entities.

```
<?php
echo wp_kses_post( $partial_html );
echo wp_kses(
    $another_partial_html,
    array(
        'a'      => array(
            'href'  => array(),
            'title' => array(),
        ),
        'br'     => array(),
        'em'     => array(),
        'strong' => array(),
    )
); ?>
```

In this example, all tags other than `<a>`, `<br>`, `<em>`, and `<strong>` will be stripped out. Additionally, if an `<a>` tag is passed, the escaping ensures that only the `href` and the `title` are returned.

## Always escape late

It is best to do the output escaping as late as possible, ideally as data is being outputted.

It is better to escape late for a few reasons:

- Code reviews and deploys can happen faster because it can be deemed safe for output at a glance, rather than hunting through many lines of code to see where and if it was already escaped.
- Something could inadvertently change the variable between when it was firstly cast and when it is outputted, introducing a potential vulnerability.
- Late escaping makes it easier to do automatic code scanning, saving time and cutting down on review and deploy times.
- Late escaping whenever possible makes the code more robust and future proof.
- Escaping/casting on output removes any ambiguity and adds clarity (always develop for the maintainer).

```
// Okay, but not great.
$url = esc_url( $url );
$text = esc_html( $text );
echo '<a href="'. $url . '">' . $text . '</a>';

// Much better!
echo '<a href="'. esc_url( $url ) . '">' . esc_html( $text ) . '</a>';
```

## … Except when you can’t

It is sometimes not practical to escape late. In a few rare circumstances output cannot be passed to `wp_kses()`, since by definition it would strip the scripts that are being generated.

In situations like this, always escape while creating the string and store the value in a variable that is a postfixed with `_escaped`, `_safe` or `_clean` (e.g., `$variable` becomes `$variable_escaped` or `$variable_safe`).

If a function cannot output internally and escape late, then it must always return “safe” HTML. This allows `echo my_custom_script_code();` to be done without needing the script tag to be passed through a version of `wp_kses()` that would allow such tags.

## Escaping with Localization

Rather than using `echo` to output data, it’s common to use the WordPress localization functions, such as `_e()` or `__()`.

These functions simply wrap a localization function inside an escaping function:

```php
esc_html_e( 'Hello World', 'text_domain' );
// Same as
echo esc_html( __( 'Hello World', 'text_domain' ) );
```

These helper functions combine localization and escaping:

- [esc\_html\_\_()](#reference/functions/esc_html__)
- [esc\_html\_e()](#reference/functions/esc_html_e)
- [esc\_html\_x()](#reference/functions/esc_html_x)
- [esc\_attr\_\_()](#reference/functions/esc_attr__)
- [esc\_attr\_e()](#reference/functions/esc_attr_e)
- [esc\_attr\_x()](#reference/functions/esc_attr_x)

## Examples

### Escaping any numeric variable used anywhere

```
echo $int;
```

Depending on whether it is an integer or a float, `(int)`, `absint()`, `(float)` are all correct and acceptable.  
At times, `number_format()` or `number_format_i18n()` might be more appropriate.

`intval()`, `floatval()` are acceptable, but are outdated (PHP4) functions.

### Escaping arbitrary variable within HTML attribute

```
echo '<div id="', $prefix, '-box', $id, '">';
```

This should be escaped with one call to `esc_attr()`.  
When a variable is used as part of an attribute or url, it is always better to escape the whole string as that way a potential escape character just before the variable will be correctly escaped.

**Correct:**

```php
echo '<div id="', esc_attr( $prefix . '-box' . $id ), '">';
```

**Incorrect:**

```
echo '<div id="', esc_attr( $prefix ), '-box', esc_attr( $id ), '">';
```

Note: nonces created using `wp_create_nonce()` should also be escaped like this if used in an HTML attribute.

### Escaping arbitrary URL within HTML attribute, but also in other contexts

```
echo '<a href="', $url, '">';
```

This should be escaped with `esc_url()`.

**Correct:**

```php
echo '<a href="', esc_url( $url ), '">';
```

**Incorrect:**

```
echo '<a href="', esc_attr( $url ), '">';
echo '<a href="', esc_attr( esc_url( $url ) ), '">';
```

### Passing an arbitrary variable to JavaScript via `wp_localize_script()`

```php
wp_localize_script( 'handle', 'name',
	array(
		'prefix_nonce' => wp_create_nonce( 'plugin-name' ),
		'ajaxurl'      => admin_url( 'admin-ajax.php' ),
		'errorMsg'     => __( 'An error occurred', 'plugin-name' ),
	)
);
```

No escaping needed, WordPress will escape this.

### Escaping arbitrary variable within JavaScript block

```
<script type="text/javascript">
    var myVar = <?php echo $my_var; ?>
</script>
```

`$my_var` should be escaped with `esc_js()`.

**Correct:**

```php
<script type="text/javascript">
    var myVar = <?php echo esc_js( $my_var ); ?>
</script>
```

### Escaping arbitrary variable within inline JavaScript

```
<a href="#" onclick="do_something(<?php echo $var; ?>); return false;">
```

`$var` should be escaped with `esc_js()`.

**Correct:**

```php
<a href="#" onclick="do_something(<?php echo esc_js( $var ); ?>); return false;">
```

### Escaping arbitrary variable within HTML attribute for use by JavaScript

```
<a href="#" data-json="<?php echo $var; ?>">
```

`$var` should be escaped with `esc_js()`, `json_encode()` or `wp_json_encode()`.

**Correct:**

```php
<a href="#" data-json="<?php echo esc_js( $var ); ?>">
```

### Escaping arbitrary string within HTML textarea

```
echo '<textarea>', $data, '</textarea>';
```

`$data` should be escaped with `esc_textarea()`.

**Correct:**

```php
echo '<textarea>', esc_textarea( $data ), '</textarea>';
```

### Escaping arbitrary string within HTML tags

```
echo '<div>', $phrase, '</div>';
```

This depends on whether `$phrase` is expected to contain HTML or not.

- If not, use `esc_html()` or any of its variants.
- If HTML is expected, use `wp_kses_post()`, `wp_kses_allowed_html()` or `wp_kses()` with a set of HTML tags you want to allow.

### Escaping arbitrary string within XML or XSL context

```
echo '<loc>', $var, '</loc>';
```

Escape with `esc_xml()` or `ent2ncr()`.

**Correct:**

```php
echo '<loc>', ent2ncr( $var ), '</loc>';
```

---

# Nonces <a name="apis/security/nonces" />

Source: https://developer.wordpress.org/apis/security/nonces/

A nonce is a “number used once” to help protect URLs and forms from certain types of misuse, malicious or otherwise.

Technically, WordPress nonces aren’t strictly numbers; they are a hash made up of numbers and letters. Nor are they used only once: they have a limited “lifetime” after which they expire. During that time period, the same nonce will be generated for a given user in a given context. The nonce for that action will remain the same for that user until that nonce life cycle has completed.

WordPress’s security tokens are called “nonces” (despite the above-noted differences from true nonces) because they serve much the same purpose as nonces do. They help protect against several types of attacks including CSRF, but do not protect against replay attacks because they aren’t checked for one-time use. Nonces should never be relied on for authentication, authorization, or access control. Protect your functions using `current_user_can()`, and always assume nonces can be compromised.

## Why use a nonce?

For an example of why a nonce is used, consider that an admin screen might generate a URL like this that trashes post number 123.

`http://example.com/wp-admin/post.php?post=123&action=trash`

When you go to that URL, WordPress will validate your authentication cookie information and, if you’re allowed to delete that post, will proceed to delete it. What an attacker can do with this is make your browser go to that URL without your knowledge. For example, the attacker could craft a disguised link on a 3rd party page like this:

`<img src="http://example.com/wp-admin/post.php?post=123&action=trash" />`

This would trigger your browser to make a request to WordPress, and the browser would automatically attach your authentication cookie and WordPress would consider this a valid request.

Adding a nonce would prevent this. For example, when using a nonce, the URLs that WordPress generate for the user look like this:

`http://example.com/wp-admin/post.php?post=123&action=trash&_wpnonce=b192fc4204`

If anyone attempts to trash post number 123 without having the correct nonce generated by WordPress and given to the user, WordPress will send a “403 Forbidden” response to the browser.

## Creating a nonce

You can create a nonce and add it to the query string in a URL, you can add it in a hidden field in a form, or you can use it some other way.

For nonces that are to be used in AJAX requests, it is common to add the nonce to a hidden field, from which JavaScript code can fetch it.

Note that the nonces are unique to the current user’s session, so if a user logs in or out asynchronously any nonces on the page will no longer be valid.

### Customize nonces for guests (non logged-in users)

WordPress core, by default, generates the same nonce for guests as they have the same user ID (value `0`). That is, it does not prevent guests from CSRF attacks. To enhance this security aspect for critical actions, you can develop a session mechanism for your guests, and hook to the [nonce\_user\_logged\_out](#reference/hooks/nonce_user_logged_out) filter for replacing the user ID value `0` with another random ID from the session mechanism.

### Adding a nonce to a URL

To add a nonce to a URL, call `wp_nonce_url()` specifying the bare URL and a string representing the action. For example:

```php
$complete_url = wp_nonce_url( $bare_url, 'trash-post_'.$post->ID );
```

For maximum protection, ensure that the string representing the action is as specific as possible.

By default, `wp_nonce_url()` adds a field named `_wpnonce`. You can specify a different name in the function call. For example:

```php
$complete_url = wp_nonce_url( $bare_url, 'trash-post_'.$post->ID, 'my_nonce' );
```

### Adding a nonce to a form

To add a nonce to a form, call `wp_nonce_field()` specifying a string representing the action. By default `wp_nonce_field()` generates two hidden fields, one whose value is the nonce and one whose value is the current URL (the referrer), and it echoes the result. For example, this call:

```php
wp_nonce_field( 'delete-comment_'.$comment_id );
```

might echo something like:

```php
<input type="hidden" id="_wpnonce" name="_wpnonce" value="796c7766b1" />
<input type="hidden" name="_wp_http_referer" value="/wp-admin/edit-comments.php" />
```

For maximum protection, ensure that the string representing the action is as specific as possible.

You can specify a different name for the nonce field, you can specify that you do not want a referrer field, and you can specify that you want the result to be returned and not echoed. For details of the syntax, see: `wp_nonce_field()`.

### Creating a nonce for use in some other way

To create a nonce for use in some other way, call `wp_create_nonce()` specifying a string representing the action. For example:

```php
$nonce = wp_create_nonce( 'my-action_'.$post->ID );
```

This simply returns the nonce itself. For example: `295a686963`

For maximum protection, ensure that the string representing the action is as specific as possible.

### Verifying a nonce

You can verify a nonce that was passed in a URL, a form in an admin screen, an AJAX request, or in some other context.

Verifying a nonce passed from an admin screen  
To verify a nonce that was passed in a URL or a form in an admin screen, call `check_admin_referer()` specifying the string representing the action.

For example:

```php
check_admin_referer( 'delete-comment_'.$comment_id );
```

This call checks the nonce and the referrer, and if the check fails it takes the normal action (terminating script execution with a “403 Forbidden” response and an error message).

If you did not use the default field name (`_wpnonce`) when you created the nonce, specify the field name.

For example:

```php
check_admin_referer( 'delete-comment_'.$comment_id, 'my_nonce' );
```

### Verifying a nonce passed in an AJAX request

To verify a nonce that was passed in an AJAX request, call [check\_ajax\_referer()](#reference/functions/check_ajax_referer) specifying the string representing the action. For example:

```php
check_ajax_referer( 'process-comment' );
```

This call checks the nonce (but not the referrer), and if the check fails then by default it terminates script execution.

If you did not use one of the default field names (`_wpnonce` or `_ajax_nonce`) when you created the nonce, or if you want to take some other action instead of terminating execution, you can specify additional parameters. For details, see: `check_ajax_referer()`.

Verifying a nonce passed in some other context  
To verify a nonce passed in some other context, call `wp_verify_nonce()` specifying the nonce and the string representing the action.

For example:

```php
wp_verify_nonce( $_REQUEST['my_nonce'], 'process-comment'.$comment_id );
```

If the result is false, do not continue processing the request. Instead, take some appropriate action. The usual action is to call `wp_nonce_ays()`, which sends a “403 Forbidden” response to the browser.

## Modifying the nonce system

You can modify the nonce system by adding various actions and filters.

### Modifying the nonce lifetime

By default, a nonce has a lifetime of one day. After that, the nonce is no longer valid even if it matches the action string. To change the lifetime, add a nonce\_life filter specifying the lifetime in seconds.

For example, to change the lifetime to four hours:

```php
add_filter( 'nonce_life', function () { return 4 * HOUR_IN_SECONDS; } );
```

### Performing additional verification

To perform additional verification when `check_admin_referrer()` has found that the nonce and the referrer are valid, add a `check_admin_referer` action.

For example:

```php
function wporg_additional_check ( $action, $result ) {
    ...
}
add_action( 'check_admin_referer', 'wporg_additional_check', 10, 2 );
```

For `check_ajax_referer()` add a `check_ajax_referer` action in the same way.

### Changing the error message

You can change the error message sent when a nonce is not valid, by using the translation system. For example:

```php
function my_nonce_message ($translation) {
    if ($translation === 'Are you sure you want to do this?') {
       return 'No! No! No!';
    } 

    return $translation;
}

add_filter('gettext', 'my_nonce_message');
```

## Additional information

This section contains additional information about the nonce system in WordPress that might occasionally be useful.

### Nonce lifetime

Note that just as a WordPress nonce is not “a number used once”, nonce lifetime isn’t really nonce lifetime. WordPress uses a system with two ticks (half of the lifetime) and validates nonces from the current tick and the last tick. In default settings (24h lifetime) this means that the time information in the nonce is related to how many 12h periods of time have passed since the Unix epoch. This means that a nonce made between midday and midnight will have a lifetime until midday the next day. The actual lifetime is thus variable between 12 and 24 hours.

When a nonce is valid, the functions that validate nonces return the current tick number, 1 or 2. You could use this information, for example, to refresh nonces that are in their second tick so that they do not expire.

### Nonce security

Nonces are generated using a key and salt that are unique to your site if you have installed WordPress correctly. `NONCE_KEY` and `NONCE_SALT` are defined in your `wp-config.php` file, and the file contains comments that provide more information.

Nonces should never be relied on for authentication or authorization, or for access control. Protect your functions using `current_user_can()`, always assume Nonces can be compromised.

### Replacing the nonce system

Some of the functions that make up the nonce system are pluggable so that you can replace them by supplying your own functions.

To change the way admin requests or AJAX requests are verified, you can replace `check_admin_referrer()` or `check_ajax_referrer()`, or both.

To replace the nonce system with some other nonce system, you can replace `wp_create_nonce()`, `wp_verify_nonce()` and `wp_nonce_tick()`.

### Related

Nonce functions: `wp_nonce_ays()`, `wp_nonce_field()`, `wp_nonce_url()`, `wp_verify_nonce()`, `wp_create_nonce()`, `check_admin_referer()`, `check_ajax_referer()`, `wp_referer_field()`

Nonce hooks: `nonce_life`, `nonce_user_logged_out`, `explain_nonce_(verb)-(noun)`, `check_admin_referer`

---

# User Roles and Capabilities <a name="apis/security/user-roles-and-capabilities" />

Source: https://developer.wordpress.org/apis/security/user-roles-and-capabilities/

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

# Common Vulnerabilities <a name="apis/security/common-vulnerabilities" />

Source: https://developer.wordpress.org/apis/security/common-vulnerabilities/

Security is an ever-changing landscape, and vulnerabilities evolve over time. The following is a discussion of common vulnerabilities you should protect against, and the techniques for protecting your theme from exploitation.

## Types of Vulnerabilities

### SQL Injection

SQL injection happens when values being inputted are not properly sanitized allowing for any SQL commands in the inputted data to potentially be executed. To prevent this, the WordPress API is extensive, offering functions like `add_post_meta();` instead of you needing to adding the post meta manually via SQL (`INSERT INTO wp_postmeta…`).

![exploits_of_a_mom](https://i0.wp.com/make.wordpress.org/docs/files/2013/03/exploits_of_a_mom.png?ssl=1)xkcd [Exploits of a Mom](https://xkcd.com/327/)

The first rule for hardening your theme against SQL injection is: When there’s a WordPress function, use it.

But sometimes you need to do complex queries, that have not been accounted for in the API. If this is the case, always use the [`$wpdb` functions](#reference/classes/wpdb). These were built specifically to protect your database.

All data in SQL queries must be SQL-escaped before the SQL query is executed to prevent against SQL injection attacks. The best function to use for SQL-escaping is `$wpdb->prepare()` which supports both a [sprintf()](http://secure.php.net/sprintf)-like and [vsprintf()](http://secure.php.net/vsprintf)-like syntax.

```php
$wpdb->get_var( $wpdb->prepare(
    "SELECT something FROM table WHERE foo = %s and status = %d",
    $name, // an unescaped string (function will do the sanitization for you)
    $status // an untrusted integer (function will do the sanitization for you)
) );
```

### Cross Site Scripting (XSS)

Cross Site Scripting (XSS) happens when a nefarious party injects JavaScript into a web page.

Avoid XSS vulnerabilities by escaping output, stripping out unwanted data. As a theme’s primary responsibility is outputting content, a theme should [escape dynamic content](#themes/theme-security/data-sanitization-escaping) with the proper function depending on the type of the content.

An example of one of the escaping functions is escaping URL from a user profile.

```php
<img src="<?php echo esc_url( $great_user_picture_url ); ?>" />
```

Content that has HTML entities within can be sanitized to allow only specified HTML elements.

```php
$allowed_html = array(
    'a' => array(
        'href' => array(),
        'title' => array()
    ),
    'br' => array(),
    'em' => array(),
    'strong' => array(),
);

echo wp_kses( $custom_content, $allowed_html );
```

### Cross-site Request Forgery (CSRF)

Cross-site request forgery or CSRF (pronounced sea-surf) is when a nefarious party tricks a user into performing an unwanted action within a web application they are authenticated in. For example, a phishing email might contain a link to a page that would delete a user’s account in the WordPress admin.

If your theme includes any HTML or HTTP-based form submissions, use a [nonce](#apis/security/nonces) to guarantee a user intends to perform an action.

```php
<form method="post">
    <!-- some inputs here … -->
    <?php wp_nonce_field( 'name_of_my_action', 'name_of_nonce_field' ); ?>
</form>
```

### Staying Current

It is important to stay current on potential security holes. The following resources provide a good starting point:

- [WordPress Security Whitepaper](https://wordpress.org/about/security/)
- [WordPress Security Release](https://wordpress.org/news/category/security/)
- [Open Web Application Security Project (OWASP) Top 10](https://www.owasp.org/index.php/OWASP_Top_Ten_Cheat_Sheet)

---

# Example <a name="apis/security/example" />

Source: https://developer.wordpress.org/apis/security/example/

Complete example using capability checks, data validation, secure input, secure output and nonces:

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
		// Add query arguments: action, post, nonce
		$url = add_query_arg(
			[
				'action' => 'wporg_frontend_delete',
				'post'   => get_the_ID(),
				'nonce'  => wp_create_nonce( 'wporg_frontend_delete' ),
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
	if ( isset( $_GET['action'] )
         && isset( $_GET['nonce'] )
         && 'wporg_frontend_delete' === $_GET['action']
         && wp_verify_nonce( $_GET['nonce'], 'wporg_frontend_delete' ) ) {

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

# Settings <a name="apis/settings" />

Source: https://developer.wordpress.org/apis/settings/

## Overview

The **Settings API**, added in [WordPress 2.7](/support/wordpress-version/version-2-7), allows admin pages containing settings forms to be managed semi-automatically. It lets you define settings pages, sections within those pages and fields within the sections.

New settings pages can be registered along with sections and fields inside them. Existing settings pages can also be added to by registering new settings sections or fields inside of them.

Organizing registration and validation of fields still requires some effort from developers using the Settings API, but avoids a lot of complex debugging of underlying options management.

NOTE: When using the Settings API, the form posts to `wp-admin/options.php` which provides fairly strict capabilities checking. Users will need `manage_options` capability (and in MultiSite will have to be a Super Admin) to submit the form.

The functions are found in `<a href="https://core.trac.wordpress.org/browser/tags/5.2.1/src/wp-admin/includes/plugin.php#L0">wp-admin/includes/plugin.php</a>` and `<a href="https://core.trac.wordpress.org/browser/tags/5.2.1/src/wp-admin/includes/template.php#L0">wp-admin/includes/template.php</a>`

## Function Reference

**Setting Register/Unregister:**

- [register\_setting()](#reference/functions/register_setting)
- [unregister\_setting()](#reference/functions/unregister_setting)

**Add Field/Section:**

- [add\_settings\_field()](#reference/functions/add_settings_field)
- [add\_settings\_section()](#reference/functions/add_settings_section)

**Options Form Rendering:**

- [settings\_fields()](#reference/functions/settings_fields)
- [do\_settings\_sections()](#reference/functions/do_settings_sections)
- [do\_settings\_fields()](#reference/functions/do_settings_fields)

**Errors:**

- [add\_settings\_error()](#reference/functions/add_settings_error)
- [get\_settings\_errors()](#reference/functions/get_settings_errors)
- [settings\_errors()](#reference/functions/settings_errors)

## Adding Setting Fields

You can add new settings fields (basically, an option in the `wp_options` database table but totally managed for you) to the existing WordPress pages using this function. Your callback function just needs to output the appropriate HTML input and fill it with the old value, the saving will be done behind the scenes. You can create your own sections on existing pages using `add_settings_section()` as described below.

**NOTE:** You MUST register any options you use with `add_settings_field()` or they won’t be saved and updated automatically. See below for details and an example.

```php
add_settings_field( $id, $title, $callback, $page, $section = 'default', $args = array() )
```

- `$id` – String for use in the ‘id’ attribute of tags.
- `$title` – Title of the field.
- `$callback` – Function that fills the field with the desired inputs as part of the larger form. Name and id of the input should match the $id given to this function. The function should echo its output.
- `$page` – The type of settings page on which to show the field (general, reading, writing, …).
- `$section` – The section of the settings page in which to show the box (default or a section you added with add\_settings\_section, look at the page in the source to see what the existing ones are.)
- `$args` – Extra arguments passed into the callback function

## Adding Settings Sections

Settings Sections are the groups of settings you see on WordPress settings pages with a shared heading. In your plugin you can add new sections to existing settings pages rather than creating a whole new page. This makes your plugin simpler to maintain and creates fewer new pages for users to learn. You just tell them to change your setting on the relevant existing page.

```php
add_settings_section( $id, $title, $callback, $page );
```

- `$id` – String for use in the ‘id’ attribute of tags.
- `$title` – Title of the section.
- `$callback` – Function that fills the section with the desired content. The function should echo its output.
- `$page` – The type of settings page on which to show the section (general, reading, writing, media etc.)

## Registering Settings

```php
register_setting( $option_group, $option_name, $args );
```

```php
unregister_setting( $option_group, $option_name );
```

**NOTE:** `register_setting()` as well as the above mentioned `add_settings_*()` functions should all be called from a `admin_init` action hook callback function. Refer to the “Examples” section below.

## Options Form Rendering

When using the API to add settings to existing options pages, you do not need to be concerned about the form itself, as it has already been defined for the page. When you define a new page from scratch, you need to output a minimal form structure that contains a few tags that in turn output the actual sections and settings for the page.

To display the hidden fields and handle security of your options form, the Settings API provides the [settings\_fields()](#reference/functions/settings_fields) function. `settings_fields( $option_group ); `

`<strong>$option_group</strong>` **(*****string*****) (*****required*****):**

A settings group name. This must match the group name used in [register\_setting()](#reference/functions/register_setting), which is the page slug name on which the form is to appear. Default: *None*

To display the sections assigned to the page and the settings contained within, the Settings API provides the [do\_settings\_sections()](#reference/functions/do_settings_sections) function. ` do_settings_sections( $page ); `

`<strong>$page</strong>` **(*****string*****) (*****required*****):**

The slug name of the page whose settings sections you want to output. This should match the page name used in [add\_settings\_section()](#reference/functions/add_settings_section). Default: *None*

The [do\_settings\_fields()](#reference/functions/do_settings_fields) function is provided to output the fields assigned to a particular page and section. You should not call this function directly, rather use `do_settings_sections()` to output the Section content as well as the associated fields.

Your options form also needs a submit button. You can use the [submit\_button()](#reference/functions/submit_button) function to do this.

Finally, you need to output the HTML &lt;form&gt; tag defining the action destination of options.php and method of POST. Here is an example options form code to generate all the sections and fields added to a page who’s slug name is `my-page`:

```php
<form method="POST" action="options.php">
<?php 
settings_fields( 'my-page' ); // pass slug name of page, also referred to in Settings API as option group name
do_settings_sections( 'my-page' );  // pass slug name of page
submit_button(); // submit button
?>
</form>
```

## Example

### Adding a settings section with a new field in it

```php
<?php 
/**
 * Add all your sections, fields and settings during admin_init
 */
 
function wporg_settings_api_init() {
 	// Add the section to reading settings so we can add our
 	// fields to it
 	add_settings_section(
		'wporg_setting_section',
		'Example settings section in reading',
		'wporg_setting_section_callback_function',
		'reading'
	);
 	
 	// Add the field with the names and function to use for our new
 	// settings, put it in our new section
 	add_settings_field(
		'wporg_setting_name',
		'Example setting Name',
		'wporg_setting_callback_function',
		'reading',
		'wporg_setting_section'
	);
 	
 	// Register our setting so that $_POST handling is done for us and
 	// our callback function just has to echo the <input>
 	register_setting( 'reading', 'wporg_setting_name' );
 } // wporg_settings_api_init()
 
 add_action( 'admin_init', 'wporg_settings_api_init' );
 
  
/**
 * Settings section callback function
 *
 * This function is needed if we added a new section. This function 
 * will be run at the start of our section
 */
 
 function wporg_setting_section_callback_function() {
 	echo '<p>Intro text for our settings section</p>';
 }
 
/*
 * Callback function for our example setting
 *
 * creates a checkbox true/false option. Other types are surely possible
 */
 
 function wporg_setting_callback_function() {
 	echo '<input name="wporg_setting_name" id="wporg_setting_name" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'wporg_setting_name' ), false ) . ' /> <label for="wporg_setting_name">Explanation text</label>';
 }
```

#### Graphical Representation of where all those code should go

[![](https://i0.wp.com/developer.wordpress.org/files/2019/08/editing-settings-api-example.png?resize=949%2C924&ssl=1)](https://i0.wp.com/developer.wordpress.org/files/2019/08/editing-settings-api-example.png?ssl=1)## External References

- [The WordPress Settings API](http://kovshenin.com/2012/the-wordpress-settings-api/) by Konstantin Kovshenin, Oct 23 2012
- [Incorporating the Settings API in WordPress Themes](http://www.chipbennett.net/2011/02/17/incorporating-the-settings-api-in-wordpress-themes/) by Chip Bennett, Feb 2011
- [Settings API Explained](http://www.presscoders.com/wordpress-settings-api-explained/) by David Gwyer
- [WordPress Settings API Tutorial](http://ottopress.com/2009/wordpress-settings-api-tutorial/) by Otto
- [Handling Plugin Options with register\_setting()](http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/) by Ozh
- [Intro to the WordPress Settings API](http://blog.gneu.org/2010/09/intro-to-the-wordpress-settings-api/) by BobGneu
- Using The Settings API: [Part 1](http://wp.tutsplus.com/tutorials/using-the-settings-api-part-1-create-a-theme-options-page/), [Part 2](http://wp.tutsplus.com/tutorials/using-the-settings-api-part-2-create-a-top-level-admin-menu/) by [Sarah Neuber](https://twitter.com/srhnbr/)
- [Class Based Settings with WordPress](https://www.yaconiello.com/blog/how-to-handle-wordpress-settings) by Francis Yaconiello
- [Adding multiple sections on a single settings screen](http://www.mendoweb.be/blog/wordpress-settings-api-multiple-sections-on-same-page/) by Mathieu Decaffmeyer
- [Adding multiple forms on a single settings screen](http://www.mendoweb.be/blog/wordpress-settings-api-multiple-forms-on-same-page/) by Mathieu Decaffmeyer
- [The Complete Guide To The WordPress Settings API](http://wp.tutsplus.com/tutorials/the-complete-guide-to-the-wordpress-settings-api-part-1/) by Tom McFarlin, Jan 31st 2012
- [WordPress Settings API Cheat Sheet](http://techblog.kjodle.net/2015/07/16/wordpress-settings-api-cheat-sheet/) by Kenneth Odle, July 16th 2015

## Generators

- [WordPress Settings API (options page) Generator](http://wpsettingsapi.jeroensormani.com/)

## PHP Class

- [WordPress settings API Class](https://github.com/tareq1988/wordpress-settings-api-class/)

---

# Shortcode <a name="apis/shortcode" />

Source: https://developer.wordpress.org/apis/shortcode/

## The Shortcode API

The **Shortcode API** is a simple set of functions for creating WordPress [shortcodes](#plugins/shortcodes) for use in posts and pages. For instance, the following shortcode (in the body of a post or page) would add a photo gallery of images attached to that post or page: `[ gallery ]`

The API enables plugin developers to create special kinds of content (e.g. forms, content generators) that users can attach to certain pages by adding the corresponding shortcode into the page text.

The Shortcode API makes it easy to create shortcodes that support attributes like this:

```php
[ gallery id="123" size="medium" ]
```

The API handles all the tricky parsing, eliminating the need for writing a custom regular expression for each shortcode. Helper functions are included for setting and fetching default attributes. The API supports both self-closing and enclosing shortcodes.

As a quick start for those in a hurry, here’s a minimal example of the PHP code required to create a shortcode:

```php
// [foobar]
function wporg_foobar_func( $atts ) {
	return "foo and bar";
}
add_shortcode( 'foobar', 'wporg_foobar_func' );
```

This will create `[foobar]` shortcode that returns as: foo and bar

With attributes:

```php
// [bartag foo="foo-value"]
function bartag_func( $atts ) {
	$a = shortcode_atts( array(
		'foo' => 'something',
		'bar' => 'something else',
	), $atts );

	return "foo = {$a['foo']}";
}
add_shortcode( 'bartag', 'bartag_func' );
```

This creates a `[bartag]` shortcode that supports two attributes: “foo” and “bar”. Both attributes are optional and will take on default options `[foo="something" bar="something else"]` if they are not provided. The shortcode will return as `foo = {the value of the foo attribute}`.

## History

The Shortcode API was introduced in WordPress 2.5.

## Overview

Shortcodes are written by providing a handler function. Shortcode handlers are broadly similar to WordPress filters: they accept parameters (attributes) and return a result (the shortcode output).

Shortcode names should be all lowercase and use all letters, but numbers and underscores should work fine too. Be wary of using hyphens (dashes), you’ll be better off not using them.

The `<a href="#reference/functions/add_shortcode">add_shortcode</a>` function is used to register a shortcode handler. It takes two parameters: the shortcode name (the string used in a post body), and the callback function name.

Three parameters are passed to the shortcode callback function. You can choose to use any number of them including none of them.

- `$atts`: an associative array of attributes, or an empty string if no attributes are given
- `$content`: the enclosed content (if the shortcode is used in its enclosing form)
- `$tag`: the shortcode tag, useful for shared callback functions

The API call to register the shortcode handler would look something like this:

```php
add_shortcode( 'wporgshortcode', 'wporg_shortcode_handler' );
```

When [the\_content](#reference/functions/the_content) is displayed, the shortcode API will parse any registered shortcodes such as `[myshortcode]`, separate and parse the attributes and content, if any, and pass them the corresponding shortcode handler function. Any string *returned* (not echoed) by the shortcode handler will be inserted into the post body in place of the shortcode itself.

Shortcode attributes are entered like this:

`[wporgshortcode foo="bar" bar="bing"]`

These attributes will be converted into an associative array like the following, passed to the handler function as its `$atts` parameter:

```php
array( 'foo' => 'bar', 'bar' => 'bing' )
```

The array keys are the attribute names; array values are the corresponding attribute values. In addition, the zeroeth entry (`$atts[0]`) will hold the string that matched the shortcode regex, but ONLY IF that is different from the callback name.

### Handling Attributes

The raw `$atts` array may include any arbitrary attributes that are specified by the user. (In addition, the zeroeth entry of the array may contain the string that was recognized by the regex; see the note below.)

In order to help set default values for missing attributes, and eliminate any attributes that are not recognized by your shortcode, the API provides a [shortcode\_atts()](#reference/functions/shortcode_atts) function.

`<a href="#reference/functions/shortcode_atts">shortcode_atts()</a>` resembles the `<a href="#reference/functions/wp_parse_args">wp_parse_args</a>` function, but has some important differences. Its parameters are:

```php
shortcode_atts( $defaults_array, $atts );
```

Both parameters are required. `$defaults_array` is an associative array that specifies the recognized attribute names and their default values. `$atts` is the raw attributes array as passed into your shortcode handler. `shortcode_atts()` will return a normalized array containing all of the keys from the `$defaults_array`, filled in with values from the `$atts` array if present. For example:

```php
$a = shortcode_atts( array(
	'title' => 'My Title',
	'foo' => 123,
), $atts );
```

If `$atts` were to contain `array( 'foo' => 456, 'bar' => 'something' )`, the resulting `$a` would be `array( 'title' => 'My Title', 'foo' => 456 )`. The value of `$atts['foo']` overrides the default of 123. `$atts['title']` is not set, so the default ‘My Title’ is used. There is no ‘bar’ item in the defaults array, so it is not included in the result.

Attribute names are always converted to lowercase before they are passed into the handler function. Values are untouched.`[myshortcode FOO="BAR"]` produces `$atts = array( 'foo' => 'BAR' )`.

A suggested code idiom for declaring defaults and parsing attributes in a shortcode handler is as follows:

```php
function wporg_shortcode_handler( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'attr_1' => 'attribute 1 default',
		'attr_2' => 'attribute 2 default',
		// ...etc
	), $atts );
}
```

This will parse the attributes, set default values, eliminate any unsupported attributes, and store the results in a local array variable named `$a` with the attributes as keys – `$a['attr_1']`, `$a['attr_2']`, and so on. In other words, the array of defaults approximates a list of local variable declarations.

**IMPORTANT – Don’t use camelCase or UPPER-CASE for your `$atts` attribute names**:

`$atts` values are ***lower-cased*** during `shortcode_atts( array( 'attr_1' => 'attr_1 default', // ...etc ), $atts )` processing, so you might want to *just use lower-case*.

**NOTE on confusing regex/callback name reference:**

The zeroeth entry of the attributes array (**`$atts[0]`**) will contain the string that matched the shortcode regex, but ONLY if that differs from the callback name, which otherwise appears as the third argument to the callback function.

```php
add_shortcode('foo','foo'); // two shortcodes referencing the same callback
 add_shortcode('bar','foo');
    produces this behavior:
 [foo a='b'] ==> callback to: foo(array('a'=>'b'),NULL,"foo");
 [bar a='c'] ==> callback to: foo(array(0 => 'bar', 'a'=>'c'),NULL,"");
```

This is confusing and perhaps reflects an underlying bug, but an overloaded callback routine can correctly determine what shortcode was used to call it, by checking BOTH the third argument to the callback and the zeroeth attribute. (It is NOT an error to have two shortcodes reference the same callback routine, which allows for common code.)

### Output

The return value of a shortcode handler function is inserted into the post content output in place of the shortcode macro. **Remember to use return and not echo – anything that is echoed will be output to the browser, but it won’t appear in the correct place on the page**.

Shortcodes are parsed after [wpautop](#reference/functions/wpautop) and [wptexturize](#reference/functions/wptexturize) post formatting has been applied. This means that your shortcode output HTML won’t automatically have curly quotes applied, p and br tags added, and so on. If you do want your shortcode output to be formatted, you should call `wpautop()` or `wptexturize()` directly when you return the output from your shortcode handler.

wpautop recognizes shortcode syntax and will attempt not to wrap p or br tags around shortcodes that stand alone on a line by themselves. Shortcodes intended for use in this manner should ensure that the output is wrapped in an appropriate block tag such as `<p>` or `<div>`.

If the shortcode produces a lot of HTML then `ob_start` can be used to capture output and convert it to a string as follows:

```php
function wporg_shortcode() {
	ob_start();
	?> <HTML> <here> ... <?php
	return ob_get_clean();
}
```

### Enclosing vs self-closing shortcodes

The examples above show self-closing shortcode macros such as `[myshortcode]`. The API also supports enclosing shortcodes such as `[myshortcode]content[/myshortcode]`.

If a shortcode macro is used to enclose content, its handler function will receive a second parameter containing that content. Users might write shortcodes in either form, so it is necessary to allow for either case by providing a default value for the second parameter to your handler function:

```php
function wporg_shortcode_handler( $atts, $content = null )
```

`empty( $content )` can be used to distinguish between the self-closing and enclosing cases.

When content is enclosed, the complete shortcode macro including its content will be replaced with the function output. It is the responsibility of the handler function to provide any necessary escaping or encoding of the raw content string, and include it in the output.

Here’s a trivial example of an enclosing shortcode:

```php
function wporg_caption_shortcode( $atts, $content = null ) {
	return '<span class="caption">' . $content . '</span>';
}
add_shortcode( 'caption', 'wporg_caption_shortcode' );
```

When used like this:

```php
My Caption
```

The output would be:

```php
<span class="caption">My Caption</span>
```

Since `$content` is included in the return value without any escaping or encoding, the user can include raw HTML:

```php
<a href="http://example.com/">My Caption</a>
```

Which would produce:

```php
<span class="caption"><a href="http://example.com/">My Caption</a></span>
```

This may or may not be intended behaviour – if the shortcode should not permit raw HTML in its output, it should use an escaping or filtering function to deal with it before returning the result.

The shortcode parser uses a single pass on the post content. This means that if the `$content` parameter of a shortcode handler contains another shortcode, it won’t be parsed:

```php
Caption: [myshortcode]
```

This would produce:

```php
<span class="caption">Caption: [myshortcode]</span>
```

If the enclosing shortcode is intended to permit other shortcodes in its output, the handler function can call [do\_shortcode()](#reference/functions/do_shortcode) recursively:

```php
function wporg_caption_shortcode( $atts, $content = null ) {
    return '<span class="caption">' . do_shortcode($content) . '</span>';
}
```

In the previous example, this would ensure the `[myshortcode]` macro in the enclosed content is parsed, and its output enclosed by the caption span:

```php
<span class="caption">Caption: The result of myshortcode's handler function</span>
```

The parser does not handle mixing of enclosing and non-enclosing forms of the same shortcode as you would want it to. For example, if you have:

```php
[myshortcode example='non-enclosing' /] non-enclosed content [myshortcode] enclosed content [/myshortcode]
```

Instead of being treated as two shortcodes separated by the text ” non-enclosed content “, the parser treats this as a single shortcode enclosing ” non-enclosed content `[myshortcode]` enclosed content”.

Enclosing shortcodes support attributes in the same way as self-closing shortcodes. Here’s an example of the `caption_shortcode()` improved to support a ‘class’ attribute:

```php
function wporg_caption_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'caption',
	), $atts );

	return '<span class="' . esc_attr($a['class']) . '">' . $content . '</span>';
}
```

```php
My Caption
```

```php
<span class="headline">My Caption</span>
```

### Other features in brief

- The parser supports xhtml-style closing shortcodes like `[myshortcode /]`, but this is optional.
- Shortcode macros may use single or double quotes for attribute values, or omit them entirely if the attribute value does not contain spaces. `[myshortcode foo='123' bar=456]` is equivalent to `[myshortcode foo="123" bar="456"]`. Note the attribute value in the last position may not end with a forward slash because the feature in the paragraph above will consume that slash.
- For backwards compatibility with older ad-hoc shortcodes, attribute names may be omitted. If an attribute has no name it will be given a positional numeric key in the `$atts` array. For example, `[myshortcode 123]` will produce `$atts = array( 0 => 123 )`. Positional attributes may be mixed with named ones, and quotes may be used if the values contain spaces or other significant characters.
- The shortcode API has test cases. The tests — which contain a number of examples of error cases and unusual syntax — can be found at <http://svn.automattic.com/wordpress-tests/trunk/tests/shortcode.php>

### Function reference

The following Shortcode API functions are available:

```php
function add_shortcode( $tag, $func )
```

Registers a new shortcode handler function. `$tag` is the shortcode string as written by the user (without braces), such as “myshortcode”. $func is the handler function name.

Only one handler function may exist for a given shortcode. Calling `add_shortcode()` again with the same $tag name will overwrite the previous handler.

```php
function remove_shortcode( $tag )
```

Deregisters an existing shortcode. `$tag` is the shortcode name as used in `add_shortcode()`.

```php
function remove_all_shortcodes()
```

Deregisters all shortcodes.

```php
function shortcode_atts( $pairs, $atts )
```

Process a raw array of attributes `$atts` against the set of defaults specified in `$pairs`. Returns an array. The result will contain every key from `$pairs`, merged with values from `$atts`. Any keys in `$atts` that do not exist in $pairs are ignored.

```php
function do_shortcode( $content )
```

Parse any known shortcode macros in the `$content` string. Returns a string containing the original content with shortcode macros replaced by their handler functions output.

[do\_shortcode()](#reference/functions/do_shortcode) is registered as a default filter on ‘the\_content’ with a priority of 11.

### Limitations

#### Nested Shortcodes

The shortcode parser correctly deals with nested shortcode macros, provided their handler functions support it by recursively calling [do\_shortcode()](#reference/functions/do_shortcode):

```php
[tag-a]
   [tag-b]
      [tag-c]
   [/tag-b]
[/tag-a]
```

However the parser will fail if a shortcode macro is used to enclose another macro of the same name:

```php
[tag-a]
   [tag-a]
   [/tag-a]
[/tag-a]
```

This is a limitation of the context-free regexp parser used by `do_shortcode()` – it is very fast but does not count levels of nesting, so it can’t match each opening tag with its correct closing tag in these cases.

In future versions of WordPress, it may be necessary for plugins having a nested shortcode syntax to ensure that the `wptexturize()` processor does not interfere with the inner codes. It is recommended that for such complex syntax, the [no\_texturize\_shortcodes](#reference/hooks/no_texturize_shortcodes) filter should be used on the outer tags. In the examples used here, tag-a should be added to the list of shortcodes to not texturize. If the contents of tag-a or tag-b still need to be texturized, then you can call `wptexturize()` before calling `do_shortcode()` as described above.

#### Unregistered Names

Some plugin authors have chosen a strategy of not registering shortcode names, for example to disable a nested shortcode until the parent shortcode’s handler function is called. This may have unintended consequences, such as failure to parse shortcode attribute values. For example:

```php
[tag-a unit="north"]
   [tag-b size="24"]
      [tag-c color="red"]
   [/tag-b]
[/tag-a]
```

Starting with version 4.0.1, if a plugin fails to register tag-b and tag-c as valid shortcodes, the `wptexturize()` processor will output the following text prior to any shortcode being parsed:

```php
[tag-a unit="north"]
   [tag-b size=”24”]
      [tag-c color=”red”]
   [/tag-b]
[/tag-a]
```

Unregistered shortcodes should be considered normal plain text that have no special meaning, and the practice of using unregistered shortcodes is discouraged. If you must enclose raw code between shortcode tags, at least consider using the [no\_texturize\_shortcodes](#reference/hooks/no_texturize_shortcodes) filter to prevent texturization of the contents of tag-a:

```php
add_shortcode( 'tag-a', 'wporg_tag_a_handler' );
add_filter( 'no_texturize_shortcodes', 'wporg_ignore_tag_a' );

function wporg_ignore_tag_a( $list ) {
  $list[] = 'tag-a';
  return $list;
}
```

#### Unclosed Shortcodes

In certain cases the shortcode parser cannot correctly deal with the use of both closed and unclosed shortcodes. For instance in this case the parser will only correctly identify the second instance of the shortcode:

```php
[tag]
[tag]
   CONTENT
[/tag]
```

However in this case the parser will identify both:

```php
[tag]
   CONTENT
[/tag]
[tag]
```

#### Hyphens

Take caution when using hyphens in the name of your shortcodes. In the following instance WordPress may see the second opening shortcode as equivalent to the first (basically WordPress sees the first part before the hyphen):

```php
[tag]
[tag-a]
```

It all depends on which shortcode is defined first. If you are going to use hyphens then define the shortest shortcode first.

To avoid this, use an underscore or simply no separator:

```php
[tag]
[tag_a]

[tag]
[taga]
```

If the first part of the shortcode is different from one another, you can get away with using hyphens:

```php
[tag]
[tagfoo-a]
```

**Important:** Using hyphens can have implications that you may not be aware of; such as if other installed shortcodes also are use hyphens, the use of generic words with hyphens may cause collisions (if shortcodes are used together within the same request):

```php
// plugin-A
[is-logged-in]

// plugin-B
[is-admin]
```

#### Square Brackets

The shortcode parser does not accept square brackets within attributes. Thus the following will fail:

```php
[tag attribute="[Some value]"]
```

Tags surrounded by cosmetic brackets are not yet fully supported by [wptexturize()](#reference/functions/wptexturize) or its filters. These codes may give unexpected results:

```php
[I put random text near my captions. ]
```

**Note:** these limitations may change in future versions of WordPress, you should test to be absolutely sure.

#### HTML

Starting with version 3.9.3, use of HTML is limited inside shortcode attributes. For example, this shortcode will not work correctly because it contains a `>` character:

```php
[tag value1="35" value2="25" compare=">"]
```

Version 4.0 is designed to allow validated HTML, so this will work:

```php
[tag description="<b>Greetings</b>"]
```

The suggested workaround for HTML limitations is to use HTML encoding for all user input, and then add HTML decoding in the custom shortcode handler. Extra API functions are planned.

Full usage of HTML in shortcode attributes was never officially supported, and this will not be expanded in future versions.

Starting with version 4.2.3, similar limitations were placed on use of shortcodes inside HTML. For example, this shortcode will not work correctly because it is nested inside a scripting attribute:

```php
<a onclick="[tag]">
```

The suggested workaround for dynamic attributes is to design a shortcode that outputs all needed HTML rather than just a single value. This will work better:

```php
[link onclick="tag"]
```

Also notice the following shortcode is no longer allowed because of incorrect attribute quoting:

```php
<a title="[tag attr="id"]">
```

The only way to parse this as valid HTML is to use single quotes and double quotes in a nested manner:

```php
<a title="[tag attr='id']">
```

#### Registration Count

The API is known to become unstable when registering hundreds of shortcodes. Plugin authors should create solutions that rely on only a small number of shortcodes names. This limitation might change in future versions.

### Formal Syntax

WordPress shortcodes do not use special characters in the same way as HTML. The square braces may seem magical at first glance, but they are not truly part of any language. For example:

```php
[gallery]
```

The gallery shortcode is parsed by the API as a special symbol because it is a registered shortcode. On the other hand, square braces are simply ignored when a shortcode is not registered:

```php
[randomthing]
```

The randomthing symbol and its square braces are ignored because they are not part of any registered shortcode.

In a perfect world, any `[*]` symbol could be handled by the API, but we have to consider the following challenges: Square braces are allowed in HTML and are not always shortcodes, angle braces are allowed inside of shortcodes only in limited situations, and all of this code must run through multiple layers of customizeable filters and parsers before output. Because of these language compatibility issues, square braces can’t be magical.

The shortcode syntax uses these general parts:

```php
[name attributes close]
```

```php
[name attributes]Any HTML or shortcode may go here.[/name]
```

Escaped shortcodes are identical but have exactly two extra braces:

```php
[[name attributes close]]
```

```php
[[name attributes]Any HTML or shortcode may go here.[/name]]
```

Again, the shortcode name must be registered, otherwise all four examples would be ignored.

#### Names

Shortcode names must never contain the following characters:

- Square braces: `[ ]`
- Angle braces: `< >`
- Ampersand: `&`
- Forward slash: `/`
- Whitespace: space linefeed tab
- Non-printing characters: `x00` – `x20`

It is recommended to also avoid quotes in the names of shortcodes.

#### Attributes

Attributes are optional. A space is required between the shortcode name and the shortcode attributes. When more than one attribute is used, each attribute must be separated by at least one space.

Each attribute should conform to one of these formats:

```php
attribute_name = 'value'
```

```php
attribute_name = "value"
```

```php
attribute_name = value
```

```php
"value"
```

```php
value
```

Attribute names are optional and should contain only the following characters for compatibility across all platforms:

- Upper-case and lower-case letters: `A-Z` `a-z`
- Digits: `0-9`
- Underscore: `_`
- Hyphen: `-`

Spaces are not allowed in attribute names. Optional spaces may be used between the name and the `=` sign. Optional spaces may also be used between the `=` sign and the value.

It should be noted that even though attributes can be used with mixed case in the editor, they will always be lowercase after parsing.

Attribute values must never contain the following characters:

- Square braces: `[ ]`
- Quotes: `"`, `'`

Unquoted values also must never contain spaces.

HTML characters `<` and `>` have only limited support in attributes.

The recommended method of escaping special characters in shortcode attributes is HTML encoding. Most importantly, any user input appearing in a shortcode attribute must be escaped or stripped of special characters.

Note that double quotes are allowed inside of single-quoted values and vice versa, however this is not recommended when dealing with user input.

The following characters, if they are not escaped within an attribute value, will be automatically stripped and converted to spaces:

- No-break space: `xC2xA0`
- Zero-width space: `xE2x80x8B`

#### Self-Closing

The self-closing marker, a single forward slash, is optional. Space before the marker is optional. Spaces are not allowed after the marker.

```php
[example /]
```

The self-closing marker is purely cosmetic and has no effect except that it will force the shortcode parser to ignore any closing tag that follows it.

The enclosing type shortcodes may not use a self-closing marker.

#### Escaping

WordPress attempts to insert curly quotes between the `[name]` and `[/name]` tags. It will process that content just like any other. As of 4.0.1, unregistered shortcodes are also “texturized” and this may give unexpected curly quotes:

```php
[randomthing param="test"]
```

A better example would be:

```php
[randomthing param="test"]
```

The `` element is always avoided for the sake of curly quotes.

Registered shortcodes are still processed inside of `` elements. To escape a registered shortcode for display on your website, the syntax becomes:

```php
[[caption param="test"]]
```

which will output:

```php
[caption param="test"]
```

The `` element is optional in that situation.

For enclosing shortcodes, use the following syntax:

```php
[[caption]My Caption]
```

## External Resources

- [WordPress Shortcodes Generator](http://generatewp.com/shortcodes/)
- [Add Shortcode – WordPress Code Snippet Generator](https://www.nimbusthemes.com/add-shortcode-wordpress-snippet-generator/) – A snippet generator and full documentation about how to add the code to a WordPress website.
- [Shortcode summary by Aaron D. Campbell](http://ran.ge/2008/04/15/wordpress-25-shortcodes/) – Explains shortcodes and gives examples including how to incorporate shortcodes into a meta box for sending them to the editor using js.
- [Innovative WordPress Shortcodes In Action](https://wordpress.org/extend/plugins/iblocks/) – a WordPress plugin that shows you how to effectively use shortcodes to change your post content designs.
- [WordPress Shortcode API Overview](http://planetozh.com/blog/2008/03/wordpress-25-shortcodes-api-overview/) – explanations on usage and example of plugin using shortcodes.
- [Simple shortcode-powered BBCode plugin](https://wordpress.org/extend/plugins/bbcode/) – a simple plugin that adds support for BBCode via shortcode. A good way to see shortcodes in action.

## Default Shortcodes

- `<a href="#reference/hooks/wp_audio_shortcode">[ audio ]</a>`
- `[ wp_caption ]`
- `[ caption ]`
- `<a href="#reference/classes/wp_embed/shortcode">[ embed ]</a>`
- `<a href="#reference/functions/gallery_shortcode">[ gallery ]</a>`
- `<a href="#reference/hooks/wp_video_shortcode">[ video ]</a>`
- `<a href="#reference/functions/wp_playlist_shortcode">[ playlist ]</a>`

## Shortcode API functions list

- Function: [do\_shortcode()](#reference/functions/do_shortcode)
- Function: [add\_shortcode()](#reference/functions/add_shortcode)
- Function: [remove\_shortcode()](#reference/functions/remove_shortcode)
- Function: [remove\_all\_shortcodes()](#reference/functions/remove_all_shortcodes)
- Function: [shortcode\_atts()](#reference/functions/shortcode_atts)
- Function: [strip\_shortcodes()](#reference/functions/strip_shortcodes)
- Function: [shortcode\_exists()](#reference/functions/shortcode_exists)
- Function: [has\_shortcode()](#reference/functions/has_shortcode)
- Function: [get\_shortcode\_regex()](#reference/functions/get_shortcode_regex)
- Function: [wp\_audio\_shortcode()](#reference/functions/wp_audio_shortcode)
- Function: [wp\_video\_shortcode()](#reference/functions/wp_video_shortcode)
- Filter: [no\_texturize\_shortcodes](#reference/hooks/no_texturize_shortcodes)

---

# Site Health <a name="apis/site-health" />

Source: https://developer.wordpress.org/apis/site-health/

Since WordPress 5.8, developers are allowed to extend Site Health screen. This API allows developers to add their own tabs to the Site Health interface.

![](https://i0.wp.com/make.wordpress.org/core/files/2021/06/4-menu-items.png?ssl=1)## Registering a custom tab navigation

Developers need to start by creating a navigation element, so that users may access the new tab. This is done using the `site_health_navigation_tabs` filter, which is an associated array of tab keys, and their label.

```php
<?php
function wporg_example_site_health_navigation_tabs( $tabs ) {
    // translators: Tab heading for Site Health navigation.
    $tabs['example-site-health-tab'] = esc_html_x( 'My New Tab', 'Site Health', 'text-domain' );
 
    return $tabs;
}
add_filter( 'site_health_navigation_tabs', 'wporg_example_site_health_navigation_tabs' );
```

The above example will add the identifier `example-site-health-tab` with the label `My New Tab` to the header navigation located in Site Health screens.

It is also possible to re-order what tabs are displayed first using this filter, or even remove tabs. By default core has two tabs, the `Status` and `Info` screens. The `Status` screen is the default, and therefore has no slug.

To not overburden the navigation area, if there are more than 4 items added, only the first three will be displayed directly, with the remaining items being wrapped inside a sub-navigation. This is based on usage testing in the Health Check plugin, where 4 items have shown to be enough to cover most use cases, but not so many as to become confusing.

## Displaying the content of a custom tab

When a user visits a Site Health tab, other than the default screen, the `site_health_tab_content` action triggers. This action includes a single argument being the slug, as defined by the tab navigation in the previous filter, to help developers to identify which page is being requested.

The action fires after the header itself has been loaded, but does not include any wrappers. This gives you as a developer the full width of the screen (not counting the admin menu) to work with.

```php
<?php
function wporg_example_site_health_tab_content( $tab ) {
    // Do nothing if this is not our tab.
    if ( 'example-site-health-tab' !== $tab ) {
        return;
    }
 
    // Include the interface, kept in a separate file just to differentiate code from views.
    include trailingslashit( plugin_dir_path( __FILE__ ) ) . 'views/site-health-tab.php';
}
add_action( 'site_health_tab_content', 'wporg_example_site_health_tab_content' );
```

The above example loads in a file with your tab content from your plugin, but only if the tab matches the tab key (or slug if you will) which was defined in the previous example.

It is possible to provide output on any tab this way, or on another tab not your own, for example if they interact with each other.

Another example might be to extend the default `Info` tab, which has the slug `debug`, and add a button to copy some information specific to only your plugin or theme:

```php
<?php
function wporg_add_button_to_site_health_info_tab( $tab ) {
    // Do nothing if this is not the "debug" tab.
    if ( 'debug' !== $tab ) {
        return;
    }
    ?>
    <button class="copy-my-plugin-info">
        <?php esc_html_e( 'Click to copy plugin info', 'text-domain' ); ?>
    </button>
    <?php
}
add_action( 'site_health_tab_content', 'wporg_add_button_to_site_health_info_tab' );
```

---

# Theme <a name="apis/theme" />

Source: https://developer.wordpress.org/apis/theme/

See [Theme Developer Handbook](#themes).

---

# Transients <a name="apis/transients" />

Source: https://developer.wordpress.org/apis/transients/

## Overview

This page contains the technical documentation of **WordPress Transients API**, which offers a simple and standardized way of storing cached data in the database temporarily by giving it a custom name and a timeframe after which it will expire and be deleted.

The Transients API is very similar to the [Options API](#plugins/settings/options-api) but with the added feature of an expiration time, which simplifies the process of using the `wp_options` database table to temporarily store cached information.

Note that the “site\_” functions are essentially the same as their counterparts, but work network wide when using WordPress [Multisite](https://codex.wordpress.org/Glossary#Multisite).

Also of note is that Transients are inherently sped up by caching plugins, where normal Options are not. A *memcached* plugin, for example, would make WordPress store transient values in fast memory instead of in the database. For this reason, transients should be used to store any data that is expected to expire, or which can expire at any time. Transients should also never be assumed to be in the database, since they may not be stored there at all.

Furthermore, it is possible for the transient to not be available before the expiration time. Much like what is done with caching, your code should have a fall back method to re-generate the data if the transient is not available.

Ryan McCue explained it this way on a [ticket](https://core.trac.wordpress.org/ticket/20316#comment:47):

> Everyone seems to misunderstand how transient expiration works, so the long and short of it is: transient expiration times are a maximum time. There is no minimum age. Transients might disappear one second after you set them, or 24 hours, but they will never be around after the expiration time.

The intended audience for this article includes WordPress theme authors, plugin authors and anyone who needs to cache specific data but wants it to be refreshed within a given timeframe. This document assumes a basic understanding of PHP scripting.

## Function Reference

**Set/Get Transient:**

- [set\_transient()](#reference/functions/set_transient)
- [get\_transient()](#reference/functions/get_transient)
- [set\_site\_transient()](#reference/functions/set_site_transient)
- [get\_site\_transient()](#reference/functions/get_site_transient)

**Delete Transient:**

- [delete\_transient()](#reference/functions/delete_transient)
- [delete\_site\_transient()](#reference/functions/delete_site_transient)

## Using Transients

### Saving Transients

To save a transient you use [set\_transient()](#reference/functions/set_transient):

```php
set_transient( $transient, $value, $expiration );
```

- `$transient` (string): Transient name.   
    Expected to not be SQL-escaped. Must be 172 characters or fewer in length.
- `$value` (array|object): Data to save, either a regular variable or an array/object.   
    The API will handle serialization of complex data for you.
- `$expiration` (integer): The maximum of seconds to keep the data before refreshing.   
    Transients may expire before the `$expiration` (Due to External Object Caches, or database upgrades) but will never return their value past $expiration.

So for example to save the `$special_query_results` object for 12 hours you would do:

```php
set_transient( 'special_query_results', $special_query_results, 60*60*12 );
```

#### Using Time Constants

In [WordPress 3.5](https://codex.wordpress.org/Version_3.5), several constants were introduced to easily express time:

```php
MINUTE_IN_SECONDS  = 60 (seconds)
HOUR_IN_SECONDS    = 60 * MINUTE_IN_SECONDS
DAY_IN_SECONDS     = 24 * HOUR_IN_SECONDS
WEEK_IN_SECONDS    = 7 * DAY_IN_SECONDS
MONTH_IN_SECONDS   = 30 * DAY_IN_SECONDS
YEAR_IN_SECONDS    = 365 * DAY_IN_SECONDS
```

So for example, the code sample from above can be simplified to:

```php
set_transient( 'special_query_results', $special_query_results, 12 * HOUR_IN_SECONDS );
```

### Fetching Transients

To get a saved transient you use [get\_transient()](#reference/functions/get_transient):

```php
get_transient( $transient );
```

`$transient`: the unique slug used while saving the transient with `set_transient()`.

In our case we could fetch our special query results with:

```php
get_transient( 'special_query_results' );
```

If the transient does not exist, or has expired, then `get_transient()` will return `false`. This should be checked using the identity operator `===` instead of the normal equality operator `==`, because an integer value of zero (or other “empty”/”falsey” data) could be the data you’re wanting to store. Because of this “false” value, transients should not be used to hold plain boolean values (true/false). Put them into an array or convert them to integers instead.

Example usage:

```php
if ( false === ( $value = get_transient( 'value' ) ) ) {
	// this code runs when there is no valid transient set
}
```

The above code will get the transient and put it into `$value`. The code inside the if block only runs when there’s not a valid transient for it to get. This is typically a method to re-generate the transient value through other means. Keep in mind that it’s possible for a transient to not be available before it’s normal expiration time.

### Removing Saved Transients

Our transient will die naturally of old age once $expiration seconds have passed since we last ran [set\_transient()](#reference/functions/set_transient), but we can force the transient to die early by manually deleting it. This is useful for times when a given activity (saving a post, adding a category etc.) will make the cached data inherently stale and in need of updating.

```php
delete_transient( $transient );
```

`$transient`: the unique name used when saving with `set_transient()`.

In our case, obviously, this would be:

```php
delete_transient( 'special_query_results' );
```

WordPress infrequently cleans out expired transients. To prevent expired transients from building up in the database, it’s a good practice to always remove your transient once you are done with it and no longer need it.

## Complete Example

Putting it all together here is an example of how to use transients in your code.

```php
<?php
// Get any existing copy of our transient data
if ( false === ( $special_query_results = get_transient( 'special_query_results' ) ) ) {
	// It wasn't there, so regenerate the data and save the transient
	$special_query_results = new WP_Query( 'cat=5&order=random&tag=tech&post_meta_key=thumbnail' );
	set_transient( 'special_query_results', $special_query_results, 12 * HOUR_IN_SECONDS );
}
// Use the data like you would have normally...
?>
```

And an example of using [delete\_transient()](#reference/functions/delete_transient). In this case we’ll add a function to the `edit_term` action, which will run every time a category or tag is edited (i.e. we’re assuming that the editing of a term invalidates our data and we want to remove the cached version).

```php
<?php
// Create a simple function to delete our transient
function edit_term_delete_transient() {
	delete_transient( 'special_query_results' );
}
// Add the function to the edit_term hook so it runs when categories/tags are edited
add_action( 'edit_term', 'edit_term_delete_transient' );
?>
```

Use transients with [WP\_Query](#reference/classes/wp_query) to retrieve “featured posts”:

```php
<?php 
// Check for transient. If none, then execute WP_Query
if ( false === ( $featured = get_transient( 'foo_featured_posts' ) ) ) {
	$featured = new WP_Query(
		array(
			'category' => 'featured',
			'posts_per_page' => 5
		)
	);

	// Put the results in a transient. Expire after 12 hours.
	set_transient( 'foo_featured_posts', $featured, 12 * HOUR_IN_SECONDS );
}
?>
 
// Run the loop as normal

<?php if ( $featured->have_posts() ) : ?>

	<?php while ( $featured->have_posts() ) : $featured->the_post(); ?>
		// featured posts found, do stuff
	<?php endwhile; ?>

<?php else: ?>
	// no featured posts found
<?php endif; ?>

<?php wp_reset_postdata(); ?>

```

Using transients in your plugins and themes is simple and only adds a few extra lines of code, but if used in the right situations (long/expensive database queries or complex processed data) it can save seconds off the load times on your site.

---

# XML-RPC <a name="apis/xml-rpc" />

Source: https://developer.wordpress.org/apis/xml-rpc/

XML-RPC API that supersedes the legacy Blogger, MovableType, and metaWeblog APIs. Some clients also exist for different programming languages.

## Components

- Posts (for posts, pages, and custom post types) – Added in [WordPress 3.4](/support/wordpress-version/version-3-4/)
    - [wp.getPost](#reference/classes/wp_xmlrpc_server/wp_getpost)
    - [wp.getPosts](#reference/classes/wp_xmlrpc_server/wp_getposts)
    - [wp.newPost](#reference/classes/wp_xmlrpc_server/wp_newpost)
    - [wp.editPost](#reference/classes/wp_xmlrpc_server/wp_editpost)
    - [wp.deletePost](#reference/classes/wp_xmlrpc_server/wp_deletepost)
    - [wp.getPostType](#reference/classes/wp_xmlrpc_server/wp_getposttype)
    - [wp.getPostTypes](#reference/classes/wp_xmlrpc_server/wp_getposttypes)
    - [wp.getPostFormats](#reference/classes/wp_xmlrpc_server/wp_getpostformats)
    - [wp.getPostStatusList](#reference/classes/wp_xmlrpc_server/wp_getpoststatuslist)

- Taxonomies (for categories, tags, and custom taxonomies) – Added in [WordPress 3.4](#support/wordpress-version/version-3-4)
    - [wp.getTaxonomy](#reference/classes/wp_xmlrpc_server/wp_gettaxonomy)
    - [wp.getTaxonomies](#reference/classes/wp_xmlrpc_server/wp_gettaxonomies)
    - [wp.getTerm](#reference/classes/wp_xmlrpc_server/wp_getterm)
    - [wp.getTerms](#reference/classes/wp_xmlrpc_server/wp_getterms)
    - [wp.newTerm](#reference/classes/wp_xmlrpc_server/wp_newterm)
    - [wp.editTerm](#reference/classes/wp_xmlrpc_server/wp_editterm)
    - [wp.deleteTerm](#reference/classes/wp_xmlrpc_server/wp_deleteterm)
- Media – Added in [WordPress 3.1](#support/wordpress-version/version-3-4)
    - [wp.getMediaItem](#reference/classes/wp_xmlrpc_server/wp_getmediaitem)
    - [wp.getMediaLibrary](#reference/classes/wp_xmlrpc_server/wp_getmedialibrary)
    - wp.uploadFile
- Comments – Added in [WordPress 2.7](#support/wordpress-version/version-3-4)
    - [wp.getCommentCount](#reference/classes/wp_xmlrpc_server/wp_getcommentcount)
    - [wp.getComment](#reference/classes/wp_xmlrpc_server/wp_getcomment)
    - [wp.getComments](#reference/classes/wp_xmlrpc_server/wp_getcomments)
    - [wp.newComment](#reference/classes/wp_xmlrpc_server/wp_newcomment)
    - [wp.editComment](#reference/classes/wp_xmlrpc_server/wp_editcomment)
    - [wp.deleteComment](#reference/classes/wp_xmlrpc_server/wp_deletecomment)
    - [wp.getCommentStatusList](#reference/classes/wp_xmlrpc_server/wp_getcommentstatuslist)
- Options – Added in [WordPress 2.6](#support/wordpress-version/version-2-6)
    - [wp.getOptions](#reference/classes/wp_xmlrpc_server/wp_getoptions)
    - [wp.setOptions](#reference/classes/wp_xmlrpc_server/wp_setoptions)
- Users – Added in [WordPress 3.5](#support/wordpress-version/version-3-5)
    - [wp.getUsersBlogs](#reference/classes/wp_xmlrpc_server/wp_getusersblogs)
    - [wp.getUser](#reference/classes/wp_xmlrpc_server/wp_getuser)
    - [wp.getUsers](#reference/classes/wp_xmlrpc_server/wp_getusers)
    - [wp.getProfile](#reference/classes/wp_xmlrpc_server/wp_getprofile)
    - [wp.editProfile](#reference/classes/wp_xmlrpc_server/wp_editprofile)
    - [wp.getAuthors](#reference/classes/wp_xmlrpc_server/wp_getauthors)

## Obsolete Components

- Categories – use Taxonomies instead, with taxonomy=’category’
    - wp.getCategories
    - wp.suggestCategories
    - wp.newCategory
    - wp.deleteCategory
- Tags – use Taxonomies instead, with taxonomy=’post\_tag’
    - wp.getTags
- Pages – use Posts instead, with post\_type=’page’
    - wp.getPage
    - wp.getPages
    - wp.getPageList
    - wp.newPage
    - wp.editPage
    - wp.deletePage
    - wp.getPageStatusList
    - wp.getPageTemplates

## Clients

- [rubypress](https://github.com/zachfeldman/rubypress): WordPress XML-RPC client for Ruby projects. Mirrors this documentation closely, full test suite built in
- [wordpress-xmlrpc-client](http://letrunghieu.github.io/wordpress-xmlrpc-client/): PHP client with full test suite. This library implement WordPress API closely to this documentation.
- [WordPressSharp](http://abrudtkuhl.github.io/WordPressSharp/): XML-RPC Client for C#.net
- [plugins/jetpack](https://wordpress.org/plugins/jetpack): Jetpack by WordPress.com enables a JSON API for sites that run the plugin
- [plugins/json-api](https://wordpress.org/plugins/json-api/): WordPress JSON api

---

# wp-config.php <a name="apis/wp-config-php" />

Source: https://developer.wordpress.org/apis/wp-config-php/

One of the most important files in your WordPress installation is the `wp-config.php` file. This file is located in the root of your WordPress file directory and contains your website’s base configuration details, such as database connection information.

## Configure Database Settings

**Important:** *Never* use a word processor like Microsoft Word for editing WordPress files!

Locate the file `wp-config-sample.php` in the base directory of your WordPress directory and open in a [text editor](https://wordpress.org/support/article/editing-files/#text-editors).

### Default wp-config-sample.php

Note: This is an example of a default [wp-config-sample.php](https://core.trac.wordpress.org/browser/trunk/wp-config-sample.php). The values here are examples to show you what to do.

```php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );
/** MySQL database username */
define( 'DB_USER', 'username_here' );
/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
```

**Note:** Text inside /\* \*/ are *[comments](http://www.php.net/manual/en/language.basic-syntax.comments.php)*, for information purposes only.

#### Set Database Name

Replace ‘database\_name\_here’, with the name of your database, e.g. *MyDatabaseName*.

```php
define( 'DB_NAME', 'MyDatabaseName' ); // Example MySQL database name
```

#### Set Database User

Replace ‘username\_here’, with the name of your username e.g. *MyUserName*.

```php
define( 'DB_USER', 'MyUserName' ); // Example MySQL username
```

#### Set Database Password

Replace ‘password\_here’, with the your password, e.g. *MyPassWord*.

```php
define( 'DB_PASSWORD', 'MyPassWord' ); // Example MySQL password
```

#### Set Database Host

If needed, replace ‘*localhost*‘, with the name of your database host (e.g. *MyDatabaseHost*). A port number or Unix socket file path may be needed as well.

```php
define( 'DB_HOST', 'MyDatabaseHost' ); // Example MySQL Database host
```

**Note:** There is a good chance you will **NOT** have to change it. If you are unsure, try installing with the default value of ‘localhost’ and see if it works. If the install fails, contact your web hosting provider.

##### MySQL Alternate Port

If your host uses an alternate port number for your database, you’ll need to change the **DB\_HOST** value in the `wp-config.php` file to reflect the alternate port provided by your host.

For localhost:

```php
define( 'DB_HOST', '127.0.0.1:3307' );
or
define( 'DB_HOST', 'localhost:3307' );
```

For specified server:

```php
define( 'DB_HOST', 'mysql.example.com:3307' );
```

Replace the number **3307** in either of the code examples above with the port number information provided by your host.

##### MySQL Sockets or Pipes

If your host uses Unix sockets or pipes, you’ll need to change the **DB\_HOST** value in the `wp-config.php` file to reflect the socket or pipe information provided by your host.

```php
define( 'DB_HOST', '127.0.0.1:/var/run/mysqld/mysqld.sock' );
// or define( 'DB_HOST', 'localhost:/var/run/mysqld/mysqld.sock' );
// or define( 'DB_HOST', 'example.tld:/var/run/mysqld/mysqld.sock' );

```

Replace the text string `<strong>/var/run/mysqld/mysqld.sock</strong>` above with the socket or pipe information provided by your host.

### Database character set

**DB\_CHARSET** was made available to allow designation of the database [character set](https://codex.wordpress.org/Glossary#Character_Set) (e.g. tis620 for TIS620 Thai) to be used when defining the MySQL database tables.

The default value of **utf8** ([Unicode](http://en.wikipedia.org/wiki/Unicode) [UTF-8](http://en.wikipedia.org/wiki/UTF-8)) is almost always the best option. UTF-8 supports any language, so you typically want to leave DB\_CHARSET at **utf8** and use the [DB\_COLLATE](https://codex.wordpress.org/Editing_wp-config.php#Database_collation) value for your language instead.

This example shows utf8 which is considered the WordPress default value:

```php
define( 'DB_CHARSET', 'utf8' );
```

There usually should be no reason to change the default value of DB\_CHARSET. If your blog needs a different character set, please read [Character Sets and Collations MySQL Supports](http://dev.mysql.com/doc/refman/5.6/en/charset-charsets.html) for valid DB\_CHARSET values. **WARNING:** Those performing upgrades.

If DB\_CHARSET and DB\_COLLATE do not exist in your `wp-config.php` file, **DO NOT** add either definition to your `wp-config.php` file unless you read and understand [Converting Database Character Sets](https://codex.wordpress.org/Converting_Database_Character_Sets). Adding DB\_CHARSET and DB\_COLLATE to the `wp-config.php` file, for an existing blog, can cause major problems.

### Database collation

**DB\_COLLATE** was made available to allow designation of the database [collation](https://codex.wordpress.org/Glossary#Collation) (i.e. the sort order of the character set). In most cases, this value should be left blank (null) so the database collation will be automatically assigned by MySQL based on the database character set specified by DB\_CHARSET. An example of when you may need to set ''’DB\_COLLATE''’ to one of the UTF-8 values defined in [UTF-8 character sets](http://dev.mysql.com/doc/refman/5.6/en/charset-unicode-sets.html) for most Western European languages would be when a different language in which the characters that you entered are not the same as what is being displayed. (See also [Unicode Character Sets](https://dev.mysql.com/doc/refman/8.0/en/charset-unicode-sets.html#charset-unicode-sets-general-versus-unicode) in SQL Manual)

The WordPress default DB\_COLLATE value:

```php
define( 'DB_COLLATE', '' );
```

UTF-8 Unicode General collation

```php
define( 'DB_COLLATE', 'utf8_general_ci' );
```

UTF-8 Unicode Turkish collation

```php
define( 'DB_COLLATE', 'utf8_turkish_ci' );
```

There usually should be no reason to change the default value of DB\_COLLATE. Leaving the value blank (null) will insure the collation is automatically assigned by MySQL when the database tables are created. **WARNING:** Those performing upgrades

If DB\_COLLATE and DB\_CHARSET do not exist in your `wp-config.php` file, **DO NOT** add either definition to your `wp-config.php` file unless you read and understand [Converting Database Character Sets](https://codex.wordpress.org/Converting_Database_Character_Sets). And you may be in need of a WordPress upgrade.

### Security Keys

You don’t have to remember the keys, just make them long, random and complicated — or better yet, use the [online generator](https://api.wordpress.org/secret-key/1.1/salt/). You can change these at any point in time to invalidate all existing cookies. This does mean that all users will have to login again.

Example (don’t use these!):

```php
define( 'AUTH_KEY',         't`DK%X:>xy|e-Z(BXb/f(Ur`8#~UzUQG-^_Cs_GHs5U-&Wb?pgn^p8(2@}IcnCa|' );
define( 'SECURE_AUTH_KEY',  'D&ovlU#|CvJ##uNq}bel+^MFtT&.b9{UvR]g%ixsXhGlRJ7q!h}XWdEC[BOKXssj' );
define( 'LOGGED_IN_KEY',    'MGKi8Br(&{H*~&0s;{k0<S(O:+f#WM+q|npJ-+P;RDKT:~jrmgj#/-,[hOBk!ry^' );
define( 'NONCE_KEY',        'FIsAsXJKL5ZlQo)iD-pt??eUbdc{_Cn<4!d~yqz))&B D?AwK%)+)F2aNwI|siOe' );
define( 'AUTH_SALT',        '7T-!^i!0,w)L#JK@pc2{8XE[DenYI^BVf{L:jvF,hf}zBf883td6D;Vcy8,S)-&G' );
define( 'SECURE_AUTH_SALT', 'I6`V|mDZq21-J|ihb u^q0F }F_NUcy`l,=obGtq*p#Ybe4a31R,r=|n#=]@]c #' );
define( 'LOGGED_IN_SALT',   'w<$4c$Hmd%/*]`Oom>(hdXW|0M=X={we6;Mpvtg+V.o<$|#_}qG(GaVDEsn,~*4i' );
define( 'NONCE_SALT',       'a|#h{c5|P &xWs4IZ20c2&%4!c(/uG}W:mAvy<I44`jAbup]t=]V<`}.py(wTP%%' );
```

A **secret key** makes your site harder to successfully attack by adding random elements to the password.

In simple terms, a secret key is a password with elements that make it harder to generate enough options to break through your security barriers. A password like “password” or “test” is simple and easily broken. A random, long password which uses no dictionary words, such as “88a7da62429ba6ad3cb3c76a09641fc” would take a brute force attacker millions of hours to crack. A ‘*salt* is used to further enhance the security of the generated result.

The four keys are required for the enhanced security. The four salts are recommended, but are not required, because WordPress will generate salts for you if none are provided. They are included in `wp-config.php` by default for inclusiveness.

For more information on the technical background and breakdown of secret keys and secure passwords, see:

- [Wikipedia’s explanation of Password Cracking](http://en.wikipedia.org/wiki/Password_cracking)
- [Lorelle VanFossen – Protect Your Blog With a Solid Password](http://www.blogherald.com/2007/05/08/protect-your-blog-with-a-solid-password/)
- [Instructables – Security Password Tips](http://www.instructables.com/id/How-to-Choose-a-Good-Password-A-few-quick-tips-on/)
- [Huffington Post – 17 Tips You Can Do Today to Protect Your Online Passwords](http://www.huffingtonpost.com/arkady-bukh/17-tips-you-can-do-today-to-protect-your-online-passwords_b_6812478.html/)

## Advanced Options

The following sections may contain advanced information and some changes might result in unforeseen issues. Please make sure you practice [regular backups](/support/article/wordpress-backups/) and know how to restore them before modifying these settings.

### table\_prefix

The **$table\_prefix** is the value placed in the front of your database tables. Change the value if you want to use something other than **wp\_** for your database prefix. Typically this is changed if you are [installing multiple WordPress blogs](/support/article/installing-multiple-blogs/) in the same database, as is done with the multisite feature.

It is possible to have multiple installations in one database if you give each a unique prefix. Keep security in mind if you choose to do this.

```php
$table_prefix = 'r235_'; // Only numbers, letters, and underscores please!
```

### WP\_SITEURL

WP\_SITEURL allows the WordPress address (URL) to be defined. The value defined is the address where your WordPress core files reside. It should include the `http://` part too. Do not put a slash “**/**” at the end. Setting this value in `wp-config.php` overrides the [wp\_options table](https://codex.wordpress.org/Database_Description#Table:_wp_options) value for **siteurl**. Adding this in can reduce the number of database calls when loading your site. **Note:** This will **not** change the database stored value. The URL will revert to the old database value if this line is ever removed from `wp-config`. [Use the **RELOCATE** constant](https://codex.wordpress.org/Changing_The_Site_URL#Relocate_method) to change the **siteurl** value in the database.

If WordPress is installed into a directory called “wordpress” for the [domain](http://en.wikipedia.org/wiki/Domain_name_system) example.com, define WP\_SITEURL like this:

```php
define( 'WP_SITEURL', 'http://example.com/wordpress' );
```

Dynamically set WP\_SITEURL based on $\_SERVER\[‘HTTP\_HOST’\]

```php
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/path/to/wordpress' );
```

**Note:** HTTP\_HOST is created dynamically by PHP based on the value of the HTTP HOST Header in the request, thus possibly allowing for [file inclusion vulnerabilities](https://en.wikipedia.org/wiki/File_inclusion_vulnerability). SERVER\_NAME may also be created dynamically. However, when Apache is configured as UseCanonicalName “on”, SERVER\_NAME is set by the server configuration, instead of dynamically. In that case, it is safer to user SERVER\_NAME than HTTP\_HOST.

Dynamically set WP\_SITEURL based on $\_SERVER\[‘SERVER\_NAME’\]

```php
define( 'WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/path/to/wordpress' );
```

### Blog address (URL)

Similar to WP\_SITEURL, WP\_HOME *overrides the [wp\_options table](https://codex.wordpress.org/Database_Description#Table:_wp_options) value for* home *but does not change it in the database.* **home** is the address you want people to type in their browser to reach your WordPress blog. It should include the `http://` part and should not have a slash “**/**” at the end. Adding this in can reduce the number of database calls when loading your site.

```php
define( 'WP_HOME', 'http://example.com/wordpress' );
```

If you are using the technique described in [Giving WordPress Its Own Directory](/support/article/giving-wordpress-its-own-directory/) then follow the example below. Remember, you will also be placing an `index.php` in your web-root directory if you use a setting like this.

```php
define( 'WP_HOME', 'http://example.com' );
```

Dynamically set WP\_HOME based on $\_SERVER\[‘HTTP\_HOST’\]

```php
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/path/to/wordpress' );
```

### Moving wp-content folder

You can move the `wp-content` directory, which holds your themes, plugins, and uploads, outside of the WordPress application directory.

Set WP\_CONTENT\_DIR to the full **local path** of this directory (no trailing slash), e.g.

```php
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/blog/wp-content' );
```

Set WP\_CONTENT\_URL to the full **URL** of this directory (no trailing slash), e.g.

```php
define( 'WP_CONTENT_URL', 'http://example/blog/wp-content' );
```

### Moving plugin folder

Set WP\_PLUGIN\_DIR to the full **local path** of this directory (no trailing slash), e.g.

```php
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/blog/wp-content/plugins' );
```

Set WP\_PLUGIN\_URL to the full **URI** of this directory (no trailing slash), e.g.

```php
define( 'WP_PLUGIN_URL', 'http://example/blog/wp-content/plugins' );
```

If you have compability issues with plugins Set PLUGINDIR to the full **local path** of this directory (no trailing slash), e.g.

```php
define( 'PLUGINDIR', dirname(__FILE__) . '/blog/wp-content/plugins' );
```

### Moving themes folder

You cannot move the themes folder because its path is hardcoded relative to the `wp-content` folder:

$theme\_root = WP\_CONTENT\_DIR . ‘/themes’;

However, you can register additional theme directories using [register\_theme\_directory](#reference/functions/register_theme_directory).

See how to [move the wp-content](/support/article/editing-wp-config-php/) folder. For more details how the themes folder is determined, see `wp-includes/theme.php`.

### Moving uploads folder

Set UPLOADS to :

```php
define( 'UPLOADS', 'blog/wp-content/uploads' );
```

This path can not be absolute. It is always relative to ABSPATH, therefore does not require a leading slash.

### Modify AutoSave Interval

When editing a post, WordPress uses Ajax to auto-save revisions to the post as you edit. You may want to increase this setting for longer delays in between auto-saves, or decrease the setting to make sure you never lose changes. The default is 60 seconds.

```php
define( 'AUTOSAVE_INTERVAL', 160 ); // Seconds
```

### Post Revisions

WordPress, by default, will save copies of each edit made to a post or page, allowing the possibility of reverting to a previous version of that post or page. The saving of revisions can be disabled, or a maximum number of revisions per post or page can be specified.

#### Disable Post Revisions

If you do **not** set this value, WordPress defaults WP\_POST\_REVISIONS to *true* (enable post revisions). If you want to disable the awesome revisions feature, use this setting:

```php
define( 'WP_POST_REVISIONS', false );
```

Note: Some users could not get this to function until moving the command to the first line under the initial block comment in `wp-config.php`.

#### Specify the Number of Post Revisions

If you want to specify a maximum number of revisions that WordPress stores, change *false* to an integer/number (*e.g.*, 3 or 12).

```php
define( 'WP_POST_REVISIONS', 3 );
```

Note: Some users could not get this to function until moving the command to the first line under the initial block comment in `wp-config.php`.

### Set Cookie Domain

The domain set in the cookies for WordPress can be specified for those with unusual domain setups. For example, if subdomains are used to serve static content, you can set the cookie domain to only your non-static domain to prevent WordPress cookies from being sent with each request to static content on your subdomain .

```php
define( 'COOKIE_DOMAIN', 'www.example.com' );
```

### Enable Multisite / Network Ability

WP\_ALLOW\_MULTISITE is a feature enable multisite functionality. If this setting is absent from `wp-config.php` it defaults to false.

```php
define( 'WP_ALLOW_MULTISITE', true );
```

### Redirect Nonexistent Blogs

NOBLOGREDIRECT can be used to redirect the browser if the visitor tries to access a nonexistent subdomain or a subfolder.

```php
define( 'NOBLOGREDIRECT', 'http://example.com' );
```

### Fatal Error Handler

WordPress 5.2 introduced [Recovery Mode](https://make.wordpress.org/core/2019/04/16/fatal-error-recovery-mode-in-5-2/) which displays error message instead of white screen when plugins causes fatal error.

*The site is experiencing technical difficulties. Please check your site admin email inbox for instructions.*

White screens and PHP error messages are not displayed to users any more. But in a development environment, if you want to enable WP\_DEBUG\_DISPLAY, you have to disable recovery mode by set true to WP\_DISABLE\_FATAL\_ERROR\_HANDLER.

```php
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );   // 5.2 and later define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true ); 
```

### WP\_DEBUG

The [WP\_DEBUG](https://codex.wordpress.org/Debugging_in_WordPress) option controls the reporting of some errors and warnings and enables use of the WP\_DEBUG\_DISPLAY and WP\_DEBUG\_LOG settings. The default boolean value is false.

```php
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );   // 5.2 and later
define( 'WP_DEBUG', true );
```

[Database errors are printed only if WP\_DEBUG is set to true](https://trac.wordpress.org/ticket/5473). Database errors are handled by the [wpdb](#reference/classes/wpdb) class and are not affected by [PHP’s error settings](http://www.php.net/errorfunc).

Setting WP\_DEBUG to true also raises the [error reporting level](http://www.php.net/error-reporting) to E\_ALL and activates warnings when deprecated functions or files are used; otherwise, WordPress sets the error reporting level to E\_ALL ^ E\_NOTICE ^ E\_USER\_NOTICE.

### WP\_ENVIRONMENT\_TYPE

The WP\_ENVIRONMENT\_TYPE option controls the environment type for a site: `local`, `development`, `staging`, and `production`.

The values of environment types are processed in the following order with each sequential method overriding any previous values: the WP\_ENVIRONMENT\_TYPE [PHP environment variable](https://www.php.net/manual/en/reserved.variables.environment.php) and the WP\_ENVIRONMENT\_TYPE constant.

For both methods, if the value of an environment type provided is not in the list of allowed environment types, the default `production` value will be returned.

The simplest way to set the value is probably through defining the constant:

```php
define( 'WP_ENVIRONMENT_TYPE', 'staging' );
```

Note: When `development` is returned by [wp\_get\_environment\_type()](#reference/functions/wp_get_environment_type), WP\_DEBUG will be set to `true` if it is not defined in the `wp-config.php` file of the site.

### SCRIPT\_DEBUG

[SCRIPT\_DEBUG](/support/article/debugging-in-wordpress/) is a related constant that will force WordPress to use the “dev” versions of scripts and stylesheets in `wp-includes/js`, `wp-includes/css`, `wp-admin/js`, and `wp-admin/css` will be loaded instead of the `.min.css` and `.min.js` versions.. If you are planning on modifying some of WordPress’ built-in JavaScript or Cascading Style Sheets, you should add the following code to your config file:

```php
define( 'SCRIPT_DEBUG', true );
```

### Disable Javascript Concatenation

To result in faster administration screens, all JavaScript files are [concatenated](http://en.wikipedia.org/wiki/Concatenation) into one URL. If JavaScript is failing to work in an administration screen, you can try disabling this feature:

```php
define( 'CONCATENATE_SCRIPTS', false );
```

### Configure Error Logging

Configuring error logging can be a bit tricky. First of all, default PHP error log and display settings are set in the php.ini file, which you may or may not have access to. If you do, they should be set to the desired settings for live PHP pages served to the public. It’s strongly recommended that no error messages are displayed to the public and instead routed to an error log. Further more, error logs should not be located in the publicly accessible portion of your server. Sample recommended php.ini error settings:

```php
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

**About Error Reporting 4339**This is a custom value that only logs issues that affect the functioning of your site, and ignores things like notices that may not even be errors. See [PHP Error Constants](http://php.net/manual/en/errorfunc.constants.php) for the meaning of each binary position for 1000011110011, which is the binary number equal to 4339. The far left 1 means report any E\_RECOVERABLE\_ERROR. The next 0 means do not report E\_STRICT, (which is thrown when sloppy but functional coding is used) and so on. Feel free to determine your own custom error reporting number to use in place of 4339.

Obviously, you will want different settings for your development environment. If your staging copy is on the same server, or you don’t have access to `php.ini`, you will need to override the default settings at run time. It’s a matter of personal preference whether you prefer errors to go to a log file, or you prefer to be notified immediately of any error, or perhaps both. Here’s an example that reports all errors immediately that you could insert into your `wp-config.php` file:

```php
@ini_set( 'log_errors', 'Off' );
@ini_set( 'display_errors', 'On' );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );   // 5.2 and later
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', true );
```

Because `wp-config.php` is loaded for every page view not loaded from a cache file, it is an excellent location to set `php.ini` settings that control your PHP installation. This is useful if you don’t have access to a `php.ini` file, or if you just want to change some settings on the fly. One exception is ‘error\_reporting’. When WP\_DEBUG is defined as true, ‘error\_reporting’ will be set to E\_ALL by WordPress regardless of anything you try to set in wp-config.php. If you really have a need to set ‘error\_reporting’ to something else, it must be done after `wp-settings.php` is loaded, such as in a plugin file.

If you turn on error logging, remember to delete the file afterwards, as it will often be in a publicly accessible location, where anyone could gain access to your log.

Here is an example that turns PHP error\_logging on and logs them to a specific file. If WP\_DEBUG is defined to true, the errors will also be saved to this file. Just place this above any *require\_once* or *include* commands.

```php
@ini_set( 'log_errors', 'On' );
@ini_set( 'display_errors', 'Off' );
@ini_set( 'error_log', '/home/example.com/logs/php_error.log' );
/* That's all, stop editing! Happy blogging. */
```

Another example of logging errors, as suggested by Mike Little on the [wp-hackers email list](http://lists.automattic.com/pipermail/wp-hackers/2010-September/034830.html):

```php
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

A refined version from Mike Little on the [Manchester WordPress User Group](http://groups.google.com/group/manchester-wordpress-user-group/msg/dcab0836cabc7f76):

```php
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

Confusing the issue is that WordPress has three (3) constants that look like they could do the same thing. First off, remember that if WP\_DEBUG is false, it and the other two WordPress DEBUG constants do not do anything. The PHP directives, whatever they are, will prevail. Except for ‘error\_reporting’, WordPress will set this to 4983 if WP\_DEBUG is defined as false. Second, even if WP\_DEBUG is true, the other constants only do something if they too are set to true. If they are set to false, the PHP directives remain unchanged. For example, if your `php.ini` file has the directive (‘display\_errors’ = ‘On’); but you have the statement define( ‘WP\_DEBUG\_DISPLAY’, false ); in your `wp-config.php` file, errors will still be displayed on screen even though you tried to prevent it by setting WP\_DEBUG\_DISPLAY to false because that is the PHP configured behavior. This is why it’s very important to set the PHP directives to what you need in case any of the related WP constants are set to false. To be safe, explicitly set/define both types. More detailed descriptions of the WP constants is available at [Debugging in WordPress](https://codex.wordpress.org/Debugging_in_WordPress).

For your public, production WordPress installation, you might consider placing the following in your `wp-config.php` file, even though it may be partly redundant:

```php
@ini_set( 'log_errors', 'On' );
@ini_set( 'display_errors', 'Off' );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false );   // 5.2 and later
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
```

The default debug log file is` /wp-content/debug.log`. Placing error logs in publicly accessible locations is a security risk. Ideally, your log files should be placed above you site’s public root directory. If you can’t do this, at the very least, set the log file permissions to 600 and add this entry to the `.htaccess` file in the root directory of your WordPress installation:

```php
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

```php
define( 'WP_MEMORY_LIMIT', '64M' );
```

Increase PHP Memory to 96MB

```php
define( 'WP_MEMORY_LIMIT', '96M' );
```

Administration tasks require may require memory than usual operation. When in the administration area, the memory can be increased or decreased from the WP\_MEMORY\_LIMIT by defining WP\_MAX\_MEMORY\_LIMIT. The default value for this is 256MB.

```php
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
```

Note: this has to be put before wp-settings.php inclusion.

### Cache

The **WP\_CACHE** setting, if true, includes the `wp-content/advanced-cache.php` script, when executing `wp-settings.php`.

```php
define( 'WP_CACHE', true );
```

### Custom User and Usermeta Tables

**CUSTOM\_USER\_TABLE** and **CUSTOM\_USER\_META\_TABLE** are used to designate that the user and usermeta tables normally utilized by WordPress are not used, instead these values/tables are used to store your user information.

```php
define( 'CUSTOM_USER_TABLE', $table_prefix.'my_users' );
define( 'CUSTOM_USER_META_TABLE', $table_prefix.'my_usermeta' );
```

Note: Even if ‘CUSTOM\_USER\_META\_TABLE’ is manually set, a usermeta table is still created for each database with the corresponding permissions for each instance. By default, the WordPress installer will add permissions for the first user (ID #1). You also need to manage permissions to each of the site via a plugin or custom function. If this isn’t setup you will experience permission errors and log-in issues.

CUSTOM\_USER\_TABLE is easiest to adopt during initial Setup your first instance of WordPress. The define statements of the `wp-config.php` on the first instance point to where `wp_users` data will be stored by default. After the first site setup, copying the working `wp-config.php` to your next instance will only require a change the `$table_prefix` variable. Do not use an e-mail address that is already in use by your original install. Once you have finished the setup process log in with the auto generated admin account and password. Next, promote your normal account to the administrator level and Log out of admin. Log back in as yourself, delete the admin account and promote the other user accounts as is needed.

### Language and Language Directory

WordPress [Version 4.0](https://codex.wordpress.org/Version_4.0) allows you to change the language in your WordPress [Administration Screens](/support/article/administration-screens/). To change the language in the admin settings screen. Go to [Settings](/support/article/administration-screens/#settings-configuration-settings) &gt; [General](/support/article/settings-general-screen/) and select Site Language.

#### WordPress v3.9.6 and below

**WPLANG** defines the name of the language translation (.mo) file. **WP\_LANG\_DIR** defines what directory the WPLANG .mo file resides. If WP\_LANG\_DIR is not defined WordPress looks first to wp-content/languages and then `wp-includes/languages` for the .mo defined by WPLANG file.

```php
define( 'WPLANG', 'de_DE' );
define( 'WP_LANG_DIR', dirname(__FILE__) . 'wordpress/languages' );
```

To find out the WPLANG language code, please [refer here](https://make.wordpress.org/polyglots/teams/). The code in WP Local column is what you need.

### Save queries for analysis

The **SAVEQUERIES** definition saves the database queries to an array and that array can be displayed to help analyze those queries. The information saves each query, what function called it, and how long that query took to execute. **Note:** This will have a performance impact on your site, so make sure to turn this off when you aren’t debugging.

First, add this to the `wp-config.php` file:

```php
define( 'SAVEQUERIES', true );
```

Then in the footer of your theme put this:

```php
if ( current_user_can( 'administrator' ) ) {
    global $wpdb;
    echo "";
    print_r( $wpdb->queries );
    echo "";
}
?>

```

Alternatively, consider using [Query Monitor](https://wordpress.org/plugins/query-monitor/)

### Override of default file permissions

The **FS\_CHMOD\_DIR** and **FS\_CHMOD\_FILE** define statements allow override of default file permissions. These two variables were developed in response to the problem of the core update function failing with hosts running under [suexec](https://en.wikipedia.org/wiki/SuEXEC). If a host uses restrictive file permissions (e.g. 400) for all user files, and refuses to access files which have group or world permissions set, these definitions could solve the problem.

```php
define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );
```

Example to provide setgid:

```php
define( 'FS_CHMOD_DIR', ( 02755 & ~umask() ) );
```

Note: ‘**0755′** and ‘**02755**‘ are octal values. Octal values must be prefixed with a 0 and are not delineated with single quotes (‘). See Also: [Changing File Permissions](https://codex.wordpress.org/Changing_File_Permissions)

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

```php
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

```php
pecl install ssh2
```

After installing the pecl ssh2 extension you will need to modify your PHP configuration to automatically load this extension.

pecl is provided by the pear package in most linux distributions. To install pecl in Redhat/Fedora/CentOS:

```php
yum -y install php-pear
```

To install pecl in Debian/Ubuntu:

```php
apt-get install php-pear
```

It is recommended to use a private key that is not pass-phrase protected. There have been numerous reports that pass phrase protected private keys do not work properly. If you decide to try a pass phrase protected private key you will need to enter the pass phrase for the private key as FTP\_PASS, or entering it in the “Password” field in the presented credential field when installing updates.

### Alternative Cron

There might be reason to use an alternative Cron with WP. Most commonly this is done if scheduled posts are not getting published as predicted. This alternative method uses a redirection approach. The users’ browser get a redirect when the cron needs to run, so that they come back to the site immediately while cron continues to run in the connection they just dropped. This method has certain risks, since it depends on a non-native WordPress service.

```php
define( 'ALTERNATE_WP_CRON', true );
```

### Disable Cron and Cron Timeout

Disable cron entirely by setting DISABLE\_WP\_CRON to true.

```php
define( 'DISABLE_WP_CRON', true );
```

Make sure a cron process cannot run more than once every WP\_CRON\_LOCK\_TIMEOUT seconds.

```php
define( 'WP_CRON_LOCK_TIMEOUT', 60 );
```

### Additional Defined Constants

Here are additional constants that can be defined. These probably shouldn’t be set unless other methodologies have been attempted first. The Cookie definitions can be particularly useful if you have an unusual domain setup.

```php
define( 'COOKIEPATH', preg_replace( '|https?://[^/]+|i', '', get_option( 'home' ) . '/' ) );
define( 'SITECOOKIEPATH', preg_replace( '|https?://[^/]+|i', '', get_option( 'siteurl' ) . '/' ) );
define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . 'wp-admin' );
define( 'PLUGINS_COOKIE_PATH', preg_replace( '|https?://[^/]+|i', '', WP_PLUGIN_URL ) );
define( 'TEMPLATEPATH', get_template_directory() );
define( 'STYLESHEETPATH', get_stylesheet_directory() );
```

### Empty Trash

This constant controls the number of days before WordPress permanently deletes posts, pages, attachments, and comments, from the trash bin. The default is 30 days:

```php
define( 'EMPTY_TRASH_DAYS', 30 ); // 30 days
```

To disable trash set the number of days to zero.

```php
define( 'EMPTY_TRASH_DAYS', 0 ); // Zero days
```

**Note:** WordPress will not ask for confirmation when someone clicks on “Delete Permanently” using this setting.

### Automatic Database Optimizing

There is automatic database repair support, which you can enable by adding the following define to your `wp-config.php` file.

Note: This should only be enabled if needed and disabled once the issue is solved. When enabled, a user does not need to be logged in to access the functionality, since its main intent is to repair a corrupted database and users can often not login when the database is corrupt.

```php
 define( 'WP_ALLOW_REPAIR', true );
```

The script can be found at `{$your_site}/wp-admin/maint/repair.php`.

### DO\_NOT\_UPGRADE\_GLOBAL\_TABLES

A **DO\_NOT\_UPGRADE\_GLOBAL\_TABLES** define prevents [dbDelta()](#reference/functions/dbdelta) and the upgrade functions from doing expensive queries against global tables.

Sites that have large global tables (particularly users and usermeta), as well as sites that share user tables with bbPress and other WordPress installs, can prevent the upgrade from changing those tables during upgrade by defining **DO\_NOT\_UPGRADE\_GLOBAL\_TABLES** to true. Since an ALTER, or an unbounded DELETE or UPDATE, can take a long time to complete, large sites usually want to avoid these being run as part of the upgrade so they can handle it themselves. Further, if installations are sharing user tables between multiple bbPress and WordPress installs you may to want one site to be the upgrade master.

```php
define( 'DO_NOT_UPGRADE_GLOBAL_TABLES', true );
```

### View All Defined Constants

PHP has a function that returns an array of all the currently defined constants with their values.

```php
 print_r( @get_defined_constants() );
```

### Disable the Plugin and Theme File Editor

Occasionally you may wish to disable the plugin or theme file editor to prevent overzealous users from being able to edit sensitive files and potentially crash the site. Disabling these also provides an additional layer of security if a hacker gains access to a well-privileged user account.

```php
define( 'DISALLOW_FILE_EDIT', true );
```

**Note**: The functionality of some plugins may be affected by the use of `current_user_can('edit_plugins')` in their code. Plugin authors should avoid checking for this capability, or at least check if this constant is set and display an appropriate error message. Be aware that if a plugin is not working this may be the cause.

### Disable Plugin and Theme Update and Installation

This will block users being able to use the plugin and theme installation/update functionality from the WordPress admin area. Setting this constant also disables the Plugin and Theme File editor (i.e. you don’t need to set DISALLOW\_FILE\_MODS and DISALLOW\_FILE\_EDIT, as on its own DISALLOW\_FILE\_MODS will have the same effect).

```php
define( 'DISALLOW_FILE_MODS', true );
```

### Require SSL for Admin and Logins

**Note:** WordPress [Version 4.0](https://codex.wordpress.org/Version_4.0) deprecated FORCE\_SSL\_LOGIN. Please use FORCE\_SSL\_ADMIN.

FORCE\_SSL\_ADMIN is for when you want to secure logins and the admin area so that both passwords and cookies are never sent in the clear. See also [Administration\_Over\_SSL](/support/article/administration-over-ssl/) for more details.

```php
define( 'FORCE_SSL_ADMIN', true );
```

### Block External URL Requests

Block external URL requests by defining WP\_HTTP\_BLOCK\_EXTERNAL as true and this will only allow localhost and your blog to make requests. The constant WP\_ACCESSIBLE\_HOSTS will allow additional hosts to go through for requests. The format of the WP\_ACCESSIBLE\_HOSTS constant is a comma separated list of hostnames to allow, wildcard domains are supported, eg \*.wordpress.org will allow for all subdomains of wordpress.org to be contacted.

```php
define( 'WP_HTTP_BLOCK_EXTERNAL', true );
define( 'WP_ACCESSIBLE_HOSTS', 'api.wordpress.org,*.github.com' );
```

### Disable WordPress Auto Updates

There might be reason for a site to not auto-update, such as customizations or host supplied updates. It can also be done before a major release to allow time for testing on a development or staging environment before allowing the update on a production site.

```php
 define( 'AUTOMATIC_UPDATER_DISABLED', true );
```

### Disable WordPress Core Updates

The easiest way to manipulate core updates is with the WP\_AUTO\_UPDATE\_CORE constant:

```php
 # Disable all core updates:
 define( 'WP_AUTO_UPDATE_CORE', false );
 # Enable all core updates, including minor and major:
 define( 'WP_AUTO_UPDATE_CORE', true );
 # Enable core updates for minor releases (default):
 define( 'WP_AUTO_UPDATE_CORE', 'minor' );
```

Reference: [Disabling Auto Updates in WordPress 3.7](https://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7/)

### Cleanup Image Edits

By default, WordPress creates a new set of images every time you edit an image and when you restore the original, it leaves all the edits on the server. Defining IMAGE\_EDIT\_OVERWRITE as true changes this behaviour. Only one set of image edits are ever created and when you restore the original, the edits are removed from the server.

```php
 define( 'IMAGE_EDIT_OVERWRITE', true );
```

## Double Check Before Saving

***Be sure to check for leading and/or trailing spaces around any of the above values you entered, and DON’T delete the single quotes!***

Before you save the file, be sure to **double-check** that you have not accidentally deleted any of the single quotes around the parameter values. Be sure there is nothing after the closing PHP tag in the file. The last thing in the file should be **?&gt;** and nothing else. No spaces.

To save the file, choose **File &gt; Save As &gt; wp-config.php** and save the file in the root of your WordPress install. Upload the file to your web server and you’re ready to install WordPress!