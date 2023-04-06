<?
If($UID) //если переменной нет, выводим форму
{?>
<form action="/" method="post">

Логин: <input type="text" name="login" />
Пароль: <input type="password" name="password" />

<input type="submit" value="Войти" name="log_in" />
</form>
<?}
?>