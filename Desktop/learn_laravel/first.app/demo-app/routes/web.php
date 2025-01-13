<?php
use App\Http\Controllers\NewStudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\Calculater;
 use App\Http\Controllers\UserControllers;
 use App\Http\Controllers\NamedController;
 use App\Http\Controllers\PrefixController;
 use App\Http\Controllers\GroupingController;
 use App\Http\Controllers\StudentController;
 use App\Http\Controllers\DatabaseConnectivity;
 use App\Http\Controllers\ApiController;
 use App\Http\Controllers\RouteController;
 use App\Http\Controllers\HttpController;
 use App\Http\Controllers\SessionController;
 use App\Http\Controllers\FlashController;
 use App\Http\Controllers\UploadController;
 use App\Http\Controllers\Validiationflashmessage;
 use App\Http\Controllers\imageuploadControllerfromdatabase;
Route::get('/', function () {
    return view('welcome');
    
    // controller define by view get data from other files  
});
Route::get('/user', [UserController::class, 'getUser']);
Route::get('/set', [UserController::class, 'setuser']);
Route::get('/get/{name}', [UserController::class, 'getusers']);
Route::get('/insidefolder', [UserController::class, 'insidefolderfile']);

// Route start here calling for data
// Route::get('/demo', function () {
//     return view('demo');
// });
// Route::redirect('/demo', '/welcome');


Route::get("contact",function()
{
    return view("contact");
});

Route::get('/about/{anil}', function ($anil) { 
    return view('about', ['anil' => $anil]); // it is dynamic routing
});


// Route::get('/contact', function () {
//     return view('contact');
// });

       // short cut of routing ka define kerne ke 

               // Route::view('dem','demo');
              // this is short hand way to define the route 

   Route::view("/ser", "services"); // short method

// Route::get("/ser", function() { // long method
//     return view("services");
// });

Route::get('/get-contact', [ViewController::class, 'getcontact']);
Route::get('/log', [ViewController::class, 'userlogin']);
// controller ke about data pass karna 
Route::get('/nested/{name}', [ViewController::class, 'nestedfolder']);

 // view ke about datapass karna

   //  Route::get('/nested{name}',function($name)
  //  {
 //     return view('nested.nested',['user'=>$name]);
 //  });

//using this method we can pass the data

// Route::view('nested', 'nested.nested');  same ise
//  Route::get('/getfile',function()
//  {
//     return view('services');
//  });

   Route::get('calculater',function()
   {
    return view('get');
   });
   Route::redirect('/calculater', '/get-contact');
//   Route::view('get-data','get');
//   using getting data controller of file
//  Route::get('/calculater/{name}',[Calculater::class,'calculater']);
Route::view("get","services");
 
// how to aapply css 
 Route::view("style","style");


//   FORM AND INPUT FIELD


  Route::view("form","form-inputfield.form");
  Route::post('/submit', [UserControllers::class, 'adduser']);


  //URL GENERATION IN LARAVEL MAI 
  Route::view("home","url-generation.home");
  Route::view("about","url-generation.about");
  Route::view("services","url-generation.services");

    // <h1>{{URL::current()}}</h1> it gives as currnt url
    
    // <h2>{{URL::full()}}</h2> it also give same url

    // <h3>{{URL::previous()}}</h3> it gives previou url
   
    //NAMED ROUTE HOW TO CREATE
// Route::view("named-route/profile/user", "named-route.home")->name("hm");
// Route::view("named/{name}", "named-route.home")->name("hm");

// Define a controller route
 // IT IS NAMED ROUTE WITH ROUTE PASS THE ANY PARAMETERS
Route::get("route/{name}", [NamedController::class, "show"]); // created page by my self

 
//ROUTE GROUP PREFIX

//  Route::prefix("student")->group(function()
//  {
//   Route::view("home","route-group-with-pefix.home");
//   Route::get("show",[PrefixController::class,"show"]);
//   Route::get("add",[PrefixController::class,"add"]);
//  });


 //ROUTE GROUPING CONTROLLER
 Route::controller(StudentController::class)->group(function()
 {
    Route::get('show','show');
    Route::get('add','adds');
    Route::get('delete','delete');
    Route::get('pa/{names}',"about"); //PASS WITH PARAMETERS
 });

 //PASS PARAMETERS WITH CONTROLLER
