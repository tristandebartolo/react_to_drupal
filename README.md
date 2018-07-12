# React to drupal


## This module integrates a simple sentence in React to a block of drupal 8.
 
### Prerequisites

  - an instance of drupal
  - node.js
  - npm
  - yarn
  - webpack


## Before activating the module

Place the module in the custom folder of the modules.

Then, in the command line, place yourself in the module's react file and run a 
```batch
yarn
```
command to initiate the project and run a
```batch
webpack
```
 command to compile it.

```batch
C:\Users\mm\tdb\workspace\drupal-react\drupal\web\modules\custom\react_to_drupal\react  (react_to_drupal@1.0.0)
λ webpack
Hash: 8d25339266b0c154b1a3
Version: webpack 4.16.0
Time: 2711ms
Built at: 2018-07-12 09:33:32
        Asset     Size  Chunks             Chunk Names
app.bundle.js  107 KiB       0  [emitted]  main
 [8] ./node_modules/css-loader!./node_modules/sass-loader/lib/loader.js!./src/app.scss 188 bytes {0} [built]
 [9] ./src/app.scss 1.17 KiB {0} [built]
[19] ./src/app.js 2.32 KiB {0} [built]
    + 17 hidden modules
```

If the compilation succeeds, activate the module and place the block in a region.

[see in action](http://revuesdecode.com/revues/drupal-8/implementation-de-react-dans-un-custom-module-drupal-8-webpack "see in action react_to_drupal")
