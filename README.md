<p align="center"><img src="https://res.cloudinary.com/auxe/image/upload/v1584899634/auxe/auxeBlack220x51_gqqucy.png" width="200"></p>

<p align="center">Laravel 7 base template with material admin dashboard</p>

## Changes that were made to the orignal package

1. In the file `config/app.php` `'asset_url' => env('ASSET_URL', 'assets')`
2. In the file `webpack.mix.js` ```
mix.scripts([  
    'node_modules/jquery/dist/jquery.js',  
    'node_modules/popper.js/dist/umd/popper.js',  
    'node_modules/bootstrap/dist/js/bootstrap.js',  
    'resources/js/app.js'  
], 'public/assets/js/app.js').version();  
```
3. In the file `webpack.mix.js` `mix.sass('resources/sass/app.scss', 'public/assets/css')`
4. In the file `webpack.mix.js` `mix.browserSync({ proxy: 'l7.test', open: false})`
5. Added Fontawesome (v5) with `npm install --save @fortawesome/fontawesome-free`
6. Added Google Icons (cdn) with `<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">`