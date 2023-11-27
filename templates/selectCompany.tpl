{include file="header.tpl" titulo="Home - Personas"}

<h3>Select company</h3>
<form class="form-alta m-4" action='games-company' method="POST">
    <select class="form-select-m3" aria-label="Default select example" name="company_ID">
        {foreach from=$companies item=$company}
            <option value="{$company->company_ID}">{$company->company_name}</option>
        {/foreach}
    </select>
    <button type="submit" class="btn btn-primary">Get games</button>
</form>



{include file="footer2.tpl"}
