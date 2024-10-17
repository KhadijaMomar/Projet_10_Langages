<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/reset.css">
    <?php require_once 'Controller/baseController.php' ?>
</head>
<body>
    <main>
        <div class="table-primary" role="region" aria-labelledby="compilation">
            <table>
                <!--Caption c'est pour mettre le titre-->
                <caption>
                Classement des langages 2024
                   
                </caption>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Langage</th>
                        <th>Description</th>
                        <th>Utilisation_principale</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        
                        <?= 
                            "<td>".htmlspecialchars($user['id_rang'])."</td>
                            <td>".htmlspecialchars($user['langage'])."</td>
                            <td>".htmlspecialchars($user['description'])."</td>
                            <td>".htmlspecialchars($user['utilisation_principale'])."</td>" 
                        ?>
                    
                    </tr>
                <?php endforeach; ?>  
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>