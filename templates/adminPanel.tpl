
{include file = "header.tpl" titulo = "Home - Personas"}

<div class = "container">
    <h3 class = "text-center">Admin panel</h3>

    <a href="formulario" class="btn btn-primary py-2 px-4 rounded-lg text-white">Add</a>
    <span>Press here to add games or companies </span>

    <h1>Games List</h1>
    <div class="container table-responsive">
        <table class = "table table-bordered bg-info">
            <thead>
            <th>Games</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Score</th>
            <th>Company</th>
            <th></th>
            </thead>
            {foreach $games as $game}
                <tr>
                    <td> {$game->game_name} </td>
                    <td> {$game->genre} </td>
                    <td> {$game->year} </td>
                    <td> {$game->score} </td>
                    <td> {$game->company_name} </td>
                    <td> <a href="deleteGame/{$game->game_ID}" type="button" class='btn btn-danger ml-auto'>Delete</a> </td>
                    <td> <a href="showEditGame/{$game->game_ID}" type="button" class="btn btn-secondary">Edit</a> </td>
                </tr>
            {/foreach}
            <table class = "table table-bordered bg-info">
                <thead>
                <th>Company List</th>
                </thead>
                {foreach $compa as $company}
                    <tr>
                        <td> {$company->company_name} </td>
                        <td> <a href="deleteCompany/{$company->company_ID}" type="button" data-toggle="tooltip" data-placement="top" title="WARNING: If you delete the company, all the games will be deleted with them" class='btn btn-danger ml-auto'>Delete</a> </td>
                        <td> <a href="showEditCompany/{$company->company_ID}" type="button" class="btn btn-secondary">Edit</a> </td>
                    </tr>
                {/foreach}
            </table>
    </div>
</div>

{include file = "footer2.tpl"}