
/*
 |--------------------------------------------------------------------------
 | Browser-sync config file
 |--------------------------------------------------------------------------
 |
 | For up-to-date information about the options:
 |   http://www.browsersync.io/docs/options/
 |
 | There are more options than you see here, these are just the ones that are
 | set internally. See the website for more info.
 |
 |
 */
module.exports = {
    //監視ファイルを指定する
    "files": [
        "resources/views/**/*.blade.php",
        "resources/js/components/*.vue",
        "public/**/*.*",
    ],
    "proxy": 'localhost:8000',
};