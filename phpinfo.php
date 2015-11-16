<?

session_start();

$_SESSION['key'] = 'val';
print_r(111);
setcookie('a', uniqid(), tim()+3600, '/', 'chromev.lab:8099');
echo uniqid('---');

if ( $_GET['a'] ) {
    print_r($_SESSION);
	}
