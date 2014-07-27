# :star::star::star: Emoji Parser for SilverStripe :star::star::star:

Render Emojis in your template, so that `:smile:` becomes :smile:

# Usage

Copy or clone the module folder to your project folder (composer support may follow soon) and flush your cache with `?flush=1`.

In your templates you can parse now Emoji icons with:

```html
  <h1>$Title</h1>
  $Content.Parse(Emoji)
```

or of course in combination with other parsers:

```html
  <h1>$Title</h1>
  $Content.Parse(BBCodeParser).Parse(Emoji)
```

All rendered icon-image-tags contain the class `emoji` so that you can easily define a style, for instance:

```css
   img.emoji {
     height: 1em;
     margin: 0 1em 0 1em;
   }
```

# Optional configuration

You can optionally configure these values in your `config.yml`:

```yaml
  Emojis:
    basePath: pathToGraphics
    cssClass: classNameForCSS
```

# Original Project and License

The images are taken from [Emoji-Cheat-Sheet.com](https://github.com/arvida/emoji-cheat-sheet.com) and are under different [Licenses](https://github.com/arvida/emoji-cheat-sheet.com/blob/master/LICENSE).

This module is under **The MIT License (MIT)**.
