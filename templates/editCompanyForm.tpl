

{include file = "header.tpl" titulo = "Home - Personas"}
<div class="container">
    <h2 class="mt-4">Edit company</h2>
    <form action="editCompany" method="POST"  enctype="multipart/form-data">
        <input type="hidden" name="company_ID" value="{$company_ID}">
        <div class="mb-3">
            <label for="companyName" class="form-label">Name of the company:</label>
            <input type="text" name="companyName" class="form-control" value=" ">
        </div>
        <input type="submit" value="Save changes" class="btn btn-primary"></input>
    </form>
</div>

{include file = "footer2.tpl"}