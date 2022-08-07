<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="docs/assets/fontawesome/js/all.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="docs/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="docs/assets/plugins/prism/prism.css">
    <link rel="stylesheet" href="docs/assets/plugins/elegant_font/css/style.css">
    <link rel="stylesheet" href="docs/assets/plugins/simplelightbox/simple-lightbox.min.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="docs/assets/css/styles.css">

</head>

<body class="body-green">
<div class="page-wrapper">
    <!-- ******Header****** -->
    <header id="header" class="header">
        <div class="container">
            <div class="branding">
                <h1 class="logo">
                    <a href="index.html">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">Custom-</span><span class="text-bold">MVC</span>
                    </a>
                </h1>

            </div><!--//branding-->

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Quick Start</li>
            </ol>
        </div><!--//container-->
    </header><!--//header-->
    <div class="doc-wrapper">
        <div class="container">
            <div id="doc-header" class="doc-header text-center">
                <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Quick Start</h1>
            </div><!--//doc-header-->
            <div class="doc-body row">
                <div class="doc-content col-md-9 col-12 order-1">
                    <div class="content-inner">
                        <section id="download-section" class="doc-section">
                            <h2 class="section-title">Download</h2>
                            <div class="section-block">
                               <p>
                                   PrettyDocs is a free Bootstrap project documentation theme designed for developers & startups. It comes with 6 color schemes has many useful components. You can use the template as it is or integrate the front-end design with your own online documentation system. The source SCSS files are included so you can customise the design with ease.
                               </p>
                                <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/prettydocs-free-bootstrap-theme-for-developers-and-startups/" class="btn btn-green" target="_blank"><i class="fas fa-download"></i> Download PrettyDocs</a>
                            </div>
                            <div class="section-block">
                                <p>
                                    This is a custom MVC pattern which is written by me from scratch, using composer.
                                    It is my first php oop project and of course it isn't bugless.
                                    It is not recommended, to use on production, because it isn't fully tested.
                                    <br>
                                    If you fix any bug please contact me via email <a href="mailto:vovakeinashvili@gmail.com">vovakeinashvili@gmail.com</a> and I will include a fix!
                                    <br>
                                    You can also download mini web crud app based on my own mvc pattern. It will give you more idea about the project. <a href="https://github.com/Keinashvili/Custom-MVC-Crud-operation">Repo of the project.</a>
                                    <br>
                                </p>
                                <b>Repo of the pattern:</b>
                                <br>
                                <a href="https://github.com/Keinashvili/Custom-MVC" class="btn btn-green" target="_blank"><i class="fas fa-download"></i>GitHub Repository</a>
                            </div>
                        </section><!--//doc-section-->
                        <section id="installation-section" class="doc-section">
                            <h2 class="section-title">Installation</h2>
                            <div id="step1"  class="section-block">
                                <h3 class="block-title">Step One</h3>
                                <p>
                                    After you download you need to run composer install command
                                </p>
                                <div class="code-block">
                                    <p><code>composer install</code></p>
                                </div><!--//code-block-->
                            </div><!--//section-block-->
                            <div id="step2"  class="section-block">
                                <h3 class="block-title">Step Two</h3>
                                <p>
                                    You need to connect to your database.
                                </p>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <ul class="list">
                                            <li>Open config.php file.</li>
                                            <li>Modify database properties.</li>
                                        </ul>
                                    </div>
                                    <p>The config.php file automatically configures database properties and also uses PDO database connection.</p>
                                </div><!--//row-->
                            </div><!--//section-block-->
                            <div id="step3"  class="section-block">
                                <h3 class="block-title">Step Three</h3>
                                <p>
                                    After you connected to database MVC pattern is ready to be hosted locally.
                                    <br>
                                    <b>
                                        Server must be started from public directory.
                                    </b>
                                </p>
                                <div class="code-block">
                                    <p><code>cd public</code></p>
                                    <p><code>php -S localhost:8080</code></p>
                                    <b>Note:</b> <p> Instead of 8080 you can use any port you like.</p>
                                    <p>You can delete this documentation and it's files.</p>
                                </div><!--//code-block-->
                            </div><!--//section-block-->
                        </section><!--//doc-section-->

                        <section id="code-section" class="doc-section">
                            <h2 class="section-title">Usage</h2>
                            <div class="section-block">
                                <p>
                                    Using Custom-MVC is more likely laravel as I tried to make it as similar as possible. Some of the functions's syntax is pretty similar.
                                </p>
                                <p>
                                    Let's start with routing.
                                </p>
                            </div><!--//section-block-->
                            <div id="routes" class="section-block">
                                <div class="code-block">
                                    <h5>Routes can be defined in routes/web.php </h5>
                                    <pre><code class="language-php">&lt;?php 
