<phpunit bootstrap="autoload.php">
<testsuites>
<testsuite name="foggyline">
<directory>src/Foggyline/*/Test/Unit/*</directory>
</testsuite>
</testsuites>
<filter>
<whitelist>
<directory>src/Foggyline/</directory>
<exclude>
<file>src/config.php</file>
<file>src/auth.php</file>
<directory>src/Foggyline/*/Test/</directory>
</exclude>
</whitelist>
<logging>
<log type="coverage-html" target="log/report" lowUpperBound="50" highLowerBound="80"/>
</logging>
</filter>
</phpunit>
