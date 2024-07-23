<div class="mt-4">
    <h2>Add Links</h2>
    <form class="mt-2" action="results.php" id="form">

        <div class="mb-3">
            <label for="originalText" class="form-label">Enter the original text</label>
            <textarea name="originalText" id="originalText" class="form-control text-box" required rows="20"></textarea>
            <div id="textHelp" class="form-text" aria-label="Help text for the original text entry.">Enter the text whose words you want to replace.</div>
        </div>

        <div class="form-rows" id="formRows">
            <h3 class="h3">Enter Anchor text and links</h3>
            <div class="row mb-3">
                <div class="col">
                    <label for="keywords" class="form-label">Enter the keyword(anchor text)</label>
                    <input type="text" class="form-control" name="keywords[]" id="linkText" required>
                </div>
                <div class=" col">
                    <label for="links" class="form-label">Enter the link to add(anchor url)</label>
                    <input type="url" class="form-control" name="links[]" id="linkAnchor" required>
                </div>
            </div>
        </div>

        <button class="btn btn-secondary mb-3" id="addRows" type="button">
            Add row
        </button>

        <div class="form-buttons">
            <button class="btn btn-primary" type="submit">
                Replace keywords with links
            </button>
            <button class="btn btn-danger" type="reset" onclick="resetSessionStorage()">
                Start afresh
            </button>
        </div>
    </form>
</div>