use app\app\core\config\Route;

Route::get(&quot;/&quot;, function(){
        echo &quot;Hello World&quot;;
    });
                                        </code></pre>
                                </div><!--//code-block-->
                                <p>
                                    The route will echo out given string on / route.
                                </p>
                                <div class="code-block">
                                    <p>In routes it is even possible to pass data through path.</p>
                                    <pre><code class="language-php">&lt;?php
use app\app\core\config\Route;

Route::get(&quot;/{name}&quot;, function($name){
        echo &quot;Hello $name&quot;;
    });
                                        </code></pre>
                                </div><!--//code-block-->
                                <p>
                                    In that route it will echo out "Hello " and a name that you passed in the path.
                                    <br>
                                    This approach might be helpful when you need to path id from path to it's appropriate controller's method.
                                </p>
                                <div class="code-block">
                                    <p>
                                        With the help of a controller it is possible to make simple crud application.
                                        <br>
                                        <b>There are some examples of routes for crud web application</b>
                                    </p>
                                    <pre><code class="language-php">&lt;?php
use app\app\core\config\Route;
use app\app\Controllers\YourController;

Route::get(&quot;/&quot;, function(){
        ((new YourController))->index();
    });

Route::get(&quot;/create&quot;, function(){
        ((new YourController))->create();
    });

Route::post(&quot;/store&quot;, function(){
        ((new YourController))->store(new YourRequest);
    });

Route::get(&quot;/edit/{id}&quot;, function($id){
        ((new YourController))->edit($id);
    });

Route::post(&quot;/update/{$id}&quot;, function($id){
        ((new YourController))->update($id, (new YourRequest));
    });

Route::get(&quot;/show/{id}&quot;, function($id){
        ((new YourController))->show($id);
    });

Route::post(&quot;/destroy/{$id}&quot;, function($id){
        ((new YourController))->destroy($id);
    });
                                        </code></pre>
                                </div><!--//code-block-->
                            </div><!--//section-block-->
                            <div id="controllers" class="section-block">
                                <div class="code-block">
                                    <h5>Controllers can be added in app/Controllers </h5>
                                    <pre><code class="language-php">&lt;?php
namespace app\app\Controllers;

use app\app\core\Controller;

class YourController extends Controller
{
    public function YourMethod(){
        return parent::view(&quot;index.php&quot;);
    }
}
                                        </code></pre>
                                </div><!--//code-block-->
                                <p>
                                    The view function given in this method comes from parent. It renders templates which are stored to views directory.
                                    Methods and controllers can be named anything you want
                                </p>
                                <div class="code-block">
                                    <p>In controller it is possible to pass some data with view file.</p>
                                    <pre><code class="language-php">&lt;?php
namespace app\app\Controllers;

use app\app\core\Controller;

class YourController extends Controller
{
    public function YourMethod(){
        $var = &quot;Hello World&quot;
        return parent::view(&quot;index.php&quot;, compact(&quot;var&quot;));
    }
}
                                        </code></pre>
                                </div><!--//code-block-->
                                <p>
                                    In the related view file you can use this variable.
                                </p>
                                <div class="code-block">
                                    <pre><code class="language-php">&lt;?php
/**
 * @var $var
 */
echo $var

                                        </code></pre>
                                </div><!--//code-block-->
                                <p>
                                    The result will be Hello World
                                </p>
                                <div class="code-block">
                                    <p>
                                        Lets review a little case because a controller is missing a one important peace of validation.
                                        For example, you have some kind of products and have method which shows a product's details (lets call it show).
                                        Let's say the path is /product/5 and after some time that 5-th product doesn't exist, if you try to access
                                        that 5-th product and write the path manually the view file still be loaded.
                                    </p>
                                    <pre><code class="language-php">&lt;?php
namespace app\app\Controllers;

use app\app\core\Controller;

