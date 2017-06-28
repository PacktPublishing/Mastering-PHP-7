// INSECURE WAY (bare passwords in a command)
mysql -uroot -p'mL08e!Tq'
mysql --user=root --password='mL08e!Tq'

// SECURE WAY (triggers "enter password" prompt)
mysql -uroot -p
mysql --user=root --password
