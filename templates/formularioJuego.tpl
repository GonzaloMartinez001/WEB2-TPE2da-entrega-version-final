
    {include file="header.tpl" titulo="Home - Personas"}
    <div class="row col-12 d-flex justify-content-center">
    <div class="col-12">
        <h1 class="text-center m-4">Agregar Juego</h1>
    </div>
    <form action="agregarJuego" method="POST" class="form-group " enctype="multipart/form-data">
        <div class="col-12 mb-3">
            <input type="text" name="gameName" placeholder="Game Name" required>
            <input type="text" name="genre" placeholder="Genre" required>
            <input type="text" name="year" placeholder="Year" required>
            <input type="text" name="score" placeholder="Score" required>
        </div>
        <span>Companys:</span><select name="company" class="custom-select mb-3">
            {foreach $company as $compa}
                <option value="{$compa->company_ID}">{$compa->company_name}</option>
            {/foreach}
        </select>
        <input class="text-center m-4" type="submit" value="Agregar">
    </form>
</div>
    <div class="col-12">
        <h1 class="text-center m-4">Agregar Compania</h1>
    </div>
    <form action="agregarCompania" method="POST" class="form-group " enctype="multipart/form-data">
        <div class="col-12 mb-3">
            <input type="text" name="companyName" placeholder="Company Name" required>
        </div>
        <input class="text-center m-4" type="submit" value="Add">
    </form>
    {include file="footer2.tpl"}