class YourController extends Controller
{
    public function show($id){
        $products = Product::findOrFail($id);
        if ($products['id'] != $id){
            $error = 'The URL'. $_SERVER['REQUEST_URI'];
            renderView(404,'/errors/_404_.php', compact('error'));
        } else {
            return parent::view(&quot;index.php&quot;, compact(&quot;$var&quot;));
        }
    }
}
                                        </code></pre>
                                </div><!--//code-block-->
                                <p>
                                    This function returns a view of an error with an error message and also sets server status from 200 to 404.
                                </p>
                            </div><!--//section-block-->
                            <div id="views" class="section-block">
                                <div class="code-block">
                                    <h5>Views can be added in views directory </h5>
                                    <br>
                                    <b>Note: </b><p>The extension of file should be .php</p>
                                </div><!--//code-block-->
                                <p>
                                   View files are being rendered through controllers with view function.
                                </p>
                                <div class="code-block">
                                    <p>
                                        For linking assets the path should look like given below
                                        and assets files must be in public directory as website
                                        is being hosted from that directory. To say shortly public
                                        is root directory.
                                        <br>
                                    </p>
                                        <pre><code class="language-markup">&lt;!DOCTYPE html&gt;
&lt;html lang="en">
&lt;head>
    &lt;meta charset="UTF-8">
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge">
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
    &lt;title>Document&lt;/title>
    &lt;link rel="stylesheet" href="your.css">
&lt;/head>
&lt;body>
    &lt;h1>Hello World!&lt;/
&lt;script src='your.js'>&lt;/script>
&lt;/body>
<&lt;html></code></pre>
                                </div><!--//code-block-->
                            </div><!--//section-block-->
                            <div id="models" class="section-block">
                                <div class="code-block">
                                    <h5>Models can be added in models directory.</h5>
                                    <pre><code class="language-php">&lt;?php
namespace app\models;

use app\app\core\Model;

class TableName extends Model
{
    protected $table = 'tablenames';
}
                                        </code></pre>
                                </div><!--//code-block-->
                                <p>
                                    Custom model name should be the name of table.
                                    It must include one protected variable $table which should
                                    be equal to table name.
                                </p>
                                <div class="code-block">
                                    <p>In core Model class there are methods which can be called statically.</p>
                                    <pre><code class="language-php">&lt;?php
namespace app\app\Controllers;

use app\app\core\Controller;
use app\models\YourModel;

class YourController extends Controller
{
    public function YourMethod(){
        $vars = YourModel::all();
        return parent::view(&quot;index.php&quot;, compact(&quot;vars&quot;));
    }
}
                                        </code></pre>
                                </div><!--//code-block-->
                                <p>
                                    all() method simply returns everything from the database,
                                    it can simply be used in view file like this way.
                                </p>
                                <div class="code-block">
                                    <pre><code class="language-php">&lt;?php
// This is declaring a variable which comes from the controller
// it isn't really necessary but it is good to use because
// you will avoid some errors.
/**
 * @var $vars
 */

foreach ($vars as $var){
    echo $var->name;
}

                                        </code></pre>
                                </div><!--//code-block-->
                                <p>
                                   In that case name will be a column of a table.
                                </p>
                                <div class="code-block">
                                    <p>
                                        Similar to all() method is findOrFail(), for that function you will need to pass an id
                                        because it returns only one record.
                                    </p>
                                    <pre><code class="language-php">&lt;?php

class YourController extends Controller
{
    public function YourMethod($id){
        $vars = YourModel::findOrFail($id);
        return parent::view(&quot;index.php&quot;, compact(&quot;vars&quot;));
    }
}
                                        </code></pre>
                                </div><!--//code-block-->
                                <p>
                                    The method can be used in view file like this way.
                                </p>
                                <pre><code class="language-php">&lt;?php
// This is declaring a variable which comes from the controller
// it isn't really necessary but it is good to use because
// you will avoid some errors.
/**
 * @var $vars
 */

echo $var['name'];

                                        </code></pre>
                                <p>Create method adds records to the database using custom requests  are used for validation
                                    and updating/inserting data to the database you can explore about custom request
                                    by clicking <a class="scrollto" href="#requests">Link</a>
                                </p>
                                <div class="code-block">
                                    <pre><code class="language-php">&lt;?php
namespace app\app\Controllers;

use app\app\core\Controller;
use app\models\YourModel;
use app\requests\YourRequest;

class YourController extends Controller
{
    public function YourMethod(YourRequest $request){
        $request->validateData();
        YourModel::create([
            'first_column' => $request->first_value,
            'second_column' => $request->second_value,
            'third_column' => $request->third_value,
        ]);

        header('Location: /');
    }
}
                                        </code></pre>

                                <p>Update method updates database records using id and custom requests which are used for validation
                                    and updating/inserting data to the database you can explore about custom request
                                    by clicking <a class="scrollto" href="#requests">Link</a>
                                </p>
                                <div class="code-block">
                                    <pre><code class="language-php">&lt;?php
namespace app\app\Controllers;

