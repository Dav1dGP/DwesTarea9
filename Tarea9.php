<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 9</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>JSONPlace Holder</h1>
            <?php
            //Se realiza la peticion a la api que nos devuelve el JSON con la información de los posts
            $resource_json = file_get_contents('https://jsonplaceholder.typicode.com/posts/1');
             // Se decodifica el fichero JSON y se convierte a objeto
            $resource = json_decode($resource_json);
            ?>

            <ul>
                <li><strong>ID:</strong> <?php echo $resource->id; ?></li>
                <li><strong>Title:</strong> <?php echo $resource->title; ?></li>
            </ul>


    </div>
</body>
</html>