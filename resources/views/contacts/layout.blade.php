<html>
<head>
    <title>Contact Laravel 8 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <h1 class="d">Contact WebApp</h1>
<div class="container">
    @yield('content')
</div>
  
</body>
<style>
    body,
html {
    height: 100%;
    min-height: 100%;
    background-color:rgba(84, 120, 207, 0.85);
}
.d{
    text-align:center;
    font-weight:600;
    background-color:rgba(162, 139, 227, 0.7);
    box-shadow:1px 1px 20px rgba(0,0,0,0.5);
    margin:0;
    color:white;
}
.container{
    
    margin-left:8rem;
    margin-top:5rem;
    width:80%;
    padding:0;
}
.row{
    box-shadow:1px 4px 20px rgba(0,0,0,0.5);
    margin:0;!important
    padding:0;
    width:100%;
}
.col-md-9{
    width:100%;
}
.card{
    box-shadow:1px 4px 20px rgba(0,0,0,0.5);
}
</style>
</html>
