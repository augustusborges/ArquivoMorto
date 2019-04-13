<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
Ola, <?php echo $_SESSION['user_name']; ?>. Bem vido ao sistema.


<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<br/>
<a href="../index.php?logout">Fazer Logout</a>
