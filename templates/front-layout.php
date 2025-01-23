<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Display</title>
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
        <main>
            <form method="post" enctype="multipart/form-data">
                <label for="file-input">File</label>
                <p class="explanation">Upload a user file to display it's data.</p>
                <input type="file" id="file-input" name="file" accept="<?= $allowed_file_types; ?>" />
                <button type="submit">Submit</button>
            </form>
            <?php if ($errors): ?>
                <div class="notification notification--error">
                <?php foreach ($errors as $error): ?>
                    <p><?= $error; ?></p>
                <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($users)): ?>
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user->getFirstName(); ?></td>
                            <td><?= $user->getAge(); ?></td>
                            <td><?= $user->getGender(); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php endif; ?>
        </main>
    </body>
</html>