use app\app\core\Controller;
use app\models\YourModel;
use app\requests\YourRequest;

class YourController extends Controller
{
    public function YourMethod($id, YourRequest $request){
        $request->validateData();
        YourModel::update($id, [
            'first_column' => $request->first_value,
            'second_column' => $request->second_value,
            'third_column' => $request->third_value,
        ]);

        header('Location: /');
    }
}
                                        </code></pre>

                                <p>Delete method deletes database records using just id.</p>
                                <div class="code-block">
                                    <pre><code class="language-php">&lt;?php
namespace app\app\Controllers;

use app\app\core\Controller;
use app\models\YourModel;
use app\requests\YourRequest;

class YourController extends Controller
{
    public function YourMethod($id){
        YourModel::delete($id);
        header('Location: /');
    }
}
                                        </code></pre>
                                </div><!--//code-block-->
                            </div><!--//section-block-->
                            <div id="requests" class="section-block">
                            <div class="code-block">
                                <h5>Custom request can be defined in requests directory.</h5>
                                <pre><code class="language-php">&lt;?php
namespace app\requests;

use app\app\core\Request;

class YourRequest extends Request
{
    public function rules(): array
    {
        return [
            'first_column'  => 'required',
            'second_column'  => 'required',
            'third_column'  => 'required',
        ];
    }
}
                                        </code></pre>
                                <p>
                                    Custom requests are mainly used for validation,
                                    it checks input field if it is empty, if so the error
                                    message is being put into session key and gets cleared after entering
                                    valid value or refreshing a page.
                                </p>
                            </div><!--//code-block-->
                                <div class="code-block">
                                    <p>To display error messages I have implemented a function error.</p>
                                    <pre><code class="language-php">&lt;!DOCTYPE html&gt;
&lt;html lang="en">
&lt;head>
    &lt;meta charset="UTF-8">
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge">
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
    &lt;title>Document&lt;/title>
    &lt;link rel="stylesheet" href="your.css">
&lt;/head>
&lt;body>
    &lt;form action="/yourRoute" method="post">
        &lt;label for="name">Name&lt;/label>
        &lt;input type="text" name="name" id="name">
        &lt;p class="error">&lt;?php error('name'); ?>&lt;/p>
    &lt;/form>
&lt;script src='your.js'>&lt;/script>
&lt;/body>
&lt;html>
&lt;php session_destroy(); ?>
                                        </code></pre>
                                    <p>
                                        <b>Note:</b> <span class="language-php">session_destroy(); </span> must be used in the end of the view!
                                        It is used to refresh page after reloading it or resubmitting filled input fields.
                                        <br>
                                        <b>Note:</b> It only has required field. other validation will be added soon.
                                    </p>
                                </div><!--//code-block-->
                        </div><!--//section-block-->
                        </section><!--//doc-section-->
                    </div><!--//content-inner-->
                </div><!--//doc-content-->
                <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                    <div id="doc-nav" class="doc-nav">
                        <nav id="doc-menu" class="nav doc-menu flex-column sticky">
                            <li class="nav-item">
                                <a class="nav-link scrollto" href="#download-section">Download</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scrollto" href="#installation-section">Installation</a>
                            </li>
                            <nav class="nav doc-sub-menu nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link scrollto" href="#step1">Step One</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollto" href="#step2">Step Two</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollto" href="#step3">Step Three</a>
                                </li>
                            </nav><!--//nav-->
                            <li class="nav-item">
                                <a class="nav-link scrollto" href="#code-section">Usage</a>
                            </li>

                            <nav class="nav doc-sub-menu nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link scrollto" href="#routes">Routes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollto" href="#controllers">Controllers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollto" href="#views">Views</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollto" href="#models">Models</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollto" href="#requests">Requests</a>
                                </li>
                            </nav><!--//nav-->
                        </nav><!--//doc-menu-->
                    </div>
                </div><!--//doc-sidebar-->
            </div><!--//doc-body-->
        </div><!--//container-->
    </div><!--//doc-wrapper-->
</div><!--//page-wrapper-->

<footer id="footer" class="footer text-center">
    <div class="container">
        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <a href="https://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>

    </div><!--//container-->
</footer><!--//footer-->


<!-- Main Javascript -->
<script src="docs/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="docs/assets/plugins/prism/prism.js"></script>
<script src="docs/assets/plugins/stickyfill/dist/stickyfill.min.js"></script>
<script src="docs/assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
<script src="docs/assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
<script src="docs/assets/js/main.js"></script>

</body>
</html>
