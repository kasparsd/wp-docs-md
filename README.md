# WordPress Documentation as Markdown Files

Collection of single markdown files for each post type on [WordPress Developer Resources](https://developer.wordpress.org):

- [Block Editor Handbook](https://developer.wordpress.org/block-editor/) as [wp-blocks-handbook.md](docs/wp-blocks-handbook.md)
- [Theme Handbook](https://developer.wordpress.org/themes/) as [wp-theme-handbook.md](docs/wp-theme-handbook.md)
- [Plugin Handbook](https://developer.wordpress.org/plugins/) as [wp-plugin-handbook.md](docs/wp-plugin-handbook.md)
- [Common APIs Handbook](https://developer.wordpress.org/apis/) as [wp-apis-handbook.md](docs/wp-apis-handbook.md)
- [Advanced Administration Handbook](https://developer.wordpress.org/advanced-administration/) as [wp-adv-admin-handbook.md](docs/wp-adv-admin-handbook.md)
- [REST API Handbook](https://developer.wordpress.org/rest-api/) as [wp-rest-api-handbook.md](docs/wp-rest-api-handbook.md)
- [WordPress Coding Standards Handbook](https://developer.wordpress.org/coding-standards/) as [wp-wpcs-handbook.md](docs/wp-wpcs-handbook.md)
- [Secure Custom Fields Handbook](https://developer.wordpress.org/secure-custom-fields/) as [wp-scf-handbook.md](docs/wp-scf-handbook.md)
- [WordPress user documentation](https://wordpress.org/documentation/) as [wp-articles.md](docs/wp-articles.md)

Extracted from REST API of each site using custom PHP CLI scripts.

Note:

- Links to the URLs of the same content type are converted to anchor links using path as the anchor name/ID.

## Usage

Copy the desired markdown files to your project directory and use them during AI prompts as desired.

## How to Update

Run `php parser.php --update` to fetch updated content over WP REST API (sorted by `modified` date).

## To Do

- [ ] Consider including the `wp-parser-(function|class|hook|method)` content types.

## Notes

- We're using PHPUnit 9 because test case filenames must match the class names [in later versions](https://github.com/sebastianbergmann/phpunit/issues/4621) (don't support `class-` prefixed used by WP).

## Credits

- Tooling created by [Kaspars](https://kaspars.net) ([@konstruktors](https://x.com/konstruktors)) and [contributors](https://github.com/kasparsd/wp-docs-md/graphs/contributors).

- All origin content licensed under respective licenses.
