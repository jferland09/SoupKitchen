<?php
include_once 'Controllers/ProductController.php';
include_once 'Routes/Request.php';
include_once 'Routes/Router.php';
$router = new Router(new Request);


// $router->get('/', function() {
//   return <<<HTML
//   <h1>Hello world</h1>
//   <form action="SoupKitchen/account" method="post">
//     <input type="text" name="name" id="">
//     <button type="submit">Submit</button>
//   </form>
// HTML;
// });
$router->get('/', function() {
  require __DIR__ . '/Views/inventory.php';
  //return ProductController::read();
});

$router->get('/login', function() {
  require __DIR__ . '/Views/login.php';
});

$router->get('/inventory', function() {
  require __DIR__ . '/Views/inventory.php';
});

$router->get('/history', function() {
  require __DIR__ . '/Views/history.php';
});

$router->get('/products',function(){       
    return ProductController::read();
}); 
$router->get('/products/create',function(){       
    return ProductController::create();
}); 
$router->get('/products/edit',function(){        
    return ProductController::edit();
}); 
$router->get('/products/delete',function(){       
    return ProductController::destroy();
}); 

$router->post('/products/updateQty', function($request){  
  $data = json_encode($request->getBody());  
  return ProductController::updateQty($data);
 
 }); 
$router->post('/products/create', function($request) {
  // ProductController::test();
  // return json_encode($request->getBody());
  $data = json_encode($request->getBody());  
  return ProductController::updateQty($data);
});
