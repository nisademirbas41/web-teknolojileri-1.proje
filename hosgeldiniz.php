<<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center py-5">
    <div class="container card p-5 shadow">
        <h1 class="display-4 text-success">Hoşgeldiniz</h1>
        <p class="lead">Giriş Başarıyla Gerçekleşti.</p>
        <hr>
        <h3>Öğrenci Numarası: <?php echo htmlspecialchars($_GET['no']); ?></h3>
        <a href="index.html" class="btn btn-dark mt-4">Ana Sayfaya Dön</a>
    </div>
</body>
</html>