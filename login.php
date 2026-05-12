<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Paneli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 card p-4 shadow">
                <h3 class="text-center mb-4">Giriş Yap</h3>
                <form action="kontrol.php" method="POST">
                    <div class="mb-3">
                        <label>E-posta</label>
                        <input type="email" name="email" class="form-control" required placeholder="b2412100001@sakarya.edu.tr">
                    </div>
                    <div class="mb-3">
                        <label>Şifre</label>
                        <input type="password" name="sifre" class="form-control" required placeholder="Örn: b2412100001">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>