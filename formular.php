
<div class="left">
    <form id="submit" method="POST" action="/insert.php">
        <div class="box">
            <label>Název článku:</label><input type="text" name="name" id="nazev" />
        </div>
        <div class="box">
            <label>Autor:</label><input type="text" name="autor" id="autor" />
        </div>
        <div class="box">
            <label>Obsah:</label><textarea name="text" id="obsah"></textarea>
        </div>
        <div class="box">
            <label>Kategorie:</label>
            
        <select name="kategorie" id="kategorie">
            <option value="1">Travel</option>
            <option value="2">Food</option>
            <option value="3">Animals</option>
        </select>

        </div>
        <button id="submit1" type="submit" class="btn-submit">Zveřejnit</button>
        <p id="result" class="result">Podařilo se ti úspěšně nahrát článek na stránku.</p>
    </form>
</div>  