<?php

function runLogin(){
    if(!empty($_POST)){
        if($_POST['button'] == 'sign in'){
            $_SESSION['signin'] = $_POST;
            $page='signin';
        } else {
            $_SESSION['login'] = $_POST;
            $page='login';
        };
    };

    $fileName = getFileName($page);
    include $fileName;

};

function run()
{
    $page = 'index';
    if (!empty($_GET['p'])) {
        $page = $_GET['p'];
    }
    $fileName = getFileName($page);
    // echo $fileName;

    if (!is_file($fileName)) {
        $fileName = getFileName('index');
        // echo $fileName;
    }
    
    include $fileName;
    // indexAction();
    // echo $fileName;
    $action = 'index';

    if (!empty($_GET['a'])) {
        $action = $_GET['a'];
    }

    $action .= 'Action';


    if (!function_exists($action)) {
        $action = 'indexAction';
    }
    return $action();
}

function getFileName($file)
{
    return dirname(__DIR__) . '/pages/' . $file . '.php';
    // return 'pages/' . $file . '.php';
}

function getLink() {
    static $link;
    if(empty($link)){
        $link = mysqli_connect('localhost', 'root', 'root','shop');
    }
    return $link;
}

function render($template, $params = [], $layout = 'main.php'){
    $content = renderTmpl($template, $params);
    $layout = 'layouts/' . $layout;
    return renderTmpl($layout, ['content' => $content]);
}


function renderTmpl($template, $params = []){
    ob_start();
    extract($params);
    include dirname(__DIR__) . '/views/' . $template;
    return ob_get_clean();
}