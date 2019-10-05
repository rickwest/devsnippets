# Hey 👋, welcome to Dev Snippets!

Dev Snippets is (or intends to be) a collection of useful code snippets for new developers.

Initially this started as a little personal project, just somewhere for me to save those little snippets of code, that I need every so often but that I can never remember.

Unfortunately, like most side projects, I've not really had time to get it going. However, with [Hacktoberfest](https://hacktoberfest.digitalocean.com/) looming, I thought why not resurrect it, opening it up for others to contribute to, helping people make their first open source contribution's, whilst building an awesome set of snippets for us all to use!

### Contributing

There are no hard and fast rules here, so please feel free to contribute by opening a pull request adding your snippet. This isn't a new idea so check out projects like [DevHints](https://devhints.io/) for inspiration.

...And if you're still not sure, or you need some help, just [open an issue](https://github.com/rickwest/devsnippets/issues/new) or drop me a message [@rick_west8](https://twitter.com/rick_west8) and I'll do my best to guide you through it!

- Fork it (https://github.com/yourname/yourproject/fork)
- Create your feature branch (git checkout -b feature/fooBar)
- Commit your changes (git commit -am 'Add some fooBar')
- Push to the branch (git push origin feature/fooBar)
- Create a new Pull Request

---

## Installation

Don't be intimidated, if you're just adding a simple snippet to a markdown file, you probably don't even need to get Dev Snippets up and running locally. You can just make your changes to the correct file and open a pull request.

However, if you want to make a large contribution or are confident enough to get stuck in, follow the instructions 👇 .

### System Requirements

Dev Snippets is built with [Jigsaw](https://jigsaw.tighten.co), so you need to have PHP 7 and Composer installed on your machine. You'll also need Node.js, NPM and Yarn installed in order to use Laravel Mix to compile the CSS and Javascript.

### Getting Started

1. Clone the repo

   ```bash
   git clone https://github.com/rickwest/devsnippets.git devsnippets
   ```

2. Install dependencies

   ```bash
    cd devsnippets
    composer install
    yarn install
   ```

Now that you have everything installed, you can serve the site using PHP `./vendor/bin/jigsaw serve` or alternatively, using Browsersync `yarn run watch`

Navigate to [http://localhost:3000/snippets/welcome/](http://localhost:3000/snippets/welcome/) and you should now see the website!

For more help [getting started](https://jigsaw.tighten.co/docs/installation/), be sure to check out the official documentation. It really is good!

---

### Adding a Snippet

Adding a snippet is simply a case of locating the correct markdown file and making the desired changes.

All snippets are located in the `source/snippets/` directory.

If you are creating a new snippet page, the top of each snippet page contains a YAML header that specifies how it should be rendered. The `title` attribute is used to dynamically generate HTML `title` and OpenGraph tags for each page. The `extends` attribute defines which parent Blade layout this content file will render with (e.g. `_layouts.documentation` will render with `source/_layouts/documentation.blade.php`), and the `section` attribute defines the Blade "section" that expects this content to be placed into it.

```yaml
extends: _layouts.documentation
section: content
title: My Awesome Snippet
description: An interesting Dev Snippet and also my first Open Source contribution!

Your snippet content
```

You will also need to add your new page to the navigation array specified in `navigation.php` and don't forget to add your name to `CONTRIBUTORS.md`.

---

## Copyright and License

This project is licensed under the [MIT](https://choosealicense.com/licenses/mit/) License.
