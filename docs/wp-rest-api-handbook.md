Table of Contents:

- [REST API Handbook](#rest-api)
- [Key Concepts](#rest-api/key-concepts)
- [Frequently Asked Questions](#rest-api/frequently-asked-questions)
- [Using the REST API](#rest-api/using-the-rest-api)
- [Authentication](#rest-api/using-the-rest-api/authentication)
- [Pagination](#rest-api/using-the-rest-api/pagination)
- [Discovery](#rest-api/using-the-rest-api/discovery)
- [Linking and Embedding](#rest-api/using-the-rest-api/linking-and-embedding)
- [Global Parameters](#rest-api/using-the-rest-api/global-parameters)
- [Backbone JavaScript Client](#rest-api/using-the-rest-api/backbone-javascript-client)
- [Client Libraries](#rest-api/using-the-rest-api/client-libraries)
- [Extending the REST API](#rest-api/extending-the-rest-api)
- [Routes and Endpoints](#rest-api/extending-the-rest-api/routes-and-endpoints)
- [Controller Classes](#rest-api/extending-the-rest-api/controller-classes)
- [Schema](#rest-api/extending-the-rest-api/schema)
- [Adding REST API Support For Custom Content Types](#rest-api/extending-the-rest-api/adding-rest-api-support-for-custom-content-types)
- [Modifying Responses](#rest-api/extending-the-rest-api/modifying-responses)
- [Adding Custom Endpoints](#rest-api/extending-the-rest-api/adding-custom-endpoints)
- [Requests](#rest-api/requests)
- [Reference](#rest-api/reference)
- [Rendered Blocks](#rest-api/reference/rendered-blocks)
- [Search Results](#rest-api/reference/search-results)
- [Themes](#rest-api/reference/themes)
- [Block Revisions](#rest-api/reference/block-revisions)
- [Editor Blocks](#rest-api/reference/blocks)
- [Block Directory Items](#rest-api/reference/block-directory-items)
- [Block Types](#rest-api/reference/block-types)
- [Plugins](#rest-api/reference/plugins)
- [Application Passwords](#rest-api/reference/application-passwords)
- [Block Pattern Categories](#rest-api/reference/block-pattern-categories)
- [Block Patterns](#rest-api/reference/block-patterns)
- [Menu Locations](#rest-api/reference/menu-locations)
- [Nav_Menu_Item Revisions](#rest-api/reference/nav_menu_item-revisions)
- [Nav_Menu_Items](#rest-api/reference/nav_menu_items)
- [Nav_Menus](#rest-api/reference/nav_menus)
- [Pattern Directory Items](#rest-api/reference/pattern-directory-items)
- [Sidebars](#rest-api/reference/sidebars)
- [Widget Types](#rest-api/reference/widget-types)
- [Widgets](#rest-api/reference/widgets)
- [Wp Site Health Tests](#rest-api/reference/wp-site-health-tests)
- [Global_Styles](#rest-api/reference/wp_global_styles)
- [Navigation Revisions](#rest-api/reference/wp_navigation-revisions)
- [Navigations](#rest-api/reference/wp_navigations)
- [Template Revisions](#rest-api/reference/wp_template-revisions)
- [Template_Part Revisions](#rest-api/reference/wp_template_part-revisions)
- [Template_Parts](#rest-api/reference/wp_template_parts)
- [Templates](#rest-api/reference/wp_templates)
- [Posts](#rest-api/reference/posts)
- [Post Revisions](#rest-api/reference/post-revisions)
- [Pages](#rest-api/reference/pages)
- [Site Settings](#rest-api/reference/settings)
- [Users](#rest-api/reference/users)
- [Media](#rest-api/reference/media)
- [Types](#rest-api/reference/post-types)
- [Categories](#rest-api/reference/categories)
- [Statuses](#rest-api/reference/post-statuses)
- [Comments](#rest-api/reference/comments)
- [Tags](#rest-api/reference/tags)
- [Taxonomies](#rest-api/reference/taxonomies)
- [Page Revisions](#rest-api/reference/page-revisions)
- [Glossary](#rest-api/glossary)
- [Changelog](#rest-api/changelog)

# REST API Handbook <a name="rest-api" />

Source: https://developer.wordpress.org/rest-api/

The WordPress REST API provides an interface for applications to interact with your WordPress site by sending and receiving data as [JSON](https://en.wikipedia.org/wiki/JSON) (JavaScript Object Notation) objects. It is the foundation of the [WordPress Block Editor](#block-editor), and can likewise enable your theme, plugin or custom application to present new, powerful interfaces for managing and publishing your site content. Using the WordPress REST API you can create a plugin to provide an entirely new admin experience for WordPress, build a brand new interactive front-end experience, or bring your WordPress content into completely separate applications. The REST API is a developer-oriented feature of WordPress. It provides data access to the content of your site, and implements the same authentication restrictions — content that is public on your site is generally publicly accessible via the REST API, while private content, password-protected content, internal users, custom post types, and metadata is only available with authentication or if you specifically set it to be so. If you are not a developer, the most important thing to understand about the API is that it enables the block editor and modern plugin interfaces without compromising the security or privacy of your site.

## What Is A REST API?

An API is an Application Programming Interface. REST, standing for “REpresentational State Transfer,” is a set of concepts for modeling and accessing your application’s data as interrelated objects and collections. The WordPress REST API provides REST endpoints (URLs) representing the posts, pages, taxonomies, and other built-in WordPress data types. Your application can send and receive JSON data to these endpoints to query, modify and create content on your site. JSON is an open standard data format that is lightweight and human-readable, and looks like Objects do in JavaScript. When you request content from or send content to the API, the response will also be returned in JSON. Because JSON is widely supported in many programming languages, developers can build WordPress applications in client-side JavaScript (like the block editor), as mobile apps, or as desktop or command line tools. 

The REST API is just one of many APIs provided by WordPress. You can find the [documentation on these additional APIs here](https://codex.wordpress.org/WordPress_APIs).

## Using the WordPress REST API

WordPress already provides a rich set of tools and interfaces for building sites, and you should not feel pressured to use the REST API if your site is already working the way you expect. You do not need to use the REST API to build a WordPress theme or plugin. However, if you do wish to write your theme, plugin, or external application as a client-side JavaScript application, or a standalone program in a language other than PHP, then your application will need a structured way to access content within your WordPress site. Any programming language which can make HTTP requests and interpret JSON can use the REST API to interact with WordPress, from PHP, Node.js, Go, and Java, to Swift, Kotlin, and beyond. Even if you’re using vanilla JavaScript or jQuery within a theme or plugin the REST API provides a more predictable and structured way to interact with your site’s content than [`admin-ajax`](https://codex.wordpress.org/AJAX_in_Plugins), enabling you to spend less time accessing the data you need and more time creating better user experiences. If you want a structured, extensible, and simple way to get data in and out of WordPress, you probably want to use the REST API. For all of its simplicity the REST API can feel quite complex at first, so in this handbook we will attempt to break it down into smaller components to explain each part of the full puzzle. ## Next Steps

Familiarize yourself with the [key technical concepts](#rest-api/key-concepts) behind how the REST API functions. Learn more about how to interact with API resources and query for specific data in the [Using the REST API](#rest-api/using-the-rest-api) section. Once you’re comfortable with the default workings of the default routes and methods, discover how to add new data to the API or enhance and manipulate existing response objects in the [Extending the REST API](#rest-api/extending-the-rest-api) section. For a comprehensive overview of the resources and routes available by default, review the [API reference](#rest-api/reference).

---

# Key Concepts <a name="rest-api/key-concepts" />

Source: https://developer.wordpress.org/rest-api/key-concepts/

In this page we’ll break down some of the key concepts and terms associated with the REST API: **Routes &amp; Endpoints,** **Requests**, **Responses**, **Schema**, and **Controller Classes**. Each of these concepts play a crucial role in understanding, using, and extending the WordPress REST API, and each is explored in greater depth within this handbook.

## Routes &amp; Endpoints

In the context of the WordPress REST API a **route** is a URI which can be mapped to different HTTP methods. The mapping of an individual HTTP method to a route is known as an **endpoint**.

As an example, if we make a `GET` request to the URI `http://oursite.com/wp-json/` we are returned a JSON response showing what routes are available, and what endpoints are available within each route.

`/wp-json/` is a route, and when that route receives a `GET` request then that request is handled by the endpoint which displays what is known as the index for the WordPress REST API.

The route `wp-json/wp/v2/posts` by contrast has a `GET` endpoint which returns a list of posts, but also a `POST` endpoint which accepts authenticated requests to create new posts.

We will learn how to register our own routes and endpoints in the following sections.

If you are using [non-pretty permalinks](https://wordpress.org/support/article/using-permalinks/), you should pass the REST API route as a query string parameter. The route `http://oursite.com/wp-json/` in the example above would hence be `http://oursite.com/?rest_route=/`.

If you get a `404` error when trying to access `http://oursite.com/wp-json/`, consider enabling pretty permalinks or try using the `rest_route` parameter instead.

## Requests

A REST API request is represented within WordPress by an instance of the `WP_REST_Request` class, which is used to store and retrieve information for the current request. A `WP_REST_Request` object is automatically generated when you make an HTTP request to a registered API route.

The data specified in this object (derived from the route URI or the JSON payload sent as a part of the request) determines what response you will get back out of the API.

Requests are usually submitted remotely via HTTP but may also be made internally from PHP within WordPress plugin or theme code. There are a lot of neat things you can do using this class, detailed further elsewhere in the handbook.

## Responses

Responses are the data you get back from the API. The `WP_REST_Response` class provides a way to interact with the response data returned by endpoints. Responses return the requested data, or can also be used to return errors if something goes wrong while fulfilling the request.

## Schema

Each endpoint requires a particular structure of input data, and returns data using a defined and predictable structure. Those data structures are defined in the API Schema.

The schema structures API data and provides a comprehensive list of all of the properties the API can return and which input parameters it can accept.

Well-defined schema also provides one layer of security within the API, as it enables us to validate and sanitize the requests being made to the API. The [Schema section](#rest-api/extending-the-rest-api/schema) explores this large topic further.

## Controller Classes

Controller classes unify and coordinate all these various moving parts within a REST API response cycle. With a controller class you can manage the registration of routes &amp; endpoints, handle requests, utilize schema, and generate API responses.

A single class usually contains all of the logic for a given route, and a given route usually represents a specific type of data object within your WordPress site (like a custom post type or taxonomy).

---

# Frequently Asked Questions <a name="rest-api/frequently-asked-questions" />

Source: https://developer.wordpress.org/rest-api/frequently-asked-questions/

This page provides solutions to some common questions and problems that may arise while using the API. If your question is not explained here it may have been answered in the [WordPress support forums](https://wordpress.org/support/topic-tag/rest-api).

## Can I disable the REST API?

You should not disable the REST API; doing so will break WordPress Admin functionality that depends on the API being active. However, you may use a filter to require that API consumers be authenticated, which effectively prevents anonymous external access. See below for more information.

## Require Authentication for All Requests

You can require authentication for all REST API requests by adding an `is_user_logged_in` check to the [`rest_authentication_errors`](#reference/hooks/rest_authentication_errors) filter.

Note: The incoming callback parameter can be either `null`, a `WP_Error`, or a boolean. The type of the parameter indicates the state of authentication:

- `null`: no authentication check has yet been performed, and the hook callback may apply custom authentication logic.
- boolean: indicates a previous authentication method check was performed. Boolean `true` indicates the request was successfully authenticated, and boolean `false` indicates authentication failed.
- `WP_Error`: Some kind of error was encountered.

```php
add_filter( 'rest_authentication_errors', function( $result ) {
    // If a previous authentication check was applied,
    // pass that result along without modification.
    if ( true === $result || is_wp_error( $result ) ) {
        return $result;
    }

    // No authentication has been performed yet.
    // Return an error if user is not logged in.
    if ( ! is_user_logged_in() ) {
        return new WP_Error(
            'rest_not_logged_in',
            __( 'You are not currently logged in.' ),
            array( 'status' => 401 )
        );
    }

    // Our custom authentication check should have no effect
    // on logged-in requests
    return $result;
});

```

## Can I make API requests from PHP within a plugin?

Yes, you can! Use [rest\_do\_request](#reference/functions/rest_do_request) to make API requests internally within other WordPress code:

```php
$request = new WP_REST_Request( 'GET', '/wp/v2/posts' );
// Set one or more request query parameters
$request->set_param( 'per_page', 20 );
$response = rest_do_request( $request );

```

## How do I use the \_embed parameter on internal requests?

Setting the `_embed` param on the request object won’t work.

```php
$request = new WP_REST_Request( 'GET', '/wp/v2/posts' );
$request->set_param( '_embed', 1 );
$response = rest_do_request( $request );

```

Instead, manually call the [`WP_REST_Server::response_to_data`](#reference/classes/wp_rest_server) function.

```php
$request = new WP_REST_Request( 'GET', '/wp/v2/posts' );
$response = rest_do_request( $request );
$data = rest_get_server()->response_to_data( $response, true );
var_dump( $data['_embedded'] );

```

## What happened to the `?filter=` query parameter?

When the REST API was merged into WordPress core the `?filter` query parameter was removed to prevent future compatibility and maintenance issues. The ability to pass arbitrary [WP\_Query](#reference/classes/wp_query) arguments to the API using a `?filter` query parameter was necessary at the genesis of the REST API project, but most API response filtering functionality has been superseded by more robust query parameters like `?categories=`, `?slug=` and `?per_page=`.

First-party query parameters should be used whenever possible. However, the [rest-filter](https://github.com/wp-api/rest-filter) plugin restores the ability to pass arbitrary `?filter` values in API request if needed.

## Query parameters are not working

If you find that query parameters such as `?page=2` or `?_embed` are not having any effect, your server may not be properly configured to detect them. If you are using Nginx to serve your website, look for a `try_files` line in your site configuration. If it looks like this:

```
try_files $uri $uri/ /index.php$args;

```

change it to this:

```
try_files $uri $uri/ /index.php$is_args$args;

```

Adding `$is_args` (which will print a ? character if query arguments are found) will allow WordPress to properly receive and interpret the query parameters.

## Why is Authentication not working?

If you’re finding that you are sending Authentication headers but the request is not being accepted, and you are using a CGI environment, your webserver may be stripping the headers. Please try adding the appropriate configuration below to remedy this.

### Apache

Add the following to a configuration file or .htaccess:

```
<IfModule mod_setenvif>
  SetEnvIf Authorization "(.*)" HTTP_AUTHORIZATION=$1
</IfModule>

```

### Nginx

Add the following to your server configurations fastcgi section:

```
fastcgi_pass_header Authorization;

```

## Why is the REST API not verifying the incoming Origin header? Does this expose my site to CSRF attacks?

Cross-Origin Resource Sharing (CORS) is a mechanism which allows a website to control which Origins (originating external sites) are allowed to access your site’s data. CORS prevents against a particular type of attack known as Cross-Site Request Forgery, or CSRF. However, WordPress has an existing CSRF protection mechanism which uses [nonces](#plugins/security/nonces). Tightening CORS restrictions would prevent some authentication methods, so the WordPress REST API uses nonces for CSRF protection instead of CORS.

Because the WordPress REST API does not verify the Origin header of incoming requests, public REST API endpoints may therefore be accessed from any site.

This is an [intentional design decision](https://core.trac.wordpress.org/changeset/40600), but if you wish to prevent your site from being accessed from unknown origins you may unhook the default [`rest_send_cors_headers` function](#reference/functions/rest_send_cors_headers) from the [`rest_pre_serve_request` filter hook](#reference/hooks/rest_pre_serve_request), then hook in your own function to that same filter to specify stricter CORS headers.

---

# Using the REST API <a name="rest-api/using-the-rest-api" />

Source: https://developer.wordpress.org/rest-api/using-the-rest-api/

These articles explore the basic structure of the WordPress REST API. [Global Parameters](#rest-api/using-the-rest-api/global-parameters): learn about the global REST API query parameters that apply to every endpoint [Pagination](#rest-api/using-the-rest-api/pagination): work with large collections of resources &amp; control how many records you receive from the REST API [Linking &amp; Embedding](#rest-api/using-the-rest-api/linking-and-embedding): understand how to read and modify connections between different objects, and embed related resources such as author and media data in the REST API’s responses [Discovery](#rest-api/using-the-rest-api/discovery): determine what REST API resources a site supports, and where they are located [Authentication](#rest-api/using-the-rest-api/authentication): authorize your REST API requests so that you can create, update and delete your data [Frequently Asked Questions](#rest-api/frequently-asked-questions): see some of the most frequent inquiries about the REST API and learn how to solve common problems

## Resources &amp; Utilities

[Backbone.js Client](#rest-api/using-the-rest-api/backbone-javascript-client): interact with the API from within WP-Admin using Backbone models &amp; collections [Client Libraries](#rest-api/using-the-rest-api/client-libraries): utilities in a variety of programming languages that simplify interacting with the API

---

# Authentication <a name="rest-api/using-the-rest-api/authentication" />

Source: https://developer.wordpress.org/rest-api/using-the-rest-api/authentication/

## Cookie Authentication

Cookie authentication is the standard authentication method included with WordPress. When you log in to your dashboard, this sets up the cookies correctly for you, so plugin and theme developers need only to have a logged-in user.

However, the REST API includes a technique called [nonces](#apis/security/nonces) to avoid [CSRF](http://en.wikipedia.org/wiki/Cross-site_request_forgery) issues. This prevents other sites from forcing you to perform actions without explicitly intending to do so. This requires slightly special handling for the API.

For developers using the built-in Javascript API, this is handled automatically for you. This is the recommended way to use the API for plugins and themes. Custom data models can extend `wp.api.models.Base` to ensure this is sent correctly for any custom requests.

For developers making manual Ajax requests, the nonce will need to be passed with each request. The API uses nonces with the action set to `wp_rest`. These can then be passed to the API via the `_wpnonce` data parameter (either POST data or in the query for GET requests), or via the `X-WP-Nonce` header. If no nonce is provided the API will set the current user to 0, turning the request into an **unauthenticated request**, even if you’re logged into WordPress.

Note: Until recently, most software had spotty support for `DELETE` requests. For instance, PHP doesn’t transform the request body of a `DELETE` request into a super global. As such, supplying the nonce as a header is the most reliable approach.

It is important to keep in mind that this authentication method relies on WordPress cookies. As a result this method is only applicable when the REST API is used inside of WordPress and the current user is logged in. In addition, the current user must have the appropriate capability to perform the action being performed.

As an example, this is how the built-in Javascript client creates the nonce:

```php
<?php
wp_localize_script( 'wp-api', 'wpApiSettings', array(
    'root' => esc_url_raw( rest_url() ),
    'nonce' => wp_create_nonce( 'wp_rest' )
) );

```

This is then used in the base model:

```js
options.beforeSend = function(xhr) {
    xhr.setRequestHeader('X-WP-Nonce', wpApiSettings.nonce);

    if (beforeSend) {
        return beforeSend.apply(this, arguments);
    }
};

```

Here is an example of editing the title of a post, using jQuery AJAX:

```js
$.ajax( {
    url: wpApiSettings.root + 'wp/v2/posts/1',
    method: 'POST',
    beforeSend: function ( xhr ) {
        xhr.setRequestHeader( 'X-WP-Nonce', wpApiSettings.nonce );
    },
    data:{
        'title' : 'Hello Moon'
    }
} ).done( function ( response ) {
    console.log( response );
} );

```

Note that you do not need to verify that the nonce is valid inside your custom end point. This is automatically done for you in `rest_cookie_check_errors()`.

## Basic Authentication with Application Passwords

As of 5.6, WordPress has shipped with [Application Passwords](https://make.wordpress.org/core/2020/11/05/application-passwords-integration-guide/), which can be generated from an Edit User page (wp-admin -&gt; Users -&gt; Edit User).

The credentials can be passed along to REST API requests served over https:// using [Basic Auth](https://ec.haxx.se/http/http-auth) / [RFC 7617](https://tools.ietf.org/html/rfc7617) — [here’s the documentation for how to use it with cURL](https://ec.haxx.se/http/http-auth).

For a simple command-line script example, just swap out USERNAME, PASSWORD, and HOSTNAME in this with their respective values:

```
curl --user "USERNAME:PASSWORD" https://HOSTNAME/wp-json/wp/v2/users?context=edit

```

## Authentication Plugins

Plugins may be added to support alternative modes of authentication that will work from remote applications. Some example plugins are [OAuth 1.0a Server](https://wordpress.org/plugins/rest-api-oauth1/) and [JSON Web Tokens](https://wordpress.org/plugins/jwt-authentication-for-wp-rest-api/).

There’s also a [Basic Authentication](https://github.com/WP-API/Basic-Auth) plugin.

Note that this plugin requires sending your username and password with every request, and should only be used for development and testing i.e. not in a production environment. Using Application Passwords (see above) is preferred.

---

# Pagination <a name="rest-api/using-the-rest-api/pagination" />

Source: https://developer.wordpress.org/rest-api/using-the-rest-api/pagination/

WordPress sites can have a lot of content—far more than you’d want to pull down in a single request. The API endpoints default to providing a limited number of items per request, the same way that a WordPress site will default to 10 posts per page in archive views.

## Pagination Parameters

Any API response which contains multiple resources supports several common query parameters to handle paging through the response data:

- `?page=`: specify the page of results to return. 
    - For example, `/wp/v2/posts?page=2` is the second page of posts results
    - By retrieving `/wp/v2/posts`, then `/wp/v2/posts?page=2`, and so on, you may access every available post through the API, one page at a time.
- `?per_page=`: specify the number of records to return in one request, specified as an integer from 1 to 100. 
    - For example, `/wp/v2/posts?per_page=1` will return only the first post in the collection
- `?offset=`: specify an arbitrary offset at which to start retrieving posts 
    - For example, `/wp/v2/posts?offset=6` will use the default number of posts per page, but start at the 6th post in the collection
    - `?per_page=5&page=4` is equivalent to `?per_page=5&offset=15`

Large queries can hurt site performance, so `per_page` is **capped at 100 records**. If you wish to retrieve more than 100 records, for example to build a client-side list of all available categories, you may make multiple API requests and combine the results within your application.

To determine how many pages of data are available, the API returns two header fields with every paginated response:

- `X-WP-Total`: the total number of records in the collection
- `X-WP-TotalPages`: the total number of pages encompassing all available records

By inspecting these header fields you can determine how much more data is available within the API.

## Ordering Results

In addition to the pagination query parameters detailed above, several other parameters control the order of the returned results:

- `?order=`: control whether results are returned in ascending or descending order 
    - Valid values are `?order=asc` (for ascending order) and `?order=desc` (for descending order).
    - All native collections are returned in descending order by default.
- `?orderby=`: control the field by which the collection is sorted 
    - The valid values for `orderby` will vary depending on the queried resource; for the `/wp/v2/posts` collection, the valid values are “date,” “relevance,” “id,” “include,” “title,” and “slug”
    - See the [REST API reference](#rest-api/reference) for the values supported by other collections
    - All collections with dated resources default to `orderby=date`

---

# Discovery <a name="rest-api/using-the-rest-api/discovery" />

Source: https://developer.wordpress.org/rest-api/using-the-rest-api/discovery/

When your client talks to an unknown site, you’ll need to discover what the site is capable of and how the site is configured. There are a couple of steps for this, depending on what you need to discover.

## Discovering the API

The first step of connecting to a site is finding out whether the site has the API enabled. Typically, you’ll be working with URLs from user input, so the site you’re accessing could be anything. The discovery step lets you verify the API is available, as well as indicating how to access it.

### Link Header

The preferred way to handle discovery is to send a HEAD request to the supplied address. The REST API automatically adds a Link header to all front-end pages that looks like the following:

```
Link: <http://example.com/wp-json/>; rel="https://api.w.org/"

```

This URL points to the root route (`/`) of the API, which is then used for further discovery steps.

For sites without “pretty permalinks” enabled, `/wp-json/` isn’t automatically handled by WordPress. This means that normal/default WordPress permalinks will be used instead. These headers look more like this:

```
Link: <http://example.com/?rest_route=/>; rel="https://api.w.org/"

```

Clients should keep this variation in mind and ensure that both routes can be handled seamlessly.

This auto-discovery can be applied to any URL served by a WordPress installation, so no pre-processing on user input needs to be added. Since this is a HEAD request, the request should be safe to send blindly to servers without worrying about causing side-effects.

### Element

For clients with a HTML parser, or running in the browser, the equivalent of the Link header is included in the `<head>` of front-end pages through a `<link>` element:

```
<link rel='https://api.w.org/' href='http://example.com/wp-json/' />

```

In-browser Javascript can access this via the DOM:

```js
// jQuery method
var $link = jQuery( 'link[rel="https://api.w.org/"]' );
var api_root = $link.attr( 'href' );

// Native method
var links = document.getElementsByTagName( 'link' );
var link = Array.prototype.filter.call( links, function ( item ) {
    return ( item.rel === 'https://api.w.org/' );
} );
var api_root = link[0].href;

```

For in-browser clients, or clients without access to HTTP headers, this may be a more usable way of discovering the API. This is similar to Atom/RSS feed discovery, so existing code for that purpose may also be automatically adapted instead.

### RSD (Really Simple Discovery)

For clients with support for XML-RPC discovery, the [RSD method](http://cyber.law.harvard.edu/blogs/gems/tech/rsd.html) may be more applicable. This is an XML-based discovery format typically used for XML-RPC. RSD has two steps. The first step is to find the RSD endpoint, supplied as a `<link>` element:

```
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://example.com/xmlrpc.php?rsd" />

```

The second step is to fetch the RSD document and parse the available endpoints. This involves using an XML parser on a document like the following:

```xml
<?xml version="1.0" encoding="utf-8"?>
<rsd version="1.0" xmlns="http://archipelago.phrasewise.com/rsd">
  <service>
    <engineName>WordPress</engineName>
    <engineLink>https://wordpress.org/</engineLink>
    <homePageLink>http://example.com/</homePageLink>
    <apis>
      <api name="WordPress" blogID="1" preferred="true" apiLink="http://example.com/xmlrpc.php" />
      <!-- ... -->
      <api name="WP-API" blogID="1" preferred="false" apiLink="http://example.com/wp-json/" />
    </apis>
  </service>
</rsd>

```

The REST API always has a `name` attribute with the value equal to `WP-API`.

RSD is the least-preferred method of autodiscovery for a couple of reasons. The first step of RSD-based discovery involves parsing the HTML to first find the RSD document itself, which is equivalent to the `<link>` Element autodiscovery. It then involves another step to parse the RSD document, which requires a full XML parser.

Where possible, we suggest avoiding RSD-based discovery due to the complexity, but existing XML-RPC clients may prefer to use this method if they already have an RSD parser enabled. For XML-RPC clients which wish to use the REST API as a progressive enhancement to the codebase, this avoids needing to support different forms of discovery.

## Authentication Discovery

Discovery is also available for authentication methods available via the API. The API root’s response is an object describing the API, which includes an `authentication` key:

```
{
    "name": "Example WordPress Site",
    "description": "YOLO",
    "routes": { ... },
    "authentication": {
        "oauth1": {
            "request": "http://example.com/oauth/request",
            "authorize": "http://example.com/oauth/authorize",
            "access": "http://example.com/oauth/access",
            "version": "0.1"
        }
    }
}

```

The `authentication` value is a map (associative array) of authentication method ID to authentication options. The options available here are specific to the authentication method itself. See the [authentication documentation](/rest-api/authentication/) for the options for specific authentication methods.

## Extension Discovery

Once you’ve discovered the API, the next step is check what the API supports. The index of the API exposes the `namespaces` item, which contains the extensions to the API that are supported.

For WordPress sites using versions 4.4 through 4.6, only the base API infrastructure is available, not the full API with endpoints. This also includes the oEmbed endpoints:

```
{
    "name": "Example WordPress Site",
    "namespaces": [
        "oembed/1.0/"
    ]
}

```

Sites with the full API available (i.e. with WordPress 4.7+ or the REST API plugin installed) will have the `wp/v2` item in `namespaces` as well:

```
{
    "name": "Example WordPress Site",
    "namespaces": [
        "wp/v2",
        "oembed/1.0/"
    ]
}

```

Before attempting to use any of the core endpoints, you should be sure to check that the API is supported by checking for `wp/v2` support. WordPress 4.4 enabled the API infrastructure for all sites, but did **not** include the core endpoints under `wp/v2`. Core endpoints were added in WordPress 4.7.

This same mechanism can be used for detecting support for any plugins that support the REST API. For example, take a plugin which registers the following route:

```php
<?php
register_rest_route( 'testplugin/v1', '/testroute', array( /* ... */ ) );

```

This would add the `testplugin/v1` namespace to the index:

```
{
    "name": "Example WordPress Site",
    "namespaces": [
        "wp/v2",
        "oembed/1.0/",
        "testplugin/v1"
    ]
}

```

## Resource Discovery

As of [WordPress 5.5](https://core.trac.wordpress.org/changeset/48273) the REST API also provides a discovery mechanism for identifying the REST API route equivalent of the current document. A link is added with a `rel` of `alternate` and a `type` of `application/json` that points to a REST API url. The link is added both as a [`Link` header](#link-header) and a [`<link>` element](#element).

For instance, in the `<head>` section of this page, the following `<link>` appears.

```html
<link rel="alternate" type="application/json" href="#wp-json/wp/v2/rest-api-handbook/23085">

```

Links are added for post, pages, and other custom post types, as well as terms and author pages. Links are not currently output for post archives or search results.

---

# Linking and Embedding <a name="rest-api/using-the-rest-api/linking-and-embedding" />

Source: https://developer.wordpress.org/rest-api/using-the-rest-api/linking-and-embedding/

The WP REST API incorporates hyperlinking throughout the API to allow discoverability and browsability, as well as embedding related resources together in one response. While the REST API does not completely conform to the entire [HAL standard](https://en.wikipedia.org/wiki/Hypertext_Application_Language), it implements the `._links` and `._embedded` properties from that standard as described below.

## Links

The `_links` property of the response object contains a map of links to other API resources, grouped by “relation.” The relation specifies how the linked resource relates to the primary resource. Examples include: – `author` – describing a relationship between a resource and its author – `wp:term` – describing the relationship between a post and its tags or categories The relation is either a – [standardized relation](http://www.iana.org/assignments/link-relations/link-relations.xhtml#link-relations-1)– a `URI relation` – like `https://api.w.org/term`– or a `Compact URI relation` – like `wp:term`Compact URI relations can be normalized to full URI relations to ensure full compatibility if required. This is similar to HTML `<link>` tags, or `<a rel="">` links. The links are an object containing a `href` property with an absolute URL to the resource, as well as other optional properties. These include content types, disambiguation information, and data on actions that can be taken with the link. For collection responses (those that return a list of objects rather than a top-level object), each item contains links, and the top-level response includes links via the `Link` header instead. 

If your client library does not allow accessing headers, you can use the [`_envelope`](#rest-api/global-parameters) parameter to include the headers as body data instead. 

### Example Response

A typical single post request (`/wp/v2/posts/42`): ```js
{
  "id": 42,
  "_links": {
    "collection": [
      {
        "href": "https://example.com/wp-json/wp/v2/posts"
      }
    ],
    "author": [
      {
        "href": "https://example.com/wp-json/wp/v2/users/1",
        "embeddable": true
      }
    ]
  }
}

```

## Embedding

Optionally, some linked resources may be included in the response to reduce the number of HTTP requests required. These resources are “embedded” into the main response. Embedding is triggered by setting the [`_embed` query parameter](#rest-api/using-the-rest-api/global-parameters) on the request. This will then include embedded resources under the `_embedded` key adjacent to the `_links` key. The layout of this object mirrors the `_links` object, but includes the embedded resource in place of the link properties. Only links with the `embeddable` flag set to `true` can be embedded, and `_embed` will cause all embeddable links to be embedded. Only relations containing embedded responses are included in `_embedded`, however relations with mixed embeddable and unembeddable links will contain dummy responses for the unembeddable links to ensure numeric indexes match those in `_links`. When embedding a collection response, for instance `/wp/v2/posts?author=1`, the embedded collection will have the default pagination limits applied. ### Example Response

```js
{
  "id": 42,
  "_links": {
    "collection": [
      {
        "href": "https://example.com/wp-json/wp/v2/posts"
      }
    ],
    "author": [
      {
        "href": "https://example.com/wp-json/wp/v2/users/1",
        "embeddable": true
      }
    ]
  },
  "_embedded": {
    "author": {
      "id": 1,
      "name": "admin",
      "description": "Site administrator"
    }
  }
}

```

---

# Global Parameters <a name="rest-api/using-the-rest-api/global-parameters" />

Source: https://developer.wordpress.org/rest-api/using-the-rest-api/global-parameters/

The API includes a number of global parameters (also called “meta-parameters”) which control how the API handles the request/response handling. These operate at a layer above the actual resources themselves, and are available on all resources.

## `_fields`

A REST resource like a Post contains a large quantity of data: basic information such as content, title, and author ID, but also [registered metadata and fields](#rest-api/extending-the-rest-api/modifying-responses), media information, and links to other resources. Your application may not need all of this information on every request. To instruct WordPress to return only a subset of the fields in a response, you may use the `_fields` query parameter. If for example you are building an archive view and only need the ID, title, permalink, author and excerpt for a collection of posts, you can restrict the response to only those properties with this fields query: ```
/wp/v2/posts?_fields=author,id,excerpt,title,link

```

You may alternatively provide that same list using query parameter array syntax instead of a comma-separated list: ```
/wp/v2/posts?_fields[]=author&_fields[]=id&_fields[]=excerpt&_fields[]=title&_fields[]=link

```

When `_fields` is provided then WordPress will skip unneeded fields when generating your response object, avoiding potentially expensive internal computation or queries for data you don’t need. This also means the JSON object returned from the REST API will be smaller, requiring less time to download and less time to parse on your client device. Carefully design your queries to pull in only the needed properties from each resource to make your application faster to use and more efficient to run. As of WordPress 5.3 the `_fields` parameter supports nested properties. This can be useful if you have registered many meta keys, permitting you to request the value for only one of the registered meta properties: ```
?_fields=meta.one-of-many-keys

```

Only the meta value with the key `one-of-many-keys` will be returned, and others will be excluded. You can also request specific deeply-nested properties within a complex meta object: ```
?_fields=meta.key_name.nested_prop.deeply_nested_prop,meta.key_name.other_nested_prop

```

## `_embed`

Most resources include links to related resources. For example, a post can link to the parent post, or to comments on the post. To reduce the number of HTTP requests required, clients may wish to fetch a resource as well as the linked resources. The `_embed` parameter indicates to the server that the response should include these embedded resources. Embed mode is enabled if the `_embed` parameter is passed in the query string (GET parameter). This parameter does not require a value (i.e. `?_embed` is valid), however can be passed “1” as a value if required by a client library. As of WordPress 5.4, the resources to embed can be limited by passing a list of link relation names to the `_embed` parameter. For example, `/wp/v2/posts?_embed=author,wp:term` will only embed the post’s author and the lists of terms associated with the post. Resources in embed mode will contain an additional `_embedded` key next to the `_links` key containing the linked resources. Only links with the `embeddable` parameter set to `true` will be embedded. In order to use `_embed` together with `_fields`, add `_embedded` as well as `_links` to the fields, for instance, `/wp-json/wp/v2/posts/_embed=author,wp:term&_fields=title,author,_links,_embedded`. For more about linking and embedding, see the [Linking and Embedding](#rest-api/linking-and-embedding) page. ## `_method` (or `X-HTTP-Method-Override` header)

Some servers and clients cannot correctly process some HTTP methods that the API makes use of. For example, all deletion requests on resources use the `DELETE` method, but some clients do not provide the ability to send this method. To ensure compatibility with these servers and clients, the API supports a method override. This can be passed either via a `_method` parameter or the `X-HTTP-Method-Override` header, with the value set to the HTTP method to use. 

Clients should only ever send a method override parameter or header with POST requests. Using the method override with GET requests may cause the request to be incorrectly cached. 

A `POST` to `/wp-json/wp/v2/posts/42?_method=DELETE` would be translated to a `DELETE` to the `wp/v2/posts/42` route. Similarly, the following POST request would become a DELETE: ```
POST /wp-json/wp/v2/posts/42 HTTP/1.1
Host: example.com
X-HTTP-Method-Override: DELETE

```

## `_envelope`

Similarly to `_method`, some servers, clients, and proxies do not support accessing the full response data. The API supports passing an `_envelope` parameter, which sends all response data in the body, including headers and status code. Envelope mode is enabled if the `_envelope` parameter is passed in the query string (GET parameter). This parameter does not require a value (i.e. `?_envelope` is valid), but can be passed “1” as a value if required by a client library. 

For future compatibility, other values should not be passed. 

Enveloped responses include a “fake” HTTP 200 response code with no additional headers (apart from Content-Type) that should ensure the response correctly passes through intermediaries. For example, given the following response to a `GET` to `wp/v2/users/me`: ```
HTTP/1.1 302 Found
Location: http://example.com/wp-json/wp/v2/users/42

{
  "id": 42,
  ...
}

```

The equivalent enveloped response (with a `GET` to `wp/v2/users/me?_envelope`) would be: ```
HTTP/1.1 200 OK

{
  "status": 302,
  "headers": {
    "Location": "http://example.com/wp-json/wp/v2/users/42"
  },
  "body": {
    "id": 42
  }
}

```

## `_jsonp`

The API natively supports [JSONP](https://en.wikipedia.org/wiki/JSONP) responses to allow cross-domain requests for legacy browsers and clients. This parameter takes a JavaScript callback function which will be prepended to the data. This URL can then be loaded via a `<script>` tag. The callback function can contain any alphanumeric, `_` (underscore), or `.` (period) character. Callbacks which contain invalid characters will receive a HTTP 400 error response, and the callback will not be called. 

Modern browsers can use [Cross-Origin Resource Sharing (CORS)](https://en.wikipedia.org/wiki/Cross-origin_resource_sharing) preflight requests for cross-domain requests, but JSONP can be used to ensure support with all browsers. - [Browser Support](http://caniuse.com/#feat=cors)
- [MDN Article on CORS](https://developer.mozilla.org/en-US/docs/Web/HTTP/Access_control_CORS)

For example: ```html
<script>
function receiveData( data ) {
  // Do something with the data here.
  // For demonstration purposes, we'll simply log it.
  console.log( data );
}
</script>
<script src="https://example.com/wp-json/?_jsonp=receiveData"></script>

```

---

# Backbone JavaScript Client <a name="rest-api/using-the-rest-api/backbone-javascript-client" />

Source: https://developer.wordpress.org/rest-api/using-the-rest-api/backbone-javascript-client/

The REST API includes a JavaScript/Backbone client library.

The library provides an interface for the WP REST API by providing Backbone Models and Collections for all endpoints exposed through the API Schema.

## Using

Activate the WP-API plugin. Enqueue the script directly:

```php
wp_enqueue_script( 'wp-api' );

```

or as a dependency for your script:

```php
wp_enqueue_script( 'my_script', 'path/to/my/script', array( 'wp-api' ) );

```

The library parses the root endpoint (the ‘Schema’) and creates matching Backbone models and collections. You will now have two root objects available to you: `wp.api.models` and `wp.api.collections`.

The models and collections include:

Models:  
\* Category  
\* Comment  
\* Media  
\* Page  
\* PageMeta  
\* PageRevision  
\* Post  
\* PostMeta  
\* PostRevision  
\* Schema  
\* Status  
\* Tag  
\* Taxonomy  
\* Type  
\* User

Collections:  
\* Categories  
\* Comments  
\* Media  
\* PageMeta  
\* PageRevisions  
\* Pages  
\* Posts  
\* Statuses  
\* Tags  
\* Taxonomies  
\* Types  
\* Users

You can use these endpoints as-is to read, update, create and delete items using standard Backbone methods (fetch, sync, save &amp; destroy for models, sync for collections). You can also extend these objects to make them your own, and build your views on top of them.

### Default values

Each model and collection includes a reference to its default values, for example:

`wp.api.models.Post.prototype.args`

- author: null
- comment\_status: null
- content: null
- date: null
- date\_gmt: null
- excerpt: null
- featured\_media: null
- format: null
- modified: null
- modified\_gmt: null
- password: null
- ping\_status: null
- slug: null
- status: null
- sticky: null
- title: null

### Available methods

Each model and collection contains a list of methods the corresponding endpoint supports. For example, models created from `wp.api.models.Post` have a methods array of:

```js
["GET", "POST", "PUT", "PATCH", "DELETE"]

```

### Accepted options

Each model and collection contains a list of options the corresponding endpoint accepts (note that options are passed as the second parameter when creating models or collections), for example:

`wp.api.collections.Posts.prototype.options`

- author
- context
- filter
- order
- orderby
- page
- per\_page
- search
- status

### Localizing the API Schema

The client will accept and use a localized schema as part of the `wpApiSettings` object. The Schema is currently not passed by default; instead the client makes an ajax request to the API to load the Schema, then caches it in the browser’s session storage (if available). Activating the client-js plugin with `SCRIPT_DEBUG` enabled uses a localized Schema. Check the [client-js example](https://github.com/WP-API/client-js/blob/master/client-js.php) or this branch which [attempts to only localize the schema once per client](https://github.com/WP-API/client-js/compare/features/only-localize-schma-once?expand=1).

### Waiting for the client to load

Client startup is asynchronous. If the api schema is localized, the client can start immediately; if not the client makes an ajax request to load the schema. The client exposes a load promise for provide a reliable wait to wait for client to be ready:

```js
wp.api.loadPromise.done( function() {
//... use the client here
} )

```

### Model examples:

To create a post and edit its categories, make sure you are logged in, then:

```js
// Create a new post
var post = new wp.api.models.Post( { title: 'This is a test post' } );
post.save();

// Load an existing post
var post = new wp.api.models.Post( { id: 1 } );
post.fetch();

// Get a collection of the post's categories (returns a promise)
// Uses _embedded data if available, in which case promise resolves immediately.
post.getCategories().done( function( postCategories ) {
  // ... do something with the categories.
  // The new post has an single Category: Uncategorized
  console.log( postCategories[0].name );
  // response -> "Uncategorized"
} );

// Get a posts author User model.
post.getAuthorUser().done( function( user ){
  // ... do something with user
  console.log( user.get( "name" ) );
} );

// Get a posts featured image Media model.
post.getFeaturedMedia().done( function( image ){
  // ... do something with image
  console.log( image );
} );

// Set the post categories.
post.setCategories( [ "apples", "oranges" ] );

// Get all the categories
var allCategories = new wp.api.collections.Categories()
allCategories.fetch();

var appleCategory = allCategories.findWhere( { slug: "apples" } );

// Add the category to the postCategories collection we previously fetched.
appleCategory.set( "parent_post", post.get( "id" ) );

// Use the POST method so Backbone will not PUT it even though it has an id.
postCategories.create( appleCategory.toJSON(), { type: "POST" } );

// Remove the Uncategorized category
postCategories.at( 0 ).destroy();

// Check the results - re-fetch
postCategories = post.getCategories();

postCategories.at( 0 ).get( "name" );
// response -> "apples"

```

### Collection examples:

To get the last 10 posts:

```js
var postsCollection = new wp.api.collections.Posts();
postsCollection.fetch();

```

To get the last 25 posts:

```js
postsCollection.fetch( { data: { per_page: 25 } } );

```

Use filter to change the order &amp; orderby options:

```js
postsCollection.fetch( { data: { 'filter': { 'orderby': 'title', 'order': 'ASC' } } } );

```

All collections support pagination automatically, and you can get the next page of results using `more`:

```js
postsCollection.more();

```

To get page 5 of a collection:

```js
posts.fetch( { data: { page: 5 } } );

```

Check if the collection has any more posts:

```js
posts.hasMore();

```

### Working With Revisions

You can access post or page revisions using the PostRevisions or PageRevisions collections or through the Post or Page collection.

For example, to get a collection of all revisions of post ID 1:

```js
var revisions = new wp.api.collections.PostRevisions({}, { parent: 1 });

```

Revision collections can also be accessed via their parent’s collection. This example makes 2 HTTP requests instead of one, but now the original post and its revisions are available:

```js
var post = new wp.api.models.Post( { id: 1 } );
post.fetch();
post.getRevisions().done( function( revisions ){
  console.log( revisions );
});

```

If you add custom endpoints to the API they will also become available as models/collections. For example, you will get new models and collections when you [add REST API support to your custom post type](#rest-api/extending-the-rest-api/adding-rest-api-support-for-custom-content-types). To access custom endpoints created, use the item’s JSON endpoint name as CamelCase; for example if the item is found at the JSON path of /wp-json/wp/v2/my-custom-post, it can be accessed via the api at wp.api.collections.MyCustomPost. Note: Because the schema is stored in the user’s session cache to avoid re-fetching, you may need to open a new tab to get a new read of the Schema.

```js
// Extend wp.api.models.Post and wp.api.collections.Posts to load a custom post type
const CustomPost = wp.api.models.Post.extend( {
  urlRoot: wpApiSettings.root + 'wp/v2/custom_post_slug',
  defaults: {
    type: 'custom_post_slug',
  },
} );
const CustomPosts = wp.api.collections.Posts.extend( {
  url: wpApiSettings.root + 'wp/v2/custom_post_slug',
  model: BLProduct,
} );
const someCustomPosts = new CustomPosts();
someCustomPosts.fetch().then( ( posts ) => {
  // do something with the custom posts
} );

```

---

# Client Libraries <a name="rest-api/using-the-rest-api/client-libraries" />

Source: https://developer.wordpress.org/rest-api/using-the-rest-api/client-libraries/

The API can be used from any application by sending basic HTTP requests; however, client libraries simplify the process of querying or creating specific resources. These libraries make it easy to connect an external application to the WordPress REST API using a variety of programming languages.

Aside from the Backbone.js client, these libraries are not part of WordPress core, and are not necessarily maintained or endorsed by the WordPress REST API team.

To perform authenticated requests from outside of the WordPress admin, themes, or plugins, a separate [authentication plugin](#rest-api/authentication) is required.

## PHP

[Requests](https://github.com/WordPress/Requests) for PHP is a general purpose HTTP request library. While not specifically designed for the WordPress REST API, it is a great tool for interacting with any HTTP API.

[WordPress-PHP-SDK](https://github.com/madeITBelgium/WordPress-PHP-SDK) is a PHP SDK for the WordPress REST API, which can be installed using [composer](https://getcomposer.org/).

[WordPress-SDK](https://github.com/storipress/wordpress-sdk) is a Laravel package for the WordPress REST API, which can be installed using [composer](https://getcomposer.org).

## JavaScript

The [Backbone.js client](#rest-api/backbone-javascript-client) is built in to WordPress core and provides Backbone.js models &amp; collections for working with REST API resources.

[node-wpapi](http://wp-api.org/node-wpapi) is an isomorphic JavaScript client library for querying or writing to the REST API using an intuitive chaining syntax. It can be used with Node.js or with client-side JavaScript applications.

[ember-wordpress](https://github.com/oskarrough/ember-wordpress) provides a connection between Ember Data and the REST API

## Ruby

[wp-api-client](https://github.com/duncanjbrown/wp-api-client): a read-only REST API client written in Ruby.

## C# / .NET

[WordPressPCL](https://github.com/wp-net/WordPressPCL): a full REST API client written in C#.

## Dart / Flutter

[wordpress\_client](https://pub.dev/packages/wordpress_client): A library exposing a fluent api to interact with the WordPress REST API.

---

# Extending the REST API <a name="rest-api/extending-the-rest-api" />

Source: https://developer.wordpress.org/rest-api/extending-the-rest-api/

## Guides

[Modifying responses](#rest-api/extending-the-rest-api/modifying-responses): add fields to REST API response objects using `register_meta` or `register_rest_field`[Adding Endpoints](#rest-api/extending-the-rest-api/adding-custom-endpoints): create custom REST API endpoints for your plugin or application [Working with Custom Content Types](#rest-api/extending-the-rest-api/adding-rest-api-support-for-custom-content-types): learn how to interact with your [custom post types](#plugins/post-types) and [custom taxonomies](#plugins/post-types) through the REST API ## Resources

[Defining your API Schema](#rest-api/extending-the-rest-api/schema): define the schema for your REST API resources and their arguments [Glossary](#rest-api/glossary): get up to speed with phrases used throughout our documentation [Routes &amp; Endpoints](#rest-api/extending-the-rest-api/routes-and-endpoints): dive deeper into the nuances of REST API routes and the endpoints they provide [Controller Classes](#rest-api/extending-the-rest-api/controller-classes): discover how to structure and extend REST API endpoint controller classes [Frequently Asked Questions](#rest-api/frequently-asked-questions): see some of the most frequent inquiries about the REST API and learn how to solve common problems

---

# Routes and Endpoints <a name="rest-api/extending-the-rest-api/routes-and-endpoints" />

Source: https://developer.wordpress.org/rest-api/extending-the-rest-api/routes-and-endpoints/

## Overview

The REST API provides us a way to match URIs to various resources in our WordPress install. By default, if you have pretty permalinks enabled, the WordPress REST API “lives” at `/wp-json/`. At our WordPress site `https://ourawesomesite.com`, we can access the REST API's index by making a`GET`request to`https://ourawesomesite.com/wp-json/`. The index provides information regarding what routes are available for that particular WordPress install, along with what HTTP methods are supported and what endpoints are registered. ## Routes vs Endpoints

Endpoints are functions available through the API. This can be things like retrieving the API index, updating a post, or deleting a comment. Endpoints perform a specific function, taking some number of parameters and return data to the client. A route is the “name” you use to access endpoints, used in the URL. A route can have multiple endpoints associated with it, and which is used depends on the HTTP verb. For example, with the URL `http://example.com/wp-json/wp/v2/posts/123`: - The “route” is `wp/v2/posts/123` – The route doesn’t include `wp-json` because `wp-json` is the base path for the API itself.
- This route has 3 endpoints: 
    - `GET` triggers a `get_item` method, returning the post data to the client.
    - `PUT` triggers an `update_item` method, taking the data to update, and returning the updated post data.
    - `DELETE` triggers a `delete_item` method, returning the now-deleted post data to the client.

On sites without pretty permalinks, the route is instead added to the URL as the `rest_route` parameter. For the above example, the full URL would then be `http://example.com/?rest_route=/wp/v2/posts/123`

## Creating Endpoints

If we wanted to create an endpoint that would return the phrase “Hello World, this is the WordPress REST API” when it receives a GET request, we would first need to register the route for that endpoint. To register routes you should use the `register_rest_route()` function. It needs to be called on the `rest_api_init` action hook. `register_rest_route()` handles all of the mapping for routes to endpoints. Let’s try to create a “Hello World, this is the WordPress REST API” route. ```php
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

The first argument passed into `register_rest_route()` is the namespace, which provides us a way to group our routes. The second argument passed in is the resource path, or resource base. For our example, the resource we are retrieving is the “Hello World, this is the WordPress REST API” phrase. The third argument is an array of options. We specify what methods the endpoint can use and what callback should happen when the endpoint is matched (more things can be done but these are the fundamentals). The third argument also allows us to provide a permissions callback, which can restrict access for the endpoint to only certain users. The third argument also offers a way to register arguments for the endpoint so that requests can modify the response of our endpoint. We will get into those concepts in the endpoints section of this guide. When we go to `https://ourawesomesite.com/wp-json/hello-world/v1/phrase` we can now see our REST API greeting us kindly. Let’s take a look at routes a bit more in depth. ## Routes

Routes in the REST API are represented by URIs. The route itself is what is tacked onto the end of `https://ourawesomesite.com/wp-json`. The index route for the API is`/`which is why`https://ourawesomesite.com/wp-json/` returns all of the available information for the API. All routes should be built onto this route, the `wp-json` portion can be changed, but in general, it is advised to keep it the same. We want to make sure that our routes are unique. For instance we could have a route for books like this: `/books`. Our books route would now live at `https://ourawesomesite.com/wp-json/books`. However, this is not a good practice as we would end up polluting potential routes for the API. What if another plugin we wanted to register a books route as well? We would be in big trouble in that case, as the two routes would conflict with each other and only one could be used. The fourth parameter to`[register\_rest\_route()](#reference/functions/register_rest_route) ` is a boolean for whether the route should override an existing route. The override parameter does not really solve our problem either, as both routes could override or we would want to use both routes for different things. This is where using namespaces for our routes comes in. ### Namespaces

It is extremely important to add namespaces to your routes. The “core” endpoints use the `wp/v2` namespace. 

**Do not place anything into the `wp` namespace unless you are making endpoints with the intention of merging them into core.**

There are some key things to take notice of in the core endpoint namespace. The first part of the namespace is `wp`, which represents the vendor name; WordPress. For our plugins we will want to come up with unique names for what we call the vendor portion of the namespace. In the example above we used `hello-world`. Following the vendor portion is the version portion of the namespace. The “core” endpoints utilize `v2` to represent version 2 of the WordPress REST API. If you are writing a plugin, you can maintain backwards compatibility of your REST API endpoints by simply creating new endpoints and bumping up the version number you provide. This way both the original `v1` and `v2` endpoints can be accessed. The part of the route that follows the namespace is the resource path. ### Resource Paths

The resource path should signify what resource the endpoint is associated with. In the example we used above, we used the word `phrase` to signify that the resource we are interacting with is a phrase. To avoid any collisions, each resource path we register should also be unique within a namespace. Resource paths should be used to define different resource routes within a given namespace. Let’s say we have a plugin that handles some basic eCommerce functionality. We will have two main resource types orders, and products. Orders are a request for product(s) but they are not the product themselves. The same concept applies to products. Although these resources are related they are not the same thing and each should live in a separate resource paths. Our routes will end up looking something like this for our eCommerce plugin: `/my-shop/v1/orders` and `/my-shop/v1/products`. Using routes like this, we would want each to return a collection of orders or products. What if we wanted to grab a specific product by ID, we would need to use path variables in our routes. ### Path Variables

Path variables enable us to add dynamic routes. To expand on our eCommerce routes, we could register a route to grab individual products. ```php
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

The above example covers a lot. The important part to note is that in the second route we register, we add on a path variable `/(?P<id>[\d]+)` to our resource path `/products`. The path variable is a regular expression. In this case it uses `[\d]+` to signify that should be any numerical character at least once. If you are using numeric IDs for your resources, then this is a great example of how to use a path variable. When using path variables, we now have to be careful around what can be matched as it is user input. The regex luckily will filter out anything that is not numerical. However, what if the product for the requested ID doesn’t exist. We need to do error handling. You can see the basic way we are handling errors in the code example above. When you return a `WP_Error` in your endpoint callbacks the API server will automatically handle serving the error to the client. Although this section is about routes, we have covered quite a bit about endpoints. Endpoints and routes are interrelated, but they definitely have distinctions. ## Endpoints

Endpoints are the destination that a route needs to map to. For any given route, you could have a number of different endpoints registered to it. We will expand on our fictitious eCommerce plugin, to better show the distinction between routes and endpoints. We are going to create two endpoints that exist at the `/wp-json/my-shop/v1/products/` route. One endpoint uses the HTTP verb `GET` to get products, and the other endpoint uses the HTTP verb `POST` to create a new product. ```php
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

Depending on what HTTP Method we use for the route `/wp-json/my-shop/v1/products`, we are matched to a different endpoint and a different callback is fired. When we use `POST` we trigger the `prefix_create_product()` callback, and when we use `GET` we trigger the `prefix_get_products()` callback. There are a number of different HTTP methods and the REST API can make use of any of them. ### HTTP Methods

HTTP methods are sometimes referred to as HTTP verbs. They are simply just different ways to communicate via HTTP. The main ones used by the WordPress REST API are: - `GET` should be used for retrieving data from the API.
- `POST` should be used for creating new resources (i.e users, posts, taxonomies).
- `PUT` should be used for updating resources.
- `DELETE` should be used for deleting resources.
- `OPTIONS` should be used to provide context about our resources.

It is important to note that these methods are not supported by every client, as they were introduced in HTTP 1.1. Luckily, the API provides a workaround for these unfortunate cases. If you want to delete a resource but can’t send a `DELETE` request, then you can use the `_method` parameter or the `X-HTTP-Method-Override` header in your request. How this works is you will send a `POST` request to `https://ourawesomesite.com/wp-json/my-shop/v1/products/1?\_method=DELETE`. Now you will have deleted product number 1, even though your client could not send the proper HTTP method in the request, or maybe there was a firewall in place that blocks out DELETE requests. The HTTP method, in combination with the route and callbacks, are what make up the core of an endpoint. ### Callbacks

There are currently only two types of callbacks for endpoints supported by the REST API; `callback` and `permission_callback`. The main callback should handle the interaction with the resource. The permissions callback should handle what users have access to the endpoint. You can add additional callbacks by adding additional information when registering an endpoint. You can then hook into `rest_pre_dispatch`, `rest_dispatch_request`, or `rest_post_dispatch` hooks to fire your new custom callbacks. #### Endpoint Callback

The main callback for a delete endpoint should only delete the resource and return a copy of it in the response. The main callback for a creation endpoint should only create the resource and return a response matching the newly created data. An update callback should only modify resources that actually exist. A reading callback should only retrieve data that already exists. It is important to take into account the concept of idempotence. Idempotence, in the context of a REST API, means that if you make the same request to an endpoint the server will process the request the same way. Imagine if our read endpoint was not idempotent. Whenever we made a request to it the state of our server would be modified by the request, even though we were only trying to get data. This could be catastrophic. Any time someone fetched data from your server something would change internally. It is important to make sure that read, update, and delete endpoints do not have nasty side effects and just stick to what they are intended to do. In a REST API, the concept of idempotence is tied to HTTP methods instead of endpoint callbacks. Any callback using `GET`, `HEAD`, `TRACE`, `OPTIONS`, `PUT`, or `DELETE`, should not produce any side effects. `POST` requests are not idempotent, and are typically used for creating resources. If you created an idempotent creation method then you would only ever create one resource because when you make the same request there would be no more side effects to the server. For creating, if you make the same request over and over the server should generate new resources each time. To restrict usage of endpoints we need to register a permissions callback. #### Permissions Callback

Permissions callbacks are extremely important for security with the WordPress REST API. If you have any private data that should not be displayed publicly, then you need to have permissions callbacks registered for your endpoints. Below is an example of how to register permissions callbacks. ```php
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
        'permission_callback' => 'prefix_get_private_data_permissions_check',
    ) );
}

add_action( 'rest_api_init', 'prefix_register_example_routes' );

```

If you try out this endpoint without any Authentication enabled then you will also be returned the error response, preventing you from seeing the data. Authentication is a huge topic and eventually a portion of this chapter will be created to show you how to create your own authentication processes. ### Arguments

When making requests to an endpoint you might need to specify extra parameters to change the response. These extra parameters can be added while registering endpoints. Let’s look at an example of how to use arguments with an endpoint. ```php
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

We have now specified a `filter` argument for this example. We can specify the argument as a query parameter when we request the endpoint. If we make a `GET` request to `https://ourawesomesitem.com/my-colors/v1/colors?filter=blue`, we will be returned only the blue colors in our collection. You could also pass these as body parameters in the request body, instead of in the query string. To understand the distinction between query parameters and body parameters you should read about the HTTP spec. Query parameters live in the query string tacked onto the URL and body parameters are directly embedded in the body of an HTTP request. We have created an argument for our endpoint, but how do we verify that the argument is a string and tell whether it matches the value red, green, or blue. To do this we need to specify a validation callback for our argument. #### Validation

Validation and sanitization are extremely important for security in the API. The validate callback (in WP 4.6+), fires before the sanitize callback. You should use the `validate_callback` for your arguments to verify whether the input you are receiving is valid. The `sanitize_callback` should be used to transform the argument input or clean out unwanted parts out of the argument, before the argument is processed by the main callback. In the example above, we need to verify that the `filter` parameter is a string, and it matches the value red, green, or blue. Let’s look at what the code looks like after adding in a `validate_callback`. ```php
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

In the above example, we do not need to use a `sanitize_callback`, because we are restricting input to only values in our enum. If we did not have strict validation and accepted any string as a parameter, we would definitely need to register a `sanitize_callback`. What if we wanted to update a content field and the user entered something like `alert('ZOMG Hacking you');`. The field value could potentially be an executable script. To strip out unwanted data or to transform data into a desired format we need to register a `sanitize_callback` for our arguments. Here is an example of how to use WordPress’s `sanitize_text_field()` for a sanitize callback: ```php
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

# Controller Classes <a name="rest-api/extending-the-rest-api/controller-classes" />

Source: https://developer.wordpress.org/rest-api/extending-the-rest-api/controller-classes/

## Overview

To register a new REST route, you must specify a number of callback functions to control endpoint behavior such as how a request is fulfilled, how permissions checks are applied, and how the schema for your resource gets generated. While it is possible to declare all of these methods in an ordinary PHP file without any wrapping namespace or class, all functions declared in that manner coexist in the same global scope. If you decide to use a common function name for your endpoint logic like `get_items()` and another plugin (or another endpoint in your own plugin) also registers a function with that same name, PHP will fail with a fatal error because the function `get_items()` is being declared twice.

You can avoid this issue by naming your callback functions using a unique prefix such as `myplugin_myendpoint_` to avoid any potential conflics:

```php
function myplugin_myendpoint_register_routes() { /* ... */ }
function myplugin_myendpoint_get_item() { /* ... */ }
function myplugin_myendpoint_get_item_schema() { /* ... */ }
// etcetera

add_action( 'rest_api_init', 'myplugin_myendpoint_register_routes' );

```

You may already be familiar with this approach because it is commonly used within theme `functions.php` files. However these prefixes are unnecessarily verbose, and several better options exist to group and encapsulate your endpoint’s logic in a more maintainable way.

WordPress currently requires PHP 5.6 or greater. PHP 5.6 supports [namespaces](https://www.php.net/manual/en/language.namespaces.rationale.php), which provide an easy way to encapsulate your endpoint’s functionality. By declaring a `namespace` at the top of your endpoint’s PHP file, all methods within that namespace will be declared within that namespace and will no longer conflict with global functions. You may then use shorter, more-readable names for your endpoint callbacks.

```php
namespace MyPlugin\API\MyEndpoint;

function register_routes() { /* ... */ }
function get_item() { /* ... */ }
function get_item_schema() { /* ... */ }
// and so on

add_action( 'rest_api_init', __NAMESPACE__ . '\\register_routes' );

```

While these shorter function names are simpler to work with, they don’t provide any other benefits over declaring global functions. For this reason the core REST API endpoints within WordPress are all implemented using a *controller class*.

The remainder of this page details how to write your own controller class and explains the advantages of doing so.

## Controllers

A controller receives input (a `WP_REST_Request` object, in the case of the WordPress REST API) and generates response output as `WP_REST_Response` objects. Let’s look at an example controller class:

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
     * Gets post data of requested post id and outputs it as a rest response.
     *
     * @param WP_REST_Request $request Current request.
     */
    public function get_item( $request ) {
        $id = (int) $request['id'];
        $post = get_post( $id );

        if ( empty( $post ) ) {
            return rest_ensure_response( array() );
        }

        $response = $this->prepare_item_for_response( $post, $request );

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
     * @return array The sample schema for a post
     */
    public function get_item_schema() {
        if ( $this->schema ) {
            // Since WordPress 5.3, the schema can be cached in the $schema property.
            return $this->schema;
        }

        $this->schema = array(
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

        return $this->schema;
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

## Benefits of Classes

This class contains all the same components you may have written using simple functions. The structure of a class gives us a convenient way to refer to related methods using the `$this->method_name()` syntax, but unlike a namespace the class also permits us to cache values and share logic.

In the `get_item_schema` method, note that we store the generated schema on the class as `$this->schema`. Class properties make it easy to cache these sorts of generated values. The introduction of schema caching in WordPress 5.3 increased the speed of some core REST API collection responses by up to 40%, so you should definitely consider following this pattern in your own controllers.

## Class Inheritance &amp; [WP\_REST\_Controller](#reference/classes/wp_rest_controller)

We’ve seen above how classes solve the global-function encapsulation issue, and how a class instance can be used to cache complex values to speed up response processing. The other major advantage of classes is the way in which class inheritance lets you share logic between multiple endpoints.

Our example class here did not extend any base class, but within WordPress core all endpoint controllers extend a single `abstract` controller class called `WP_REST_Controller`. Extending this class gives you access to a number of useful methods, including but not limited to:

- [`prepare_response_for_collection()`](#reference/classes/wp_rest_controllerprepare_response_for_collection/): Prepare a response for insertion into a collection.
- [`add_additional_fields_to_object()`](#reference/classes/wp_rest_controlleradd_additional_fields_to_object/): append any registered REST fields to your prepared response object.
- [`get_fields_for_response()`](#reference/classes/wp_rest_controllerget_fields_for_response/): inspect the `_fields` query parameter to determine which response fields have been requested.
- [`get_context_param()`](#reference/classes/wp_rest_controllerget_context_param/): Retrieve the `context` parameter.
- [`filter_response_by_context()`](#reference/classes/wp_rest_controllerfilter_response_by_context/): Filters the response shape based on the provided context parameter.
- [`get_collection_params()`](#reference/classes/wp_rest_controllerget_collection_params/): return a basic set of parameter definitions useful for collection endpoints.

Endpoint-specific methods like `get_item`, `register_routes`, and `update_item_permissions_check` are not fully implemented by the abstract class, and must be defined in your own class.

Visit the [`WP_REST_Controller` class reference page](#reference/classes/wp_rest_controller#methods) for a complete list of this controller’s methods.

It is important to note that `WP_REST_Controller` is implemented as an `abstract` class and only contains logic that is clearly needed in multiple classes. Inheritance couples your class to the base class it extends, and poorly-considered inheritance trees can make your endpoints much harder to maintain.

As an example, if you wrote a controller class for a posts endpoint (like the example above) and wanted to support custom post types as well, you should **NOT** extend your `My_REST_Posts_Controller` like this: `class My_CPT_REST_Controller extends My_REST_Posts_Controller`. Instead, you should either create an entirely separate base controller class for the shared logic, or make `My_REST_Posts_Controller` handle all available post types. Endpoint logic is subject to changing business requirements, and you don’t want to have to change a number of unrelated controllers every time you update your base posts controller.

In most cases you will want to create a base controller class as either an `interface` or `abstract class` which each of your endpoint controllers can implement or extend, or to extend one of the core WordPress REST classes directly.

## Internal WordPress REST API Classes

The WordPress REST API follows a deliberate design pattern for its internal classes, which may be categorized as either *infrastructure* or *endpoint* classes.

Endpoint classes encapsulate the functional logic necessary to perform [CRUD](https://en.wikipedia.org/wiki/Create,_read,_update_and_delete) operations on WordPress resources. WordPress exposes many REST API endpoints (such as [`WP_REST_Posts_Controller`](#reference/classes/wp_rest_posts_controller)), but as discussed above all endpoints extend from a common base controller class:

- [`WP_REST_Controller`](#reference/classes/wp_rest_controller): The base class for all WordPress core endpoints. This class is designed to represent a consistent pattern for manipulating WordPress resources. When interacting with an endpoint that implements `WP_REST_Controller`, a HTTP client can expect each endpoint to behave in a consistent way.

Infrastructure classes support the endpoint classes. They handle the logic for the WordPress REST API without performing any data transformation. The WordPress REST API implements three key infrastructure classes:

- [`WP_REST_Server`](#reference/classes/wp_rest_server): The main controller for the WordPress REST API. Routes are registered to the server within WordPress. When `WP_REST_Server` is called upon to serve a request, it determines which route is to be called, and passes the route callback a `WP_REST_Request` object. `WP_REST_Server` also handles authentication, and can perform request validation and permissions checks.
- [`WP_REST_Request`](#reference/classes/wp_rest_request): An object to represent the nature of the request. This object includes request details like request headers, parameters, and method, as well as the route. It can also perform request validation and sanitization.
- [`WP_REST_Response`](#reference/classes/wp_rest_response): An object to represent the nature of the response. This class extends `WP_HTTP_Response`, which includes headers, body, and status, and provides helper methods like `add_link()` for adding linked media, and `query_navigation_headers()` for getting query navigtion headers.

Most types of API-driven application will not require you to extend or interact directly with the infrastructure layer, but if you are implementing your own REST API endpoints your application will likely benefit from one or more endpoint controller classes which extend `WP_REST_Controller`.

---

# Schema <a name="rest-api/extending-the-rest-api/schema" />

Source: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/

## Overview

A schema is metadata that tells us how our data is structured. Most databases implement some form of schema which enables us to reason about our data in a more structured manner. The WordPress REST API utilizes [JSON Schema](http://json-schema.org/) to handle the structuring of its data. You can implement endpoints without using a schema, but you will be missing out on a lot of things. It is up to you to decide what suits you best.

### JSON

First, let’s talk about JSON a bit. JSON is a human readable data format that resembles JavaScript objects. JSON stands for JavaScript Object Notation. JSON is growing wildly in popularity and seems to be taking the world of data structure by storm. The WordPress REST API uses a special specification for JSON known as JSON schema. To learn more about JSON Schema please check out the [JSON Schema website](http://json-schema.org/) and this [easier to understand introduction to JSON Schema](https://json-schema.org/understanding-json-schema). Schema affords us many benefits: improved testing, discoverability, and overall better structure. Let’s look at a JSON blob of data.

```js
{
    "shouldBeArray": 'LOL definitely not an array',
    "shouldBeInteger": ['lolz', 'you', 'need', 'schema'],
    "shouldBeString": 123456789
}

```

A JSON parser will go through that data no problem and won’t complain about anything, because it is valid JSON. The clients and servers know nothing about the data and what to expect they just see the JSON. By implementing schema we can actually simplify our codebase. Schema will help structure our data better so our applications can more easily reason about our interactions with the WordPress REST API. The WordPress REST API does not force you to use schema, but it is encouraged. There are two ways in which schema data is incorporated into the API; schema for resources and schema for our registered arguments.

### Resource Schema

The schema for a resource indicates what fields are present for a particular object. When we register our routes we can also specify the resource schema for the route. Let’s look at what a simple comment schema might look like in a PHP representation of JSON schema.

```php
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
        'number' => 5,
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

    $schema = prefix_get_comment_schema();

    // We are also renaming the fields to more understandable names.
    if ( isset( $schema['properties']['id'] ) ) {
        $comment_data['id'] = (int) $comment->comment_ID;
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

    $data  = (array) $response->get_data();
    $links = rest_get_server()::get_compact_response_links( $response );

    if ( ! empty( $links ) ) {
        $data['_links'] = $links;
    }

    return $data;
}

/**
 * Get our sample schema for comments.
 */
function prefix_get_comment_schema() {
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

If you notice, each comment resource now matches up to our schema that we specified. We made this switch in `prefix_rest_prepare_comment()`. By creating schema for our resources, we can now view this schema by making `OPTIONS` requests. Why is this useful? If we wanted other languages, JavaScript for example, to interpret our data and validate the data from our endpoint, JavaScript would need to know how our data is structured. When we provide schema, we open the doors for other authors, and ourselves, to build on top of our endpoints in a consistent manner.

Schema provides machine readable data, so potentially anything that can read JSON can understand what kind of data it is looking at. When we look at the API index by making a `GET` request to `https://ourawesomesite.com/wp-json/`, we are returned the schema of our API, enabling others to write client libraries to interpret our data. This process of reading schema data is known as discovery. When we have provided schema for a resource we make that resource discoverable via`OPTIONS` requests to that route. Exposing resource schema is only one part of our schema puzzle. We also want to use schema for our registered arguments.

### Argument Schema

When we register request arguments for an endpoint, we can also use JSON Schema to provide us data about what the arguments should be. This enables us to write validation libraries that can be reused as our endpoints expand. Schema is more work upfront, but if you are going to write a production application that will grow, you should definitely consider using schema. Let’s look at an example of using argument schema and validation.

```php
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
 * @return true|WP_Error True if the data is valid, WP_Error otherwise.
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
 * Our sanitization callback for `my-arg` parameter.
 *
 * @param mixed           $value   Value of the my-arg parameter.
 * @param WP_REST_Request $request Current request object.
 * @param string          $param   The name of the parameter in this case, 'my-arg'.
 * @return mixed|WP_Error The sanitize value, or a WP_Error if the data could not be sanitized.
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

### Summary

Schema can seem silly at points and possibly like unnecessary work, but if you want maintainable, discoverable, and easily extensible endpoints, it is essential to use schema. Schema also helps to self document your endpoints both for humans and computers!

## JSON Schema Basics

WordPress implements a validator that uses a subset of the [JSON Schema Version 4 specification](https://json-schema.org/specification-links.html#draft-4). The RFC is recommended reading to gain a deeper understanding of how JSON Schema works, but this article will describe the basics of JSON Schema and what features WordPress supports.

### API

The REST API defines two main functions for using JSON Schema: `rest_validate_value_from_schema` and `rest_sanitize_value_from_schema`. Both functions accept the request data as the first parameter, the parameter’s schema definition as the second parameter, and optionally the parameter’s name as the third parameter. The validate function returns either `true` or a `WP_Error` instance depending on if the data successfully validates against the schema. The sanitize function returns a sanitized form of the data passed to the function, or a `WP_Error` instance if the data cannot be safely sanitized.

When calling these functions, you should take care to *always* first validate the data using `rest_validate_value_from_schema`, and then if that function returns `true`, sanitize the data using `rest_sanitize_value_from_schema`. Not using both can open up your endpoint to security vulnerabilities.

If your endpoint is implemented using a [subclass of `WP_REST_Controller`](#rest-api/extending-the-rest-api/controller-classes), the `WP_REST_Controller::get_endpoint_args_for_item_schema` method will automatically mark your arguments as using the built-in validate and sanitize callbacks. As such, there is no need to manually specify the callbacks.

If your endpoint does not follow the controller class pattern, args returned from `WP_REST_Controller::get_collection_params()`, or any other instance where callbacks are not specified, the `WP_REST_Request` object will apply sanitization and validation using the `rest_parse_request_arg` function. Importantly, this is only applied when the `sanitize_callback` is not defined. As such, if you specify a custom `sanitize_callback` for your argument definition, the built-in JSON Schema validation will not apply. If you need this validation, you should manually specify `rest_validate_request_arg` as the `validate_callback` in your argument definition.

### Caching Schema

Schema may be complex, and can take time to generate. You should consider caching generated schema in your plugin’s custom endpoints to avoid repeatedly generating the same schema object.

If you are defining your endpoint using a a [subclass of `WP_REST_Controller`](#rest-api/extending-the-rest-api/controller-classes), that might look like this:

```php
<br></br>    /**
     * Retrieves the attachment's schema, conforming to JSON Schema.
     *
     * @return array Item schema as an array.
     */
    public function get_item_schema() {
        // Returned cached copy whenever available.
        if ( $this->schema ) {
            return $this->add_additional_fields_schema( $this->schema );
        }

        $schema = parent::get_item_schema();
        // Add endpoint-specific properties to Schema.
        $schema['properties']['field_name'] = array( /* ... */ );
        $schema['properties']['etcetera'] = array( /* ... */ );

        // Cache generated schema on endpoint instance.
        $this->schema = $schema;

        return $this->add_additional_fields_schema( $this->schema );
    }

```

This pattern was introduced into WordPress core in version 5.3 in [\#47871](https://core.trac.wordpress.org/ticket/47871), and yielded up to 40% speed improvement when generating some API responses.

### Schema Documents

A basic schema document consists of a few properties.

- `$schema` A reference to a meta schema that describes the version of the spec the document is using.
- `title` The title of the schema. Normally this is a human readable label, but in WordPress this is machine readable string . The posts endpoint, for example, has a title of ‘post’. Comments has a title of ‘comment’.
- `type` This refers to the type of the value being described. This can be any one of the seven primitive types. In WordPress the top-level type will almost always be an `object`, even for collection endpoints that return an array of objects.
- `properties` A list of the known properties contained in the object and their definitions. Each property definition itself is also a schema, but without the $schema top-level property, more accurately described as a sub-schema.

### Primitive Types

JSON Schema defines a list of seven allowed [primitive types](https://tools.ietf.org/html/draft-zyp-json-schema-04#section-3.5).

- `string` A string value.
- `null` A `null` value.
- `number` Any number. Decimals are allowed. Equivalent to a [`float` in PHP](https://www.php.net/float).
- `integer` A number, but decimals or exponents are not allowed.
- `boolean` A `true` or `false` value.
- `array` A list of values. This is equivalent to a [JavaScript array](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array). In PHP this is referred to as a numerical array, or an array without defined keys.
- `object` A map of keys to values. This is equivalent to a [JavaScript object](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Object_initializer). In PHP this is referred to as an [associative array](https://en.wikipedia.org/wiki/Associative_array), or an array with defined keys.

A value’s primitive type is specified using the `type` keyword. For example, this is how you would define a `string` value with JSON Schema.

```php
array(
    'type' => 'string',
);

```

JSON Schema allows for defining values that can be multiple types. For example, this is how you would define a value that can be either a `string` or a `boolean`.

```php
array(
    'type' => array( 'boolean', 'string' ),  
);

```

#### Type Juggling

Because the WordPress REST API accepts [URL form encoded](https://en.wikipedia.org/wiki/Percent-encoding#The_application/x-www-form-urlencoded_type) data both in the `POST` body or as the query portion of the URL, many primtive types perform type juggling to convert these string values into their proper native types.

- `string` Only strings according to [`is_string`](https://www.php.net/is_string) are allowed.
- `null` Only a properly typed `null` is accepted. This means that submitting a null value in the URL or as a URL form encoded post body is not possible, a JSON request body must be used.
- `number` Floats, integers, and strings that pass [`is_numeric`](https://www.php.net/manual/en/function.is-numeric.php) are allowed. Values will be casted to a `float`.
- `integer` Integers or strings that can be [casted to a `float`](https://www.php.net/manual/en/language.types.float.php#language.types.float.casting) with a fractional part that is equivalent to 0.
- `boolean` Booleans, the integers `0` and `1`, or the strings `"0"`, `"1"`, `"false"`, and `"true"`. `0` is treated as `false` and `1` is treated as `true`.
- `array` Numeric arrays according to [`wp_is_numeric_array`](#reference/functions/wp_is_numeric_array) or a string. If the string is comma separated it will be split into an array, otherwise it will be an array containing the string value. For example: `"red,yellow"` becomes `array( "red", "yellow" )` and `"blue"` becomes `array( "blue" )`.
- `object` An array, an `stdClass` object, an object implementing `JsonSerializable` or an empty string. Values will be converted to a native PHP array.

When using multiple types, types will be evaluated in the order they are specified. This can have an impact on the sanitized data received by your REST API endpoint. For instance, in the previous example, if the value submitted was `"1"`, it would be sanitized to the boolean `true` value. However, if the order was flipped, the value would remain as the string `"1"`.

The JSON Schema specification allows for defining schemas without a `type` field. The WordPress implementation however requires a `type` to be defined, and will issue a `_doing_it_wrong` notice if a type is ommitted.

### Format

The seven primitive types are just that, [primitive](https://en.wikipedia.org/wiki/Primitive_data_type), so how do you define more complex value types? One of the ways to do that is using the `format` keyword. The `format` keyword allows for defining additional semantic-level validation of values that have a well-defined structure.

For example, to require a date value, you would use the `date-time` format.

```php
array(
    'type'   => 'string',
    'format' => 'date-time',
);

```

WordPress supports the following formats:

- `date-time` A date formatted according to [RFC3339](https://tools.ietf.org/html/rfc3339#section-5.8).
- `uri` A uri according to [`esc_url_raw`](#reference/functions/esc_url_raw).
- `email` An email address according to [`is_email`](#reference/functions/is_email).
- `ip` A v4 or v6 ip address.
- `uuid` A uuid of any version.
- `hex-color` A 3 or 6 character hex color with a leading `#`.

A value must match its format even if the value is an empty string. If allowing an “empty” value is desired, add `null` as a possible type.

For example, the following schema would allow `127.0.0.1` or `null` as possible values.

```php
array(
    'type'   => array( 'string', 'null' ),
    'format' => 'ip',
);

```

### Strings

The `string` types supports three additional keywords.

#### minLength and maxLength

The `minLength` and `maxLength` keywords can be used to constrain the acceptable length of a string. Importantly multi-byte characters are counted as a single character and bounds are inclusive.

For instance, given the following schema, `ab`, `abc`, and `abcd` are valid, while `a`, and `abcde` are invalid.

```php
array(
    'type'      => 'string',
    'minLength' => 2,
    'maxLength' => 4,
);

```

The `exclusiveMinimum` and `exclusiveMaximum` keywords do not apply, they are only valid for numbers.

#### pattern

The JSON Schema keyword `pattern` can be used to validate that a string field matches a regular expression.

For instance, given the following schema, `#123` would be valid, but `#abc` would not.

```php
array(
    'type'    => 'string',
    'pattern' => '#[0-9]+',
);

```

The regex is not automatically anchored. Regex flags, for instance `/i` to make the match case insensitive are not supported.

The JSON Schema RFC recommends limiting yourself to the following regex features so the schema can be interoperable between as many different programming languages as possible.

- individual Unicode characters, as defined by the JSON specification \[RFC4627\].
- simple character classes `[abc]`, range character classes `[a-z]`.
- complemented character classes `[^abc]`, `[^a-z]`.
- simple quantifiers: `+` (one or more), `*` (zero or more), `?` (zero or one), and their lazy versions `+?`, `*?`, `??`.
- range quantifiers: `{x}` (exactly x occurrences), `{x,y}` (at least x, at most y, occurrences), `{x,}` (x occurrences or more), and their lazy versions.
- the beginning-of-input `^` and end-of-input `$` anchors.
- simple grouping `(...)` and alternation `|`.

The pattern should be valid according to the ECMA 262 regex dialect.

### Numbers

The `number` and `integer` types support four additional keywords.

#### minimum and maximum

The `minimum` and `maximum` keyword allow constraining the range of acceptable numbers. For example, `2` would be valid according to this schema, but `0` and `4` would not be.

```php
array(
    'type' => 'integer',
    'minimum' => 1,
    'maximum' => 3,
);

```

JSON Schema also allows using the `exclusiveMinimum` and `exclusiveMaximum` keywords to denote that the value cannot equal the defined `minimum` or `maximum` respectively. For example, in this case only `2` would be an acceptable value.

```php
array(
    'type'             => 'integer',
    'minimum'          => 1,
    'exclusiveMinimum' => true,
    'maximum'          => 3,
    'exclusiveMaximum' => true,
);

```

#### multipleOf

The `multipleOf` keyword allows for asserting an integer or number type is a multiple of the given number. For example, this schema will only accept even integers.

```php
array(
    'type'       => 'integer',
    'multipleOf' => 2,
);

```

`multipleOf` also supports decimals. For example, this schema could be used to accept a percentage with a maximum of 1 decimal point.

```php
array(
    'type'       => 'number',
    'minimum'    => 0,
    'maximum'    => 100,
    'multipleOf' => 0.1,
);

```

### Arrays

Specifying a `type` of `array` requires data to be an array, but that is only half the validation story. You’ll also want to enforce the format of each item in the array. This is done by specifying a JSON Schema that each array item must conform to using the `items` keyword.

For example, the following schema requires an array of IP addresses.

```php
array(
    'type'  => 'array',
    'items' => array(
        'type'   => 'string',
        'format' => 'ip',
    ),
);

```

This would pass validation.

```json
[ "127.0.0.1", "255.255.255.255" ]

```

While this would fail validation.

```json
[ "127.0.0.1", 5 ]

```

The `items` schema can be any schema, it could even be an array itself!

```php
array(
    'type'  => 'array',
    'items' => array(
        'type'  => 'array',
        'items' => array(
            'type'   => 'string',
            'format' => 'hex-color',
        ),
    ),
);

```

This would pass validation.

```json
[
  [ "#ff6d69", "#fecc50" ],
  [ "#0be7fb" ]
]

```

While this would fail validation.

```json
[
  [ "#ff6d69", "#fecc50" ],
  "george"
]

```

#### minItems and maxItems

The `minItems` and `maxItems` keywords can be used to constrain the acceptable number of items included in the array.

For instance, given the following schema, `[ "a" ]` and `[ "a", "b" ]` are valid, while `[]` and `[ "a", "b", "c" ]` are invalid.

```php
array(
    'type'     => 'array',
    'minItems' => 1,
    'maxItems' => 2,
    'items'    => array(
        'type' => 'string',
    ),
);

```

The `exclusiveMinimum` and `exclusiveMaximum` keywords do not apply, they are only valid for the `number` and `integer` types.

#### uniqueItems

The `uniqueItems` keyword can be used to require that all items in the array are unique.

For instance, given the following schema, `[ "a", "b" ]` is valid, while `[ "a", "a" ]` is not.

```php
array(
    'type'        => 'array',
    'uniqueItems' => true,
    'items'       => array(
        'type' => 'string',
    ),
);

```

##### Uniqueness

Items of different types are considered unique, for instance, `"1"`, `1` and `1.0` are different values.

When arrays are compared, the order of items matters. So the given array is considered to have all unique items.

```json
[
  [ "a", "b" ],
  [ "b", "a" ]
]

```

When objects are compared, the order the members appear in does not matter. So the given array is considered to have duplicate items since the values are the same, they just appear in a different order.

```json
[
  { 
    "a": 1,
    "b": 2
  },
  {
    "b": 2,
    "a": 1
  }
]

```

Uniqueness is checked in both `rest_validate_value_from_schema` and `rest_sanitize_value_from_schema`. This is to prevent instances where items would be considered unique before sanitization is applied, but after sanitization the items would converge to identical values.

Take for instance the following schema:

```php
array(
    'type' => 'array',
    'uniqueItems' => true,
    'items' => array(
        'type' => 'string',
        'format' => 'uri',
    ),
);

```

A request with `[ "https://example.org/hello world", "https://example.org/hello%20world" ]` would pass validation because each string value is different. However, after `esc_url_raw` converted the space in the first url to `%20` the values would be identical.

In this case `rest_sanitize_value_from_schema` would return an error. As such, you should always validate and sanitize parameters.

### Objects

Specifying a `type` of `object` requires data to be an object, but that is only half the validation story. You’ll also want to enforce the format of each object’s property. This is done by specifying a map of property names to JSON Schemas that object members must conform to using the `properties` keyword.

For example, the following schema requires an object where the property `name` is a string and `color` is a hex color.

```php
array(
    'type'       => 'object',
    'properties' => array(
        'name'  => array(
            'type' => 'string',
        ),
        'color' => array(
            'type'   => 'string',
            'format' => 'hex-color',        
        ),
    ),
);

```

This would pass validation.

```json
{
  "name": "Primary",
  "color": "#ff6d69"
}

```

While this would fail validation.

```json
{
  "name": "Primary",
  "color": "orange"
}

```

#### Required Properties

By default, any properties listed for an object are optional, so while it might be unexpected, the following would also pass validation for the previous schema.

```json
{
  "name": "Primary"
}

```

There are two mechanisms for requiring a property to be provided.

##### Version 3 Syntax

While WordPress mostly follows JSON Schema Version 4, one way that it doesn’t is with the syntax for defining required properties. The predominant way is using JSON Schema Version 3 syntax by adding the `required` keyword to each property’s definition.

```php
array(
    'type'       => 'object',
    'properties' => array(
        'name'  => array(
            'type'     => 'string',
            'required' => true,
        ),
        'color' => array(
            'type'     => 'string',
            'format'   => 'hex-color',
            'required' => true,        
        ),
    ),
);

```

##### Version 4 syntax

WordPress also supports JSON Schema Version 4 required property syntax where the list of required properties for an object is defined as an array of property names. This can be particularly helpful when specifying that a meta value has a list of required properties.

Given the following meta field.

```php
register_post_meta( 'post', 'fixed_in', array(
    'type'         => 'object',
    'show_in_rest' => array(
        'single' => true,
        'schema' => array(
            'required'   => array( 'revision', 'version' ),
            'type'       => 'object',
            'properties' => array(
                'revision' => array(
                    'type' => 'integer',
                ),
                'version'  => array(
                    'type' => 'string',
                ),
            ),
        ),
    ),
) );

```

The following request would fail validation.

```json
{
    "title": "Check required properties",
    "content": "We should check that required properties are provided",
    "meta": {
        "fixed_in": {
            "revision": 47089
        }
    }
}

```

If the `fixed_in` meta field was omitted entirely, no error would be generated. An object that defines a list of required properties does not indicate that the object itself is required to be submitted. Just that if the object is included, that the listed properties must also be included as well.

Version 4 syntax is not supported for an endpoint’s top level schema in `WP_REST_Controller::get_item_schema()`. Given the following schema, a user could successfully submit a request without the title or content properties. This is because the schema document is not itself used for validation, but instead transformed to a list of parameter definitions.

```php
array(
    '$schema'    => 'http://json-schema.org/draft-04/schema#',
    'title'      => 'my-endpoint',
    'type'       => 'object',
    'required'   => array( 'title', 'content' ),
    'properties' => array(
        'title'   => array(
            'type' => 'string',
        ),
        'content' => array(
            'type' => 'string',
        ),
    ),
);

```

#### additionalProperties

Perhaps unintuitively, by default JSON Schema also allows providing additional properties that are not specified in the schema. As such, the following would pass validation.

```json
{
  "name": "Primary",
  "color": "#ff6d69",
  "description": "The primary color to use in the theme."
}

```

This can be customized using the `additionalProperties` keyword. Setting `additionalProperties` to false will reject data that has unknown properties.

```php
array(
    'type'                 => 'object',
    'additionalProperties' => false,
    'properties'           => array(
        'name'  => array(
            'type' => 'string',
        ),
        'color' => array(
            'type'   => 'string',
            'format' => 'hex-color',        
        ),
    ),
);

```

The `additionalProperties` keyword can also be set to a schema of its own. This would require that the values for any unknown properties match the given schema.

One way this can be helpful is when you want to accept a list of values that each have their own unique key. For example:

```php
array(
    'type'                 => 'object',
    'properties'           => array(),
    'additionalProperties' => array(
        'type'       => 'object',
        'properties' => array(
            'name'  => array(
                'type'     => 'string',
                'required' => true,
            ),
            'color' => array(
                'type'     => 'string',
                'format'   => 'hex-color',
                'required' => true,        
            ),
        ),    
    ),
);

```

This would pass validation.

```json
{
  "primary": {
    "name": "Primary",
    "color": "#ff6d69"
  },
  "secondary": {
    "name": "Secondary",
    "color": "#fecc50"
  }
}

```

While this would fail validation.

```json
{
  "primary": {
    "name": "Primary",
    "color": "#ff6d69"
  },
  "secondary": "#fecc50"
}

```

#### patternProperties

The `patternProperties` keyword is similar to the `additionalProperties` keyword, but allows for asserting the property matches a regex pattern. The keyword is an object where each property is a regex pattern and its value is the JSON Schema used to validate properties that match that pattern.

For example, this schema requires that each value is a hex color and the property must only contain “word” characters.

```php
array(
  'type'                 => 'object',
  'patternProperties'    => array(
    '^\\w+$' => array(
      'type'   => 'string',
      'format' => 'hex-color',
    ),
  ),
  'additionalProperties' => false,
);

```

This would pass validation.

```json
{
  "primary": "#ff6d69",
  "secondary": "#fecc50"
}

```

While this would fail validation.

```json
{
  "primary": "blue",
  "$secondary": "#fecc50"
}

```

When the REST API validates the `patternProperties` schema, if a property doesn’t match any of the patterns, the property will be allowed and not have any validation applied to its contents. While this may be confusing, it behaves the same as the `properties` keyword. If this logic isn’t desired, add `additionalProperties` to the schema to disallow non-matching properties.

#### minProperties and maxProperties

The `minItems` and `maxItems` keywords can be used for the `array` type. The `minProperties` and `maxProperties` introduces this same functionality for the `object` type. This can be helpful when using `additionalProperties` to have a list of objects with unique keys.

```php
array(
  'type'                 => 'object',
  'additionalProperties' => array(
    'type'   => 'string',
    'format' => 'hex-color',
  ),
  'minProperties'        => 1,
  'maxProperties'        => 3,
);

```

This would pass validation.

```json
{
  "primary": "#52accc",
  "secondary": "#096484"
}

```

While this would fail validation.

```json
{
  "primary": "#52accc",
  "secondary": "#096484",
  "tertiary": "#07526c"
}

```

The `exclusiveMinimum` and `exclusiveMaximum` keywords do not apply, they are only valid for the `number` and `integer` types.

### Type agnostic keywords

#### oneOf and anyOf

These are advanced keywords that allow for the JSON Schema validator to choose one of many schemas to use when validating a value. The `anyOf` keyword allows for a value to match at least one of the given schemas. Whereas, the `oneOf` keyword requires the value match *exactly* one schema.

For example, this schema allows for submitting an array of “operations” to an endpoint. Each operation can either be a “crop” or a “rotation”.

```php
array(
    'type'  => 'array',
    'items' => array(
        'oneOf' => array(
            array(
                'title'      => 'Crop',
                'type'       => 'object',
                'properties' => array(
                    'operation' => array(
                        'type' => 'string',
                        'enum' => array(
                            'crop',
                        ),
                    ),
                    'x'         => array(
                        'type' => 'integer',
                    ),
                    'y'         => array(
                        'type' => 'integer',
                    ),
                ),
            ),
            array(
                'title'      => 'Rotation',
                'type'       => 'object',
                'properties' => array(
                    'operation' => array(
                        'type' => 'string',
                        'enum' => array(
                            'rotate',
                        ),
                    ),
                    'degrees'   => array(
                        'type'    => 'integer',
                        'minimum' => 0,
                        'maximum' => 360,
                    ),
                ),
            ),
        ),
    ),
);

```

The REST API will loop over each schema specified in the `oneOf` array and look for a match. If exactly one schema matches, then validation will succeed. If more than one schema matches, validation will fail. If no schemas match, then the validator will try to find the closest matching schema and return an appropriate error message.

> operations\[0\] is not a valid Rotation. Reason: operations\[0\]\[degrees\] must be between 0 (inclusive) and 360 (inclusive)

To generate more helpful error messages, it is highly recommended to give each `oneOf` or `anyOf` schema a `title` property.

## Changelog

### WordPress 5.6

- Support the `multipleOf` JSON Schema keyword. [r49063](https://core.trac.wordpress.org/changeset/49063)
- Support the `minProperties` and `maxProperties` JSON Schema keywords. [r49053](https://core.trac.wordpress.org/changeset/49053)
- Support the `patternProperties` JSON Schema keyword. [r49082](https://core.trac.wordpress.org/changeset/49082)
- Support the `anyOf` and `oneOf` JSON Schema keywords. [r49246](https://core.trac.wordpress.org/changeset/49246)

### WordPress 5.5

- Improve multi-type JSON Schema support. [r48306](https://core.trac.wordpress.org/changeset/48306)
- Check required properties are provided when validating an object. [r47809](https://core.trac.wordpress.org/changeset/47809)
- Only validate the `format` keyword if the `type` is a `string`. [r48300](https://core.trac.wordpress.org/changeset/48300)
- Support the `uuid` JSON Schema format. [47753](https://core.trac.wordpress.org/changeset/47753)
- Support the `hex-color` JSON Schema format. [r47450](https://core.trac.wordpress.org/changeset/47450)
- Support the `pattern` JSON Schema keyword. [r47810](https://core.trac.wordpress.org/changeset/47810)
- Support the `minItems`, `maxItems`, and `uniqueItems` JSON Schema keywords. [r47923](https://core.trac.wordpress.org/changeset/47923) [r48357](https://core.trac.wordpress.org/changeset/48357)
- Support the `minLength` and `maxLength` JSON Schema keywords. [r47627](https://core.trac.wordpress.org/changeset/47627)

### WordPress 5.4

- Support type juggling an empty string to an empty object. [r47362](https://core.trac.wordpress.org/changeset/47362)

### WordPress 5.3

- Support the `null` primitive type and implement basic multi-type handling. [r46249](https://core.trac.wordpress.org/changeset/46249)
- Support validating `additionalProperties` against a schema. [r45807](https://core.trac.wordpress.org/changeset/45807)

### WordPress 4.9

- Support the `object` primitive type. [r41727](https://core.trac.wordpress.org/changeset/41727)

---

# Adding REST API Support For Custom Content Types <a name="rest-api/extending-the-rest-api/adding-rest-api-support-for-custom-content-types" />

Source: https://developer.wordpress.org/rest-api/extending-the-rest-api/adding-rest-api-support-for-custom-content-types/

The REST API can create routes for custom post types and custom taxonomies inside of the `wp/v2` namespace, using the same controllers as the default post type or taxonomy term controllers. Alternatively, you can use your own controllers and namespace. This document will cover using the default controllers for your custom content type’s API routes. This is the easiest way and ensures the highest chance of compatibility with third parties.

## Registering A Custom Post Type With REST API Support

When registering a custom post type, if you want it to be available via the REST API you should set `'show_in_rest' => true` in the arguments passed to `register_post_type`. Setting this argument to true will add a route in the `wp/v2` namespace.

```php
/**
 * Register a book post type, with REST API support
 *
 * Based on example at: https://developer.wordpress.org/reference/functions/register_post_type
 */
add_action( 'init', 'my_book_cpt' );
function my_book_cpt() {
    $args = array(
      'public'       => true,
      'show_in_rest' => true,
      'label'        => 'Books'
    );
    register_post_type( 'book', $args );
}

```

You can optionally set the `rest_base` argument to change the base url, which will otherwise default to the post type’s name. In the example below, “books” is used as the value of `rest_base`. This will make the URL for the route `wp-json/wp/v2/books` instead of `wp-json/wp/v2/book/`, which would have been the default.

In addition, you can pass an argument for `rest_controller_class`. This class must be a subclass of `WP_REST_Controller`. By default, `WP_REST_Posts_Controller` is used as the controller. If you are using a custom controller, then you likely will not be within the `wp/v2` namespace.

Here is an example of registering a post type, with full labels, support for the REST API, a customized rest\_base, and explicit registry of the default controller:

```php
/**
 * Register a book post type, with REST API support
 *
 * Based on example at: https://developer.wordpress.org/reference/functions/register_post_type
 */
add_action( 'init', 'my_book_cpt' );
function my_book_cpt() {
  $labels = array(
    'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'your-plugin-textdomain' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'book' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'show_in_rest'       => true,
    'rest_base'          => 'books',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'book', $args );
}

```

If you are using a custom `rest_controller_class`, then the REST API is unable to automatically determine the route for a given post. In this case, you can use the `rest_route_for_post` filter to provide this information. This allows for your custom post type to be properly formatted in the Search endpoint and enables automated discovery links.

```php
function my_plugin_rest_route_for_post( $route, $post ) {
    if ( $post->post_type === 'book' ) {
        $route = '/wp/v2/books/' . $post->ID;
    }

    return $route;
}
add_filter( 'rest_route_for_post', 'my_plugin_rest_route_for_post', 10, 2 );

```

## Registering A Custom Taxonomy With REST API Support

Registering a custom taxonomy with REST API support is very similar to registering a custom post type: pass `'show_in_rest' => true` in the arguments passed to `register_taxonomy`. You may optionally pass `rest_base` to change the base url for the taxonomy’s routes.

The default controller for taxonomies is `WP_REST_Terms_Controller`. You may modify this with the `rest_controller_class` if you choose to use a custom controller.

Here is an example of how to register a custom taxonomy with REST API support:

```php
/**
 * Register a genre post type, with REST API support
 *
 * Based on example at: https://developer.wordpress.org/reference/functions/register_taxonomy/
 */
add_action( 'init', 'my_book_taxonomy', 30 );
function my_book_taxonomy() {

  $labels = array(
    'name'              => _x( 'Genres', 'taxonomy general name' ),
    'singular_name'     => _x( 'Genre', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Genres' ),
    'all_items'         => __( 'All Genres' ),
    'parent_item'       => __( 'Parent Genre' ),
    'parent_item_colon' => __( 'Parent Genre:' ),
    'edit_item'         => __( 'Edit Genre' ),
    'update_item'       => __( 'Update Genre' ),
    'add_new_item'      => __( 'Add New Genre' ),
    'new_item_name'     => __( 'New Genre Name' ),
    'menu_name'         => __( 'Genre' ),
  );

  $args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'genre' ),
    'show_in_rest'          => true,
    'rest_base'             => 'genre',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
  );

  register_taxonomy( 'genre', array( 'book' ), $args );

}

```

If you are using a custom `rest_controller_class`, then the REST API is unable to automatically determine the route for a given term. In this case, you can use the `rest_route_for_term` filter to provide this information. This allows for your custom taxonomy to be properly formatted in the Search endpoint and enables automated discovery links.

```php
function my_plugin_rest_route_for_term( $route, $term ) {
    if ( $term->taxonomy === 'genre' ) {
        $route = '/wp/v2/genre/' . $term->term_id;
    }

    return $route;
}
add_filter( 'rest_route_for_term', 'my_plugin_rest_route_for_term', 10, 2 );

```

## Adding REST API Support To Existing Content Types

If you need to add REST API support for a custom post type or custom taxonomy you do not control, for example a theme or plugin you are using, you can use the `register_post_type_args` filter hook that exists since WordPress version 4.6.0.

```php
/**
 * Add REST API support to an already registered post type.
 */
add_filter( 'register_post_type_args', 'my_post_type_args', 10, 2 );

function my_post_type_args( $args, $post_type ) {

    if ( 'book' === $post_type ) {
        $args['show_in_rest'] = true;

        // Optionally customize the rest_base or rest_controller_class
        $args['rest_base']             = 'books';
        $args['rest_controller_class'] = 'WP_REST_Posts_Controller';
    }

    return $args;
}

```

For custom taxonomies it is almost the same. You can use the `register_taxonomy_args` filter that exists since WordPress version 4.4.0.

```php
/**
 * Add REST API support to an already registered taxonomy.
 */
add_filter( 'register_taxonomy_args', 'my_taxonomy_args', 10, 2 );

function my_taxonomy_args( $args, $taxonomy_name ) {

    if ( 'genre' === $taxonomy_name ) {
        $args['show_in_rest'] = true;

        // Optionally customize the rest_base or rest_controller_class
        $args['rest_base']             = 'genres';
        $args['rest_controller_class'] = 'WP_REST_Terms_Controller';
    }

    return $args;
}

```

## Custom Link Relationships

Taxonomies &amp; custom post types have a built-in association within WordPress, but what if you want to establish a link between two custom post types? This is not supported formally within WordPress itself, but we can create our own connections between arbitrary content types using the `_link` relation.

---

# Modifying Responses <a name="rest-api/extending-the-rest-api/modifying-responses" />

Source: https://developer.wordpress.org/rest-api/extending-the-rest-api/modifying-responses/

The default endpoints of the WordPress REST API are designed to return data by default that provides for the majority of sites and use cases, but there are often situations where you will need to access or expose additional data in the responses for various object types.

As with the rest of WordPress, the REST API is designed to be highly extensible to fit these needs. This guide details how to add additional data to the responses of default endpoints using the `register_rest_field` and `register_meta` functions. You can use these functions to add fields to any of the object types supported by the REST API. These custom fields can support both get and update operations.

## Important Note about Changing Responses

Changing or removing data from core REST API endpoint responses can break plugins or WordPress core behavior, and should be avoided wherever possible.

The API exposes many fields on API responses, including things you might not need, or which might not fit into how your site works. While it’s tempting to modify or remove fields from REST API responses, this **will** cause problems with API clients that expect standard responses. This includes mobile clients, third party tools to help you manage your site, or wp-admin itself.

You may only need a small amount of data, but it’s important to keep in mind that the API is about exposing an interface to all clients, not just the feature you’re working on. Changing responses is dangerous.

Adding fields is not dangerous, so if you need to modify data, it’s much better to duplicate the field instead with your modified data. Removing fields is never encouraged; if you need to get back a smaller subset of data, use the [`_fields` parameter](#rest-api/using-the-rest-api/global-parameters) or work with contexts instead.

If you must remove fields from an existing context you should ensure that the behavior is **opt-in**, for example by providing a custom query parameter to trigger the field removal.

The API cannot prevent you from changing responses, but the code is structured to strongly discourage doing so. Internally, field registration is powered by filters, and these can be used if you absolutely have no other choice.

## Using `register_rest_field` vs `register_meta`

There are two methods which can be used to add data to WordPress REST API responses, `register_rest_field` and `register_meta`.

`register_rest_field` may be used to add arbitrary fields to any REST API response, and can be used to both read and write data using the API. To register a new REST field you must provide your own callback functions to get or set the field’s value, as well as manually specify your own schema definition for the field.

`register_meta` is used to whitelist an existing custom meta value for access through the REST API. By setting a meta field’s `show_in_rest` parameter to `true`, that field’s value will be exposed on a `.meta` key in the endpoint response, and WordPress will handle setting up the callbacks for reading and writing to that meta key. This is much simpler than `register_rest_field`, with one caveat:

  
Prior to WordPress 4.9.8, meta fields set to `show_in_rest` using `register_meta` are registered for all objects of a given type. If one custom post type shows a meta field, all custom post types will show that meta field. As of WordPress 4.9.8 it’s possible to use `register_meta` with the `object_subtype` argument that allows one to reduce the usage of the meta key to a particular post type.  

Prior to WordPress 5.3, `register_meta` could only support scalar values (`string`, `integer`, `number` and `boolean`). WordPress 5.3 adds support for the `object` and `array` types.

## Adding Custom Fields to API Responses

### Using `register_rest_field`

The [`register_rest_field`](#reference/functions/register_rest_field) function is the most flexible way to add fields to REST API response objects. It accepts three parameters:

1. `$object_type`: The name of the object, as a string, or an array of the names of objects for which the field is being registered. This may be a core type like “post”, “terms”, “meta”, “user” or “comment”, but can also be the string name of a custom post type.
2. `$attribute`: The name of the field. This name will be used to define the key in the response object.
3. `$args`: An array with keys that define the callback functions used to retrieve the value of the field (‘get\_callback’), to update the value of the field (‘update\_callback’), and to define its schema (‘schema’).

Each of the keys of the $args array is optional, but if not used, that capability will not be added. This means that you may specify a callback function for reading the value and omit the update callback to make that field read-only if desired.

Fields should be registered at the `rest_api_init` action. Using this action rather than `init` will prevent the field registration from happening during requests to WordPress that do not use the REST API.

### Examples

#### Read and write an extra field in comment responses

```php
<?php
add_action( 'rest_api_init', function () {
    register_rest_field( 'comment', 'karma', array(
        'get_callback' => function( $comment_arr ) {
            $comment_obj = get_comment( $comment_arr['id'] );
            return (int) $comment_obj->comment_karma;
        },
        'update_callback' => function( $karma, $comment_obj ) {
            $ret = wp_update_comment( array(
                'comment_ID'    => $comment_obj->comment_ID,
                'comment_karma' => $karma
            ) );
            if ( false === $ret ) {
                return new WP_Error(
                  'rest_comment_karma_failed',
                  __( 'Failed to update comment karma.' ),
                  array( 'status' => 500 )
                );
            }
            return true;
        },
        'schema' => array(
            'description' => __( 'Comment karma.' ),
            'type'        => 'integer'
        ),
    ) );
} );

```

This example illustrates adding a field called `karma` to the response for posts. It works because the `comment_karma` field exists, but is unused by core. Note that an actual implementation of comment karma would need to use a separate endpoint.

This is a basic example; carefully consider what permissions checks or error handling may be required for your specific field.

### How `register_rest_field` Works

The global variable `$wp_rest_additional_fields` is used internally by the REST API infrastructure to hold the response fields to be added to each object type. The REST API provides `register_rest_field` as a utility function for adding to this global variable. Adding to the global variable directly should be avoided to ensure forward-compatibility.

For each object type — posts, or users, terms, comments, etc. — `$wp_rest_additional_fields` contains an array of field definitions containing the callbacks used to retrieve or update the field’s value.

## Working with registered meta in the REST API

The [`register_meta`](#reference/functions/register_meta) function simplifies the process of defining a meta field for a particular object type. By setting `'show_in_rest' => true` when registering a new meta key, that key will be accessible through the REST API.

### Read and write a post meta field in post responses

```php
<?php
// The object type. For custom post types, this is 'post';
// for custom comment types, this is 'comment'. For user meta,
// this is 'user'.
$object_type = 'post';
$meta_args = array( // Validate and sanitize the meta value.
    // Note: currently (4.7) one of 'string', 'boolean', 'integer',
    // 'number' must be used as 'type'. The default is 'string'.
    'type'         => 'string',
    // Shown in the schema for the meta key.
    'description'  => 'A meta key associated with a string meta value.',
    // Return a single value of the type.
    'single'       => true,
    // Show in the WP REST API response. Default: false.
    'show_in_rest' => true,
);
register_meta( $object_type, 'my_meta_key', $meta_args );

```

This example shows how to allow reading and writing of a post meta field. This will allow that field to be updated via a POST request to `wp-json/wp/v2/posts/<post-id>` or created along with a post via a POST request to `wp-json/wp/v2/posts/`.

Note that for meta fields registered on custom post types, the post type must have `custom-fields` support. Otherwise the meta fields will not appear in the REST API.

### Post Type Specific Meta

WordPress 4.9.8 adds support for registering meta for a specific post type or taxonomy by using the `register_post_meta` and `register_term_meta` functions. They follow the same rules as `register_meta` but accept a post type or taxonomy as their first parameter instead of an object type. The following code would register the `my_meta_key` example above, but only for the `page` custom post type.

```php
$meta_args = array(
    'type'         => 'string',
    'description'  => 'A meta key associated with a string meta value.',
    'single'       => true,
    'show_in_rest' => true,
);
register_post_meta( 'page', 'my_meta_key', $meta_args );

```

### Object Meta Type

WordPress 5.3 adds support for using the `object` [type](https://tools.ietf.org/html/draft-zyp-json-schema-04#section-3.5) when registering meta. Importantly `object` refers to a JSON object, this is equivalent to an associative array in PHP.

When registering `object` meta, setting the `type` to `object` is not sufficient, you also need to inform WordPress of what properties to allow. This is done by writing a JSON Schema when registering the metadata.

For instance, the following code sample registers a post meta field called “release” that accepts the given JSON data.

```json
{
  "meta": {
    "release": {
      "version": "5.2",
      "artist": "Jaco"
    }
  }
}

```

```php
register_post_meta(
    'post',
    'release',
    array(
        'single'       => true,
        'type'         => 'object',
        'show_in_rest' => array(
            'schema' => array(
                'type'       => 'object',
                'properties' => array(
                    'version' => array(
                        'type' => 'string',
                    ),
                    'artist'  => array(
                        'type' => 'string',
                    ),
                ),
            ),
        ),
    )
);

```

Notice that `show_in_rest` becomes an array instead of `true` and a Json Schema is specified for the `schema` key. Each property is then listed in the `properties` array. At a minimum, each property must specify a `type`, but any JSON Schema keyword that `rest_validate_value_from_schema` understands can be used as well.

#### Additional Properties

By default, the list of properties is a strict whitelist. If a property is sent in the request that is not listed, the REST API will return an error: `your_property is not a valid property of Object.`. If you don’t know the property names ahead of time the `additionalProperties` keyword can be used. `additionalProperties` accepts a JSON Schema that is used to validate the unknown properties. For instance, to enforce that any additional properties are numbers, the following code can be used.

```json
{
  "meta": {
    "release": {
      "version": "5.2",
      "artist": "Jaco",
      "unknown_field": 5.3
    }
  }
}

```

```php
register_post_meta(
    'post',
    'version',
    array(
        'single'       => true,
        'type'         => 'object',
        'show_in_rest' => array(
            'schema' => array(
                'type'                 => 'object',
                'properties'           => array(
                    'version' => array(
                        'type' => 'string',
                    ),
                    'artist'  => array(
                        'type' => 'string',
                    ),
                ),
                'additionalProperties' => array(
                    'type' => 'number',
                ),
            ),
        ),
    )
);

```

`additionalProperties` can be set to true to allow unknown properties of any format, but this is not recommended.

### Array Meta Type

WordPress 5.3 also adds support for using the `array` [type](https://tools.ietf.org/html/draft-zyp-json-schema-04#section-3.5). Importantly `array` refers to a JSON array, this is equivalent to a numeric array in PHP.

When registering `array` meta, setting the `type` to `array` is not sufficient, you need to inform WordPress of what the expected format is of the items in the array. This is done by writing a JSON Schema entry when registering the metadata.

If you do not provide this value, `register_meta` will return false and issue the following warning: `When registering an "array" meta type to show in the REST API, you must specify the schema for each array item in "show_in_rest.schema.items".`

The following code sample registers a post meta field called “projects” that contains a list of project names. It accepts the given JSON data.

```json
{
  "meta": {
    "projects": [
      "WordPress",
      "BuddyPress"
    ]
  }
}

```

```php
register_post_meta(
    'post',
    'projects',
    array(
        'single'       => true,
        'type'         => 'array',
        'show_in_rest' => array(
            'schema' => array(
                'type'  => 'array',
                'items' => array(
                    'type' => 'string',
                ),
            ),
        ),
    )
);

```

Notice that again `show_in_rest` becomes an array instead of `true` and a JSON Schema is specified for the `schema` key.  
The `items` keyword is used to define the JSON schema to validate each array member against. It can be a scalar type like `string` or a complex type like `object`.

For instance, to accept the given JSON data, the following meta registration would be used.

```json
{
  "meta": {
    "projects": [
      {
        "name": "WordPress",
        "website": "https://wordpress.org"
      },
      {
        "name": "BuddyPress",
        "website": "https://buddypress.org"
      }
    ]
  }
}

```

```php
register_post_meta(
    'post',
    'projects',
    array(
        'single'       => true,
        'type'         => 'array',
        'show_in_rest' => array(
            'schema' => array(
                'items' => array(
                    'type'       => 'object',
                    'properties' => array(
                        'name'    => array(
                            'type' => 'string',
                        ),
                        'website' => array(
                            'type'   => 'string',
                            'format' => 'uri',
                        ),
                    ),
                ),
            ),
        ),
    )
);

```

The `array` type enforces that the array keys are sequential integers starting from 0. The array will be reindexed using `array_values`.

### Non-Single Metadata

Non-single meta fields have an array of values per object, instead of one value per object. Each of those values is stored in a separate row in the meta table.

The `array` and `object` types can be used with non-single meta fields as well. For example, if the “release” meta key from earlier had `single` set to `false`, the following JSON data could be accepted.

```json
{
  "meta": {
    "release": [
      {
        "version": "5.2",
        "artist": "Jaco"
      },
      {
        "version": "5.1",
        "artist": "Betty"
      }
    ]
  }
}

```

This would result in two meta database rows. The first containing `{ "version": "5.2", "artist": "Jaco" }` and the second containing `{ "version": "5.1", "artist": "Betty" }`.

Similarly, the following data would be accepted for the “projects” example if it had set `single` to `false`.

```json
{
  "meta": {
    "projects": [
      [
        "WordPress",
        "BuddyPress"
      ],
      [
        "bbPress"
      ]
    ]
  }
}

```

This would result in two meta database rows. The first containing `[ "WordPress", "BuddyPress" ]` and the second containing `[ "bbPress" ]`.

### Invalid Stored Values

If the existing value for a meta field does not validate against the registered type and schema, the value for that meta field will be returned as null. If that null value is passed back to the API when doing an update request, you’ll receive a `rest_invalid_stored_value` error: `The %s property has an invalid stored value, and cannot be updated to null.`. To fix this, either update the meta key with a valid value or omit that property from your request.

### Default Metadata Values

WordPress 5.5 adds [official support](https://make.wordpress.org/core/2020/08/04/registering-default-values-for-meta-data/) for specifying a default value for metadata if no value is defined. For example, with this code snippet the `price` meta field will be set to `0.00` in the REST API response if a value is not yet.

```php
register_post_meta(
     'product',
     'price',
     array(
         'single'  => true,
         'type'    => 'string',
         'default' => '0.00',
     )
 );

```

## Adding Links to the API Response

WordPress generates a list of links associated with the queried resource to make it easier to navigate to related resources.

```json
{
 "_links": {
    "self": [
      {
        "href": "https://make.wordpress.org/core/wp-json/wp/v2/posts/28312"
      }
    ],
    "collection": [
      {
        "href": "https://make.wordpress.org/core/wp-json/wp/v2/posts"
      }
    ],
    "author": [
      {
        "embeddable": true,
        "href": "https://make.wordpress.org/core/wp-json/wp/v2/users/8670591"
      }
    ],
    "replies": [
      {
        "embeddable": true,
        "href": "https://make.wordpress.org/core/wp-json/wp/v2/comments?post=28312"
      }
    ],
    "wp:term": [
      {
        "taxonomy": "category",
        "embeddable": true,
        "href": "https://make.wordpress.org/core/wp-json/wp/v2/categories?post=28312"
      },
      {
        "taxonomy": "post_tag",
        "embeddable": true,
        "href": "https://make.wordpress.org/core/wp-json/wp/v2/tags?post=28312"
      }
    ]
  }
}

```

*A sample of links from a Make.WordPress.org post*

While these links will appear under the `_links` property in the JSON response object, it is not stored in `WP_REST_Response::$data` or accessible via `WP_REST_Response::get_data()`. Instead, the server will append the link data to the response right before echoing the response data.

Custom links can be added to the response by using the `WP_REST_Response::add_link()` method. This method accepts three parameters, the link relation, the URL and optionally a list of link attributes. For example, to add the `author` and `wp:term` link.

```php
<?php
$response->add_link( 'author', rest_url( "/wp/v2/users/{$post->post_author}" ) );

$response->add_link( 'https://api.w.org/term', add_query_arg( 'post', $post->ID, rest_url( "/wp/v2/{$tax_base}" ) ) );

```

The link relation MUST be either a [registered link relation from the IANA](https://www.iana.org/assignments/link-relations/link-relations.xhtml) or a URI that is under your control.

`author` is a registered link relation described as “the context’s author”, we use that to point to the WordPress user who wrote the post. No link relation exists that describes the terms associated with a post, so WordPress uses the `https://api.w.org/term` URL. This is transformed to`wp:term` when generating the response by using a CURIE.

The third parameter of `add_link()` is a list of custom attributes. The `embeddable` attribute can be used to include the linked resource appears in the `_embedded` section of the repsonse when using the `_embed` query parameter. If multiple links are added with the same relation, the embedded responses will be in the same order the links were added in.

```php
<?php
$response->add_link( 'author', rest_url( "/wp/v2/users/{$post->post_author}" ), array(
    'embeddable' => true,
) );
$response->add_link( 'author', rest_url( "/wp/v2/users/{$additional_author}" ), array(
    'embeddable' => true,
) );

```

*A sample implementation of linking to multi-author posts.*

```json
{
  "_links": {
    "author": [
      {
        "embeddable": true,
        "href": "https://yourwebsite.com/wp-json/wp/v2/users/1"
      },
      {
        "embeddable": true,
        "href": "https://yourwebsite.com/wp-json/wp/v2/users/2"
      }
    ]
  },
  "_embedded": {
    "author": [
      {
        "id": 1,
        "name": "Primary Author"
      },
      {
        "id": 2,
        "name": "Secondary Author"
      }
    ]
  }
}

```

*The order links are added is maintained.*

### Registering a CURIE

WordPress version 4.5 introduced support for Compact URIs, or CURIEs. This makes it possible to reference links by a much simpler identifier than the full URL which could easily be quite lengthy.

A CURIE is registered using the `rest_response_link_curies` filter. For example.

```php
<?php
function my_plugin_prefix_register_curie( $curies ) {

    $curies[] = array(
        'name'      => 'my_plugin',
        'href'      => 'https://api.mypluginurl.com/{rel}',
        'templated' => true,
    );

    return $curies;
}

```

This will convert link URLs from `https://api.mypluginurl.com/my_link` to`my\_plugin:my\_link`in the API response. The full URL must still be used when adding links using`[WP\_REST\_Response::add\_link()](#reference/classes/wp_rest_response/add_link) `.

---

# Adding Custom Endpoints <a name="rest-api/extending-the-rest-api/adding-custom-endpoints" />

Source: https://developer.wordpress.org/rest-api/extending-the-rest-api/adding-custom-endpoints/

The WordPress REST API is more than just a set of default routes. It is also a tool for creating custom routes and endpoints. The WordPress front-end provides a default set of URL mappings, but the tools used to create them (e.g. the Rewrites API, as well as the query classes: `WP_Query`, `WP_User`, etc) are also available for creating your own URL mappings, or custom queries.

This document details how to create a new and completely custom route with its own endpoints. We’ll first work through a short example and then expand it out to the full controller pattern as used internally.

## Bare Basics

So you want to add custom endpoints to the API? Fantastic! Let’s get started with a simple example.  
Let’s start with a simple function that looks like this:

```php
<?php
/**
 * Grab latest post title by an author!
 *
 * @param array $data Options for the function.
 * @return string|null Post title for the latest,  * or null if none.
 */
function my_awesome_func( $data ) {
  $posts = get_posts( array(
    'author' => $data['id'],
  ) );

  if ( empty( $posts ) ) {
    return null;
  }

  return $posts[0]->post_title;
}

```

To make this available via the API, we need to register a route. This tells the API to respond to a given request with our function. We do this through a function called `register_rest_route`, which should be called in a callback on `rest_api_init` to avoid doing extra work when the API isn’t loaded.

We need to pass in three things to `register_rest_route`: the namespace, the route we want, and the options. We’ll come back to the namespace in a bit, but for now, let’s pick `myplugin/v1`. We’re going to have the route match anything with `/author/{id}`, where `{id}` is an integer.

```php
<?php
add_action( 'rest_api_init', function () {
  register_rest_route( 'myplugin/v1', '/author/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
  ) );
} );

```

Right now, we’re only registering the one endpoint for the route. The term “route” refers to the URL, whereas “endpoint” refers to the function behind it that corresponds to a method *and* a URL (for more information, see the [Glossary](#rest-api/glossary)).

For example, if your site domain is `example.com` and you’ve kept the API path of `wp-json`, then the full URL would be `http://example.com/wp-json/myplugin/v1/author/(?P\\d+)`.

On sites without pretty permalinks, the route is instead added to the URL as the `rest_route` parameter. For the above example, the full URL would then be `http://example.com/?rest_route=/myplugin/v1/author/(?P\d+)`

Each route can have any number of endpoints, and for each endpoint, you can define the HTTP methods allowed, a callback function for responding to the request and a permissions callback for creating custom permissions. In addition you can define allowed fields in the request and for each field specify a default value, a sanitization callback, a validation callback, and whether the field is required.

### Namespacing

Namespaces are the first part of the URL for the endpoint. They should be used as a vendor/package prefix to prevent clashes between custom routes. Namespaces allows for two plugins to add a route of the same name, with different functionality.

Namespaces in general should follow the pattern of `vendor/v1`, where `vendor` is typically your plugin or theme slug, and `v1` represents the first version of the API. If you ever need to break compatibility with new endpoints, you can then bump this to `v2`.

The above scenario, two routes with the same name, from two different plugins, requires all vendors to use a unique namespace. Failing to do so is analogous to a failure to use a vendor function prefix, class prefix and/ or class namespace in a theme or plugin, which is **very very bad**.

An added benefit of using namespaces is that clients can detect support for your custom API. The API index lists out the available namespaces on a site:

```php
{
  "name": "WordPress Site",
  "description": "Just another WordPress site",
  "url": "http://example.com/",
  "namespaces": [
    "wp/v2",
    "vendor/v1",
    "myplugin/v1",
    "myplugin/v2",
  ]
}

```

If a client wants to check that your API exists on a site, they can check against this list. (For more information, see the [Discovery guide](#rest-api/using-the-rest-api/discovery).)

### Arguments

By default, routes receive all arguments passed in from the request. These are merged into a single set of parameters, then added to the Request object, which is passed in as the first parameter to your endpoint:

```php
<?php
function my_awesome_func( WP_REST_Request $request ) {
  // You can access parameters via direct array access on the object:
  $param = $request['some_param'];

  // Or via the helper method:
  $param = $request->get_param( 'some_param' );

  // You can get the combined, merged set of parameters:
  $parameters = $request->get_params();

  // The individual sets of parameters are also available, if needed:
  $parameters = $request->get_url_params();
  $parameters = $request->get_query_params();
  $parameters = $request->get_body_params();
  $parameters = $request->get_json_params();
  $parameters = $request->get_default_params();

  // Uploads aren't merged in, but can be accessed separately:
  $parameters = $request->get_file_params();
}

```

(To find out exactly how parameters are merged, check the source of `WP_REST_Request::get_parameter_order()`; the basic order is body, query, URL, then defaults.)

Normally, you’ll get every parameter brought in unaltered. However, you can register your arguments when registering your route, which allows you to run sanitization and validation on these.

If the request has the `Content-type: application/json` header set and valid JSON in the body, `get_json_params()` will return the parsed JSON body as an associative array.

Arguments are defined as a map in the key `args` for each endpoint (next to your `callback` option). This map uses the name of the argument of the key, with the value being a map of options for that argument. This array can contain a key for `default`, `required`, `sanitize_callback` and `validate_callback`.

- `default`: Used as the default value for the argument, if none is supplied.
- `required`: If defined as true, and no value is passed for that argument, an error will be returned. No effect if a default value is set, as the argument will always have a value.
- `validate_callback`: Used to pass a function that will be passed the value of the argument. That function should return true if the value is valid, and false if not.
- `sanitize_callback`: Used to pass a function that is used to sanitize the value of the argument before passing it to the main callback.

Using `sanitize_callback` and `validate_callback` allows the main callback to act only to process the request, and prepare data to be returned using the `WP_REST_Response` class. By using these two callbacks, you will be able to safely assume your inputs are valid and safe when processing.

Taking our previous example, we can ensure the parameter passed in is always a number:

```php
<?php
add_action( 'rest_api_init', function () {
  register_rest_route( 'myplugin/v1', '/author/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
    'args' => array(
      'id' => array(
        'validate_callback' => function($param, $request, $key) {
          return is_numeric( $param );
        }
      ),
    ),
  ) );
} );

```

You could also pass in a function name to `validate_callback`, but passing certain functions like `is_numeric` directly will not only throw a warning about having extra parameters passed to it, but will also return `NULL` causing the callback function to be called with invalid data. We hope to [eventually solve this problem in WordPress core](https://core.trac.wordpress.org/ticket/34659).

We could also use something like `'sanitize_callback' => 'absint'` instead, but validation will throw an error, allowing clients to understand what they’re doing wrong. Sanitization is useful when you would rather change the data being input rather than throwing an error (such as invalid HTML).

### Return Value

After your callback is called, the return value is then converted to JSON, and returned to the client. This allows you to return basically any form of data. In our example above, we’re returning either a string or null, which are automatically handled by the API and converted to JSON.

Like any other WordPress function, you can also return a `WP_Error` instance. This error information will be passed along to the client, along with a 500 Internal Service Error status code. You can further customise your error by setting the `status` option in the `WP_Error` instance data to a code, such as `400` for bad input data.  
Taking our example from before, we can now return an error instance:

```php
<?php
/**
 * Grab latest post title by an author!
 *
 * @param array $data Options for the function.
 * @return string|null Post title for the latest,
 * or null if none.
 */
function my_awesome_func( $data ) {
  $posts = get_posts( array(
    'author' => $data['id'],
  ) );

  if ( empty( $posts ) ) {
    return new WP_Error( 'no_author', 'Invalid author', array( 'status' => 404 ) );
  }

  return $posts[0]->post_title;
}

```

When an author doesn’t have any posts belonging to them, this will return a 404 Not Found error to the client:

```
HTTP/1.1 404 Not Found

[{
   "code": "no_author",
   "message": "Invalid author",
   "data": { "status": 404 }
}]

```

For more advanced usage, you can return a `WP_REST_Response` object. This object “wraps” normal body data, but allows you to return a custom status code, or custom headers. You can also [add links to your response](#rest-api/using-the-rest-api/linking-and-embedding). The quickest way to use this is via the constructor:

```php
<?php
$data = array( 'some', 'response', 'data' );

// Create the response object
$response = new WP_REST_Response( $data );

// Add a custom status code
$response->set_status( 201 );

// Add a custom header
$response->header( 'Location', 'http://example.com/' );

```

When wrapping existing callbacks, you should always use `rest_ensure_response()` on the return value. This will take raw data returned from an endpoint and automatically turn it into a `WP_REST_Response` for you. (Note that `WP_Error` is not converted to a `WP_REST_Response` to allow proper error handling.)

Importantly, a REST API route’s callback should *always* return data; it shouldn’t attempt to send the response body itself. This ensures that the additional processing that the REST API server does, like handling linking/embedding, sending headers, etc… takes place. In other words, don’t call `die( wp_json_encode( $data ) );` or `wp_send_json( $data )`. As of [WordPress 5.5](https://core.trac.wordpress.org/changeset/48361), a `_doing_it_wrong` notice is issued if the `wp_send_json()` family of functions is used during a REST API request.

> Return a [WP\_REST\_Response](#reference/classes/wp_rest_response) or [WP\_Error](#reference/classes/wp_error) object from your callback when using the REST API.

### Permissions Callback

You must also register a permissions callback for the endpoint. This is a function that checks if the user can perform the action (reading, updating, etc) before the real callback is called. This allows the API to tell the client what actions they can perform on a given URL without needing to attempt the request first.

This callback can be registered as `permission_callback`, again in the endpoint options next to your `callback` option. This callback should return a boolean or a `WP_Error` instance. If this function returns true, the response will be processed. If it returns false, a default error message will be returned and the request will not proceed with processing. If it returns a `WP_Error`, that error will be returned to the client.

The permissions callback is run after remote authentication, which sets the current user. This means you can use `current_user_can` to check if the user that has been authenticated has the appropriate capability for the action, or any other check based on current user ID. Where possible, you should always use `current_user_can`; instead of checking if the user is logged in (authentication), check whether they can perform the action (authorization).

Once you register a `permission_callback`, you will need to authenticate your requests (for example by including a nonce parameter) or you will receive a `rest_forbidden` error. See [Authentication](#rest-api/using-the-rest-api/authentication) for more details.

Continuing with our previous example, we can make it so that only editors or above can view this author data. We can check a number of different capabilities here, but the best is `edit_others_posts`, which is really the core of what an editor is. To do this, we just need a callback here:

```php
<?php
add_action( 'rest_api_init', function () {
  register_rest_route( 'myplugin/v1', '/author/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
    'args' => array(
      'id' => array(
        'validate_callback' => 'is_numeric'
      ),
    ),
    'permission_callback' => function () {
      return current_user_can( 'edit_others_posts' );
    }
  ) );
} );

```

Note that the permission callback also receives the Request object as the first parameter, so you can do checks based on request arguments if you need to.

As of [WordPress 5.5](https://core.trac.wordpress.org/changeset/48526), if a `permission_callback` is not provided, the REST API will issue a `_doing_it_wrong` notice.

> The REST API route definition for myplugin/v1/author is missing the required permission\_callback argument. For REST API routes that are intended to be public, use \_\_return\_true as the permission callback.

If your REST API endpoint is public, you can use `__return_true` as the permission callback.

```php
<?php
add_action( 'rest_api_init', function () {
  register_rest_route( 'myplugin/v1', '/author/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
    'permission_callback' => '__return_true',
  ) );
} );

```

### Discovery

If you’d like to enable [Resource Discovery](#rest-api/using-the-rest-api/discovery#resource-discovery) for your custom endpoint, you can do so using the `rest_queried_resource_route` filter. For example, consider a [custom query var](#reference/hooks/query_vars) `my-route` that contains the id of your custom resource. The following code snippet would add a discovery link whenever the `my-route` query var is used.

```php
function my_plugin_rest_queried_resource_route( $route ) {
    $id = get_query_var( 'my-route' );
    if ( ! $route && $id ) {
        $route = '/my-ns/v1/items/' . $id;
    }

    return $route;
}
add_filter( 'rest_queried_resource_route', 'my_plugin_rest_queried_resource_route' );

```

Note: If your endpoint is describing a custom post type or custom taxonomy you will most likely want to be using the `rest_route_for_post` or `rest_route_for_term` filters instead.

## The Controller Pattern

The controller pattern is a best practice for working with complex endpoints with the API.

It is recommended that you read [“Extending Internal Classes”](#rest-api/extending-the-rest-api/controller-classes) before reading this section. Doing so will familiarize you with the patterns used by the default routes, which is the best practice. While it is not required that the class you use to process your request extends the `WP_REST_Controller` class or a class that extends it, doing so allows you to inherit work done in those classes. In addition, you can rest assured that you’re following best practices based on the controller methods you’re using.

At their core, controllers are nothing more than a set of commonly named methods to match up with REST conventions, along with some handy helpers. Controllers register their routes in a `register_routes` method, respond to requests with `get_items`, `get_item`, `create_item`, `update_item` and `delete_item`, and have similarly named permission check methods. Following this pattern will ensure you don’t miss any steps or functionality in your endpoints.

To use controllers, you first need to subclass the base controller. This gives you a base set of methods, ready for you to add your own behaviour into.

Once we’ve subclassed the controller, we need to instantiate the class to get it working. This should be done inside of a callback hooked into `rest_api_init`, which ensures we only instantiate the class when we need to. The normal controller pattern is to call `$controller->register_routes()` inside this callback, where the class can then register its endpoints.

## Examples

The following is a “starter” custom route:

```php
<?php

class Slug_Custom_Route extends WP_REST_Controller {

  /**
   * Register the routes for the objects of the controller.
   */
  public function register_routes() {
    $version = '1';
    $namespace = 'vendor/v' . $version;
    $base = 'route';
    register_rest_route( $namespace, '/' . $base, array(
      array(
        'methods'             => WP_REST_Server::READABLE,
        'callback'            => array( $this, 'get_items' ),
        'permission_callback' => array( $this, 'get_items_permissions_check' ),
        'args'                => array(

        ),
      ),
      array(
        'methods'             => WP_REST_Server::CREATABLE,
        'callback'            => array( $this, 'create_item' ),
        'permission_callback' => array( $this, 'create_item_permissions_check' ),
        'args'                => $this->get_endpoint_args_for_item_schema( true ),
      ),
    ) );
    register_rest_route( $namespace, '/' . $base . '/(?P<id>[\d]+)', array(
      array(
        'methods'             => WP_REST_Server::READABLE,
        'callback'            => array( $this, 'get_item' ),
        'permission_callback' => array( $this, 'get_item_permissions_check' ),
        'args'                => array(
          'context' => array(
            'default' => 'view',
          ),
        ),
      ),
      array(
        'methods'             => WP_REST_Server::EDITABLE,
        'callback'            => array( $this, 'update_item' ),
        'permission_callback' => array( $this, 'update_item_permissions_check' ),
        'args'                => $this->get_endpoint_args_for_item_schema( false ),
      ),
      array(
        'methods'             => WP_REST_Server::DELETABLE,
        'callback'            => array( $this, 'delete_item' ),
        'permission_callback' => array( $this, 'delete_item_permissions_check' ),
        'args'                => array(
          'force' => array(
            'default' => false,
          ),
        ),
      ),
    ) );
    register_rest_route( $namespace, '/' . $base . '/schema', array(
      'methods'  => WP_REST_Server::READABLE,
      'callback' => array( $this, 'get_public_item_schema' ),
    ) );
  }

  /**
   * Get a collection of items
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|WP_REST_Response
   */
  public function get_items( $request ) {
    $items = array(); //do a query, call another class, etc
    $data = array();
    foreach( $items as $item ) {
      $itemdata = $this->prepare_item_for_response( $item, $request );
      $data[] = $this->prepare_response_for_collection( $itemdata );
    }

    return new WP_REST_Response( $data, 200 );
  }

  /**
   * Get one item from the collection
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|WP_REST_Response
   */
  public function get_item( $request ) {
    //get parameters from request
    $params = $request->get_params();
    $item = array();//do a query, call another class, etc
    $data = $this->prepare_item_for_response( $item, $request );

    //return a response or error based on some conditional
    if ( 1 == 1 ) {
      return new WP_REST_Response( $data, 200 );
    } else {
      return new WP_Error( 'code', __( 'message', 'text-domain' ) );
    }
  }

  /**
   * Create one item from the collection
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|WP_REST_Response
   */
  public function create_item( $request ) {
    $item = $this->prepare_item_for_database( $request );

    if ( function_exists( 'slug_some_function_to_create_item' ) ) {
      $data = slug_some_function_to_create_item( $item );
      if ( is_array( $data ) ) {
        return new WP_REST_Response( $data, 200 );
      }
    }

    return new WP_Error( 'cant-create', __( 'message', 'text-domain' ), array( 'status' => 500 ) );
  }

  /**
   * Update one item from the collection
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|WP_REST_Response
   */
  public function update_item( $request ) {
    $item = $this->prepare_item_for_database( $request );

    if ( function_exists( 'slug_some_function_to_update_item' ) ) {
      $data = slug_some_function_to_update_item( $item );
      if ( is_array( $data ) ) {
        return new WP_REST_Response( $data, 200 );
      }
    }

    return new WP_Error( 'cant-update', __( 'message', 'text-domain' ), array( 'status' => 500 ) );
  }

  /**
   * Delete one item from the collection
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|WP_REST_Response
   */
  public function delete_item( $request ) {
    $item = $this->prepare_item_for_database( $request );

    if ( function_exists( 'slug_some_function_to_delete_item' ) ) {
      $deleted = slug_some_function_to_delete_item( $item );
      if ( $deleted ) {
        return new WP_REST_Response( true, 200 );
      }
    }

    return new WP_Error( 'cant-delete', __( 'message', 'text-domain' ), array( 'status' => 500 ) );
  }

  /**
   * Check if a given request has access to get items
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|bool
   */
  public function get_items_permissions_check( $request ) {
    //return true; <--use to make readable by all
    return current_user_can( 'edit_something' );
  }

  /**
   * Check if a given request has access to get a specific item
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|bool
   */
  public function get_item_permissions_check( $request ) {
    return $this->get_items_permissions_check( $request );
  }

  /**
   * Check if a given request has access to create items
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|bool
   */
  public function create_item_permissions_check( $request ) {
    return current_user_can( 'edit_something' );
  }

  /**
   * Check if a given request has access to update a specific item
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|bool
   */
  public function update_item_permissions_check( $request ) {
    return $this->create_item_permissions_check( $request );
  }

  /**
   * Check if a given request has access to delete a specific item
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|bool
   */
  public function delete_item_permissions_check( $request ) {
    return $this->create_item_permissions_check( $request );
  }

  /**
   * Prepare the item for create or update operation
   *
   * @param WP_REST_Request $request Request object
   * @return WP_Error|object $prepared_item
   */
  protected function prepare_item_for_database( $request ) {
    return array();
  }

  /**
   * Prepare the item for the REST response
   *
   * @param mixed $item WordPress representation of the item.
   * @param WP_REST_Request $request Request object.
   * @return mixed
   */
  public function prepare_item_for_response( $item, $request ) {
    return array();
  }

  /**
   * Get the query params for collections
   *
   * @return array
   */
  public function get_collection_params() {
    return array(
      'page'     => array(
        'description'       => 'Current page of the collection.',
        'type'              => 'integer',
        'default'           => 1,
        'sanitize_callback' => 'absint',
      ),
      'per_page' => array(
        'description'       => 'Maximum number of items to be returned in result set.',
        'type'              => 'integer',
        'default'           => 10,
        'sanitize_callback' => 'absint',
      ),
      'search'   => array(
        'description'       => 'Limit results to those matching a string.',
        'type'              => 'string',
        'sanitize_callback' => 'sanitize_text_field',
      ),
    );
  }
}

```

---

# Requests <a name="rest-api/requests" />

Source: https://developer.wordpress.org/rest-api/requests/

## Overview

While the WordPress REST API may be called internally within other WordPress code via PHP, the REST API is designed to be used remotely over HTTP. HTTP is the foundation for communication of data over the internet, and any application capable of HTTP requests may make use of the WordPress REST API, whether that application is a client-side JavaScript interface or an application on a remote server running in Python or Java.

The data structure of a request is conveniently handled by the `WP_REST_Request` class.

## [WP\_REST\_Request](#reference/classes/wp_rest_request)

This class is one of the three main infrastructure classes introduced in WordPress 4.4. When an HTTP request is made to an endpoint of the API, the API will automatically create an instance of the `WP_REST_Request` class, matching the provided data. The response object is auto-generated in `WP_REST_Server`‘s `serve_request()` method. Once the request is created and authentication is checked, the request is dispatched and our endpoint callbacks begin to be fired. All of the data stored up in the `WP_REST_Request` object is passed into our callbacks for our registered endpoints. So both our `permission_callback` and `callback` are called with the request object being passed in. This enables us to access the various request properties in our callbacks, so that we can tailor our responses to match the desired output.

## Request Properties

Request objects have many different properties, each of which can be used in various ways. The main properties are the request method, route, headers, parameters and attributes. Let’s break each of these down into their role in a request. If you were to create a request object yourself it would look like this:

```php
$request = new WP_REST_Request( 'GET', '/my-namespace/v1/examples' );

```

In the above code sample we are only specifying that the request object method is `GET` and we should be matching the route `/my-namespace/v1/examples` which in the context of an entire URL would look like this: `https://ourawesomesite.com/wp-json/my-namespace/v1/examples`. The method and route arguments for the`[WP\_REST\_Request](#reference/classes/wp_rest_request)` constructor are used to map the request to the desired endpoint. If the request is made to an endpoint that is not registered then a helpful 404 error message is returned in the response. Let’s look at the various properties in more depth.

### Method

The method property of a request object by default matches the HTTP Request method. The method in most cases will be one of `GET`, `POST`, `PUT`, `DELETE`, `OPTIONS`, or `HEAD`. These methods will be used to match the various endpoints registered to a route. When the API finds a match for the method and route it will fire the callbacks for that endpoint.

The following convention is a best practice for matching HTTP methods: `GET` for read only tasks, `POST` for creation, `PUT` for updating, and `DELETE` for deleting. The request method acts as an indicator for the expected functionality of your endpoints. When you make a `GET` request to a route, you should expect to be returned read only data.

### Route

The route for a request, by default, will match the server environment variable for path info; `$_SERVER['PATH_INFO']`. When you make an HTTP request to a route of the WordPress REST API, the generated `WP_REST_Request` object will be made to match that path, which will hopefully then be matched to a valid endpoint. In short the route for a request is where you want to target your request in the API.

If we had registered a books endpoint, using `GET`, it might live at `https://ourawesomesite.com/wp-json/my-namespace/v1/books`. If we went to that URL in our browser, we would see our collection of books represented in JSON. WordPress will automatically generate the request object for us and handle all of the routing to match endpoints. So since we don’t really have to worry about the routing ourselves understanding how to pass extra data we want in our requests is a much more important thing to understand.

### Headers

HTTP Request headers are simply just extra data about our HTTP request. Request headers can specify caching policy, what our request content is, where the request is coming from and many other things. Request headers do not necessarily interact with our endpoints directly, but the information in the headers helps WordPress know what to do. To pass in data that we want our endpoints to interact with we want to use parameters.

### Parameters

When making requests to the WordPress REST API, most of the additional data passed in will take on the form of parameters. What are parameters? There are four different types in the context of the API. There are route parameters, query parameters, body parameters, and file parameters. Let’s take a look at each one a bit more in depth.

#### URL Params

URL parameters are automatically generated in a `WP_REST_Request` from the path variables in the requested route. What does that mean? Let’s look at this route, which grabs individual books by id: `/my-namespace/v1/books/(?P<id>\d+)`. The odd looking `(?P<id>\d+)` is a path variable. The name of the path variable is ‘`id`‘.

If we were to make a request like `GET https://ourawesomesite.com/wp-json/my-namespace/v1/books/5`,`5`will become the value for our`id`path variable. The`[WP\_REST\_Request](#reference/classes/wp_rest_request)` object will automatically take that path variable and store it as a URL parameter. Now inside of our endpoint callbacks we can interact with that URL parameter really easily. Let’s look at an example.

```php
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

In the example above we see how path variables are stored as URL parameters in the request object. We can then access those parameters in our endpoint callbacks. The above example is a pretty common use case for using URL params. Adding too many path variables to a route can slow down the matching of routes and it can also over complicate registering endpoints, it is advised to use URL parameters sparingly. If we aren’t supposed to use parameters directly in our URL path, then we need another way to pass in extra information to our request. This is where query and body parameters come in, they will typically do most of the heavy lifting in your API.

#### Query Params

Query parameters exist in the query string portion of a URI. The query string portion of a URI in `https://ourawesomesite.com/wp-json/my-namespace/v1/books?per_page=2&genre=fiction` is`?per\_page=2&amp;genre=fiction`. The query string is started by the '`?`' character, the different values within the query string are separated by the '`&amp;`' character. We specified two parameters in our query string;`per\_page`and`genre`. In our endpoint we would want to grab only two books from the fiction genre. We could access those values in a callback like this:`$request\[‘per\_page’\]`, and`$request\[‘genre’\]` ( assuming $request is the name of the argument we are using ). If you are familiar with PHP you have probably used query parameters in your web applications.

In PHP, the query parameters get stored in the superglobal `$_GET`. It is important to note that you should never directly access any superglobals or server variables in your endpoints. It is always best to work with what is provided by the `WP_REST_Request` class. Another common method for passing in variables to an endpoint is to use body parameters.

#### Body Params

Body parameters are key value pairs that are stored in the request body. If you have ever sent a `POST` request via a `<form>`, through cURL, or some other method, then you have used body parameters. With body parameters you can pass them as different content types as well. The default `Content-Type` header for a `POST` request is `x-www-form-urlencoded`. When using `x-www-form-urlencoded`, the parameters are sent like a query string; `per_page=2&amp;genre=fiction`. An HTML form, by default, will bundle up the various inputs and send a `POST` request matching the `x-www-form-urlencoded` pattern.

It is important to note that although the HTTP specification does not prohibit the use of sending body parameters in `GET` requests, it is encouraged that you do not use body parameters in a `GET` request. Body parameters can and should be used for `POST`, `PUT`, and `DELETE` requests.

#### File Params

File parameters in a `WP_REST_Request` object are stored when the request uses a special content type header; `multipart/form-data`. The file data can then be accessed from the request object using `$request->get_file_params()`. The file parameters are equivalent to the PHP superglobal: `$_FILES`. Remember, do not access the superglobals directly only use what the `WP_REST_Request` object provides.

In the endpoint callback we could use `wp_handle_upload()` to then add in the desired files to WordPress’s media uploads directory. The file parameters are only useful for dealing with file data and you should never use them for any other purpose.

### Attributes

`WP_REST_Request` also supports request attributes. The attributes of a request are the attributes registered to the match route. If we made a `GET` request to `my-namespace/v1/books`, and then we called `$request->get_attributes()` inside of our endpoint callback, we would be returned all of the registration options for the `my-namespace/v1/books` endpoint. If we made a `POST` request to the same route and our endpoint callback also returned `$request->get_attributes()`, we would receive a different set of endpoint options registered to the `POST` endpoint callback.

In the attributes we will get a response containing supported methods, options, whether to show this endpoint in the index, a list of registered arguments for the endpoint, and our registered callbacks. It might look something like this:

```js
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

As you can see we have all of the information we have registered to our endpoint already there, ready to go! The request attributes are typically used at a lower level and are handled by the `WP_REST_Server` class, however there are cool things that can be done inside of endpoint callbacks, like restricting accepted parameters to match registered arguments.

The WP REST API is designed for you so that you do not have to mess around with any internals, so some of these more advanced methods of interacting with `WP_REST_Request` are not going to be commonly practiced. The core of using the WP REST API is linked to registering routes and endpoints. Requests are the tool we use to tell the API which endpoint we want to hit. This is most commonly done over HTTP, however we can also use `WP_REST_Request`s internally.

## Internal Requests

The key to making internal requests is using `rest_do_request()`. All you need to do is pass in a request object and you will be returned a response. Because the request is never served by the `WP_REST_Server`, the response data is never encoded into json, meaning we have our response object as a PHP object. This is pretty awesome and enables us to do a lot of interesting things. For one, we can create efficient batch endpoints. From a performance perspective, one of the hurdles is minimizing HTTP requests. We can create batch endpoints that will use `rest_do_request()` to serve all of our requests internally all in one HTTP request. Here is a very simplistic batch endpoint for read only data, so you can see `rest_do_request()` in action.

```php
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

# Reference <a name="rest-api/reference" />

Source: https://developer.wordpress.org/rest-api/reference/

The WordPress REST API is organized around [REST](http://en.wikipedia.org/wiki/Representational_state_transfer), and is designed to have predictable, resource-oriented URLs and to use HTTP response codes to indicate API errors. The API uses built-in HTTP features, like HTTP authentication and HTTP verbs, which can be understood by off-the-shelf HTTP clients, and supports cross-origin resource sharing to allow you to interact securely with the API from a client-side web application.

The REST API uses JSON exclusively as the request and response format, including error responses. While the REST API does not completely conform to the [HAL standard](http://stateless.co/hal_specification.html), it does implement HAL’s `._links` and `._embedded` properties for linking API resources, and is fully discoverable via hyperlinks in the responses.

The REST API provides public data accessible to any client anonymously, as well as private data only available after [authentication](#rest-api/authentication). Once authenticated the REST API supports most content management actions, allowing you to build alternative dashboards for a site, enhance your plugins with more responsive management tools, or build complex single-page applications.

This API reference provides information on the specific endpoints available through the API, their parameters, and their response data format.

## REST API Developer Endpoint Reference

| Resource | Base Route |
|---|---|
| [Posts](#rest-api/reference/posts) | `/wp/v2/posts` |
| [Post Revisions](#rest-api/reference/post-revisions) | `/wp/v2/posts/<id>/revisions` |
| [Categories](#rest-api/reference/categories) | `/wp/v2/categories` |
| [Tags](#rest-api/reference/tags) | `/wp/v2/tags` |
| [Pages](#rest-api/reference/pages) | `/wp/v2/pages` |
| [Page Revisions](#rest-api/reference/page-revisions) | `/wp/v2/pages/<id>/revisions` |
| [Comments](#rest-api/reference/comments) | `/wp/v2/comments` |
| [Taxonomies](#rest-api/reference/taxonomies) | `/wp/v2/taxonomies` |
| [Media](#rest-api/reference/media) | `/wp/v2/media` |
| [Users](#rest-api/reference/users) | `/wp/v2/users` |
| [Post Types](#rest-api/reference/post-types) | `/wp/v2/types` |
| [Post Statuses](#rest-api/reference/post-statuses) | `/wp/v2/statuses` |
| [Settings](#rest-api/reference/settings) | `/wp/v2/settings` |
| [Themes](#rest-api/reference/themes) | `/wp/v2/themes` |
| [Search](#rest-api/reference/search-results) | `/wp/v2/search` |
| [Block Types](#rest-api/reference/block-types) | `/wp/v2/block-types` |
| [Blocks](#rest-api/reference/blocks) | `/wp/v2/blocks` |
| [Block Revisions](#rest-api/reference/block-revisions) | `/wp/v2/blocks/<id>/autosaves/` |
| [Block Renderer](#rest-api/reference/rendered-blocks) | `/wp/v2/block-renderer` |
| [Block Directory Items](#rest-api/reference/block-directory-items) | `/wp/v2/block-directory/search` |
| [Plugins](#rest-api/reference/plugins) | `/wp/v2/plugins` |

## A Distributed API

Unlike many other REST APIs, the WordPress REST API is distributed and available individually on each site that supports it. This means there is no singular API root or base to contact; instead, we have [a discovery process](#rest-api/discovery) that allows interacting with sites without prior contact. The API also exposes self-documentation at the index endpoint, or via an `OPTIONS` request to any endpoint, allowing human- or machine-discovery of endpoint capabilities.

---

# Rendered Blocks <a name="rest-api/reference/rendered-blocks" />

Source: https://developer.wordpress.org/rest-api/reference/rendered-blocks/

## Schema

The schema defines all the fields that exist within a Rendered Block record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `rendered` | The rendered block.  JSON data type: string  Context: `edit` |
|---|---|

## Create a Rendered Block

### Arguments

| `<a href="#schema-name">name</a>` | Unique registered name for the block. |
|---|---|
| `<a href="#schema-context">context</a>` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `edit` |
| `<a href="#schema-attributes">attributes</a>` | Attributes for the block. |
| `<a href="#schema-post_id">post_id</a>` | ID of the post context. |

### Definition

 `POST /wp/v2/block-renderer/<name>`

---

# Search Results <a name="rest-api/reference/search-results" />

Source: https://developer.wordpress.org/rest-api/reference/search-results/

## Schema

The schema defines all the fields that exist within a search result record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | Unique identifier for the object.  JSON data type: integer or string  Read only  Context: `view`, `embed` |
|---|---|
| `title` | The title for the object.  JSON data type: string  Read only  Context: `view`, `embed` |
| `url` | URL to the object.  JSON data type: string,    Format: uri  Read only  Context: `view`, `embed` |
| `type` | Object type.  JSON data type: string  Read only  Context: `view`, `embed`   One of: `post`, `term`, `post-format` |
| `subtype` | Object subtype.  JSON data type: string  Read only  Context: `view`, `embed`   One of: `post`, `page`, `category`, `post_tag` |

## List Search Results

 Query this endpoint to retrieve a collection of search results. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/search`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/search`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `10` |
| `search` | Limit results to those matching a string. |
| `type` | Limit results to items of an object type.  Default: `post`   One of: `post`, `term`, `post-format` |
| `subtype` | Limit results to items of one or more object subtypes.  Default: `any` |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |

---

# Themes <a name="rest-api/reference/themes" />

Source: https://developer.wordpress.org/rest-api/reference/themes/

## Schema

The schema defines all the fields that exist within a theme record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `stylesheet` | The theme's stylesheet. This uniquely identifies the theme.  JSON data type: string  Read only  Context: `` |
|---|---|
| `template` | The theme's template. If this is a child theme, this refers to the parent theme, otherwise this is the same as the theme's stylesheet.  JSON data type: string  Read only  Context: `` |
| `author` | The theme author.  JSON data type: object  Read only  Context: `` |
| `author_uri` | The website of the theme author.  JSON data type: object  Read only  Context: `` |
| `description` | A description of the theme.  JSON data type: object  Read only  Context: `` |
| `is_block_theme` | Whether the theme is a block-based theme.  JSON data type: boolean  Read only  Context: `` |
| `name` | The name of the theme.  JSON data type: object  Read only  Context: `` |
| `requires_php` | The minimum PHP version required for the theme to work.  JSON data type: string  Read only  Context: `` |
| `requires_wp` | The minimum WordPress version required for the theme to work.  JSON data type: string  Read only  Context: `` |
| `screenshot` | The theme's screenshot URL.  JSON data type: string,    Format: uri  Read only  Context: `` |
| `tags` | Tags indicating styles and features of the theme.  JSON data type: object  Read only  Context: `` |
| `textdomain` | The theme's text domain.  JSON data type: string  Read only  Context: `` |
| `theme_supports` | Features supported by this theme.  JSON data type: object  Read only  Context: `` |
| `theme_uri` | The URI of the theme's webpage.  JSON data type: object  Read only  Context: `` |
| `version` | The theme's current version.  JSON data type: string  Read only  Context: `` |
| `status` | A named status for the theme.  JSON data type: string  Context: ``   One of: `inactive`, `active` |

## Retrieve a Theme

### Definition &amp; Example Request

 `GET /wp/v2/themes`

 Query this endpoint to retrieve a specific theme record.

 `$ curl https://example.com/wp-json/wp/v2/themes`

### Arguments

| `status` | Limit result set to themes assigned one or more statuses. |
|---|---|

## Retrieve a Theme

### Definition &amp; Example Request

 `GET /wp/v2/themes/<stylesheet>?)`

 Query this endpoint to retrieve a specific theme record.

 `$ curl https://example.com/wp-json/wp/v2/themes/<stylesheet>?)`

### Arguments

| `stylesheet` | The theme's stylesheet. This uniquely identifies the theme. |
|---|---|

---

# Block Revisions <a name="rest-api/reference/block-revisions" />

Source: https://developer.wordpress.org/rest-api/reference/block-revisions/

## Schema

The schema defines all the fields that exist within a Block Revision record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `author` | The ID for the author of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
|---|---|
| `date` | The date the revision was published, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
| `date_gmt` | The date the revision was published, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | The globally unique identifier for the post.  JSON data type: object  Read only  Context: `view`, `edit` |
| `id` | Unique identifier for the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `modified` | The date the revision was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `modified_gmt` | The date the revision was last modified, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `parent` | The ID for the parent of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `slug` | An alphanumeric identifier for the revision unique to its type.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `title` | The title for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `content` | The content for the post.  JSON data type: object  Context: `view`, `edit` |

## List Block Revisions

 Query this endpoint to retrieve a collection of Block Revisions. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/blocks/<parent>/revisions`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/blocks/<parent>/revisions`

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set. |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by object attribute.  Default: `date`   One of: `date`, `id`, `include`, `relevance`, `slug`, `include_slugs`, `title` |

## Retrieve a Block Revision

### Definition &amp; Example Request

 `GET /wp/v2/blocks/<parent>/revisions/<id>`

 Query this endpoint to retrieve a specific Block Revision record.

 `$ curl https://example.com/wp-json/wp/v2/blocks/<parent>/revisions/<id>`

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `id` | Unique identifier for the revision. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Delete a Block Revision

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `id` | Unique identifier for the revision. |
| `force` | Required to be true, as revisions do not support trashing. |

### Definition

 `DELETE /wp/v2/blocks/<parent>/revisions/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/blocks/<parent>/revisions/<id>`

## Retrieve a Block Revision

### Definition &amp; Example Request

 `GET /wp/v2/blocks/<id>/autosaves`

 Query this endpoint to retrieve a specific Block Revision record.

 `$ curl https://example.com/wp-json/wp/v2/blocks/<id>/autosaves`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Create a Block Revision

### Arguments

| `<a href="#schema-parent">parent</a>` | The ID for the parent of the autosave. |
|---|---|
| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-password">password</a>` | A password to protect access to the content and excerpt. |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-content">content</a>` | The content for the post. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |

### Definition

 `POST /wp/v2/blocks/<id>/autosaves`

## Retrieve a Block Revision

### Definition &amp; Example Request

 `GET /wp/v2/blocks/<parent>/autosaves/<id>`

 Query this endpoint to retrieve a specific Block Revision record.

 `$ curl https://example.com/wp-json/wp/v2/blocks/<parent>/autosaves/<id>`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `id` | The ID for the autosave. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Editor Blocks <a name="rest-api/reference/blocks" />

Source: https://developer.wordpress.org/rest-api/reference/blocks/

## Schema

The schema defines all the fields that exist within a Editor Block record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `date` | The date the post was published, in the site's timezone.  JSON data type: string or null,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
|---|---|
| `date_gmt` | The date the post was published, as GMT.  JSON data type: string or null,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | The globally unique identifier for the post.  JSON data type: object  Read only  Context: `view`, `edit` |
| `id` | Unique identifier for the post.  JSON data type: integer  Read only  Context: `view`, `edit`, `embed` |
| `link` | URL to the post.  JSON data type: string,    Format: uri  Read only  Context: `view`, `edit`, `embed` |
| `modified` | The date the post was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `modified_gmt` | The date the post was last modified, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `slug` | An alphanumeric identifier for the post unique to its type.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `status` | A named status for the post.  JSON data type: string  Context: `view`, `edit`   One of: `publish`, `future`, `draft`, `pending`, `private` |
| `type` | Type of post.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `password` | A password to protect access to the content and excerpt.  JSON data type: string  Context: `edit` |
| `title` | The title for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `content` | The content for the post.  JSON data type: object  Context: `view`, `edit` |
| `meta` | Meta fields.  JSON data type: object  Context: `view`, `edit` |
| `template` | The theme file to use to display the post.  JSON data type: string  Context: `view`, `edit` |

## List Editor Blocks

 Query this endpoint to retrieve a collection of Editor Blocks. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/blocks`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/blocks`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `10` |
| `search` | Limit results to those matching a string. |
| `after` | Limit response to posts published after a given ISO8601 compliant date. |
| `modified_after` | Limit response to posts modified after a given ISO8601 compliant date. |
| `before` | Limit response to posts published before a given ISO8601 compliant date. |
| `modified_before` | Limit response to posts modified before a given ISO8601 compliant date. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by post attribute.  Default: `date`   One of: `author`, `date`, `id`, `include`, `modified`, `parent`, `relevance`, `slug`, `include_slugs`, `title` |
| `search_columns` | Array of column names to be searched. |
| `slug` | Limit result set to posts with one or more specific slugs. |
| `status` | Limit result set to posts assigned one or more statuses.  Default: `publish` |

## Create a Editor Block

### Arguments

| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
|---|---|
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-password">password</a>` | A password to protect access to the content and excerpt. |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-content">content</a>` | The content for the post. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |

### Definition

 `POST /wp/v2/blocks`

## Retrieve a Editor Block

### Definition &amp; Example Request

 `GET /wp/v2/blocks/<id>`

 Query this endpoint to retrieve a specific Editor Block record.

 `$ curl https://example.com/wp-json/wp/v2/blocks/<id>`

### Arguments

| `id` | Unique identifier for the post. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
| `password` | The password for the post if it is password protected. |

## Update a Editor Block

### Arguments

| `<a href="#schema-id">id</a>` | Unique identifier for the post. |
|---|---|
| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-password">password</a>` | A password to protect access to the content and excerpt. |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-content">content</a>` | The content for the post. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |

### Definition

 `POST /wp/v2/blocks/<id>`

### Example Request

 ``

## Delete a Editor Block

### Arguments

| `id` | Unique identifier for the post. |
|---|---|
| `force` | Whether to bypass Trash and force deletion. |

### Definition

 `DELETE /wp/v2/blocks/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/blocks/<id>`

---

# Block Directory Items <a name="rest-api/reference/block-directory-items" />

Source: https://developer.wordpress.org/rest-api/reference/block-directory-items/

## Schema

The schema defines all the fields that exist within a block directory item record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `name` | The block name, in namespace/block-name format.  JSON data type: string  Context: `view` |
|---|---|
| `title` | The block title, in human readable format.  JSON data type: string  Context: `view` |
| `description` | A short description of the block, in human readable format.  JSON data type: string  Context: `view` |
| `id` | The block slug.  JSON data type: string  Context: `view` |
| `rating` | The star rating of the block.  JSON data type: number  Context: `view` |
| `rating_count` | The number of ratings.  JSON data type: integer  Context: `view` |
| `active_installs` | The number sites that have activated this block.  JSON data type: integer  Context: `view` |
| `author_block_rating` | The average rating of blocks published by the same author.  JSON data type: number  Context: `view` |
| `author_block_count` | The number of blocks published by the same author.  JSON data type: integer  Context: `view` |
| `author` | The WordPress.org username of the block author.  JSON data type: string  Context: `view` |
| `icon` | The block icon.  JSON data type: string,    Format: uri  Context: `view` |
| `last_updated` | The date when the block was last updated.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view` |
| `humanized_updated` | The date when the block was last updated, in fuzzy human readable format.  JSON data type: string  Context: `view` |

## List Block Directory Items

 Query this endpoint to retrieve a collection of block directory items. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/block-directory/search`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/block-directory/search`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `10` |
| `term` | Limit result set to blocks matching the search term.  Required: 1 |

---

# Block Types <a name="rest-api/reference/block-types" />

Source: https://developer.wordpress.org/rest-api/reference/block-types/

## Schema

The schema defines all the fields that exist within a block type record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `api_version` | Version of block API.  JSON data type: integer  Read only  Context: `embed`, `view`, `edit` |
|---|---|
| `title` | Title of block type.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `name` | Unique name identifying the block type.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `description` | Description of block type.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `icon` | Icon of block type.  JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `attributes` | Block attributes.  JSON data type: object or null  Read only  Context: `embed`, `view`, `edit` |
| `provides_context` | Context provided by blocks of this type.  JSON data type: object  Read only  Context: `embed`, `view`, `edit` |
| `uses_context` | Context values inherited by blocks of this type.  JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `selectors` | Custom CSS selectors.  JSON data type: object  Read only  Context: `embed`, `view`, `edit` |
| `supports` | Block supports.  JSON data type: object  Read only  Context: `embed`, `view`, `edit` |
| `category` | Block category.  JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `is_dynamic` | Is the block dynamically rendered.  JSON data type: boolean  Read only  Context: `embed`, `view`, `edit` |
| `editor_script_handles` | Editor script handles.  JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `script_handles` | Public facing and editor script handles.  JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `view_script_handles` | Public facing script handles.  JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `editor_style_handles` | Editor style handles.  JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `style_handles` | Public facing and editor style handles.  JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `styles` | Block style variations.  JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `variations` | Block variations.  JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `textdomain` | Public text domain.  JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `parent` | Parent blocks.  JSON data type: array or null  Read only  Context: `embed`, `view`, `edit` |
| `ancestor` | Ancestor blocks.  JSON data type: array or null  Read only  Context: `embed`, `view`, `edit` |
| `keywords` | Block keywords.  JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `example` | Block example.  JSON data type: object or null  Read only  Context: `embed`, `view`, `edit` |
| `editor_script` | Editor script handle. DEPRECATED: Use `editor\_script\_handles` instead.  JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `script` | Public facing and editor script handle. DEPRECATED: Use `script\_handles` instead.  JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `view_script` | Public facing script handle. DEPRECATED: Use `view\_script\_handles` instead.  JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `editor_style` | Editor style handle. DEPRECATED: Use `editor\_style\_handles` instead.  JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `style` | Public facing and editor style handle. DEPRECATED: Use `style\_handles` instead.  JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |

## Retrieve a Block Type

### Definition &amp; Example Request

 `GET /wp/v2/block-types`

 Query this endpoint to retrieve a specific block type record.

 `$ curl https://example.com/wp-json/wp/v2/block-types`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `namespace` | Block namespace. |

## Retrieve a Block Type

### Definition &amp; Example Request

 `GET /wp/v2/block-types/<namespace>`

 Query this endpoint to retrieve a specific block type record.

 `$ curl https://example.com/wp-json/wp/v2/block-types/<namespace>`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `namespace` | Block namespace. |

## Retrieve a Block Type

### Definition &amp; Example Request

 `GET /wp/v2/block-types/<namespace>/<name>`

 Query this endpoint to retrieve a specific block type record.

 `$ curl https://example.com/wp-json/wp/v2/block-types/<namespace>/<name>`

### Arguments

| `name` | Block name. |
|---|---|
| `namespace` | Block namespace. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Plugins <a name="rest-api/reference/plugins" />

Source: https://developer.wordpress.org/rest-api/reference/plugins/

## Schema

The schema defines all the fields that exist within a plugin record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `plugin` | The plugin file.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
|---|---|
| `status` | The plugin activation status.  JSON data type: string  Context: `view`, `edit`, `embed`   One of: `inactive`, `active` |
| `name` | The plugin name.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `plugin_uri` | The plugin's website address.  JSON data type: string,    Format: uri  Read only  Context: `view`, `edit` |
| `author` | The plugin author.  JSON data type: object  Read only  Context: `view`, `edit` |
| `author_uri` | Plugin author's website address.  JSON data type: string,    Format: uri  Read only  Context: `view`, `edit` |
| `description` | The plugin description.  JSON data type: object  Read only  Context: `view`, `edit` |
| `version` | The plugin version number.  JSON data type: string  Read only  Context: `view`, `edit` |
| `network_only` | Whether the plugin can only be activated network-wide.  JSON data type: boolean  Read only  Context: `view`, `edit`, `embed` |
| `requires_wp` | Minimum required version of WordPress.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `requires_php` | Minimum required version of PHP.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `textdomain` | The plugin's text domain.  JSON data type: string  Read only  Context: `view`, `edit` |

## Retrieve a Plugin

### Definition &amp; Example Request

 `GET /wp/v2/plugins`

 Query this endpoint to retrieve a specific plugin record.

 `$ curl https://example.com/wp-json/wp/v2/plugins`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `search` | Limit results to those matching a string. |
| `status` | Limits results to plugins with the given status. |

## Create a Plugin

### Arguments

| `<a href="#schema-slug">slug</a>` | WordPress.org plugin directory slug.  Required: 1 |
|---|---|
| `<a href="#schema-status">status</a>` | The plugin activation status.  Default: `inactive`   One of: `inactive`, `active` |

### Definition

 `POST /wp/v2/plugins`

## Retrieve a Plugin

### Definition &amp; Example Request

 `GET /wp/v2/plugins/<plugin>?)`

 Query this endpoint to retrieve a specific plugin record.

 `$ curl https://example.com/wp-json/wp/v2/plugins/<plugin>?)`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `plugin` |  |

## Update a Plugin

### Arguments

| `<a href="#schema-context">context</a>` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `<a href="#schema-plugin">plugin</a>` |  |
| `<a href="#schema-status">status</a>` | The plugin activation status.    One of: `inactive`, `active` |

### Definition

 `POST /wp/v2/plugins/<plugin>?)`

### Example Request

 ``

## Delete a Plugin

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `plugin` |  |

### Definition

 `DELETE /wp/v2/plugins/<plugin>?)`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/plugins/<plugin>?)`

---

# Application Passwords <a name="rest-api/reference/application-passwords" />

Source: https://developer.wordpress.org/rest-api/reference/application-passwords/

## Schema

The schema defines all the fields that exist within a application password record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `uuid` | The unique identifier for the application password.  JSON data type: string,    Format: uuid  Read only  Context: `view`, `edit`, `embed` |
|---|---|
| `app_id` | A UUID provided by the application to uniquely identify it. It is recommended to use an UUID v5 with the URL or DNS namespace.  JSON data type: string,    Format: uuid  Context: `view`, `edit`, `embed` |
| `name` | The name of the application password.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `password` | The generated password. Only available after adding an application.  JSON data type: string  Read only  Context: `edit` |
| `created` | The GMT date the application password was created.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `last_used` | The GMT date the application password was last used.  JSON data type: string or null,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `last_ip` | The IP address the application password was last used by.  JSON data type: string or null,    Format: ip  Read only  Context: `view`, `edit` |

## Retrieve a Application Password

### Definition &amp; Example Request

 `GET /wp/v2/users/<user_id>)/application-passwords`

 Query this endpoint to retrieve a specific application password record.

 `$ curl https://example.com/wp-json/wp/v2/users/<user_id>)/application-passwords`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|

## Create a Application Password

### Arguments

| `<a href="#schema-app_id">app_id</a>` | A UUID provided by the application to uniquely identify it. It is recommended to use an UUID v5 with the URL or DNS namespace. |
|---|---|
| `<a href="#schema-name">name</a>` | The name of the application password.  Required: 1 |

### Definition

 `POST /wp/v2/users/<user_id>)/application-passwords`

## Delete a Application Password

 There are no arguments for this endpoint.

### Definition

 `DELETE /wp/v2/users/<user_id>)/application-passwords`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/users/<user_id>)/application-passwords`

## Retrieve a Application Password

### Definition &amp; Example Request

 `GET /wp/v2/users/<user_id>)/application-passwords/introspect`

 Query this endpoint to retrieve a specific application password record.

 `$ curl https://example.com/wp-json/wp/v2/users/<user_id>)/application-passwords/introspect`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|

## Retrieve a Application Password

### Definition &amp; Example Request

 `GET /wp/v2/users/<user_id>)/application-passwords/<uuid>`

 Query this endpoint to retrieve a specific application password record.

 `$ curl https://example.com/wp-json/wp/v2/users/<user_id>)/application-passwords/<uuid>`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|

## Update a Application Password

### Arguments

| `<a href="#schema-app_id">app_id</a>` | A UUID provided by the application to uniquely identify it. It is recommended to use an UUID v5 with the URL or DNS namespace. |
|---|---|
| `<a href="#schema-name">name</a>` | The name of the application password. |

### Definition

 `POST /wp/v2/users/<user_id>)/application-passwords/<uuid>`

### Example Request

 ``

## Delete a Application Password

 There are no arguments for this endpoint.

### Definition

 `DELETE /wp/v2/users/<user_id>)/application-passwords/<uuid>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/users/<user_id>)/application-passwords/<uuid>`

---

# Block Pattern Categories <a name="rest-api/reference/block-pattern-categories" />

Source: https://developer.wordpress.org/rest-api/reference/block-pattern-categories/

## Schema

The schema defines all the fields that exist within a block pattern category record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `name` | The category name.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
|---|---|
| `label` | The category label, in human readable format.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `description` | The category description, in human readable format.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |

## Retrieve a Block Pattern Category

### Definition &amp; Example Request

 `GET /wp/v2/block-patterns/categories`

 Query this endpoint to retrieve a specific block pattern category record.

 `$ curl https://example.com/wp-json/wp/v2/block-patterns/categories`

 There are no arguments for this endpoint.

---

# Block Patterns <a name="rest-api/reference/block-patterns" />

Source: https://developer.wordpress.org/rest-api/reference/block-patterns/

## Schema

The schema defines all the fields that exist within a block pattern record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `name` | The pattern name.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
|---|---|
| `title` | The pattern title, in human readable format.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `content` | The pattern content.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `description` | The pattern detailed description.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `viewport_width` | The pattern viewport width for inserter preview.  JSON data type: number  Read only  Context: `view`, `edit`, `embed` |
| `inserter` | Determines whether the pattern is visible in inserter.  JSON data type: boolean  Read only  Context: `view`, `edit`, `embed` |
| `categories` | The pattern category slugs.  JSON data type: array  Read only  Context: `view`, `edit`, `embed` |
| `keywords` | The pattern keywords.  JSON data type: array  Read only  Context: `view`, `edit`, `embed` |
| `block_types` | Block types that the pattern is intended to be used with.  JSON data type: array  Read only  Context: `view`, `edit`, `embed` |
| `post_types` | An array of post types that the pattern is restricted to be used with.  JSON data type: array  Read only  Context: `view`, `edit`, `embed` |
| `template_types` | An array of template types where the pattern fits.  JSON data type: array  Read only  Context: `view`, `edit`, `embed` |
| `source` | Where the pattern comes from e.g. core  JSON data type: string  Read only  Context: `view`, `edit`, `embed`   One of: `core`, `plugin`, `theme`, `pattern-directory/core`, `pattern-directory/theme`, `pattern-directory/featured` |

## Retrieve a Block Pattern

### Definition &amp; Example Request

 `GET /wp/v2/block-patterns/patterns`

 Query this endpoint to retrieve a specific block pattern record.

 `$ curl https://example.com/wp-json/wp/v2/block-patterns/patterns`

 There are no arguments for this endpoint.

---

# Menu Locations <a name="rest-api/reference/menu-locations" />

Source: https://developer.wordpress.org/rest-api/reference/menu-locations/

## Schema

The schema defines all the fields that exist within a menu location record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `name` | The name of the menu location.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
|---|---|
| `description` | The description of the menu location.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `menu` | The ID of the assigned menu.  JSON data type: integer  Read only  Context: `embed`, `view`, `edit` |

## Retrieve a Menu Location

### Definition &amp; Example Request

 `GET /wp/v2/menu-locations`

 Query this endpoint to retrieve a specific menu location record.

 `$ curl https://example.com/wp-json/wp/v2/menu-locations`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|

## Retrieve a Menu Location

### Definition &amp; Example Request

 `GET /wp/v2/menu-locations/<location>`

 Query this endpoint to retrieve a specific menu location record.

 `$ curl https://example.com/wp-json/wp/v2/menu-locations/<location>`

### Arguments

| `location` | An alphanumeric identifier for the menu location. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Nav_Menu_Item Revisions <a name="rest-api/reference/nav_menu_item-revisions" />

Source: https://developer.wordpress.org/rest-api/reference/nav_menu_item-revisions/

## Schema

The schema defines all the fields that exist within a nav\_menu\_item revision record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `author` | The ID for the author of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
|---|---|
| `date` | The date the revision was published, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
| `date_gmt` | The date the revision was published, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | GUID for the revision, as it exists in the database.  JSON data type: string  Context: `view`, `edit` |
| `id` | Unique identifier for the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `modified` | The date the revision was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `modified_gmt` | The date the revision was last modified, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `parent` | The ID for the parent of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `slug` | An alphanumeric identifier for the revision unique to its type.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `title` | The title for the object.  JSON data type: string or object  Context: `view`, `edit`, `embed` |
| `preview_link` | Preview link for the post.  JSON data type: string,    Format: uri  Read only  Context: `edit` |

## Retrieve a Nav\_Menu\_Item Revision

### Definition &amp; Example Request

 `GET /wp/v2/menu-items/<id>/autosaves`

 Query this endpoint to retrieve a specific nav\_menu\_item revision record.

 `$ curl https://example.com/wp-json/wp/v2/menu-items/<id>/autosaves`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Create a Nav\_Menu\_Item Revision

### Arguments

| `<a href="#schema-parent">parent</a>` | The ID for the parent of the object. |
|---|---|
| `<a href="#schema-title">title</a>` | The title for the object. |
| `<a href="#schema-type">type</a>` | The family of objects originally represented, such as "post\_type" or "taxonomy".    One of: `taxonomy`, `post_type`, `post_type_archive`, `custom` |
| `<a href="#schema-status">status</a>` | A named status for the object.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-attr_title">attr_title</a>` | Text for the title attribute of the link element for this menu item. |
| `<a href="#schema-classes">classes</a>` | Class names for the link element of this menu item. |
| `<a href="#schema-description">description</a>` | The description of this menu item. |
| `<a href="#schema-menu_order">menu_order</a>` | The DB ID of the nav\_menu\_item that is this item's menu parent, if any, otherwise 0. |
| `<a href="#schema-object">object</a>` | The type of object originally represented, such as "category", "post", or "attachment". |
| `<a href="#schema-object_id">object_id</a>` | The database ID of the original object this menu item represents, for example the ID for posts or the term\_id for categories. |
| `<a href="#schema-target">target</a>` | The target attribute of the link element for this menu item.    One of: `_blank`, `` |
| `<a href="#schema-url">url</a>` | The URL to which this menu item points. |
| `<a href="#schema-xfn">xfn</a>` | The XFN relationship expressed in the link of this menu item. |
| `<a href="#schema-menus">menus</a>` | The terms assigned to the object in the nav\_menu taxonomy. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |

### Definition

 `POST /wp/v2/menu-items/<id>/autosaves`

## Retrieve a Nav\_Menu\_Item Revision

### Definition &amp; Example Request

 `GET /wp/v2/menu-items/<parent>/autosaves/<id>`

 Query this endpoint to retrieve a specific nav\_menu\_item revision record.

 `$ curl https://example.com/wp-json/wp/v2/menu-items/<parent>/autosaves/<id>`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `id` | The ID for the autosave. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Nav_Menu_Items <a name="rest-api/reference/nav_menu_items" />

Source: https://developer.wordpress.org/rest-api/reference/nav_menu_items/

## Schema

The schema defines all the fields that exist within a nav\_menu\_item record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `title` | The title for the object.  JSON data type: string or object  Context: `view`, `edit`, `embed` |
|---|---|
| `id` | Unique identifier for the object.  JSON data type: integer  Read only  Context: `view`, `edit`, `embed` |
| `type_label` | The singular label used to describe this type of menu item.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `type` | The family of objects originally represented, such as "post\_type" or "taxonomy".  JSON data type: string  Context: `view`, `edit`, `embed`   One of: `taxonomy`, `post_type`, `post_type_archive`, `custom` |
| `status` | A named status for the object.  JSON data type: string  Context: `view`, `edit`, `embed`   One of: `publish`, `future`, `draft`, `pending`, `private` |
| `parent` | The ID for the parent of the object.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `attr_title` | Text for the title attribute of the link element for this menu item.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `classes` | Class names for the link element of this menu item.  JSON data type: array  Context: `view`, `edit`, `embed` |
| `description` | The description of this menu item.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `menu_order` | The DB ID of the nav\_menu\_item that is this item's menu parent, if any, otherwise 0.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `object` | The type of object originally represented, such as "category", "post", or "attachment".  JSON data type: string  Context: `view`, `edit`, `embed` |
| `object_id` | The database ID of the original object this menu item represents, for example the ID for posts or the term\_id for categories.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `target` | The target attribute of the link element for this menu item.  JSON data type: string  Context: `view`, `edit`, `embed`   One of: `_blank`, `` |
| `url` | The URL to which this menu item points.  JSON data type: string,    Format: uri  Context: `view`, `edit`, `embed` |
| `xfn` | The XFN relationship expressed in the link of this menu item.  JSON data type: array  Context: `view`, `edit`, `embed` |
| `invalid` | Whether the menu item represents an object that no longer exists.  JSON data type: boolean  Read only  Context: `view`, `edit`, `embed` |
| `menus` | The terms assigned to the object in the nav\_menu taxonomy.  JSON data type: integer  Context: `view`, `edit` |
| `meta` | Meta fields.  JSON data type: object  Context: `view`, `edit` |

## List Nav\_Menu\_Items

 Query this endpoint to retrieve a collection of nav\_menu\_items. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/menu-items`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/menu-items`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `100` |
| `search` | Limit results to those matching a string. |
| `after` | Limit response to posts published after a given ISO8601 compliant date. |
| `modified_after` | Limit response to posts modified after a given ISO8601 compliant date. |
| `before` | Limit response to posts published before a given ISO8601 compliant date. |
| `modified_before` | Limit response to posts modified before a given ISO8601 compliant date. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `asc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by object attribute.  Default: `menu_order`   One of: `author`, `date`, `id`, `include`, `modified`, `parent`, `relevance`, `slug`, `include_slugs`, `title`, `menu_order` |
| `search_columns` | Array of column names to be searched. |
| `slug` | Limit result set to posts with one or more specific slugs. |
| `status` | Limit result set to posts assigned one or more statuses.  Default: `publish` |
| `tax_relation` | Limit result set based on relationship between multiple taxonomies.    One of: `AND`, `OR` |
| `menus` | Limit result set to items with specific terms assigned in the menus taxonomy. |
| `menus_exclude` | Limit result set to items except those with specific terms assigned in the menus taxonomy. |
| `menu_order` | Limit result set to posts with a specific menu\_order value. |

## Create a Nav\_Menu\_Item

### Arguments

| `<a href="#schema-title">title</a>` | The title for the object. |
|---|---|
| `<a href="#schema-type">type</a>` | The family of objects originally represented, such as "post\_type" or "taxonomy".  Default: `custom`   One of: `taxonomy`, `post_type`, `post_type_archive`, `custom` |
| `<a href="#schema-status">status</a>` | A named status for the object.  Default: `publish`   One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-parent">parent</a>` | The ID for the parent of the object. |
| `<a href="#schema-attr_title">attr_title</a>` | Text for the title attribute of the link element for this menu item. |
| `<a href="#schema-classes">classes</a>` | Class names for the link element of this menu item. |
| `<a href="#schema-description">description</a>` | The description of this menu item. |
| `<a href="#schema-menu_order">menu_order</a>` | The DB ID of the nav\_menu\_item that is this item's menu parent, if any, otherwise 0.  Default: `1` |
| `<a href="#schema-object">object</a>` | The type of object originally represented, such as "category", "post", or "attachment". |
| `<a href="#schema-object_id">object_id</a>` | The database ID of the original object this menu item represents, for example the ID for posts or the term\_id for categories. |
| `<a href="#schema-target">target</a>` | The target attribute of the link element for this menu item.    One of: `_blank`, `` |
| `<a href="#schema-url">url</a>` | The URL to which this menu item points. |
| `<a href="#schema-xfn">xfn</a>` | The XFN relationship expressed in the link of this menu item. |
| `<a href="#schema-menus">menus</a>` | The terms assigned to the object in the nav\_menu taxonomy. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |

### Definition

 `POST /wp/v2/menu-items`

## Retrieve a Nav\_Menu\_Item

### Definition &amp; Example Request

 `GET /wp/v2/menu-items/<id>`

 Query this endpoint to retrieve a specific nav\_menu\_item record.

 `$ curl https://example.com/wp-json/wp/v2/menu-items/<id>`

### Arguments

| `id` | Unique identifier for the post. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Update a Nav\_Menu\_Item

### Arguments

| `<a href="#schema-id">id</a>` | Unique identifier for the post. |
|---|---|
| `<a href="#schema-title">title</a>` | The title for the object. |
| `<a href="#schema-type">type</a>` | The family of objects originally represented, such as "post\_type" or "taxonomy".    One of: `taxonomy`, `post_type`, `post_type_archive`, `custom` |
| `<a href="#schema-status">status</a>` | A named status for the object.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-parent">parent</a>` | The ID for the parent of the object. |
| `<a href="#schema-attr_title">attr_title</a>` | Text for the title attribute of the link element for this menu item. |
| `<a href="#schema-classes">classes</a>` | Class names for the link element of this menu item. |
| `<a href="#schema-description">description</a>` | The description of this menu item. |
| `<a href="#schema-menu_order">menu_order</a>` | The DB ID of the nav\_menu\_item that is this item's menu parent, if any, otherwise 0. |
| `<a href="#schema-object">object</a>` | The type of object originally represented, such as "category", "post", or "attachment". |
| `<a href="#schema-object_id">object_id</a>` | The database ID of the original object this menu item represents, for example the ID for posts or the term\_id for categories. |
| `<a href="#schema-target">target</a>` | The target attribute of the link element for this menu item.    One of: `_blank`, `` |
| `<a href="#schema-url">url</a>` | The URL to which this menu item points. |
| `<a href="#schema-xfn">xfn</a>` | The XFN relationship expressed in the link of this menu item. |
| `<a href="#schema-menus">menus</a>` | The terms assigned to the object in the nav\_menu taxonomy. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |

### Definition

 `POST /wp/v2/menu-items/<id>`

### Example Request

 ``

## Delete a Nav\_Menu\_Item

### Arguments

| `id` | Unique identifier for the post. |
|---|---|
| `force` | Whether to bypass Trash and force deletion. |

### Definition

 `DELETE /wp/v2/menu-items/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/menu-items/<id>`

---

# Nav_Menus <a name="rest-api/reference/nav_menus" />

Source: https://developer.wordpress.org/rest-api/reference/nav_menus/

## Schema

The schema defines all the fields that exist within a nav\_menu record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | Unique identifier for the term.  JSON data type: integer  Read only  Context: `view`, `embed`, `edit` |
|---|---|
| `description` | HTML description of the term.  JSON data type: string  Context: `view`, `edit` |
| `name` | HTML title for the term.  JSON data type: string  Context: `view`, `embed`, `edit` |
| `slug` | An alphanumeric identifier for the term unique to its type.  JSON data type: string  Context: `view`, `embed`, `edit` |
| `meta` | Meta fields.  JSON data type: object  Context: `view`, `edit` |
| `locations` | The locations assigned to the menu.  JSON data type: array  Context: `view`, `edit` |
| `auto_add` | Whether to automatically add top level pages to this menu.  JSON data type: boolean  Context: `view`, `edit` |

## List Nav\_Menus

 Query this endpoint to retrieve a collection of nav\_menus. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/menus`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/menus`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `10` |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `asc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by term attribute.  Default: `name`   One of: `id`, `include`, `name`, `slug`, `include_slugs`, `term_group`, `description`, `count` |
| `hide_empty` | Whether to hide terms not assigned to any posts. |
| `post` | Limit result set to terms assigned to a specific post. |
| `slug` | Limit result set to terms with one or more specific slugs. |

## Create a Nav\_Menu

### Arguments

| `<a href="#schema-description">description</a>` | HTML description of the term. |
|---|---|
| `<a href="#schema-name">name</a>` | HTML title for the term.  Required: 1 |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the term unique to its type. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-locations">locations</a>` | The locations assigned to the menu. |
| `<a href="#schema-auto_add">auto_add</a>` | Whether to automatically add top level pages to this menu. |

### Definition

 `POST /wp/v2/menus`

## Retrieve a Nav\_Menu

### Definition &amp; Example Request

 `GET /wp/v2/menus/<id>`

 Query this endpoint to retrieve a specific nav\_menu record.

 `$ curl https://example.com/wp-json/wp/v2/menus/<id>`

### Arguments

| `id` | Unique identifier for the term. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Update a Nav\_Menu

### Arguments

| `<a href="#schema-id">id</a>` | Unique identifier for the term. |
|---|---|
| `<a href="#schema-description">description</a>` | HTML description of the term. |
| `<a href="#schema-name">name</a>` | HTML title for the term. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the term unique to its type. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-locations">locations</a>` | The locations assigned to the menu. |
| `<a href="#schema-auto_add">auto_add</a>` | Whether to automatically add top level pages to this menu. |

### Definition

 `POST /wp/v2/menus/<id>`

### Example Request

 ``

## Delete a Nav\_Menu

### Arguments

| `id` | Unique identifier for the term. |
|---|---|
| `force` | Required to be true, as terms do not support trashing. |

### Definition

 `DELETE /wp/v2/menus/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/menus/<id>`

---

# Pattern Directory Items <a name="rest-api/reference/pattern-directory-items" />

Source: https://developer.wordpress.org/rest-api/reference/pattern-directory-items/

## Schema

The schema defines all the fields that exist within a pattern directory item record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | The pattern ID.  JSON data type: integer  Context: `view`, `edit`, `embed` |
|---|---|
| `title` | The pattern title, in human readable format.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `content` | The pattern content.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `categories` | The pattern's category slugs.  JSON data type: array  Context: `view`, `edit`, `embed` |
| `keywords` | The pattern's keywords.  JSON data type: array  Context: `view`, `edit`, `embed` |
| `description` | A description of the pattern.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `viewport_width` | The preferred width of the viewport when previewing a pattern, in pixels.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `block_types` | The block types which can use this pattern.  JSON data type: array  Context: `view`, `embed` |

## List Pattern Directory Items

 Query this endpoint to retrieve a collection of pattern directory items. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/pattern-directory/patterns`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/pattern-directory/patterns`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `100` |
| `search` | Limit results to those matching a string. |
| `category` | Limit results to those matching a category ID. |
| `keyword` | Limit results to those matching a keyword ID. |
| `slug` | Limit results to those matching a pattern (slug). |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by post attribute.  Default: `date`   One of: `author`, `date`, `id`, `include`, `modified`, `parent`, `relevance`, `slug`, `include_slugs`, `title`, `favorite_count` |

---

# Sidebars <a name="rest-api/reference/sidebars" />

Source: https://developer.wordpress.org/rest-api/reference/sidebars/

## Schema

The schema defines all the fields that exist within a sidebar record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | ID of sidebar.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
|---|---|
| `name` | Unique name identifying the sidebar.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `description` | Description of sidebar.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `class` | Extra CSS class to assign to the sidebar in the Widgets interface.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `before_widget` | HTML content to prepend to each widget's HTML output when assigned to this sidebar. Default is an opening list item element.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `after_widget` | HTML content to append to each widget's HTML output when assigned to this sidebar. Default is a closing list item element.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `before_title` | HTML content to prepend to the sidebar title when displayed. Default is an opening h2 element.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `after_title` | HTML content to append to the sidebar title when displayed. Default is a closing h2 element.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `status` | Status of sidebar.  JSON data type: string  Read only  Context: `embed`, `view`, `edit`   One of: `active`, `inactive` |
| `widgets` | Nested widgets.  JSON data type: array  Context: `embed`, `view`, `edit` |

## Retrieve a Sidebar

### Definition &amp; Example Request

 `GET /wp/v2/sidebars`

 Query this endpoint to retrieve a specific sidebar record.

 `$ curl https://example.com/wp-json/wp/v2/sidebars`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|

## Retrieve a Sidebar

### Definition &amp; Example Request

 `GET /wp/v2/sidebars/<id>`

 Query this endpoint to retrieve a specific sidebar record.

 `$ curl https://example.com/wp-json/wp/v2/sidebars/<id>`

### Arguments

| `id` | The id of a registered sidebar |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Update a Sidebar

### Arguments

| `<a href="#schema-widgets">widgets</a>` | Nested widgets. |
|---|---|

### Definition

 `POST /wp/v2/sidebars/<id>`

### Example Request

 ``

---

# Widget Types <a name="rest-api/reference/widget-types" />

Source: https://developer.wordpress.org/rest-api/reference/widget-types/

## Schema

The schema defines all the fields that exist within a widget type record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | Unique slug identifying the widget type.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
|---|---|
| `name` | Human-readable name identifying the widget type.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `description` | Description of the widget.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `is_multi` | Whether the widget supports multiple instances  JSON data type: boolean  Read only  Context: `view`, `edit`, `embed` |
| `classname` | Class name  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |

## Retrieve a Widget Type

### Definition &amp; Example Request

 `GET /wp/v2/widget-types`

 Query this endpoint to retrieve a specific widget type record.

 `$ curl https://example.com/wp-json/wp/v2/widget-types`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|

## Retrieve a Widget Type

### Definition &amp; Example Request

 `GET /wp/v2/widget-types/<id>`

 Query this endpoint to retrieve a specific widget type record.

 `$ curl https://example.com/wp-json/wp/v2/widget-types/<id>`

### Arguments

| `id` | The widget type id. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Widgets <a name="rest-api/reference/widgets" />

Source: https://developer.wordpress.org/rest-api/reference/widgets/

## Schema

The schema defines all the fields that exist within a widget record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | Unique identifier for the widget.  JSON data type: string  Context: `view`, `edit`, `embed` |
|---|---|
| `id_base` | The type of the widget. Corresponds to ID in widget-types endpoint.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `sidebar` | The sidebar the widget belongs to.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `rendered` | HTML representation of the widget.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `rendered_form` | HTML representation of the widget admin form.  JSON data type: string  Read only  Context: `edit` |
| `instance` | Instance settings of the widget, if supported.  JSON data type: object  Context: `edit` |
| `form_data` | URL-encoded form data from the widget admin form. Used to update a widget that does not support instance. Write only.  JSON data type: string  Context: `` |

## Retrieve a Widget

### Definition &amp; Example Request

 `GET /wp/v2/widgets`

 Query this endpoint to retrieve a specific widget record.

 `$ curl https://example.com/wp-json/wp/v2/widgets`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `sidebar` | The sidebar to return widgets for. |

## Create a Widget

### Arguments

| `<a href="#schema-id">id</a>` | Unique identifier for the widget. |
|---|---|
| `<a href="#schema-id_base">id_base</a>` | The type of the widget. Corresponds to ID in widget-types endpoint. |
| `<a href="#schema-sidebar">sidebar</a>` | The sidebar the widget belongs to.  Required: 1   Default: `wp_inactive_widgets` |
| `<a href="#schema-instance">instance</a>` | Instance settings of the widget, if supported. |
| `<a href="#schema-form_data">form_data</a>` | URL-encoded form data from the widget admin form. Used to update a widget that does not support instance. Write only. |

### Definition

 `POST /wp/v2/widgets`

## Retrieve a Widget

### Definition &amp; Example Request

 `GET /wp/v2/widgets/<id>`

 Query this endpoint to retrieve a specific widget record.

 `$ curl https://example.com/wp-json/wp/v2/widgets/<id>`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|

## Update a Widget

### Arguments

| `<a href="#schema-id">id</a>` | Unique identifier for the widget. |
|---|---|
| `<a href="#schema-id_base">id_base</a>` | The type of the widget. Corresponds to ID in widget-types endpoint. |
| `<a href="#schema-sidebar">sidebar</a>` | The sidebar the widget belongs to. |
| `<a href="#schema-instance">instance</a>` | Instance settings of the widget, if supported. |
| `<a href="#schema-form_data">form_data</a>` | URL-encoded form data from the widget admin form. Used to update a widget that does not support instance. Write only. |

### Definition

 `POST /wp/v2/widgets/<id>`

### Example Request

 ``

## Delete a Widget

### Arguments

| `force` | Whether to force removal of the widget, or move it to the inactive sidebar. |
|---|---|

### Definition

 `DELETE /wp/v2/widgets/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/widgets/<id>`

---

# Wp Site Health Tests <a name="rest-api/reference/wp-site-health-tests" />

Source: https://developer.wordpress.org/rest-api/reference/wp-site-health-tests/

## Schema

The schema defines all the fields that exist within a wp site health test record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `test` | The name of the test being run.  JSON data type: string  Read only  Context: `` |
|---|---|
| `label` | A label describing the test.  JSON data type: string  Read only  Context: `` |
| `status` | The status of the test.  JSON data type: string  Read only  Context: ``   One of: `good`, `recommended`, `critical` |
| `badge` | The category this test is grouped in.  JSON data type: object  Read only  Context: `` |
| `description` | A more descriptive explanation of what the test looks for, and why it is important for the user.  JSON data type: string  Read only  Context: `` |
| `actions` | HTML containing an action to direct the user to where they can resolve the issue.  JSON data type: string  Read only  Context: `` |

## Retrieve a Wp Site Health Test

### Definition &amp; Example Request

 `GET /wp-site-health/v1/tests/background-updates`

 Query this endpoint to retrieve a specific wp site health test record.

 `$ curl https://example.com/wp-json/wp-site-health/v1/tests/background-updates`

 There are no arguments for this endpoint.

## Retrieve a Wp Site Health Test

### Definition &amp; Example Request

 `GET /wp-site-health/v1/tests/loopback-requests`

 Query this endpoint to retrieve a specific wp site health test record.

 `$ curl https://example.com/wp-json/wp-site-health/v1/tests/loopback-requests`

 There are no arguments for this endpoint.

## Retrieve a Wp Site Health Test

### Definition &amp; Example Request

 `GET /wp-site-health/v1/tests/https-status`

 Query this endpoint to retrieve a specific wp site health test record.

 `$ curl https://example.com/wp-json/wp-site-health/v1/tests/https-status`

 There are no arguments for this endpoint.

## Retrieve a Wp Site Health Test

### Definition &amp; Example Request

 `GET /wp-site-health/v1/tests/dotorg-communication`

 Query this endpoint to retrieve a specific wp site health test record.

 `$ curl https://example.com/wp-json/wp-site-health/v1/tests/dotorg-communication`

 There are no arguments for this endpoint.

## Retrieve a Wp Site Health Test

### Definition &amp; Example Request

 `GET /wp-site-health/v1/tests/authorization-header`

 Query this endpoint to retrieve a specific wp site health test record.

 `$ curl https://example.com/wp-json/wp-site-health/v1/tests/authorization-header`

 There are no arguments for this endpoint.

---

# Global_Styles <a name="rest-api/reference/wp_global_styles" />

Source: https://developer.wordpress.org/rest-api/reference/wp_global_styles/

## Schema

The schema defines all the fields that exist within a global\_styles record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | ID of global styles config.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
|---|---|
| `styles` | Global styles.  JSON data type: object  Context: `view`, `edit` |
| `settings` | Global settings.  JSON data type: object  Context: `view`, `edit` |
| `title` | Title of the global styles variation.  JSON data type: object or string  Context: `embed`, `view`, `edit` |

## Retrieve a Global\_Styles

### Definition &amp; Example Request

 `GET /wp/v2/global-styles/<id>`

 Query this endpoint to retrieve a specific global\_styles record.

 `$ curl https://example.com/wp-json/wp/v2/global-styles/<id>`

### Arguments

| `id` | The id of a template |
|---|---|

## Update a Global\_Styles

### Arguments

| `<a href="#schema-styles">styles</a>` | Global styles. |
|---|---|
| `<a href="#schema-settings">settings</a>` | Global settings. |
| `<a href="#schema-title">title</a>` | Title of the global styles variation. |

### Definition

 `POST /wp/v2/global-styles/<id>`

### Example Request

 ``

---

# Navigation Revisions <a name="rest-api/reference/wp_navigation-revisions" />

Source: https://developer.wordpress.org/rest-api/reference/wp_navigation-revisions/

## Schema

The schema defines all the fields that exist within a navigation revision record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `author` | The ID for the author of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
|---|---|
| `date` | The date the revision was published, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
| `date_gmt` | The date the revision was published, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | The globally unique identifier for the post.  JSON data type: object  Read only  Context: `view`, `edit` |
| `id` | Unique identifier for the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `modified` | The date the revision was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `modified_gmt` | The date the revision was last modified, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `parent` | The ID for the parent of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `slug` | An alphanumeric identifier for the revision unique to its type.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `title` | The title for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `content` | The content for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |

## List Navigation Revisions

 Query this endpoint to retrieve a collection of navigation revisions. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/navigation/<parent>/revisions`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/navigation/<parent>/revisions`

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set. |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by object attribute.  Default: `date`   One of: `date`, `id`, `include`, `relevance`, `slug`, `include_slugs`, `title` |

## Retrieve a Navigation Revision

### Definition &amp; Example Request

 `GET /wp/v2/navigation/<parent>/revisions/<id>`

 Query this endpoint to retrieve a specific navigation revision record.

 `$ curl https://example.com/wp-json/wp/v2/navigation/<parent>/revisions/<id>`

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `id` | Unique identifier for the revision. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Delete a Navigation Revision

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `id` | Unique identifier for the revision. |
| `force` | Required to be true, as revisions do not support trashing. |

### Definition

 `DELETE /wp/v2/navigation/<parent>/revisions/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/navigation/<parent>/revisions/<id>`

## Retrieve a Navigation Revision

### Definition &amp; Example Request

 `GET /wp/v2/navigation/<id>/autosaves`

 Query this endpoint to retrieve a specific navigation revision record.

 `$ curl https://example.com/wp-json/wp/v2/navigation/<id>/autosaves`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Create a Navigation Revision

### Arguments

| `<a href="#schema-parent">parent</a>` | The ID for the parent of the autosave. |
|---|---|
| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-password">password</a>` | A password to protect access to the content and excerpt. |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-content">content</a>` | The content for the post. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |

### Definition

 `POST /wp/v2/navigation/<id>/autosaves`

## Retrieve a Navigation Revision

### Definition &amp; Example Request

 `GET /wp/v2/navigation/<parent>/autosaves/<id>`

 Query this endpoint to retrieve a specific navigation revision record.

 `$ curl https://example.com/wp-json/wp/v2/navigation/<parent>/autosaves/<id>`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `id` | The ID for the autosave. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Navigations <a name="rest-api/reference/wp_navigations" />

Source: https://developer.wordpress.org/rest-api/reference/wp_navigations/

## Schema

The schema defines all the fields that exist within a navigation record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `date` | The date the post was published, in the site's timezone.  JSON data type: string or null,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
|---|---|
| `date_gmt` | The date the post was published, as GMT.  JSON data type: string or null,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | The globally unique identifier for the post.  JSON data type: object  Read only  Context: `view`, `edit` |
| `id` | Unique identifier for the post.  JSON data type: integer  Read only  Context: `view`, `edit`, `embed` |
| `link` | URL to the post.  JSON data type: string,    Format: uri  Read only  Context: `view`, `edit`, `embed` |
| `modified` | The date the post was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `modified_gmt` | The date the post was last modified, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `slug` | An alphanumeric identifier for the post unique to its type.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `status` | A named status for the post.  JSON data type: string  Context: `view`, `edit`, `embed`   One of: `publish`, `future`, `draft`, `pending`, `private` |
| `type` | Type of post.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `password` | A password to protect access to the content and excerpt.  JSON data type: string  Context: `edit` |
| `title` | The title for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `content` | The content for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `template` | The theme file to use to display the post.  JSON data type: string  Context: `view`, `edit` |

## List Navigations

 Query this endpoint to retrieve a collection of navigations. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/navigation`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/navigation`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `10` |
| `search` | Limit results to those matching a string. |
| `after` | Limit response to posts published after a given ISO8601 compliant date. |
| `modified_after` | Limit response to posts modified after a given ISO8601 compliant date. |
| `before` | Limit response to posts published before a given ISO8601 compliant date. |
| `modified_before` | Limit response to posts modified before a given ISO8601 compliant date. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by post attribute.  Default: `date`   One of: `author`, `date`, `id`, `include`, `modified`, `parent`, `relevance`, `slug`, `include_slugs`, `title` |
| `search_columns` | Array of column names to be searched. |
| `slug` | Limit result set to posts with one or more specific slugs. |
| `status` | Limit result set to posts assigned one or more statuses.  Default: `publish` |

## Create a Navigation

### Arguments

| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
|---|---|
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-password">password</a>` | A password to protect access to the content and excerpt. |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-content">content</a>` | The content for the post. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |

### Definition

 `POST /wp/v2/navigation`

## Retrieve a Navigation

### Definition &amp; Example Request

 `GET /wp/v2/navigation/<id>`

 Query this endpoint to retrieve a specific navigation record.

 `$ curl https://example.com/wp-json/wp/v2/navigation/<id>`

### Arguments

| `id` | Unique identifier for the post. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
| `password` | The password for the post if it is password protected. |

## Update a Navigation

### Arguments

| `<a href="#schema-id">id</a>` | Unique identifier for the post. |
|---|---|
| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-password">password</a>` | A password to protect access to the content and excerpt. |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-content">content</a>` | The content for the post. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |

### Definition

 `POST /wp/v2/navigation/<id>`

### Example Request

 ``

## Delete a Navigation

### Arguments

| `id` | Unique identifier for the post. |
|---|---|
| `force` | Whether to bypass Trash and force deletion. |

### Definition

 `DELETE /wp/v2/navigation/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/navigation/<id>`

---

# Template Revisions <a name="rest-api/reference/wp_template-revisions" />

Source: https://developer.wordpress.org/rest-api/reference/wp_template-revisions/

## Schema

The schema defines all the fields that exist within a template revision record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `author` | The ID for the author of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
|---|---|
| `date` | The date the revision was published, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
| `date_gmt` | The date the revision was published, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | GUID for the revision, as it exists in the database.  JSON data type: string  Context: `view`, `edit` |
| `id` | Unique identifier for the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `modified` | The date the revision was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `modified_gmt` | The date the revision was last modified, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `parent` | The ID for the parent of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `slug` | An alphanumeric identifier for the revision unique to its type.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `title` | Title of template.  JSON data type: object or string  Context: `embed`, `view`, `edit` |
| `content` | Content of template.  JSON data type: object or string  Context: `embed`, `view`, `edit` |

## List Template Revisions

 Query this endpoint to retrieve a collection of template revisions. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/templates/<parent>/revisions`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/templates/<parent>/revisions`

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set. |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by object attribute.  Default: `date`   One of: `date`, `id`, `include`, `relevance`, `slug`, `include_slugs`, `title` |

## Retrieve a Template Revision

### Definition &amp; Example Request

 `GET /wp/v2/templates/<parent>/revisions/<id>`

 Query this endpoint to retrieve a specific template revision record.

 `$ curl https://example.com/wp-json/wp/v2/templates/<parent>/revisions/<id>`

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `id` | Unique identifier for the revision. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Delete a Template Revision

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `id` | Unique identifier for the revision. |
| `force` | Required to be true, as revisions do not support trashing. |

### Definition

 `DELETE /wp/v2/templates/<parent>/revisions/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/templates/<parent>/revisions/<id>`

## Retrieve a Template Revision

### Definition &amp; Example Request

 `GET /wp/v2/templates/<id>/autosaves`

 Query this endpoint to retrieve a specific template revision record.

 `$ curl https://example.com/wp-json/wp/v2/templates/<id>/autosaves`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Create a Template Revision

### Arguments

| `<a href="#schema-parent">parent</a>` | The ID for the parent of the autosave. |
|---|---|
| `<a href="#schema-slug">slug</a>` | Unique slug identifying the template. |
| `<a href="#schema-theme">theme</a>` | Theme identifier for the template. |
| `<a href="#schema-type">type</a>` | Type of template. |
| `<a href="#schema-content">content</a>` | Content of template. |
| `<a href="#schema-title">title</a>` | Title of template. |
| `<a href="#schema-description">description</a>` | Description of template. |
| `<a href="#schema-status">status</a>` | Status of template.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-author">author</a>` | The ID for the author of the template. |

### Definition

 `POST /wp/v2/templates/<id>/autosaves`

## Retrieve a Template Revision

### Definition &amp; Example Request

 `GET /wp/v2/templates/<parent>/autosaves/<id>`

 Query this endpoint to retrieve a specific template revision record.

 `$ curl https://example.com/wp-json/wp/v2/templates/<parent>/autosaves/<id>`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `id` | The ID for the autosave. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Template_Part Revisions <a name="rest-api/reference/wp_template_part-revisions" />

Source: https://developer.wordpress.org/rest-api/reference/wp_template_part-revisions/

## Schema

The schema defines all the fields that exist within a template\_part revision record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `author` | The ID for the author of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
|---|---|
| `date` | The date the revision was published, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
| `date_gmt` | The date the revision was published, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | GUID for the revision, as it exists in the database.  JSON data type: string  Context: `view`, `edit` |
| `id` | Unique identifier for the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `modified` | The date the revision was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `modified_gmt` | The date the revision was last modified, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `parent` | The ID for the parent of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `slug` | An alphanumeric identifier for the revision unique to its type.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `title` | Title of template.  JSON data type: object or string  Context: `embed`, `view`, `edit` |
| `content` | Content of template.  JSON data type: object or string  Context: `embed`, `view`, `edit` |

## List Template\_Part Revisions

 Query this endpoint to retrieve a collection of template\_part revisions. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/template-parts/<parent>/revisions`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/template-parts/<parent>/revisions`

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set. |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by object attribute.  Default: `date`   One of: `date`, `id`, `include`, `relevance`, `slug`, `include_slugs`, `title` |

## Retrieve a Template\_Part Revision

### Definition &amp; Example Request

 `GET /wp/v2/template-parts/<parent>/revisions/<id>`

 Query this endpoint to retrieve a specific template\_part revision record.

 `$ curl https://example.com/wp-json/wp/v2/template-parts/<parent>/revisions/<id>`

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `id` | Unique identifier for the revision. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Delete a Template\_Part Revision

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `id` | Unique identifier for the revision. |
| `force` | Required to be true, as revisions do not support trashing. |

### Definition

 `DELETE /wp/v2/template-parts/<parent>/revisions/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/template-parts/<parent>/revisions/<id>`

## Retrieve a Template\_Part Revision

### Definition &amp; Example Request

 `GET /wp/v2/template-parts/<id>/autosaves`

 Query this endpoint to retrieve a specific template\_part revision record.

 `$ curl https://example.com/wp-json/wp/v2/template-parts/<id>/autosaves`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Create a Template\_Part Revision

### Arguments

| `<a href="#schema-parent">parent</a>` | The ID for the parent of the autosave. |
|---|---|
| `<a href="#schema-slug">slug</a>` | Unique slug identifying the template. |
| `<a href="#schema-theme">theme</a>` | Theme identifier for the template. |
| `<a href="#schema-type">type</a>` | Type of template. |
| `<a href="#schema-content">content</a>` | Content of template. |
| `<a href="#schema-title">title</a>` | Title of template. |
| `<a href="#schema-description">description</a>` | Description of template. |
| `<a href="#schema-status">status</a>` | Status of template.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-author">author</a>` | The ID for the author of the template. |
| `<a href="#schema-area">area</a>` | Where the template part is intended for use (header, footer, etc.) |

### Definition

 `POST /wp/v2/template-parts/<id>/autosaves`

## Retrieve a Template\_Part Revision

### Definition &amp; Example Request

 `GET /wp/v2/template-parts/<parent>/autosaves/<id>`

 Query this endpoint to retrieve a specific template\_part revision record.

 `$ curl https://example.com/wp-json/wp/v2/template-parts/<parent>/autosaves/<id>`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `id` | The ID for the autosave. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Template_Parts <a name="rest-api/reference/wp_template_parts" />

Source: https://developer.wordpress.org/rest-api/reference/wp_template_parts/

## Schema

The schema defines all the fields that exist within a template\_part record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | ID of template.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
|---|---|
| `slug` | Unique slug identifying the template.  JSON data type: string  Context: `embed`, `view`, `edit` |
| `theme` | Theme identifier for the template.  JSON data type: string  Context: `embed`, `view`, `edit` |
| `type` | Type of template.  JSON data type: string  Context: `embed`, `view`, `edit` |
| `source` | Source of template  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `origin` | Source of a customized template  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `content` | Content of template.  JSON data type: object or string  Context: `embed`, `view`, `edit` |
| `title` | Title of template.  JSON data type: object or string  Context: `embed`, `view`, `edit` |
| `description` | Description of template.  JSON data type: string  Context: `embed`, `view`, `edit` |
| `status` | Status of template.  JSON data type: string  Context: `embed`, `view`, `edit`   One of: `publish`, `future`, `draft`, `pending`, `private` |
| `wp_id` | Post ID.  JSON data type: integer  Read only  Context: `embed`, `view`, `edit` |
| `has_theme_file` | Theme file exists.  JSON data type: bool  Read only  Context: `embed`, `view`, `edit` |
| `author` | The ID for the author of the template.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `modified` | The date the template was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `area` | Where the template part is intended for use (header, footer, etc.)  JSON data type: string  Context: `embed`, `view`, `edit` |

## Retrieve a Template\_Part

### Definition &amp; Example Request

 `GET /wp/v2/template-parts`

 Query this endpoint to retrieve a specific template\_part record.

 `$ curl https://example.com/wp-json/wp/v2/template-parts`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `wp_id` | Limit to the specified post id. |
| `area` | Limit to the specified template part area. |
| `post_type` | Post type to get the templates for. |

## Create a Template\_Part

### Arguments

| `<a href="#schema-slug">slug</a>` | Unique slug identifying the template.  Required: 1 |
|---|---|
| `<a href="#schema-theme">theme</a>` | Theme identifier for the template. |
| `<a href="#schema-type">type</a>` | Type of template. |
| `<a href="#schema-content">content</a>` | Content of template. |
| `<a href="#schema-title">title</a>` | Title of template. |
| `<a href="#schema-description">description</a>` | Description of template. |
| `<a href="#schema-status">status</a>` | Status of template.  Default: `publish`   One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-author">author</a>` | The ID for the author of the template. |
| `<a href="#schema-area">area</a>` | Where the template part is intended for use (header, footer, etc.) |

### Definition

 `POST /wp/v2/template-parts`

## Retrieve a Template\_Part

### Definition &amp; Example Request

 `GET /wp/v2/template-parts/<id>?)[\/\w%-]+)`

 Query this endpoint to retrieve a specific template\_part record.

 `$ curl https://example.com/wp-json/wp/v2/template-parts/<id>?)[\/\w%-]+)`

### Arguments

| `id` | The id of a template |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Update a Template\_Part

### Arguments

| `<a href="#schema-id">id</a>` | The id of a template |
|---|---|
| `<a href="#schema-slug">slug</a>` | Unique slug identifying the template. |
| `<a href="#schema-theme">theme</a>` | Theme identifier for the template. |
| `<a href="#schema-type">type</a>` | Type of template. |
| `<a href="#schema-content">content</a>` | Content of template. |
| `<a href="#schema-title">title</a>` | Title of template. |
| `<a href="#schema-description">description</a>` | Description of template. |
| `<a href="#schema-status">status</a>` | Status of template.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-author">author</a>` | The ID for the author of the template. |
| `<a href="#schema-area">area</a>` | Where the template part is intended for use (header, footer, etc.) |

### Definition

 `POST /wp/v2/template-parts/<id>?)[\/\w%-]+)`

### Example Request

 ``

## Delete a Template\_Part

### Arguments

| `id` | The id of a template |
|---|---|
| `force` | Whether to bypass Trash and force deletion. |

### Definition

 `DELETE /wp/v2/template-parts/<id>?)[\/\w%-]+)`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/template-parts/<id>?)[\/\w%-]+)`

---

# Templates <a name="rest-api/reference/wp_templates" />

Source: https://developer.wordpress.org/rest-api/reference/wp_templates/

## Schema

The schema defines all the fields that exist within a template record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | ID of template.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
|---|---|
| `slug` | Unique slug identifying the template.  JSON data type: string  Context: `embed`, `view`, `edit` |
| `theme` | Theme identifier for the template.  JSON data type: string  Context: `embed`, `view`, `edit` |
| `type` | Type of template.  JSON data type: string  Context: `embed`, `view`, `edit` |
| `source` | Source of template  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `origin` | Source of a customized template  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `content` | Content of template.  JSON data type: object or string  Context: `embed`, `view`, `edit` |
| `title` | Title of template.  JSON data type: object or string  Context: `embed`, `view`, `edit` |
| `description` | Description of template.  JSON data type: string  Context: `embed`, `view`, `edit` |
| `status` | Status of template.  JSON data type: string  Context: `embed`, `view`, `edit`   One of: `publish`, `future`, `draft`, `pending`, `private` |
| `wp_id` | Post ID.  JSON data type: integer  Read only  Context: `embed`, `view`, `edit` |
| `has_theme_file` | Theme file exists.  JSON data type: bool  Read only  Context: `embed`, `view`, `edit` |
| `author` | The ID for the author of the template.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `modified` | The date the template was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `is_custom` | Whether a template is a custom template.  JSON data type: bool  Read only  Context: `embed`, `view`, `edit` |

## Retrieve a Template

### Definition &amp; Example Request

 `GET /wp/v2/templates`

 Query this endpoint to retrieve a specific template record.

 `$ curl https://example.com/wp-json/wp/v2/templates`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `wp_id` | Limit to the specified post id. |
| `area` | Limit to the specified template part area. |
| `post_type` | Post type to get the templates for. |

## Create a Template

### Arguments

| `<a href="#schema-slug">slug</a>` | Unique slug identifying the template.  Required: 1 |
|---|---|
| `<a href="#schema-theme">theme</a>` | Theme identifier for the template. |
| `<a href="#schema-type">type</a>` | Type of template. |
| `<a href="#schema-content">content</a>` | Content of template. |
| `<a href="#schema-title">title</a>` | Title of template. |
| `<a href="#schema-description">description</a>` | Description of template. |
| `<a href="#schema-status">status</a>` | Status of template.  Default: `publish`   One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-author">author</a>` | The ID for the author of the template. |

### Definition

 `POST /wp/v2/templates`

## Retrieve a Template

### Definition &amp; Example Request

 `GET /wp/v2/templates/<id>?)[\/\w%-]+)`

 Query this endpoint to retrieve a specific template record.

 `$ curl https://example.com/wp-json/wp/v2/templates/<id>?)[\/\w%-]+)`

### Arguments

| `id` | The id of a template |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Update a Template

### Arguments

| `<a href="#schema-id">id</a>` | The id of a template |
|---|---|
| `<a href="#schema-slug">slug</a>` | Unique slug identifying the template. |
| `<a href="#schema-theme">theme</a>` | Theme identifier for the template. |
| `<a href="#schema-type">type</a>` | Type of template. |
| `<a href="#schema-content">content</a>` | Content of template. |
| `<a href="#schema-title">title</a>` | Title of template. |
| `<a href="#schema-description">description</a>` | Description of template. |
| `<a href="#schema-status">status</a>` | Status of template.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-author">author</a>` | The ID for the author of the template. |

### Definition

 `POST /wp/v2/templates/<id>?)[\/\w%-]+)`

### Example Request

 ``

## Delete a Template

### Arguments

| `id` | The id of a template |
|---|---|
| `force` | Whether to bypass Trash and force deletion. |

### Definition

 `DELETE /wp/v2/templates/<id>?)[\/\w%-]+)`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/templates/<id>?)[\/\w%-]+)`

---

# Posts <a name="rest-api/reference/posts" />

Source: https://developer.wordpress.org/rest-api/reference/posts/

## Schema

The schema defines all the fields that exist within a post record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context. | `date` | The date the post was published, in the site's timezone.  JSON data type: string or null, Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
|---|---|
| `date_gmt` | The date the post was published, as GMT.  JSON data type: string or null, Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | The globally unique identifier for the post.  JSON data type: object  Read only  Context: `view`, `edit` |
| `id` | Unique identifier for the post.  JSON data type: integer  Read only  Context: `view`, `edit`, `embed` |
| `link` | URL to the post.  JSON data type: string, Format: uri  Read only  Context: `view`, `edit`, `embed` |
| `modified` | The date the post was last modified, in the site's timezone.  JSON data type: string, Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `modified_gmt` | The date the post was last modified, as GMT.  JSON data type: string, Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `slug` | An alphanumeric identifier for the post unique to its type.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `status` | A named status for the post.  JSON data type: string  Context: `view`, `edit`   One of: `publish`, `future`, `draft`, `pending`, `private` |
| `type` | Type of post.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `password` | A password to protect access to the content and excerpt.  JSON data type: string  Context: `edit` |
| `permalink_template` | Permalink template for the post.  JSON data type: string  Read only  Context: `edit` |
| `generated_slug` | Slug automatically generated from the post title.  JSON data type: string  Read only  Context: `edit` |
| `title` | The title for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `content` | The content for the post.  JSON data type: object  Context: `view`, `edit` |
| `author` | The ID for the author of the post.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `excerpt` | The excerpt for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `featured_media` | The ID of the featured media for the post.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `comment_status` | Whether or not comments are open on the post.  JSON data type: string  Context: `view`, `edit`   One of: `open`, `closed` |
| `ping_status` | Whether or not the post can be pinged.  JSON data type: string  Context: `view`, `edit`   One of: `open`, `closed` |
| `format` | The format for the post.  JSON data type: string  Context: `view`, `edit`   One of: `standard`, `aside`, `chat`, `gallery`, `link`, `image`, `quote`, `status`, `video`, `audio` |
| `meta` | Meta fields.  JSON data type: object  Context: `view`, `edit` |
| `sticky` | Whether or not the post should be treated as sticky.  JSON data type: boolean  Context: `view`, `edit` |
| `template` | The theme file to use to display the post.  JSON data type: string  Context: `view`, `edit` |
| `categories` | The terms assigned to the post in the category taxonomy.  JSON data type: array  Context: `view`, `edit` |
| `tags` | The terms assigned to the post in the post\_tag taxonomy.  JSON data type: array  Context: `view`, `edit` |

 

## List Posts

 Query this endpoint to retrieve a collection of posts. The response you receive can be controlled and filtered using the URL query parameters below. ### Definition

 `GET /wp/v2/posts`### Example Request

 `$ curl https://example.com/wp-json/wp/v2/posts` 

### Arguments

 | `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `10` |
| `search` | Limit results to those matching a string. |
| `after` | Limit response to posts published after a given ISO8601 compliant date. |
| `modified_after` | Limit response to posts modified after a given ISO8601 compliant date. |
| `author` | Limit result set to posts assigned to specific authors. |
| `author_exclude` | Ensure result set excludes posts assigned to specific authors. |
| `before` | Limit response to posts published before a given ISO8601 compliant date. |
| `modified_before` | Limit response to posts modified before a given ISO8601 compliant date. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by post attribute.  Default: `date`   One of: `author`, `date`, `id`, `include`, `modified`, `parent`, `relevance`, `slug`, `include_slugs`, `title` |
| `search_columns` | Array of column names to be searched. |
| `slug` | Limit result set to posts with one or more specific slugs. |
| `status` | Limit result set to posts assigned one or more statuses.  Default: `publish` |
| `tax_relation` | Limit result set based on relationship between multiple taxonomies. One of: `AND`, `OR` |
| `categories` | Limit result set to items with specific terms assigned in the categories taxonomy. |
| `categories_exclude` | Limit result set to items except those with specific terms assigned in the categories taxonomy. |
| `tags` | Limit result set to items with specific terms assigned in the tags taxonomy. |
| `tags_exclude` | Limit result set to items except those with specific terms assigned in the tags taxonomy. |
| `sticky` | Limit result set to items that are sticky. |

 

## Create a Post

### Arguments

 | `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
|---|---|
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post. One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-password">password</a>` | A password to protect access to the content and excerpt. |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-content">content</a>` | The content for the post. |
| `<a href="#schema-author">author</a>` | The ID for the author of the post. |
| `<a href="#schema-excerpt">excerpt</a>` | The excerpt for the post. |
| `<a href="#schema-featured_media">featured_media</a>` | The ID of the featured media for the post. |
| `<a href="#schema-comment_status">comment_status</a>` | Whether or not comments are open on the post. One of: `open`, `closed` |
| `<a href="#schema-ping_status">ping_status</a>` | Whether or not the post can be pinged. One of: `open`, `closed` |
| `<a href="#schema-format">format</a>` | The format for the post. One of: `standard`, `aside`, `chat`, `gallery`, `link`, `image`, `quote`, `status`, `video`, `audio` |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-sticky">sticky</a>` | Whether or not the post should be treated as sticky. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |
| `<a href="#schema-categories">categories</a>` | The terms assigned to the post in the category taxonomy. |
| `<a href="#schema-tags">tags</a>` | The terms assigned to the post in the post\_tag taxonomy. |

 

### Definition

 `POST /wp/v2/posts` 

## Retrieve a Post

### Definition &amp; Example Request

 `GET /wp/v2/posts/<id>` Query this endpoint to retrieve a specific post record. `$ curl https://example.com/wp-json/wp/v2/posts/<id>` 

### Arguments

 | `id` | Unique identifier for the post. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
| `password` | The password for the post if it is password protected. |

 

## Update a Post

### Arguments

 | `<a href="#schema-id">id</a>` | Unique identifier for the post. |
|---|---|
| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post. One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-password">password</a>` | A password to protect access to the content and excerpt. |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-content">content</a>` | The content for the post. |
| `<a href="#schema-author">author</a>` | The ID for the author of the post. |
| `<a href="#schema-excerpt">excerpt</a>` | The excerpt for the post. |
| `<a href="#schema-featured_media">featured_media</a>` | The ID of the featured media for the post. |
| `<a href="#schema-comment_status">comment_status</a>` | Whether or not comments are open on the post. One of: `open`, `closed` |
| `<a href="#schema-ping_status">ping_status</a>` | Whether or not the post can be pinged. One of: `open`, `closed` |
| `<a href="#schema-format">format</a>` | The format for the post. One of: `standard`, `aside`, `chat`, `gallery`, `link`, `image`, `quote`, `status`, `video`, `audio` |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-sticky">sticky</a>` | Whether or not the post should be treated as sticky. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |
| `<a href="#schema-categories">categories</a>` | The terms assigned to the post in the category taxonomy. |
| `<a href="#schema-tags">tags</a>` | The terms assigned to the post in the post\_tag taxonomy. |

 

### Definition

 `POST /wp/v2/posts/<id>`### Example Request

 `$ curl -X POST https://example.com/wp-json/wp/v2/posts/<id> -d '{"title":"My New Title"}'` 

## Delete a Post

### Arguments

 | `id` | Unique identifier for the post. |
|---|---|
| `force` | Whether to bypass Trash and force deletion. |

 

### Definition

 `DELETE /wp/v2/posts/<id>`### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/posts/<id>`

---

# Post Revisions <a name="rest-api/reference/post-revisions" />

Source: https://developer.wordpress.org/rest-api/reference/post-revisions/

## Schema

The schema defines all the fields that exist within a post revision record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `author` | The ID for the author of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
|---|---|
| `date` | The date the revision was published, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
| `date_gmt` | The date the revision was published, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | The globally unique identifier for the post.  JSON data type: object  Read only  Context: `view`, `edit` |
| `id` | Unique identifier for the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `modified` | The date the revision was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `modified_gmt` | The date the revision was last modified, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `parent` | The ID for the parent of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `slug` | An alphanumeric identifier for the revision unique to its type.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `title` | The title for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `content` | The content for the post.  JSON data type: object  Context: `view`, `edit` |
| `excerpt` | The excerpt for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |

## List Post Revisions

 Query this endpoint to retrieve a collection of post revisions. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/posts/<parent>/revisions`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/posts/<parent>/revisions`

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set. |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by object attribute.  Default: `date`   One of: `date`, `id`, `include`, `relevance`, `slug`, `include_slugs`, `title` |

## Retrieve a Post Revision

### Definition &amp; Example Request

 `GET /wp/v2/posts/<parent>/revisions/<id>`

 Query this endpoint to retrieve a specific post revision record.

 `$ curl https://example.com/wp-json/wp/v2/posts/<parent>/revisions/<id>`

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `id` | Unique identifier for the revision. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Delete a Post Revision

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `id` | Unique identifier for the revision. |
| `force` | Required to be true, as revisions do not support trashing. |

### Definition

 `DELETE /wp/v2/posts/<parent>/revisions/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/posts/<parent>/revisions/<id>`

## Retrieve a Post Revision

### Definition &amp; Example Request

 `GET /wp/v2/posts/<id>/autosaves`

 Query this endpoint to retrieve a specific post revision record.

 `$ curl https://example.com/wp-json/wp/v2/posts/<id>/autosaves`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Create a Post Revision

### Arguments

| `<a href="#schema-parent">parent</a>` | The ID for the parent of the autosave. |
|---|---|
| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-password">password</a>` | A password to protect access to the content and excerpt. |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-content">content</a>` | The content for the post. |
| `<a href="#schema-author">author</a>` | The ID for the author of the post. |
| `<a href="#schema-excerpt">excerpt</a>` | The excerpt for the post. |
| `<a href="#schema-featured_media">featured_media</a>` | The ID of the featured media for the post. |
| `<a href="#schema-comment_status">comment_status</a>` | Whether or not comments are open on the post.    One of: `open`, `closed` |
| `<a href="#schema-ping_status">ping_status</a>` | Whether or not the post can be pinged.    One of: `open`, `closed` |
| `<a href="#schema-format">format</a>` | The format for the post.    One of: `standard`, `aside`, `chat`, `gallery`, `link`, `image`, `quote`, `status`, `video`, `audio` |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-sticky">sticky</a>` | Whether or not the post should be treated as sticky. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |
| `<a href="#schema-categories">categories</a>` | The terms assigned to the post in the category taxonomy. |
| `<a href="#schema-tags">tags</a>` | The terms assigned to the post in the post\_tag taxonomy. |

### Definition

 `POST /wp/v2/posts/<id>/autosaves`

## Retrieve a Post Revision

### Definition &amp; Example Request

 `GET /wp/v2/posts/<parent>/autosaves/<id>`

 Query this endpoint to retrieve a specific post revision record.

 `$ curl https://example.com/wp-json/wp/v2/posts/<parent>/autosaves/<id>`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `id` | The ID for the autosave. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Pages <a name="rest-api/reference/pages" />

Source: https://developer.wordpress.org/rest-api/reference/pages/

## Schema

The schema defines all the fields that exist within a page record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `date` | The date the post was published, in the site's timezone.  JSON data type: string or null,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
|---|---|
| `date_gmt` | The date the post was published, as GMT.  JSON data type: string or null,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | The globally unique identifier for the post.  JSON data type: object  Read only  Context: `view`, `edit` |
| `id` | Unique identifier for the post.  JSON data type: integer  Read only  Context: `view`, `edit`, `embed` |
| `link` | URL to the post.  JSON data type: string,    Format: uri  Read only  Context: `view`, `edit`, `embed` |
| `modified` | The date the post was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `modified_gmt` | The date the post was last modified, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `slug` | An alphanumeric identifier for the post unique to its type.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `status` | A named status for the post.  JSON data type: string  Context: `view`, `edit`   One of: `publish`, `future`, `draft`, `pending`, `private` |
| `type` | Type of post.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `password` | A password to protect access to the content and excerpt.  JSON data type: string  Context: `edit` |
| `permalink_template` | Permalink template for the post.  JSON data type: string  Read only  Context: `edit` |
| `generated_slug` | Slug automatically generated from the post title.  JSON data type: string  Read only  Context: `edit` |
| `parent` | The ID for the parent of the post.  JSON data type: integer  Context: `view`, `edit` |
| `title` | The title for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `content` | The content for the post.  JSON data type: object  Context: `view`, `edit` |
| `author` | The ID for the author of the post.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `excerpt` | The excerpt for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `featured_media` | The ID of the featured media for the post.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `comment_status` | Whether or not comments are open on the post.  JSON data type: string  Context: `view`, `edit`   One of: `open`, `closed` |
| `ping_status` | Whether or not the post can be pinged.  JSON data type: string  Context: `view`, `edit`   One of: `open`, `closed` |
| `menu_order` | The order of the post in relation to other posts.  JSON data type: integer  Context: `view`, `edit` |
| `meta` | Meta fields.  JSON data type: object  Context: `view`, `edit` |
| `template` | The theme file to use to display the post.  JSON data type: string  Context: `view`, `edit` |

## List Pages

 Query this endpoint to retrieve a collection of pages. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/pages`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/pages`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `10` |
| `search` | Limit results to those matching a string. |
| `after` | Limit response to posts published after a given ISO8601 compliant date. |
| `modified_after` | Limit response to posts modified after a given ISO8601 compliant date. |
| `author` | Limit result set to posts assigned to specific authors. |
| `author_exclude` | Ensure result set excludes posts assigned to specific authors. |
| `before` | Limit response to posts published before a given ISO8601 compliant date. |
| `modified_before` | Limit response to posts modified before a given ISO8601 compliant date. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `menu_order` | Limit result set to posts with a specific menu\_order value. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by post attribute.  Default: `date`   One of: `author`, `date`, `id`, `include`, `modified`, `parent`, `relevance`, `slug`, `include_slugs`, `title`, `menu_order` |
| `parent` | Limit result set to items with particular parent IDs. |
| `parent_exclude` | Limit result set to all items except those of a particular parent ID. |
| `search_columns` | Array of column names to be searched. |
| `slug` | Limit result set to posts with one or more specific slugs. |
| `status` | Limit result set to posts assigned one or more statuses.  Default: `publish` |

## Create a Page

### Arguments

| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
|---|---|
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-password">password</a>` | A password to protect access to the content and excerpt. |
| `<a href="#schema-parent">parent</a>` | The ID for the parent of the post. |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-content">content</a>` | The content for the post. |
| `<a href="#schema-author">author</a>` | The ID for the author of the post. |
| `<a href="#schema-excerpt">excerpt</a>` | The excerpt for the post. |
| `<a href="#schema-featured_media">featured_media</a>` | The ID of the featured media for the post. |
| `<a href="#schema-comment_status">comment_status</a>` | Whether or not comments are open on the post.    One of: `open`, `closed` |
| `<a href="#schema-ping_status">ping_status</a>` | Whether or not the post can be pinged.    One of: `open`, `closed` |
| `<a href="#schema-menu_order">menu_order</a>` | The order of the post in relation to other posts. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |

### Definition

 `POST /wp/v2/pages`

## Retrieve a Page

### Definition &amp; Example Request

 `GET /wp/v2/pages/<id>`

 Query this endpoint to retrieve a specific page record.

 `$ curl https://example.com/wp-json/wp/v2/pages/<id>`

### Arguments

| `id` | Unique identifier for the post. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
| `password` | The password for the post if it is password protected. |

## Update a Page

### Arguments

| `<a href="#schema-id">id</a>` | Unique identifier for the post. |
|---|---|
| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-password">password</a>` | A password to protect access to the content and excerpt. |
| `<a href="#schema-parent">parent</a>` | The ID for the parent of the post. |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-content">content</a>` | The content for the post. |
| `<a href="#schema-author">author</a>` | The ID for the author of the post. |
| `<a href="#schema-excerpt">excerpt</a>` | The excerpt for the post. |
| `<a href="#schema-featured_media">featured_media</a>` | The ID of the featured media for the post. |
| `<a href="#schema-comment_status">comment_status</a>` | Whether or not comments are open on the post.    One of: `open`, `closed` |
| `<a href="#schema-ping_status">ping_status</a>` | Whether or not the post can be pinged.    One of: `open`, `closed` |
| `<a href="#schema-menu_order">menu_order</a>` | The order of the post in relation to other posts. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |

### Definition

 `POST /wp/v2/pages/<id>`

### Example Request

 ``

## Delete a Page

### Arguments

| `id` | Unique identifier for the post. |
|---|---|
| `force` | Whether to bypass Trash and force deletion. |

### Definition

 `DELETE /wp/v2/pages/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/pages/<id>`

---

# Site Settings <a name="rest-api/reference/settings" />

Source: https://developer.wordpress.org/rest-api/reference/settings/

## Schema

The schema defines all the fields that exist within a Site Setting record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `title` | Site title.  JSON data type: string  Context: `` |
|---|---|
| `description` | Site tagline.  JSON data type: string  Context: `` |
| `url` | Site URL.  JSON data type: string,    Format: uri  Context: `` |
| `email` | This address is used for admin purposes, like new user notification.  JSON data type: string,    Format: email  Context: `` |
| `timezone` | A city in the same timezone as you.  JSON data type: string  Context: `` |
| `date_format` | A date format for all date strings.  JSON data type: string  Context: `` |
| `time_format` | A time format for all time strings.  JSON data type: string  Context: `` |
| `start_of_week` | A day number of the week that the week should start on.  JSON data type: integer  Context: `` |
| `language` | WordPress locale code.  JSON data type: string  Context: `` |
| `use_smilies` | Convert emoticons like :-) and :-P to graphics on display.  JSON data type: boolean  Context: `` |
| `default_category` | Default post category.  JSON data type: integer  Context: `` |
| `default_post_format` | Default post format.  JSON data type: string  Context: `` |
| `posts_per_page` | Blog pages show at most.  JSON data type: integer  Context: `` |
| `show_on_front` | What to show on the front page  JSON data type: string  Context: `` |
| `page_on_front` | The ID of the page that should be displayed on the front page  JSON data type: integer  Context: `` |
| `page_for_posts` | The ID of the page that should display the latest posts  JSON data type: integer  Context: `` |
| `default_ping_status` | Allow link notifications from other blogs (pingbacks and trackbacks) on new articles.  JSON data type: string  Context: ``   One of: `open`, `closed` |
| `default_comment_status` | Allow people to submit comments on new posts.  JSON data type: string  Context: ``   One of: `open`, `closed` |
| `site_logo` | Site logo.  JSON data type: integer  Context: `` |
| `site_icon` | Site icon.  JSON data type: integer  Context: `` |

## Retrieve a Site Setting

### Definition &amp; Example Request

 `GET /wp/v2/settings`

 Query this endpoint to retrieve a specific Site Setting record.

 `$ curl https://example.com/wp-json/wp/v2/settings`

 There are no arguments for this endpoint.

## Update a Site Setting

### Arguments

| `<a href="#schema-title">title</a>` | Site title. |
|---|---|
| `<a href="#schema-description">description</a>` | Site tagline. |
| `<a href="#schema-url">url</a>` | Site URL. |
| `<a href="#schema-email">email</a>` | This address is used for admin purposes, like new user notification. |
| `<a href="#schema-timezone">timezone</a>` | A city in the same timezone as you. |
| `<a href="#schema-date_format">date_format</a>` | A date format for all date strings. |
| `<a href="#schema-time_format">time_format</a>` | A time format for all time strings. |
| `<a href="#schema-start_of_week">start_of_week</a>` | A day number of the week that the week should start on. |
| `<a href="#schema-language">language</a>` | WordPress locale code. |
| `<a href="#schema-use_smilies">use_smilies</a>` | Convert emoticons like :-) and :-P to graphics on display. |
| `<a href="#schema-default_category">default_category</a>` | Default post category. |
| `<a href="#schema-default_post_format">default_post_format</a>` | Default post format. |
| `<a href="#schema-posts_per_page">posts_per_page</a>` | Blog pages show at most. |
| `<a href="#schema-show_on_front">show_on_front</a>` | What to show on the front page |
| `<a href="#schema-page_on_front">page_on_front</a>` | The ID of the page that should be displayed on the front page |
| `<a href="#schema-page_for_posts">page_for_posts</a>` | The ID of the page that should display the latest posts |
| `<a href="#schema-default_ping_status">default_ping_status</a>` | Allow link notifications from other blogs (pingbacks and trackbacks) on new articles.    One of: `open`, `closed` |
| `<a href="#schema-default_comment_status">default_comment_status</a>` | Allow people to submit comments on new posts.    One of: `open`, `closed` |
| `<a href="#schema-site_logo">site_logo</a>` | Site logo. |
| `<a href="#schema-site_icon">site_icon</a>` | Site icon. |

### Definition

 `POST /wp/v2/settings`

### Example Request

 ``

---

# Users <a name="rest-api/reference/users" />

Source: https://developer.wordpress.org/rest-api/reference/users/

## Schema

The schema defines all the fields that exist within a user record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | Unique identifier for the user.  JSON data type: integer  Read only  Context: `embed`, `view`, `edit` |
|---|---|
| `username` | Login name for the user.  JSON data type: string  Context: `edit` |
| `name` | Display name for the user.  JSON data type: string  Context: `embed`, `view`, `edit` |
| `first_name` | First name for the user.  JSON data type: string  Context: `edit` |
| `last_name` | Last name for the user.  JSON data type: string  Context: `edit` |
| `email` | The email address for the user.  JSON data type: string,    Format: email  Context: `edit` |
| `url` | URL of the user.  JSON data type: string,    Format: uri  Context: `embed`, `view`, `edit` |
| `description` | Description of the user.  JSON data type: string  Context: `embed`, `view`, `edit` |
| `link` | Author URL of the user.  JSON data type: string,    Format: uri  Read only  Context: `embed`, `view`, `edit` |
| `locale` | Locale for the user.  JSON data type: string  Context: `edit`   One of: ``, `en_US` |
| `nickname` | The nickname for the user.  JSON data type: string  Context: `edit` |
| `slug` | An alphanumeric identifier for the user.  JSON data type: string  Context: `embed`, `view`, `edit` |
| `registered_date` | Registration date for the user.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `edit` |
| `roles` | Roles assigned to the user.  JSON data type: array  Context: `edit` |
| `password` | Password for the user (never included).  JSON data type: string  Context: `` |
| `capabilities` | All capabilities assigned to the user.  JSON data type: object  Read only  Context: `edit` |
| `extra_capabilities` | Any extra capabilities assigned to the user.  JSON data type: object  Read only  Context: `edit` |
| `avatar_urls` | Avatar URLs for the user.  JSON data type: object  Read only  Context: `embed`, `view`, `edit` |
| `meta` | Meta fields.  JSON data type: object  Context: `view`, `edit` |

## List Users

 Query this endpoint to retrieve a collection of users. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/users`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/users`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `10` |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `asc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by user attribute.  Default: `name`   One of: `id`, `include`, `name`, `registered_date`, `slug`, `include_slugs`, `email`, `url` |
| `slug` | Limit result set to users with one or more specific slugs. |
| `roles` | Limit result set to users matching at least one specific role provided. Accepts csv list or single role. |
| `capabilities` | Limit result set to users matching at least one specific capability provided. Accepts csv list or single capability. |
| `who` | Limit result set to users who are considered authors.    One of: `authors` |
| `has_published_posts` | Limit result set to users who have published posts. |

## Create a User

### Arguments

| `<a href="#schema-username">username</a>` | Login name for the user.  Required: 1 |
|---|---|
| `<a href="#schema-name">name</a>` | Display name for the user. |
| `<a href="#schema-first_name">first_name</a>` | First name for the user. |
| `<a href="#schema-last_name">last_name</a>` | Last name for the user. |
| `<a href="#schema-email">email</a>` | The email address for the user.  Required: 1 |
| `<a href="#schema-url">url</a>` | URL of the user. |
| `<a href="#schema-description">description</a>` | Description of the user. |
| `<a href="#schema-locale">locale</a>` | Locale for the user.    One of: ``, `en_US` |
| `<a href="#schema-nickname">nickname</a>` | The nickname for the user. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the user. |
| `<a href="#schema-roles">roles</a>` | Roles assigned to the user. |
| `<a href="#schema-password">password</a>` | Password for the user (never included).  Required: 1 |
| `<a href="#schema-meta">meta</a>` | Meta fields. |

### Definition

 `POST /wp/v2/users`

## Retrieve a User

### Definition &amp; Example Request

 `GET /wp/v2/users/<id>`

 Query this endpoint to retrieve a specific user record.

 `$ curl https://example.com/wp-json/wp/v2/users/<id>`

### Arguments

| `id` | Unique identifier for the user. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Update a User

### Arguments

| `<a href="#schema-id">id</a>` | Unique identifier for the user. |
|---|---|
| `<a href="#schema-username">username</a>` | Login name for the user. |
| `<a href="#schema-name">name</a>` | Display name for the user. |
| `<a href="#schema-first_name">first_name</a>` | First name for the user. |
| `<a href="#schema-last_name">last_name</a>` | Last name for the user. |
| `<a href="#schema-email">email</a>` | The email address for the user. |
| `<a href="#schema-url">url</a>` | URL of the user. |
| `<a href="#schema-description">description</a>` | Description of the user. |
| `<a href="#schema-locale">locale</a>` | Locale for the user.    One of: ``, `en_US` |
| `<a href="#schema-nickname">nickname</a>` | The nickname for the user. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the user. |
| `<a href="#schema-roles">roles</a>` | Roles assigned to the user. |
| `<a href="#schema-password">password</a>` | Password for the user (never included). |
| `<a href="#schema-meta">meta</a>` | Meta fields. |

### Definition

 `POST /wp/v2/users/<id>`

### Example Request

 ``

## Delete a User

### Arguments

| `id` | Unique identifier for the user. |
|---|---|
| `force` | Required to be true, as users do not support trashing. |
| `reassign` | Reassign the deleted user's posts and links to this user ID.  Required: 1 |

### Definition

 `DELETE /wp/v2/users/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/users/<id>`

## Retrieve a User

### Definition &amp; Example Request

 `GET /wp/v2/users/me`

 Query this endpoint to retrieve a specific user record.

 `$ curl https://example.com/wp-json/wp/v2/users/me`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|

## Update a User

### Arguments

| `<a href="#schema-username">username</a>` | Login name for the user. |
|---|---|
| `<a href="#schema-name">name</a>` | Display name for the user. |
| `<a href="#schema-first_name">first_name</a>` | First name for the user. |
| `<a href="#schema-last_name">last_name</a>` | Last name for the user. |
| `<a href="#schema-email">email</a>` | The email address for the user. |
| `<a href="#schema-url">url</a>` | URL of the user. |
| `<a href="#schema-description">description</a>` | Description of the user. |
| `<a href="#schema-locale">locale</a>` | Locale for the user.    One of: ``, `en_US` |
| `<a href="#schema-nickname">nickname</a>` | The nickname for the user. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the user. |
| `<a href="#schema-roles">roles</a>` | Roles assigned to the user. |
| `<a href="#schema-password">password</a>` | Password for the user (never included). |
| `<a href="#schema-meta">meta</a>` | Meta fields. |

### Definition

 `POST /wp/v2/users/me`

### Example Request

 ``

## Delete a User

### Arguments

| `force` | Required to be true, as users do not support trashing. |
|---|---|
| `reassign` | Reassign the deleted user's posts and links to this user ID.  Required: 1 |

### Definition

 `DELETE /wp/v2/users/me`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/users/me`

---

# Media <a name="rest-api/reference/media" />

Source: https://developer.wordpress.org/rest-api/reference/media/

## Schema

The schema defines all the fields that exist within a Media Item record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `date` | The date the post was published, in the site's timezone.  JSON data type: string or null,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
|---|---|
| `date_gmt` | The date the post was published, as GMT.  JSON data type: string or null,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | The globally unique identifier for the post.  JSON data type: object  Read only  Context: `view`, `edit` |
| `id` | Unique identifier for the post.  JSON data type: integer  Read only  Context: `view`, `edit`, `embed` |
| `link` | URL to the post.  JSON data type: string,    Format: uri  Read only  Context: `view`, `edit`, `embed` |
| `modified` | The date the post was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `modified_gmt` | The date the post was last modified, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `slug` | An alphanumeric identifier for the post unique to its type.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `status` | A named status for the post.  JSON data type: string  Context: `view`, `edit`   One of: `publish`, `future`, `draft`, `pending`, `private` |
| `type` | Type of post.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `permalink_template` | Permalink template for the post.  JSON data type: string  Read only  Context: `edit` |
| `generated_slug` | Slug automatically generated from the post title.  JSON data type: string  Read only  Context: `edit` |
| `title` | The title for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `author` | The ID for the author of the post.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `comment_status` | Whether or not comments are open on the post.  JSON data type: string  Context: `view`, `edit`   One of: `open`, `closed` |
| `ping_status` | Whether or not the post can be pinged.  JSON data type: string  Context: `view`, `edit`   One of: `open`, `closed` |
| `meta` | Meta fields.  JSON data type: object  Context: `view`, `edit` |
| `template` | The theme file to use to display the post.  JSON data type: string  Context: `view`, `edit` |
| `alt_text` | Alternative text to display when attachment is not displayed.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `caption` | The attachment caption.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `description` | The attachment description.  JSON data type: object  Context: `view`, `edit` |
| `media_type` | Attachment type.  JSON data type: string  Read only  Context: `view`, `edit`, `embed`   One of: `image`, `file` |
| `mime_type` | The attachment MIME type.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `media_details` | Details about the media file, specific to its type.  JSON data type: object  Read only  Context: `view`, `edit`, `embed` |
| `post` | The ID for the associated post of the attachment.  JSON data type: integer  Context: `view`, `edit` |
| `source_url` | URL to the original attachment file.  JSON data type: string,    Format: uri  Read only  Context: `view`, `edit`, `embed` |
| `missing_image_sizes` | List of the missing image sizes of the attachment.  JSON data type: array  Read only  Context: `edit` |

## List Media

 Query this endpoint to retrieve a collection of media. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/media`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/media`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `10` |
| `search` | Limit results to those matching a string. |
| `after` | Limit response to posts published after a given ISO8601 compliant date. |
| `modified_after` | Limit response to posts modified after a given ISO8601 compliant date. |
| `author` | Limit result set to posts assigned to specific authors. |
| `author_exclude` | Ensure result set excludes posts assigned to specific authors. |
| `before` | Limit response to posts published before a given ISO8601 compliant date. |
| `modified_before` | Limit response to posts modified before a given ISO8601 compliant date. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by post attribute.  Default: `date`   One of: `author`, `date`, `id`, `include`, `modified`, `parent`, `relevance`, `slug`, `include_slugs`, `title` |
| `parent` | Limit result set to items with particular parent IDs. |
| `parent_exclude` | Limit result set to all items except those of a particular parent ID. |
| `search_columns` | Array of column names to be searched. |
| `slug` | Limit result set to posts with one or more specific slugs. |
| `status` | Limit result set to posts assigned one or more statuses.  Default: `inherit` |
| `media_type` | Limit result set to attachments of a particular media type.    One of: `image`, `video`, `text`, `application`, `audio` |
| `mime_type` | Limit result set to attachments of a particular MIME type. |

## Create a Media Item

### Arguments

| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
|---|---|
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-author">author</a>` | The ID for the author of the post. |
| `<a href="#schema-comment_status">comment_status</a>` | Whether or not comments are open on the post.    One of: `open`, `closed` |
| `<a href="#schema-ping_status">ping_status</a>` | Whether or not the post can be pinged.    One of: `open`, `closed` |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |
| `<a href="#schema-alt_text">alt_text</a>` | Alternative text to display when attachment is not displayed. |
| `<a href="#schema-caption">caption</a>` | The attachment caption. |
| `<a href="#schema-description">description</a>` | The attachment description. |
| `<a href="#schema-post">post</a>` | The ID for the associated post of the attachment. |

### Definition

 `POST /wp/v2/media`

## Retrieve a Media Item

### Definition &amp; Example Request

 `GET /wp/v2/media/<id>`

 Query this endpoint to retrieve a specific Media Item record.

 `$ curl https://example.com/wp-json/wp/v2/media/<id>`

### Arguments

| `id` | Unique identifier for the post. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Update a Media Item

### Arguments

| `<a href="#schema-id">id</a>` | Unique identifier for the post. |
|---|---|
| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-author">author</a>` | The ID for the author of the post. |
| `<a href="#schema-comment_status">comment_status</a>` | Whether or not comments are open on the post.    One of: `open`, `closed` |
| `<a href="#schema-ping_status">ping_status</a>` | Whether or not the post can be pinged.    One of: `open`, `closed` |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |
| `<a href="#schema-alt_text">alt_text</a>` | Alternative text to display when attachment is not displayed. |
| `<a href="#schema-caption">caption</a>` | The attachment caption. |
| `<a href="#schema-description">description</a>` | The attachment description. |
| `<a href="#schema-post">post</a>` | The ID for the associated post of the attachment. |

### Definition

 `POST /wp/v2/media/<id>`

### Example Request

 ``

## Delete a Media Item

### Arguments

| `id` | Unique identifier for the post. |
|---|---|
| `force` | Whether to bypass Trash and force deletion. |

### Definition

 `DELETE /wp/v2/media/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/media/<id>`

---

# Types <a name="rest-api/reference/post-types" />

Source: https://developer.wordpress.org/rest-api/reference/post-types/

## Schema

The schema defines all the fields that exist within a type record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `capabilities` | All capabilities used by the post type.  JSON data type: object  Read only  Context: `edit` |
|---|---|
| `description` | A human-readable description of the post type.  JSON data type: string  Read only  Context: `view`, `edit` |
| `hierarchical` | Whether or not the post type should have children.  JSON data type: boolean  Read only  Context: `view`, `edit` |
| `viewable` | Whether or not the post type can be viewed.  JSON data type: boolean  Read only  Context: `edit` |
| `labels` | Human-readable labels for the post type for various contexts.  JSON data type: object  Read only  Context: `edit` |
| `name` | The title for the post type.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `slug` | An alphanumeric identifier for the post type.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `supports` | All features, supported by the post type.  JSON data type: object  Read only  Context: `edit` |
| `has_archive` | If the value is a string, the value will be used as the archive slug. If the value is false the post type has no archive.  JSON data type: string or boolean  Read only  Context: `view`, `edit` |
| `taxonomies` | Taxonomies associated with post type.  JSON data type: array  Read only  Context: `view`, `edit` |
| `rest_base` | REST base route for the post type.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `rest_namespace` | REST route's namespace for the post type.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `visibility` | The visibility settings for the post type.  JSON data type: object  Read only  Context: `edit` |
| `icon` | The icon for the post type.  JSON data type: string or null  Read only  Context: `view`, `edit`, `embed` |

## Retrieve a Type

### Definition &amp; Example Request

 `GET /wp/v2/types`

 Query this endpoint to retrieve a specific type record.

 `$ curl https://example.com/wp-json/wp/v2/types`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|

## Retrieve a Type

### Definition &amp; Example Request

 `GET /wp/v2/types/<type>`

 Query this endpoint to retrieve a specific type record.

 `$ curl https://example.com/wp-json/wp/v2/types/<type>`

### Arguments

| `type` | An alphanumeric identifier for the post type. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Categories <a name="rest-api/reference/categories" />

Source: https://developer.wordpress.org/rest-api/reference/categories/

## Schema

The schema defines all the fields that exist within a category record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | Unique identifier for the term.  JSON data type: integer  Read only  Context: `view`, `embed`, `edit` |
|---|---|
| `count` | Number of published posts for the term.  JSON data type: integer  Read only  Context: `view`, `edit` |
| `description` | HTML description of the term.  JSON data type: string  Context: `view`, `edit` |
| `link` | URL of the term.  JSON data type: string,    Format: uri  Read only  Context: `view`, `embed`, `edit` |
| `name` | HTML title for the term.  JSON data type: string  Context: `view`, `embed`, `edit` |
| `slug` | An alphanumeric identifier for the term unique to its type.  JSON data type: string  Context: `view`, `embed`, `edit` |
| `taxonomy` | Type attribution for the term.  JSON data type: string  Read only  Context: `view`, `embed`, `edit`   One of: `category` |
| `parent` | The parent term ID.  JSON data type: integer  Context: `view`, `edit` |
| `meta` | Meta fields.  JSON data type: object  Context: `view`, `edit` |

## List Categories

 Query this endpoint to retrieve a collection of categories. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/categories`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/categories`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `10` |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `order` | Order sort attribute ascending or descending.  Default: `asc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by term attribute.  Default: `name`   One of: `id`, `include`, `name`, `slug`, `include_slugs`, `term_group`, `description`, `count` |
| `hide_empty` | Whether to hide terms not assigned to any posts. |
| `parent` | Limit result set to terms assigned to a specific parent. |
| `post` | Limit result set to terms assigned to a specific post. |
| `slug` | Limit result set to terms with one or more specific slugs. |

## Create a Category

### Arguments

| `<a href="#schema-description">description</a>` | HTML description of the term. |
|---|---|
| `<a href="#schema-name">name</a>` | HTML title for the term.  Required: 1 |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the term unique to its type. |
| `<a href="#schema-parent">parent</a>` | The parent term ID. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |

### Definition

 `POST /wp/v2/categories`

## Retrieve a Category

### Definition &amp; Example Request

 `GET /wp/v2/categories/<id>`

 Query this endpoint to retrieve a specific category record.

 `$ curl https://example.com/wp-json/wp/v2/categories/<id>`

### Arguments

| `id` | Unique identifier for the term. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Update a Category

### Arguments

| `<a href="#schema-id">id</a>` | Unique identifier for the term. |
|---|---|
| `<a href="#schema-description">description</a>` | HTML description of the term. |
| `<a href="#schema-name">name</a>` | HTML title for the term. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the term unique to its type. |
| `<a href="#schema-parent">parent</a>` | The parent term ID. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |

### Definition

 `POST /wp/v2/categories/<id>`

### Example Request

 ``

## Delete a Category

### Arguments

| `id` | Unique identifier for the term. |
|---|---|
| `force` | Required to be true, as terms do not support trashing. |

### Definition

 `DELETE /wp/v2/categories/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/categories/<id>`

---

# Statuses <a name="rest-api/reference/post-statuses" />

Source: https://developer.wordpress.org/rest-api/reference/post-statuses/

## Schema

The schema defines all the fields that exist within a status record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `name` | The title for the status.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
|---|---|
| `private` | Whether posts with this status should be private.  JSON data type: boolean  Read only  Context: `edit` |
| `protected` | Whether posts with this status should be protected.  JSON data type: boolean  Read only  Context: `edit` |
| `public` | Whether posts of this status should be shown in the front end of the site.  JSON data type: boolean  Read only  Context: `view`, `edit` |
| `queryable` | Whether posts with this status should be publicly-queryable.  JSON data type: boolean  Read only  Context: `view`, `edit` |
| `show_in_list` | Whether to include posts in the edit listing for their post type.  JSON data type: boolean  Read only  Context: `edit` |
| `slug` | An alphanumeric identifier for the status.  JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `date_floating` | Whether posts of this status may have floating published dates.  JSON data type: boolean  Read only  Context: `view`, `edit` |

## Retrieve a Status

### Definition &amp; Example Request

 `GET /wp/v2/statuses`

 Query this endpoint to retrieve a specific status record.

 `$ curl https://example.com/wp-json/wp/v2/statuses`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|

## Retrieve a Status

### Definition &amp; Example Request

 `GET /wp/v2/statuses/<status>`

 Query this endpoint to retrieve a specific status record.

 `$ curl https://example.com/wp-json/wp/v2/statuses/<status>`

### Arguments

| `status` | An alphanumeric identifier for the status. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Comments <a name="rest-api/reference/comments" />

Source: https://developer.wordpress.org/rest-api/reference/comments/

## Schema

The schema defines all the fields that exist within a comment record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | Unique identifier for the comment.  JSON data type: integer  Read only  Context: `view`, `edit`, `embed` |
|---|---|
| `author` | The ID of the user object, if author was a user.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `author_email` | Email address for the comment author.  JSON data type: string,    Format: email  Context: `edit` |
| `author_ip` | IP address for the comment author.  JSON data type: string,    Format: ip  Context: `edit` |
| `author_name` | Display name for the comment author.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `author_url` | URL for the comment author.  JSON data type: string,    Format: uri  Context: `view`, `edit`, `embed` |
| `author_user_agent` | User agent for the comment author.  JSON data type: string  Context: `edit` |
| `content` | The content for the comment.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `date` | The date the comment was published, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
| `date_gmt` | The date the comment was published, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `link` | URL to the comment.  JSON data type: string,    Format: uri  Read only  Context: `view`, `edit`, `embed` |
| `parent` | The ID for the parent of the comment.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `post` | The ID of the associated post object.  JSON data type: integer  Context: `view`, `edit` |
| `status` | State of the comment.  JSON data type: string  Context: `view`, `edit` |
| `type` | Type of the comment.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `author_avatar_urls` | Avatar URLs for the comment author.  JSON data type: object  Read only  Context: `view`, `edit`, `embed` |
| `meta` | Meta fields.  JSON data type: object  Context: `view`, `edit` |

## List Comments

 Query this endpoint to retrieve a collection of comments. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/comments`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/comments`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `10` |
| `search` | Limit results to those matching a string. |
| `after` | Limit response to comments published after a given ISO8601 compliant date. |
| `author` | Limit result set to comments assigned to specific user IDs. Requires authorization. |
| `author_exclude` | Ensure result set excludes comments assigned to specific user IDs. Requires authorization. |
| `author_email` | Limit result set to that from a specific author email. Requires authorization. |
| `before` | Limit response to comments published before a given ISO8601 compliant date. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by comment attribute.  Default: `date_gmt`   One of: `date`, `date_gmt`, `id`, `include`, `post`, `parent`, `type` |
| `parent` | Limit result set to comments of specific parent IDs. |
| `parent_exclude` | Ensure result set excludes specific parent IDs. |
| `post` | Limit result set to comments assigned to specific post IDs. |
| `status` | Limit result set to comments assigned a specific status. Requires authorization.  Default: `approve` |
| `type` | Limit result set to comments assigned a specific type. Requires authorization.  Default: `comment` |
| `password` | The password for the post if it is password protected. |

## Create a Comment

### Arguments

| `<a href="#schema-author">author</a>` | The ID of the user object, if author was a user. |
|---|---|
| `<a href="#schema-author_email">author_email</a>` | Email address for the comment author. |
| `<a href="#schema-author_ip">author_ip</a>` | IP address for the comment author. |
| `<a href="#schema-author_name">author_name</a>` | Display name for the comment author. |
| `<a href="#schema-author_url">author_url</a>` | URL for the comment author. |
| `<a href="#schema-author_user_agent">author_user_agent</a>` | User agent for the comment author. |
| `<a href="#schema-content">content</a>` | The content for the comment. |
| `<a href="#schema-date">date</a>` | The date the comment was published, in the site's timezone. |
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the comment was published, as GMT. |
| `<a href="#schema-parent">parent</a>` | The ID for the parent of the comment. |
| `<a href="#schema-post">post</a>` | The ID of the associated post object. |
| `<a href="#schema-status">status</a>` | State of the comment. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |

### Definition

 `POST /wp/v2/comments`

## Retrieve a Comment

### Definition &amp; Example Request

 `GET /wp/v2/comments/<id>`

 Query this endpoint to retrieve a specific comment record.

 `$ curl https://example.com/wp-json/wp/v2/comments/<id>`

### Arguments

| `id` | Unique identifier for the comment. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
| `password` | The password for the parent post of the comment (if the post is password protected). |

## Update a Comment

### Arguments

| `<a href="#schema-id">id</a>` | Unique identifier for the comment. |
|---|---|
| `<a href="#schema-author">author</a>` | The ID of the user object, if author was a user. |
| `<a href="#schema-author_email">author_email</a>` | Email address for the comment author. |
| `<a href="#schema-author_ip">author_ip</a>` | IP address for the comment author. |
| `<a href="#schema-author_name">author_name</a>` | Display name for the comment author. |
| `<a href="#schema-author_url">author_url</a>` | URL for the comment author. |
| `<a href="#schema-author_user_agent">author_user_agent</a>` | User agent for the comment author. |
| `<a href="#schema-content">content</a>` | The content for the comment. |
| `<a href="#schema-date">date</a>` | The date the comment was published, in the site's timezone. |
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the comment was published, as GMT. |
| `<a href="#schema-parent">parent</a>` | The ID for the parent of the comment. |
| `<a href="#schema-post">post</a>` | The ID of the associated post object. |
| `<a href="#schema-status">status</a>` | State of the comment. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |

### Definition

 `POST /wp/v2/comments/<id>`

### Example Request

 ``

## Delete a Comment

### Arguments

| `id` | Unique identifier for the comment. |
|---|---|
| `force` | Whether to bypass Trash and force deletion. |
| `password` | The password for the parent post of the comment (if the post is password protected). |

### Definition

 `DELETE /wp/v2/comments/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/comments/<id>`

---

# Tags <a name="rest-api/reference/tags" />

Source: https://developer.wordpress.org/rest-api/reference/tags/

## Schema

The schema defines all the fields that exist within a tag record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `id` | Unique identifier for the term.  JSON data type: integer  Read only  Context: `view`, `embed`, `edit` |
|---|---|
| `count` | Number of published posts for the term.  JSON data type: integer  Read only  Context: `view`, `edit` |
| `description` | HTML description of the term.  JSON data type: string  Context: `view`, `edit` |
| `link` | URL of the term.  JSON data type: string,    Format: uri  Read only  Context: `view`, `embed`, `edit` |
| `name` | HTML title for the term.  JSON data type: string  Context: `view`, `embed`, `edit` |
| `slug` | An alphanumeric identifier for the term unique to its type.  JSON data type: string  Context: `view`, `embed`, `edit` |
| `taxonomy` | Type attribution for the term.  JSON data type: string  Read only  Context: `view`, `embed`, `edit`   One of: `post_tag` |
| `meta` | Meta fields.  JSON data type: object  Context: `view`, `edit` |

## List Tags

 Query this endpoint to retrieve a collection of tags. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/tags`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/tags`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set.  Default: `10` |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `asc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by term attribute.  Default: `name`   One of: `id`, `include`, `name`, `slug`, `include_slugs`, `term_group`, `description`, `count` |
| `hide_empty` | Whether to hide terms not assigned to any posts. |
| `post` | Limit result set to terms assigned to a specific post. |
| `slug` | Limit result set to terms with one or more specific slugs. |

## Create a Tag

### Arguments

| `<a href="#schema-description">description</a>` | HTML description of the term. |
|---|---|
| `<a href="#schema-name">name</a>` | HTML title for the term.  Required: 1 |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the term unique to its type. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |

### Definition

 `POST /wp/v2/tags`

## Retrieve a Tag

### Definition &amp; Example Request

 `GET /wp/v2/tags/<id>`

 Query this endpoint to retrieve a specific tag record.

 `$ curl https://example.com/wp-json/wp/v2/tags/<id>`

### Arguments

| `id` | Unique identifier for the term. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Update a Tag

### Arguments

| `<a href="#schema-id">id</a>` | Unique identifier for the term. |
|---|---|
| `<a href="#schema-description">description</a>` | HTML description of the term. |
| `<a href="#schema-name">name</a>` | HTML title for the term. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the term unique to its type. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |

### Definition

 `POST /wp/v2/tags/<id>`

### Example Request

 ``

## Delete a Tag

### Arguments

| `id` | Unique identifier for the term. |
|---|---|
| `force` | Required to be true, as terms do not support trashing. |

### Definition

 `DELETE /wp/v2/tags/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/tags/<id>`

---

# Taxonomies <a name="rest-api/reference/taxonomies" />

Source: https://developer.wordpress.org/rest-api/reference/taxonomies/

## Schema

The schema defines all the fields that exist within a taxonomy record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `capabilities` | All capabilities used by the taxonomy.  JSON data type: object  Read only  Context: `edit` |
|---|---|
| `description` | A human-readable description of the taxonomy.  JSON data type: string  Read only  Context: `view`, `edit` |
| `hierarchical` | Whether or not the taxonomy should have children.  JSON data type: boolean  Read only  Context: `view`, `edit` |
| `labels` | Human-readable labels for the taxonomy for various contexts.  JSON data type: object  Read only  Context: `edit` |
| `name` | The title for the taxonomy.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `slug` | An alphanumeric identifier for the taxonomy.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `show_cloud` | Whether or not the term cloud should be displayed.  JSON data type: boolean  Read only  Context: `edit` |
| `types` | Types associated with the taxonomy.  JSON data type: array  Read only  Context: `view`, `edit` |
| `rest_base` | REST base route for the taxonomy.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `rest_namespace` | REST namespace route for the taxonomy.  JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `visibility` | The visibility settings for the taxonomy.  JSON data type: object  Read only  Context: `edit` |

## Retrieve a Taxonomy

### Definition &amp; Example Request

 `GET /wp/v2/taxonomies`

 Query this endpoint to retrieve a specific taxonomy record.

 `$ curl https://example.com/wp-json/wp/v2/taxonomies`

### Arguments

| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
|---|---|
| `type` | Limit results to taxonomies associated with a specific post type. |

## Retrieve a Taxonomy

### Definition &amp; Example Request

 `GET /wp/v2/taxonomies/<taxonomy>`

 Query this endpoint to retrieve a specific taxonomy record.

 `$ curl https://example.com/wp-json/wp/v2/taxonomies/<taxonomy>`

### Arguments

| `taxonomy` | An alphanumeric identifier for the taxonomy. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Page Revisions <a name="rest-api/reference/page-revisions" />

Source: https://developer.wordpress.org/rest-api/reference/page-revisions/

## Schema

The schema defines all the fields that exist within a page revision record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

| `author` | The ID for the author of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
|---|---|
| `date` | The date the revision was published, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
| `date_gmt` | The date the revision was published, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | The globally unique identifier for the post.  JSON data type: object  Read only  Context: `view`, `edit` |
| `id` | Unique identifier for the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `modified` | The date the revision was last modified, in the site's timezone.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `modified_gmt` | The date the revision was last modified, as GMT.  JSON data type: string,    Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `parent` | The ID for the parent of the revision.  JSON data type: integer  Context: `view`, `edit`, `embed` |
| `slug` | An alphanumeric identifier for the revision unique to its type.  JSON data type: string  Context: `view`, `edit`, `embed` |
| `title` | The title for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |
| `content` | The content for the post.  JSON data type: object  Context: `view`, `edit` |
| `excerpt` | The excerpt for the post.  JSON data type: object  Context: `view`, `edit`, `embed` |

## List Page Revisions

 Query this endpoint to retrieve a collection of page revisions. The response you receive can be controlled and filtered using the URL query parameters below.

### Definition

 `GET /wp/v2/pages/<parent>/revisions`

### Example Request

 `$ curl https://example.com/wp-json/wp/v2/pages/<parent>/revisions`

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |
| `page` | Current page of the collection.  Default: `1` |
| `per_page` | Maximum number of items to be returned in result set. |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending.  Default: `desc`   One of: `asc`, `desc` |
| `orderby` | Sort collection by object attribute.  Default: `date`   One of: `date`, `id`, `include`, `relevance`, `slug`, `include_slugs`, `title` |

## Retrieve a Page Revision

### Definition &amp; Example Request

 `GET /wp/v2/pages/<parent>/revisions/<id>`

 Query this endpoint to retrieve a specific page revision record.

 `$ curl https://example.com/wp-json/wp/v2/pages/<parent>/revisions/<id>`

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `id` | Unique identifier for the revision. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Delete a Page Revision

### Arguments

| `parent` | The ID for the parent of the revision. |
|---|---|
| `id` | Unique identifier for the revision. |
| `force` | Required to be true, as revisions do not support trashing. |

### Definition

 `DELETE /wp/v2/pages/<parent>/revisions/<id>`

### Example Request

 `$ curl -X DELETE https://example.com/wp-json/wp/v2/pages/<parent>/revisions/<id>`

## Retrieve a Page Revision

### Definition &amp; Example Request

 `GET /wp/v2/pages/<id>/autosaves`

 Query this endpoint to retrieve a specific page revision record.

 `$ curl https://example.com/wp-json/wp/v2/pages/<id>/autosaves`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

## Create a Page Revision

### Arguments

| `<a href="#schema-parent">parent</a>` | The ID for the parent of the post. |
|---|---|
| `<a href="#schema-date">date</a>` | The date the post was published, in the site's timezone. |
| `<a href="#schema-date_gmt">date_gmt</a>` | The date the post was published, as GMT. |
| `<a href="#schema-slug">slug</a>` | An alphanumeric identifier for the post unique to its type. |
| `<a href="#schema-status">status</a>` | A named status for the post.    One of: `publish`, `future`, `draft`, `pending`, `private` |
| `<a href="#schema-password">password</a>` | A password to protect access to the content and excerpt. |
| `<a href="#schema-title">title</a>` | The title for the post. |
| `<a href="#schema-content">content</a>` | The content for the post. |
| `<a href="#schema-author">author</a>` | The ID for the author of the post. |
| `<a href="#schema-excerpt">excerpt</a>` | The excerpt for the post. |
| `<a href="#schema-featured_media">featured_media</a>` | The ID of the featured media for the post. |
| `<a href="#schema-comment_status">comment_status</a>` | Whether or not comments are open on the post.    One of: `open`, `closed` |
| `<a href="#schema-ping_status">ping_status</a>` | Whether or not the post can be pinged.    One of: `open`, `closed` |
| `<a href="#schema-menu_order">menu_order</a>` | The order of the post in relation to other posts. |
| `<a href="#schema-meta">meta</a>` | Meta fields. |
| `<a href="#schema-template">template</a>` | The theme file to use to display the post. |

### Definition

 `POST /wp/v2/pages/<id>/autosaves`

## Retrieve a Page Revision

### Definition &amp; Example Request

 `GET /wp/v2/pages/<parent>/autosaves/<id>`

 Query this endpoint to retrieve a specific page revision record.

 `$ curl https://example.com/wp-json/wp/v2/pages/<parent>/autosaves/<id>`

### Arguments

| `parent` | The ID for the parent of the autosave. |
|---|---|
| `id` | The ID for the autosave. |
| `context` | Scope under which the request is made; determines fields present in response.  Default: `view`   One of: `view`, `embed`, `edit` |

---

# Glossary <a name="rest-api/glossary" />

Source: https://developer.wordpress.org/rest-api/glossary/

New to REST APIs? Get up to speed with phrases used throughout our documentation.

## Controller

[Model-View-Controller](http://en.wikipedia.org/wiki/Model-view-controller) is a standard pattern in software development. If you aren’t already familiar with it, you should do a bit of reading to get up to speed.

Within WP-API, we’ve adopted the controller concept to have a standard pattern for the classes representing our resource endpoints. All resource endpoints extend `WP_REST_Controller` to ensure they implement common methods.

## HEAD, GET, POST, PUT, and DELETE Requests

These “HTTP verbs” represent the *type* of action a HTTP client might perform against a resource. For instance, `GET` requests are used to fetch a Post’s data, whereas `DELETE` requests are used to delete a Post. They’re collectively called “HTTP verbs” because they’re standardized across the web.

If you’re familiar with WordPress functions, a `GET` request is the equivalent of `wp_remote_get()`, and a `POST` request is the same as `wp_remote_post()`.

## HTTP Client

The phrase “HTTP Client” refers to the tool you use to interact with WP-API. You might use [Postman](https://chrome.google.com/webstore/detail/postman-rest-client/fdmmgilgnpjigdojojpjoooidkmcomcm?hl=en) (Chrome) or [REST Easy](https://github.com/nathan-osman/REST-Easy) (Firefox) to test requests in your browser, or [httpie](https://github.com/jakubroztocil/httpie) to test requests at the commandline.

WordPress itself provides a HTTP Client in the [`WP_HTTP` class](#plugins/http-api) and related functions (e.g. `wp_remote_get()`). This can be used to access one WordPress site from another.

## Resource

A “Resource” is a *discrete entity* within WordPress. You may know these resources already as Posts, Pages, Comments, Users, Terms, and so on. WP-API permits HTTP clients to perform CRUD operations against resources (CRUD stands for Create, Read, Update, and Delete).

Pragmatically, here’s how you’d typically interact with WP-API resources:

- `GET /wp-json/wp/v2/posts` to get a collection of Posts. This is roughly equivalent to using `WP_Query`.
- `GET /wp-json/wp/v2/posts/123` to get a single Post with ID 123. This is roughly equivalent to using `get_post()`.
- `POST /wp-json/wp/v2/posts` to create a new Post. This is roughly equivalent to using `wp_insert_post()`.
- `DELETE /wp-json/wp/v2/posts/123` to delete Post with ID 123. This is roughly equivalent to `wp_delete_post()`.

## Routes / Endpoints

Endpoints are functions available through the API. This can be things like retrieving the API index, updating a post, or deleting a comment. Endpoints perform a specific function, taking some number of parameters and return data to the client.

A route is the “name” you use to access endpoints, used in the URL. A route can have multiple endpoints associated with it, and which is used depends on the HTTP verb.

For example, with the URL `http://example.com/wp-json/wp/v2/posts/123`:

- The “route” is `wp/v2/posts/123` – The route doesn’t include `wp-json` because `wp-json` is the base path for the API itself.
- This route has 3 endpoints: 
    - `GET` triggers a `get_item` method, returning the post data to the client.
    - `PUT` triggers an `update_item` method, taking the data to update, and returning the updated post data.
    - `DELETE` triggers a `delete_item` method, returning the now-deleted post data to the client.

**Note:** On sites without pretty permalinks, the route is instead added to the URL as the `rest_route` parameter. For the above example, the full URL would then be `http://example.com/?rest\_route=wp/v2/posts/123`

## Schema

A “schema” is a representation of the format for WP-API’s response data. For instance, the Post schema communicates that a request to get a Post will return `id`, `title`, `content`, `author`, and other fields. Our schemas also indicate the type each field is, provide a human-readable description, and show which contexts the field will be returned in.

---

# Changelog <a name="rest-api/changelog" />

Source: https://developer.wordpress.org/rest-api/changelog/

This document details changes to the WP REST API since its public release in version 4.7.0.

## Version 5.6

- Introduce Application Passwords for API authentication. [r49109](https://core.trac.wordpress.org/changeset/49109)
- Introduce Batch Requests. [r49252](https://core.trac.wordpress.org/changeset/49252)
- Support a route-level validation callback. [r48945](https://core.trac.wordpress.org/changeset/48945)
- Move Site Health async tests to the REST API. [r49154](https://core.trac.wordpress.org/changeset/49154)
- Add a hook to fire once a post, its terms and meta update. [r49172](https://core.trac.wordpress.org/changeset/49172)
- Introduce search term handler. [r49103](https://core.trac.wordpress.org/changeset/49103)
- Introduce search post format handler. [r49132](https://core.trac.wordpress.org/changeset/49132)
- Allow for string ids in the search controller. [r49088](https://core.trac.wordpress.org/changeset/49088)
- Support a broader range of JSON media types. [r49329](https://core.trac.wordpress.org/changeset/49329)
- Support the `multipleOf` JSON Schema keyword. [r49063](https://core.trac.wordpress.org/changeset/49063)
- Support the `minProperties` and `maxProperties` JSON Schema keywords. [r49053](https://core.trac.wordpress.org/changeset/49053)
- Support the `patternProperties` JSON Schema keyword. [r49082](https://core.trac.wordpress.org/changeset/49082)
- Support the `anyOf` and `oneOf` JSON Schema keywords. [r49246](https://core.trac.wordpress.org/changeset/49246)
- Make sure all supported JSON Schema keywords are output in the index. [r49257](https://core.trac.wordpress.org/changeset/49257)
- Add HTTP/1.1 emulation to `wp.apiRequest`. [r49133](https://core.trac.wordpress.org/changeset/49133)
- Include a JSON `Accept` header in `wp.apiRequest`. [r49716](https://core.trac.wordpress.org/changeset/49716)
- Don’t validate the post status if it hasn’t changed. [r49302](https://core.trac.wordpress.org/changeset/49302)
- Support generating comment up links to custom posts controllers. [r49299](https://core.trac.wordpress.org/changeset/49299)

## Version 5.5

- Introduce Block Types endpoint. [r48173](https://core.trac.wordpress.org/changeset/48173)
- Introduce Plugins and Block Directory endpoints. [r48242](https://core.trac.wordpress.org/changeset/48242)
- Introduce Image Editor endpoint. [r48291](https://core.trac.wordpress.org/changeset/48291)
- Add additional fields to the Themes endpoint. [r47921](https://core.trac.wordpress.org/changeset/47921)
- Introduce `register_theme_feature()` API for use in the Themes endpoint. [r48171](https://core.trac.wordpress.org/changeset/48171)
- Allow POST requests to the Block Renderer endpoint. [r47756](https://core.trac.wordpress.org/changeset/47756)
- Register only a single Block Renderer endpoint shared by all block types. [r48069](https://core.trac.wordpress.org/changeset/48069)
- Add support for classic embeds to the oEmbed endpoint. [r48135](https://core.trac.wordpress.org/changeset/48135)
- Link to the REST route for the currently queried resource. [r48273](https://core.trac.wordpress.org/changeset/48273)
- Introduce support for default metadata values. [r48402](https://core.trac.wordpress.org/changeset/48402)
- Add the `Link` header to the list of exposed cors headers. [48112](https://core.trac.wordpress.org/changeset/48112)
- Add `Content-Disposition`, `Content-MD5` and `X-WP-Nonce` as allowed cors headers. [r48452](https://core.trac.wordpress.org/changeset/48452)
- Improve multi-type JSON Schema support. [r48306](https://core.trac.wordpress.org/changeset/48306)
- Only validate the `format` keyword if the `type` is a `string`. [r48300](https://core.trac.wordpress.org/changeset/48300)
- Support the `uuid` JSON Schema format. [47753](https://core.trac.wordpress.org/changeset/47753)
- Support the `hex-color` JSON Schema format. [r47450](https://core.trac.wordpress.org/changeset/47450)
- Support the `pattern` JSON Schema keyword. [r47810](https://core.trac.wordpress.org/changeset/47810)
- Support the `minItems`, `maxItems`, and `uniqueItems` JSON Schema keywords. [r47923](https://core.trac.wordpress.org/changeset/47923) [r48357](https://core.trac.wordpress.org/changeset/48357)
- Support the `minLength` and `maxLength` JSON Schema keywords. [r47627](https://core.trac.wordpress.org/changeset/47627)
- Check required properties are provided when validating an object. [r47809](https://core.trac.wordpress.org/changeset/47809)
- Support more JSON Schemas when filtering a response by context. [r47758](https://core.trac.wordpress.org/changeset/47758)
- Handle parameter types consistently within `WP_REST_Request::set_param()`. [r47559](https://core.trac.wordpress.org/changeset/47559)
- Deprecate back-filling of the `HTTP_RAW_POST_DATA` global variable. [r47926](https://core.trac.wordpress.org/changeset/47926)
- Issue a `_doing_it_wrong` when registering a route without a `permission_callback`. [r48526](https://core.trac.wordpress.org/changeset/48526)
- Issue a `_doing_it_wrong` when using the `wp_send_json()` family of functions during a REST API request. [r48361](https://core.trac.wordpress.org/changeset/48361)
- Ensure `rest_ensure_response()` upgrades `WP_HTTP_Response` to `WP_REST_Response`. [r47849](https://core.trac.wordpress.org/changeset/47849)
- Only force the main query to be `is_home()` during a REST API request. [r48053](https://core.trac.wordpress.org/changeset/48053)
- Ensure all keywords supported by the JSON Schema validator are permitted by `WP_REST_Controller::get_endpoint_args_for_item_schema()`. [r47911](https://core.trac.wordpress.org/changeset/47911)
- Ensure deprecation notices are triggered when preloading REST API data. [r48150](https://core.trac.wordpress.org/changeset/48150)
- See [REST API changes in WordPress 5.5](https://make.wordpress.org/core/2020/07/22/rest-api-changes-in-wordpress-5-5/) for further commentary.

## Version 5.4

- Introduce selective link embedding. [r47224](https://core.trac.wordpress.org/changeset/47224)
- Fix PHP warning in the comments controller if the commented-upon post type does not exist. \[r47036\](https://core.trac.wordpress.org/changeset/47036\]
- Add `_doing_it_wrong` warning when registering an “array” setting without an items schema. [r47325](https://core.trac.wordpress.org/changeset/47325)
- Correctly infer empty objects passed via query parameters. [r47362](https://core.trac.wordpress.org/changeset/47362)
- Add a “tax\_relation” parameter to the posts collection. [r46646](https://core.trac.wordpress.org/changeset/46646)
- Allow meta to be set when creating a new media record via REST. [r47261](https://core.trac.wordpress.org/changeset/47261)
- Permit access to the themes controller if the user can edit any post type. [r47361](https://core.trac.wordpress.org/changeset/47361).
- Add support for the `REDIRECT_HTTP_AUTHORIZATION` header. [r47239](https://core.trac.wordpress.org/changeset/47239)
- Add support for filtering the posts controller’s schema. [r47265](https://core.trac.wordpress.org/changeset/47265)
- Add `_doing_it_wrong` warning if a taxonomy’s specified `rest_base` is already in use by a different resource. [r47037](https://core.trac.wordpress.org/changeset/47037)
- Improve routing performance by matching REST API routes on namespace before performing regex checks. [r47260](https://core.trac.wordpress.org/changeset/47260)
- Don’t assume all item schemas have properties. [r47328](https://core.trac.wordpress.org/changeset/47328)
- Imrove performance by reusing previously-generated embedded objects when building collection response. [r47138](https://core.trac.wordpress.org/changeset/47138)
- List all core theme feature support details in `/themes` endpoint response. [r47258](https://core.trac.wordpress.org/changeset/47528)
- Fix links format in `OPTIONS` requests for non-variable routes. [r47326](https://core.trac.wordpress.org/changeset/47326)
- Apply all relevant block rendering filters when rendering block previews. [r47360](https://core.trac.wordpress.org/changeset/47360)

## Version 5.3

- Cache results of `get_item_schema` on controller instances for performance. [r45811](https://core.trac.wordpress.org/changeset/45811)
- Permit embedding of the `self` link relation in the search endpoint. [r46434](https://core.trac.wordpress.org/changeset/46434)
- Pass `null` as the post date property to reset post to initial “floating” date value. [r46249](https://core.trac.wordpress.org/changeset/46249)
- Prevent deletion of post revisions. [r45812](https://core.trac.wordpress.org/changeset/45812)
- Do not send response body if status is `204` or body is `null`. [r45809](https://core.trac.wordpress.org/changeset/45809)
- Support `object` and `array` types in `register_meta()` schemas. [r45807](https://core.trac.wordpress.org/changeset/45807)
- Support dot.nested hierarchical properties in `_fields` query parameter. [r46184](https://core.trac.wordpress.org/changeset/46184)
- Return term resources in `edit` context after `PUT` or `POST` request. [r46098](https://core.trac.wordpress.org/changeset/46098)
- Introduce `date_floating` property on status endpoint response objects. [r46252](https://core.trac.wordpress.org/changeset/46252)

## Version 5.2

- Fix undefined property notice when setting parent term to 0. [r44965](https://core.trac.wordpress.org/changeset/44965)
- Remove unused `validate_user_can_query_private_statuses()` attachments controller method. [r44934](https://core.trac.wordpress.org/changeset/44934)
- Ensure “Allow” header is returned for OPTIONS requests. [r44933](https://core.trac.wordpress.org/changeset/44933)
- Always pass query arguments through `urlencode_deep()` in `get_items()` methods to ensure they are encoded correctly. [r45267](https://core.trac.wordpress.org/changeset/45267)

## Version 5.1

- Introduce `rest_post_search_query` filter to allow query arguments to be manipulated for a post search query. [r44482](https://core.trac.wordpress.org/changeset/44482)
- Allow changing of letter casing in user email addresses. [r44641](https://core.trac.wordpress.org/changeset/44641)
- Trigger a `_doing_it_wrong()` warning if `register_rest_route()` is called before the `rest_api_init` hook. [r44568](https://core.trac.wordpress.org/changeset/44568)

## Version 5.0

- New Routes &amp; Endpoints 
    - Introduce `wp/v2/search` route implementing a new `WP_REST_Search_Controller`. Search types are handled by extending `WP_REST_Search_Handler`, and the active search type may be filtered using the `wp_rest_search_handlers` filter. [\#39965](https://core.trac.wordpress.org/ticket/39965)
    - Introduce `wp/v2/blocks` route to retrieve individual reusable blocks. Requires authentication. [\#45098](https://core.trac.wordpress.org/ticket/45098)
    - Introduce autosaves endpoints for all post types except `attachment`. Autosaves endpoints utilize the new `WP_REST_Autosaves_Controller` class, and saves only the `id`, `title`, `post_content` and `excerpt` for a post. Autosaves are enabled even for post types which do not support revisions. Requires authentication. [\#43316](https://core.trac.wordpress.org/ticket/43316)
    - Introduce `wp/v2/block-renderer/<name>` routes to return dynamically generated markup for server-rendered blocks. The `name` component of the URL is structured as `namespace/block-id`, *e.g.* `core/archives`. Requires authentication. [\#45098](https://core.trac.wordpress.org/ticket/45098)
    - Introduce `wp/v2/themes` endpoint to expose supported theme features to the block editor. This endpoint only returns data for the active theme. Requires authentication. [\#45016](https://core.trac.wordpress.org/ticket/45016)
    - Introduce `wp/v2/types/wp_block` endpoint to expose block labels and capabilities relating to the new hidden post type `wp_block`. [\#45098](https://core.trac.wordpress.org/ticket/45098)
- Additional Changes 
    - Custom taxonomies must specify `show_in_rest` as `true` to be visible in the block editor.
    - Introduce `wp_is_json_request()` function to detemine if request is expecting a JSON response, and contextually silence PHP warnings if so. [r43730](https://core.trac.wordpress.org/changeset/43730)
    - Requests to public, viewable post types specifying the `edit` context now return two additional properties, `permalink_temlate` and `generated_slug`. [r43720](https://core.trac.wordpress.org/changeset/43720)
    - Respect the `?_fields=` filter when applying custom post properties with `register_rest_field`. [r43736](https://core.trac.wordpress.org/changeset/43736)
    - Permit users with `read_private_posts` capability to query for private posts. [r43694](https://core.trac.wordpress.org/changeset/43694)
    - Declare the `unfiltered_html` capability using JSON Hyper Schema `targetSchema`. [r43682](https://core.trac.wordpress.org/changeset/43682)
    - Introduce `block_version` property on the post object to denote the presence and version of blocks within the post. [r43770](https://core.trac.wordpress.org/changeset/43770)
    - Add new `rest_after_*` action hooks that fire after all write operations have completed. [r42864](https://core.trac.wordpress.org/changeset/42864)
- See [The REST API in WordPress 5.0](https://make.wordpress.org/core/2018/12/06/the-rest-api-in-wordpress-5-0/) for further commentary.

## Version 4.9.8

- Introduce [`?_fields=` global query parameter](#rest-api/using-the-rest-api/global-parameters) to limit the properties included in response objects to a specified subset. [\#38131](https://core.trac.wordpress.org/ticket/38131)
- Add an `object_subtype` argument to the `$args` parameter for `register_meta()`: this parameter allows developers to specify the object subtypes (*i.e.* specific post types or taxonomies) for which the registered meta will appear when `show_in_rest` is true. Introduce new wrapper methods `register_post_meta()` and `register_term_meta()` which are recommended instead of `register_meta` when working with post or term meta. [r43378](https://core.trac.wordpress.org/changeset/43378)

## Version 4.8.1

- Add a filter to allow modifying the response after embedded data is added. [r41093](https://core.trac.wordpress.org/changeset/41093)
- `wp-api.js` client: Correctly interpret `settings` resource as a model rather than a collection. [r41126](https://core.trac.wordpress.org/changeset/41126)
- Fix `PUT` (and other) requests for nginx servers by tweaking REST API URLs. [r41140](https://core.trac.wordpress.org/changeset/41140)

## Version 4.8.0

- Improve strings added after 4.7.0 string freeze. [r40571](https://core.trac.wordpress.org/changeset/40571), [r40606](https://core.trac.wordpress.org/changeset/40606)
- Canonicalize header names in `WP_REST_Request::remove_header()`. [r40577](https://core.trac.wordpress.org/changeset/40577)
- Allow `Origin: null` from `file:` URLs. [r40600](https://core.trac.wordpress.org/changeset/40600)
- Set global `$post` variable when preparing revisions. [r40601](https://core.trac.wordpress.org/changeset/40601)
- Include `featured_media` in embed responses. [r40602](https://core.trac.wordpress.org/changeset/40602)
- Add `author`, `modified`, and `parent` sort order options for posts. [r40605](https://core.trac.wordpress.org/changeset/40605)
- Add endpoint for proxying requests to external oEmbed providers, and use it in the media modal instead of the `parse-embed` AJAX action. **This is the first usage of the WP REST API in `wp-admin`.** [r40628](https://core.trac.wordpress.org/changeset/40628)
- Do not set `X-WP-Deprecated*` headers as often. [r40782](https://core.trac.wordpress.org/changeset/40782)
- Avoid sending blank `Last-Modified` headers with authenticated requests. [r40805](https://core.trac.wordpress.org/changeset/40805)
- Fix changing parameters with `$request->set_param()` for some requests. [r40815](https://core.trac.wordpress.org/changeset/40815)
- In the admin area, ensure the REST API endpoint URL is forced to `https` when necessary. [r40843](https://core.trac.wordpress.org/changeset/40843)

## Version 4.7.4

- Fix another (DST-related) issue with dates of posts. [r40325](https://core.trac.wordpress.org/changeset/40325)
- Add `gmt_offset` and `timezone_string` to the base `/wp-json` response. [r40336](https://core.trac.wordpress.org/changeset/40336)
- Confirm that the parent post object of an attachment exists in `WP_REST_Posts_Controller::check_read_permission()`. [r40337](https://core.trac.wordpress.org/changeset/40337)
- Allow fetching multiple users and terms at once via the `slug` parameters of the respective endpoints. [r40426](https://core.trac.wordpress.org/changeset/40426), [r40427](https://core.trac.wordpress.org/changeset/40427)

## Version 4.7.3

- Cast revision author ID to int. [r40078](https://core.trac.wordpress.org/changeset/40078)
- Correctly serve the index with `PATH_INFO`. [r40079](https://core.trac.wordpress.org/changeset/40079)
- Include the `status` property in `view` context responses from the Posts endpoints. [r40081](https://core.trac.wordpress.org/changeset/40081)
- `wp-api.js` client: Use `_.extend` instead of `_.union` when merging objects. [r40084](https://core.trac.wordpress.org/changeset/40084)
- To prepare for a full multisite implementation [in 4.8](https://make.wordpress.org/core/2017/02/08/improving-the-rest-api-users-endpoint-for-multisite-in-4-7-3-and-4-8/), do not allow access to users from a different site. [r40111](https://core.trac.wordpress.org/changeset/40111)
- Correctly parse body parameters for `DELETE` requests. [r40113](https://core.trac.wordpress.org/changeset/40113)
- Fix multiple issues with dates of posts and comments. [r40114](https://core.trac.wordpress.org/changeset/40114), [r40115](https://core.trac.wordpress.org/changeset/40115)
- `wp-api.js` client: Fix route discovery for custom namespaces. [r40117](https://core.trac.wordpress.org/changeset/40117)
- Fix the behavior of the `sticky` posts filter when no posts are sticky. [r40136](https://core.trac.wordpress.org/changeset/40136)
- Allow setting all post formats even if they are not supported by the theme. [r40137](https://core.trac.wordpress.org/changeset/40137)

## Version 4.7.2

- Unify object access handling for simplicity. [r39957](https://core.trac.wordpress.org/changeset/39957)

## Version 4.7.1

- Treat any falsy value as `false` in `'rest_allow_anonymous_comments'`. [r39566](https://core.trac.wordpress.org/changeset/39566)
- `wp-api.js` client: Fix setup of models used by `wp.api.collections` objects. [r39604](https://core.trac.wordpress.org/changeset/39604)
- Do not error on empty JSON body. [r39609](https://core.trac.wordpress.org/changeset/39609)
- Do not include the `password` argument for the `GET /wp/v2/media` endpoint. [r39610](https://core.trac.wordpress.org/changeset/39610)
- Allow sending empty or no-op comment updates. [r39628](https://core.trac.wordpress.org/changeset/39628)
- Add support for filename search in the `GET /wp/v2/media` endpoint. [r39629](https://core.trac.wordpress.org/changeset/39629)
- Fix PHP warnings when `get_theme_support( 'post-formats' )` is not an array. [r39630](https://core.trac.wordpress.org/changeset/39630)
- Improve the `rest_*_collection_params` filter docs and fix the terms filter. [r39631](https://core.trac.wordpress.org/changeset/39631)
- Allow schema `sanitization_callback` to be set to `null` to bypass built-in sanitization. [r39642](https://core.trac.wordpress.org/changeset/39642)
- Change which users are shown in the users endpoint. [r39844](https://core.trac.wordpress.org/changeset/39844)