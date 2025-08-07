Table of Contents:

- [Best Practices](#coding-standards)
- [WordPress Coding Standards](#coding-standards/wordpress-coding-standards)
- [Accessibility Coding Standards](#coding-standards/wordpress-coding-standards/accessibility)
- [CSS Coding Standards](#coding-standards/wordpress-coding-standards/css)
- [HTML Coding Standards](#coding-standards/wordpress-coding-standards/html)
- [JavaScript Coding Standards](#coding-standards/wordpress-coding-standards/javascript)
- [PHP Coding Standards](#coding-standards/wordpress-coding-standards/php)
- [Inline Documentation Standards](#coding-standards/inline-documentation-standards)
- [JavaScript Documentation Standards](#coding-standards/inline-documentation-standards/javascript)
- [PHP Documentation Standards](#coding-standards/inline-documentation-standards/php)
- [Changelog](#coding-standards/changelog)
- [Markdown Style Guide](#coding-standards/styleguide)

# Best Practices <a name="coding-standards" />

Source: https://developer.wordpress.org/coding-standards/

WordPress is a big project with thousands of contributors. It’s important that best practices are followed so that the codebase is consistent and readable, and changes are easy to find and read, whether the code is five days old or five years old. What follows are a series of best practices to help keep WordPress code clean and well documented for years to come.

- [WordPress Coding Standards](#coding-standards/wordpress-coding-standards)
    - [Accessibility Coding Standards](#coding-standards/wordpress-coding-standardsaccessibility/)
    - [CSS Coding Standards](#coding-standards/wordpress-coding-standardscss/)
    - [HTML Coding Standards](#coding-standards/wordpress-coding-standardshtml/)
    - [JavaScript Coding Standards](#coding-standards/wordpress-coding-standardsjavascript/)
    - [PHP Coding Standards](#coding-standards/wordpress-coding-standardsphp/)
- [Inline Documentation Standards](#coding-standards/inline-documentation-standards)
    - [JavaScript Documentation Standards](#coding-standards/inline-documentation-standardsjavascript/)
    - [PHP Documentation Standards](#coding-standards/inline-documentation-standardsphp/)

---

# WordPress Coding Standards <a name="coding-standards/wordpress-coding-standards" />

Source: https://developer.wordpress.org/coding-standards/wordpress-coding-standards/

The purpose of the WordPress Coding Standards is to create a baseline for collaboration and review within various aspects of the WordPress open source project and community, from core code to themes to plugins.

The WordPress community developed the standards contained in this section of the handbook, and those standards are part of the best practices that developers and core contributors are recommended to follow.

## Why have coding standards?

Coding standards help avoid common coding errors, improve the readability of code, and simplify modification. They ensure that files within the project appear as if they were created by a single person.

Following the standards means anyone will be able to understand a section of code and modify it, if needed, without regard to when it was written or by whom.

If you are planning to contribute to WordPress core, you need to familiarize yourself with these standards, as any code you submit will need to comply with them.

## Language-specific Standards

- [CSS Coding Standards](#coding-standards/wordpress-coding-standards/css)
- [HTML Coding Standards](#coding-standards/wordpress-coding-standards/html)
- [JavaScript Coding Standards](#coding-standards/wordpress-coding-standards/javascript)
- [PHP Coding Standards](#coding-standards/wordpress-coding-standards/php)

## Accessibility Standards

WordPress is committed to meeting the [Web Content Accessibility Guidelines (WCAG) at level AA](https://www.w3.org/TR/WCAG20/) for all new and updated code. We’ve provided a [quick guide to common accessibility issues](#coding-standards/wordpress-coding-standards/accessibility) you should be aware of when creating patches or feature plug-ins.

## Where do the coding standards \_not\_ apply?

Third-party libraries are not subject to these standards, even when integrated with the primary project. This includes instances like WordPress core, where multiple third-party libraries are incorporated into its codebase.

---

# Accessibility Coding Standards <a name="coding-standards/wordpress-coding-standards/accessibility" />

Source: https://developer.wordpress.org/coding-standards/wordpress-coding-standards/accessibility/

Code integrated into the WordPress ecosystem – including WordPress core, WordPress.org websites, and official plugins, is expected to conform to the Web Content Accessibility Guidelines (WCAG), version 2.2, at level AA.

New or updated interfaces are encouraged to incorporate the Authoring Tool Accessibility Guidelines (ATAG) 2.0. The most significant way that ATAG 2.0 guidelines can be incorporated is by emphasizing choices that help people make more accessible content: encouraging alternative text, captions, and semantic structures, for example.

Official information about web accessibility standards can be divided into two groups: “normative” and “informative” documents. Only the guidelines themselves are normative, and establish the actual requirements for conforming to WCAG 2.2. Other documents should be considered to be informational, and offer help in interpreting the guidelines, but are not definitive.

The WordPress A11y team is in the process of developing a library of recommended accessibility patterns to help describe the WordPress recommended way to accomplish a variety of interfaces. These may not be the only reasonable way to create an accessible example of the pattern, but are preferred for the sake of consistency across WordPress.

Normative Documents:

- [W3C WCAG 2.2](https://www.w3.org/TR/WCAG22)
- [W3C ATAG 2.0](https://www.w3.org/TR/ATAG20/)
- [W3C WAI ARIA 1.1](https://www.w3.org/TR/wai-aria/)

Informative Documents:

- [W3C Understanding WCAG 2.2](https://www.w3.org/WAI/WCAG22/Understanding/)
- [W3C Using ARIA](https://www.w3.org/TR/using-aria/)
- [W3C WAI-ARIA Authoring Practices Guide (accessible design patterns)](https://www.w3.org/WAI/ARIA/apg/)
- [W3C Introduction to ATAG](https://www.w3.org/WAI/standards-guidelines/atag)

## About WCAG A, AA, and AAA Conformance Levels

The WordPress commitment is to conform to all WCAG 2.2 Level A and Level AA guidelines. Conformance to level AAA success criteria is encouraged where relevant, as is exceeding the accessibility of any of these guidelines.

**Level A** success criteria address concerns considered to be accessibility barriers on a very wide scale that will prevent many people from accessing the site and the minimum set of accomplished goals required for the majority of web-based interfaces.

**Level AA** success criteria address concerns that are generally somewhat more complicated to address and may impact smaller groups of people, but are still common needs with broad reach.

**Level AAA** success criteria are mostly targeted at very specific needs and may be quite difficult to implement effectively.

[W3C Quick Reference to WCAG 2.2 Level A and Level AA Requirements](https://www.w3.org/WAI/WCAG22/quickref/?versions=2.2&currentsidebar=%23col_customize&levels=aaa)

## Applying WCAG Conformance Levels

WCAG 2.2 consists of 4 layers:

- Principles
- Guidance
- Success criteria
- Sufficient and advisory techniques

### Principles

When applying WCAG 2.2, the guidance and success criteria are organized around 4 principles. These principles place emphasis on how people interact with content and must be:

- **Perceivable** – interacting with the content using the medium that they are familiar with. For example, providing text alternatives for those who are blind.
- **Operable** – finding and using content is accessible. For example, being able to use a keyboard or a screen reader.
- **Understandable** – content uses clear language and is understandable. For example, use meaningful labels, explain all abbreviations.
- **Robust** – content can be interpreted in a range of ways. For example, assistive technologies are able to interpret and parse content.

### Guidance

Each principle is supported by a list of guidelines to ensure that content is more accessible and presentable across the different devices that meet a user’s disability. The guidelines are listed below, the full detail can be found in the WCAG 2.2.

#### Principle: Perceivable

**Guideline 1.1 Text Alternatives**  
Provide text alternatives for any non-text content so that it can be changed into other forms people need, such as large print, braille, speech, symbols or simpler language.

**Guideline 1.2 Time-based Media**  
Provide alternatives for time-based media. For example, include captions and transcripts for audio or video clips.

**Guideline 1.3 Adaptable**  
Create content that can be presented in different ways (for example simpler layout) without losing information or structure.

**Guideline 1.4 Distinguishable**  
Make it easier for users to see and hear content including separating foreground from background.

#### Principle: Operable

**Guideline 2.1 Keyboard Accessible**  
Make all functionality available from a keyboard.

**Guideline 2.2 Enough Time**  
Provide users enough time to read and use content.

**Guideline 2.3 Seizures and Physical Reactions**  
Do not design content in a way that is known to cause seizures or physical reactions.

**Guideline 2.4 Navigable**  
Provide ways to help users navigate, find content, and determine where they are.

**Guideline 2.5 Input Modalities**  
Make it easier for users to operate functionality through various inputs beyond keyboard.

#### Principle: Understandable

**Guideline 3.1 Readable**  
Make text content readable and understandable.

**Guideline 3.2 Predictable**  
Make Web pages appear and operate in predictable ways.

**Guideline 3.3 Input Assistance**  
Help users avoid and correct mistakes.

#### Principle: Robust

**Guideline 4.1 Compatible**  
Maximize compatibility with current and future user agents, including assistive technologies.

### Success Criteria

Each guidance has a [specific list requirements that must be met for your content to be accessible](https://www.w3.org/WAI/WCAG21/quickref/). These tests can be carried out using automated software and or human testers. You can find more information on how to meet the success criteria in [Understanding Levels of Conformance](https://www.w3.org/WAI/WCAG21/Understanding/conformance#levels). Whilst these criteria are important, usability testing is still important and should be carried out alongside any accessibility testing.

### Techniques: Sufficient, Advisory, and Failures

Techniques (code examples, resources, and tests) for guidance and success criteria that can help in making content more accessible, are divided into three categories:

- Sufficient – required and help meet the success criteria
- Advisory – suggestions and go beyond what is required
- Failures – cause problems and fail to meet the success criteria

For more information on techniques, visit [Understanding Techniques for WCAG Success Criteria](https://www.w3.org/WAI/WCAG21/Understanding/understanding-techniques).

## Authoritative Resources

- [WebAIM: Web Accessibility In Mind](https://webaim.org/) (see Articles and Resources)
- [UK Government Digital Service](https://gds.blog.gov.uk)
- [Accessibility in Government Blog (UK)](https://accessibility.blog.gov.uk/)
- [Create Accessible Software &amp; Websites – Section 508 (US)](https://www.section508.gov/develop/software-websites/)
- [Blog | TPGi](https://www.tpgi.com/blog/)
- [Web Accessibility Blog (Deque)](https://www.deque.com/blog/)
- [Tink – Léonie Watson](https://tink.uk) (Léonie Watson)
- [Adrian Roselli](https://adrianroselli.com)
- [Scott O’Hara](https://www.scottohara.me)
- [Joe Dolson](https://www.joedolson.com/blog)
- [Sarah Higley](https://sarahmhigley.com/)
- [Marco’s Accessibility Blog](https://www.marcozehe.de/)
- [Karl Groves](https://karlgroves.com/)
- [Inclusive Components](https://inclusive-components.design) (Heydon Pickering)
- [Accessibility London (London, United Kingdom)](https://www.meetup.com/London-Accessibility-Meetup/) (London accessibility meetup: they live stream meetups on youtube)
- [24 Accessibility](https://www.24a11y.com/)
- [Mozilla Accessibility – Users first, no matter their abilities](https://blog.mozilla.org/accessibility/)
- [WordPress Accessibility Meetup](https://www.meetup.com/wordpress-accessibility-meetup-group/)
- [Equalize Digital Blog](https://equalizedigital.com/resources/)
- [WordPress Accessibility Day Conference](https://wpaccessibility.day)

### Technical and / or specific topics

- [Accessibility Support](https://a11ysupport.io/) (Will your code work with assistive technologies?)
- [Accessibility APIs: A Key To Web Accessibility](https://www.smashingmagazine.com/2015/03/web-accessibility-with-accessibility-api/) (by Léonie Watson)
- [How accessibility trees inform assistive tech](https://hacks.mozilla.org/2019/06/how-accessibility-trees-inform-assistive-tech/) (by Hidde de Vries)
- [What is this thing and what does it do?](https://www.youtube.com/watch?v=YLihNhn_MO4) (presentation by Karl Groves)
- [The Browser Accessibility Tree](https://www.tpgi.com/the-browser-accessibility-tree/) (by Steve Faulkner)
- [Brief history of browser accessibility support](https://www.tpgi.com/brief-history-of-browser-accessibility-support/) (by Steve Faulkner)
- [ARIA Landmarks Example: General Principles](https://www.w3.org/TR/wai-aria-practices/examples/landmarks/)
- [ARIA Landmarks Example: HTML Sectioning Elements](https://www.w3.org/TR/wai-aria-practices/examples/landmarks/HTML5.html)
- [Mozilla Developer Docs – Accessibility](https://developer.mozilla.org/en-US/docs/Web/Accessibility)

---

# CSS Coding Standards <a name="coding-standards/wordpress-coding-standards/css" />

Source: https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/

Like any coding standard, the purpose of the WordPress CSS Coding Standards is to create a baseline for collaboration and review within various aspects of the WordPress open source project and community, from core code to themes to plugins. Files within a project should appear as though created by a single entity. Above all else, create code that is readable, meaningful, consistent, and beautiful.

Within core stylesheets, inconsistencies will often be found. We are working on addressing these and make every effort to have patches and commits from this point forward follow the CSS coding standards. More information on the above and contributing to UI/front-end development will be forthcoming in a separate set of guidelines.

## Structure

There are plenty of different methods for structuring a stylesheet. With the CSS in core, it is important to retain a high degree of legibility. This enables subsequent contributors to have a clear understanding of the flow of the document.

- Use tabs, not spaces, to indent each property.
- Add two blank lines between sections and one blank line between blocks in a section.
- Each selector should be on its own line, ending in either a comma or an opening curly brace. Property-value pairs should be on their own line, with one tab of indentation and an ending semicolon. The closing brace should be flush left, using the same level of indentation as the opening selector.

Correct:

```css
#selector-1,
#selector-2,
#selector-3 {
    background: #fff;
    color: #000;
}

```

Incorrect:

```css
#selector-1, #selector-2, #selector-3 {
    background: #fff;
    color: #000;
    }

#selector-1 { background: #fff; color: #000; }

```

## Selectors

With specificity, comes great responsibility. Broad selectors allow us to be efficient, yet can have adverse consequences if not tested. Location-specific selectors can save us time, but will quickly lead to a cluttered stylesheet. Exercise your best judgment to create selectors that find the right balance between contributing to the overall style and layout of the DOM.

- Similar to the [WordPress PHP Coding Standards](#coding-standards/wordpress-coding-standards/php) for file names, use lowercase and separate words with hyphens when naming selectors. Avoid camelcase and underscores.
- Use human readable selectors that describe what element(s) they style.
- Attribute selectors should use double quotes around values.
- Refrain from using over-qualified selectors, `div.container` can simply be stated as `.container`.

Correct:

```css
#comment-form {
    margin: 1em 0;
}

input[type="text"] {
    line-height: 1.1;
}

```

Incorrect:

```css
#commentForm { /* Avoid camelcase. */
    margin: 0;
}

#comment_form { /* Avoid underscores. */
    margin: 0;
}

div#comment_form { /* Avoid over-qualification. */
    margin: 0;
}

#c1-xr { /* What is a c1-xr?! Use a better name. */
    margin: 0;
}

input[type=text] { /* Should be [type="text"] */
    line-height: 110% /* Also doubly incorrect */
}

```

## Properties

Similar to selectors, properties that are too specific will hinder the flexibility of the design. Less is more. Make sure you are not repeating styling or introducing fixed dimensions (when a fluid solution is more acceptable).

- Properties should be followed by a colon and a space.
- All properties and values should be lowercase, except for font names and vendor-specific properties.
- Use hex code for colors, or `rgba()` if opacity is needed. Avoid RGB format and uppercase, and shorten values when possible: `#fff` instead of `#FFFFFF`.
- Use shorthand, except when overriding styles, for `background`, `border`, `font`, `list-style`, `margin`, and `padding` values as much as possible. For a shorthand reference, see [CSS Shorthand](https://codex.wordpress.org/CSS_Shorthand).

Correct:

```css
#selector-1 {
    background: #fff;
    display: block;
    margin: 0;
    margin-left: 20px;
}

```

Incorrect:

```css
#selector-1 {
    background:#FFFFFF;
    display: BLOCK;
    margin-left: 20PX;
    margin: 0;
}

```

### Property Ordering

> “Group like properties together, especially if you have a lot of them.”  
>  — Nacin

Above all else, choose something that is meaningful to you and semantic in some way. Random ordering is chaos, not poetry. In WordPress Core, our choice is logical or grouped ordering, wherein properties are grouped by meaning and ordered specifically within those groups. The properties within groups are also strategically ordered to create transitions between sections, such as `background` directly before `color`. The baseline for ordering is:

- Display
- Positioning
- Box model
- Colors and Typography
- Other

Things that are not yet used in core itself, such as CSS3 animations, may not have a prescribed place above but likely would fit into one of the above in a logical manner. Just as CSS is evolving, so our standards will evolve with it.

Top/Right/Bottom/Left (TRBL/trouble) should be the order for any relevant properties (e.g. `margin`), much as the order goes in values. Corner specifiers (e.g. `border-radius-*-*`) should be ordered as top-left, top-right, bottom-right, bottom-left. This is derived from how shorthand values would be ordered.

Example:

```css
#overlay {
    position: absolute;
    z-index: 1;
    padding: 10px;
    background: #fff;
    color: #777;
}

```

Another method that is often used, including by the Automattic/WordPress.com Themes Team, is to order properties alphabetically, with or without certain exceptions.

Example:

```css
#overlay {
    background: #fff;
    color: #777;
    padding: 10px;
    position: absolute;
    z-index: 1;
}

```

### Vendor Prefixes

Updated on 2014-02-13, after \[[27174](https://core.trac.wordpress.org/changeset/27174)\]:

We use [Autoprefixer](https://github.com/postcss/autoprefixer) as a pre-commit tool to easily manage necessary browser prefixes, thus making the majority of this section moot. For those interested in following that output without using Grunt, vendor prefixes should go longest (-webkit-) to shortest (unprefixed). All other spacing remains as per the rest of the standards.

```css
.sample-output {
    -webkit-box-shadow: inset 0 0 1px 1px #eee;
    -moz-box-shadow: inset 0 0 1px 1px #eee;
    box-shadow: inset 0 0 1px 1px #eee;
}

```

## Values

There are numerous ways to input values for properties. Follow the guidelines below to help us retain a high degree of consistency.

- Space before the value, after the colon.
- Do not pad parentheses with spaces.
- Always end in a semicolon.
- Use double quotes rather than single quotes, and only when needed, such as when a font name has a space or for the values of the `content` property.
- Font weights should be defined using numeric values (e.g. `400` instead of `normal`, `700` rather than `bold`).
- 0 values should not have units unless necessary, such as with `transition-duration`.
- Line height should also be unit-less, unless necessary to be defined as a specific pixel value. This is more than just a style convention, but is worth mentioning here. More information: <https://meyerweb.com/eric/thoughts/2006/02/08/unitless-line-heights/>.
- Use a leading zero for decimal values, including in `rgba()`.
- Multiple comma-separated values for one property should be separated by either a space or a newline. For better readability newlines should be used for lengthier multi-part values such as those for shorthand properties like `box-shadow` and `text-shadow`, including before the first value. Values should then be indented one level in from the property.
- Lists of values within a value, like within `rgba()`, should be separated by a space.

Correct:

```css
.class { /* Correct usage of quotes */
    background-image: url(images/bg.png);
    font-family: "Helvetica Neue", sans-serif;
    font-weight: 700;
}

.class { /* Correct usage of zero values */
    font-family: Georgia, serif;
    line-height: 1.4;
    text-shadow:
        0 -1px 0 rgba(0, 0, 0, 0.5),
        0 1px 0 #fff;
}

.class { /* Correct usage of short and lengthier multi-part values */
    font-family: Consolas, Monaco, monospace;
    transition-property: opacity, background, color;
    box-shadow:
        0 0 0 1px #5b9dd9,
        0 0 2px 1px rgba(30, 140, 190, 0.8);
}

```

Incorrect:

```css
.class { /* Avoid missing space and semicolon */
    background:#fff
}

.class { /* Avoid adding a unit on a zero value */
    margin: 0px 0px 20px 0px;
}

.class {
    font-family: Times New Roman, serif; /* Quote font names when required */
    font-weight: bold; /* Avoid named font weights */
    line-height: 1.4em; /* Avoid adding a unit for line height */
}

.class { /* Incorrect usage of multi-part values */
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.5),
                 0 1px 0 #fff;
    box-shadow: 0 1px 0 rgba(0, 0,
        0, 0.5),
        0 1px 0 rgba(0,0,0,0.5);
}

```

## Media Queries

Media queries allow us to gracefully degrade the DOM for different screen sizes. If you are adding any, be sure to test above and below the break-point you are targeting.

- It is generally advisable to keep media queries grouped by media at the bottom of the stylesheet. 
    - An exception is made for the `wp-admin.css` file in core, as it is very large and each section essentially represents a stylesheet of its own. Media queries are therefore added at the bottom of sections as applicable.
- Rule sets for media queries should be indented one level in.

Example:

```css
@media all and (max-width: 699px) and (min-width: 520px) {
        /* Your selectors */
}

```

## Commenting

- Comment, and comment liberally. If there are concerns about file size, utilize minified files and the `SCRIPT_DEBUG` constant. Long comments should manually break the line length at 80 characters.
- A table of contents should be utilized for longer stylesheets, especially those that are highly sectioned. Using an index number (`1.0`, `1.1`, `2.0`, etc.) aids in searching and jumping to a location.
- Comments should be formatted much as PHPDoc is. The [CSSDoc](https://web.archive.org/web/20070601200419/http://cssdoc.net/) standard is not necessarily widely accepted or used but some aspects of it may be adopted over time. Section/subsection headers should have newlines before and after. Inline comments should not have empty newlines separating the comment from the item to which it relates.

For sections and subsections:

```css
/**
 * #.# Section title
 *
 * Description of section, whether or not it has media queries, etc.
 */

.selector {
    float: left;
}

```

For inline:

```css
/* This is a comment about this selector */
.another-selector {
    position: absolute;
    top: 0 !important; /* I should explain why this is so !important */
}

```

## Best Practices

Stylesheets tend to grow in length and complexity, and as they grow the chance of redundancy increases. By following some best practices we can help our CSS maintain focus and flexibility as it evolves:

- If you are attempting to fix an issue, attempt to remove code before adding more.
- Magic Numbers are unlucky. These are numbers that are used as quick fixes on a one-off basis. Example: `.box { margin-top: 37px }`.
- DOM will change over time, target the element you want to use as opposed to “finding it” through its parents. Example: Use `.highlight` on the element as opposed to `.highlight a` (where the selector is on the parent)
- Know when to use the `height` property. It should be used when you are including outside elements (such as images). Otherwise use `line-height` for more flexibility.
- Do not restate default property and value combinations (for instance `display: block;` on block-level elements).

### WP Admin CSS

Check out the [WP Admin CSS Audit](https://wordpress.github.io/css-audit/public/wp-admin), a report generated to document the health of the WP Admin CSS code. Read more in [the repository’s README](https://github.com/WordPress/css-audit/blob/trunk/README.md).

## Related Links

- Principles of writing consistent, idiomatic CSS: <https://github.com/necolas/idiomatic-css>.

---

# HTML Coding Standards <a name="coding-standards/wordpress-coding-standards/html" />

Source: https://developer.wordpress.org/coding-standards/wordpress-coding-standards/html/

## HTML

### Validation

All HTML pages should be verified against [the W3C validator](https://validator.w3.org/) to ensure that the markup is well formed. This in and of itself is not directly indicative of good code, but it helps to weed out problems that are able to be tested via automation. It is no substitute for manual code review. (For other validators, see [HTML Validation](https://codex.wordpress.org/Validating_a_Website#HTML_-_Validation) in the Codex.)

### Self-closing Elements

All tags must be properly closed. For tags that can wrap nodes such as text or other elements, termination is a trivial enough task. For tags that are self-closing, the forward slash should have exactly one space preceding it:

```html
<br />

```

rather than the compact but incorrect:

```html
<br/>

```

The W3C specifies that a single space should precede the self-closing slash ([source](https://w3.org/TR/xhtml1/#C_2)).

### Attributes and Tags

All tags and attributes must be written in lowercase. Additionally, attribute values should be lowercase when the purpose of the text therein is only to be interpreted by machines. For instances in which the data needs to be human readable, proper title capitalization should be followed.

For machines:

```html
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

```

For humans:

```html
<a href="http://example.com/" title="Description Here">Example.com</a>

```

### Quotes

According to the W3C specifications for XHTML, all attributes must have a value, and must use double- or single-quotes ([source](https://www.w3.org/TR/xhtml1/#h-4.4)). The following are examples of proper and improper usage of quotes and attribute/value pairs.

Correct:

```html
<input type="text" name="email" disabled="disabled" />
<input type='text' name='email' disabled='disabled' />

```

Incorrect:

```html
<input type=text name=email disabled>

```

In HTML, attributes do not all have to have values, and attribute values do not always have to be quoted. While all of the examples above are valid HTML, *failing to quote attributes can lead to security vulnerabilities*. Always quote attributes. Omitting the value on boolean attributes is allowed. The values `true` and `false` are not valid on boolean attributes ([HTML5 source](https://www.w3.org/TR/2011/WD-html5-20110405/common-microsyntaxes.html#boolean-attributes)).

Correct:

```html
<input type="text" name="email" disabled />

```

Incorrect:

```html
<input type="text" name="email" disabled="true" />

```

### Indentation

As with PHP, HTML indentation should always reflect logical structure. Use tabs and not spaces.

When mixing PHP and HTML together, indent PHP blocks to match the surrounding HTML code. Closing PHP blocks should match the same indentation level as the opening block.

Correct:

```php
<?php if ( ! have_posts() ) : ?>
<div id="post-1" class="post">
    <h1 class="entry-title">Not Found</h1>
    <div class="entry-content">
        <p>Apologies, but no results were found.</p>
        <?php get_search_form(); ?>
    </div>
</div>
<?php endif; ?>

```

Incorrect:

```php
<?php if ( ! have_posts() ) : ?>
<div id="post-0" class="post error404 not-found">
<h1 class="entry-title">Not Found</h1>
<div class="entry-content">
<p>Apologies, but no results were found.</p>
<?php get_search_form(); ?>
</div>
</div>
<?php endif; ?>

```

## Credits

- HTML code standards adapted from [Fellowship Tech Code Standards](https://developer.fellowshipone.com/patterns/code.php) ([CC license](https://creativecommons.org/licenses/by-nc-sa/3.0/)).

---

# JavaScript Coding Standards <a name="coding-standards/wordpress-coding-standards/javascript" />

Source: https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/

JavaScript has become a critical component in developing WordPress-based applications (themes and plugins) as well as WordPress core. Standards are needed for formatting and styling JavaScript code to maintain the same code consistency as the WordPress standards provide for core PHP, HTML, and CSS code.

> All code in any code-base should look like a single person typed it, no matter how many people contributed. – [Principles of Writing Consistent, Idiomatic JavaScript](https://github.com/rwaldron/idiomatic.js/)

The WordPress JavaScript Coding Standards are adapted from the [jQuery JavaScript Style Guide](https://contribute.jquery.org/style-guide/js). Our standard differs from the jQuery guidelines in the following ways:

- WordPress uses single quotation marks for string declarations.
- Case statements are indented within switch blocks.
- Function contents are consistently indented, including full-file closure wrappers.
- Some whitespace rules differ, for consistency with the WordPress PHP coding standards.
- jQuery’s 100-character hard line limit is encouraged, but not strictly enforced.

Many of the examples below have been adapted directly from the jQuery style guide; these differences have all been integrated into the examples on this page. Any of the below standards and examples should be considered best practice for WordPress code, unless explicitly noted as anti-patterns.

## Code Refactoring

> “[Code refactoring should not be done just because we can.](https://make.wordpress.org/core/2011/03/23/code-refactoring/)” – Lead Developer Andrew Nacin

Many parts of the WordPress code structure for JavaScript are inconsistent in their style. WordPress is working to gradually improve this, so the code will be clean and easy to read at a glance.

While the coding standards are important, refactoring older .js files simply to conform to the standards is not an urgent issue. “Whitespace-only” patches for older files are strongly discouraged.

All new or updated JavaScript code will be reviewed to ensure it conforms to the standards, and passes JSHint.

## Spacing

Use spaces liberally throughout your code. “When in doubt, space it out.”

These rules encourage liberal spacing for improved developer readability. The minification process creates a file that is optimized for browsers to read and process.

- Indentation with tabs.
- No whitespace at the end of line or on blank lines.
- Lines should usually be no longer than 80 characters, and should not exceed 100 (counting tabs as 4 spaces). *This is a “soft” rule, but long lines generally indicate unreadable or disorganized code.*
- `if`/`else`/`for`/`while`/`try` blocks should always use braces, and always go on multiple lines.
- Unary special-character operators (e.g., `++`, `--`) must not have space next to their operand.
- Any `,` and `;` must not have preceding space.
- Any `;` used as a statement terminator must be at the end of the line.
- Any `:` after a property name in an object definition must not have preceding space.
- The `?` and `:` in a ternary conditional must have space on both sides.
- No filler spaces in empty constructs (e.g., `{}`, `[]`, `fn()`).
- There should be a new line at the end of each file.
- Any `!` negation operator should have a following space.\*
- All function bodies are indented by one tab, even if the entire file is wrapped in a closure.\*
- Spaces may align code within documentation blocks or within a line, but only tabs should be used at the start of a line.\*

<a name="spacing-whitespace">\*</a>: The WordPress JavaScript standards prefer slightly broader whitespace rules than the jQuery style guide. These deviations are for consistency between the PHP and JavaScript files in the WordPress codebase.

Whitespace can easily accumulate at the end of a line – avoid this, as trailing whitespace is caught as an error in JSHint. One way to catch whitespace buildup is enabling visible whitespace characters within your text editor.

### Object Declarations

Object declarations can be made on a single line if they are short (remember the line length guidelines). When an object declaration is too long to fit on one line, there must be one property per line and each line ended by a comma. Property names only need to be quoted if they are reserved words or contain special characters:

Arrays can be declared on a single line if they are short (remember the line length guidelines). When an array is too long to fit on one line, each member must be placed on its own line and each line ended by a comma.

```javascript
// Preferred
var obj = {
    ready: 9,
    when: 4,
    'you are': 15,
};
var arr = [
    9,
    4,
    15,
];

// Acceptable for small objects and arrays
var obj = { ready: 9, when: 4, 'you are': 15 };
var arr = [ 9, 4, 15 ];

// Bad
var obj = { ready: 9,
    when: 4, 'you are': 15 };
var arr = [ 9,
    4, 15 ];

```

### Arrays and Function Calls

Always include extra spaces around elements and arguments:

```javascript
array = [ a, b ];

foo( arg );

foo( 'string', object );

foo( options, object[ property ] );

foo( node, 'property', 2 );

prop = object[ 'default' ];

firstArrayElement = arr[ 0 ];

```

### Examples of Good Spacing

```javascript
var i;

if ( condition ) {
    doSomething( 'with a string' );
} else if ( otherCondition ) {
    otherThing( {
        key: value,
        otherKey: otherValue
    } );
} else {
    somethingElse( true );
}

// Unlike jQuery, WordPress prefers a space after the ! negation operator.
// This is also done to conform to our PHP standards.
while ( ! condition ) {
    iterating++;
}

for ( i = 0; i < 100; i++ ) {
    object[ array[ i ] ] = someFn( i );
    $( '.container' ).val( array[ i ] );
}

try {
    // Expressions
} catch ( e ) {
    // Expressions
}

```

## Semicolons

Use them. Never rely on Automatic Semicolon Insertion (ASI).

## Indentation and Line Breaks

Indentation and line breaks add readability to complex statements.

Tabs should be used for indentation. Even if the entire file is contained in a closure (i.e., an immediately invoked function), the contents of that function should be indented by one tab:

```javascript
( function ( $ ) {
    // Expressions indented

    function doSomething() {
        // Expressions indented
    }
} )( jQuery );

```

### Blocks and Curly Braces

`if`, `else`, `for`, `while`, and `try` blocks should always use braces, and always go on multiple lines. The opening brace should be on the same line as the function definition, the conditional, or the loop. The closing brace should be on the line directly following the last statement of the block.

```javascript
var a, b, c;

if ( myFunction() ) {
    // Expressions
} else if ( ( a && b ) || c ) {
    // Expressions
} else {
    // Expressions
}

```

### Multi-line Statements

When a statement is too long to fit on one line, line breaks must occur after an operator.

```javascript
// Bad
var html = '<p>The sum of ' + a + ' and ' + b + ' plus ' + c
    + ' is ' + ( a + b + c ) + '</p>';

// Good
var html = '<p>The sum of ' + a + ' and ' + b + ' plus ' + c +
    ' is ' + ( a + b + c ) + '</p>';

```

Lines should be broken into logical groups if it improves readability, such as splitting each expression of a ternary operator onto its own line, even if both will fit on a single line.

```javascript
// Acceptable
var baz = ( true === conditionalStatement() ) ? 'thing 1' : 'thing 2';

// Better
var baz = firstCondition( foo ) && secondCondition( bar ) ?
    qux( foo, bar ) :
    foo;

```

When a conditional is too long to fit on one line, each operand of a logical operator in the boolean expression must appear on its own line, indented one extra level from the opening and closing parentheses.

```javascript
if (
    firstCondition() &&
    secondCondition() &&
    thirdCondition()
) {
    doStuff();
}

```

### Chained Method Calls

When a chain of method calls is too long to fit on one line, there must be one call per line, with the first call on a separate line from the object the methods are called on. If the method changes the context, an extra level of indentation must be used.

```javascript
elements
    .addClass( 'foo' )
    .children()
        .html( 'hello' )
    .end()
    .appendTo( 'body' );

```

## Assignments and Globals

### Declaring Variables with `const` and `let`

For code written using ES2015 or newer, `const` and `let` should always be used in place of `var`. A declaration should use `const` unless its value will be reassigned, in which case `let` is appropriate.

Unlike `var`, it is not necessary to declare all variables at the top of a function. Instead, they are to be declared at the point at which they are first used.

### Declaring Variables With `var`

Each function should begin with a single comma-delimited `var` statement that declares any local variables necessary. If a function does not declare a variable using `var`, that variable can leak into an outer scope (which is frequently the global scope, a worst-case scenario), and can unwittingly refer to and modify that data.

Assignments within the `var` statement should be listed on individual lines, while declarations can be grouped on a single line. Any additional lines should be indented with an additional tab. Objects and functions that occupy more than a handful of lines should be assigned outside of the `var` statement, to avoid over-indentation.

```javascript
// Good
var k, m, length,
    // Indent subsequent lines by one tab
    value = 'WordPress';

// Bad
var foo = true;
var bar = false;
var a;
var b;
var c;

```

### Globals

In the past, WordPress core made heavier use of global variables. Since core JavaScript files are sometimes used within plugins, existing globals should not be removed.

All globals used within a file should be documented at the top of that file. Multiple globals can be comma-separated.

This example would make `passwordStrength` an allowed global variable within that file:

```javascript
/* global passwordStrength:true */

```

The “true” after `passwordStrength` means that this global is being defined within this file. If you are accessing a global which is defined elsewhere, omit `:true` to designate the global as read-only.

### Common Libraries

Backbone, jQuery, Underscore, and the global `wp` object are all registered as allowed globals in the root `.jshintrc` file.

Backbone and Underscore may be accessed directly at any time. jQuery should be accessed through `$` by passing the `jQuery` object into an anonymous function:

```javascript
( function ( $ ) {
    // Expressions
} )( jQuery );

```

This will negate the need to call `.noConflict()`, or to set `$` using another variable.

Files which add to, or modify, the `wp` object must safely access the global to avoid overwriting previously set properties:

```javascript
// At the top of the file, set "wp" to its existing value (if present)
window.wp = window.wp || {};

```

## Naming Conventions

Variable and function names should be full words, using camel case with a lowercase first letter. This is an area where this standard differs from the [WordPress PHP coding standards](#coding-standards/wordpress-coding-standards/php).

Names should be descriptive, but not excessively so. Exceptions are allowed for iterators, such as the use of `i` to represent the index in a loop.

### Abbreviations and Acronyms

[Acronyms](https://en.wikipedia.org/wiki/Acronym) must be written with each of its composing letters capitalized. This is intended to reflect that each letter of the acronym is a proper word in its expanded form.

All other [abbreviations](https://en.wikipedia.org/wiki/Abbreviation) must be written as camel case, with an initial capitalized letter followed by lowercase letters.

If an abbreviation or an acronym occurs at the start of a variable name, it must be written to respect the camelcase naming rules covering the first letter of a variable or class definition. For variable assignment, this means writing the abbreviation entirely as lowercase. For class definitions, its initial letter should be capitalized.

```javascript
// "Id" is an abbreviation of "Identifier":
const userId = 1;

// "DOM" is an acronym of "Document Object Model":
const currentDOMDocument = window.document;

// Acronyms and abbreviations at the start of a variable name are consistent
// with camelcase rules covering the first letter of a variable or class.
const domDocument = window.document;
class DOMDocument {}
class IdCollection {}

```

### Class Definitions

Constructors intended for use with `new` should have a capital first letter (UpperCamelCase).

A [`class` definition](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Classes) must use the UpperCamelCase convention, regardless of whether it is intended to be used with `new` construction.

```javascript
class Earth {
    static addHuman( human ) {
        Earth.humans.push( human );
    }

    static getHumans() {
        return Earth.humans;
    }
}

Earth.humans = [];

```

All [`@wordpress/element`](https://www.npmjs.com/package/@wordpress/element) Components, including stateless function components, should be named using Class Definition naming rules, both for consistency and to reflect the fact that a component may need to be transitioned from a function to a class without breaking compatibility.

### Constants

An exception to camel case is made for constant values which are never intended to be reassigned or mutated. Such variables must use the [SCREAMING\_SNAKE\_CASE convention](https://en.wikipedia.org/wiki/Snake_case#History).

In almost all cases, a constant should be defined in the top-most scope of a file. It is important to note that [JavaScript’s `const` assignment](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/const) is conceptually more limited than what is implied here, where a value assigned by `const` in JavaScript can in-fact be mutated, and is only protected against reassignment. A constant as defined in these coding guidelines applies only to values which are expected to never change, and is a strategy for developers to communicate intent, more than it is a technical restriction.

## Comments

Comments come before the code to which they refer, and should always be preceded by a blank line. Capitalize the first letter of the comment, and include a period at the end when writing full sentences. There must be a single space between the comment token (`//`) and the comment text.

```javascript
someStatement();

// Explanation of something complex on the next line
$( 'p' ).doSomething();

// This is a comment that is long enough to warrant being stretched
// over the span of multiple lines.

```

JSDoc comments should use the `/**` multi-line comment opening. Refer to the [JavaScript Documentation Standards](https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/javascript/#multi-line-comments) for more information.

Inline comments are allowed as an exception when used to annotate special arguments in formal parameter lists:

```javascript
function foo( types, selector, data, fn, /* INTERNAL */ one ) {
    // Do stuff
}

```

## Equality

Strict equality checks (`===`) must be used in favor of abstract equality checks (`==`).

## Type Checks

These are the preferred ways of checking the type of an object:

- String: `typeof object === 'string'`
- Number: `typeof object === 'number'`
- Boolean: `typeof object === 'boolean'`
- Object: `typeof object === 'object'` or `_.isObject( object )`
- Plain Object: `jQuery.isPlainObject( object )`
- Function: `_.isFunction( object )` or `jQuery.isFunction( object )`
- Array: `_.isArray( object )` or `jQuery.isArray( object )`
- Element: `object.nodeType` or `_.isElement( object )`
- null: `object === null`
- null or undefined: `object == null`
- undefined: 
    - Global Variables: `typeof variable === 'undefined'`
    - Local Variables: `variable === undefined`
    - Properties: `object.prop === undefined`
    - Any of the above: `_.isUndefined( object )`

Anywhere Backbone or Underscore are already used, you are encouraged to use [Underscore.js](http://underscorejs.org/#isElement)‘s type checking methods over jQuery’s.

## Strings

Use single-quotes for string literals:

```javascript
var myStr = 'strings should be contained in single quotes';

```

When a string contains single quotes, they need to be escaped with a backslash (`\`):

```javascript
// Escape single quotes within strings:
'Note the backslash before the \'single quotes\'';

```

## Switch Statements

The usage of `switch` statements is generally discouraged, but can be useful when there are a large number of cases – especially when multiple cases can be handled by the same block, or fall-through logic (the `default` case) can be leveraged.

When using `switch` statements:

- Use a `break` for each case other than `default`. When allowing statements to “fall through,” note that explicitly.
- Indent `case` statements one tab within the `switch`.

```javascript
switch ( event.keyCode ) {
    // ENTER and SPACE both trigger x()
    case $.ui.keyCode.ENTER:
    case $.ui.keyCode.SPACE:
        x();
        break;
    case $.ui.keyCode.ESCAPE:
        y();
        break;
    default:
        z();
}

```

It is not recommended to return a value from within a switch statement: use the `case` blocks to set values, then `return` those values at the end.

```javascript
function getKeyCode( keyCode ) {
    var result;

    switch ( event.keyCode ) {
        case $.ui.keyCode.ENTER:
        case $.ui.keyCode.SPACE:
            result = 'commit';
            break;
        case $.ui.keyCode.ESCAPE:
            result = 'exit';
            break;
        default:
            result = 'default';
    }

    return result;
}

```

## Best Practices

### Arrays

Creating arrays in JavaScript should be done using the shorthand `[]` constructor rather than the `new Array()` notation.

```javascript
var myArray = [];

```

You can initialize an array during construction:

```javascript
var myArray = [ 1, 'WordPress', 2, 'Blog' ];

```

In JavaScript, associative arrays are defined as objects.

### Objects

There are many ways to create objects in JavaScript. Object literal notation, `{}`, is both the most performant, and also the easiest to read.

```javascript
var myObj = {};

```

Object literal notation should be used unless the object requires a specific prototype, in which case the object should be created by calling a constructor function with `new`.

```javascript
var myObj = new ConstructorMethod();

```

Object properties should be accessed via dot notation, unless the key is a variable or a string that would not be a valid identifier:

```javascript
prop = object.propertyName;
prop = object[ variableKey ];
prop = object['key-with-hyphens'];

```

### Iteration

When iterating over a large collection using a `for` loop, it is recommended to store the loop’s max value as a variable rather than re-computing the maximum every time:

```javascript
// Good & Efficient
var i, max;

// getItemCount() gets called once
for ( i = 0, max = getItemCount(); i < max; i++ ) {
    // Do stuff
}

// Bad & Potentially Inefficient:
// getItemCount() gets called every time
for ( i = 0; i < getItemCount(); i++ ) {
    // Do stuff
}

```

### Underscore.js Collection Functions

Learn and understand Underscore’s [collection and array methods](http://underscorejs.org/#collections). These functions, including `_.each`, `_.map`, and `_.reduce`, allow for efficient, readable transformations of large data sets.

Underscore also permits jQuery-style chaining with regular JavaScript objects:

```javascript
var obj = {
    first: 'thing 1',
    second: 'thing 2',
    third: 'lox'
};

var arr = _.chain( obj )
    .keys()
    .map( function ( key ) {
        return key + ' comes ' + obj[ key ];
    } )
    // Exit the chain
    .value();

// arr === [ 'first comes thing 1', 'second comes thing 2', 'third comes lox' ]

```

### Iterating Over jQuery Collections

The only time jQuery should be used for iteration is when iterating over a collection of jQuery objects:

```javascript
$tabs.each( function ( index, element ) {
    var $element = $( element );

    // Do stuff to $element
} );

```

Never use jQuery to iterate over raw data or vanilla JavaScript objects.

## JSHint

[JSHint](https://jshint.com) is an automated code quality tool, designed to catch errors in your JavaScript code. JSHint is used in WordPress development to quickly verify that a patch has not introduced any logic or syntax errors to the front-end.

### Installing and Running JSHint

JSHint is run using a tool called [Grunt](https://gruntjs.com/). Both JSHint and Grunt are programs written in [Node.js](https://nodejs.org/). The `package.json` configuration file that comes with the WordPress development code allows you to install and configure these tools.

To install Node.js, click the Install link on the [Node.js](https://nodejs.org/) website. The correct install file for your operating system will be downloaded. Follow the installation steps for your operating system to install the program.

Once Node.js is installed, open a command line window and navigate to the directory where you [checked out a copy of the WordPress SVN repository](https://make.wordpress.org/core/handbook/tutorials/installing-wordpress-locally/from-svn/) (use `cd ~/directoryname`. You should be in the root directory which contains the `package.json` file.

Next, type `npm install` into the command line window. This will download and install all the Node packages used in WordPress development.

You should now be able to type `npm run grunt jshint` to have Grunt check all the WordPress JavaScript files for syntax and logic errors. To only check core code, type `npm run grunt jshint:core`; to only check unit test .js files, type `npm run grunt jshint:tests`.

### JSHint Settings

The configuration options used for JSHint are stored within a [`.jshintrc`](https://develop.svn.wordpress.org/trunk/.jshintrc "WordPress JSHint file in svn trunk") in the WordPress SVN repository. This file defines which errors JSHint should flag if it finds them within the WordPress source code.

### Target A Single File

To specify a single file for JSHint to check, add `--file=filename.js` to the end of the command. For example, this will only check the file named “admin-bar.js” within WordPress’s core JavaScript files:

`npm run grunt jshint:core --file=admin-bar.js`

And this would only check the “password-strength-meter.js” file within the unit tests directory:

`npm run grunt jshint:tests --file=password-strength-meter.js`

Limiting JSHint to a single file can be useful if you are only working on one or two specific files and don’t want to wait for JSHint to process every single file each time it runs.

### JSHint Overrides: Ignore Blocks

In some situations, parts of a file should be excluded from JSHint. As an example, the script file for the admin bar contains the minified code for the jQuery HoverIntent plugin – this is third-party code that should not pass through JSHint, even though it is part of a WordPress core JavaScript file.

To exclude a specific file region from being processed by JSHint, enclose it in JSHint directive comments:

```javascript
/* jshint ignore:start */
if ( typeof jQuery.fn.hoverIntent === 'undefined' ) {
    // hoverIntent r6 - Copy of wp-includes/js/hoverIntent.min.js
    (function(a){a.fn.hoverIntent=...............
}
/* jshint ignore:end */

```

## Credits

- The jQuery examples are adapted from the [jQuery JavaScript Style Guide](https://contribute.jquery.org/style-guide/js), which is made available under the MIT license.

---

# PHP Coding Standards <a name="coding-standards/wordpress-coding-standards/php" />

Source: https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/

These PHP coding standards are intended for the WordPress community as a whole. They are mandatory for WordPress Core and we encourage you to use them for your themes and plugins as well.

While themes and plugins may choose to follow a different *coding style*, these ***coding standards*** are not just about *code style*, but also encompass established best practices regarding interoperability, translatability, and security in the WordPress ecosystem, so, even when using a different *code style*, we recommend you still adhere to the WordPress Coding Standards in regard to these best practices.

While not all code may fully comply with these standards (yet), all newly committed and/or updated code should fully comply with these coding standards.

Also see the [PHP Inline Documentation Standards](#coding-standards/inline-documentation-standards/php) for further guidelines.

If you want to automatically check your code against this standard, you can use the official [WordPress Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards) tooling, which is run using [PHP\_CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer/).

## General

### Opening and Closing PHP Tags

When embedding multi-line PHP snippets within an HTML block, the PHP open and close tags must be on a line by themselves.

Correct (Multiline):

```php
function foo() {
    ?>
    <div>
        <?php
        echo esc_html(
            bar(
                $baz,
                $bat
            )
        );
        ?>
    </div>
    <?php
}

```

Correct (Single Line):

```php
<input name="<?php echo esc_attr( $name ); ?>" />

```

Incorrect:

```php
if ( $a === $b ) { ?>
<some html>
<?php }

```

### No Shorthand PHP Tags

**Important:** Never use shorthand PHP start tags. Always use full PHP tags.

Correct:

```php
<?php ... ?>
<?php echo esc_html( $var ); ?>

```

Incorrect:

```php
<? ... ?>
<?= esc_html( $var ) ?>

```

### Single and Double Quotes

Use single and double quotes when appropriate. If you’re not evaluating anything in the string, use single quotes. You should almost never have to escape quotes in a string, because you can just alternate your quoting style, like so:

```php
echo '<a href="/static/link" class="button button-primary">Link name</a>';
echo "<a href='{$escaped_link}'>text with a ' single quote</a>";

```

Text that goes into HTML or XML attributes should be escaped so that single or double quotes do not end the attribute value and invalidate the HTML, causing a security issue. See [Data Validation](#plugins/security/data-validation) in the Plugin Handbook for further details.

### Writing require/include statements

Because `require[_once]` and `include[_once]` are language constructs, they do not need parentheses around the path, so those shouldn’t be used. There should only be one space between the path and the require/include keywords.

It is *strongly recommended* to use `require[_once]` for unconditional includes. When using `include[_once]`, PHP will throw a warning when the file is not found but will continue execution, which will almost certainly lead to other errors/warnings/notices being thrown if your application depends on the file loaded, potentially leading to security leaks. For that reason, `require[_once]` is generally the better choice as it will throw a `Fatal Error` if the file cannot be found.

```php
// Correct.
require_once ABSPATH . 'file-name.php';

// Incorrect.
include_once  ( ABSPATH . 'file-name.php' );
require_once     __DIR__ . '/file-name.php';

```

## Naming

### Naming Conventions

Use lowercase letters in variable, action/filter, and function names (never `camelCase`). Separate words via underscores. Don’t abbreviate variable names unnecessarily; let the code be unambiguous and self-documenting.

```php
function some_name( $some_variable ) {}

```

For function parameter names, it is *strongly recommended* to avoid reserved keywords as names, as it leads to hard to read and confusing code when using the PHP 8.0 “named parameters in function calls” feature.  
Also keep in mind that renaming a function parameter should be considered a breaking change since PHP 8.0, so name function parameters with due care!

Class, trait, interface and enum names should use capitalized words separated by underscores. Any acronyms should be all upper case.

```php
class Walker_Category extends Walker {}
class WP_HTTP {}

interface Mailer_Interface {}
trait Forbid_Dynamic_Properties {}
enum Post_Status {}

```

Constants should be in all upper-case with underscores separating words:

```php
define( 'DOING_AJAX', true );

```

Files should be named descriptively using lowercase letters. Hyphens should separate words.

```php
my-plugin-name.php

```

Class file names should be based on the class name with `class-` prepended and the underscores in the class name replaced with hyphens, for example, `WP_Error` becomes:

```php
class-wp-error.php

```

This file-naming standard is for all current and new files with classes, except test classes.  
For files containing test classes, the file name should reflect the class name exactly, as per PSR4. This is to ensure cross-version [compatibility with all supported PHPUnit versions](https://github.com/sebastianbergmann/phpunit/pull/4109).

Files containing template tags in the `wp-includes` directory should have `-template` appended to the end of the name so that they are obvious.

```php
general-template.php

```

### Interpolation for Naming Dynamic Hooks

Dynamic hooks should be named using interpolation rather than concatenation for readability and discoverability purposes.

Dynamic hooks are hooks that include dynamic values in their tag name, e.g. `{$new_status}_{$post->post_type}` (publish\_post).

Variables used in hook tags should be wrapped in curly braces `{` and `}`, with the complete outer tag name wrapped in double quotes. This is to ensure PHP can correctly parse the given variables’ types within the interpolated string.

```php
do_action( "{$new_status}_{$post->post_type}", $post->ID, $post );

```

Where possible, dynamic values in tag names should also be as succinct and to the point as possible. `$user_id` is much more self-documenting than, say, `$this->id`.

## Whitespace

### Space Usage

Always put spaces after commas, and on both sides of logical, arithmetic, comparison, string and assignment operators.

```php
SOME_CONST === 23;
foo() && bar();
! $foo;
array( 1, 2, 3 );
$baz . '-5';
$term .= 'X';
if ( $object instanceof Post_Type_Interface ) {}
$result = 2 ** 3; // 8.

```

Put spaces on both sides of the opening and closing parentheses of control structure blocks.

```php
foreach ( $foo as $bar ) { ...

```

When defining a function, do it like so:

```php
function my_function( $param1 = 'foo', $param2 = 'bar' ) { ...

function my_other_function() { ...

```

When calling a function, do it like so:

```php
my_function( $param1, func_param( $param2 ) );
my_other_function();

```

When performing logical comparisons, do it like so:

```php
if ( ! $foo ) { ...

```

[Type casts](https://www.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting) must be lowercase. Always prefer the short form of type casts, `(int)` instead of `(integer)` and `(bool)` rather than `(boolean)`. For float casts use `(float)`, not `(real)` which is [deprecated](https://www.php.net/manual/en/migration74.deprecated.php#migration74.deprecated.core.real) in PHP 7.4, and removed in PHP 8:

```php
foreach ( (array) $foo as $bar ) { ...

$foo = (bool) $bar;

```

When referring to array items, only include a space around the index if it is a variable, for example:

```php
$x = $foo['bar']; // Correct.
$x = $foo[ 'bar' ]; // Incorrect.

$x = $foo[0]; // Correct.
$x = $foo[ 0 ]; // Incorrect.

$x = $foo[ $bar ]; // Correct.
$x = $foo[$bar]; // Incorrect.

```

In a `switch` block, there must be no space between the `case` condition and the colon.

```php
switch ( $foo ) {
    case 'bar': // Correct.
    case 'bar' : // Incorrect.
}

```

Unless otherwise specified, parentheses should have spaces inside them.

```php
if ( $foo && ( $bar || $baz ) ) { ...

my_function( ( $x - 1 ) * 5, $y );

```

When using increment (`++`) or decrement (`--`) operators, there should be no spaces between the operator and the variable it applies to.

```php
// Correct.
for ( $i = 0; $i < 10; $i++ ) {}

// Incorrect.
for ( $i = 0; $i < 10; $i ++ ) {}
++   $b; // Multiple spaces.

```

### Indentation

Your indentation should always reflect logical structure. Use **real tabs**, **not spaces**, as this allows the most flexibility across clients.

Exception: if you have a block of code that would be more readable if things are aligned, use spaces:

```php
[tab]$foo   = 'somevalue';
[tab]$foo2  = 'somevalue2';
[tab]$foo34 = 'somevalue3';
[tab]$foo5  = 'somevalue4';

```

For associative arrays, *each item* should start on a new line when the array contains more than one item:

```php
$query = new WP_Query( array( 'ID' => 123 ) );

```

```php
$args = array(
[tab]'post_type'   => 'page',
[tab]'post_author' => 123,
[tab]'post_status' => 'publish',
);

$query = new WP_Query( $args );

```

Note the comma after the last array item: this is recommended because it makes it easier to change the order of the array, and makes for cleaner diffs when new items are added.

```php
$my_array = array(
[tab]'foo'   => 'somevalue',
[tab]'foo2'  => 'somevalue2',
[tab]'foo3'  => 'somevalue3',
[tab]'foo34' => 'somevalue3',
);

```

For `switch` control structures, `case` statements should be indented one tab from the `switch` statement and the contents of the `case` should be indented one tab from the `case` condition statement.

```php
switch ( $type ) {
[tab]case 'foo':
[tab][tab]some_function();
[tab][tab]break;
[tab]case 'bar':
[tab][tab]some_function();
[tab][tab]break;
}

```

**Rule of thumb:** Tabs should be used at the beginning of the line for indentation, while spaces can be used mid-line for alignment.

### Remove Trailing Spaces

Remove trailing whitespace at the end of each line. Omitting the closing PHP tag at the end of a file is preferred. If you use the tag, make sure you remove trailing whitespace.

There should be no trailing blank lines at the end of a function body.

## Formatting

### Brace Style

Braces shall be used for all blocks in the style shown here:

```php
if ( condition ) {
    action1();
    action2();
} elseif ( condition2 && condition3 ) {
    action3();
    action4();
} else {
    defaultaction();
}

```

If you have a really long block, consider whether it can be broken into two or more shorter blocks, functions, or methods, to reduce complexity, improve ease of testing, and increase readability.

Braces should always be used, even when they are not required:

```php
if ( condition ) {
    action0();
}

if ( condition ) {
    action1();
} elseif ( condition2 ) {
    action2a();
    action2b();
}

foreach ( $items as $item ) {
    process_item( $item );
}

```

Note that requiring the use of braces means that *single-statement inline control structures* are prohibited. You are free to use the [alternative syntax for control structures](https://www.php.net/manual/en/control-structures.alternative-syntax.php) (e.g. `if`/`endif`, `while`/`endwhile`)—especially in templates where PHP code is embedded within HTML, for instance:

```php
<?php if ( have_posts() ) : ?>
    <div class="hfeed">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="<?php echo esc_attr( 'post-' . get_the_ID() ); ?>" class="<?php echo esc_attr( get_post_class() ); ?>">
                <!-- ... -->
            </article>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

```

### Declaring Arrays

Using long array syntax ( `array( 1, 2, 3 )` ) for declaring arrays is generally more readable than short array syntax ( `[ 1, 2, 3 ]` ), particularly for those with vision difficulties. Additionally, it’s much more descriptive for beginners.

Arrays must be declared using long array syntax.

### Multiline Function Calls

When splitting a function call over multiple lines, each parameter must be on a separate line. Single line inline comments can take up their own line.

Each parameter must take up no more than a single line. Multi-line parameter values must be assigned to a variable and then that variable should be passed to the function call.

```php
$bar = array(
    'use_this' => true,
    'meta_key' => 'field_name',
);
$baz = sprintf(
    /* translators: %s: Friend's name */
    __( 'Hello, %s!', 'yourtextdomain' ),
    $friend_name
);

$a = foo(
    $bar,
    $baz,
    /* translators: %s: cat */
    sprintf( __( 'The best pet is a %s.' ), 'cat' )
);

```

### Type declarations

Type declarations must have exactly one space before and after the type. The nullability operator (`?`) is regarded as part of the type declaration and there should be no space between this operator and the actual type. Class/interface/enum name based type declarations should use the case of the class/interface/enum name as declared, while the keyword-based type declarations should be lowercased.

Return type declarations should have no space between the closing parenthesis of the function declaration and the colon starting a return type.

These rules apply to all structures allowing for type declarations: functions, closures, enums, catch conditions as well as the PHP 7.4 arrow functions and typed properties.

```php
// Correct.
function foo( Class_Name $parameter, callable $callable, int $number_of_things = 0 ) {
    // Do something.
}

function bar(
    Interface_Name&Concrete_Class $param_a,
    string|int $param_b,
    callable $param_c = 'default_callable'
): User|false {
    // Do something.
}

// Incorrect.
function baz(Class_Name $param_a, String$param_b,      CALLABLE     $param_c )   :   ?   iterable   {
    // Do something.
}

```

Type declaration usage has the following restrictions based on the minimum required PHP version of an application, whether it is WordPress Core, a plugin or a theme:

- The scalar `bool`, `int`, `float`, and `string` type declarations cannot be used until the minimum PHP version is PHP 7.0 or higher.
- Return type declarations cannot be used until the minimum PHP version is PHP 7.0 or higher.
- Nullable type declarations cannot be used until the minimum PHP version is PHP 7.1 or higher.
- The `iterable` and `void` type declarations cannot be used until the minimum PHP version is PHP 7.1 or higher. The `void` type can only be used as a return type.
- The `object` type declaration cannot be used until the minimum PHP version is PHP 7.2 or higher.
- Property type declarations cannot be used until the minimum PHP version is PHP 7.4 or higher.
- `static` (return type only) cannot be used until the minimum PHP version is PHP 8.0 or higher.
- `mixed` type cannot be used until the minimum PHP version is PHP 8.0 or higher. Take note that the `mixed` type includes `null`, so cannot be made nullable.
- Union types cannot be used until the minimum PHP version is PHP 8.0 or higher.
- Intersection types cannot be used until the minimum PHP version is PHP 8.1 or higher.
- `never` (return type only) cannot be used until the minimum PHP version is PHP 8.1 or higher.
- Disjunctive normal form types (combining union types and intersection types) cannot be used until the minimum PHP version is PHP 8.2 or higher.

*Usage in WordPress Core*

  
Adding type declarations to existing WordPress Core functions should be done with extreme care.  

The function signature of any function (method) which can be overloaded by plugins or themes should not be touched.  
This leaves, for now, only unconditionally declared functions in the global namespace, `private` class methods, and code new to Core, as candidates for adding type declarations.

Note: Using the `array` keyword in type declarations is **strongly discouraged** for now, as most often, it would be better to use `iterable` to allow for more flexibility in the implementation and that keyword is not yet available for use in WordPress Core until the minimum requirements are raised to PHP 7.1.

### Magic constants

The [PHP native `__*__` magic constants](https://www.php.net/manual/en/language.constants.magic.php), like `__CLASS__` and `__DIR__`, should be written in uppercase when used.

When using the `::class` constant for class name resolution, the `class` keyword should be in lowercase and there should be no spaces around the `::` operator.

```php
// Correct.
add_action( 'action_name', array( __CLASS__, 'method_name' ) );
add_action( 'action_name', array( My_Class::class, 'method_name' ) );

// Incorrect.
require_once __dIr__ . '/relative-path/file-name.php';
add_action( 'action_name', array( My_Class :: CLASS, 'method_name' ) );

```

### Spread operator `...`

When using the spread operator, there should be one space or a new line with the appropriate indentation before the spread operator. There should be no spaces between the spread operator and the variable/function call it applies to. When combining the spread operator with the reference operator (`&`), there should be no spaces between them.

```php
// Correct.
function foo( &...$spread ) {
    bar( ...$spread );

    bar(
        array( ...$foo ),
        ...array_values( $keyed_array )
    );
}

// Incorrect.
function fool( &   ... $spread ) {
    bar(...
             $spread );

    bar(
        [...  $foo ],... array_values( $keyed_array )
    );
}

```

  
The spread operator (or splat operator as it’s known in other languages) can be used for packing arguments in function declarations (variadic functions) and unpacking them in function calls as of PHP 5.6. Since PHP 7.4, the spread operator is also used for unpacking numerically-indexed arrays, with string-keyed array unpacking available since PHP 8.1.  
When used in a function declaration, the spread operator can only be used with the last parameter.  

## Declare Statements, Namespace, and Import Statements

### Namespace declarations

Each part of a namespace name should consist of capitalized words separated by underscores.

Namespace declarations should have exactly one blank line before the declaration and at least one blank line after.

```php
namespace Prefix\Admin\Domain_URL\Sub_Domain\Event; // Correct.

```

There should be only one namespace declaration per file, and it should be at the top of the file. Namespace declarations using curly brace syntax are not allowed. Explicit global namespace declaration (namespace declaration without name) are also not allowed.

```php
// Incorrect: namespace declaration using curly brace syntax.
namespace Foo {
    // Code.
}

// Incorrect: namespace declaration for the global namespace.
namespace {
    // Code.
}

```

*There is currently no timeline for introducing namespaces to WordPress Core.*

The use of namespaces in plugins and themes is strongly encouraged. It is a great way to prefix a lot of your code to prevent naming conflicts with other plugins, themes and/or WordPress Core.

Please do make sure you use a unique and long enough namespace prefix to actually prevent conflicts. Generally speaking, using a namespace prefix along the lines of `Vendor\Project_Name` is a good idea.

  
The `wp` and `WordPress` namespace prefixes are reserved for WordPress itself.  

  
Namespacing has no effect on variables, constants declared with `define()` or non-PHP native constructs, like the hook names as used in WordPress.  
Those still need to be prefixed individually.  

### Using import `use` statements

Using import `use` statements allows you to refer to constants, functions, classes, interfaces, namespaces, enums and traits that live outside of the current namespace.

Import `use` statements should be at the top of the file and follow the (optional) `namespace` declaration. They should follow a specific order based on the **type** of the import:

1. `use` statements for namespaces, classes, interfaces, traits and enums
2. `use` statements for functions
3. `use` statements for constants

Aliases can be used to prevent name collisions (two classes in different namespaces using the same class name).  
When using aliases, make sure the aliases follow the WordPress naming convention and are unique.

The following examples showcase the correct and incorrect usage of import `use` statements regarding things like spacing, groupings, leading backslashes, etc.

Correct:

```php
namespace Project_Name\Feature;

use Project_Name\Sub_Feature\Class_A;
use Project_Name\Sub_Feature\Class_C as Aliased_Class_C;
use Project_Name\Sub_Feature\{
    Class_D,
    Class_E as Aliased_Class_E,
}

use function Project_Name\Sub_Feature\function_a;
use function Project_Name\Sub_Feature\function_b as aliased_function;

use const Project_Name\Sub_Feature\CONSTANT_A;
use const Project_Name\Sub_Feature\CONSTANT_D as ALIASED_CONSTANT;

// Rest of the code.

```

Incorrect:

```php
namespace Project_Name\Feature;

use   const   Project_Name\Sub_Feature\CONSTANT_A; // Superfluous whitespace after the "use" and the "const" keywords.
use function Project_Name\Sub_Feature\function_a; // Function import after constant import.
use \Project_Name\Sub_Feature\Class_C as aliased_class_c; // Leading backslash shouldn't be used, alias doesn't comply with naming conventions.
use Project_Name\Sub_Feature\{Class_D, Class_E   as   Aliased_Class_E} // Extra spaces around the "as" keyword, incorrect whitespace use inside the brace opener and closer.
use Vendor\Package\{ function function_a, function function_b,
     Class_C,
        const CONSTANT_NAME}; // Combining different types of imports in one use statement, incorrect whitespace use within group use statement.

class Foo {
    // Code.
}

use const \Project_Name\Sub_Feature\CONSTANT_D as Aliased_constant; // Import after class definition, leading backslash, naming conventions violation.
use function Project_Name\Sub_Feature\function_b as Aliased_Function; // Import after class definition, naming conventions violation.

// Rest of the code.

```

  
Import `use` statements have no effect on dynamic class, function or constant names.  
Group `use` statements are available from PHP 7.0, and trailing commas in group `use` statements are available from PHP 7.2.  

  
Note that, unless you have implemented [autoloading](https://www.php.net/manual/en/language.oop5.autoload.php), the `use` statement won’t automatically load whatever is being imported. For OO constructs, you’ll either need to set up autoloading or load the file(s) containing the OO declaration(s) using `require[_once]` or `include[_once]` statement(s).  
Autoloading is only applicable to OO constructs; for functions and constants, you must always use `require[_once]` or `include[_once]`.  

**Note about WordPress Core usage**

While import `use` statements can already be used in WordPress Core, it is, for the moment, **strongly discouraged**.

Import `use` statements are most useful when combined with namespaces and a class autoloading implementation.  
As neither of these are currently in place for WordPress Core and discussions about this are ongoing, holding off on adding import `use` statements to WordPress Core is the sensible choice for now.

## Object-Oriented Programming

### Only One Object Structure (Class/Interface/Trait/Enum) per File

For instance, if we have a file called `class-example-class.php` it can only contain one class in that file.

```php
// Incorrect: file class-example-class.php.
class Example_Class {}

class Example_Class_Extended {}

```

The second class should be in its own file called `class-example-class-extended.php`.

```php
// Correct: file class-example-class.php.
class Example_Class {}

```

```php
// Correct: file class-example-class-extended.php.
class Example_Class_Extended {}

```

### Trait Use Statements

Trait `use` statements should be at the top of a class and should have exactly one blank line before the first `use` statement, and at least one blank line after the last statement. The only exception is when the class only contains trait `use` statements, in which case the blank line after may be omitted.

The following code examples show the formatting requirements for trait `use` statements regarding things like spacing, grouping and indentation.

```php
// Correct.
class Foo {

    use Bar_Trait;
    use Foo_Trait,
        Bazinga_Trait {
        Bar_Trait::method_name insteadof Bar_Trait;
        Bazinga_Trait::method_name as bazinga_method;
    }
    use Loopy_Trait {
        eat as protected;
    }

    public $baz = true;

    ...
}

// Incorrect.
class Foo {
    // No blank line before trait use statement, multiple spaces after the use keyword.
    use       Bar_Trait;

    /*
     * Multiple spaces when importing traits, no new line after opening brace.
     * Aliasing should be done on the same line as the method it's replacing.
     */
    use Foo_Trait,   Bazinga_Trait{Bar_Trait::method_name    insteadof     Foo_Trait; Bazinga_Trait::method_name
        as     bazinga_method;
            }; // Wrongly indented brace.
    public $baz = true; // Missing blank line after trait import.

    ...
}

```

### Visibility should always be declared

For all constructs that allow it (properties, methods, class constants since PHP 7.1), visibility should be explicitly declared.  
Using the `var` keyword for property declarations is not allowed.

```php
// Correct.
class Foo {
    public $foo;

    protected function bar() {}
}

// Incorrect.
class Foo {
    var $foo;

    function bar() {}
}

```

*Usage in WordPress Core*

Visibility for class constants can not be used in WordPress Core until the minimum PHP version has been raised to PHP 7.1.

### Visibility and modifier order

When using multiple modifiers for a *class declaration*, the order should be as follows:

1. First the optional `abstract` or `final` modifier.
2. Next, the optional `readonly` modifier.

When using multiple modifiers for a *constant declaration* inside object-oriented structures, the order should be as follows:

1. First the optional `final` modifier.
2. Next, the visibility modifier.

When using multiple modifiers for a *property declaration*, the order should be as follows:

1. First a visibility modifier.
2. Next, the optional `static` or `readonly` modifier (these keywords are mutually exclusive).
3. Finally, the optional `type` declaration.

When using multiple modifiers for a *method declaration*, the order should be as follows:

1. First the optional `abstract` or `final` modifier.
2. Then, a visibility modifier.
3. Finally, the optional `static` modifier.

```php
// Correct.
abstract readonly class Foo {
    private const LABEL = 'Book';

    public static $foo;

    private readonly string $bar;

    abstract protected static function bar();
}

// Incorrect.
class Foo {
    protected final const SLUG = 'book';

    static public $foo;

    static protected final function bar() {
        // Code.
    };
}

```

  
– Visibility for OO constants can be declared since PHP 7.1.  
– Typed properties are available since PHP 7.4.  
– Readonly properties are available since PHP 8.1.  
– `final` modifier for constants in object-oriented structures is available since PHP 8.1.  
– Readonly classes are available since PHP 8.2.  

### Object Instantiation

When instantiating a new object instance, parenthesis must always be used, even when not strictly necessary.  
There should be no space between the name of the class being instantiated and the opening parenthesis.

```php
// Correct.
$foo = new Foo();
$anonymous_class = new class( $parameter ) { ... };
$instance = new static();

// Incorrect.
$foo = new Foo;
$anonymous_class = new class ( $input ) { ... };

```

## Control Structures

### Use `elseif`, not `else if`

`else if` is not compatible with the colon syntax for `if|elseif` blocks. For this reason, use `elseif` for conditionals.

### Yoda Conditions

```php
if ( true === $the_force ) {
    $victorious = you_will( $be );
}

```

When doing logical comparisons involving variables, always put the variable on the right side and put constants, literals, or function calls on the left side. If neither side is a variable, the order is not important. (In [computer science terms](https://en.wikipedia.org/wiki/Value_(computer_science)#Assignment:_l-values_and_r-values), in comparisons always try to put l-values on the right and r-values on the left.)

In the above example, if you omit an equals sign (admit it, it happens even to the most seasoned of us), you’ll get a parse error, because you can’t assign to a constant like `true`. If the statement were the other way around `( $the_force = true )`, the assignment would be perfectly valid, returning `1`, causing the if statement to evaluate to `true`, and you could be chasing that bug for a while.

A little bizarre, it is, to read. Get used to it, you will.

This applies to `==`, `!=`, `===`, and `!==`. Yoda conditions for `<`, `>`, `<=` or `>=` are significantly more difficult to read and are best avoided.

## Operators

### Ternary Operator

[Ternary operators](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary) are fine, but always have them test if the statement is true, not false. Otherwise, it just gets confusing. (An exception would be using `! empty()`, as testing for false here is generally more intuitive.)

The short ternary operator must not be used.

For example:

```php
// (if statement is true) ? (do this) : (else, do this);
$musictype = ( 'jazz' === $music ) ? 'cool' : 'blah';
// (if field is not empty ) ? (do this) : (else, do this);

```

### Error Control Operator `@`

As noted in the [PHP docs](https://www.php.net/manual/en/language.operators.errorcontrol.php):

> PHP supports one error control operator: the at sign (@). When prepended to an expression in PHP, any diagnostic error that might be generated by that expression will be suppressed.

While this operator does exist in Core, it is often used lazily instead of doing proper error checking. Its use is highly discouraged, as even the PHP docs also state:

> Warning: Prior to PHP 8.0.0, it was possible for the @ operator to disable critical errors that will terminate script execution. For example, prepending @ to a call of a function that did not exist, by being unavailable or mistyped, would cause the script to terminate with no indication as to why.

### Increment/decrement operators

Pre-increment/decrement should be favored over post-increment/decrement for stand-alone statements.

Pre-increment/decrement will increment/decrement and then return, while post-increment/decrement will return and then increment/decrement.  
Using the “pre” version is slightly more performant and can prevent future bugs when code gets moved around.

```php
// Correct: Pre-decrement.
--$a;

// Incorrect: Post-decrement.
$a--;

```

## Database

### Database Queries

Avoid touching the database directly. If there is a defined function that can get the data you need, use it. Database abstraction (using functions instead of queries) helps keep your code forward-compatible and, in cases where results are cached in memory, it can be many times faster.

If you must touch the database, consider creating a [Trac](https://core.trac.wordpress.org/) ticket. There you can discuss the possibility of adding a new function to cover the functionality you wanted, for a future version of WordPress.

### Formatting SQL statements

When formatting SQL statements you may break them into several lines and indent if it is sufficiently complex to warrant it. Most statements work well as one line though. Always capitalize the SQL parts of the statement like `UPDATE` or `WHERE`.

Functions that update the database should expect their parameters to lack SQL slash escaping when passed. Escaping should be done as close to the time of the query as possible, preferably by using `$wpdb->prepare()`

`$wpdb->prepare()` is a method that handles escaping, quoting, and int-casting for SQL queries. It uses a subset of the `sprintf()` style of formatting. Example :

```php
$var = "dangerous'"; // Raw data that may or may not need to be escaped.
$id = some_foo_number(); // Data we expect to be an integer, but we're not certain.

$wpdb->query( $wpdb->prepare( "UPDATE $wpdb->posts SET post_title = %s WHERE ID = %d", $var, $id ) );

```

The following placeholders can be used in the query string:

- %d (integer)
- %f (float)
- %s (string)
- %i (identifier, e.g. table/field names)

Note that these placeholders should not be ‘quoted’! `$wpdb->prepare()` will take care of escaping and quoting for us. This makes it easy to see at a glance whether something has been escaped or not because it happens right when the query happens.

See [Data Validation](#plugins/security/data-validation) in the Plugin Handbook for further details.

## Recommendations

### Self-Explanatory Flag Values for Function Arguments

Prefer string values to just `true` and `false` when calling functions.

```php
// Incorrect.
function eat( $what, $slowly = true ) {
...
}
eat( 'mushrooms' );
eat( 'mushrooms', true ); // What does true mean?
eat( 'dogfood', false ); // What does false mean? The opposite of true?

```

PHP only supports named arguments as of PHP 8.0. However, as WordPress currently still supports older PHP versions, we cannot yet use those.  
Without named arguments, the values of the flags are meaningless, and each time we come across a function call like the examples above, we have to search for the function definition. The code can be made more readable by using descriptive string values, instead of booleans.

```php
// Correct.
function eat( $what, $speed = 'slowly' ) {
...
}
eat( 'mushrooms' );
eat( 'mushrooms', 'slowly' );
eat( 'dogfood', 'quickly' );

```

When more words are needed to describe the function parameters, an `$args` array may be a better pattern.

```php
function eat( $what, $args ) {
...
}
eat ( 'noodles', array( 'speed' => 'moderate' ) );

```

Be careful when using this pattern, as it can lead to “Undefined array index” notices if input isn’t validated before use. Use this pattern only where it makes sense (i.e. multiple possible arguments), not just for the sake of it.

### Clever Code

In general, readability is more important than cleverness or brevity.

```php
isset( $var ) || $var = some_function();

```

Although the above line is clever, it takes a while to grok if you’re not familiar with it. So, just write it like this:

```php
if ( ! isset( $var ) ) {
    $var = some_function();
}

```

Unless absolutely necessary, loose comparisons should not be used, as their behavior can be misleading.

Correct:

```php
if ( 0 === strpos( $text, 'WordPress' ) ) {
    echo esc_html__( 'Yay WordPress!', 'textdomain' );
}

```

Incorrect:

```php
if ( 0 == strpos( 'WordPress', 'foo' ) ) {
    echo esc_html__( 'Yay WordPress!', 'textdomain' );
}

```

Assignments must not be placed in conditionals.

Correct:

```php
$data = $wpdb->get_var( '...' );
if ( $data ) {
    // Use $data.
}

```

Incorrect:

```php
if ( $data = $wpdb->get_var( '...' ) ) {
    // Use $data.
}

```

In a `switch` statement, it’s okay to have multiple empty cases fall through to a common block. If a case contains a block, then falls through to the next block, however, this must be explicitly commented.

```php
switch ( $foo ) {
    case 'bar':                // Correct, an empty case can fall through without comment.
    case 'baz':
        echo esc_html( $foo ); // Incorrect, a case with a block must break, return, or have a comment.
    case 'cat':
        echo 'mouse';
        break;                 // Correct, a case with a break does not require a comment.
    case 'dog':
        echo 'horse';
        // no break            // Correct, a case can have a comment to explicitly mention the fall through.
    case 'fish':
        echo 'bird';
        break;
}

```

The `goto` statement must never be used.

The `eval()` construct is *very dangerous* and is impossible to secure. Additionally, the `create_function()` function, which internally performs an `eval()`, is deprecated since PHP 7.2 and has been removed in PHP 8.0. Neither of these must be used.

### Closures (Anonymous Functions)

Where appropriate, closures may be used as an alternative to creating new functions to pass as callbacks. For example:

```php
$caption = preg_replace_callback(
    '/<[a-zA-Z0-9]+(?: [^<>]+>)*/',
    function ( $matches ) {
        return preg_replace( '/[\r\n\t]+/', ' ', $matches[0] );
    },
    $caption
);

```

Closures should not be passed as filter or action callbacks, as removing these via `remove_action()` / `remove_filter()` is complex (at this time) (see [\#46635](https://core.trac.wordpress.org/ticket/46635 "Improve identifying of non–trivial callbacks in hooks") for a proposal to address this).

### Regular Expressions

Perl compatible regular expressions ([PCRE](https://www.php.net/pcre), `preg_` functions) should be used in preference to their POSIX counterparts. Never use the `/e` switch, use `preg_replace_callback` instead.

It’s most convenient to use single-quoted strings for regular expressions since, contrary to double-quoted strings, they have only two metasequences which need escaping: `\'` and `\\`.

### Don’t `extract()`

Per [\#22400](https://core.trac.wordpress.org/ticket/22400 "Remove all, or at least most, uses of extract() within WordPress"):

> `extract()` is a terrible function that makes code harder to debug and harder to understand. We should discourage it’s \[sic\] use and remove all of our uses of it.

Joseph Scott has [a good write-up of why it’s bad](https://blog.josephscott.org/2009/02/05/i-dont-like-phps-extract-function/).

### Shell commands

Use of the [backtick operator](https://www.php.net/manual/en/language.operators.execution.php) is not allowed.

Use of the backtick operator is identical to [`shell_exec()`](https://www.php.net/manual/en/function.shell-exec.php), and most hosts disable this function in the `php.ini` file for security reasons.

---

# Inline Documentation Standards <a name="coding-standards/inline-documentation-standards" />

Source: https://developer.wordpress.org/coding-standards/inline-documentation-standards/

Inline documentation provides a good resource for core developers in future development, and other developers when learning about WordPress. It also provides the information necessary to populate the [WordPress developer code reference](#reference).

> **I don’t need to document my code. I wrote all of it – know it like the back of my hand.**
> 
> “I would argue that, separately, documentation *is also* for you, the developer. I’ve found quite often that my inline documentation can be a very effective breadcrumb trail when establishing one’s own intent, particularly with regard to complex function arguments and usage. And it’s also helpful to return to a function two years later and find a paragraph in the inline documentation that describes, in meticulous fashion, something that I otherwise would have had to rediscover all over again.” *– Nacin*

## Language-specific Standards

- [PHP Documentation Standards](#coding-standards/inline-documentation-standards/php "PHP Documentation Standards")
- [JavaScript Documentation Standards](#coding-standards/inline-documentation-standards/javascript)

## Resources

- [Inline documentation](https://jjj.blog/2012/06/inline-documentation/) – why you should

---

# JavaScript Documentation Standards <a name="coding-standards/inline-documentation-standards/javascript" />

Source: https://developer.wordpress.org/coding-standards/inline-documentation-standards/javascript/

WordPress follows the [JSDoc 3 standard](http://jsdoc.app/) for inline JavaScript documentation.

## What Should Be Documented

JavaScript documentation in WordPress takes the form of either formatted blocks of documentation or inline comments.

The following is a list of what should be documented in WordPress JavaScript files:

- Functions and class methods
- Objects
- Closures
- Object properties
- Requires
- Events
- File headers

## Documenting Tips

### Language

Short descriptions should be clear, simple, and brief. Document “what” and “when” – “why” should rarely need to be included. The “why” can go in the long description if needed. For example:

Functions and closures are *third-person singular* elements, meaning *third-person singular verbs* should be used to describe what each does.

Need help remembering how to conjugate for third-person singular verbs? Imagine prefixing the function, hook, class, or method summary with “It”:

- *Good*: “(It) Does something.”
- *Bad:* “(It) Do something.”

**Functions**: What does the function do?

- *Good*: Handles a click on X element.
- *Bad*: Included for back-compat for X element.

**`@since`**: The recommended tool to use when searching for the version something was added to WordPress is [`svn blame`](https://make.wordpress.org/core/handbook/svn/code-history/#using-subversion-annotate).

If, after using these tools, the version number cannot be determined, use `@since Unknown`.

**Code Refactoring**: Do not refactor code in the file when changes to the documentation.

### Grammar

Descriptive elements should be written as complete sentences. The one exception to this standard is file header summaries, which are intended as file “titles” more than sentences.

The serial (Oxford) comma should be used when listing elements in summaries, descriptions, and parameter or return descriptions.

## Formatting Guidelines

The following guidelines should be followed to ensure that the content of the doc blocks can be parsed properly for inclusion in the code reference.

**Short descriptions**:

Short descriptions should be a single sentence and contain no markup of any kind. If the description refers to an HTML element or tag, then it should be written as “link tag”, not “&lt;a&gt;”. For example: “Fires when printing the link tag in the header”.

**Long descriptions**:

Markdown can be used, if needed, in a long description.

**`@param` and `@return` tags**:

No HTML or markdown is permitted in the descriptions for these tags. HTML elements and tags should be written as “audio element” or “link tag”.

### Line wrapping

DocBlock text should wrap to the next line after 80 characters of text. If the DocBlock itself is indented on the left 20 character positions, the wrap could occur at position 100, but should not extend beyond a total of 120 characters wide.

### Aligning comments

Related comments should be spaced so that they align to make them more easily readable.

For example:

```javascript
/**
 * @param {very_long_type} name           Description.
 * @param {type}           very_long_name Description.
 */

```

## Functions

Functions should be formatted as follows:

- **Summary**: A brief, one line explanation of the purpose of the function. Use a period at the end.
- **Description**: A supplement to the summary, providing a more detailed description. Use a period at the end.
- **`@deprecated x.x.x`**: Only use for deprecated functions, and provide the version the function was deprecated which should always be 3-digit (e.g. `@deprecated 3.6.0`), and the function to use instead.
- **`@since x.x.x`**: Should be 3-digit for initial introduction (e.g. `@since 3.6.0`). If significant changes are made, additional `@since` tags, versions, and descriptions should be added to serve as a changelog.
- **`@access`**: Only use for functions if private. If the function is private, it is intended for internal use only, and there will be no documentation for it in the code reference.
- **`@class`**: Use for class constructors.
- **`@augments`**: For class constructors, list direct parents.
- **`@mixes`**: List mixins that are mixed into the object.
- **`@alias`**: If this function is first assigned to a temporary variable this allows you to change the name it’s documented under.
- **`@memberof`**: Namespace that this function is contained within if JSDoc is unable to resolve this automatically.
- **`@static`**: For classes, used to mark that a function is a static method on the class constructor.
- **`@see`**: A function or class relied on.
- **`@link`**: URL that provides more information.
- **`@fires`**: Event fired by the function. Events tied to a specific class should list the class name.
- **`@listens`**: Events this function listens for. An event must be prefixed with the event namespace. Events tied to a specific class should list the class name.
- **`@global`**: Marks this function as a global function to be included in the global namespace.
- **`@param`**: Give a brief description of the variable; denote particulars (e.g. if the variable is optional, its default) with [JSDoc `@param` syntax](http://jsdoc.app/tags-param.html). Use a period at the end.
- **`@yield`**: For [generator functions](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/function*), a description of the values expected to be yielded from this function. As with other descriptions, include a period at the end.
- **`@return`**: Note the period after the description.

```javascript
/**
 * Summary. (use period)
 *
 * Description. (use period)
 *
 * @since      x.x.x
 * @deprecated x.x.x Use new_function_name() instead.
 * @access     private
 *
 * @class
 * @augments parent
 * @mixes    mixin
 *
 * @alias    realName
 * @memberof namespace
 *
 * @see  Function/class relied on
 * @link URL
 * @global
 *
 * @fires   eventName
 * @fires   className#eventName
 * @listens event:eventName
 * @listens className~event:eventName
 *
 * @param {type}   var           Description.
 * @param {type}   [var]         Description of optional variable.
 * @param {type}   [var=default] Description of optional variable with default variable.
 * @param {Object} objectVar     Description.
 * @param {type}   objectVar.key Description of a key in the objectVar parameter.
 *
 * @yield {type} Yielded value description.
 *
 * @return {type} Return value description.
 */

```

## Backbone classes

Backbone’s `extend` calls should be formatted as follows:

- **`@lends`** This tag will allow JSDoc to recognize the `extend` function from Backbone as a class definition. This should be placed right before the Object that contains the class definition.

Backbone’s `initialize` functions should be formatted as follows:

- **Summary**: A brief, one line explanation of the purpose of the function. Use a period at the end.
- **Description**: A supplement to the summary, providing a more detailed description. Use a period at the end.
- **`@deprecated x.x.x`**: Only use for deprecated classes, and provide the version the class was deprecated which should always be 3-digit (e.g. `@deprecated 3.6.0`), and the class to use instead.
- **`@since x.x.x`**: Should be 3-digit for initial introduction (e.g. `@since 3.6.0`). If significant changes are made, additional `@since` tags, versions, and descriptions should be added to serve as a changelog.
- **`@constructs`**: Marks this function as the constructor of this class.
- **`@augments`**: List direct parents.
- **`@mixes`**: List mixins that are mixed into the class.
- **`@requires`**: Lists modules that this class requires. Multiple `@requires` tags can be used.
- **`@alias`**: If this class is first assigned to a temporary variable this allows you to change the name it’s documented under.
- **`@memberof`**: Namespace that this class is contained within if JSDoc is unable to resolve this automatically.
- **`@static`**: For classes, used to mark that a function is a static method on the class constructor.
- **`@see`**: A function or class relied on.
- **`@link`**: URL that provides more information.
- **`@fires`**: Event fired by the constructor. Should list the class name.
- **`@param`**: Document the arguments passed to the constructor even if not explicitly listed in `initialize`. Use a period at the end. 
    - Backbone Models are passed `attributes` and `options` parameters.
    - Backbone Views are passed an `options` parameter.

```javascript
Class = Parent.extend( /** @lends namespace.Class.prototype */{
    /**
     * Summary. (use period)
     *
     * Description. (use period)
     *
     * @since      x.x.x
     * @deprecated x.x.x Use new_function_name() instead.
     * @access     private
     *
     * @constructs namespace.Class
     * @augments   Parent
     * @mixes      mixin
     *
     * @alias    realName
     * @memberof namespace
     *
     * @see   Function/class relied on
     * @link  URL
     * @fires Class#eventName
     *
     * @param {Object} attributes     The model's attributes.
     * @param {type}   attributes.key One of the model's attributes.
     * @param {Object} [options]      The model's options.
     * @param {type}   options.key One of the model's options.
     */
    initialize: function() {
        //Do stuff.
    }
} );

```

If a Backbone class does not have an initialize function it should be documented by using `@inheritDoc` as follows:

```javascript
/**
 * Summary. (use period)
 *
 * Description. (use period)
 *
 * @since      x.x.x
 * @deprecated x.x.x Use new_function_name() instead.
 * @access     private
 *
 * @constructs namespace.Class
 * @memberOf   namespace
 * @augments   Parent
 * @mixes      mixin
 * @inheritDoc
 *
 * @alias    realName
 * @memberof namespace
 *
 * @see   Function/class relied on
 * @link  URL
 */
Class = Parent.extend( /** @lends namespace.Class.prototype */{
// Functions and properties.
} );

```

> Note: This currently doesn’t provide the expected functionality due to a bug with JSDoc’s inheritDoc tag. See [JSDocs3 issue 1012](https://github.com/jsdoc3/jsdoc/issues/1012).

## Local functions

At times functions will be assigned to a local variable before being assigned as a class member.  
Such functions should be marked as inner functions of the namespace that uses them using `~`.  
The functions should be formatted as follows:

```javascript
/**
 * Function description, you can use any JSDoc here as long as the function remains private.
 *
 * @alias namespace~doStuff
 */
var doStuff = function () {
// Do stuff.
};

Class = Parent.extend( /** @lends namespace.Class.prototype */{
    /**
     * Class description
     *
     * @constructs namespace.Class
     *
     * @borrows namespace~doStuff as prototype.doStuff
     */
    initialize: function() {
    //Do stuff.
    },

    /*
     * This function will automatically have it's documentation copied from above.
     * You should make a comment ( not a DocBlock using /**, instead use /* or // )
     * noting that you're describing this function using @borrows.
     */
    doStuff: doStuff,
} );

```

## Local ancestors

At times classes will have Ancestors that are only assigned to a local variable. Such classes should be assigned to the namespace their children are and be made inner classes using `~`.

## Class members

Class members should be formatted as follows:

- **Short description**: Use a period at the end.
- **`@since x.x.x`**: Should be 3-digit for initial introduction (e.g. `@since 3.6.0`). If significant changes are made, additional `@since` tags, versions, and descriptions should be added to serve as a changelog.
- **`@access`**: If the members is private, protected or public. Private members are intended for internal use only.
- **`@type`**: List the type of the class member.
- **`@property`** List all properties this object has in case it’s an Object. Use a period at the end.
- **`@member`**: Optionally use this to override JSDoc’s member detection in place of `@type` to force a class member.
- **`@memberof`**: Optionally use this to override what class this is a member of.

```javascript
/**
 * Short description. (use period)
 *
 * @since  x.x.x
 * @access (private, protected, or public)
 *
 * @type     {type}
 * @property {type} key Description.
 *
 * @member   {type} realName
 * @memberof className
 */

```

## Namespaces

Namespaces should be formatted as follows:

- **Short description**: Use a period at the end.
- **`@namespace`**: Marks this symbol as a namespace, optionally provide a name as an override.
- **`@since x.x.x`**: Should be 3-digit for initial introduction (e.g. `@since 3.6.0`). If significant changes are made, additional `@since` tags, versions, and descriptions should be added to serve as a changelog.
- **`@memberof`**: Namespace that this namespace is contained in.
- **`@property`**: Properties that this namespace exposes. Use a period at the end.

```javascript
/**
 * Short description. (use period)
 *
 * @namespace realName
 * @memberof  parentNamespace
 *
 * @since x.x.x
 *
 * @property {type} key Description.
 */

```

## Inline Comments

Inline comments inside methods and functions should be formatted as follows:

### Single line comments

```javascript
// Extract the array values.

```

### Multi-line comments

```javascript
/*
 * This is a comment that is long enough to warrant being stretched over
 * the span of multiple lines. You'll notice this follows basically
 * the same format as the JSDoc wrapping and comment block style.
 */

```

**Important note:** Multi-line comments must not begin with `/**` (double asterisk). Use `/*` (single asterisk) instead.

## File Headers

The JSDoc file header block is used to give an overview of what is contained in the file.

Whenever possible, all WordPress JavaScript files should contain a header block.

WordPress uses JSHint for general code quality testing. Any inline configuration options should be placed at the end of the header block.

```javascript
/**
 * Summary. (use period)
 *
 * Description. (use period)
 *
 * @link   URL
 * @file   This files defines the MyClass class.
 * @author AuthorName.
 * @since  x.x.x
 */

/** jshint {inline configuration here} */

```

## Supported JSDoc Tags

| Tag | Description |
|---|---|
| `@abstract` | This method can be implemented (or overridden) by the inheritor. |
| `@access` | Specify the access level of this member (private, public, or protected). |
| `@alias` | Treat a member as if it had a different name. |
| `@augments` | This class inherits from a parent class. |
| `@author` | Identify the author of an item. |
| `@borrows` | This object uses something from another object. |
| `@callback` | Document a callback function. |
| `@class` | This function is a class constructor. |
| `@classdesc` | Use the following text to describe the entire class. |
| `@constant` | Document an object as a constant. |
| `@constructs` | This function member will be the constructor for the previous class. |
| `@copyright` | Document some copyright information. |
| `@default` | Document the default value. |
| `@deprecated` | Document that this is no longer the preferred way. |
| `@description` | Describe a symbol. |
| `@enum` | Document a collection of related properties. |
| `@event` | Document an event. |
| `@example` | Provide an example of how to use a documented item. |
| `@exports` | Identify the member that is exported by a JavaScript module. |
| `@external` | Document an external class/namespace/module. |
| `@file` | Describe a file. |
| `@fires` | Describe the events this method may fire. |
| `@function` | Describe a function or method. |
| `@global` | Document a global object. |
| `@ignore` | \[todo\] Remove this from the final output. |
| `@inner` | Document an inner object. |
| `@instance` | Document an instance member. |
| `@kind` | What kind of symbol is this? |
| `@lends` | Document properties on an object literal as if they belonged to a symbol with a given name. |
| `@license` | \[todo\] Document the software license that applies to this code. |
| `@link` | Inline tag – create a link. |
| `@member` | Document a member. |
| `@memberof` | This symbol belongs to a parent symbol. |
| `@mixes` | This object mixes in all the members from another object. |
| `@mixin` | Document a mixin object. |
| `@module` | Document a JavaScript module. |
| `@name` | Document the name of an object. |
| `@namespace` | Document a namespace object. |
| `@param` | Document the parameter to a function. |
| `@private` | This symbol is meant to be private. |
| `@property` | Document a property of an object. |
| `@protected` | This member is meant to be protected. |
| `@public` | This symbol is meant to be public. |
| `@readonly` | This symbol is meant to be read-only. |
| `@requires` | This file requires a JavaScript module. |
| `@return` | Document the return value of a function. |
| `@see` | Refer to some other documentation for more information. |
| `@since` | Documents the version at which the function was added, or when significant changes are made. |
| `@static` | Document a static member. |
| `@this` | What does the ‘this’ keyword refer to here? |
| `@throws` | Describe what errors could be thrown. |
| `@todo` | Document tasks to be completed. |
| `@tutorial` | Insert a link to an included tutorial file. |
| `@type` | Document the type of an object. |
| `@typedef` | Document a custom type. |
| `@variation` | Distinguish different objects with the same name. |
| `@version` | Documents the version number of an item. |
| `@yield` | Document the yielded values of a generator function. |

## Unsupported JSDoc Tags

| Tag | Why it’s not supported |
|---|---|
| `@summary` | Should not be used. See the example of how to separate a summary from the full description. |
| `@virtual` | An unsupported synonym. Use `@abstract` instead. |
| `@extends` | An unsupported synonym. Use `@augments` instead. |
| `@constructor` | An unsupported synonym. Use `@class` instead. |
| `@const` | An unsupported synonym. Use `@constant` instead. |
| `@defaultvalue` | An unsupported synonym. Use `@default` instead. |
| `@desc` | An unsupported synonym. Use `@description` instead. |
| `@host` | An unsupported synonym. Use `@external` instead. |
| `@fileoverview` | An unsupported synonym. Use `@file` instead. |
| `@overview` | An unsupported synonym. Use `@file` instead. |
| `@emits` | An unsupported synonym. Use `@fires` instead. |
| `@func` | An unsupported synonym. Use `@function` instead. |
| `@method` | An unsupported synonym. Use `@function` instead. |
| `@var` | An unsupported synonym. Use `@member` instead. |
| `@emits` | An unsupported synonym. Use `@fires` instead. |
| `@arg` | An unsupported synonym. Use `@param` instead. |
| `@argument` | An unsupported synonym. Use `@param` instead. |
| `@prop` | An unsupported synonym. Use `@property` instead. |
| `@returns` | An unsupported synonym. Use `@return` instead. |
| `@exception` | An unsupported synonym. Use `@throws` instead. |

---

# PHP Documentation Standards <a name="coding-standards/inline-documentation-standards/php" />

Source: https://developer.wordpress.org/coding-standards/inline-documentation-standards/php/

WordPress uses a customized documentation schema that draws inspiration from PHPDoc, an evolving standard for providing documentation to PHP code, which is maintained by [phpDocumentor](http://phpdoc.org/).

## What Should Be Documented

PHP documentation in WordPress mostly takes the form of either formatted blocks of documentation or inline comments. The following is a list of what should be documented in WordPress files: - Functions and class methods
- Classes
- Class members (including properties and constants)
- Requires and includes
- Hooks (actions and filters)
- Inline comments
- File headers
- Constants

### Documenting Tips

#### Language

Summaries should be clear, simple, and brief. Avoid describing “why” an element exists, rather, focus on documenting “what” and “when” it does something. A function, hook, class, or method is a *third-person singular* element, meaning that *third-person singular verbs* should be used to describe what each does. 

Need help remembering how to conjugate for third-person singular verbs? Imagine prefixing the function, hook, class, or method summary with “It”: - *Good*: “(It) Does something.”
- *Bad*: “(It) Do something.”

Summary examples: - **Functions**: *What* does the function do? 
    - Good: *Displays the last modified date for a post.*
    - Bad: *Display the date on which the post was last modified.*
- **Filters**: *What* is being filtered? 
    - Good: *Filters the post content.*
    - Bad: *Lets you edit the post content that is output in the post template.*
- **Actions:** *When* does an action fire? 
    - Good: \_Fires after most of core is loaded, and the user is authenticated.
    - Bad: \_Allows you to register custom post types, custom taxonomies, and other general housekeeping tasks after a lot of WordPress core has loaded.

#### Grammar

Descriptive elements should be written as complete sentences. The one exception to this standard is file header summaries, which are intended as file “titles” more than sentences. The serial (Oxford) comma should be used when listing elements in summaries, descriptions, and parameter or return descriptions. #### Miscellaneous

**`@since`**: The recommended tool to use when searching for the version something was added to WordPress is [`svn blame`](https://make.wordpress.org/core/handbook/svn/code-history/#using-subversion-annotate). An additional resource for older hooks is the [WordPress Hooks Database](http://adambrown.info/p/wp_hooks). If the version number cannot be determined after using these tools, use `@since Unknown`. Anything ported over from WPMU should use `@since MU (3.0.0)`. Existing `@since MU (3.0.0)` tags should not be changed. **Code Refactoring**: It is permissible to space out the specific action or filter lines being documented to meet the coding standards, but do not refactor other code in the file. ### Formatting Guidelines

WordPress’ inline documentation standards for PHP are specifically tailored for optimum output on the [official Code Reference](#reference). As such, following the standards in core and formatting as described below are *extremely* important to ensure expected output. 

#### General

DocBlocks should directly precede the hook, action, function, method, or class line. There should not be any opening/closing tags or other things between the DocBlock and the declarations to prevent the parser becoming confused. #### Summary

No HTML markup or Markdown of any kind should be used in the summary. If the text refers to an HTML element or tag, then it should be written as “image tag” or “img” element, not “`<img>`“. For example: - Good: *Fires when printing the link tag in the header.*
- Bad: *Fires when printing the `<link>` tag in the header.*

Inline PHPDoc tags may be used. #### Description

HTML markup should never be used outside of code examples, though Markdown can be used, as needed, in the description. 1. Lists: Use a hyphen (-) to create an unordered list, with a blank line before and after. ```php
     * Description which includes an unordered list:
     *
     * - This is item 1.
     * - This is item 2.
     * - This is item 3.
     *
     * The description continues on ...
    
    ```
    
    Use numbers to create an ordered list, with a blank line before and after. ```php
     * Description which includes an ordered list:
     *
     * 1. This is item 1.
     * 2. This is item 2.
     * 3. This is item 3.
     *
     * The description continues on ...
    
    ```
2. Code samples would be created by indenting every line of the code by 4 spaces, with a blank line before and after. Blank lines in code samples also need to be indented by four spaces. Note that examples added in this way will be output in `<pre>` tags and *not* syntax-highlighted. ```php
     * Description including a code sample:
     *
     *    $status = array(
     *        'draft'   => __( 'Draft' ),
     *        'pending' => __( 'Pending Review' ),
     *        'private' => __( 'Private' ),
     *        'publish' => __( 'Published' )
     *    );
     *
     * The description continues on ...
    
    ```
3. Links in the form of URLs, such as related Trac tickets or other documentation, should be added in the appropriate place in the DocBlock using the `@link` tag: ```php
     * Description text.
     *
     * @link https://core.trac.wordpress.org/ticket/20000
    
    ```

#### `@since` Section (Changelogs)

Every function, hook, class, and method should have a corresponding `@since` version associated with it (more on that below). No HTML should be used in the descriptions for `@since` tags, though limited Markdown can be used as necessary, such as for adding backticks around variables, arguments, or parameter names, e.g. `$variable`. Versions should be expressed in the 3-digit `x.x.x` style: ```php
 * @since 4.4.0

```

If significant changes have been made to a function, hook, class, or method, additional `@since` tags, versions, and descriptions should be added to provide a changelog for that function. “Significant changes” include but are not limited to: - Adding new arguments or parameters.
- Required arguments becoming optional.
- Changing default/expected behaviors.
- Functions or methods becoming wrappers for new APIs.
- Parameters which have been renamed (once PHP 8.0 support has been announced).

PHPDoc supports multiple `@since` versions in DocBlocks for this explicit reason. When adding changelog entries to the `@since` block, a version should be cited, and a description should be added in sentence case and form and end with a period: ```php
 * @since 3.0.0
 * @since 3.8.0 Added the `post__in` argument.
 * @since 4.1.0 The `$force` parameter is now optional.

```

#### Other Descriptions

`@param`, `@type`, `@return`: No HTML should be used in the descriptions for these tags, though limited Markdown can be used as necessary, such as for adding backticks around variables, e.g. `$variable`. - Inline `@see` tags can also be used to auto-link hooks in core: 
    - Hooks, e.g. `<a href="#referencehooks/save_post/">'save_post'</a>`
    - Dynamic hooks, e.g. `<a href="#referencehooks/old_status_to_new_status/">'$old_status_to_$new_status'</a>` (Note that any extra curly braces have been removed inside the quotes)
- Default or available values should use single quotes, e.g. ‘draft’. Translatable strings should be identified as such in the description.
- HTML elements and tags should be written as “audio element” or “link tag”.

#### Line wrapping

DocBlock text should wrap to the next line after 80 characters of text. If the DocBlock itself is indented on the left 20 character positions, the wrap could occur at position 100, but should not extend beyond a total of 120 characters wide. ## DocBlock Formatting

The examples provided in each section below show the expected DocBlock content and tags, as well as the exact formatting. Use spaces inside the DocBlock, not tabs, and ensure that items in each tag group are aligned according to the examples. ### 1. Functions &amp; Class Methods

Functions and class methods should be formatted as follows: - **Summary**: A brief, one sentence explanation of the purpose of the function spanning a maximum of two lines. Use a period at the end.
- **Description**: A supplement to the summary, providing a more detailed description. Use a period at the end of sentences.
- **`@ignore`**: Used when an element is meant only for internal use and should be skipped from parsing.
- **`@since x.x.x`**: Should always be 3-digit (e.g. `@since 3.9.0`). Exception is `@since MU (3.0.0)`.
- **`@access`**: Only used for core-only functions or classes implementing “private” core APIs. If the element is private it will be output with a message stating its intention for internal use.
- **`@see`**: Reference to a function, method, or class that is heavily-relied on within. See the note above about inline `@see` tags for expected formatting.
- **`@link`**: URL that provides more information. This should never be used to reference another function, hook, class, or method, see `@see`.
- **`@global`**: List PHP globals that are used within the function or method, with an optional description of the global. If multiple globals are listed, they should be aligned by type, variable, and description, with each other as a group.
- **`@param`**: Note if the parameter is *Optional* before the description, and include a period at the end. The description should mention accepted values as well as the default. For example: *Optional. This value does something. Accepts ‘post’, ‘term’, or empty. Default empty.*
- **`@return`**: Should contain all possible return types and a description for each. Use a period at the end. Note: `@return void` should not be used outside the default bundled themes and the PHP compatibility shims included in WordPress Core.

```php
/**
 * Summary.
 *
 * Description.
 *
 * @since x.x.x
 *
 * @see Function/method/class relied on
 * @link URL
 * @global type $varname Description.
 * @global type $varname Description.
 *
 * @param type $var Description.
 * @param type $var Optional. Description. Default.
 * @return type Description.
 */

```

#### 1.1 Parameters That Are Arrays

Parameters that are an array of arguments should be documented in the “originating” function only, and cross-referenced via an `@see` tag in corresponding DocBlocks. Array values should be documented using WordPress’ flavor of hash notation style similar to how [Hooks](#coding-standards/inline-documentation-standards/php) can be documented, each array value beginning with the `@type` tag, and taking the form of: ```php
*     @type type $key Description. Default 'value'. Accepts 'value', 'value'.
*                     (aligned with Description, if wraps to a new line)

```

An example of an “originating” function and re-use of an argument array is [`wp_remote_request|post|get|head()`](https://core.trac.wordpress.org/browser/tags/6.0/src/wp-includes/http.php/#L114). ```php
/**
 * Summary.
 *
 * Description.
 *
 * @since x.x.x
 *
 * @param type  $var Description.
 * @param array $args {
 *     Optional. An array of arguments.
 *
 *     @type type $key Description. Default 'value'. Accepts 'value', 'value'.
 *                     (aligned with Description, if wraps to a new line)
 *     @type type $key Description.
 * }
 * @param type  $var Description.
 * @return type Description.
 */

```

In most cases, there is no need to mark individual arguments in a hash notation as *optional*, as the entire array is usually optional. Specifying “Optional.” in the hash notation description should suffice. In the case where the array is NOT optional, individual key/value pairs may be optional and should be marked as such as necessary. #### 1.2 Deprecated Functions

If the function is deprecated and should not be used any longer, the `@deprecated` tag, along with the version and description of what to use instead, should be added. Note the additional use of an `@see` tag – the Code Reference uses this information to attempt to link to the replacement function. ```php
/**
 * Summary.
 *
 * Description.
 *
 * @since x.x.x
 * @deprecated x.x.x Use new_function_name()
 * @see new_function_name()
 *
 * @param type $var Optional. Description.
 * @param type $var Description.
 * @return type Description.
 */

```

### 2. Classes

Class DocBlocks should be formatted as follows: - **Summary**: A brief, one sentence explanation of the **purpose** of the class spanning a maximum of two lines. Use a period at the end.
- **Description**: A supplement to the summary, providing a more detailed description. Use a period at the end.
- **`@since x.x.x`**: Should always be 3-digit (e.g. `@since 3.9.0`). Exception is `@since MU (3.0.0)`.

```php
/**
 * Summary.
 *
 * Description.
 *
 * @since x.x.x
 */

```

If documenting a sub-class, it’s also helpful to include an `@see` tag reference to the super class: ```php
/**
 * Summary.
 *
 * Description.
 *
 * @since x.x.x
 *
 * @see Super_Class
 */

```

#### 2.1 Class Members

##### 2.1.1 Properties

Class properties should be formatted as follows: - **Summary**: Use a period at the end.
- **`@since x.x.x`**: Should always be 3-digit (e.g. `@since 3.9.0`). Exception is `@since MU (3.0.0)`.
- **`@var`**: Formatted the same way as `@param`, though the description may be omitted.

```php
/**
 * Summary.
 *
 * @since x.x.x
 * @var type $var Description.
 */

```

##### 2.1.2 Constants

- **Summary**: Use a period at the end.
- **`@since x.x.x`**: Should always be 3-digit (e.g. `@since 3.9.0`). Exception is `@since MU (3.0.0)`.
- **`@var`**: Formatted the same way as `@param`, though the description may be omitted.

```php
/**
 * Summary.
 *
 * @since x.x.x
 * @var type $var Description.
 */
const NAME = value;

```

### 3. Requires and Includes

Files required or included should be documented with a summary description DocBlock. Optionally, this may apply to inline `get_template_part()` calls as needed for clarity. ```php
/**
 * Summary.
 */
require_once( ABSPATH . WPINC . '/filename.php' );

```

### 4. Hooks (Actions and Filters)

Both action and filter hooks should be documented on the line immediately preceding the call to `do_action()` or `do_action_ref_array()`, or `apply_filters()` or `apply_filters_ref_array()`, and formatted as follows: - **Summary**: A brief, one line explanation of the purpose of the hook. Use a period at the end.
- **Description**: A supplemental description to the summary, if warranted.
- **`@ignore`**: Used when a hook is meant only for internal use and should be skipped from parsing.
- **`@since x.x.x`**: Should always be 3-digit (e.g. `@since 3.9.0`). Exception is `@since MU (3.0.0)`.
- **`@param`**: If the parameter is an array of arguments, document each argument using a hash notation (described above in the *Parameters That Are Arrays* section), and include a period at the end of each line.

Note that `@return` is *not* used for hook documentation, because action hooks return nothing, and filter hooks always return their first parameter. ```php
/**
 * Summary.
 *
 * Description.
 *
 * @since x.x.x
 *
 * @param type  $var Description.
 * @param array $args {
 *     Short description about this hash.
 *
 *     @type type $var Description.
 *     @type type $var Description.
 * }
 * @param type  $var Description.
 */

```

If a hook is in the middle of a block of HTML or a long conditional, the DocBlock should be placed on the line immediately before the start of the HTML block or conditional, even if it means forcing line-breaks/PHP tags in a continuous line of HTML. Tools to use when searching for the version a hook was added are [`svn blame`](https://make.wordpress.org/core/handbook/svn/code-history/#using-subversion-annotate), or the [WordPress Hooks Database](http://adambrown.info/p/wp_hooks) for older hooks. If, after using these tools, the version number cannot be determined, use `@since Unknown`. #### 4.1 Duplicate Hooks

Occasionally, hooks will be used multiple times in the same or separate core files. In these cases, rather than list the entire DocBlock every time, only the first-added or most logically-placed version of an action or filter will be fully documented. Subsequent versions should have a single-line comment. For actions: ```php
/** This action is documented in path/to/filename.php */

```

For filters: ```php
/** This filter is documented in path/to/filename.php */

```

To determine which instance should be documented, search for multiples of the same hook tag, then use [`svn blame`](https://make.wordpress.org/core/handbook/svn/code-history/#using-subversion-annotate) to find the first use of the hook in terms of the earliest revision. If multiple instances of the hook were added in the same release, document the one most logically-placed as the “primary”. ### 5. Inline Comments

Inline comments inside methods and functions should be formatted as follows: #### 5.1 Single line comments

```php
// Allow plugins to filter an array.

```

#### 5.2 Multi-line comments

```php
/*
 * This is a comment that is long enough to warrant being stretched over
 * the span of multiple lines. You'll notice this follows basically
 * the same format as the PHPDoc wrapping and comment block style.
 */

```

**Important note**: Multi-line comments must not begin with `/**` (double asterisk) as the parser might mistake it for a DocBlock. Use `/*` (single asterisk) instead. ### 6. File Headers

The file header DocBlock is used to give an overview of what is contained in the file. Whenever possible, **all** WordPress files should contain a header DocBlock, regardless of the file’s contents – this includes files containing classes. ```php
/**
 * Summary (no period for file headers)
 *
 * Description. (use period)
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage Component
 * @since x.x.x (when the file was introduced)
 */

```

The *Summary* section is meant to serve as a succinct description of **what** specific purpose the file serves. Examples: - Good: *“Widgets API: [WP\_Widget](#referenceclasses/wp_widget/) class”*
- Bad: *“Core widgets class”*

The *Description* section can be used to better explain overview information for the file such as how the particular file fits into the overall makeup of an API or component. Examples: - Good: *“The Widgets API is comprised of the [WP\_Widget](#referenceclasses/wp_widget/) and [WP\_Widget\_Factory](#referenceclasses/wp_widget_factory/) classes in addition to a variety of top-level functionality that implements the Widgets and related sidebar APIs. WordPress registers a number of common widgets by default.”*

### 7. Constants

The constant DocBlock is used to give a description of the constant for better use and understanding. Constants should be formatted as follows: - **Summary**: Use a period at the end.
- **`@since x.x.x`**: Should always be 3-digit (e.g. `@since 3.9.0`). Exception is `@since MU (3.0.0)`.
- **`@var`**: Formatted the same way as `@param`. The description is optional.

```php
/**
 * Summary.
 *
 * @since x.x.x (if available)
 * @var type $var Description.
 */

```

## PHPDoc Tags

Common PHPDoc tags used in WordPress include `@since`, `@see`, `@global` `@param`, and `@return` (see table below for full list). For the most part, tags are used correctly, but not all the time. For instance, sometimes you’ll see an `@link` tag inline, linking to a separate function or method. “Linking” to known classes, methods, or functions is not necessary, as the Code Reference automatically links these elements. For “linking” hooks inline, the proper tag to use is `@see` – see the *Other Descriptions* section. | Tag | Usage | Description |
|---|---|---|
| **`@access`** | private | Only used in limited circumstances, like when visibility modifiers cannot be used in the code, and only when private, such as for core-only functions or core classes implementing “private” APIs. Used directly below the `@since` line in block. |
| **`@deprecated`** | version x.x.x Use *replacement function name* instead | What version of WordPress the function/method was deprecated. Use 3-digit version number. Should be accompanied by a matching `@see` tag. |
| **`@global`** | datatype $variable description | Document global(s) used in the function/method. For boolean and integer types, use `bool` and `int`, respectively. |
| **`@internal`** | information string | Typically used wrapped in `{}` for adding notes for internal use only. |
| **`@ignore`** | (standalone) | Used to skip parsing of the entire element. |
| **`@link`** | URL | Link to additional information for the function/method. For an external script/library, links to source. Not to be used for related functions/methods; use `@see` instead. |
| **`@method`** | returntype description | Shows a “magic” method found inside the class. |
| **`@package`** | packagename | Specifies package that all functions, includes, and defines in the file belong to. Found in DocBlock at top of the file. For core (and bundled themes), this is always **WordPress**. |
| **`@param`** | datatype $variable description | Function/method parameter of the format: parameter type, variable name, description, default behavior. For boolean and integer types, use `bool` and `int`, respectively. |
| **`@return`** | datatype description | Document the return value of functions or methods. `@return void` should not be used outside of the default bundled themes. For boolean and integer types, use `bool` and `int`, respectively. |
| **`@see`** | elementname | References another function/method/class the function/method relies on. Should only be used inline for “linking” hooks. |
| **`@since`** | version x.x.x | Documents release version function/method was added. Use 3-digit version number – this is to aid with version searches, and for use when comparing versions in code. Exception is `@since MU (3.0.0)`. |
| **`@static`** | (standalone) | Note: This tag has been used in the past, but should no longer be used. Just using the static keyword in your code is enough for phpDocumentor on PHP5+ to recognize static variables and methods, and PhpDocumentor will mark them as static. |
| **`@staticvar`** | datatype $variable description | Note: This tag has been used in the past, but should no longer be used. Document a static variable’s use in a function/method. For boolean and integer types, use `bool` and `int`, respectively. |
| **`@subpackage`** | subpackagename | For page-level DocBlock, specifies the Component that all functions and defines in file belong to. For class-level DocBlock, specifies the subpackage/component the class belongs to. |
| **`@todo`** | information string | Documents planned changes to an element that have not been implemented. |
| **`@type`** | datatype description for an argument array value | Used to denote argument array value types. See the **Hooks** or **Parameters That Are Arrays** sections for example syntax. |
| **`@uses`** | class::methodname() / class::$variablename / functionname() | Note: This tag has been used in the past, but should no longer be used. References a key function/method used. May include a short description. |
| **`@var`** | datatype description | Data type for a class variable and short description. Callbacks are marked callback. |

PHPDoc tags work with some text editors/IDEs to display more information about a piece of code. It is useful to developers using those editors to understand what the purpose is, and where they would use it in their code. PhpStorm and Netbeans already support PHPDoc. The following text editors/IDEs have extensions/bundles you can install that will help you auto-create DocBlocks: - Notepad++: [DocIt for Notepad++](http://sourceforge.net/projects/nppdocit/) (Windows)
- TextMate: [php.tmbundle](https://github.com/textmate/php.tmbundle) (Mac)
- SublimeText: [sublime packages](https://packagecontrol.io/search/phpdoc) (Windows, Mac, Linux)

Note: Even with help generating DocBlocks, most code editors don’t do a very thorough job – it’s likely you’ll need to manually fill in certain areas of any generated DocBlocks. 

### Deprecated Tags

> **Preface:** For the time being, and for the sake of consistency, WordPress Core will continue to use `@subpackage` tags – both when writing new DocBlocks, and editing old ones. Only when the new – external – PSR-5 recommendations are finalized, will across-the-board changes be considered, such as deprecating certain tags.

As proposed in the [new PSR-5](https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md) recommendations, the following PHPDoc tag should be deprecated: - `@subpackage` (in favor of a unified package tag: `@package Package\Subpackage`)
- `@static` (no longer needed)
- `@staticvar` (no longer needed)

### Other Tags

**`@package` Tag in Plugins and Themes (bundled themes excluded)**Third-party plugin and theme authors **must not** use `@package WordPress` in their plugins or themes. The `@package` name for plugins should be the plugin name; for themes, it should be the theme name, spaced with underscores: `Twenty_Fifteen`. **`@author` Tag**It is WordPress’ policy not to use the `@author` tag, except in the case of maintaining it in external libraries. We do not want to imply any sort of “ownership” over code that might discourage contribution. **`@copyright` and `@license` Tags**The `@copyright` and `@license` tags are used in external libraries and scripts, and should not be used in WordPress core files. - `@copyright` is used to specify external script copyrights.
- `@license` is used to specify external script licenses.

## Resources

- [Wikipedia on PHPDoc](http://en.wikipedia.org/wiki/PHPDoc)
- [PEAR Standards](http://pear.php.net/manual/en/standards.sample.php)
- [phpDocumentor](http://www.phpdoc.org/)
- [phpDocumentor Tutorial Tags](http://manual.phpdoc.org/HTMLSmartyConverter/HandS/phpDocumentor/tutorial_tags.pkg.html)
- [Draft PSR-5 recommendations](https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md)
- [Draft PSR-19 recommendations](https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc-tags.md)

---

# Changelog <a name="coding-standards/changelog" />

Source: https://developer.wordpress.org/coding-standards/changelog/

- 2020-09-25 Update code examples to use Markdown code fence notation instead of shortcodes.
- 2019-12-21 Update `javascript.md` from the [handbook page](https://make.wordpress.org/core/handbook/best-practices/coding-standards/javascript/).
- 2019-12-21 Update `accessibility.md` from the [handbook page](https://make.wordpress.org/core/handbook/best-practices/coding-standards/accessibility-coding-standards/).
- 2018-01-14 Initial import from https://make.wordpress.org/core/handbook/best-practices/

---

# Markdown Style Guide <a name="coding-standards/styleguide" />

Source: https://developer.wordpress.org/coding-standards/styleguide/

## Headings

```md
# Heading h1
## Heading h2
### Heading h3
#### Heading h4
##### Heading h5
###### Heading h6

```

Note: h1 – h4 items will be automatically added to the Table of Contents.

## Emphasis

### Italics

Wrap text with a single `_` for *Italic* text:

```md
This is _italic text_.

```

### Bold

Wrap text with double `**` for **Bold** text:

```md
This is **bold text**.

```

### Strikethrough

Wrap text with double `~~` for strikethrough text:

```md
This is ~~strikethrough~~ text.

```

## Links

Wrap the title in square brackets `[title]` immediately followed by the URL in `(https://example.com)`:

```md
[WordPress](https://wordpress.org/)

```

## Blockquotes

Use `>` for blockquotes, double `>>` to further indent:

```md
> Blockquote
>> Indented Blockquote

```

## Lists

### Unordered Lists

Use `-` for unordered lists, and intent two spaces for list subitems:

```md
- List
  - List
- List
- List

```

### Ordered Lists

Use numbered items followed by a `.:

```md
1. One
2. Two
3. Three

```

## Horizontal Rules

Use `---` for a horizontal rules:

```md
---

```

## Tables

```md
| A     | B     |
| ----- | ----- |
| Alpha | Bravo |

```

## Example Code

### Inline Code

Wrap inline code with single ``\``` backticks:

```md
```
This is `inline code` wrapped with backticks
```

```

When documenting an example, use the markdown ``\``` code block to demarcate the beginning and end of the code sample:

### Fenced Code Blocks

#### Javascript

```md
```javascript
var foo = function (bar) {
  return bar++;
};

console.log(foo(5));
```

```

#### JSON

```md
```json
{
  "firstName": "John",
  "lastName": "Smith",
  "address": {
    "streetAddress": "21 2nd Street",
    "city": "New York",
    "state": "NY",
    "postalCode": "10021-3100"
  },
  "phoneNumbers": [
    {
      "type": "home",
      "number": "212 555-1234"
    },
    {
      "type": "office",
      "number": "646 555-4567"
    }
  ],
  "children": [],
  "spouse": null
}
```

```

#### CSS

```md
```css
foo {
  padding: 5px;
  margin-right: 3px;
}

.bar {
  background-color: #f00;
}
```

```

#### SCSS

```md
```scss
foo {
  padding: 5px;
  margin-right: 3px;
}

.bar {
  background-color: #f00;
}
```

```

#### HTML

```md
```html
<span class="my-class">Example</span>
```

```

#### PHP

```md
```php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);
```

```

#### Markdown

```md
```md
This is _italic text_. This is **bold text**.
```

```