1. Tutorial route 

$router->get('/foo', function () {
    return 'Hello, GET Method!';
});

$router->post('/bar', function () {
    return 'Hello, POST Method';
});

// method crud
$router->get('/get', function () {
    return 'GET';
});

$router->post('/post', function () {
    return 'POST';
});

$router->put('/put', function () {
    return 'PUT';
});

$router->patch('/patch', function () {
    return 'PATCH';
});

$router->delete('/delete', function () {
    return 'DELETE';
});

$router->options('/options', function () {
    return 'OPTIONS';
});

// user
$router->get('/user/{id}', function ($id) {
    return 'User id = ' . $id;
});

// optional parameter
$router->get('/post/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'Post ID = ' . $postId . ' Comment ID = ' . $commentId ;
});

$router->get('optional[/{param}]', function ($param = null) {
    return $param;
});

// redirect profile
$router->get('profile', function () {
    return redirect()->route('route.profile');
});

// route array alias
$router->get('profile/idstack', ['as' => 'route.profile', function() {
    return 'Route IDStack'; 
}]);

// route grouping
$router->group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace'], function () use ($router) {
    $router->get('home', function () {
        return 'Home Admin';
    });

    $router->get('profile', function () {
        return 'Profile Admin';
    });
});