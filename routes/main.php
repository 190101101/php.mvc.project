<?php 

use core\app;
// ([0-9a-zA-Z-_]+)
// ([0-9a-zA-Z-_]+)
// ([0-9a-zA-Z-_\?\=\&\+]+)
// ([0-9]+)

/*home*/
app::get('/', '/home/index', 'main');
app::get('/home/page/([0-9]+)', '/home/index', 'main');
app::get('/mode/([0-9]+)', '/home/mode/([0-9]+)', 'main');

/*error*/
app::get('/404', '/error/PageNotFound', 'main');
app::get('/error/type/([0-9a-zA-Z-_]+)', '/error/errorType/([0-9a-zA-Z-_]+)', 'main');


app::get('/dd', '/dd/dd', 'main');
