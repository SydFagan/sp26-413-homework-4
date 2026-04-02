# sp26-413-homework-4
## My Plugin 


## Plugins vs Theme Functions
Plugins are used for functionality that should persist regardless of the theme. If features like reading time or shortcodes were placed in functions.php, they would disappear if the theme changes. Plugins keep functionality separate and reusable across themes.

## Actions vs Filters
Actions allow you to add new functionality at specific points in WordPress (e.g., adding content to the footer). Filters allow you to modify existing data before it is displayed (e.g., modifying post content).

## Shortcodes
Shortcodes allow editors to insert dynamic content into posts using simple tags. In this plugin, I created a [breaking_news] shortcode that displays a styled alert box with customizable text.

## Real-World Reflection
The reading time helps readers quickly estimate how long an article will take. The shortcode allows editors to highlight important updates.
The footer message improves branding and engagement across the site.
