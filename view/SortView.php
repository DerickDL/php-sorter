<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <title>String Sorter</title>
    </head>
    <body>

        <div class="container">
            <h1 class="text-center">String Sorter</h1>

            <div class="mb-3">
                <form method="post" action="?action=sort">
                    <div class="row mb-3">
                        <label class="form-label" for="inputString">Enter a string</label>
                        <input class="form-control" type="text" id="inputString" name="input_string" value="<?php echo htmlspecialchars($sInputString); ?>" required>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label" for="selectSort">Select Sort Strategy</label>
                        <select class="form-select" id="selectSort" name="sort_strategy" aria-label="Default select example">
                            <option value="bubble" <?php echo $sSortStrategy === 'bubble' ? 'selected' : ''; ?> >Bubble Sort</option>
                            <option value="merge" <?php echo $sSortStrategy === 'merge' ? 'selected' : ''; ?>>Merge Sort</option>
                            <option value="quick" <?php echo $sSortStrategy === 'quick' ? 'selected' : ''; ?>>Quick Sort</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Sort</button>
                    </div>
                </form>
            </div>
            

            <?php if ($sSortedString): ?>
                <div class="row text-center mt-5">
                    <span><strong>Sorted String:</strong></span>
                    <p><strong><?php echo htmlspecialchars($sSortedString); ?></strong></p>
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>
