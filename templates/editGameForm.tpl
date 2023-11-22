

{include file = "header.tpl" titulo = "Home - Personas"}
<div class="container">
    <h2 class="mt-4">Edit games</h2>
    <form action="editGame" method="POST"  enctype="multipart/form-data">
        <input type="hidden" name="game_ID" value="{$game_ID}">
        <div class="mb-3">
            <label for="gameName" class="form-label">Name of the game:</label>
            <input type="text" name="gameName" class="form-control" value=" ">
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre:</label>
            <input type="text" name="genre" class="form-control" value=" ">
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year:</label>
            <input type="text" name="year" class="form-control" value= " ">
        </div>

        <div class="mb-3">
            <label for="score" class="form-label">Puntuation:</label>
            <input type="text" name="score" class="form-control" value= " ">
        </div>



        <input type="submit" value="Save changes" class="btn btn-primary"></input>
    </form>
</div>

{include file = "footer2.tpl"}