<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{BASE_URL}">
    <link rel="stylesheet" href="{BASE_URL}css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">


    <title>{$titulo}</title>
</head>
<body>
    <header>
        <navbar class="row border border-4 m-1 d-flex justify-content-center">
            <h1 class=""><span class="text-success">My</span> <span class="text-warning">Game</span> <span class="text-danger"> List</span>  </h1>
            {if !$props.islogged}
                <div class="h-100 mx-3"><a href="{BASE_URL|cat:login}"><button class="h-100">Log In</button></a></div>
            {else}
                <div class="h-100 mx-3"><a href="{BASE_URL|cat:logout}"><button class="h-100">Log Out</button></a></div>

            {/if}


        </navbar>
    </header>
