<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Kullanıcı Şifresi</title>
</head>
<body>
<h1>Merhaba {{ $user->name }},</h1>

<p>Sisteme yeni bir kullanıcı olarak kaydoldunuz.</p>

<p>Şifreniz: {{ $user->password }}</p>

<p>Lütfen bu şifreyi güvenli bir yerde saklayın.</p>

<p>Teşekkürler!</p>
</body>
</html>
