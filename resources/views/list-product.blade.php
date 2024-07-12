<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Danh sach san pham</title>
    </head>
    <body>
        <h1> xin chao</h1>
        <table>
            <thead>
                <tr>
                    <th>id  </th>
                    <th>name </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listProducts  as $value):?>
                <tr>
                    <td><?= $value['id']?> </td>
                    <td><?= $value['name']?> </td>

                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </body>
    </html>
</div>
