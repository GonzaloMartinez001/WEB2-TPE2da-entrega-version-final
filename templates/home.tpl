
    {include file="header.tpl" titulo="Home - Personas"}
    <h1>Games List</h1>

    <div class="container table-responsive" >
        <table class = "table table-bordered bg-info">
            <thead>
                <th>Games</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Score</th>
                <th>Company</th>
            </thead>
            <tbody>
                {foreach $games as $game}
                        <tr>
                            <td> {$game->game_name} </td>
                            <td> {$game->genre} </td>
                            <td> {$game->year} </td>
                            <td> {$game->score} </td>
                            <td> {$game->company_name} </td>
                        </tr>
                {/foreach}
            </tbody>
        </table>


        <table class = "table table-bordered bg-info">
            <thead>
                <th>Company List</th>
            </thead>
            <tbody>
                {foreach $compa as $company}
                        <tr>
                            <td> {$company->company_name} </td>
                        </tr>
                {/foreach}
            </tbody>
        </table>
    </div>


    {include file="footer2.tpl"}