//  Route::get('pa/{names}',[StudentController::class,"about"]);
  
    

//DATABASE CONNECTIVITY HOW TO DO Starting here howw to connect with database  
 Route::get("database",[DatabaseConnectivity::class,'usercontroller']); //DIRECT TABASE CONNECTION
 
// CONNETCTION WITH MODEL IN DATABASE SE 
Route::get('/get', [NewStudentController::class, 'student']);

//API HTTPS CLIENT HOW TO MAKE THE API IN LARAVEL MAI HOW TO IMPLEMENT IN LARAVEL MAI
 Route::get("api",[ApiController::class,"api"]);


 // website ka section add karna 
  Route::view("section","newstudent/new-student");

//ROUTE IN LARAVEL TO ACCESS ANY PAGE AND AND VIEW 
          //GET METHOD
//   Route::get("route",[RouteController::class,"get"]); //get method access data


 //post method access data
 
//   Route::post('/post', [RouteController::class, 'post']); //controller
// //PUT METHOD
//   Route::put('/put', [RouteController::class, 'put']); //put method ke liye
// //PATCH METHOD
//   Route::patch('/delete', [RouteController::class, 'delete']); 

//   goruping method route using prefix


// Define the routes correctly

Route::get("route",[RouteController::class,"get"]); // GET method to access data

// POST method for creating a resource
Route::post('/post', [RouteController::class, 'post']); 

// PUT method for updating a resource
Route::put('/put', [RouteController::class, 'put']); 

// PATCH method for partial update (renamed 'delete' to 'update')
Route::patch('/delete', [RouteController::class, 'delete']); 
// Route to match PUT method (updated route)

Route::match(['get', '/put'], '/match', [RouteController::class, 'group1']); 
Route::match(['PATCH', 'POST'], '/match', [RouteController::class, 'group2']); 


// HTTPS REQUEST FROM METHOD WHEN THE USER TRY TO ACCESS OUR DATA
   Route::view("https","https.http");
   Route::post("/login",[HttpController::class,"login"]);


   // SESSION IN LARAVEL STORE USER DATA IN A WEBSITE PE getting or setting the session

    Route::view("logins","session.login"); //LOGINS CODE OF HTML KA
    Route::view("profile","session.profile"); //VIEW ON PROFILE
    Route::post('/login', [SessionController::class, 'login']);//ROUTE PATH ON HTML CODE EXECUTE
    Route::get('/logout', [SessionController::class, 'logout']); //LOGOUT CODE

    //end session

    //Flash session temporery store data onl one time for example error message succee message
       Route::view("flash","flash.flash");
       Route::post('/loginflash', [FlashController::class, 'adduser']);//ROUTE PATH ON HTML CODE EXECUTE

       //uploade file and display how to do in laravel mai

       Route::view("upload","uploadimage.upload");
     Route::post("upload-file",[UploadController::class,"upload"]);
    
     //LOCALIZATION  IN LARAVEL MAI CHANGES THE LANGUAGE OTHER LANGUAGE  USE CAN LOOK WEBSTIE AT MULTIPLE LANGUAGE

       Route::view("local","localization");
       Route::view("localabout", "lang.en.localizationabout");


       // validation in jquery how to validiate of a form 

        // Route::veiw("validation","validation");
          
        Route::get("validation",function()
        {
          return view("jqueryvalidation.validation");
        });

        Route::post("validationflash",[Validiationflashmessage::class,"validaton"]);
    
        ///Upload and Display Images with Database 
      Route::view("uploadimage","uploadimagedatabase.upload"); //image form
      Route::post('imageupload', [imageuploadControllerfromdatabase::class, 'upload']); //form route on this path execute
      Route::get('list', [imageuploadControllerfromdatabase::class, 'list']);// fetch the images from the database show on screen
      


