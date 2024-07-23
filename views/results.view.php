<div class="my-4">
    <h2 class="mb-3 h3">Results</h2>
    <div class="row">
        <p>Here are the results.
        <div class="d-flex gap- flex-column">
            <div class="mb-4">
                <h3 class="mb-3 h5">The Raw HTML Content</h3>
                <p class="fs-6">
                    For editing and copying. Click the box to edit the raw HTML. Click the "Save" button to save your changes and the "copy" button to copy the final result.
                </p>
                <div class="flex flex-col">
                    <textarea contenteditable="true" id="htmlResults" class=" text-box border border-primary-subtle rounded border-2 p-4 mb-3" onchange="changed()">
                        <?= htmlspecialchars($model) ?>
                    </textarea>
                    <div class="flex" style="gap:8px;">
                        <a class="btn btn-secondary" type="button" onclick="changed()" href="#resultDiv">
                            See visual Results
                        </a>
                        <button class="btn btn-secondary" type="button">
                            Save Changes
                        </button>
                        <button class="btn btn-primary" onclick="copyRaw()">
                            Copy Raw HTML
                        </button>
                    </div>

                </div>

            </div>
            <div class="mb-4 hidden" id="resultDiv">
                <h3 class="mb-3 h5">Visual results</h3>
                <p class="fs-6">
                    For display only. You cannot edit the content below as it is only for display. Continue editing above and click the "save" button to see your changes here.
                <div class="text-box border border-primary-subtle rounded border-2 p-4 mb-3" id="resultDisplay">
                </div>
            </div>
        </div>
    </div>
</div>