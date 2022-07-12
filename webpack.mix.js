const mix = require('laravel-mix');
require('laravel-mix-alias');
//const MixGlob = require('laravel-mix-glob');

//const mixGlob = new MixGlob({mix});
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


   mix.webpackConfig({
      output: {
        filename: '[name].js',
      },

      optimization: {
        splitChunks: {
          cacheGroups: {
            commons: {
              test: /[\\/]node_modules[\\/]/,
              name: 'vendor',
              chunks: 'all',
              minSize: 0
            }
          }
        }
      },
      module: {
        rules: [
          {
            test: /\.scss/,
            loader: 'import-glob-loader'
          },
          {
            test: /^(?!.*\.{test,min}\.js$).*\.js$/,
            exclude: /(node_modules)/,
            use: {
              loader: 'babel-loader',
              options: {
                presets: ['@babel/preset-env']
              }
            }
          },

        ]
      },


      });

      mix.options({
        processCssUrls: false
      }).sass(
      'resources/sass/main.scss',
      'public/css/main.css'
      );

      mix.alias({
        'Components': '/resources/views/scripts/components',
        'Pages': '/resources/views/scripts/pages',
        'Utils': '/resources/views/scripts/utils',
        'Modules': '/resources/views/modules'

     });



      mix.js(
         'resources/views/scripts/app.js',
         'public/js/app.js'
         ).sourceMaps().version();
