<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Zapros
{
public function something()
{

    return new Response('<head><script src="https://code.jquery.com/jquery-3.3.1.js"></script></head>
    <script type="text/javascript"  >
    $.postJSON = function(url, data, func)
{
    $.post(url, data, func, \'json\');
}
    function hello(){
        $.postJSON(\'http://projectpractice/Api/public/\',{ login: "user1", password: "2pm" }, function(data)
        {
  var items = [];
  $.each(data, function(key, val,json){
    items.push(\'<li id="\' + key + \'">\' + val.login + \'  \' + val.password + \'</li>\');
  });
 
  $(\'<ul/>\', {
    \'class\': \'my-new-list\',
    html: items.join(\'\')
  }).appendTo(\'body\');
})
 };
                    
</script>
<body onload = "hello()"></body>
    ');
}
}