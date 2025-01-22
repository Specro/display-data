<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Display</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <label for="file-input">File input</label>
            <input type="file" id="file-input" name="file" accept="<?= $allowed_file_types; ?>" />
            <button type="submit">Submit</button>
        </form>
        <?php if ($errors): ?>
            <div>
            <?php foreach ($errors as $error): ?>
                <p><?= $error; ?></p>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($users)): ?>
        <table>
            <tr></tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->getFirstName(); ?></td>
                    <td><?= $user->getAge(); ?></td>
                    <td><?= $user->getGender(); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </body>
</html>