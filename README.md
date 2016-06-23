# peterbinks.net
Peter Binkowski's personal site.

#### Contents
- Takes Bower packages into account
- Lints and uglifies Javascript
- Compiles and autoprefixes SCSS
- Generates a custom Modernizr build with gulp-modernizr

## Installation
```bash
  # install npm and all modules.
  $ npm install

  # Build all assets, connect to a PHP server and start watching the files.
  $ gulp

  # Deploy all files in `public/` to a specified directory (probably SSH). Uses rsync.
  $ gulp deploy
```
