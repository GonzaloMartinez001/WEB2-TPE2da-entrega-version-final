{include file="header.tpl" titulo="Home - Personas"}

<div class="container table-responsive">
    <table class = "table table-bordered bg-info">
        <thead>
        <th>Games</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Score</th>
        </thead>
        <tbody>
        {foreach $games as $game}
            <tr>
                <td> {$game->game_name} </td>
                <td> {$game->genre} </td>
                <td> {$game->year} </td>
                <td> {$game->score} </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>

{include file="footer2.tpl"}