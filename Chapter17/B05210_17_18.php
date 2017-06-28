<?php

namespace Deployer;
require 'recipe/common.php';

set('repository', 'https://github.com/ajzele/MPHP7-CH16.git');

server('production', '45.76.88.214')
    ->user('root')
    ->identityFile()
    ->set('deploy_path', '/var/www/MPHP7')
    ->set('branch', 'master')
    ->stage('production');

desc('Symlink html directory');
task('web:symlink', function () {
    run('ln -sf /var/www/MPHP7/current /var/www/html');
});

desc('Restart Apache service');
task('apache:restart', function () {
    run('service apache2 restart');
});

after('deploy:symlink', 'web:symlink');
after('web:symlink', 'apache:restart');

desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    //'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

after('deploy:failed', 'deploy:unlock');
