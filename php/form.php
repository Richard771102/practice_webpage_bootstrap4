<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <p>聯絡我</p>
        <form action="contactform.php" method="post" class="contact-form">
            <input type="text" name="name" placeholder="姓名">
            <input type="text" name="mail" placeholder="Email">
            <input type="text" name="subject" placeholder="標題">
            <textarea name="message" placeholder="留言"></textarea>
            <button type="submit" name="submit">送出</button>
        </form>
    </main>
</body>
</html>