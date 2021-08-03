tasklist /nh /fi "imagename eq xampp-control.exe" | find /i "xampp-control.exe" > nul || (start C:\xampp\xampp-control.exe)
start http://localhost/kipa/controller/login_con.php